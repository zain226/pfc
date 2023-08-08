@extends('frontend.layouts.app')
@section('title','PKC Team')
@section('content')
<div class="page-content">
    @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/THE-PKC-TEAM.png'),'breedcrumb'=>'PKC Team','page_title'=>'PKC Team' , 'overlay' => 'none'])
    <div class="clearfix">
       <div class="section-full content-inner">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class=" m-b30">
                    <div class="row blog-post blog-md date-style-2">
                        <div class="col-lg-4 col-md-4  col-sm-5 m-b30"> <a href="#"><img src="{{asset('frontend/images/about-pkc/general-r-zahid-mubashir-sheikh.jpg')}}" alt=""></a></div>
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div class="dez-post-title ">
                                <h2 class="post-title"><a href="#">General (R) Zahid Mubashir Sheikh</a></h2>
                            </div>
                            <h5 class="m-tb10">Patron in Chief</h5>
                            <div class="dez-post-text">
                                <p>Maj Gen (R) Zahid Mubashir Sheikh is the patron in chief of PKC-PGSDC since 2016. He is a great cat loverand actively participates in various club activities. Presently the general officer is Pakistan's ambassador in Ukraine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product details -->
        </div>
   </div>
</div>
@endsection