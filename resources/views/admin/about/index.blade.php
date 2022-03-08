@extends('admin_temp')
@section('content')

    <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.about_bank')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.about_bank')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
    <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
   <div class="d-flex justify-content-center">
         <h1>{{trans('admin.about_bank')}}</h1>
   </div>
   @foreach ($abouts as $about)
          {{-- edit --}}
          <div class="d-flex justify-content-end">
              <a class="btn btn-success text-white" href="{{route('about.edit',$about->id)}}">{{trans('admin.edit')}}</a>
          </div>
          {{-- start ideaRate --}}
            <div class="d-flex justify-content-start">
                <h2>{{trans('admin.ideaRate')}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                        {{$about->ideaRate_ar}}
                    </textarea>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                        {{$about->ideaRate_en}}
                    </textarea>
                </div>
            </div>
         {{-- end ideaRate --}}

         {{-- start ideaStudy_ar --}}
         <div class="d-flex justify-content-start">
            <h2>{{trans('admin.ideaStudy')}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                    {{$about->ideaStudy_ar}}
                </textarea>
            </div>
            <div class="col-md-6">
                <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                    {{$about->ideaStudy_en}}
                </textarea>
            </div>
        </div>
     {{-- end ideaRate --}}

     {{-- start acceptedIdea_ar --}}
     <div class="d-flex justify-content-start">
        <h2>{{trans('admin.acceptedIdea')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->acceptedIdea_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->acceptedIdea_en}}
            </textarea>
        </div>
    </div>
 {{-- end acceptedIdea_ar --}}

 {{-- start vision_ar --}}
     <div class="d-flex justify-content-start">
        <h2>{{trans('admin.vision')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->vision_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->vision_en}}
            </textarea>
        </div>
    </div>
 {{-- end vision_ar --}}

 {{-- start mission_ar --}}
     <div class="d-flex justify-content-start">
        <h2>{{trans('admin.mission')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->mission_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->mission_en}}
            </textarea>
        </div>
    </div>
 {{-- end mission_ar --}}

 {{-- start description --}}
     <div class="d-flex justify-content-start">
        <h2>{{trans('admin.description')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->description_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$about->description_en}}
            </textarea>
        </div>
    </div>
 {{-- end description --}}

   @endforeach
@endsection
