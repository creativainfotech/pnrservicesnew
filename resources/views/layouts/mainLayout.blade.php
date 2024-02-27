<!-- ==========Sample 2 Template ========== -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    {{-- ******************owl carousel************* --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    {{-- ******************End Owl carousel************* --}}

    {{-- ******************Animate************* --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- ******************End Animate************* --}}

    {{-- ******************Customized************* --}}

    <link rel="stylesheet" href="{{ asset('css/sample2/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample2/header.css') }}">

    {{-- ******************End Customized************* --}}


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
    {{-- ******************Sample 2 Navbar************ --}}
    <header id="navHeader">

        <!-- Top Header-->
        <div id="topheader">
            {{-- <div id="logo">
                    <a href="#">
                        <img src="{{ asset('images/logo/base/icon/base_icon_transparent_background.png') }}"
                            alt="" id="icon">
                        <img src="{{ asset('images/logo/base/text/base_textlogo_transparent_background.png') }}"
                            alt="" id="logotext">
                    </a>
                </div> --}}
            <div id="phone">
                <a href="">
                    <i class="fas fa-mobile-alt"></i>

                    <div class="content">
                        <h5>Call Us On</h5>
                        <p>+91-8373911913, 9873766400</p>
                    </div>
                </a>

            </div>
            <div id="mail">

                <a href="#">
                    <i class="fas fa-envelope"></i>

                    <div class="content">
                        <h5>Mail Us</h5>
                        <p>infotechcreativa@gmail.com</p>
                    </div>
                </a>

            </div>
            <div id="socialicon">
                <a href="#"><img src="{{ asset('img/socialicons/fb.png') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('img/socialicons/instagram.png') }}" alt="" /></a>
                <a href="#"><img src="{{ asset('img/socialicons/linkedin.png') }}" alt="" /></a>
            </div>
        </div>
        <!-- End Top Header-->

        <!-- **********Navigation Menu******** -->
        <nav class="navbar navbar-expand-md navbar-dark">

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
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}"><i
                                    class="fas fa-home pe-2 fs-2"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Offer
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu"id="offers-mega-dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <div class="container-md container-fluid">
                                    <div class="row ">
                                        <div class="col-12 col-sm-8 mega-menu-item-container">
                                            <h2 class="text-primary">
                                                <i class="fas fa-cogs"></i>Services
                                            </h2>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <ul>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('turbogenerator') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Turbogenerator</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('turbine') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Turbine</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('compressor') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Compressor</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('gearbox') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Gearbox</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('valve') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Valve</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('pumps') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Pump</a>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <ul>

                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('blower') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Blower</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('heatExchanger') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Heat Exchanger</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('alignment') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Alignment</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('retrofitUpgrade') }}"
                                                                target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Retrofit & Upgrade</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('designSystemStudy') }}"
                                                                target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Design & System Studies</a>

                                                        </li>
                                                        <li class="mega-menu-item">
                                                            <a href="{{ route('training') }}" target="_blank"><i
                                                                    class="fas fa-hand-point-right"></i>
                                                                Training</a>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <h2 class="text-warning">
                                                <i class="fas fa-layer-group"></i>Supplies
                                            </h2>
                                            <ul>
                                                
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('parts') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>Parts</a>

                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('toolsEquipments') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>Tools & Equipments</a>

                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('relayControlPanels') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>Relay & Control Panels</a>

                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('switchgears') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>Switchgears</a>

                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('PMS') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>PMS</a>

                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('mvMotors') }}" target="_blank"><i
                                                            class="fas fa-hand-point-right"></i>MV Motors</a>

                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu" id="services-mega-dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <div class="container-md container-fluid">
                                    <div class="row ">
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('turbogenerator') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Turbogenerator</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('turbine') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/compressor/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Turbine</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('compressor') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div> <img src="{{ asset('img/services/compressor/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail ">
                                                    </div>
                                                    <figcaption>Compressor</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('gearbox') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Gearbox</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('valve') }}" target="_blank" class="dropdown-item">
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
                                            <a href="{{ route('blower') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/blowers.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Blower</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('heatExchanger') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/heat-exchanger.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Heat Exchanger</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('alignment') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/alignment/alignment.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Alignment</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('retrofitUpgrade') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/alignment/alignment.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Retrofit & Upgrade</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('designSystemStudy') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/alignment/alignment.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Design & System Studies</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('training') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/alignment/alignment.jpg') }}"
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Supplies
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu" id="supplies-mega-dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container-md container-fluid">
                                    <div class="row ">
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('parts') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Parts</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('toolsEquipments') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/compressor/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Tools & Equipments</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('relayControlPanels') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/compressor/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Relay & Control Panels</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('switchgears') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Switchgears</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('PMS') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/valve1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>PMS</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('mvMotors') }}" target="_blank" class="dropdown-item">
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

                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Team</a>
                        </li>

                        <li class="nav-item ms-md-5">
                            <a class="btn buttonStyleSecondary ms-md-3" aria-current="page"
                                href="{{ route('contact') }}">Get A
                                Quote</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
 <!-- **********End Navigation Menu ******** -->
    </header>
   
    </header>
    {{-- ******************End Sample 2 Navbar************ --}}

    {{-- ******************Sample 1 Navbar************ --}}
    <header>

        {{-- <div id="navHeader">
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
                                                <a href="{{ route('turbogenerator') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/turbogenerators.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Turbogenerator</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('turbine') }}" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Turbine</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('compressor') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div> <img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail ">
                                                        </div>
                                                        <figcaption>Compressor</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('gearbox') }}" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Gearbox</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('valve') }}" target="_blank" class="dropdown-item">
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
                                                <a href="{{ route('blower') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/blowers.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Blower</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('heatExchanger') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/heat-exchanger.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Heat Exchanger</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('alignment') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Alignment</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('retrofitUpgrade') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Retrofit & Upgrade</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('designSystemStudy') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/alignment.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Design & System Studies</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-2 mega-menu-item-container ">
                                                <a href="{{ route('training') }}" target="_blank"
                                                    class="dropdown-item">
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
                                                <a href="{{ route('parts') }}" target="_blank"
                                                    class="dropdown-item">
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
                                                <a href="{{ route('toolsEquipments') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Tools & Equipments</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="{{ route('relayControlPanels') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/compressor.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Relay & Control Panels</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="{{ route('switchgears') }}" target="_blank"
                                                    class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/gearbox.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>Switchgears</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="{{ route('PMS') }}" target="_blank" class="dropdown-item">
                                                    <figure>
                                                        <div><img src="{{ asset('img/services/valve1.jpg') }}"
                                                                alt="" srcset="" class="img-thumbnail">
                                                        </div>
                                                        <figcaption>PMS</figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="col-6 col-sm-4 mega-menu-item-container ">
                                                <a href="{{ route('mvMotors') }}" target="_blank"
                                                    class="dropdown-item">
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
          </div> --}}

    </header>
    {{-- ******************End Sample 1 Navbar************ --}}
    {{-- ******************Main Content************ --}}
    @yield('mainSection')

    {{-- ******************End Main Content************ --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    {{-- ******************owl carousel************* --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- ******************End owl carousel************* --}}


    {{-- <script src="{{ asset('js/sample2/commonFront.js') }}"></script> --}}
<script src="{{asset('js/sample1/sample2/header.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#oem.owl-carousel").owlCarousel({

                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: false,
                dots: false,
                // autoheight:true,
                // center:true,
                // autoWidth:true,
                items: 6,
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
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
