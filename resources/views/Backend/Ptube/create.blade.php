@extends('Backend.layouts.MasterAdmin')
@section('title','Add video')
@section('content')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add ptube</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                    <a href="{{url('/ptubes/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('ptubes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="VidTitle" class="col-sm-3 col-form-label"> ভিডিও শিরোনাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="VidTitle" name="VidTitle" placeholder="Type VidTitle name">
                                    @error ('VidTitle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="VidCat" class="col-sm-3 col-form-label"> ভিডিও ক্যাটেগরি </label>
                                <div class="col-sm-9">
                                    <select id="VidCat" class="form-control" name="VidCat">
                                        <option value="">Select video category </option>
                                        <option value="পুরস্কার">পুরস্কার</option>
                                        <option value="বই পড়া কর্মসূচি">বই পড়া কর্মসূচি</option>
                                        <option value="শিক্ষা সফর">শিক্ষা সফর</option>
                                        <option value="জাতীয় দিবস">জাতীয় দিবস</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PicTitle" class="col-sm-3 col-form-label"> ভিডিও ফাইল </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="Video" name="Video">
                                    @error ('Video')
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