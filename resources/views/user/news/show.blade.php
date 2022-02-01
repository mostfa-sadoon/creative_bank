@extends('user_temp')
@section('content')
    <!-- ======= Start Content ======= -->
    <div class=" mt-4 ">
        <!---Start Goal-->
        <section id="creative" class="container  card bg-light">
            <div class="container mt-lg-4">
                <h2 class="black-color">{{$news->header}}</h2>
                <div class="item-news col-md-12">
                    <div class="item-news-img">
                        <img src="{{$news->img}}" alt="">
                    </div>
                    <div class="idea-info-icon ">
                        <p class="news-date">{{date('d-m-Y', strtotime($news->created_at))}}<i class="bi bi-calendar"></i></p>
                    </div>
                </div>
                <div class="text-center col-md-10">
                    <h5 class="news-title">{{$news->desc}}</h5>
                     <div>{!! $news->news !!}</div>
                </div>
                <div>
                </div>
            </div>
        </section>
        <!---End Goal---->
    </div>
    <!-- ======= End Content ======= -->
@endsection