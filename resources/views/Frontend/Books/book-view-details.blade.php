@extends('Frontend.Layout.appBook')
    @section('title',' বইয়ের বিস্তারিত তথ্য')
    @section('content')
    
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <aside class="widget-course-details">
                            <div class="category-info">
                                <img src="{{ asset('uploads/books/'.$book->image) }}" data-at2x="pic/60x60-img-4@2x.jpg" class="avatar" alt>
                                <div class="course-lector">
                                    <h4>{{ $book->bTitle}}</h4>
                                    <span>{{ $book->wName}}</span>
                                </div>
                                <span class="price">
                                <span class="amount">বইটি দেখা হয়েছে</span>
                                    <span class="description-price"> <b style="color: red"> {{$book->bookViews}} </b> বার</span>
                                </span>
                            </div>
                        </aside>
                        <main>
                            <div class="row" style="padding: 5px; margin: 0px;">
                                <div class="grid-col col-lg-3" style="margin-left: 10px;">
                                    <!-- Shop -->
                                    <div class="images">
                                        <div class="picture">
                                            <div class="hover-effect" style="border-radius: 10%"></div>
                                            <img src="{{ asset('uploads/books/'.$book->image) }}" width="150px" height="150px" alt="Image">
                                        </div>
                                    </div>
                                    <!--Shop -->
                                </div>
                                <div class="grid-col col-lg-8" style="margin-left: 20px;">
                                    <div class="table-responsive">
                                        <div class="summary entry-summary" style="font-size: 120%;">
                                            <h3 style="margin-top: 0px;" class="product_title entry-title"><b> {{ $book->bTitle}} </b></h3>
                                            <div>
                                                <p style="font-family: sans-serif;">
                                                    <b>বইয়ের ক্রমিক নম্বরঃ </b>
                                                    {{ $book->BookNumber}}
                                                </p>
                                            </div>                    
                                            <div>
                                                <p style="font-family: sans-serif;">
                                                    <b>লেখকঃ </b>
                                                    {{ $book->wName}}
                                                </p>
                                            </div>                    
                                            <div>
                                                <p style="font-family: sans-serif;">
                                                    <b>বইয়ের ধরণঃ </b>
                                                    {{ $book->bCategory}}
                                                </p>
                                            </div>
                                            
                                            <div class="paddingtop5px">
                                                <p><b>বইয়ের ভাষাঃ </b>
                                                {{ $book->bLanguage}}
                                            </p>
                                            </div>
                                            <div class="paddingtop5px">
                                                <p><b>আইএসবিএন নম্বরঃ </b>
                                                {{ $book->isbn}}
                                            </p>
                                            </div>
                                            <div class="paddingtop5px">
                                                <p><b>প্রকাশনীঃ </b>
                                                {{ $book->bPublications}}
                                            </p>
                                            </div>
                                            <div class="paddingtop5px">
                                                <p><b>সফটকপিঃ </b><span class="label label-success">স্টকে আছে <a href="{{url('book-view-read/'.$book->id)}}">{{ $book->pdf}}</a></span></p>
                                            </div>
                                            
                                            <br>
                                            <div class="paddingtop5px">
                                                <p style="text-align: justify;">
                                                    <a href="#" class="cws-button bt-color-4 border-radius icon-left smaller"><i class="fa fa-facebook"></i>Facebook</a>
                                                    <a href="#" class="cws-button bt-color-3 border-radius icon-left smaller"><i class="fa fa-twitter"></i>Twitter</a>
                                                    <a href="#" class="cws-button bt-color-1 border-radius icon-left  smaller"><i class="fa fa-youtube"></i>Youtube</a>
                                                    <a href="#" class="cws-button bt-color-6 border-radius icon-left smaller"><i class="fa fa-linkedin"></i>Linkedin</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection
