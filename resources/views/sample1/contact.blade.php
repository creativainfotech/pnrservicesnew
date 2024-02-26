@extends('layouts.frontLayout')
@section('title')
    Contact-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
    <style>
        .hide {
            display: none;
        }

        .iti {
            display: block;
        }
    </style>
@endsection
@section('mainSection')
    <section id="" class="mainSection overlaySection ">
        <div class="container">
            <header class="center-align">
                {{-- <div class="subtitle  ">Get In Touch</div> --}}
                <div class="sectionTitle text-white">Contact Us</div>
                {{-- <div class="line mx-0"></div> --}}
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
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col">

                    @if (session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                    @endif
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </section>
    <section id="contactPage" class="mainSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-grey">
                    <div class="container formSection">
                        <div class="bg-white p-5 rounded shadow">

                            {{ Form::open(['route' => 'contactmail', 'method' => 'post']) }}
                            {{ Form::token() }}
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">

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
                                        <div class="form-group">
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}
                                            <!--</div>-->
                                            <!--  <div class="col-12">-->
                                            @if ($errors->has('email'))
                                                <div class="text-danger pb-3 ps-3">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="tel" id="phone" class="form-control" name="number">
                                            <div class="text-sucess pb-2 pt-1 ps-2">
                                                @if ($errors->has('number'))
                                                    <div class="text-danger pb-3 ps-2">{{ $errors->first('number') }}
                                                    </div>
                                                @endif
                                                <span id="valid-msg" class="hide text-success">✓ Valid</span>
                                            </div>
                                            <div class="text-danger pb-2 pt-1 ps-3"> <span id="error-msg"
                                                    class="hide"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            {!! Form::textarea('message', null, [
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
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center ">{!! Form::submit('submit', ['class' => 'btn flex-grow-1']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>


                <div class=col-lg-4 id="contactPage">
                    <section class="contactDesc">

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
                                <div class="socialitem "><a href="http://facebook.com"><i class="bi bi-facebook"></i></a>
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
            separateDialCode: true,

            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        });
        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // Validate on blur event
        input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
                if (intl.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    var errorCode = intl.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });

        // Reset on keyup/change event
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
    </script>
@endsection
