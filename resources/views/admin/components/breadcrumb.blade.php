  <!--start -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <!-- <div class="breadcrumb-title pe-3">Dashboard</div> -->
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">
                                <ion-icon name="home-outline"></ion-icon>
                            </a>
                        </li>
                        @foreach($breadcrumbs as $key => $value )
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{$value}}" class="breedcrumbs_link_custom_font_size">
                                    {{$key}}
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->