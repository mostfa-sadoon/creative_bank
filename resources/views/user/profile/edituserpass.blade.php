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
                        <h2 class="text-center">تعديل كلمه المرور</h2>
                        <div></div>
                        <form id="contact-form" role="form" action="{{route('password.update')}}" method="post">
                            @csrf
                            <div class="controls">
                                <div class="text-center">
                                    <!-- <img class="rounded-circle" src="assets/images/team/team-1.jpg" alt="" width="100px" /> -->
                                      
                                      <!-- password  -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">old Password</label>
                                        <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            @if(Session::has('error'))
                                                        <div class="alert alert-danger">
                                                        {{ Session::get('error')}}
                                                        </div>
                                            @endif
                                    </div>

                                    <!-- password  -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">new Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                            
                                     <!-- confirm password  -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">conform Password</label>
                                        <input type="password"  name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            @error('password_confirmation')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                            
                             
                                <!---Submit Button---->
                                <div class="mt-4">
                                    <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="تعديل">
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