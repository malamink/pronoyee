@extends('Frontend.Layout.app')
    @section('title','একটি সৃজনশীল শিল্প-সাহিত্য ও সংস্কৃতি বিষয়ক ত্রৈমাসিক')
    @section('content')

    <style>
* {
  box-sizing: border-box;
}

.WriterView {
  float: left;
  width: 33%;
  padding: 5px; 
}
a:hover {
    color: #343792;
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
.ptext {
  overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
           line-clamp: 2; 
   -webkit-box-orient: vertical;
}


    
</style>

            <div id="home" class="page-content padding-none">            
              <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                  @include('Frontend.Layout.Partial._left')
                  <div class="grid-col grid-col-9">
                    @include('Frontend.Layout.Partial._headerPronoyee')
                    <h3>লেখকবৃন্দ</h3>
                    <center>
                        <form class="" type="get" action=" {{url('/writer-search')}} ">
                            <div class="search">
                                <input type="text" name="querywriter" class="searchTerm" placeholder="শিরোনাম দিয়ে আপনার কাঙ্খিত বিষয়বস্তু খুঁজুন...">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form
                    </center>
                    <br>
                    <main>                
                      @foreach($writup as $item)
                        <div class="WriterView">
                          <div class="portfolio-item">
                              <div class="picture">
                                  <div class="hover-effect" style="border-radius: 5%">
                              </div>
                              <img src="{{ asset('uploads/writups/'.$item->image) }}" width="70px" height="70px" alt="Image">             
                          </div>
                          <h3 style="color: #343792"><b>
                              <a href="{{url('writup-view-details/'.$item->id)}}" style="itext-align: justify;" >
                                {{ $item->WritupTitle}} 
                                </a> 
                            </b>
                          </h3>
                          <p><b>{{ $item->WriterName}}</b></p>
                          <div class="ptext">
                              <a href="{{url('writup-view-details/'.$item->id)}}" style="text-align: justify;" >
                              {!! $item->WritupContent!!} 
                              </a>                        
                          </div>
                          
                          <div class="time">
                            <i class="fa fa-clock-o"> </i> {{ $item->created_at->diffForHumans() }}
                            <i class="fa fa-eye"> </i> 00
                          </div>
                          
                        </div>
</div>
                    @endforeach  
                    </main>                              
                  </div>
                  <div class="grid-row clear-fix"></div> 
                  <div align="right";>
                  {{$writuptotal->links()}}
                </div>                     
              </div>                  
            </div>

    @endsection
