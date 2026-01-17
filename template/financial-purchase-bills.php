<?php require 'includes/main-header.php' ?>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <?php require 'includes/page-header.php' ?>
  <div class="page-body-wrapper">
    <?php require 'includes/sidebar.php' ?>
    <div class="page-body">
      <div class="container-fluid">
        <div class="page-title">
          <div class="row g-0">
            <div class="col-4">
              <h4>Purchase Bills</h4>
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
                <li class="breadcrumb-item">Financials</li>
                <li class="breadcrumb-item active">Purchase Bills</li>
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
                <h5>Purchase Bills</h5>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addPurchaseModal">
                  <i class="fa fa-plus me-2"></i>Add Purchase Bill
                </button>
              </div>
              <div class="card-body">
                <div class="head-options d-flex gap-2 mb-3">
                  <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" href="#collapseFilter">
                    <i class="fa fa-filter me-0 me-md-2"></i><span class="d-none d-md-inline">Filter</span>
                  </button>
                </div>
                <div class="collapse mb-3" id="collapseFilter">
                  <div class="p-3 rounded bg-primary-light">
                    <div class="row g-3">
                      <div class="col-md-3">
                        <label class="form-label">Vendor / Partner</label>
                        <select class="form-select">
                          <option value="">All Vendors</option>
                          <option>DTDC HO</option>
                          <option>TRACKON PVT LTD</option>
                          <option>Local Stationery Hub</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label">Payment Status</label>
                        <select class="form-select">
                          <option value="">All</option>
                          <option class="text-success">Paid</option>
                          <option class="text-danger">Unpaid</option>
                          <option class="text-warning">Partially Paid</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">Due Date Range</label>
                        <div class="input-group">
                          <input class="form-control" type="date">
                          <span class="input-group-text">to</span>
                          <input class="form-control" type="date">
                        </div>
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
                        <th>Bill Date</th>
                        <th>Vendor Name</th>
                        <th>Bill #</th>
                        <th>Due Date</th>
                        <th>Amount (₹)</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01 Jan 2026</td>
                        <td class="f-w-600">DTDC HO (Ahmedabad)</td>
                        <td>DT/JAN/2026/001</td>
                        <td>15 Jan 2026</td>
                        <td class="f-w-700">25,500.00</td>
                        <td><span class="badge badge-light-danger">Unpaid</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addPurchaseModal" class="bg-wraning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>28 Dec 2025</td>
                        <td class="f-w-600">Trackon Courier Pvt Ltd</td>
                        <td>TR-DEC-889</td>
                        <td>05 Jan 2026</td>
                        <td class="f-w-700">12,000.00</td>
                        <td><span class="badge badge-light-warning">Partial</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addPurchaseModal" class="bg-wraning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>20 Dec 2025</td>
                        <td class="f-w-600">Stationery & Packing Supplies</td>
                        <td>INV/2025/112</td>
                        <td>20 Dec 2025</td>
                        <td class="f-w-700">4,200.00</td>
                        <td><span class="badge badge-light-success">Paid</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addPurchaseModal" class="bg-wraning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
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
      <div class="modal fade bd-example-modal-xl" id="addPurchaseModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Purchase Bill</h4>
              <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
              <form class="needs-validation" novalidate="">
                <div class="modal-body">
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label class="form-label">Vendor Name / Service Provider</label>
                      <select class="form-select" required="">
                        <option value="">Choose Vendor...</option>
                        <option>DTDC HO</option>
                        <option>Trackon Pvt Ltd</option>
                        <option>Reliance Fuel</option>
                        <option>Office Stationery Vendor</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Bill / Invoice Number</label>
                      <input class="form-control" type="text" placeholder="Enter Bill No" required="">
                    </div>
                    <div class="col-md-3">
                      <label class="form-label">Bill Date</label>
                      <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" required="">
                    </div>
                    <div class="col-md-3">
                      <label class="form-label">Due Date</label>
                      <input class="form-control border-danger" type="date" required="">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label f-w-600">Taxable Amount (₹)</label>
                      <input class="form-control" type="number" step="0.01" placeholder="0.00" required="">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">GST Rate</label>
                      <select class="form-select">
                        <option value="18">18% (Standard)</option>
                        <option value="12">12%</option>
                        <option value="5">5%</option>
                        <option value="0">Exempted</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label f-w-600">Total Bill Amount</label>
                      <input class="form-control bg-light" type="number" step="0.01" placeholder="0.00" readonly>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Payment Status</label>
                      <div class="d-flex gap-4 pt-1">
                        <div class="form-check radio radio-primary">
                          <input class="form-check-input" id="pb1" type="radio" name="pbStatus" value="Paid">
                          <label class="form-check-label" for="pb1">Paid</label>
                        </div>
                        <div class="form-check radio radio-primary">
                          <input class="form-check-input" id="pb2" type="radio" name="pbStatus" value="Unpaid" checked>
                          <label class="form-check-label" for="pb2">Unpaid</label>
                        </div>
                        <div class="form-check radio radio-primary">
                          <input class="form-check-input" id="pb3" type="radio" name="pbStatus" value="Partial">
                          <label class="form-check-label" for="pb3">Partial</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Notes / Line Items Summary</label>
                      <textarea class="form-control" rows="2"
                        placeholder="e.g. Bulk AWB purchase, January freight charges..."></textarea>
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
      <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="modal-toggle-wrapper">
                <ul class="modal-img">
                  <li> <img src="assets/images/gif/danger.gif" alt="error"></li>
                </ul>
                <h4 class="text-center pb-2">Alert! Purchase Bill Delete.</h4>
                <p class="text-center">You can not retrive deleted purchase bill again.</p>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-primary mx-2" type="button">Delete</button>
                  <button class="btn btn-secondary mx-2" type="button" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'includes/page-footer.php' ?>
  </div>
</div>
<?php require 'includes/main-footer.php' ?>