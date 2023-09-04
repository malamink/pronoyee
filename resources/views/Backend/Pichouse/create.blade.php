@extends('Backend.layouts.MasterAdmin')
@section('title','Add pichouse')
@section('content')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add pichouse</h1>
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
                    <a href="{{url('/pichouses/')}}" class="btn btn-primary">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pichouses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="PicTitle" class="col-sm-3 col-form-label"> শিরোনাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="PicTitle" name="PicTitle" placeholder="Type PicTitle name">
                                    @error ('PicTitle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PicCat" class="col-sm-3 col-form-label"> ইমেজ ক্যাটেগরি </label>
                                <div class="col-sm-9">
                                    <select id="PicCat" class="form-control" name="PicCat">
                                        <option value="">Select pic category </option>
                                        <option value="পুরস্কার">পুরস্কার</option>
                                        <option value="বই পড়া কর্মসূচি">বই পড়া কর্মসূচি</option>
                                        <option value="শিক্ষা সফর">শিক্ষা সফর</option>
                                        <option value="জাতীয় দিবস">জাতীয় দিবস</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PicTitle" class="col-sm-3 col-form-label"> ছবি </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error ('image')
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