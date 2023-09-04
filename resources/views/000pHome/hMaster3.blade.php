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
                        @include('homePartial._navbar')
                    </div>
                </div>
            </div>
       </header>
       <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row">
                    
<div id="home" class="page-content padding-none">
<style>
    .myScroll {
        max-height: 300px;
        overflow-y: scroll;
    }
    .glyphicon {
        padding: 3px;
    } 
</style>
<style>
* {
  box-sizing: border-box;
}

.WriterView {
  float: left;
  width: 25%;
  padding: 5px; 
}
a:hover {
    color: green;
}


/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .WriterView {
    width: 100%;
  } 
}
</style> 


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 15%;
  padding: 5px;
  height: 35px; /* Should be removed. Only for demonstration */
}
.column2 {
  float: right;
  width: 85%;
  padding: 5px;
  height: 35px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<br>
        @include('homePartial._PronoyeeleftSide')
        <div class="grid-col grid-col-9">
            <b>ত্রৈমাসিক</b>
            
                    <img src="{{asset('pHomeContent/pic/mpronoyee.gif')}}" />
                    {{$bnTime}}
                    <div class="row">
                        <div class="column1" style="background-color:#26A009;">
                            <p style="color:#FFFFFF";>সর্বশেষ আপডেট</p>
                        </div>
                        <div class="column2" style="background-color:#343792;">
                        <p style="color:#FFFFFF";><marquee>A scrolling text created with HTML Marquee element.</marquee></p>
                        </div>
                        </div>
                  
            <hr>
            @yield('content')
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


