@extends('Backend.layouts.MasterAdmin')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Single writer</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('writers')}}" class="btn btn-primary">Show writer</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>wNameBn</th>
                            <th>wNameEn</th>
                            <th>wBplace</th>
                            <th>wDname</th>
                            <th>wCname</th>
                            <th>wLanguage</th>
                            <th>wTperiod</th>
                            <th>wDbirth</th>
                            <th>wBiography</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                            <tr>
                                <td>{{ $writer->id}} </td>
                                <td>
                                    <img src="{{ asset('uploads/writers/'.$writer->image) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>{{ $writer->wNameBn}} </td>
                                <td>{{ $writer->wNameEn}} </td>
                                <td>{{ $writer->wBplace}} </td>
                                <td>{{ $writer->wDname}} </td>
                                <td>{{ $writer->wCname}} </td>
                                <td>{{ $writer->wLanguage}} </td>
                                <td>{{ $writer->wTperiod}} </td>
                                <td>{{ $writer->wDbirth}} </td>
                                <td>{{ $writer->wBiography}} </td>
                                
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection