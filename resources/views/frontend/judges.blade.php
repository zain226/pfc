@extends('frontend.layouts.app')
@section('title','PKC Judges')
@section('content')
<style>
    @media (min-width: 992px) { /* Adjust the breakpoint as needed */
  .custom-row-width {
    max-width: 1000px; /* Set the desired maximum width */
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/pkc-judges.png'),'breedcrumb'=>'PKC Judges','page_title'=>'PKC Judges' , 'overlay' => 'none'])
    <div class="clearfix">
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3">Meet Our Honorable Judges</h3>
                    <div class="dez-separator bg-primary"></div>
                </div>
                <div class="section-content ">
                    <div class="container">
                    <div class="row custom-row-width">
                       @foreach($judges as $judge)
                        <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="#"><img
                                            src="{{$judge->slug_image}}" style="border: 2px solid black;"
                                            alt="Marina Pyskho"></a> </div>
                                <div class="dez-info p-a20 p-t40">
                                    <h4 class="dez-title m-tb0" style="text-align: center";><a href="#">{{$judge->name}}</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook"
                                                    href="{{$judge->facebook_url}}" target="_blank"></a>
                                            </li>
                                            <li><a class="fa fa-envelope"
                                                    href="mailto:{{$judge->mail_url}}"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p style="text-align: center; margin-bottom:0px;";>{{$judge->designation}}</p>
                                    <p style="text-align: center;"><a href="{{route('judge.detail',$judge->slug)}}" style="color: #00783a !important;">Read Bio</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
            
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Team member -->

    </div>
</div>
@endsection
