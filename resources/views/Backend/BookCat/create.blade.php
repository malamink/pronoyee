@extends('Backend.layouts.MasterAdmin')
@section('title','Add book category')
@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add book category</h1>
</div>    
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
                    <a href="{{url('/bookcats/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('bookcats.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="BookCatName" class="col-sm-3 col-form-label"> বই ক্যাটাগরি নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="BookCatName" name="BookCatName" placeholder="Type BookCatName">
                                    @error ('BookCatName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            	

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>                    
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">সংরক্ষন</button>
                                    <button type="reset" class="btn btn-danger">বাতিল</button>
                                </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection