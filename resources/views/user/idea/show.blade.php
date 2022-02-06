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
        
                                </a></div>
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
                    <!-- start vote -->
                    <div class="col-md-6 ">
                            <h2 class="text-warning">{{trans('user.vote')}}</h2>
                            <div class="member-info  mt-5">
                                <div id="donut-chart"></div>   
                             </div>  
                            <div>
                                <button class="btn btn-success">vote for this idea</button>
                            </div>
                             <div>
                                 <h3 class="text-warning">other idea</h3>
                                 <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                </ul>
                             </div>
                    </div>
                     <!-- end vote -->
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
                $(document).ready(function () {
                    // to gat the id if idea
                    var id = $("#creative").attr("data-id");
                    console.log(status);
                        $("button").click(function(){
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
                });
                </script>
                @endauth
                @guest
                <script src="{{asset('interface/assets/js/jquery-confirm.min.js')}}"></script>
                <script>
                    $(document).ready(function () {
                    // to gat the id if idea
                    var id = $("#creative").attr("data-id");
                        $("button").click(function(){
                            $.alert({
                                title: 'login',
                                content: 'login to can like',
                            });
                        });
                    });  
                </script>
         <!-- end like script -->
         <!-- start chart script -->
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"/>
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
                <script>
                    var chart = bb.generate({
                        data: {
                        columns: [
                            ["Blue", 2],
                            ["orange", 5],
                            ["orang", 2],
                            ["orangff", 2],
                            ["orangfffk", 2],
                            ["orangffff", 5],
                        ],
                        type: "donut",
                        onclick: function (d, i) {
                            console.log("onclick", d, i);
                        },
                        onover: function (d, i) {
                            console.log("onover", d, i);
                        },
                        onout: function (d, i) {
                            console.log("onout", d, i);
                        },
                        },
                        donut: {
                        title: "vote the best idea",
                        },
                        bindto: "#donut-chart",
                    });
                    </script>
          <!-- end chart script -->           
          <!-- start vote script -->

          <!-- end vote script -->
            @endguest
@endsection