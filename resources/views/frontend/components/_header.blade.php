<!-- header -->
<header class="site-header header-style-6 dark mo-left ">
    <!-- main header -->
    <div class=" sticky-header main-bar-wraper navbar-expand-lg navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="top-bar">
                <div class="container top-bar-crve">
                    <div class="row justify-content-between">
                        <div class="dez-topbar-left">
                            <ul class="social-line text-center pull-right">
                                <li><a href="mailto:info@pakistankennelclub.com.pk"><i class="fa fa-envelope-o"></i>
                                        <span>info@pakistankennelclub.com.pk</span> </a></li>
                                <li><a href="tel:923200200200"><i class="fa fa-phone"></i> <span> (+92) 320 0200200
                                        </span> </a></li>
                            </ul>
                        </div>
                        <div class="dez-topbar-right ">
                            <ul class="social-line text-center pull-right">
                                <li><a target="_blank" href="https://www.facebook.com/PaKKennelClub" class="fa fa-facebook"></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/pakkennelclub/" class="fa fa-instagram"></a></li>
{{--                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>--}}
{{--                                <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bar">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="{{route('home')}}"><img
                                src="{{asset('frontend/images/logo.png')}}" width="193" height="89" alt="PKC logo"></a>
                    </div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell header-padding">
                            <button id="quik-search-btn" type="button" class="site-button radius-xl"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary-dark">
                        <form method="post" class="" action="{{route('cat.search')}}">
                            @csrf
                            <input name="search" type="text" class="form-control" placeholder="Search with : Cat Name, Microchip, Registration No #...">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
                        <ul class=" nav navbar-nav header-padding">
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
                                    <li><a href="javascript:void(0);">judges<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu radius-sm">
                                            <li><a href="{{route('judges')}}">Judges</a></li>
                                            <li><a href="{{route('visiting-judge')}}">Visiting Judge</a></li>
                                        </ul>
                                    </li>
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
                            <li> <a href="{{route('event.index')}}">EVENTS</a></li>
                            <li> <a href="{{route('gallery.index')}}">GALLERY</a></li>
                            <li class="has-mega-menu "> <a href="{{route('show-results')}}">SHOW RESULT</a></li>
                            <li> <a href="{{route('contact_us.index')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
