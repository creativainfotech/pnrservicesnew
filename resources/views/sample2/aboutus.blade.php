@extends('layouts.mainLayout')
@section('title')
    About Us-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sample2/section-divider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample2/aboutus.css') }}">
@endsection
@section('mainSection')
    <section id="aboutus">
        <section id="aboutusTopHeader" class="position-relative">
            <div class="top-header shape-parent"
                style="background-image:linear-gradient(to right,rgba(48,102,112,0.8),rgba(48,102,112,0.8)),url('img/aboutus/landscape-1.jpg');">

                <div class="shape shape-bottom "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6"
                        preserveAspectRatio="none">
                        <path style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
                        <path style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
                        <path style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
                        <path d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
                    </svg></div>
                {{-- ,url(@yield('bg-image')) --}}
            </div>

            <h1 id="serviceName">ABOUT US</h1>
        </section>
        {{-- <div class="top-header" style="background-image: url('img/aboutus/landscape-1.jpg');"> --}}

        {{-- </div> --}}
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <section id="aboutus-aboutus" class="mainSection ">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <header>
                            <div class="centerHeading">Looking for <strong class="centerHeadingBold">Specialized </strong>Services for your Power System?</div>
                            <div class="centerSubHeading">You are at Right Place-We are serving Globally</div>
                            <div class="line mx-auto"></div>
                            <p class="content text-justify"><strong>PNR</strong> offers OEM experienced technical
                                specialists to <strong>power generation</strong>
                                companies, <strong>oil & gas</strong>, <strong>fertilizers</strong>, <strong>cement</strong>
                                industries. We supply our clients multi-disciplined
                                expertise with field engineers of <b>electrical, mechanical, elctromechanical and
                                    instrumentation</b>
                                disciplines.</p>
                        </header>
                    </div>
                </div>
                <article class="row pb-0">
                    <div class="col-12 col-lg-5 section-col-top-padding figure-section pt-0">
                        <div class="image-box">
                            <img src="{{ asset('img\services\alignment\Alignments-2.jpg') }}" alt="" srcset=""
                                class="">
                        </div>
                        {{-- <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="image-box">
                            <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="image-box">
                            <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                        </div>
                    </div>
                </div> --}}
                        {{-- <div class="row pt-3">
                    <div class="col-12">
                        <div class="image-box">
                            <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                        </div>
                    </div>
                </div> --}}


                    </div>
                    <div class="col-12 col-lg-7 article-section">
                        <div class="listbox container-fluid pt-5">
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
                                More</a>
                        </div>

                    </div>
                </article>
            </div>
        </section>

        <section id="service_section" class="mainSection ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header>
                            <h2 class="text-center text-white sectionheading centerHeadingBold">
                                <span class="centerHeading text-white"> Our </span>Services
                            </h2>
                            <hr class="line">
                        </header>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div id="service_categories">
             
                            <div id="service_categories_list">
                                <div class="service_category" style="background-color: rgb(211, 47, 104);">
                                    <a href="#">HTML5 Development
                                        <div class="triangle" style="display: block;"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">Php Web Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">Laravel Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">CodeIgnitor Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">WordPress Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">CMS Web Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">Mobile Website Development
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                                <div class="service_category">
                                    <a href="#">E-Commerce
                                        <div class="triangle"></div>
                                    </a>
                                </div>
                            </div>
                            <div id="service_category_desc_box" style="background-color: rgb(255, 255, 255);">
                                <div class="service_category_desc active">
                                    <img src="./images/html5.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">HTML5</span> DEVELOPMENT</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/php4.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">Php Web</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/laravel.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">Laravel</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/codeignitor.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">CodeIgnitor</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/wordpressblue.png" alt="">
                                    <div>
                                        <h3><span class="text-pink">WordPress</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="../images/3.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">CMS Web</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/mobile-website.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">Mobile Website</span> Development</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                                <div class="service_category_desc">
                                    <img src="./images/ecom.jpg" alt="">
                                    <div>
                                        <h3><span class="text-pink">E-Commerce</span></h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At eius vitae
                                            quaerat laboriosam possimus nam dicta voluptas asperiores vel
                                            consectetur animi repellendus, aliquid unde! Eligendi, libero commodi!
                                            Quae accusamus in, dolores optio eaque ducimus? Ipsum culpa omnis neque
                                            numquam maxime!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
            
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
        <section id="aboutus-highlighted-box">
            <div class="highlighted-card">
                <p class="">Customer satisfaction is our main <span>Focus</span>
                </p>
            </div>
        </section>

        {{-- ***********************Home Why Choose Us******************************* --}}

        <section id="aboutus-whychooseus" class="mainSection ">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="section-column sectioninfo col-12 col-lg-8 pe-5">

                            <header>
                                <div class="subtitle">Why Choose Us</div>
                                <div class="sectionTitle">PNR works to develop long-term working relationships with
                                    suppliers.</div>
                                <div class="line mx-0"></div>
                                <p class="content text-justify"></p>We pride ourselves on our ability to provide
                                flexibility while
                                working closely with customers to fulfil their changing requirements. PNR also works to
                                develop
                                long-term working relationships with parts and equipment suppliers to ensure cost efficiency
                                and
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
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="section-column col-12 col-lg-4">
                                            <div class="image">
                                                <img src="{{ url('/img/aboutus/2.jpg') }}" alt="" srcset=""
                                                    class="img-thumbnail">
                                            </div>
                                            {{-- <div class="overlay-card center-align">
                                        <p class="contentTitle text-white text-center">5 Year Of Working Experience</p>
                                        <p class="content text-white">We Crafted an aweso design library that is robust and intuitive to
                                            use.</p>
                                    </div> --}}
                                        </div>
                                        {{-- <div class="col-12 col-sm-4">
                                <div class="imagebox"><img src="img/aboutus/2.jpg" alt="" srcset="" class="img-thumbnail img-fluid"></div>
                            
                              </div> --}}

                                        <div class="col-12 col-sm-8 pt-3">
                                            <p class="content text-justify">Our skillful technical and procurement
                                                available resources make us uniquely positioned to be relied upon by many
                                                valued customers. </p>

                                        </div>

                                    </div>

                                </div>


                            </header>

                            <div class="pt-3 text-center">

                                <a class="btn buttonStyleSecondary ms-3" aria-current="page"
                                    href="{{ route('contact') }}">Read
                                    More</a>
                            </div>

                        </div>
                        <div class="section-column image-section col-12 col-lg-4">
                            <div class="imagebox-rounded">
                                <img src="{{ url('/img/aboutus/4.jpg') }}" alt="" srcset=""
                                    class="img-fluid">
                            </div>
                            {{-- <div class="overlay-card center-align">
                        <p class="contentTitle text-white text-center">5 Year Of Working Experience</p>
                        <p class="content text-white">We Crafted an aweso design library that is robust and intuitive to
                            use.</p>
                    </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- ***********************End Home Why Choose Us******************************* --}}
        {{-- **************************Services************* --}}
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
                            <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu,
                                urna
                                ac.
                                Vivamus dignissim sapien amet vivamu</p>
                        </div>
                    </div>

                </section>
            </div>
        </section>

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
        <section id="home-contactform" class="mainSection overlaySection">
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
                            <p class="content text-white">There are many variations of passages of Lorem Ipsum available,
                                but
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
                                            {!! Form::text('name', null, [
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
                                            {!! Form::text('organization', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'Organization',
                                            ]) !!}
                                            @if ($errors->has('organization'))
                                                <div class="text-danger pb-3 ps-3">{{ $errors->first('organization') }}
                                                </div>
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
                </div>
        </section>
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
        <section id="team" class="mainSection bg-grey">
            <header class="center-align">
                <div class="subtitle  ">Our Team</div>
                <div class="sectionTitle">Our Creative Team</div>
                <div class="line mx-0"></div>
                <p class="content pt-3 pb-5">There are many variations of passages of Lorem Ipsum available, but the
                    majority
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
        </section>
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

        <section id="progress" class="mainSection overlaySection">

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
        </section>

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
    </section>
@section('scripts')
@endsection
@endsection
