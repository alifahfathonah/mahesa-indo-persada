<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('backend.login');
    }

    public function login(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'uid' => 'required',
            'kata_sandi' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Login Gagal', implode('<br>', $validator->messages()->all()))->toHtml()->autoClose(5000);
            return redirect()->back()->withInput();
        }

        if (Auth::attempt(['pengguna_id' => $req->uid, 'password' => $req->kata_sandi])) {
            return redirect()->intended('dashboard');
        }

        alert()->error('Login Gagal','User ID atau Kata Sandi salah');
        return redirect()->back()->withInput();
    }

    private function username()
    {
        return 'pengguna_id';
    }
}
