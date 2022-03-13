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
                                    <div class="imageContainer d-flex justify-content-center">
                                        <img src="{{$user->img}}" alt="Maxwell Admin" >
                                    </div>
                                </div>
                                <h5 class="user-name">{{$user->name}}</h5>
                                <h6 class="user-email">{{$user->email}}</h6>
                             </div>
                                 <div class="center-div profileDate">
                                <a class="text-white theme-button-two" href="{{route('profile.edit',$user->id)}}">{{trans('admin.update')}}</a>
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

