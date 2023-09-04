@extends('Backend.layouts.MasterAdmin')
@section('content')



        <!-- Page Heading -->
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('writers/create')}}" class="btn btn-primary">Add writer</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View Writers information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>image</th>
                                <th>wNameBn</th>
                                <th>wNameEn</th>
                                <th>CountryName</th>
                                <th>StateName</th>
                                <th>CityName</th>
                                <th>BirthPlace</th>
                                <th>Language</th>
                                <th>wTperiod</th>
                                <th>wDbirth</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tfoot> 
                            <tr>
                                <th>ID</th>
                                <th>image</th>
                                <th>wNameBn</th>
                                <th>wNameEn</th>
                                <th>CountryName</th>
                                <th>StateName</th>
                                <th>CityName</th>
                                <th>BirthPlace</th>
                                <th>Language</th>
                                <th>wTperiod</th>
                                <th>wDbirth</th>
                                <th>Action</th> 
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($writer as $writerList)
                            <tr>
                                <td>{{ $writerList->id}} </td>
                                <td><img src="{{ asset('uploads/writers/'.$writerList->image) }}" width="70px" height="70px" alt="Image"></td>
                                <td>{{ $writerList->wNameBn}}</td>
                                <td>{{ $writerList->wNameEn}}</td>
                                <td>{{ $writerList->CountryName}}</td>
                                <td>{{ $writerList->StateName}} </td>
                                <td>{{ $writerList->CityName}} </td>
                                <td>{{ $writerList->BirthPlace}} </td>
                                <td>{{ $writerList->Language}} </td>
                                <td>{{ $writerList->wTperiod}} </td>
                                <td>{{ $writerList->wDbirth}} </td>
                                <td>
                                    <a href="{{ route('writers.show',$writerList->id) }}" class="btn btn-info btn-sm">Details</a>
                                    <a href="{{ route('writers.edit',$writerList->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('writers.destroy',$writerList->id) }}" method="post" >
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
    </div>
    </div>
    <!-- /.container-fluid -->
                


@endsection