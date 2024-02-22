@extends('layouts.frontLayout')
@section('title')
    About Us-PNR Services
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/temp.css') }}"> --}}
@endsection
{{-- ************inherit from frontLayout****************** --}}

@section('mainSection')  
    @yield('topHeader')
    <div class="container-fluid single-service  servicePage">

        <div class="row">    
            <div class="col-12 col-sm-9 ">
                 {{-- *********************Display Name of Service********************* --}}
                <header class="">                        
                    <div class="sectionTitle ">@yield('serviceName')
                    </div>
                    <div class="double-line">
                        <div class="line mx-0 d-inline-block"style="width: 15px"></div>
                        <div class="line mx-0 d-inline-block"style="width: 50px"></div>
                    </div>  
                </header>
                {{-- *********************End Display Name of Service********************* --}}
                <div class="container-fluid container-lg z-3 position-relative">
                @yield('mainContent')
            </div>
            <div class="col-12 col-sm-3 rightsidebar">
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
                                <li><a href="">Power Transformers</a></li>
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
                                <li><a href=""><i class="fas fa-download pe-3 fs-3"></i>Download Brochure</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                @yield('rightSideBar')
            </div>
        </div>
    </div>


@section('scripts')
@endsection
@endsection
