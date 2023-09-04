@extends('Frontend.Layout.appBook')
@section('title',' Book view')
@section('content')


        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">

<h2>খোঁজকৃত বই</h2>

<main>               
    @foreach($books as $item)
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
                        {{$booksearch->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection

