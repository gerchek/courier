<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class CourierController extends Controller
{

    function login()
    {
        return view('admin.auth.login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);
    
        $credentials = $request->only('username', 'password');
    
        if(Auth::guard('courier')->attempt($credentials))
        {
            return redirect()->route('backend');
        }
    
        return redirect()->route('login')->with('success', 'Login details are not valid');
    }


    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
