@extends('layouts.app')

@section('title', 'Receivers - Courier Management System')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Receivers</h4>
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
                        <li class="breadcrumb-item active">Receivers</li>
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
                        <h4>All Receivers</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#receiverModal">
                            <i class="fa fa-plus me-2"></i>Add New Receiver
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Receiver Name</th>
                                        <th>Phone Number</th>
                                        <th>Full Address</th>
                                        <th>Associated Client</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="f-w-600">John Doe</td>
                                        <td>9988776655</td>
                                        <td class="text-truncate" style="max-width: 250px;">12B, Karol Bagh, Delhi - 110005
                                        </td>
                                        <td><span class="badge badge-light-primary">Wings Tech</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#receiverModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f-w-600">Global Imports Ltd.</td>
                                        <td>+1-555-0199</td>
                                        <td class="text-truncate" style="max-width: 250px;">5th Avenue, New York, USA, 10001
                                        </td>
                                        <td><span class="badge badge-light-primary">Global Exports Inc.</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#receiverModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f-w-600">Priya Singh</td>
                                        <td>8877665544</td>
                                        <td class="text-truncate" style="max-width: 250px;">78, MG Road, Bangalore - 560001
                                        </td>
                                        <td><span class="badge badge-light-secondary">Walk-in Cash</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#receiverModal" class="bg-warning-light"><i
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

    <!-- Modal: Receiver Update -->
    <div class="modal fade bd-example-modal-xl" id="receiverModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Receiver - #receiver</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="needs-validation" novalidate="">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Receiver Name</label>
                                    <input class="form-control" type="text" placeholder="Enter receiver's name" required="">
                                    <div class="invalid-feedback">Please enter a name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input class="form-control" type="tel" placeholder="e.g. 9876543210" required="">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Full Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Street, City, State, ZIP Code"
                                        required=""></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Associate with Client</label>
                                    <select class="form-select">
                                        <option selected value="">None (General Receiver)</option>
                                        <option>Wings Tech</option>
                                        <option>Global Exports Inc.</option>
                                        <option>Keshav Bhai</option>
                                    </select>
                                    <small class="text-muted">Linking helps in auto-filling during booking.</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Area / Landmark</label>
                                    <input class="form-control" type="text" placeholder="e.g. Near Metro Station">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Special Delivery Notes</label>
                                    <textarea class="form-control" rows="2"
                                        placeholder="e.g. Deliver only between 10 AM to 4 PM"></textarea>
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
@endsection