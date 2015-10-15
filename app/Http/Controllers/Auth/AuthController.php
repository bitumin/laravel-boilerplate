<?php

namespace App\Http\Controllers\Auth;

use App\Invitation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use \Caffeinated\Shinobi\Models\Role;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/dashboard';
    protected $redirectAfterLogout = '/auth/login';
    protected $loginPath = '/auth/login';

    protected $defaultRoleSlug = 'guest';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        switch(config('auth.method')) {
            case 'invitation':
                $validator = Validator::make($data, [
                    'name' => 'required|max:255',
                    'keyword' => 'required',
                    'email' => 'required|email|max:255|exists:invitations',
                    'password' => 'required|confirmed|min:6',
                ]);
                if($validator->passes() && !$this->checkInvitation($data))
                    return Validator::make([], ['keyword' => 'exists:invitations']);
                return $validator;
                break;
            default: //for default, default_role, confirm and confirm_role registration methods
                return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
                ]);
                break;
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        switch(config('auth.method')) {
            case 'invitation':
                $newUser = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
                $invitation = Invitation::where('email',$data['email'])->first();
                $newUser->assignRole($invitation->id);
                $invitation->expired = true;
                $invitation->save();
                return $newUser;
                break;
            case 'default_role':
            case 'confirm_role':
                $newUser = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
                $newUser->assignRole(Role::where('slug',$this->getDefaultRole())->first()->id);
                return $newUser;
                break;
            default: //for default and confirm registration methods
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
                break;
        }
    }

    protected function checkInvitation(array $data)
    {
        $invitation = Invitation::where('email',$data['email'])->first();
        $invitationKeyword = $invitation->keyword;
        $providedKeyword = bcrypt($data['keyword']);
        if(!$invitation->expired && ($providedKeyword == $invitationKeyword))
            return true;
        return false;
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmail()
    {
        return view('auth.email');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('status', trans($response));
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
        return redirect()->back();
    }

    /**
     * Get the e-mail subject line to be used for the reset link email.
     *
     * @return string
     */
    protected function getEmailSubject()
    {
        return isset($this->subject) ? $this->subject : 'Your Password Reset Link';
    }

    /**
     * Get the default role to be assigned to the newly registered users.
     *
     * @return string
     */
    protected function getDefaultRole()
    {
        return isset($this->defaultRoleSlug) ? $this->defaultRoleSlug : 'guest';
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function getReset($token = null)
    {
        if(is_null($token))
            throw new NotFoundHttpException;

        return view('auth.reset')->with('token', $token);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postReset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath());
            default:
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
        }
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);
        $user->save();

        Auth::login($user);
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
            return $this->redirectPath;

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
