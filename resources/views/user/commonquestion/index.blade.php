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




<div class="solid-inner-banner">
    <h2 class="page-title">Question & Answers</h2>
    <ul class="page-breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
        <li>Faq</li>
    </ul>
</div> <!-- /.solid-inner-banner -->
-->
<div class="faq-page faq-tab-wrapper pt-150 ">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center mb-80">
            <h3 class="faq-page-title">Frequently Asked Questions</h3>
            <form action="#" class="faq-search-form">
                <input type="text" placeholder="Search here..">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- ================== FAQ Panel ================ -->
                   <div class="faq-panel">
                    <div class="panel-group theme-accordion" id="accordion2">
                       @foreach ($commonquestions as $key=>$commonquestion )
                            <div class="panel">
                                <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$key}}">
                                        {{$commonquestion->question}}</a>
                                </h6>
                                </div>
                                <div id="collapse{{$key}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>{{$commonquestion->answer}}</p>
                                </div>
                                </div>
                            </div> <!-- /panel 1 -->
                       @endforeach

                    </div> <!-- end #accordion2 -->
                </div> <!-- End of .faq-panel -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.faq-page -->
@endsection
