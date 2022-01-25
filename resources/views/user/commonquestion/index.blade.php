@extends('user_temp')
@section('styles')
<style>
    /*Start Common Questions Screen*/
[data-toggle="collapse"] i:before {
    content: "\f068";
}
[data-toggle="collapse"].collapsed i:before {
    content: "\f067";
}
.card-header {
    margin-bottom: 8px;
}
.accordion-title {
    position: relative;
    display: block;
    padding: 15px;
    background: #0c4d7a;
    border-radius: 5px;
    overflow: hidden;
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    width: 100%;
    text-align: right;
    transition: all 0.5s ease-in-out;
}
.accordion-title i {
    position: absolute;
    width: 40px;
    height: 100%;
    left: 0;
    top: 0;
    color: #fff;
    background: radial-gradient(rgba(#ffd700, .8), #ffd700);
    text-align: right;
    border-right: 1px solid transparent;
}
.accordion-title:hover {
    text-decoration: none;
    padding-right: 30px;
    background: #3c3d3f;
    transition: all 0.5s ease-in-out;
}
.accordion-body {
    /* padding: 40px 55px; */
    transition: all 1s ease-in-out;
}
.accordion-body ul {
    list-style: none;
    margin-left: 0;
    padding-left: 0;
}
.accordion-body li {
    padding-left: 1.2rem;
    text-indent: -1.2rem;
}
.accordion-body li:before {
    content: "\f10a";
    padding-right: 5px;
    font-family: "Flaticon";
    font-size: 16px;
    font-style: normal;
    color: #115e94;
}
/*End Common Questions Screen*/
</style>
@endsection
@section('content')
  <!-- ======= Start Content ======= -->
  <div class="">
        <!-- ======= Start creative ======= -->
        <section id="creative" class=" creative card bg-light" data-aos="zoom-in" data-aos-delay="100">
            <div class=" section-title">
                <h2>الأسئلة الشائعة</h2>
            </div>
            <div class="container text-center">
                <p>هذه الصفحة تحتوى على جميع الاسئلة الشائعة التى تخدم المستخدم </p>
            </div>
        </section>
        <!-- ======= End creative ======= -->

        <!---Start Common Questions-->
        <section>
            <div class="container">
                <div id="accordion" class="">
                       

                @foreach($commonquestions as $key=>$commonquestion)
                    <!-- ======= start creative ======= -->
                    <div id="accordion" class="">
                        <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="card-header p-0 border-0" id="heading-24{{$key}}">
                                    <button class=" accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-24{{$key}}" aria-expanded="false" aria-controls="#collapse-240">
                                        <i class="fa fa-minus text-center d-flex align-items-center justify-content-center h-100">
                                        </i>{{$commonquestion->question}}
                                    </button>
                                </div>
                                <div id="collapse-24{{$key}}" class="collapse " aria-labelledby="heading-24{{$key}}" data-parent="#accordion">
                                    <div class="card-body accordion-body">
                                        <p>{{$commonquestion->answer}}</p>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="{{route('commonquestions.edit',$commonquestion->id)}}" class="m-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('commonquestions.delete',$commonquestion->id)}}" class="m-2"><i class="fas fa-trash-alt text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>       
                    <!-- ======= End creative ======= -->
                    @endforeach
                </div>
            </div>
        </section>
        <!---End Common Questions---->
    </div>
    <!-- ======= End Content ======= -->
@endsection