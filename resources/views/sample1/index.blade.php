@extends('layouts.frontLayout')
@section('title')
    Home-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sample1/home-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/square-moving-background.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/rotating-circle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/home.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/sample1/try.css') }}"> --}}
@endsection

@section('mainSection')

    <!-- ********************Bootstrap Carousel************ -->
    <div id="homeCarousel" class="carousel slide  carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/services/turbogenerator/turbogenerators.jpg') }}" class="d-block w-100 img-fluid "
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            turbogenerators</h1>
                        <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s">Some
                            representative placeholder content for the first slide.</p>
                        {{-- <a href="" class="carousel-btn btn animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/turbine/Turbine-engines-1.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">turbines &
                            engines
                        </h2>
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/compressor/compressor.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            compressors
                        </h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/gearbox/gearbox.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">gearboxes
                        </h2>
                        {{-- <ul class="d-flex flex-row">
                            <li>	RENK</li>
                                <li>	FLENDER</li>
                                <li>	Nord</li>
                                <li>	ABB Ltd.</li>
                                <li>	Sumitomo Heavy Industries Ltd.</li>
                                <li>	David Brown Santasalo.</li>
                                <li>	SEW-Eurodrive GmbH & Co. KG.</li>
                                <li>	Renold plc.</li>
                                <li>	China High Speed Transmission Equipment Group Co., Ltd.</li>
                                <li>	Hansen Transmissions International N.V.</li>
                                <li>	NORD Drivesystems Pvt. Ltd.</li>
                               
                        </ul> --}}
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s">
                            Some representative placeholder content for the first slide.
                        </p> --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/valve/valve1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">valves
                        </h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/pumps/pumps.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">Pumps</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/blower/blowers.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">blowers
                        </h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/services/heat-exchanger/heat-exchanger.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">heat
                            exchangers</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment/alignment.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            alignments</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/retrofit/retrofit-upgrade-1.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            retrofits & upgrades</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/design-system-studies/design-system-studies-1.jpg') }}"
                    class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            design & system studies</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/training/Trainings-1.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h2 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            trainings</h2>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        {{-- <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a> --}}

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ********************End Bootstrap Carousel************ -->

    <section id="home-aboutus" class="mainSection">
        <div class="container-fluid container-xl z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    {{-- <div class="iq-features">
                        <div class="holderCircle">
                            <div class="round"></div>
                            <div class="dotCircle">
                                <span class="itemDot active itemDot1 overflow-hidden " data-tab="1">
                                     <i class="fa fa-clock-o"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot2" data-tab="2">
                                    <i class="fa fa-comments"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot3" data-tab="3">
                                    <i class="fa fa-user"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot4" data-tab="4">
                                    <i class="fa fa-tags"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot5" data-tab="5">
                                    <i class="fa fa-upload"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot6" data-tab="6">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="forActive"></span>
                                </span>
                            </div>
                            <div class="contentCircle">
                                <div class="CirItem title-box active CirItem1">
                                    <h2 class="title"><span>Mission</span></h2>
                                    <p>
                                        Our mission is to do complex things in the simplest possible way.
                              </p>
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="CirItem title-box CirItem2">
                                    <h2 class="title"><span>Vision </span></h2>
                                    <p>
                                        To become one window electromechanical solution provider company.
                              </p>
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="CirItem title-box CirItem3">
                                    <h2 class="title"><span>Support</span></h2>
                                    <p>
                                        Our after sales is available 24/7 to keep your machines running and minimise downtime in case of tripping.
                              </p>
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="CirItem title-box CirItem4">
                                    <h2 class="title"><span>Training</span></h2>
                                    <p>
                                        Customised trainings for O&M engineers
                              </p>
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="CirItem title-box CirItem5">
                                    <h2 class="title"><span>Value</span></h2>
                                    <p>
                                        Trust, Service, Responsibility.
                              </p>
                                    <i class="fa fa-upload"></i>
                                </div>
                                <div class="CirItem title-box CirItem6">
                                    <h2 class="title"><span>Certification</span></h2>
                                    <p>
                                        Skilled, experienced and OEM certified engineers to work on your site.
                              </p>
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>

                {{-- Right section --}}
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle">Welcome To pNR Services</div>
                        <div class="sectionTitle">We offer OEM experienced technical specialists to power generation
                            companies, oil & gas, fertilizers, cement & sugar industries.
                        </div>
                        <div class="line mx-0"></div>
                    </header>

                    <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                        specialists to <b>power generation companies, oil & gas, fertilizers, cement & sugar industries.
                        </b>We
                        understand the customer requirements and provide them with
                        the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                        We
                        supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                            mechanical,
                            elctromechanical and instrumentation & control engineers </b>disciplines.
                    </p>
                    <div class="d-flex">
                        <ul class="listbox">
                            <li class="list-item"> Major & Minor Inspections </li>
                            <li class="list-item">Installation & Commissioning Services</li>
                            <li class="list-item">Alignments </li>


                        </ul>
                        <ul class="listbox">

                            <li class="list-item">Retrofit & Assets Upgrades</li>
                            <li class="list-item"> Lifecycle Management</li>
                            <li class="list-item"> Trainings</li>

                        </ul>
                    </div>




                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>

                    {{-- <div class="pt-3 text-center"> --}}
                    <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                        {{-- <a class="btn buttonStyleSecondary ms-3" aria-current="page" href="{{ route('contact') }}">Read
                                More >></a> --}}
                    </div>


                </div>




            </div>
        </div>

        {{-- <footer class="pb-5">

        </footer> --}}


    </section>
    {{-- ***********************Home About Us******************************* --}}

    {{-- <section id="home-aboutus" class="mainSection">

        <div class="container-fluid container-lg z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-5 section-col-top-padding">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                    </div>


                </div>

             
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle">Welcome To pNR Services</div>
                        <div class="sectionTitle">We offers OEM experienced technical specialists to power generation
                            companies, oil & gas, fertilizers, cement industries.
                        </div>
                        <div class="line mx-0"></div>
                    </header>

                    <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                        specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                        understand the customer requirements and provide them with
                        the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                        We
                        supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                            mechanical,
                            elctromechanical and instrumentation </b>disciplines.
                    </p>
                    <div class="d-flex">
                        <ul class="listbox">
                            <li class="list-item"> Major & Minor Inspections </li>
                            <li class="list-item">Installation & Commissioning Services</li>
                            <li class="list-item">Alignments </li>


                        </ul>
                        <ul class="listbox">

                            <li class="list-item">Retrofit & Assets Upgrades</li>
                            <li class="list-item"> Lifecycle Management</li>
                            <li class="list-item"> Trainings</li>

                        </ul>
                    </div>




                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>

                     <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                        
                    </div>


                </div>




            </div>
        </div>

      

    </section> --}}
    {{-- <section id="home-aboutus" class="mainSection">
        <div class="container-fluid container-lg ">
            <div class="row">
                <div class="col-12">
                    <header>
                       
                        <h1 class="text-center pt-3"
                            style="color:#cfb234;background: -webkit-linear-gradient(#7a6b24, #cfb234);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                            ABOUT US</h1>
                        <div class="line" style="margin: 3.5rem auto"></div>
                       
                        <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                            specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                            understand the customer requirements and provide them with
                            the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                            We
                            supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                                mechanical,
                                elctromechanical and instrumentation </b>disciplines.
                        </p>
                       
                    </header>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="image-box">
                        <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                    </div>

                </div>
                 <div class="col-12 col-lg-7">

                    <ul class="listbox">
                        <li class="list-item"> Major & Minor Inspections </li>
                        <li class="list-item">Installation & Commissioning Services</li>
                        <li class="list-item">Alignments </li>
                        <li class="list-item">Retrofit & Assets Upgrades</li>
                        <li class="list-item"> Lifecycle Management</li>
                        <li class="list-item"> Trainings</li>
                    </ul>
                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>
                   
                    <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                       
                    </div>

                </div>
            </div>
        </div>

     --}}

    {{-- ***********************End Home About Us******************************* --}}

    {{-- *********************Highlighted Box Section******************* --}}

    <div class="highlighted-box align-items-lg-center ">

        <h5 class="content">
            Customer satisfaction is our main
        </h5>
        <h5 class="focused-content animate__animated animate__zoomIn animate__infinite"
            style="animation-delay: 1s ;--animate-duration: 3s;">FOCUS
        </h5>
        {{-- <a href="#" class="btn waves-effect waves-light"><i class="fa fa-send"></i>GET A FREE QUOTE</a> --}}


    </div>

    {{-- *********************End Highlighted Box Section******************* --}}
    {{-- *********************Home Service Section******************* --}}

    <section id="home_service" class="mainSection">

        <div class="container-xl container-fluid">

            <div class="row">
                <div class="col-12 col-sm-6 ">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What Services we Provide for Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="col-12 col-sm-6 right-header-content" style="">
                    <p>
                        One window Electromechanical
                        solutions for Power Systems
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/turbogenerator/Turbogenerators-1.jpg') }}" alt=""
                                srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('turbogenerator') }}" target="_blank"
                                    class="">Turbogenerator</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/turbine/Turbine-engines-1.jpg') }}" alt=""
                                srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('turbine') }}" target="_blank" class="">Turbines</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/compressor/compressor.jpg') }}" alt=""
                                srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('compressor') }}" target="_blank" class="">Compressors </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/gearbox/gearbox.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('gearbox') }}" target="_blank" class="">Gearbox </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/valve/valve1.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('valve') }}" target="_blank" class="">Valve </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/pumps/pumps.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('pumps') }}" target="_blank" class="">Pumps </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/blower/blowers.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('blower') }}" target="_blank" class="">Blowers </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/heat-exchanger/heat-exchanger.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('heatExchanger') }}" target="_blank" class="">Heat Exchanger
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/alignment/alignment.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">
                               
                            </div> --}}
                            <div class="content">
                                <a href="{{ route('alignment') }}" target="_blank" class="">Alignment </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/retrofit/retrofit-upgrade-1.jpg') }}" alt=""
                                srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('retrofitUpgrade') }}" target="_blank" class="">Retrofit &
                                    Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/design-system-studies/design-system-studies-1.jpg') }}"
                                alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('designSystemStudy') }}" target="_blank" class="">Design &
                                    System Studies</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/training/Trainings-1.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="{{ route('training') }}" target="_blank" class="">Training</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
    </section>

    {{-- *********************End Home Service Section******************* --}}


    {{-- *********************Home Supplies Section******************* --}}

    <section id="home_supplies" class="mainSection">
        <div class="container-xl container-fluid">
            <div class="row g-5">
                <div class="col-12 col-md-5 col-lg-5 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What We Supply to Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                    {{-- <p class="content">One window Electromechanical solutions for Power Systems</p> --}}
                    <p>PNR offers wide range of special equipment vital for any power system.
                        When it comes to turnkey, retrofit or system upgrade solutions our engineering, procurement,
                        logistics and service team work together to achieve goals in minimum lead time</p>
                </div>
                <div class="col-12 col-md-7 col-lg-7 ">
                    <div class="row" id="supply-card-container">
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/parts/parts1.jpg') }}" alt="" srcset=""
                                        class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">Parts</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/tools-equipment/tools-equipments-1.jpg') }}"
                                        alt="" srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">Tools</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/relay-control-panel/Relay-control-panels-1.jpg') }}"
                                        alt="" srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">Relay & Control
                                            Panels</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/switchgear/Switchgear-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">Switchgears</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/Testing-commissioning/Testing-commissioning-1.jpg') }}"
                                        alt="" srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">Testing
                                            Equipment</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/supply/mvmotor/MVMotor-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="{{ route('index') }}" target="_blank" class="">MV Motor</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
    </section>

    {{-- *********************End Home Supplies Section******************* --}}
    {{-- *********************Home Call To Action Section******************* --}}

    <section id="home_call_to_action" class="mainSection" style="background-color: #306770; color:#ffffff; ">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-sm-7 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle text-white">What We Supply to Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                    <p class="content">One window Electromechanical solutions for Power Systems</p>
                </div>
                <div class="col-12 col-sm-5 ">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>

                    </div>
                </div>
            </div>

        </div>
        {{-- <footer class="pb-5">

</footer> --}}
    </section>

    {{-- *********************End Home Call To Action Section******************* --}}
    {{-- ***********************Home Why Choose Us******************************* --}}

    <section id="home-whychooseus" class="mainSection position-relative bg-grey">
        <div class="position-absolute  start-0 w-100 h-100 z-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="0.5"
                    d="M0,0L60,21.3C120,43,240,85,360,90.7C480,96,600,64,720,96C840,128,960,224,1080,250.7C1200,277,1320,235,1380,213.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>

        </div>
        {{-- <div class="container-fluid container-lg z-3 position-relative "> --}}
        <div class="container-fluid container-xl z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-7 ">
                    {{-- <div class="section-column sectioninfo col-12 col-lg-7 "> --}}

                    <header>
                        <div class="subtitle">Why Choose Us</div>
                        <div class="sectionTitle">PNR works to develop long-term working relationships with suppliers.
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="col-12 col-md-7  order-3 order-md-2">
                    {{-- <div class="section-column sectioninfo col-12 col-lg-7 pe-5 order-3 order-lg-2"> --}}
                    <p class="left-content">We pride ourselves on our ability to provide flexibility
                        while
                        working closely with customers to fulfil their changing requirements. PNR also works to develop
                        long-term working relationships with parts and equipment suppliers to ensure cost efficiency and
                        lesser lead times. Our goal is to complete all assigned works within estimated timeframe not
                        compromising on highest standards of quality.</p>
                    <div class="listbox container-fluid" id="large-screen">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="list">
                                    <ul class="listbox">
                                        <li class="list-item">Provide flexibility to fulfil customers' changing
                                            requirements</li>
                                        <li class="list-item">Ensure cost efficiency</li>
                                        <li class="list-item">Lesser lead times</li>
                                        <li class="list-item">Complete all assigned works within estimated timeframe </li>
                                        <li class="list-item">No compromise on highest standards of quality.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="section-column image-section col-12 col-lg-5 order-2 order-lg-3"> --}}
                <div class="col-12 col-md-5 order-2 order-md-3 ">
                    <div class="image-box" id="right-image">
                        <img src="{{ url('/img/aboutus/join-hands.jpg') }}" alt="" srcset=""
                            class="">
                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="listbox container-fluid" id="small-screen">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="list">
                                    <ul class="listbox">
                                        <li class="list-item">Provide flexibility to fulfil customers' changing
                                            requirements</li>
                                        <li class="list-item">Ensure cost efficiency</li>
                                        <li class="list-item">Lesser lead times</li>
                                        <li class="list-item">Complete all assigned works within estimated timeframe </li>
                                        <li class="list-item">No compromise on highest standards of quality.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5 z-3 position-relative">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="image-box" id="training">
                        <img src="{{ url('/img/aboutus/2.jpg') }}" alt="" srcset=""
                            class="img-thumbnail ">
                    </div>

                </div>


                <div class="col-12 col-md-9 ">
                    <p class="content text-justify">Our skillful technical and procurement available
                        resources make us uniquely positioned to be relied upon by many valued
                        customers. </p>
                    {{-- <div class="highlighted-card mt-5">
                        <p class="">Customer satisfaction is our main <span>Focus</span>
                        </p>
                    </div> --}}
                    <div class="pt-3 text-center">

                        <a class="btn buttonStyleSecondary ms-3" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                    </div>
                </div>

            </div>

        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
        <div class="position-absolute  start-0  w-100 z-0" style="bottom:0;">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="1"
                    d="M0,224L30,218.7C60,213,120,203,180,202.7C240,203,300,213,360,218.7C420,224,480,224,540,240C600,256,660,288,720,288C780,288,840,256,900,245.3C960,235,1020,245,1080,256C1140,267,1200,277,1260,256C1320,235,1380,181,1410,154.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                </path>
            </svg>
        </div>

    </section>
    {{-- ***********************End Home Why Choose Us******************************* --}}


    {{-- ***********************Home Team Member Section******************************* --}}
    <section id="home-team" class="mainSection position-relative">

        <ul class="background">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container-fluid container-xl team-list">
            <div class="row">
                <div class="col-12 ">

                    <header class="text-center ">
                        <div class="subtitle ">Our Team Members</div>
                        <p class="text-white pt-4">We have Energetic & Skillfull Team of Electrical, Mechanical &
                            Instrumentation Engineers who have proven hands-on experience of Installation, Erection, Testing
                            & Commissioning of Electromechanical Assets.
                        </p>

                        <div class="line bg-warning" style="margin: 1.5rem auto 5.0rem;"></div>
                    </header>
                </div>
            </div>
        </div>
        <div class="container-fluid container-lg team-list">
            <div class="row pt-3">
                <div class="col-6 col-sm-5 offset-sm-1 col-md-6 offset-md-0">

                    <div class="team-container">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/reinier-founder.jpeg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Reinier koorenhof<h1>
                                    <h3 class="team-designation">Founder & Team Lead Technical</h3>
                                    <div class="line d-inline-block me-1" style="width: 3.0rem;border-radius:1.0rem;">
                                    </div>
                                    <div class="line d-inline-block ">
                                    </div>
                                    <p class="team-descr">With over 25 years of experience in the global power generation
                                        industry.
                                    </p>
                                    <div class="animated-btn">
                                        <a href="http://" target="_blank" id="round">+</a>
                                        <a href="http://" target="_blank" id="rect"> Read More <span
                                                class="fw-bolder ps-1"> >></span></a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-6 offset-md-0">
                    <div class="team-container ">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/junaid-director.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Junaid Ali<h1>
                                    <h3 class="team-designation">Co-founder and Team Lead Services</h3>
                                    <div class="line d-inline-block me-1" style="width: 3.0rem;border-radius:1.0rem;">
                                    </div>
                                    <div class="line d-inline-block "style="border-radius:1.0rem;"></div>
                                    <p class="team-descr">20 years experience working with major OEMs of power and energy.
                                    </p>
                                    <div class="animated-btn">
                                        <a href="http://" target="_blank" id="round">+</a>
                                        <a href="http://" target="_blank" id="rect"> Read More <span
                                                class="fw-bolder ps-1"> >></span></a>
                                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <footer class="pb-5">

        </footer>
    </section>

    {{-- ***********************End Home Team Member Section******************************* --}}


    {{-- **************************Services************* --}}
    {{-- <section>
        <div class="container. rem-4 py-5" id="icon-grid">
            <h2 class="pb-2 border-bottom">Icon grid</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#cpu-fill"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#calendar3"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#home"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#geo-fill"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h2>Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link">
                            Call to action
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#tools"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container. rem-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Custom cards</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-1.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>Earth</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>3d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple
                                lines</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>Pakistan</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>California</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-services" class="mainSection ">
        <div class="container">
            <header class="center-align">
                <div class="subtitle  ">What We Offer You</div>
                <div class="sectionTitle">Our Services</div>
                <div class="line mx-0"></div>
                <p class="content pt-3 pb-5 text-white">We offer following specialized services of complete range of
                    Turbogenerators make brush
                    electrical machines uk, netherlands & czech republic.</p>
            </header>
            <section class="card-group-horizontal flex-wrap">

                <div class="icon-card-vertical">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Commissioning Services
                        </div>
                        <p class="content">Commissioning Services
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Operations & Maintenance</div>
                        <p class="content">A, B & C inspection Elcid, PD, Tan delta, Boroscope, RSO, DLRO
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Retrofit & Assets Upgrade Services</div>
                        <p class="content">Excitation system, protection and control system</p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Parts and Materials</div>
                        <p class="content">Bearings, AVR, inspection kits, relays and much more</p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Lifecycle Management
                        </div>
                        <p class="content">Customized Trainings of operation and maintenance crew
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Grow Your Business With US</div>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                    </div>
                </div>

            </section>
        </div>
    </section> --}}

    {{-- **************************Intro************* --}}
    {{-- <section id="about" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">video</div>
                <div class=" col-md-6 col-12">
                    <header>
                        <div class="subtitle">Our Introduction</div>
                        <div class="contentTitleBold">Consulting Market Leader Experts</div>
                        <div class="line mx-0"></div>
                    </header>
                    <section class="card-group-vertical">

                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- **************************Contact************* --}}
    {{-- <section id="home-contactform" class="mainSection overlaySection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">
                    <header>
                        <div class="subtitle  ">Get To Know Us</div>
                        <div class="bannerTitle text-white">We Are Very
                            Good In
                            Boosting Your
                            Businesses</div>
                        <div class="line mx-0"></div>
                        <p class="content text-white">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form.</p>
                        <button class="buttonStyleSecondaryDark">Discover More</button>
                    </header>
                </div>
                <div class=" col-md-6 col-12 ">
                    <div class="aboutus-form ">

                        <div>

                            <div class="subtitle">Request</div>
                            <h2 class="contentTitleBold">Let's Request a Call Back</h2>
                            <div class="line "></div>
                            <div class="row">
                                <div class="col">

                                    @if (session('message'))
                                        <div class='alert alert-success'>
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        {{ Form::open(['route' => 'contactmail', 'method' => 'post']) }}
                        {{ Form::token() }}
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- {!! Form::label('title', 'Blog Title') !!} --}}
    {{-- {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
                                        ]) !!}
                                        @if ($errors->has('name'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- {!! Form::label('title', 'Blog Title') !!} --}}
    {{-- {!! Form::text('organization', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Organization',
                                        ]) !!}
                                        @if ($errors->has('organization'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('organization') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}</div>
                                @if ($errors->has('email'))
                                    <div class="text-danger pb-3 ps-3">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                    @if ($errors->has('number'))
                                        <div class="text-danger pb-3 ps-3">{{ $errors->first('number') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-12">{!! Form::textarea('message', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Your Message',
                                        'rows' => '5',
                                        // 'cols' => '15',
                                    ]) !!}
                                        @if ($errors->has('message'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="d-flex  justify-content-center">
                                    <div class="">{!! Form::submit('submit', ['class' => 'buttonStyleSecondaryDark']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- </s/ection>  --}}
    {{-- **************************Projects************* --}}
    {{-- <section id="projects" class="mainSection">
        <div class="container">
            <header class="center-align">
                <div class="subtitle  ">Our Recent Projects</div>
                <div class="sectionTitle">Latest Cases</div>
                <div class="line mx-0"></div>
                <p class="content pt-3 pb-5">There are many variations of passages of Lorem Ipsum available, but the
                    majority have
                    suffered alteration in some form.</p>
            </header>
            <section>
                               <div class="row">


                    <div class="d-flex justify-content-around">
                        <button class="btn  filter-button active" data-filter="all">All</button>
                        <button class="btn  filter-button" data-filter="hdpe">HDPE Pipes</button>
                        <button class="btn  filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
                        <button class="btn  filter-button" data-filter="spray">Spray Nozzle</button>
                        <button class="btn  filter-button" data-filter="irrigation">Irrigation
                            Pipes</button>
                    </div>
                    <br>



                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive " alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const filterButtons = document.querySelectorAll('.filter-button');
                        filterButtons.forEach(function(button) {
                            button.addEventListener('click', function() {

                                const value = this.getAttribute('data-filter');
                                const filters = document.querySelectorAll('.filter');
                                if (value == 'all') {
                                    filters.forEach(function(filter) {
                                        filter.style.display = 'block';
                                    });
                                } else {
                                    filters.forEach(function(filter) {
                                        if (!filter.classList.contains(value)) {
                                            filter.style.display = 'none';
                                        } else {
                                            filter.style.display = 'block';
                                        }
                                    });
                                }
                                filterButtons.forEach(function(button) {
                                    button.classList.remove('active');
                                });
                                this.classList.add('active');
                            });
                        });
                    });
                </script>
            </section>
        </div>
    </section> --}}
    {{-- **************************Process************* --}}
    {{-- <section id="process">
        <header class="center-align">
            <div class="subtitle  ">Process</div>
            <div class="sectionTitle">Working process</div>
            <div class="line mx-0"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <section id="timeline">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelinecontent">
                            <p class="contentTitle pt-3 text-end">Research</p>
                            <p class="content text-end">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 timelineImage">
                        <img src="{{ asset('images/timeline1.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelineImage">
                            <img src="{{ asset('images/timeline2.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-start">Research</p>
                            <p class="content text-start">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-end">Research</p>
                            <p class="content text-end">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 timelineImage">
                        <img src="{{ asset('images/timeline3.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelineImage">
                            <img src="{{ asset('images/timeline4.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-start">Research</p>
                            <p class="content text-start">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </section> --}}
    {{-- **************************Team************* --}}
    {{-- <section id="team" class="mainSection bg-grey">
        <header class="center-align">
            <div class="subtitle  ">Our Team</div>
            <div class="sectionTitle">Our Creative Team</div>
            <div class="line mx-0"></div>
            <p class="content pt-3 pb-5">There are many variations of passages of Lorem Ipsum available, but the majority
                have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section class="card-group-horizontal">


                <div class="image-card-horizontal">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                    </div>
                    <div class="card-content">

                        <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                            the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s."
                        <div class="contentTitle">REINIER KOORENHOF</div>
                        <p class="content">Co-Founder
                            &
                            Technical Team Lead</p>
                        </p>

                    </div>
                </div>
                <div class="image-card-horizontal">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                    </div>
                    <div class="card-content">

                        <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                            the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s."
                        <div class="contentTitle">JUNAID ALI</div>
                        <p class="content">Co-Founder & Team Lead Services</p>
                        </p>

                    </div>
                </div>

            </section>
        </div>
    </section> --}}
    {{-- **************************Testimonial************* --}}
    {{-- <section id="testimonial" class="mainSection">

        <header class="center-align">
            <div class="subtitle  ">What Saye's Our Clients</div>
            <div class="sectionTitle">Our Testimonials</div>
            <div class="line mx-0 bg-white"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section id="owlcarousel">

                <div class="owl-carousel">
                    <div>

                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 1</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 2</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 3</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 4</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 5</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 6</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 7</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 8</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 9</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 10</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 11</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 12</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 13</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>
    </section> --}}

    {{-- <section id="pricingplan" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">left</div>
                <div class=" col-md-6 col-12">right</div>
            </div>
        </div>
    </section> --}}
    {{-- **************************Progress************* --}}

    {{-- <section id="progress" class="mainSection overlaySection">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white text-white">2050+</div>
                            <p class="contentBold text-white text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    {{-- **************************News************* --}}

    {{-- <section id="news" class="mainSection">
        <header class="center-align">
            <div class="subtitle  ">Latest News</div>
            <div class="sectionTitle">Latest News & Blog</div>
            <div class="line mx-0"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section class="card-group-horizontal">

                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
            </section>
        </div>
    </section> --}}

    {{-- <section id="clients" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">left</div>
                <div class=" col-md-6 col-12">right</div>
            </div>
        </div>
    </section> --}}

    {{-- **************************Contact************* --}}

    {{-- <section id="contact" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=col-md-4>
                    <section class="card-group-vertical">

                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="col-md-8 ">
                    <div class="container formSection">
                        <header class="center-align">
                            <div class="subtitle  ">Get In Touch</div>
                            <div class="sectionTitle">Ready To Get Started</div>
                            <div class="line mx-0"></div>
                            <p class="content">There are many variations of passages of Lorem Ipsum available, but
                                the majority have
                                suffered alteration in some form.</p>
                        </header>
                        {{ Form::open(['url' => 'foo/bar']) }}
                        {{ Form::token() }}
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                     
                                        {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Your
                                                                                                                                                                                                Name',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">


                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}</div>
                                <div class="col-6">{!! Form::number('number', null, ['class' => 'form-control', 'placeholder' => 'Number']) !!}</div>

                                <div class="row">
                                    <div class="col-12">{!! Form::textarea('message', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Your Message',
                                        'rows' => '3',
                                        'cols' => '15',
                                    ]) !!}</div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center ">{!! Form::submit('submit', ['class' => 'btn flex-grow-1']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
@section('scripts')
    <script>
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <script>
        let i = 2;

        $(document).ready(function() {
            move_circle();

            setInterval(function() {
                var dataTab = $(".itemDot.active").data("tab");
                if (dataTab > 6 || i > 6) {
                    dataTab = 1;
                    i = 1;
                }
                $(".itemDot").removeClass("active");
                $('[data-tab="' + i + '"]').addClass("active");
                $(".CirItem").removeClass("active");
                $(".CirItem" + i).addClass("active");
                i++;

                $(".dotCircle").css({
                    transform: "rotate(" + (360 - (i - 2) * 36) + "deg)",
                    transition: "2s",
                });
                $(".itemDot").css({
                    transform: "rotate(" + (i - 2) * 36 + "deg)",
                    transition: "1s",
                });
            }, 3000);
        });


        function move_circle() {
            var radius = 200;
            var fields = $(".itemDot");
            var container = $(".round");
            var width = container.width();
            radius = width / 2;

            var height = container.height();
            var angle = 0,
                step = (2 * Math.PI) / fields.length;

            fields.each(function() {
                var x = Math.round(
                    width / 2 + radius * Math.cos(angle));
                var y = Math.round(
                    height / 2 + radius * Math.sin(angle));
                if (window.console) {
                    console.log($(this).text(), x, y);
                }

                $(this).css({
                    left: x + "px",
                    top: y + "px",
                });
                angle += step;
            });

            $(".itemDot").click(function() {
                var dataTab = $(this).data("tab");
                $(".itemDot").removeClass("active");
                $(this).addClass("active");
                $(".CirItem").removeClass("active");
                $(".CirItem" + dataTab).addClass("active");
                i = dataTab;

                $(".dotCircle").css({
                    transform: "rotate(" + (360 - (i - 1) * 36) + "deg)",
                    transition: "2s",
                });
                $(".itemDot").css({
                    transform: "rotate(" + (i - 1) * 36 + "deg)",
                    transition: "1s",
                });
            });
        }
    </script>
@endsection
@endsection
