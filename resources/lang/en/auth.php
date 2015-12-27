<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

	// Blog related strings
    'login' => [
	    'title'         => 'Please sign in',
	    'email'         => [
		    'label'         => 'E-mail adress',
		    'placeholder' => 'example@example.com',
	    ],
	    'password'      => [
		    'label'         => 'Password',
		    'placeholder'   => 'Password',
	    ],
	    'remember_me'   => [
		    'label'         => 'Remember me'
	    ],
	    'submit_button' => [
		    'value'         => 'Login',
	    ],
	    'forgot-password' => [
		    'value' => 'Lost your password?',
		    'title' => 'Request a password reset link',
	    ]
    ],
    'request-pass-reset' => [
	    'title' => 'Request a password reset link',
	    'email' => [
		    'label' => 'E-mail adress',
		    'placeholder' => 'example@example.com',
	    ],
	    'submit_button' => [
		    'value' => 'Send password reset link',
	    ]
    ],
    'reset-password' => [
	    'title' => 'Reset password',
	    'email' => [
		    'label' => 'E-mail adress',
		    'placeholder' => 'example@example.com',
	    ],
	    'password' => [
		    'label' => 'Password',
		    'placeholder' => 'Password',
	    ],
	    'password_confirmation' => [
		    'label' => 'Confirm password',
		    'placeholder' => 'Retype password',
	    ],
	    'submit_button' => [
		    'value' => 'Reset password',
	    ],
    ],


];
