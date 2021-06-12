<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AuthAdmin extends Controller
{
    public function adminLogin(){
        return view('auth.adminLogin');
    }

    public function checkAdminLogin(Request $request)
    {
        

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email'));
    }
}
