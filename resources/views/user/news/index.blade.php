@extends('user_temp')
@section('content')
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
                                <h4 class="txt4">{{$new->header}}</h4>
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