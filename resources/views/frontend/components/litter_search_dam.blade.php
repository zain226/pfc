<!-- Search Bar -->
<div class="row">
    <div class="col-lg-10 col-md-10" style="padding-left: 0px!important; margin-bottom: 10px">
        <form method="post" class="" action="{{route('recent_mating.search.dam')}}">
            @csrf
            <div class="input-group">
                <input name="search" type="text" required class="form-control radius-xl custom-shadow-light"
                       placeholder="Search with : Dam Name" value="{{$search ?? ''}}">

                {{--                            <button type="submit" class="site-button radius-xl">--}}
                {{--                                <span>Search</span>--}}
                {{--                            </button>--}}
            </div>
        </form>
    </div>
    <div class="col-lg-2">
        <a href="{{route('recent_matings')}}" class="btn btn-success radius-xl custom-shadow-light">Reset</a>
    </div>
</div>
<!-- End Search Bar -->
