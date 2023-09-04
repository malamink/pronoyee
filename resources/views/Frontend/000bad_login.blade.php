<!-- Start #login -->
<div class="modal fade" id="login" role="dialog">
    <div class="grid-row" style="padding-top: 50px">
        <div class="login-block" style="border-radius: 20px">
            <div class="logo">
                <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">
                <h3>লগইন </h3>
            </div>
            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <!-- <label for="email">{{ __('Email Address') }}</label> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <!-- <label for="password">{{ __('Password') }}</label> -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>              
                <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">  
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                <div class="text-center">
                    <a class="small" href="{{route('register')}}">You don't have an account? please register!</a>
                </div>
            </form>                        
        </div>
    </div>
</div>
        <!-- End #login -->
        <!--Start #registration form-->
        <div class="modal fade" id="registration" role="dialog">
            <br>
        <div class="login-block" style="border-radius: 20px">
                        <div class="logo">
                            <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">
                            <h3> নিবন্ধন </h3>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <!-- <label for="utype">{{ __('utype') }}</label> -->
                                <select id="UserType" class="form-control" name="UserType">
                                        <option value="">Select member type...</option>
                                        <option value="ষষ্ঠ শ্রেণী">ষষ্ঠ শ্রেণী</option>
                                        <option value="সপ্তম শ্রেণী">সপ্তম শ্রেণী</option>
                                        <option value="অষ্টম শ্রেণী">অষ্টম শ্রেণী</option>
                                        <option value="নবম শ্রেণী">নবম শ্রেণী</option>
                                        <option value="দশম শ্রেণী">দশম শ্রেণী</option>
                                        <option value="একাদশ শ্রেণী">একাদশ শ্রেণী</option>
                                        <option value="দ্বাদশ শ্রেণী">দ্বাদশ শ্রেণী</option>
                                        <option value="সাধারণ সদস্য">সর্বজনীন সদস্য</option>
                                        <option value="শুভাকাঙ্খী">শুভাকাঙ্খী</option>
                                        <option value="দাতা সদস্য">দাতা সদস্য</option>                                       
                                    </select>
                            </div>
                            <div class="form-group">
                                <!-- <label for="name">{{ __('Name') }}</label> -->
                                <input id="UserName" type="text" placeholder="Type users name" class="form-control @error('UserName') is-invalid @enderror" name="UserName" value="{{ old('UserName') }}" required autocomplete="UserName" autofocus>                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="email">{{ __('Email Address') }}</label> -->
                                <input id="email" type="email" placeholder="Type valied email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="email">{{ __('Email Address') }}</label> -->
                                <input id="phone" type="number" placeholder="Type mobile number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="utype">{{ __('utype') }}</label> -->
                                <select  id="country-dropdown" class="form-control" name="CountryName"> {{old('CountryName')}}
                                        <option value="">-- Select Country --</option>
                                        @foreach ($country as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error ('CountryName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="utype">{{ __('utype') }}</label> -->
                                <select id="state-dropdown" name="StateName" class="form-control">                                    
                                </select>
                                @error ('StateName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="password">{{ __('Password') }}</label> -->
                                <input id="password" type="password" placeholder="Type password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label for="password-confirm">{{ __('Confirm Password') }}</label> -->
                                <input id="password-confirm" type="password" placeholder="Type confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>              
                            <input type="submit" value="Registration" class="btn btn-primary btn-user btn-block">                        
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>
                        </form>
                    </div>
        </div>
        <!--End #registration form-->

