@extends('admin_temp')
    @section('styles')
    
    @endsection
@section('content')      
    <div class="d-flex justify-content-center">
          <h3>{{$idea->name}}</h3>
    </div>
      <div class="d-flex justify-content-center">
          <img class="img-fluid" src="{{$idea->img}}">
       </div>
       <div class="">
         <h4>description</h4>
        <p>{{$idea->desc}}</p>
    </div>
    <div class="">
         <h4>problem</h4>
        <p>{{$idea->problem}}</p>
    </div>
    <div class="">
         <h4>solve</h4>
        <p>{{$idea->solve}}</p>
    </div>
    <div class="">
         <h4>pdf</h4>    
         <embed src="{{$idea->attatchment}}" width="100%" height="500px">
    </div>


    <iframe width="420" height="315"
          src="https://www.youtube.com/embed/ETVAhPIkebc?controls=0">
    </iframe>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/ETVAhPIkebc?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/EIfsXEtEUhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    <div class="d-flex justify-content-center">
         <a  href="{{route('idea.accept',$idea->id)}}"class="btn btn-success"> accepte</a>   <a href="{{route('idea.refused',$idea->id)}}" class="btn btn-danger text-white"> refused</a>
    </div>          
@endsection
@section('scripts')    
    
@endsection