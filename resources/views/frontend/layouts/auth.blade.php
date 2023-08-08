<!DOCTYPE html>
<!--
	Template Name: SportsZone: Sports Club, New & Game Magazine Mobile Responsive Bootstrap Html Template
	Version: 1.0
	Author: DexignZone
	Website: http://www.dexignzone.com/
	Contact: dexignexpert@gmail.com
	Follow: www.twitter.com/dexignzones
	Like: www.facebook.com/dexignzone

-->
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="SportsZone is an HTML5/CSS3 eCommerce template that is best for Sports Items/Tools, any kind of stores Like Sports Store, Bike and Cycle Parts, Hardware, Toos, Construction Item."/>
    <meta property="og:title" content="SportsZone - Sports Template"/>
    <meta property="og:description" content="SportsZone is an HTML5/CSS3 eCommerce template that is best for Sports Items/Tools, any kind of stores Like Sports Store, Bike and Cycle Parts, Hardware, Toos, Construction Item." />
    <meta property="og:image" content="http://sportszone.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}" />

    <!-- Page Title Here -->
    <title>@yield('title') - Pakistan Feline Club</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" class="skin" href="{{asset('frontend/css/skin/skin-9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/templete.min.css')}}">
    @yield('styles')

</head>
<body id="bg" >
<div class="page-wrapers">
    @yield('content')
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('frontend/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('frontend/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('frontend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('frontend/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('frontend/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('frontend/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('frontend/plugins/countdown/jquery.countdown.js')}}"></script><!-- COUNTDOWN JS -->
<script src="{{asset('frontend/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('frontend/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('frontend/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('frontend/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('frontend/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
<script src="{{asset('frontend/js/custom.min.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('frontend/js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
@yield('scripts')
</body>
</html>
