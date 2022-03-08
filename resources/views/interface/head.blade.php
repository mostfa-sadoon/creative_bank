    <!DOCTYPE html>
    <html lang="en" dir="rtl">
        <head>
            <meta charset="UTF-8">
            <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
            <meta name="author" content="creativegigs">
            <meta name="description" content="Rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
            <meta name='og:image' content='images/home/ogg.png'>
            <!-- For IE -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- For Resposive Device -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- For Window Tab Color -->
            <!-- Chrome, Firefox OS and Opera -->
            <meta name="theme-color" content="#233D63">
            <!-- Windows Phone -->
            <meta name="msapplication-navbutton-color" content="#233D63">
            <!-- iOS Safari -->
            <meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
            <title>FKRTK</title>
            <!-- Favicon -->
            <link rel="icon" type="image/png" sizes="56x56" href="{{asset('interface/images/logo/logoo.svg')}}">
            <!-- Main style sheet -->
            <!-- responsive style sheet -->
            @if (app()->getLocale() == 'en')
                    <link rel="stylesheet" type="text/css" href="{{asset('interface/css/eng-style.css')}}">
                    <link rel="stylesheet" type="text/css" href="{{asset('interface/css/ltr-responsive.css')}}">
                    <link rel="stylesheet" type="text/css" href="{{asset('interface/css/ltr-style.css')}}">
            @else
                <link rel="stylesheet" type="text/css" href="{{asset('interface/css/ar-style.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('interface/css/rtl-responsive.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('interface/css/rtl-style.css')}}">
            @endif
            <link rel="stylesheet" type="text/css" href="{{asset('interface/css/verify.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('interface/css/profile.css')}}">
            @yield('style')
        </head>

        <body>

            <div class="main-page-wrapper">


