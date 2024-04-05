<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    //todo: admin login form
    public function login_form()
    {
        return view('admin.login-form');
    }

    //todo: admin login functionality
    public function login_functionality(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }else{
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    //todo: admin logout functionality
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }
}
