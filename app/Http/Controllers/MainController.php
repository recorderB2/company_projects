<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function lang($lang)
    {
        Session::put('lang', $lang);
        return back();
    }
}
