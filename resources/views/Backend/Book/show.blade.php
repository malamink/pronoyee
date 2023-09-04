@extends('layouts.MasterAdmin')
@section('content')

    
        <!-- Page Heading -->
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('books')}}" class="btn btn-primary">View books</a>
        </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View book information</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BImage</th>
                            <th>bTitle</th>
                            <th>wName</th>
                            <th>bCategory</th>
                            <th>bPublications</th>
                            <th>bPublishDate</th>
                            <th>bLanguage</th>
                            <th>isbn</th>
                            <th>bPrice</th>
                            <th>pdf</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                                <td>{{ $book->id}} </td>
                                <td>
                                    <img src="{{ asset('uploads/books/'.$book->image) }}" width="50px" height="50px" alt="Image">
                                </td>
                                <td>{{ $book->bTitle}} </td>
                                <td>{{ $book->wName}} </td>
                                <td>{{ $book->bCategory}} </td>
                                <td>{{ $book->bPublications}} </td>
                                <td>{{ $book->bPublishDate}} </td>
                                <td>{{ $book->bLanguage}} </td>
                                <td>{{ $book->isbn}} </td>
                                <td>{{ $book->bPrice}} </td>
                                <td>{{ $book->pdf}} </td>
                                <td>1</td>
                                                               
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    



@endsection