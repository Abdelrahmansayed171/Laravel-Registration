<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change(){
        if (App::isLocale('en')) {
            session()->put('locale', 'ar');
        }
        else{
            session()->put('locale', 'en');
        }
    
        return redirect()->back();
    }
}
