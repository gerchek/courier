@extends('admin.layout.master')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Данные Админа</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-xl-8" style="margin:auto">
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap mb-0">
                                            <tbody>
                                            
                                                <tr>
                                                    <th scope="row" style="width: 400px;">Имя Админа</th>
                                                    <td> @if (auth()->check()) {{ auth()->user()->name }} @endif </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Email </th>
                                                    <td> @if (auth()->check()) {{ auth()->user()->email }} @endif </td>
                                                </tr>
                                            @auth('web')
                                                <tr>
                                                    <th scope="row">Type </th>
                                                    <td> @if (auth()->check()) 
                                                            @if (auth()->user()->type == "admin")
                                                                 admin
                                                            @endif 
                                                            @if (auth()->user()->type == "support")
                                                                support 
                                                            @endif 
                                                            @if (auth()->user()->type == "users")
                                                                user
                                                            @endif 
                                                        @endif </td>
                                                </tr>
                                            @endauth 
                                            </tbody>
                                        </table>
                                    @auth('web')
                                        <a href="{{ route('admin-profile-update') }}" class="btn btn-success waves-effect waves-light mt-2">Обновить профиль</a>
                                    @endauth
                                        <a href="{{ route('logout') }}" class="btn btn-primary waves-effect waves-light mt-2">выход</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
@endsection
@section('customjs')

@stop
