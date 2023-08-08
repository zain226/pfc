<!-- Search Bar -->
<div class="row">
    <div class="col-lg-12 col-md-12" style="padding-left: 0px!important;">
    <div class="p-a30 clearfix m-b30 radius-sm custom-shadow-light">
        <form method="post" class="" action="{{route('cat.search')}}">
            @csrf
            <div class="input-group">
                <input name="search" type="text" required class="form-control radius-xl"
                       placeholder="Search with : Kennel Name, Sire or Dam name">

                {{--                            <button type="submit" class="site-button radius-xl">--}}
                {{--                                <span>Search</span>--}}
                {{--                            </button>--}}
            </div>
        </form>
    </div>
    </div>
</div>
<!-- End Search Bar -->
