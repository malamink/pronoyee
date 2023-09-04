@extends('Frontend.Layout.appOthers')
@section('title','কর্মসূচির')
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        
                        <main>

                        <h3 style="color: green"># -কর্মসূচি</h3>
                                <p>সর্বমোট সংগৃহিতঃ <b style="color: red">৭০</b> টি</p>
                                <br>
                               
                                
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ProgrammeName</th>
                                <th>ProgrammeCategory</th>
                                <th>OpenDate</th>
                                <th>PerticipantList</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>ProgrammeName</th>
                                <th>ProgrammeCategory</th>
                                <th>OpenDate</th>
                                <th>PerticipantList</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($allprogrammeecategorynum as $item)
                        <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->ProgrammeName}}</td>
                        <td>{{ $item->ProgCat}}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>{{ $item->participantList}}</td>
</tr>
                        @endforeach
                        </tbody>

                    </table>
        
                        </main>        
                    </div>
                    <div align="right";>
                    {{$allprogrammeviewnum->links()}}
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
