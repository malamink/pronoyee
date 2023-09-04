@extends('Frontend.Layout.app')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial.left')
                    <div class="grid-col grid-col-9">
                        <div class="coupon-enter">
                            <div class="field-coupon">
                                <input type="text" placeholder="লেখক অথবা বইয়ের নাম দিয়ে..." value="" />
                                <a href="#" class="cws-button border-radius small">খুঁজুন</a>
                            </div>
                        </div>
                        <main>                
                        <section>
							<h2>আমাদের ইচ্ছে</h2>
							<p style="text-align: justify;">প্রাণবন্ত জেগে থাকার আনন্দ নিয়ে আমাদের এ ইচ্ছেগুলোর জন্ম হয়েছে। আমরা বাঙালি, বাঙলা আমাদের মায়ের ভাষা। বাঙলায় কথা বলতে আমরা গর্ববোধ করি। সে কারণে বাঙলায় মুদ্রিত সাহিত্য নির্ভর বইগুলো এবং পৃথিবীর ইতিহাসের ধারাবাহিকতা ধরে রাখার জন্য প্রণয়ী পাঠাগারের সৃষ্টি হয়েছে। মানুষ প্রতিনিয়ত অজানাকে আহরণ করছে; আহরনকৃত নির্যাস থেকে জন্ম দিচ্ছে এক একটি পথ,  প্রথা, দর্শন, ধর্মের।</p>
							<!-- accordions -->
							<div class="accordions">
								<!-- content-title -->
								<div class="content-title active">পাঠক</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">মূক</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">বধির</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">আড্ডা</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">দিবস</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">সম্মাননা</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">বন্ধু</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
								<!-- content-title -->
								<div class="content-title">প্রকাশনা</div>
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">Nullam elementum tristique risus nec pellentesque. Pellentesque bibendum nunc eget nunc hendrerit auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur gravida urna nisl</div>
								<!--/accordions content -->
							</div>
							<!--/accordions -->
						</section>
                        </main>        
                    </div>
                </div>
            </div>
        </div>
    @endsection

