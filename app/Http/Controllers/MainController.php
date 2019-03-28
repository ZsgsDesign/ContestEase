<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home\Notice;
use App\Home\Problem;
use App\Home\Contest;

class MainController extends Controller
{
    public function account(Request $request)
    {
        /*return view('account', [
            'page_title'=>"登录",
            'site_title'=>"新生杯",
            'navigation' => "Account",
        ]);*/
        return Auth::check() ? redirect("/home") : redirect("/account");
    }
    public function home(Request $request)
    {
        $Notice = new Notice();
        $notice = $Notice -> getNotice();
        $Problem = new Problem();
        $problem = $Problem -> getProblem(2);//TODO
        $Contest = new Contest();
        $remainingtime = $Contest -> remainingTime();
        return view('home', [
                'page_title'=>"首页",
                'site_title'=>"新生杯",
                'navigation' => "Home",
                'notice' =>  $notice,
                'problem' => $problem,
                'remaining_time' => $remainingtime
        ]);
    }
}
