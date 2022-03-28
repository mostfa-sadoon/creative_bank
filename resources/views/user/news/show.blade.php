@extends('user_temp')
@section('content')

<div class="our-blog blog-details pt-150 mb-200">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog-post">
                    <div class="img-holder"><img src="{{$news->img}}" alt=""></div>
                    <div class="post-data">
                        <a href="#" class="date">{{date('d-m-Y', strtotime($news->created_at))}}</a>
                        <h5 class="blog-title-two title">{{$news->header}}</h5>
                         <p>{{$news->desc}}</p>
                         {!! $news->news !!}
                    </div> <!-- /.post-data -->
                </div> <!-- /.single-blog-post -->
            </div> <!-- /.col- -->
            <div class="col-lg-4">
                <h3>اخبار ذات صله</h3>
                <div class="row">
                    @forelse ($relatednews as $news)
                        <div class="col-md-6">
                            <div class="img-fluid"><img src="{{$news->img}}" alt=""></div>
                            <h6 class="blog-title-one title"><a href="{{route('user.news.show',$news->id)}}">{{ $news->header }}</a></h6>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
@endsection
