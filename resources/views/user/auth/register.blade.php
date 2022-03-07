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
		<link rel="icon" type="image/png" sizes="56x56" href="{{asset('interface/images/logo/logoo.svg')}}">
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
				Sidebar Menu
			==============================================
			-->
			<div id="sidebar-menu" class="eCommerce-side-menu">
				<div class="inner-wrapper">
					<div class="logo-wrapper">
						<button class="close-button"><img src="images/icon/icon43.svg" alt=""></button>
						<img src="images/logo/logo5.svg" alt="">
					</div>

					<div class="main-menu-list">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About us</a></li>
							<li><a href="contact-us-minimal.html">Contact</a></li>
						</ul>
					</div>
					<form action="#" class="eCommerce-search">
						<input type="text" placeholder="Search here">
						<i class="fa fa-search icon" aria-hidden="true"></i>
					</form>
					<p class="copy-right">&copy; 2019  All Right Reserved</p>
				</div> <!-- /.inner-wrapper -->
			</div> <!-- #sidebar-menu -->

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
				<div class="sign-up-form-wrapper">
					<div class="title-area text-center">
						<h3>Register Now!</h3>
						<!-- <p>You can signup with you social account below</p>
					</div> /.title-area -->
					<!-- <ul class="social-icon-wrapper row">
						<li class="col-6"><a href="#" class="gmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a></li>
						<li class="col-6"><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
					</ul> -->
					<!-- <p class="or-text"><span>or</span></p> -->
                    <form id="contact-form" role="form" action="{{route('user.create')}}" method="post">
                        @csrf
						<div class="row">
							<div class="col-12">
								<div class="input-group">
									<input type="text" name="name" value="{{ old('name') }}"required>
									<label>name</label>
                                    @error('name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<input type="email" name="email" value="{{ old('email') }}" required>
									<label>Email</label>
                                    @error('email')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
                            <div class="col-12">
								<div class="input-group">
									<input type="text" name="phone" value="{{ old('phone') }}"  required>
									<label>phone</label>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
                            <div class="col-12">
								<div class="input-group">
									<input type="text" name="address"  value="{{ old('address') }}" required>
									<label>address</label>
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
                            <div class="col-12">
                                <input type="date" name="birthdate" value="{{ old('birthdate') }}"  class="form-control" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                @error('birthdate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
							</div> <!-- /.col- -->

                              <!---Gender---->
                              <div class="col-12 pt-50">
										<div class="input-group ">
                                        <div class=" col-md-4 col-3 text-center ">
                                            <label class="radioLabel" for="flexRadioDefault1">
                                            ذكر
                                        </label>
                                            <input  value="male" name="gender" type="radio" class="radioInput" name="flexRadioDefault" id="flexRadioDefault1"checked>
                                        </div>
                                        <div class="col-md-4 col-3">
                                            <label  class="radioLabel" for="flexRadioDefault2">
                                            أنثى
                                            </label>
                                            <input  value="female" name="gender" type="radio" class="radioInput" name="flexRadioDefault" id="flexRadioDefault2" >
                                        </div>
                                        @error('gender')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> 
									</div>
							

                               <div class="col-12">
                                <label for="form_need">تصنيف المستخدم <span>*</span>
                                </label>
                                    <div class="input-group">

                                        <select id="form_need" name="clasified" class="form-control" required="required" data-error="Please specify your need.">

                                        <option value="" selected disabled>-- اختر --</option>
                                        @foreach($classifications as $classification)
                                            @if (old('clasified') == $classification->id)
                                                <option value="{{$classification->id}}" selected>{{ $classification->name }}</option>
                                            @else
                                            <option value="{{$classification->id}}">{{$classification->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                        @error('clasified')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> <!-- /.input-group -->
						    	</div> <!-- /.col- -->

                            <div class="col-12">
                                    <label for="form_need">الصناعة /المجال<span>*</span>
                                    </label>
								<div class="input-group">
                                    <select id="form_need" name="field" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>-- اختر --</option>
                                    @foreach($fields as $field)
                                            @if (old('field') == $field->id)
                                                <option value="{{$field->id}}" selected>{{ $field->name }}</option>
                                            @else
                                            <option value="{{$field->id}}">{{$field->name}}</option>
                                            @endif
                                    @endforeach
                                </select>
                                @error('field')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->


							<div class="col-12">
								<div class="input-group">
									<input type="password" name="password"  value="{{ old('password') }}" required>
									<label>Password</label>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->

                            <div class="col-12">
								<div class="input-group">
									<input type="password" name="password_confirmation" required>
									<label>confirm password</label>
                                    @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->


						</div> <!-- /.row -->
						<div class="agreement-checkbox">
							<input type="checkbox" id="agreement">
							<label for="agreement">I agree to the terms and policy from the rogan inc.</label>
						</div>
                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="تسجيل الدخول">
					</form>
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
