@extends('frontend.layouts.app')
@section('Home')
 @section('content')
<!-- ========== Hero Style1 Start============= -->
    <div class="hero-style-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-5 d-flex align-items-center">
                            <div class="banner-content ">
                                <div class="tag">
                                   <ul>
                                       <li>Trustworthy</li>
                                       <li>Safely</li>
                                       <li>Loyalty</li>
                                   </ul>
                                </div>
                                <h1>To  Ensure Perfect<br> Service Of Your <span id="js-rotating">cat., dog.</span></h1>
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 d-flex align-items-center justify-content-md-start justify-content-center">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/bg/new-banner-img.png')}}" alt="">
                            </div>
                            <div class="reservation-review">
                                <div class="reservation-btn">
                                    <a class="primary-btn1" href="contact.html">Make A Reservation</a>
                                </div>
                                <div class="review-area">
                                    <ul>
                                        <li>
                                            <div class="single-review">
                                                <div class="icon">
                                                    <img src="{{asset('frontend/assets/images/icon/trustpilot001.svg')}}" alt="">
                                                    <span>reviews</span>
                                                </div>
                                                <div class="reviews">
                                                    <ul>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(200)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-review">
                                                <div class="icon">
                                                    <img src="{{asset('frontend/assets/images/icon/google2.svg')}}" alt="">
                                                    <span>reviews</span>
                                                </div>
                                                <div class="reviews">
                                                    <ul>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(300)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-video-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="video-wraper">
                        <video autoplay loop="loop" muted preload="auto">
                            <source src="{{asset('frontend/assets/video/video-02.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Hero Style1 end============= -->

    <!-- ========== Services Area Start============= -->
    <div class="h1-service-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Services<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                        <h2>Experience our worship</h2>
                    </div>
                </div>
            </div>
            <div class="row d-sm-flex d-none">
                <div class="col-lg-12">
                    <div class="swiper-btn-wrap d-flex align-items-center justify-content-between">
                        <div class="slider-btn prev-btn-1">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-1">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper home1-services-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="services-card1">
                                <img class="services-card-vec" src="{{asset('frontend/assets/images/bg/services-card-vec.png')}}" alt="">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/images/icon/daycare-center2.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="service-details.html">Daycare </a></h3>
                                    <p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>
                                </div>
                                <a class="more-btn" href="service-details.html">More Details<img src="{{asset('frontend/assets/images/icon/btn-arrow1.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="services-card1 two">
                                <img class="services-card-vec" src="{{asset('frontend/assets/images/bg/services-card-vec.png')}}" alt="">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/images/icon/grooming2.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="service-details.html">Grooming </a></h3>
                                    <p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>
                                </div>
                                <a class="more-btn" href="service-details.html">More Details<img src="{{asset('frontend/assets/images/icon/btn-arrow1.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="services-card1 three">
                                <img class="services-card-vec" src="{{asset('frontend/assets/images/bg/services-card-vec.png')}}" alt="">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/images/icon/boarding2.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="service-details.html">Boarding</a></h3>
                                    <p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>
                                </div>
                                <a class="more-btn" href="service-details.html">More Details<img src="{{asset('frontend/assets/images/icon/btn-arrow1.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="services-card1 four">
                                <img class="services-card-vec" src="{{asset('frontend/assets/images/bg/services-card-vec.png')}}" alt="">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/images/icon/veterinary2.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="service-details.html">veterinary</a></h3>
                                    <p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>
                                </div>
                                <a class="more-btn" href="service-details.html">More Details<img src="{{asset('frontend/assets/images/icon/btn-arrow1.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Services Area end============= -->

    <!-- ========== Story Area Start============= -->
    <div class="h1-story-area mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6">
                    <div class="section-title1">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Our Story<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                        <h2>come to know what we have done about pets.</h2>
                    </div>
                    <div class="story-content">
                        <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus. In hac habitasse plateajoa dictumst. Nuncet posuere scelerisque justo in accumsan.</p>
                        <div class="story-title-reviews">
                            <h3>We Think Working Process may <span>increase</span> mindset.</h3>
                            <div class="review">
                                <p>Based on <a href="#">20,921 reviews</a></p>
                                <img src="{{asset('frontend/assets/images/icon/trastpilot.svg')}}" alt="">
                            </div>
                        </div>
                        <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="story-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/story-img1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Story Area end============= -->
    <!-- ========== Features Area Start============= -->
    <div class="h1-feature-area">
        <div class="container-fluid p-0">
            <div class="row justify-content-center bg">
                <div class="col-lg-10 gap-4 d-flex align-items-center justify-content-lg-between justify-content-center flex-lg-nowrap flex-wrap ">
                    
                    <div class="feature-left">
                        <div class="single-card mb-45">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/badge1.svg')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>ID Badged</h4>
                                <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                            </div>
                        </div>
                        <div class="single-card">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/checked1.svg')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>DBS Checked</h4>
                                <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                            </div>
                        </div>
                    </div>
                    <div class="freture-title">
                        <h2>Your Pets Are <span>100% Safe</span> at Our Care.</h2>
                    </div>
                    <div class="feature-right">
                        <div class="single-card mb-45">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/insured1.svg')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Fully Insured</h4>
                                <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                            </div>
                        </div>
                        <div class="single-card">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/fast-aid1.svg')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Pet First-Aid Trained</h4>
                                <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <div class="h1-feature-counter mb-120">
        <div class="container-md container-fluid">
            <div class="row justify-content-center g-md-4 gy-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="counter-single client">
                        <div class="counter-icon">
                            <img src="{{asset('frontend/assets/images/icon/client.svg')}} " alt="image">
                        </div>
                        <div class="coundown">
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="100">
                                    00
                                </h3>
                                <span>+</span>
                            </div>
                            <p>Client Served</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="counter-single animals">
                        <div class="counter-icon">
                            <img src="{{asset('frontend/assets/images/icon/animals.svg')}}" alt="image">
                        </div>
                        <div class="coundown">
                            <div class="d-flex align-items-center gap-12">
                                <h3 class="odometer" data-odometer-final="700">
                                    00
                                </h3>
                                <span>+</span>
                            </div>
                            <p>Served animals</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="counter-single walked">
                        <div class="counter-icon">
                            <img src="{{asset('frontend/assets/images/icon/walked.svg')}} " alt="image">
                        </div> 
                        <div class="coundown">
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="1000">
                                    00
                                </h3>
                            </div>
                            <p>Miles Walked </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="counter-single years">
                        <div class="counter-icon">
                            <img src="{{asset('frontend/assets/images/icon/years.svg')}} " alt="image">
                        </div>
                        <div class="coundown">
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="05">
                                    00
                                </h3>
                            </div>
                            <p>Combined years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Features Area end============= -->

    <!-- ========== Choose Area Start============= -->
    <div class="h1-choose-area mb-120">
        <div class="container ">
            <div class="row g-lg-4 gy-5 justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title1">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Why Choose Us<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                        <h2>we provide the best care services.</h2>
                    </div>
                    <div class="choose-content">
                        <p>Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal molestie vulputate in sit amet diam. Cras eu odio sit amet ont  tellus. Cras ut sollicitudin urna. Vivamus blandit,</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        01. In et finibus lectus. Donec scelerisque tortor?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal
                                        molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna.
                                        Vivamus blandit, </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        02. rhoncus turpis porta non Curabitur interdum?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal
                                        molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna.
                                        Vivamus blandit, </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        03. Donec ac enim vitae ligula ultrices accum?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal
                                        molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna.
                                        Vivamus blandit,
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8">
                    <div class="choose-img">
                        <div class="batch">
                            <img src="{{asset('frontend/assets/images/icon/choose-star.svg')}}" alt="">
                            <span>100% Safe<br> 
                                Your Pet</span>
                        </div>
                        <div class="choose-vector">
                            <img src="{{asset('frontend/assets/images/icon/choose-vector.svg')}}" alt="">
                        </div>
                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/choose-img.png')}}" alt="choose-img">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="choose-feature">
                        <ul>
                            <li>
                                <div class="single-choose-card">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/icon/care.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Personalized care</h4>
                                        <p>Pellentesque maximus augue orci, quisl congue purus iaculison</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-choose-card">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/icon/team.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Trusted Team</h4>
                                        <p>Pellentesque maximus augue orci, quisl congue purus iaculison</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-choose-card">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/icon/mind.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Peace of mind</h4>
                                        <p>Pellentesque maximus augue orci, quisl congue purus iaculison</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Choose Area end============= -->

    <!-- ========== Partner Area end============= -->
    <div class="h1-partner-area mb-120">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-xl-5">
                    <div class="partner-left">
                        <div class="section-title1">
                            <span>Here Our Partner Connceted With Us</span>
                            <h2>Our Affiliate  Partner </h2>
                        </div>
                        <div class="author-name-expariance">
                            <div class="author-name">
                                <div class="img">
                                    <img src="{{asset('frontend/assets/images/bg/founder-img.png')}}" alt="">
                                </div>
                                <div class="name-deg">
                                    <span>Founder</span>
                                    <h4>Syed Imtiaz Hussain Shah</h4>
                                </div>
                            </div>
                            <div class="expariance">
                                <img src="{{asset('frontend/assets/images/icon/expriance.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                            <div class="partner-img">
                            <img src="{{asset('frontend/assets/images/pfc-img/affliction.png')}}" alt="" width="120px" height="37px">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                            <div class="partner-img">
                            <img src="{{asset('frontend/assets/images/pfc-img/affliction-3.png')}}" alt="" width="120px" height="37px">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                            <div class="partner-img">
                            <img src="{{asset('frontend/assets/images/pfc-img/affliction-4.png')}}" alt="" width="120px" height="37px">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                            <div class="partner-img">
                            <img src="{{asset('frontend/assets/images/pfc-img/affliction-1.png')}}" alt="" width="80" height="80px">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                            <div class="partner-img">
                            <img src="{{asset('frontend/assets/images/pfc-img/PKC-logo.png')}}" alt="" width="80" height="80px">
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Partner Area end============= -->

    <!-- ========== Pricing Plan Area Start============= -->
    <div class="h1-pricing-plan-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Pricing plan<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                        <h2>Choose your perfect Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link one active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Per Hour</button>
                      <button class="nav-link two" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Per Day</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row justify-content-center g-lg-4 gy-5">
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Regular</h4>
                                        <h2><span class="currency">$</span> 39 <span class="time">Per Hour</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="contact.html">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card active">
                                    <div class="offer-batch">
                                        <h5>50% <span>Off</span></h5>
                                    </div>
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Standard </h4>
                                        <h2><span class="currency">$</span> 49 <span class="time">Per Hour</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="contact.html">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Special </h4>
                                        <h2><span class="currency">$</span> 99 <span class="time">Per Hour</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="contact.html">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row justify-content-center g-lg-4 gy-5">
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Regular</h4>
                                        <h2><span class="currency">$</span> 390 <span class="time">Per Day</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="contact.html">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <div class="offer-batch">
                                        <h5>50% <span>Off</span></h5>
                                    </div>
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Standard </h4>
                                        <h2><span class="currency">$</span> 490 <span class="time">Per Day</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="contact.html">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="{{asset('frontend/assets/images/icon/price-card-bg.svg')}}" alt="">
                                    <div class="title">
                                        <h4>Day Care Special</h4>
                                        <h2><span class="currency">$</span> 990 <span class="time">Per Day</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Socialise Excercise 
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Handscissor Finish
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Watering Plants
                                            <img src="{{asset('frontend/assets/images/icon/pricing-check.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Conditioning Treatment
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                        <li>
                                            Ears Flushed & Cleaned
                                            <img src="{{asset('frontend/assets/images/icon/pricing-X.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <a href="c">Book Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- ========== Pricing Plan Area end============= -->

    <!-- ========== Testimonial Area end============= -->
    <div class="h1-testimonial-area mb-120">
        <div class="container-fluid">
            <div class="row mb-50">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l2.svg')}}" alt="">Testimonial<img src="{{asset('frontend/assets/images/icon/section-vec-r2.svg')}}" alt=""></span>
                        <h2 class="text-white">valueable words from Customers</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xxl-10 col-md-11  p-sm-0">
                    <div class="swiper h1-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/h1-testi1.png')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="review">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                        <p>I highly recommend Scooby to anyone in need of pet care services. Whether it's for regular grooming or boarding, you can trust that your pets will be in good hands.</p>
                                        <div class="author-area">
                                            <h4>Michael Mason</h4>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/h1-testi2.png')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="review">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                        <p>I highly recommend Scooby to anyone in need of pet care services. Whether it's for regular grooming or boarding, you can trust that your pets will be in good hands.</p>
                                        <div class="author-area">
                                            <h4>Sebastian Ethan</h4>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/h1-testi3.png')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="review">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                        <p>I highly recommend Scooby to anyone in need of pet care services. Whether it's for regular grooming or boarding, you can trust that your pets will be in good hands.</p>
                                        <div class="author-area">
                                            <h4>Anthony
                                                Dylan </h4>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/h1-testi4.png')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="review">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                        <p>I highly recommend Scooby to anyone in need of pet care services. Whether it's for regular grooming or boarding, you can trust that your pets will be in good hands.</p>
                                        <div class="author-area">
                                            <h4>Maverick
                                                Elias</h4>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="swiper-btn-wrap d-flex align-items-center justify-content-center">
                        <div class="slider-btn prev-btn-1">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-1">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Testimonial Area end============= -->

    <!-- ========== Team Area Start============= -->
    <div class="team-area mb-120 position-relative">
        <div class="swiper-btn-wrap d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-btn-2">
                <i class="bi bi-arrow-left"></i>
            </div>
            <div class="slider-btn next-btn-2">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Our Team<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                        <h2>See Our Scooby Team members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper team-slider-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-team-card">
                                <div class="member-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/images/bg/team/team-1.png')}}" alt="">
                                </div>
                                <div class="member-content">
                                    <span>Co-Founder</span>
                                    <h3>Kash Preston</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-team-card">
                                <div class="member-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/images/bg/team/team-2.png')}}" alt="">
                                </div>
                                <div class="member-content">
                                    <span>Kennel Assistant</span>
                                    <h3>Scarlett Emily</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-team-card">
                                <div class="member-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/images/bg/team/team-3.png')}}" alt="">
                                </div>
                                <div class="member-content">
                                    <span>Veterinary Assistant</span>
                                    <h3>Jackson Mateo</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-team-card">
                                <div class="member-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/images/bg/team/team-4.png')}}" alt="">
                                </div>
                                <div class="member-content">
                                    <span>Groomer Manager</span>
                                    <h3>Madison Ellie</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ========== Team Area end============= -->

    <!-- ========== Newsletter Area Start============= -->
    <div class="newsletter-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap">
                        <div class="section-title1 text-center mb-40">
                            <span><img src="{{asset('frontend/assets/images/icon/section-vec-l1.svg')}}" alt="">Get In Touch<img src="{{asset('frontend/assets/images/icon/section-vec-r1.svg')}}" alt=""></span>
                            <h2>Let’s Connect Our Newsletter</h2>
                        </div>
                        <form>
                            <div class="form-inner">
                                <input type="text" placeholder="Type Your Email">
                                <button class="primary-btn1" type="submit">Connect</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Newsletter Area end============= -->
    <!-- ========== Blog Area Start============= -->
    <div class="h1-blog-area mb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="{{asset('frontend/assets/images/icon/section-vec-l2.svg')}}" alt="">Latest Blog<img src="{{asset('frontend/assets/images/icon/section-vec-r2.svg')}}" alt=""></span>
                        <h2>valueable words from Customers</h2>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="h1-blog-card">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/blog/blog1.png')}}" alt="">
                            <div class="category">
                                <a href="blog-grid.html">Dog bording</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog-grid.html">August 13, 2022</a>
                            </div>
                            <h4><a href="blog-details.html">lobortis pharetra In necat boi risuse osae that one far This fox.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="h1-blog-card">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/blog/blog2.png')}}" alt="">
                            <div class="category">
                                <a href="blog-grid.html">Day Care</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog-grid.html">August 10, 2022</a>
                            </div>
                            <h4><a href="blog-details.html">Donec venenatis ex id nibh iaculisoni Clonal interdum Curabitur.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="h1-blog-card">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/blog/blog3.png')}}" alt="">
                            <div class="category">
                                <a href="blog-grid.html">Grooming</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog-grid.html">August 05, 2022</a>
                            </div>
                            <h4><a href="blog-details.html">Orci varius natoque penatibus etmal dis parturient montes.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Blog Area end============= -->

    <!-- ========== Gallery Area Start============= -->
    <div class="gallery-img-area">
        <div class="swiper gallery-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-11.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-1.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-22.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-2.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-33.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-3.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-44.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-4.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-55.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-5.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-66.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-6.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-77.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-7.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-88.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-8.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('frontend/assets/images/bg/gallery/gallery-99.png')}}" data-fancybox="gallery" class="gallery2-img">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/gallery/gallery-9.png')}}" alt="">
                            <div class="overlay">
                                <div class="zoom-icon">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        @endsection
    </div>
    <!-- ========== Gallery Area end============= -->