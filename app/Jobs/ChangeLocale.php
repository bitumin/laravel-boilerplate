<?php

namespace App\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;

class ChangeLocale extends Job implements SelfHandling
{
    protected $lang;

    public function __construct($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Change the app locale.
     *
     * @return void
     */
    public function handle()
    {
        session()->put('locale',$this->lang);
    }
}