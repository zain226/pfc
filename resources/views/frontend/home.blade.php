@extends('frontend.layouts.app')
@section('title','Home')
@section('styles')
@endsection
@section('content')
<!--start top header-->
<!--end top header-->
<div class="page-content">
    <!-- Slider -->
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                    data-alias="news-gallery36" data-source="gallery"
                    style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                    <div id="slider_01" class="rev_slider fullwidthabanner" style="display:none;"
                        data-version="5.3.0.2">
                        <ul>
                            <!-- SLIDE  1-->
                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3=""
                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                data-param9="" data-param10="">
                                <!-- MAIN IMAGE -->
                                <img id="main1-bg-img" src="{{asset('frontend/images/main-slider/main1-3.png')}}" alt=""
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Newspaper-Subtitle  text-primary tp-resizeme"
                                    id="slide-100-layer-1" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['100','300','300','300']" data-fontsize="['40','35','20','20']"
                                    data-lineheight="['45','40','25','25']" data-width="['800','800','600','400']"
                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; white-space: nowrap;text-transform:left; font-family:Oswald; font-weight:600;">

                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['150','350','330','330']"
                                    data-fontsize="['80','80','50','30']" data-lineheight="['85','85','55','35']"
                                    data-width="['800','800','600','400']" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: normal;text-transform:left; font-weight:600; line-height:80px; font-family:Oswald; color:#fff;">
                                      <span class="text-primary"> </span>
                                </div>
                            </li>
                            <!--  END SLIDE 1-->
                            <!-- SLIDE 2 -->
                            <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3=""
                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                data-param9="" data-param10="">
                                <!-- MAIN IMAGE -->
                                <img id="main3-bg-img"src="{{asset('frontend/images/main-slider/main3.png')}}" alt=""
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Newspaper-Subtitle  text-primary tp-resizeme"
                                    id="slide-200-layer-1" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['100','300','300','300']" data-fontsize="['40','35','20','20']"
                                    data-lineheight="['45','40','25','25']" data-width="['800','800','800','420']"
                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; white-space: nowrap;text-transform:left; font-family:Oswald; font-weight:600;">

                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['150','350','330','330']"
                                    data-fontsize="['80','80','50','30']" data-lineheight="['85','85','55','35']"
                                    data-width="['1000','1000','1000','420']" data-height="none"
                                    data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: normal;text-transform:left; font-weight:600; line-height:80px; font-family:Oswald; color:#fff;">
                                      <span class="text-primary"> </span>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['250','450','400','380']"
                                    data-fontsize="['16','15','14','14']" data-lineheight="['26','25','24','24']"
                                    data-width="['700','600','600','420']" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#fff; font-family:roboto">
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption" id="slide-200-layer-4" data-x="['left','left','left','left']"
                                    data-hoffset="['53','53','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['350','550','500','510']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;">

                                </div>

                                <div class="tp-caption" id="slide-200-layer-5" data-x="['left','left','left','left']"
                                    data-hoffset="['200','200','200','180']" data-y="['top','top','top','top']"
                                    data-voffset="['350','550','500','510']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;">

                                </div>
                            </li>
                            <!-- END SLIDE 2 -->
                            <!-- SLIDE 3 -->
                            <li data-index="rs-300" data-transition="parallaxvertical" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default"
                                data-thumb="{{asset('frontend/images/main-slider/main3.png')}}" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="PAKISTAN KENNEL CLUB" data-param1=""
                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                data-param7="" data-param8="" data-param9="" data-param10="">
                                <!-- MAIN IMAGE -->
                                <img id="main4-bg-img"src="{{asset('frontend/images/main-slider/main4.png')}}" alt=""
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Newspaper-Subtitle  text-primary tp-resizeme"
                                    id="slide-200-layer-1" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['100','300','300','300']" data-fontsize="['40','35','20','20']"
                                    data-lineheight="['45','40','25','25']" data-width="['800','800','800','420']"
                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; white-space: nowrap;text-transform:left; font-family:Oswald; font-weight:600;">

                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['150','350','330','330']"
                                    data-fontsize="['80','80','50','30']" data-lineheight="['85','85','55','35']"
                                    data-width="['1000','1000','1000','420']" data-height="none"
                                    data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: normal;text-transform:left; font-weight:600; line-height:80px; font-family:Oswald; color:#fff;">
                                      <span class="text-primary"> </span>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['250','450','400','380']"
                                    data-fontsize="['16','15','14','14']" data-lineheight="['26','25','24','24']"
                                    data-width="['700','600','600','420']" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#fff; font-family:roboto">
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption" id="slide-200-layer-4" data-x="['left','left','left','left']"
                                    data-hoffset="['53','53','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['350','550','500','510']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;">
                                </div>

                                <div class="tp-caption" id="slide-200-layer-5" data-x="['left','left','left','left']"
                                    data-hoffset="['200','200','200','180']" data-y="['top','top','top','top']"
                                    data-voffset="['350','550','500','510']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;">
                                </div>
                            </li>
                            <!-- END SLIDE 3 -->
                        </ul>
                        <div class="tp-bannertimer tp-bottom bg-primary"></div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- Slider END -->
    <!-- Our Services -->
    <div class="section-full content-inner bg-white mb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="dez-accordion toggle space custom-shadow-light radius-sm" id="accordion7">
                        <div class="panel">
                            <div class="acod-head">
                                <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne7" class="collapsed"><i class="fa fa-globe"></i> OUR CLUB</a> </h5>
                            </div>
                            <div id="collapseOne7" class="acod-body collapse">
                                <div class="acod-content">
                                    <ul class="list-arrow-circle primary">
                                        <li><a href="{{route('about')}}">About The Club</a></li>
                                        <li><a href="{{route('team')}}">The PKC Team</a></li>
                                        <li><a href="{{route('judges')}}">PKC Judges</a></li>
                                        <li><a href="{{route('rules_regulations')}}">Club Rules & Regulations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel custom-shadow-light radius-sm">
                        <div class="acod-head">
                            <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree1" class="collapsed"><i class="fa fa-cog"></i> OUR SERVICES </a> </h5>
                        </div>
                        <div id="collapseThree1" class="acod-body collapse">
                            <div class="acod-content">
                                <ul class="list-arrow-circle primary">
                                    <li><a href="{{route('membership')}}">Become a Member</a></li>
                                    <li><a href="{{route('database.index')}}">Browse the Cat Database</a></li>
                                    <li><a href="{{route('login')}}">Member Login</a></li>
                                    <li><a href="{{route('event.index')}}">Upcoming Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Our Services -->
    <!-- About The PKC -->
    <div class="container">
        <div class="section-head text-center mb-2">
            <h2 class="h2 text-uppercase">About The PKC</h2>
            <div class="dez-separator-outer ">
                <div class="dez-separator bg-primary style-liner"></div>
            </div>
        </div>
        <div>
            <p class="text-justify mt-0">PKC is a non-profit organization, affiliated with International Kennel Union
                IKU. Mr Syed Imtiaz
                Hussain Shah is the Chairperson and the President. PKC is honored to conduct cat shows of Pakistan
                Army (Remount Veterinary and Farms Corps), Defense Housing Authority (DHA), Dawn News, Agricultural
                Veterinary Universities of Pakistan and Governments Livestock department, during National Horse and
                cattle shows.</p>
        </div>
        <div class="section-content text-center ">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text-left">
                        <h3 class="font-weight-600 m-t10">OUR MISSION STATEMENT</h3>
                        <p class="text-justify">Pakistan Feline Club is devoted to Promote the passion of keeping,
                            breeding and
                            Showcasing of Purebred Cats. We strive to enable our valued members to actively
                            encourage and participate in PKC conformation, training seminars, and other events. We
                            Patronise to promote responsible heritage breeding to preserve all recognized breeds and
                            strengthen the unique relationship between cats and their owners.
                        </p>
                        <div class="row">
                            <!-- <div class="col-lg-4 col-sm-4 col-4">
                                    <div class="dez-media dez-img-effect off-color">
                                        <img width="159" height="153"
                                            src="{{asset('frontend/images/home-page-images/home3.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-4 ">
                                    <div class="dez-media dez-img-effect off-color">
                                        <img width="159" height="153"
                                            src="{{asset('frontend/images/home-page-images/home4.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-4 ">
                                    <div class="dez-media dez-img-effect  off-color">
                                        <img width="159" height="153"
                                            src="{{asset('frontend/images/home-page-images/home5.jpg')}}" alt="" />
                                    </div>
                                </div> -->
                            <div class="col-lg-12 col-sm-6">
                                <ul class="list-arrow-circle primary">
                                    <li>We love purebred cats.</li>
                                    <li>We cherish cats as our companions.</li>
                                    <li>We protect their health and well-being.</li>
                                    <li>We are committed to promote the sport of the purebred cats.</li>
                                    <li>We are committed to safeguard the interests of the cat owners.</li>
                                    <li>We uphold high standards for the administration and operation at The PKC.</li>
                                    <li>We recognize the critical importance of our club, its members and volunteers.
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- <div class="m-tb30">
                                <a href="#" class="site-button">Read More</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="dez-box">
                        <div class="dez-media dez-img-effect off-color ">
                            <img width="555" height="393"
                                src="{{('frontend/images/home-page-images/home-img.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About The PKC -->
    <!-- Icon Information -->
    <div class="section-full bg-img-fix content-inner overlay-black-middle our-projects-galery"
        style="background-image:url({{asset('frontend/images/home-page-images/icons-background.jpg')}}); background-position:top;">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-sm-6 m-b30">
                    <div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                        <div class="sports-icon ">
                            <a href="{{route('kennel_directory.index')}}">
                                <img width="85" height="85" src="{{asset('frontend/images/kennel.png')}}" alt="" />
                            </a>
                        </div>
                        <a href="{{route('kennel_directory.index')}}">
                            <h4 class="text-capitalize">Kennel Directory</h4>
                        </a>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p class="m-b0">PKC Kennel Directory facilitate our members with the record of all breeding's
                            and the list of cats that a person own and many more...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 m-b30">
                    <div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                        <div class="sports-icon ">
                            <a href="{{route('database.index')}}">
                                <img width="85" height="85" src="{{asset('frontend/images/pedigree.png')}}" alt="" />
                            </a>
                        </div>
                        <a href="{{route('database.index')}}">
                            <h4 class="text-capitalize">Pedigree Verification</h4>
                        </a>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p class="m-b0">Take pride in your cat's heritage with a unique record from the PKC that details
                            your cats' family tree and order one of our NEW Pedigree.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 m-b30 ">
                    <div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                        <div class="sports-icon ">
                            <a href="{{route('event.index')}}">
                                <img width="85" height="85" src="{{asset('frontend/images/events.png')}}" alt="" />
                            </a>
                        </div>
                        <a href="{{route('event.index')}}">
                            <h4 class="text-capitalize">Events</h4>
                        </a>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p class="m-b0">You're joyfully invited to participate in these upcoming event. More offerings
                            are in the works, so check back often for the latest updates.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6  m-b30 ">
                    <div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                        <div class="sports-icon ">
                            <a href="{{route('membership')}}">
                                <img width="85" height="85" src="{{asset('frontend/images/membership.png')}}" alt="" />
                            </a>
                        </div>
                        <a href="{{route('membership')}}">
                        <h4 class="text-capitalize">Apply Membership</h4>
                        </a>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p class="m-b0">We welcome new applications to PKC!
                            Your first step is to review the information on fees & requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Icon Information END -->
    <!-- Latest NEWS-->
    <div class="section-full content-inner">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="h2 text-uppercase">latest NEWS</h2>
                <div class="dez-separator-outer ">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
                <p>
                    The Pakistan Feline Club proudly announces the "SHOW SEASON 2022-23. I am very hopeful that these
                    shows would be very successful and colorful. I also request all cat fanciers to extend their maximum
                    participation by bringing their cats in the ring
                </p>
            </div>
            <div class="section-content ">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 m-b30">
                        <div class="dez-box  blog-details">
                            <div class="dez-media dez-img-effect">
                                <img width="855" height="897"
                                    src="{{asset('frontend/images/home-page-images/news/news-left-1.png')}}" alt="">
                                <div
                                    class="dez-info-has p-a20 text-white no-hover bg-primary right-top skew-triangle skew-angle-1">
                                    <div class="text-white">
                                        <h4 class="title text-capitalize">PKC - PGSDC LG Show</h4>
                                        <div class="ow-post-meta">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>18
                                                        Dec</strong> <span> 2022</span> </li>
                                                <li class="post-author"><i class="fa fa-map-marker"></i>Rawalpindi </li>
                                            </ul>
                                        </div>
                                        {{--                                        <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting--}}
                                        {{--                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since--}}
                                        {{--                                            the 1500s, when an...</p>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 block">
                        <div class="row clearfix bg-primary blog-details m-b30 m-lr0">
                            <div class="col-lg-6 col-sm-6 p-a0">
                                <img width="428" height="424" class="img-height"
                                    src="{{asset('frontend/images/home-page-images/news/news-right-1.png')}}"
                                    height="100%" alt="" />
                            </div>
                            <div class="col-lg-6 col-sm-6 p-tb10 skew-triangle right-top">
                                <div class="text-white">
                                    <h4 class="title text-capitalize">PKC All Breed Championship Show</h4>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>18 Dec</strong>
                                                <span> 2022</span> </li>
                                            <li class="post-author"><i class="fa fa-map-marker"></i>Rawalpindi </li>
                                        </ul>
                                    </div>
                                    {{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
                                    {{--                                        Ipsum has been the industry's standard dummy text ever since.</p>--}}
                                    <a href="{{route('event.index')}}" class="site-button outline white ">Show All</a>
                                </div>
                            </div>
                        </div>
                        <div class="row bg-primary blog-details m-b30 m-lr0">
                            <div class="col-lg-6 col-sm-6 p-a0">
                                <img width="428" height="424" class="img-height"
                                    src="{{asset('frontend/images/home-page-images/news/news-right-2.png')}}" alt="" />
                            </div>
                            <div class="col-lg-6 col-sm-6 p-tb10 skew-triangle right-top">
                                <div class="text-white">
                                    <h4 class="title text-capitalize">PKC All Breed Championship Show</h4>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>15 Jan</strong>
                                                <span> 2022</span> </li>
                                            <li class="post-author"><i class="fa fa-map-marker"></i>Faisalabad </li>
                                        </ul>
                                    </div>
                                    {{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
                                    {{--                                        Ipsum has been the industry's standard dummy text ever since.</p>--}}
                                    <a href="{{route('event.index')}}" class="site-button outline white ">Show All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest blog NEWS -->
    <!-- PKC Team END -->
    <!-- Counter -->
    <div class="section-full bg-img-fix content-inner overlay-black-dark our-projects-galery"
        style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6 m-b15">
                    <div class="icon-bx-wraper center text-white">
                        <div class="icon-md m-b20"> <span class="icon-cell"> <i class="fa fa-group"></i></span>
                        </div>
                        <div class="m-t10">
                            <div class="dez-separator bg-primary"></div>
                        </div>
                        <div class="icon-content">
                            <h3 class="dez-tilte text-uppercase h3"> <span class="counter">600</span> + </h3>
                            <h6>Registered Members</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 m-b15">
                    <div class="icon-bx-wraper center text-white">
                        <div class="icon-md m-b20"> <span class="icon-cell"> <i class="fa fa-home"></i></span>
                        </div>
                        <div class="m-t10">
                            <div class="dez-separator bg-primary"></div>
                        </div>
                        <div class="icon-content">
                            <h3 class="dez-tilte text-uppercase h3"> <span class="counter">600</span> + </h3>
                            <h6>Registered Kennels</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 m-b15">
                    <div class="icon-bx-wraper center text-white">
                        <div class="icon-md m-b20"> <span class="icon-cell"> <i class="fa fa-paw"></i></span>
                        </div>
                        <div class="m-t10">
                            <div class="dez-separator bg-primary"></div>
                        </div>
                        <div class="icon-content">
                            <h3 class="dez-tilte text-uppercase h3"> <span class="counter">10000</span> + </h3>
                            <h6>Registered Cats</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 m-b15">
                    <div class="icon-bx-wraper center text-white">
                        <div class="icon-md m-b20"> <span class="icon-cell"> <i class="fa fa-calendar"></i></span>
                        </div>
                        <div class="m-t10">
                            <div class="dez-separator bg-primary"></div>
                        </div>
                        <div class="icon-content">
                            <h3 class="dez-tilte text-uppercase h3"> <span class="counter">20</span> + </h3>
                            <h6>Events Yearly</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter END -->
<!--    <div class="section-full bg-img-fix content-inner " style="background-image:url(images/background/bg1.jpg); background-position:center;">-->
<!--        <div class="container">-->
<!--            <div class="section-head  text-center">-->
<!--                <h2 class="h2">PKC GALLERY</h2>-->
<!--                <div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>-->
<!--                {{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>--}}-->
<!--            </div>-->
<!--            <div class="site-filters clearfix center  m-b40">-->
<!--            </div>-->
<!--            <div class="clearfix">-->
<!--                <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 m-b0 gallery lightgallery">-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/1-1-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--{{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/1-1-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/2-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/2-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/3-1-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/3-1-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/4-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/4-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/5-1-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/5-1-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/6-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/6-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/147992573_696040084411970_6929920271961952864_n-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/147992573_696040084411970_6929920271961952864_n-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/8-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/8-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/9-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/9-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/12-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/12-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/13-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/13-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="card-container col-lg-3 col-lg-3 col-sm-6">-->
<!--                        <div class="dez-box dez-gallery-box">-->
<!--                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">-->
<!--                                <a href="javascript:void(0);"> <img width="480" height="430" src="{{asset('frontend/images/home-page-images/gallery/12-300x200.jpg')}}"  alt=""> </a>-->
<!--                                <div class="overlay-bx">-->
<!--                                    <div class="overlay-icon">-->
<!--                                        {{--                                        <a href="portfolio-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a>--}}-->
<!--                                        <span data-exthumbimage="images/gallery/thumb/pic1.jpg" data-src="{{asset('frontend/images/home-page-images/gallery/12-300x200.jpg')}}" class="icon-bx-xs check-km" title="">-->
<!--												<i class="fa fa-picture-o"></i>-->
<!--											</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->

<!--                </ul>-->
<!--            </div>-->
<!--            <div class="section-head  text-center">-->
<!--                <div class="m-tb30">-->
<!--                    <a href="{{route('gallery.index')}}" class="site-button radius-xl custom-button-style">View More</a>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
    <!-- Market Palce -->
    <div class="section-full bg-white our-achievements">
        <div class="container">
            <div class="section-head text-center ">
                <h2 class="h2 text-uppercase">PKC Market place</h2>
                <div class="dez-separator-outer ">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
                <p>
                    We're introducing Marketplace, a convenient destination on Pakistan Feline Club to discover, buy and
                    sell puppies and cats with people in your community.
                </p>
            </div>
            <div class="section-content text-center ">
                <div class="row m-lr0">
                    @foreach($latest_four_adds as $add)
                    <div class="col-lg-3 col-sm-6 p-a0 m-b30">
                        <div class="dez-box dez-media">
{{--                            <img src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"  alt="{{$add->cat->pet_name}}">--}}
                            @if($add->cat->pet_pic != null)
                            <img width="292" height="292" src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"
                                 alt="">
                            @else
                                <img src="{{asset('frontend/images/cat-no-pic.png')}}"
                                     class="rounded float-center">
                            @endif
                            <div class="dez-info-has p-a20 bg-primary text-left skew-triangle right-top text-center">
                                <h4 class="text-capitalize">{{ucwords($add->title)}}</h4>
                                <a class="btn btn-success my-1 radius-sm" href="tel:{{$add->contact}}"><i class="fa fa-phone"></i> {{$add->contact}} </a>
                                @if($add->is_whatsapp == 1)
                                <a class="btn btn-success my-1 radius-sm" target="_blank" href="https://api.whatsapp.com/send/?phone={{$add->contact}}&text&type=phone_number&app_absent=0"><i class="fa fa-whatsapp"></i> {{$add->contact}} </a>
                                @endif

                            </div>
                        </div>
                        <div class="dez-title-bx bg-gray p-a20 text-left skew-triangle left-top">
                            <h4 class="m-a0 text-capitalize">
                                <span style="font-size: small">PKR</span> {{number_format($add->price, 2, '.', ' ') ?? ''}}
                            </h4>
                            @if($add->add_status == 'sold')
                            <span class="badge badge-danger px-4">Sold</span>
                            @endif
                            <div class="">{{ \Illuminate\Support\Str::limit($add->comment, $limit = 50, $end = '...') }} <a href="{{route('market_place_detail',$add->slug)}}" class="btn btn-sm btn-success radius-xl">View More</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="section-head  text-center">
                <div class="m-tb30">
                    <a href="{{route('market_place')}}" class="site-button radius-xl custom-button-style">View All</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Market Place -->
    <!-- PKC Team -->
    <!-- <div class="section-full bg-white content-inner">
        <div class="container">
            <div class="section-head text-center ">
                <h2 class="h2">PKC EXECUTIVE TEAM</h2>
                <div class="dez-separator-outer ">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
                <p>PKC have 13 x founding members, they are also members of management committee for decision makings
                    in different club matters to improve the breeding standards and breed specimen of cats in the
                    country.</p>
            </div>
            <div class="section-content text-center ">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="dez-box m-b30 dez-img-effect vertical-pan dez-staff">
                            <div class="dez-media vertical-pan dez-img-effect">
                                <a href="javascript:;">
                                    <img src="{{asset('frontend/images/home-page-images/team/syed-imtiaz-shah.jpeg')}}"
                                        alt="" width="300" height="306">
                                </a>
                            </div>
                            <div class="p-a15 bg-primary text-white dez-team">
                                <h4 class="dez-title text-capitalize m-t0">Syed Imtiaz Shah</h4>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-white style-liner"></div>
                                </div>
                                <span class="dez-member-position">President PKC & PGSDC</span>
                                <div class="m-t10">
                                    <ul class="dez-social-icon dez-social-icon-lg border">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p text-white"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="dez-box m-b30 dez-img-effect vertical-pan dez-staff">
                            <div class="dez-media vertical-pan dez-img-effect">
                                <a href="javascript:;">
                                    <img src="{{asset('frontend/images/home-page-images/team/usama-malik.jpg')}}" alt=""
                                        width="300" height="306">
                                </a>
                            </div>
                            <div class="p-a15 bg-primary text-white dez-team">
                                <h4 class="dez-title text-capitalize m-t0">Usama Malik</h4>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-white style-liner"></div>
                                </div>
                                <span class="dez-member-position">JUDGE PROFILE</span>
                                <div class="m-t10 ">
                                    <ul class="dez-social-icon dez-social-icon-lg border">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p text-white"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="dez-box m-b30 dez-img-effect vertical-pan dez-staff">
                            <div class="dez-media vertical-pan dez-img-effect">
                                <a href="javascript:;">
                                    <img src="{{asset('frontend/images/home-page-images/team/agha-wanood-kashim.jpg')}}"
                                        alt="" width="358" height="460">
                                </a>
                            </div>
                            <div class="p-a15 bg-primary text-white dez-team">
                                <h4 class="dez-title text-capitalize m-t0">Agha Wanood Kashim</h4>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-white style-liner"></div>
                                </div>
                                <span class="dez-member-position">JUDGE PROFILE</span>
                                <div class="m-t10 ">
                                    <ul class="dez-social-icon dez-social-icon-lg border">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p text-white"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="dez-box m-b30 dez-img-effect vertical-pan dez-staff">
                            <div class="dez-media vertical-pan dez-img-effect">
                                <a href="javascript:;">
                                    <img src="{{asset('frontend/images/home-page-images/team/mansoor-ali-zaheer.jpg')}}"
                                        alt="" width="358" height="460">
                                </a>
                            </div>
                            <div class="p-a15 bg-primary text-white dez-team">
                                <h4 class="dez-title text-capitalize m-t0">Mansoor Ali Zaheer</h4>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-white style-liner"></div>
                                </div>
                                <span class="dez-member-position">JUDGE PROFILE</span>
                                <div class="m-t10 ">
                                    <ul class="dez-social-icon dez-social-icon-lg border">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin text-white"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p text-white"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
