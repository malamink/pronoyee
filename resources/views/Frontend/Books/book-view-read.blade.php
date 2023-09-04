@extends('Frontend.Layout.appBook')
    @section('title',' বই পড়ুন')
    @section('content')

    <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
    <main>
   
    <aside class="widget-course-details">
        <div class="category-info">
        <img src="{{ asset('uploads/books/'.$bookread->image) }}" data-at2x="pic/60x60-img-4@2x.jpg" class="avatar" alt>
            <div class="course-lector">
            <h4>{{ $bookread->wName}}</h4>
                    <span>{{ $bookread->bTitle}}</span>
            </div>
            
            <span class="price">
            <span class="amount"></span>
                    <span class="description-price"></span>
            </span>
      
    
        <embed oncontextmenu="return false" src="{{ asset('uploads/pdfs/'.$bookread->pdf) }}#toolbar=0" width="100%" height="700px" >
        
        
    </div>
     </aside>
</main>
</div>
                </div>
            </div>
        </div>
    @endsection

<script>
window.oncontextmenu=function(){
return false;
}
</script>


