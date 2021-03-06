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
                            <li class="breadcrumb-item active">{{trans('admin.dashboard')}}</li>
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
    @if ($idea->Intellectual_property)
            <div class="">
                <h4>{{trans('user.Intellectual_property')}}</h4>
                <embed src="{{$idea->Intellectual_property}}" width="100%" height="500px">
        </div>
    @endif
    @if ($idea->Feasibility_study)
        <div class="">
            <h4>{{trans('user.Feasibility_study')}}</h4>
            <embed src="{{$idea->Feasibility_study}}" width="100%" height="500px">
       </div>
    @endif
    @if ($idea->patent)
        <div class="">
            <h4>{{trans('user.patent')}}</h4>
            <embed src="{{$idea->patent}}" width="100%" height="500px">
        </div>
    @endif
    @if ($idea->attatchment)
        <div class="">
            <h4>attatchment</h4>
            <embed src="{{$idea->attatchment}}" width="100%" height="500px">
        </div>
    @endif


    <div class="">
         <h4>video</h4>
         <iframe width="620" height="375" src="{{$idea->videolink}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/EIfsXEtEUhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <div class="d-flex justify-content-center">
           @if($idea->status=="false")
              <a  href="{{route('idea.accept',$idea->id)}}"class="btn btn-success ml-1"> accepte</a>   <a href="{{route('idea.refused',$idea->id)}}" class="btn btn-danger text-white ml-1"> refused</a>  <a href="{{route('idea.trashed',$idea->id)}}" class="btn  btn-warning text-white ml-1"> archive</a>
            @elseif($idea->status=="true")
             <a href="{{route('idea.refused',$idea->id)}}" class="btn btn-danger text-white ml-1"> refused</a> <a href="{{route('idea.trashed',$idea->id)}}" class="btn  btn-warning text-white ml-1"> archive</a>
            @elseif($idea->status=="refused")
            <a  href="{{route('idea.accept',$idea->id)}}"class="btn btn-success ml-1"> accepte</a> <a href="{{route('idea.trashed',$idea->id)}}" class="btn  btn-warning text-white ml-1"> archive</a>
            @endif
    </div>
@endsection
@section('scripts')

@endsection
