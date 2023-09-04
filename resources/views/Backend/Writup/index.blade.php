@extends('Backend.layouts.MasterAdmin')
@section('content')

                
                
                <!-- Page Heading -->
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('writups/create')}}" class="btn btn-primary">Add writup</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View writup information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>WritupTitle</th>
                            <th>WriterName</th>
                            <th>WritupCat</th>
                            <th>WritupPublished</th>
                            <th>WritupContent</th>
                            <th>Action</th>   
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>WritupTitle</th>
                            <th>WriterName</th>
                            <th>WritupCat</th>
                            <th>WritupPublished</th>
                            <th>WritupContent</th>
                            <th>Action</th>   
                        </tr>
                    </tfoot>


<style>
    .ptext {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* number of lines to show */
    line-clamp: 2; 
    -webkit-box-orient: vertical;
    }
</style>

                    @foreach($writup as $writupList) 
                            <tr> 
                                <td>{{ $writupList->id}} </td>
                                <td>
                                    <img src="{{ asset('uploads/writups/'.$writupList->image) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>{{ $writupList->WritupTitle}} </td>
                                <td>{{ $writupList->WriterName}} </td>
                                <td>{{ $writupList->WritupCat}} </td>
                                <td>{{ $writupList->WritupPublished}} </td>
                                <td class="ptext">{{ $writupList->WritupContent}} </td>
                                <td>
                                    <a href="{{ route('writups.show',$writupList->id) }}" class="btn btn-info btn-sm">Details</a>
                                    <a href="{{ route('writups.edit',$writupList->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                    <form action="{{ route('writups.destroy',$writupList->id) }}" method="post" >
                                        @csrf 
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    
                </table>
            </div>
        </div>
    </div>

@endsection