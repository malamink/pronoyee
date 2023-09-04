@extends('Backend.layouts.MasterAdmin')
@section('title','Add book pdf')
@section('content')


<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('/bookpdfs/')}}" class="btn btn-primary">View</a>
</div>   
<!-- Content Row -->
<div class="row">
    <div class="col-md-12"> 
        @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif 

        <div class="card shadow mb-4">                
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Insert pdf book information</h6>
            </div>
            <div class="card-body">                
                <form action="{{route('bookpdfs.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <label for="BookName" class="col-sm-3 col-form-label"> বইয়ের নাম </label>
                            <div class="col-sm-9">
                            <select id="BookName" class="form-control" name="BookName">
                                    <option value="">Select book name</option>
                                    @foreach($book as $list)
                                    <option value="{{ $list-> bTitle }}"> {{ $list-> bTitle }} </option>
                                    @endforeach
                                </select>
                                @error ('BookName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>        
                        </div>
                        <div class="form-group row">
                            <label for="WriterName" class="col-sm-3 col-form-label"> লেখকের নাম </label>
                            <div class="col-sm-9">
                                <select id="WriterName" class="form-control" name="WriterName">
                                    <option value="">Select writer name</option>
                                    @foreach($writer as $list)
                                    <option value="{{ $list-> wNameBn }}"> {{ $list-> wNameBn }} </option>
                                    @endforeach
                                </select>
                                @error ('WriterName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pdf" class="col-sm-3 col-form-label"> পিডিএফ বই </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="PdfFile" id="PdfFile" placeholder="Select pdf book">
                                @error ('PdfFile')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label"> বই সম্পর্কে </label>
                            <div class="col-sm-9">
                            <textarea class="form-control" name="bReview" id="bReview" rows="4" placeholder="Type book review" rows="4"></textarea>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="wBiography" class="col-sm-3 col-form-label"></label>                    
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