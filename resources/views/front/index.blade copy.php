@extends('layouts.frontLayout')
@section('title')
    Home-PNR Services
@endsection

@section('mainSection')

    <!-- ********************Bootstrap Carousel************ -->
    <div id="homeCarousel" class="carousel slide  carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/services/turbogenerators.jpg') }}" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            turbogenerators</h1>
                        <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>
                        <a href="" class="carousel-btn btn animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/compressor.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">turbines & engines
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/compressor.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">compressors
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/gearbox.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">gearboxes
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/valve1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">valves</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/pumps.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">Pumps</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/blowers.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">blowers
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/services/heat-exchanger.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">heat exchangers</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            alignments</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            retrofits & upgrades</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                           design & system studies</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                           trainings</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ********************End Bootstrap Carousel************ -->
    {{-- ***********************Home About Us******************************* --}}
    <section id="home-aboutus" class="mainSection position-relative">
        {{-- <div class="container-fluid container-lg ">
            <div class="row">
                <div class="section-column sectioninfo col-12 ">

                    <header class="text-center ">
                        <div class="subtitle ">About Us</div>
                        <div class="sectionTitle">PNR works to develop long-term working relationships with suppliers.
                        </div>
                        <div class="line mx-0"></div>
                        <div class="line" style="margin: 35px auto"></div>
                    </header>
                </div>
                
                

            </div>
        </div> --}}
        <div class="container-fluid container-lg ">
            <div class="row">
                <div class="col-12">
                    <header>
                        {{-- <h2 class="text-center">Welcome To</h2> --}}
                        <h1 class="text-center pt-3"
                            style="color:#cfb234;background: -webkit-linear-gradient(#7a6b24, #cfb234);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                            ABOUT US</h1>
                        <div class="line" style="margin: 35px auto"></div>
                        {{-- <hr class="blueline" style="margin: 0px auto 35px;"> --}}
                        <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                            specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                            understand the customer requirements and provide them with
                            the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                            We
                            supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                                mechanical,
                                elctromechanical and instrumentation </b>disciplines.
                        </p>
                        {{-- <a href="#" class="btn waves-effect waves-light"><i class="fa fa-send"></i>Know More
                        &gt;&gt;</a> --}}
                    </header>
                </div>
            </div>
            <div class="row mt-xxl-4">
                <div class="section-column image-section col-12 col-lg-5">
                    <div class="image">
                        <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                    </div>
                    {{-- <div class="overlay-card center-align">
                        <p class="contentTitle text-white text-center">5 Year Of Working Experience</p>
                        <p class="content text-white">We Crafted an aweso design library that is robust and intuitive to
                            use.</p>
                    </div> --}}
                </div>
                <div class="section-column rightSection col-12 col-lg-7 ps-4">

                    <div class="listbox container-fluid pt-xl-4">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="list">
                                    <ul>
                                        <li> Major & Minor Inspections </li>
                                        <li>Installation & Commissioning Services</li>
                                        <li>Alignments </li>
                                        <li>Retrofit & Assets Upgrades</li>
                                        <li> Lifecycle Management</li>
                                        <li> Trainings</li>

                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <p class="content text-justify">Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>

                    <div class="pt-3 text-center">

                        <a class="btn buttonStyleSecondary ms-3" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                    </div>

                </div>
            </div>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5f5f5" fill-opacity="2" d="M0,64L60,58.7C120,53,240,43,360,48C480,53,600,75,720,101.3C840,128,960,160,1080,165.3C1200,171,1320,149,1380,138.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> --}}
    </section>

    {{-- ***********************End Home About Us******************************* --}}

    {{-- *********************Highlighted Box Section******************* --}}

    <div class="highlighted-box align-items-lg-center ">
        
        <h2 class="content">
            Customer satisfaction is our main 
        </h2>
        <h2 class="focused-content animate__animated animate__zoomIn animate__infinite" style="animation-delay: 1s ;--animate-duration: 3s;">FOCUS
        </h2>
        {{-- <a href="#" class="btn waves-effect waves-light"><i class="fa fa-send"></i>GET A FREE QUOTE</a> --}}


    </div>

     {{-- *********************End Highlighted Box Section******************* --}}
    {{-- ***********************Home Why Choose Us******************************* --}}

    <section id="home-whychooseus" class="mainSection ">
        <div class="position-absolute  start-0 w-100 h-100 z-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="0.5"
                    d="M0,0L60,21.3C120,43,240,85,360,90.7C480,96,600,64,720,96C840,128,960,224,1080,250.7C1200,277,1320,235,1380,213.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>

        </div>
        <div class="container-fluid container-lg z-3 position-relative ">
            <div class="row">
                <div class="section-column sectioninfo col-12 col-lg-7 ">

                    <header>
                        <div class="subtitle">Why Choose Us</div>
                        <div class="sectionTitle">PNR works to develop long-term working relationships with suppliers.
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="section-column sectioninfo col-12 col-lg-7 pe-5 order-3 order-lg-2">


                    <p class="content"></p>We pride ourselves on our ability to provide flexibility
                    while
                    working closely with customers to fulfil their changing requirements. PNR also works to develop
                    long-term working relationships with parts and equipment suppliers to ensure cost efficiency and
                    lesser lead times. Our goal is to complete all assigned works within estimated timeframe not
                    compromising on highest standards of quality.</p>
                    <div class="listbox container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="list">
                                    <ul>
                                        <li>Provide flexibility to fulfil customers' changing requirements</li>
                                        <li>Ensure cost efficiency</li>
                                        <li>Lesser lead times</li>
                                        <li>Complete all assigned works within estimated timeframe </li>
                                        <li>No compromise on highest standards of quality.</li>


                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                <div class="section-column image-section col-12 col-lg-5 order-2 order-lg-3">
                    <div class="image">
                        <img src="{{ url('/img/aboutus/4.jpg') }}" alt="" srcset="" class="">
                    </div>

                </div>

            </div>
        </div>
        <div class="container pt-5 z-3 position-relative">
            <div class="row">
                <div class="section-column image-section col-12 col-lg-3">
                    <div class="side-image">
                        <img src="{{ url('/img/aboutus/2.jpg') }}" alt="" srcset=""
                            class="img-thumbnail ">
                    </div>

                </div>


                <div class="col-12 col-lg-9 pt-3">
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
        <footer class="pb-5">

        </footer>
        <div class="svg-bottom position-absolute  start-0  w-100 h-100 z-0" style="bottom:-67%;">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.5" d="M0,0L60,21.3C120,43,240,85,360,90.7C480,96,600,64,720,96C840,128,960,224,1080,250.7C1200,277,1320,235,1380,213.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> --}}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="1"
                    d="M0,224L30,218.7C60,213,120,203,180,202.7C240,203,300,213,360,218.7C420,224,480,224,540,240C600,256,660,288,720,288C780,288,840,256,900,245.3C960,235,1020,245,1080,256C1140,267,1200,277,1260,256C1320,235,1380,181,1410,154.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                </path>
            </svg>
        </div>
        {{-- <div class="custom-shape-divider-top-1708163496"> --}}
        {{-- <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="2" d="M0,64L60,58.7C120,53,240,43,360,48C480,53,600,75,720,101.3C840,128,960,160,1080,165.3C1200,171,1320,149,1380,138.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> --}}
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.5" d="M0,224L60,213.3C120,203,240,181,360,160C480,139,600,117,720,138.7C840,160,960,224,1080,218.7C1200,213,1320,139,1380,101.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        </div> --}}
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.5" d="M0,0L60,10.7C120,21,240,43,360,58.7C480,75,600,85,720,90.7C840,96,960,96,1080,133.3C1200,171,1320,245,1380,282.7L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}
    </section>
    {{-- ***********************End Home Why Choose Us******************************* --}}
    {{-- *********************Home Service Section******************* --}}

    <section id="home_service">
        <div class="container">
            <div class="row pb-3">
                <div class="col-12 col-sm-6 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What Services we Provide for Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="col-12 col-sm-6 section-column">
                    <p class="content">One window Electromechanical solutions for Power Systems</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Turbogenerator</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/compressor.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Turbines & Compressors</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                    </svg>
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/gearbox.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Gearbox</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/valve1.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Valve</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/pumps.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Pumps</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/blowers.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Blowers</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                    </svg>
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/heat-exchanger.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Heat Exchanger</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/alignment.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" xml:space="preserve">
                                    <path fill="#7D7B79" d="M232 163.932v16c0 5.52-4.48 10-10 10H34c-5.52 0-10-4.48-10-10v-16c0 5.52 4.48 10 10 10h188c5.52 0 10-4.48 10-10z"/>
                                    <path fill="#71C3E9" d="M232 79.932v84c0 5.52-4.48 10-10 10H34c-5.52 0-10-4.48-10-10v-84c0-5.52 4.48-10 10-10h188c5.52 0 10 4.48 10 10z"/>
                                    <path fill="#F0C020" d="M166.412 37.144c-3.501-1.157-7.117-2.168-9.147-10.913-1.87 8.055-4.865 9.498-9.147 10.913 6.984 2.308 8.037 6.129 9.147 10.913 1.913-8.248 5.079-9.569 9.147-10.913zM60.789 48.054c-3.501-1.157-7.117-2.168-9.147-10.913-1.87 8.055-4.865 9.498-9.147 10.913 6.984 2.308 8.037 6.129 9.147 10.913 1.914-8.248 5.079-9.569 9.147-10.913zM197.147 46.859c-3.501-1.157-7.117-2.168-9.147-10.913-1.87 8.055-4.865 9.498-9.147 10.913 6.984 2.308 8.037 6.129 9.147 10.913 1.913-8.248 5.079-9.569 9.147-10.913z"/>
                                    <path fill="#C5E5FE" d="M222 167.432H49.571a2.5 2.5 0 1 1 0-5H220.5v-82.5a2.5 2.5 0 1 1 5 0v84c0 1.93-1.57 3.5-3.5 3.5zm-182.429 0H34a2.5 2.5 0 1 1 0-5h5.571a2.5 2.5 0 1 1 0 5z"/>
                                    <circle fill="#EFEFEF" cx="206" cy="133.932" r="8"/>
                                    <circle fill="#EFEFEF" cx="180" cy="133.932" r="8"/>
                                    <circle fill="#EFEFEF" cx="154" cy="133.932" r="8"/>
                                    <path fill="#F0C020" d="M123 133.932H45a5 5 0 0 1-5-5v-38a5 5 0 0 1 5-5h78a5 5 0 0 1 5 5v38a5 5 0 0 1-5 5z"/>
                                    <path fill="#71C3E9" d="M227 229.932H29a5 5 0 0 1-5-5v-14a5 5 0 0 1 5-5h198a5 5 0 0 1 5 5v14a5 5 0 0 1-5 5z"/>
                                    <path fill="#C5E5FE" d="M223 223.432H47a2.5 2.5 0 1 1 0-5h173.5v-3.5a2.5 2.5 0 1 1 5 0v6a2.5 2.5 0 0 1-2.5 2.5zm-186 0h-4a2.5 2.5 0 1 1 0-5h4a2.5 2.5 0 1 1 0 5z"/>
                                    <path fill="#7D7B79" d="M238 141.932h-6v-32h6c5.523 0 10 4.477 10 10v12c0 5.523-4.477 10-10 10zM18 141.932h6v-32h-6c-5.523 0-10 4.477-10 10v12c0 5.523 4.477 10 10 10z"/>
                                    <circle fill="#FC5D3D" cx="204" cy="97.932" r="12"/>
                                    <path d="M147.333 39.517c5.831 1.927 6.493 4.782 7.496 9.104.599 2.578 4.272 2.578 4.871 0 1.665-7.178 3.985-7.944 7.496-9.104 2.279-.753 2.284-3.994 0-4.748-3.283-1.076-5.799-1.795-7.497-9.104-.597-2.573-4.275-2.566-4.87 0-1.667 7.179-3.986 7.945-7.496 9.104-2.278.753-2.283 3.993 0 4.748zm9.94-6.112c.992 1.721 2.105 2.902 3.256 3.759-1.195.872-2.275 2.018-3.221 3.627-.799-1.289-1.882-2.51-3.413-3.593 1.259-.897 2.393-2.089 3.378-3.793zM41.711 50.427c5.831 1.927 6.493 4.782 7.496 9.104.599 2.578 4.272 2.578 4.871 0 1.665-7.178 3.985-7.944 7.496-9.104 2.279-.753 2.284-3.994 0-4.748-3.283-1.076-5.799-1.795-7.497-9.104-.597-2.573-4.275-2.566-4.87 0-1.667 7.179-3.986 7.945-7.496 9.104-2.279.754-2.284 3.994 0 4.748zm9.94-6.112c.992 1.721 2.105 2.902 3.256 3.759-1.195.872-2.275 2.018-3.221 3.627-.799-1.289-1.882-2.51-3.413-3.593 1.259-.897 2.393-2.088 3.378-3.793zM178.069 49.232c5.831 1.927 6.493 4.782 7.496 9.104.599 2.578 4.272 2.578 4.871 0 1.665-7.178 3.985-7.944 7.496-9.104 2.279-.753 2.284-3.994 0-4.748-3.283-1.076-5.799-1.795-7.497-9.104-.597-2.573-4.275-2.566-4.87 0-1.667 7.179-3.986 7.945-7.496 9.104-2.279.754-2.284 3.994 0 4.748zm9.94-6.112c.992 1.721 2.105 2.902 3.256 3.759-1.195.872-2.275 2.018-3.221 3.627-.799-1.289-1.882-2.51-3.413-3.593 1.258-.897 2.392-2.088 3.378-3.793zM206 123.432c-5.79 0-10.5 4.71-10.5 10.5s4.71 10.5 10.5 10.5 10.5-4.71 10.5-10.5-4.71-10.5-10.5-10.5zm0 16c-3.032 0-5.5-2.467-5.5-5.5s2.468-5.5 5.5-5.5 5.5 2.467 5.5 5.5-2.468 5.5-5.5 5.5zM180 144.432c5.79 0 10.5-4.71 10.5-10.5s-4.71-10.5-10.5-10.5-10.5 4.71-10.5 10.5 4.71 10.5 10.5 10.5zm0-16c3.032 0 5.5 2.467 5.5 5.5s-2.468 5.5-5.5 5.5-5.5-2.467-5.5-5.5 2.468-5.5 5.5-5.5zM40 143.432a2.5 2.5 0 1 0 0 5h8a2.5 2.5 0 1 0 0-5h-8zM66.667 143.432a2.5 2.5 0 1 0 0 5h8a2.5 2.5 0 1 0 0-5h-8zM93.333 143.432a2.5 2.5 0 1 0 0 5h8a2.5 2.5 0 1 0 0-5h-8zM120 143.432a2.5 2.5 0 1 0 0 5h8a2.5 2.5 0 1 0 0-5h-8zM130.5 90.932c0-4.136-3.364-7.5-7.5-7.5H45c-4.136 0-7.5 3.364-7.5 7.5v38c0 4.136 3.364 7.5 7.5 7.5h78c4.136 0 7.5-3.364 7.5-7.5v-38zm-5 38c0 1.378-1.121 2.5-2.5 2.5H45a2.503 2.503 0 0 1-2.5-2.5v-16.5H56a2.5 2.5 0 0 0 2.236-1.382l4.978-9.956 6.36 25.444a2.498 2.498 0 0 0 2.153 1.878 2.49 2.49 0 0 0 2.509-1.367l7.309-14.618H88a2.5 2.5 0 0 0 2.236-1.382l4.978-9.956 6.36 25.444a2.498 2.498 0 0 0 4.661.511l7.309-14.618H125.5v16.502zm0-21.5H112a2.5 2.5 0 0 0-2.236 1.382l-4.978 9.956-6.36-25.444c-.561-2.243-3.625-2.585-4.662-.512l-7.309 14.618H80a2.5 2.5 0 0 0-2.236 1.382l-4.978 9.956-6.36-25.444c-.56-2.239-3.622-2.588-4.662-.512l-7.309 14.618H42.5v-16.5c0-1.378 1.121-2.5 2.5-2.5h78c1.379 0 2.5 1.122 2.5 2.5v16.5zM144 155.432h72a2.5 2.5 0 1 0 0-5h-72a2.5 2.5 0 1 0 0 5z"/>
                                    <path d="M238 107.432h-3.5V79.935c0-6.89-5.61-12.5-12.5-12.5H90.859a2.5 2.5 0 0 0 0 5H222c4.13.01 7.49 3.37 7.5 7.5v83.998c0 .02-.003.039-.003.058-.041 4.169-3.478 7.442-7.497 7.442H34c-4.023 0-7.457-3.276-7.497-7.442-.005-.729-.003-82.629-.003-84.056.01-4.13 3.37-7.49 7.5-7.5h36.859a2.5 2.5 0 0 0 0-5H34c-6.891 0-12.5 5.61-12.5 12.5v27.498H18c-6.893 0-12.5 5.607-12.5 12.5v88c0 6.893 5.607 12.5 12.5 12.5h3.5v4.502c0 4.13 3.359 7.5 7.5 7.5h198c4.13 0 7.5-3.37 7.5-7.5v-4.502h3.5c6.893 0 12.5-5.607 12.5-12.5v-88c0-6.893-5.607-12.501-12.5-12.501zM26.5 173.926a12.614 12.614 0 0 0 7.5 2.508h188a12.649 12.649 0 0 0 7.5-2.508v6.006c0 4.136-3.364 7.5-7.5 7.5H34c-4.136 0-7.5-3.364-7.5-7.5v-6.006zm-16-53.994c0-4.136 3.364-7.5 7.5-7.5h3.5v27H18c-4.136 0-7.5-3.364-7.5-7.5v-12zm235 88c0 4.136-3.364 7.5-7.5 7.5h-3.5v-4.498c0-4.14-3.37-7.5-7.5-7.5H91.28c-1.37 0-2.49 1.12-2.49 2.5s1.12 2.5 2.49 2.5H227a2.5 2.5 0 0 1 2.5 2.5v14c0 1.37-1.12 2.5-2.5 2.5H29c-1.38 0-2.5-1.13-2.5-2.5v-14a2.5 2.5 0 0 1 2.5-2.5h42.28a2.51 2.51 0 0 0 2.51-2.5c0-1.38-1.13-2.5-2.51-2.5H29c-4.141 0-7.5 3.36-7.5 7.5v4.498H18c-4.136 0-7.5-3.364-7.5-7.5v-66.024a12.417 12.417 0 0 0 7.5 2.524h3.5v35.5c0 6.893 5.607 12.5 12.5 12.5h188c6.893 0 12.5-5.607 12.5-12.5v-35.5h3.5c2.816 0 5.408-.947 7.5-2.524v66.024zm0-76c0 4.136-3.364 7.5-7.5 7.5h-3.5v-27h3.5c4.136 0 7.5 3.364 7.5 7.5v12z"/><path d="M81.29 203.435a2.51 2.51 0 0 0-2.51 2.5c0 1.38 1.13 2.5 2.51 2.5 1.37 0 2.49-1.12 2.49-2.5s-1.12-2.5-2.49-2.5z"/><circle cx="80.859" cy="69.935" r="2.5"/><path d="M144 87.932h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM159 87.932h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM174 87.932h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM144 100.182h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM159 100.182h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM174 100.182h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM144 112.432h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM159 112.432h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM174 112.432h4a2.5 2.5 0 1 0 0-5h-4a2.5 2.5 0 1 0 0 5zM204 83.432c-7.995 0-14.5 6.505-14.5 14.5s6.505 14.5 14.5 14.5 14.5-6.505 14.5-14.5-6.505-14.5-14.5-14.5zm0 24c-5.238 0-9.5-4.262-9.5-9.5 0-4.372 2.973-8.054 7-9.155v5.155a2.5 2.5 0 1 0 5 0v-5.155c4.027 1.101 7 4.783 7 9.155 0 5.238-4.262 9.5-9.5 9.5zM143.5 133.932c0 5.79 4.71 10.5 10.5 10.5s10.5-4.71 10.5-10.5-4.71-10.5-10.5-10.5-10.5 4.711-10.5 10.5zm16 0c0 3.033-2.468 5.5-5.5 5.5s-5.5-2.467-5.5-5.5 2.468-5.5 5.5-5.5 5.5 2.467 5.5 5.5z"/>
                                </svg>
                            </div>
                            <div class="content">
                                <h3>Alignment</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Turbogenerator</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/compressor.jpg') }}" alt="" srcset="" class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Turbines & Compressors</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                    </svg>
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/gearbox.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Gearbox</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-container">
                        <div class="service-image-box">
                            <img src="{{ asset('img/services/valve1.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">icon</div>
                            <div class="content">
                                <h3>Valve</h3>
                                <a href="http://" target="_blank" class="">Read More <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>    
                                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pb-5">

        </footer>
    </section>

    {{-- *********************End Home Service Section******************* --}}
    {{-- *********************Home Supplies Section******************* --}}

    <section id="home_service" class="mainSection " style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What Services we Provide for Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                    <p class="content">One window Electromechanical solutions for Power Systems</p>
                </div>
                <div class="col-12 col-sm-7">
                   <div class="row g-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt="" srcset="" class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Turbogenerator</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                            </svg>    
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/compressor.jpg') }}" alt="" srcset="" class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Turbines & Compressors</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/gearbox.jpg') }}" alt="" srcset=""class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Gearbox</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                            </svg>    
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/valve1.jpg') }}" alt="" srcset=""class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Valve</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                            </svg>    
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/pumps.jpg') }}" alt="" srcset="" class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Pumps</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                            </svg>    
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="service-container">
                            <div class="service-image-box">
                                <img src="{{ asset('img/services/blowers.jpg') }}" alt="" srcset="" class=" ">
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">icon</div>
                                <div class="content">
                                    <h3>Blowers</h3>
                                    <a href="http://" target="_blank" class="">Read More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path  d="M11.998 23.997c-6.617 0-11.999-5.383-11.999-11.999 0-6.616 5.382-11.999 11.999-11.999 6.616 0 11.999 5.383 11.999 11.999 0 6.616-5.383 11.999-11.999 11.999Zm0-21.816c-5.414 0-9.818 4.404-9.818 9.817 0 5.414 4.404 9.817 9.818 9.817 5.413 0 9.817-4.403 9.817-9.817 0-5.413-4.404-9.817-9.817-9.817Zm5.37 10.234a1.11 1.11 0 0 1-.237.355l-4.362 4.362c-.213.214-.492.32-.771.32a1.09 1.09 0 0 1-.772-1.862l2.502-2.501H7.634a1.092 1.092 0 0 1 0-2.182h6.094l-2.502-2.501a1.091 1.091 0 0 1 1.543-1.543l4.362 4.363a1.095 1.095 0 0 1 .237 1.189Z"></path>
                                        </svg>
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
           
        </div>
        <footer class="pb-5">

        </footer>
    </section>

    {{-- *********************End Home Supplies Section******************* --}}
    

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
        <div class="container-fluid container-lg team-list">
            <div class="row">
                <div class="section-column sectioninfo col-12 ">

                    <header class="text-center ">
                        <div class="subtitle ">Our Team Members</div>
                        <p class="text-white pt-2">We have Energetic & Skillfull Team of Electrical, Mechanical & Instrumentation Engineers who have proven hands-on experience of Installation, Erection, Testing & Commissioning of Electromechanical Assets.
                        </p>

                        <div class="line bg-warning" style="margin: 20px auto 40px;"></div>
                    </header>
                </div>



            </div>
        </div>
        <div class="container-fluid container-lg team-list">
            <div class="row pt-5 g-5">
                <div class="col-12 col-sm-6">

                    <div class="team-container">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/reinier-founder.jpeg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Reinier koorenhof<h1>
                                    <h3 class="team-designation">Founder & Team Lead Technical</h3>
                                    <div class="line d-inline-block me-1" style="width: 30px;border-radius:10px;">
                                    </div>
                                    <div class="line d-inline-block "style="border-radius:10px;">
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
                <div class="col-12 col-sm-6">
                    <div class="team-container ">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/junaid-director.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Junaid Ali<h1>
                                    <h3 class="team-designation">Co-founder and Team Lead Services</h3>
                                    <div class="line d-inline-block me-1" style="width: 30px;border-radius:10px;"></div>
                                    <div class="line d-inline-block "style="border-radius:10px;"></div>
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
        <div class="container px-4 py-5" id="icon-grid">
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
        <div class="container px-4 py-5" id="custom-cards">
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
@endsection
@endsection
