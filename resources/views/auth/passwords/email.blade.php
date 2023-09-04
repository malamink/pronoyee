@extends('Frontend.Layout.app')
@section('title',' পাসওয়ার্ড পরিবর্তন')
@section('content')

<br>
        <main>
            <section class="fullwidth-background bg-1">
                <div class="grid-row">
                    <div class="login-block" style="border-radius: 20px">
                            <div class="logo">
                                <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">আপনি কি পাসওয়ার্ড ভুলে গেছেন?</h1>
                                <p class="mb-4">চিন্তা করবেন না! শুধু নীচে ইমেল ঠিকানা লিখুন, আপনার পাসওয়ার্ড পুনরায় সেট করার জন্য একটি লিঙ্ক পাঠাব!!</p>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="user" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                <label for="email">{{ __('ইমেল ঠিকানা') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <br>
                                    <button type="submit" class="btn btn-primary">
                                {{ __('পাসওয়ার্ড রিসেট লিঙ্ক পাঠান') }}
                            </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('register')}}">অ্যাকাউন্ট তৈরি করুন!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">সদস্যপদ আছে? লগইন করুন!</a>
                            </div>
                        </div>
                </div>
            </section>
        </main>
        
                                    
@endsection
