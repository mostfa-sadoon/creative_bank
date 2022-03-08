@extends('user_temp')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('interface/css/verify.css')}}">
@endsection
@section('content')
<!-- ======= Start Content ======= -->
 
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
                                <form class="otc" name="one-time-code" action="#" style="direction: ltr;">
                                    <fieldset>
                                        <label for="otc-1">Number 1</label>
                                        <label for="otc-2">Number 2</label>
                                        <label for="otc-3">Number 3</label>
                                        <label for="otc-4">Number 4</label>
                                        <label for="otc-5">Number 5</label>
                                        <label for="otc-6">Number 6</label>
                                
                                        <div>
                                        <input type="number" pattern="[0-9]*"  value="" inputtype="numeric" autocomplete="one-time-code" id="otc-1" required>
                                
                                        <!-- Autocomplete not to put on other input -->
                                        <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
                                        <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
                                        <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-4" required>
                                        <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
                                        <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-6" required>
                                        </div>
                                    </fieldset>
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


<!-- ======= End Content ======= -->

@endsection

@section('scripts')
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
@endsection

