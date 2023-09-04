@extends('Backend.layouts.MasterAdmin')
@section('title','Add staff')
@section('content')



<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('/staffes/')}}" class="btn btn-primary">View</a>
</div>   
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12"> 
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif 

            <div class="card shadow mb-4">                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert staff information</h6>
                </div>
                <div class="card-body">                
                    <form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="StaffName" class="col-sm-3 col-form-label"> কর্মীর নাম </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="StaffName" id="StaffName" value="{{old('StaffName')}}" placeholder="Type staff name">
                                @error ('StaffName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>        
                            </div>
                            <div class="form-group row">
                                <label for="StaffDesignation" class="col-sm-3 col-form-label"> কর্মীর পদবী </label>
                                <div class="col-sm-9">
                                <select id="StaffDesignation" class="form-control" name="StaffDesignation">
                                    <option value="">Select staff designation</option>
                                    <option value="1">Librarian</option>
                                    <option value="2">Coordinator</option>
                                    <option value="3">Office staff</option>
                                </select>
                                @error ('StaffDesignation')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="StaffDepartment" class="col-sm-3 col-form-label"> কর্মীর বিভাগ </label>
                                <div class="col-sm-9">
                                <select id="StaffDepartment" class="form-control" name="StaffDepartment">
                                    <option value="">Select department</option>
                                    <option value="1">Library</option>
                                    <option value="2">ICT Lab</option>
                                    <option value="3">Others</option>
                                </select>
                                @error ('StaffDepartment')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label"> কর্মীর ইউজার ইমেইল </label>
                                <div class="col-sm-9">
                                    <select id="email" class="form-control" name="email" >
                                            <option value="">Select users email</option>
                                            @foreach($user as $userlist)
                                                <option value="{{ $userlist->id }}"> {{ $userlist-> email  }} </option>
                                            @endforeach
                                        </select>
                                        @error ('email')
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