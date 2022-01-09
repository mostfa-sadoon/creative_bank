@extends('admin_temp')
@section('content')      
  <form action="{{route('category.update')}}" method="post"> 
      @csrf
      <input type="hidden" name="id" value="{{$category->id}}">
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.category_in_arabic')}}</label>
         <input class="form-control" type="text" name="name_ar"value="{{$category->name_ar}}" >
            @error('name_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.category_in_english')}}</label>
         <input class="form-control" type="text" name="name_en"  value="{{$category->name_en}}">
            @error('name_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
         <input class="btn btn-primary" type="submit" value="{{trans('admin.edit')}}">
     </div>
  </form>
@endsection