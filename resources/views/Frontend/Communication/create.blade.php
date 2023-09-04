@extends('Frontend.Layout.appOthers')
    @section('title','যোগাযোগ')
    @section('content')


    	<!-- page content -->
	<div class="page-content woocommerce">
		<!-- map -->
		<div class="container clear-fix">
            <div class="map wow fadeInUp">
                @include('Frontend.Home.Partial._gmap')
            </div>
		</div>
		<!-- / map -->
		<!-- contact form section -->
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-8">
					<section>
						<h2>যোগাযোগ </h2>
                        @if(session('status'))
                            <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif
						<div class="widget-contact-form">
                            
                            <form action="{{route('communications.store')}}" method="POST" enctype="multipart/form-data" class="contact-form alt clear-fix">
                                @csrf
                                <input type="text" name="name" value="" size="40" placeholder="আপনার নাম দিন" aria-invalid="false" aria-required="true">
								<input type="text" name="email" value="" size="40" placeholder="আপনার ইমেইল দিন" aria-required="true">
									@error ('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
								<input type="text" name="subject" value="" size="40" placeholder="বিষয় লিখুন" aria-invalid="false" aria-required="true">
								<textarea name="message"  cols="40" rows="3" placeholder="আপনার বার্তা লিখুন" aria-invalid="false" aria-required="true"></textarea>
								<input type="submit" value="প্রেরণ" class="cws-button border-radius alt">
							</form>
							<!--/contact-form -->
						</div>
					</section>
				</div>
				<div class="grid-col grid-col-4 widget-address">
					<section>
						<h2>আমাদের ঠিকানা</h2>
						<address>
							<p>প্রণয়ী'র সূচনালগ্নে কার্যক্রম পরিচালনা হতো ঢাকায়। বর্তমানে ঢাকা হতে নিজস্ব ঠিকানায় প্রণয়ী'র কার্যক্রম চলমান। ঢাকার ঠিকানায় প্রশাসনিক কার্যক্রম পরিচালনা হয়। সেজন্য দুটি ঠিকানা উল্লেখ করা হলো</p>
							<p><strong class="fs-18">স্থায়ী ঠিকানা:</strong><br/>বেলগাড়ী, ভবানীপুর,  <br/> শেরপুর, বগুড়া</p>
							<p><strong class="fs-18">পূর্বের ঠিকানা:</strong><br/>২/৪, দারুস সালাম,  <br/> মিরপুর, ঢাকা-১২১৬</p>
							<p><strong class="fs-18">ফোন নাম্বার:</strong><br/>
								<a href="#">(+৮৮০) ১৬৮৯০৬১৮৮৬</a><br/>
								<a href="#">(+৮৮০) ১৭৩৫৫৪২৫০৭</a><br/>
							</p>
							<p><strong class="fs-18">ই-মেইল:</strong><br/>
								<a href="#"><span class="__cf_email__" data-cfemail="4a3f24230a2e25272b232464292527">dotshine04@gmail.com</span></a><br/>
								<a href="#"><span class="__cf_email__" data-cfemail="3744565b5244774e5842451a445e43521954585a">pronoyeepathagar@info.pronoyee.org</span></a>
							</p>
						</address>
					</section>
				</div>
			</div>
		</div>
		<!-- / contact form section -->
	</div>
	<!-- / page content -->







@endsection


