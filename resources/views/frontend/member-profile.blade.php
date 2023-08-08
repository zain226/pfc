@extends('frontend.layouts.app')
@section('title','member Profile')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/Members-Directory.png'),'breedcrumb'=>'Members Directory','page_title'=>'Members Directory' , 'overlay' => 'none'])
    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Members detail -->
        <div class="container woo-entry">
            <!-- Search Bar -->
            @include('frontend.components.member_search')
            <!-- End Search Bar -->
            <div class=" m-b30">
                <div class="row blog-post blog-md date-style-2">
                    <div class="col-lg-4 col-md-4  col-sm-5 m-b30 ">
                        <a href="javascript:void (0);" class="dez-img-overlay1 dez-img-effect zoom">
                            @if(!empty($member->pic))
                                <img class="radius-sm" src="{{asset('storage/breeders/'.$member->pic)}}">
                            @else
                                <img class="radius-sm" src="{{asset('frontend/images/user-no-image.png')}}">
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <div class="dez-post-title ">
                            <h2 class="post-title"><a href="javascript:void(0);">{{$member->name ?? ''}}
                                    @if($member->banned == 1)
                                    <a href="javascript:void(0);" type="button" class="btn btn-danger radius-xl px-4 font-weight-900" style="font-size: 30px;
letter-spacing: 1px;">
                                        BANNED
                                    </a>
                                    @elseif($available_balance < 0)
                                        <a href="javascript:void(0);" style="font-size: 23px;" class="btn btn-danger px-4 radius-xl font-weight-900 font-size-20"><span class="badge badge-pill badge-warning uppercase p-2 bg-white text-danger">Warning!</span> This account is delinquent!</a>
                                    @endif
                                </a></h2>
                        </div>
                        <h3 class="m-tb10">Membership # : @if($member->banned != 1){{$member->registration_no ?? ''}}@endif</h3>
{{--                        <div class="dez-post-text">--}}
{{--                            <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
{{--                                Lorem Ipsum has been the industry's standard dummy--}}
{{--                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled--}}
{{--                                it to make a type specimen book.</p>--}}
{{--                        </div>--}}
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$member->name ?? ''}}</td>
                            </tr>
                            @if($member->kennel != null )
                            <tr>
                                <th>Kennel Name</th>
                                <td>
                                    @if($member->banned != 1)
                                        <a href="{{route('kennel_directory.profile',getSlug($member->kennel))}}">{{$member->kennel ?? ''}}</a>
                                    @endif
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <th>Membership No</th>
                                @if($member->banned != 1)
                                <td>{{$member->registration_no ?? ''}}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>
                                    @if($member->show_phone == 1)
                                        {{$member->contact ?? 'N/A'}}
                                    @else
                                        <i class="fa fa-lock text-danger font-20"></i> Private
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    @if($member->show_email == 1)
                                        {{$member->email ?? 'N/A'}}
                                    @else
                                        <i class="fa fa-lock text-danger font-20"></i> Private
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Membership Type</th>
                                @if($member->banned != 1)
                                <td>
                                    @if($member->permanent_member == 1)
                                        Permanent Member
                                    @else
                                        Temporary Member
                                    @endif
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    @if($member->show_address == 1)
                                        {{$member->address ?? 'N/A'}}
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
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cat">
                                    <i class="fa fa-paw fa-lg"></i><span class="title-head">Cats</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="kennel" class="tab-pane active">
                                <h3>MEMBER KENNEL</h3>
                                @if($member->banned != 1)
                                <table class="table table-bordered text-center">
                                    <tr>
                                        <td>Kennel Name</td>
                                        <td>{{$member->kennel ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td>Suffix</td>
                                        <td>{{$member->name ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                                @endif
                            </div>

                            <div id="cat" class="tab-pane">
                                @if($member->banned != 1)
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
                                @endif
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
