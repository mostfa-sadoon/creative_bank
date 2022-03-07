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
                                        <img src="{{$user->img}}" alt="Maxwell Admin" >
                                    </div>
                                </div>
                                <h5 class="user-name">Yuki Hayashi</h5>
                                <h6 class="user-email">yuki@Maxwell.com</h6>
                             </div>
                            <div class="about">
                                <h5>About</h5>
                                <p class="w-50">I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                             </div>
                             <div class="center-div profileDate">
                                <a class="text-white theme-button-two" href="{{route('profile.edit',$user->id)}}">Edit Profile</a>
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

@endsection

