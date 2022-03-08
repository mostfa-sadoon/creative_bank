@extends('user_temp')
    @section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
    @endsection
@section('content')
  <!-- ======= Start Content ======= -->
  <!-- ======= Start Content ======= -->
  <div class="userProfile faq-page faq-tab-wrapper">
    <div class="container">
        <div class="row gutters justify-content-center">
            <div class="card h-100">
            <div class="card-body">
            <form class="submit-faq pt-20"  method="post" action="{{route('password.update')}}">
                @csrf
                    <input type="hidden" name="id" >
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary profileTitle">Update Your Password !</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="password">old Password</label>
                            <input type="password" name="old_password"  placeholder="Enter Password">
                            @error('old_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @if(Session::has('error'))
                            <div class="alert alert-danger">
                            {{ Session::get('error')}}
                            </div>
                @endif
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password"  placeholder="Enter Password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row gutters center-div">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="submit" id="submit" name="submit" >Update</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection
