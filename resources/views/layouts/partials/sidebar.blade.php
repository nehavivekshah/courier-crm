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
                        <li><a href="{{ route('bookings.history') }}">Past Bookings</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('clients.index') }}">
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
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('receivers.index') }}">
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
                        <li><a href="{{ route('logistics.barcodes') }}">Barcodes</a></li>
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
                        <li><a href="{{ route('financials.income') }}">Income</a></li>
                        <li><a href="{{ route('financials.expense') }}">Expense</a></li>
                        <li><a href="{{ route('financials.purchase-bills') }}">Purchase Bills</a></li>
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
                        <li><a href="{{ route('reports.booking') }}">Booking</a></li>
                        <li><a href="{{ route('reports.delivery') }}">Delivery</a></li>
                        <li><a href="{{ route('reports.bill-pending') }}">Bill Pending</a></li>
                        <li><a href="{{ route('reports.daily-collection') }}">Daily Collection</a></li>
                        <li><a href="{{ route('reports.gst') }}">GST Report</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('enquiries.index') }}">
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
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('profile.index') }}">
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
                        <li><a href="{{ route('config.carriers') }}">Carriers</a></li>
                        <li><a href="{{ route('config.centers') }}">Centers</a></li>
                        <li><a href="{{ route('config.zones') }}">Zones</a></li>
                        <li><a href="{{ route('config.charges') }}">Charges</a></li>
                        <li><a href="{{ route('config.rates') }}">Rates</a></li>
                        <li><a href="{{ route('config.gst') }}">GST</a></li>
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