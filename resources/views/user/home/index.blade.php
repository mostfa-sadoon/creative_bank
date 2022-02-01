@extends('user_temp')
@section('content')

    <!---- ======= Start Slider ======= ---->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 500px;">
                <img class="d-block w-100" src="{{asset('interface/assets/images/1.jpg')}}" alt="">
            </div>
            <div class="carousel-item" style="height: 500px;">
                <img class="d-block w-100" src="{{asset('interface/assets/images/2.jpg')}}" alt="">
            </div>
            <div class="carousel-item" style="height: 500px;">
                <img class="d-block w-100" src="{{asset('interface/assets/images/3.jpg')}}" alt="">
            </div>
            <div class="carousel-item" style="height: 500px;">
                <img class="d-block w-100" src="{{asset('interface/assets/images/4.jpg')}}" alt="">
            </div>

        </div>
        <section id="hero">
        </section>
        <!---- ======= Content ======= ---->
        <div class="row welcome-head text-center">
            <div class="col-xl-12 col-12">
                <h1 class="text-center">{{trans('home.hallo_in')}} <span>{{trans('home.ideas')}}</span></h1>
                <!-- <p>جميع الإنجازات، كل الثروات المكتسبة كانت بدايتها فكرة</p> -->
                <p  class="text-center">{{trans('home.text_slider')}}</p>
                <div class="buttons  text-center">
                    <button class="hire upper" onclick="location.href='{{route('idea.create')}}'">{{trans('home.send_idea')}}</button>
                </div>
            </div>

        </div>
        <!---- ======= carousel-control-prev ======= ---->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <!---- ======= carousel-control-next ======= ---->
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ======= End Slider ======= -->

    <!-- ======= Start Content ======= -->
    <div class="">
        <!-- ======= Start Body ======= -->
        <section id="about" class="  about bg-light" data-aos="zoom-in" data-aos-delay="100">

            <div class="section-title">
                <h2>{{trans('home.who_us')}}</h2>
            </div>
            <div class="container">
                <p>{{trans('home.who_us_answer')}}</p>
            </div>

        </section>
        <!-- ======= End Body ======= -->

        <!-- ======= Start best-idea ======= -->
        <section id="best-idea" class="container best-idea">
            <div class="">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>{{trans('home.best_ideas')}}</h2>
                </div>
                <section class="wrapper">
                    <div class="container-fostrap">

                        <div class="content">
                            <div class="">
                                <div class="row">
                                    @foreach($ideas as $idea)
                                        <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="100">
                                            <div class="card">
                                                <a class="img-card" href="#">
                                                    <img src="{{$idea->img}}" />
                                                </a>
                                                <div class="card-content">
                                                    <h4 class="card-title">
                                                        <a href="#"> {{$idea->name}}
                                                    </a>
                                                    </h4>
                                                    <p class="">
                                                        {{$idea->desc}}
                                                 </p>
                                                </div>
                                                <div class="card-read-more">
                                                    <a href="{{route('user.idea.show',$idea->id)}}" class="btn btn-link btn-block">{{trans('home.show_more')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                    <div class="d-flex justify-content-center">
                                    <a class=" btn btn-info " href="{{route('allidea')}}">{{trans('home.see_more')}}</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
        <!-- ======= End best-idea ======= -->

      <!-- ======= Start cost ======= -->
      <section id="cost" class="  cost ">
            <div class="container">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>{{trans('home.how_much_earn')}}</h2>
                </div>
                <div class=" row justify-content-center p-4">
                    <div class="col-md-12">
                        <div class="wrapper-home">
                            <div class="row ">
                                <div class="col-md-6 col-12 order-2 order-md-1">
                                    <h4>إعتماداً على:-</h4>
                                    <div class="row">
                                        <div class="">
                                            <div class="dbox pull-right">
                                                <h6>
                                                    <i class="icon align-items-center justify-content-center fa fa-lightbulb-o fa-lg">
                                                    </i> تقييم الفكرة و قابليتها للتنفيذ وامكانية تطويرها
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="dbox pull-right">
                                                <h6>
                                                    <i class="icon align-items-center justify-content-center fa fa-lightbulb-o fa-lg">
                                                    </i> إحتياج السوق للفكرة
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="dbox pull-right">
                                                <h6>
                                                    <i class="icon align-items-center justify-content-center fa fa-lightbulb-o fa-lg">
                                                    </i> تحديد العوائق و العقبات المواجهة لتنفيذ الفكرة
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="dbox pull-right">
                                                <h5>

                                                    يتم تجميع نقاط لكل فكرة و عن طريقها يتم تحديد مبلغ لصاحب الفكرةللبدء فى تنفيذها
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-img col-md-6 order-1 order-md-2">
                                    <img src="{{asset('interface/assets/images/earnMony-removebg-preview.png')}}" alt="Earn Mony" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End cost ======= -->

        <!-- ======= Start Notable participants ======= -->
        <section id="team" class=" team bg-light">
            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="zoom-in">
                    <h2>أبرز المشتركين</h2>
                    <p>نظراً لأن العمل في مجال الخدمات الإلكترونية يرتكز بشكل أساس على الأفكار الإبداعية، فقد قامت الشركة منذ عدة أعوام. بتأسيس بنك الأفكار كمبادرة تصب في هذا الاتجاه. ويهدف بنك الأفكار إلى استقبال جميع الأفكار سواء المتعلقة بمشاريع إلكترونية
                        جديدة أو عمليات تطوير جوهرية لمنتجات الشركة الحالية أو غيرها</p>
                </div>

                <div class="row mt-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="interface/assets/images/team/team-1.jpg" class="img-fluid" alt="">
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4>عاطف السعيد</h4>
                                <span>صاحب أفضل فكرة فى الزراعة الرقمية</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="interface/assets/images/team/team-3.jpg" class="img-fluid" alt="">
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4>مصطفى سعدون</h4>
                                <span>صاحب افضل فكرة فى ترشيد المياه</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="interface/assets/images/team/team-1.jpg" class="img-fluid" alt="">
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4>عاطف السعيد</h4>
                                <span>صاحب أفضل فكرة فى الزراعة الرقمية</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="interface/assets/images/team/team-3.jpg" class="img-fluid" alt="">
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4>مصطفى سعدون</h4>
                                <span>صاحب افضل فكرة فى ترشيد المياه</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Notable participants -->

        <!---Start News-->
        <section id="news" class="container news">
            <div class="container news">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>{{trans('home.last_news')}}</h2>
                </div>
                <div class="row">
                    @foreach($news as $new)
                        <div class="cardcontainer col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="photo"> <img src="{{$new->img}}">
                            </div>
                            <div class="content">
                                <h4 class="txt4 text-white">{{$new->header}}</h4>
                                <!-- <p class="txt5">A city that never sleeps</p> -->
                                <p class="txt2 mt-3">{{$new->desc}}</p>
                            </div>
                            <div class="newsFooter">
                                <p>
                                    <a class="read-more waves-effect waves-light btn" href="{{route('user.news.show',$new->id)}}">{{trans('home.show_more')}}</a>
                                </p>
                                <p class="txt3">{{date('d-m-Y', strtotime($new->created_at))}}<i class="bi bi-calendar"></i></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-info text-white" href="{{route('allnews')}}">{{trans('home.see_more')}}</a>
                    </div>
            </div>
        </section>
        <!---End News---->

    </div>
    <!-- ======= End Content ======= -->

@endsection