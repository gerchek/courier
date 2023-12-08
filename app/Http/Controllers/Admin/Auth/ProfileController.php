<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Hash;

class ProfileController extends Controller
{
    //
    function profile()
    {
        return view('admin.auth.profile');
    }

    function profile_update()
    {
        return view('admin.auth.profile_update');
    }


    public function validate_profile_update(Request $request,$id)
    {
        // Validate the updated data
        // dd($request->photo);
        $validatedData = $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|',
            'password'     =>   'required'
        ]);

        $user = User::findOrFail($id);


        if (!is_null($request->photo)) {
            # code...
            $photo = time() . '_' . $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images/user', $photo);
            $photo_path = 'public/images/user/' . $user->photo;
            Storage::delete($photo_path);
        }elseif(is_null($request->photo)){
            $photo = $user->photo;
        }

        // dd($user);

        // Update the post with the new data
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->photo = $photo;
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        

        // Redirect back to the updated post
        return redirect('/backend');
    }
}
