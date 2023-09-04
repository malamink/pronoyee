@extends('Backend.layouts.MasterAdmin')
@section('title','Add social link')
@section('content')


<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('socials')}}" class="btn btn-primary">View social link</a>
</div> 
 
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12"> 
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif 
<div class="card shadow mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert Social Link</h6>
                </div>
                <div class="card-body">                
                    <form action="{{route('socials.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            
                            <div class="form-group row">
                                <label for="wName" class="col-sm-3 col-form-label"> লেখকের নাম </label>
                                <div class="col-sm-9">
                                    <select id="WriterName" class="form-control" name="WriterName">
                                        <option value="">Select writer name</option>
                                        @foreach($writer as $list)
                                        <option value="{{ $list->id}}"> {{ $list-> wNameBn }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            
                            <div class="form-group row">
                                <label for="FacebookLink" class="col-sm-3 col-form-label"> ফেসবুক লিংক </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="FacebookLink" id="FacebookLink" placeholder="Type FacebookLink"> 
                                @error ('FacebookLink')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="TwitterLink" class="col-sm-3 col-form-label"> টুইটার লিংক </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="TwitterLink" id="TwitterLink" placeholder="Type TwitterLink"> 
                                @error ('TwitterLink')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="YoutubeLink" class="col-sm-3 col-form-label"> ইউটিউব লিংক </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="YoutubeLink" id="YoutubeLink" placeholder="Type YoutubeLink"> 
                                @error ('YoutubeLink')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>
                            
                            
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