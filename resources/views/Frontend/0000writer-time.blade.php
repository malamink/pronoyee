
<div class="grid-col grid-col-9">


writer time
<h4>{{ $writertime->wNameBn}}</h4>
<h4>{{ $writertime->StateName}}</h4>

<div class="clear-both">
    
</div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>wNameBn</th>
                            <th>wNameEn</th>  
                            <th>wNameEn</th>  
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>image</th>
                            <th>wNameBn</th>
                            <th>wNameEn</th>                                         
                            <th>wNameEn</th>                                         
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($writertime as $writerList)
                            <tr>
                            <td>
                                <img src="{{ asset('uploads/writers/'.$writertime->image) }}" width="70px" height="70px" alt="Image">
                            </td>
                                <td>{{ $writertime->wNameBn}} </td>
                                <td>{{ $writertime->StateName}} </td>
                                <td>{{ $writertime->wTperiod}} </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>