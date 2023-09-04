@extends('Backend.layouts.MasterAdmin')

@section('content')


 

                
                <!-- Page Heading -->
                <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('writups')}}" class="btn btn-primary">View writup</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update writup </h6>
            </div> 
                <div class="card-body">
                    
                    <form action="{{ route('writups.update',$writup->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')  
                        <div class="form-group row">
                            <label for="WritupTitle" class="col-sm-3 col-form-label">লেখার শিরোনাম</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="WritupTitle" name="WritupTitle" value="{{ $writup->WritupTitle}}">
                                @error ('WritupTitle')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="WriterName" class="col-sm-3 col-form-label">লেখকের নাম</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="WriterName" name="WriterName" value="{{ $writup->WriterName}}">
                                @error ('WriterName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="WritupCat" class="col-sm-3 col-form-label";>লেখার ধরণ</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="WritupCat" id="WritupCat">
                                    <option>কবিতা</option>
                                    <option selected>গল্প</option>
                                    <option>উপন্যাস</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="WritupPublished" class="col-sm-3 col-form-label">লেখা প্রকাশের তারিখ</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="WritupPublished" name="WritupPublished" placeholder="Enter writers date of birth">
                                @error ('WritupPublished')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="text" class="col-sm-3 col-form-label">ছবি</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" placeholder="Select writup image">
                                @error ('image')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="WritupContent" class="col-sm-3 col-form-label">লেখার বিষয়বস্তু</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="WritupContent" id="WritupContent" rows="4"> {{$writup->WritupContent}} </textarea>
                                @error ('WritupContent')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="wBiography" class="col-sm-3 col-form-label"></label>                    
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