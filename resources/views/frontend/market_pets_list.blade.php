@extends('frontend.layouts.app')
@section('styles')

    <style>
         .dez-bnr-inr{
             background-repeat: no-repeat;
background-size: contain;
         }
           @media screen and (max-width: 360px)
           {
.dez-bnr-inr {
  height: 270px;
}
}
.image_area{
    height:250px;
}
.image_area img{
    height:100%;
}
    </style>
@endsection
@section('title','Cats List')
@section('content')
<div class="page-content">
    @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/market_place.png'),'breedcrumb'=>'PKC Market Place','page_title'=>'' , 'overlay' => 'none'])

    <div class="section-full content-inner">
        <div class="container">
            <!-- Search Bar -->
{{--            @include('frontend.components.pedigree_search')--}}
            <!-- End Search Bar -->
            <!--heading -->
            <div class="m-b20">
{{--                <div class="row">--}}
{{--                    <div class="col-md-4"></div>--}}
{{--                    <div class="col-md-4"></div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <select class="single-select form-control">--}}
{{--                            @foreach($breeds as $breed)--}}
{{--                                <option value="{{route('cats_list',$breed->slug)}}" {{($breed->id == $breed_selected_id)?'selected':''}}>{{$breed->breed_value}} ({{$breed->group->name ?? ''}})</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="section-head inner-haed">
                    <h2 class="text-uppercase">Trust in PKC Market Place to Find Your Forever Companion</h2>
                </div>
                <!-- End heading -->
                <!-- Main Section-->
                <div class="section-content text-center our-achievements">
                    <div class="row m-lr0">
                        @foreach($pets as $add)
                            <div class="col-lg-3 col-sm-6 p-a0 m-b30">
                                <div class="dez-box dez-media">
                                    <!--<img src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"  alt="{{$add->cat->pet_name}}">-->
                                    <div class="image_area">
                                    @if($add->cat->pet_pic != null)
                                        <img width="292" height="292" src="{{asset('storage/cats/'.$add->cat->pet_pic)}}"
                                             alt="">
                                    @else
                                        <img src="{{asset('frontend/images/cat-no-pic.png')}}"
                                             class="rounded float-center">
                                    @endif
                                    </div>
                                    <div class="dez-info-has p-a20 bg-primary text-left skew-triangle right-top text-center">
                                        <h4 class="text-capitalize">{{ucwords($add->add_status)}}</h4>
                                        <a class="btn btn-success my-1 radius-sm" href="tel:{{$add->contact}}"><i class="fa fa-phone"></i> {{$add->contact}} </a>
                                        @if($add->is_whatsapp == 1)
                                            <a class="btn btn-success my-1 radius-sm" target="_blank" href="https://api.whatsapp.com/send/?phone={{$add->contact}}&text&type=phone_number&app_absent=0"><i class="fa fa-whatsapp"></i> {{$add->contact}} </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="dez-title-bx bg-gray p-a20 text-left skew-triangle left-top">
                                    <h4 class="m-a0 text-capitalize"><span style="font-size: small">PKR</span> {{number_format($add->price, 2, '.', ' ') ?? ''}}</h4>
                                    <div class="">
                                        <!--{{ \Illuminate\Support\Str::limit($add->comment, $limit = 50, $end = '...') }}-->
                                        {{ucwords($add->title)}}
                                    <a href="{{route('market_place_detail',$add->slug)}}" class="btn btn-sm btn-success radius-xl">View More</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row flex-wrap">
                        <div class="ml-auto m-auto">
                            {{ $pets->onEachSide(2)->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- icon box style 2 aligh left END -->
        </div>
    </div>
</div>
<!-- Main Section-->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("span[data-select2-id='5']").css('display','none');

            $(".single-select").on("change", function(e) {
                // console.log($('.single-select').find(':selected').val());
                window.location.href =  $('.single-select').find(':selected').val();

            });
        });
    </script>

@endsection
