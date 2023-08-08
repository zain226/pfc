<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <a href="{{route('home')}}">
                <img src="{{asset('frontend/images/logo.png')}}" class="logo-icon" alt="logo icon">
            </a>
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
            <a href="{{route('admin.dashboard')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-home"></i>

                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:void (0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-cat"></i>

                </div>
                <div class="menu-title">Cat Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.cat.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-cat"></i>
                        </div>
                        <div class="menu-title">Cats</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.gender-management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-mars-and-venus"></i>
                        </div>
                        <div class="menu-title">Gender Management</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.color-management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="bi bi-palette-fill"></i>
                        </div>
                        <div class="menu-title">Color Management</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.breed-management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-shield-cat"></i>
                        </div>
                        <div class="menu-title">Breed Management</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.group.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-venus-double"></i>
                        </div>
                        <div class="menu-title">Group Management</div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void (0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <div class="menu-title">Breeder Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.breeder-management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <div class="menu-title">Breeders</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.owner_management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <div class="menu-title">Owner Management</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.stud_certificate.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <div class="menu-title">Stud Certificate</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.litter_registration.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-clipboard"></i>
                        </div>
                        <div class="menu-title">Litter Registration</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.single_cat_reg.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-clipboard"></i>
                        </div>
                        <div class="menu-title">Single Cat Registration</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.transfer_lease.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <div class="menu-title">Ownership Transfer</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.membership_application.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-regular fa-address-book"></i>
                        </div>
                        <div class="menu-title">Membership Application</div>
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="{{route('admin.service.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-money-bill"></i>
                </div>
                <div class="menu-title">Services & Charges</div>
            </a>
        </li>
        <li>
            <a href="javascript:void (0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div class="menu-title">Revenue</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.transaction_log.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-tent-arrow-left-right"></i>
                        </div>
                        <div class="menu-title">Transaction Log</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.transaction_log.credit.sheet')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-tent-arrow-left-right"></i>
                        </div>
                        <div class="menu-title">Credit Sheet</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.expense.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-money-bill"></i>
                        </div>
                        <div class="menu-title">Expenses</div>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void (0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div class="menu-title">Event Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.event_management.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <div class="menu-title">Events</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.title.index')}}" class="">
                        <div class="parent-icon">
                            <i class="fa-solid fa-text-height"></i>
                        </div>
                        <div class="menu-title">Titles</div>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="javascript:;" class="">--}}
{{--                        <div class="parent-icon">--}}
{{--                            <i class="fa-solid fa-2"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Event Management 2nd Grading</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="">--}}
{{--                        <div class="parent-icon">--}}
{{--                            <i class="fa-solid fa-3"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Event Management 3rd Grading</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="">--}}
{{--                        <div class="parent-icon">--}}
{{--                            <i class="fa-solid fa-4"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Event Management 4th Grading</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="">--}}
{{--                        <div class="    parent-icon">--}}
{{--                            <i class="fa-solid fa-5"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Event Management 5th Grading</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </li>
        <li>
            <a href="{{route('admin.sell_cat.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="menu-title">Selling Adds</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.subscriber.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="menu-title">Subscribers</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.cms')}}" class="">
                <div class="parent-icon">
                    <i class="fa-sharp fa-solid fa-arrows-rotate"></i>
                </div>
                <div class="menu-title">Latest Updates</div>
            </a>
        </li>
        <li>
            <a href="javascript:void (0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-gavel"></i>
                </div>
                <div class="menu-title">Judges</div>
            </a>
            <ul>
                <li>
                   <a href="{{route('admin.visting_judges.index')}}" class="">
                      <div class="parent-icon">
                        <i class="fa-solid fa-gavel"></i>
                      </div>
                      <div class="menu-title">Visiting Judges</div>
                   </a>
                </li>
                <li>
                   <a href="{{route('admin.judges.index')}}" class="">
                      <div class="parent-icon">
                        <i class="fa-solid fa-gavel"></i>
                      </div>
                      <div class="menu-title">PFC Judges</div>
                   </a>
                </li>

            </ul>
        </li>
       
        <li>
            <a href="{{route('admin.blogs.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-blog"></i>
                </div>
                <div class="menu-title">Blogss</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.pfc-team.index')}}" class="">
                <div class="parent-icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="menu-title">PFC Team</div>
            </a>
        </li>
        @if(Auth::user()->role == 'super admin')
        <li class="menu-label">Web CMS</li>
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="fa-solid fa-images"></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.gallery_grid.index')}}">
                        <i class="bi bi-circle"></i>Gallery Grids
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.gallery_grid.create')}}">
                        <i class="bi bi-circle"></i>Add New Gallery Grid
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.gallery.index')}}">
                        <i class="bi bi-circle"></i>Gallery
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.gallery.create')}}">
                        <i class="bi bi-circle"></i>Add New Media Gallery Grid
                    </a>
                </li>
            </ul>
        </li>
            <li>
                <a href="{{route('admin.live_stream.edit')}}" class="">
                    <div class="parent-icon">
                        <i class="fa-solid fa-video-camera"></i>
                    </div>
                    <div class="menu-title">Facebook Live Stream</div>
                </a>
            </li>
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="bi bi-pin-angle-fill"></i>
                </div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li> <a href="widgets-static-widgets.html">
                        <i class="bi bi-circle"></i>All Posts
                    </a>
                </li>
                <li> <a href="widgets-data-widgets.html">
                        <i class="bi bi-circle"></i>Add New
                    </a>
                </li>
                <li> <a href="widgets-data-widgets.html">
                        <i class="bi bi-circle"></i>Categories
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="menu-title">Teams</div>
            </a>
            <ul>
                <li> <a href="javascript:void(0);">
                        <i class="bi bi-circle"></i>All Teams
                    </a>
                </li>
                <li> <a href="widgets-data-widgets.html">
                        <i class="bi bi-circle"></i>Add New Team
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon">
                    <i class="bi bi-chat-left-quote-fill"></i>
                </div>
                <div class="menu-title">Testimonials</div>
            </a>
            <ul>
                <li> <a href="widgets-static-widgets.html">
                        <i class="bi bi-circle"></i>All Testimonials
                    </a>
                </li>
                <li> <a href="widgets-data-widgets.html">
                        <i class=""></i>Add New Testimonials
                    </a>
                </li>
            </ul>
        </li>
        @endif

    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
