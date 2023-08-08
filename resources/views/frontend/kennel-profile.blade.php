@extends('frontend.layouts.app')
@section('title','kennel Profile')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/Kennels-Directory-1.png'),'breedcrumb'=>'kennel Profile','page_title'=>'' , 'overlay' => 'none'])
    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Kennels details -->
        <div class="container woo-entry">
            <!-- Search Bar -->
            @include('frontend.components.kennel_search')
            <!-- End Search Bar -->
            <div class=" m-b30">
                <div class="row blog-post blog-md date-style-2">
                    <div class="col-lg-4 col-md-4  col-sm-5 m-b30 ">
                        <a href="javascript:void (0);" class="dez-img-overlay1 dez-img-effect zoom">
                            @if(!empty($kennel->pic))
                                <img class="radius-sm" src="{{asset('storage/breeders/'.$kennel->pic)}}">
                            @else
                                <img class="radius-sm" src="{{asset('frontend/images/user-no-image.png')}}">
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <div class="dez-post-title ">
                            <h2 class="post-title">
                                <a href="javascript:void(0);">{{$kennel->kennel ?? ''}}</a>
                                @if($available_balance < 0)
                                    <a href="javascript:void(0);" style="font-size: 23px;" class="btn btn-danger px-4 radius-xl font-weight-900 font-size-20"><span class="badge badge-pill badge-warning uppercase p-2 bg-white text-danger">Warning!</span> This account is delinquent!</a>
                                @endif
                            </h2>
                        </div>
                        <h3 class="m-tb10">Membership # : {{$kennel->registration_no ?? ''}}</h3>
{{--                        <div class="dez-post-text">--}}
{{--                            <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
{{--                                Lorem Ipsum has been the industry's standard dummy--}}
{{--                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled--}}
{{--                                it to make a type specimen book.</p>--}}
{{--                        </div>--}}
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>
                                    <a target="_blank" href="{{route('member_directory.profile',getSlug($kennel->name))}}">
                                        {{$kennel->name ?? ''}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Kennel Name</th>
                                <td>{{$kennel->kennel ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Membership No</th>
                                <td>{{$kennel->registration_no ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>
                                    @if($kennel->show_phone == 1)
                                        {{$kennel->contact ?? 'N/A'}}
                                    @else
                                        <i class="fa fa-lock text-danger font-20"></i> Private
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    @if($kennel->show_email == 1)
                                        {{$kennel->email ?? 'N/A'}}
                                    @else
                                        <i class="fa fa-lock text-danger font-20"></i> Private
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    @if($kennel->show_address == 1)
                                        {{$kennel->address ?? 'N/A'}}
                                    @else
                                        <i class="fa fa-lock text-danger font-20"></i> Private
                                    @endif
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dez-tabs border-tp product-description bg-tabs">
                        <ul class="nav nav-tabs">

                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#kennel">
                                    <i class="fa fa-home fa-lg"></i><span class="title-head">Kennel</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#breeding">
                                    <i class="fa fa-venus-mars fa-lg"></i> <span class="title-head">Breeding</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cat">
                                    <i class="fa fa-paw fa-lg"></i><span class="title-head">Cats</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="kennel" class="tab-pane active">
                                <h3>MEMBER KENNEL</h3>
                                <table class="table table-bordered text-center">
                                    <tr>
                                        <td>Kennel Name</td>
                                        <td>{{$kennel->kennel ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td>Suffix</td>
                                        <td>{{$kennel->name ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                            </div>

                            <div id="breeding" class="tab-pane">
                                <h3>Breeding</h3>
                                <div class="section-content">
                                    @foreach($breedings as $key => $breeding)
                                        @if($breeding->first()->petFather == null || $breeding->first()->petMother == null)
                                            @continue
                                        @endif
                                    <div class="row dez-box border-1 custom-shadow-light custom-box-full-width mb-2">
                                        <div class="col-lg-5 col-md-6 bx-style-1">
                                            <div class="icon-bx-wraper left p-a30">
                                                <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20">
                                                    <a target="_blank" href="{{route('pedigree',$breeding->first()->petFather->seo_slug)}}" class="dez-img-effect">

                                                        @if($breeding->first()->petFather->pet_pic !== null)
                                                            <img src="{{asset('storage/cats/'.$breeding->first()->petFather->pet_pic)}}">
                                                        @else
                                                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="icon-content text-left">
                                                    <a target="_blank" href="{{route('pedigree',$breeding->first()->petFather->seo_slug)}}">
                                                        <h5 class="dez-tilte text-uppercase">{{$breeding->first()->petFather->pet_name}}</h5>
                                                    </a>
                                                    @if($breeding->first()->petFather->whelped !== null)
                                                    <span>Whelped: {{date('d/m/Y',strtotime($breeding->first()->petFather->whelped)) ?? ''}}</span><br>
                                                    @endif
                                                    @if($breeding->first()->petFather->microchip !== null)
                                                    <span>Microchip #: {{ $breeding->first()->petFather->microchip ?? ''}}</span><br>
                                                    @endif
                                                    @if($breeding->first()->petFather->registration !== null)
                                                    <span>Reg #: {{ $breeding->first()->petFather->registration ?? ''}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-6">
                                            <a data-toggle="collapse" href="#breed_{{$key}}" class="collapsed">
                                                <div class="icon-bx-wraper bx-style-1  m-t40 m-b40 p-a30 center">
                                                    <div><i class="fa fa-exchange cus-icon-size"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-5 col-md-6 bx-style-1 ">
                                            <div class="icon-bx-wraper left p-a30">
                                                <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20">
                                                    <a target="_blank" href="{{route('pedigree',$breeding->first()->petMother->seo_slug)}}" class="dez-img-effect">

                                                        @if($breeding->first()->petFather->pet_pic !== null)
                                                            <img src="{{asset('storage/cats/'.$breeding->first()->petMother->pet_pic)}}">
                                                        @else
                                                            <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="icon-content text-left">
                                                    <a target="_blank" href="{{route('pedigree',$breeding->first()->petMother->seo_slug)}}">
                                                        <h5 class="dez-tilte text-uppercase">{{$breeding->first()->petMother->pet_name}}</h5>
                                                    </a>
                                                    @if($breeding->first()->petMother->whelped !== null)
                                                        <span>Whelped: {{date('d/m/Y',strtotime($breeding->first()->petMother->whelped)) ?? ''}}</span><br>
                                                    @endif
                                                    @if($breeding->first()->petMother->microchip !== null)
                                                        <span>Microchip #: {{ $breeding->first()->petMother->microchip ?? ''}}</span><br>
                                                    @endif
                                                    @if($breeding->first()->petMother->registration !== null)
                                                        <span>Reg #: {{ $breeding->first()->petMother->registration ?? ''}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-gray dez-box mx-auto custom-box-full-width">
                                            <div id="breed_{{$key}}" class="collapse">
                                                <div class="row acod-content">
                                                    @foreach($breeding as $cat_child)
                                                    <div class="col-lg-6 col-md-6 bx-style-1 mb-2">
                                                        <div class="icon-bx-wraper left p-a30  bg-white radius-sm custom-shadow-light">
                                                            <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20">
                                                                <a target="_blank" href="{{route('pedigree',$cat_child->seo_slug)}}" class="dez-img-effect">

                                                                    @if($cat_child->pet_pic !== null)
                                                                        <img src="{{asset('storage/cats/'.$cat_child->pet_pic)}}">
                                                                    @else
                                                                        <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                                    @endif
                                                                </a>
                                                            </div>
                                                            <div class="icon-content text-left">
                                                                <a target="_blank" href="{{route('pedigree',$cat_child->seo_slug)}}">
                                                                    <h5 class="dez-tilte text-uppercase">{{$cat_child->pet_name ?? 'N/A'}}</h5>
                                                                </a>
                                                                @if($cat_child->whelped !== null)
                                                                    <span>Whelped: {{date('d/m/Y',strtotime($cat_child->whelped)) ?? ''}}</span><br>
                                                                @endif
                                                                @if($cat_child->microchip !== null)
                                                                    <span>Microchip #: {{ $cat_child->microchip ?? ''}}</span><br>
                                                                @endif
                                                                @if($cat_child->registration !== null)
                                                                    <span>Reg #: {{ $cat_child->registration ?? ''}}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                        <div class="close-mating">

                                                            <i class="icon icon-remove badge badge-important" data-toggle="collapse" data-target="#breed_{{$key}}">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </i>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>

                            <div id="cat" class="tab-pane">
                                <div class="section-content">
                                    <div class="row">
                                        @foreach($cats as $cat)
                                            <div class="col-lg-3 col-sm-6 m-b30">
                                                <div class="icon-bx-wraper bx-style-1 p-a30 center border-1 dez-box custom-shadow-light custom-box-full-width radius-sm min-height-313">
                                                    <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20">
                                                        <a href="{{route('pedigree',$cat->seo_slug)}}" class="dez-img-effect">
                                                            @if($cat->pet_pic !== null)
                                                                <img src="{{asset('storage/cats/'.$cat->pet_pic)}}">
                                                            @else
                                                                <img src="{{asset('frontend/images/cat-no-pic.png')}}">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="icon-content">
                                                        <a href="{{route('pedigree',$cat->seo_slug)}}">
                                                            <h5 class="dez-tilte text-uppercase cus-small-title">{{$cat->pet_name ?? ''}}</h5>
                                                        </a>
                                                        <p><b class="font-small">Microchip # : </b> {{$cat->microchip ?? ''}}<br><b class="font-small">Registration No #
                                                                :</b> {{$cat->registration ?? ''}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Kennels details -->
</div>
@endsection
@section('scripts')
    <script>
        function toggleById(id)
        {
            console.log(id);
            $('#'+id).collapse();
        }
    </script>
@endsection
