<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home\Notice;
use App\Home\Problem;
use App\Home\Contest;
use Auth;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $Notice = new Notice();
        $notice = $Notice -> getNotice();
        $Problem = new Problem();
        $problem = $Problem -> getProblembyPid(1) -> first();
        $problems = $Problem -> getProblemAll();
        $Contest = new Contest();
        $remainingtime = $Contest -> remainingTime();
        return view('home', [
                'page_title'=>"首页",
                'site_title'=>"新生杯",
                'navigation' => "Home",
                'notice' =>  $notice,
                'problem' => $problem,
                'problems' => $problems,
                'remaining_time' => $remainingtime,
        ]);
    }

    public function account(Request $request)
    {
        return Auth::check() ? redirect("/") : view("account",['page_title'=>"登录",'site_title'=>"新生杯",'navigation' => "Account"]);
    }

    public function problem(Request $request)
    {
        $pid = $request->path();
        $Notice = new Notice();
        $notice = $Notice -> getNotice();
        $Problem = new Problem();
        if(!($Problem -> existPid($pid)))
        {
            return abort(404);
        }
        $problem = $Problem -> getProblembyPid($pid) -> first();
        $problems = $Problem -> getProblemAll();
        $Contest = new Contest();
        $remainingtime = $Contest -> remainingTime();
        return view('home',[
            'page_title'=>"首页",
            'site_title'=>"新生杯",
            'navigation' => "Home",
            'notice' =>  $notice,
            'problem' => $problem,
            'problems' => $problems,
            'remaining_time' => $remainingtime,
        ]);
    }
}
