@extends('admin_temp')
@section('content')
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
        <h2>الرؤية</h2>
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
        <h2>الهدف</h2>
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
   @endforeach
@endsection
