@extends('layouts.app')

@section('title', 'Complaints - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Complaints Logs</h4>
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
                        <li class="breadcrumb-item active">Complaints</li>
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
                        <h5>Complaint Logs</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#complaintModal">
                            <i class="fa fa-plus me-2"></i>Log New Complaint
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
                                        <label class="form-label">Priority</label>
                                        <select class="form-select">
                                            <option value="">All Priorities</option>
                                            <option class="text-danger">Urgent / High</option>
                                            <option class="text-warning">Medium</option>
                                            <option class="text-info">Low</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Nature of Issue</label>
                                        <select class="form-select">
                                            <option value="">All Types</option>
                                            <option>Damaged Goods</option>
                                            <option>Lost Shipment</option>
                                            <option>Billing Error</option>
                                            <option>Staff Misbehavior</option>
                                            <option>Delay in Delivery</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Search Client / AWB</label>
                                        <input class="form-control" type="text"
                                            placeholder="AWB No., Phone, or Client Name">
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
                                        <th>Ticket ID</th>
                                        <th>Date Logged</th>
                                        <th>Client / Customer</th>
                                        <th>Subject / AWB</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="f-w-600">#CMP-5012</span></td>
                                        <td>04 Jan 2026</td>
                                        <td>Win Enterprise <br><small class="text-muted">9876543210</small></td>
                                        <td>Parcel Damaged <br><small>AWB: DT4587889674</small></td>
                                        <td><span class="text-danger f-w-700 font-roboto"><i
                                                    class="icofont icofont-brand-designbump"></i> URGENT</span>
                                        </td>
                                        <td><span class="badge badge-light-danger">Open</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#complaintModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="f-w-600">#CMP-5008</span></td>
                                        <td>02 Jan 2026</td>
                                        <td>Ravi Kumar</td>
                                        <td>Lost Shipment <br><small>AWB: T985632145</small></td>
                                        <td><span class="text-warning f-w-700 font-roboto"><i
                                                    class="icofont icofont-brand-designbump"></i> HIGH</span></td>
                                        <td><span class="badge badge-light-warning">In-Progress</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#complaintModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="f-w-600">#CMP-4995</span></td>
                                        <td>28 Dec 2025</td>
                                        <td>Global Exports Inc.</td>
                                        <td>Incorrect Billing <br><small>Inv #AB/..813</small></td>
                                        <td><span class="text-info f-w-700 font-roboto"><i
                                                    class="icofont icofont-brand-designbump"></i> MEDIUM</span></td>
                                        <td><span class="badge badge-light-success">Resolved</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#complaintModal" class="bg-warning-light"><i
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

    <!-- Modal: Log Complaint -->
    <div class="modal fade bd-example-modal-xl" id="complaintModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Complaint</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Client / Customer Name</label>
                                    <input class="form-control" type="text" placeholder="Search or enter name" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Associated AWB / Bill No</label>
                                    <input class="form-control" type="text" placeholder="e.g. DT123456789">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nature of Complaint</label>
                                    <select class="form-select" required="">
                                        <option value="Damage">Damaged Goods</option>
                                        <option value="Lost">Lost / Missing Parcel</option>
                                        <option value="Billing">Billing / Payment Issue</option>
                                        <option value="Delay">Delay in Delivery</option>
                                        <option value="Behavior">Staff / Rider Behavior</option>
                                        <option value="Misc">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Priority Level</label>
                                    <select class="form-select">
                                        <option value="Urgent">URGENT (Parcel Damaged/Lost)</option>
                                        <option value="High">HIGH (Significant Delay)</option>
                                        <option value="Medium" selected>MEDIUM (General Query)</option>
                                        <option value="Low">LOW</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Detailed Complaint Description</label>
                                    <textarea class="form-control" rows="4"
                                        placeholder="Enter exactly what the customer reported..." required=""></textarea>
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-2">
                                </div>
                                <!-- Internal Actions -->
                                <div class="col-md-6">
                                    <label class="form-label f-w-600">Current Status</label>
                                    <select class="form-select">
                                        <option value="Open">Open (Pending Action)</option>
                                        <option value="Investigating">Investigating</option>
                                        <option value="Escalated">Escalated to Manager</option>
                                        <option value="Resolved">Resolved</option>
                                        <option value="Rejected">Rejected / Closed</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Resolution Attachment (e.g. Proof)</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="col-12">
                                    <label class="form-label f-w-600">Resolution Summary / Internal Notes</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Steps taken to resolve this complaint..."></textarea>
                                    <small class="text-muted">This log is vital for service quality audits.</small>
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
                        <h4 class="text-center pb-2">Alert! Complaint Delete.</h4>
                        <p class="text-center">You can not retrive deleted complaint again.</p>
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