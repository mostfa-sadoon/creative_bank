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
         <a  href="{{route('NewCategory.create')}}" class="btn btn-success">{{trans('admin.NewCategory_add')}}</a>
    </div>
        <table class="mt-2 table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.NewCategory_in_arabic')}}</th>
                    <th>{{trans('admin.NewCategory_in_english')}}</th>
                    <th>{{trans('admin.action')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($NewCategories as $key=>$NewCategory)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$NewCategory->name_ar}}</td>
                    <td>{{$NewCategory->name_en}}</td>
                    <td>
                        {{-- <a href="{{route('field.show',$NewCategories->id)}}"><i class="far fa-eye text-success"></i></a> --}}
                        <a href="{{route('NewCategory.edit',$NewCategory->id)}}"><i class="fas fa-edit"></i></a>
                         <a href="{{route('NewCategory.destroy',$NewCategory->id)}}"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
