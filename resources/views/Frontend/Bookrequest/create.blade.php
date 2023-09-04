<section class="grid-col grid-col-4 footer-contact-form">
		<h2 class="corner-radius" style="background-color: #e7002a;">অনলাইনে বইয়ের অনুরোধ</h2>
		<div class="email_server_responce"></div>
			@if(session('status'))
				<h6 class="alert alert-success">{{session('status')}}</h6>
			@endif
		<form action="{{route('bookrequests.store')}}" method="POST" enctype="multipart/form-data" class="contact-form" >
					@csrf
			<p>
				<span class="your-name"><input type="text" name="name" value="" size="40" placeholder="আবেদনকারীর নাম" aria-invalid="false" required></span>
			</p>
			<p><span class="your-email"><input type="text" name="phone" value="" size="40" placeholder="আবেদনকারীর ফোন নম্বর" aria-invalid="false" required></span> </p>
			<p><span class="your-email"><input type="text" name="email" value="" size="40" placeholder="আবেদনকারীর ইমেইল নম্বর" aria-invalid="false" required></span> </p>
			<p><span class="your-message"><textarea name="message" placeholder="বইয়ের নামসহ লেখকের নাম লিখুন " cols="40" rows="5" aria-invalid="false" required></textarea></span> </p>
			<button type="submit" class="cws-button bt-color-3 border-radius alt icon-right">Submit <i class="fa fa-angle-right"></i></button>
		</form>
	</section> 