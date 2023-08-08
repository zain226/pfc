
@extends('frontend.layouts.app')
@section('styles')
<style>
    #more1,
    #more2,
    #more3,
    #more4,
    #more5,
    #more6,
    #more7,
    #more8,
    #more9,
    #more10,
    #more11,
    #more12 {

        display: none;
    }
     @media (min-width: 992px) { /* Adjust the breakpoint as needed */
  .custom-row-width {
    max-width: 1000px; /* Set the desired maximum width */
    margin-left: auto;
    margin-right: auto;
  }
}

</style>
@endsection
@section('title','The PKC Team')
@section('content')
<div class="page-content">
   @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/THE-PKC-TEAM.png'),'breedcrumb'=>'PKC Team','page_title'=>'PKC Team' , 'overlay' => 'none'])
    <div class="clearfix">
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                </div>
                <div class="section-content ">
                    <div class="section-head text-center ">
                        <h3 class="h3">Patron in Chief</h3>
                        <div class="dez-separator bg-primary"></div>
                    </div>
                    <div class="row custom-row-width">
                        <div class="col-lg-4 col-sm-6 m-b30"></div>
                        <div class="col-lg-4 col-sm-6 m-b30">
                            <div class="mb-3"></div>
                            <div class="dez-box">
                                <div class="dez-media"> <a href="#"><img
                                            src="{{('frontend/images/about-pkc/general-r-zahid-mubashir-sheikh.jpg')}}" style="border: 2px solid black;"
                                            alt="Marina Pyskho"></a> </div>
                                <div class="dez-info p-a20 p-t40">
                                    <h4 class="dez-title m-tb0" style="text-align: center";><a href="#">General (R) Zahid Mubashir Sheikh</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook"
                                                    href="https://www.facebook.com/zahidmubashir.sheikh" target="_blank"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p style="text-align: center; margin-bottom:0px;";>Patron in Chief</p>
                                    <p style="text-align: center;"><a href="{{route('patron_in_chief_detail')}}" style="color: #00783a !important;">Read Bio</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 m-b30"></div>
                    </div>
                    <div class="section-head text-center ">
                        <h3 class="h3">The Managing Committee</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>The Pakistan Feline Club (PKC) members, all of whom hold positions on the esteemed management committee. This committee plays a pivotal role in shaping and executing crucial decisions pertaining to enhancing breeding standards and elevating the overall quality of cat breeds across the nation. Their collective expertise and dedication drive the pursuit of excellence within PKC, propelling advancements in the realm of canine breeding and fostering the welfare of cats nationwide.</p>
                    </div>
         <div class="row custom-row-width">
                       @foreach($pkcteam as $pkcteam)
                        <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="#"><img
                                            src="{{$pkcteam->slug_image}}" style="border: 2px solid black;"
                                            alt="Marina Pyskho"></a> </div>
                                <div class="dez-info p-a20 p-t40">
                                    <h4 class="dez-title m-tb0" style="text-align: center";><a href="#">{{$pkcteam->name}}</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook"
                                                    href="{{$pkcteam->facebook_url}}" target="_blank"></a>
                                            </li>
                                            <li><a class="fa fa-envelope"
                                                    href="mailto:{{$pkcteam->mail_url}}"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p style="text-align: center; margin-bottom:0px;";>{{$pkcteam->designation}}</p>
                                    <p style="text-align: center;"><a href="{{route('pkc.team.detail',$pkcteam->slug)}}" style="color: #00783a !important;">Read Bio</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
            
                    </div>

                
                </div>
            </div>
        </div>
        <!-- Team member -->

    </div>

</div>
@endsection
@section('scripts')
<script>
    function myFunction(dots, more, myBtn) {
        var dots = document.getElementById(dots);
        var moreText = document.getElementById(more);
        var btnText = document.getElementById(myBtn);

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read Less";
            moreText.style.display = "inline";
        }
    }

</script>
@endsection
