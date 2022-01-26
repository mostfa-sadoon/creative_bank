  <!---- ======= Start Nav ======= ---->

  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <a class="navbar-brand" href="#"> <span><img src="{{asset('interface/assets/images/logo.png')}}" alt="logo" width="100px"height="50px"/></span> </a>
        </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="{{route('home')}}"> <span><img src="{{asset('interface/assets/images/logo.png')}}" alt="logo" width="100px"height="50px"/></span> </a>
<div class=""style="display:contents;">
    <ul class="navbar-nav my-2 ">
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
            <a class="nav-link " href="{{route('user.commonquestions')}}">{{trans('user.common_question')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('allnews')}}">{{trans('user.last_news')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">{{trans('user.about_bank')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('conect')}}">{{trans('user.conact_us')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('suggestions.index')}}">{{trans('user.suggestions')}}</a>
        </li>
    </ul>
    <div style="display:contents;">
    <div class="form-inline ">
        <form>
            <input class="form-control " type="search" placeholder="بحث" aria-label="Search">
        </form>
        @guest
           <a href="{{route('user.login')}}" class="btn btn-outline-success my-2 my-sm-0">تسجيل الدخول</a>
        @endguest
        @auth
          

           <a href="{{route('profile.show',Auth::user()->id)}}"><i class="profile bx bxs-user  "></i></a>
        @endauth
    </div>
    <div class="form-inline ">
               
                <select class="btn selectpicker" data-width="fit">
                    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                  <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>عربى</option>
                </select>
            </div>
    </div>

</div>
   
    <!-- @if(app()->getLocale() == 'en')  
        <i class="profile bx bx-globe  "><a href="{{url('change_lang/ar')}}">{{trans('user.lang')}}</a></i>
    @else
    <i class="profile bx bx-globe  "><a href="{{url('change_lang/en')}}">{{trans('user.lang')}}</a></i>
    @endif -->
   
</div>
</nav>

<!---- ======= End Nav ======= ---->