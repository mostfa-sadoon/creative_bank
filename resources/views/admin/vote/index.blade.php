@extends('admin_temp')
@section('content')      
      <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.vote')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">creative bank</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">vote</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <div class="d-flex justify-content-start">
                 <a class="btn btn-success text-white" href="{{route('vote.create')}}">add vote</a>
             </div>
@endsection