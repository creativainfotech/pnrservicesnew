@extends('layouts.services-single')
@section('title')
    Pumps-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header Image********************** --}}
@section('topHeader')
    <div class="top-header" style="background-image: url({{ asset('img/services/pumps.jpg') }});">
    </div>
@endsection
{{-- ************************End Top Header Image********************** --}}

{{-- ************************Service Name********************** --}}
@section('serviceName')
    Pumps
@endsection
{{-- ************************End Service Name********************** --}}
@section('mainContent')


    <section id="services-pumps" class="mainSection">

        <div class="container-fluid container-lg ">
            <div class="row">
                <div class="col-12 col-lg-5 section-col-top-padding">
                    <div class="row g-2">
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
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle">CENTRIFUGAL PUMPS</div>

                    </header>
                  

                    <p style="text-align: justify;">Major overhauling of <strong>Centrifugal Pumps.</strong> Centrifugal,
                        Vertical Mixed Flow, Vacuum pumps, Chemical Feeds, etc.
                        Cryogenic Duty vertical centrifugal multistage pumps. Mechanical Seals (Single, Double and Tandem)
                        Disassembly/assembly, workshop checks, refurbishment , testing and installation.
                    </p>

                    <ul class="listbox">
                        <li class="list-item">Boiler Feed Water Pumps (Multistage centrifugal pumps)</li>
                        <li class="list-item">Ammine Circulation Pumps for Co2 Removal</li>
                        <li class="list-item">Cooling Tower Centrifugal Pumps</li>
                    </ul>
                   
                </div>
            </div>
            <div class="row bg-light">
               
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle"> RECIPROCATING PUMPS</div>

                    </header>
                  

                    <p style="text-align: justify;">Major overhaul of Reciprocating, Horizontal duplex, triplex, quintuplex
                        and septuplex reciprocating power pumps, designed according to API 674 standards double-acting
                        pumps.

                    </p>




                </div>
                <div class="col-12 col-lg-5 section-col-top-padding">
                    <div class="row g-2">
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
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>







@endsection

@section('service-list')
    {{-- 

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
<li><a href="">Training</a></li> --}}

@endsection
@section('supply-list')

@endsection
