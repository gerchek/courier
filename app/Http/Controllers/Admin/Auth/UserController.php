<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        // dd($id);
        return view('admin.pages.user.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// dd($request->type);

        // try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'type' => 'required',
            ]);
            
            // If the validation passed, continue with your logic
            
        //     dd('Validation passed!');
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     dd($e->errors());
        // }


    
        
        $postData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ];
        // dd($postData);
        

        try {
            // Your database insertion code here
            User::create($postData);
            return redirect()->route('user.index');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        // dd($faq->text);
        return view('admin.pages.user.update', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = User::find($id);
        // try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'type' => 'required',
            ]);

        //     dd('Validation passed!');
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     dd($e->errors());
        // }

        try {

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->type = $request->type;
            
            $data->save();
            // return redirect('/backend');
            return redirect()->route('user.index');

            // ----------------------------------------------------------


        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $user = User::find($id);

        $user->delete();

        // return redirect('/backend');
        return redirect()->route('user.index');
    }
}
