<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.include.head')
<body>
    @include('frontend.layouts.include.top_bar')
    @include('frontend.layouts.include.header')
    @yield('content')
    @include('frontend.layouts.include.footer')
    @include('frontend.layouts.include.script')

</body>
</html>