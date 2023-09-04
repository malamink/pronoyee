@extends('Frontend.Layout.appOthers')
@section('title','ইউজার ড্যাশবোর্ড')
@section('content')

    <div id="home" class="page-content padding-none">            
        <div class="grid-row clear-fix">
            <div class="grid-col-row" style="margin-top: 20px;
                @include('Frontend.Layout.Partial._left')
                <div class="grid-col grid-col-9">
                    <section>
                        <!-- tabs -->
                        <div class="tabs">
                            <div class="block-tabs-btn clear-fix">
                            <div class="tabs-btn active" data-tabs-id="tabs1">প্রোফাইল</div>
                            <div class="tabs-btn" data-tabs-id="tabs2"> লেখক</div>
                            <div class="tabs-btn" data-tabs-id="tabs3">বই</div>
                            <div class="tabs-btn" data-tabs-id="tabs4">পিডিএফ</div>
                            <div class="tabs-btn" data-tabs-id="tabs5">লেখা</div>
                            <div class="tabs-btn" data-tabs-id="tabs6">আপলোড</div>
                            <div class="tabs-btn" data-tabs-id="tabs7">দাতা</div>
                        </div>
                        <!-- tabs keeper -->
                        <div class="tabs-keeper">
                        <!-- tabs container -->
                        <div class="container-tabs active" data-tabs-id="cont-tabs1">
                            <div class="row-fluid sortable">
                                <div class="box span12">
                                    <div class="box-header" data-original-title>
                                        <img src="pHomeContent/pic/al-amin_khan_sagar.jpg" style="border-radius: 50%" >                        
                                        <p> 
                                            <b>স্বাগতম</b><br>
                                            <b>আল-আমিন খান সাগর</b><br>
                                            <b>নিবন্ধনের ধরণঃ </b>পাঠক<br>
                                            <b>ফোন নম্বরঃ </b>০১৬৮৯০৬১৮৮৬<br>
                                            <b>ই-মেইলঃ </b>dotshine04@gmail.com<br>
                                            <b>জেলাঃ </b>বগুড়া<br>
                                            <b>দেশঃ </b>বাংলাদেশ<br> 
                                        </p>
                                        <div class="box-icon">
                                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--/b-->
                            </div>
                            <!--/row-->
                            <br />
                            <p> প্রণয়ী পরিবারের একজন সম্মানিত সদস্য হওয়ার জন্য আপনাকে স্বাগতম। আপনার সহযোগী মনোভাব নিয়ে যাবে আমাদের ইচ্ছের সর্বোচ্চ শিখরে। আপনি সহযোগীতা করতে পারেন পিডিএফ বই, লেখকের তথ্য এবং আপনার মূল্যবান লেখনি দিয়ে। এ জন্য ট্যাবে ক্লিক করে দেখে নিতে পারেন। ধন্যবাদ।  </p>
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs2">
                            @include('Users.Partial._addwriter')
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs3">
                            @include('Users.Partial._addbook')
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs4"><strong>Add writeup</strong><br /> 
                            @include('Users.Partial._addpdf')
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs5"><strong>Add writeup</strong><br /> 
                            @include('Users.Partial._addwritup')
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs6"><strong>Uploaded</strong><br />
                            @include('Users.Partial._uploaded')
                        </div>
                        <!--/tabs container -->
                        <!-- tabs container -->
                        <div class="container-tabs" data-tabs-id="cont-tabs7"><strong>Donet</strong><br /> 
                            @include('Users.Partial._donet')
                        </div>
                        <!--/tabs container -->
                    </section>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

