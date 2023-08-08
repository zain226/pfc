@extends('frontend.layouts.app')
@section('title','Gallery')
@section('content')
<div class="page-content">
       @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/GALLERY.png'),'breedcrumb'=>'Gallery','page_title'=>$grid->title ?? '' , 'overlay' => 'none'])
    <!-- PKC Gallery -->
    <div class="section-full bg-img-fix content-inner overlay-black-middle"
        style="background-image:url('{{asset("frontend/images/home-page-images/home_stone_sectionbg2.jpg")}}'); background-position:center;">
        <div class="container">
            <div class="clearfix">
                <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 m-b0 mfp-gallery">
                    @foreach($images as $image)
                    <li class="card-container col-lg-3 col-sm-6 home">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('storage/gallery/'.$image->image)}}"  alt="{{$image->position}}">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
{{--                                        <a href="javascript:void(0);">--}}
{{--                                            <i class="fa fa-link icon-bx-xs"></i>--}}
{{--                                        </a>--}}
                                        <a href="{{asset('storage/gallery/'.$image->image)}}" class="mfp-link"  title="{{$image->position}}">
                                            <i class="fa fa-picture-o icon-bx-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Gallery END -->
        </div>
    </div>
    <!-- PKC Gallery END -->
</div>
@endsection
