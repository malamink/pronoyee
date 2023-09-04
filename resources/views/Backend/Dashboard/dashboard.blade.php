@extends('Backend.layouts.MasterAdmin')
@section('title','এডমিন ড্যাশবোর্ড')
@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">প্রণয়ী ড্যাশবোর্ড</h1>
</div>

                    <!-- Content Row -->
                    <h3>Write up</h3>
                    <div class="row">
                        <!-- Write up -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Write up
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$publication}}
                                            </div>
                                            <a href="{{url('/writups/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                     
                    <!-- Content Row -->
                    <h3>Award</h3>
                    <div class="row">
                        <!-- Award -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total award
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$award}}
                                            </div>
                                            <a href="{{url('/awards/')}}"> View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- awardcat -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total awardcat
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$awardcat}}
                                            </div>
                                            <a href="{{url('/awardcats/')}}"> View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <h3>Writer</h3>
                    <div class="row">
                        <!-- writers -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total writers
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$writers}}
                                            </div>
                                            <a href="{{url('/writers/')}}"> View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  social link -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total social link
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$social}}
                                            </div>
                                            <a href="{{url('/socials/')}}"> View </a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- timeperiod -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Timeperiod
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$timeperiod}}
                                            </div>
                                            <a href="{{url('/timeperiods/')}}"> View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <h3>Book</h3>
                    <div class="row">
                        <!-- books -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total book  
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{$books}}
                                            </div>
                                            <a href="{{url('/books/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- book category -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total book category
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$bookcat}}
                                            </div>
                                            <a href="{{url('/bookcats/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- bookshelf -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total bookshelf 
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{$bookshelf}}
                                            </div>
                                            <a href="{{url('/bookshelves/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- almirahs -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total almirah  
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{$almirah}}
                                            </div>
                                            <a href="{{url('/almirahs/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- book pdf -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total bookpdf  
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{$bookpdf}}
                                            </div>
                                            <a href="{{url('/bookpdfs/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- book language -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total language
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$language}}
                                            </div>
                                            <a href="{{url('/languages/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- publication -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total publication
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$publication}}
                                            </div>
                                            <a href="{{url('/publications/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <h3>All pages</h3>
                    <div class="row">
                        <!-- country -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total country
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$country}}
                                            </div>
                                            <a href="{{url('/countries/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- state -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total state
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$state}}
                                            </div>
                                            <a href="{{url('/states/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- city -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total city
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$city}}
                                            </div>
                                            <a href="{{url('/cities/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- donor -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total donor
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$donor}}
                                            </div>
                                            <a href="{{url('/donors/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- donorcat -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total donor category
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$donorcat}}
                                            </div>
                                            <a href="{{url('/donorcats/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- menu -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total menu
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$menu}}
                                            </div>
                                            <a href="{{url('/menus/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sub-menu -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total submenu
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$submenu}}
                                            </div>
                                            <a href="{{url('/submenus/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- programme -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total programme
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$programme}}
                                            </div>
                                            <a href="{{url('/programmes/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- programmecat -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total programmecat
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$programmecat}}
                                            </div>
                                            <a href="{{url('/programmecats/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pic house -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total pichouse
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$pichouse}}
                                            </div>
                                            <a href="{{url('/pichouses/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ptube -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total ptube
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$ptube}}
                                            </div>
                                            <a href="{{url('/ptubes/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- staff -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total staff
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$ptube}}
                                            </div>
                                            <a href="{{url('/staffs/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- borrower -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total borrower
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$ptube}}
                                            </div>
                                            <a href="{{url('/borrowers/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- communicatio -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total communication
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{$communication}}
                                            </div>
                                            <a href="{{url('/communications/')}}">View</a> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- users -->
                    <h3>User</h3>
                    <div class="row">
                        <!-- user -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Total User
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    {{$users}}
                                                    </div>
                                                    <a href="{{url('/users/')}}">View</a> 
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection