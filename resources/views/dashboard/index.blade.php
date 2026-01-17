@extends('layouts.app')

@section('title', 'Dashboard - Courier Management System')

@push('styles')
    <style>
        .total-revenue span {
            color: #000;
        }

        .client-list-table {
            max-height: 370px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Dashboard</h4>
                </div>
                <div class="col-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
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
                            <span class="product-sub bg-primary-light d-flex d-md-none"><i
                                    data-feather="shopping-bag"></i></span>
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
                            <span class="product-sub bg-secondary-light d-flex d-md-none"><i
                                    data-feather="users"></i></span>
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
                            <span class="product-sub bg-success-light d-flex d-md-none"><i
                                    data-feather="user-plus"></i></span>
                            <div>
                                <span class="f-light f-w-500 f-12">New Receivers</span>
                                <h5 class="text-dark f-w-600">45</h5>
                            </div>
                        </div>
                        <div class="project-details d-none d-md-flex">
                            <div class="project-counter">
                                <h2 class="f-w-600">45</h2>
                            </div>
                            <div class="product-sub bg-success-light"><i data-feather="user-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Revenue Chart -->
            <div class="col-xl-6 col-md-12 proorder-md-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Revenue Growth</h4>
                    </div>
                    <div class="card-body">
                        <div id="revenueGrowth"></div>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings -->
            <div class="col-xl-3 col-md-6 proorder-md-3">
                @include('dashboard.partials.recent-booking')
            </div>

            <!-- Shipment Status -->
            <div class="col-xl-3 col-md-6 proorder-md-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="flex-grow-1">Shipment Status</h4>
                    </div>
                    <div class="card-body p-0">
                        <div id="shipmentStatus"></div>
                    </div>
                </div>
            </div>

            <!-- Top Clients -->
            <div class="col-xl-6 col-md-12 proorder-md-2">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="flex-grow-1">Top Client List</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                        class="text-muted">High Revenue<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Revenue</a>
                                    <a class="dropdown-item" href="#">Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive client-list-table custom-scrollbar">
                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div
                                                        class="avatar-title bg-success-subtle text-success rounded-circle fs-3">
                                                        <i class="ph-users-three"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 m-0">Raj Enterprise</h5>
                                                    <small class="text-muted">raj@enterprise.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 m-0">45</h5>
                                            <small class="text-muted">Bookings</small>
                                        </td>
                                        <td class="text-end">
                                            <h5 class="fs-14 m-0 text-success">₹ 15,400</h5>
                                            <small class="text-muted">Revenue</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-info-subtle text-info rounded-circle fs-3">
                                                        <i class="ph-users-three"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 m-0">Global Exports</h5>
                                                    <small class="text-muted">info@globalexp.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 m-0">32</h5>
                                            <small class="text-muted">Bookings</small>
                                        </td>
                                        <td class="text-end">
                                            <h5 class="fs-14 m-0 text-success">₹ 12,850</h5>
                                            <small class="text-muted">Revenue</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div
                                                        class="avatar-title bg-warning-subtle text-warning rounded-circle fs-3">
                                                        <i class="ph-users-three"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 m-0">Tech Solutions</h5>
                                                    <small class="text-muted">contact@techsol.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 m-0">28</h5>
                                            <small class="text-muted">Bookings</small>
                                        </td>
                                        <td class="text-end">
                                            <h5 class="fs-14 m-0 text-success">₹ 9,500</h5>
                                            <small class="text-muted">Revenue</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div
                                                        class="avatar-title bg-danger-subtle text-danger rounded-circle fs-3">
                                                        <i class="ph-users-three"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 m-0">City Traders</h5>
                                                    <small class="text-muted">sales@citytraders.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 m-0">15</h5>
                                            <small class="text-muted">Bookings</small>
                                        </td>
                                        <td class="text-end">
                                            <h5 class="fs-14 m-0 text-success">₹ 4,200</h5>
                                            <small class="text-muted">Revenue</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Quick Action FAB (Floating Action Button) -->
    <div class="fab-container">
        <div class="fab-button">
            <i class="fa fa-plus"></i>
        </div>
        <ul class="fab-options">
            <li>
                <a href="{{ route('bookings.create') }}" data-tooltip="New Booking">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </li>
            <li>
                <a href="#" data-tooltip="Add Client">
                    <i class="fa fa-user-plus"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('logistics.inwards') }}" data-tooltip="Inward Entry">
                    <i class="fa fa-truck"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Modal: Print Booking -->
    <div class="modal fade" id="printBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print Consignment Note</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Select print format for AWB: <strong>DT4587889674</strong></p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-outline-primary"><i class="fa fa-file-text-o me-2"></i>A4 Format</button>
                        <button class="btn btn-outline-secondary"><i class="fa fa-ticket me-2"></i>Thermal Sticker</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Edit Booking Quick View -->
    <div class="modal fade" id="editBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Booking - DT4587889674</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Receiver Name</label>
                                <input class="form-control" type="text" value="Raj Enterprise">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Amount</label>
                                <input class="form-control" type="number" value="177.00">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>Booked</option>
                                    <option>In-Transit</option>
                                    <option>Delivered</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Save Changes</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection