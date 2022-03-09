@extends('user_temp')
@section('content')
<div class="contact-address-two">
    <div class="container">
        <div class="theme-title-one text-center">
            <div class="upper-title">{{trans('user.our_address')}}</div>
            <h2 class="main-title">{{trans('user.contact_us_msg')}} </h2>
        </div> <!-- /.theme-title-one -->

        <div class="row">
            <div class="col-lg-4">
                <div class="address-block">
                    <div class="icon-box"><img src="{{asset('interface/images/icon/icon59.svg')}}" alt=""></div>
                    <h5>{{trans('user.our_address')}}</h5>
                    <p>{{$ContactInfo->address}}</p>
                </div> <!-- /.address-block -->
            </div> <!-- /.col- -->
            <div class="col-lg-4">
                <div class="address-block">
                    <div class="icon-box"><img src="{{asset('interface/images/icon/icon60.svg')}}" alt=""></div>
                    <h5>{{trans('user.email_phone')}}</h5>
                    <p><a href="#">{{$ContactInfo->email}}</a> <br><a href="#">{{$ContactInfo->phone}}9</a></p>
                </div> <!-- /.address-block -->
            </div> <!-- /.col- -->
            <div class="col-lg-4">
                <div class="address-block">
                    <div class="icon-box"><img src="{{asset('interface/images/icon/icon61.svg')}}" alt=""></div>
                    <h5>{{trans('user.get_in_touch')}}</h5>
                    <ul>
                        <li><a href="{{$ContactInfo->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{$ContactInfo->tweeter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{$ContactInfo->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{$ContactInfo->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /.address-block -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.contact-address-two -->




<!--
=============================================
    Contact Us
==============================================
-->
<div class="contact-us-section contact-minimal">
    <div class="row no-gutters">
        <div class="col-lg-6 order-lg-last">
            <div class="inner-wrapper clearfix">
                <div class="contact-form">
                      <form class="form form-style-three" id="contact-form" method="POST" action="{{ route('contact.store') }}" data-toggle="validator">
                        @csrf
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email Address*" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input id="form_sub" type="text" name="subject" placeholder="Subject*" required="required" data-error="Subject is required.">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" class="form_message" placeholder="Your Message*" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button class="send-button">Send Message</button>
                        </div> <!-- /.controls -->
                      </form>
                </div> <!-- /.contact-form -->
            </div> <!-- /.inner-wrapper -->
        </div> <!-- /.col- -->
        <div class="col-lg-6 order-lg-first"><div id="google-map-three"><div class="map-canvas"></div></div></div>
    </div> <!-- /.row -->
</div> <!-- /.contact-us-section -->
@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU" type="text/javascript"></script>
    <script src="{{asset('interface/vendor/sanzzy-map/dist/snazzy-info-window.min.js')}}"></script>
    <script src="{{asset('interface/js/map-script.js')}}"></script>
@endsection
