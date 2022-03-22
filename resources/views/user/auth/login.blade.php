<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
		<meta name="author" content="creativegigs">
		<meta name="description" content="Rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#233D63">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#233D63">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
		<title>FKRTK</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/logo/logoo.svg">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{asset('interface/css/ar-style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{asset('interface/css/rtl-responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('interface/css/rtl-style.css')}}">
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="spinner"></div>
							<div class="txt-loading">
								<span data-text-preloader="K" class="letters-loading">
									K
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="K" class="letters-loading">
									K
								</span>
								<span data-text-preloader="F" class="letters-loading">
									F
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!--
			=============================================
				Signup Page
			==============================================
			-->
			<div class="signUp-page signUp-minimal pt-50 pb-100">
				<div class="shape-wrapper">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div> <!-- /.shape-wrapper -->
				<div class="signin-form-wrapper">
					<div class="title-area text-center">
						<h3>Login.</h3>
					</div> <!-- /.title-area -->
                    <form id="contact-form" role="form" action="{{route('user.signin')}}" method="post">
                        @csrf
						<div class="row">
							<div class="col-12">
								<div class="input-group">
									<input  name="email" type="email" required>
									<label>Email</label>
                                    @error('email')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<input type="password"  name="password"  required>
									<label>Password</label>
                                    @error('password')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
                        @if (session('error'))
                            <p class="alert alert-danger">
                                {{ session('error') }}
                            </p>
                       @endif

						<div class="agreement-checkbox d-flex justify-content-between align-items-center">
							<div class="adjust">
								<input type="checkbox" id="remember">
								<label for="remember">Remember Me</label>
								<a href="{{route('profile.forget')}}">Forget Password!</a>
							</div>
						</div>
                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="تسجيل الدخول">
					</form>
					<p class="signUp-text text-center">Don’t have any account? <a href="{{route('user.register')}}">Sign up</a> now.</p>
				</div> <!-- /.sign-up-form-wrapper -->
			</div> <!-- /.signUp-page -->









		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{asset('interface/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('interface/vendor/popper.js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('interface/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- js ui -->
		<script src="{{asset('interface/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Select js -->
		<script src="{{asset('interface/vendor/selectize.js/selectize.min.js')}}"></script>


		<!-- Language js -->
		<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


		<!-- Theme js -->
		<script src="{{asset('interface/js/lang.js')}}"></script>
		<script src="{{asset('interface/js/theme.js')}}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
