@extends('frontend.layouts.app')
@section('title','CONTACT US')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/toastr/toastr.min.css')}}">
@endsection
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.291171888076!2d74.29392671514778!3d31.406102881407616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDI0JzIyLjAiTiA3NMKwMTcnNDYuMCJF!5e0!3m2!1sen!2s!4v1622459385329!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="javascript:void(0);" class="text-white">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner contact-style-1">
            <div class="container">
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-5 d-lg-flex">
						<div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Quick Contact</h2>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                        <p>House # 02, Block E1, Sector-A, Engineers Town Defence Road, Lahore, Pakistan</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p><a href="mailto:info@pakistankennelclub.com.pk">info@pakistankennelclub.com.pk</a>
                                            <br>
                                        <a href="mailto:president@pakistankennelclub.com.pk">president@pakistankennelclub.com.pk</a>

                                        </p>

                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary">
                                        <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                        <p><a href="tel:+924235248212">+92 42 35248212</a>
                                            <br>
                                            <a href="tel:+923200200200 ">+92 320 0200200 </a>
                                    </p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="social-icon dez-border social-icon-lg">
                                     <li class="icon-bx-wraper left">
                                        <div class="">
                                            <a href="https://web.facebook.com/PaKKennelClub" target="_blank">
                                    <img src="{{asset('frontend/images/facebook.svg')}}" alt="" width="40px" height="40px">
                                </a>
                                        </div>
                                        
                                    </li>
                                     <li class="icon-bx-wraper left">
                                        <div class="">
                                             <a href="https://twitter.com/PakKennelclub" target="_blank">
                                    <img src="{{asset('frontend/images/twitter.svg')}}" alt="" width="40px" height="40px">
                                </a>
                                        </div>
                                        
                                    </li>
                                      <li class="icon-bx-wraper left">
                                        <div class="">
                                             <a href="https://www.instagram.com/pkc.pk/" target="_blank">
                                    <img src="{{asset('frontend/images/instagram.svg')}}" alt="" width="40px" height="40px">
                                </a>
                                        </div>
                                        
                                    </li>
                                       <li class="icon-bx-wraper left">
                                        <div class="">
                                             <a href="https://www.youtube.com/@PakistanKennelClub" target="_blank">
                                    <img src="{{asset('frontend/images/youtube.svg')}}" alt="" width="40px" height="40px">
                                </a>
                                        </div>
                                        
                                    </li>

                                </ul>
							</div>
						</div>
					</div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-7">
						<div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Contact form</h2>
                        <div class=""></div>
                            <form method="post" action="{{route('contact_us.submit')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
											    <input name="email" type="email" class="form-control" placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" required class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
{{--									<div class="col-lg-12">--}}
{{--										<div class="form-group">--}}
{{--											<div class="input-group">--}}
{{--												<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>--}}
{{--												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    <!-- right part END -->

                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
@endsection
@section('scripts')


@endsection

