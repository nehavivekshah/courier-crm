@extends('layouts.app')

@section('title', 'Booking Report - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Booking Report</h4>
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
                        <li class="breadcrumb-item active">Booking Report</li>
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
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Booking Type</label>
                                        <select class="form-select">
                                            <option value="">All Types</option>
                                            <option>Surface</option>
                                            <option>Air</option>
                                            <option>Cargo</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Customer Mode</label>
                                        <select class="form-select">
                                            <option value="">All Modes</option>
                                            <option>Cash</option>
                                            <option>Account</option>
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
                                        <th>Date</th>
                                        <th>AWB Number</th>
                                        <th>Sender</th>
                                        <th>Receiver</th>
                                        <th>Destination</th>
                                        <th>Carrier</th>
                                        <th>Wgt/Qty</th>
                                        <th>Net Amount</th>
                                        <th>Mode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08 Jan 2026</td>
                                        <td class="f-w-600 txt-primary">DT4587889674</td>
                                        <td>Brooklyn Simmons</td>
                                        <td>Raj Enterprise</td>
                                        <td>Mumbai, MH</td>
                                        <td><span class="badge badge-light-primary">DTDC</span></td>
                                        <td>12.50 Kg / 2</td>
                                        <td class="f-w-700">₹ 1,416.00</td>
                                        <td><span class="badge badge-light-success">Cash</span></td>
                                    </tr>
                                    <tr>
                                        <td>09 Jan 2026</td>
                                        <td class="f-w-600 txt-primary">T985632145</td>
                                        <td>Anita Sharma</td>
                                        <td>Global Imports</td>
                                        <td>Syracuse, NY</td>
                                        <td><span class="badge badge-light-secondary">Trackon</span></td>
                                        <td>0.50 Kg / 1</td>
                                        <td class="f-w-700">₹ 850.00</td>
                                        <td><span class="badge badge-light-warning">Account</span></td>
                                    </tr>
                                    <tr>
                                        <td>10 Jan 2026</td>
                                        <td class="f-w-600 txt-primary">PR88547210</td>
                                        <td>Rahul Varma</td>
                                        <td>Swift Logistics</td>
                                        <td>Delhi, DL</td>
                                        <td><span class="badge badge-light-info">Professional</span></td>
                                        <td>5.00 Kg / 1</td>
                                        <td class="f-w-700">₹ 450.00</td>
                                        <td><span class="badge badge-light-success">Cash</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>AWB Number</th>
                                        <th>Sender</th>
                                        <th>Receiver</th>
                                        <th>Destination</th>
                                        <th>Carrier</th>
                                        <th>Wgt/Qty</th>
                                        <th>Net Amount</th>
                                        <th>Mode</th>
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