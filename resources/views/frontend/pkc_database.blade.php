@extends('frontend.layouts.app')
@section('title','Pkc Database')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-database.png'),'breedcrumb'=>'Pkc Database','page_title'=>'' , 'overlay' => 'none'])
    <!-- Filters -->
    <div class="container position-relative">
        <div class="row">
            <div class="site-filters clearfix center m-t20 m-b20 ml-auto mr-auto">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="all" class="btn active">
                        <input type="radio">
                        <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>ALL</span></a>
                    </li>
                    @foreach($groups as $group)
                        <li data-filter="{{(strtolower($group->name) == 'group '.$loop->index+1 )? 'g'.$loop->index+1 : '' }}" class="btn {{(strtolower($group->name) == 'group '.$loop->index+1 )? 'g'.$loop->index+1 : '' }}">
                        <input type="radio">
                        <a href="javascript:void(0);" class="site-button btn-dark radius-xl custom-button-style"><span>GROUP {{$loop->index+1}}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="site-filters clearfix center m-b20 ml-auto mr-auto">
                <ul class="filters" data-toggle="buttons">
                    @foreach($letters as $letter)
                    <li data-filter="{{$letter}}" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>{{strtoupper($letter)}}</span></a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <!-- Filters END -->
        <!-- Images  -->
        <div class="clearfix">
            <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 m-b0  ">
                <div class="row">
                    @foreach($updated_group_collection as $group)
                        @foreach(json_decode($group->breeds,true) as $breed)
                        <li class="card-container col-lg-3 col-sm-6 m-b30 all g{{$loop->parent->index+1}} {{substr(strtolower($breed['breed_value']),0,1)}}">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-box border-1 custom-shadow-light radius-sm">
                                    <div class="dez-media text-center"> <a href="{{route('cats_list',$breed['slug'])}}"><img class="width-190"
                                                src="{{asset('storage/breeds/'.$breed['image'])}}" alt=""></a> </div>
                                    <div class="dez-info p-t10 p-a50 min-height-135">
                                        <h4 class="dez-title text-center cus-small-title"><a href="{{route('cats_list',$breed['slug'])}}">{{ucfirst($breed['breed_value'])}}</a></h4>
                                        <a href="{{route('cats_list',$breed['slug'])}}"
                                            class="site-button button-sm radius-xl float-left custom-button-style">DOG LIST </a>
                                        <a href="{{route('database.breed_detail',$breed['slug'])}}" class="site-button button-sm radius-xl float-right custom-button-style">SEE MORE</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    @endforeach
                </div>

            </ul>
        </div>
    </div>
    <!-- Images END -->
</div>
@endsection
