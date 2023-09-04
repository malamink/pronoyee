@extends('Frontend.Layout.appWriter')
    @section('title','লেখকের সার-সংক্ষেপ')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                    
                        
        <!-- For writer & books single view -->
<aside class="widget-course-details">
    <div class="category-info">
    <img src="{{ asset('uploads/writers/'.$writer->image) }}" data-at2x="pic/60x60-img-4@2x.jpg" class="avatar" alt>
        <div class="course-lector">
        <h4>{{ $writer->wNameEn}}</h4>
                <span>{{ $writer->wDbirth}}</span>
        </div>
        <span class="price">
        <span class="amount">লেখককে দেখা হয়েছে</span>
                <span class="description-price"> <b style="color: red"> {{$writer->writerViews}} </b> বার</span>
        </span>
    </div>
</aside>  
                        <main>                
                        <div class="row" style="padding: 25px; margin: 0px;">
                            <div class="grid-col col-lg-3" style="margin-left: 10px;">
                                <!-- Shop -->
                                <div class="images">
                                    <div class="picture">
                                        <div class="hover-effect" style="border-radius: 10%";></div>
                                            <img src="{{ asset('uploads/writers/'.$writer->image) }}" width="150px" height="150px" alt="Image"></th>
                                        </div>
                                </div>
                                <!--Shop -->
                            </div>
                            <div class="grid-col col-lg-8" style="margin-left: 20px;">
                                <div class="table-responsive">
                                    <div class="summary entry-summary" style="font-size: 120%;">
                                        <h3 style="margin-top: 0px;" class="product_title entry-title">{{ $writer->wNameBn}}</h3>
                                        <div>
                                            <p style="font-family: sans-serif;">
                                                <b>জন্ম তারিখ : </b>
                                                {{ $writer->wDbirth}}
                                            </p>
                                        </div>
                                        <div class="paddingtop5px">
                                            <p>
                                                <b>জন্মস্থান : </b>
                                                {{ $writer->BirthPlace}}
                                            </p>
                                        </div>
                                        
                                        <div class="paddingtop5px">
                                            <p><b> উপজেলা : </b>
                                            {{ $writer->CityName}}
                                            </p>
                                        </div>
                                        <div class="paddingtop5px">
                                            <p><b>জেলা : </b>
                                            {{ $writer->StateName}}
                                            </p>
                                        </div>                        
                                        <div class="paddingtop5px">
                                            <p><b>দেশ : </b>
                                            {{ $writer->CountryName}}
                                            </p>
                                        </div>
                                        
                                                                
                                        <div class="paddingtop5px">
                                            <p><b>মাতৃভাষা : </b>
                                            {{ $writer->Language}}
                                            </p>
                                        </div>
                                        <div class="paddingtop5px">
                                            <p><b>লেখকের সময়কাল : </b>
                                            {{ $writer->wTperiod}}
                                            </p>
                                        </div>

                                        <br>
                                        <div class="paddingtop5px">
                                            <p style="text-align: justify;">
                                                @include('Frontend.Layout.Partial._SocialIcon')
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


