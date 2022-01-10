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
        <div class="row welcome-head">
            <div class="col-xl-8">
                <h1>مرحبا بكم فى بنك <span>الأفكار</span></h1>
                <!-- <p>جميع الإنجازات، كل الثروات المكتسبة كانت بدايتها فكرة</p> -->
                <p>نظراً لأن العمل في مجال الخدمات الإلكترونية يرتكز بشكل أساس على الأفكار الإبداعية، فقد قامت الشركة منذ عدة أعوام. بتأسيس بنك الأفكار كمبادرة تصب في هذا الاتجاه.</p>
                <div class="buttons">
                    <button class="hire upper" onclick="location.href='contactus.html'">أرسل فكرتك</button>
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
        <section id="about" class="container about" data-aos="zoom-in" data-aos-delay="100">

            <div class="section-title">
                <h2>من نحن؟</h2>
            </div>
            <div>
                <p>نظراً لأن العمل في مجال الخدمات الإلكترونية يرتكز بشكل أساس على الأفكار الإبداعية، فقد قامت الشركة منذ عدة أعوام. بتأسيس بنك الأفكار كمبادرة تصب في هذا الاتجاه.</p>
                <p>ويهدف بنك الأفكار إلى استقبال جميع الأفكار سواء المتعلقة بمشاريع إلكترونية جديدة أو عمليات تطوير جوهرية لمنتجات الشركة الحالية أو غيرها</p>
            </div>

        </section>
        <!-- ======= End Body ======= -->

        <!-- ======= Start best-idea ======= -->
        <section id="best-idea" class="container best-idea">
            <div class="">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>أفضل الأفكار</h2>
                </div>
                <section class="wrapper">
                    <div class="container-fostrap">

                        <div class="content">
                            <div class="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="100">
                                        <div class="card">
                                            <a class="img-card" href="#">
                                                <img src="{{asset('interface/assets/images/best_ideas/tablate.png')}}" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="#"> تابلت التعلم من خلال الواقع المعزز zSpace
                                                  </a>
                                                </h4>
                                                <p class="">
                                                    الواقع المعزز، تابلت، تعليم، تكنولوجيا، أبعاد، نظارات ثلاثية الأبعاد، تفاعلية، حصص، تطبيق، قلم، الواقع الافتراضي، تكنولوجيا الواقع الافتراضي
                                                </p>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="#" class="btn btn-link btn-block">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card">
                                            <a class="img-card" href="#">
                                                <img src="{{asset('interface/assets/images/best_ideas/tablate.png')}}" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="#"> تابلت التعلم من خلال الواقع المعزز zSpace
                                                  </a>
                                                </h4>
                                                <p class="">
                                                    الواقع المعزز، تابلت، تعليم، تكنولوجيا، أبعاد، نظارات ثلاثية الأبعاد، تفاعلية، حصص، تطبيق، قلم، الواقع الافتراضي، تكنولوجيا الواقع الافتراضي
                                                </p>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="#" class="btn btn-link btn-block">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card">
                                            <a class="img-card" href="#">
                                                <img src="{{asset('interface/assets/images/best_ideas/tablate.png')}}" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="#"> تابلت التعلم من خلال الواقع المعزز zSpace
                                                  </a>
                                                </h4>
                                                <p class="">
                                                    الواقع المعزز، تابلت، تعليم، تكنولوجيا، أبعاد، نظارات ثلاثية الأبعاد، تفاعلية، حصص، تطبيق، قلم، الواقع الافتراضي، تكنولوجيا الواقع الافتراضي
                                                </p>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="#" class="btn btn-link btn-block">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div>

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
            <div class="">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>كم سأربح !</h2>
                </div>
                <section class="wrapper">
                    <div class="container-fostrap">

                        <div class="content">
                            <div class="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="100">

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
        <!-- ======= End cost ======= -->

        <!-- ======= Start Notable participants ======= -->
        <section id="team" class="container team ">
            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="zoom-in">
                    <h2>أبرز المشتركين</h2>
                    <p>نظراً لأن العمل في مجال الخدمات الإلكترونية يرتكز بشكل أساس على الأفكار الإبداعية، فقد قامت الشركة منذ عدة أعوام. بتأسيس بنك الأفكار كمبادرة تصب في هذا الاتجاه. ويهدف بنك الأفكار إلى استقبال جميع الأفكار سواء المتعلقة بمشاريع إلكترونية
                        جديدة أو عمليات تطوير جوهرية لمنتجات الشركة الحالية أو غيرها</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="interface/assets/images/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
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
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
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
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
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
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
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
                    <h2>آخر الأخبار</h2>
                </div>
                <div class="row">
                    <div class="cardcontainer col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="photo"> <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                            <div class="photos">عاجل</div>
                        </div>
                        <div class="content">
                            <p class="txt4">ساكنين تطلق أداة تسعير خوارزمية جديدة للعقارات</p>
                            <!-- <p class="txt5">A city that never sleeps</p> -->
                            <p class="txt2">ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق ,ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق,للتفاوض.</p>
                        </div>
                        <div class="newsFooter">
                            <p>
                                <a class="read-more waves-effect waves-light btn" href="#">عرض المزيد</a>
                            </p>
                            <p class="txt3">12/22/2021 <i class="bi bi-calendar"></i></p>
                        </div>
                    </div>
                    <div class="cardcontainer col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="photo"> <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                            <div class="photos">عاجل</div>
                        </div>
                        <div class="content">
                            <p class="txt4">ساكنين تطلق أداة تسعير خوارزمية جديدة للعقارات</p>
                            <!-- <p class="txt5">A city that never sleeps</p> -->
                            <p class="txt2">ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق ,ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق,للتفاوض.</p>
                        </div>
                        <div class="newsFooter">
                            <p>
                                <a class="read-more waves-effect waves-light btn" href="#">عرض المزيد</a>
                            </p>
                            <p class="txt3">12/22/2021 <i class="bi bi-calendar"></i></p>
                        </div>
                    </div>
                    <div class="cardcontainer col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="photo"> <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                            <div class="photos">عاجل</div>
                        </div>
                        <div class="content">
                            <p class="txt4">ساكنين تطلق أداة تسعير خوارزمية جديدة للعقارات</p>
                            <!-- <p class="txt5">A city that never sleeps</p> -->
                            <p class="txt2">ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق ,ستوفر أداة التسعير المجاني للمشترين والبائعين تقديرًا دقيقًا للأسعار ليكون بمثابة نقطة انطلاق,للتفاوض.</p>
                        </div>
                        <div class="newsFooter">
                            <p>
                                <a class="read-more waves-effect waves-light btn" href="#">عرض المزيد</a>
                            </p>
                            <p class="txt3">12/22/2021 <i class="bi bi-calendar"></i></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!---End News---->

    </div>
    <!-- ======= End Content ======= -->

@endsection