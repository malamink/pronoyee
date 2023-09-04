

<!--left side start-->
<style>
    .myScroll {
        max-height: 300px;
        overflow-y: scroll;
    }
    .glyphicon {
        padding: 3px; 
    } 
</style>
<style>
* {
  box-sizing: border-box;
}

.WriterView {
  float: left;
  width: 25%;
  padding: 5px; 
}
a:hover {
    color: green;
}


/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .WriterView {
    width: 100%;
  } 
}
</style> 

<!--left side start-->
<style>
    .myScroll {
        max-height: 300px;
        overflow-y: scroll;
    }
    .glyphicon {
        padding: 3px;
    } 
</style>
<style>
* {
  box-sizing: border-box;
}

.WriterView {
  float: left;
  width: 25%;
  padding: 5px; 
}
a:hover {
    color: green;
}


/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .WriterView {
    width: 100%;
  } 
}
</style> 
<div class="grid-col grid-col-3 sidebar">
	<!-- widget search -->
	<aside class="widget-search">
		<form method="get" class="search-form" action="#">
			<label>
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:">
			</label>
			<input type="submit" class="search-submit" value="GO">
		</form>
	</aside>
	<aside class="widget-navigation">
		<h2>সাম্প্রতিক বিষয়সমূহ</h2>
		<aside class="widget-navigation  myScroll">
			<!-- toggles -->
			<div class="toggles">  
				<!-- content-title -->
				<div class="content-title"><span>লেখকের সময়কাল</span></div>
				<!--/content-title -->
				<!-- toggles content -->
				<div class="content widget-categories">
					<ul>
						
						@foreach($writertime as $timeperiodList)
							<li><a href="{{url('writer-time-period/'.$timeperiodList->id)}} "> {{ $timeperiodList->PeriodName}}  </a></li>	
						@endforeach
						
					</ul>
				</div>
				<!--/toggles content -->
				<!-- content-title -->
				<div class="content-title"><span>বইয়ের ক্যাটাগরি</span></div>
				<!--/content-title -->
				<!-- toggles content -->
				<div class="content widget-categories">
					<ul>
                    	@foreach($bookcategory as $bookcategoryList)
							<li><a href="{{url('book-cat/'.$bookcategoryList->id)}} "> {{ $bookcategoryList->BookCatName}}  </a></li>	
						@endforeach                      
					</ul>
				</div>
				<!--/toggles content -->
				<!-- content-title -->
				<div class="content-title"><span>প্রকাশনীসমূহ</span></div>
				<!--/content-title -->
				<!-- toggles content -->
				<div class="content widget-categories">
					<ul>
                    	@foreach($publication as $publicationList)
							<li><a href="{{url('publication-view/'.$publicationList->id)}} "> {{ $publicationList->PublicationName}}  </a></li>	
						@endforeach                      
					</ul>
					</ul>
				</div>
				<!--/toggles content -->
				<!-- content-title -->
				<div class="content-title"><span>জেলাভিত্তিক লেখকবৃন্দ</span></div>
					<!--/content-title -->
					<!-- toggles content -->
					<div class="content widget-categories">
						<ul>
							@foreach($district as $districtList)
								<li><a href="{{url('district-wise-writer/'.$districtList->id)}} "> {{ $districtList->StateName}}  </a></li>	
							@endforeach
						</ul>
					</div>
					<!--/toggles content -->
					<!-- content-title -->
					<div class="content-title"><span>কর্মসূচি</span></div>
					<!--/content-title -->
					<!-- toggles content -->
					<div class="content widget-categories">
						<ul>
                        	@foreach($programme as $programmeList)
								<li><a href="{{url('programme-view/'.$programmeList->id)}} "> {{ $programmeList->ProgrammeName}}  </a></li>	
							@endforeach
						</ul>
					</div>
					<!--/toggles content -->
					<!-- content-title -->
					<div class="content-title"><span>সম্মাননা</span></div>
					<!--/content-title -->
					<!-- toggles content -->
					<div class="content widget-categories">
						<ul>
							@foreach($award as $awardList)
								<li><a href="{{url('award-view/'.$awardList->id)}} "> {{ $awardList->AwardName}}  </a></li>	
							@endforeach
						</ul>
					</div>
					<!--/toggles content -->					
					<!-- content-title -->
					<div class="content-title"><span>দাতা সংস্থা</span></div>
					<!--/content-title -->
					<!-- toggles content -->
					<div class="content widget-categories">
					<ul>
							@foreach($donor as $donorList)
								<li><a href="{{url('donor-view/'.$donorList->id)}} "> {{ $donorList->donorName}}  </a></li>	
							@endforeach
					</ul>
				</div>
				<!--/toggles content -->
				
		</div>
	<!-- toggles -->
	</aside>
	<!-- / widget sidebar navigation -->				
	<!-- widget follow -->
	<aside class="widget-subscribe">
		<h2>Follow &amp; Subscribe</h2>
		<hr class="divider-big margin-bottom">
		<div>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-linkedin"></a>
		</div>
	</aside>
	<!-- / widget follow -->					
</div>
<!--left side end-->

