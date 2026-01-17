@extends('layouts.app')

@section('title', 'Barcode Inventory - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Barcode Inventory</h4>
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
                        <li class="breadcrumb-item active">Barcodes</li>
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
                        <h5>Barcode Series</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#addBarcodeModal">
                            <i class="fa fa-plus me-2"></i>Add New Series
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Carrier Name</th>
                                        <th>Prefix</th>
                                        <th>Start Series</th>
                                        <th>End Series</th>
                                        <th>Total Qty</th>
                                        <th>Used</th>
                                        <th>Available</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="f-w-600">DTDC Courier</td>
                                        <td>D</td>
                                        <td>1458788000</td>
                                        <td>1458788999</td>
                                        <td>1000</td>
                                        <td>450</td>
                                        <td><span class="text-success f-w-600">550</span></td>
                                        <td><span class="badge badge-light-success">Active</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addBarcodeModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f-w-600">Trackon Courier</td>
                                        <td>T</td>
                                        <td>9856321000</td>
                                        <td>9856321100</td>
                                        <td>100</td>
                                        <td>85</td>
                                        <td><span class="text-danger f-w-600">15</span></td>
                                        <td><span class="badge badge-light-warning">Low Stock</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addBarcodeModal" class="bg-warning-light"><i
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

    <!-- Modal: Add/Update Barcode -->
    <div class="modal fade bd-example-modal-xl" id="addBarcodeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Barcode</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Select Carrier</label>
                                    <select class="form-select" required="">
                                        <option value="">Select Carrier...</option>
                                        <option>DTDC</option>
                                        <option>Trackon</option>
                                        <option>Aramax</option>
                                        <option>Professional</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Prefix (if any)</label>
                                    <input class="form-control text-uppercase" type="text" placeholder="e.g. D">
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Suffix (if any)</label>
                                    <input class="form-control text-uppercase" type="text" placeholder="e.g. IN">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Start Number</label>
                                    <input class="form-control" type="number" placeholder="00001" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">End Number</label>
                                    <input class="form-control" type="number" placeholder="00500" required="">
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-light-primary">
                                        <i class="fa fa-info-circle me-2"></i>
                                        Total barcodes generated will be: <span class="f-w-700" id="totalCalc">0</span>
                                    </div>
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
                        <h4 class="text-center pb-2">Alert! Barcode Delete.</h4>
                        <p class="text-center">You can not retrive deleted Barcode again.</p>
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