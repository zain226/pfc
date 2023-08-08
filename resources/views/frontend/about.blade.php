@extends('frontend.layouts.app')
@section('title','About Pkc')
@section('content')
<div class="page-content">
     @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/about-pkc.png'),'breedcrumb'=>'About
    PKC','page_title'=>'About PKC' , 'overlay' => 'none'])
    <!-- contact area -->
    <div class="clearfix">
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12 text-center section-head">
                            <h3 class="h3">About PKC</h3>
                            <div class="dez-separator bg-primary"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-justify">Pakistan is a land of huge natural resources along with all the
                                seasons and weather
                                conditions. Being an agricultural country, it always possessed large number of domestic
                                animals. People of Pakistan had always been into breeding, keeping and improving all
                                types of domestic animals. Cats have always been an integral part of our Households
                                among all socio economic classes. British influence also improved the interest into
                                competing these animals in a variety of ways. With the passage of time it led into
                                forming Professional Clubs for Cats Fanciers. There after few Kennel clubs came into
                                existence and contributed to the process of improvement. However, with the improvement
                                of social media and awareness, both regarding cats and denial to the basic membership
                                rights and the objectives of afelineclub, a need was felt for a newfelineclub. The
                                Pakistan Feline Club (PKC) was formed on September 2016.</p>
                            <p>PKC is a non-profit organization, affiliated with International Kennel Union IKU. Mr
                                Syed Imtiaz Hussain Shah is the Chairperson and the President. PKC is honored to conduct
                                cat shows of Pakistan Army (Remount Veterinary and Farms Corps), Defense Housing
                                Authority (DHA), Dawn News, Agricultural Veterinary Universities of Pakistan and
                                Governments Livestock department, during National Horse and cattle shows. PKC has two
                                sub clubs which are also called Specialty Clubs:-
                            </p>
                            <ul>
                                <li>PGSDC - Pakistan German Shepherd Cat club.</li>
                                <li>PLRC - Pakistan Labrador Retriever club.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center section-head">
                            <h3 class="h3">Our Awesome Services</h3>
                            <div class="dez-separator bg-primary"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                <div class="icon-bx-md radius bg-primary"><a href="#" class="icon-cell"><i
                                            class="fa fa-database"></i></a></div>
                                <div class="icon-content p-r40">
                                    <h5 class="dez-tilte">Online Database Management</h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Online database Management, accessible to all members.</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20  right m-r50">
                                <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i
                                            class="fa fa-microchip"></i></a> </div>
                                <div class="icon-content p-r40">
                                    <h5 class="dez-tilte">Microchipping </h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Microchipping with issuance of Pedigree Certificates</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i
                                            class="fa fa-users"></i></a> </div>
                                <div class="icon-content p-r40">
                                    <h5 class="dez-tilte ">Training</h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Training for new local judges. Providing opportunities to new local judges for
                                        making their career in this field.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center align-self-center d-md-none d-lg-block">
                            <div class="worker"> <img src="{{('frontend/images/about-pkc/about-us.png')}}" alt="" /> </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i
                                            class="fa fa-calendar"></i></a> </div>
                                <div class="icon-content p-l40">
                                    <h5 class="dez-tilte ">Cats Shows</h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Cat shows in minimum 6 different cities every year.</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i
                                            class="fa fa-user"></i></a> </div>
                                <div class="icon-content p-l40">
                                    <h5 class="dez-tilte ">Qualified Judges</h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Minimum five shows under foreign judges every year.</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i
                                            class="fa fa-clock-o"></i></a></div>
                                <div class="icon-content p-l40">
                                    <h5 class="dez-tilte ">Seminars</h5>
                                    <div class="dez-separator-outer ">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Seminars on handling and breeding. Educate and exercise code of ethics among
                                        members, breeders and exhibitors.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-lg-12 text-center section-head">
                            <h3 class="h3">Objectives of the PKC</h3>
                            <div class="dez-separator bg-primary"></div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-6">
                            <div class="mb-5 border-1 dez-box bg-gray pt-5  pl-5 pb-5 pr-5 custom-box-shadow-dark">
                                <ul class="list-circle">
                                    <li>Procurement and incorporating the DNA sampling with pedigrees.</li>
                                    <li>Improve quality of cat shows.</li>
                                    <li>Linking with Army and Agricultural veterinary universities of Pakistan
                                        Government.</li>
                                    <br>

                                </ul>

                            </div>
                        </div>
                        <!-- Left part END -->
                        <!-- right part start -->
                        <div class="col-lg-6">
                            <div class="mb-5 border-1 dez-box bg-gray pt-5  pl-5 pb-5 pr-5 custom-box-shadow-dark">
                                <ul class="list-circle">
                                    <li>Liaison with the World to adopt the latest trends and norms of cat keeping.</li>
                                    <li>Promoting true soft image of Pakistan.</li>
                                    <li>Setting the standard and raising the bar for all otherfelineclubs in order to
                                        facilitate every cat and the owner.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- right part END -->
                    </div>

                </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
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
    </div>
    <!-- contact area END -->




</div>
@endsection
