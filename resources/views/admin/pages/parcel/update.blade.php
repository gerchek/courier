@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('parcel.update',$parcel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if (auth()->check()) @if (auth()->user()->type != "users" ) 

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">user</label>
                            <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="user_id">

                                        @foreach($users as $user)
                                            <option value="{{$user->id}}" @if($user->id == $parcel->user_id) selected="" @endif>{{$user->name}}</option>
                                        @endforeach

                                    </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">courier</label>
                            <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="courier_id">
                                        @foreach($couriers as $courier)
                                            <option value="{{$courier->id}}" @if($courier->id == $parcel->courier_id) selected="" @endif>{{$courier->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Upload new file</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" id="customFile" name="file">
                            </div>
                            <div class="col-sm-5">
                                <a href="{{ asset('storage/parcels/files/'.$parcel->file) }}">Download file</a>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">имя</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="name" value="{{$parcel->name}}">
                            </div>
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif

                    @endif @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="description" value="{{$parcel->description}}">
                        </div>
                    </div>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif

                    @if (auth()->check()) @if (auth()->user()->type != "users" ) 

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">shipping_company</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="shipping_company" value="{{$parcel->shipping_company}}">
                            </div>
                        </div>
                        @if ($errors->has('shipping_company'))
                            <span class="text-danger">{{ $errors->first('shipping_company') }}</span>
                        @endif

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">tracking_number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="tracking_number" value="{{$parcel->tracking_number}}">
                            </div>
                        </div>
                        @if ($errors->has('tracking_number'))
                            <span class="text-danger">{{ $errors->first('tracking_number') }}</span>
                        @endif

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">статус</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" @if($parcel->status == "task_received") selected="" @endif>Task Received</option>
                                    <option value="1" @if($parcel->status == "package_received") selected="" @endif>Package Received</option>
                                    <option value="2" @if($parcel->status == "package_shipped") selected="" @endif>Package Shipped</option>

                                    </select>
                            </div>
                        </div>
                        @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif

                    @endif @endif


                    


                    <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>

                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('customjs')



<!-- JAVASCRIPT -->
@stop