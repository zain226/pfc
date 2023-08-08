<!-- Footer --><style>
    .w-65{
        width:65% !important;
        
    }
    .mb-20{
        margin-bottom:20px;
    }
    .social-icon-setting{
     width: 25% !important;
     min-width: 23% !important;
     max-width: 23% !important;
    }
    .widget_gallery li:hover{
        border: 0px;
    }
    .footer-bottom a, .footer-bottom span {
    opacity:  1 ;
}
.footer-bottom a {
    margin-left: 3px !important;
}
.footer-top{
    padding-top: 0px !important;
}
</style>
<footer class="site-footer bg-white">
    <div class="" style="padding-top: 0px !important;">
        <hr>
   
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 footer-col-4">
                   <img src="{{asset('frontend/images/footer-logo.png')}}" width="147px" height="150px" class="mb-20" alt="PKC logo">
                   <p style="color:#000000;">Pakistan Feline Club is devoted to promote the passion of keeping, breeding and showcasing of purebred cats.</p>
                    <div class="widget widget_gallery" >
                        <ul>
                            <li class="img-effect2 social-icon-setting">
                                <a href="https://web.facebook.com/PaKKennelClub" target="_blank">
                                    <img src="{{asset('frontend/images/facebook.svg')}}" alt="" width="30px" height="30px" class="w-65">
                                </a>
                            </li>
                            <li class="img-effect2 social-icon-setting">
                                <a href="https://twitter.com/PakKennelclub" target="_blank">
                                    <img src="{{asset('frontend/images/twitter.svg')}}" alt="" width="30px" height="30px" class="w-65">
                                </a>
                            </li>
                                                        <li class="img-effect2 social-icon-setting">
                                <a href="https://www.instagram.com/pkc.pk/" target="_blank">
                                    <img src="{{asset('frontend/images/instagram.svg')}}" alt="" width="30px" height="30px" class="w-65">
                                </a>
                            </li>
                            <li class="img-effect2 social-icon-setting">
                                <a href="https://www.youtube.com/@PakistanKennelClub" target="_blank">
                                    <img src="{{asset('frontend/images/youtube.svg')}}" alt="" width="30px" height="30px" class="w-65">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h4 class="m-b15 text-uppercase">CONTACT US</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><strong>address</strong>House # 02, Block E1, Sector-A, Engineers Town Defence Road, Lahore, Pakistan</li>
                            <li><i class="fa fa-phone"></i><strong>phone</strong><a href="tel:04235248212">042
                                    35248212</a><br><a href="tel:+923200200200">+92 320 0200200</a></li>
                            <li><i class="fa fa-envelope"></i><strong>email</strong><a
                                    href="mailto:info@pakistankennelclub.com.pk">info@pakistankennelclub.com.pk</a></li>
                        </ul>
                    </div>
                </div>
                    <div class="col-lg-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li><a href="{{route('database.index')}}">Online Database</a></li>
                                <li><a href="{{route('kennel_directory.index')}}">Kennel Directory</a></li>
                                <li><a href="{{route('member_directory.index')}}">Member Directory</a></li>
                                <li><a href="{{route('login')}}">Member Login</a></li>
                                <li><a href="{{route('login')}}">Litter Registration</a></li>
                                <li><a href="{{route('login')}}">Single Cat Registration</a></li>
                                <li><a href="{{route('login')}}">Show Registration</a></li>
                            </ul>
                        </div>
                    </div>
                   <div class="col-lg-3 col-sm-6 footer-col-4">
                    <form role="search" method="post" action="{{route('subscribe')}}"
                        class=" bg-primary p-a20 text-white m-t15">
                        @csrf
{{--                        <div class="mt-3"></div>--}}
                        <h2 class="m-tb0 font-40">Subscribe</h2>
{{--                        <p class="text-justify">Want to be the first to read news and updates about al Kennel activities? Subscribe to the--}}
{{--                            newsletter to keep of all events.</p>--}}

                        <div class="m-b15">
                            <div class="dzSubscribeMsg"></div>
                            <input name="email" required="required" class="form-control" placeholder="Email Address"
                                type="email">
                        </div>
                        <div class="">
                            <input name="submit" value="Submit" type="submit"
                                class="site-button black m-r15 gray btn-block radius-sm">
                        </div>
                        <div class="mb-3"></div>
                    </form>
                    <div class="widget widget_gallery">
                        <ul>
                            <li class="img-effect2">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('frontend/images/affiliations/1.png')}}" alt="">
                                </a>
                            </li>
                            <li class="img-effect2">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('frontend/images/affiliations/2.png')}}" alt="">
                                </a>
                            </li>
                            <li class="img-effect2">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('frontend/images/affiliations/3.png')}}" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><span>© Copyright 2023 All Rights Reserved. Developed by<a
                                href="https://gigasol.com/" target="_blank" style="color: #ffffff;">GIGASOL</a></span></div>
                </div>
            </div>
        </div>
        </div>
</footer>

<!-- Footer END-->
