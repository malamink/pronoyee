@extends('Frontend.Layout.app')
    @section('title','একটি সৃজনশীল শিল্প-সাহিত্য ও সংস্কৃতি বিষয়ক ত্রৈমাসিক')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                    @include('Frontend.Layout.Partial._headerPronoyee')         
                   
                        <main>                
                            
<style> 
.newspaper1 {
  columns: 100px 2;
  text-align: justify;
  padding:10px;

}
</style>

<style>
    .myScroll {
        max-height: 700px;
        overflow-y: scroll;
    }

    .glyphicon {
        padding: 3px;
    } 
</style>

<aside class="widget-navigation  myScroll">
<h1 style="color: #8A2BE2">{{ $writup->WritupTitle}}</h1>
<p><strong>{{ $writup->WriterName}}</strong></p>

<div class="time">
<i class="fa fa-clock-o"> </i> {{ $writup->created_at->diffForHumans() }}
<i class="fa fa-eye"> </i>  00
</div>
<p align="center"><img src="{{ asset('uploads/writups/'.$writup->image) }}" width="270px" height="200px" alt="Image"></p>
<div class="newspaper1">
    {!! $writup->WritupContent!!}
</div>

</aside>

                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection


