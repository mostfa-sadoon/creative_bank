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
                        <h2 class="text-center">{{trans('user.edit_user')}}</h2>
                        <div></div>
                        <form id="contact-form" role="form" action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div class="text-center">
                                    <!-- <img class="rounded-circle" src="assets/images/team/team-1.jpg" alt="" width="100px" /> -->

                                    <img src="{{$user->img}}" id="preview" class="rounded-circle " alt="" width="100px" height="100px" />
                                    <div class=" text-center">
                                        <div id="msg"></div>
                                        <form method="post" id="image-form">
                                            <input type="file" name="img" class="file" value="{{$user->img}}" accept="image/*">
                                            @error('img')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class=" ">
                                                <!-- <input type="text" class="form-control" disabled placeholder="Upload File" id="file"> -->
                                                <div class="mt-4">
                                                    <button type="button" class="browse btn btn-primary">{{trans('user.choose_img')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!---Name---->
                                <div class="form-group ">
                                    <label for="validationDefault01">{{trans('user.full_name')}}<span>*</span>
                                    </label>
                                    @if(old('name'))
                                       <input type="text" class="form-control" name="name"  value="{{ old('name') }}" id="validationDefault01" placeholder="  الاسم بالكامل " required>
                                    @else
                                       <input type="text" class="form-control" name="name"  value="{{$user->name}}"  id="validationDefault01" placeholder="  الاسم بالكامل " required>
                                    @endif             
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---Email---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_email">{{trans('user.email')}}<span>*</span>
                                        </label>
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
                                <!---Phone---->
                                <div class="form-group ">
                                    <label for="validationDefault01">{{trans('user.phone_number')}}<span>*</span>
                                    </label>
                                        @if(old('phone'))
                                        <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="validationDefault01" placeholder="رقم الهاتف" required>
                                        @else
                                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="validationDefault01" placeholder="رقم الهاتف" required>
                                        @endif
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <!---Age---->
                                <div class="form-group ">
                                    <label for="validationDefault01">{{trans('user.phone_number')}}<span>*</span>
                                    </label>
                                        @if(old('date_of_birth'))
                                        <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                        @else
                                        <input type="date" name="date_of_birth" class="form-control" value="{{$user->date_of_birth}}" id="validationDefault01" placeholder="تاريخ الميلاد" required>
                                        @endif
                                        @error('date_of_birth')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <!---Gender---->
                                <div class="form-group ">
                                    <label for="validationDefault01">{{trans('user.kind')}}<span>*</span>
                                    </label>
                                    <div class="row">
                                        <div class="form-check col-md-4 col-3"> <label class="form-check-label" for="flexRadioDefault1">
                                           {{trans('user.male')}}
                                           </label>
                                            <input class="form-check-input" type="radio" value="male" name="gender" id="flexRadioDefault1" checked>
                                        </div>
                                        <div class="form-check col-md-4 col-3"><label class="form-check-label" for="flexRadioDefault2">
                                          {{trans('user.famale')}}
                                            </label>
                                            <input class="form-check-input" type="radio" value="famale" name="gender" id="flexRadioDefault2">

                                        </div>
                                    </div>
                                    @error('gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!---ِAddress---->
                                <div class="form-group ">
                                    <label for="validationDefault01">{{trans('user.address')}}<span>*</span>
                                    </label>
                                        @if(old('date_of_birth'))
                                        <input type="text" name="address" class="form-control" value="{{old('address')}}" id="validationDefault01" placeholder="العنوان" required>
                                        @else
                                        <input type="text" name="address" class="form-control" value="{{$user->address}}" id="validationDefault01" placeholder="العنوان" required>
                                        @endif
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <!---User Category---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_need">{{trans('user.user_classificaion')}}<span>*</span>
                                        </label>
                                        <select id="form_need" name="clasified" class="form-control" required="required" data-error="Please specify your need.">

                                            <option value="{{$user->classified_id}}" selected >{{$classification->name}}</option>
                                            @foreach($classifications as $classification)
                                                <option value="{{$classification->id}}">{{$classification->name}}</option>
                                            @endforeach
                                    </select>

                                    @error('clasified')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    </div>
                                </div>
                                <!---Category---->
                                <div class="">
                                    <div class="form-group">
                                        <label for="form_need">{{trans('user.Industry')}}<span>*</span>
                                        </label>
                                    <select id="form_need" name="field" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="{{$user->field_id}}" selected >{{$field->name}}</option>
                                        @foreach($fields as $field)
                                            <option value="{{$field->id}}">{{$field->name}}</option>
                                        @endforeach
                                    </select>
                                        @error('field')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                   <!---Submit Button---->
                                   <div class="mt-4 d-flex justify-content-center">
                                    <a  href="{{route('user.edit.password')}}"class="btn btn-success btn-send pt-2 btn-block">{{trans('user.edit_password')}}</a>
                                  </div>
                                <!---Submit Button---->
                                <div class="mt-4">
                                    <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="{{trans('user.edit')}}">
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