@extends('admin_temp')
@section('content')
 <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">{{trans('admin.creative_bank')}}</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.profile')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('admin.dashboard')}}</li>
                </ol>
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->

                   <div class="row">
                        <!-- Column -->
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <center class="m-t-30">
                                                <h4 class="card-title m-t-10">{{$employee->name}}</h4>
                                            </center>
                                        </div>
                                        <div>
                                            <hr> </div>
                                        <div class="card-body"> <small class="text-muted">{{trans('admin.email')}}</small>
                                            <h6>{{$employee->email}}</h6>
                                        </div>
                                    </div>
                                </div>
                            <!-- Column -->

                              <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">{{trans('admin.setting')}}</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab">{{trans('admin.password')}}</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">{{trans('admin.name')}}</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$employee->name}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">{{trans('admin.email')}}</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{$employee->email}}" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">{{trans('admin.update')}}</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane" id="password" role="tabpanel">
                                <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">old password</label>
                                                <div class="col-md-12">
                                                    <input type="password"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">new password</label>
                                                <div class="col-md-12">
                                                    <input type="password"  class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">new password</label>
                                                <div class="col-md-12">
                                                    <input type="password"  class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">{{trans('admin.update')}}</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                   </div>








@endsection
