@extends('Frontend.Layout.appBook')
    @section('title','প্রকাশনী')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">

                        <main> 

                                <h3 style="color: green">{{ $publicationview->PublicationName}} -এর প্রকাশিত বইসমূহ</h3>
                                <p> {{ $publicationview->Address}} <b style="color: red"></p>
                                <p>সংগৃহিতঃ <b style="color: red"> {{$publicationnum}}</b>  টি বই</p>
                                @foreach($allpublicationnum as $item)
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
                    <div align="right";>
                    {{$allpublicationnum->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
