@extends('Frontend.Layout.appWriter')
    @section('title','প্রণয়ীর লেখকবৃন্দ')
    @section('content')
    <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">                    
                        <h2>খোঁজকৃত লেখক</h2>
                        <main>                
                            @foreach($writersearch as $item)
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
                        {{$writersearch->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection

