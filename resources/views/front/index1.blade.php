@extends('layouts.frontLayout')
@section('title')
    Home-PNR Services
@endsection

@section('mainSection')
    {{-- <section id="intro" class="mainSection overlaySection">
        <div style="flex-basis:50%;">
            <div class="container">
                <div class="row">
                    <div class=" col-md-6 col-12 text-white">left</div>
                    <div class=" col-md-6 col-12 text-white">right</div>
                </div>
            </div>
        </div>
        <div style="flex-basis:50%;">image</div>



    </section> --}}
    <section id="home-aboutus" class="mainSection ">
        <div class="container">
            <div class="row">
                <div class="image-section col-12 col-lg-6">
                    <div class="image">
                        <img src="{{ url('/images/aboutus-intro.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="overlay-card center-align">
                        <p class="contentTitle text-white text-center">5 Year Of Working Experience</p>
                        <p class="content text-white">We Crafted an aweso design library that is robust and intuitive to
                            use.</p>
                    </div>
                </div>
                <div class="section-column rightSection col-12 col-lg-6">

                    <header>
                        <div class="subtitle">About Us</div>
                        <div class="sectionTitle">Welcome to PNR Services</div>
                        <div class="line mx-0"></div>
                        <p class="content text-justify">PNR offers OEM experienced Turbogenerators specialists to</p>

                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i>power generation companies</li>
                            <li><i class="bi bi-check-circle-fill"></i>oil
                                & gas</li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>fertilizers
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i> cement
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i> much more ...
                            </li>
                        </ul>


                    </header>
                    {{-- <div class="section-content d-flex justify-content-around">

                        <div class="aboutus-card text-center">

                            <p class="sectionTitle">30K</p>
                            <p class="contentTitleBold"> Happy Client</p>
                            <p class="content" style="text-align: justify;">Our clients also enjoy customized training
                                solutions on asset maintenance , commissioning
                                and troubleshooting.</p>
                        </div>
                        <div class="aboutus-card text-center">

                            <p class="sectionTitle">42K</p>
                            <p class="contentTitleBold">Project Done</p>
                            <p class="content" style="text-align: justify;">We supply our clients multi-disciplined
                                expertise
                                with field engineers of electrical, mechanical, elctromechanical and instrumentation
                                disciplines.</p>
                        </div>
                    </div> --}}
                    <div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="mission-tab" data-toggle="tab" href="#mission" role="tab"
                                    aria-controls="mission" aria-selected="true">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vision-tab" data-toggle="tab" href="#vision" role="tab"
                                    aria-controls="vision" aria-selected="false">Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="client-tab" data-toggle="tab" href="#client" role="tab"
                                    aria-controls="client" aria-selected="false">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="project-tab" data-toggle="tab" href="#project" role="tab"
                                    aria-controls="project" aria-selected="false">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="team-tab" data-toggle="tab" href="#team" role="tab"
                                    aria-controls="coteamntact" aria-selected="false">Team</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                aria-labelledby="mission-tab">Mission</div>
                            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">Vision
                            </div>
                            <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                                Our clients also enjoy customized training solutions
                                on asset maintenance , commissioning
                                and troubleshooting.
                            </div>
                            <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                                We supply our clients multi-disciplined expertise
                                with field engineers of electrical, mechanical, elctromechanical and instrumentation
                                disciplines.
                            </div>
                            <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="conteamtact-tab">
                                These customized trainings are built by engineers who have extensive
                                experience and are among the very best in the world.
                            </div>
                        </div>

                    </div>
                    <div class="pt-3 text-center">
                        <button class="buttonStyle ">Read More</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

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
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
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
                        {{ Form::open( array('route' => 'contactmail', 'method' => 'post')) }}
                        {{ Form::token() }}
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- {!! Form::label('title', 'Blog Title') !!} --}}
                                        {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name'
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
                                    <div class="" >{!! Form::submit('submit', ['class' => 'buttonStyleSecondaryDark']) !!}</div>
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
@section('scripts')
    <script>
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection
@endsection
