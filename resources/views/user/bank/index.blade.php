@extends('user_temp')
@section('content')
 <!-- ======= Start Content ======= -->
 <div class="solid-inner-banner">
    <h2 class="page-title">{{trans('user.about_us')}}</h2>
</div> <!-- /.solid-inner-banner -->
<div class="about-us-standard pt-150 pb-150">
    <div class="container">
        <div class="theme-title-three text-center mb-170">
            <!-- <h2 class="title"></h2> -->
            <p>{{$abouts->description}} </p>
        </div> <!-- /.theme-title-three -->

        <div class="about-div-container">
            <div class="row about-row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="single-block about-div">
                        <h5 class="block-title pb-30">{{trans('admin.mission')}}</h5>
                        <p> {{$abouts->mission}}</p>
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->

                <div class="col-lg-6" data-aos="fade-up">
                    <div class="single-block about-div">
                        <h5 class="block-title pb-30">{{trans('admin.vision')}}</h5>
                        <p>{{$abouts->vision}}
                        </p>
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.demo-container-900 -->
    </div> <!-- /.container -->
</div> <!-- /.about-us-standard -->
<!-- Element Style -->
<div class="element-section mb-150">
    <div class="container">
        <div class="element-tile-two">{{trans('user.how_we_work')}}</div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- The value of data-role should be z-tabs, data-options is optional to set options -->
                <div id='theme-tab-one' class="theme-tab-basic theme-tab" data-role='z-tabs' data-options='{"theme": "silver", "orientation": "horizontal", "animation": {"duration": 400, "effects": "slideH"}}'>
                    <!-- Tab Navigation Menu -->
                    <ul class="tabs-menu clearfix">
                        <li><a>{{trans('user.presenting_idea')}}</a></li>
                        <li><a>{{trans('user.studing_idea')}}</a></li>
                        <li><a>{{trans('admin.accepted_ideas')}}</a></li>
                    </ul>
                    <!-- Content container -->
                    <div class="tab-container">
                        <!-- Graphics -->
                        <div>
                            <h4>{{trans('user.terms')}}</h4>
                            <p>{{$abouts->ideaRate}}</p>
                        </div>

                        <!-- Design -->
                        <div>
                            <h4>{{trans('user.idea_types')}}</h4>
                            <p>{{$abouts->ideaStudy}}.</p>
                        </div>

                        <!-- Vectors -->
                        <div>
                            <h4>{{trans('user.benefits')}}</h4>
                            <p>{{$abouts->acceptedIdea}}.</p>
                        </div>

                        <!-- Themes -->

                    </div> <!-- /.tab-container -->
                </div> <!-- /.theme-tab -->
            </div>
        </div>
    </div>
</div>
<div class="about-us-standard agency-style team-standard our-team ">
    <div class="theme-title-one text-center pb-4">
        <div class="upper-title">{{trans('user.msg_from')}}</div>
        <h2 class="main-title">{{trans('user.main_financier')}}</h2>
    </div> <!-- /.theme-title-one -->
    <div class="message-div">
        <div class="container">
            <div class="demo-container-1100">
                <div class="row gutter-80">
                    <div class="col-lg-6 order-lg-last" data-aos="fade-right">
                        <div class="single-block">
                            <p>{{$owners->desc}}</p>
                        </div> <!-- /.single-block -->
                    </div><!--  /.col- -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-member">
                            <div class="wrapper">
                                <div class="img-box"><img src="{{asset('interface/images/ceo.jpeg')}}" alt=""></div>
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
@endsection

@section('scripts')
<script src="{{asset('interface/vendor/tabs/tabs.js')}}"></script>
@endsection



