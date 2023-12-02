<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //return view('admin.pages.index');

    function backend()
    {
        return view('admin.pages.index');
        // return redirect()->route('backend');
    }


    function registration()
    {
        return view('admin.auth.register');
    }

    function login()
    {
        return view('admin.auth.login');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();
        dd($data);

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->route('login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
        // dd($credentials);

        if(Auth::attempt($credentials))
        {
            $type = Auth::user();
            // dd($type->type);
            if ( $type['type'] == "admin" || $type['type'] == "support" || $type['type'] == "users" ) {
                return redirect()->route('backend');
                dd("hi");
            }

            return redirect()->route('login')->with('success', 'Login details are not valid');
            
        }
        return redirect()->route('login')->with('success', 'Login details are not valid');

    }

    function dashboard()
    {
        if(Auth::check())
        {
            return redirect()->route('backend');
        }

        return redirect()->route('login');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
