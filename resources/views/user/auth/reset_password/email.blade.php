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
                                <div class="pt-50">
                                    <div class="imageContainer d-flex justify-content-center">
                                        <img src="{{asset('interface/images/fogotpass.png')}}" alt=""/>
                                    </div>
                                </div>
                             </div>
                             <div class="about">
                                <h4>Forgot Your Password !</h4>
                                <p class="w-50">you can reset it Now</p>
                             </div> 
                             <div class="forgotpassword pt-50">
                                <form class="submit-faq pt-20"  method="post" action="#" enctype="multipart/form-data" style="display: flex;">
                                    @csrf
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input id="form_email" name="email" type="email"  name="email" class="form-control" placeholder=" البريد الالكترونى" required="required" data-error="Valid email is required.">
                                        </div>
                                     </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="submit" id="submit" name="submit" >Send</button>
                                    </div>
                                </div>
                                </form>
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

