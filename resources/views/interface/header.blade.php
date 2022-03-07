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
                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link" >الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link" >عن البنك</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('idea.create')}}" class="nav-link" >ارسل فكرتك</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('allnews')}}" class="nav-link" >الاخبار</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.commonquestions')}}" class="nav-link" >الاسئلة الشائعة</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact.create')}}" class="nav-link" >تواصل معنا</a>
                    </li>
               </ul>
           </div>
        </div> <!-- /.container -->
    </nav> <!-- /#mega-menu-holder -->
    <div class="header-right-widget">
        <ul>
            <li class="language-switcher">
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        Ar
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="ct-language__dropdown">
                            <li><a href="#googtrans(en|ar)" class="lang-es lang-select" data-lang="ar">Arabic</a></li>
                        </ul>
                      </div>
                </div>
            </li>
            @if (auth()->user())
            <li class="dropdown">
                <a href="https://icons8.com/icon/21441/user"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://img.icons8.com/color/48/000000/user.png" class="logPhoto"/>
                </a>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('profile.show', auth()->user()->id)}}">Profile</a>
                    <a class="dropdown-item" href="{{route('user.signout')}}">logout</a>
                </div>
            </li>
            @else
            <li><a href="{{route('user.login')}}" class="contact-us white-shdw-button">تسجيل دخول<i class="icon flaticon-back "></i></a></li>
            @endif
        </ul>
    </div> <!-- /.header-right-widget -->
    </div> <!-- /.theme-main-menu -->

