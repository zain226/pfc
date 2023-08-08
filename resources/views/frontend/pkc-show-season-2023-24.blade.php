@extends('frontend.layouts.app')
@section('title','PKC Show Season 2023-24 ')
@section('content')
<div class="page-content">
    @include('frontend.components.inner-header',['bg_img'=>asset('frontend/images/background/header-bg.jpg'),'breedcrumb'=>'PKC
    Show Season 2023-24 ','page_title'=>'PKC Show Season 2023-24 '])
    <div class="clearfix">
        <div class="content-area">
            <<div class="container">
                <div class="section-head text-center mb-2">
                    <h2 class="h2 text-uppercase">PKC Show Season 2023-24</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                </div>
                <div>
                    <h4>PKC All Breed Shows</h4>
                    <ol style="margin-left:30px">
                        <li>PKC All Breed Championship Show<br>November 19, 2023 , Lahore</span></li>
                        <li>PKC All Breed Championship Show<br>December 17, 2023 , Faisalabad</span></li>
                    </ol>
                    <h4>PKC International CACIB Shows</h4>
                    <ol style="margin-left:30px">
                        <li>PKC International CACIB Show<br> January 14, 2024 , Rawalpindi</li>
                        <li>PKC International CACIB Show<br> January 21, 2024 , Karachi</li>
                        <li>PKC International CACIB Show<br> February 25, 2024 , Rawalpindi</li>
                    </ol>
                     <h4>PKC-PGSDC GSD Shows</h4>
                    <ol style="margin-left:30px">
                       <li>PKC-PGSDC LG Show<br> November 19, 2023 , Lahore</li>
                       <li>PKC-PGSDC LG Show<br> December 17, 2023 , Faisalabad</li>
                       <li>PKC-PGSDC LG Show<br> January 14, 2024 , Rawalpindi</li>
                       <li>PKC-PGSDC LG Show<br> January 21, 2024 , Karachi</li>
                       <li>PKC-PGSDC Sieger Show<br> February 10 & 11, 2024 , Lahore</li>
                    </ol>
                    <h4>PKC-PLRC Labrador Shows</h4>
                    <ol style="margin-left:30px">
                       <li>PKC-PLRC Labrador Championship Show<br> November 19, 2023 , Lahore</li>
                       <li>PKC-PLRC Labrador Speacialty Show<br> February 25, 2024 , Lahore</li>
                
                    </ol>
                    

                </div>
        </div>
    </div>
</div>
</div>
@endsection