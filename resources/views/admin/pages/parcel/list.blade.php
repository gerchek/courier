@extends('admin.layout.master')
@section('content')

@if (auth()->check()) @if (auth()->user()->type != "users" ) 
<a href="{{route('parcel.create')}}"><button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-check-line align-middle me-2"></i> Создать посылку</button></a>
@endif @endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name on the box</th>
                        <th>Shipper</th>
                        <th>parcel->courier->name</th>
                        <th>Status</th>
                        <th>Tracking number</th>
                        <th>Edit</th>
                        @if (auth()->check()) @if (auth()->user()->type != "users" ) 
                        <th>Delete</th>
                        @endif @endif
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($parcels as $parcel)
                    <tr>
                        <td>{{ $parcel->id }}</td>
                        <td>{{ $parcel->name }}</td>
                        <td>{{ $parcel->user->name }}</td>
                        <td>{{ $parcel->courier->name }}</td>
                        <td><input type="color" @if($parcel->status == "task_received") value="#8B948E" @elseif($parcel->status == "package_received") value="#dcebff" @elseif($parcel->status == "package_shipped") value="#8FFE09" @endif disabled></td>
                        <td>{{ $parcel->tracking_number }}</td>

                        <td style="width: 100px">
                            <a href="{{ route('parcel.edit',$parcel->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    Edit
                                </button>
                            </a>
                            
                        </td>

                        
                        @if (auth()->check()) @if (auth()->user()->type != "users" ) 
                        <td style="width: 100px">
                            <form action="{{ route('parcel.destroy',$parcel->id) }}" method="Post">
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
