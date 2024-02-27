@extends('layouts.services-single')
@section('title')
    Heat Exchanger-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header ********************** --}}
@section('topHeader')

    
@endsection
<!-- ========== Start Back ground image name of top header Section ========== -->
@section('bg-image')
    'img/services/heat-exchanger/heat-exchanger.jpg'
@endsection
<!-- ========== End Back ground image of top header Section ========== -->
<!-- ========== Start Service Name Section ========== -->
@section('serviceName')
    HEAT EXCHANGER
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
    services-heat-exchanger
@endsection


@section('mainContent')

    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ asset('img/services/heat-exchanger/heat-exchanger.jpg') }}" alt="" srcset="" class="">
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
                <div class="subtitle">SHEL AND TUBE HEAT EXCHANGERS</div>
            </header>
            <p style="text-align: justify;">Shell and Tube heat exchangers hydrotests, Bundle tests,Bundle replacement and tubes blinding and repairs of all type of I-Type,U-Types exchangers. Installations of exchangers with Hydro jetting services of world’s leading shell and tube heat exchanger OEM’s. </p>
            {{-- <ul class="listbox">
                <li class="list-item">Boiler Feed Water Pumps (Multistage centrifugal pumps)</li>
                <li class="list-item">Ammine Circulation Pumps for Co2 Removal</li>
                <li class="list-item">Cooling Tower Centrifugal Pumps</li>
            </ul> --}}
        </div>
    </article>
    <article class="row bg-light">
        <div class="col-12 col-lg-7 article-section">
            <header>
                <div class="subtitle">PLATE TYPE HEAT EXCHANGERS</div>
            </header>
            <p style="text-align: justify;">Gas turbines, Steam Turbines and generators oil cooling systems for the gasketed, brazed, welded, and semi-welded exchangers complete maintenance .

            </p>
        </div>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ asset('img/services/heat-exchanger/heat-exchanger.jpg') }}" alt="" srcset="" class="">
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
