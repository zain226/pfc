<!-- Search Bar -->
<div class="">
    <div class="p-a30 clearfix m-b30 radius-sm custom-shadow-light">
        <form method="post" class="" action="{{route('kennel_directory.search')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="input-group">
                            <input name="search" type="text" required class="form-control radius-xl"
                                   placeholder="Search with Kennel : Name or City">

                            {{--                            <button type="submit" class="site-button radius-xl">--}}
                            {{--                                <span>Search</span>--}}
                            {{--                            </button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Search Bar -->
