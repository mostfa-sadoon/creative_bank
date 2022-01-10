  <!-- ======= Start Footer ======= -->
  <footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>بنك <span>الافكار</span></h3>
                <p><i class="bi bi-geo-alt-fill"></i> 7 زيد إبن ثابت , الحجاز مصر الجديدة القاهرة ,مصر<br>
                    <i class="bi bi-telephone-fill"></i> 01097130604
                    <br>
                    <i class="bi bi-envelope-fill"></i> info@sdsolutionseg.com<br>
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>روابط هامة</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">الرئيسية</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">أرسل فكرتك</a></li>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#">مبدعين</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">تواصل معنا</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>خدماتنا</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#services">عرض آخر الاخبار</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="#services">مناقشة الأفكار الابداعية</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">التواصل مع الفائزين</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">عرض أفضل الافكار</a></li>

                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>أرسل فكرتك</h4>
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
                    &copy; حقوق النشر <strong><span> بنك الأفكار </span></strong>. جميع الحقوق محفوظة
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
<script src="{{asset('interface/assets/js/jquery-2.1.0.min.js')}}"></script>
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
</body>

</html>