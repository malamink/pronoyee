@extends('Frontend.Layout.appOthers')
    @section('title','বিভিন্ন কার্যক্রমের ভিডিও')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <div class="coupon-enter">
                            <div class="field-coupon">
                                <input type="text" placeholder="লেখক অথবা বইয়ের নাম দিয়ে..." value="" />
                                <a href="#" class="cws-button border-radius small">খুঁজুন</a>
                            </div>
                        </div>
                        <main>                
                        @foreach($ptube as $ptubeList)
                        <div class="VidewView">
                            <div class="portfolio-item">
                                <div class="picture">
                                        <iframe width="100%" height="auto" src="{{ url('uploads/ptubes/'.$ptubeList->Video) }}" frameborder="0" allow="accelerometer; autoplay=false; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         
                                    </div>
                                    <h3><span><a href="{{url('ptube-view/'.$ptubeList->id)}}">{{ $ptubeList->VidTitle}}</a></span></h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <style>
* {
  box-sizing: border-box;
}

.VidewView {
  float: left;
  width: 25%;
  padding: 5px; 
}
a:hover {
    color: red;
}


/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .VidewView {
    width: 100%;
  }
}
</style>