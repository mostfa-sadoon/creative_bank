@extends('admin_temp')
@section('styles')

@endsection
@section('content')  

<form action="{{route('commonquestions.update')}}" method="post"> 
      @csrf
      <input type="hidden" name="id" value="{{$question->id}}">
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.question_ar')}}</label>
         <input class="form-control" value="{{$question->question_ar}}" type="text" name="question_ar" >
            @error('question_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.question_en')}}</label>
         <input class="form-control" type="text" value="{{$question->question_en}}"  name="question_en" >
            @error('question_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
     <label for="exampleInputEmail1">{{trans('admin.answer_ar')}}</label>
            <textarea name="answer_ar" class="form-control">{{$question->answer_ar}}</textarea>
            @error('answer_ar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">       
     <label for="exampleInputEmail1">{{trans('admin.answer_en')}}</label>
            <textarea name="answer_en" class="form-control">{{$question->question_en}}</textarea>
            @error('answer_en')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     </div>
     <div class="form-group">
         <input class="btn btn-primary" type="submit"  value="{{trans('admin.edit')}}"> 
     </div>
</form>

@endsection
@section('scripts')    
   
@endsection