<!-- ==========Sample 1 Template ========== -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
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
    <link rel="stylesheet" href="{{ asset('css/sample1/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/footer.css') }}">
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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navHeader">

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
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
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
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('turbogenerator') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/turbogenerator/turbogenerators.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Turbogenerator</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('turbine') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/turbine/Turbine-engines-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Turbine</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('compressor') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div> <img
                                                            src="{{ asset('img/services/compressor/compressor.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail ">
                                                    </div>
                                                    <figcaption>Compressor</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('gearbox') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/gearbox/gearbox.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Gearbox</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('valve') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/valve/valve1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Valve</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('pumps') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/pumps/pumps.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Pump</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('blower') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/services/blower/blowers.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Blower</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('heatExchanger') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/heat-exchanger/heat-exchanger.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Heat Exchanger</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('alignment') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/alignment/alignment.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Alignment</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('retrofitUpgrade') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/retrofit/retrofit-upgrade-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Retrofit & Upgrade</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('designSystemStudy') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/design-system-studies/design-system-studies-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Design & System Studies</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 mega-menu-item-container ">
                                            <a href="{{ route('training') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/services/training/Trainings-1.jpg') }}"
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
                            <div class="dropdown-menu mega-dropdown-menu"id="supply-mega-dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('parts') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/supply/parts/parts-2.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Parts</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('tools') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/supply/tools/tools-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Tools</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('relayControlPanels') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/supply/relay-control-panel/Relay-control-panels-1.jpg') }}"
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
                                                    <div><img
                                                            src="{{ asset('img/supply/switchgear/Switchgear-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Switchgears</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('testing-equipment') }}" target="_blank"
                                                class="dropdown-item">
                                                <figure>
                                                    <div><img
                                                            src="{{ asset('img/supply/tools-equipment/tools-equipments-1.jpg') }}"
                                                            alt="" srcset="" class="img-thumbnail">
                                                    </div>
                                                    <figcaption>Testing Equipments</figcaption>
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-4 mega-menu-item-container ">
                                            <a href="{{ route('mvMotors') }}" target="_blank" class="dropdown-item">
                                                <figure>
                                                    <div><img src="{{ asset('img/supply/mvmotor/MVMotor-1.jpg') }}"
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item text-center">
                            {{-- <a class="btn buttonStyleSecondary" aria-current="page"
                                href="">Get A Quote</a> --}}
                            <button type="button" class="btn buttonStyleSecondary" data-bs-toggle="modal"
                                data-bs-target="#contactModal">
                                Get A Quote
                            </button>

                        </li>
                    </ul>

                </div>

            </div>
        </nav>

    </header>
    @yield('mainSection')
    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div id="logo">

                        <a class="d-flex" href="#">
                            <img src="{{ asset('images/logo/base/icon/base_icon_transparent_background.png') }}"
                                alt="" id="icon">
                            <img src="{{ asset('images/logo/base/text/base_textlogo_transparent_background.png') }}"
                                alt="" id="logotext">
                        </a>
                    </div>
                    {{-- <h5 class="modal-title" id="contactModalLabel">Contact Us</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="modal-left">
                                    <img src="{{ asset('img/contact/2.gif') }}" alt="" class="img-fluid">
                                </div>  
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="modal-header">
                                    <h5 class="modal-title pb-1" id="contactModalLabel">Contact Us</h5>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                </div>
                                <ul class="list-group list-group-flush" id="modal-list">
                                    <li class="list-group-item">
                                        <a class="modal-link" href="" >
                                           <img src="{{asset('img/animated/phone-1.gif')}}" alt="" srcset="">+971556985010, +33678700601</a></li>
                                    <li class="list-group-item"> <a class="modal-link" href=""
                                            ><img src="{{asset('img/animated/email.gif')}}" alt="" srcset="">sales@pnr.services</a></li>
                                    <li class="list-group-item"> <a class="modal-link"
                                            href="" ><img src="{{asset('img/animated/globe.gif')}}" alt="" srcset="">www.pnr.services</a></li>
                                    <li class="list-group-item"><a class="modal-link"
                                            href="" ><img src="{{asset('img/animated/location-big.gif')}}" alt="" srcset="" class="fs-1">AI Shohada Road, AI Hamara Industrial
                                            Zone-FZ, Ras AI Khaimah, United Arab Emirates</a>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
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
    <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-9 col-md-9 col-lg-4">
                    <h2 class="footer-header">
                        Services
                        <div class="line mx-auto bg-white"></div>
                    </h2>

                    <div class="row">
                        <div class="col-6 col-sm-6 col-lg-5">
                            <ul>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('turbogenerator') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Turbogenerator</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('turbine') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Turbine</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('compressor') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Compressor</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('gearbox') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Gearbox</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('valve') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Valve</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('pumps') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Pump</a>

                                </li>

                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-7">
                            <ul>

                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('blower') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Blower</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('heatExchanger') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Heat Exchanger</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('alignment') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Alignment</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('retrofitUpgrade') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Retrofit & Upgrade</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('designSystemStudy') }}"
                                        target="_blank"><i class="fas fa-hand-point-right"></i>
                                        Design & System Studies</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('training') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Training</a>

                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12  col-sm-3 col-md-3 col-lg-3">
                    <h2 class="footer-header">
                        Supplies
                        <div class="line mx-auto bg-white"></div>
                    </h2>
                    <ul>

                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('parts') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Parts</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('tools') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Tools</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('relayControlPanels') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Relay & Control Panels</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('switchgears') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Switchgears</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('testing-equipment') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Testing Equipments</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('mvMotors') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>MV Motors</a>

                        </li>

                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <h2 class="footer-header">
                        Contact Us
                        <div class="line mx-auto bg-white"></div>
                    </h2>
                    <ul>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('parts') }}" target="_blank">
                                <i class="fas fa-phone"></i>+971556985010, +33678700601</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('tools') }}" target="_blank"><i
                                    class="fas fa-envelope"></i>sales@pnr.services</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('relayControlPanels') }}" target="_blank"><i
                                    class="fas fa-globe"></i>www.pnr.services</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('switchgears') }}" target="_blank"><i
                                    class="fas fa-map-marker"></i>AI Shohada Road, AI Hamara Industrial Zone-FZ, Ras AI
                                Khaimah, United Arab Emirates</a>

                        </li>


                    </ul>

                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2 d-flex justify-center align-items-center ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.189774836094!2d55.783717874458425!3d25.6650031125958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef60bee567a253b%3A0x80fd444807765d7!2sRAKEZ%20Compass%20Coworking!5e0!3m2!1sen!2sin!4v1709041557373!5m2!1sen!2sin"
                        width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
        <div class="text-center bg-dark text-white mt-5 p-1 ">
            <p class="mb-0 text-center">2024 © Creativa Infotech, All Rights Reserved</p>
        </div>
    </footer>
    {{-- <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 ">
                    <h2 class="footer-header">
                        Services
                        <div class="line mx-auto bg-white"></div>
                    </h2>
                   
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-5">
                            <ul>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('turbogenerator') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Turbogenerator</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('turbine') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Turbine</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('compressor') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Compressor</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('gearbox') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Gearbox</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('valve') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Valve</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('pumps') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Pump</a>

                                </li>

                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-7">
                            <ul>

                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('blower') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Blower</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('heatExchanger') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Heat Exchanger</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('alignment') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Alignment</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('retrofitUpgrade') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Retrofit & Upgrade</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('designSystemStudy') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Design & System Studies</a>

                                </li>
                                <li class="footer-menu-item">
                                    <a class="footer-link" href="{{ route('training') }}" target="_blank"><i
                                            class="fas fa-hand-point-right"></i>
                                        Training</a>

                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h2 class="footer-header">
                         Supplies
                        <div class="line mx-auto bg-white"></div>
                    </h2>
                    <ul>

                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('parts') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Parts</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('tools') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Tools</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('relayControlPanels') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Relay & Control Panels</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('switchgears') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Switchgears</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('testing-equipment') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>Testing Equipment</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('mvMotors') }}" target="_blank"><i
                                    class="fas fa-hand-point-right"></i>MV Motors</a>

                        </li>

                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h2 class="footer-header">
                        Contact Us
                        <div class="line mx-auto bg-white"></div>
                    </h2>
                    <ul>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('parts') }}" target="_blank">
                                <i class="fas fa-phone"></i>+971556985010, +33678700601</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('tools') }}" target="_blank"><i
                                    class="fas fa-envelope"></i>sales@pnr.services</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('relayControlPanels') }}" target="_blank"><i
                                    class="fas fa-globe"></i>www.pnr.services</a>

                        </li>
                        <li class="footer-menu-item">
                            <a class="footer-link" href="{{ route('switchgears') }}" target="_blank"><i
                                    class="fas fa-map-marker"></i>AI Shohada Road, AI Hamara Industrial Zone-FZ, Ras AI Khaimah, United Arab Emirates</a>

                        </li>
                        

                    </ul>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-2 d-flex justify-center align-items-center ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.189774836094!2d55.783717874458425!3d25.6650031125958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef60bee567a253b%3A0x80fd444807765d7!2sRAKEZ%20Compass%20Coworking!5e0!3m2!1sen!2sin!4v1709041557373!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
        <div class="text-center bg-dark text-white mt-5 p-1 ">
            <p class="mb-0 text-center">2024 © Creativa Infotech, All Rights Reserved</p>
        </div>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/sample1/commonFront.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}

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
