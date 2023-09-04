@extends('Frontend.Layout.appOthers')
    @section('title','বিভিন্ন কার্যক্রমের ছবি')
    @section('content')
    
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <div class="coupon-enter">
                             <h2>বিভিন্ন কার্যক্রমের ছবি</h2>
                            <form class="" type="get" action=" {{url('/writer-search')}} ">
                                <input type="search" name="querywriter" class="form-control" placeholder="Find user here" name="search">
                            </form>
                        </div>
            <br>            
                        <main>
                            <div class="grid-col-row clear-fix">
                            @foreach($pichouse as $pichouseList)
                                <div class="grid-col grid-col-3">
                                    <div class="portfolio-item">
                                        <div class="picture">
                                            <div class="hover-effect"></div>
                                            <div class="link-cont">
                                                <a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
                                                <a href="{{ url('uploads/pichouses/'.$pichouseList->image) }}" class="fancy fa fa-search"></a>
                                                <a href="#" class="cws-right fa fa-heart"></a>
                                            </div>
                                            <img src="{{ url('uploads/pichouses/'.$pichouseList->image) }}" data-at2x="pic/270x200-img-5@2x.jpg" alt>
                                        </div>
                                        <h3><a href="#">{{ $pichouseList->PicTitle}}</a></h3>
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </main>
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


