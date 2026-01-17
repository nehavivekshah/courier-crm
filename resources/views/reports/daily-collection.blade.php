@extends('layouts.app')

@section('title', 'Daily Collection Report - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Daily Collection Report</h4>
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
                        <li class="breadcrumb-item active">Daily Collection</li>
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
                                    <div class="col-md-3">
                                        <label class="form-label">Select Date</label>
                                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Payment Mode</label>
                                        <select class="form-select">
                                            <option value="">All Modes</option>
                                            <option>Cash</option>
                                            <option>UPI / GPay</option>
                                            <option>Credit Card</option>
                                            <option>Bank Transfer</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Collected By (Staff)</label>
                                        <select class="form-select">
                                            <option value="">All Staff</option>
                                            <option>Admin</option>
                                            <option>Dipesh Chavda</option>
                                            <option>Chintan Patel</option>
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
                                        <th>Receipt No</th>
                                        <th>Time</th>
                                        <th>AWB / Bill No</th>
                                        <th>Client Name</th>
                                        <th>Type</th>
                                        <th>Collected By</th>
                                        <th>Method</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#REC-8845</td>
                                        <td>10:30 AM</td>
                                        <td class="f-w-600">DT4587889674</td>
                                        <td>Brooklyn Simmons</td>
                                        <td><span class="badge badge-light-primary">New Booking</span></td>
                                        <td>Admin</td>
                                        <td><i class="fa fa-money text-success me-1"></i> Cash</td>
                                        <td class="text-end f-w-700">₹ 1,416.00</td>
                                    </tr>
                                    <tr>
                                        <td>#REC-8846</td>
                                        <td>11:15 AM</td>
                                        <td class="f-w-600">T985632145</td>
                                        <td>Global Imports</td>
                                        <td><span class="badge badge-light-info">Bill Payment</span></td>
                                        <td>Chintan Patel</td>
                                        <td><i class="fa fa-mobile text-primary me-1"></i> UPI/GPay</td>
                                        <td class="text-end f-w-700">₹ 5,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>#REC-8847</td>
                                        <td>02:45 PM</td>
                                        <td class="f-w-600">PR88547210</td>
                                        <td>Rahul Varma</td>
                                        <td><span class="badge badge-light-primary">New Booking</span></td>
                                        <td>Dipesh Chavda</td>
                                        <td><i class="fa fa-money text-success me-1"></i> Cash</td>
                                        <td class="text-end f-w-700">₹ 450.00</td>
                                    </tr>
                                    <tr>
                                        <td>#REC-8848</td>
                                        <td>04:20 PM</td>
                                        <td class="f-w-600">DT77412589</td>
                                        <td>Swift Logistics</td>
                                        <td><span class="badge badge-light-warning">ODA Charges</span></td>
                                        <td>Admin</td>
                                        <td><i class="fa fa-credit-card text-secondary me-1"></i> Card</td>
                                        <td class="text-end f-w-700">₹ 1,200.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Collection:</th>
                                        <th colspan="6"></th>
                                        <th class="text-end f-w-900">₹ 8,066.00</th>
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