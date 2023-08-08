@extends('frontend.layouts.app')
@section('title','Pkc Database')
@section('content')
<div class="page-content">
    @include('frontend.components.inner-header',['bg_img'=>asset('frontend/images/background/header-bg.jpg'),'breedcrumb'=>'PKC
    Database','page_title'=>'PKC Database'])
    <div class="section-full content-inner">
        <div class="container">
            <!-- Search Bar -->
            <div class="col-lg-12">
                <div class="p-a30 bg-gray clearfix m-b30 ">
                    <form method="post" class="dzForm" action="">
                        <input type="hidden" value="Contact" name="dzToDo">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="input-group">
                                        <input name="dzName" type="search" required class="form-control"
                                            placeholder="Search The Kennel Directory: Name, Prefix, Suffix.... ">
                                        <button name="search" type="submit" value="search" class="site-button">
                                            <span>Search</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Search Bar -->
            <!--heading -->
            <div class="m-b20">
                <div class="section-head inner-haed">
                    <h2 class="text-uppercase">Pakistan Feline Club Database</h2>
                </div>
                <!-- End heading -->
                <!-- Main Section-->
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20"> <img
                                        src="{{('frontend/images/pkc-database/big_boss.jpg')}}"></div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Big Boss of Supreme Labradors</h5>
                                    <p><b>Microchip # : </b> 934000080013399<br><b>Registration No # :</b> Pk 00001
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20"> <img
                                        src="{{('frontend/images/pkc-database/big_boss.jpg')}}"></div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Big Boss of Supreme Labradors</h5>
                                    <p><b>Microchip # : </b> 934000080013399<br><b>Registration No # :</b> Pk 00001
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                <div class="icon-bx-lg icon-bx-lg-cus bg-primary m-b20"> <img
                                        src="{{('frontend/images/pkc-database/big_boss.jpg')}}"></div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Big Boss of Supreme Labradors</h5>
                                    <p><b>Microchip # : </b> 934000080013399<br><b>Registration No # :</b> Pk 00001
                                    </p>
                                </div>
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
