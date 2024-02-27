@extends('layouts.services-single')
@section('title')
    Turbogenerator-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header ********************** --}}
@section('topHeader')

    
@endsection
<!-- ========== Start Back ground image name of top header Section ========== -->
@section('bg-image')
    'img/services/turbogenerator/turbogenerators.jpg'
@endsection
<!-- ========== End Back ground image of top header Section ========== -->
<!-- ========== Start Service Name Section ========== -->
@section('serviceName')
    TURBOGENERATOR
@endsection
<!-- ========== End Service Name Section ========== -->


{{-- ************************End Top Header********************** --}}


{{-- ************************Top Header Image********************** --}}
{{-- @section('articleImage')
  <div class="top-header" style="background-image: url({{ asset('img/services/pumps.jpg') }});">
  </div>
@endsection --}}
{{-- ************************End Top Header Image********************** --}}

@section('service-id')
    services-pumps
@endsection
@section('mainContent')
{{-- **********Service 1 --}}
    <article class="row">
        <p>We offer following specialized services of complete range of Turbogenerators of following OEMs.</p>
           
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbogenerator/turbogenerators-1.jpg') }}" alt="" srcset="" class="">
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
            <header>
                <div class="subtitle">Commissioning Services</div>
            </header>
            <p style="text-align: justify;">Turbogenerators, AVR, Protection Relays, synchronizers. </p>
            {{-- <ul class="listbox">
                <li class="list-item">Boiler Feed Water Pumps (Multistage centrifugal pumps)</li>
                <li class="list-item">Ammine Circulation Pumps for Co2 Removal</li>
                <li class="list-item">Cooling Tower Centrifugal Pumps</li>
            </ul> --}}
        </div>
    </article>
    {{-- **********Service 2 --}}
    <article class="row bg-light">
        <div class="col-12 col-lg-7 article-section">
            <header>
                <div class="subtitle">Operations & Maintenance</div>
            </header>
            <p style="text-align: justify;">A, B & C inspection Elcid, PD, Tan delta, Boroscope, RSO, DLRO.

            </p>
        </div>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbogenerator/turbogenerators-2.jpg') }}" alt="" srcset="" class="">
            </div>
            {{-- <div class="row ">
                <div class="col-12 col-sm-6 ">
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
                <div class="col-12  " >
                    <div class="image-box">
                        <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                    </div>
                </div>
            </div> --}}


        </div>


    </article>
    {{-- **********Service 3 --}}
    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbogenerator/turbogenerators-1.jpg') }}" alt="" srcset="" class="">
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
           <header>
                <div class="subtitle">Retrofit & Assets Upgrade Services</div>
            </header>
            <p style="text-align: justify;">Excitation system, protection and control system   {{-- <ul class="listbox">
                <li class="list-item">Boiler Feed Water Pumps (Multistage centrifugal pumps)</li>
                <li class="list-item">Ammine Circulation Pumps for Co2 Removal</li>
                <li class="list-item">Cooling Tower Centrifugal Pumps</li>
            </ul> --}}
        </div>
    </article>
    {{-- **********Service 4 --}}
    <article class="row bg-light">
        <div class="col-12 col-lg-7 article-section">
            <header>
                <div class="subtitle">Parts and Materials</div>
            </header>
            <p style="text-align: justify;">Bearings, AVR, inspection kits, relays and much more  
            </p>
        </div>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbogenerator/turbogenerators-2.jpg') }}" alt="" srcset="" class="">
            </div>
            {{-- <div class="row ">
                <div class="col-12 col-sm-6 ">
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
                <div class="col-12  " >
                    <div class="image-box">
                        <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                    </div>
                </div>
            </div> --}}
        </div>
    </article>
    {{-- **********Service 5 --}}
    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbogenerator/turbogenerators-1.jpg') }}" alt="" srcset="" class="">
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
            <header>
                <div class="subtitle">Lifecycle Management</div>
            </header>
            <p style="text-align: justify;">Customized Trainings of operation and maintenance crew
                {{-- <ul class="listbox">
                <li class="list-item">Boiler Feed Water Pumps (Multistage centrifugal pumps)</li>
                <li class="list-item">Ammine Circulation Pumps for Co2 Removal</li>
                <li class="list-item">Cooling Tower Centrifugal Pumps</li>
            </ul> --}}
        </div>
    </article>

@endsection

@section('service-list')
   @endsection
@section('supply-list')

@endsection
