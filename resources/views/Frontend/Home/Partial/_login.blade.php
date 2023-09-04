<div class="login-block" style="border-radius: 20px">
    <div class="logo">
        <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">
        <h3>সদস্য লগইন</h3>
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
        <input type="submit" value="প্রবেশ" class="btn btn-primary btn-user btn-block">  
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('আপনি কি পাসওয়ার্ড ভুলে গেছেন?') }}
                </a>
            @endif
        <div class="text-center">
            <a class="small" href="{{route('register')}}"> আপনার সদস্যপদ না থাকলে, অনুগ্রহ করে নিবন্ধন করুন!</a>
        </div>
    </form>                        
</div>
    