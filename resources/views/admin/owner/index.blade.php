@extends('admin_temp')
@section('content')

<!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.owner')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.owner')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
    <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->


   @foreach ($owners as $owner)
    <div class="d-flex justify-content-start m-2">
        <a href="{{route('owner.edit',$owner->id)}}" class="btn btn-success text-white">{{trans('admin.edit')}}</a>
    </div>
   <div class="row">
        <div class="col-md-4">
            <img src="{{$owner->img}}" class="img-fluid">
        </div>

        <div class="col-md-8">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$owner->desc_ar}}
            </textarea>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$owner->desc_en}}
            </textarea>
        </div>
       @endforeach
   </div>
@endsection
