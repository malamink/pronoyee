@extends('Frontend.Layout.appOthers')
   @section('title',' মেধা বিকাশ ') 
    @section('content') 
    

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main> 
                        <div class="container-tabs active" data-tabs-id="cont-tabs1">
										<h3>মেধা বিকাশ</h3>
										<p>
                                            মেধা বিকাশের জন্য আমরা প্রান্তিক অঞ্চলের ছেলে মেয়েদের জন্য ফ্রি-কোচিং এর ব্যবস্থা করেছি।  এ কোচিং-এর উদ্দেশ্য হবে পঞ্চশ, এসএসসি, এইচএসসি বা সমমানের পরীক্ষায় ছেলেমেয়েদের ঝরে পড়ার সম্ভাবনা থেকে বিরত রাখা।   
                                        </p>
										<div class="columns-row">
											<div class="columns-col columns-col-6">
                                            <section>
                                                হতে পারো বন্ধু 
											</section>
											</div>
											<div class="columns-col columns-col-6">
												<section>
													তুমি আমার
												</section>
											</div>
										</div>
									</div>
                        </main>        
                    </div>
                    <!-- <div align="right";>
                    {{$allawardcategorynum->links()}}
                    </div> -->
                </div>
            </div>
        </div>
    @endsection

    <style>
    .paddingtop5px {
        padding-top: 10px;
    }

    .pagination > li:before {
        content: none !important;
    }
</style>

