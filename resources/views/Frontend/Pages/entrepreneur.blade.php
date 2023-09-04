@extends('Frontend.Layout.app')
    @section('title','|| উদ্যোক্তা')
    @section('content')


	<div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <div class="coupon-enter">
                            <div class="field-coupon">
                                <input type="text" name="search" placeholder="লেখক অথবা বইয়ের নাম দিয়ে..." value="{{ request('search') }}" />
                                <button type="submit">খুঁজুন</button>
                            </div>
                        </div>

    <div class="page-content woocommerce">
		<div class="container clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
					<h2>Some category</h2>
					<!-- Shop -->
					<div id="page-meta" class="group">
						<p class="woocommerce-result-count">Showing 1-9 of 23 results </p>
						<div id="list-or-grid">
							<div class="grid-view active" title="Switch to grid view">
								<i class="fa fa-th-large"></i>
							</div>
							<div class="list-view" title="Switch to list view">
								<i class="fa fa-th-list"></i>
							</div>
						</div>
						<form class="woocommerce-ordering" method="get">
							<select name="orderby" class="orderby">
								<option value="menu_order">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>
					</div>
					<ul class="products">
						<!-- product -->
						<li class="product">
							<div class="picture">
								<div class="ribbon ribbon-blue">
									<div class="banner">
										<div class="text">New</div>
									</div>
								</div>
								<img src="pHomeContent/pic/shop/270x200-img-3.jpg" data-at2x="pic/shop/270x200-img-3@2x.jpg" alt="">
								<span class="hover-effect"></span>
								<div class="link-cont">
									<a href="pic/shop/270x200-img-3%402x.jpg" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
									<a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
								</div>
								
							</div>
							<div class="product-name">
								<a href="shop-single-product.html">Woolean swuater</a>
							</div>
							
							
							<div class="product-description">
								<div class="short-description">
									<p>প্রণয়ী’র হস্তশিল্প বিষয়ক কর্মসূচি কার্যক্রমের অধীন ৩০জন নির্ভরশীল বেকার যুব নারী/মহিলাদের উলের সোয়েটার তৈরিতে সক্ষমতা উন্নয়ন করা হয়েছে। তাদের আত্মনির্ভরশীল এবং কর্মঠ করে গড়ে তোলার জন্য আপনি সহযোগীতার হাত বাড়িয়ে দিতে পারেন। উলের তৈরিকৃত পোষাক দেখে নিন। </p>
								</div>
								<!-- <div class="full-description">
									<p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
								</div> -->
							</div>
							
							<a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
						</li>
						
					</ul>
					<!--Shop -->
																			
					<!-- pagination -->
					<div class="page-pagination clear-fix">
						<a href="#"><i class="fa fa-angle-double-left"></i></a><!--
						--><a href="#">1</a><!-- 
						--><a href="#">2</a><!-- 
						--><a href="#" class="active">3</a><!-- 
						--><a href="#"><i class="fa fa-angle-double-right"></i></a>
					</div>
					<!--/ pagination -->
				</div>
			
			</div>
		</div>
	</div>
    
		  
                    </div>
                    <div align="right";>
                    {{$writerview->links()}}
                    </div>
                     
                </div>
                  
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