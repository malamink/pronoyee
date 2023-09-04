@extends('Backend.layouts.MasterAdmin')
@section('title','Add city name')
@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add city</h1>
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
                    <a href="{{url('/cities/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('cities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label"> উপজেলার নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Type City name">
                                    @error ('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state_id" class="col-sm-3 col-form-label"> জেলার নাম </label>
                                <div class="col-sm-9">
                                    <select id="state_id" class="form-control" name="state_id">
                                        <option value="">Select State name </option>
                                        @foreach ($state as $stateList)
                                            <option value="{{$stateList->name}}">
                                                {{$stateList->name}}
                                            </option>
                                        @endforeach
                                    </select>

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