@extends('user_temp')
@section('style')
<style>
        .comment-widgets .comment-row:hover {
            background: rgba(0, 0, 0, 0.02);
            cursor: pointer
        }
        
        .comment-footer {
            text-align: start;
            font-size: 14px;
        }
        
        .comment-text p {
            text-align: start;
            margin-top: 10px;
        }
        
        .comment-widgets {
            background-color: rgb(252, 252, 252);
            box-shadow: 0px 1px 10px #e2e2e2;
        }
        
        .comment-widgets .comment-row {
            border-bottom: 1px solid rgba(120, 130, 140, 0.13);
            padding: 15px
        }
        
        .comment-text:hover {
            visibility: hidden
        }
        
        .comment-text:hover {
            visibility: visible
        }
        
        .round img {
            border-radius: 100%
        }
    </style>
@endsection
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
        <section class="team-item container creative card bg-white p-1">
            <div class="comments container mt-4">
                <h6>الموقع غير مسؤول عن مضمون التعليقات</h6>
            </div>
            <div class="comment-widgets p-3 m-2 mt-lg-4">
                @foreach($idea->comments as $comment)
                <div class="d-flex flex-row comment-row ">
                    <div class="p-2">
                        <span class="round">
                            <img src="{{$comment->user->img}}" alt="user" width="50">
                        </span>
                    </div>
                    <div class="comment-text w-100">
                        <h6>{{$comment->user->name}}</h6>
                        <div class="comment-footer"> <span class="date">{{date('d-m-Y', strtotime($comment->created_at))}}</span> </div>
                        <p class="m-b-5 m-t-10">{{$comment->comment}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
             
              <form action="{{route('comment.send')}}" method="Post">
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <input type="hidden" name="idea_id" value="{{$idea->id}}">
                  <div class="bg-light p-3 m-2 mt-lg-4">
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle m-2" src="{{Auth::user()->img}}" width="50">
                            <textarea class="form-control ml-1 shadow-none textarea"  name="comment" placeholder="اكتب تعليقا بناء" rows="3"></textarea>
                        </div>
                        <div class="mt-1 ">
                            <input class="btn btn-primary btn-sm shadow-none m-1" type="submit" value="ارسل">
                        </div>
                </div>
              </form>
        

            


        </section>
        
        <!---End Goal---->
    </div>
    <!-- ======= End Content ======= -->
@endsection