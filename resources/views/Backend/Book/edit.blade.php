@extends('Backend.layouts.MasterAdmin')
@section('content')

 

    <!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('/books/')}}" class="btn btn-primary">Book View</a>
</div> 
<!-- Content Row -->
   
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Book information</h6>
                </div>
                <div class="card-body">                
                    <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের ক্রমিক নম্বর </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="id" id="id" value="{{ $book->id }}">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="bTitle" id="bTitle" value="{{ $book->bTitle }}">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> লেখকের নাম </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="wName" id="wName" value="{{ $book->wName }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের ধরণ </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bCategory" id="bCategory">
                                        <option>কবিতা</option>
                                        <option selected>গল্প</option>
                                        <option>উপন্যাস</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> প্রকাশনীর নাম  </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bPublications" id="bPublications">
                                        <option>প্রণয়ী পাবিলেকশন</option>
                                        <option selected>সময় প্রকাশন</option>
                                        <option>বাতিঘর</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বই প্রকাশের তারিখ </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="bPublishDate" id="bPublishDate"value="{{ $book->bPublishDate }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের ভাষা </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bLanguage" id="bLanguage">
                                        <option>আরবি</option>
                                        <option selected>বাংলা</option>
                                        <option>ইংরেজি</option>
                                        <option>হিন্দি</option>
                                        <option>উর্দু</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> আইএসবিএন </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="isbn" id="isbn" value="{{ $book->isbn }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের মূল্য </label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control" name="bPrice" id="bPrice"value="{{ $book->bPrice }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের ছবি </label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control" name="image" id="image" value="{{ asset('uploads/books/'.$book->image) }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> পিডিএফ বই </label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control" name="pdf" id="pdf" value="{{ $book->pdf }}">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> বই সম্পর্কে </label>
                                <div class="col-sm-9">
                                <textarea class="form-control" name="bReview" id="bReview" rows="4" rows="4" value="{{ $book->bReview }}></textarea>
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