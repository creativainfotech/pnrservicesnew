@extends('layouts.services-single')
@section('title')
    Turbines & Engines-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header ********************** --}}
@section('topHeader')

    
@endsection
<!-- ========== Start Back ground image name of top header Section ========== -->
@section('bg-image')
    'img/services/turbine/turbine-engines-2.jpg'
@endsection
<!-- ========== End Back ground image of top header Section ========== -->
<!-- ========== Start Service Name Section ========== -->
@section('serviceName')
   TURBINES & ENGINES
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
    services-turbines
@endsection


@section('mainContent')

    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{asset('img/services/turbine/turbine-engines-1.jpg') }}" alt="" srcset="" class="">
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
                <div class="subtitle">TURBINES & ENGINES</div>
            </header>
            <p style="text-align: justify;">Major & Minor Overhauling, Boroscope, Troubleshooting Turbine Control System woodward, Mark VI , Mark VIe , Hot Section replacement , complete erection, installation and commissioning services for frame size and aero derivative turbines and engines.
            </p>
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
