  <!-- ======= Start Footer ======= -->
  <footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3> <span>فكرتك</span></h3>
                <p><i class="bi bi-geo-alt-fill"></i> 7 زيد إبن ثابت , الحجاز مصر الجديدة القاهرة ,مصر<br>
                    <i class="bi bi-telephone-fill"></i> 01097130604
                    <br>
                    <i class="bi bi-envelope-fill"></i> info@sdsolutionseg.com<br>
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>{{trans('user.important_link')}}</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">{{trans('user.main')}}</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">{{trans('user.send_idea')}}</a></li>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#">{{trans('user.creative')}}</a>  
                    </li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">{{trans('user.conact_us')}}</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>{{trans('user.our_service')}}</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#services">{{trans('user.last_news')}}</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#services">{{trans('user.discussion_creative_idea')}}</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">{{trans('user.winners')}}</a></li>   
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">{{trans('user.display_best_idea')}}</a></li>

                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>{{trans('user.send_idea')}}</h4>
                <!-- <p>Our experienced team of professionals specializing in providing software solutions for companies of all sizes in different industry sectors, easier and in a much efficient way.</p> -->
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="سجل الان">
                </form>
            </div>

        </div>
    </div>
</div>

<div class="container  py-4">
    <div class="row">
        <div class="col-md-6">
            <div class="me-md-auto text-center text-md-end">
                <div class="copyright">
                    &copy; حقوق النشر <strong><span> فكرتك </span></strong>. جميع الحقوق محفوظة
                </div>
                <div class="credits">
                    تم التطوير بواسطة <a href="https://sdsolutionseg.com/index.php">SD Solutions</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">

        </div>


        <div class="col-md-3 ">
            <div class="social-links text-center text-md-start pt-3 pt-md-0 ">
                <a href="https://www.facebook.com/sdsolutionseg/ " class="facebook "><i class="bx bxl-facebook "></i></a>
                <a href="https://www.instagram.com/sd_solutionseg/ " class="instagram "><i class="bx bxl-instagram "></i></a>
                <a href="https://www.linkedin.com/company/sdsolutionseg/mycompany/ " class="linkedin "><i class="bx bxl-linkedin "></i></a>
            </div>
        </div>
    </div>




</div>
</footer>
<!-- ======= End Footer ======= -->

<!--Script------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('interface/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('interface/assets/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS Files -->
<script src="{{asset('interface/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('interface/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('interface/assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('interface/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('interface/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('interface/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('interface/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('interface/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('interface/assets/js/custom.js')}}"></script>

<script>
        $(document).ready(function(){
            var lang= {!!  json_encode(app()->getLocale()) !!}
            console.log(lang);
            if(lang=="ar"){
                $("html[lang=ar]").attr("dir", "rtl")
                .find("body").addClass("right-to-left");
            }else{
                $("html[lang=en]").attr("dir", "ltr")
                .find("body").addClass("left-to-right");
            }
        });
   </script>
    @yield('scripts')
</body>

</html>