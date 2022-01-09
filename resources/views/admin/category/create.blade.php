@extends('admin_temp')
@section('content')      
 <form action="{{route('category.store')}}" method="post"> 
      @csrf
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.category_in_arabic')}}</label>
         <input class="form-control" type="text" name="name_ar" >
            @error('name_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.category_in_english')}}</label>
         <input class="form-control" type="text" name="name_en" >
            @error('name_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
         <input class="btn btn-primary" type="submit" value="{{trans('admin.add')}}"> 
     </div>
</form>
@endsection