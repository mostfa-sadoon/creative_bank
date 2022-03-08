@extends('admin_temp')
@section('content')
<div class="col-lg-6 col-md-6">


    <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.contact_us')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.contact_us')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
    <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->

                        <div class="card">

                        <div class="card-body">

                            <h4 class="card-title"></span> {{trans('admin.contact_us')}}</h4>

                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-envelope"></i></div> {{$info->email}} </li>
                                <li>
                                    <div class="bg-light-success"><i class="ti-headphone-alt"></i></div> {{$info->phone}}</li>
                                <li>
                                    <div class="bg-light-warning"><i class="ti-location-pin"></i></div> {{$info->address}}</li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-facebook"></i></div> {{$info->facebook}}</li>
                                <li>
                                    <div class="bg-light-inverse"><i class="ti-twitter"></i></div> {{$info->tweeter}}</li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-instagram"></i></div> {{$info->instagram}}</li>
                                <li>
                                    <div class="bg-light-inverse"><i class="ti-youtube"></i></div> {{$info->youtube}}</li>
                                <li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-end">
              <a class="btn btn-success text-white" href="{{route('info.edit',$info->id)}}">{{trans('admin.edit')}}</a>
          </div>
                    @endsection
