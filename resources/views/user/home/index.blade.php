@extends('user_temp')
@section('styles')

@endsection
@section('content')




<div id="theme-banner-one">
    <div class="illustration wow zoomIn animated" data-wow-delay="1s" data-wow-duration="2s">
        <img src="{{asset('interface/images/shape/banner-shape1.svg')}}" alt="">
        <img src="{{asset('interface/images/shape/banner-shape2.svg')}}" alt="" class="shape-one wow fadeInDown animated" data-wow-delay="1.8s">
        <img src="{{asset('interface/images/shape/banner-shape3.svg')}}" alt="" class="shape-two wow fadeInUp animated" data-wow-delay="2.7s">
    </div>
    <img src="{{asset('interface/images/shape/oval-1.svg')}}" alt="" class="oval-one">
    <img src="{{asset('interface/images/shape/shape-1.svg')}}" alt="" class="shape-three">
    <img src="{{asset('interface/images/shape/shape-55.svg')}}" alt="" class="shape-four">
    <img src="{{asset('interface/images/shape/shape-56.svg')}}" alt="" class="shape-five">
    <img src="{{asset('interface/images/shape/shape-57.svg')}}" alt="" class="shape-six">
    <img src="{{asset('interface/images/shape/shape-58.svg')}}" alt="" class="shape-seven">
    <img src="{{asset('interface/images/shape/shape-59.svg')}}" alt="" class="shape-eight">
    <img src="{{asset('interface/images/shape/shape-60.svg')}}" alt="" class="shape-nine">
    <img src="{{asset('interface/images/shape/shape-61.svg')}}" alt="" class="shape-ten">
    <img src="{{asset('interface/images/shape/shape-62.svg')}}" alt="" class="shape-eleven">
    <div class="container">
        <div class="main-wrapper">
            <h1 class="main-title wow fadeInUp animated" data-wow-delay="0.4s">{{trans('user.welcome')}}<br>{{trans('user.creative_bank')}}</h1>
            <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">{{trans('user.welcome_msg')}}</p>
            <ul class="button-group lightgallery">
                <li><a href="{{route('idea.create')}}" class="more-button solid-button-one wow fadeInRight animated" data-wow-delay="1.5s">{{trans('user.send_your_idea')}}<i class="fa fa-angle-left icon-right" aria-hidden="true"></i></a></li>
            </ul>
        </div> <!-- /.main-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /#theme-banner-one -->


<!--
=============================================
    What WE Do
==============================================
-->
<div class="agn-what-we-do pt-150 pb-200">
    <img src="{{asset('interface/images/shape/shape-63.svg')}}" alt="" class="shape-one" data-aos="fade-right">
    <img src="{{asset('interface/images/shape/shape-56.svg')}}" alt="" class="shape-two">
    <div class="container">
        <div class="theme-title-one text-center custom-blog">
            <div class="upper-title">{{trans('user.what_we_do')}}</div>
            <h2 class="main-title">{{trans('user.we_do')}}</h2>
        </div> <!-- /.theme-title-one -->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-block">
                    <div class="icon">
                        <img src="{{asset('interface/images/shape/shape-2.svg')}}" alt="" class="bg">
                        <img src="{{asset('interface/images/icon/icon1.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
                    </div>
                    <h5 class="title">1. {{trans('user.presenting_idea')}}</h5>
                    <p>{{trans('user.presenting_idea_body')}}</p>
                    <br>
                    <a href="about-us.html" class="more-button">{{trans('user.read_more')}}</a>
                </div> <!-- /.single-block -->
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-block">
                    <div class="icon">
                        <img src="{{asset('interface/images/shape/shape-2.svg')}}" alt="" class="bg">
                        <img src="{{asset('interface/images/icon/icon2.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
                    </div>
                    <h5 class="title">2. {{trans('user.studing_idea')}}</h5>
                    <p>{{trans('user.studing_idea_body')}}</p>
                    <br>
                    <a href="about-us.html" class="more-button">{{trans('user.read_more')}}</a>
                </div> <!-- /.single-block -->
            </div>

            <div class="col-lg-4 co-12 d-md-none d-lg-block">
                <div class="single-block">
                    <div class="icon">
                        <img src="{{asset('interface/images/shape/shape-2.svg')}}" alt="" class="bg">
                        <img src="{{asset('interface/images/icon/icon3.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
                    </div>
                    <h5 class="title">3. {{trans('user.funding_accepted_ideas')}}</h5>
                    <p> {{trans('user.funding_accepted_ideas_body')}}</p>
                    <br>
                    <a href="about-us.html" class="more-button">{{trans('user.read_more')}}</a>
                </div> <!-- /.single-block -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.agn-what-we-do -->


<!--
=============================================
    About Us
==============================================
-->
<div class="agn-about-us">
    <img src="{{asset('interface/images/shape/shape-61.svg')}}" alt="" class="shape-one">
    <img src="{{asset('interface/images/shape/shape-64.svg')}}" alt="" class="shape-two" data-aos="fade-right">
    <img src="{{asset('interface/images/shape/shape-65.svg')}}" alt="" class="shape-three" data-aos="fade-left">
    <img src="{{asset('interface/images/shape/shape-60.svg')}}" alt="" class="shape-four">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-last">
                <div class="text-wrapper">
                    <div class="theme-title-one">
                        <div class="upper-title">{{trans('user.about_us')}}</div>
                        <h2 class="main-title">{{trans('user.about_us_title')}}</h2>
                    </div> <!-- /.theme-title-one -->
                    <p>
                    {{trans('user.about_us_body')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="img-box">
                    <img src="{{asset('interface/images/home/about-img.png')}}" alt="" class="main-img">
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
    <a href="about-us.html" class="learn-more theme-button-two" data-aos="fade-right">{{trans('user.read_more')}}<i class="fa fa-angle-left icon-left" aria-hidden="true"></i></a>
</div> <!-- /.agn-about-us -->



<!--
=============================================
    Theme Counter
==============================================
-->
<div class="agn-counter-section">
    <img src="{{asset('interface/images/shape/shape-55.svg')}}" alt="" class="shape-one">
    <img src="{{asset('interface/images/shape/shape-59.svg')}}" alt="" class="shape-two">
    <img src="{{asset('interface/images/shape/shape-61.svg')}}" alt="" class="shape-three">
    <div class="container">
        <div class="main-wrapper">
            <div class="theme-title-one text-center">
                <h2 class="main-title">{{trans('user.achivement')}}</h2>
            </div> <!-- /.theme-title-one -->

            <div class="counter-wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                              <h2 class="number"><span class="timer" data-from="0" data-to="16" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                              <p>{{trans('user.clients')}}</p>
                          </div> <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                              <h2 class="number"><span class="timer" data-from="0" data-to="460" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                              <p>{{trans('user.ideas')}}</p>
                          </div> <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                              <h2 class="number"><span class="timer" data-from="0" data-to="500" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                              <p>{{trans('user.projects')}}</p>
                          </div> <!-- /.single-counter-box -->
                    </div>

                </div>
            </div> <!-- /.counter-wrapper -->
        </div> <!-- /.main-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.agn-counter-section -->

<div class="about-us-standard agency-style team-standard our-team ">
        <div class="theme-title-one text-center">
            <div class="upper-title">{{trans('user.msg_from')}}</div>
            <h2 class="main-title">{{trans('user.main_financier')}}</h2>
        </div> <!-- /.theme-title-one -->
        <div class="message-div">
            <div class="container">
                <div class="demo-container-1100">
                    <div class="row gutter-80">
                        <div class="col-lg-6 order-lg-last" data-aos="fade-right">
                            <div class="single-block">
                                <p>{{$owner->desc}}</p>
                            </div> <!-- /.single-block -->
                        </div><!--  /.col- -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-team-member">
                                <div class="wrapper">
                                    <div class="img-box"><img src="{{$owner->img}}" alt=""></div>
                                    <div class="info-meta">
                                        <h6 class="name">{{trans('user.financier_name')}}</h6>
                                        <span>{{trans('user.main_financier')}}</span>
                                    </div>
                                </div>
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <!-- /.hover-content -->
                            </div> <!-- /.single-team-member -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.demo-container-900 -->
            </div> <!-- /.container -->
        </div>
</div> <!-- /.about-us-standard -->


<!--
=====================================================
    Our Blog
=====================================================
-->
<div class="our-blog blog-masonry">
    <img src="{{asset('interface/images/shape/shape-58.svg')}}" alt="" class="shape-one">
    <img src="{{asset('interface/images/shape/shape-57.svg')}}" alt="" class="shape-two">
    <img src="{{asset('interface/images/shape/shape-9.svg')}}" alt="" class="shape-three">
    <img src="{{asset('interface/images/shape/shape-55.svg')}}" alt="" class="shape-four">
    <div class="container">
        <div class="theme-title-one text-center">
            <div class="upper-title">{{trans('user.blog')}}</div>
            <h2 class="main-title">{{trans('user.blog_title')}}</h2>
        </div> <!-- /.theme-title-one -->

        <div class="blog-one-slider">
            @foreach ($news as $new)
            <div class="item">
                <div class="isotop-item">
                    <div class="single-blog-post">
                        <div class="img-holder"><img src="{{$new->img}}" alt=""></div>
                        <div class="post-data">
                            <a href="#" class="date">{{$new->created_at}}</a>
                            <h5 class="blog-title-one title"><a href="{{route('user.news.show',$new->id)}}">{{$new->header}}</a></h5>
                            <p>{{$new->desc}}</p>
                            <a href="{{route('user.news.show',$new->id)}}" class="read-more"><i class="flaticon-back-1"></i></a>
                        </div> <!-- /.post-data -->
                    </div> <!-- /.single-blog-post -->
                </div> <!-- /.isotop-item -->
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.our-blog-one -->

<!--
=============================================
    Contact Banner
==============================================
-->
<div class="agn-contact-banner">
    <div class="container">
        <h2 class="title">{{trans('user.idea_qusetion')}}<br>{{trans('user.contact_us')}}</h2>
        <a href="{{route('contact.create')}}" class="contact-button line-button-one">{{trans('user.contact_us')}}</a>
    </div> <!-- /.contianer -->
</div> <!-- /.agn-contact-banner -->

@endsection
@section('scripts')
@endsection

