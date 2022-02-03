@extends('user_temp')
@section('content')
 <!-- ======= Start Content ======= -->
 <div class="">
        <!-- ======= Start creative ======= -->
        <section id="creative" class=" creative card bg-light">

            <div class=" section-title">
                <h2>عن بنك الافكار</h2>
            </div>
            <div class="container text-center">
                <p><span class="qoute"></span>هذه الصفحة تحتوى على أفضل الاشخاص المشتركين فى بنك الافكار و اصحاب الافكار الرائدة<span class="qoute"></span></p>

            </div>

        </section>
        <!-- ======= End creative ======= -->


           <!-- ======= Start Content ======= -->
    <section class="ftco-section  bg-light card">
        <div class="container">
            <div class="section-title">
                <h2>تواصل معنا</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox-contact w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p class="text-center">
                                            <span>العنوان:</span><br>
                                            <a href="https://www.google.com/maps/place/SD+Solutions/@30.116134,31.354833,18z/data=!4m5!3m4!1s0x0:0x99eb8b27ece9940f!8m2!3d30.1161336!4d31.3548332?hl=en">7 Zeid Ibn Sabet, Al Matar, El Nozha, Cairo Governorate, Egypt.</a>                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox-contact w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p class="text-center">
                                            <span>رقم الهاتف:</span><br>
                                            <a href="tel://+20 109 713 0604">01097130604</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox-contact w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p class="text-center">
                                            <span>البريد الالكترونى:</span><br>
                                            <a href="mailto:info@sdsolutionseg.com">info@sdsolutionseg.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox-contact w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p class="text-center"><span>الموقع الالكترونى:</span> <br><a href="https://sdsolutionseg.com/">sdsolutionseg.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-7  order-2 order-md-1">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6 class="label" for="name">الاسم</h6>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="الاسم">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6 class="label" for="email">البريد الالكترونى</h6>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتورنى">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6 class="label" for="subject">العنوان</h6>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="العنوان">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6 class="label" for="#">الرسالة</h6>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="الرسالة"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="أرسل" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch  order-1 order-md-2">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(assets/images/contactUs.jpg); background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Content ======= -->




        <!---Start Vision-->
        <section id="creative" class="container creative card bg-light">
            <div class="container about-bank">
                <div class="text-center row about-item">
                    <i class="text-center fa fa-eye  fa-4x"></i>
                    <span class="text-center"> الرؤية</span>

                </div>
                <div>
                    <p>بنك الكتروني وطني يساهم في التنمية التكنولوجية القائمة على الابتكار والاختراع</p>
                </div>
            </div>
        </section>
        <!---End Vision---->

        <!---Start Mission-->
        <section id="creative" class="container creative card bg-light">
            <div class="container about-bank">
                <div class="text-center row about-item">
                    <i class="text-center fa fa-bullseye  fa-4x"></i>
                    <span class="text-center"> الرسالة</span>

                </div>
                <div>
                    <p>ملتقى للمخترع والمستثمر ورجل الصناعة والمجتمع المدني والجهات المانحة للمساهمة في تفعيل منظومة العلوم والتكنولوجيا واستثمار الابتكارات والاختراعات والمساعدة في خلق فرص استثمارية تكنولوجية وتكنولوجيا وطنية</p>
                </div>
            </div>
        </section>
        <!---End Mission---->

        <!---Start Goal-->
        <section id="creative" class="container creative card bg-light">
            <div class="container about-bank">
                <div class="text-center row about-item">
                    <i class="text-center fa fa-lightbulb-o fa-4x"></i>
                    <span class="text-center"> الهدف</span>

                </div>
                <div>
                    <p>تشجيع الابتكارات والاختراعات التي تؤدى إلى توليد تكنولوجيا وطنية ، والمساهمة في تنسيق الجهود الوطنية لتنمية القدرات الابتكارية من خلال توفير منفذ تسويقي للابتكارات ، دعم المبتكرين والمخترعين ومؤسسات المجتمع المدني</p>
                </div>
            </div>
        </section>
        <!---End Goal---->


    </div>
    <!-- ======= End Content ======= -->
@endsection