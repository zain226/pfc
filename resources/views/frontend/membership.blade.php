@extends('frontend.layouts.app')
@section('title','Membership')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/membership.png'),'breedcrumb'=>'Membership','page_title'=>'Membership' , 'overlay' => 'none'])
    <div class="section-full content-inner contact-style-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="m-b0">
                    <h2 class="text-uppercase">CHOOSE YOUR MEMBERSHIP</h2>
                    <div class="dez-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                </div>
            </div>
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-6">
                    <div class="m-b30 border-1 dez-box bg-gray pl-5 pb-4 pr-5 custom-box-shadow-dark">
                        <div class="p-tb30" style="width:70%;">
                        <a href="{{route('membership-application.index')}}">
                            <button class="site-button radius-xl  m-r15 text-uppercase" type="button">Sign up to
                                be a full Member</button>
                                </a>
                        </div>
                        <h4 class="m-b10">Benfits</h4>
                        <ul class="list-circle">
                            <li>Register your Kennel</li>
                            <li>Register Stud Certificates</li>
                            <li>Register Litters</li>
                            <li>Register your cats in Shows</li>
                            <li>Transfer or Lease Ownerships of Cats</li>
                            <li>Get Electronic Show Certificates</li>
                            <li>Get Electronic Show Catalogs</li>
                        </ul>

                    </div>
                </div>
                <!-- Left part END -->
                <!-- right part start -->
                <div class="col-lg-6">
                    <div class="m-b30 border-1 dez-box bg-gray pl-5 pb-5 pr-5 custom-box-shadow-dark">
                        <div class="p-tb30" style="width:70%;">
                        <a href="{{route('show-fancier-form')}}">
                            <button class="site-button yellow radius-xl  m-r15 text-uppercase" type="button">Sign up to
                                be a show fancier</button>
                                </a>
                        </div>
                        <h4 class="m-b10">Benfits</h4>
                        <ul class="list-circle">
                            <li>Register your cats in Shows</li>
                            <li>Transfer or Lease Ownerships of Cats</li>
                            <li>Get Electronic Show Certificates</li>
                            <li>Get Electronic Show Catalogs</li>
                            <br>
                            <br>
                            <br>
                        </ul>
                    </div>
                </div>
                <!-- right part END -->
            </div>
        </div>
    </div>
</div>





@endsection
