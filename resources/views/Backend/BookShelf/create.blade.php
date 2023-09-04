@extends('Backend.layouts.MasterAdmin')
@section('title','Add book shelf')
@section('content')


<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('/bookshelves/')}}" class="btn btn-primary">View</a>
</div>   
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12"> 
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif 

            <div class="card shadow mb-4">                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert book shelf information</h6>
                </div>
                <div class="card-body">                
                    <form action="{{route('bookshelves.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <label for="BslN" class="col-sm-3 col-form-label"> বইয়ের নাম</label>
                                <div class="col-sm-9">
                                    <select id="bTitle" class="form-control" name="bTitle">
                                        <option value="">Select book name </option>
                                        @foreach($book as $list)
                                        <option value="{{ $list-> bTitle }}"> {{ $list-> bTitle }} </option>
                                        @endforeach
                                    </select>
                                    @error ('bTitle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="ShelfName" class="col-sm-3 col-form-label"> বইয়ের আলমারির নাম </label>
                                <div class="col-sm-9">
                                    <select id="AlmirahName" class="form-control" name="AlmirahName">
                                        <option value="">Select book shelf name</option>
                                        @foreach($almirah as $list)
                                        <option value="{{ $list-> AlmirahName }}"> {{ $list-> AlmirahName }} </option>
                                        @endforeach
                                    </select>
                                    @error ('AlmirahName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="ShelfNumber" class="col-sm-3 col-form-label"> আলমারির তাক নম্বর </label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control" name="ShelfNumber" id="ShelfNumber" placeholder="Type shelf number">
                                @error ('ShelfNumber')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="ShelfLocation" class="col-sm-3 col-form-label"> বইয়ের আলমারির অবস্থান </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ShelfLocation" id="ShelfLocation" placeholder="Type shelf location">
                                    @error ('ShelfLocation')
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