<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocaleController extends Controller
{
    /**
     * Change language/app locale.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage(Request $request)
    {
        $availableLanguages = implode(',', config('app.languages'));

        $validator = Validator::make(
            ['locale'=>$request->input('locale')],
            ['locale'=>'in:'.$availableLanguages]
        );
        $newLocale = ($validator->passes()) ? $request->input('locale') : Request::getPreferredLanguage(config('app.languages'));
        $changeLocale = new ChangeLocale($newLocale);
        $this->dispatch($changeLocale);

        return redirect()->back();
    }

    /**
     * Change language/app locale from the backend administrator interface.
     * Overrides the administrator controller function with the same name.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLocale($newLocale)
    {
        if(in_array($newLocale, config('administrator.locales'))) {
            $changeLocale = new ChangeLocale($newLocale);
            $this->dispatch($changeLocale);
        }

        return redirect()->back();
    }
}
