<!DOCTYPE html> 
<html lang="en">
    <head class="only-color">
        @include('homePartial._head')
    </head>
    <body class="shop">
        <header class="only-color">
            <div class="sticky-wrapper">
                <div class="sticky-menu">
                    <div class="grid-row clear-fix">
                        @include('homePartial._logo')
                        @include('homePartial._navbar')
                    </div>
                </div>
            </div>
            <!-- page title -->
            <div class="page-title">
			<div class="grid-row">
				<h1>বইসমূহ</h1>
				<!-- bread crumb -->
				<nav class="bread-crumb">
					<a href="{{url('/')}}">নীড়</a>
					<i class="fa fa-long-arrow-right"></i>
					<a href="{{url('book-view')}}"> সকল বই</a>
				</nav>
				<!-- / bread crumb -->
			</div>
		</div>
		<!-- page title -->
       </header>
       <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row">
                    <div id="home" class="page-content padding-none">
                        <br>
                        @include('Frontend.sidebar')
                        <div class="grid-col grid-col-9"> 
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>   
        </div> 
       <footer>
            <div class="footer-bottom">
                @include('homePartial._bottom')
            </div>
        </footer>
        @include('homePartial._script')
    </body>
</html>


