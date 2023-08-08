<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <a href="{{route('home')}}"><img src="{{asset('frontend/images/logo.png')}}" class="logo-icon" alt="logo icon"></a>
        </div>
        <div>
            <h4 class="logo-text">Pakistan Feline Club</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('user.dashboard')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-home"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('user.profile.index')}}" class="">
                <div class="parent-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            <a href="{{route('user.cat.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-cat"></i>
                </div>
                <div class="menu-title">Cats</div>
            </a>
        </li>
        @if($user->breeder->kennel != null)
        <li>
            <a target="_blank" href="{{route('kennel_directory.profile',Str::slug($user->breeder->kennel))}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-shield-cat"></i>
                </div>
                <div class="menu-title">Kennel</div>
            </a>
        </li>
        @endif
        <li>
            <a href="{{route('user.event.cat_entered')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-cat"></i>
                </div>
                <div class="menu-title">Cat Entered</div>
            </a>
        </li>
        <li>
            <a href="{{route('user.event.entry.index')}}" class="">
                <div class="parent-icon">
                    <i class="bi bi-calendar-event-fill"></i>
                </div>
                <div class="menu-title">Show Entries</div>
            </a>
        </li>
        <li>
            <a href="{{route('user.stud_certificate.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <div class="menu-title">Stud Certificate</div>
            </a>
        </li>
        @if($user->role == 'full member')
        <li>
            <a href="{{route('user.litter_registration.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="menu-title">Litter Registration</div>
            </a>
        </li>
        @endif
        <li>
            <a href="{{route('user.single_cat_reg.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="menu-title">Single Cat Registration</div>
            </a>
        </li>
        <li>
            <a href="{{route('user.transfer_lease.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>
                <div class="menu-title">Ownership Transfer</div>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-images"></i>
                </div>
                <div class="menu-title">Transcations</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('user.transaction_log.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-tent-arrow-left-right"></i>
                        </div>
                        <div class="menu-title">Transcation Log</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.transaction_log.funds_transfer')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                        </div>
                        <div class="menu-title">Transfer Funds</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('user.sell_cat.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="menu-title">My Adds</div>
            </a>
        </li>
        <hr>
        <li>
            <a href="javascript:void(0);" onclick="$('#logout_form').submit();" class="">
                <div class="parent-icon">
                    <i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
