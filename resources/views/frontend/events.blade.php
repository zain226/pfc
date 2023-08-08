@extends('frontend.layouts.app')
@section('title','Events')
@section('content')
<div class="page-content">
    @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/EVENTS.png'),'breedcrumb'=>'Events','page_title'=>'Events'
    , 'overlay' => 'none'])
    <!-- Next Match -->
    <!--    <div class="section-full bg-white content-inner-1 bg-img-fix overlay-white-dark"-->
    <!--        style="background-image:url({{asset('frontend/images/background/bg5.jpg')}}); background-position:center;">-->
    <!--        <div class="container">-->
    <!--            <div class="row" style="text-align: center">-->
    <!--{{--                {!! $code ?? '' !!}--}}-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="container">-->
    <!--<div class="section-head text-center ">-->
    <!--    <h2 class="h2 text-uppercase">PKC Events Update</h2>-->
    <!--    <div class="dez-separator-outer ">-->
    <!--        <div class="dez-separator bg-primary style-liner"></div>-->
    <!--    </div>-->
    <!--    <p>The Pakistan Feline Club proudly announces the "SHOW SEASON 2022-23. I am very hopeful that these-->
    <!--        shows would be very successful and colorful. I also request all cat fanciers to extend their maximum-->
    <!--        participation by bringing their cats in the ring.</p>-->
    <!--</div>-->
    <!--<div class="section-content">-->
    <!--    <div class="next-match owl-loaded owl-theme owl-dots-none owl-carousel owl-btn-center-lr">-->
    <!--        <div class="item p-t20">-->
    <!--            <div class="row next-match-team clearfix m-b30 justify-content-center">-->
    <!--                <h2 class="h2">All Bread Championship Show</h2>-->
    <!--            </div>-->
    <!--            <div class="countdown dez-style-1 text-center">-->
    <!--                <div class="date">-->
    <!--                    <span class="time days text-primary"></span>-->
    <!--                    <span class="time-counting">Days</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time hours text-primary"></span>-->
    <!--                    <span class="time-counting">Hours</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time mins text-primary"></span>-->
    <!--                    <span class="time-counting">Minutess</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time secs text-primary"></span>-->
    <!--                    <span class="time-counting">Second</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="m-t30 loction text-center">-->
    <!--                <strong>November 20th 2022 | 09:00 AM</strong>-->
    <!--                <strong>Lahore</strong>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="item p-t20">-->
    <!--            <div class="row next-match-team clearfix m-b30 justify-content-center">-->
    <!--                <h2 class="h2">PKC All Bread CACIB Show</h2>-->
    <!--            </div>-->
    <!--            <div class="countdown dez-style-1 text-center">-->
    <!--                <div class="date">-->
    <!--                    <span class="time days text-primary"></span>-->
    <!--                    <span class="time-counting">Days</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time hours text-primary"></span>-->
    <!--                    <span class="time-counting">Hours</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time mins text-primary"></span>-->
    <!--                    <span class="time-counting">Minutess</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time secs text-primary"></span>-->
    <!--                    <span class="time-counting">Second</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="m-t30 loction text-center">-->
    <!--                <strong>December 11th 2022 | 09:00 AM</strong>-->
    <!--                <strong>Karachi</strong>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="item p-t20">-->
    <!--            <div class="row next-match-team clearfix m-b30 justify-content-center">-->
    <!--                <h2 class="h2">PKC All Breed Championship Show</h2>-->
    <!--            </div>-->
    <!--            <div class="countdown dez-style-1 text-center">-->
    <!--                <div class="date">-->
    <!--                    <span class="time days text-primary"></span>-->
    <!--                    <span class="time-counting">Days</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time hours text-primary"></span>-->
    <!--                    <span class="time-counting">Hours</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time mins text-primary"></span>-->
    <!--                    <span class="time-counting">Minutess</span>-->
    <!--                </div>-->
    <!--                <div class="date">-->
    <!--                    <span class="time secs text-primary"></span>-->
    <!--                    <span class="time-counting">Second</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="m-t30 loction text-center">-->
    <!--                <strong>December 18th 2022 | 09:00 AM</strong>-->
    <!--                <strong>Rawalpindi</strong>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Next Match End -->
    <div class="section-full content-inner">
        <!-- content start -->
        <div class="container">

            <div class="m-b15">
                <!-- Event Section -->
                <div class="m-b15">
                    <div class="section-head inner-haed">
                        <h2 class="text-uppercase text-center h2">PKC SHOW SCHEDULE 2023-24</h2>

                    </div>
                    <div class="section-content">
                        <div class="row">
                            @foreach($events as $key => $custom_events)
                            <div class="col-md-12 text-center">
                                <h3 class="text-center">{{$key}} Shows</h3>
                            </div>
                            @foreach($custom_events as $e)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a20 center">
                                    <div class="icon-content p-t25 ">
                                        <h5 class="dez-tilte text-uppercase border-bottom p-b15">{{$e->title}}</h5>
                                        <p class="dez-tilte text-uppercase border-bottom p-b15">
                                            {{customDate($e->event_date,'F d, Y')}}</p>
                                        <p Class="border-bottom p-b15">City : {{$e->city}}</p>
                                        <p Class="border-bottom p-b15 text-danger">Entries close on
                                            {{customDate($e->entry_closing_date,'d F Y')}}
                                        </p>
                                        @if($e->is_closed == 0)
                                        <a href="{{route('entries_registration')}}">
                                            <h2 class="dez-tilte text-uppercase bg-success text-light radius-sm">
                                                <b>ENTRIES OPEN</b>
                                            </h2>
                                        </a>
                                        @else
                                        <a href="javascript:void(0);">
                                            <h2 class="dez-tilte text-uppercase bg-danger text-light radius-sm">
                                                <b>ENTRIES ARE CLOSED</b>
                                            </h2>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach

                        </div>
                    </div>

                    <!-- END Event Section -->
                </div>
            </div>
        </div>

    </div>
    @endsection
    @section('scripts')
    <script>
        (function ($) {

            $.fn.countdown = function (options, callback) {

                var settings = {
                    'date': '{{strtotime('
                    November 20,
                    2023 9: 00 am ')}}'
                }

                if (options) {
                    $.extend(settings, options)
                }

                this_sel = $(this);

                function count_ecec() {



                    eventDate = Date.parse(settings['date']) / 1000;
                    currentDate = Math.floor($.now() / 1000);

                    if (eventDate <= currentDate) {
                        callback.call(this);
                        clearInterval(interval);
                    }

                    seconds = eventDate - currentDate;

                    if (this_sel.find('.years').length > 0) {
                        years = Math.floor(seconds / (60 * 60 * 24 * 365));
                        seconds -= years * 60 * 60 * 24 * 365;
                    }

                    if (this_sel.find('.days').length > 0) {
                        days = Math.floor(seconds / (60 * 60 * 24));
                        seconds -= days * 60 * 60 * 24;
                    }
                    if (this_sel.find('.hours').length > 0) {
                        hours = Math.floor(seconds / (60 * 60));
                        seconds -= hours * 60 * 60;
                    }
                    if (this_sel.find('.mins').length > 0) {
                        minutes = Math.floor(seconds / 60);
                        seconds -= minutes * 60;
                    }


                    if (this_sel.find('.years').length > 0) {
                        years = (String(years).length < 2 ? '0' + years : years);
                    }

                    if (this_sel.find('.days').length > 0) {
                        days = (String(days).length < 2 ? '0' + days : days);
                    }
                    if (this_sel.find('.hours').length > 0) {
                        hours = (String(hours).length !== 2 ? '0' + hours : hours);
                    }
                    if (this_sel.find('.mins').length > 0) {
                        minutes = (String(minutes).length !== 2 ? '0' + minutes : minutes);
                    }
                    seconds = (String(seconds).length !== 2 ? '0' + seconds : seconds);

                    if (!isNaN(eventDate)) {
                        if (this_sel.find('.years').length > 0) {
                            this_sel.find('.years').text(years);
                        }
                        if (this_sel.find('.days').length > 0) {
                            this_sel.find('.days').text(days);
                        }
                        if (this_sel.find('.hours').length > 0) {
                            this_sel.find('.hours').text(hours);
                        }
                        if (this_sel.find('.mins').length > 0) {
                            this_sel.find('.mins').text(minutes);
                        }
                        this_sel.find('.secs').text(seconds);
                    }


                }

                count_ecec();
                interval = setInterval(count_ecec, 1000);


            }

        })(jQuery);

    </script>
    @endsection
