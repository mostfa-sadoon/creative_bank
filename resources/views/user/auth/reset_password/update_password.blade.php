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
        <link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('interface/css/verify.css')}}">
	</head>
<!-- ======= Start Content ======= -->
    <body>
        <div class="main-page-wrapper">
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
  <!-- ======= Start Content ======= -->
            <div class="userProfile faq-page faq-tab-wrapper">
                <div class="container">
                    <div class="row gutters justify-content-center">
                        <div class="card h-100">
                        <div class="card-body">
                        <form class="submit-faq pt-20 pb-50" action="{{route('forget.updatePassword')}}" method="Post">
                            @csrf
                                <input type="hidden" name="email" value="{{Session::get('email')}}">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary profileTitle">Update Your Password !</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="password"> Password</label>
                                        <input type="password" name="password"  placeholder="Enter Password">
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        @if(Session::has('error'))
                                        <div class="alert alert-danger">
                                        {{ Session::get('error')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password confirmation</label>
                                        <input type="password" name="password_confirmation"  placeholder="Enter Password">
                                        @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters center-div">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="text-right">
                                        <input type="submit" id="submit" name="submit" value="update">
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
