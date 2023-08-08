@extends('frontend.layouts.app')
@section('styles')

    <style>

    </style>
@endsection
@section('title','Cats List')
@section('content')
<div class="page-content">
     @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-database.png'),'breedcrumb'=>'Cats
    List','page_title'=>'Cats List' , 'overlay' => 'none'])


    <div class="section-full content-inner">
        <div class="container">
            <!-- Search Bar -->
            @include('frontend.components.pedigree_search')
            <!-- End Search Bar -->
            <!--heading -->
            <div class="m-b20">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <select class="single-select form-control">
                            @foreach($breeds as $breed)
                                <option value="{{route('cats_list',$breed->slug)}}" {{($breed->id == $breed_selected_id)?'selected':''}}>{{$breed->breed_value}} ({{$breed->group->name ?? ''}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="section-head inner-haed">
                    <h2 class="text-uppercase">Pakistan Feline Club Cats List</h2>
                </div>
                <!-- End heading -->
                <!-- Main Section-->
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
                                        @if($cat->suspend == 1)
                                            <h5 class="dez-tilte text-uppercase cus-small-title text-danger"><del>{{$cat->pet_name ?? ''}}</del></h5>
                                        @else
                                            <h5 class="dez-tilte text-uppercase cus-small-title">{{$cat->pet_name ?? ''}}</h5>
                                        @endif
                                    </a>
                                    <p><b class="font-small">Microchip # : </b> {{$cat->microchip ?? ''}}<br>
                                        <b class="font-small">Registration No #
                                            :</b>
                                        @if($cat->suspend == 1)
                                            <span class="badge badge-danger">De-Registered</span>
                                        @else
                                            {{$cat->registration ?? ''}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row flex-wrap">
                        <div class="ml-auto m-auto">
                            {{ $cats->onEachSide(2)->links() }}
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
