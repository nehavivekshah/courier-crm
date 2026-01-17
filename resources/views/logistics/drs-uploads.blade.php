@extends('layouts.app')

@section('title', 'DRS Uploads - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>DRS Uploads</h4>
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
                        <li class="breadcrumb-item active">DRS Upload</li>
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
                        <h5>DRS Records</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#uploadDrsModal">
                            <i class="fa fa-upload me-2"></i>Upload DRS
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
                                        <label class="form-label">From Date</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">To Date</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Delivery Person</label>
                                        <select class="form-select">
                                            <option value="">All Personnel</option>
                                            <option>DIPESH CHAVDA</option>
                                            <option>CHINTAN PATEL</option>
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
                                        <th>Upload Date</th>
                                        <th>DRS Date</th>
                                        <th>Delivery Person</th>
                                        <th>Scan Preview</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>31 Dec 2024, 10:15 AM</td>
                                        <td class="f-w-600">30 Dec 2024</td>
                                        <td>DIPESH CHAVDA</td>
                                        <td>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#imagePreviewModal">
                                                <span class="small"><i class="fa fa-search-plus"></i> View</span>
                                            </a>
                                        </td>
                                        <td>All parcels delivered, 1 cash collected.</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#uploadDrsModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29 Dec 2024, 06:45 PM</td>
                                        <td class="f-w-600">28 Dec 2024</td>
                                        <td>CHINTAN PATEL</td>
                                        <td>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#imagePreviewModal">
                                                <span class="small"><i class="fa fa-search-plus"></i> View</span>
                                            </a>
                                        </td>
                                        <td>2 parcels returned (Address not found).</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#uploadDrsModal" class="bg-warning-light"><i
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

    <!-- Modal: Upload DRS -->
    <div class="modal fade bd-example-modal-xl" id="uploadDrsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload DRS Scan</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">DRS Date</label>
                                    <input class="form-control" type="date" required="">
                                    <div class="invalid-feedback">Please select the date mentioned on the sheet.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Delivery Person</label>
                                    <select class="form-select" required="">
                                        <option value="">Select Staff...</option>
                                        <option>DIPESH CHAVDA</option>
                                        <option>CHINTAN PATEL</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Select Scan File (JPG/PNG/PDF)</label>
                                    <input class="form-control" type="file" accept="image/*,.pdf" required="">
                                    <small class="text-muted">Max file size: 5MB. Clear photos are recommended.</small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Closing Remarks / Notes</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="e.g. Note any undelivered items or cash collection discrepancies..."></textarea>
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
                        <h4 class="text-center pb-2">Alert! DRS Delete.</h4>
                        <p class="text-center">You can not retrive deleted DRS again.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mx-2" type="button">Delete</button>
                            <button class="btn btn-secondary mx-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Image Preview -->
    <div class="modal fade" id="imagePreviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-header border-0 p-0 mb-2">
                    <h5 class="modal-title text-white">DRS Scan Preview</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center">
                    <img src="{{ asset('assets/images/dashboard/widget-bg.png') }}" class="img-fluid rounded shadow-lg"
                        style="max-height: 85vh;" alt="Full DRS Preview">
                </div>
                <div class="modal-footer mt-3">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                    <button class="btn btn-success"><i class="fa fa-print me-2"></i> PRINT</button>
                </div>
            </div>
        </div>
    </div>
@endsection