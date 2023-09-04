@extends('Backend.layouts.MasterAdmin')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All city</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('cities/create')}}" class="btn btn-primary">Add city</a>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>State Name</th>                                         
                            <th colspan="3">Action</th>                                         
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($city as $cityList)
                            <tr>
                                <td style="width:10%;">{{ $cityList->id}} </td>
                                <td style="width:60%;">{{ $cityList->name}} </td>
                                <td style="width:60%;">{{ $cityList->state_id}} </td>
                                <td>
                                    <a href="{{ route('cities.show',$cityList->id) }}" class="btn btn-info btn-sm">Details</a>
                                <td>
                                    <a href="{{ route('cities.edit',$cityList->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('cities.destroy',$cityList->id) }}" method="post" >
                                        @csrf 
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete?')">Delete</button>
                                    </form>
                                </td>                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    



@endsection