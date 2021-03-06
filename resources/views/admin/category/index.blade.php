@extends('admin_temp')
@section('content')
  <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.categories')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.categories')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>

                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
    <div class=" d-flex justify-content-start">
         <a  href="{{route('category.create')}}" class="btn btn-success">{{trans('admin.add_new_category')}}</a>
    </div>
        <table class="mt-2 table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.category_in_arabic')}}</th>
                    <th>{{trans('admin.category_in_english')}}</th>
                    <th>{{trans('admin.action')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $key=>$category)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name_ar}}</td>
                    <td>{{$category->name_en}}</td>
                    <td>
                        <a href="{{route('category.edit' ,$category->id)}}"><i class="fas fa-edit"></i></a>
                        <a href="{{route('category.destroy' ,$category->id)}}"><i class="fas fa-trash-alt text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
