@extends('frontend.layouts.app')
@section('title','Breed Groups Standards')
@section('content')
<div class="page-content">
    @include('frontend.components.inner-header',['bg_img'=>asset('frontend/images/background/header-bg.jpg'),'breedcrumb'=>'Breed
    Groups Standards','page_title'=>'Breed Groups Standards'])
</div>
<div class="content-area">
    <div class="container">
        <div class="row">
            <!-- Accordion Section -->
            <div class="col-lg-12 p-b30">
                <h4 class="text-uppercase m-b15">Breeds Groups &amp; Standards</h4>
                <div class="dez-accordion space bg-title" id="accordion9">
                    <div class="panel">
                        <div class="acod-head">
                            <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne9"
                                    data-parent="#accordion9">Sheepcats and Cattlecats</a></h5>
                        </div>
                        <div id="collapseOne9" class="acod-body collapse show" data-parent="#accordion9">
                            <div class="acod-content">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam
                                nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas
                                est etiam processus.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="acod-head">
                            <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo9" class="collapsed"
                                    data-parent="#accordion9">Pinscher and Schnauzer</a></h5>
                        </div>
                        <div id="collapseTwo9" class="acod-body collapse" data-parent="#accordion9">
                            <div class="acod-content">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed
                                diam nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas
                                est etiam processus.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- End Accordion Section-->

        </div>
    </div>
</div>

@endsection
