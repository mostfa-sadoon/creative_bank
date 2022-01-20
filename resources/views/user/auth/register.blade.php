@extends('user_temp')
@section('content')
   <!-- ======= Start Content ======= -->
   <div class="">

<!---Start News-->
<div class="container mt-4">
    <div class="row send-Idea">
        <div class="col-lg-8 mx-auto">
            <div class="card mt-2 mx-auto p-1 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <h2>تسجيل الدخول</h2>
                        <form id="contact-form" role="form" action="{{route('user.create')}}" method="post">
                            @csrf
                            <div class="controls">
                                <!---Name---->
                                <div class="form-group ">
                                    <label for="validationDefault01"> الاسم بالكامل <span>*</span>
                                    </label>
                                    <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="  الاسم بالكامل " required>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!---Email---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_email">البريد الالكترونى<span>*</span>
                                        </label>
                                        <input id="form_email" name="email" type="email" name="email" class="form-control" placeholder=" البريد الالكترونى" required="required" data-error="Valid email is required.">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <!---Password---->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">الرقم السرى<span>*</span>
                                    </label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                 <!---confirm-Password---->
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">تاكيد الرقم السري<span>*</span>
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---Phone---->
                                <div class="form-group ">
                                    <label for="validationDefault01">رقم الهاتف<span>*</span>
                                    </label>
                                    <input type="tel" name="phone" class="form-control" id="validationDefault01" placeholder="رقم الهاتف" required>
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---Age---->
                                <div class="form-group ">
                                    <label for="validationDefault01">تاريخ الميلاد<span>*</span>
                                    </label>
                                    <input type="date" name="birthdate" class="form-control" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                    @error('birthdate')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---Gender---->
                                <div class="form-group ">
                                    <label for="validationDefault01">النوع<span>*</span>
                                    </label>
                                    <div class="row">
                                        <div class="form-check gender-check col-md-4 col-3 text-center"> 
                                            <label class="form-check-label " for="flexRadioDefault1">
                                            ذكر
                                           </label>
                                            <input class="form-check-input" value="male" name="gender" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>

                                        </div>
                                        <div class="form-check gender-check col-md-4 col-3">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            أنثى
                                            </label>
                                            <input class="form-check-input" value="famale" name="gender" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >

                                        </div>
                                        @error('gender')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!---ِAddress---->
                                <div class="form-group ">
                                    <label for="validationDefault01">العنوان<span>*</span>
                                    </label>
                                    <input type="text" name="address" class="form-control" id="validationDefault01" placeholder="العنوان" required>
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---User Category---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_need">تصنيف المستخدم <span>*</span>
                                        </label>
                                        <select id="form_need" name="clasified" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="" selected disabled>-- اختر --</option>
                                        <option value="Researcher">باحث</option>
                                        <option value="business pioneer">رائد أعمال</option>
                                        <option value="student">صحافة</option>
                                        <option value="specialized">محترف/متخصص</option>
                                        <option value="Investor">مستمر</option>
                                        <option value="other">أخرى</option>
                                    </select>
                                    @error('clasified')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <!---Category---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_need">الصناعة /المجال<span>*</span>
                                        </label>
                                        <select id="form_need" name="field" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="" selected disabled>-- اختر --</option>
                                        @foreach($fields as $field)
                                            <option value="{{$field->id}}">{{$field->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('field')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <a href="login.html"> تمتلك حساب! سجل الان.</a>
                                <!---Submit Button---->
                                <div class="mt-4">
                                    <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="تسجيل الدخول">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.8 -->
        </div>
        <!-- /.row-->
    </div>
</div>
<!---End News---->



</div>
<!-- ======= End Content ======= -->
@endsection