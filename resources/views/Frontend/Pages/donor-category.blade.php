@extends('Frontend.Layout.appOthers')
    @section('title','দাতা')
    @section('content')
    
 
        <div id="home" class="page-content padding-none">            
            <div class="grid-row clear-fix">
                <div class="grid-col-row" style="margin-top: 20px;
                
                    @include('Frontend.Layout.Partial._left')
                    <div class="grid-col grid-col-9">
                    <main> 
                        <h3 style="color: green">{{ $donorcategory->DonorCatName}} -এ </h3>
                        <p>সংগৃহিতঃ <b style="color: red"> {{$donorcategorynum}} </b> টি</p>
                        <br>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>আইডি</th>
                                <th>দাতার বিষয়</th>
                                <th>দাতার ধরণ</th>
                                <th>দাতাপ্রদানের তালিকা</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>আইডি</th>
                                <th>সম্মাননার বিষয়</th>
                                <th>সম্মাননার ধরণ</th>
                                <th>সম্মাননাপ্রাপ্তগণের তালিকা</th>
                            </tr> 
                        </tfoot>
                        <tbody>
                        @foreach($alldonorcategorynum as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->DonorName}}</td>
                            <td>{{ $item->DonorCatName}}</td>
                            <td><a href="{{url('donor-pdf/'.$item->id)}}">{{ $item->DonorList}}</a></td> 
                            
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                        </main>        
                    </div>
                    <div align="right";>
                    {{$alldonorcategorynum->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
 
