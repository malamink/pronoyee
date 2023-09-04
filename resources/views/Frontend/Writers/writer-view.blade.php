@extends('Frontend.Layout.appWriter')
    @section('title','প্রণয়ীর লেখকবৃন্দ')
    @section('content')
    
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <h3>লেখকবৃন্দ</h3>
                        <p style="color: green"> সংগৃহিত লেখকঃ <b style="color: red"> {{$writers}} </b>টি</p>
                        <center>
                            <form class="" type="get" action=" {{url('/writer-search')}} ">
                                <div class="search">
                                    <input type="text" name="querywriter" class="searchTerm" placeholder="আপনার কাঙ্খিত লেখকের নাম দিয়ে খুঁজুন...">
                                    <button type="submit" class="searchButton">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form
                        </center>
                        <br>
                        <main>                
                            @foreach($writerview as $item)
                                <div class="WriterView">
                                    <div class="portfolio-item">
                                        <div class="picture">
                                            <div class="hover-effect" style="border-radius: 5%">
                                        </div>
                                        <div class="link-cont">
                                            <a href="{{ url('writer-view-single/'.$item->id)}}" class="cws-right fa fa-heart"></a>
                                        </div>
                                        <img src="{{ asset('uploads/writers/'.$item->image) }}" width="70px" height="70px" alt="Image">             
                                    </div>
                                    <h3><span><a href="{{url('writer-view-details/'.$item->id)}}">{{ $item->wNameBn}}</a></span></h3>
                                    </div>
                                </div>
                            @endforeach
                        </main>                              
                    </div>
                    <div class="grid-row clear-fix"></div> 
                    <div align="right";>
                    {{$writerview->links()}}
                    </div>                     
                </div>                  
            </div>
        </div>
</div>

    @endsection

<style>
.paddingtop5px {
padding-top: 10px;
}

.pagination > li:before {
content: none !important;
}
</style>


