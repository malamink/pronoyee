<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  padding: 12px;
  width: 20%;
  text-align: center;
  height: 50px; /* Should be removed. Only for demonstration */
}
.column2 {
float: left;
padding: 12px;
width: 60%;
height: 50px; /* Should be removed. Only for demonstration */
}
.column3 {
float: right;
padding: 12px;
width: 20%;
  text-align: center;
  height: 50px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
  .column2 {
    width: 100%;
  }
  .column3 {
    width: 100%;
  }
}
</style>


<b>ত্রৈমাসিক</b>
<img src="{{asset('pHomeContent/pic/mpronoyee.gif')}}" />
{{$bnTime}}

<div class="row">
  <div class="column" style="background-color:#343792;">
   <p style="color:#FFFFFF";>সর্বশেষ আপডেট</p>
  </div>
  <div class="column2" style="background-color:#26A009;">
    <p style="color:#FFFFFF";>
    <marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();">
           আপনার লেখা কবিতা, গল্প, উপন্যাস, ভ্রমন কাহিনী  আমাদের মেইল করুন 
           </marquee>
    </p>
  </div>
  <div class="column3" style="background-color:#343792;">
    <p style="color:#FFFFFF";>
    <a href="{{ url('writup-view') }}">নীড়</a>
    </p>
  </div>
</div>
