<?php

namespace App\Http\Controllers\Blog;

use App\User;
use App\Http\Requests\Blog\ProfileUpdateRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Auth\Guard;

class ProfileController extends AdminController
{

    /**
     * This is the User model, not any particular user
     *
     * @var \App\User
     */
    protected $user;

    /**
     * @param \App\User $user
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct( User $user, Guard $auth ) {
        parent::__construct();

        $this->middleware('App\Http\Middleware\Blog\IsOwner', ['only', 'edit']);

        $this->user = $user;
    }

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $data = [
            'user' => $this->user->findBySlugOrFail($slug),
        ];

        return view('blog-admin.profiles.form', $data);
    }

    ///////////////////////////////////////////////////////////////////////////
    // CRUD methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param string $slug
     * @param \App\Http\Requests\Blog\ProfileUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($slug, ProfileUpdateRequest $request)
    {
        $user = $this->user->findBySlugOrFail($slug);
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->has('newpassword')) {
            $user->password = bcrypt($request->newpassword);
        }

        if ($request->hasFile('profilepicture')) {
            $this->handleImage($request->file('profilepicture'), $user);
        }

        $user->save();

        session()->flash('notify', [
	        'success',
	        trans('notify.success', [
		        'model' => 'User',
		        'name' => $user->fullName,
		        'action' =>'updated',
	        ])
        ]);

        return redirect()->route('admin.dashboard');
    }

    // Helper methods

    /**
     * @param $image
     * @param $user
     */
    private function handleImage($image, $user)
    {
        $filename = $this->generateFilename();
        $path = $this->resizeAndSaveProfilePicture($image, $filename);

        if (isset($user->profilepicture)) {
            $this->removeOldPicture($user->profilepicture);
        }

        $user->profilepicture = $path;
    }

    /**
     * @return string
     */
    private function generateFilename()
    {
        return time().'-'.$this->auth_user->username.'-profilepicture';
    }

    /**
     * @param $image
     * @param string $filename
     * @return string
     */
    private function resizeAndSaveProfilePicture($image, $filename)
    {
        $extention = $image->getClientOriginalExtension();
        $fullpath = $this->config->upload_paths->profiles->profilepictures.$filename.'.'.$extention;

        Image::make($image->getRealPath())
            ->resize(
	            $this->config->image_sizes->profilepictures[0],
	            $this->config->image_sizes->profilepictures[1],
	            function($constraint) {
	                $constraint->aspectRatio();
	                $constraint->upsize();
                })
	        ->save($fullpath);

        return $fullpath;
    }

    /**
     * @param $oldPicture
     */
    private function removeOldPicture($oldPicture)
    {
        if (file_exists($oldPicture)) {
            unlink($oldPicture);
        }
    }

}