<!-- Page Heading -->
<div class="card-header">
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
                            <h6 class="m-0 font-weight-bold text-primary">Insert Book information</h6>
                        </div>
                        <div class="card-body">                
                            <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label for="bTitle" class="col-sm-3 col-form-label"> বইয়ের নাম </label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" name="bTitle" id="bTitle" placeholder="Type book title">
                                        @error ('bTitle')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>        
                                    </div>
                                    <div class="form-group row">
                                        <label for="wName" class="col-sm-3 col-form-label"> লেখকের নাম </label>
                                        <div class="col-sm-9">
                                            <select id="wName" class="form-control" name="wName">
                                                <option value="">Select writer name</option>
                                                @foreach($writer as $list)
                                                <option value="{{ $list->id}}"> {{ $list-> wNameBn }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bCategory" class="col-sm-3 col-form-label"> বইয়ের ধরণ </label>
                                        <div class="col-sm-9">
                                            <select id="bCategory" class="form-control" name="bCategory">
                                                <option value="">Select book category name</option>
                                                #
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bPublications" class="col-sm-3 col-form-label"> প্রকাশনীর নাম  </label>
                                        <div class="col-sm-9">                                    
                                            <select id="bPublications" class="form-control" name="bPublications">
                                                <option value="">Select publication name</option>
                                                @foreach($publication as $list)
                                                    <option value="{{ $list-> PublicationName }}"> {{ $list-> PublicationName }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label"> বই প্রকাশের তারিখ </label>
                                        <div class="col-sm-9">
                                        <input type="date" class="form-control" name="bPublishDate" id="bPublishDate" placeholder="Select publish Date">
                                        @error ('bPublishDate')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label"> বইয়ের ভাষা </label>
                                        <div class="col-sm-9">

                                            <select id="bLanguage" class="form-control" name="bLanguage">
                                                <option value="">Select Language name</option>
                                                @foreach($language as $list)
                                                    <option value="{{ $list-> LanguageName }} "> {{ $list-> LanguageName }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label"> আইএসবিএন </label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" name="isbn" id="isbn" placeholder="Type book isbn"> 
                                        @error ('isbn')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bPrice" class="col-sm-3 col-form-label"> বইয়ের মূল্য </label>
                                        <div class="col-sm-9">
                                        <input type="number" class="form-control" name="bPrice" id="bPrice" placeholder="Type book price">
                                        @error ('bPrice')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-3 col-form-label"> বইয়ের ছবি </label>
                                        <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image" id="image" placeholder="Select book cover">
                                        @error ('image')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pdf" class="col-sm-3 col-form-label"> পিডিএফ বই </label>
                                        <div class="col-sm-9">
                                        <input type="file" class="form-control" name="pdf" id="pdf" placeholder="Select pdf book">
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