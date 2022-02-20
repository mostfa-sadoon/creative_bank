<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Styles------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('interface/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('interface/assets/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('interface/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('interface/assets/css/bootstrap.min.css')}}" />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/remixicon/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('interface/assets/vendor/aos/aos.css')}}">
    @if(app()->getLocale() == 'en')
    <link rel="stylesheet" href="{{asset('interface/assets/css/style.css')}}"/>
    @else
    <link rel="stylesheet" href="{{asset('interface/assets/css/style.css')}}"/>
    @endif
    <link rel="stylesheet" href="{{asset('interface/assets/css/best_idea.css')}}"/>



    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"--->
    <style type="text/css">
        .fixed-top {
            top: -40px;
            transform: translateY(40px);
            transition: transform .8s;
        }
        .dropdown-menu {
            width: 50px !important;
            height: 50px !important;
        }
    </style>
      @yield('style')
    <title>بنك الأفكار</title>
</head>

<body>
