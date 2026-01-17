<?php require 'includes/main-header.php' ?>
<style>
    .total-revenue span{
        color:#000;
    }
    .client-list-table{
        max-height:370px;
    }
    </style>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php require 'includes/page-header.php' ?>
    <div class="page-body-wrapper">
        <?php require 'includes/sidebar.php' ?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row g-0">
                        <div class="col-4">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="col-8">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <svg class="stroke-icon">
                                            <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-2 g-md-4 mb-2 mb-md-0">
                    <div class="col-xl-3 col-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-project border-b-primary border-2">
                                <span class="f-light f-w-500 f-14 d-none d-md-flex">Total Bookings</span>
                                <div class="d-flex d-md-none align-items-center gap-2">
                                    <span class="product-sub bg-primary-light d-flex d-md-none"><i data-feather="shopping-bag"></i></span>
                                    <div>
                                        <span class="f-light f-w-500 f-12">Total Bookings</span>
                                        <h5 class="text-dark f-w-600">₹5,26,000</h5>
                                    </div>
                                </div>
                                <div class="project-details d-none d-md-flex">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">₹5,26,000</h2>
                                    </div>
                                    <div class="product-sub bg-primary-light"><i data-feather="shopping-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Progress border-b-warning border-2">
                                <span class="f-light f-w-500 f-14 d-none d-md-flex">Bills Pending</span>
                                <div class="d-flex d-md-none align-items-center gap-2">
                                    <span class="product-sub bg-warning-light d-flex d-md-none"><i data-feather="clock"></i></span>
                                    <div>
                                        <span class="f-light f-w-500 f-12">Bills Pending</span>
                                        <h5 class="text-dark f-w-600">₹84,200</h5>
                                    </div>
                                </div>
                                <div class="project-details d-none d-md-flex">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">₹84,200</h2>
                                    </div>
                                    <div class="product-sub bg-warning-light"><i data-feather="clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Complete border-b-secondary border-2">
                                <span class="f-light f-w-500 f-14 d-none d-md-flex">New Clients</span>
                                <div class="d-flex d-md-none align-items-center gap-2">
                                    <span class="product-sub bg-secondary-light d-flex d-md-none"><i data-feather="users"></i></span>
                                    <div>
                                        <span class="f-light f-w-500 f-12">New Clients</span>
                                        <h5 class="text-dark f-w-600">12</h5>
                                    </div>
                                </div>
                                <div class="project-details d-none d-md-flex">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">12</h2>
                                    </div>
                                    <div class="product-sub bg-secondary-light"><i data-feather="users"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-upcoming border-b-success border-2">
                                <span class="f-light f-w-500 f-14 d-none d-md-flex">New Receivers</span>
                                <div class="d-flex d-md-none align-items-center gap-2">
                                    <span class="product-sub bg-success-light d-flex d-md-none"><i data-feather="users"></i></span>
                                    <div>
                                        <span class="f-light f-w-500 f-12">New Receivers</span>
                                        <h5 class="text-dark f-w-600">89</h5>
                                    </div>
                                </div>
                                <div class="project-details d-none d-md-flex">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">89</h2>
                                    </div>
                                    <div class="product-sub bg-success-light"><i data-feather="users"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2 gx-md-4 gy-md-0">
                    <div class="col-xl-6 box-col-7">
                        <div class="card">
                            <div class="card-header sales-chart card-no-border pb-0">
                                <h4>Revenue Growth</h4>
                                <div class="sales-chart-dropdown">
                                    <ul class="balance-data">
                                        <li><span class="circle bg-primary"></span><span class="ms-1 f-w-400">Account
                                                Booking</span></li>
                                        <li><span class="circle bg-warning"></span><span class="ms-1 f-w-400">Cash
                                                Booking</span></li>
                                    </ul>
                                    <div class="sales-chart-dropdown-select">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown">This Year</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <span class="dropdown-item">Today</span>
                                                <span class="dropdown-item">Last Week</span>
                                                <span class="dropdown-item">Last Month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 pt-0">
                                <div class="revenuegrowth-chart" id="revenuegrowth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 box-col-5 total-revenue-total-order">
                        <div class="row g-2 g-md-0">
                            <div class="col-xl-12">
                                <div class="card"> 
                                <div class="card-body"> 
                                    <div class="total-revenue mb-2"> <span>Total Sales</span><a >₹5,62,650.08</a></div>
                                    <div class="total-chart">
                                    <div class="data-grow d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right font-primary"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                        <span class="f-w-500">40.15% from last year</span>
                                    </div>
                                    <div class="total-order">
                                        <div id="totalSalesChart" style="min-height: 135px;"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card"> 
                                <div class="card-body"> 
                                    <div class="total-revenue mb-2"> <span>Carrier Cost</span><a>₹4,22,256.26</a></div>
                                    <div class="total-chart">
                                    <div class="data-grow d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left font-secondary"><line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline></svg>
                                        <span class="f-w-500">20.25% from last year</span>
                                    </div>
                                    <div class="total-order">
                                        <div id="carrierCostChart" style="min-height: 135px;"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card"> 
                                <div class="card-body"> 
                                    <div class="total-revenue mb-2"> <span>Net Profit</span><a>₹1,40,393.82</a></div>
                                    <div class="total-chart">
                                    <div class="data-grow d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right font-primary"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                        <span class="f-w-500">18.15% from last year</span>
                                    </div>
                                    <div class="total-order">
                                        <div id="netProfitChart" style="min-height: 135px;"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 box-col-none">
                        <?php require 'includes/recent-booking.php' ?>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Shipment Status </h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="selling-product">
                                    <div class="apache-cotainer" id="echart-polar"> </div>
                                    <div class="sales-chart-dropdown">
                                        <ul class="balance-data">
                                            <li> <span class="circle bg-primary"></span><span
                                                    class="f-light ms-1">Delivered</span></li>
                                            <li><span class="circle bg-warning"></span><span
                                                    class="f-light ms-1">In Transit</span></li>
                                            <li> <span class="circle bg-secondary"></span><span
                                                    class="f-light ms-1">On Board</span></li>
                                            <li> <span class="circle bg-light"> </span><span
                                                    class="f-light ms-1">pending</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card recent-order"> 
                            <div class="card-header card-no-border total-revenue">
                                <h4 class="m-0">Top Client List</h4>
                                <div class="header-top"></div><a href="">View All </a>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="client-list-table table-responsive custom-scrollbar">
                                    <table class="order-table w-100">
                                        <tbody>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/29.png" alt="#">
                                                        <div class="status status-dnd bg-warning"> </div>
                                                    </div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Jenny Bell</a><span class="d-block f-light f-w-500">India</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"> <a class="f-14 f-w-500 " href="user-profile.pug">jennybell@gmail.com</a><span class="d-block f-light f-w-500">+84 342 556 555 </span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">1008</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/30.png" alt="#">
                                                        <div class="status status-dnd bg-warning"></div>
                                                    </div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Albert Flores</a><span class="d-block f-light f-w-500">UK</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">albert78@gmail.com</a><span class="d-block f-light f-w-500">+77 445 551 629</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">807</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"> <img class="img-50 rounded-circle" src="assets/images/user/33.png" alt="#">
                                                        <div class="status status-dnd bg-warning"> </div>
                                                    </div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Jane Cooper</a><span class="d-block f-light f-w-500">London</span></div>
                                                </div>
                                                <div class="user-comment w-100"> 
                                                    <div class="product-sub"> <a class="f-14 f-w-500 " href="user-profile.pug">jane145@gmail.com</a><span class="d-block f-light f-w-500">+56 955 510 831</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">306</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list"> 
                                                <div class="user-id">
                                                    <div class="avatars me-2"> 
                                                    <div class="avatar"> <img class="img-50 rounded-circle" src="assets/images/user/31.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"> <a class="f-14 f-w-500 " href="user-profile.pug">Devon Lane</a><span class="d-block f-light f-w-500">America</span></div>
                                                </div>
                                                <div class="user-comment w-100"> 
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">devom796@gmail.com</a><span class="d-block f-light f-w-500">+56 955 570 095</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">108</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/32.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Cody Fisher</a><span class="d-block f-light f-w-500">Canada</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">cody7895@gmail.com</a><span class="d-block f-light f-w-500">+226 795 552 31</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">55</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/32.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Cody Fisher</a><span class="d-block f-light f-w-500">Canada</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">cody7895@gmail.com</a><span class="d-block f-light f-w-500">+226 795 552 31</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">55</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"> <img class="img-50 rounded-circle" src="assets/images/user/33.png" alt="#">
                                                        <div class="status status-dnd bg-warning"> </div>
                                                    </div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Jane Cooper</a><span class="d-block f-light f-w-500">London</span></div>
                                                </div>
                                                <div class="user-comment w-100"> 
                                                    <div class="product-sub"> <a class="f-14 f-w-500 " href="user-profile.pug">jane145@gmail.com</a><span class="d-block f-light f-w-500">+56 955 510 831</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">306</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list"> 
                                                <div class="user-id">
                                                    <div class="avatars me-2"> 
                                                    <div class="avatar"> <img class="img-50 rounded-circle" src="assets/images/user/31.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"> <a class="f-14 f-w-500 " href="user-profile.pug">Devon Lane</a><span class="d-block f-light f-w-500">America</span></div>
                                                </div>
                                                <div class="user-comment w-100"> 
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">devom796@gmail.com</a><span class="d-block f-light f-w-500">+56 955 570 095</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">108</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/32.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Cody Fisher</a><span class="d-block f-light f-w-500">Canada</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">cody7895@gmail.com</a><span class="d-block f-light f-w-500">+226 795 552 31</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">55</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                <div class="user-id">
                                                    <div class="avatars me-2">
                                                    <div class="avatar"><img class="img-50 rounded-circle" src="assets/images/user/32.png" alt="#"></div>
                                                    </div>
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">Cody Fisher</a><span class="d-block f-light f-w-500">Canada</span></div>
                                                </div>
                                                <div class="user-comment w-100">
                                                    <div class="product-sub"><a class="f-14 f-w-500 " href="user-profile.pug">cody7895@gmail.com</a><span class="d-block f-light f-w-500">+226 795 552 31</span></div>
                                                    <div class="product-sub text-end">
                                                        <h5 class="text-primary">55</h5>
                                                        <small><i class="fa fa-check text-success"></i> Shipments </small>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="row g-2 g-md-0">
                            <div class="col-xl-12">
                                <div class="card product-widget">
                                    <div class="card-body new-product">
                                        <div class="product-cost">
                                            <div class="add-product">
                                                <div class="product-icon bg-light-primary">
                                                    <svg>
                                                        <use href="assets/svg/icon-sprite.svg#calendar"></use>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Add New Booking</h6>
                                                    <span class="f-light">Manage and schedule appointments</span>
                                                </div>
                                            </div>
                                            <div class="product-icon">
                                                <svg>
                                                    <use href="assets/svg/icon-sprite.svg#arrow-down"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card product-widget">
                                    <div class="card-body new-product">
                                        <div class="product-cost">
                                            <div class="add-product">
                                                <div class="product-icon bg-light-primary">
                                                    <svg>
                                                        <use href="assets/svg/icon-sprite.svg#people"></use>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Add New Clients</h6>
                                                    <span class="f-light">Grow your business database</span>
                                                </div>
                                            </div>
                                            <div class="product-icon">
                                                <svg>
                                                    <use href="assets/svg/icon-sprite.svg#arrow-down"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card product-widget">
                                    <div class="card-body new-product">
                                        <div class="product-cost">
                                            <div class="add-product">
                                                <div class="product-icon bg-light-primary">
                                                    <svg>
                                                        <use href="assets/svg/icon-sprite.svg#fill-user"></use>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Edit My Profile</h6>
                                                    <span class="f-light">Update your personal information</span>
                                                </div>
                                            </div>
                                            <div class="product-icon">
                                                <svg>
                                                    <use href="assets/svg/icon-sprite.svg#arrow-down"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card boost-up-card overflow-hidden">
                                    <div class="p-4">
                                        <div class="boostup-name row">
                                            <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">Boost up your sale</h6>
                                            <p class="text-white f-14 f-w-500 col-9 line-clamp">
                                                by upgrading your account you can increase your sale by 30% more.</p>
                                        </div>
                                        <div class="img-boostup"><img class="img-boostup-img-1"
                                                src="assets/images/dashboard-3/boostup1.png" alt="boostup"><img
                                                class="img-boostup-img-2" src="assets/images/dashboard-3/boostup2.png"
                                                alt="boostup"></div>
                                        <div class="btn-showcase text-start"> <a href="pricing.html">
                                                <button class="btn btn-pill btn-outline-light-2x b-r-8" type="button">Upgrade
                                                    Now</button></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'includes/page-footer.php' ?>
    </div>
</div>
<div class="modal fade bd-example-modal-xl" id="printBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Print Consignment Note</h4>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal" style="overflow-x: auto; background: #eee; padding: 20px;">
                <style>
                    .memo-fixed-wrapper {
                        width: 1100px;
                        margin: 0 auto;
                        background: #fff;
                        box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    }
                    .memo-container {
                        width: 100%;
                        border: 2px solid #333;
                        font-family: 'Arial', sans-serif;
                        color: #000;
                        font-size: 13px;
                    }
                    .memo-container table {
                        width: 100%;
                        border-collapse: collapse;
                        table-layout: fixed;
                    }
                    .memo-container td, .memo-container th {
                        border: 1px solid #333;
                        padding: 8px;
                        vertical-align: top;
                    }
                    .vertical-text {
                        writing-mode: vertical-rl;
                        transform: rotate(180deg);
                        text-align: center;
                        font-weight: bold;
                        background: #f0f0f0;
                        text-transform: uppercase;
                    }
                    .memo-header-logo {
                        font-size: 36px;
                        font-weight: 900;
                        color: #b30000;
                        display: flex;
                        align-items: center;
                    }
                    .memo-header-logo span {
                        color: #000;
                        margin-left: 5px;
                        font-weight: normal;
                        font-style: italic;
                    }
                    .sub-header-label {
                        font-size: 11px;
                        font-weight: bold;
                        display: block;
                        text-align: center;
                        border-bottom: 1px solid #333;
                        background: #eee;
                    }
                    .data-val {
                        display: block;
                        text-align: center;
                        font-weight: bold;
                        padding: 5px 0;
                        font-size: 14px;
                    }
                    .barcode-placeholder {
                        font-size: 45px;
                        line-height: 1;
                        letter-spacing: 3px;
                        text-align: center;
                    }
                    .memo-fixed-wrapper table th:last-child,.memo-fixed-wrapper  table td:last-child {
                        position: relative !important;
                        right: 0;
                        background: #fff;
                    }
                    @media print {
                        .modal-footer, .btn-close, .modal-header { display: none !important; }
                        .memo-fixed-wrapper { width: 100%; box-shadow: none; margin: 0; }
                        .memo-container { border: 1px solid #000; }
                        @page { size: landscape; margin: 0.5cm; }
                    }
                </style>

                <div class="memo-fixed-wrapper">
                    <div class="memo-container">
                        <table>
                            <tr>
                                <td rowspan="2" class="vertical-text" style="width: 40px;">CASH MEMO</td>
                                <td colspan="2" style="width: 280px;">
                                    <div class="memo-header-logo">AB <span>EXPRESS</span></div>
                                    <div style="font-size: 13px; font-weight: bold;">GST No. - 24AGVDF968Y2ZG</div>
                                </td>
                                <td colspan="5" style="border: none; padding: 0;">
                                    <div style="padding: 5px; font-size: 11px; text-align: center; border-bottom: 1px solid #333;">
                                        Cash, Gold, Silver, Diamond & Liquid are not accepted by us.<br>
                                        <small>NOTE: CONSIGNMENT ISSUED BY FRANCHISEE</small>
                                    </div>
                                    <table style="border: none;">
                                        <tr>
                                            <td style="width: 25%; border-left: none; border-top: none; border-bottom: none;"><span class="sub-header-label">ORIGIN</span><span class="data-val">MUMBAI</span></td>
                                            <td style="width: 25%; border-top: none; border-bottom: none;"><span class="sub-header-label">DESTINATION</span><span class="data-val">AHMEDABAD</span></td>
                                            <td style="width: 25%; border-top: none; border-bottom: none;"><span class="sub-header-label">DATE AND TIME</span><span class="data-val">08/01/2026 06:15 PM</span></td>
                                            <td style="width: 25%; border-right: none; border-top: none; border-bottom: none;"><span class="sub-header-label">CARRIER</span><span class="data-val">DTDC</span></td>
                                        </tr>
                                    </table>
                                </td>
                                <td colspan="2" style="width: 220px; vertical-align: middle;">
                                    <div class="barcode-placeholder">|||||||||||||</div>
                                    <div style="text-align: center; font-weight: bold; font-size: 14px;">DT4587889674</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="width: 50%;">
                                    <div style="display: flex;">
                                        <span style="font-weight: bold; margin-right: 15px;">CONSIGNOR</span>
                                        <div>
                                            <strong style="font-size: 15px;">Brooklyn Simmons</strong><br>
                                            <strong style="font-size: 15px;">9876543210</strong><br>
                                            <small>Name/Dept.</small>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="5" style="width: 50%;">
                                    <div style="display: flex;">
                                        <span style="font-weight: bold; margin-right: 15px;">CONSIGNEE</span>
                                        <div>
                                            <strong style="font-size: 15px;">Raj Enterprise</strong><br>
                                            <strong style="font-size: 15px;">88888 77777</strong><br>
                                            <small>2118 Thornridge Cir. Syracuse, Mumbai</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                        <table style="border-top: none;">
                            <tr style="background: #eee; text-align: center; font-weight: bold; font-size: 11px;">
                                <td style="width: 120px;">PACKAGE TYPE</td>
                                <td style="width: 100px;">VALUE</td>
                                <td style="width: 100px;">WEIGHT</td>
                                <td style="width: 80px;">BOXES</td>
                                <td style="width: 100px;">CHARGE</td>
                                <td style="width: 100px;">FR. CHARGE</td>
                                <td style="width: 80px;">INSUR.</td>
                                <td style="width: 90px;">CGST</td>
                                <td style="width: 90px;">SGST</td>
                                <td style="width: 140px;">TOTAL CHARGE</td>
                            </tr>
                            <tr style="text-align: center; font-weight: bold; height: 60px; font-size: 15px; vertical-align: middle;">
                                <td style="text-align: left;">Non-Doc / Parcel</td>
                                <td>-</td>
                                <td>12.50 Kg</td>
                                <td>2</td>
                                <td>1000.00</td>
                                <td>100.00</td>
                                <td>50.00</td>
                                <td>108.00</td>
                                <td>108.00</td>
                                <td style="font-size: 22px;">1416.00</td>
                            </tr>
                        </table>

                        <table style="border-top: none;">
                            <tr>
                                <td colspan="6" style="width: 60%; font-size: 10px; line-height: 1.4;">
                                    1) It is insisted to insure parcels of or above Rs. 500, else AB Express is not responsible for it. 
                                    2) Choose fast track for urgent deliveries. 3) No claims are liable on this receipt. 
                                    4) AB Express is not responsible for any kind of damage to parcel. 
                                    5) In case of any problem, customer is liable to 50% refund. 
                                    6) Address parcel related inquiries to the courier company. 
                                    7) Customer responsible for government issues. 
                                    8) Valid for 30 days. 9) No cash/gold/mobiles.
                                    <br><br><br>
                                    <strong>CONSIGNOR SIGNATURE</strong> ........................................................................
                                    <div style="text-align: right; font-style: italic; font-size: 9px;">I warrant that all details given herein are true and correct</div>
                                </td>
                                <td colspan="4" style="width: 40%; padding: 0;">
                                    <div style="padding: 10px; border-bottom: 1px solid #333; min-height: 60px;">
                                        <strong>REMARK:</strong> Handle with care. Deliver before 6 PM.
                                    </div>
                                    <div style="padding: 10px;">
                                        <strong>CONSIGNEE SIGNATURE & RUBBER STAMP</strong><br><br>
                                        NAME: __________________________ DATE: _____________ <br><br>
                                        <small>Received in good order and condition ..................... A.M./P.M.</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center; vertical-align: middle;">
                                    <strong>TRACK YOUR SHIPMENT ON</strong><br>
                                    <a href="https://dtdc.com" style="color: blue; text-decoration: none; font-weight: bold;">https://dtdc.com</a>
                                </td>
                                <td colspan="4" style="font-size: 10px; line-height: 1.3;">
                                    111 Gold Plaza, 2nd Floor, Opp. Raghuveer Complex, Nr. BOB, 5 Trimurti Estate, N H No 8, AHMEDABAD - 7984461898
                                </td>
                                <td colspan="2" style="text-align: center; vertical-align: middle;">
                                    RECEIVED BY:<br><strong>A B Express</strong>
                                </td>
                                <td class="vertical-text" style="width: 30px; border-bottom: none;">P.T.O.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="window.print();">Print Memo</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-xl" id="editBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Booking - AWB123456</h4>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                <form class="theme-form">
                    <!-- SECTION 1: TYPES -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Booking Type</h6>
                            <div class="form-check radio radio-primary ps-0 select-booking-type pt-2">
                                <ul class="radio-wrapper justify-content-start">
                                    <li><input class="form-check-input" id="editTypeSurface" type="radio" name="e_type"
                                            checked><label class="form-check-label mb-0" for="editTypeSurface"><i
                                                class="fa fa-truck"></i><span>Surface</span></label></li>
                                    <li><input class="form-check-input" id="editTypeAir" type="radio"
                                            name="e_type"><label class="form-check-label mb-0" for="editTypeAir"><i
                                                class="fa fa-plane"></i><span>Air</span></label></li>
                                    <li><input class="form-check-input" id="editTypeCargo" type="radio"
                                            name="e_type"><label class="form-check-label mb-0" for="editTypeCargo"><i
                                                class="fa fa-ship"></i><span>Cargo</span></label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Customer Mode</h6>
                            <div class="form-check radio radio-primary ps-0 select-customer-mode pt-2">
                                <ul class="radio-wrapper justify-content-start">
                                    <li><input class="form-check-input" id="editModeAccount" type="radio"
                                            name="e_mode"><label class="form-check-label mb-0" for="editModeAccount"><i
                                                class="fa fa-university"></i><span>Account</span></label></li>
                                    <li><input class="form-check-input" id="editModeCash" type="radio" name="e_mode"
                                            checked><label class="form-check-label mb-0" for="editModeCash"><i
                                                class="fa fa-money"></i><span>Cash</span></label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION 2: S/R DETAILS -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 border-end">
                            <h6 class="mb-3 border-bottom pb-2">Sender Information</h6>
                            <div class="row g-2">
                                <div class="col-md-6"><label class="form-label">Sender Name</label><input type="text"
                                        class="form-control mb-2" value="Brooklyn Simmons"></div>
                                <div class="col-md-6"><label class="form-label">Sender Mobile</label><input type="tel"
                                        class="form-control mb-2" value="9876543210"></div>
                                <div class="col-md-6"><label class="form-label">Proof ID</label><select
                                        class="form-select mb-2">
                                        <option selected>Aadhar Card</option>
                                        <option>PAN Card</option>
                                    </select></div>
                                <div class="col-md-6"><label class="form-label">ID Number</label><input type="text"
                                        class="form-control mb-2" value="1234-5678-9012"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Receiver Information</h6>
                            <div class="row g-2">
                                <div class="col-md-6"><label class="form-label">Receiver Name</label><input type="text"
                                        class="form-control mb-2" value="Raj Enterprise"></div>
                                <div class="col-md-6"><label class="form-label">Receiver Mobile</label><input type="tel"
                                        class="form-control mb-2" value="8888877777"></div>
                                <div class="col-12"><label class="form-label">Address</label><input type="text"
                                        class="form-control mb-2" value="2118 Thornridge Cir. Syracuse"></div>
                                <div class="col-md-4"><label class="form-label">City</label><input type="text"
                                        class="form-control mb-2" value="Mumbai"></div>
                                <div class="col-md-4"><label class="form-label">State</label><input type="text"
                                        class="form-control mb-2" value="Maharashtra"></div>
                                <div class="col-md-4"><label class="form-label">Pincode</label><input type="text"
                                        class="form-control mb-2" value="400001"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION 3: LOGISTICS -->
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <h6 class="mb-3 border-bottom pb-2">Logistic Details</h6>
                        </div>
                        <div class="col-md-3"><label class="form-label">Carrier</label><select class="form-select">
                                <option>DTDC</option>
                                <option>Trackon</option>
                            </select></div>
                        <div class="col-md-3"><label class="form-label">Package Type</label><select class="form-select">
                                <option>Document</option>
                                <option selected>Non-Doc / Parcel</option>
                            </select></div>
                        <div class="col-md-3"><label class="form-label">Weight (Kg)</label><input type="number"
                                class="form-control" value="12.50"></div>
                        <div class="col-md-3"><label class="form-label">Boxes</label><input type="number"
                                class="form-control" value="2"></div>
                        <div class="col-12"><label class="form-label">Additional Details</label><textarea
                                class="form-control" rows="2">Handle with care.</textarea></div>
                    </div>
                    <!-- SECTION 4: BILLING (Exact mirror of your Wizard step) -->
                    <div class="billing-form-wrapper bg-primary-light p-3 rounded">
                        <h6 class="mb-3 border-bottom pb-2">Billing Information</h6>
                        <div class="row g-3">
                            <div class="col-md-4"><label class="form-label">Gross Amount</label><input type="number"
                                    class="form-control" value="1000.00"></div>
                            <div class="col-md-4"><label class="form-label">Fuel Surcharge</label><input type="number"
                                    class="form-control" value="100.00"></div>
                            <div class="col-md-4"><label class="form-label">Insurance</label><input type="number"
                                    class="form-control" value="25.00"></div>
                            <div class="col-md-4"><label class="form-label">Doc Charge</label><input type="number"
                                    class="form-control" value="25.00"></div>
                            <div class="col-md-4"><label class="form-label">ODA Charge</label><input type="number"
                                    class="form-control" value="50.00"></div>
                            <div class="col-md-4"><label class="form-label">Other Charges</label><input type="number"
                                    class="form-control" value="0.00"></div>
                            <div class="col-md-4"><label class="form-label">Sub Total</label><input type="number"
                                    class="form-control" value="1200.00" readonly></div>
                            <div class="col-md-2">
                                <label class="form-label d-block">Apply GST</label>
                                <div class="form-check form-switch pt-1"><input class="form-check-input" type="checkbox"
                                        checked></div>
                            </div>
                            <div class="col-md-3"><label class="form-label">CGST</label><input type="number"
                                    class="form-control" value="108.00" readonly></div>
                            <div class="col-md-3"><label class="form-label">SGST</label><input type="number"
                                    class="form-control" value="108.00" readonly></div>
                            <div class="col-12 mt-3">
                                <label class="net-amount-label">Net Amount</label>
                                <input type="text"
                                    class="form-control form-control-lg border-danger text-danger fw-bold"
                                    value="1416.00" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer mt-3">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Discard Changes</button>
                <button class="btn btn-success"><i class="fa fa-save me-2"></i> UPDATE BOOKING</button>
            </div>
        </div>
    </div>
</div>
<!-- latest jquery-->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="assets/js/scrollbar/simplebar.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/sidebar-pin.js"></script>
<script src="assets/js/slick/slick.min.js"></script>
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/header-slick.js"></script>
<script src="assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="assets/js/chart/apex-chart/moment.min.js"></script>
<script src="assets/js/chart/echart/esl.js"></script>
<script src="assets/js/chart/echart/config.js"></script>
<script src="assets/js/chart/echart/pie-chart/facePrint.js"></script>
<script src="assets/js/chart/echart/pie-chart/testHelper.js"></script>
<script src="assets/js/chart/echart/pie-chart/custom-transition-texture.js"></script>
<script src="assets/js/chart/echart/data/symbols.js"></script>
<!-- calendar js-->
<script src="assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="assets/js/dashboard/dashboard_2.js"></script>
<script src="assets/js/dashboard/dashboard_3.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="assets/js/script.js"></script>
<script src="assets/js/theme-customizer/customizer.js"></script>
<script>
(function () {
    // Shared configuration function based exactly on your initial totalOrder code
    function getChartOptions(data1, data2, mainColor) {
        return {
            series: [{ name: 'sale-1', data: data1 }, { name: 'sale-2', data: data2 }],
            fill: { gradient: { opacityFrom: 0.5, opacityTo: 0, shadeIntensity: 0.2 } },
            colors: [mainColor, mainColor],
            chart: { height: 120, type: 'area', offsetY: -17, toolbar: { show: false } },
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 1, dashArray: [0, 4] },
            xaxis: { show: false, labels: { show: false }, lines: { show: false } },
            grid: { show: false },
            yaxis: { show: false, lines: { show: false } },
            legend: { show: false },
            tooltip: { x: { format: 'dd/MM/yy HH:mm' } },
            responsive: [{ breakpoint: 1499, options: { chart: { width: 140 } } }]
        };
    }

    // 1. Total Sales Chart
    var salesChart = new ApexCharts(document.querySelector("#totalSalesChart"), 
        getChartOptions([16, 28, 45, 43, 32, 44, 35, 30], [22, 32, 42, 20, 35, 42, 25, 45], RihoAdminConfig.primary));
    salesChart.render();

    // 2. Carrier Cost Chart
    var costChart = new ApexCharts(document.querySelector("#carrierCostChart"), 
        getChartOptions([45, 35, 20, 30, 40, 25, 35, 20], [35, 45, 30, 25, 45, 35, 40, 35], RihoAdminConfig.secondary));
    costChart.render();

    // 3. Net Profit Chart
    var profitChart = new ApexCharts(document.querySelector("#netProfitChart"), 
        getChartOptions([20, 35, 40, 55, 45, 60, 50, 65], [25, 30, 45, 35, 50, 40, 55, 45], RihoAdminConfig.primary));
    profitChart.render();

})();
</script>
</body>

</html>