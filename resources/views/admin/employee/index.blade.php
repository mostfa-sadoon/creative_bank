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
                        <li class="breadcrumb-item active">{{trans('admin.employee_show')}}</li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.employee')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>

                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->


 <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
    <thead>
        <tr>
            <th>#</th>
            <th>{{trans('admin.name')}}</th>
            <th>{{trans('admin.email')}}</th>
            <th>{{trans('admin.action')}}</th>

        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach($employees as $key=>$employee)
        <?php $counter += 1; ?>

        <tr>
            <td>{{$counter}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td><a href="{{route('employee.edit',$employee->id)}}"><i class="fas fa-edit"></i></a><a href="{{route('employee.delete',$employee->id)}}"class="m-5"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
