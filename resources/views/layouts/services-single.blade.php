@extends('layouts.frontLayout')
@section('title')
    About Us-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sample1/section-divider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample1/services.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/temp.css') }}"> --}}
@endsection
{{-- ************inherit from frontLayout****************** --}}

@section('mainSection')
    <section id="serviceTopHeader" class="position-relative">
        <div class="top-header shape-parent"
        style="background-image:linear-gradient(to right,rgba(48,102,112,0.8),rgba(48,102,112,0.8)),url(@yield('bg-image'));">
       
        <div class="shape shape-bottom "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
            <path style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
            <path style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
            <path style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
            <path d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
        </svg></div>
        {{-- ,url(@yield('bg-image')) --}}    </div>
       
        <h1 id="serviceName">@yield('serviceName')</h1>
    </section>
    <section >
        <div class="container-fluid  mt-5 pt-5" id="single-service">
            <div class="row ">
                <div class="col-12 col-md-9 ">
                     <section id="@yield('service-id')" class="mainSection">
                        <div class="container-fluid container-lg">
                            @yield('mainContent')
                        </div>
                    </section>
                    {{-- ****************************OEM************************* --}}
                    <section class="mainSection">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-center ">Our Learners Work at Global Companies & Startups</h3>
                                    <div id="oem" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/abb.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/alstom.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/andritz.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/atlas-copco.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class=" img-fluid " src="{{ asset('img/oems/avr.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/baker.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/brush.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/dresser-rand.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/elliott.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/emerson.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/flender.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/flowserve.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/ge-oil.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/ge.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/imi.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/ingersoll-rand.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/kaeser.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/kitz.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/ksb.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/lt-valves.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/man.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/mitsubishi.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/noname.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/nord.jpeg') }}" alt=""
                                                srcset="">
                                        </div>

                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/renk.jpeg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/renold-gears.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/santasalo.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/sew-eurodrive.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/siemens.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/sumitomo.jpeg') }}"
                                                alt="" srcset="">
                                        </div>
                                        <div class="item">
                                            <img class="" src="{{ asset('img/oems/woodward.jpeg') }}"
                                                alt="" srcset="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- ****************************End OEM************************* --}}

                </div>


                {{-- ***************Right Side Bar****************** --}}
                <div class="col-12 col-md-3 rightsidebar">
                    <div class="container">
                        <div class="row widget serviceListBox">
                            <div class="col-12">
                                <header>
                                    <div class="sectionTitle">Our Services</div>
                                    <div class="double-line">
                                        <div class="line mx-0 d-inline-block"style="width: 15px"></div>
                                        <div class="line mx-0 d-inline-block"style="width: 50px"></div>
                                    </div>

                                </header>

                                <ul class="serviceList">


                                    <li><a href="">Turbogenerator</a></li>
                                    <li><a href="">Turbine</a></li>
                                    <li><a href="">Compressor</a></li>
                                    <li><a href="">Gearbox</a></li>
                                    <li><a href="">Valve</a></li>
                                    <li><a href="">Blower</a></li>
                                    <li><a href="">Heat Exchanger</a></li>
                                    <li><a href="">Alignment</a></li>
                                    <li><a href="">Retrofit</a></li>
                                    <li><a href="">Design</a></li>
                                    <li><a href="">Training</a></li>
                                    @yield('service-list')

                                </ul>
                            </div>
                        </div>

                        <div class="row widget supplyListBox">
                            <div class="col-12">
                                <header>
                                    <div class="sectionTitle">Our Supplies</div>
                                    <div class="double-line">
                                        <div class="line mx-0 d-inline-block"style="width: 15px"></div>
                                        <div class="line mx-0 d-inline-block"style="width: 50px"></div>
                                    </div>

                                </header>

                                <ul class="supplyList">
                                    <li><a href="">Parts</a></li>
                                    <li><a href="">Tools & Equipments</a></li>
                                    <li><a href="">Relay & Control Panels</a></li>
                                    <li><a href="">Switchgears</a></li>
                                    <li><a href="">PMS</a></li>
                                    <li><a href="">MV Motors</a></li>
                                    {{-- <li><a href="">Power Transformers</a></li> --}}
                                    @yield('supply-list')

                                </ul>
                            </div>
                        </div>


                        <div class="row widget contactListBox">
                            <div class="col-12">

                                <header>
                                    <div class="sectionTitle">Contact Us</div>
                                    <div class="double-line">
                                        <div class="line mx-0 d-inline-block"style="width: 15px"></div>
                                        <div class="line mx-0 d-inline-block"style="width: 50px"></div>
                                    </div>

                                </header>

                                {{-- <div class="sidebar-contact-container">
                                <table>
                                    
                                    <tr class="contact-list-item">
                                        <td class="contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </td>
                                        <td class="contact-text">sales@pnr.services</td>
                                    </tr>
                                    <tr class="contact-list-item">
                                        <td class="contact-icon"><i class="fas fa-globe"></i></td>
                                        <td class="contact-text">www.pnr.services</td>
                                    </tr>
                                    <tr class="contact-list-item">
                                        <td class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </td>
                                        <td class="contact-text">
                                            AI Shohada Road, AI Hamara Industrial Zone-FZ, Ras AI
                                            Khaimah, United Arab Emirates
                                        </td>
                                    </tr>
                                </table>
                            </div> --}}
                                <div class="call-us-container">
                                    <div class="content">
                                        <div class="textbox">Got any Questions? Call us Today!</div>
                                        <div class="contactNoBox">
                                            <div class="contactIcon"><i class="fas fa-phone-alt"></i></div>
                                            <div class="contactNo">+971556985010</div>
                                        </div>
                                        <div class="contactNoBox">
                                            <div class="contactIcon"><i class="fas fa-phone-alt"></i></div>
                                            <div class="contactNo">+33678700601</div>
                                        </div>
                                    </div>


                                </div>

                                {{-- <div class="call-us-container">
                                <div class="overlay">
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    Call Us Today
                                    
                                </div>
                            </div> --}}
                            </div>
                        </div>
                        <div class="row widget brochureListBox">
                            <div class="col-12">
                                <header>
                                    <div class="sectionTitle">Our Brochures</div>
                                    <div class="double-line">
                                        <div class="line mx-0 d-inline-block"style="width: 15px"></div>
                                        <div class="line mx-0 d-inline-block"style="width: 50px"></div>
                                    </div>

                                </header>
                                <ul class="brochureList">
                                    <li><a href=""><i class="fas fa-download pe-3 fs-3"></i>Download Brochure</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('rightSideBar')
                </div>
                {{-- ***************End Right Side Bar****************** --}}
               
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
