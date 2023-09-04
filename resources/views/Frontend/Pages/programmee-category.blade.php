@extends('Frontend.Layout.appOthers')
@section('title','কর্মসূচি')
@section('content')
    <div id="home" class="page-content padding-none">            
        <div class="grid-row clear-fix">
            <div class="grid-col-row" style="margin-top: 20px;
                @include('Frontend.Layout.Partial._left')
                <div class="grid-col grid-col-9">
                    <main> 
                            <h3 style="color: green">{{ $programmeecategory->ProgCatName}} -এর কার্যক্রম</h3>
                            <p>সংগৃহিতঃ <b style="color: red"> {{$programmeecategorynum}} </b> টি</p>
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
                                        <td><a href="{{url('programme-pdf/'.$item->id)}}">{{ $item->participantList}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </main>        
                </div>
                <div align="right";>
                {{$allprogrammeecategorynum->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
