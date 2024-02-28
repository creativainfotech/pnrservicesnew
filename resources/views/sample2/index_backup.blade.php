@extends('layouts.mainLayout')
@section('title')
    Home-PNR Services
@endsection
@section('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/sample1/home-carousel.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/sample1/square-moving-background.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/sample1/rotating-circle.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/sample2/theme-punch-settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample2/home.css') }}">
@endsection

</style>
@section('mainSection')
    <!-- ********************Sample2 Bootstrap Carousel************ -->
    <div id="particles-js" style="height: 60vh;"></div>
    <div class="tp-banner-container">
        <div class="tp-banner">

            <ul>
                <!-- ========== StartFirst Slide ========== -->
                <li data-transition="bounce" data-slotamount="7">
                    <img alt="" src="{{ asset('images/carousel/dummy.png') }}"
                        data-lazyload="{{ asset('images/carousel/banner4.jpg') }}" data-duration="1000" />

                    <div class="caption lft tp-resizeme pendulum" data-x="0" data-y="0" data-speed="600"
                        data-start="1600" id="pendulum1">
                    </div>

                    <div class="caption lft tp-resizeme pendulum" data-x="80" data-y="0" data-speed="600"
                        data-start="2000" id="pendulum2">

                    </div>
                    <div class="caption lft tp-resizeme pendulum" data-x="160" data-y="0" data-speed="600"
                        data-start="2400" id="pendulum3">

                    </div>

                    <div class="caption " data-x="0" data-y="250" data-speed="600" data-start="2800"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="text-transform: uppercase; font-size: 28px; color: #fff;">
                        Grow your Business with
                    </div>
                    <div class=" caption tp-resizeme" data-x="0" data-y="300" data-speed="600" data-start="3500"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="color: #d32f68; font-size: 60px;
                        font-weight: 700;
                        text-transform: uppercase;">
                        pnr services
                    </div>

                    <div id="imgbox1" class="caption shadowed lfr ltt" data-y="100" data-x="520" data-speed="1800"
                        data-start="4500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/aboutus/2.jpg') }}" />
                    </div>
                    <div id="imgbox2" class="caption lfb ltt" data-y="220" data-x="770" data-speed="2000"
                        data-start="5000" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/aboutus/5.jpg') }}" style="left:996px;" />
                    </div>

                </li>
                <!-- ========== End First Slide ========== -->

                <!-- ========== Start Second  Slide ========== -->
                <li data-slotamount="17" data-transition="curtain-2" data-masterspeed="1000" data-saveperformance="on">
                    <img alt="" src="{{ asset('images/carousel/dummy.png') }}"
                        data-lazyload="{{ asset('images/carousel/banner5.jpg') }}" />

                    <div class="slide-head caption sft  tp-resizeme text-white " data-x="center" data-y="10"
                        data-speed="400" data-start="100">
                        WE DO IT?
                    </div>
                    <div class=" caption customin customout tp-resizeme" data-x="0" data-y="150"
                        data-splitin="chars" data-elementdelay="0.05" data-start="200" data-speed="1200"
                        data-easing="Back.easeOut"
                        data-customin="x:350;y:200;z:0;rotationX:0;rotationY:0;rotationZ:-120;scaleX:8;scaleY:8;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:220% 190%;"
                        data-splitout="" data-endelementdelay="0"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-end="90000" data-endspeed="1500" data-endeasing="Power3.easeInOut" data-captionhidden="on"
                        style="color: #d32f68; font-size: 75px;font-weight: 700; text-transform: uppercase;">
                        Services
                    </div>
                    <div class="caption " data-x="30" data-y="270" data-speed="600" data-start="300"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="text-transform: uppercase; font-size: 24px; color: #fff;">
                        We Provide
                    </div>
                    {{-- ******************************************* --}}
                    <div>
                        <div class="caption sfl vert-line" data-x="550" data-speed="400" data-y="150"
                            data-start="500"></div>


                        {{-- **************Horizontal Line****************** --}}
                        @php
                            $y = 110;
                            $start = 500;
                        @endphp
                        @for ($i = 0; $i < 6; $i++)
                            <div class="caption sfl wit-line horiz-line" data-x="550" data-y="{{ $y = $y + 50 }}"
                                data-speed="400" data-start="{{ $start = $start + 50 }}" style="width: 30px;"></div>
                            @php

                            @endphp
                        @endfor
                        {{-- **************End Horizontal Line****************** --}}
                    </div>
                    {{-- *****List Of Services ***** --}}
                    @php
                        $list_services = ['Turbogenerator', 'Turbine', 'Compressor', 'Gearbox', 'Valve', 'Pump'];
                        $y = 0;
                        $start = 900;
                    @endphp
                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="600" data-y="100"
                        data-speed="400">
                        @foreach ($list_services as $list_service)
                            <div class="caption sfl witTxt large-desc bull tp-resizeme" data-y="{{ $y = $y + 50 }}"
                                data-start="{{ $start = $start + 300 }}">
                                {{ $list_service }}
                            </div>
                        @endforeach
                    </div>
                    {{-- *****End List Of Services ***** --}}

                    {{-- ******************************************* --}}
                    <div>
                        <div class="caption sfl vert-line" data-x="800" data-speed="400" data-y="150"
                            data-start="2400"></div>


                        {{-- **************Horizontal Line****************** --}}
                        @php
                            $y = 110;
                            $start = 2400;
                        @endphp
                        @for ($i = 0; $i < 6; $i++)
                            <div class="caption sfl wit-line horiz-line" data-x="800" data-y="{{ $y = $y + 50 }}"
                                data-speed="400" data-start="{{ $start = $start + 50 }}" style="width: 30px;"></div>
                            @php

                            @endphp
                        @endfor
                        {{-- **************End Horizontal Line****************** --}}
                    </div>

                    {{-- *****List Of Services ***** --}}
                    @php
                        $list_services = ['Blower', ' Heat Exchanger', 'Alignment', ' Retrofit & Upgrade', 'design & System Studies', 'Training'];
                        $y = 0;
                        $start = 2800;
                    @endphp
                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="850" data-y="100"
                        data-speed="400">
                        @foreach ($list_services as $list_service)
                            <div class="caption sfl witTxt large-desc bull tp-resizeme" data-y="{{ $y = $y + 50 }}"
                                data-start="{{ $start = $start + 300 }}">
                                {{ $list_service }}
                            </div>
                        @endforeach
                    </div>
                    {{-- *****End List Of Services ***** --}}


                    <!-- Text Layer Responsive Properties -->
                    <!-- <div
                                                      class="tp-caption tp-resizeme largewhitebg"
                                                      data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Linear"},
                        {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Linear"}]'
                                                      data-visibility="['on', 'on', 'on', 'on']"
                                                      data-fontsize="['24', '24', '22', '18']"
                                                      data-lineheight="['32', '32', '32', '24']"
                                                      data-color="['#FFF', '#FFF', '#000', '#000']"
                                                      data-textAlign="['inherit', 'inherit', 'right', 'center']"
                                                      data-x="['center', 'center', 'right', 'center']"
                                                      data-y="['middle', 'middle', 'top', 'bottom']"
                                                      data-hoffset="['0', '0', '50', '0']"
                                                      data-voffset="['0', '0', '50', '50']"
                                                      data-width="['800', '800', '600', '400']"
                                                      data-height="['auto', 'auto', 'auto', 'auto']"
                                                      data-whitespace="['normal', 'normal', 'nowrap', 'normal']"
                                                      data-paddingtop="[0, 0, 0, 0]"
                                                      data-paddingright="[0, 0, 0, 0]"
                                                      data-paddingbottom="[0, 0, 0, 0]"
                                                      data-paddingleft="[0, 0, 0, 0]"
                                                      data-basealign="slide"
                                                      data-responsive_offset="off"
                                                    >
                                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                                                      luctus felis porta dui rhoncus lobortis. In aliquet, arcu ut bibendum
                                                      molestie, massa nisl varius nunc, non tempus mi dolor vitae eros
                                                    </div> -->
                </li>

                <!-- ========== End Second  Slide ========== -->
                <!-- ========== Start Third Slide ========== -->
                <li data-transition="zoomout" data-slotamount="7">
                    <img alt="" src="{{ asset('images/carousel/dummy.png') }}"
                        data-lazyload="{{ asset('img/background-image/2.jpg') }}" data-duration="1000" />

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_bold_white customin customout animate__animated animate__bounce animate__infinite" data-x="428" data-y="34"
                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="2000" data-start="800" data-easing="Back.easeOut" data-endspeed="300"
                    data-endeasing="Power1.easeIn" style="z-index: 10;animation-delay: 1s ;--animate-duration: 3s;">Turbogenerator
                </div>
                <!-- LAYER NR. 2 -->
                    <div id="imgbox2" class="tp-caption customin animate__animated animate__bounce animate__infinite"" data-x="474" data-y="189"
                        data-customin="x:0;y:0;z:0;rotationX:45;rotationY:40;rotationZ:45;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="1100" data-easing="Power3.easeInOut" data-endspeed="300"
                        style="z-index: 2;animation-delay: 1s ;--animate-duration: 3s;"><img src="{{ asset('img/services/Turbogenerators-1.jpg') }}" alt="">
                    </div>
                                      
                

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption medium_light_white customin customout" data-x="536" data-y="51"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600" data-start="1200" data-easing="Back.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" style="z-index: 11">Improvements
                    </div>
                    {{-- <div class="caption " data-x="0" data-y="250" data-speed="600" data-start="2800"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="text-transform: uppercase; font-size: 28px; color: #fff;">
                        Grow your Business with
                    </div> --}}
                    <div class=" caption tp-resizeme" data-x="0" data-y="150" data-speed="600" data-start="3500"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="color: #d32f68; font-size: 60px;
                        font-weight: 700;
                        text-transform: uppercase;">
                       Turbogenerators
                    </div>
                    {{-- <div id="imgbox2" class="caption shadowed lfr ltt" data-y="100" data-x="520"
                    data-speed="1800" data-start="4500" data-easing="Power4.easeOut" data-splitin="none"
                    data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                    data-endeasing="Power4.easeIn">
                    <img alt="" src="{{ asset('img/aboutus/2.jpg') }}" />
                </div> --}}
                    <div id="imgbox2" class="caption shadowed lfr ltt" data-y="100" data-x="520"
                        data-speed="1800" data-start="4500" data-easing="Power4.easeOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/services/turbogenerators.jpg') }}" />
                    </div>
                    <div id="imgbox2" class="caption lfb ltt" data-y="220" data-x="770" data-speed="2000"
                        data-start="5000" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/services/Turbogenerators-2.jpg') }}" style="left:996px;" />
                    </div>

                </li>
                <!-- SLIDE  -->
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('img/background-image/1.jpg') }}" alt="darkblurbg" />
                    {{-- data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"> --}}
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption customin" data-x="474" data-y="189"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="800" data-easing="Power3.easeInOut" data-endspeed="300"
                        style="z-index: 2"><img src="images/macbook2.png" alt="">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin" data-x="245" data-y="92"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="500" data-easing="Power3.easeInOut" data-endspeed="300"
                        style="z-index: 3"><img src="images/imac1.png" alt="">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin" data-x="693" data-y="69"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="1300" data-easing="Power3.easeInOut" data-endspeed="300"
                        style="z-index: 4"><img src="images/lupe_macbook.png" alt="">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption customin" data-x="100" data-y="171"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="1400" data-easing="Power3.easeInOut" data-endspeed="300"
                        style="z-index: 5"><img src="images/lupe_imac.png" alt="">
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption medium_bg_asbestos skewfromleft customout" data-x="104" data-y="154"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 6">Caption Selection
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption medium_bg_red skewfromright customout" data-x="820" data-y="274"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="1700" data-easing="Power4.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 7">Custom Animation Editor
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption medium_bg_orange skewfromright customout" data-x="820" data-y="314"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="1800" data-easing="Power4.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 8">With Live Preview
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption medium_bg_darkblue skewfromleft customout" data-x="168" data-y="193"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9">With Style Preview
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption large_bold_white customin customout" data-x="428" data-y="34"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600" data-start="1100" data-easing="Back.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" style="z-index: 10">Big
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption medium_light_white customin customout" data-x="536" data-y="51"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600" data-start="1200" data-easing="Back.easeOut" data-endspeed="300"
                        data-endeasing="Power1.easeIn" style="z-index: 11">Improvements
                    </div>
                </li>
                <!-- SLIDE  -->
                <!-- ========== End Third Slide ========== -->

            </ul>
        </div>
    </div>


    {{-- <div class="tp-banner-container">
        <div class="tp-banner">

            <ul>
                <li data-transition="fade" data-slotamount="7">
                    <img alt="" src="{{ asset('images/carousel/dummy.png') }}"
                        data-lazyload="{{ asset('images/carousel/banner4.jpg') }}" data-duration="1000" />
                    <div class="caption large-text  witTxt"
                        style="text-transform: uppercase; font-size: 30px; color: #fff;" data-x="0" data-y="320"
                        data-speed="600" data-start="1500" data-easing="Power4.easeOut" data-splitin="chars"
                        data-splitout="chars" data-elementdelay="0.05" data-endelementdelay="0.05" data-endspeed="300"
                        data-endeasing="Power1.easeOut">
                        Grow your Business with
                    </div>
                    <div class="textpink caption medium-title tp-resizeme" data-x="0" data-y="360"
                        data-speed="600" data-start="2000" data-easing="Power4.easeOut" data-splitin="chars"
                        data-splitout="chars" data-elementdelay="0.05" data-endelementdelay="0.05" data-endspeed="300"
                        data-endeasing="Power1.easeOut">
                        Creativa Infotech
                    </div>
                    <div class="caption lft tp-resizeme" data-x="30" data-y="0" data-speed="600"
                       20ata-start="1600">
                        <div
                            style="
                      height: 80px;
                      width: 2px;
                      background: #fff;
                      left: 40px;
                      position: absolute;
                    ">
                        </div>
                        <div
                            style="
                      background: #fff;
                      padding: 20px;
                      border-radius: 50%;
                      line-height: 40px;
                      color: #777;
                      text-transform: uppercase;
                      font-size: 20px;
                      margin-top: 80px;
                    ">
                            Fast
                        </div>
                    </div>
                    <div class="caption lft tp-resizeme" data-x="100" data-y="0" data-speed="600"
                        data-start="1800">
                        <div
                            style="
                      height: 130px;
                      width: 2px;
                      background: #b8b8b8;
                      left: 40px;
                      position: absolute;
                    ">
                        </div>
                        <div
                            style="
                      background: #b8b8b8;
                      padding: 20px;
                      border-radius: 50%;
                      line-height: 40px;
                      color: #fff;
                      text-transform: uppercase;
                      font-size: 20px;
                      margin-top: 130px;
                    ">
                            Easy
                        </div>
                    </div>
                    <div class="caption lft tp-resizeme" data-x="170" data-y="0" data-speed="600"
                        data-start="2000">
                        <div
                            style="
                      height: 180px;
                      width: 2px;
                      background: #000;
                      left: 50px;
                      position: absolute;
                    ">
                        </div>
                        <div
                            style="
                      background: #000;
                      padding: 35px 20px;
                      border-radius: 50%;
                      line-height: 40px;
                      color: #fff;
                      text-transform: uppercase;
                      font-size: 20px;
                      margin-top: 180px;
                    ">
                            Stable
                        </div>
                    </div>
                    <div class="imgbox3 caption shadowed lfr ltt" data-y="20" data-x="700" data-speed="600"
                        data-start="2300" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('images/carousel/res1.png') }}" />
                    </div>

                    <div class="imgbox1 caption shadowed lft ltt" data-y="18" data-x="335" data-speed="600"
                        data-start="1700" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('images/carousel/web2.png') }}" />
                    </div>

                    <div class="imgbox2 caption shadowed lfl ltt" data-y="230" data-x="500" data-speed="600"
                        data-start="1900" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('images/carousel/seo2.png') }}" />
                    </div>
                </li>
                <li data-slotamount="7" data-transition="curtain-1" data-masterspeed="1000" data-saveperformance="on">
                    <img alt="" src="{{ asset('images/carousel/dummy.png') }}"
                        data-lazyload="{{ asset('images/carousel/banner5.jpg') }}" />

                    <div class="caption sft slide-head witTxt tp-resizeme" data-x="center" data-y="50"
                        data-speed="400" data-start="1000">
                        What do you Need?
                    </div>
                    <div class="caption sfl wit-line" data-x="250" data-y="70" data-speed="400" data-start="1200">
                    </div>
                    <div class="caption sfr wit-line" data-x="700" data-y="70" data-speed="400" data-start="1200">
                    </div>
                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="150"
                        data-speed="400" data-start="1200">
                        Website Development
                    </div>

                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="200"
                        data-speed="400" data-start="1400">
                        Website Designing
                    </div>

                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="250"
                        data-speed="400"20ata-start="1600">
                        E-Commerce Website
                    </div>
                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="300"
                        data-speed="400" data-start="1800">
                        Mobile Application Development
                    </div>

                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="350"
                        data-speed="400" data-start="2000">
                        Digital Marketing
                    </div>

                    <div class="caption sfl witTxt large-desc bull tp-resizeme" data-x="40" data-y="400"
                        data-speed="400" data-start="2200">
                        SEO/SEM
                    </div>
                    <div class="caption sfl vert-line" data-x="10" data-y="150" data-speed="400"
                        data-start="1000"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="160" data-speed="400"
                        data-start="1200" style="width: 30px;"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="210" data-speed="400"
                        data-start="1400" style="width: 30px;"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="260" data-speed="400"
                        data-start="1600" style="width: 30px;"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="310" data-speed="400"
                        data-start="1800" style="width: 30px;"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="360" data-speed="400"
                        data-start="2000" style="width: 30px;"></div>
                    <div class="caption sfl wit-line horiz-line" data-x="0" data-y="410" data-speed="400"
                        data-start="2200" style="width: 30px;"></div>

                    <div class="tp-caption customin main-title tp-resizeme main-bg" data-x="center" data-hoffset="0"
                        data-y="180" data-voffset="0"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="300" data-start="3000" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000"
                        style="
                    z-index: 18;
                    max-width: auto;
                    max-height: auto;
                    white-space: nowrap;
                    padding: 5px 10px;
                    color: #fff;
                  ">
                        SO
                    </div>
                    <div class="caption sfl witTxt large-desc tp-resizeme" data-x="610" data-y="220"
                        data-speed="400" data-start="3500" style="font-size: 17px; text-transform: uppercase;">
                        Let's Get Started
                    </div>
                    <div class="caption customin customout text-title tp-resizeme" data-x="610" data-y="250"
                        data-splitin="chars" data-elementdelay="0.05" data-start="3800" data-speed="600"
                        data-easing="Back.easeOut"
                        data-customin="x:350;y:200;z:0;rotationX:0;rotationY:0;rotationZ:-120;scaleX:8;scaleY:8;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:220% 190%;"
                        data-splitout="" data-endelementdelay="0"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-end="90000" data-endspeed="1500" data-endeasing="Power3.easeInOut" data-captionhidden="on">
                        Creative Design
                    </div>

                    <!-- Text Layer Responsive Properties -->
                    <!-- <div
                              class="tp-caption tp-resizeme largewhitebg"
                              data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Linear"},
                        {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Linear"}]'
                              data-visibility="['on', 'on', 'on', 'on']"
                              data-fontsize="['24', '24', '22', '18']"
                              data-lineheight="['32', '32', '32', '24']"
                              data-color="['#FFF', '#FFF', '#000', '#000']"
                              data-textAlign="['inherit', 'inherit', 'right', 'center']"
                              data-x="['center', 'center', 'right', 'center']"
                              data-y="['middle', 'middle', 'top', 'bottom']"
                              data-hoffset="['0', '0', '50', '0']"
                              data-voffset="['0', '0', '50', '50']"
                              data-width="['800', '800', '600', '400']"
                              data-height="['auto', 'auto', 'auto', 'auto']"
                              data-whitespace="['normal', 'normal', 'nowrap', 'normal']"
                              data-paddingtop="[0, 0, 0, 0]"
                              data-paddingright="[0, 0, 0, 0]"
                              data-paddingbottom="[0, 0, 0, 0]"
                              data-paddingleft="[0, 0, 0, 0]"
                              data-basealign="slide"
                              data-responsive_offset="off"
                            >
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                              luctus felis porta dui rhoncus lobortis. In aliquet, arcu ut bibendum
                              molestie, massa nisl varius nunc, non tempus mi dolor vitae eros
                            </div> -->
                </li>
            </ul>
        </div>
    </div> --}}


    <!-- ********************End Bootstrap Carousel************ -->
    <!-- ********************Bootstrap Carousel************ -->
    <div id="homeCarousel" class="carousel slide  carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel/banner4.jpg') }}" class="d-block w-100 img-fluid "
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <div class="pendulum" data-x="0" data-y="0" data-speed="600"
                        data-start="1600" id="pendulum1">
                    </div>

                    {{-- <div class="pendulum" data-x="80" data-y="0" data-speed="600"
                        data-start="2000" id="pendulum2">

                    </div> --}}
                    {{-- <div class="pendulum" data-x="160" data-y="0" data-speed="600"
                        data-start="2400" id="pendulum3">

                    </div> --}}

                    <div class="caption " data-x="0" data-y="250" data-speed="600" data-start="2800"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="text-transform: uppercase; font-size: 28px; color: #fff;">
                        Grow your Business with
                    </div>
                    <div class=" caption tp-resizeme" data-x="0" data-y="300" data-speed="600" data-start="3500"
                        data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.05"
                        data-endelementdelay="0.05" data-endspeed="300" data-endeasing="Power1.easeOut"
                        style="color: #d32f68; font-size: 60px;
                        font-weight: 700;
                        text-transform: uppercase;">
                        pnr services
                    </div>

                    {{-- <div id="imgbox1" class="caption shadowed lfr ltt" data-y="100" data-x="520" data-speed="1800"
                        data-start="4500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/aboutus/2.jpg') }}" />
                    </div> --}}
                    {{-- <div id="imgbox2" class="caption lfb ltt" data-y="220" data-x="770" data-speed="2000"
                        data-start="5000" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                        data-endeasing="Power4.easeIn">
                        <img alt="" src="{{ asset('img/aboutus/5.jpg') }}" style="left:996px;" />
                    </div> --}}

                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            turbogenerators</h1>
                        <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s">Some
                            representative placeholder content for the first slide.</p>
                        <a href="" class="carousel-btn btn animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/compressor.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">turbines
                            &
                            engines
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/compressor.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            compressors
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/gearbox.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            gearboxes
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/valve1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">valves
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/pumps.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">Pumps
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/blowers.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">blowers
                        </h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p> --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/services/heat-exchanger.jpg') }}" class="d-block w-100 img-fluid"
                    alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">heat
                            exchangers</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            alignments</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            retrofits & upgrades</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            design & system studies</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/services/alignment.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="w-100 w-md-50">
                        <h5 class="carousel-title animate__animated animate__bounce" style="animation-delay: 1s">We Do It
                        </h5>
                        <h1 class="carousel-heading animate__animated animate__pulse" style="animation-delay: 2s">
                            trainings</h1>
                        {{-- <p class="carousel-content animate__animated animate__bounceInUp" style="animation-delay: 3s"  >Some representative placeholder content for the first slide.</p>         --}}
                        <a href="" class="carousel-btn btn  animate__animated animate__backInLeft"
                            style="animation-delay: 3s">Contact Us<i class="fa fa-bell"></i></a>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ********************End Bootstrap Carousel************ -->

    <section id="home-aboutus" class="mainSection">

        <div class="container-fluid container-lg z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <div class="iq-features">
                        <div class="holderCircle">
                            <div class="round"></div>
                            <div class="dotCircle">
                                <span class="itemDot active itemDot1 overflow-hidden " data-tab="1">
                                    {{-- <img src="{{asset("img/services/alignment.jpg")}}" alt="" srcset="" class="img-thumbnail  w-100 h-100"> --}}
                                    <i class="fa fa-clock-o"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot2" data-tab="2">
                                    <i class="fa fa-comments"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot3" data-tab="3">
                                    <i class="fa fa-user"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot4" data-tab="4">
                                    <i class="fa fa-tags"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot5" data-tab="5">
                                    <i class="fa fa-upload"></i>
                                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot6" data-tab="6">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="forActive"></span>
                                </span>
                            </div>
                            <div class="contentCircle">
                                <div class="CirItem title-box active CirItem1">
                                    <h2 class="title"><span>Automate</span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="CirItem title-box CirItem2">
                                    <h2 class="title"><span>Chat </span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="CirItem title-box CirItem3">
                                    <h2 class="title"><span>Responses</span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="CirItem title-box CirItem4">
                                    <h2 class="title"><span>Tags</span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="CirItem title-box CirItem5">
                                    <h2 class="title"><span>Sharing</span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-upload"></i>
                                </div>
                                <div class="CirItem title-box CirItem6">
                                    <h2 class="title"><span>Support</span></h2>
                                    {{-- <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when
                                looking at its layout.
                              </p> --}}
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                {{-- Right section --}}
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle">Welcome To pNR Services</div>
                        <div class="sectionTitle">We offers OEM experienced technical specialists to power generation
                            companies, oil & gas, fertilizers, cement industries.
                        </div>
                        <div class="line mx-0"></div>
                    </header>

                    <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                        specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                        understand the customer requirements and provide them with
                        the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                        We
                        supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                            mechanical,
                            elctromechanical and instrumentation </b>disciplines.
                    </p>
                    <div class="d-flex">
                        <ul class="listbox">
                            <li class="list-item"> Major & Minor Inspections </li>
                            <li class="list-item">Installation & Commissioning Services</li>
                            <li class="list-item">Alignments </li>


                        </ul>
                        <ul class="listbox">

                            <li class="list-item">Retrofit & Assets Upgrades</li>
                            <li class="list-item"> Lifecycle Management</li>
                            <li class="list-item"> Trainings</li>

                        </ul>
                    </div>




                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>

                    {{-- <div class="pt-3 text-center"> --}}
                    <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                        {{-- <a class="btn buttonStyleSecondary ms-3" aria-current="page" href="{{ route('contact') }}">Read
                                More >></a> --}}
                    </div>


                </div>




            </div>
        </div>

        {{-- <footer class="pb-5">

        </footer> --}}


    </section>
    {{-- ***********************Home About Us******************************* --}}

    {{-- <section id="home-aboutus" class="mainSection">

        <div class="container-fluid container-lg z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-5 section-col-top-padding">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="image-box">
                                <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset=""
                                    class="">
                            </div>
                        </div>
                    </div>


                </div>

             
                <div class="col-12 col-lg-7 ">
                    <header>
                        <div class="subtitle">Welcome To pNR Services</div>
                        <div class="sectionTitle">We offers OEM experienced technical specialists to power generation
                            companies, oil & gas, fertilizers, cement industries.
                        </div>
                        <div class="line mx-0"></div>
                    </header>

                    <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                        specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                        understand the customer requirements and provide them with
                        the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                        We
                        supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                            mechanical,
                            elctromechanical and instrumentation </b>disciplines.
                    </p>
                    <div class="d-flex">
                        <ul class="listbox">
                            <li class="list-item"> Major & Minor Inspections </li>
                            <li class="list-item">Installation & Commissioning Services</li>
                            <li class="list-item">Alignments </li>


                        </ul>
                        <ul class="listbox">

                            <li class="list-item">Retrofit & Assets Upgrades</li>
                            <li class="list-item"> Lifecycle Management</li>
                            <li class="list-item"> Trainings</li>

                        </ul>
                    </div>




                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>

                     <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                        
                    </div>


                </div>




            </div>
        </div>

      

    </section> --}}
    {{-- <section id="home-aboutus" class="mainSection">
        <div class="container-fluid container-lg ">
            <div class="row">
                <div class="col-12">
                    <header>
                       
                        <h1 class="text-center pt-3"
                            style="color:#cfb234;background: -webkit-linear-gradient(#7a6b24, #cfb234);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                            ABOUT US</h1>
                        <div class="line" style="margin: 3.5rem auto"></div>
                       
                        <p style="text-align: justify;"><strong>PNR Services</strong> offers OEM experienced technical
                            specialists to <b>power generation companies, oil & gas, fertilizers, cement industries. </b>.We
                            understand the customer requirements and provide them with
                            the <strong> latest technologies </strong>to overcome their challenges quickly and economically.
                            We
                            supply our clients multi-disciplined expertise with field engineers of <b>electrical,
                                mechanical,
                                elctromechanical and instrumentation </b>disciplines.
                        </p>
                       
                    </header>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="image-box">
                        <img src="{{ url('/img/aboutus/5.jpg') }}" alt="" srcset="" class="">
                    </div>

                </div>
                 <div class="col-12 col-lg-7">

                    <ul class="listbox">
                        <li class="list-item"> Major & Minor Inspections </li>
                        <li class="list-item">Installation & Commissioning Services</li>
                        <li class="list-item">Alignments </li>
                        <li class="list-item">Retrofit & Assets Upgrades</li>
                        <li class="list-item"> Lifecycle Management</li>
                        <li class="list-item"> Trainings</li>
                    </ul>
                    <p>Our clients also enjoy customized training solutions on asset
                        maintenance , commissioning and troubleshooting. These customized trainings are built by
                        engineers who have extensive experience and are among the very best in the world.</p>
                   
                    <div class="">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                       
                    </div>

                </div>
            </div>
        </div>

     --}}

    {{-- ***********************End Home About Us******************************* --}}

    {{-- *********************Highlighted Box Section******************* --}}

    <div class="highlighted-box align-items-lg-center ">

        <h5 class="content">
            Customer satisfaction is our main
        </h5>
        <h5 class="focused-content animate__animated animate__zoomIn animate__infinite"
            style="animation-delay: 1s ;--animate-duration: 3s;">FOCUS
        </h5>
        {{-- <a href="#" class="btn waves-effect waves-light"><i class="fa fa-send"></i>GET A FREE QUOTE</a> --}}


    </div>

    {{-- *********************End Highlighted Box Section******************* --}}
    {{-- *********************Home Service Section******************* --}}

    <section id="home_service" class="mainSection">

        <div class="container">

            <div class="row">
                <div class="col-12 col-sm-6 ">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What Services we Provide for Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="col-12 col-sm-6 " style="padding-top:12.6rem; padding-bottom: 3.0rem;">
                    <p style="">
                        One window Electromechanical
                        solutions for Power Systems
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Turbogenerator</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/Turbine-engines-1.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Turbines</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/compressor.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Compressors </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/gearbox.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Gearbox </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/valve1.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Valve </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/pumps.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Pumps </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/blowers.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Blowers </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/heat-exchanger.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Heat Exchanger </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/alignment.jpg') }}" alt="" srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">
                               
                            </div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Alignment </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Retrofit & Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/compressor.jpg') }}" alt="" srcset=""
                                class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Design & System Studies</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="service-card">
                        <div class="image-box">
                            <img src="{{ asset('img/services/Trainings-1.jpg') }}" alt=""
                                srcset=""class=" ">
                        </div>
                        <div class="service-content-box">
                            {{-- <div class="icon-box">icon</div> --}}
                            <div class="content">
                                <a href="http://" target="_blank" class="">Training</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
    </section>

    {{-- *********************End Home Service Section******************* --}}
    {{-- *********************Home Supplies Section******************* --}}

    <section id="home_supplies" class="mainSection">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-5 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle">What We Supply to Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                    <p class="content">One window Electromechanical solutions for Power Systems</p>
                </div>
                <div class="col-12 col-sm-7 ">
                    <div class="row" id="supply-card-container">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/parts1.jpg') }}" alt="" srcset=""
                                        class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Parts</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/tools-equipments-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Tools</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/Relay-control-panels-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Relay & Control Panels</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/Switchgear-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Switchgears</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/turbogenerators.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Testing Equipment</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="supply-card">
                                <div class="supply-image-box">
                                    <img src="{{ asset('img/services/Power -Transformer-1.jpg') }}" alt=""
                                        srcset="" class="img-fluid">
                                </div>
                                <div class="supply-content-box">
                                    {{-- <div class="icon-box">icon</div> --}}
                                    <div class="content">
                                        <a href="http://" target="_blank" class="">Power Transformers</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
    </section>

    {{-- *********************End Home Supplies Section******************* --}}
    {{-- *********************Home Call To Action Section******************* --}}

    <section id="home_call_to_action" class="mainSection" style="background-color: #306770; color:#ffffff; ">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-sm-7 section-column">
                    <header>
                        <div class="subtitle">We Do It</div>
                        <div class="sectionTitle text-white">What We Supply to Our Customers
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                    <p class="content">One window Electromechanical solutions for Power Systems</p>
                </div>
                <div class="col-12 col-sm-5 ">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <a class="btn buttonStyleSecondary" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>

                    </div>
                </div>
            </div>

        </div>
        {{-- <footer class="pb-5">

</footer> --}}
    </section>

    {{-- *********************End Home Call To Action Section******************* --}}
    {{-- ***********************Home Why Choose Us******************************* --}}

    <section id="home-whychooseus" class="mainSection position-relative bg-grey">
        <div class="position-absolute  start-0 w-100 h-100 z-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="0.5"
                    d="M0,0L60,21.3C120,43,240,85,360,90.7C480,96,600,64,720,96C840,128,960,224,1080,250.7C1200,277,1320,235,1380,213.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>

        </div>
        {{-- <div class="container-fluid container-lg z-3 position-relative "> --}}
        <div class="container-fluid container-lg z-3 position-relative">
            <div class="row">
                <div class="col-12 col-lg-7 ">
                    {{-- <div class="section-column sectioninfo col-12 col-lg-7 "> --}}

                    <header>
                        <div class="subtitle">Why Choose Us</div>
                        <div class="sectionTitle">PNR works to develop long-term working relationships with suppliers.
                        </div>
                        <div class="line mx-0"></div>
                    </header>
                </div>
                <div class="col-12 col-lg-7  order-3 order-lg-2">
                    {{-- <div class="section-column sectioninfo col-12 col-lg-7 pe-5 order-3 order-lg-2"> --}}
                    <p>We pride ourselves on our ability to provide flexibility
                        while
                        working closely with customers to fulfil their changing requirements. PNR also works to develop
                        long-term working relationships with parts and equipment suppliers to ensure cost efficiency and
                        lesser lead times. Our goal is to complete all assigned works within estimated timeframe not
                        compromising on highest standards of quality.</p>
                    <div class="listbox container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="list">
                                    <ul class="listbox">
                                        <li class="list-item">Provide flexibility to fulfil customers' changing
                                            requirements</li>
                                        <li class="list-item">Ensure cost efficiency</li>
                                        <li class="list-item">Lesser lead times</li>
                                        <li class="list-item">Complete all assigned works within estimated timeframe </li>
                                        <li class="list-item">No compromise on highest standards of quality.</li>


                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                {{-- <div class="section-column image-section col-12 col-lg-5 order-2 order-lg-3"> --}}
                <div class="col-12 col-lg-5 order-2 order-lg-3">
                    <div class="image-box">
                        <img src="{{ url('/img/aboutus/4.jpg') }}" alt="" srcset="" class="">
                    </div>

                </div>

            </div>
        </div>
        <div class="container pt-5 z-3 position-relative">
            <div class="row">
                <div class="section-column image-section col-12 col-lg-3">
                    <div class=" image-box">
                        <img src="{{ url('/img/aboutus/2.jpg') }}" alt="" srcset=""
                            class="img-thumbnail ">
                    </div>

                </div>


                <div class="col-12 col-lg-9 pt-3">
                    <p class="content text-justify">Our skillful technical and procurement available
                        resources make us uniquely positioned to be relied upon by many valued
                        customers. </p>
                    {{-- <div class="highlighted-card mt-5">
                        <p class="">Customer satisfaction is our main <span>Focus</span>
                        </p>
                    </div> --}}
                    <div class="pt-3 text-center">

                        <a class="btn buttonStyleSecondary ms-3" aria-current="page" href="{{ route('contact') }}">Read
                            More >></a>
                    </div>
                </div>

            </div>

        </div>
        {{-- <footer class="pb-5">

        </footer> --}}
        <div class="position-absolute  start-0  w-100 z-0" style="bottom:0;">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e1dede" fill-opacity="1"
                    d="M0,224L30,218.7C60,213,120,203,180,202.7C240,203,300,213,360,218.7C420,224,480,224,540,240C600,256,660,288,720,288C780,288,840,256,900,245.3C960,235,1020,245,1080,256C1140,267,1200,277,1260,256C1320,235,1380,181,1410,154.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                </path>
            </svg>
        </div>

    </section>
    {{-- ***********************End Home Why Choose Us******************************* --}}


    {{-- ***********************Home Team Member Section******************************* --}}
    <section id="home-team" class="mainSection position-relative">

        <ul class="background">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container-fluid container-lg team-list">
            <div class="row">
                <div class="col-12 ">

                    <header class="text-center ">
                        <div class="subtitle ">Our Team Members</div>
                        <p class="text-white pt-4">We have Energetic & Skillfull Team of Electrical, Mechanical &
                            Instrumentation Engineers who have proven hands-on experience of Installation, Erection, Testing
                            & Commissioning of Electromechanical Assets.
                        </p>

                        <div class="line bg-warning" style="margin: 1.5rem auto 5.0rem;"></div>
                    </header>
                </div>



            </div>
        </div>
        <div class="container-fluid container-lg team-list">
            <div class="row pt-5 g-5">
                <div class="col-12 col-sm-6">

                    <div class="team-container">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/reinier-founder.jpeg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Reinier koorenhof<h1>
                                    <h3 class="team-designation">Founder & Team Lead Technical</h3>
                                    <div class="line d-inline-block me-1" style="width: 3.0rem;border-radius:1.0rem;">
                                    </div>
                                    <div class="line d-inline-block ">
                                    </div>
                                    <p class="team-descr">With over 25 years of experience in the global power generation
                                        industry.
                                    </p>
                                    <div class="animated-btn">
                                        <a href="http://" target="_blank" id="round">+</a>
                                        <a href="http://" target="_blank" id="rect"> Read More <span
                                                class="fw-bolder ps-1"> >></span></a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="team-container ">
                        <div class="team-image-box">
                            <img src="{{ asset('img/team/junaid-director.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h1 class="team-name">Junaid Ali<h1>
                                    <h3 class="team-designation">Co-founder and Team Lead Services</h3>
                                    <div class="line d-inline-block me-1" style="width: 3.0rem;border-radius:1.0rem;">
                                    </div>
                                    <div class="line d-inline-block "style="border-radius:1.0rem;"></div>
                                    <p class="team-descr">20 years experience working with major OEMs of power and energy.
                                    </p>
                                    <div class="animated-btn">
                                        <a href="http://" target="_blank" id="round">+</a>
                                        <a href="http://" target="_blank" id="rect"> Read More <span
                                                class="fw-bolder ps-1"> >></span></a>
                                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <footer class="pb-5">

        </footer>
    </section>

    {{-- ***********************End Home Team Member Section******************************* --}}


    {{-- **************************Services************* --}}
    {{-- <section>
        <div class="container. rem-4 py-5" id="icon-grid">
            <h2 class="pb-2 border-bottom">Icon grid</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#cpu-fill"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#calendar3"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#home"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#geo-fill"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h2>Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link">
                            Call to action
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                        <use xlink:href="#tools"></use>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container. rem-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Custom cards</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-1.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>Earth</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>3d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple
                                lines</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>Pakistan</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small>California</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-services" class="mainSection ">
        <div class="container">
            <header class="center-align">
                <div class="subtitle  ">What We Offer You</div>
                <div class="sectionTitle">Our Services</div>
                <div class="line mx-0"></div>
                <p class="content pt-3 pb-5 text-white">We offer following specialized services of complete range of
                    Turbogenerators make brush
                    electrical machines uk, netherlands & czech republic.</p>
            </header>
            <section class="card-group-horizontal flex-wrap">

                <div class="icon-card-vertical">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Commissioning Services
                        </div>
                        <p class="content">Commissioning Services
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Operations & Maintenance</div>
                        <p class="content">A, B & C inspection Elcid, PD, Tan delta, Boroscope, RSO, DLRO
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Retrofit & Assets Upgrade Services</div>
                        <p class="content">Excitation system, protection and control system</p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Parts and Materials</div>
                        <p class="content">Bearings, AVR, inspection kits, relays and much more</p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Lifecycle Management
                        </div>
                        <p class="content">Customized Trainings of operation and maintenance crew
                        </p>
                    </div>
                </div>
                <div class="icon-card-vertical ">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="card-content">
                        <div class="contentTitleSmall">Grow Your Business With US</div>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                    </div>
                </div>

            </section>
        </div>
    </section> --}}

    {{-- **************************Intro************* --}}
    {{-- <section id="about" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">video</div>
                <div class=" col-md-6 col-12">
                    <header>
                        <div class="subtitle">Our Introduction</div>
                        <div class="contentTitleBold">Consulting Market Leader Experts</div>
                        <div class="line mx-0"></div>
                    </header>
                    <section class="card-group-vertical">

                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Grow Your Business With US</div>
                                <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat
                                    arcu,
                                    urna ac.
                                    Vivamus dignissim sapien amet vivamu</p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- **************************Contact************* --}}
    {{-- <section id="home-contactform" class="mainSection overlaySection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">
                    <header>
                        <div class="subtitle  ">Get To Know Us</div>
                        <div class="bannerTitle text-white">We Are Very
                            Good In
                            Boosting Your
                            Businesses</div>
                        <div class="line mx-0"></div>
                        <p class="content text-white">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form.</p>
                        <button class="buttonStyleSecondaryDark">Discover More</button>
                    </header>
                </div>
                <div class=" col-md-6 col-12 ">
                    <div class="aboutus-form ">

                        <div>

                            <div class="subtitle">Request</div>
                            <h2 class="contentTitleBold">Let's Request a Call Back</h2>
                            <div class="line "></div>
                            <div class="row">
                                <div class="col">

                                    @if (session('message'))
                                        <div class='alert alert-success'>
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        {{ Form::open(['route' => 'contactmail', 'method' => 'post']) }}
                        {{ Form::token() }}
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- {!! Form::label('title', 'Blog Title') !!} --}}
    {{-- {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
                                        ]) !!}
                                        @if ($errors->has('name'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- {!! Form::label('title', 'Blog Title') !!} --}}
    {{-- {!! Form::text('organization', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Organization',
                                        ]) !!}
                                        @if ($errors->has('organization'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('organization') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}</div>
                                @if ($errors->has('email'))
                                    <div class="text-danger pb-3 ps-3">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                    @if ($errors->has('number'))
                                        <div class="text-danger pb-3 ps-3">{{ $errors->first('number') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-12">{!! Form::textarea('message', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Your Message',
                                        'rows' => '5',
                                        // 'cols' => '15',
                                    ]) !!}
                                        @if ($errors->has('message'))
                                            <div class="text-danger pb-3 ps-3">{{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="d-flex  justify-content-center">
                                    <div class="">{!! Form::submit('submit', ['class' => 'buttonStyleSecondaryDark']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- </s/ection>  --}}
    {{-- **************************Projects************* --}}
    {{-- <section id="projects" class="mainSection">
        <div class="container">
            <header class="center-align">
                <div class="subtitle  ">Our Recent Projects</div>
                <div class="sectionTitle">Latest Cases</div>
                <div class="line mx-0"></div>
                <p class="content pt-3 pb-5">There are many variations of passages of Lorem Ipsum available, but the
                    majority have
                    suffered alteration in some form.</p>
            </header>
            <section>
                               <div class="row">


                    <div class="d-flex justify-content-around">
                        <button class="btn  filter-button active" data-filter="all">All</button>
                        <button class="btn  filter-button" data-filter="hdpe">HDPE Pipes</button>
                        <button class="btn  filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
                        <button class="btn  filter-button" data-filter="spray">Spray Nozzle</button>
                        <button class="btn  filter-button" data-filter="irrigation">Irrigation
                            Pipes</button>
                    </div>
                    <br>



                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive " alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="gallery-image">
                        <div class="overlayProjectCard">
                            <p class="contentTitle pt-3">Project Name</p>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.
                            </p>
                            <button class=buttonStyle>Full View</button>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const filterButtons = document.querySelectorAll('.filter-button');
                        filterButtons.forEach(function(button) {
                            button.addEventListener('click', function() {

                                const value = this.getAttribute('data-filter');
                                const filters = document.querySelectorAll('.filter');
                                if (value == 'all') {
                                    filters.forEach(function(filter) {
                                        filter.style.display = 'block';
                                    });
                                } else {
                                    filters.forEach(function(filter) {
                                        if (!filter.classList.contains(value)) {
                                            filter.style.display = 'none';
                                        } else {
                                            filter.style.display = 'block';
                                        }
                                    });
                                }
                                filterButtons.forEach(function(button) {
                                    button.classList.remove('active');
                                });
                                this.classList.add('active');
                            });
                        });
                    });
                </script>
            </section>
        </div>
    </section> --}}
    {{-- **************************Process************* --}}
    {{-- <section id="process">
        <header class="center-align">
            <div class="subtitle  ">Process</div>
            <div class="sectionTitle">Working process</div>
            <div class="line mx-0"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <section id="timeline">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelinecontent">
                            <p class="contentTitle pt-3 text-end">Research</p>
                            <p class="content text-end">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 timelineImage">
                        <img src="{{ asset('images/timeline1.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelineImage">
                            <img src="{{ asset('images/timeline2.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-start">Research</p>
                            <p class="content text-start">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-end">Research</p>
                            <p class="content text-end">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 timelineImage">
                        <img src="{{ asset('images/timeline3.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5 border-right icon-right">
                        <div class="timelineImage">
                            <img src="{{ asset('images/timeline4.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="overlayIcon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="timelinecontent">
                            <p class="contentTitleBold text-start">Research</p>
                            <p class="content text-start">At vero eos et accusamus et iusto odio dignissimos quiblanditiis
                                praesentium At vero eos et accusamus et iusto odio dignissimos ducimusm.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </section> --}}
    {{-- **************************Team************* --}}
    {{-- <section id="team" class="mainSection bg-grey">
        <header class="center-align">
            <div class="subtitle  ">Our Team</div>
            <div class="sectionTitle">Our Creative Team</div>
            <div class="line mx-0"></div>
            <p class="content pt-3 pb-5">There are many variations of passages of Lorem Ipsum available, but the majority
                have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section class="card-group-horizontal">


                <div class="image-card-horizontal">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                    </div>
                    <div class="card-content">

                        <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                            the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s."
                        <div class="contentTitle">REINIER KOORENHOF</div>
                        <p class="content">Co-Founder
                            &
                            Technical Team Lead</p>
                        </p>

                    </div>
                </div>
                <div class="image-card-horizontal">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                    </div>
                    <div class="card-content">

                        <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                            the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s."
                        <div class="contentTitle">JUNAID ALI</div>
                        <p class="content">Co-Founder & Team Lead Services</p>
                        </p>

                    </div>
                </div>

            </section>
        </div>
    </section> --}}
    {{-- **************************Testimonial************* --}}
    {{-- <section id="testimonial" class="mainSection">

        <header class="center-align">
            <div class="subtitle  ">What Saye's Our Clients</div>
            <div class="sectionTitle">Our Testimonials</div>
            <div class="line mx-0 bg-white"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section id="owlcarousel">

                <div class="owl-carousel">
                    <div>

                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 1</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 2</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 3</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 4</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 5</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 6</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 7</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 8</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 9</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 10</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team2.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 11</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team3.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 12</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-card-horizontal">
                            <div class="image"> <img src="{{ asset('images/team1.webp') }}" alt="...">
                            </div>
                            <div class="card-content">

                                <p class="content">" I just brought it and i love it. Lorem Ipsum is simply dummy text of
                                    the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s."
                                <div class="contentTitle">Karmo Kerin 13</div>
                                <p class="content">CEO - Apptrend</p>
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>
    </section> --}}

    {{-- <section id="pricingplan" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">left</div>
                <div class=" col-md-6 col-12">right</div>
            </div>
        </div>
    </section> --}}
    {{-- **************************Progress************* --}}

    {{-- <section id="progress" class="mainSection overlaySection">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white text-white">2050+</div>
                            <p class="contentBold text-white text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card-vertical">
                        <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                        <div class="card-content center-align">
                            <div class="contentTitleBold text-white">2050+</div>
                            <p class="contentBold text-white">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    {{-- **************************News************* --}}

    {{-- <section id="news" class="mainSection">
        <header class="center-align">
            <div class="subtitle  ">Latest News</div>
            <div class="sectionTitle">Latest News & Blog</div>
            <div class="line mx-0"></div>
            <p class="content">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
        </header>
        <div class="container">
            <section class="card-group-horizontal">

                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
                <div class="image-card-vertical">
                    <div class="image"> <img src="{{ asset('images/team1.webp') }}" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-content center-align">
                        <div>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By Admin</span>
                            <span class="icon"><i class="bi bi-bar-chart-line"></i></span>
                            <span class="content">By 30 Jan 2023</span>
                        </div>
                        <p class="contentTitleSmall my-3 ">Monthly Web Development Update Design Ethics & Clarity Over
                            Solution System</p>
                        <p class="content">Lorem ipsum dolor sit amet, diam felis maecenas lectus ac, volutpat arcu, urna
                            ac.
                            Vivamus dignissim sapien amet vivamu</p>
                        <a href="" class="buttonStyle">Read More</a>
                    </div>

                </div>
            </section>
        </div>
    </section> --}}

    {{-- <section id="clients" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-12">left</div>
                <div class=" col-md-6 col-12">right</div>
            </div>
        </div>
    </section> --}}

    {{-- **************************Contact************* --}}

    {{-- <section id="contact" class="mainSection">
        <div class="container">
            <div class="row">
                <div class=col-md-4>
                    <section class="card-group-vertical">

                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>
                        <div class="icon-card-horizontal">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <div class="card-content">
                                <div class="contentTitleSmall">Contact</div>
                                <p class="content">09854678392</p>
                                <p class="content">Yourmail@gmail.com</p>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="col-md-8 ">
                    <div class="container formSection">
                        <header class="center-align">
                            <div class="subtitle  ">Get In Touch</div>
                            <div class="sectionTitle">Ready To Get Started</div>
                            <div class="line mx-0"></div>
                            <p class="content">There are many variations of passages of Lorem Ipsum available, but
                                the majority have
                                suffered alteration in some form.</p>
                        </header>
                        {{ Form::open(['url' => 'foo/bar']) }}
                        {{ Form::token() }}
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                     
                                        {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Your
                                                                                                                                                                                                Name',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">


                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}</div>
                                <div class="col-6">{!! Form::number('number', null, ['class' => 'form-control', 'placeholder' => 'Number']) !!}</div>

                                <div class="row">
                                    <div class="col-12">{!! Form::textarea('message', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Your Message',
                                        'rows' => '3',
                                        'cols' => '15',
                                    ]) !!}</div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center ">{!! Form::submit('submit', ['class' => 'btn flex-grow-1']) !!}</div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
@section('scripts')
    <script src="{{ asset('js/sample 2/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/sample 2/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>  
    {{-- /**--------------------------------------------
    * Particle Js
    *---------------------------------------------**/ --}}
    <script src="{{ asset('js/sample 2/particle.min.js') }}"></script>

    {{-- /*--------------- END OF Particle Js --------------*/ --}}
    <script>
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <script>
        let i = 2;

        $(document).ready(function() {
            move_circle();

            setInterval(function() {
                var dataTab = $(".itemDot.active").data("tab");
                if (dataTab > 6 || i > 6) {
                    dataTab = 1;
                    i = 1;
                }
                $(".itemDot").removeClass("active");
                $('[data-tab="' + i + '"]').addClass("active");
                $(".CirItem").removeClass("active");
                $(".CirItem" + i).addClass("active");
                i++;

                $(".dotCircle").css({
                    transform: "rotate(" + (360 - (i - 2) * 36) + "deg)",
                    transition: "2s",
                });
                $(".itemDot").css({
                    transform: "rotate(" + (i - 2) * 36 + "deg)",
                    transition: "1s",
                });
            }, 3000);
        });


        function move_circle() {
            var radius = 200;
            var fields = $(".itemDot");
            var container = $(".round");
            var width = container.width();
            radius = width / 2;

            var height = container.height();
            var angle = 0,
                step = (2 * Math.PI) / fields.length;

            fields.each(function() {
                var x = Math.round(
                    width / 2 + radius * Math.cos(angle));
                var y = Math.round(
                    height / 2 + radius * Math.sin(angle));
                if (window.console) {
                    // console.log($(this).text(), x, y);
                }

                $(this).css({
                    left: x + "px",
                    top: y + "px",
                });
                angle += step;
            });

            $(".itemDot").click(function() {
                var dataTab = $(this).data("tab");
                $(".itemDot").removeClass("active");
                $(this).addClass("active");
                $(".CirItem").removeClass("active");
                $(".CirItem" + dataTab).addClass("active");
                i = dataTab;

                $(".dotCircle").css({
                    transform: "rotate(" + (360 - (i - 1) * 36) + "deg)",
                    transition: "2s",
                });
                $(".itemDot").css({
                    transform: "rotate(" + (i - 1) * 36 + "deg)",
                    transition: "1s",
                });
            });
        }
        /**--------------------------------------------
         *               Particle JS
         *---------------------------------------------**/
        // ParticlesJS Config.
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 50,
                    density: {
                        enable: true,
                        value_area: 700,
                    },
                },
                color: {
                    value: "#ffffff",
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000",
                    },
                    polygon: {
                        nb_sides: 5,
                    },
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false,
                    },
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false,
                    },
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1,
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200,
                    },
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab",
                    },
                    onclick: {
                        enable: true,
                        mode: "push",
                    },
                    resize: true,
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1,
                        },
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3,
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4,
                    },
                    push: {
                        particles_nb: 4,
                    },
                    remove: {
                        particles_nb: 2,
                    },
                },
            },
            retina_detect: true,
        });

        /*--------------- END OF SECTION --------------*/

        // ********************* Carousel**************
        if ($(".tp-banner").length > 0) {
            $(".tp-banner")
                .show()
                .revolution({
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    responsiveLevels: [1240, 1024, 778, 480],

                    delay: 6000,
                    startheight: 510,
                    startwidth: 1008,
                    hideThumbs: 1000,
                    navigationType: "none",
                    touchenabled: "on",
                    onHoverStop: "on",
                    navOffsetHorizontal: 0,
                    navOffsetVertical: 0,
                    dottedOverlay: "none",
                    fullWidth: "on",
                    hideTimerBar: "on",
                });
        }

        // *********************End Carousel**************
        gsap.set("#pendulum1", { transformPerspective: 500 });
        gsap.from("#pendulum1", { x:0,y:0});
        gsap.to("#pendulum1", { duration: 20,
  rotation: 360,
  transformOrigin: "left top",});
        // gsap.to("#pendulum1", { scaleY:2,duration: 10 });
    </script>
@endsection
@endsection
