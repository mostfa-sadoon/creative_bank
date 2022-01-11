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
    <iframe width="560" height="315" src="{{$idea->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          {{$idea->video_link}}

          <iframe width="560" height="315" src="http://www.youtube.com/embed/{{$idea->video_link}}" frameborder="0" allowfullscreen></iframe>


            <x-embed url="https://www.youtube.com/watch?v=oHg5SJYRHA0" />
            
    <iframe width="306" height="200" src="{{ $idea->video_link }}" frameborder="0" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dTUb4d4fL_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection
@section('scripts')    
    
@endsection