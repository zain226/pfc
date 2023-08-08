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

</style>
@endsection
@section('title','Pedigree')
@section('content')
<div class="page-content">
     @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-database.png'),'breedcrumb'=>'Pedigree','page_title'=>'Pedigree' , 'overlay' => 'none'])
    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Pedigree details -->
        <div class="container woo-entry">
            <!-- Search Bar -->
{{--            @include('frontend.components.pedigree_search')--}}
            <!-- End Search Bar -->
            <div class=" m-b30">
                <div class="row blog-post blog-md date-style-2">
                    <div class="col-lg-4 col-md-4  col-sm-5 m-b30">
{{--                        <a href="#">--}}
{{--                            <img src="{{asset('frontend/images/product/pic7.jpg')}}" alt="">--}}
{{--                        </a>--}}
                        @if($cat->pet_pic !== null)
                            <img src="{{asset('storage/cats/'.$cat->pet_pic)}}">
                        @else
                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                        @endif
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <div class="dez-post-title ">
                            <h2 class="post-title">
                                @if($cat->suspend == 1)
                                    <del style="color:red;background:papayawhip;">
                                        <a href="javascript:void(0);">{{$cat->pet_name ?? ''}}</a>
                                    </del>
                                @else
                                    <a href="javascript:void(0);">{{$cat->pet_name ?? ''}}</a>
                                @endif
                                <sup>
                                    @if($cat->gender_id == 1)
                                    <img src="{{asset('frontend/images/male.png')}}" alt="male">
                                    @elseif($cat->gender_id == 2)
                                        <img src="{{asset('frontend/images/female.png')}}" alt="female">
                                    @else

                                    @endif
                                </sup>
                                @if($cat->suspend == 1)
                                    <span class="text-danger">(De-Registered)</span>
                                @endif
                            </h2>
                        </div>
{{--                        <h3 class="m-tb10">Membership # : 142</h3>--}}
                        <!-- <div class="dez-post-text">
                            <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book.</p>
                        </div> -->
                        <table class="table table-bordered">
                            @if($cat->registration !== null )
                            <tr>
                                <td>Reg Number</td>
                                <td>
                                    @if($cat->suspend == 1)
                                        <span class="badge badge-danger px-2 py-1">De-Registered</span>
                                        @else
                                        {{$cat->registration ?? ''}}
                                    @endif
                                </td>
                            </tr>
                            @elseif($cat->foreign_no !== null)
                                <tr>
                                    <td>Foreign Number</td>
                                    <td>{{$cat->foreign_no ?? ''}}</td>
                                </tr>
                            @endif
                            @if($cat->whelped !== null)
                            <tr>
                                <td>Whelped</td>
                                <td>{{date('d F Y',strtotime($cat->whelped)) ?? ''}}</td>
                            </tr>
                            @endif
                            @if($cat->microchip !== null)
                            <tr>
                                <td>Microchip / Tattoo No</td>
                                <td>{{$cat->microchip ?? ''}}</td>
                            </tr>
                            @endif
                            @if($cat->breeder_id !== null)
                            <tr>
                                <td>Breeder</td>
                                <td>
                                    @if(isset($cat->breeder->kennel))
                                        @if($cat->breeder->kennel !== null && $cat->breeder->registration_no !== null)
                                        <a target="_blank" href="{{route('kennel_directory.profile',$cat->breeder->kennel_slug)}}">
                                            {{$cat->breeder->name ?? ''}}
                                        </a>
                                        @else
                                            <span>
                                            {{$cat->breeder->name ?? ''}}
                                        </span>
                                        @endif
                                    @elseif(isset($cat->breeder->user))
                                        <a target="_blank" href="{{route('member_directory.profile',$cat->breeder->name_slug)}}">
                                            {{$cat->breeder->name ?? ''}}
                                        </a>
                                    @else
                                        <span>{{$cat->breeder->name ?? ''}}</span>
                                    @endif
                                </td>
                            </tr>
                            @endif
                            @if($cat->gender_id !== null)
                            <tr>
                                <td>Gender</td>
                                <td>{{$cat->gender->gender_value ?? ''}}</td>
                            </tr>
                            @endif
                            @if($cat->breed_id !== null)
                            <tr>
                                <td>Breed</td>
                                <td>{{$cat->breed->breed_value ?? ''}}</td>
                            </tr>
                            @endif
                            @if($cat->color_id !== null)
                            <tr>
                                <td>Colors</td>
                                <td>{{$cat->color->color_value ?? ''}}</td>
                            </tr>
                            @endif
                            @if($cat->hair !== null)
                                <tr>
                                    <td>Hair Type</td>
                                    <td>{{ucfirst($cat->hair) ?? ''}}</td>
                                </tr>
                            @endif
                                <tr>
                                    <td>Awards</td>
                                    <td>{{getAllShowsAwards($show_results)}}</td>
                                </tr>
                            @if($cat->award !== null)
                                <tr>
                                    <td>Title</td>
                                    <td>{{ucfirst($cat->award) ?? ''}}</td>
                                </tr>
                            @endif
                            @if($cat->owner_id !== null)
                            <tr>
                                <td>Owner Name</td>
                                <td>
                                    @if(isset($cat->owner->kennel))
                                        @if($cat->owner->kennel !== null && $cat->owner->registration !== null)
                                            <a target="_blank" href="{{route('kennel_directory.profile',Str::slug($cat->owner->kennel))}}">
                                                {{$cat->owner->name ?? ''}}
                                            </a>
                                        @else
                                            <span>{{$cat->owner->name ?? ''}}</span>
                                        @endif
                                    @elseif($cat->owner->email !== null && $cat->owner->registration !== null)
                                        <a target="_blank" href="{{route('member_directory.profile',getSlug($cat->owner->name))}}">
                                            {{$cat->owner->name ?? ''}}
                                        </a>
                                    @else
                                        <span>{{$cat->owner->name ?? ''}}</span>
                                    @endif
                                </td>
                            </tr>
                            @endif

                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dez-tabs border-tp product-description bg-tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pedigree"><i
                                        class="fa fa-paw"></i><span class="title-head">Pedigree</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#linebreeding">
                                    <i class="fa fa-chain"></i><span class="title-head">Linebreeding</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#siblings"><i
                                        class="fa fa-group"></i><span class="title-head">Siblings</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#progeny"><i
                                        class="fa fa-line-chart"></i> <span class="title-head">Progeny</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gallery"><i
                                        class="fa fa-photo"></i><span class="title-head">Gallery</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cat-shows"><i
                                        class="fa fa-calendar"></i> <span class="title-head">Show Results</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#virtual-breeding"><i
                                        class="fa fa-puzzle-piece"></i><span class="title-head">Virtual Breeding</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="pedigree" class="tab-pane active">
                                <div class="wpb_wrapper">
                                    <div class="row-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="main-heading">Pedigree:
                                                <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="col-sm-12">

                                            <div class="overflow" style="width: 100%;  overflow: auto">
                                                <div id="extended_pedigree_container">
                                                    <div class="generation_depth">
                                                        <span>
                                                            I Parents
                                                            <hr class="style-two-green">
                                                        </span>
                                                        <span>
                                                            II Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                                                        <span>
                                                            III G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                                                        <span>
                                                            IV G.G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                                                        <span>
                                                            V G.G.G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                                                    </div>

                                                    <div class="pedigree_line">

                                                        <div class="generation pedigree_gen1">
                                                            @foreach($pedigree['level1'] as $level1)
                                                                @if($level1 !== null)
                                                                    <div class="animalBox">
                                                                    <div class="dna-not-available"></div>
                                                                    <span class="movieSymbol"></span>
                                                                    <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level1->seo_slug)}}">
                                                                             @if($level1->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture" src="{{asset('storage/cats/'.$level1->pet_pic)}}" alt="{{$level1->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="{{$level1->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="{{route('pedigree',$level1->seo_slug)}}">
                                                                                {{$level1->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <p class="one-liner"></p>
                                                                        </li>
                                                                        <li>
                                                                            @if($level1->registration !== null)
                                                                                <p class="one-liner">{{$level1->registration ?? ''}}</p>
                                                                            @elseif($level1->foreign_no !== null)
                                                                                <p class="one-liner">{{$level1->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level1->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level1->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                            @if($level1->award !== null)
                                                                                <p class="one-liner">
                                                                                {{$level1->award}}
                                                                            </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                                </div>
                                                                @else
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void (0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="javascript:void (0);">
                                                                                No Information</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="generation pedigree_gen2">
                                                            @foreach($pedigree['level2'] as $level2)
                                                                @if($level2 != null)
                                                                <div class="animalBox">
                                                                <div class="dna-not-available"></div>
                                                                <span class="movieSymbol"></span>
                                                                <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level2->seo_slug)}}">
                                                                             @if($level2->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture" src="{{asset('storage/cats/'.$level2->pet_pic)}}" alt="{{$level2->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="{{$level2->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="{{route('pedigree',$level2->seo_slug)}}">
                                                                                {{$level2->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <p class="one-liner"></p>
                                                                        </li>
                                                                        <li>
                                                                            @if($level2->registration !== null)
                                                                                <p class="one-liner">{{$level2->registration ?? ''}}</p>
                                                                            @elseif($level2->foreign_no !== null)
                                                                                <p class="one-liner">{{$level2->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level2->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level2->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                            @if($level2->award !== null)
                                                                                <p class="one-liner">
                                                                            {{$level2->award}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                                @else
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li><a class="bold" href="javascript:void (0);">No Information</a></li>
                                                                    </ul>
                                                                </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="generation pedigree_gen3">
                                                            @foreach($pedigree['level3'] as $level3)
                                                                @if($level3 !== null)
                                                                    <div class="animalBox">
                                                                    <div class="dna-not-available"></div>
                                                                    <span class="movieSymbol"></span>
                                                                    <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level3->seo_slug)}}">
                                                                             @if($level3->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture" src="{{asset('storage/cats/'.$level3->pet_pic)}}" alt="{{$level3->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="{{$level3->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="{{route('pedigree',$level3->seo_slug)}}">
                                                                                {{$level3->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            @if($level3->registration !== null)
                                                                                <p class="one-liner">{{$level3->registration ?? ''}}</p>
                                                                            @elseif($level3->foreign_no !== null)
                                                                                <p class="one-liner">{{$level3->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level3->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level3->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                            @if($level3->award !== null)
                                                                                <p class="one-liner">
                                                                            {{$level3->award}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                                @else
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li><a class="bold" href="javascript:void(0);">No Information</a></li>
                                                                    </ul>
                                                                </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                        </div>
                                                        <div class="generation pedigree_gen4">
                                                            @foreach($pedigree['level4'] as $level4)
                                                                @if($level4 != null)
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                <a href="{{route('pedigree',$level4->seo_slug)}}">
                                                                                     @if($level4->pet_pic !== null)
                                                                                        <img class="pedigreeMainPicture" src="{{asset('storage/cats/'.$level4->pet_pic)}}" alt="{{$level4->pet_name}}">
                                                                                    @else
                                                                                        <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="{{$level4->pet_name}}">
                                                                                    @endif
                                                                                </a>
                                                                            </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold" href="{{route('pedigree',$level4->seo_slug)}}">
                                                                                        {{$level4->pet_name ?? ''}}
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    @if($level4->registration !== null)
                                                                                        <p class="one-liner">{{$level4->registration ?? ''}}</p>
                                                                                    @elseif($level4->foreign_no !== null)
                                                                                        <p class="one-liner">{{$level4->foreign_no ?? ''}}</p>
                                                                                    @else
                                                                                        <p class="one-liner"></p>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </div>
                                                                @else
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void (0);">
                                                                            <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="javascript:void (0);">No Information</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="generation pedigree_gen5">
                                                            @foreach($pedigree['level5'] as $level5)
                                                                @if($level5 !== null)
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                        <a href="{{route('pedigree',$level5->seo_slug)}}">
                                                                                             @if($level5->pet_pic !== null)
                                                                                                <img class="pedigreeMainPicture" src="{{asset('storage/cats/'.$level5->pet_pic)}}" alt="{{$level5->pet_name}}">
                                                                                            @else
                                                                                                <img class="pedigreeMainPicture" src="{{asset('frontend/images/cat-no-pic.png')}}" alt="{{$level5->pet_name}}">
                                                                                            @endif
                                                                                        </a>
                                                                                    </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold" href="{{route('pedigree',$level5->seo_slug)}}">
                                                                                        {{$level5->pet_name ?? ''}}
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </div>
                                                                @else
                                                                    <div class="animalBox">
                                                                        <div class="dna-not-available"></div>
                                                                        <span class="movieSymbol"></span>
                                                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <img class="pedigreeMainPicture" src="{{asset('frontend/images/pkc-no-image.jpeg')}}" alt="No Information">
                                                                                </a>
                                                                            </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold" href="javascript:void(0);">No Information</a>
                                                                                </li>
                                                                                <li>
                                                                                    <p class="one-liner"></p>
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="linebreeding" class="tab-pane">
                                <h2>Linebreeding:</h2>
                                @if(!empty($line_breeding))
                                    {!! $line_breeding !!}
                                @else
                                <p>No common entries in 5 generations</p>
                                @endif
                            </div>
                            <div id="siblings" class="tab-pane">
                                <h1 class="main-heading">Siblings:
                                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                </h1>
                                <div class="section-content">
                                    <div class="row">
                                        @if($siblings !== null)
                                            @foreach($siblings as $sibling)
                                            <div class="col-lg-3 col-sm-6 m-b30">
                                                <div class="icon-bx-wraper bx-style-1 p-a30 center border-1 dez-box custom-shadow-light custom-box-full-width radius-sm min-height-313">
                                                    <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20">
                                                        <a href="{{route('pedigree',$sibling->seo_slug)}}" class="dez-img-effect">
                                                            @if($sibling->pet_pic !== null)
                                                                <img src="{{asset('storage/cats/'.$sibling->pet_pic)}}">
                                                            @else
                                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="icon-content">
                                                        <a href="{{route('pedigree',$sibling->seo_slug)}}">
                                                            <h5 class="dez-tilte text-uppercase cus-small-title">{{$sibling->pet_name ?? ''}}</h5>
                                                        </a>
                                                        <p><b class="font-small">Microchip # : </b> {{$sibling->microchip ?? ''}}<br><b class="font-small">Registration No #
                                                                :</b> {{$sibling->registration ?? ''}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                </div>
                            </div>
                        </div>
                            <div id="progeny" class="tab-pane">
                                <h1 class="main-heading">Progeny:
                                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                </h1>
                                <div id="comments">
                                    @foreach($progeny as $parent => $children)
                                        @php
                                        $parent = getCatById($parent);
                                        if (!isset($parent->seo_slug))
                                        {
                                            continue;
                                        }
                                        @endphp
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 bx-style-1 border-1 dez-box bg-gray custom-shadow-light pt-2 pb-2 mb-2">
                                            <div class="icon-bx-wraper left p-a10  custom-box-full-width">
                                                <div class="icon-bx-lg icon-bx-lg-prog icon-bx-lg-cus m-b20">
                                                    @if(isset($parent->seo_slug))

                                                        <a target="_blank" href="{{route('pedigree',$parent->seo_slug)}}" class="dez-img-effect">
                                                        @if($parent->pet_pic !== null)
                                                            <img src="{{asset('storage/cats/'.$parent->pet_pic)}}" alt="{{$parent->pet_name}}">
                                                        @else
                                                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                        </a>
                                                        @endif
                                                        @else
                                                            <a href="javascript:void (0);" class="dez-img-effect">
                                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                            </a>
                                                        @endif
                                                </div>
                                                @if(isset($parent->seo_slug))
                                                    <div class="icon-content text-left">
                                                    <a href="{{route('kennels-profile')}}">
                                                        <a href="{{route('pedigree',$parent->seo_slug)}}" target="_blank">
                                                            <h5 class="dez-tilte text-uppercase">{{$parent->pet_name ?? ''}}</h5>
                                                        </a>
                                                        <h6 class="media-heading pdb-media-right" style="display: inline; text-align: right;">
                                                            @if($parent->gender_id == 2)
                                                                <img src="{{asset('frontend/images/female.png')}}" alt="Female">
                                                                Female | PKC
                                                            @else
                                                                <img src="{{asset('frontend/images/male.png')}}" alt="Male">
                                                                Male | PKC
                                                            @endif
                                                        </h6>
                                                        <br>
                                                        <span>Sire: <a href="{{route('pedigree',$parent->petFather->seo_slug ?? '')}}" target="_blank">{{$parent->petFather->pet_name ?? ''}}</a></span>
                                                        <br>
                                                        <span>Dame: <a href="{{route('pedigree',$cat->petMother->seo_slug ?? '')}}" target="_blank">{{$parent->petMother->pet_name ?? ''}}</a></span>
                                                        <p>Whelped: {{date('d F Y',strtotime($parent->whelped)) ?? 'N/A'}} - Registry: {{$parent->registration ?? 'N/A'}} - Microchip:
                                                            {{$parent->microchip ?? 'N/A'}}</p>
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
                                        @foreach($children as $child)
                                            @if($child)
                                            @endif
                                            <div class="offset-lg-1 col-lg-8 col-md-6 bx-style-1 border-1 dez-box custom-shadow-light pt-2 pb-2 mb-2">
                                                <div class="icon-bx-wraper left p-a10  custom-box-full-width">
                                                    <div class="icon-bx-lg icon-bx-lg-prog icon-bx-lg-cus m-b20">
                                                        <a target="_blank" href="{{route('pedigree',$child->seo_slug)}}" class="dez-img-effect">
                                                            @if($child->pet_pic !== null)
                                                                <img src="{{asset('storage/cats/'.$child->pet_pic)}}" alt="{{$child->pet_name}}">
                                                            @else
                                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="icon-content text-left">
                                                        <a href="{{route('kennels-profile')}}">
                                                            <a href="{{route('pedigree',$child->seo_slug)}}" target="_blank">
                                                                <h5 class="dez-tilte text-uppercase">{{$child->pet_name ?? ''}}</h5>
                                                            </a>
                                                            <h6 class="media-heading pdb-media-right" style="display: inline; text-align: right;">
                                                                @if($child->gender_id == 2)
                                                                <img src="{{asset('frontend/images/female.png')}}" alt="Female">
                                                                Female | PKC
                                                                @else
                                                                    <img src="{{asset('frontend/images/male.png')}}" alt="Male">
                                                                    Male | PKC
                                                                @endif
                                                            </h6>
                                                            <br>
                                                            <span>Sire: <a href="{{route('pedigree',$child->petFather->seo_slug)}}" target="_blank">{{$child->petFather->pet_name ?? ''}}</a></span>
                                                            <br>
                                                            <span>Dame: <a href="{{route('pedigree',$child->petMother->seo_slug)}}" target="_blank">{{$child->petMother->pet_name ?? ''}}</a></span>
                                                            <p>Whelped: {{date('d F Y',strtotime($child->whelped)) ?? 'N/A'}} - Registry: {{$child->registration ?? 'N/A'}} - Microchip:
                                                                {{$child->microchip ?? 'N/A'}}</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <div id="gallery" class="tab-pane">
                                <h1 class="main-heading">Gallery:
                                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                </h1>
                                <div class="section-content">
                                    <div class="row">
                                        <div class="clearfix">
                                            <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 m-b0 mfp-gallery">
                                                <li class="card-container col-lg-3 col-sm-6 home">
                                                        <div class="dez-box dez-gallery-box">
                                                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{asset('storage/cats/'.$cat->pet_pic)}}"  alt="{{$cat->pet_name}}">
                                                                </a>
                                                                <div class="overlay-bx">
                                                                    <div class="overlay-icon">
                                                                        {{--                                        <a href="javascript:void(0);">--}}
                                                                        {{--                                            <i class="fa fa-link icon-bx-xs"></i>--}}
                                                                        {{--                                        </a>--}}
                                                                        <a href="{{asset('storage/cats/'.$cat->pet_pic)}}" class="mfp-link"  title="{{$cat->pet_name}}">
                                                                            <i class="fa fa-picture-o icon-bx-xs"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cat-shows" class="tab-pane">
                                <h1 class="main-heading">Show Results:
                                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                </h1>
                               <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Date</th>
                                        <th style="width:30%">Show & Judge</th>
                                        <th>Catalog NO.</th>
                                        <th>Class</th>
                                        <th>Grading</th>
                                        <th>Rank</th>
                                    </thead>
                                    <tbody>
                                         @foreach($show_results as $result)
                                        <tr>
                                            <td>{{date('d F Y',strtotime($result->event->event_date)) ?? ''}}</td>
                                           <td>{{$result->event->title}} - {{implode(',',json_decode($result->event->judges,true)) ?? ''}}</td>
                                           <td>{{$result->show_id}}</td>
                                            <td>{{$result->class ?? ''}}</td>
                                            <td> {{$result->title ? $result->title->title : ''}}</td>
                                            <td> {{$result->position}}</td>
                                            <!--<td>{{$result->event->venue ?? ''}}</td>-->

                                        </tr>
                                        @endforeach
                                    </tbody>
                                  
                                </table>
                                </div>
                                
                            </div>
                            <div id="virtual-breeding" class="tab-pane">
                                <h1 class="main-heading">Virtual Breeding:
                                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
                                </h1>
                                <div class="row top-section">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row border-1 dez-box pt-2 pb-2 bg-white custom-shadow-light mr-2 radius-sm">
                                            <div class="col-sm-4 dez-box border-right-1 p-2">
                                                <h5> <img src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                        class="rounded float-center">
                                                </h5>
                                            </div>
                                            <div class="col-sm-8 m-auto dez-box p-2">
                                                <label for="sire-pkc-no" class="form-label">Name Of Cat - PKC
                                                    No</label>
                                                <select class="form-control" id="virtual_breed_select">
                                                    <option selected="">Enter at Least 2 character</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row border-1 dez-box pt-2 pb-2 bg-white custom-shadow-light radius-sm">
                                            <div class="col-sm-4">
                                                @if($cat->pet_pic !== null)
                                                    <img src="{{asset('storage/cats/'.$cat->pet_pic)}}">
                                                @else
                                                    <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                @endif
                                            </div>
                                            <div class="col-sm-8 m-auto">
                                                <h5>{{$cat->pet_name ?? ''}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="virtual-breeding-pedigree"></div>
                            </div>
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
<script>
    $(document).ready(function() {
        $("span[data-select2-id='5']").css('display','none');

        $(".single-select").on("change", function(e) {
            // console.log($('.single-select').find(':selected').val());
            window.location.href =  $('.single-select').find(':selected').val();

        });

        $("#virtual_breed_select").select2({
            ajax: {
                url: "{{route('virtual_breed_cats')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        genderId:'{{$cat->gender_id}}',
                        breedId:'{{$cat->breed_id}}',
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $('#virtual_breed_select').change(function () {
            var genderId = '{{$cat->gender_id}}';
            var damId = $(this).find(':selected').val();
            var sireId = '{{$cat->id}}';
            if(genderId == 2)
            {
                damId = '{{$cat->id}}';
                sireId = $(this).find(':selected').val();
            }

            var data = {
                'damId': damId,
                'sireId': sireId,
            };
            $.ajax({
                type: "GET",
                url: "{{route('virtual_breed_pedigree')}}",
                data: data,
                // async: false,
                success: function (response) {
                    $('#virtual-breeding-pedigree').empty();
                    $('#virtual-breeding-pedigree').append(response.virtual_breed_pedigree);
                    console.log(response.virtual_breed_pedigree);
                },
                error: function () {
                    alert('Error occured');
                }
            });
        });
    });
</script>
@endsection
