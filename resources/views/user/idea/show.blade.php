@extends('user_temp')
@section('content')
<!-- ======= Start Content ======= -->
<div class=" mt-4 ">
        <!---Start Goal-->
        <section id="creative" class="team-item container creative card bg-light">
            <div class="container about-bank">

                <div class="row">
                    <div class=" col-md-6 d-flex ">
                        <div class="member " data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{$idea->img}}" class="img-fluid" alt="">
                            </div>
                            <div class="idea-info-user">
                                <a href="{{route('profile.show',$idea->user_id)}}"> <img src="{{$idea->user->img}}" class="img-fluid" alt="">
                                    <span>{{$idea->user->name}}</span>
                                </a>
                            </div>
                            <div class="idea-info-icon ">
                                <i class="bi bi-eye"></i><span> {{$idea->view}} <span>مشاهدة</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="member-info col-md-6 ">
                        <h2>{{$idea->name}}</h2>
                        <h4>الفئة:
                            <span>{{$category->name}}</span>
                        </h4>
                        <h4>العنوان:
                            <span>{{$idea->user->address}}</span>
                        </h4>
                        <h4>البريد الالكترونى:
                            <span>{{$idea->user->email}}</span>
                        </h4>
                    </div>
                </div>
                <div class="idea-info col-md-10 ">
                    <h4>الوصف</h4>
                    <p>{{$idea->desc}}</p>
                    <h4>المشكلة</h4>
                    <p>{{$idea->problem}}</p>
                    <h4>الحل</h4>
                    <P>{{$idea->solve}}</P>
                    <br>
                </div>
                <div>

                </div>
            </div>
        </section>
        <!---End Goal---->
    </div>
    <!-- ======= End Content ======= -->
@endsection