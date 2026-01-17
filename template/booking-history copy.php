<?php require 'includes/main-header.php' ?>
<style>
  div .action .print {
    margin-right: 5px;
  }
</style>
<style>
  /* Kanban custom styling */
  .kanban-container {
    display: flex;
    align-items: flex-start;
  }
  .kanban-board {
    background: #f3f3f3;
    border-radius: 10px;
    margin-bottom: 20px;
  }
  .kanban-board header {
    padding: 15px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    border-radius: 10px 10px 0 0;
    color: #fff;
  }
  /* Status Colors */
  .bg-pending { background-color: #e6edef !important; color: #24695c !important; }
  .kanban-board[data-id="_pending"] header { background: #e6edef; color: #24695c; }
  .kanban-board[data-id="_transit"] header { background: #48a3d7; }
  .kanban-board[data-id="_delivered"] header { background: #51bb25; }
  .kanban-board[data-id="_returned"] header { background: #dc3545; }
  
  .booking-kanban-card {
    background: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    margin-bottom: 10px;
    border-left: 3px solid #ccc;
  }
  .booking-kanban-card h6 { margin: 5px 0; font-size: 14px; color: #333; }
  .booking-kanban-card .awb-no { font-weight: 800; color: #7366ff; display: block; }
  .booking-kanban-card .details { font-size: 12px; color: #666; margin-top: 5px;}
  .booking-kanban-card .card-footer-flex { 
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    margin-top: 10px; 
    border-top: 1px solid #eee; 
    padding-top: 8px;
  }
  
  /* Toggle buttons */
  #listViewBtn.active, #kanbanViewBtn.active {
    background-color: #7366ff;
    color: white;
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
              <div class="btn-group m-r-10" role="group" aria-label="View Switcher">
                <button type="button" class="btn btn-outline-primary active" id="listViewBtn" title="List View">
                  <i class="icofont icofont-listine-dots"></i>
                </button>
                <button type="button" class="btn btn-outline-primary" id="kanbanViewBtn" title="Kanban View">
                  <i class="icofont icofont-layout"></i>
                </button>
              </div>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">
                    <svg class="stroke-icon">
                      <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
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
            <div id="listViewContainer">
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
                              <li class="print"> <a href="#" data-bs-toggle="modal" data-bs-target="#printBookingModal" class="bg-primary-light"><i class="icofont icofont-printer text-primary"></i></a></li>
                              <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#editBookingModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                              <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
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
                              <li class="print"> <a href="#" data-bs-toggle="modal" data-bs-target="#printBookingModal" class="bg-primary-light"><i class="icofont icofont-printer text-primary"></i></a></li>
                              <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#editBookingModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                              <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>28 Dec 2024</td>
                          <td class="f-w-600">M786954210</td>
                          <td>Tushar Thakkar</td>
                          <td>Global Ent</td>
                          <td>PUNE</td>
                          <td>Maruti</td>
                          <td>DOC</td>
                          <td>85.00</td>
                          <td><span class="badge rounded-pill badge-light-danger">Returned</span></td>
                          <td>
                            <ul class="action">
                              <li class="print"> <a href="#" data-bs-toggle="modal" data-bs-target="#printBookingModal" class="bg-primary-light"><i class="icofont icofont-printer text-primary"></i></a></li>
                              <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#editBookingModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                              <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>27 Dec 2024</td>
                          <td class="f-w-600">DT4587889611</td>
                          <td>Keshav Bhai</td>
                          <td>Priya Singh</td>
                          <td>BANGALORE</td>
                          <td>DTDC</td>
                          <td>SURFACE</td>
                          <td>320.00</td>
                          <td><span class="badge rounded-pill badge-light-primary">On Board</span></td>
                          <td>
                            <ul class="action">
                              <li class="print"> <a href="#" data-bs-toggle="modal" data-bs-target="#printBookingModal" class="bg-primary-light"><i class="icofont icofont-printer text-primary"></i></a></li>
                              <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#editBookingModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                              <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>26 Dec 2024</td>
                          <td class="f-w-600">AR78903456</td>
                          <td>Chintrapal</td>
                          <td>Global Imports</td>
                          <td>USA</td>
                          <td>Aramax</td>
                          <td>INTL</td>
                          <td>1,250.00</td>
                          <td><span class="badge rounded-pill badge-light-warning">Pending</span></td>
                          <td>
                            <ul class="action">
                              <li class="print"> <a href="#" data-bs-toggle="modal" data-bs-target="#printBookingModal" class="bg-primary-light"><i class="icofont icofont-printer text-primary"></i></a></li>
                              <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#editBookingModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                              <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
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
      </div>
      <div id="kanbanViewContainer" style="display: none;">
        <div class="jkanban-container">
            <div id="bookingKanban"></div>
        </div>
      </div>
      <!-- <div class="container-fluid jkanban-container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Default Demo </h4>
              </div>
              <div class="card-body">
                <div id="demo1" class="d-none"></div>
                <div id="demo2"></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
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
            <li> <img src="assets/images/gif/danger.gif" alt="error"></li>
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

<?php require 'includes/main-footer.php' ?>
<script>
$(document).ready(function() {
    // 1. View Switching Logic
    $('#listViewBtn').on('click', function() {
        $(this).addClass('active');
        $('#kanbanViewBtn').removeClass('active');
        $('#listViewContainer').show();
        $('#kanbanViewContainer').hide();
    });

    $('#kanbanViewBtn').on('click', function() {
        $(this).addClass('active');
        $('#listViewBtn').removeClass('active');
        $('#listViewContainer').hide();
        $('#kanbanViewContainer').show();
        
        // Resize kanban if needed after showing
        window.dispatchEvent(new Event('resize'));
    });

    // 2. Kanban Initialization
    var bookingKanban = new jKanban({
        element: '#bookingKanban',
        gutter: '15px',
        widthBoard: '300px',
        boards: [
            {
                id: '_pending',
                title: 'Pending / On Board',
                class: 'bg-warning',
                item: [
                    {
                        title: createKanbanCard("AR78903456", "Chintrapal", "USA", "Aramax", "1,250.00", "26 Dec", "warning")
                    },
                    {
                        title: createKanbanCard("DT4587889611", "Keshav Bhai", "BANGALORE", "DTDC", "320.00", "27 Dec", "primary")
                    }
                ]
            },
            {
                id: '_transit',
                title: 'In Transit',
                class: 'bg-info',
                item: [
                    {
                        title: createKanbanCard("T5412879965", "Global Exports", "DELHI", "Trackon", "450.00", "29 Dec", "info")
                    }
                ]
            },
            {
                id: '_delivered',
                title: 'Delivered',
                class: 'bg-success',
                item: [
                    {
                        title: createKanbanCard("DT4587889674", "Win Enterprise", "MUMBAI", "DTDC", "177.00", "30 Dec", "success")
                    }
                ]
            },
            {
                id: '_returned',
                title: 'Returned',
                class: 'bg-danger',
                item: [
                    {
                        title: createKanbanCard("M786954210", "Tushar Thakkar", "PUNE", "Maruti", "85.00", "28 Dec", "danger")
                    }
                ]
            }
        ],
        dropEl: function(el, target, source, sibling) {
            console.log("Moved item to: " + target.parentElement.getAttribute('data-id'));
            // Here you could trigger an AJAX call to update the status in your database
        }
    });

    // Helper function to generate HTML for Kanban card
    function createKanbanCard(awb, client, dest, carrier, amount, date, colorClass) {
        return `
            <div class="booking-kanban-card border-start-${colorClass}">
                <span class="awb-no"># ${awb}</span>
                <h6>${client}</h6>
                <div class="details">
                    <i class="fa fa-map-marker"></i> ${dest} | <i class="fa fa-truck"></i> ${carrier}
                </div>
                <div class="card-footer-flex">
                    <span class="badge badge-light-primary">${date}</span>
                    <strong class="text-dark">₹${amount}</strong>
                </div>
                <div class="mt-2 text-end">
                    <a href="javascript:void(0)" class="text-primary me-2"><i class="icofont icofont-eye-alt"></i></a>
                    <a href="javascript:void(0)" class="text-warning"><i class="icofont icofont-edit"></i></a>
                </div>
            </div>
        `;
    }
});
</script>