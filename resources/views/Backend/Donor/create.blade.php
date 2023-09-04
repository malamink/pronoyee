@extends('Backend.layouts.MasterAdmin')
@section('title','Add donor')
@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add donor</h1>
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
                    <a href="{{url('/donors/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('donors.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="DonorName" class="col-sm-3 col-form-label"> দাতা / সংস্থার নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="DonorName" name="DonorName" placeholder="Type donor name">
                                    @error ('DonorName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DonorCatName" class="col-sm-3 col-form-label"> দাতার ধরণ </label>
                                <div class="col-sm-9">
                                    <select id="DonorCatName" class="form-control" name="DonorCatName">
                                        <option value="">Select donor category name</option>
                                        @foreach($donorcat as $list)
                                        <option value="{{ $list->DonorCatName}}"> {{ $list-> DonorCatName }} </option>
                                        @endforeach
                                    </select>
                                    @error ('DonorCatName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DonorList" class="col-sm-3 col-form-label"> দাতাবৃন্দের তালিকা </label>
                                <div class="col-sm-9">
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="DonorList" id="DonorList" placeholder="Select DonorList file">
                                    </div>
                                    @error ('DonorList')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror 
                                </div>
                            </div>
                            
                            	
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>                    
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">সংরক্ষণ</button>
                                    <button type="reset" class="btn btn-danger">বাতিল</button>
                                </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection