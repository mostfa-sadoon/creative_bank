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

            <div class="mt-4">
                <!---Start Goal-->
                <div class="userProfile faq-page faq-tab-wrapper">
                    <div class="container">
                        <div class="row gutters center-div">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                                <div class="card h-100">
                                <div class="card-body">
                                    <div class="account-settings">
                                        <div class="user-profile">
                                            <div class="pt-50">
                                                <div class="imageContainer d-flex justify-content-center">
                                                    <img src="{{asset('interface/images/fogotpass.png')}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about">
                                            <h4>Please Enter Verification Code  ! </h4>
                                        </div>
                                        <div class="forgotpassword pt-50">
                                            <form class="otc" name="one-time-code" action="{{route('submitToekn')}}" method="post" style="direction: ltr;">
                                                @csrf
                                                <input type="hidden" name="email" value="{{Session::get('email')}}">
                                                <fieldset>
                                                    <label for="otc-1">Number 1</label>
                                                    <label for="otc-2">Number 2</label>
                                                    <label for="otc-3">Number 3</label>
                                                    <label for="otc-4">Number 4</label>
                                                    <label for="otc-5">Number 5</label>
                                                    <label for="otc-6">Number 6</label>

                                                    <div>
                                                    <input type="number" name="number[]" pattern="[0-9]*"  value="" inputtype="numeric" autocomplete="one-time-code" id="otc-1" required>
                                                    <!-- Autocomplete not to put on other input -->
                                                    <input type="number" name="number[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
                                                    <input type="number" name="number[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
                                                    <input type="number" name="number[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-4" required>
                                                    <input type="number" name="number[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
                                                    <input type="number" name="number[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-6" required>

                                                    </div>
                                                    @if(Session::has('errortoken'))
                                                    <div class="alert alert-danger">
                                                    {{ Session::get('errortoken')}}
                                                    </div>
                                                    @endif
                                                </fieldset>
                                              

                                                <div class="col-lg- pb-70 pt-50 center-div">
                                                    <button type="submit" id="submit" name="submit" class="line-button-one" >send</button>
                                                </div>
                                            </form>



                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!---End Goal---->

            </div>
        </div>


<!-- ======= End Content ======= -->


<script>

let in1 = document.getElementById('otc-1'),
    ins = document.querySelectorAll('input[type="number"]'),
	 splitNumber = function(e) {
		let data = e.data || e.target.value;
		if ( ! data ) return;
		if ( data.length === 1 ) return;

		popuNext(e.target, data);
	},
	popuNext = function(el, data) {
		el.value = data[0];
		data = data.substring(1);
		if ( el.nextElementSibling && data.length ) {
			popuNext(el.nextElementSibling, data);
		}
	};

ins.forEach(function(input) {

	input.addEventListener('keyup', function(e){
		if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
			 return;
		}

		if ( (e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT" ) {
			this.previousElementSibling.select();
		} else if (e.keyCode !== 8 && this.nextElementSibling) {
			this.nextElementSibling.select();
		}

		if ( e.target.value.length > 1 ) {
			splitNumber(e);
		}
	});


	input.addEventListener('focus', function(e) {
		// If the focus element is the first one, do nothing
		if ( this === in1 ) return;

		if ( in1.value == '' ) {
			in1.focus();
		}


		if ( this.previousElementSibling.value == '' ) {
			this.previousElementSibling.focus();
		}
	});
});


in1.addEventListener('input', splitNumber);
</script>

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

