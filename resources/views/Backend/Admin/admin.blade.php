@extends('Frontend.Layout.appLogin')
@section('title','এডমিন লগইন')
@section('content')
<br>
<br>

<div class="login-block" style="border-radius: 5px">
    <div class="logo">
        <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">                            
        <h2>Admin Login</h2>
    </div>
    <div class="clear-both"></div>
    @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
        <form action="{{url('admin-login')}}" class="user" method="post">
            @csrf
            <div class="form-group">
                <!-- <input type="text" class="login-input" placeholder="Username"> -->
                <input type="email" class="form-control form-control-user"
                    id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Email Address...">
                <span class="input-icon">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <div class="form-group">
                <!-- <input type="text" class="login-input" placeholder="Pasword"> -->
                <input type="password" class="form-control form-control-user"
                    id="password" name="password" placeholder="Password">
                <span class="input-icon">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
            <p class="small">
                <a href="#">Forgot Password?</a>
            </p>
            <div class="clear-both"></div>
            <input type="submit" value="Login" class="btn btn-success btn-user btn-block">
        </form>
    </div>

@endsection

