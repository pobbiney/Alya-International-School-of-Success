<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/kiddino/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2026 21:47:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alya International School of Success</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Alya International School of Success">
    <meta name="keywords" content="Alya International School of Success">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/Alya.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend/assets/img/Alya.png')}}" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&amp;family=Jost:wght@400;500&amp;display=swap"
        rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

    
     @yield('css')
</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"><img src="{{asset('frontend/assets/img/Alya.png')}}" alt="Alya"></div>
        </div>
    </div><!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="{{asset('frontend/assets/img/Alya.png')}}" alt="Alya"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li  >
                        <a href="/">Home</a>
                         
                    </li>
                    
                    <li class="menu-item-has-children">
                        <a href="{{ route('about') }}">About</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">Our History</a></li>
                             <li><a href="class.html">Facilities</a></li>
                        </ul>
                    </li>
                    <li  >
                        <a href="blog.html">Admissions</a>
                        
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Media</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Gallery</a></li>
                            <li><a href="service-details.html">Events</a></li>
                            <li><a href="team.html">Blog</a></li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="widget-about">
                    <div class="footer-logo"><img src="{{asset('frontend/assets/img/Alya.png')}}" width="200px" alt="Alya"></div>
                    <p class="mb-0">We are constantly expanding the range of services offered, taking care of children
                        of all ages.</p>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Get In Touch</h3>
                <div>
                    <p class="footer-text">Monday to Friday: <span class="time">6.00am – 6.00pm</span></p>
                     
                    <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a
                            href="mailto:alyaintsch@gmail.com">alyaintsch@gmail.com</a></p>
                    <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+233557158426">+233 (0)
                            557 158 426</a></p>
                </div>
            </div>
            
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    {{-- <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div> --}}
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links style-white">
                            {{-- <ul>
                                <li><a href="registration.html"><i class="far fa-user-circle"></i>Login & Register</a>
                                </li>
                                <li><a href="contact.html" class="searchBoxTggler"><i class="far fa-search"></i>Search
                                        Keyword</a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-auto text-center">
                        <div class="header-links style2 style-white">
                            <ul>
                                <li><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:alyaintsch@gmail.com">alyaintsch@gmail.com</a></li>
                                <li><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+233557158426">+233 (0) 557 158 426</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container">
                    <div class="row gx-3 align-items-center justify-content-between">
                        <div class="col-8 col-sm-auto">
                            <div class="header-logo">
                                <a href="/">
                                    <img src="{{asset('frontend/assets/img/Alya.png')}}" width="100px" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col text-end text-lg-center">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                 <ul>
                                    <li  >
                                        <a href="/">Home</a>
                                        
                                    </li>
                                    
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('about') }}">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('about') }}">Our History</a></li>
                                            <li><a href="class.html">Facilities</a></li>
                                        </ul>
                                    </li>
                                    <li  >
                                        <a href="blog.html">Admissions</a>
                                        
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Media</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Gallery</a></li>
                                            <li><a href="service-details.html">Events</a></li>
                                            <li><a href="team.html">Blog</a></li>
                                        
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto  d-none d-lg-block">
                            <div class="header-icons">
                                <button class="simple-icon sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <a href="contact.html" class="vs-btn sideMenuToggler">Apply Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
   @yield('content')
			 
	 
     <footer class="footer-wrapper footer-layout1" data-bg-src="{{asset('frontend/assets/img/bg/footer-bg-1-1.png')}}">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-60 gy-4 text-center text-lg-start justify-content-between align-items-center">
                    <div class="col-lg"><a href="index.html"><img src="{{asset('frontend/assets/img/Alya.png')}}" width="200" alt="logo"></a></div>
                    <div class="col-lg-auto">
                        <h3 class="h4 mb-0 text-white"><img src="{{asset('frontend/assets/img/icon/check-list.svg')}}" alt="icon"
                                class="me-2"> Enrol your child in a Session now!</h3>
                    </div>
                    <div class="col-lg-auto"><a href="contact.html" class="vs-btn">Start Registration</a></div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center gx-60">
                    <div class="col-lg-4">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <h3 class="mt-n2">Giving your child the best start in life</h3>
                                <p class="map-link"><img src="{{asset('frontend/assets/img/icon/map.svg')}}" alt="svg">First Floor, 10A
                                    Chandos Street London New Town W1G 9LE</p>
                                <div class="sidebar-gallery">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('frontend/assets/img/widget/gal-2-1.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{asset('frontend/assets/img/widget/gal-2-1.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="{{asset('frontend/assets/img/widget/gal-2-2.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{asset('frontend/assets/img/widget/gal-2-2.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="{{asset('frontend/assets/img/widget/gal-2-3.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{asset('frontend/assets/img/widget/gal-2-3.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div>
                                <p class="footer-text">Monday to Friday: <span class="time">6.00am – 06.00pm</span></p>
                                
                                <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a
                                        href="mailto:alyaintsch@gmail.com">alyaintsch@gmail.com</a></p>
                                <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a
                                        href="tel:+233557158426">+233 (0) 557 158 426</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Useful Services</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our History</a></li>
                                    <li><a href="#">Admissions</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row flex-row-reverse gy-3 justify-content-between align-items-center">
                    <div class="col-lg-auto">
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <p class="copyright-text ">Copyright &copy; 2026 <a href="/">Alya International School of Success</a>. All Rights
                            Reserved By <a href="#">Speedlines Technology</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here 
	******************************** -->
   
    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('frontend/ssets/js/slick.min.js')}}"></script>
    <!-- <script src="{{asset('frontend/assets/js/app.min.js')}}"></script> -->
    <!-- Layerslider -->
    <script src="{{asset('frontend/assets/js/layerslider.utils.js')}}"></script>
    <script src="{{asset('frontend/assets/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('frontend/assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- jquery ui -->
    <script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

      
    <script src="{{asset('frontend/assets/js/datecounter.js')}}"></script>
    

@yield('scripts')
</body>


<!-- Mirrored from html.vecurosoft.com/kiddino/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2026 21:47:52 GMT -->
</html>