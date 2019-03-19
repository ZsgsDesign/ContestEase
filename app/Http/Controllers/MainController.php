<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function account(Request $request)
    {
        return view('account', [
            'page_title'=>"登录",
            'site_title'=>"新生杯",
            'navigation' => "Account",
        ]);
    }
    public function home(Request $request)
    {
        return view('home', [
                'page_title'=>"首页",
                'site_title'=>"新生杯",
                'navigation' => "Home",
            ]);
    }
}
