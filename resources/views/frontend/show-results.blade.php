@extends('frontend.layouts.app')
@section('title','Show Results')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/SHOW-RESULTS.png'),'breedcrumb'=>'Show Results','page_title'=>'Show Results' , 'overlay' => 'none'])

    <div class="section-full content-inner">
        <!-- content start -->
        <div class="container">

            <div class="m-b15">
                <!-- END Result Section -->
                <div class="m-b15">
                    <div class="section-head inner-haed">
                        <h2 class="h2 text-center"> Welcome to the Pakistan Feline Club Event Show Results Page</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Result -->
        <!--<div class="section-full score-board bg-white content-inner-2">-->
        <!--    <div class="container">-->
        <!--        <div class="section-content">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-5 col-md-5">-->
        <!--                    <div class="team-box-left clearfix">-->
        <!--                        <div class="player pull-right">-->
        <!--                            <img width="192" height="351"-->
        <!--                                src="{{asset('frontend/images/home-page-images/sr-1.jpg')}}" alt="" />-->
        <!--                        </div>-->
        <!--                        <div class="team-result text-white text-left">-->
        <!--                            <h3 class="text-uppercase font-weight-600 m-a0">PUG</h3>-->
        <!--                            <div class="m-tb5"><span class="text-green">1st</span></div>-->
        <!--                            <a href="javascript:void(0);" class="site-button radius-sm">See Result</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-lg-2 col-md-2 text-center p-lr0">-->
        <!--                    <div class="score-info">-->
        <!--                        <span class="vs">&nbsp;</span>-->
        <!--                        <span class="score">1-2</span>-->
        <!--                        <p>PKC-IKU CACIB Show Lahore 27 Feb 2022</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-lg-5 col-md-5">-->
        <!--                    <div class="team-box-right clearfix">-->
        <!--                        <div class="player pull-left">-->
        <!--                            <img width="192" height="351"-->
        <!--                                src="{{asset('frontend/images/home-page-images/sr-2.jpg')}}" alt="" />-->
        <!--                        </div>-->
        <!--                        <div class="team-result text-white text-right">-->
        <!--                            <h3 class="text-uppercase font-weight-600 m-a0">PUG</h3>-->
        <!--                            <div class="m-tb5"><span class="text-red">2nd</span></div>-->
        <!--                            <a href="javascript:void(0);" class="site-button radius-sm">See Result</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Latest Result END -->
        <div class="section-full content-inner">
            <!-- content start -->
            <div class="container">

                <div class="m-b15">
                    <!-- END Result Section -->
                    <div class="m-b15">
                        <div class="section-head inner-haed">
                            <h3 class="">The list of shows with results available are displayed below</h3>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                @foreach($events as $event)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a20 center">
                                        <div class="icon-content p-t25 ">
                                            <h5 class="dez-tilte text-uppercase border-bottom p-b15"><b>
                                                    {{$event->title ?? ''}}</b></h5>
                                            <h5 class="dez-tilte text-uppercase border-bottom p-b15"><b>Date:</b> {{date('M, d Y',strtotime($event->event_date))}}</h5>
                                            @if($event->venue != null)
                                                <p Class="border-bottom p-b15"><b>Venue:</b> {{$event->venue}}</p>
                                            @endif
                                            <p Class="border-bottom p-b15">Judge(s) : {{implode(',',json_decode($event->judges,true))}}</p>
                                            <a href="{{route('show-results-pkc',[$event->slug,base64_encode($event->id)])}}">
                                                <h2 class="dez-tilte text-uppercase bg-cus text-light radius-sm"><b>RESULTS</b>
                                                </h2>
                                            </a>

                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- END Result Section -->
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
