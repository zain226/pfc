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
                        <div class="col-lg-4 col-md-4  col-sm-5 m-b30"> <a href="#"><img src="{{$pkcteam->slug_image}}" alt=""></a> </div>
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div class="dez-post-title ">
                                <h2 class="post-title"><a href="#">{{$pkcteam->name}}</a></h2>
                            </div>
                            <h5 class="m-tb10">{{$pkcteam->designation}}</h5>
                            <div class="dez-post-text">
                                {!! $pkcteam->long_description !!}
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