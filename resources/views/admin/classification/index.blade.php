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
                        <li class="breadcrumb-item active">{{trans('admin.classification_display')}}</li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.classification')}}</a></li>
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
         <a  href="{{route('classification.create')}}" class="btn btn-success">{{trans('admin.add_new_classification')}}</a>
    </div>
        <table class="mt-2 table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.classification_in_arabic')}}</th>
                    <th>{{trans('admin.classificstion_in_english')}}</th>
                    <th style="text-align:center;">{{trans('admin.action')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($classifications as $key=>$classification)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$classification->name_ar}}</td>
                    <td>{{$classification->name_en}}</td>
                    <td class="d-flex justify-content-start">
                        <a href="{{route('classification.edit',$classification->id)}}"><i class="fas fa-edit"></i></a>
                        &nbsp;
                        &nbsp;
                        <a href="{{route('classification.destroy',$classification->id)}}"><i class="fas fa-close text-danger"></i></a>
                        <!-- &nbsp;
                        &nbsp;
                        <form action="{{ route('classification.destroy',$classification->id) }}" method="POST">
                            <button type="submit" data-toggle="tooltip"> <i class="fa fa-close text-danger"></i> </button>
                            @method('DELETE')
                            @csrf

                        </form> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
