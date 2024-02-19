@extends('layouts.frontLayout')
@section('title')
    About Us-PNR Services
@endsection

@section('mainSection')
    @yield('topHeader')
    <div class="container single-service">
        <div class="row">
            <div class="col-12 col-sm-9">
                @yield('mainContent')
            </div>
            <div class="col-12 col-sm-3 rightsidebar">
                <div class="container">
                    <div class="row serviceListBox">
                        <div class="col-12">
                            <div class="sidebar-title-container">
                                <h3 class="sidebar-title">Our Services</h3>
                                <div class="sidebar-underline">
                                    <span class="line" style="width: 15px"></span><span class="line"
                                        style="width: 50px"></span>
                                </div>
                            </div>
                            <ul class="serviceList">
                                @yield('service-list')

                            </ul>
                        </div>
                    </div>
                    <div class="row contactListBox">
                        <div class="col-12">
                            <div class="sidebar-title-container">
                                <h3 class="sidebar-title">Contact Us</h3>
                                <div class="sidebar-underline">
                                    <span class="line" style="width: 15px"></span><span class="line"
                                        style="width: 50px"></span>
                                </div>
                            </div>
                            <div class="sidebar-contact-container">
                                <table>
                                    {{-- <tr class="contact-list-item">
                                        <td class="contact-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </td>
                                        <td class="contact-text">+971556985010, +33678700601</td>
                                    </tr> --}}
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
                    <div class="row brochureListBox">
                        <div class="col-12">
                             <div class="sidebar-title-container">
                                <h3 class="sidebar-title">Our Brochures</h3>
                                <div class="sidebar-underline">
                                    <span class="line" style="width: 15px"></span><span class="line"
                                        style="width: 50px"></span>
                                </div>
                            </div>
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
