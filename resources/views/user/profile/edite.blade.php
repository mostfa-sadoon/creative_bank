@extends('user_temp')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
@endsection


@section('content')
  
  <!-- ======= Start Content ======= -->
  <div class="userProfile faq-page faq-tab-wrapper">
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                  <div class="card-body">
                     <div class="account-settings">
                         <div class="user-profile">
                            <div class="user-avatar">
                                <div class="imageContainer">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" >
                                    <div class="overlay" >
                                        <a href="#" class="icon" title="User Profile" id="pImage">
                                        <i class="fa fa-user"></i>
                                        </a>
                                    </div>
                                    <input type="file" id="my_file" style="display: none;" />
                                </div>
                            </div>
                            <h5 class="user-name">Yuki Hayashi</h5>
                            <h6 class="user-email">yuki@Maxwell.com</h6>
                         </div>
                        <div class="about">
                            <h5>About</h5>
                            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <form class="submit-faq pt-20"  method="post" enctype="multipart/form-data">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary profileTitle">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email ID">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group profileGender">
                                    <input type="radio" class="profileGenderInput" id="male" name="gender" value="male">
                                    <label for="male">Male</label><br>
                                    <input type="radio" class="profileGenderInput" id="female" name="gender" value="female">
                                    <label for="female">Female</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input type="text" class="form-control" id="Address" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group profileDate">
                                    <input type="date" class="form-control" id="birthday" name="birthday">

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="classification">Classification</label>
                                    <select name="classification" id="classification" class="form-select form-select-lg mb-3 send-idea-select" aria-label=".form-select-lg example">
                                        <option value="option1">option 1</option>
                                        <option value="option2">option 2</option>
                                    <select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="field">Field</label>
                                    <select name="field"  id="field" class="form-select form-select-lg mb-3 send-idea-select" aria-label=".form-select-lg example">
                                        <option value="option1">option 1</option>
                                        <option value="option2">option 2</option>
                                    <select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Enter Password Again">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters center-div">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-right">
                                    <button type="button" id="submit" name="submit" >Update</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  
<!-- ======= End Content ======= -->

@endsection

@section('scripts')
<script>
    $("#pImage").click(function() {
    $("input[id='my_file']").click();
    });
    
</script>

@endsection

