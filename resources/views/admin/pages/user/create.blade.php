@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card-body">

                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Имя</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" value="test_value" name="name">
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                    {{-- <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Фамилия</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" value="test_value" name="surname">
                        </div>
                    </div>
                    @if ($errors->has('surname'))
                        <span class="text-danger">{{ $errors->first('surname') }}</span>
                    @endif --}}

                    <div class="row mb-3">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Почта</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" placeholder="bootstrap@example.com" id="example-email-input" name="email">
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input" name="password">
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    {{-- <div class="row mb-3">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Телефон</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input" name="telephone">
                        </div>
                    </div>
                    @if ($errors->has('telephone'))
                        <span class="text-danger">{{ $errors->first('telephone') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Дата рождения</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="date_of_birth">
                        </div>
                    </div>
                    @if ($errors->has('date_of_birth'))
                        <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                    @endif --}}

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">уровень пользователя</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="type">
                                <option value="0" selected="">admin</option>
                                <option value="1">support</option>
                                <option value="2">users</option>

                                </select>
                        </div>
                    </div>
                    @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif

                    


                    <button type="submit" class="btn btn-success waves-effect waves-light">Create</button>

                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('customjs')
@stop