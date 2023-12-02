@extends('admin.layout.master')
@section('content')
<a href="{{route('user.create')}}"><button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-check-line align-middle me-2"></i> Create User</button></a>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>

                        <td style="width: 300px">

                            @if ($user->type == "admin")
                                admin 
                            @endif 
                            @if ($user->type == "support")
                                support
                            @endif 
                            @if ($user->type == "users")
                                users 
                            @endif 

                            
                        </td>

                        <td style="width: 100px">
                            <a href="{{ route('user.edit',$user->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    Edit
                                </button>
                            </a>
                            
                        </td>

                        

                        <td style="width: 100px">
                            <form action="{{ route('user.destroy',$user->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('customjs')
        <!-- Required datatable js -->
        <script src="admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="admin/js/pages/datatables.init.js"></script>
@stop
