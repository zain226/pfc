@extends('frontend.layouts.app')
@section('title',' Judges')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-judges.png'),'breedcrumb'=>'PKC Judges','page_title'=>'PKC Judges' , 'overlay' => 'none'])
    <div class="clearfix">
       <div class="section-full content-inner">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class=" m-b30">
                    <div class="row blog-post blog-md date-style-2">
                        <div class="col-lg-4 col-md-4  col-sm-5 m-b30"> <a href="#"><img src="{{$judge->slug_image}}" alt=""></a> </div>
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div class="dez-post-title ">
                                <h2 class="post-title"><a href="#">{{$judge->name}}</a></h2>
                            </div>
                            <h5 class="m-tb10">{{$judge->designation}}</h5>
                            <div class="dez-post-text">
                                {!! $judge->long_description !!}
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