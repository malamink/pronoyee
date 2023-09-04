<nav class="main-nav">
    <ul class="clear-fix">
        <li>
            <a href="{{url('/')}}" class="active"><b>নীড়পাতা</b></a>
        </li>
        <li class="megamenu">
            <a href="{{url('writer-view')}}"><b>লেখকবৃন্দ</b></a>
        </li>
        <li>
            <a href="{{url('book-view')}}"><b>বইসমূহ</b></a>
        </li>
        <li>
            <a href="#"><b>নিয়মাবলী</b></a>
            <!-- sub menu -->
            <ul>
                <li><a href="{{url('notice')}}">নোটিশ</a></li>
                <li><a href="{{url('form')}}">ফরম</a></li>
            </ul>
            <!-- / sub menu -->
        </li>
        <li>
            <a href="{{url('writup-view')}}"><b>ত্রৈমাসিক</b></a>
        </li>
		<!-- <li>
            <a href="{{url('entrepreneur')}}"><b>উদ্যোক্তা </b></a>
        </li> -->
        <li>			
            @if(Auth::check())
            {{ Auth:: user ()-> email }}
			<ul>
                <li>
                <a class="dropdown-item" href="{{('user-dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('লগআউট') }}
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                
            </ul>
            <!-- / sub menu -->
			@else
			<a href="{{ route('login') }}"><b>লগইন</b></a>
            @endif
            </b></a>
            <!-- sub menu -->
            
        </li>
        
    </ul>
</nav>
