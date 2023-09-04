@extends('Backend.layouts.MasterAdmin')
@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update country</h1>
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
                    <a href="{{url('/countries/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('countries.update',$country->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group row">
                                <label for="Name" class="col-sm-3 col-form-label"> আইডি </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="id" name="id" value="{{ $country->id }}">
                                    @error ('id')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Name" class="col-sm-3 col-form-label"> দেশের নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Name" name="Name" value="{{ $country->Name }}">
                                    @error ('Name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            	

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>                    
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">আপডেট</button>
                                    <button type="reset" class="btn btn-danger">বাতিল</button>
                                </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection