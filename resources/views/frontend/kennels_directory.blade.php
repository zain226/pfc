@extends('frontend.layouts.app')
@section('title','Kennels Directory')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/Kennels-Directory-1.png'),'breedcrumb'=>'Kennels Directory','page_title'=>'Kennels Directory' , 'overlay' => 'none'])

    <div class="section-full content-inner">
        <div class="container">
            <!-- Search Bar -->
            @include('frontend.components.kennel_search')
            <!-- End Search Bar -->
            <!--heading -->
            <div class="m-b20">
                <div class="section-head inner-haed">
                    <h2 class="text-uppercase">Pakistan Feline Club Directory</h2>
                </div>
                <!-- End heading -->
                <!-- Main Section-->
                <div class="section-content">
                    <div class="row">
                        @foreach($kennels as $kennel)
                            <div class="col-lg-4 col-sm-12 m-b30">
                                <div class="icon-bx-wraper left custom-shadow-light p-2 radius-sm">
                                    <div class="icon-bx-sm">
                                        <a href="{{route('kennel_directory.profile',$kennel->kennel_slug)}}" class="dez-img-effect">
                                        @if(!empty($kennel->pic))
                                                <img class="radius-sm" src="{{asset('storage/breeders/'.$kennel->pic)}}">
                                        @else
                                                <img class="radius-sm" src="{{asset('frontend/images/user-no-image.png')}}">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="icon-content">
                                        <a href="{{route('kennel_directory.profile',$kennel->kennel_slug)}}">
                                            <h6 class="dez-tilte text-uppercase">{{$kennel->kennel ?? ''}}</h6>
                                        </a>
                                        <i>
                                            <span>City: {{ucfirst($kennel->city) ?? ''}}</span><br>
                                            <span>Phone#: {{$kennel->contact ?? ''}}</span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row flex-wrap">
                        <div class="ml-auto m-auto">
                            {{ $kennels->onEachSide(2)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Main Section-->
@endsection
