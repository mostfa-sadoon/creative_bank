@extends('admin_temp')
@section('content')
   <div class="d-flex justify-content-center">
         <h1>{{trans('admin.about_bank')}}</h1>
   </div>
  <form action="{{route('fekrtk.update')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$about->id}}">
          {{-- start ideaRate --}}
            <div class="d-flex justify-content-start">
                <h2>{{trans('admin.ideaRate')}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea class="form-control"  name="ideaRate_ar" id="exampleFormControlTextarea1" rows="13">
                        {{$about->ideaRate_ar}}
                    </textarea>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control"  name="ideaRate_en" id="exampleFormControlTextarea1" rows="13" >
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
                <textarea class="form-control"  name="ideaStudy_ar" id="exampleFormControlTextarea1" rows="13" >
                    {{$about->ideaStudy_ar}}
                </textarea>
            </div>
            <div class="col-md-6">
                <textarea class="form-control"  name="ideaStudy_en" id="exampleFormControlTextarea1" rows="13" >
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
            <textarea class="form-control"  name="acceptedIdea_ar" id="exampleFormControlTextarea1" rows="13" >
                {{$about->acceptedIdea_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="acceptedIdea_en" id="exampleFormControlTextarea1" rows="13">
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
            <textarea class="form-control"  name="vision_ar" id="exampleFormControlTextarea1" rows="13" >
                {{$about->vision_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="vision_en" id="exampleFormControlTextarea1" rows="13">
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
            <textarea class="form-control"  name="mission_ar" id="exampleFormControlTextarea1" rows="13" >
                {{$about->mission_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="mission_en" id="exampleFormControlTextarea1" rows="13">
                {{$about->mission_en}}
            </textarea>
        </div>
    </div>
 {{-- end mission_ar --}}

 {{-- start description_ar --}}
     <div class="d-flex justify-content-start">
        <h2>{{trans('admin.description')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <textarea class="form-control"  name="description_ar" id="exampleFormControlTextarea1" rows="13" >
                {{$about->description_ar}}
            </textarea>
        </div>
        <div class="col-md-6">
            <textarea class="form-control"  name="description_en" id="exampleFormControlTextarea1" rows="13">
                {{$about->description_en}}
            </textarea>
        </div>
    </div>
 {{-- end description_ar --}}
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-success" value="{{trans('admin.edit')}}">
        </div>
  </form>
@endsection
