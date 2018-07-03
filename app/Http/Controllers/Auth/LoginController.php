<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        foreach ($this->guard()->user()->role as $role) {
            // echo $role;
            //die();
            $cek = $role->pivot;
            $cekrole = $cek->role_id;
           
                if ($cekrole == "1"){
                    return redirect('superadmin');
                }elseif ($cekrole == "2"){
                    return redirect('administrator');
                }elseif ($cekrole == "3"){
                    return redirect('adminbengkel');
                }elseif ($cekrole == "4"){
                    return redirect('direksi');
                }elseif ($cekrole == "5"){
                    return redirect('other');
                }
        } return redirect('');
        
    }
}