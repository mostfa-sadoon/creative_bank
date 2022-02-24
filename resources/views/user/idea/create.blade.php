@extends('user_temp')
@section('content')
<div class="solid-inner-banner">
    <h2 class="page-title">ارسل فكرتك</h2>
</div> <!-- /.solid-inner-banner -->

<div class="faq-page faq-tab-wrapper pb-200">
    <div class="container">
        <form  class="submit-faq pt-150" action="{{route('idea.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h3 class="faq-page-title text-center">لديك فكرة ؟ ارسلها الان</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <select name="category" class="form-select form-select-lg mb-3 send-idea-select" aria-label=".form-select-lg example">
                        <option value="" selected disabled>-- اختر الفئه    --</option>
                            @foreach($categories as $category)
                                @if (old('category') == $category->id)
                                <option value="{{$category->id}}" selected>{{ $category->name }}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                    </select>
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="{{trans('home.idea_title')}}">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="desc" value="{{ old('desc') }}" placeholder="{{trans('home.desc')}}">
                    @if ($errors->has('desc'))
                    <span class="text-danger">{{ $errors->first('desc')}}</span>
                  @endif
                </div>
                <div class="col-12"><textarea name="problem" placeholder="المشكلة*">{{ old('problem') }}</textarea>
                    @if ($errors->has('problem'))
                    <span class="text-danger">{{ $errors->first('problem')}}</span>
                  @endif
                </div>
                <div class="col-12"><textarea name="solve" placeholder="الحل*">{{ old('solve') }}</textarea>
                    @if ($errors->has('solve'))
                    <span class="text-danger">{{ $errors->first('solve')}}</span>
                  @endif
                </div>
                <div class="col-lg-4">
                    <input type="text" name="video_link" value="{{ old('video_link') }}" placeholder="رابط الفيديو*">
                    @if ($errors->has('video_link'))
                    <span class="text-danger">{{ $errors->first('video_link')}}</span>
                  @endif
                </div>
                <div class="col-lg-4">
                    <input type="file" name="img" id="file" />
                    @if ($errors->has('img'))
                       <span class="text-danger">{{ $errors->first('img')}}</span>
                    @endif
                </div>
                <div class="col-lg-12 col-md-9">
                    <div class="faq-tab-wrapper">
                        <div class="faq-panel">
                            <div class="panel-group theme-accordion" id="accordion">
                              <div class="panel">
                                <div class="panel-heading">
                                  <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    تحميل دراسة الجدوى ان وجدت</a>
                                  </h6>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                        <input type="file" name="Feasibility_study" id="file" />
                                    </button>
                                  </div>
                                </div>
                              </div> <!-- /panel 1 -->
                            </div> <!-- end #accordion -->
                        </div> <!-- End of .faq-panel -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-9">
                    <div class="faq-tab-wrapper">
                        <div class="faq-panel">
                            <div class="panel-group theme-accordion" id="accordion2">
                              <div class="panel">
                                <div class="panel-heading">
                                  <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                                    تحميل الملكية الفكرية ان وجدت</a>
                                  </h6>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                        <input type="file" name="Intellectual_property" id="file" />
                                  </div>
                                </div>
                              </div> <!-- /panel 1 -->
                            </div> <!-- end #accordion -->
                        </div> <!-- End of .faq-panel -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-9">
                    <div class="faq-tab-wrapper">
                        <div class="faq-panel">
                            <div class="panel-group theme-accordion" id="accordion3">
                              <div class="panel">
                                <div class="panel-heading">
                                  <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse3">
                                    تحميل براءة الاختراع</a>
                                  </h6>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                        <input type="file"  name="patent" id="file" />
                                  </div>
                                </div>
                              </div> <!-- /panel 1 -->
                            </div> <!-- end #accordion -->
                        </div> <!-- End of .faq-panel -->
                    </div>
                </div>

                <div class="col-12"><button>Submit Idea</button></div>
            </div>
        </form>
    </div> <!-- /.container -->
</div> <!-- /.faq-page -->



 <!---Start News-->
 @endsection
