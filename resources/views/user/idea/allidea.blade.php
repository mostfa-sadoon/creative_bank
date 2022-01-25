@extends('user_temp')
@section('content')
<div class="container">
    <div class="row">
        @foreach($ideas as $idea)
            <div class="col-xs-12 col-sm-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <a class="img-card" href="#">
                        <img src="{{$idea->img}}" />
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a href="#"> {{$idea->name}}
                        </a>
                        </h4>
                        <p class="">
                            {{$idea->desc}}
                        </p>
                    </div>
                    <div class="card-read-more">
                        <a href="{{route('user.idea.show',$idea->id)}}" class="btn btn-link btn-block">عرض المزيد</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
        <div class="d-flex justify-content-center">
            {{ $ideas->links('vendor.pagination.custom') }}
        </div>
@endsection