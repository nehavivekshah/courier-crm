@extends('layouts.app')

@section('title', 'Expense - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Expense Management</h4>
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
                        <li class="breadcrumb-item">Financials</li>
                        <li class="breadcrumb-item active">Expense</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Expense Entries</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#addExpenseModal">
                            <i class="fa fa-plus me-2"></i>Add Expense Entry
                        </button>
                    </div>
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
                                        <label class="form-label">Category</label>
                                        <select class="form-select">
                                            <option value="">All Categories</option>
                                            <option>Fuel</option>
                                            <option>Vehicle Maintenance</option>
                                            <option>Salary</option>
                                            <option>Office Rent</option>
                                            <option>Stationery</option>
                                            <option>Utilities</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">From Date</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">To Date</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button class="btn btn-primary me-2">Filter</button>
                                        <button class="btn btn-secondary" data-bs-dismiss="collapse">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Paid To / Vendor</th>
                                        <th>Mode</th>
                                        <th>Amount (₹)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>04 Jan 2026</td>
                                        <td><span class="badge badge-light-warning">Fuel</span></td>
                                        <td class="f-w-600">Reliance Petrol Pump</td>
                                        <td>Cash</td>
                                        <td class="f-w-700 text-danger">1,200.00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addExpenseModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02 Jan 2026</td>
                                        <td><span class="badge badge-light-primary">Salary</span></td>
                                        <td class="f-w-600">Dipesh Chavda (Delivery Boy)</td>
                                        <td>UPI</td>
                                        <td class="f-w-700 text-danger">8,500.00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addExpenseModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01 Jan 2026</td>
                                        <td><span class="badge badge-light-info">Rent</span></td>
                                        <td class="f-w-600">Property Owner Name</td>
                                        <td>Cheque</td>
                                        <td class="f-w-700 text-danger">15,000.00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addExpenseModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
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

    <!-- Modal: Add/Update Expense -->
    <div class="modal fade bd-example-modal-xl" id="addExpenseModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Expense</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Expense Date</label>
                                    <input class="form-control" type="date" value="{{ date('Y-m-d') }}" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Amount (₹)</label>
                                    <input class="form-control border-danger" type="number" step="0.01" placeholder="0.00"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Paid To / Payee Name</label>
                                    <input class="form-control" type="text"
                                        placeholder="e.g. Landlord name, Petrol Pump, Staff Name" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" required="">
                                        <option value="">Select Category...</option>
                                        <option>Fuel</option>
                                        <option>Vehicle Maintenance</option>
                                        <option>Salary / Wages</option>
                                        <option>Office Rent</option>
                                        <option>Electricity / Water</option>
                                        <option>Stationery & Packing</option>
                                        <option>Misc</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Payment Mode</label>
                                    <select class="form-select" required="">
                                        <option value="Cash">Cash</option>
                                        <option value="UPI">UPI / GPay</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                        <option value="Cheque">Cheque</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Upload Bill/Receipt (Optional)</label>
                                    <input class="form-control" type="file" accept="image/*">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Remarks / Purpose</label>
                                    <textarea class="form-control" rows="2"
                                        placeholder="Describe the reason for expense"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer mt-3">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                    <button class="btn btn-success"><i class="fa fa-save me-2"></i> UPDATE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Delete Confirmation -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img src="{{ asset('assets/images/gif/danger.gif') }}" alt="error"></li>
                        </ul>
                        <h4 class="text-center pb-2">Alert! Expense Delete.</h4>
                        <p class="text-center">You can not retrive deleted expense again.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mx-2" type="button">Delete</button>
                            <button class="btn btn-secondary mx-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection