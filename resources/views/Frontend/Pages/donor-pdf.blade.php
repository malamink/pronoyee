@extends('Frontend.Layout.appOthers')
    @section('title','দাতাবৃন্দের তালিকা')
    @section('content')

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main>
                            <h3>{{ $donorpdf->DonorName}}</h3>
                            <span>{{ $donorpdf->DonorCatName}}</span>
                            <embed oncontextmenu="return false" src="{{ asset('uploads/DonorList/'.$donorpdf->DonorList) }}#toolbar=0" width="100%" height="700px" >  
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


