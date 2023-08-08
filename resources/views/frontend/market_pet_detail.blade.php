@extends('frontend.layouts.app')
@section('title','Pet Detail')
@section('content')
    <div class="page-content">
        @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/market_place.png'),'breedcrumb'=>'Cat Detail','page_title'=> $pet->title ?? '' , 'overlay' => 'none'])
        <!-- Breed Detail -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row custom-shadow-light radius-sm">
                    <div class="col-lg-3 col-md-3">
                        <div class="dez-box">
                            <div class="dez-media">
                                <a href="#">
                                    @if($pet->cat->pet_pic !== null)
                                        <img src="{{asset('storage/cats/'.$pet->cat->pet_pic)}}" alt="{{$pet->cat->pet_name ?? ''}}">
                                    @else
                                        <img src="{{asset('frontend/images/cat-no-pic.png')}}"
                                             class="rounded float-center">
                                    @endif
                                </a>
                            </div>
                            <div class="dez-info p-a30 text-center">
                                <h4 class="dez-title m-t0">
                                    <a href="javascript:void(0);">{{$pet->cat->pet_name ?? ''}}</a>
                                </h4>
                                <a href="{{route('pedigree',$pet->cat->seo_slug)}}" class="site-button radius-xl custom-button-style text-uppercase mb-2">Show Pedigree</a>
                                <a class="site-button radius-xl custom-button-style text-uppercase mb-2" href="tel:{{$pet->contact}}"><i class="fa fa-phone"></i> {{$pet->contact}} </a>
                                @if($pet->is_whatsapp == 1)
                                    <a class="site-button radius-xl custom-button-style text-uppercase mb-2" target="_blank" href="https://api.whatsapp.com/send/?phone={{$pet->contact}}&text&type=phone_number&app_absent=0"><i class="fa fa-whatsapp"></i> {{$pet->contact}} </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <h2 class="text-uppercase m-b10 d-flex justify-content-between">
                            {{$pet->title ?? ''}}
                            <p class="mr-4"><span style="font-size: small">PKR</span> {{number_format($pet->price, 2, '.', ' ') ?? ''}}</p>
                        </h2>
                       
                        <table class="table table-bordered">
                            @if($pet->cat->registration !== null )
                                <tr>
                                    <td>Reg Number</td>
                                    <td>{{$pet->cat->registration ?? ''}}</td>
                                </tr>
                            @elseif($pet->cat->foreign_no !== null)
                                <tr>
                                    <td>Foreign Number</td>
                                    <td>{{$pet->cat->foreign_no ?? ''}}</td>
                                </tr>
                            @endif
                                @if($pet->add_status == 'for sale' )
                                    <tr>
                                        <td>Add Status</td>
                                        <td>
                                            <span class="badge badge-success px-4">For Sale</span>
                                        </td>
                                    </tr>
                                @elseif($pet->add_status == 'for stud' )
                                <tr>
                                        <td>Add Status</td>
                                        <td>
                                            <span class="badge badge-warning px-4">For Stud</span>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>Add Status</td>
                                        <td>
                                            <span class="badge badge-danger px-4">Sold</span>
                                        </td>
                                    </tr>
                                @endif
                            @if($pet->cat->whelped !== null)
                                <tr>
                                    <td>Whelped</td>
                                    <td>{{date('d/m/Y',strtotime($pet->cat->whelped)) ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->microchip !== null)
                                <tr>
                                    <td>Microchip / Tattoo No</td>
                                    <td>{{$pet->cat->microchip ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->breeder_id !== null)
                                <tr>
                                    <td>Breeder</td>
                                    <td>
                                        @if($pet->cat->breeder->kennel !== null && $pet->cat->breeder->registration_no !== null)
                                            <a target="_blank" href="{{route('kennel_directory.profile',$pet->cat->breeder->kennel_slug)}}">
                                                {{$pet->cat->breeder->name ?? ''}}
                                            </a>
                                        @else
                                            <span>
                                            {{$pet->cat->breeder->name ?? ''}}
                                        </span>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if($pet->cat->gender_id !== null)
                                <tr>
                                    <td>Gender</td>
                                    <td>{{$pet->cat->gender->gender_value ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->breed_id !== null)
                                <tr>
                                    <td>Breed</td>
                                    <td>{{$pet->cat->breed->breed_value ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->color_id !== null)
                                <tr>
                                    <td>Colors</td>
                                    <td>{{$pet->cat->color->color_value ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->hair !== null)
                                <tr>
                                    <td>Hair Type</td>
                                    <td>{{ucfirst($pet->cat->hair) ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->award !== null)
                                <tr>
                                    <td>Title</td>
                                    <td>{{ucfirst($pet->cat->award) ?? ''}}</td>
                                </tr>
                            @endif
                            @if($pet->cat->owner_id !== null)
                                <tr>
                                    <td>Owner Name</td>
                                    <td>
                                        @if($pet->cat->owner->kennel !== null && $pet->cat->owner->registration !== null)
                                            <a target="_blank" href="{{route('kennel_directory.profile',Str::slug($pet->cat->owner->kennel))}}">
                                                {{$pet->cat->owner->name ?? ''}}
                                            </a>
                                        @else
                                            <span>{{$pet->cat->owner->name ?? ''}}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if($pet->comment !== null)
                                <tr>
                                    <td>Comment</td>
                                    <td>{{$pet->comment ?? ''}}</td>
                                </tr>
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breed Detail END -->
    </div>
@endsection
