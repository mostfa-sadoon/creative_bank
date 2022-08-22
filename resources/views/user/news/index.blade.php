    @extends('user_temp')

@section('style')

@endsection
@section('content')

<div class="our-blog blog-filer mb-150">
    <div class="blog-filter-title">
        <p class="upper-title">{{trans('user.our_news')}}</p>
        <h2 class="main-title">{{trans('user.latest_news')}}</h2>
    </div> <!-- /.blog-filter-title -->

    <ul class="isotop-menu-wrapper blog-filter-nav clearfix">
        @if(Request::url() === route('allnews'))
            <li class="is-checked" data-filter="*"><a href="{{route('allnews')}}" ><span>{{trans('user.all')}}</span></a></li>
            @foreach ($NewCategories as $category)
            <li data-filter=".economy"><span><a href="{{route('newsCategory',$category->id)}}" >{{$category->name}}</a></span></li>
            @endforeach
        @else
            <li  data-filter="*"><a href="{{route('allnews')}}" ><span>All</span></a></li>
            @foreach ($NewCategories as $category)
                @if(request('category') != $category->id)
                   <li  data-filter=".economy"><span><a href="{{route('newsCategory',$category->id)}}" >{{$category->name}}</a></span></li>
                @else
                <li class="is-checked" data-filter=".economy"><span><a href="{{route('newsCategory',$category->id)}}" >{{$category->name}}</a></span></li>
                @endif
            @endforeach
        @endif
    </ul>

<div class="row">
    @foreach ($news as $new)
        <div class="col-md-3">
            <div class="single-blog-post">
                <div class="img-holder"><img src="{{$new->img}}" alt=""></div>
                <div class="post-data">
                    <a href="#" class="date">{{$new->created_at}}</a>
                    <h5 class="blog-title-one title"><a href="{{route('user.news.show',$new->id)}}">{{$new->header}}</a></h5>
                    <p>{{$new->desc}} </p>
                    <a href="" class="read-more"><i class="flaticon-back-1"></i></a>
                </div> <!-- /.post-data -->
            </div> <!-- /.single-blog-post -->
        </div>
    @endforeach
</div>

{{ $news->links('vendor.pagination.my_pagination') }}


@endsection

@section('scripts')

@endsection
