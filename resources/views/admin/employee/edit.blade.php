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
                        <li class="breadcrumb-item active">{{trans('admin.employee_edit')}}</li>
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
            <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$employee->id}}" name="id">
                    <div class="row">
                        <div class="col-12">
                               <laple>{{trans('admin.name')}}</laple>
                               <input type="text" name="name"  value="{{$employee->name}}" class="form-control">
                               @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                        </div>
                        <div class="col-12">
                               <laple>{{trans('admin.email')}}</laple>
                               <input type="email" name="email" class="form-control" value="{{$employee->email}}">
                               @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="col-12">
                               <laple>{{trans('admin.password')}}</laple>
                               <input type="password" name="password" class="form-control">
                               @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                        <div class="col-12">
                               <laple>{{trans('admin.confirm_password')}}</laple>
                               <input type="password" name="password_confirmation" class="form-control">
                               @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                        </div>


                        @if($role == "writer")
                         <div class="col-12 mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="option1" >
                                <label class="form-check-label" for="inlineRadio1">Super admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="inlineRadio2"  value="option2" checked>
                                <label class="form-check-label" for="inlineRadio2">Admin</label>
                                </div>
                            </div>
                          </div>
                        @else
                        <div class="col-12 mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Super admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="inlineRadio2"  value="option2">
                                <label class="form-check-label" for="inlineRadio2">Admin</label>
                                </div>
                            </div>
                          </div>
                        @endif

                    <input type="submit" class="btn btn-success" value="{{trans('admin.edit')}}">
                </form>
@endsection
