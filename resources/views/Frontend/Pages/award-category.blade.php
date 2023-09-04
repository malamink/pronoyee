@extends('Frontend.Layout.appOthers')
   @section('title','সম্মাননা ') 
    @section('content')
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9"> 
                        <main> 
                            <h3 style="color: green">{{ $awardcategory->AwardCat}} -এ পুরস্কারপ্রাপ্তগণ</h3>
                            <p>সংগৃহিতঃ <b style="color: red"> {{$awardcategorynum}} </b> টি</p>
                            <br>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>আইডি</th>
                                        <th>সম্মাননার বিষয়</th>
                                        <th>সম্মাননার ধরণ</th>
                                        <th>সম্মাননা প্রদানের তারিখ</th>
                                        <th>সম্মাননাপ্রাপ্তগণের তালিকা</th>
                                    </tr>
                                </thead> 
                                <tfoot>
                                    <tr>
                                        <th>আইডি</th>
                                        <th>সম্মাননার বিষয়</th>
                                        <th>সম্মাননার ধরণ</th>
                                        <th>সম্মাননা প্রদানের তারিখ</th>
                                        <th>সম্মাননাপ্রাপ্তগণের তালিকা</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($allawardcategorynum as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->AwardName}}</td>
                                        <td>{{ $item->AwardCat}}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td><a href="{{url('award-pdf/'.$item->id)}}">{{ $item->honoreeList}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </main>        
                    </div>
                    <div align="right";>
                        {{$allawardcategorynum->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection

    