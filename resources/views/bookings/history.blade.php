@extends('layouts.app')

@section('title', 'Booking History - Courier Management System')

@push('styles')
    <style>
        div .action .print {
            margin-right: 5px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row g-0">
                <div class="col-4">
                    <h4>Bookings</h4>
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
                        <li class="breadcrumb-item active">Bookings</li>
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
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>AWB #</th>
                                        <th>Client (Sender)</th>
                                        <th>Receiver</th>
                                        <th>Destination</th>
                                        <th>Carrier</th>
                                        <th>Type</th>
                                        <th>Amount (₹)</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample Data -->
                                    <tr>
                                        <td>30 Dec 2024</td>
                                        <td class="f-w-600">DT4587889674</td>
                                        <td>Win enterprise</td>
                                        <td>Raj enterprise</td>
                                        <td>MUMBAI</td>
                                        <td>DTDC</td>
                                        <td>SURFACE</td>
                                        <td>177.00</td>
                                        <td><span class="badge rounded-pill badge-light-success">Delivered</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="print"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#printBookingModal" class="bg-primary-light"><i
                                                            class="icofont icofont-printer text-primary"></i></a></li>
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editBookingModal" class="bg-warning-light"><i
                                                            class="icofont icofont-edit text-warning"></i></a></li>
                                                <li class="delete"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i
                                                            class="icofont icofont-ui-delete text-danger"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29 Dec 2024</td>
                                        <td class="f-w-600">T5412879965</td>
                                        <td>Global Exports Inc.</td>
                                        <td>ABC Corp</td>
                                        <td>DELHI</td>
                                        <td>Trackon</td>
                                        <td>AIR</td>
                                        <td>450.00</td>
                                        <td><span class="badge rounded-pill badge-light-info">In Transit</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="print"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#printBookingModal" class="bg-primary-light"><i
                                                            class="icofont icofont-printer text-primary"></i></a></li>
                                                <li class="edit"> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editBookingModal" class="bg-warning-light"><i
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

    <!-- Delete Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img src="{{ asset('assets/images/gif/danger.gif') }}" alt="error"></li>
                        </ul>
                        <h4 class="text-center pb-2">Alert! Booking Delete.</h4>
                        <p class="text-center">You can not retrive deleted booking again.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mx-2" type="button">Delete</button>
                            <button class="btn btn-secondary mx-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Print Modal -->
    <div class="modal fade bd-example-modal-xl" id="printBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Print Consignment Note</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal" style="overflow-x: auto; background: #eee; padding: 20px;">
                    <style>
                        .memo-fixed-wrapper {
                            width: 1100px;
                            margin: 0 auto;
                            background: #fff;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }

                        .memo-container {
                            width: 100%;
                            border: 2px solid #333;
                            font-family: 'Arial', sans-serif;
                            color: #000;
                            font-size: 13px;
                        }

                        .memo-container table {
                            width: 100%;
                            border-collapse: collapse;
                            table-layout: fixed;
                        }

                        .memo-container td,
                        .memo-container th {
                            border: 1px solid #333;
                            padding: 8px;
                            vertical-align: top;
                        }

                        .vertical-text {
                            writing-mode: vertical-rl;
                            transform: rotate(180deg);
                            text-align: center;
                            font-weight: bold;
                            background: #f0f0f0;
                            text-transform: uppercase;
                        }

                        .memo-header-logo {
                            font-size: 36px;
                            font-weight: 900;
                            color: #b30000;
                            display: flex;
                            align-items: center;
                        }

                        .memo-header-logo span {
                            color: #000;
                            margin-left: 5px;
                            font-weight: normal;
                            font-style: italic;
                        }

                        .sub-header-label {
                            font-size: 11px;
                            font-weight: bold;
                            display: block;
                            text-align: center;
                            border-bottom: 1px solid #333;
                            background: #eee;
                        }

                        .data-val {
                            display: block;
                            text-align: center;
                            font-weight: bold;
                            padding: 5px 0;
                            font-size: 14px;
                        }

                        .barcode-placeholder {
                            font-size: 45px;
                            line-height: 1;
                            letter-spacing: 3px;
                            text-align: center;
                        }

                        .memo-fixed-wrapper table th:last-child,
                        .memo-fixed-wrapper table td:last-child {
                            position: relative !important;
                            right: 0;
                            background: #fff;
                        }

                        @media print {

                            .modal-footer,
                            .btn-close,
                            .modal-header {
                                display: none !important;
                            }

                            .memo-fixed-wrapper {
                                width: 100%;
                                box-shadow: none;
                                margin: 0;
                            }

                            .memo-container {
                                border: 1px solid #000;
                            }

                            @page {
                                size: landscape;
                                margin: 0.5cm;
                            }
                        }
                    </style>

                    <div class="memo-fixed-wrapper">
                        <div class="memo-container">
                            <!-- Invoice Content Scaffolding -->
                            <table>
                                <tr>
                                    <td rowspan="2" class="vertical-text" style="width: 40px;">CASH MEMO</td>
                                    <td colspan="2" style="width: 280px;">
                                        <div class="memo-header-logo">AB <span>EXPRESS</span></div>
                                        <div style="font-size: 13px; font-weight: bold;">GST No. - 24AGVDF968Y2ZG</div>
                                    </td>
                                    <td colspan="5" style="border: none; padding: 0;">
                                        <div
                                            style="padding: 5px; font-size: 11px; text-align: center; border-bottom: 1px solid #333;">
                                            Cash, Gold, Silver, Diamond & Liquid are not accepted by us.<br>
                                            <small>NOTE: CONSIGNMENT ISSUED BY FRANCHISEE</small>
                                        </div>
                                        <table style="border: none;">
                                            <tr>
                                                <td
                                                    style="width: 25%; border-left: none; border-top: none; border-bottom: none;">
                                                    <span class="sub-header-label">ORIGIN</span><span
                                                        class="data-val">MUMBAI</span>
                                                </td>
                                                <td style="width: 25%; border-top: none; border-bottom: none;"><span
                                                        class="sub-header-label">DESTINATION</span><span
                                                        class="data-val">AHMEDABAD</span></td>
                                                <td style="width: 25%; border-top: none; border-bottom: none;"><span
                                                        class="sub-header-label">DATE AND TIME</span><span
                                                        class="data-val">08/01/2026 06:15 PM</span></td>
                                                <td
                                                    style="width: 25%; border-right: none; border-top: none; border-bottom: none;">
                                                    <span class="sub-header-label">CARRIER</span><span
                                                        class="data-val">DTDC</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2" style="width: 220px; vertical-align: middle;">
                                        <div class="barcode-placeholder">|||||||||||||</div>
                                        <div style="text-align: center; font-weight: bold; font-size: 14px;">DT4587889674
                                        </div>
                                    </td>
                                </tr>
                                <!-- More invoice structure here -->
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="window.print();">Print Memo</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade bd-example-modal-xl" id="editBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Booking - AWB123456</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                    <form class="theme-form">
                        <!-- Edit form content here, migrated from template -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <h6 class="mb-3 border-bottom pb-2">Booking Type</h6>
                                <!-- ... -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer mt-3">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Discard Changes</button>
                    <button class="btn btn-success"><i class="fa fa-save me-2"></i> UPDATE BOOKING</button>
                </div>
            </div>
        </div>
    </div>
@endsection