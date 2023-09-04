@extends('Frontend.Layout.appBook')
@section('title',' প্রণয়ীর বইসমূহ')
@section('content')


        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                    <h2>বইসমূহ</h2>
                    <p style="color: green"> সংগৃহিত বইঃ <b style="color: red"> {{$books}} </b>টি</p>
                    <center>
                        <form class="" type="get" action=" {{url('/book-search')}} ">
                            <div class="search">
                                <input type="text" name="querybook" class="searchTerm" placeholder="আপনার কাঙ্খিত বইয়ের নাম দিয়ে খুঁজুন...">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form
                    </center>
                    <br>
                    <main>               
                        @foreach($bookview as $item)
                            <div class="BookView">
                                <div class="portfolio-item">
                                    <div class="picture">
                                        <div class="hover-effect" style="border-radius: 5%"></div>
                                            <div class="link-cont">
                                                <a href="{{ asset('uploads/books/'.$item->image) }}" class="fancy fa fa-search"></a>
                                            </div>
                                            <img src="{{ asset('uploads/books/'.$item->image) }}" width="70px" height="70px" alt="Image">          
                                        </div>
                                    <h3><span><a href="{{url('book-view-details/'.$item->id)}}">{{ $item->bTitle}}</a></span></h3>
                                </div>
                            </div>
                        @endforeach
                    </main> 
                </div> 
                <div class="grid-row clear-fix"></div> 
                <div align="right";>
                {{$bookview->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
