<nav class="main-nav">
    <ul class="clear-fix">
        <li>
            <a href="{{url('/')}}" class="active"><b>প্রণয়ী</b></a>
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
                <li><a href="rupload.php">তথ্য আপলোড</a></li>
                <li><a href="#">ফরম</a></li>
            </ul>
            <!-- / sub menu -->
        </li>
        <li>
            <a href="{{url('writup-view')}}"><b>ত্রৈমাসিক</b></a>
        </li>
		<li>
            <a href="{{url('writup-view')}}"><b>উদ্যোক্তা </b></a>
        </li>
        <li>
			<a href="{{ route('login') }}"><b>লগইন</b></a>
            
            <!-- sub menu -->
            <ul>
				
                <li>
				@if(Auth::check())
            {{ Auth::user()->UserName }}
            @endif
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
        <!-- </li>
        <li>
            <div class="search-container">
				<form class="" type="get" action=" {{url('/search')}} ">
					<div class="">
					<input class="search expandright" id="searchright" type="search" name="query" placeholder="লেখক অথবা বই খুঁজুন...">
					<label class="button searchbutton" for="searchright" type="submit"><span class="mglass">&#9906;</span></label>

					</div>
					
				</form>
            </div>
        </li> -->
    </ul>
</nav>

  
<style>
 
.button {
	display: inline-block;
	margin: 0px 0px;
	background-color: none; 
	font-size: 14px;
	padding-left: 0px;
	padding-right: 0px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	color: red;
	text-decoration: none;
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.button:hover {
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
	background-color: none;
	color: green;
}

.search-container {
	position: relative;
	display: inline-block;
	height: 50px;
	width: 50px;
	vertical-align: middle;
}

.mglass {
	display: inline-block;
	pointer-events: none;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
}

.searchbutton {
	position: absolute;
	font-size: 20px;
	width: 100%;
	margin: 0;
	padding: 0;
}

.search:focus + .searchbutton {
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
	background-color: none;
	color: black;
}

.search {
	position: absolute;
	left: 49px; /* Button width-1px (Not 50px/100% because that will sometimes show a 1px line between the search box and button) */
	background-color: white;
	outline: none;
	border: solid 1px;
	padding: 0;
	width: 0;
	height: 100%;
	z-index: 10;
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
}

.search:focus {
	width: 700px; /* Bar width+1px */
	padding: 0 16px 0 0;
}

.expandright {
	left: auto;
	right: 49px; /* Button width-1px */
}

.expandright:focus {
	padding: 0 0 0 16px;
}
</style>
