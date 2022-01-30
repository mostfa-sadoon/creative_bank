@extends('user_temp')
@section('content')
 <!---Start News-->
 <div class="container">
            <div class="row send-Idea">
                <div class="col-lg-8 mx-auto">
                    <div class="card mt-2 mx-auto p-1 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <h2>{{trans('home.send_your_idea')}}</h2>
                                <form id="contact-form" role="form" action="{{route('idea.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="controls">
                                        <!---Category---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_need">الفئة <span>*</span>
                                                </label>
                                                <select id="form_need" name="category" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>-- اختر قيمة --</option>
                                                @foreach($categories as $category)
                                                   <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                                   @if ($errors->has('category'))
                                                      <span class="text-danger">{{ $errors->first('category') }}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <!---Idea Title---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="validationServer01">{{trans('home.idea_title')}}<span> *</span></label>
                                                <input id="validationServer01" type="text" name="name" class="form-control is-nvalid" placeholder=" أدخل عنوان الفكرة *" required="required" data-error="Firstname is required.">
                                                    @if ($errors->has('name'))
                                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                            </div>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <!---Choose Photo---->
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">الصورة</label>
                                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                                   @if ($errors->has('img'))
                                                      <span class="text-danger">{{ $errors->first('img') }}</span>
                                                    @endif
                                        </div>
                                        <!---Choose video---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_email">فيديو</label>
                                                <input id="form_email" name="video_link" type="url" name="text" class="form-control" placeholder="ادخل رابط الفيديو *"  data-error="Valid email is required.">
                                                <p class="hidden-text mt-3">من فضلك اضف رابط يوتيوب صحيح. فمثلا https://www.youtube.com/watch?v=xxxxxxxxxxx</p>
                                                   @if ($errors->has('video_link'))
                                                      <span class="text-danger">{{ $errors->first('video_link')}}</span>
                                                    @endif
                                            </div>
                                        </div>
                                         <!---The Opportunity---->
                                         <div class="">
                                            <div class="form-group">
                                                <label for="form_message">{{trans('home.desc')}}<span> *</span>
                                                </label>
                                                <textarea id="form_message" name="desc" class="form-control" placeholder="{{trans('home.desc_placeholder')}} *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                   @if ($errors->has('problem'))
                                                      <span class="text-danger">{{ $errors->first('problem')}}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <!---The Opportunity---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_message">{{trans('home.problem')}}<span> *</span>
                                                </label>
                                                <textarea id="form_message" name="problem" class="form-control" placeholder="{{trans('home.problem_placeholder')}} *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                   @if ($errors->has('problem'))
                                                      <span class="text-danger">{{ $errors->first('problem')}}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <!---The Solution---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_message">{{trans('home.solve')}}<span> *</span>
                                                </label>
                                                <textarea id="form_message" name="solve" class="form-control" placeholder="{{trans('home.solve_placeholder')}} *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                   @if ($errors->has('solve'))
                                                      <span class="text-danger">{{ $errors->first('solve')}}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <!---Attachment---->
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">مرفق</label>
                                            <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
                                            @if ($errors->has('attachment'))
                                                <span class="text-danger">{{ $errors->first('attachment')}}</span>
                                            @endif
                                        </div>
                                        <!---Submit Button---->
                                        <div class="mt-4">
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="{{trans('home.send_your_idea')}}">  
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
@endsection