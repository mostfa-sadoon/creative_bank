@extends('admin_temp')
@section('content')
              <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">{{trans('admin.creative_bank')}}</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.trash')}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.news')}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <div class="row">
                    @foreach($news as $new)
                        <div class="card col-md-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{$new->img}}" alt="Card image cap">
                            <img src="">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->header}}</h5>
                                <p class="card-text">{{$new->desc}}</p>
                                <a href="{{route('news.delete',$new->id)}}" class="btn btn-danger text-white">{{trans('admin.delete')}}</a>
                                <a href="{{route('news.show.trashed',$new->id)}}" class="btn btn-primary">{{trans('admin.show')}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center">
                    {{ $news->links('vendor.pagination.custom') }}
                </div>
@endsection
