 <!-- inner page banner -->
 @php($overlay = $overlay ?? null)
 @php($over = $overlay && $overlay == 'none' ? '' : 'overlay-black-middle' )
 <div class="dez-bnr-inr {{$over}}" style="padding-top:0px;height:auto">
        <div class="position-relative">
            <img src="{{$bg_img}}">
        </div>
        <div class="container position-absolute">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">{{ $page_title }}</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}" class="text-white">Home</a></li>
                <li>{{ $breedcrumb }}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->