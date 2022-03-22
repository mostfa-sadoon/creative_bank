@extends('user_temp')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
@endsection
@section('content')
  <!-- ======= Start Content ======= -->
  <div class="mt-1">
    <!---Start Goal-->
    <div class="userProfile faq-page faq-tab-wrapper">
        <div class="container">
            <div class="row gutters center-div">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                    <div class="card h-10">
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
                            {{-- <div class="about">
                                <h5>About</h5>
                                <p class="w-50">I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                             </div> --}}
                             @if (Auth::id() == $user->id)
                                <div class="center-div profileDate">
                                    <a class="text-white theme-button-two" href="{{route('profile.edit',$user->id)}}">Edit Profile</a>
                                </div>
                             @endif
                          </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    <!---End Goal---->


      <!-- ======= Start ideas ======= -->
      <div class="container">
        <h2 class="text-center">{{trans('user.ideas')}}</h2>
            <div class="row">
                    @foreach ($user->ideas as $idea)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$idea->img}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$idea->name}}</h5>
                        <p class="card-text">{{$idea->desc}}</p>
                        <a href="{{route('user.idea.show',$idea->id)}}" class="btn btn-primary">{{trans('user.show')}}</a>
                        </div>
                    </div>
                    @endforeach
            </div>
      </div>
  <!-- ======= End ideas ======= -->
</div>
<!-- ======= End Content ======= -->
@endsection
@section('scripts')
@endsection

