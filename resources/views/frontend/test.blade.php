@extends('frontend.layouts.app')
@section('title','Home')
@section('styles')
<style>
    @media (max-width: 768px) {
        .tp-leftarrow {
            display: none !important;
        }

        .tp-rightarrow {
            display: none !important;
        }
    }

    @media (min-width: 767px) {
        .absolute-on-large {
            position: absolute;
        }
    }

    .mb-2-cus {
        margin-bottom: 0rem !important;
    }
</style>
@endsection
@section('content')
<!--start top header-->
<!--end top header-->
<div class="page-content">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" style="max-height:600px">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('frontend/images/main-slider/main1-3.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('frontend/images/main-slider/main3.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('frontend/images/main-slider/main4.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider END -->
    <div class="top-bar" style="background:#216741;">
        <div class="container">

            <div class="section-head text-center mb-2-cus">
                <h2 class="h2 text-uppercase" style="color:#ffffff;">LATEST UPDATES</h2>
                <span style="margin:auto;color:white">
                    <marquee behavior="" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                      {{$setting['latest_news1'] ?? ''}} &nbsp; <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        &nbsp; {{$setting['latest_news2'] ?? ''}} &nbsp; <i class="fa fa-dot-circle-o"
                            aria-hidden="true"></i> &nbsp; {{$setting['latest_news3'] ?? ''}}
                    </marquee>
                </span </div> </div> </div> </div> <!-- About The PKC -->
                <div class="section-full content-inner" style="padding-bottom:0px !important">
                    <div class="container">
                        <div class="section-head text-center mb-2">
                            <h2 class="h2 text-uppercase">About The PKC</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-justify mt-0">Pakistan Feline Club is a non-profit organization, affiliated
                                with International Kennel Union. Mr. Syed Imtiaz Hussain Shah is the chairman and the
                                president of the club. Pakistan Feline Club is honoured to conduct cat shows of Pakistan
                                Army (Remount Veterinary and Farms Corps), Defence Housing Authority , Dawn News,
                                Agricultural Veterinary Universities of Pakistan and Governments Livestock Department,
                                during National Horse and Cattle Shows.</p>
                        </div>
                        <div class="section-content text-center " style="padding-bottom:0px !important">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="text-left">
                                        <h3 class="font-weight-600 m-t10 text-center">OUR MISSION STATEMENT</h3>
                                        <p class="text-justify">PakistanPakistan Feline Club is dedicated to promoting
                                            the passion for keeping, breeding, and showcasing purebred cats. Our mission
                                            is to empower our esteemed members to actively engage in PKC conformation,
                                            training seminars, and other prestigious events. We are committed to
                                            fostering responsible heritage breeding practices to safeguard all
                                            recognized breeds and enhance the special bond between cats
                                            and their owners.</p>
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
                                                    <li>Promote and protect the welfare of purebred cats</li>
                                                    <li>Preserve breed standards and advance responsible cat ownership
                                                    </li>
                                                    <li>Be the leading authority on pedigree cats</li>
                                                    <li>Foster a community of dedicated breeders, exhibitors, and
                                                        enthusiasts</li>
                                                    <li>Maintain breed integrity and health through education and
                                                        research</li>
                                                    <li>Provide resources and support for responsible cat owners</li>
                                                    <li>Organize and sanction cat shows, trials, and competitions</li>
                                                    <li>Celebrate excellence in breeding and performance</li>
                                                    <li>Ensure the future and well-being of reach breed.</li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- <div class="m-tb30">
                                <a href="#" class="site-button">Read More</a>
                            </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="dez-box h-100">
                                        <div class="dez-media dez-img-effect off-color h-100">
                                            <img width="722px" height="521px" class="absolute-on-large"
                                                style="bottom:0px;height:100%"
                                                src="{{('frontend/images/home-page-images/home-img.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About The PKC -->
                <!-- Icon Information -->
                <div class="section-full bg-img-fix content-inner overlay-black-middle our-projects-galery"
                    style="background-image:url({{asset('frontend/images/home-page-images/icons-background.png')}}); background-position:top;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 m-b30">
                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                                    <div class="sports-icon ">
                                        <a href="{{route('kennel_directory.index')}}">
                                            <img width="85" height="85" src="{{asset('frontend/images/kennel.svg')}}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <a href="{{route('kennel_directory.index')}}">
                                        <h4 class="text-capitalize">Kennel Directory</h4>
                                    </a>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p class="m-b0">PKC Kennel Directory facilitates our members with the record of all
                                        registered kennels and the list of cats of the kennel</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 m-b30">
                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                                    <div class="sports-icon ">
                                        <a href="{{route('database.index')}}">
                                            <img width="85" height="85" src="{{asset('frontend/images/pedigree.svg')}}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <a href="{{route('database.index')}}">
                                        <h4 class="text-capitalize">Pedigree Verification</h4>
                                    </a>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p class="m-b0">Take pride in the heritage of your cat with a unique record from the
                                        PKC that details the family tree of your cat</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 m-b30 ">
                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                                    <div class="sports-icon ">
                                        <a href="{{route('event.index')}}">
                                            <img width="85" height="85" src="{{asset('frontend/images/events.svg')}}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <a href="{{route('event.index')}}">
                                        <h4 class="text-capitalize">Events</h4>
                                    </a>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p class="m-b0">You're joyfully invited to participate in upcoming events. More
                                        offerings are in the works, so check back often for the latest updates.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6  m-b30 ">
                                <div
                                    class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
                                    <div class="sports-icon ">
                                        <a href="{{route('membership')}}">
                                            <img width="85" height="85"
                                                src="{{asset('frontend/images/membership.svg')}}" alt="" />
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
                            <h2 class="h2 text-uppercase">latest BLOGS</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <p>
                                Our blog is your go-to resource for providing exceptional care to your cats. Whether you're an experienced cat owner or new to the role, our expert writers offer insights, practical tips and comprehensive articles. With us, you'll find everything you need to ensure your beloved cat receives the best care possible. Join our community of passionate cat lovers and discover a wealth of knowledge to nurture a deep and lasting bond with your furry friend.
                            </p>
                        </div>
                       
                        <div class="section-content ">
                            
                            <div class="row same_height_row">
                              
                                 @foreach($blogs as $blog)
                                 <div class="col-lg-4 col-sm-12 m-b30 same_height ">
                                  <a href="{{route('single_blog',$blog->slug)}}">
                                      <div class="dez-media dez-img-effect h-100">
                                            <img width="855" height="897"
                                                src="{{$blog->slug_image}}"
                                                alt="" style="border-top-left-radius: 5% !important; border-top-right-radius: 5% !important;">
                                                <div class="h-100" style="padding:30px; background-color: #00783a !important; text-align: center; border-bottom-left-radius: 5% !important; border-bottom-right-radius: 5% !important;">
                                                    <h4 class="blog-title-cus text-center">{{$blog->title}}</h4>
                                                    <p class="blog-title-cus text-center">{{$blog->short_description}}</p>
                                                    <span class="read_more_btn text-center" >Read More</span>
                                                </div>
                                            </div>
                                              </a>
                                            </div>
                                      @endforeach
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- Latest blog NEWS -->
                <!-- PKC Team END -->
                <!-- Counter -->
                <div class="section-full bg-img-fix  overlay-black-dark our-projects-galery"
                    style="background-image:url(images/background/bg3.jpg); padding-top:40px; padding-bottom:20px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-6 m-b15">
                                <div class="icon-bx-wraper center text-white">
                                    <div class=""> <span class="icon-cell"> <img width="85" height="85"
                                                src="{{asset('frontend/images/registeredmembers.svg')}}"
                                                alt="" /></span>
                                    </div>
                                    <div class="m-t10">
                                        <div class="dez-separator bg-primary"></div>
                                    </div>
                                    <div class="sports-icon">
                                        <h3 class="dez-tilte text-uppercase h3"> <span class="counter">700</span> +
                                        </h3>
                                        <h6>Registered Members</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 m-b15">
                                <div class="icon-bx-wraper center text-white">
                                    <div class=""> <span class="icon-cell"> <img width="85" height="85"
                                                src="{{asset('frontend/images/registeredkennels.svg')}}"
                                                alt="" /></span>
                                    </div>
                                    <div class="m-t10">
                                        <div class="dez-separator bg-primary"></div>
                                    </div>
                                    <div class="sports-icon">
                                        <h3 class="dez-tilte text-uppercase h3"> <span class="counter">600</span> +
                                        </h3>
                                        <h6>Registered Kennels</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 m-b15">
                                <div class="icon-bx-wraper center text-white">
                                    <div class=""> <span class="icon-cell"> <img width="85" height="85"
                                                src="{{asset('frontend/images/registered-cats.svg')}}" alt="" /></span>
                                    </div>
                                    <div class="m-t10">
                                        <div class="dez-separator bg-primary"></div>
                                    </div>
                                    <div class="sports-icon">
                                        <h3 class="dez-tilte text-uppercase h3"> <span class="counter">10000</span> +
                                        </h3>
                                        <h6>Registered Cats</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 m-b15">
                                <div class="icon-bx-wraper center text-white">
                                    <div class=""> <span class="icon-cell"> <img width="85" height="85"
                                                src="{{asset('frontend/images/events-yearly.svg')}}" alt="" /></span>
                                    </div>
                                    <div class="m-t10">
                                        <div class="dez-separator bg-primary"></div>
                                    </div>
                                    <div class="sports-icon">
                                        <h3 class="dez-tilte text-uppercase h3"> <span class="counter">20</span> + </h3>
                                        <h6>Events Yearly</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter END -->
                <!-- Testimonials -->
                <div class="section-full bg-img-fix content-inner bg-white">
                    <div class="container">
                        <div class="section-head text-center bg-white">
                            <h2 class="h2">Testimonials</h2>
                            <div class="dez-separator bg-primary"></div>
                            <p>Testimonials of our Honourable Visiting Judges from Different Countries</p>
                        </div>
                        <div class="section-content">
                            <div class="testimonial-five owl-carousel owl-dots-none owl-theme owl-loaded owl-none">
                                <div class="item">
                                    <div class="testimonial-6" style="
    border-right: 1px solid #ced4da;">
                                        <div class="testimonial-text bg-white quote-left quote-right">
                                            <p>I would like to express my appreciation to the Pakistan Feline Club and
                                                Labrador Retriever Club of Pakistan, for Inviting me to Judge at your
                                                show in 2023. The layout and facilities for the show, the rings <a
                                                    href="{{route('testimonials')}}"> [...] </a> </p>
                                        </div>
                                        <div class="testimonial-detail clearfix bg-primary text-white">
                                            <h4 class="testimonial-name m-tb0">Linda Harvey Major</h4>
                                            <span class="testimonial-position">United Kingdom</span>
                                            <div class="testimonial-pic radius"><img
                                                    src="{{'frontend/images/testimonials/linda-harvey.jpg'}}" alt=""
                                                    width="100" height="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-6" style="
    border-right: 1px solid #ced4da;">
                                        <div class="testimonial-text bg-white quote-left quote-right">
                                            <p>I had the pleasure and honour to visit this great Country in February
                                                2023, when I was part of the International judging panel at the Pakistan
                                                Kennel Club’s Championship All Breed Show.
                                                I was hugely impressed, first <a href="{{route('testimonials')}}"> [...]
                                                </a></p>
                                        </div>
                                        <div class="testimonial-detail clearfix bg-primary text-white">
                                            <h4 class="testimonial-name m-tb0">Frank Borg</h4>
                                            <span class="testimonial-position">Malta</span>
                                            <div class="testimonial-pic radius"><img
                                                    src="{{'frontend/images/testimonials/frank-borg.jpg'}}" alt=""
                                                    width="100" height="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-6" style="border-right: 1px solid #ced4da;">
                                        <div class="testimonial-text bg-white quote-left quote-right">
                                            <p>At the first time I have heard to judge a cat show in your lovely country
                                                I was very surprised. I start the trip and I reached Pakistan/ Lahore .
                                                It was amazing to meet you and your family and all your friends. Than <a
                                                    href="{{route('testimonials')}}"> [...] </a></p>
                                        </div>
                                        <div class="testimonial-detail clearfix bg-primary text-white">
                                            <h4 class="testimonial-name m-tb0">Marcel Kruger</h4>
                                            <span class="testimonial-position">Germany</span>
                                            <div class="testimonial-pic radius"><img
                                                    src="{{'frontend/images/testimonials/marcel-kruger.jpg'}}"
                                                    alt="Marcel Kruger" width="100" height="100"></div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="item">
                                    <div class="testimonial-6" style="border-right: 1px solid #ced4da;">
                                        <div class="testimonial-text bg-white quote-left quote-right">
                                            <p>Hello exhibitors and spectators. My name is richard mc coy, i have been judging at championship shows since 1972. I am classed as an all breed judge, but i am also a specialist
                                            <a
                                                    href="{{route('testimonials')}}"> [...] </a></p>
                                        </div>
                                        <div class="testimonial-detail clearfix bg-primary text-white">
                                            <h4 class="testimonial-name m-tb0">Richard McCoy </h4>
                                            <span class="testimonial-position">Irland</span>
                                            <div class="testimonial-pic radius"><img
                                                    src="{{'frontend/images/testimonials/Richard McCoy.jpg'}}"
                                                    alt="Marcel Kruger" width="100" height="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials End -->
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
                <!--    <div class="section-full bg-white our-achievements">-->
                <!--        <div class="container">-->
                <!--            <div class="section-head text-center ">-->
                <!--                <h2 class="h2 text-uppercase">PKC Market place</h2>-->
                <!--                <div class="dez-separator-outer ">-->
                <!--                    <div class="dez-separator bg-primary style-liner"></div>-->
                <!--                </div>-->
                <!--                <p>-->
                <!--                    We're introducing Marketplace, a convenient destination on Pakistan Feline Club to discover, buy and-->
                <!--                    sell puppies and cats with people in your community.-->
                <!--                </p>-->
                <!--            </div>-->
                <!--            <div class="section-content text-center ">-->
                <!--                <div class="row m-lr0">-->
                <!--                    @foreach($latest_four_adds as $add)-->
                <!--                    <div class="col-lg-3 col-sm-6 p-a0 m-b30">-->
                <!--                        <div class="dez-box dez-media">-->
                <!--{{--                            <img src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"  alt="{{$add->cat->pet_name}}">--}}-->
                <!--                            @if($add->cat->pet_pic != null)-->
                <!--                            <img width="292" height="292" src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"-->
                <!--                                 alt="">-->
                <!--                            @else-->
                <!--                                <img src="{{asset('frontend/images/cat-no-pic.png')}}"-->
                <!--                                     class="rounded float-center">-->
                <!--                            @endif-->
                <!--                            <div class="dez-info-has p-a20 bg-primary text-left skew-triangle right-top text-center">-->
                <!--                                <h4 class="text-capitalize">{{ucwords($add->title)}}</h4>-->
                <!--                                <a class="btn btn-success my-1 radius-sm" href="tel:{{$add->contact}}"><i class="fa fa-phone"></i> {{$add->contact}} </a>-->
                <!--                                @if($add->is_whatsapp == 1)-->
                <!--                                <a class="btn btn-success my-1 radius-sm" target="_blank" href="https://api.whatsapp.com/send/?phone={{$add->contact}}&text&type=phone_number&app_absent=0"><i class="fa fa-whatsapp"></i> {{$add->contact}} </a>-->
                <!--                                @endif-->

                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="dez-title-bx bg-gray p-a20 text-left skew-triangle left-top">-->
                <!--                            <h4 class="m-a0 text-capitalize">-->
                <!--                                <span style="font-size: small">PKR</span> {{number_format($add->price, 2, '.', ' ') ?? ''}}-->
                <!--                            </h4>-->
                <!--                            @if($add->add_status == 'sold')-->
                <!--                            <span class="badge badge-danger px-4">Sold</span>-->
                <!--                            @endif-->
                <!--                            <div class="">{{ \Illuminate\Support\Str::limit($add->comment, $limit = 50, $end = '...') }} <a href="{{route('market_place_detail',$add->slug)}}" class="btn btn-sm btn-success radius-xl">View More</a></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    @endforeach-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="section-head  text-center">-->
                <!--                <div class="m-tb30">-->
                <!--                    <a href="{{route('market_place')}}" class="site-button radius-xl custom-button-style">View All</a>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--        </div>-->
                <!--    </div>-->
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
        </div>
        @endsection