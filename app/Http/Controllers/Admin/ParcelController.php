<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\User;
use App\Models\Courier;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;



class ParcelController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        if($user->type == "users"){
            $parcels = Parcel::where('user_id',$user->id)->get();
        }else{
            $parcels = Parcel::all();
        }

        return view('admin.pages.parcel.list', ['parcels' => $parcels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();
        $couriers = Courier::all();

        return view('admin.pages.parcel.create',['users' => $users,'couriers' => $couriers]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());


        $validation = Validator::make( $request->all(), [
            'user_id' => 'required',
            'courier_id' => 'required',
    
            'name' => 'required',
            'description' => 'required',
            'shipping_company' => 'required',
            'tracking_number' => 'required',
            'file' => 'required',
            'status' => 'required',
            
        ]);
        
        if ( $validation->fails() ) {
            return \Redirect::back()->withInput()->withErrors( $validation->messages() );
        }

        $file = time() . '_' . $request->file->getClientOriginalName();
        $request->file->storeAs('public/parcels/files', $file);
        
        
        Parcel::create([
            'user_id' => $request->user_id,
            'courier_id' => $request->courier_id,
    
            'name' => $request->name,
            'description' => $request->description,
            'shipping_company' => $request->shipping_company,
            'tracking_number' => $request->tracking_number,
            'file' => $file,
            'status' => $request->status,
        ]);

        return redirect()->route('parcel.index');
        
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
        $parcel = Parcel::find($id);
        $users = User::all();
        $couriers = Courier::all();


        // dd($parcel);
        return view('admin.pages.parcel.update', ['parcel' => $parcel,'users' => $users,'couriers' => $couriers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->file);
        $data = Parcel::find($id);

        $validation = Validator::make( $request->all(), [
            'user_id' => 'required',
            'courier_id' => 'required',
    
            'name' => 'required',
            'description' => 'required',
            'shipping_company' => 'required',
            'tracking_number' => 'required',
            'status' => 'required',
        ]);

        if ( $validation->fails() ) {
            // dd($validation->messages());
            return \Redirect::back()->withInput()->withErrors( $validation->messages() );
        }

        if (!is_null($request->file)) {
            # code...
            $file = time() . '_' . $request->file->getClientOriginalName();
            $request->file->storeAs('public/parcels/files', $file);
            $file_path = 'public/parcels/files/' . $data->file;
            \Storage::delete($file_path);
        }elseif(is_null($request->file)){
            $file = $data->file;
        }

        // dd($file);

        try {

            $data->user_id = $request->user_id;
            $data->courier_id = $request->courier_id;
    
            $data->name = $request->name;
            $data->description = $request->description;
            $data->shipping_company = $request->shipping_company;
            $data->tracking_number = $request->tracking_number;
            $data->status = $request->status;
            $data->file = $file;
            

            $data->save();
            return redirect()->route('parcel.index');

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
        $parcel = Parcel::find($id);

        // $user->tours()->detach();
        // $user->transfers()->detach();

        $file_path = 'public/parcels/files/' . $parcel->file;
        \Storage::delete($file_path);

        $parcel->delete();

        // return redirect('/backend');
        return redirect()->route('parcel.index');
    }
}
