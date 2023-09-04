@extends('Frontend.Layout.appOthers')
    @section('title','দাতাবৃন্দ')
    @section('content')

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <div class="coupon-enter">
                            <div class="field-coupon">
                                <input type="text" placeholder="লেখক অথবা বইয়ের নাম দিয়ে..." value="" />
                                <a href="#" class="cws-button border-radius small">খুঁজুন</a>
                            </div>
                        </div>
                        <main>
                                <h3 style="color: green">{{ $donorview->donorName}} -হতে প্রাপ্ত</h3>
                                        <p>সর্বমোট সংগৃহিতঃ <b style="color: red">৭০</b> টি</p>
                                <br>
                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection

