@extends('frontend.layouts.app')
@section('title','Gallery')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/GALLERY.png'),'breedcrumb'=>'Gallery','page_title'=>'Gallery' , 'overlay' => 'none'])
    <!-- PKC Gallery -->
    <div class="section-full bg-img-fix content-inner overlay-black-middle"
        style="background-image:url('{{asset("frontend/images/home-page-images/home_stone_sectionbg2.jpg")}}'); background-position:center;">
        <div class="container">
            <div class="section-head  text-center text-white">
                <h2 class="h2">CLUB GALLERY </h2>
                <div class="dez-separator-outer ">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
                <p>We strive to enable our valued members to actively encourage and participate in PKC conformation,
                    training seminars, and other events. We Patronise to promote responsible heritage breeding to
                    preserve all recognized breeds and strengthen the unique relationship between cats and thei owners.
                </p>
            </div>
            {{--            <div class="site-filters clearfix center  m-b40">--}}
            {{--                <ul class="filters" data-toggle="buttons">--}}
            {{--                    <li data-filter="" class="btn active">--}}
            {{--                        <input type="radio">--}}
            {{--                        <a href="#" class="site-button white radius-xl"><span>All Sports</span></a>--}}
            {{--                    </li>--}}
            {{--                    <li data-filter="water" class="btn">--}}
            {{--                        <input type="radio">--}}
            {{--                        <a href="#" class="site-button white radius-xl"><span>Water Sports</span></a> </li>--}}
            {{--                    <li data-filter="jumping" class="btn">--}}
            {{--                        <input type="radio">--}}
            {{--                        <a href="#" class="site-button white radius-xl"><span>Jumping</span></a>--}}
            {{--                    </li>--}}
            {{--                    <li data-filter="bikes" class="btn">--}}
            {{--                        <input type="radio">--}}
            {{--                        <a href="#" class="site-button white radius-xl"><span>Bikes</span></a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
            <div class="clearfix">
                <ul id="masonry" class="row dez-gallery-listing gallery-grid-3 m-b0 gallery lightgallery">
                    @foreach($grids as $grid)
                    <li class="card-container col-lg-4 col-lg-4 col-sm-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow">
                                <a href="{{route('gallery.detail_page',$grid->slug)}}">
                                    <img width="300" height="200" src="{{asset('storage/gallery-grids/'.$grid->image)}}"
                                        alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="{{route('gallery.detail_page',$grid->slug)}}">
                                            <i class="fa fa-link icon-bx-xs"></i>
                                        </a>
                                        <span data-exthumbimage="{{asset('storage/gallery-grids/'.$grid->image)}}"
                                            data-src="{{asset('storage/gallery-grids/'.$grid->image)}}"
                                            class="icon-bx-xs check-km" title="{{$grid->title}}">
                                            <i class="fa fa-picture-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-2 text-center bg-gray">
                                <h5 class="dez-title m-b0 text-capitalize">
                                    <a href="{{route('gallery.detail_page',$grid->slug)}}">{{$grid->title}}</a>
                                </h5>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="row flex-wrap">
                    <div class="ml-auto m-auto">
                        {{ $grids->onEachSide(2)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PKC Gallery END -->
</div>
@endsection
