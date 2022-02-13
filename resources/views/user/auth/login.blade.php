@extends('user_temp')
@section('content')
  <!-- ======= Start Content ======= -->
  <div class="">
        <!---Start News-->
        <div class="container mt-4">
            <div class="row send-Idea">
                <div class="col-lg-8 mx-auto">
                    <div class="card mt-2 mx-auto p-1 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <h2>تسجيل الدخول</h2>
                                <form id="contact-form" role="form" action="{{route('user.signin')}}" method="post">
                                    @csrf
                                    <div class="controls">


                                        <!---Choose video---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_email">البريد الالكترونى<span>*</span>
                                                </label>
                                                <input id="form_email" name="email" type="email" name="email" class="form-control" placeholder="ادخل البريد الالكترونى" required="required" data-error="Valid email is required.">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">الرقم السرى<span>*</span>
                                            </label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                                                   @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                         </div>
                                           
                                         @if (session('error'))
                                            <p class="alert alert-danger">
                                                {{ session('error') }}
                                            </p>
                                        @endif
                                        
                                         <a href="{{route('user.register')}}">لا تمتلك حساب! سجل الان.</a>
                                        <!-- <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div> -->
                                        <!---Submit Button---->
                                        <div class="mt-4">
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="تسجيل الدخول">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.8 -->
                </div>
                <!-- /.row-->
            </div>
        </div>
        <!---End News---->
    </div>
    <!-- ======= End Content ======= -->
@endsection
