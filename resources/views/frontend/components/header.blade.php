   <!-- header -->
   
   <style>
       .header-style-1 .top-bar .fa, .header-style-2 .social-line li a, .header-style-3 .social-line li a, .header-style-4 .social-line li a, .top-bar {
  color: white;
}
.top-bar.visibility {
  display: none;
}
  @media (max-width: 768px)
  {
/*      .top-bar.visibility {*/
/*  display: block !important;*/
/*}*/
.hide-on-small{
    display:none;
}
.logo-footer img, .logo-header img {

  padding: 0px 0px !important;
}
  }
   @media (min-width: 991px)
  {
      .dez-quik-search{
          top:117px;
      }
            .hide-on-l{
    display:none;
}
  }
  @media (max-width: 991px)
  {
      .hide-on-med {
    display:none;
}
      .dez-quik-search{
          top:70px;
      }
      
      .show .logo-header {
  width: 200px !important;
}
  }
  @media (min-width: 768px)
  {
      .mt-24-l{
          margin-top:24px;
      }

      .sticky-header.main-bar-wraper.navbar-expand-lg .container.clearfix.bg-primary {
  background-color: #131515 !important;
}
  }
  
    @media only screen and (max-width: 991px)
    {
        .sticky-header.main-bar-wraper.navbar-expand-lg .container.clearfix.bg-primary {
  background-color: #fff !important;
}

    }
      @media only screen and (max-width: 991px)
      {
          .header-style-4 .main-bar .navicon span {
  background-color: #171717 !important;
}
      }

button#quik-search-btn {
  background-color: #104431 !important;
  border-radius: 50px !important;
  border-color: #104431;
}
[class*="bg-"] .header-nav .nav > li.active > a, [class*="bg-"] .header-nav .nav > li.current-menu-item > a {
  color: #16db65 !important;
}
[class*="bg-"] .header-nav .nav > li:hover > a, [class*="bg-"] .header-nav .nav > li > a:hover {
  color: #16db65;
}
.contact-info li {

  padding: 23px 0px 0 0;
}
.header-style-4 .extra-nav {
  padding: 5px 0;
}
.logo-footer img, .logo-header img{
    width:100% !important;
}
.mt-30n-l{
    margin-top:-30px;
}
.logo-header{
    width:260px;
}
.header-nav .nav > li{
    padding:0 10px;
}
/*.is-fixed .logo-header, .is-fixed.header-curve .logo-header {*/
/*  height: 90px;*/
/*  width: 260px;*/
/*}*/

.is-fixed .hide-on-med{
    display:none;
}
.is-fixed .header-nav{
    margin-top:15px !important;
}
.is-fixed .m0-fixed{
    margin-top:0px !important;
}
.main_search{
    width: 100%;
border: 1px solid black;
padding: 0px !important;
border-radius: 50px;
display: flex;
justify-content: space-between;
cursor: text;
}
.search_text{
    margin-left:20px;
    font-size:17px;
    margin-top:7px;
}
.header-style-4 .header-nav .nav > li > a {
  padding: 40px 15px 10px 15px;
}
.header-style-4 .fa-chevron-down {
  display: initial !important;
}

.vir_btn{
    background: transparent;
border: navajowhite;
}
.d-grid{
    display: grid;
}
.d-ingrid{
    display:inline-grid;
}
.fs-12{
    font-size:12px;
}
.navbar-toggler{
    border:none;
}
@media only screen and (max-width: 767px ){
.header-style-4 .header-nav .nav > li > a {
    padding: 15px 15px 15px 15px;
}
}
   </style>
   <header class="site-header header-style-4 mo-left">
       <!-- top bar -->
       <div class="top-bar visibility" style="background-color: #131515;display:none">
           <div class="container">
               <div class="row justify-content-between">
                   <div class="dez-topbar-left">
                       <ul class="social-line text-center pull-right">
                                <li><a href="mailto:info@pakistankennelclub.com.pk"><i class="fa fa-envelope-o"></i>
                                        <span>info@pakistankennelclub.com.pk</span> </a></li>
                                <li><a href="tel:923200200200"><i class="fa fa-phone"></i> <span> (+92) 320 0200200
                                        </span> </a></li>
                            </ul>
                   </div>
                   <div class="dez-topbar-right">
                       <ul class="social-line text-center pull-right">
                           <li><a target="_blank" href="https://www.facebook.com/PaKKennelClub" class="fa fa-facebook"></a></li>
                           <li><a target="_blank" href="https://www.instagram.com/pakkennelclub/" class="fa fa-instagram"></a></li>
                           <li><span><a href="{{route('login')}}" class=""> <i class="fa fa-user" style="margin-right: 10px;"></i>Sign In</a></span></li>
{{--                           <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>--}}
{{--                           <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>--}}
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <!-- top bar END-->
<!--       <div class="bg-white">-->
<!--           <div class="container header-contant-block">-->
<!--               <div class="row">-->
<!--                   <div class="col-xl-4 col-lg-3">-->
<!--                       <div class="logo-header"><a href="{{route('home')}}"><img-->
<!--                                src="{{asset('frontend/images/logo.png')}}" width="193" height="89" alt="PKC logo"></a>-->
<!--                       </div>-->
<!--                   </div>-->
<!--                   <div class="col-xl-8 col-lg-9">-->
<!--                       <ul class="contact-info clearfix" style="padding: 37px 0 !important;">-->
<!--                           <li></li>-->
<!--                           <li>-->
<!--                               <h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>-->
<!--                               <span><a href="tel:+923200200200">(+92) 320 0200200</a></span>-->
<!--                           </li>-->
<!--                           <li style="padding: 11px 0;">-->
<!--                               <h6 class="text-primary"><i class="fa fa-envelope-o"></i> Send us an Email</h6>-->
<!--                               <span><a href="mailto:info@pgsdc.com.pk">info@pakistankennelclub.com.pk</a></span>-->
<!--                           </li>-->
                          
<!--{{--                           <li > <a class="site-button btn-block radius-sm text-center rounded">--}}-->
<!--{{--                                   <strong class="m-a0 dis-block font-poppins font-16 text-white font-weight-500">Call--}}-->
<!--{{--                                       Toll Free</strong>--}}-->
<!--{{--                                   <p class="m-a0 text-white dis-block">+91 895 205 7229</p>--}}-->
<!--{{--                               </a>--}}-->
<!--{{--                           </li>--}}-->
<!--                       </ul>-->
<!--                   </div>-->
<!--               </div>-->
<!--           </div>-->
<!--       </div>-->
       <!-- main header -->
       <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header "><a href="{{route('home')}}"><img
                                src="{{asset('frontend/images/logo.png')}}" style="" class="" alt="PKC logo"></a>
                    </div>
                    <div>
                        
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<!--<p class="fs-12">Menu</p>-->
						<span></span>
						<span></span>
						<span></span>
					</button>
					</div>
					<div class="row hide-on-med">
                   <div class="col-xl-1 col-lg-1">
                      
                   </div>
                   <div class="col-xl-11 col-lg-11">
                       <ul class="contact-info clearfix" style="padding: 5px 0 0 0;">
                           <!--<li></li>-->
                           <li style="width: 20%" >
                               <span><a href="tel:+923200200200"><i class="fa fa-phone"></i>  +92 320 0200200</a></span>
                           </li>
                          
                           <li style="width: 32%;">
                               <span><a href="mailto:info@pakistankennelclub.com.pk"><i class="fa fa-envelope-o"></i>info@pakistankennelclub.com.pk</a></span>
                           </li>
                            <li style="width: 10%">
                               <span><a href="{{route('login')}}" class=""> <i class="fa fa-user" style="margin-right: 10px;"></i>Sign In</a></span>
                           </li>
                            <li style="padding: 11px 0; width: 35%;">
                                
                              <div class="extra-nav main_search">
                                  <div class="search_text">Search.....</div>
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                           </li>

                       </ul>
                   </div>
               </div>
                    <!-- extra nav -->
                      <div class="extra-nav hide-on-l m0-fixed" style="margin-top: 10px;">
                        <div class="extra-cell">
                            <span class="d-grid" style="padding:0 10px;border-right:1px solid">
                            <span class="fs-12">Search</span>
                            <button id="" type="button" class="vir_btn search_btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <a href="{{route('login')}}" class="d-ingrid text-black" style="padding: 0 10px 0 5px;border-right:1px solid"><span class="fs-12">Sign In</span> <i class="fa fa-user" style="margin-right: 10px;margin-top:8px"></i></a>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary ">
                          <form method="post" class="" action="{{route('cat.search')}}">
                            @csrf
                            <input name="search" type="text" class="form-control" placeholder="Search with : Cat Name, Microchip, Registration No #...">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                  
                    <div class=" header-nav navbar-collapse collapse justify-content-end mt-30n-l" id="navbarNavDropdown" style="">
                        
                        <ul class=" nav navbar-nav ">
                            <li class="active"> <a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu radius-sm">
                                    <li><a href="javascript:void(0);">About PKC<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu radius-sm">
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li><a href="{{route('team')}}">PKC Team</a></li>
                                            <li><a href="{{route('rules_regulations')}}">PKC Rules & Regulations</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('registration')}}">Registration</a></li>
                                    <li><a href="javascript:void(0);">Judges<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu radius-sm">
                                            <li><a href="{{route('judges')}}"> PKC Judges</a></li>
                                            <li><a href="{{route('visiting-judge')}}">Visiting Judges</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('testimonials')}}">Testimonials</a>
                                     <li> <a href="{{route('blogs')}}">Blogs</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);">Databases<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu radius-sm">
                                    <li> <a href="{{route('database.index')}}">PKC Database</a></li>
                                    <li> <a href="{{route('kennel_directory.index')}}">Kennels Directory</a></li>
                                    <li> <a href="{{route('recent_matings')}}">Recent Matings</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">MEMBER LOGIN<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu radius-sm">
                                    <li>
                                        <a href="{{route('member_directory.index')}}">MEMBERS DIRECTORY</a>
                                    </li>
                                    <li> <a href="{{route('membership')}}">BECOME A MEMBER</a></li>
                                    <li> <a href="{{route('login')}}">MEMBER LOGIN<i class="fa fa-chevron-down"></i></a></li>
                                </ul>
                            </li>
                            <li>
                                 <a href="javascript:void(0);">EVENTS <i class="fa fa-chevron-down"></i></a>
                                 <ul class="sub-menu radius-sm">
                                      <li><a href="{{route('event.index')}}">EVENTS</a></li>
                                    <li > <a href="{{route('show-results')}}">SHOW RESULT</a></li>
                                </ul>
                            </li>
                                <li> <a href="https://pakistankennelclub.com.pk/market-place"> PKC Marketplace</a></li>
                            <li> <a href="{{route('gallery.index')}}">GALLERY</a></li>
                             <li> <a href="{{route('contact_us.index')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       <!-- main header END -->
   </header>
   
   
   <!-- header END -->
