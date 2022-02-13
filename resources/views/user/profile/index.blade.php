@extends('user_temp')
@section('content')
   <!-- ======= Start Content ======= -->
   <div class="mt-4">
        <!---Start Goal-->
        <section id="creative" class="team-item container creative card bg-light">
            <div class="container about-bank">

                <div class="row">
                    <div class="profile-data  col-md-4">
                        <div class="" data-aos="fade-up" data-aos-delay="100">
                            <div class="">
                                <img src="{{$user->img}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <!-- <div class="profile-data-icon mt-lg-4"><i class='bx bxs-cake'></i> {{$user->date_of_birth}}</div>
                        <div class="profile-data-icon mt-lg-1"> <i class="fa fa-envelope"></i> {{$user->email}}</div>
                        <div class="profile-data-icon mt-lg-1"><i class="fa fa-phone"></i> {{$user->phone}}</div> -->
                        <!-- <div class="member-info  ">
                            <h4>{{$user->name}}</h4>
                            <h6>{{trans('user.field')}}:
                                <span>{{trans('user.'.$user->classification.'')}}</span>
                            </h6>
                            <h6>{{trans('user.Industry')}}:
                                <span>{{$field->name}}</span>
                            </h6>
                        </div> -->

                    </div>
                    <div class="member-info col-md-8 col-12">
                        <h2>{{$user->name}}</h2>
                        <h6>{{trans('user.field')}}:
                            <span>{{trans('user.'.$user->classification.'')}}</span>
                        </h6>
                        <h6>{{trans('user.Industry')}}:
                            <span>{{$field->name}}</span>
                        </h6>
                       <h6>About:</h6>
                       <p>he is the best one of the ..............</p>
                    </div>
                    
                </div>
                <div class="buttons text-center mt-4">
                   
                </div>
                </div class=" text-center">
                     @if(Auth::id() == $user->id) 
                        <div class="edit text-center">
                             <a class="btn btn-success" href="{{route('profile.edit',$user->id)}}">تعديل</a> 
                        </div>
                     @endif
            </div>
        </section>
        <!---End Goal---->
    </div>
    <!-- ======= End Content ======= -->
@endsection