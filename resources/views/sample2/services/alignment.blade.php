@extends('layouts.services-single')
@section('title')
    Alignment-PNR Services
@endsection

@section('mainSection')

    {{-- ************************Top Header ********************** --}}
@section('topHeader')

    
@endsection
<!-- ========== Start Back ground image name of top header Section ========== -->
@section('bg-image')
    {{-- 'img\services\alignment\alignment.jpg' --}}
    'img/services/alignment/alignment.jpg'
@endsection
<!-- ========== End Back ground image of top header Section ========== -->
<!-- ========== Start Service Name Section ========== -->
@section('serviceName')
    ALIGNMENT
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
    services-alignment
@endsection


@section('mainContent')

    <article class="row">
        <p>We have the Certified Alignment Specialist for the Shaft Alignment, Casing Alignment of Heavy-duty rotary equipment for the solution of high vibrations. Our Professionals have the hand on expertise for the Shaft Alignments.</p>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ asset('img\services\alignment\Alignments-2.jpg') }}" alt="" srcset="" class="">
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
                <div class="subtitle">RIM & FACE ALIGNMENT</div>
            </header>
            <p style="text-align: justify;">Our Experts are well Trained and certified From World Class Training Centers and we are performing Shaft Alignments with Double dials on the face to Minimize the errors due to axial floats of Rotary equipment.
            </p>
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
                <div class="subtitle">ADVANCE ALIGNMENT</div>
            </header>
            <p style="text-align: justify;">We are providing the advance Alignment services at the time of installation of rotary equipment.

            </p>
        </div>
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ asset('img\services\alignment\Alignments-1.jpg') }}" alt="" srcset="" class="">
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
    <article class="row">
        <div class="col-12 col-lg-5 section-col-top-padding figure-section">
            <div class="image-box">
                <img src="{{ asset('img\services\alignment\Alignments-4.jpg') }}" alt="" srcset="" class="">
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
                <div class="subtitle">LASER ALIGNMENT</div>
            </header>
            <p style="text-align: justify;">
                We have the well-trained certified Leaser Alignment Specialist equipped with the Latest Laser Alignment Tools.
            
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
