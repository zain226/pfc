@extends('frontend.layouts.app')
@section('title','PKC Blogs')
@section('content')
<div class="page-content">
        @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/PKC-Blogs.png'),'breedcrumb'=>'PKC Blogs','page_title'=>'PKC Blogs' , 'overlay' => 'none'])
    <div class="clearfix">
        <div class="section-full content-inner">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-9">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                            <div class="dez-post-title ">
                                <h2 class="post-title mt-0"><a href="#">{{$blog->title}}</a></h2>
                            </div>
                            

                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="{{$blog->slug_image}}" alt=""></a> </div>
                            <div class="dez-post-text">
                                {!! $blog->long_description !!}
                            </div>
                        </div>
                      
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-3">
                        <aside class="side-bar">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    @foreach($blogs as $blog)
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="{{$blog->slug_image}}" width="320" height="160" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="{{route('single_blog',$blog->slug)}}">{{$blog->title}}</a></h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
        
             
    </div>
</div>
@endsection
