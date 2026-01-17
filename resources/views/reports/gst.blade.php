@extends('layouts.app')

@section('title', 'GST Report - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>GST Report (Tax Summary)</h4>
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
                        <li class="breadcrumb-item active">GST Report</li>
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
                                        <label class="form-label">Month / Year</label>
                                        <input class="form-control" type="month" value="{{ date('Y-m') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">GST Type</label>
                                        <select class="form-select">
                                            <option value="">All Transactions</option>
                                            <option>B2B (Registered)</option>
                                            <option>B2C (Unregistered)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">State Code</label>
                                        <select class="form-select">
                                            <option value="">All States</option>
                                            <option>27-Maharashtra</option>
                                            <option>24-Gujarat</option>
                                            <option>07-Delhi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <label class="form-label">Carrier</label>
                                        <select class="form-select">
                                            <option value="">All Carriers</option>
                                            <option>DTDC</option>
                                            <option>Trackon</option>
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
                                        <th>AWB / Invoice</th>
                                        <th>Client & GSTIN</th>
                                        <th class="text-end">Taxable Val</th>
                                        <th class="text-end">CGST (9%)</th>
                                        <th class="text-end">SGST (9%)</th>
                                        <th class="text-end">IGST (18%)</th>
                                        <th class="text-end">Total GST</th>
                                        <th class="text-end">Net Amt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08 Jan 2026</td>
                                        <td class="f-w-600">DT4587889674</td>
                                        <td>Brooklyn Simmons<br><small class="text-muted">27AAAAA0000A1Z5</small></td>
                                        <td class="text-end">₹ 1,200.00</td>
                                        <td class="text-end">₹ 108.00</td>
                                        <td class="text-end">₹ 108.00</td>
                                        <td class="text-end">₹ 0.00</td>
                                        <td class="text-end">₹ 216.00</td>
                                        <td class="text-end f-w-700">₹ 1,416.00</td>
                                    </tr>
                                    <tr>
                                        <td>09 Jan 2026</td>
                                        <td class="f-w-600">T985632145</td>
                                        <td>Global Imports<br><small class="text-muted">24BBBBB1111B2Z2</small></td>
                                        <td class="text-end">₹ 5,000.00</td>
                                        <td class="text-end">₹ 0.00</td>
                                        <td class="text-end">₹ 0.00</td>
                                        <td class="text-end">₹ 900.00</td>
                                        <td class="text-end">₹ 900.00</td>
                                        <td class="text-end f-w-700">₹ 5,900.00</td>
                                    </tr>
                                    <tr>
                                        <td>10 Jan 2026</td>
                                        <td class="f-w-600">PR88547210</td>
                                        <td>Rahul Varma<br><small class="text-muted">URD (Unregistered)</small></td>
                                        <td class="text-end">₹ 450.00</td>
                                        <td class="text-end">₹ 40.50</td>
                                        <td class="text-end">₹ 40.50</td>
                                        <td class="text-end">₹ 0.00</td>
                                        <td class="text-end">₹ 81.00</td>
                                        <td class="text-end f-w-700">₹ 531.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Monthly Totals:</th>
                                        <th colspan="2"></th>
                                        <th class="text-end">₹ 6,650.00</th>
                                        <th class="text-end">₹ 148.50</th>
                                        <th class="text-end">₹ 148.50</th>
                                        <th class="text-end">₹ 900.00</th>
                                        <th class="text-end">₹ 1,197.00</th>
                                        <th class="text-end">₹ 7,847.00</th>
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