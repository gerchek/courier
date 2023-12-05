@extends('admin.layout.master')
@section('content')

@if (auth()->check()) @if (auth()->user()->type != "users" ) 
<a href="{{route('courier.create')}}"><button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-check-line align-middle me-2"></i> Create Courier</button></a>
@endif @endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        @if (auth()->check()) @if (auth()->user()->type != "users" ) 
                        <th>Edit</th>
                        <th>Delete</th>
                        @endif @endif
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($couriers as $courier)
                    <tr>
                        <td>{{ $courier->id }}</td>
                        <td>{{ $courier->name }}</td>

                        @if (auth()->check()) @if (auth()->user()->type != "users" ) 

                        <td style="width: 100px">
                            <a href="{{ route('courier.edit',$courier->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    Edit
                                </button>
                            </a>
                            
                        </td>

                        

                        <td style="width: 100px">
                            <form action="{{ route('courier.destroy',$courier->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        @endif @endif
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
