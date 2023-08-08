@extends('frontend.layouts.app')
@section('title','Registration')
@section('styles')
    <style>
        @media (max-width: 768px) {
            .heading-download-forms {
                margin-left: auto !important;
                margin-right: auto !important;
            }

        }
    </style>
@endsection
@section('content')
    <div class="page-content">
       @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/registration.png'),'breedcrumb'=>'Registration','page_title'=>'Registration' , 'overlay' => 'none'])
        <div class="section-full content-inner contact-style-1">
            <div class="container">
                <div class="row">
                    <!--Left Start Rigestrartion form  -->
                    <div class="col-lg-7">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            <h2>Apply Online</h2>
                            <div class="dzFormMsg"></div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form method="post" action="{{route('login')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" required class="form-control"
                                                       placeholder="Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="password" type="password" class="form-control" required placeholder="Your Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" value="Submit" class="site-button ">
                                            <span>Send</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left End Rigestrartion form -->
                    <!-- right part start -->
                    <div class="col-lg-5 ">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                            <h2 class="m-b10">Bank Account details</h2>
                            <span><b>Account Title: Pakistanfelineclub</b></span>
                            <p><b>Number: 02920103016732</b></p>
                            <p><b>Bank Name and Branch: Meezan Bank Limited Haidar <br> road Branch Town ship Lahore</b>
                            </p>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!--End PDF form-->
                    <div class="m-b15 heading-download-forms">
                        <div class="section-head inner-haed"></div>
                        <h2 class="text-uppercase">Download Forms</h2>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{'frontend/doc/MEMBERSHIP-FORM.pdf'}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Membership Form</h5>
                                        <p><b>Rs. {{$membership_fee}}/-</b> for Membership</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{asset('frontend/doc/Imported-Cat.pdf')}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Imported Cat Registration Form</h5>
                                        <p><b>Rs. {{$imported_cat_reg}}/-</b> for Cat Registration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20">
                                        <a href="{{asset('frontend/doc/Kennel-Name-Regis.pdf')}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Kennel Registration Form</h5>
                                        <p><b>Rs. {{$kennel_reg}}/- </b>for Kennel Registration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{asset('frontend/doc/Single-Cat-Registration.pdf')}}"
                                                class="icon-cell" target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Single Cat Registration Certificate</h5>
                                        <p><b>Rs. {{$single_cat_reg}}/- </b>for Single Cat Registration Certificate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{asset('frontend/doc/Stud-Certifi.pdf')}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Stud Certificate for litter
                                            registration</h5>
                                        <p><b>Rs. {{$stud_certificate_reg}}/- </b> Stud Registration with PKC</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{asset('frontend/doc/Owner-transfer.pdf')}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">Transfer of Ownership Certificate</h5>
                                        <p><b>Rs. {{$transfer_ownership}}/-</b> for Transfer of Ownership</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b50 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20"><a
                                                href="{{asset('frontend/doc/Litter-Registration.pdf')}}" class="icon-cell"
                                                target="_blank"><i
                                                    class="fa fa-download"></i></a></div>
                                    <div class="icon-content p-t40">
                                        <h5 class="dez-tilte text-uppercase">LITTER REGISTRATION FORM</h5>
                                        <p><b>Rs. {{$litter_reg}}/-</b> Litter Registration <br> <b>Rs. {{$per_puppy_reg}}/-</b> per puppy
                                            pedigree with MICROCHIP.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--End PDF form-->

                </div>
            </div>
        </div>
    </div>
@endsection
