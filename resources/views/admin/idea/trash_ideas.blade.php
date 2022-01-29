@extends('admin_temp')
    @section('styles')
    
    @endsection
@section('content')   
            <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">{{trans('admin.creative_bank')}}</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 2</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->

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
         <a  href="{{route('idea.restore',$idea->id)}}"class="btn btn-success">restore</a>   <a href="{{route('idea.delete',$idea->id)}}" class="btn btn-danger text-white">delete</a>
    </div>          
@endsection
@section('scripts')    

@endsection