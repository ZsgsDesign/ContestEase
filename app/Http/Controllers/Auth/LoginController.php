<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'sid';
    }

    public function showLoginForm()
    {
        return view("auth.login", [
            'page_title'=>"登录",
            'site_title'=>"新生杯",
            'navigation' => "Account"
        ]);
    }

    public function login()
    {
        $this->validate(request(),[
            "sid" => "required|string|min:9|max:9",
            "password" => "required|string|min:6|max:20"
        ]);
        $user = request(["sid","password"]);
         if (Auth::attempt($user,true)) {
             return redirect('/')
             ->with('message', '登录成功！');
         } else {
             return redirect('/account')
                   ->with('message', '用户名密码不正确')
                   ->withInput();
         }
    }
}
