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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">profile</a></li>
                    <li class="breadcrumb-item active">Dashboard 2</li>
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
                                            <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                                <h4 class="card-title m-t-10">Hanna Gover</h4>
                                            </center>
                                        </div>
                                        <div>
                                            <hr> </div>
                                        <div class="card-body"> <small class="text-muted">Email address </small>
                                            <h6>hannagover@gmail.com</h6> 
                                        </div>
                                    </div>
                                </div>
                            <!-- Column -->

                              <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab">Password</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                           
                                          
                                    
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button> 
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
                                                    <button class="btn btn-success">Update Profile</button> 
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