<!-- Page Heading -->
<div class="card-header">
                <a href="{{url('writups')}}" class="btn btn-primary">View writups</a>
            </div> 
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                    @endif
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insert Writup</h6>
                        </div> 
                        <div class="card-body">
                            <form action="{{ route('writups.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label for="WritupTitle" class="col-sm-3 col-form-label">লেখার শিরোনাম</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="WritupTitle" name="WritupTitle" value="{{old('WritupTitle')}}" placeholder="Enter Writup title name">
                                            @error ('WritupTitle')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="WriterName" class="col-sm-3 col-form-label">লেখকের নাম</label>
                                        <div class="col-sm-9">
                                            

                                            <select id="WriterName" class="form-control" name="WriterName" id="WriterName">
                                                <option value="">Select writer name</option>
                                                @foreach($writer as $list)
                                                <option value="{{ $list->wNameBn }}"> {{ $list-> wNameBn }} </option>
                                                @endforeach
                                            </select>


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
                                            <input type="date" class="form-control" id="WritupPublished" name="WritupPublished" value="{{old('WritupPublished')}}" placeholder="Enter writers date of birth">
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
                                            <textarea class="form-control" name="WritupContent" id="summernote" rows="4"> {{old('WritupContent')}} </textarea>
                                            @error ('WritupContent')
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