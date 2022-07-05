<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Foundation\Lib\Pages;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function getPageName($pageName)
    {
        if (array_key_exists($pageName, Pages::$current)) {
            return view('frontend.'.$pageName);
        }

        return redirect()->route('home');

    }

}
