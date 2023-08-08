@extends('frontend.layouts.app')
@section('title','Breed Detail')
@section('content')
    <div class="page-content">
         @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-database.png'),'breedcrumb'=>'Breed Standard','page_title'=>$breed->breed_value ?? '', 'overlay' => 'none'])
        <!-- Breed Detail -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row custom-shadow-light radius-sm">
                    <div class="col-lg-3 col-md-3">
                        <div class="dez-box">
                            <div class="dez-media">
                                <a href="#">
                                    @if($breed->image !== null)
                                        <img src="{{asset('storage/breeds/'.$breed->image)}}" alt="{{$breed->breed_value ?? ''}}">

                                    @else
                                    @endif
                                </a>
                            </div>
                            <div class="dez-info p-a30 text-center">
                                <h4 class="dez-title m-t0">
                                    <a href="javascript:void(0);">{{$breed->group->name ?? ''}}</a>
                                </h4>
                                @if($breed->breed_standard !== null)
                                    <a href="{{asset('storage/breeds/'.$breed->breed_standard)}}" target="_blank" class="site-button radius-xl custom-button-style text-uppercase mb-2">Breed Standard</a>
                                @endif
                                <a href="{{route('cats_list',$breed['slug'])}}" class="site-button radius-xl custom-button-style text-uppercase mb-2">Breed Database</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <h2 class="text-uppercase m-b10"> {{$breed->breed_value ?? ''}}</h2>
                        <p>{!! $breed->detail ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breed Detail END -->
    </div>
@endsection
