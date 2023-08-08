@extends('frontend.layouts.app')
@section('title','PKC Blogs')
@section('content')
<div class="page-content">
    @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/PKC-Blogs.png'),'breedcrumb'=>'PKC Blogs','page_title'=>'PKC Blogs' , 'overlay' => 'none'])
    <div class="clearfix">
        <div class="content-area">
            <div class="container">
                <div class="clearfixs">
                    <!-- blog grid -->
                    <div id="masonry" class="row dez-blog-grid-2 same_height_row">
                        @foreach($blogs as $blog)
                          <div class="col-lg-4 col-sm-12 m-b30 same_height">
                               <a href="{{route('single_blog',$blog->slug)}}">
                                      <div class="dez-media dez-img-effect h-100">
                                            <img width="855" height="897"
                                                src="{{$blog->slug_image}}"
                                                alt="" style="border-top-left-radius: 5% !important; border-top-right-radius: 5% !important;">
                                                <div class="h-100" style="padding:30px; background-color: #00783a !important; text-align: center; border-bottom-left-radius: 5% !important; border-bottom-right-radius: 5% !important;">
                                                    <h4 class="blog-title-cus text-center">{{$blog->title}}</h4>
                                                    <p class="blog-title-cus text-center">{{$blog->short_description}}</p>
                                                    <span class="read_more_btn text-center" >Read More</span>
                                                </div>
                                            </div>
                                             </a>
                                            </div>
                        @endforeach
                    </div>
                    
                    {{ $blogs->links() }}
                    <!-- blog grid END -->
                    <!-- Pagination start -->
                    <!--<div class="pagination-bx  clearfix ">-->
                    <!--    <ul class="pagination">-->
                    <!--        <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>-->
                    <!--        <li class="active"><a href="#">1</a></li>-->
                    <!--        <li><a href="#">2</a></li>-->
                    <!--        <li><a href="#">3</a></li>-->
                    <!--        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

       