@extends('layouts.app')

@section('title', 'Delivery Report - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Delivery Report</h4>
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
                        <li class="breadcrumb-item active">Delivery Report</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="head-options d-flex gap-2 mb-3">
                            <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse"
                                href="#collapseFilter">
                                <i class="fa fa-filter me-0 me-md-2"></i><span class="d-none d-md-inline">Filter</span>
                            </button>
                        </div>
                        <div class="collapse mb-3" id="collapseFilter">
                            <div class="p-3 rounded bg-primary-light">
                                <div class="row g-3">
                                    <div class="col-md-2 col-6">
                                        <label class="form-label">From Date</label>
                                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <label class="form-label">To Date</label>
                                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Delivery Staff</label>
                                        <select class="form-select">
                                            <option value="">All Staff</option>
                                            <option>Dipesh Chavda</option>
                                            <option>Chintan Patel</option>
                                            <option>Rahul Mehta</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Status</label>
                                        <select class="form-select">
                                            <option value="">All Status</option>
                                            <option>Delivered</option>
                                            <option>Out for Delivery</option>
                                            <option>Pending</option>
                                            <option>Returned</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Carrier</label>
                                        <select class="form-select">
                                            <option value="">All Carriers</option>
                                            <option>DTDC</option>
                                            <option>Trackon</option>
                                            <option>Professional</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button class="btn btn-primary me-2">Filter</button>
                                        <button class="btn btn-secondary" data-bs-dismiss="collapse">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dt-ext table-responsive custom-scrollbar">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>Booking Date</th>
                                        <th>Delivery Date</th>
                                        <th>AWB Number</th>
                                        <th>Receiver & Address</th>
                                        <th>Carrier</th>
                                        <th>Delivery Person</th>
                                        <th>Net Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08 Jan 2026</td>
                                        <td>09 Jan 2026</td>
                                        <td class="f-w-600 txt-primary">DT4587889674</td>
                                        <td>
                                            <h6 class="mb-0">Raj Enterprise</h6>
                                            <p class="f-12 mb-0">Mumbai, Maharashtra - 400001</p>
                                        </td>
                                        <td><span class="badge badge-light-primary">DTDC</span></td>
                                        <td>Chintan Patel</td>
                                        <td class="f-w-700">₹ 1,416.00</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>09 Jan 2026</td>
                                        <td>-- --</td>
                                        <td class="f-w-600 txt-primary">T985632145</td>
                                        <td>
                                            <h6 class="mb-0">Global Imports</h6>
                                            <p class="f-12 mb-0">Syracuse, NY - 13201</p>
                                        </td>
                                        <td><span class="badge badge-light-secondary">Trackon</span></td>
                                        <td>Dipesh Chavda</td>
                                        <td class="f-w-700">₹ 850.00</td>
                                        <td><span class="badge badge-warning">Out for Delivery</span></td>
                                    </tr>
                                    <tr>
                                        <td>10 Jan 2026</td>
                                        <td>-- --</td>
                                        <td class="f-w-600 txt-primary">PR88547210</td>
                                        <td>
                                            <h6 class="mb-0">Swift Logistics</h6>
                                            <p class="f-12 mb-0">Delhi, DL - 110001</p>
                                        </td>
                                        <td><span class="badge badge-light-info">Professional</span></td>
                                        <td>Rahul Mehta</td>
                                        <td class="f-w-700">₹ 450.00</td>
                                        <td><span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Booking Date</th>
                                        <th>Delivery Date</th>
                                        <th>AWB Number</th>
                                        <th>Receiver & Address</th>
                                        <th>Carrier</th>
                                        <th>Delivery Person</th>
                                        <th>Net Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection