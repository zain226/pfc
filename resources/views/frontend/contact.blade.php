@extends('frontend.layouts.app')
@section('title','Contact us')
 @section('content')
 @include('frontend.layouts.include.breadcumb',['page_title'=>'Contact us', 'breedcrumb'=>'Contact us'])
     <!-- ========== Contact Area Start============= -->
     <div class="contact-pages pt-120 mb-120">
        <div class="container">
            <div class="row align-items-center g-lg-4 gy-5">
                <div class="col-lg-5">
                    <div class="contact-left">
                        <div class="hotline mb-80">
                            <h3>Call Us Now</h3>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/phone-icon4.svg')}}" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="tel:042 35248212">+92 42 35248212</a></h6>
                                <h6><a href="tel:+92 320 0200200">+92 320 0200200</a></h6>
                            </div>
                        </div>
                        <div class="location">
                            <h3>Address</h3>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/icon/location4.svg')}}" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="#">House # 02, Block E1, Sector-A, Engineers Town<br>
                                Defence Road Lahore – Pakistan</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2>Have Any Questions</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <textarea placeholder="Your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primary-btn1">Send Message <i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="location-map">
        <div class="vector">
            <img src="{{asset('frontend/assets/images/bg/map-vector.png')}}" alt="">
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.3106770812424!2d74.29213857456746!3d31.405565352806946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901bd817de09f%3A0xbb1f3b3203a87f86!2sPakistan%20Kennel%20Club!5e0!3m2!1sen!2s!4v1688377145394!5m2!1sen!2s" tyle="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ========== Contact Area End============= -->


 @endsection