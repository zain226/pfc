<!-- Search Bar -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px!important;">
        <form method="post" class="" action="{{route('recent_mating.search.sire')}}">
            @csrf
            <div class="input-group">
                <input name="search" type="text" required class="form-control radius-xl custom-shadow-light"
                       placeholder="Search with : Sire Name" value="{{$search ?? ''}}">

                {{--                            <button type="submit" class="site-button radius-xl">--}}
                {{--                                <span>Search</span>--}}
                {{--                            </button>--}}
            </div>
        </form>
    </div>
</div>
<!-- End Search Bar -->
