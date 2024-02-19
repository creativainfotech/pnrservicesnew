@extends('layouts.frontLayout')
@section('title')
    Contact-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    @endsection
@section('mainSection')
    <section id="contactPage">
        <section id="" class="mainSection overlaySection ">
            <div class="container">
                <header class="center-align">
                    {{-- <div class="subtitle  ">Get In Touch</div> --}}
                    <div class="sectionTitle text-white">Contact Us</div>
                    {{-- <div class="line mx-0"></div>  --}}
                    {{-- <p class="content  text-white">There are many variations of passages of Lorem Ipsum available, but
                        the majority have
                        suffered alteration in some form.</p> --}}
                </header>
            </div>
        </section>
        <section class="pt-5">
            <div class="container ">
                <header class="center-align">
                    <div class="subtitle  ">Get In Touch</div>
                    <div class="sectionTitle">Ready To Get Started</div>
                    <div class="line mx-0"></div>
                    <p class="content">There are many variations of passages of Lorem Ipsum available, but
                        the majority have
                        suffered alteration in some form.</p>
                </header>
            </div>
        </section>
        {{-- **************************Team************* --}}
        {{-- <section id="contactdetailcard" class="mainSection">
          
           
            <div class="container">
                <section class="card-group-horizontal">

                    <div class="cardbox">
                        <div class="contentTitle">Email Us</div>
                        <div class="image-card-horizontal shadow-sm bg-body rounded">
                            <div class="image"> <img src="{{ asset('images/gegrid/contact5.jpg') }}" alt="...">
                            </div>
                            <div class="card-content">
                               
                                <div class="contentTitle">Select a Topic</div>
                                <div>  <a href="http://">Get a Quote</a></div>
                             
                               <div><a href="http://">Get Product Support</a></div>

                            </div>
                        </div>
                    </div>
          
            <div class="cardbox">
                <div class="contentTitle">Contact Detail</div>
                <div class="image-card-horizontal shadow-sm  bg-body rounded">
                    <div class="image"> <img src="{{ asset('images/gegrid/contact6.jpg') }}" alt="...">
                    </div>
                    <div class="card-content">

                        
                        <div class="contentTitle">Call Us</div>
                        <div>
                            <p>1-877-605-6777</p>
                            <p>Toll Free in North America</p>
                        </div>
                        <div>
                            <p>1-877-605-6777</p>
                            <p>Toll Free in North America</p>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="cardbox">
                <div class="contentTitle">Address</div>
                <div class="image-card-horizontal shadow-sm  bg-body rounded">
                    <div class="image"> <img src="{{ asset('images/gegrid/contact6.jpg') }}" alt="...">
                    </div>
                    <div class="card-content">

                       
                        <div class="contentTitle">Reach Here</div>
                       <div>
                        <p>AI Shohada Road, AI Hamara Industrial Zone-FZ, Ras AI Khaimah, United Arab Emirates</p>
                       </div>

                    </div>
                </div>
          
            </div>
           </section>
        </div>
    </section> --}}

        {{-- <section class="pt-5">
        <div class="container">
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
    </section> --}}
        <section id="" class="mainSection">
            <div class="container">
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 bg-grey">
                        <div class="container formSection">

                            {{ Form::open(['route' => 'contactmail', 'method' => 'post']) }}
                            {{ Form::token() }}
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {{-- {!! Form::label('title', 'Blog Title') !!} --}}
                                            {!! Form::text('fname', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'First Name',
                                            ]) !!}
                                            @if ($errors->has('fname'))
                                                <div class="text-danger pb-3 ps-3">{{ $errors->first('fname') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {{-- {!! Form::label('title', 'Blog Title') !!} --}}
                                            {!! Form::text('lname', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'Last Name',
                                            ]) !!}
                                            @if ($errors->has('lname'))
                                                <div class="text-danger pb-3 ps-3">{{ $errors->first('lname') }}</div>
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
                                    <div class="col-12 col-md-6">
                                        {{-- {!!  Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S', ['class' => 'form-control', 'size'=>"3"]); !!}
                                   {!! Form::select('') !!}
                                    <select class="form-select" size="3" aria-label="size 3 select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Six</option>
                                        <option value="6">FiveThree</option>
                                      </select> --}}
                                        <input type="tel" id="phone">
                                        <div class="text-danger pb-3 ps-3"> <span id="valid-msg" class="hide text-success">✓ Valid</span>
                                        </div>
                                        <div class="text-danger pb-3 ps-3"> <span id="error-msg" class="hide"></span>
                                        </div>
                                        <span id="valid-msg" class="hide text-success">✓ Valid</span>
                                        <span id="error-msg" class="hide"></span>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                        @if ($errors->has('number'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('number') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">{!! Form::textarea('message', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Your Message',
                                        'rows' => '3',
                                        'cols' => '15',
                                    ]) !!}
                                        @if ($errors->has('message'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center ">{!! Form::submit('submit', ['class' => 'btn flex-grow-1']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>


                    <div class=col-lg-4 id="contactPage">

                        <section class="contactDesc">
                            {{-- <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.549022844197!2d55.795833574583156!3d25.686240211720698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef60a61412b1615%3A0x8382e57f1d189185!2sRakez%20AlHamra%20Industrial%20Zone!5e0!3m2!1sen!2sin!4v1683450397403!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> --}}
                            <header>
                                <div class="sectionTitle text-white">Catch Us Here</div>
                                <div class="line mx-0 "></div>

                            </header>
                            <section class="card-group-vertical">

                                <div class="icon-card-horizontal">
                                    <div class="cardIcon">
                                        <div class="hex">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p>+33678700601</p>
                                        <p>+971556985010</p>

                                    </div>
                                </div>
                                <div class="icon-card-horizontal">
                                    <div class="cardIcon">
                                        <div class="hex">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p>reinier.koorenhof@pnr.services</p>
                                        <p> junaid.ali@pnr.services</p>

                                    </div>
                                </div>
                                <div class="icon-card-horizontal">
                                    <div class="cardIcon">
                                        <div class="hex">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p>AI Shohada Road, AI Hamara
                                            Industrial Zone-FZ, Ras AI
                                            Khaimah, United Arab Emirates</p>


                                    </div>
                                </div>

                            </section>


                            <section>
                                <div class="socialicons">
                                    <div class="socialitem "><a href="http://facebook.com"><i
                                                class="bi bi-facebook"></i></a>
                                    </div>
                                    <div class="socialitem"><a href="http://"><i class="bi bi-instagram"></i></a></div>
                                    <div class="socialitem"><a href="http://"><i class="bi bi-twitter"></i></a></div>
                                    <div class="socialitem"><a href="http://"><i class="bi bi-twitter "></i></a></div>


                            </section>
                        </section>
                    </div>
                </div>
            </div>

        </section>
        <section id="verticalcard" class="mainSection">
            <header class="center-align">
                {{-- <div class="subtitle  ">Contact Us</div> --}}
                <div class="sectionTitle">Self Serve Options</div>
                <div class="line mx-0"></div>
                {{-- <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p> --}}
            </header>
            <div class="container">
                <section class="card-group-horizontal">

                    <div class="image-card-vertical">
                        <div class="image"> <img src="{{ asset('images/gegrid/contact1.jpg') }}" class="card-img-top"
                                alt="...">

                        </div>
                        <div class="card-content center-align">
                            {{-- <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div> --}}
                            <p class="contentTitleSmall my-3 ">Online Resources</p>
                            <p class="content text-center">Access our wide range of manuals, brochures, software, and
                                drawings.
                            </p>
                            <a href="" class="buttonStyle">View Resources</a>
                        </div>

                    </div>
                    <div class="image-card-vertical">
                        <div class="image"> <img src="{{ asset('images/gegrid/contact2.jpg') }}" class="card-img-top"
                                alt="...">

                        </div>
                        <div class="card-content center-align">
                            {{-- <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div> --}}
                            <p class="contentTitleSmall my-3 ">Pricing & Configuration</p>
                            <p class="content">Find, configure and price products on the Grid Solutions Online Store.</p>
                            <a href="" class="buttonStyle">View Online Store</a>
                        </div>

                    </div>
                    <div class="image-card-vertical">
                        <div class="image"> <img src="{{ asset('images/gegrid/contact3.jpg') }}" class="card-img-top"
                                alt="...">

                        </div>
                        <div class="card-content center-align">
                            {{-- <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div> --}}
                            <p class="contentTitleSmall my-3 ">Order Status</p>
                            <p class="content">Look up your order and see tracking info. Find contacts by product line.</p>
                            <a href="" class="buttonStyle">View Order Status</a>
                        </div>

                    </div>
                    <div class="image-card-vertical">
                        <div class="image"> <img src="{{ asset('images/gegrid/contact4.jpg') }}" class="card-img-top"
                                alt="...">

                        </div>
                        <div class="card-content center-align">
                            {{-- <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div> --}}
                            <p class="contentTitleSmall my-3 ">Careers</p>
                            <p class="content">There is a spot for you here at GE. Explore the possibilities.</p>
                            <a href="" class="buttonStyle">Explore Careers</a>
                        </div>

                    </div>
                </section>
            </div>
        </section>
        <section class="map" id="contactMap">
            <div class="container">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.549022844197!2d55.795833574583156!3d25.686240211720698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef60a61412b1615%3A0x8382e57f1d189185!2sRakez%20AlHamra%20Industrial%20Zone!5e0!3m2!1sen!2sin!4v1683450397403!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
    <script>
        //   var input = document.querySelector("#phone");
        var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
        // Error messages based on the code returned from getValidationError
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
      
        var intl = window.intlTelInput(input, {
             initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
           

            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        });
        //   var reset = function() {
        //     input.classList.remove("error");
        //     errorMsg.innerHTML = "";
        //     errorMsg.classList.add("hide");
        //     validMsg.classList.add("hide");
        // };

        // Validate on blur event
        // input.addEventListener('blur', function() {
        //     reset();
        //     if(input.value.trim()){
        //         if(intl.isValidNumber()){
        //             validMsg.classList.remove("hide");
        //         }else{
        //             input.classList.add("error");
        //             var errorCode = intl.getValidationError();
        //             errorMsg.innerHTML = errorMap[errorCode];
        //             errorMsg.classList.remove("hide");
        //         }
        //     }
        // });

        // Reset on keyup/change event
        // input.addEventListener('change', reset);
        // input.addEventListener('keyup', reset);
    </script>
@endsection
