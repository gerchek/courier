<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class CourierAuthController extends Controller
{

    function login()
    {
        return view('admin.auth.loginCourier');
    }

    function validate_login(Request $request)
    {

        // dd($request);
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

            // Check if the email exists in the Courier model
        $courier = Courier::where('email', $request->email)->first();

        if ($courier) {
            // If the email exists, validate the password
            if (password_verify($request->password, $courier->password)) {
                // Password is correct, redirect to the desired page
                return redirect()->route('backend');
            }
        }

        // If the email or password is incorrect, redirect back
        return redirect()->route('login_courier');
    
    }


    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
