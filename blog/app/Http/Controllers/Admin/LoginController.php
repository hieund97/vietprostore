<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirecto = '/admin';
    
    public function showLoginForm(){
        return view('admin.auth.login');
    }

    public function logout(Request $request)
    {
        auth()->guard()->logout();

        session()->invalidate();

        return redirect('/admin/login');
    }

}
