@extends('Backend.layouts.MasterAdmin')
@section('title','Add award')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add award</h1>
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
                    <a href="{{url('/awards/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('awards.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="AwardName" class="col-sm-3 col-form-label"> সম্মাননার বিষয় </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="AwardName" name="AwardName" placeholder="Type Award name">
                                    @error ('AwardName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="AwardCat" class="col-sm-3 col-form-label"> সম্মাননার ধরণ  </label>
                                <div class="col-sm-9">
                                    <select id="AwardCat" class="form-control" name="AwardCat">
                                        <option value="">Select book category name</option>
                                        @foreach($awardcat as $awardcatList)
                                            <option value="{{ $awardcatList-> AwardCat }}"> {{ $awardcatList-> AwardCat }} </option>
                                        @endforeach
                                    </select>
                                    @error ('AwardCat')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="honoreeList" class="col-sm-3 col-form-label"> সম্মাননাপ্রাপ্তদের তালিকা  </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="honoreeList" id="honoreeList" placeholder="Select honoree List file">
                                    @error ('honoreeList')
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