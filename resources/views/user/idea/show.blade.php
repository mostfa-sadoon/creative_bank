@extends('user_temp')
@section('style')
<link rel="stylesheet" href="{{asset('interface/assets/css/jquery-confirm.css')}}"/>
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
        .icon_color{
            color:#E94F1B;
            }

         .vote{
             background-color:green;
             color:white;
         }   
    </style>
@endsection
@section('content')
<!-- ======= Start Content ======= -->
<div class=" mt-4 ">
        <!---Start Goal-->
        <section id="creative" class="team-item container creative card bg-light" data-id="{{$idea->id}}">
            <div class="container about-bank">

                <div class="row">
                    <div class=" col-md-6 d-flex ">
                        <div class="member " data-aos="fade-up" data-aos-delay="100">
                            @if($idea->video)
                            <div class="">    
                                <iframe width="540" height="375" src="{{$idea->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="member-img">
                                <img src="{{$idea->img}}" class="img-fluid" alt="">
                            </div>
                            @endif
                            <div class="idea-info-user d-flex  justify-content-around row">
                                <div class="col-12 idea_user_info"><a href="{{route('profile.show',$idea->user_id)}}"> <img src="{{$idea->user->img}}" class="img-fluid" alt="">
                                    <span>{{$idea->user->name}}</span>
                                </a>
                            </div>
                              <div class="col-12 mt-2 text-center">
                                    <!-- this condation to check if user has react before -->
                                  @if($interaction == "true")
                                    <span class="ui basic blue label" id="result"> {{$idea->like}} </span>
                                  <button id="like" class=" btn like" ><i class="fa fa-thumbs-up fa-1x icon_color" data-status="none" id="icon" ></i> </button>
                                      
                                        <i class="bi bi-eye"></i><span> {{$idea->view}} <span> مشاهدة </span></span>
                                    </div>
                                  @else 
                                  <span class="ui basic blue label" id="result"> {{$idea->like}} </span>
                                  <button id="like" class=" btn like" ><i class="fa fa-thumbs-up fa-1x" data-status="none" id="icon" ></i> </button>
                                       
                                        <i class="bi bi-eye"></i><span> {{$idea->view}} <span> مشاهدة </span></span>
                                    </div>
                                  @endif
                            </div>
                            <!-- <div class="idea-info-icon d-flex justify-content-start">
                                <div class="like ui labeled button  bg-success" tabindex="0">
                                    <a id="" class="text-white">
                                        <i class="fa fa-thumbs-up fa-2x"></i>
                                    </a>    
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @if($votestatus == "true")
                          <!-- start vote -->
                        <div class="col-md-6 " id="vote" data-voteid="{{$vote->id}}">
                            <h2 class="text-warning">{{trans('user.vote')}}</h2>
                                <div>
                                    <div class="list-group mt-4" id="vote_ideas">
                                        <ul class="list-group">
                                                @foreach($vote->voteideas as $voteidea)
                                                        @if($voteidea->idea_id == $idea->id)
                                                        <li class="list-group-item d-flex justify-content-between">
                                                                {{$idea->name}}
                                                            <span class="badge badge-primary badge-pill" id="vote_result">{{$voteidea->count}}</span>
                                                            </li>
                                                        @endif
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    @if($uservote=="true")
                                    <button id="vote_button" class="btn btn-success vote"  >cancel</button>
                                    @else
                                    <button id="vote_button" class="btn btn-outline-success" >vote</button>
                                    @endif
                                 </div>

                             <div>
                                 <h3 class="text-warning">other idea in the vote</h3>
                                    <div class="list-group mt-4" id="vote_ideas">
                                           @foreach($vote->voteideas as $vote)
                                                    @if($vote->idea_id != $idea->id)
                                                       <a href="{{route('user.idea.show',$vote->idea_id)}}" class="list-group-item list-group-item-action d-flex justify-content-between " >
                                                            {{$vote->idea->name}}
                                                            <span class="badge badge-primary badge-pill">{{$vote->count}}</span>
                                                        </a>
                                                    @endif
                                           @endforeach
                                    </div>
                             </div>
                          
                         </div>
                       <!-- end vote -->
                    @endif
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
                        <div class="idea-info col-md-10 ">
                            <h4>الوصف</h4>
                            <p>{{$idea->desc}}</p>
                            <h4>المشكلة</h4>
                            <p>{{$idea->problem}}</p>
                            <h4>الحل</h4>
                            <P>{{$idea->solve}}</P>
                            <br>
                        </div>
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
            @auth
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
            @endauth
            @guest
                 <div class="d-flex justify-content-center">
                    <a href="{{route('user.login')}}">قم بتسجيل الدخول للتعليق</a>
                 </div>
            @endguest
        </section>
        <!---End Goal---->
    </div>
    <!-- ======= End Content ======= -->
@endsection
@section('scripts')
            @auth
            <!-- start like script -->
                 <script>
                        var likeurl={!! json_encode(route('idea.like'))!!}
                        var unlikeurl={!! json_encode(route('idea.unlike'))!!}
                        var vote={!! json_encode(route('idea.vote'))!!}
                        var unvote={!! json_encode(route('idea.unvote'))!!}
                    $(document).ready(function () {
                        // to gat the id if idea
                        var id = $("#creative").attr("data-id");
                        console.log(status);
                            $("#like").click(function(){
                                if($("#icon").hasClass('icon_color'))
                                {
                                    $.ajax({
                                    type:'POST',
                                    url:unlikeurl,
                                    data: {
                                            "id":  $("#creative").attr("data-id"),
                                            _token: "{{ csrf_token() }}",
                                        },
                                    success:function(data) {
                                        $("#result").html(data.like);
                                        $("#icon").removeClass("icon_color");
                                    }
                                    });
                                }else{
                                    $.ajax({
                                    type:'POST',
                                    url:likeurl,
                                    data: {
                                            "id":  $("#creative").attr("data-id"),
                                            _token: "{{ csrf_token() }}",
                                        },
                                    success:function(data) {
                                        $("#result").html(data.like);
                                        $("#icon").addClass("icon_color");
                                    }
                                    });
                                }
                            });
                             /*************************start vote script***************************  */  
                             $("#vote_button").click(function(){
                                if($("#vote_button").hasClass('vote'))
                                {
                                    $.ajax({
                                            type:'POST',
                                            url:unvote,
                                            data: {
                                                    "idea_id":  $("#creative").attr("data-id"),
                                                    "vote_id":  $("#vote").attr("data-voteid"),
                                                    _token: "{{ csrf_token() }}",
                                                },
                                            success:function(data) {
                                                $("#vote_result").html(data.vote);
                                                $("button").removeClass("vote");
                                                $("#vote_button").html('vote');
                                            }
                                            });
                                  }else{
                                    $.ajax({
                                    type:'POST',
                                    url:vote,
                                    data: {
                                            "idea_id":  $("#creative").attr("data-id"),
                                            "vote_id":  $("#vote").attr("data-voteid"),
                                            _token: "{{ csrf_token() }}",
                                        },
                                        success:function(data) {
                                            $("#vote_result").html(data.vote);                             
                                            $("#vote_button").addClass("vote");
                                            $("#vote_button").html('cancel');            
                                        }
                                    });
                                   }
                            });
                             /*************************end vote script*************************** */
                    });
                </script>
                @endauth
                @guest
                <script src="{{asset('interface/assets/js/jquery-confirm.min.js')}}"></script>
                <script>
                    $(document).ready(function () {
                    // to gat the id if idea
                    var id = $("#creative").attr("data-id");
                        $("#like").click(function(){
                            $.alert({
                                title: 'login',
                                content: 'login to can like',
                            });
                        });
                        $("#vote").click(function(){
                            $.alert({
                                title: 'login',
                                content: 'login to can vote',
                            });
                        });

                    });  
                </script>
            @endguest
@endsection