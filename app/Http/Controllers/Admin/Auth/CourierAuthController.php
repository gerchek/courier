<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    
        $credentials = $request->only('email', 'password');

        // dd(Auth::guard('courier')->attempt($credentials));
    
        if(Auth::guard('courier')->attempt($credentials))
        {
            $user_courier = Auth::guard('courier')->user();

            // Update the fields in the Courier model
            $user_courier->ip_last_login = request()->ip(); // Assuming you want to store the user's IP address
            $user_courier->last_entry_date = Carbon::now();
            
            // Save the changes to the model
            $user_courier->save();
        
        
            return redirect()->route('backend');
        }
    
        return redirect()->route('login_courier')->with('success', 'Login details are not valid');
    }


    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
