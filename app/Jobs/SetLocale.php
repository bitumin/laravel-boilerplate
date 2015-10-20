<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\Bus\SelfHandling;

class SetLocale extends Job implements SelfHandling
{
    protected $languages;

    public function __construct()
    {
        $this->languages = config('app.languages');
    }

    public function handle()
    {
        if(!session()->has('locale'))
            session()->put('locale', \Request::getPreferredLanguage($this->languages));

        app()->setLocale(session('locale'));
        Carbon::setLocale(session('locale'));
    }
}