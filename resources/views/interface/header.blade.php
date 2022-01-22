  <!---- ======= Start Nav ======= ---->

  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <a class="navbar-brand" href="#"> <span><img src="{{asset('interface/assets/images/logo.png')}}" alt="logo" width="100px"height="50px"/></span> </a>
        </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="{{route('home')}}"> <span><img src="{{asset('interface/assets/images/logo.png')}}" alt="logo" width="100px"height="50px"/></span> </a>

    <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{trans('user.main')}}</a>
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
            <a class="nav-link" href="{{route('about')}}">{{trans('user.about_bank')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('conect')}}">{{trans('user.conact_us')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('suggestions')}}">{{trans('user.suggestions')}}</a>
        </li>
    </ul>
    <div class="form-inline mr-auto">
        <form>
            <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
        </form>
        @guest
           <a href="{{route('user.login')}}" class="btn btn-outline-success my-2 my-sm-0">تسجيل الدخول</a>
        @endguest
        @auth
           <a href="{{route('user.signout')}}" class="btn btn-outline-success my-2 my-sm-0">تسجيل الخروج</a>

           <a href="{{route('profile.show',Auth::user()->id)}}"><i class="profile bx bxs-user  "></i></a>
        @endauth
    </div>
    <!-- @if(app()->getLocale() == 'en')  
        <i class="profile bx bx-globe  "><a href="{{url('change_lang/ar')}}">{{trans('user.lang')}}</a></i>
    @else
    <i class="profile bx bx-globe  "><a href="{{url('change_lang/en')}}">{{trans('user.lang')}}</a></i>
    @endif -->
   
</div>
</nav>

<!---- ======= End Nav ======= ---->