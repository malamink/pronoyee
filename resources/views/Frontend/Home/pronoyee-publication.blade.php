@extends('Frontend.Layout.appOthers')
   @section('title',' প্রণয়ী পাবলিকেশন ') 
    @section('content') 
    

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main> 
                        <div class="container-tabs active" data-tabs-id="cont-tabs1">
										<h3>প্রণয়ী পাবলিকেশন</h3>
										<p>
                                            প্রান্তিক জনগণের সার্বিক বিষয়ে বিবেচনা করে প্রণয়ী পাঠাগার কর্তৃক কিছু কর্মসূচি গ্রহণ করেছে। যা আলোচনান্তে বিশদ বর্ণনা করা হলো।  
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

