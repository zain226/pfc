<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description"
        content="Pakistan Feline Club is devoted to Promote the passion of keeping, breeding and Showcasing of Purebred Cats." />
    <meta property="og:title" content="PKC - Pakistan Feline Club" />
    <meta property="og:description" content="Pakistan Feline Club is devoted to Promote the passion of keeping, breeding and Showcasing of Purebred Cats." />
    <meta property="og:image" content="{{asset('images/logo.png')}}" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon" />
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
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/hover.css')}}">
    <link rel="stylesheet" type="text/css" class="skin" href="{{asset('frontend/css/skin/skin-9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/templete.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- Revolution Navigation Style -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('frontend/plugins/revolution/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/toastr/toastr.min.css')}}">
    @yield('styles')
    <style>
        .table p{
            margin-bottom:0px !important;
        }
        .revert{
            margin: revert;
        }
        .footer-overlay .footer-top {
    background-color: #ffffff;
    background-image: url(../images/overlay/rrdiagonal-line.png);
    background-size: auto auto;
            
        }
    footer h2{
           color: #000000;
        }
        footer h4{
           color: #000000;
        }
        footer strong{
           color: #000000;
        }
        footer{
             color: #000000;
        }
         footer a{
             color: #000000;
        }
         footer{
             color: #000000;
        }
        .site-footer .widget_services ul li a {
    color: #000000;
}
@media only screen and (max-width: 767px){
.title-head {
    display: block !important;
}
}

.hide{
    display:none;
}
         .dez-bnr-inr{
             background-repeat: no-repeat;
background-size: contain;
         }
           @media screen and (max-width: 360px)
           {
.dez-bnr-inr {
  height: 270px;
}
}
.image_area{
    height:250px;
}
.image_area img{
    height:100%;
}
@media only screen and (max-width: 600px){
.breadcrumb-row {
    padding: 0px !important;
}
}
@media only screen and (max-width: 600px){
a.text-white {
font-size:12px;
}
}

@media only screen and (max-width: 600px){
.breadcrumb-row ul {
font-size:12px;
}
}
.breadcrumb-row{
    padding:0px ;
}
.footer-bottom{
    padding: 10px 0;
}
    </style>

</head>

<body id="bg">
    <div class="page-wraper">
        @include('frontend.components.header')
        <!-- Page Wrapper -->
        @yield('content')
        @include('frontend.components.footer')
        @include('frontend.components.scroll_top')
    </div>
    <div id="loading-area"></div>
    <!-- JavaScript  files ========================================= -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('frontend/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('frontend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('frontend/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/form-select2.js')}}"></script>
    <!-- FORM JS -->
    <script src="{{asset('frontend/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{asset('frontend/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('frontend/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('frontend/plugins/countdown/jquery.countdown.js')}}"></script><!-- COUNTDOWN JS -->
    <script src="{{asset('frontend/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
    <script src="{{asset('frontend/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('frontend/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('frontend/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
    <script src="{{asset('frontend/plugins/lightgallery/js/lightgallery-all.js')}}"></script><!-- LIGHT GALLERY -->
    <script src="{{asset('frontend/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->

    <script src="{{asset('frontend/js/custom.min.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('frontend/js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
    <!-- revolution JS FILES -->
    <script src="{{asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js')}}">
    </script>
    <script src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}">
    </script>
    <script
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js')}}">
    </script>
    <script src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js')}}">
    </script>
    <script src="{{asset('frontend/js/rev.slider.js')}}"></script>
    <script src="{{asset('frontend/plugins/toastr/toastr.min.js')}}"></script>
    @if(Session::has('message'))
        <script>
            toastr.success('Success','{{Session::get('message')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            toastr.error('Error','{{Session::get('error')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if(Session::has('status'))
        <script>
            toastr.success('Success','{{Session::get('status')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('Error','{{$error}}', {
                    tapToDismiss: true,
                    hideMethod: 'fadeOut',
                    progressBar: true
                })
            </script>
        @endforeach
    @endif

    <script>
        jQuery(document).ready(function () {
            'use strict';
            dz_rev_slider_1();
        }); /*ready*/

    </script>
    <script>
        $(document).on('click','.search_btn',function(){
            
  jQuery(".dez-quik-search").animate({
    width: "100%"
  }), jQuery(".dez-quik-search").delay(500).css({
    left: "0"
  })
        })
        $(document).on('click','.main_search',function(){
            
  jQuery(".dez-quik-search").animate({
    width: "100%"
  }), jQuery(".dez-quik-search").delay(500).css({
    left: "0"
  })
        })

    </script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script>
    $('#contact').mask("000000000000", {placeholder: "923xxxxxxxxx"});
</script>

    @yield('scripts')
    
    <script>
        $(document).on('click','.show_more_btn',function(){
            $(this).closest('.table_box').find('.extra_list').toggleClass('hide');
            
            let tex = $(this).text();
            if(tex == 'Show More')
            {
                $(this).text('Show Less');
            }
            else{
               $(this).text('Show More'); 
            }
        })
    </script>
</body>


</html>
