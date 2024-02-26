@extends('layouts.services-single')
@section('title')
    Pumps-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header ********************** --}}
@section('topHeader')

    
@endsection
<!-- ========== Start Back ground image name of top header Section ========== -->
@section('bg-image')
    'img/services/pumps.jpg'
@endsection
<!-- ========== End Back ground image of top header Section ========== -->
<!-- ========== Start Service Name Section ========== -->
@section('serviceName')
    PUMPS
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

    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
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
    </article>
    <article class="row bg-light">
        <div class="col-12 col-lg-7 article-section">
            <header>
                <div class="subtitle"> RECIPROCATING PUMPS</div>
            </header>
            <p style="text-align: justify;">Major overhaul of Reciprocating, Horizontal duplex, triplex, quintuplex
                and septuplex reciprocating power pumps, designed according to API 674 standards double-acting
                pumps.

            </p>
        </div>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
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

@endsection

@section('service-list')
   @endsection
@section('supply-list')

@endsection
