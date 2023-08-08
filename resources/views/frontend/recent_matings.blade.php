@extends('frontend.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/select2/css/select2.min.css')}}"
    rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/select2/css/select2-bootstrap4.css')}}"
    rel="stylesheet" />
<link rel="stylesheet" href="{{asset('frontend/css/pedigree.css')}}" />
<style>
    .full-pedigree ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .full-pedigree li {
        list-style: none;
    }

    #extended_pedigree_container .generation.pedigree_gen4 .animalBox {
        float: left;
    }
    #upcoming_litters .icon-bx-lg.icon-bx-lg-prog.icon-bx-lg-cus.m-b20{
        width: 70px !important;
    }
    #upcoming_litters .icon-bx-lg.icon-bx-lg-prog.icon-bx-lg-cus.m-b20{
        margin-right: 10px !important;
    }
    #upcoming_litters .col-sm-12.col-lg-4.col-md-4.bx-style-1.border-1.dez-box.custom-shadow-light.pt-2.pb-2.mb-2.mr-2{
        padding: 5px!important;
    }

</style>
@endsection
@section('title','Upcoming Litters')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/upcoming-litters.png
'),'breedcrumb'=>'Upcoming Litters','page_title'=>'Upcoming Litters' , 'overlay' => 'none'])
    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Pedigree details -->
        <div class="container woo-entry">
            <h1 class="">Upcoming Litters:
                <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
            </h1>
            <div id="upcoming_litters">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-md-4">
                        <h4>Kennel Name</h4>
                        <!-- Search Bar -->
                        @include('frontend.components.litter_search_kennel',['search' => $searchValue1 ?? ''])
                        <!-- End Search Bar -->
                    </div>
                    <div class="col-md-12 col-lg-4 col-md-3">
                        <h4 class="ml-2">Sire</h4>
                        <!-- Search Bar -->
                        @include('frontend.components.litter_search_sire',['search' => $searchValue2 ?? ''])
                        <!-- End Search Bar -->
                    </div>
                    <div class="col-md-12 col-lg-4 col-md-4">
                        <h4 class="ml-2">Dam</h4>
                        <!-- Search Bar -->
                        @include('frontend.components.litter_search_dam',['search' => $searchValue3 ?? ''])
                        <br>
                        <!-- End Search Bar -->
                    </div>
                </div>
                @foreach($matings as $mating)
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 col-md-4 bx-style-1 border-1 dez-box custom-shadow-light pt-2 pb-2 mb-2">
                            <div class="icon-bx-wraper left p-a10  custom-box-full-width">
                                <div class="icon-bx-lg icon-bx-lg-prog icon-bx-lg-cus m-b20">
                                    @if(isset($mating->damOwner->user->breeder->name))
                                        <a target="_blank" href="{{route('kennel_directory.profile',$mating->damOwner->user->breeder->kennel_slug ?? '')}}" class="dez-img-effect">
                                            @if($mating->damOwner->user->breeder->pic !== null)
                                                <img src="{{asset('storage/breeders/'.$mating->damOwner->user->breeder->pic ?? '')}}" alt="{{$mating->damOwner->user->breeder->name ?? ''}}">
                                            @else
                                                <img src="{{asset('frontend/images/user-no-image.png')}}">
                                            @endif
                                        </a>
                                    @else
                                        <a href="javascript:void (0);" class="dez-img-effect">
                                            <img src="{{asset('frontend/images/user-no-image.png')}}">
                                        </a>
                                    @endif
                                </div>
                                @if(isset($mating->damOwner->user->breeder->kennel))
                                    <div class="icon-content text-left">
                                        <a href="{{route('kennel_directory.profile',$mating->damOwner->user->breeder->kennel_slug)}}">
                                            <a href="{{route('kennel_directory.profile',$mating->damOwner->user->breeder->kennel_slug)}}" target="_blank">
                                                <h5 class="dez-tilte text-uppercase">{{$mating->damOwner->user->breeder->kennel ?? ''}}</h5>
                                            </a>
                                            <span>City: <a href="javascript:void(0); " target="_blank">{{$mating->damOwner->user->breeder->city ?? ''}}</a></span>
                                            <br>
                                            <p>Date of Mating: {{date('d F Y',strtotime($mating->mating_date)) ?? 'N/A'}}</p>
                                        </a>
                                    </div>
                                @else
                                    <div class="icon-content text-left">
                                        <a href="javascript:void(0)">
                                            <a href="javascript:void(0);" target="_blank">
                                                <h5 class="dez-tilte text-uppercase">No Information</h5>
                                            </a>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-3 bx-style-1 border-1 dez-box custom-shadow-light pt-2 pb-2 mb-2">
                            <div class="icon-bx-wraper left p-a10  custom-box-full-width">
                                <div class="icon-bx-lg icon-bx-lg-prog icon-bx-lg-cus m-b20">
                                    @if(isset($mating->sire->pet_name))
                                        <a target="_blank" href="{{route('pedigree',$mating->sire->seo_slug)}}" class="dez-img-effect">
                                            @if($mating->sire->pet_pic !== null)
                                                <img src="{{asset('storage/cats/'.$mating->sire->pet_pic)}}" alt="{{$mating->sire->pet_name}}">
                                            @else
                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                            @endif
                                        </a>
                                    @else
                                        <a href="javascript:void (0);" class="dez-img-effect">
                                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                        </a>
                                    @endif
                                </div>
                                @if(isset($mating->sire->pet_name))
                                    <div class="icon-content text-left">
                                        <a href="{{route('pedigree',$mating->sire->seo_slug)}}">
                                            <a href="{{route('pedigree',$mating->sire->seo_slug)}}" target="_blank">
                                                <h5 class="dez-tilte">{{$mating->sire->pet_name ?? ''}}</h5>
                                            </a>
                                            <span>Reg: {{$mating->sire->registration ?? ''}}</span>
                                            <br>
                                            <span>microchip: {{$mating->sire->microchip ?? ''}}</span>
                                        </a>
                                    </div>
                                @else
                                    <div class="icon-content text-left">
                                        <a href="javascript:void(0)">
                                            <a href="javascript:void(0);" target="_blank">
                                                <h5 class="dez-tilte">No Information</h5>
                                            </a>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-4 bx-style-1 border-1 dez-box custom-shadow-light pt-2 pb-2 mb-2">
                            <div class="icon-bx-wraper left p-a10  custom-box-full-width">
                                <div class="icon-bx-lg icon-bx-lg-prog icon-bx-lg-cus m-b20">
                                    @if(isset($mating->dam->pet_name))
                                        <a target="_blank" href="{{route('pedigree',$mating->dam->seo_slug)}}" class="dez-img-effect">
                                            @if($mating->dam->pet_pic !== null)
                                                <img src="{{asset('storage/cats/'.$mating->dam->pet_pic)}}" alt="{{$mating->dam->pet_name}}">
                                            @else
                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                            @endif
                                        </a>
                                    @else
                                        <a href="javascript:void (0);" class="dez-img-effect">
                                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                        </a>
                                    @endif
                                </div>
                                @if(isset($mating->dam->pet_name))
                                    <div class="icon-content text-left">
                                        <a href="{{route('pedigree',$mating->dam->seo_slug)}}">
                                            <a href="{{route('pedigree',$mating->dam->seo_slug)}}" target="_blank">
                                                <h5 class="dez-tilte">{{$mating->dam->pet_name ?? ''}}</h5>
                                            </a>
                                            <span>Reg: {{$mating->dam->registration ?? ''}}</span>
                                            <br>
                                            <span>microchip: {{$mating->dam->microchip ?? ''}}</span>
                                        </a>
                                    </div>
                                @else
                                    <div class="icon-content text-left">
                                        <a href="javascript:void(0)">
                                            <a href="javascript:void(0);" target="_blank">
                                                <h5 class="dez-tilte">No Information</h5>
                                            </a>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="offset-md-4">
                        <span>
                            @if(!empty($mating->linebreed))
                                {!! $mating->linebreed !!}
                            @else
                                <p>No common entries in 5 generations</p>
                            @endif
                        </span>
                    </div>
                </div>

                    <hr>
                @endforeach
                <div class="row flex-wrap">
                    <div class="ml-auto m-auto">
{{--                        {{ $matings->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pedigree details -->
</div>
<!-- contact area  END -->
</div>
@endsection
@section('scripts')
<script src="{{asset('frontend/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/form-select2.js')}}"></script>
@endsection
