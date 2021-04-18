<!DOCTYPE html>
<html lang="ar">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- matterial icons  -->
    <link
      rel="stylesheet"
      href="{{url('')}}/assets/web/fonts/material-icons/iconfont/material-icons.css"
    />
       <link rel="stylesheet" href="{{ url('assets/web/css/web.app.css') }}">
    <link href="{{url('')}}/assets/web/imgs/favicon.png" rel="shortcut icon" type="image/png" />
    <title>أجيال الوطن</title>
</head>
<body><!-- header  -->
<header class="header"><!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
<div class="d-flex align-items-center"><a class="navbar-brand py-1" href="{{ route('web.home.index') }}"><img alt=" WRO logo" src="{{url('')}}/assets/web/imgs/logo-light.svg" /></a></div>
<button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarCollapse" data-toggle="collapse" type="button"><svg viewbox="0 0 64 48"> <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path> <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path> <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path> </svg></button><!-- Navbar Collapse -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto"><!-- //// ---- use "active" class for current page ----- ////  -->
            <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('web.home.index') }}">الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ route('web.about.index') }}">عن الجمعية</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('contactUs*') ? 'active' : '' }}" href="{{ route('web.contactUs.create') }}">تواصل معنا</a></li>
            @if(!auth()->check())
               <li class="nav-item"><a class="nav-link {{ Request::is('login*') ? 'active' : '' }}" href="{{ route('web.auth.login') }}">تسجيل الدخول</a></li>
               <li class="nav-item"><a class="nav-link {{ Request::is('register*') ? 'active' : '' }}" href="{{ route('web.auth.register') }}">التسجيل</a></li>
            @endif



        @if(auth()->check())
            <li class="nav-item dropdown nav-item-icon">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle {{ Request::is('profile*') ? 'active' : '' }} {{ Request::is('myLicenses*') ? 'active' : '' }}" data-toggle="dropdown" href="#" id="homeDropdownMenuLink">
                الصفحة الشخصية
                </a>
                <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('web.auth.profile') }}">تعديل البيانات</a>
                    <a class="dropdown-item" href="{{ route('web.auth.myLicenses') }}">الأشتراكات</a>
                     <a class="dropdown-item" href="{{ route('web.auth.logout') }}"> خروج</a>
                </div>
            </li>
        @endif

            <li class="nav-item dropdown nav-item-icon">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="homeDropdownMenuLink">
                    <svg fill="#ffffff" id="Capa_1" style="enable-background: new 0 0 341.333 341.333" version="1.1" viewbox="0 0 341.333 341.333" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"> <g> <g> <g> <rect height="85.333" width="85.333" x="128" y="128"></rect> <rect height="85.333" width="85.333" x="0" y="0"></rect> <rect height="85.333" width="85.333" x="128" y="256"></rect> <rect height="85.333" width="85.333" x="0" y="128"></rect> <rect height="85.333" width="85.333" x="0" y="256"></rect> <rect height="85.333" width="85.333" x="256" y="0"></rect> <rect height="85.333" width="85.333" x="128" y="0"></rect> <rect height="85.333" width="85.333" x="256" y="128"></rect> <rect height="85.333" width="85.333" x="256" y="256"></rect> </g> </g> </g> 
                    </svg> 
                </a>
                <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('web.about.index') }}#values">قيم الجمعية</a>
                    <a class="dropdown-item" href="{{ route('web.targets.index') }}"> الشرائح المستهدفة </a>
                    <a class="dropdown-item" href="{{ route('web.channels.index') }}"> قنوات الاتصال </a>
                    <a class="dropdown-item" href="{{ route('web.relations.index') }}"> العلاقات مع المستفيدين </a>
                    <a class="dropdown-item" href="{{ route('web.privacy.index') }}"> اللوائح والسياسات والاجراءات </a> 
                   <!--  <a class="dropdown-item" href="{{ route('web.membership.index') }}"> طلب عضوية </a> -->
                </div>
            </li>
            <li class="nav-item nav-icon dropdown dropdown-lang"><a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('web.home.index') }}" id="homeDropdownMenuLink"><i><img alt="" src="{{url('')}}/assets/web/imgs/icons/uk-flag.svg" /> </i> </a>
            <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a class="dropdown-item" href="{{ route('web.home.index') }}"><span><img alt="" src="{{url('')}}/assets/web/imgs/icons/saudi-flag.svg" /> <span>اللغة العربية</span> </span> </a> <a class="dropdown-item" href="./en/{{ route('web.home.index') }}"> <span> <img alt="" src="{{url('')}}/assets/web/imgs/icons/uk-flag.svg" /> <span>English</span> </span> </a></div>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /Navbar --></header>
<!-- End header  -->












  @yield('content')







<footer class="footer">
<section class="footer_social">
<div class="container">
<div class="row">
<div class="col-12 footer_social-content">
<div class="email"><a href="mailto:info@ajyalwa.sa"><img alt="mail icon" src="{{url('')}}/assets/web/imgs/icons/icon-mail.svg" /> info@ajyalwa.sa </a></div>

<ul class="social-media">
    <li><a href="https://twitter.com/ajyal_w"><img alt="twitter icon" src="{{url('')}}/assets/web/imgs/icons/icon-twitter.svg" /> </a></li>
    <li><a href="https://www.instagram.com/ajyal_w/"><img alt="instagram icon" src="{{url('')}}/assets/web/imgs/icons/icon-instagram.svg" /> </a></li>
    <li><a href="https://www.snapchat.com/ajyal_w/"><img alt="snapchat icon" src="{{url('')}}/assets/web/imgs/icons/icon-snapchat.svg" /> </a></li>
</ul>
</div>
</div>
</div>
</section>

<section class="footer_main" style="background-image: url('{{url('')}}/assets/web/imgs/main/footer-bg.jpg')">
<div class="overlay">
<div class="container">
<div class="row">
<div class="col-12 footer_main-content">
<div class="logo"><img alt="logo" src="{{url('')}}/assets/web/imgs/logo-light.svg" />
<p>مسجلة في سجل الجمعيات الأهلية برقم (1092)</p>
</div>

<div class="navs">
<ul>
    <li><a href="{{ route('web.home.index') }}">الرئيسية </a></li>
    <li><a href="{{ route('web.about.index') }}">عن الجمعية </a></li>
    <li><a href="{{ route('web.contactUs.create') }}">تواصل معنا </a></li>
</ul>

<div class="space"></div>

<ul>
    <li><a href="{{ route('web.privacy.index') }}">اللوائح والقوانين </a></li>
    @if(!auth()->check())
    <li><a href="{{ route('web.auth.register') }}">التسجيل</a></li>
    @endif
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="footer_copy">
<p>حقوق النشر &copy; جمعية أجيال الوطن 2020</p>
</section>
</footer>







<script src="{{ url('assets/web/js/web.app.js') }}"></script>
@yield('scripts')









<script>
      var swiper = new Swiper(".swiper-activites", {
        pagination: {
          el: ".activites .swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1700: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
      });
    </script><!-- fancybox init for gallary  --><script>
      $(document).ready(function () {
        $('[data-fancybox="gallery"]').fancybox({
          loop: true,
          buttons: ["zoom", "fullScreen", "close"],
          transitionEffect: "slide",
          thumbs: {
            autoStart: false,
          },
        });
      });
    </script><!-- Swiper leaders --><script>
      var swiper = new Swiper(".swiper-leaders", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        // init: false,
        navigation: {
          nextEl: ".leaders .swiper-button-next",
          prevEl: ".leaders .swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1200: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });
    </script><!-- Swiper sponsers --><script>
      var swiper = new Swiper(".swiper-sponsers", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        // centeredSlides: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
        },
      });
    </script></body>
</html>