<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
    <!--begin::Menu-->
    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
        <!--begin:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Admin
                        Dashboard</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-purchase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Order Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.placeOrder')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Place New
                    Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="new-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">New
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="in-progress-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">In-Progress
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->

                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="revisions.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Revisions</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="completed-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Completed</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="delivered.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Delivered</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="other.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Others</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">
            <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/folders/show')) ? 'active' : '' }}" href="{{ route('admin.folder.show') }}">File
                        Management</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu " href="message-management.php">Message
                        Management</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-security-user fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu " href="email-event.php">Email
                        Automation</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-purchase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Product Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.subscription')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Subscription</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="custom-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Custom
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-user fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title custom-menu">Customers Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="customer-management.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Contact
                            Customer</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="customer-listing.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Customer Data
                            Table</span></a><!--end:Menu link--></div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu " href="invoice-manager.php">Invoice
                        Management</a></span></span><!--end:Menu link--></div>
        <!--end:Menu item--><!--begin:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link "><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Users Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/user/activity/log')) ? 'active' : '' }}" href="{{ route('admin.user.activity.log') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">User Activity</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/show/all/users')) ? 'active' : '' }}" href="{{ route('admin.show.all.users') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Users</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/show/all/roles')) ? 'active' : '' }}" href="{{ route('admin.show.all.roles') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Roles</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/permissions')) ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Permission</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->

            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->

        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu " href="library-access.php">Library
                        Management</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item--><!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-circle fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">
            <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/show/profile')) ? 'active' : '' }}" href="{{ route('admin.show.profile') }}">Your
                        Profile</a></span></span><!--end:Menu link--></div>
        <!--end:Menu item-->

          <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link "><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Services</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.paper_formats.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Paper Format</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.languages.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Language & Spelling</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.services.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Service Type</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.restrictions.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Restriction</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.subtime_limits.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Sub-Time-Limit</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.academics.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Academic Level</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.paper_terms.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Terms of Paper</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.subjects.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Subjects</span></a><!--end:Menu link--></div><!--end:Menu item-->

            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->

        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-circle fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">
            <form action="{{ route('admin.logout') }}" method="post">
                @csrf
                <button type="submit" style="display: none;"></button>
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="menu-link ps-0 custom-menu">
                    Log out
                </a>
            </form>

                    </span></span><!--end:Menu link--></div><!--end:Menu item-->
    </div>
    <!--end::Menu-->
</div>