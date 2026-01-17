@extends('layouts.app')

@section('title', 'Rates - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>System Configuration</h4>
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
                        <li class="breadcrumb-item">System Config</li>
                        <li class="breadcrumb-item active">Rates</li>
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
                        <h4>Rate Card</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#UpdateModal">
                            <i class="fa fa-plus me-2"></i>Add New Rate
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Carrier</th>
                                        <th>Zone</th>
                                        <th>Mode</th>
                                        <th>Type</th>
                                        <th>Weight Range (g)</th>
                                        <th>Rate</th>
                                        <th>Add. Rate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="f-w-600">DTDC</td>
                                        <td>Zone A</td>
                                        <td><span class="badge badge-light-primary">Surface</span></td>
                                        <td>Document</td>
                                        <td>0 - 500</td>
                                        <td>₹ 40.00</td>
                                        <td>₹ 30.00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#UpdateModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f-w-600">Trackon</td>
                                        <td>Mumbai Metro</td>
                                        <td><span class="badge badge-light-warning">Air</span></td>
                                        <td>Others</td>
                                        <td>0 - 1000</td>
                                        <td>₹ 120.00</td>
                                        <td>₹ 80.00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#UpdateModal" class="bg-warning-light"><i
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

    <!-- Modal: Add/Update Rate -->
    <div class="modal fade bd-example-modal-lg" id="UpdateModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Rate Configuration</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Carrier</label>
                                <select class="form-select" required="">
                                    <option selected disabled value="">Choose Carrier...</option>
                                    <option>DTDC</option>
                                    <option>Trackon</option>
                                    <option>Aramax</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Zone</label>
                                <input class="form-control" type="text" placeholder="e.g. Zone A or Mumbai Metro"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mode</label>
                                <select class="form-select" required="">
                                    <option>Surface</option>
                                    <option>Air</option>
                                    <option>Cargo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Parcel Type</label>
                                <select class="form-select" required="">
                                    <option>Document</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Weight From (g)</label>
                                <input class="form-control" type="number" placeholder="0" required="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Weight To (g)</label>
                                <input class="form-control" type="number" placeholder="500" required="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Base Rate (₹)</label>
                                <input class="form-control" type="number" step="0.01" placeholder="0.00" required="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Add. Wt. Rate (₹)</label>
                                <input class="form-control" type="number" step="0.01" placeholder="0.00" required="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                    <button class="btn btn-success"><i class="fa fa-save me-2"></i> SAVE RATE</button>
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
                        <h4 class="text-center pb-2">Alert! Delete.</h4>
                        <p class="text-center">You can not retrive deleted data again.</p>
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