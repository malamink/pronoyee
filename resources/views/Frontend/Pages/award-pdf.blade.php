@extends('Frontend.Layout.appOthers')
    @section('title','সম্মাননাপ্রাপ্তগণের তালিকা')
    @section('content')

        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main>
                            <h3>{{ $awardpdf->AwardName}}</h3>
                            <span>{{ $awardpdf->AwardCat}}</span>
                            <embed oncontextmenu="return false" src="{{ asset('uploads/honoreeList/'.$awardpdf->honoreeList) }}#toolbar=0" width="100%" height="700px" >  
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


