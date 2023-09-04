@extends('Frontend.Layout.appWriter')
    @section('title','লেখকের সময়কাল')
    @section('content')

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main>                
                            <h3 style="color: green">{{ $writertimeperiod->PeriodName}} -এর লেখকবৃন্দ</h3>
                            <p>সংগৃহিতঃ <b style="color: red">{{$writertimeperiodnum}}</b> জন</p>
                            <br>
                            @foreach($allwritertimeperiod as $item)
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
                    <div align="right";>
                    {{$allwritertimeperiod->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection


 