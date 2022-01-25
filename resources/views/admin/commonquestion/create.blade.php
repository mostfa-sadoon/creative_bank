@extends('admin_temp')
@section('styles')

@endsection
@section('content')  

<form action="{{route('commonquestions.store')}}" method="post"> 
      @csrf
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.question_ar')}}</label>
         <input class="form-control" type="text" name="question_ar" >
            @error('question_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.question_en')}}</label>
         <input class="form-control" type="text" name="question_en" >
            @error('question_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.answer_ar')}}</label>
            <textarea name="answer_ar" class="form-control" ></textarea>
            @error('answer_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.answer_en')}}</label>
            <textarea name="answer_en" class="form-control"></textarea>
            @error('answer_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
         <input class="btn btn-primary" type="submit" value="{{trans('admin.add')}}"> 
     </div>
</form>

@endsection
@section('scripts')    
   
@endsection