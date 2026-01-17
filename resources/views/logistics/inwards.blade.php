@extends('layouts.app')

@section('title', 'Inward Entries - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Inwards</h4>
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
                        <li class="breadcrumb-item">Logistics</li>
                        <li class="breadcrumb-item active">Inwards</li>
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
                        <h5>Inward Entries</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#addInwardModal">
                            <i class="fa fa-plus me-2"></i>Add Inward
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="head-options d-flex gap-2 mb-3">
                            <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse"
                                href="#collapseFilter">
                                <i class="fa fa-filter me-0 me-md-2"></i><span class="d-none d-md-inline">Filter</span>
                            </button>
                            <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#deliveryTeamModal">
                                <i class="fa fa-users me-0 me-md-2"></i><span class="d-none d-md-inline">Delivery
                                    Team</span>
                            </button>
                            <a href="{{ route('logistics.drs.print') }}" target="_blank" class="btn btn-info">
                                <i class="fa fa-print me-0 me-md-2"></i><span class="d-none d-md-inline">Print DRS</span>
                            </a>
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
                                        <label class="form-label">Delivery Person</label>
                                        <select class="form-select">
                                            <option value="">All Staff</option>
                                            <option>DIPESH CHAVDA</option>
                                            <option>CHINTAN PATEL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Route / Area</label>
                                        <select class="form-select">
                                            <option value="">All Areas</option>
                                            <option>Downtown</option>
                                            <option>East Side</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
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
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Inward Date</th>
                                        <th>Barcode / AWB</th>
                                        <th>Receiver Details</th>
                                        <th>Delivery Staff</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>30 Dec 2024</td>
                                        <td class="f-w-600">1616545454</td>
                                        <td>
                                            <strong>Raj Enterprise</strong><br>
                                            <small class="text-muted">9797979797 | MUMBAI</small>
                                        </td>
                                        <td>DIPESH CHAVDA</td>
                                        <td><span class="badge badge-light-primary">In Stock</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addInwardModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25 Dec 2024</td>
                                        <td class="f-w-600">7869500021</td>
                                        <td>
                                            <strong>Global Imports</strong><br>
                                            <small class="text-muted">9898989898 | DELHI</small>
                                        </td>
                                        <td>CHINTAN PATEL</td>
                                        <td><span class="badge badge-light-success">Delivered</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addInwardModal" class="bg-warning-light"><i
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

    <!-- Modal: Add Inward -->
    <div class="modal fade bd-example-modal-xl" id="addInwardModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Inwards - #awb</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Arrival Date</label>
                                    <input class="form-control" type="date" value="{{ date('Y-m-d') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Assigned Staff</label>
                                    <select class="form-select" required>
                                        <option value="">Select Delivery Person...</option>
                                        <option>DIPESH CHAVDA</option>
                                        <option>CHINTAN PATEL</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Scan Barcode / AWB</label>
                                    <input class="form-control f-w-700 border-primary" type="text"
                                        placeholder="Scan here..." required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Receiver Name</label>
                                    <input class="form-control" type="text" placeholder="Optional">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Area / Route</label>
                                    <input class="form-control" type="text" placeholder="e.g. Sector 5">
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
                        <h4 class="text-center pb-2">Alert! Receiver Delete.</h4>
                        <p class="text-center">You can not retrive deleted receiver again.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mx-2" type="button">Delete</button>
                            <button class="btn btn-secondary mx-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Delivery Team -->
    <div class="modal fade" id="deliveryTeamModal" tabindex="-1" role="dialog" aria-labelledby="deliveryTeamModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Manage Delivery Team</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2 mb-4">
                        <div class="col-8">
                            <input class="form-control" type="text" placeholder="New staff name" required>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" type="submit">Add</button>
                        </div>
                    </form>
                    <h6 class="mb-3">Current Staff Members</h6>
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            DIPESH CHAVDA
                            <a href="#" class="text-danger"><i class="icofont icofont-ui-delete"></i></a>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            CHINTAN PATEL
                            <a href="#" class="text-danger"><i class="icofont icofont-ui-delete"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection