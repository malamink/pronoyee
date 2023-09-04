@extends('Backend.layouts.MasterAdmin')
@section('title','Add programme')
@section('content')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add programme</h1>
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
                    <a href="{{url('/programmes/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('programmes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="ProgrammeName" class="col-sm-3 col-form-label"> কর্মসূচির নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ProgrammeName" name="ProgrammeName" placeholder="Type ProgrammeName">
                                    @error ('ProgrammeName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ProgCat" class="col-sm-3 col-form-label"> কর্মসূচির ধরণ </label>
                                <div class="col-sm-9">
                                    <select id="ProgCat" class="form-control" name="ProgCat">
                                        <option value="">Select programme category</option>
                                        @foreach($programmecat as $list)
                                        <option value="{{ $list->ProgCatName}}"> {{ $list-> ProgCatName }} </option>
                                        @endforeach
                                    </select>
                                    @error ('ProgCat')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="participantList" class="col-sm-3 col-form-label"> প্রশিক্ষণার্থীদের তালিকা </label>
                                <div class="col-sm-9">
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="participantList" id="participantList" placeholder="Select participant file">
                                    </div>
                                    @error ('participantList')
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