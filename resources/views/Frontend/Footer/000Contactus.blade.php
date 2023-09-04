@extends('Frontend.Layout.appOthers')
    @section('title','যোগাযোগ')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main>     
                            <section>
                                <h1>যোগাযোগ</h1>
                                
                                ggg
                                <br>
                                <br>
                                <div class="widget-contact-form">
                                    <!-- contact-form -->
                                    <div class="info-boxes error-message alert-boxes error-alert" id="feedback-form-errors">
                                        <strong>Attention!</strong>
                                        
                                        <div class="message"></div>
                                    </div>
                                    
                                    <div class="email_server_responce"></div>
                                        <form action="#" method="    post" class="contact-form alt clear-fix">
                                            <input type="text" name="name" value="" size="40" placeholder="আপনার নাম দিন" aria-invalid="false" aria-required="true">
                                            <input type="text" name="email" value="" size="40" placeholder="আপনার ইমেইল দিন" aria-required="true">
                                            <input type="text" name="subject" value="" size="40" placeholder="বিষয় লিখুন" aria-invalid="false" aria-required="true">
                                            <textarea name="message"  cols="40" rows="3" placeholder="আপনার বার্তা লিখুন" aria-invalid="false" aria-required="true"></textarea>
                                            <input type="submit" value="প্রেরণ করুণ" class="cws-button border-radius alt">
                                        </form>
                                        <!--/contact-form -->
                                    </div>
                            </section>
                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection

