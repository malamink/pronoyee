@extends('Backend.layouts.MasterAdmin')
@section('title','Add book borrower')
@section('content')


<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('/borrowers/')}}" class="btn btn-primary">View</a>
</div>   
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12"> 
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif 

            <div class="card shadow mb-4">                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert borrowers information</h6>
                </div>
                <div class="card-body">                
                    <form action="{{route('borrowers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="BorrowedName" class="col-sm-3 col-form-label"> বই ঋণগ্রহীতার নাম </label>
                                <div class="col-sm-9">
                                <select id="BorrowedName" class="form-control" name="BorrowedName">
                                            <option value="">Select borrowers name </option>
                                            @foreach($user as $userlist)
                                                <option value="{{ $userlist->id }}"> {{ $userlist-> UserName  }} </option>
                                            @endforeach
                                        </select>
                                        @error ('BorrowedName')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="BorrowedType" class="col-sm-3 col-form-label"> বই ঋণগ্রহীতার ধরণ </label>
                                <div class="col-sm-9">
                                <select id="BorrowedType" class="form-control" name="BorrowedType">
                                            <option value="">Select borrowers type </option>
                                            @foreach($user as $userlist)
                                                <option value="{{ $userlist->id }}"> {{ $userlist-> UserType  }} </option>
                                            @endforeach
                                        </select>
                                        @error ('BorrowedType')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="CardNumber" class="col-sm-3 col-form-label"> পাঠকের কার্ড নাম্বার </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="CardNumber" id="CardNumber" placeholder="Type card naumber">
                                    @error ('CardNumber')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="BookName" class="col-sm-3 col-form-label"> বইয়ের নাম </label>
                                <div class="col-sm-9">
                                <select id="BookName" class="form-control" name="BookName">
                                            <option value="">Select borrowers type </option>
                                            @foreach($book as $booklist)
                                                <option value="{{ $booklist->id }}"> {{ $booklist-> bTitle  }} </option>
                                            @endforeach
                                        </select>
                                        @error ('BookName')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>        
                            </div>
                            
                            <div class="form-group row">
                                <label for="BorrowedFromDate" class="col-sm-3 col-form-label"> বই গ্রহণের তারিখ </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="BorrowedFromDate" id="BorrowedFromDate" placeholder="Select Borrowed From Date">
                                    @error ('BorrowedFromDate')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="BorrowedToDate" class="col-sm-3 col-form-label"> বই ফেরত দেয়ার সম্ভাব্য তারিখ </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="BorrowedToDate" id="BorrowedToDate" placeholder="Select Borrowed to Date">
                                    @error ('BorrowedToDate')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ActualReturnDate" class="col-sm-3 col-form-label"> বই ফেরত দেয়ার সঠিক তারিখ </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="ActualReturnDate" id="ActualReturnDate" placeholder="Select Actual Return Date">
                                    @error ('ActualReturnDate')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="IssuedBy" class="col-sm-3 col-form-label"> যিনি বই ইস্যু করেছেন </label>
                                <div class="col-sm-9">
                                    <select id="IssuedBy" class="form-control" name="IssuedBy">
                                            <option value="">Select issuer name </option>
                                            @foreach($user as $userlist)
                                                <option value="{{ $userlist->id }}"> {{ $userlist-> UserType  }} </option>
                                            @endforeach
                                        </select>
                                        @error ('IssuedBy')
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