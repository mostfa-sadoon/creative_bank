@extends('user_temp')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
@endsection
@section('content')
<!-- ======= Start Content ======= -->
 
<div class="mt-4">
    <!---Start Goal-->
    <div class="userProfile faq-page faq-tab-wrapper">
        <div class="container">
            <div class="row gutters center-div">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                    <div class="card h-100">
                      <div class="card-body">
                         <div class="account-settings">
                             <div class="user-profile">
                                <div class="user-avatar">
                                    <div class="imageContainer">
                                        <img src="https://img.icons8.com/office/16/000000/password.png"/>
                                    </div>
                                </div>
                                <h2 class="user-name">Forgot Your Password !</h5>
                                <h6 class="user-email">you can reset it Now</h6>
                             </div>
                          </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    <!---End Goal---->
</div>

<!-- ======= End Content ======= -->

@endsection

@section('scripts')
<script>


</script>
@endsection

