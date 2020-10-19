<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Quickwell Remedy || Taking Care From Home</title>
    <meta content="width=device-width, initial-scale=1.0,maximum-scale=1.0" name="viewport" />
    <meta name="description" content="Qickwell" />
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/responsive.css')}}">
    @yield('css')
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{asset('web/images/fav.png')}}" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180797595-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());   
        gtag('config', 'UA-180797595-1');
    </script>
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('web/images/preloader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--top header start-->
    <div class="top_header_wrapper d-none d-sn-none d-md-block d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="top_header_add">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address :</span> 103, Janak Palace, Manglam Enclave, RPS more Bailey Road, Patna- 801503</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><span>Call us :</span> <a href="tel:1800-419-4948">1800-419-4948</a></li>
                        </ul>
                    </div>
                    <div class="top_login">
                        <ul>
                            @if(Auth::guard('web')->check())
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i><a href="{{route('web.account.account')}}">Account</a> | 
                                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="padding-left:0"> Log Out</a>
                                    <form id="logout-form" action="{{ route('web.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>    
                                </li>
                            @else
                                <li><i class="fa fa-sign-in" aria-hidden="true"></i><a href="{{route('web.login')}}">Log In</a> | <a href="{{route('web.register')}}" style="padding-left:0">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header menu wrapper-->
    <div class="menu_wrapper header-area hidden-menu-bar stick">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow bounceInDown" data-wow-delay="0.6s">
                    <div class="header_logo">
                        <a href="{{route('web.index')}}" class="hidden-xs"><img src="{{asset('web/images/logo2.png')}}" alt="logo" title="logo" class="img-responsive  d-none d-sm-none d-md-block d-lg-block"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="kv_navigation_wrapper">
                        <div class="mainmenu  d-xl-block d-lg-block d-md-block d-sm-none d-none">
                            <ul class="main_nav_ul">
                                <li class="gc_main_navigation"><a href="{{route('web.index')}}" class="gc_main_navigation hover_color"> Home </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.doctor_on_call.doctor_on_call')}}" class="gc_main_navigation hover_color"> DOCTOR ON CALL </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.team.team')}}" class="gc_main_navigation hover_color"> OUR TEAM </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.career.career')}}" class="gc_main_navigation hover_color"> CAREER </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.testimonial.testimonial')}}" class="gc_main_navigation hover_color"> TESTIMONIALS </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.faq.faq')}}" class="gc_main_navigation hover_color"> FAQ </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.contact.contact')}}" class="gc_main_navigation hover_color"> CONTACT US </a></li>
                                <li class="gc_main_navigation"><a href="{{route('web.blog.blog')}}" class="gc_main_navigation hover_color"> BLOGS </a></li>
                            </ul>
                        </div>
                        <!-- mainmenu end -->
                    </div>

                </div>

                <div class="rp_mobail_menu_main_wrapper d-block d-sm-block d-md-none d-lg-none d-xl-none">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="gc_logo logo_hidn d-block d-sm-block d-md-none d-lg-none d-xl-none">
                                <a href="{{route('web.index')}}"><img src="{{asset('web/images/logo2.png')}}" class="img-responsive" alt="logo"></a>
                            </div>
                        </div>

                        <div class="col-xl-6  d-block d-sm-block d-md-none d-lg-none d-xl-none">
                            <div id="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#2ec8a6" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#2ec8a6" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#2ec8a6" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#2ec8a6" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#2ec8a6" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidebar">
                    <h1>Quickwell <span>Remedy</span></h1>
                    <div id="toggle_close">&times;</div>
                    <div id='cssmenu' class="wd_single_index_menu">
                        <ul>
                            <li><a href="{{route('web.index')}}"> INDEX </a></li>
                            <li><a href="{{route('web.doctor_on_call.doctor_on_call')}}"> DOCTOR ON CALL </a></li>
                            <li><a href="{{route('web.team.team')}}"> OUR TEAM </a></li>
                            <li><a href="{{route('web.career.career')}}"> CAREER </a></li>
                            <li><a href="{{route('web.testimonial.testimonial')}}"> TESTIMONIALS </a></li>
                            <li><a href="{{route('web.faq.faq')}}"> FAQ </a></li>
                            <li><a href="{{route('web.contact.contact')}}"> CONTACT US </a></li>
                            <li><a href="{{route('web.blog.blog')}}"> BLOGS </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header wrapper end-->