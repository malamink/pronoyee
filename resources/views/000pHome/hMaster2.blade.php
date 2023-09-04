<!DOCTYPE html>
<html lang="en">
    <head class="only-color">
        @include('homePartial._head')
    </head>
    <body>
        <header class="only-color">
            <div class="sticky-wrapper">
                <div class="sticky-menu">
                    <div class="grid-row clear-fix">
                        @include('homePartial._logo')
                        @include('homePartial._navbar2')
                    </div>
                </div>
            </div>
       </header>
       <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row">
                    <div id="home" class="page-content padding-none">
                        <br>
                        @include('homePartial._leftSide')
                    </div>
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


