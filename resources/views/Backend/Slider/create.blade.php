@extends('Backend.layouts.MasterAdmin')
@section('title','Add sub-menu')
@section('content')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add slider</h1>
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
                    <a href="{{url('/sliders/')}}" class="btn btn-primary">Slider view</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="SldrName" class="col-sm-3 col-form-label"> শিরোনাম</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="SldrName" name="SldrName" placeholder="Enter slider name">
                                    @error ('SldrName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="SldrDescb" class="col-sm-3 col-form-label">শিরোনামের বর্ণনা</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="SldrDescb" name="SldrDescb" placeholder="Enter describtion">
                                    @error ('SldrDescb')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-sm-3 col-form-label">ছবি</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label"></label>                    
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