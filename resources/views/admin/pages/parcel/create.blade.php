@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('parcel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">имя пользователя</label>
                        <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="user_id">

                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">имя курьера</label>
                        <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="courier_id">
                                    @foreach($couriers as $courier)
                                        <option value="{{$courier->id}}">{{$courier->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Файл</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="customFile" name="file">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">название посылки</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="name">
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">описание</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="description">
                        </div>
                    </div>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">транспортная компания (shipping company)</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="shipping_company">
                        </div>
                    </div>
                    @if ($errors->has('shipping_company'))
                        <span class="text-danger">{{ $errors->first('shipping_company') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">идентификационный номер (tracking number)</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="tracking_number">
                        </div>
                    </div>
                    @if ($errors->has('tracking_number'))
                        <span class="text-danger">{{ $errors->first('tracking_number') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">статус</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="0" selected="">Task Received</option>
                                <option value="1">Package Received</option>
                                <option value="2">Package Shipped</option>

                                </select>
                        </div>
                    </div>
                    @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif

                    <button type="submit" class="btn btn-success waves-effect waves-light">Создавать</button>

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