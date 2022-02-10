@extends('admin_temp')
@section('styles')   

@endsection
@section('content')      
      <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.vote')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">creative bank</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">vote</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <div class="d-flex justify-content-start">
                 <a class="btn btn-success text-white" href="{{route('vote.create')}}">add vote</a>
             </div>
             <div class="row">
                 @foreach($votes as $vote)
                 <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    {{$vote->name}}
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-around">name
                                           <span>count</span>
                                       </li>
                                    @foreach($vote->voteideas as $voteidea)
                                       <li class="list-group-item d-flex justify-content-around">{{$voteidea->idea->name}}
                                           <span>{{$voteidea->count}}</span>
                                       </li>
                                    @endforeach
                                      <li class="list-group-item d-flex justify-content-around">created at
                                           <span>{{$vote->created_at}}</span>
                                       </li>

                                       <li class="list-group-item d-flex justify-content-around">end vote
                                           <span>{{$vote->end_vote}}</span>
                                     </li>
                                     @if($vote->status=="true")
                                     <li class="list-group-item d-flex justify-content-around text-success">vote is available</li>
                                     @else
                                     <li class="list-group-item d-flex justify-content-around text-danger">vote end</li>
                                     @endif
                                    <li class="list-group-item d-flex justify-content-around">
                                        <a class="btn btn-danger" href="{{route('vote.delete',$vote->id)}}">delete</a>
                                        <a class="btn btn-success" href="{{route('vote.end',$vote->id)}}">end vote</a>
                                    </li>
                                </ul>
                        </div>
                 </div>
                 @endforeach
             </div>



         
@endsection
@section('scripts')      
@endsection