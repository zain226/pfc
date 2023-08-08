<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
            <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
{{--            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">--}}
{{--                <i class="bi bi-search"></i>--}}
{{--            </div>--}}
{{--            <input class="form-control" type="text" placeholder="Search for anything">--}}
            <div class="position-absolute top-50 translate-middle-y search-close-icon">
                <i class="bi bi-x-lg"></i>
            </div>
        </form>
        <div class="top-navbar-right ms-auto">

            <ul class="navbar-nav align-items-center">
                {{--<li class="nav-item mobile-search-button">
                    <a class="nav-link" href="javascript:;">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="javascript:;" data-bs-toggle="offcanvas"--}}
{{--                       data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">--}}
{{--                        <div class="">--}}
{{--                            <i class="bi bi-gear"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown dropdown-large dropdown-apps">--}}
{{--                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">--}}
{{--                        <div class="">--}}
{{--                            <i class="bi bi-grid"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-end">--}}
{{--                        <div class="row row-cols-3 g-3 p-3">--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-basket3"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Orders</div>--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-people"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Teams</div>--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-check2-circle"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Tasks</div>--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-cast"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Media</div>--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-folder2-open"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Files</div>--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="app-box mx-auto bg-dark text-white">--}}
{{--                                    <i class="bi bi-exclamation-triangle"></i>--}}
{{--                                </div>--}}
{{--                                <div class="app-title">Alerts</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown dropdown-large">--}}
{{--                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">--}}
{{--                        <div class="position-relative">--}}
{{--                            <span class="notify-badge">8</span>--}}
{{--                            <i class="bi bi-bell"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-end">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <div class="msg-header">--}}
{{--                                <p class="msg-header-title">Notifications</p>--}}
{{--                                <p class="msg-header-clear ms-auto">Marks all as read</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="header-notifications-list">--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-basket2"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">You have recived new orders</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-person"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">5 new user registered</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-file-earmark"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">The pdf files generated</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-check2-all"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>--}}
{{--                                        <p class="msg-info">Your new product has approved</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-send"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">5.1 min avarage time response</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-chat-dots"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">New customer comments recived</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-archive"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">24 new authors joined last week</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-camera-video"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">Successfully shipped your item</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="javascript:;">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="notify">--}}
{{--                                        <i class="bi bi-bucket"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks--}}
{{--                            ago</span></h6>--}}
{{--                                        <p class="msg-info">45% less alerts last 4 weeks</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <a href="javascript:;">--}}
{{--                            <div class="text-center msg-footer">View All Notifications</div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                        <div class="user-setting">
                            @if($user->breeder->pic != null)
                                <img src="{{asset('storage/breeders/'.$user->breeder->pic)}}" class="user-img" alt="{{$user->breeder->name ?? ''}}">
                            @else
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="user-img" alt="">
                            @endif
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex flex-row align-items-center gap-2">
                                    @if($user->breeder->pic != null)
                                        <img src="{{asset('storage/breeders/'.$user->breeder->pic)}}" alt="{{$user->breeder->name ?? ''}}" class="rounded-circle" width="54" height="54">
                                    @else
                                        <img src="https://via.placeholder.com/110X110/212529/fff" alt="" class="rounded-circle" width="54" height="54">
                                    @endif
                                    <div class="">
                                        <h6 class="mb-0 dropdown-user-name">{{Auth::user()->name ?? ''}}</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">{{ucfirst(Auth::user()->role) ?? ''}}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('user.profile.index')}}">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="person-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="settings-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="speedometer-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Dashboard</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="wallet-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Earnings</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="cloud-download-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Downloads</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="logout_form" action="{{route('logout')}}" method="post">
                                @csrf
                            </form>
                            <button class="dropdown-item" form="logout_form">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="log-out-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>
</header>
<!--end top header-->
