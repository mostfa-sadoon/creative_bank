@extends('admin_temp')
@section('content')
<!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.employee')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.fields_edit')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>

                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
  <form action="{{route('field.update')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$field->id}}">
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.field_in_arabic')}}</label>
         <input class="form-control" type="text" name="name_ar"value="{{$field->name_ar}}" >
            @error('name_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.field_in_english')}}</label>
         <input class="form-control" type="text" name="name_en"  value="{{$field->name_en}}">
            @error('name_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
         <input class="btn btn-primary" type="submit" value="{{trans('admin.edit')}}">
     </div>
  </form>
@endsection
