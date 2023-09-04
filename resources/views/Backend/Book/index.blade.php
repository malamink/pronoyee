@extends('Backend.layouts.MasterAdmin')
@section('content')



        <!-- Page Heading -->
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('books/create')}}" class="btn btn-primary">Add writer</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View books information</h6>
            </div>
            <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BImage</th> 
                            <th>BookNumber</th>
                            <th>bTitle</th>
                            <th>wName</th>
                            <th>bCategory</th>
                            <th>bPublications</th>
                            <th>bPublishDate</th>
                            <th>bLanguage</th>
                            <th>isbn</th>
                            <th>bPrice</th>
                            <th>pdf</th> 
                            <th>status</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>BImage</th>
                            <th>BookNumber</th>
                            <th>bTitle</th>
                            <th>wName</th>
                            <th>bCategory</th>
                            <th>bPublications</th>
                            <th>bPublishDate</th>
                            <th>bLanguage</th>
                            <th>isbn</th>
                            <th>bPrice</th>
                            <th>pdf</th> 
                            <th>status</th> 
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($book as $bookList)
                            <tr>
                                <td>{{ $bookList->id}} </td>
                                <td>
                                    <img src="{{ asset('uploads/books/'.$bookList->image) }}" width="50px" height="50px" alt="Image">
                                </td>
                                <td>{{ $bookList->BookNumber}} </td>
                                <td>{{ $bookList->bTitle}} </td>
                                <td>{{ $bookList->wName}} </td>
                                <td>{{ $bookList->bCategory}} </td>
                                <td>{{ $bookList->bPublications}} </td>
                                <td>{{ $bookList->bPublishDate}} </td>
                                <td>{{ $bookList->bLanguage}} </td>
                                <td>{{ $bookList->isbn}} </td>
                                <td>{{ $bookList->bPrice}} </td> 
                                <td><a href="{{ url('uploads/pdfs/'.$bookList->pdf) }}" target="_blank">View...</a></td>
                                <td>
                                    Pending
                                </td> 
                                <td> 
                                    
                                    <a href="{{ route('books.show',$bookList->id) }}" class="btn btn-info btn-sm">Details</a>
                                    <a href="{{ route('books.edit',$bookList->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('books.destroy',$bookList->id) }}" method="post" >
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