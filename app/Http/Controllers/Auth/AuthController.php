<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use App\Invitation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Laravel\Socialite\Facades\Socialite;
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
    private $defaultRoleSlug = 'guest';

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
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if(config('auth.method') == 'confirm' || config('auth.method') == 'confirm_role') {
            $this->create($request->all());
            return redirect($this->loginPath())
                ->with('status','Please check your inbox and follow the steps in the confirmation email to finish your registration.');
        }

        Auth::login($this->create($request->all()));

        return redirect($this->redirectPath());
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request))
            return $this->sendLockoutResponse($request);

        $credentials = $this->getCredentials($request);

        if(config('auth.method') == 'confirm' || config('auth.method') == 'confirm_role')
            $credentials['confirmed'] = '1';

        if (Auth::attempt($credentials, $request->has('remember')))
            return $this->handleUserWasAuthenticated($request, $throttles);

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles)
            $this->incrementLoginAttempts($request);

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
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
                return $this->checkInvitation($data);
                break;
            case 'social':
            case 'social_role':
                return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required_without:provider_id|email|max:255|unique:users',
                    'password' => 'required_without:provider,provider_id|confirmed|min:6',
                    'provider' => 'required_without:email|in:facebook,google,twitter,bitbucket,github,linkedin',
                    'provider_id' => 'required_without:email',
                ]);
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
     * Check provided invitation data and force validation error if data is not valid.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function checkInvitation(array $data)
    {
        $rules = [
            'name' => 'required|max:255',
            'keyword' => 'required',
            'email' => 'required|email|max:255|unique:users|exists:invitations',
            'password' => 'required|confirmed|min:6',
        ];
        //if provided invitation data is invalid, force validation errors
        $invitation = Invitation::where('email',$data['email'])->first();
        if($invitation->expired) {
            $data['invitation'] = '1';
            $rules['invitation'] = 'unique:invitations,expired';
        }
        if(bcrypt($data['keyword']) != $invitation->keyword) {
            $data['keyword'] = '0';
            $rules['keyword'] = 'required|in:1';
        }
        $validator = Validator::make($data, $rules);
        
        return $validator;
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
            case 'confirm':
                $confirmationCode = str_random(30);
                Mail::send('emails.verify', ['confirmationCode'=>$confirmationCode], function($m) use ($data) {
                    $m->to($data['email'], $data['name'])->subject('Verify your email address');
                });
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'confirmation_code' => $confirmationCode,
                ]);
                break;
            case 'confirm_role':
                $confirmationCode = str_random(30);
                Mail::send('email.verify', $confirmationCode, function($m) use ($data) {
                    $m->to($data['email'], $data['name'])->subject('Verify your email address');
                });
                $newUser = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'confirmation_code' => $confirmationCode,
                ]);
                $newUser->assignRole(Role::where('slug',$this->getDefaultRole())->first()->id);
                return $newUser;
                break;
            case 'default_role':
                $newUser = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
                $newUser->assignRole(Role::where('slug',$this->getDefaultRole())->first()->id);
                return $newUser;
                break;
            default: //default registration method
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
                break;
        }
    }

    public function verifyEmail(string $confirmationCode)
    {
        if(!$confirmationCode)
            return redirect($this->loginPath())->withErrors(['verify'=>'The confirmation code is invalid.']);

        $user = User::where('confirmation_code',$confirmationCode)->first();
        if(!$user)
            return redirect($this->loginPath())->withErrors(['verify'=>'The confirmation code is invalid.']);

        $user->confirmed = true;
        $user->confirmation_code = null;
        $user->save();

        return redirect($this->loginPath())->with(['status'=>'You have successfully verified your account.']);
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

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function githubRedirectToProvider()
    {
        return Socialite::driver('github')->scopes(['user:email'])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function githubHandleProviderCallback()
    {
        /*
         * If 'cURL error 60' appears:
         * Download pem file at http://curl.haxx.se/ca/cacert.pem
         * or https://gist.github.com/VersatilityWerks/5719158/download
         * And set php.ini to curl.cainfo = "[pathtothisfile]\cacert.pem"
         */
        $user = Socialite::driver('github')->user();
        return $this->socialOAuthLogin($user,'github');
    }

    /**
     * Redirect the user to the Linkedin authentication page.
     *
     * @return Response
     */
    public function linkedinRedirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from Linkedin.
     *
     * @return Response
     */
    public function linkedinHandleProviderCallback()
    {
        $user = Socialite::driver('linkedin')->user();
        return $this->socialOAuthLogin($user,'linkedin');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function facebookRedirectToProvider()
    {
        return Socialite::driver('facebook')->scopes(['email'])->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function facebookHandleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return $this->socialOAuthLogin($user,'facebook');
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function twitterRedirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function twitterHandleProviderCallback()
    {
        /*
         * Typical errors:
         * 1) Despite settings and verifying an email account in twitter,
         * a null email is returned, possibly triggering an email validation error.
         */
        $user = Socialite::driver('twitter')->user();
        return $this->socialOAuthLogin($user,'twitter');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function googleRedirectToProvider()
    {
        $scopes = [
            'https://www.googleapis.com/auth/plus.me',
            'https://www.googleapis.com/auth/plus.profile.emails.read',
        ];
        return Socialite::driver('google')->scopes($scopes)->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function googleHandleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        return $this->socialOAuthLogin($user,'google');
    }

    /**
     * Redirect the user to the Bitbucket authentication page.
     *
     * @return Response
     */
    public function bitbucketRedirectToProvider()
    {
        return Socialite::driver('bitbucket')->redirect();
    }

    /**
     * Obtain the user information from Bitbucket.
     *
     * @return Response
     */
    public function bitbucketHandleProviderCallback()
    {
        /*
         * Typical errors:
         * 1) Despite settings and verifying an email account in Bitbucket,
         * a null email is returned, possibly triggering an email validation error.
         * 2) If an error '...when retreiving token credentials' appear, get sure
         * to tick the following permission in the Bitbucket consumer app configuration:
         *    - Email or User READ
         *    - Repositories READ <<< !!!
         */
        $user = Socialite::driver('bitbucket')->user();
        return $this->socialOAuthLogin($user,'bitbucket');
    }

    private function socialOAuthLogin($user, $provider)
    {
        // OAuth One Providers
        // $token = $user->token;
        // $tokenSecret = $user->tokenSecret;
        // OAuth Two Providers
        // $token = $user->token;

        $data = [
            'name' => (!empty($user->getName())) ? $user->getName() : $user->getNickname(),
            'email' => $user->getEmail(),
            'confirmed' => true,
            'provider' => $provider,
            'provider_id' => $user->getId()
        ];

        if(!($authUser = User::where('provider',$provider)->where('provider_id',$user->getId())->first())) {
            $validator = $this->validator($data);
            if($validator->fails())
                return redirect($this->loginPath())->withErrors($validator);
            $authUser = User::create($data);
            if(config('auth.method')=='social_role')
                $authUser->assignRole(Role::where('slug',$this->getDefaultRole())->first()->id);
        }
        
        if(Auth::login($authUser, $remember = true))
            return redirect($this->redirectPath());
        return redirect($this->loginPath())
            ->withErrors([$this->loginUsername() => $this->getFailedLoginMessage(),]);
    }
}
