@extends('Frontend.Layout.appBook')
@section('title','বইয়ের অবস্থান')
@section('content')
   
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                        <main> 
                            <h3 style="color: green">{{ $bookshelf->AlmirahName}}  -এ সংরক্ষিত বই</h3>
                            <p>সংগৃহিতঃ <b style="color: red"> {{$bookshelfnum}}</b>  টি বই</p>
                            <br>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ক্র. নম্বর</th>
                                        <th>বইয়ের নাম</th>
                                        <th>আলমারির নাম</th>
                                        <th>তাকের ক্রম নম্বর</th>
                                        <th>আলমারির অবস্থান</th>
                                        <th>বই ইস্যূর তারিখ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ক্র. নম্বর</th>
                                        <th>বইয়ের নাম</th>
                                        <th>আলমারির নাম</th>
                                        <th>তাকের ক্রম নম্বর</th>
                                        <th>আলমারির অবস্থান</th>
                                        <th>বই ইস্যূর তারিখ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @foreach($allbookshelf as $item)
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->bTitle}}</td>
                                    <td>{{ $item->AlmirahName}}</td>
                                    <td>{{ $item->ShelfNumber}}</td>
                                    <td>{{ $item->ShelfLocation}}</td>
                                    <td>{{ $item->created_at}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </main>
                    </div>
                    <div class="grid-row clear-fix"></div>
                            <div align="right";>
                            {{$allbookshelf->links()}}
                            </div>
                </div>
            </div>
        </div>
        
        @endsection


  