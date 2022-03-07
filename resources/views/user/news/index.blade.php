@extends('user_temp')

@section('style')

@endsection
@section('content')

<div class="our-blog blog-filer mb-150">
    <div class="blog-filter-title">
        <p class="upper-title">اخبارنا</p>
        <h2 class="main-title">تابع معنا <br>كل ما هو جديد</h2>
    </div> <!-- /.blog-filter-title -->

    <ul class="isotop-menu-wrapper blog-filter-nav clearfix">
        @if(Request::url() === route('allnews'))
            <li class="is-checked" data-filter="*"><a href="{{route('allnews')}}" ><span>All</span></a></li>
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
                    <h5 class="blog-title-one title"><a href="{{route('user.news.show',$new->id)}}">{{$new->header}}bgff</a></h5>
                    <p>{{$new->desc}} </p>
                    <a href="" class="read-more"><i class="flaticon-back-1"></i></a>
                </div> <!-- /.post-data -->
            </div> <!-- /.single-blog-post -->
        </div>
    @endforeach
</div>






    <div class="theme-pagination-one text-center pt-15">
        <ul>
            <li><a href="#"><i class="flaticon-next-1"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>....</li>
            <li><a href="#">Last</a></li>
            <li><a href="#"><i class="flaticon-back-1"></i></a></li>
        </ul>
    </div> <!-- /.theme-pagination-one -->
</div> <!-- /.our-blog -->









 <!---Start News-->
 <section id="news" class="container news">
            <div class="container news">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
                    <h2>آخر الأخبار</h2>
                </div>
                <div class="row">
                    @foreach($news as $new)
                        <div class="cardcontainer col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="photo"> <img src="{{$new->img}}">
                            </div>
                            <div class="content">
                                <h4 class="txt4 text-white">{{$new->header}}</h4>
                                <!-- <p class="txt5">A city that never sleeps</p> -->
                                <p class="txt2">{{$new->desc}}</p>
                            </div>
                            <div class="newsFooter">
                                <p>
                                    <a class="read-more waves-effect waves-light btn" href="#">عرض المزيد</a>
                                </p>
                                <p class="txt3">{{date('d-m-Y', strtotime($new->created_at))}}<i class="bi bi-calendar"></i></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-info text-white" href="{{route('allnews')}}">see all</a>
                    </div>
            </div>
        </section>
        <!---End News---->
        <div class="d-flex justify-content-center">
            {{ $news->links('vendor.pagination.custom') }}
        </div>
@endsection

@section('scripts')

@endsection
