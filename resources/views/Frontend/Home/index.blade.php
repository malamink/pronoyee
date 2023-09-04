@extends('Frontend.Layout.app')
   @section('title','নীড়পাতা') 
    @section('content') 
        <!-- / page  -->
        <div class="grid-row" style="color: white;">
            @include('Frontend.Home.Partial._slider')
        </div>
        <br>
        <div class="text-center">
            <!--Star registration with #login-->
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#login">লগইন করুন</button>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registration">নিবন্ধন করুন</button>
            <!-- Start #login -->
            <div class="modal fade" id="login" role="dialog">
                <div class="grid-row" style="padding-top: 50px">
                <br>
                    @include('Frontend.Home.Partial._login')
                </div>
            </div>
            <!-- End #login -->
            <!--Start #registration form-->
            <div class="modal fade" id="registration" role="dialog">
                <br>
                @include('Frontend.Home.Partial._register')
            </div>
            <!--End #registration form-->

            <!-- section -->
            <section class="padding-section">
                <div class="grid-row clear-fix">
                    @include('Frontend.Home.Partial._subjects')
                </div>
            </section>
            <!-- / section -->
            <hr class="divider-color" />
            <!-- section -->
            <section class="fullwidth-background padding-section">
                @include('Frontend.Home.Partial._ourwise')
            </section>
            <!-- / section -->
            <!-- paralax section -->
            <div class="parallaxed">
                @include('Frontend.Home.Partial._count')
            </div>
            <!-- / paralax section -->
            <!-- section -->
            <section class="fullwidth-background padding-section">
                @include('Frontend.Home.Partial._getbook')
            </section>
            <!-- / paralax section -->
            <hr class="divider-color" />
            <!-- paralax section -->
            <section class="padding-section">
                @include('Frontend.Home.Partial._honorary')
            </section>
            <!-- / paralax section -->
            <hr class="divider-color" />
            <!-- paralax section -->
            <section class="fullwidth-background padding-section">
                <div class="grid-row clear-fix">
                @include('Frontend.Home.Partial._about-pronoyee')
                </div>
                
            </section>
            <!-- paralax section -->
            <!-- parallax section -->
            <div class="parallaxed">
                @include('Frontend.Home.Partial._subscribe')
            </div>
            <!-- parallax section -->
            <!-- section -->
            <section class="grid-row clear-fix padding-section">
                @include('Frontend.Home.Partial._our-writers')
            </section>
            <!-- / section -->
            <hr class="divider-color" />
            <!-- section -->
            <section class="padding-section">
                @include('Frontend.Home.Partial._ptube')
            </section>
            <!-- / section -->
            <hr class="divider-color" />
            <!-- section -->
            <section class="padding-section">
                @include('Frontend.Home.Partial._congatulation')
            </section>
            <!-- / section -->
            <div class="mapouter">
                @include('Frontend.Home.Partial._gmap')
            </div>
            <!-- footer -->
            <footer>
                <div class="grid-row">
                    <div class="grid-col-row clear-fix">
                        @include('Frontend.Home.Partial._fsection')
                    </div>
                </div>
                
    @endsection

