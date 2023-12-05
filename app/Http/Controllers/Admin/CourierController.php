<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;
use App\Models\User;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;



class CourierController extends Controller
{

    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Auth::getDefaultDriver());
        $user = Auth::user();
        // dd($user);

        $couriers = Courier::all();

        if($user->type == "users"){
            $couriers = $couriers->filter(function ($courier) use ($user){
                return in_array($user->id, $courier->used);
            });
        }

        // dd($couriers);
        
        return view('admin.pages.courier.list', ['couriers' => $couriers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();

        return view('admin.pages.courier.create',['users' => $users]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->used);


        $validation = Validator::make( $request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone_number' => 'required',
            'salary' => 'required',
            'used' => 'required',
            'status' => 'required',
            'payment_method' => 'required',
            'pay_date' => 'required',
            
        ]);
        
        if ( $validation->fails() ) {
            return \Redirect::back()->withInput()->withErrors( $validation->messages() );
        }

        if (!is_null($request->used)) {
            # code...
            $used = explode(",", $request->used); 
        }else{
            $used = [];
        }
        // dd($used);
        
        
        Courier::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
            'salary' => $request->salary,
            'used' => $used,
            'status' => $request->status,
            'payment_method' => $request->payment_method,
            'pay_date' => $request->pay_date,
        ]);

        return redirect()->route('courier.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $courier = Courier::find($id);
        $users = User::all();

        // dd($courier->used);
        return view('admin.pages.courier.update', ['courier' => $courier,'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->used);
        $data = Courier::find($id);

        $validation = Validator::make( $request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone_number' => 'required',
            'salary' => 'required',
            'used' => 'required',
            'status' => 'required',
            'payment_method' => 'required',
            'pay_date' => 'required',
        ]);

        if ( $validation->fails() ) {
            // dd($validation->messages());
            return \Redirect::back()->withInput()->withErrors( $validation->messages() );
        }

        if (!is_null($request->used)) {
            # code...
            $used = explode(",", $request->used); 
            
        }elseif(is_null($request->used)){
            $used = $data->used;
        }

        try {

            $data->name = $request->name;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->password = Hash::make($request['password']);
            $data->address = $request->address;
            $data->city = $request->city;
            $data->state = $request->state;
            $data->phone_number = $request->phone_number;
            $data->salary = $request->salary;
            $data->used = $used;
            $data->status = $request->status;
            $data->payment_method = $request->payment_method;
            $data->pay_date = $request->pay_date;
            

            $data->save();
            return redirect()->route('courier.index');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $courier = Courier::find($id);

        // $user->tours()->detach();
        // $user->transfers()->detach();

        $courier->delete();

        // return redirect('/backend');
        return redirect()->route('courier.index');
    }
}
