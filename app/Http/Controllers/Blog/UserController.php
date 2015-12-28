<?php

namespace App\Http\Controllers\Blog;

use App\Role;
use App\Http\Requests\Blog\UserRequest;
use App\User;

class UserController extends AdminController
{

    /**
     * @var \App\User
     */
    protected $user;

    /**
     * @var \App\Role
     */
    protected $role;

	/**
	 * @var mixed
	 */
	protected $config;

    /**
     * @param \App\User $user
     * @param \App\Role $role
     */
    public function __construct(User $user, Role $role) {
	    parent::__construct();

        $this->user = $user;
        $this->role = $role;
	    $this->config = json_decode(json_encode(config('blogify')));
    }

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param bool $trashed
     * @return \Illuminate\View\View
     */
    public function index($trashed = false)
    {
        $data = [
            'users' => (! $trashed) ?
                    $this->user
                        ->orderBy('lastname', 'ASC')
                        ->paginate($this->config->items_per_page)
                    :
                    $this->user
                        ->onlyTrashed()
                        ->orderBy('name', 'ASC')
                        ->paginate($this->config->items_per_page),
            'trashed' => $trashed,
        ];

        return view('blog-admin.users.index', $data);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $data = [
            'roles' => $this->role->all(),
        ];

        return view('blog-admin.users.form', $data);
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $data = [
            'roles' => $this->role->byBloggerRole()->get(),
            'user'  => $this->user->findBySlugOrFail($slug),
        ];

        return view('blog-admin.users.form', $data);
    }

    ///////////////////////////////////////////////////////////////////////////
    // CRUD methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param \App\Http\Requests\Blog\UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $data = $this->storeOrUpdateUser($request);
        $user = $data['user'];
        $mail_data = [
            'user'      => $data['user'],
            'password'  => $data['password'],
        ];

	    \Mail::send('blog-mails.password', $mail_data, function($message) use($data) {
		    $message->to(
			    $data['user']->email,
			    $data['user']->firstname.(empty($data['user']->lastname)) ? '' : ' '.$data['user']->lastname
		    )->subject('Welcome!');
	    });

        session()->flash('notify', ['success', trans('notify.success', [
	        'model' => 'User', 'name' => $user->fullName, 'action' =>'created'
        ])]);

        return redirect()->route('admin.users.index');
    }

    /**
     * @param \App\Http\Requests\Blog\UserRequest $request
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, $slug)
    {
        $data = $this->storeOrUpdateUser($request, $slug);
        $user = $data['user'];
        $message = trans('notify.success', [
            'model' => 'User',
            'name' => $user->firstname.' '.$user->name,
            'action' =>'updated'
        ]);

        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.users.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        $user = $this->user->findBySlugOrFail($slug);
        $user->delete();

        session()->flash('notify', ['success', $message = trans('notify.success', [
	        'model' => 'User', 'name' => $user->fullName, 'action' =>'deleted'
        ])]);

        return redirect()->route('admin.users.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($slug)
    {
        $user = $this->user->withTrashed()->findBySlugOrFail($slug);
        $user->restore();

        session()->flash('notify', ['success', trans('notify.success', [
	        'model' => 'Post', 'name' => $user->fullName, 'action' =>'restored'
        ])]);

        return redirect()->route('admin.users.index');
    }

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param \App\Http\Requests\Blog\UserRequest $data
     * @param string $slug
     * @return array
     */
    private function storeOrUpdateUser($data, $slug = null)
    {
        $password = null;

        if (! isset($slug)) {
            $user = new User;
            $user->name = $data->firstname.(empty($data->lastname)) ? '' : ' '.$data->lastname;
            $user->username = $data->username;
            $user->password = bcrypt($data->password);
            $user->firstname = $data->firstname;
	        $user->lastname = $data->lastname;
            $user->email = $data->email;
        } else {
            $user = $this->user->findBySlugOrFail($slug);
        }

	    $user->save();

	    $user->assignRole($this->role->whereSlug($data->role)->pluck('id'));

        return ['user' => $user, 'password' => $password];
    }

}