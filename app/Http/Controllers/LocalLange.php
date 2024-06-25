<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalLange extends Controller
{
    public function setLocale($lang){
        if(in_array($lang,['en','kh'])){
            App::setLocale($lang);
            Session::put('locale', $lang);
        }

        return back();
    }
}
