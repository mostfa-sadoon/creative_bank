@extends('user_temp')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
@endsection
@section('content')
  <!-- ======= Start Content ======= -->
  <div class="userProfile faq-page faq-tab-wrapper">
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                  <div class="card-body">
                     <div class="account-settings">
                         <div class="user-profile">
                            <div class="user-avatar">
                                <div class="imageContainer">
                                    <img src="{{$user->img}}" alt="Maxwell Admin" >
                                    <div class="overlay" >
                                        <a href="#" class="icon" title="User Profile" id="pImage">
                                        <i class="fa fa-user"></i>
                                        </a>
                                    </div>
                                    <input type="file" id="my_file" style="display: none;" />
                                </div>
                            </div>
                            <h5 class="user-name">Yuki Hayashi</h5>
                            <h6 class="user-email">yuki@Maxwell.com</h6>
                         </div>
                        <div class="about">
                            <h5>About</h5>
                            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                        </div>

                        <a href="{{route('user.edit.password',$user->id)}}" >Update password</a>

                     </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div id='theme-tab-one' class="theme-tab-basic theme-tab" data-role='z-tabs' data-options='{"theme": "silver", "orientation": "horizontal", "animation": {"duration": 400, "effects": "slideH"}}'>
                    <!-- Tab Navigation Menu -->
                    <ul class="tabs-menu clearfix">
                        <li><a>Personal Details</a></li>

                    </ul>
                    <!-- Content container -->
                    <div class="tab-container">
                        <!-- Graphics -->
                        <div>
                            <div class="card h-100">
                                <div class="card-body">
                                    <form class="submit-faq pt-20"  method="post" action="{{route('user.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mb-2 text-primary profileTitle">Personal Details</h6>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                @if(old('name'))
                                                <input type="text" class="form-control" name="name"  value="{{ old('name') }}" id="validationDefault01" placeholder="  الاسم بالكامل " required>
                                                @else
                                                    <input type="text" class="form-control" name="name"  value="{{$user->name}}"  id="validationDefault01" placeholder="  الاسم بالكامل " required>
                                                @endif
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                @if(old('email'))
                                                <input id="form_email" name="email" type="email" value="{{old('email')}}" name="email" class="form-control" placeholder=" البريد الالكترونى" required="required" data-error="Valid email is required.">
                                                @else
                                                    <input id="form_email" name="email" type="email" value="{{$user->email}}" name="email" class="form-control" placeholder=" البريد الالكترونى" required="required" data-error="Valid email is required.">
                                                @endif
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                @if(old('phone'))
                                                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="validationDefault01" placeholder="رقم الهاتف" required>
                                                    @else
                                                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="validationDefault01" placeholder="رقم الهاتف" required>
                                                    @endif
                                                    @error('phone')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <div class="form-group profileGender">

                                                @if(old('gender'))
                                                @if(old('gender')=='male')
                                                    <div class="form-check"> <label class="form-check-label" for="flexRadioDefault1">
                                                    {{trans('user.male')}}
                                                    </label>
                                                        <input  class="profileGenderInput" type="radio" value="male" name="gender" id="flexRadioDefault1" checked>
                                                    </div>
                                                    <div class="form-check"><label class="form-check-label" for="flexRadioDefault2">
                                                    {{trans('user.female')}}
                                                        </label>
                                                        <input  class="profileGenderInput" type="radio" value="female" name="gender" id="flexRadioDefault2">
                                                    </div>
                                                @else
                                                    <div class="form-check"> <label class="form-check-label" for="flexRadioDefault1">
                                                    {{trans('user.male')}}
                                                    </label>
                                                        <input  class="profileGenderInput" type="radio" value="male" name="gender" id="flexRadioDefault1" >
                                                    </div>
                                                    <div class="form-check"><label class="form-check-label" for="flexRadioDefault2">
                                                    {{trans('user.female')}}
                                                        </label>
                                                        <input  class="profileGenderInput" type="radio" value="female" name="gender" id="flexRadioDefault2" checked>
                                                    </div>
                                                @endif
                                            @else
                                            @if($user->gender=='male')
                                            <div class="form-check"> <label class="form-check-label" for="flexRadioDefault1">
                                                    {{trans('user.male')}}
                                                    </label>
                                                        <input  class="profileGenderInput" type="radio" value="male" name="gender" id="flexRadioDefault1" checked>
                                                    </div>
                                                    <div class="form-check"><label class="form-check-label" for="flexRadioDefault2">
                                                    {{trans('user.female')}}
                                                        </label>
                                                        <input  class="profileGenderInput" type="radio" value="female" name="gender" id="flexRadioDefault2">
                                                    </div>
                                                @else
                                                <div class="form-check"> <label class="form-check-label" for="flexRadioDefault1">
                                                    {{trans('user.male')}}
                                                    </label>
                                                        <input  class="profileGenderInput"type="radio" value="male" name="gender" id="flexRadioDefault1" >
                                                    </div>
                                                    <div class="form-check"><label class="form-check-label" for="flexRadioDefault2">
                                                    {{trans('user.female')}}
                                                        </label>
                                                        <input  class="profileGenderInput" type="radio" value="female" name="gender" id="flexRadioDefault2" checked>
                                                    </div>
                                                @endif
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                @if(old('date_of_birth'))
                                                <input type="text" name="address" class="form-control" value="{{old('address')}}" id="validationDefault01" placeholder="العنوان" required>
                                                @else
                                                <input type="text" name="address" class="form-control" value="{{$user->address}}" id="validationDefault01" placeholder="العنوان" required>
                                                @endif
                                                @error('address')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group profileDate">
                                                @if(old('date_of_birth'))
                                                <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                                @else
                                                <input type="date" name="date_of_birth" class="form-control" value="{{$user->date_of_birth}}" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                                @endif
                                                @error('date_of_birth')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="classification">Classification</label>
                                                <select id="form_need" name="clasified" class="form-select form-select-lg mb-3 send-idea-select" required="required" data-error="Please specify your need.">
                                                    @if(old('clasified'))
                                                        @foreach($classifications as $classification)
                                                            @if (old('clasified') == $classification->id)
                                                            <option value="{{$classification->id}}" selected>{{ $classification->name }}</option>
                                                            @else
                                                            <option value="{{$classification->id}}">{{$classification->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <option value="{{$user->classified_id}}" selected >{{$classification->name}}</option>
                                                        @foreach($classifications as $classification)
                                                            <option value="{{$classification->id}}">{{$classification->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            @error('clasified')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="field">Field</label>
                                                <select name="field"  id="field" class="form-select form-select-lg mb-3 send-idea-select" aria-label=".form-select-lg example">
                                                    @if(old('field'))
                                                    @foreach($fields as $field)
                                                        @if (old('field') == $field->id)
                                                        <option value="{{$field->id}}" selected>{{ $field->name }}</option>
                                                        @else
                                                        <option value="{{$field->id}}">{{$field->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                        <option value="{{$user->field_id}}" selected >{{$field->name}}</option>
                                                    @foreach($fields as $field)
                                                        <option value="{{$field->id}}">{{$field->name}}</option>
                                                    @endforeach
                                                @endif
                                                <select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutters center-div pt-50">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="text-right">
                                                <button type="submit" id="submit" name="submit" >Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.tab-container -->
                </div> <!-- /.theme-tab -->
            </div>
        </div>
      </div>
  </div>

<!-- ======= End Content ======= -->

@endsection

@section('scripts')
<script>
    $("#pImage").click(function() {
    $("input[id='my_file']").click();
    });
</script>
<script src="{{asset('interface/vendor/tabs/tabs.js')}}"></script>
@endsection

