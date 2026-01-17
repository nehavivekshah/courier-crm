<?php require 'includes/main-header.php' ?>
<style>
    .recent-bookings .list-group{
    max-height:60vh;
}
.card.booking-form .card-body{
    min-height:57vh;
}
        .card.booking-form .shipping-options .cart-options-content i{
            display:none;
        }
    .radio-wrapper li .form-check-input {
        border-style: dashed;
        border-color: #006666;
        border-radius: 5px;
    }
    .radio-wrapper li .form-check-label i {
        color: #006666;
    }
    .billing-form-wrapper label {
        font-weight: 500;
        color: #444;
    }
    .net-amount-label {
        color: #d22d3d;
        font-weight: 700;
        font-size: 1.1rem;
    }
    span.twitter-typeahead {
        width: 90%;
    }
    .theme-form input[type=text] {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .list-light-primary:hover {
        border: var(--bs-border-width) solid var(--bs-border-color);
    }
    @media (max-width:768px){
        .recent-bookings .list-group{
    max-height:auto;
}
.card.booking-form .card-body{
    min-height:auto;
}
.page-wrapper .page-body-wrapper .card.recent-bookings{
    margin-top:15px;
    margin-bottom:15px;
}
        .card.booking-form .shopping-wizard .shipping-form .shipping-options{
            flex-direction:row;
        }
        .card.booking-form .shipping-options .cart-options-content{
            display:none;
        }
        .card.booking-form .shipping-options .cart-options-content h6{
            display:none;
        }
        .card.booking-form .shipping-options .nav-link.active .cart-options-content{
            display:flex;
        }
        .card.booking-form .shipping-options .nav-link.active .cart-options-content i{
            display:flex;
            width:20px;
        }
        .card.booking-form .radio-wrapper li{
            max-width:102px;
            padding:8px;
            text-align:left;
            justify-content:start;
        }
        .card.booking-form .select-customer-mode .radio-wrapper li{
            max-width:108px;
        }
    }
</style>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php require 'includes/page-header.php' ?>
    <div class="page-body-wrapper">
        <?php require 'includes/sidebar.php' ?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row g-0">
                        <div class="col-4">
                            <h4>Bookings</h4>
                        </div>
                        <div class="col-8">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <svg class="stroke-icon">
                                            <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Bookings</li>
                                <li class="breadcrumb-item active">Add New</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-md-12">
                        <div class="card booking-form">
                            <div class="card-header">
                                <h4>Create New Booking</h4>
                                <p class="f-m-light mt-1">Please follow the steps and fill out the details.</p>
                            </div>
                            <div class="card-body">
                                <div class="shopping-wizard g-5">
                                    <div class="shipping-form">
                                        <div class="nav nav-pills horizontal-options shipping-options"
                                            id="booking-wizard-tab" role="tablist">
                                            <a class="nav-link active" id="step-setup-tab" data-bs-toggle="pill"
                                                href="#step-setup" role="tab">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-cog"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Select Type</h6>
                                                        <i class="fa fa-long-arrow-right bg-transparent"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="step-contacts-tab" data-bs-toggle="pill"
                                                href="#step-contacts" role="tab">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>S/R Details</h6>
                                                        <i class="fa fa-long-arrow-right bg-transparent"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="step-parcel-tab" data-bs-toggle="pill"
                                                href="#step-parcel" role="tab">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-cube"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Logistic Details</h6>
                                                        <i class="fa fa-long-arrow-right bg-transparent"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="step-billing-tab" data-bs-toggle="pill"
                                                href="#step-billing" role="tab">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-calculator"></i>
                                                    </div>
                                                    <div class="cart-options-content">
                                                        <h6>Billing</h6>
                                                        <i class="fa fa-check bg-transparent"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tab-content dark-field shipping-content" id="booking-wizard-content">
                                            <div class="tab-pane fade show active" id="step-setup" role="tabpanel">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <h6 class="mb-3">Booking Type</h6>
                                                        <div class="form-check radio radio-primary ps-0 select-booking-type">
                                                            <ul class="radio-wrapper justify-content-start">
                                                                <li>
                                                                    <input class="form-check-input" id="typeSurface"
                                                                        type="radio" name="booking_type" value="Surface"
                                                                        checked>
                                                                    <label class="form-check-label mb-0"
                                                                        for="typeSurface"><i
                                                                            class="fa fa-truck"></i><span>Surface</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="typeAir"
                                                                        type="radio" name="booking_type" value="Air">
                                                                    <label class="form-check-label mb-0"
                                                                        for="typeAir"><i
                                                                            class="fa fa-plane"></i><span>Air</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="typeCargo"
                                                                        type="radio" name="booking_type" value="Cargo">
                                                                    <label class="form-check-label mb-0"
                                                                        for="typeCargo"><i
                                                                            class="fa fa-ship"></i><span>Cargo</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="mb-3">Customer Mode</h6>
                                                        <div class="form-check radio radio-primary ps-0 select-customer-mode">
                                                            <ul class="radio-wrapper justify-content-start">
                                                                <li>
                                                                    <input class="form-check-input" id="modeAccount"
                                                                        type="radio" name="customer_mode"
                                                                        value="Account">
                                                                    <label class="form-check-label mb-0"
                                                                        for="modeAccount"><i
                                                                            class="fa fa-university"></i><span>Account</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="modeCash"
                                                                        type="radio" name="customer_mode" value="Cash"
                                                                        checked>
                                                                    <label class="form-check-label mb-0"
                                                                        for="modeCash"><i
                                                                            class="fa fa-money"></i><span>Cash</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-end mt-4">
                                                        <button class="btn btn-primary next-step">Proceed to S/R Details
                                                            <i class="fa fa-arrow-right ms-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="step-contacts" role="tabpanel">
                                                <div class="row g-3">
                                                    <div class="col-md-6 typeahead typeahead-wrapper">
                                                        <div class="bg-primary-light rounded p-3 h-100">
                                                            <h6 class="mb-3">Sender Information</h6>
                                                            <div id="sender-account-group" class="theme-form"
                                                                style="display:none;">
                                                                <div id="client-search-box">
                                                                    <label class="form-label">Search Client</label>
                                                                    <div class="input-group">
                                                                        <input class="typeahead form-control" type="text"
                                                                            placeholder="Search Client Code or Name...">
                                                                        <span class="input-group-text list-light-primary"
                                                                            id="btn-add-client-fields"
                                                                            style="cursor:pointer;">
                                                                            <i
                                                                                class="icofont icofont-ui-add txt-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div id="client-manual-fields" style="display:none;">
                                                                    <div class="row g-2">
                                                                        <div
                                                                            class="col-12 d-flex justify-content-between align-items-center">
                                                                            <label class="form-label mb-0">Client
                                                                                Details</label>
                                                                            <button type="button"
                                                                                class="btn btn-xs btn-light-secondary"
                                                                                id="btn-back-to-search"><i
                                                                                    class="fa fa-search me-1"></i>Search
                                                                                instead</button>
                                                                        </div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Client Name</label><input
                                                                                type="text" class="form-control mb-2"></div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Client
                                                                                Mobile</label><input type="tel"
                                                                                class="form-control mb-2"></div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Client Proof ID</label>
                                                                            <select class="form-select mb-2">
                                                                                <option>Aadhar Card</option>
                                                                                <option>PAN Card</option>
                                                                                <option>Driving License</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6"><label class="form-label">ID
                                                                                Number</label><input type="text"
                                                                                class="form-control mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="sender-cash-group">
                                                                <div class="row g-2">
                                                                    <div class="col-md-6"><label class="form-label">Sender
                                                                            Name</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Sender
                                                                            Mobile</label><input type="tel"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Sender
                                                                            Proof ID</label>
                                                                        <select class="form-select mb-2">
                                                                            <option>Aadhar Card</option>
                                                                            <option>PAN Card</option>
                                                                            <option>Driving License</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6"><label class="form-label">ID
                                                                            Number</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="bg-primary-light rounded p-3 h-100">
                                                            <h6 class="mb-3">Receiver Information</h6>
                                                            <div id="receiver-account-group" class="theme-form"
                                                                style="display:none;">
                                                                <div id="receiver-search-box">
                                                                    <label class="form-label">Search Receiver</label>
                                                                    <div class="input-group">
                                                                        <input class="typeahead form-control" type="text"
                                                                            placeholder="Search Receiver Code or Name...">
                                                                        <span class="input-group-text list-light-primary"
                                                                            id="btn-add-receiver-fields"
                                                                            style="cursor:pointer;">
                                                                            <i
                                                                                class="icofont icofont-ui-add txt-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div id="receiver-manual-fields" style="display:none;">
                                                                    <div class="row g-2">
                                                                        <div
                                                                            class="col-12 d-flex justify-content-between align-items-center">
                                                                            <label class="form-label mb-0">Receiver
                                                                                Details</label>
                                                                            <button type="button"
                                                                                class="btn btn-xs btn-light-secondary"
                                                                                id="btn-back-to-receiver-search">
                                                                                <i class="fa fa-search me-1"></i>Search
                                                                                instead
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Receiver
                                                                                Name</label><input type="text"
                                                                                class="form-control mb-2"></div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Receiver
                                                                                Mobile</label><input type="tel"
                                                                                class="form-control mb-2"></div>
                                                                        <div class="col-12"><label
                                                                                class="form-label">Receiver
                                                                                Address</label><input type="text"
                                                                                class="form-control mb-2"></div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Receiver
                                                                                City</label><input type="text"
                                                                                class="form-control mb-2"></div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Receiver
                                                                                Pincode</label><input type="text"
                                                                                class="form-control mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="receiver-cash-group">
                                                                <div class="row g-2">
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            Name</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            Mobile</label><input type="tel"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-12"><label class="form-label">Receiver
                                                                            Address</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            City</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            State</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            Country</label><input type="text"
                                                                            class="form-control mb-2" value="India"></div>
                                                                    <div class="col-md-6"><label class="form-label">Receiver
                                                                            Pincode</label><input type="text"
                                                                            class="form-control mb-2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button class="btn btn-secondary prev-step">Back</button>
                                                        <button class="btn btn-primary next-step">Set Parcel Specs <i
                                                                class="fa fa-arrow-right ms-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="step-parcel" role="tabpanel">
                                                <h6 class="mb-3">Shipping & Package Information</h6>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Carrier</label>
                                                        <select class="form-select">
                                                            <option value="">Select Carrier...</option>
                                                            <option>DTDC</option>
                                                            <option>Trackon</option>
                                                            <option>Professional</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Package Type</label>
                                                        <select class="form-select">
                                                            <option>Document</option>
                                                            <option>Non-Doc / Parcel</option>
                                                            <option>Heavy Weight</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label">Weight (Gm/Kg)</label>
                                                        <input type="number" class="form-control" value="0">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label">No. of Boxes</label>
                                                        <input type="number" class="form-control" value="1">
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Additional Details</label>
                                                        <textarea class="form-control" rows="3"
                                                            placeholder="Enter any specific instructions or details..."></textarea>
                                                    </div>
                                                    <div class="col-12 text-end mt-3">
                                                        <button class="btn btn-secondary prev-step">Back</button>
                                                        <button class="btn btn-primary next-step">Proceed to Billing <i
                                                                class="fa fa-arrow-right ms-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="step-billing" role="tabpanel">
                                                <div class="billing-form-wrapper">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Gross Amount</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Fuel Surcharge</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Insurance</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Doc Charge</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">ODA Charge</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Other Charges</label>
                                                            <input type="number" class="form-control" value="0.00">
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row mx-0 bg-primary-light py-3 rounded">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">Sub Total</label>
                                                                    <input type="number" class="form-control" value="0.00"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="form-label d-block">Apply GST</label>
                                                                    <div class="form-check form-switch pt-1">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="applyGstSwitch" checked>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 gst-field-wrapper">
                                                                    <label class="form-label">CGST</label>
                                                                    <input type="number" class="form-control" value="0.00"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-md-3 gst-field-wrapper">
                                                                    <label class="form-label">SGST</label>
                                                                    <input type="number" class="form-control" value="0.00"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-12 mt-4">
                                                                    <label class="net-amount-label mb-1">Net Amount</label>
                                                                    <input type="text" class="form-control form-control-lg"
                                                                        value="0.00" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 d-flex justify-content-between">
                                                            <button class="btn btn-secondary prev-step">Back</button>
                                                            <button class="btn btn-success px-5 py-2 f-w-700"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalCenter1"><i
                                                                    class="fa fa-check-circle me-2"></i> SAVE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-12">
                        <?php require 'includes/recent-booking.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'includes/page-footer.php' ?>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <ul class="modal-img">
                        <li> <img src="assets/images/gif/dashboard-8/successful.gif" alt="popper"></li>
                    </ul>
                    <h4 class="text-center pb-2">Thank you! Booking is confirmed.</h4>
                    <p class="text-center">An email with booking info sent to you and client.</p>
                    <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
                    .memo-container td, .memo-container th {
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
                    .memo-fixed-wrapper table th:last-child,.memo-fixed-wrapper  table td:last-child {
                        position: relative !important;
                        right: 0;
                        background: #fff;
                    }
                    @media print {
                        .modal-footer, .btn-close, .modal-header { display: none !important; }
                        .memo-fixed-wrapper { width: 100%; box-shadow: none; margin: 0; }
                        .memo-container { border: 1px solid #000; }
                        @page { size: landscape; margin: 0.5cm; }
                    }
                </style>

                <div class="memo-fixed-wrapper">
                    <div class="memo-container">
                        <table>
                            <tr>
                                <td rowspan="2" class="vertical-text" style="width: 40px;">CASH MEMO</td>
                                <td colspan="2" style="width: 280px;">
                                    <div class="memo-header-logo">AB <span>EXPRESS</span></div>
                                    <div style="font-size: 13px; font-weight: bold;">GST No. - 24AGVDF968Y2ZG</div>
                                </td>
                                <td colspan="5" style="border: none; padding: 0;">
                                    <div style="padding: 5px; font-size: 11px; text-align: center; border-bottom: 1px solid #333;">
                                        Cash, Gold, Silver, Diamond & Liquid are not accepted by us.<br>
                                        <small>NOTE: CONSIGNMENT ISSUED BY FRANCHISEE</small>
                                    </div>
                                    <table style="border: none;">
                                        <tr>
                                            <td style="width: 25%; border-left: none; border-top: none; border-bottom: none;"><span class="sub-header-label">ORIGIN</span><span class="data-val">MUMBAI</span></td>
                                            <td style="width: 25%; border-top: none; border-bottom: none;"><span class="sub-header-label">DESTINATION</span><span class="data-val">AHMEDABAD</span></td>
                                            <td style="width: 25%; border-top: none; border-bottom: none;"><span class="sub-header-label">DATE AND TIME</span><span class="data-val">08/01/2026 06:15 PM</span></td>
                                            <td style="width: 25%; border-right: none; border-top: none; border-bottom: none;"><span class="sub-header-label">CARRIER</span><span class="data-val">DTDC</span></td>
                                        </tr>
                                    </table>
                                </td>
                                <td colspan="2" style="width: 220px; vertical-align: middle;">
                                    <div class="barcode-placeholder">|||||||||||||</div>
                                    <div style="text-align: center; font-weight: bold; font-size: 14px;">DT4587889674</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="width: 50%;">
                                    <div style="display: flex;">
                                        <span style="font-weight: bold; margin-right: 15px;">CONSIGNOR</span>
                                        <div>
                                            <strong style="font-size: 15px;">Brooklyn Simmons</strong><br>
                                            <strong style="font-size: 15px;">9876543210</strong><br>
                                            <small>Name/Dept.</small>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="5" style="width: 50%;">
                                    <div style="display: flex;">
                                        <span style="font-weight: bold; margin-right: 15px;">CONSIGNEE</span>
                                        <div>
                                            <strong style="font-size: 15px;">Raj Enterprise</strong><br>
                                            <strong style="font-size: 15px;">88888 77777</strong><br>
                                            <small>2118 Thornridge Cir. Syracuse, Mumbai</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                        <table style="border-top: none;">
                            <tr style="background: #eee; text-align: center; font-weight: bold; font-size: 11px;">
                                <td style="width: 120px;">PACKAGE TYPE</td>
                                <td style="width: 100px;">VALUE</td>
                                <td style="width: 100px;">WEIGHT</td>
                                <td style="width: 80px;">BOXES</td>
                                <td style="width: 100px;">CHARGE</td>
                                <td style="width: 100px;">FR. CHARGE</td>
                                <td style="width: 80px;">INSUR.</td>
                                <td style="width: 90px;">CGST</td>
                                <td style="width: 90px;">SGST</td>
                                <td style="width: 140px;">TOTAL CHARGE</td>
                            </tr>
                            <tr style="text-align: center; font-weight: bold; height: 60px; font-size: 15px; vertical-align: middle;">
                                <td style="text-align: left;">Non-Doc / Parcel</td>
                                <td>-</td>
                                <td>12.50 Kg</td>
                                <td>2</td>
                                <td>1000.00</td>
                                <td>100.00</td>
                                <td>50.00</td>
                                <td>108.00</td>
                                <td>108.00</td>
                                <td style="font-size: 22px;">1416.00</td>
                            </tr>
                        </table>

                        <table style="border-top: none;">
                            <tr>
                                <td colspan="6" style="width: 60%; font-size: 10px; line-height: 1.4;">
                                    1) It is insisted to insure parcels of or above Rs. 500, else AB Express is not responsible for it. 
                                    2) Choose fast track for urgent deliveries. 3) No claims are liable on this receipt. 
                                    4) AB Express is not responsible for any kind of damage to parcel. 
                                    5) In case of any problem, customer is liable to 50% refund. 
                                    6) Address parcel related inquiries to the courier company. 
                                    7) Customer responsible for government issues. 
                                    8) Valid for 30 days. 9) No cash/gold/mobiles.
                                    <br><br><br>
                                    <strong>CONSIGNOR SIGNATURE</strong> ........................................................................
                                    <div style="text-align: right; font-style: italic; font-size: 9px;">I warrant that all details given herein are true and correct</div>
                                </td>
                                <td colspan="4" style="width: 40%; padding: 0;">
                                    <div style="padding: 10px; border-bottom: 1px solid #333; min-height: 60px;">
                                        <strong>REMARK:</strong> Handle with care. Deliver before 6 PM.
                                    </div>
                                    <div style="padding: 10px;">
                                        <strong>CONSIGNEE SIGNATURE & RUBBER STAMP</strong><br><br>
                                        NAME: __________________________ DATE: _____________ <br><br>
                                        <small>Received in good order and condition ..................... A.M./P.M.</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center; vertical-align: middle;">
                                    <strong>TRACK YOUR SHIPMENT ON</strong><br>
                                    <a href="https://dtdc.com" style="color: blue; text-decoration: none; font-weight: bold;">https://dtdc.com</a>
                                </td>
                                <td colspan="4" style="font-size: 10px; line-height: 1.3;">
                                    111 Gold Plaza, 2nd Floor, Opp. Raghuveer Complex, Nr. BOB, 5 Trimurti Estate, N H No 8, AHMEDABAD - 7984461898
                                </td>
                                <td colspan="2" style="text-align: center; vertical-align: middle;">
                                    RECEIVED BY:<br><strong>A B Express</strong>
                                </td>
                                <td class="vertical-text" style="width: 30px; border-bottom: none;">P.T.O.</td>
                            </tr>
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
<div class="modal fade bd-example-modal-xl" id="editBookingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Booking - AWB123456</h4>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
                <form class="theme-form">
                    <!-- SECTION 1: TYPES -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Booking Type</h6>
                            <div class="form-check radio radio-primary ps-0 select-booking-type pt-2">
                                <ul class="radio-wrapper justify-content-start">
                                    <li><input class="form-check-input" id="editTypeSurface" type="radio" name="e_type"
                                            checked><label class="form-check-label mb-0" for="editTypeSurface"><i
                                                class="fa fa-truck"></i><span>Surface</span></label></li>
                                    <li><input class="form-check-input" id="editTypeAir" type="radio"
                                            name="e_type"><label class="form-check-label mb-0" for="editTypeAir"><i
                                                class="fa fa-plane"></i><span>Air</span></label></li>
                                    <li><input class="form-check-input" id="editTypeCargo" type="radio"
                                            name="e_type"><label class="form-check-label mb-0" for="editTypeCargo"><i
                                                class="fa fa-ship"></i><span>Cargo</span></label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Customer Mode</h6>
                            <div class="form-check radio radio-primary ps-0 select-customer-mode pt-2">
                                <ul class="radio-wrapper justify-content-start">
                                    <li><input class="form-check-input" id="editModeAccount" type="radio"
                                            name="e_mode"><label class="form-check-label mb-0" for="editModeAccount"><i
                                                class="fa fa-university"></i><span>Account</span></label></li>
                                    <li><input class="form-check-input" id="editModeCash" type="radio" name="e_mode"
                                            checked><label class="form-check-label mb-0" for="editModeCash"><i
                                                class="fa fa-money"></i><span>Cash</span></label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION 2: S/R DETAILS -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 border-end">
                            <h6 class="mb-3 border-bottom pb-2">Sender Information</h6>
                            <div class="row g-2">
                                <div class="col-md-6"><label class="form-label">Sender Name</label><input type="text"
                                        class="form-control mb-2" value="Brooklyn Simmons"></div>
                                <div class="col-md-6"><label class="form-label">Sender Mobile</label><input type="tel"
                                        class="form-control mb-2" value="9876543210"></div>
                                <div class="col-md-6"><label class="form-label">Proof ID</label><select
                                        class="form-select mb-2">
                                        <option selected>Aadhar Card</option>
                                        <option>PAN Card</option>
                                    </select></div>
                                <div class="col-md-6"><label class="form-label">ID Number</label><input type="text"
                                        class="form-control mb-2" value="1234-5678-9012"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-3 border-bottom pb-2">Receiver Information</h6>
                            <div class="row g-2">
                                <div class="col-md-6"><label class="form-label">Receiver Name</label><input type="text"
                                        class="form-control mb-2" value="Raj Enterprise"></div>
                                <div class="col-md-6"><label class="form-label">Receiver Mobile</label><input type="tel"
                                        class="form-control mb-2" value="8888877777"></div>
                                <div class="col-12"><label class="form-label">Address</label><input type="text"
                                        class="form-control mb-2" value="2118 Thornridge Cir. Syracuse"></div>
                                <div class="col-md-4"><label class="form-label">City</label><input type="text"
                                        class="form-control mb-2" value="Mumbai"></div>
                                <div class="col-md-4"><label class="form-label">State</label><input type="text"
                                        class="form-control mb-2" value="Maharashtra"></div>
                                <div class="col-md-4"><label class="form-label">Pincode</label><input type="text"
                                        class="form-control mb-2" value="400001"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION 3: LOGISTICS -->
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <h6 class="mb-3 border-bottom pb-2">Logistic Details</h6>
                        </div>
                        <div class="col-md-3"><label class="form-label">Carrier</label><select class="form-select">
                                <option>DTDC</option>
                                <option>Trackon</option>
                            </select></div>
                        <div class="col-md-3"><label class="form-label">Package Type</label><select class="form-select">
                                <option>Document</option>
                                <option selected>Non-Doc / Parcel</option>
                            </select></div>
                        <div class="col-md-3"><label class="form-label">Weight (Kg)</label><input type="number"
                                class="form-control" value="12.50"></div>
                        <div class="col-md-3"><label class="form-label">Boxes</label><input type="number"
                                class="form-control" value="2"></div>
                        <div class="col-12"><label class="form-label">Additional Details</label><textarea
                                class="form-control" rows="2">Handle with care.</textarea></div>
                    </div>
                    <!-- SECTION 4: BILLING (Exact mirror of your Wizard step) -->
                    <div class="billing-form-wrapper bg-primary-light p-3 rounded">
                        <h6 class="mb-3 border-bottom pb-2">Billing Information</h6>
                        <div class="row g-3">
                            <div class="col-md-4"><label class="form-label">Gross Amount</label><input type="number"
                                    class="form-control" value="1000.00"></div>
                            <div class="col-md-4"><label class="form-label">Fuel Surcharge</label><input type="number"
                                    class="form-control" value="100.00"></div>
                            <div class="col-md-4"><label class="form-label">Insurance</label><input type="number"
                                    class="form-control" value="25.00"></div>
                            <div class="col-md-4"><label class="form-label">Doc Charge</label><input type="number"
                                    class="form-control" value="25.00"></div>
                            <div class="col-md-4"><label class="form-label">ODA Charge</label><input type="number"
                                    class="form-control" value="50.00"></div>
                            <div class="col-md-4"><label class="form-label">Other Charges</label><input type="number"
                                    class="form-control" value="0.00"></div>
                            <div class="col-md-4"><label class="form-label">Sub Total</label><input type="number"
                                    class="form-control" value="1200.00" readonly></div>
                            <div class="col-md-2">
                                <label class="form-label d-block">Apply GST</label>
                                <div class="form-check form-switch pt-1"><input class="form-check-input" type="checkbox"
                                        checked></div>
                            </div>
                            <div class="col-md-3"><label class="form-label">CGST</label><input type="number"
                                    class="form-control" value="108.00" readonly></div>
                            <div class="col-md-3"><label class="form-label">SGST</label><input type="number"
                                    class="form-control" value="108.00" readonly></div>
                            <div class="col-12 mt-3">
                                <label class="net-amount-label">Net Amount</label>
                                <input type="text"
                                    class="form-control form-control-lg border-danger text-danger fw-bold"
                                    value="1416.00" readonly>
                            </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modeRadios = document.querySelectorAll('input[name="customer_mode"]');
        const cashGroup = document.getElementById('sender-cash-group');
        const accountGroup = document.getElementById('sender-account-group');
        const btnAddClient = document.getElementById('btn-add-client-fields');
        const btnBackSearch = document.getElementById('btn-back-to-search');
        const searchBox = document.getElementById('client-search-box');
        const manualFields = document.getElementById('client-manual-fields');
        const r_cashGroup = document.getElementById('receiver-cash-group');
        const r_accountGroup = document.getElementById('receiver-account-group');
        const r_btnAddClient = document.getElementById('btn-add-receiver-fields');
        const r_btnBackSearch = document.getElementById('btn-back-to-receiver-search');
        const r_searchBox = document.getElementById('receiver-search-box');
        const r_manualFields = document.getElementById('receiver-manual-fields');
        function toggleSREntryGroups() {
            const selectedMode = document.querySelector('input[name="customer_mode"]:checked').value;
            if (selectedMode === 'Account') {
                cashGroup.style.display = 'none';
                accountGroup.style.display = 'block';
                r_cashGroup.style.display = 'none';
                r_accountGroup.style.display = 'block';
            } else {
                cashGroup.style.display = 'block';
                accountGroup.style.display = 'none';
                r_cashGroup.style.display = 'block';
                r_accountGroup.style.display = 'none';
            }
        }
        modeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                searchBox.style.display = 'block';
                manualFields.style.display = 'none';
                r_searchBox.style.display = 'block';
                r_manualFields.style.display = 'none';
                toggleSREntryGroups();
            });
        });
        btnAddClient.addEventListener('click', function () {
            searchBox.style.display = 'none';
            manualFields.style.display = 'block';
        });
        btnBackSearch.addEventListener('click', function () {
            manualFields.style.display = 'none';
            searchBox.style.display = 'block';
        });
        r_btnAddClient.addEventListener('click', function () {
            r_searchBox.style.display = 'none';
            r_manualFields.style.display = 'block';
        });
        r_btnBackSearch.addEventListener('click', function () {
            r_manualFields.style.display = 'none';
            r_searchBox.style.display = 'block';
        });
        const gstSwitch = document.getElementById('applyGstSwitch');
        const gstFields = document.querySelectorAll('.gst-field-wrapper');
        function toggleGstVisibility() {
            gstFields.forEach(field => {
                field.style.display = gstSwitch.checked ? 'block' : 'none';
            });
        }
        gstSwitch.addEventListener('change', toggleGstVisibility);
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        const tabTriggers = document.querySelectorAll('#booking-wizard-tab .nav-link');
        nextButtons.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                let activeIndex = Array.from(tabTriggers).findIndex(tab => tab.classList
                    .contains('active'));
                if (activeIndex < tabTriggers.length - 1) {
                    const nextTabEl = tabTriggers[activeIndex + 1];
                    const tab = bootstrap.Tab.getOrCreateInstance(nextTabEl);
                    tab.show();
                }
            });
        });
        prevButtons.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                let activeIndex = Array.from(tabTriggers).findIndex(tab => tab.classList
                    .contains('active'));
                if (activeIndex > 0) {
                    const prevTabEl = tabTriggers[activeIndex - 1];
                    const tab = bootstrap.Tab.getOrCreateInstance(prevTabEl);
                    tab.show();
                }
            });
        });
        toggleSREntryGroups();
        toggleGstVisibility();
    });
</script>
<?php require 'includes/main-footer.php' ?>