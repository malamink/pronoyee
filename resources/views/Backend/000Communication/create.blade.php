@extends('pHome.MasterLeft')
@section('content') 
 

<main>
    <div class="grid-col grid-col-9">       
        <section>
            <h1>যোগাযোগ</h1>
            <br>
            <div class="widget-contact-form">
                <!-- contact-form -->
                <div class="info-boxes error-message alert-boxes error-alert" id="feedback-form-errors">
                                <strong>Attention!</strong>
                                <div class="message">
                                
                                </div>
                </div>
                @if(session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                    <form action="{{ route('communications.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="ContactName" value="" size="40" placeholder="আপনার নাম দিন">
                        <input type="text" name="Email" value="" size="40" placeholder="আপনার ইমেইল দিন">
                        <input type="text" name="ContactSubject" value="" size="40" placeholder="বিষয় লিখুন">
                        <textarea name="Message"  cols="40" rows="3" placeholder="আপনার বার্তা লিখুন"></textarea>
                        <button type="submit" class="btn btn-primary">প্রেরণ করুণ</button>
                        
                        <button type="reset" class="btn btn-danger">বাতিল</button>
                    </form>
                    <!--/contact-form -->
                </div>
        </section>   

    </div>    
</main>

        


@endsection


