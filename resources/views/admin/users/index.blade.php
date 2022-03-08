@extends('admin_temp')
@section('content')
  <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.users')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.users')}}</a></li>
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
                                <h4 class="card-title">{{trans('admin.users')}}</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>{{trans('admin.number')}}</th>
                                                <th>{{trans('admin.name')}}</th>
                                                <th>{{trans('admin.email')}}</th>
                                                <th>{{trans('admin.phone')}}</th>
                                                <th>{{trans('admin.joining_date')}}</th>
                                                <!--  -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 0 ?>
                                            @foreach($users as  $user)
                                            <?php $counter = $counter+ 1?>
                                                <tr>
                                                    <td>{{$counter}}</td>
                                                    <td>
                                                        <!-- <a href=""> -->
                                                            <img src="{{$user->img}}" alt="user" width="40" class="img-circle" />
                                                            Genelia Deshmukh
                                                        <!-- </a> -->
                                                    </td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {{ $users->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
