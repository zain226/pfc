     <!-- ========== Breadcumb Start============= -->
     <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/inner-banner-btm-vec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>{{ $page_title }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $breedcrumb  }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/bg/inner-banner-vec.png')}}" alt="">
                        </div>
                        <img class="img-fluid" src="{{asset('frontend/assets/images/bg/inner-banner-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Breadcumb end============= -->