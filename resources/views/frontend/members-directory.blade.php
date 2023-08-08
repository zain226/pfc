@extends('frontend.layouts.app')
@section('title','Members Directory')
@section('content')
    <div class="page-content">
       @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/Members-Directory.png'),'breedcrumb'=>'Members Directory','page_title'=>'Members Directory' , 'overlay' => 'none'])

        <div class="section-full content-inner">
            <div class="container">
                <!-- Search Bar -->
                @include('frontend.components.member_search')
                <!-- End Search Bar -->
                <!--heading -->
                <div class="m-b20">
                    <div class="section-head inner-haed">
                        <h2 class="text-uppercase">Pakistan Member Club Directory</h2>
                    </div>
                    <!-- End heading -->
                    <!-- Main Section-->
                    <div class="section-content">
                        <div class="row">
                            @foreach($members as $member)
                                <div class="col-lg-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper left custom-shadow-light p-2 radius-sm">
                                        <div class="icon-bx-sm">
                                            <a href="{{ route('member_directory.profile',$member->name_slug) }}" class="dez-img-effect">
                                                @if(!empty($member->pic))
                                                    <img class="radius-sm" src="{{asset('storage/breeders/'.$member->pic)}}">
                                                @else
                                                    <img class="radius-sm" src="{{asset('frontend/images/user-no-image.png')}}">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="icon-content">
                                            <a href="{{route('member_directory.profile',$member->name_slug)}}">
                                                <h6 class="dez-tilte text-uppercase">{{$member->name ?? ''}}</h6>
                                            </a>
                                            <i>
                                                <span>Membership#: {{$member->registration_no ?? ''}}</span><br>
                                                <span>City: {{ucfirst($member->city) ?? ''}}</span>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row flex-wrap">
                            <div class="ml-auto m-auto">
                                {{ $members->onEachSide(2)->links() }}
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
