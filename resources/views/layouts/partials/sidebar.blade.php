<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="{{ route('dashboard') }}">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
        </a>
        <div class="back-btn">
            <i class="fa fa-angle-left"> </i>
        </div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="{{ route('dashboard') }}">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="{{ route('dashboard') }}">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="">
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back </span>
                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                    </div>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                        </svg>
                        <span>Bookings </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('bookings.create') }}">Add New</a></li>
                        <li><a href="#">Past Bookings</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                        </svg>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                        </svg>
                        <span>Receivers</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <span>Logistics </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('logistics.inwards') }}">Inwards</a></li>
                        <li><a href="{{ route('logistics.drs') }}">DRS Upload</a></li>
                        <li><a href="#">Barcodes</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <span>Financials </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Income</a></li>
                        <li><a href="#">Expense</a></li>
                        <li><a href="#">Purchase Bills</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <span>Reports </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Booking</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Bill Pending</a></li>
                        <li><a href="#">Daily Collection</a></li>
                        <li><a href="#">GST Report</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-chat') }}"></use>
                        </svg>
                        <span>Enquiries</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('complaints.index') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-chat') }}"></use>
                        </svg>
                        <span>Complaints</span>
                    </a>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Settings</h6>
                    </div>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                        </svg>
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <span>System Config </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Carriers</a></li>
                        <li><a href="#">Centers</a></li>
                        <li><a href="#">Zones</a></li>
                        <li><a href="#">Charges</a></li>
                        <li><a href="#">Rates</a></li>
                        <li><a href="#">GST</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>