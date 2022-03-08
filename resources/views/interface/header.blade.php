<section>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="theme-main-menu theme-menu-one">
    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('interface/images/logo/logoo.svg')}}" alt=""></a></div>
    <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
        <div  class="container nav-container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="flaticon-setup"></i>
            </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav">
                    @if(Request::url() === route('home'))
                        <li class="nav-item active">
                            <a href="{{route('home')}}" class="nav-link" >{{trans('user.main')}}</a>
                        </li>
                    @else
                        <li class="nav-item ">
                            <a href="{{route('home')}}" class="nav-link" >{{trans('user.main')}}</a>
                        </li>
                    @endif
                    @if(Request::url() === route('about'))
                    <li class="nav-item active">
                        <a href="{{route('about')}}" class="nav-link" >{{trans('user.about_bank')}}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link" >{{trans('user.about_bank')}}</a>
                    </li>
                    @endif
                    @if(Request::url() === route('idea.create'))
                    <li class="nav-item active">
                        <a href="{{route('idea.create')}}" class="nav-link" >{{trans('user.send_your_idea')}}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('idea.create')}}" class="nav-link" >{{trans('user.send_your_idea')}}</a>
                    </li>
                    @endif
                    @if(Request::url() === route('allnews'))

                    <li class="nav-item active">
                        <a href="{{route('allnews')}}" class="nav-link" >{{trans('user.news')}}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('allnews')}}" class="nav-link" >{{trans('user.news')}}</a>
                    </li>
                    @endif
                    @if(Request::url() === route('user.commonquestions'))
                        <li class="nav-item active">
                            <a href="{{route('user.commonquestions')}}" class="nav-link" >{{trans('user.common_question')}}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route('user.commonquestions')}}" class="nav-link" >{{trans('user.common_question')}}</a>
                        </li>
                    @endif
                    @if(Request::url() === route('contact.create'))
                    <li class="nav-item active">
                        <a href="{{route('contact.create')}}" class="nav-link" >{{trans('user.conact_us')}}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('contact.create')}}" class="nav-link" >{{trans('user.conact_us')}}</a>
                    </li>
                    @endif
               </ul>
           </div>
        </div> <!-- /.container -->
    </nav> <!-- /#mega-menu-holder -->
    <div class="header-right-widget">
        <ul>
            <li class="language-switcher">
                <div class="dropdown">

                    @if(app()->getLocale() == 'en')
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            en
                        </button>
                    @else
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            ar
                        </button>
                    @endif

                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="ct-language__dropdown">
                            @if(app()->getLocale() == 'en')
                            <li><a href="{{url('change_lang/ar')}}" class="lang-es lang-select" data-lang="ar">عربي</a></li>
                            @else
                                 <li><a href="{{url('change_lang/en')}}" class="lang-es lang-select" data-lang="ar">english</a></li>
                            @endif
                        </ul>
                      </div>
                </div>
            </li>
            @if (auth()->user())
            <li class="dropdown">
                <a href="https://icons8.com/icon/21441/user"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{Auth()->user()->img}}" class="logPhoto"/>
                </a>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('profile.show', auth()->user()->id)}}">Profile</a>
                    <a class="dropdown-item" href="{{route('user.signout')}}">logout</a>
                </div>
            </li>
            @else
            <li><a href="{{route('user.login')}}" class="contact-us white-shdw-button">تسجيل دخول</a></li>
            @endif
        </ul>
    </div> <!-- /.header-right-widget -->
    </div> <!-- /.theme-main-menu -->



