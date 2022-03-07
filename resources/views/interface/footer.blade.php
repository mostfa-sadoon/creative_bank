
			<footer class="theme-footer-one">
				<div class="shape-one" data-aos="zoom-in-right"></div>
				<img src="{{asset('interface/images/shape/shape-67.svg')}}" alt="" class="shape-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-12 about-widget" data-aos="fade-up">
								<a href="index.html" class="logo"><img src="{{asset('interface/images/logo/logoo.svg')}}" alt=""></a>
								<a href="#" class="email">info@sdsolutionseg.com</a>
								<a href="#" class="phone">01097130604</a>

							</div> <!-- /.about-widget -->
							<div class="col-lg-3 col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
								<h5 class="title">Services</h5>
								<ul>
									<li><a href="about-us.html">our service</a></li>
									<li><a href="about-us.html">Idea Cycle</a></li>
									<li><a href="about-us.html">Sponser</a></li>

								</ul>
							</div> <!-- /.footer-recent-post -->
							<div class="col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
								<h5 class="title">important link</h5>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="send-your-idea.html">send your idea</a></li>
									<li><a href="about-us.html">About Bank</a></li>
									<li><a href="blogs.html">News</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information" data-aos="fade-up">
								<h5 class="title">Our Address</h5>
								<p> 7 زيد إبن ثابت , الحجاز مصر الجديدة
									<br>القاهرة ,مصر</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->

				<div class="container">
					<div class="bottom-footer">
						<div class="clearfix">
							<p>&copy; 2019 copyright all right reserved</p>
							<ul>
								<li><a href="#">Privace & Policy.</a></li>
								<li><a href="faq.html">Faq.</a></li>
								<li><a href="#">Terms.</a></li>
							</ul>
						</div>
					</div> <!-- /.bottom-footer -->
				</div>
			</footer> <!-- /.theme-footer-one -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>



		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{asset('interface/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('interface/vendor/popper.js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('interface/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	    <!-- menu  -->
		<script src="{{asset('interface/vendor/mega-menu/assets/js/custom.js')}}"></script>
		<!-- AOS js -->
		<script src="{{asset('interface/vendor/aos-next/dist/aos.js')}}"></script>
		<!-- WOW js -->
		<script src="{{asset('interface/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<!-- owl.carousel -->
		<script src="{{asset('interface/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<!-- js count to -->
		<script src="{{asset('interface/vendor/jquery.appear.js')}}"></script>
		<script src="{{asset('interface/vendor/jquery.countTo.js')}}"></script>
		<!-- Fancybox -->
		<script src="{{asset('interface/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


		<!-- Theme js -->
		<script src="{{asset('interface/js/lang.js')}}"></script>
		<script src="{{asset('interface/js/theme.js')}}"></script>
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
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
