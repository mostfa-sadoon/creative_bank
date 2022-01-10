  <!---- ======= Start Nav ======= ---->

  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  <a class="navbar-brand" href="#">بنك <span>الأفكار</span> </a>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="index.html">بنك <span>الأفكار</span> </a>

    <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">{{trans('user.main')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('idea.create')}}">{{trans('user.send_your_idea')}}</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link " href="#">كيف يعمل</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link " href="#">{{trans('user.How_much_earn')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bestIdeas.html">{{trans('user.creative')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="commonQuestions.html">{{trans('user.common_question')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="news.html">{{trans('user.last_news')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.html">{{trans('user.about_bank')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">{{trans('user.conact_us')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="suggestions.html">{{trans('user.suggestions')}}</a>
        </li>
    </ul>
    <div class="form-inline mr-auto">
        <form>
            <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
        </form>
        <button class="btn btn-outline-success my-2 my-sm-0" onclick="location.href='login.html'">تسجيل الدخول</button>
    </div>
    <a href="profile.html"> <i class="profile bx bxs-user  "></i></a>
    <!-- @if(app()->getLocale() == 'en')  
        <i class="profile bx bx-globe  "><a href="{{url('change_lang/ar')}}">{{trans('user.lang')}}</a></i>
    @else
    <i class="profile bx bx-globe  "><a href="{{url('change_lang/en')}}">{{trans('user.lang')}}</a></i>
    @endif -->
   
</div>
</nav>

<!---- ======= End Nav ======= ---->