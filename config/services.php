<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect'      => 'http://verde.tools/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => 'http://verde.tools/auth/twitter/callback',
    ],

    'linkedin' => [
        'client_id'     => env('LINKEDIN_ID'),
        'client_secret' => env('LINKEDIN_SECRET'),
        'redirect'      => 'http://verde.tools/auth/linkedin/callback',
    ],

    'google' => [
        'client_id'     => env('GOOGLE_ID'),
        'client_secret' => env('GOOGLE_SECRET'),
        'redirect'      => 'http://verde.tools/auth/google/callback',
    ],

    'github' => [
        'client_id'     => env('GITHUB_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect'      => 'http://verde.tools/auth/github/callback',
    ],

    'bitbucket' => [
        'client_id'     => env('BITBUCKET_ID'),
        'client_secret' => env('BITBUCKET_SECRET'),
        'redirect'      => 'http://verde.tools/auth/bitbucket/callback',
    ],

];
