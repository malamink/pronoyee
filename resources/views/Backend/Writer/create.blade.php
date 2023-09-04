@extends('Backend.layouts.MasterAdmin')
@section('title','Add writer')
@section('content')

<!-- Page Heading -->
<div class="card-header">
    <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
    <a href="{{url('writers')}}" class="btn btn-primary">View writers</a>
</div> 
<!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Insert Writer information</h6>
                </div>                
                <div class="card-body">
                    <form action="{{ route('writers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="wNameBn" class="col-sm-3 col-form-label">লেখকের নাম (বাংলা)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="wNameBn" name="wNameBn" placeholder="Type writers name in Bangla" value="{{old('wNameBn')}}">
                                @error ('wNameBn')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wNameEn" class="col-sm-3 col-form-label">লেখকের নাম (ইংরেজি)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="wNameEn" name="wNameEn" placeholder="Type writers name in English" value="{{old('wNameEn')}}">
                                @error ('wNameEn')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>                            
                        <div class="form-group row">
                            <label for="CountryName" class="col-sm-3 col-form-label">দেশের নাম</label>
                            <div class="col-sm-9">
                                <select  id="country-dropdown" class="form-control" name="CountryName"> {{old('CountryName')}}
                                    <option value="">-- Select Country --</option>
                                    @foreach ($country as $data)
                                    
                                    <option value="Bangladesh">
                                        {{$data->name}}
                                    </option>
                                    @endforeach
                                </select>
                                @error ('CountryName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="StateName" class="col-sm-3 col-form-label">জেলার নাম</label>
                            <div class="col-sm-9">
                                <select value="Bogura"  name="StateName" class="form-control">                                    
                                </select>
                                @error ('StateName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="CityName" class="col-sm-3 col-form-label">উপজেলার নাম</label>
                            <div class="col-sm-9">
                                <select value="Sherpur"  name="CityName" class="form-control">
                                </select>
                                @error ('CityName')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <a href="{{url('cities')}}">Add City</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="BirthPlace" class="col-sm-3 col-form-label">জন্মস্থান </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="BirthPlace" name="BirthPlace" placeholder="Type writers birth placee">
                                @error ('BirthPlace')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Language" class="col-sm-3 col-form-label";>মাতৃভাষা</label>
                            <div class="col-sm-9">
                                <select id="Language" class="form-control" name="Language">
                                    <option value="">Select language</option>
                                        @foreach($language as $languagelist)
                                            <option value="{{ $languagelist->LanguageName }}"> {{ $languagelist-> LanguageName }} </option>
                                        @endforeach
                                    
                                </select>
                                @error ('Language')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wTperiod" class="col-sm-3 col-form-label">লেখকের সময়কাল</label>
                            <div class="col-sm-9">
                                <select id="wTperiod" class="form-control" name="wTperiod" value="{{old('wTperiod')}}" >
                                    <option value="">Select time period</option>
                                    @foreach($timeperiod as $timeperiodlist)
                                        <option value="{{ $timeperiodlist->PeriodName }}"> {{ $timeperiodlist-> PeriodName }} </option>
                                    @endforeach
                                </select>
                                @error ('wTperiod')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wDbirth" class="col-sm-3 col-form-label">জন্ম তারিখ</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="wDbirth" name="wDbirth" value="{{old('wDbirth')}}" placeholder="Enter writers date of birth">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="text" class="col-sm-3 col-form-label">ছবি</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}" placeholder="Enter writers name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="writerViews" class="col-sm-3 col-form-label">ভিউ </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="writerViews" value="0"  name="writerViews" placeholder="Type writers birth placee">
                                @error ('writerViews')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wBiography" class="col-sm-3 col-form-label">লেখকের জীবন বৃত্তান্ত</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="wBiography" id="summernote" rows="4"> {{old('wBiography')}} </textarea>
                                @error ('wBiography')
                                <p class="text-danger">{{$message}}</p>
                                @enderror                                    
                            </div>
                            
                        </div> 
                        <div class="form-group row">
                            <label for="wBiography" class="col-sm-3 col-form-label"></label>                    
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">সংরক্ষণ</button>
                                <button type="reset" class="btn btn-danger">বাতিল</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
  
            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#state-dropdown').on('change', function () {
                var idState = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
  
        });
    </script>
    
@endsection


