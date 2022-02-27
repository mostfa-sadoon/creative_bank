@extends('admin_temp')
@section('content')
   <div class="d-flex justify-content-center">
         <h1>{{trans('admin.owner')}}</h1>
   </div>

   @foreach ($owners as $owner)
    <div class="d-flex justify-content-start m-2">
        <a href="{{route('owner.edit',$owner->id)}}" class="btn btn-success text-white">{{trans('admin.edit')}}</a>
    </div>
   <div class="row">
        <div class="col-md-4">
            <img src="{{$owner->img}}" class="img-fluid">
        </div>

        <div class="col-md-8">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$owner->desc_ar}}
            </textarea>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" disabled>
                {{$owner->desc_en}}
            </textarea>
        </div>
       @endforeach
   </div>
@endsection
