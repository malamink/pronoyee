@extends('Backend.layouts.MasterAdmin')
@section('content')




        <!-- Page Heading -->
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('programmes/create')}}" class="btn btn-primary">Add prgramme</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View Programee information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Programme Name</th>
                                <th>Programme Category</th>
                                <th>Participant List</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Programme Name</th>
                                <th>Programme Category</th>
                                <th>Participant List</th>
                                <th>Action</th> 
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($programme as $programmeList)
                            <tr>
                                <td>{{ $programmeList->id}} </td>
                                <td>{{ $programmeList->ProgrammeName}} </td>
                                <td>{{ $programmeList->ProgCat}} </td>
                                <td>{{ $programmeList->participantList}} </td>
                                <td>
                                    <a href="{{ route('programmes.show',$programmeList->id) }}" class="btn btn-info btn-sm">Details</a>
                                    <a href="{{ route('programmes.edit',$programmeList->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('programmes.destroy',$programmeList->id) }}" method="post" >
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