@extends('layouts.app')

@section('title', 'Clients - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Clients</h4>
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
                        <li class="breadcrumb-item active">Clients</li>
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
                        <h4>Client List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#clientModal">
                            <i class="fa fa-plus me-2"></i>Add New Client
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact Person</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>GST No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="f-w-600">Global Exports Inc.</td>
                                        <td>Ms. Priya</td>
                                        <td>8765432109</td>
                                        <td>priya@globalexports.com</td>
                                        <td>Mumbai</td>
                                        <td>27ABCDE1234F1Z5</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#clientModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f-w-600">Wings Tech</td>
                                        <td>Mr. Sharma</td>
                                        <td>9876543210</td>
                                        <td>sharma@wingstech.com</td>
                                        <td>Delhi</td>
                                        <td>07AAACW1234A1Z1</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#clientModal" class="bg-warning-light"><i
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

    <!-- Modal: Client Add/Edit -->
    <div class="modal fade bd-example-modal-xl" id="clientModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Client - #client</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="">
                        <div class="modal-body pb-0">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Client / Company Name</label>
                                    <input class="form-control" type="text" placeholder="e.g. Global Exports Inc."
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Contact Person</label>
                                    <input class="form-control" type="text" placeholder="e.g. Ms. Priya">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Full Address</label>
                                    <textarea class="form-control" rows="2" placeholder="Street, Building, Area"
                                        required=""></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">City</label>
                                    <input class="form-control" type="text" placeholder="Mumbai" required="">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                    <input class="form-control" type="tel" placeholder="9876543210" required="">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" placeholder="contact@example.com">
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-2">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label f-w-600">Fuel Charge (%)</label>
                                    <input class="form-control" type="number" step="0.01" value="10.00">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label f-w-600">FCV Charge (%)</label>
                                    <input class="form-control" type="number" step="0.01" value="0.02">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label f-w-600">Partial Value (%)</label>
                                    <input class="form-control" type="number" step="0.01" value="0.02">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">GST Type</label>
                                    <div class="d-flex gap-3 pt-2">
                                        <div class="form-check radio radio-primary">
                                            <input class="form-check-input" id="gst1" type="radio" name="gstType"
                                                value="gst" checked>
                                            <label class="form-check-label" for="gst1">GST</label>
                                        </div>
                                        <div class="form-check radio radio-primary">
                                            <input class="form-check-input" id="gst2" type="radio" name="gstType"
                                                value="non-gst">
                                            <label class="form-check-label" for="gst2">Non-GST</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">GST Number</label>
                                    <input class="form-control" type="text" placeholder="27ABCDE1234F1Z5">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Default Carrier</label>
                                    <select class="form-select">
                                        <option>DTDC</option>
                                        <option>Trackon</option>
                                        <option>Aramax</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-2">
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
                        <h4 class="text-center pb-2">Alert! Client Delete.</h4>
                        <p class="text-center">You can not retrive deleted client again.</p>
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