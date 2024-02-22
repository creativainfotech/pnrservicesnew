<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/commonFront.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
   
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('css/megamenu.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/mediaquery.css') }}"> --}}
    @yield('styles')
</head>

<body onresize="move_circle()">
    {{-- <div class="preloader">
        <img
          src={{ asset('img/logo.png') }}
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div> --}}


    <header>
        {{-- <div id="topHeader" class="">
            <div class="container d-flex justify-content-between flex-column flex-lg-row">
                <div id="leftNav" class="d-flex justify-content-around flex-grow-1 flex-column flex-md-row">
                    <div class="nav-item py-lg-1 py-2"><i class="bi bi-envelope"></i>sales@pnr.services</div>
                    <div class="nav-item py-lg-1 py-2"><i class="bi bi-telephone"></i>+971556985010,
                        +33678700601
                        </div>
                    <div class="nav-item py-lg-1 py-2"><i class="bi bi-geo-alt"></i> AI Shohada Road, AI Hamara
                        Industrial Zone-FZ, Ras AI
                        Khaimah, United Arab Emirates</div>

                </div>
                <div class="flex-grow-1"></div>
                <div id="rightNav" class="d-flex justify-content-around flex-grow-1 py-lg-1 py-2">
                    <div class="nav-item "><a href="#"><i class="bi bi-facebook"></i></a></div>
                    <div class="nav-item"><a href="#"><i class="bi bi-instagram"></i></a></div>
                    <div class="nav-item"><a href="#"><i class="bi bi-twitter"></i></a></div>
                </div>
            </div>
        </div> --}}

        {{-- <style>
  #logoheader{
    background-color: #306770;
  }
  .logoheadergreen{
    /* background-color: #41897C; */
    background-color: #3E54FF;
  }
  
</style> --}}
        {{-- <div class="container-fluid w-100" id="logoheader" >
  <img src="{{ asset('images/logo/customcolor/full/customcolor_logo_customcolor_background.png') }}" alt="" srcset="" width="250">
  <img src="{{ asset('images/logo/customcolor/full/customcolor_logo_transparent_background.png') }}" alt="" srcset="" width="200">
                      
</div> --}}
        {{-- <div class="container-fluid w-100 logoheadergreen" >
  <img src="{{ asset('images/logo/color1/full/color1_logo_transparent_background.png') }}" alt="" srcset="" width="200">
  <img src="{{ asset('images/logo/customcolor/full/customcolor_logo_transparent_background.png') }}" alt="" srcset="" width="200">
                     
</div> --}}
        <div id="navHeader">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">

                <div class="container-fluid navbar-container">

                    <div id="logo">

                        <a class="d-flex" href="#">
                            <img src="{{ asset('images/logo/base/icon/base_icon_transparent_background.png') }}"
                                alt="" id="icon">
                            <img src="{{ asset('images/logo/base/text/base_textlogo_transparent_background.png') }}"
                                alt="" id="logotext">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu mega-dropdown-menu"id="services-mega-dropdown-menu"
                                    aria-labelledby="navbarDropdown">
                                    <div class="container-md container-fluid">
                                        <div class="row ">
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Turbogenerator</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Turbine</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div> <img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail ">
                                                        </div>
                                                        <figcaption>Compressor</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Gearbox</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/valve1.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Valve</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('pumps') }}" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/pumps.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Pump</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/blowers.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Blower</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/heat-exchanger.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Heat Exchanger</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Alignment</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Retrofit & Upgrade</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Design & System Studies</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Training</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Supplies
                                </a>
                                <div class="dropdown-menu mega-dropdown-menu"id="" aria-labelledby="navbarDropdown">
                                    <div class="container-md container-fluid">
                                        <div class="row ">
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img
                                                                src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Parts</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Tools & Equipments</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Relay & Control Panels</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Switchgears</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/valve1.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>PMS</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="{{ route('pumps') }}" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/pumps.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>MV Motors</figcaption>
                                                    </figure>
                                                </a>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </li>
                            {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                                </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Team</a>
                            </li>

                            <li class="nav-item ms-md-5">
                                <a class="btn buttonStyleSecondary ms-md-3" aria-current="page"
                                    href="{{ route('contact') }}">Get A Quote</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </nav>
            {{-- <nav class="navbar navbar-expand-md navbar-dark sticky-top">

                <div class="container-fluid px-5">
                    <div id="logo" class="d-flex justify-content-start">

                        <a class="" href="#">
                            <img src="{{ asset('images/logo/base/icon/base_icon_transparent_background.png') }}"
                                alt="" id="icon">
                            <img src="{{ asset('images/logo/base/text/base_textlogo_transparent_background.png') }}"
                                alt="" id="logotext">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="col-12lapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu "id="mega-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                        </div><figcaption>Turbogenerator</figcaption>
                                                </a></div>
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                        <figcaption>compressor</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/gearbox.jpg') }}" alt=""
                                                            srcset="" class="img-thumbnail">
                                                        <figcaption>Gearbox</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/valve1.jpg') }}" alt=""
                                                            srcset="" class="img-thumbnail">
                                                        <figcaption>Valve</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/pumps.jpg') }}" alt=""
                                                            srcset="" class="img-thumbnail">
                                                        <figcaption>Pumps</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                           
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/blowers.jpg') }}" alt=""
                                                            srcset="" class="img-thumbnail">
                                                        <figcaption>Blowers</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/heat-exchanger.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                        <figcaption>Heat Exchanger</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col col-sm-6 col-md-3"> 
                                                <a href="http://" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <img src="{{ asset('img/services/alignment.jpg') }}" alt=""
                                                            srcset="" class="img-thumbnail">
                                                        <figcaption>Alignment</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Team</a>
                            </li>



                            <li class="nav-item ms-5">
                                <a class="btn buttonStyleSecondary ms-3" aria-current="page"
                                    href="{{ route('contact') }}">Get A Quote</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav> --}}

        </div>
    </header>
    @yield('mainSection')
    {{-- <footer class="mainSection overlaySection">
       

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    {{-- <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white text-white">2050+</div>
                            <p class="contentBold text-white text-white">Happy Clients</p>
                        </div>
                    </div> --}}
    {{-- </div>
                <div class="col-lg-3 col-md-6 col-12"> --}}
    {{-- <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div> --}}
    {{-- </div>
                <div class="col-lg-3 col-md-6 col-12"> --}}
    {{-- <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div> --}}
    {{-- </div>
                <div class="col-lg-3 col-md-6 col-12"> --}}
    {{-- <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    {{-- </div> --}}
    {{-- </div>
            </div>

        </div>  --}}
    {{-- </section> --}}
    {{-- </footer>  --}}
    {{-- <footer class="no-footer-cta">
        <div id="footer-3" class="footer-area">

            <div class="footer-top-area has-footer-img"
                style="background:url(https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/themes/finbuzz/assets/img/footer-3-bg.jpg) no-repeat center bottom / cover">
                <div class="container">
                    <div class="footer-top-widget">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div id="media_image-6" class="widget widget_media_image"><img width="152"
                                        height="45"
                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2022/01/logo-light.svg"
                                        class="image wp-image-6739  attachment-medium size-medium" alt=""
                                        style="max-width: 100%; height: auto;" decoding="async" loading="lazy"></div>
                                <div id="rt-about-social-5" class="widget rt_footer_social_widget">
                                    <div class="rt-about-widget">
                                        <div class="footer-about">Finbuzz amet sit amet, consectetur adipise cingt sed
                                            doeiusmod tempor incididuntue labore et dolore magna.</div>
                                        <ul class="footer-social">
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div id="nav_menu-7" class="widget widget_nav_menu">
                                    <h3 class="widgettitle ">Quick Links</h3>
                                    <div class="menu-quick-links-container">
                                        <ul id="menu-quick-links" class="menu">
                                            <li id="menu-item-163"
                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-163">
                                                <a href="https://radiustheme.com/demo/wordpress/themes/finbuzz/"
                                                    aria-current="page">Home</a>
                                            </li>
                                            <li id="menu-item-164"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-164">
                                                <a href="https://radiustheme.net/milton/about/">About</a>
                                            </li>
                                            <li id="menu-item-165"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-165">
                                                <a href="https://radiustheme.net/milton/gallery/">Gallery</a>
                                            </li>
                                            <li id="menu-item-166"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-166">
                                                <a href="https://radiustheme.net/milton/portfolio/">Portfolio</a>
                                            </li>
                                            <li id="menu-item-6133"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6133">
                                                <a href="https://radiustheme.net/milton/service/">Service</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div id="media_gallery-3" class="widget widget_media_gallery">
                                    <h3 class="widgettitle ">Gallery</h3>
                                    <div id="gallery-1"
                                        class="gallery galleryid-6868 gallery-columns-3 gallery-size-thumbnail">
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/single-service-2/service10/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service10-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service10-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service10-300x300.jpg 300w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/info-addon-style/service6/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service6-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service6-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service6-370x370.jpg 370w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/addon-test/service4/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service4-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service4-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/11/service4-370x370.jpg 370w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/portfolio/our-business-growth-2-4-3/portfolio9/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/portfolio9-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/portfolio9-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/portfolio9-380x380.jpg 380w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/portfolio9-300x300.jpg 300w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/what-we-are-capable-to-usually-discovered-2/blog4/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/blog4-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/blog4-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/blog4-380x380.jpg 380w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/blog4-300x300.jpg 300w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                        <figure class="gallery-item">
                                            <div class="gallery-icon landscape">
                                                <a
                                                    href="https://radiustheme.com/demo/wordpress/themes/finbuzz/gallery-widget5/"><img
                                                        width="150" height="150"
                                                        src="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/gallery-widget5-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/gallery-widget5-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/finbuzz/wp-content/uploads/2021/10/gallery-widget5-300x300.jpg 300w"
                                                        sizes="(max-width: 150px) 100vw, 150px"></a>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div id="finbuzz_address-5" class="widget widget_finbuzz_address">
                                    <h3 class="widgettitle ">Contact</h3>
                                    <p class="rtin-des"></p>
                                    <ul class="corporate-address">
                                        <li><i class="fas fa-map-marker-alt"></i>
                                            121 King St, Melbourne den 3000, Australia</li>
                                        <li><i class="fas fa-phone-alt"></i>
                                            <a href="tel:(+123)-596-000">(+123)-596-000</a>
                                        </li>
                                        <li><i class="far fa-envelope"></i>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright_wrap">
                        <div class="copyright">© 2024 finbuzz. All Rights Reserved by <a target="_blank"
                                rel="nofollow" href="http://radiustheme.com">RadiusTheme</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/commonFront.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}

    <script>
        $(document).ready(function() {
            $("#oem.owl-carousel").owlCarousel(

                {
                   

                    loop: true,
                    margin:10,
                  
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    nav:false,
                    dots:false,
                    // autoheight:true,
                    // center:true,
                    // autoWidth:true,
    items:6,
                    // responsive: {
                    //     0: {
                    //         items: 1
                    //     },
                    //     600: {
                    //         items: 3
                    //     },
                    //     1000: {
                    //         items: 5
                    //     }
                    // }
                    // // items:2,
                   
                   
                }
            );
        });
    </script>
    @yield('scripts')
</body>

</html>
