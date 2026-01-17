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
              <h4>Pending Bills Report</h4>
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
                <li class="breadcrumb-item active">Pending Bills</li>
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
                <div class="head-options d-flex gap-2 mb-3">
                  <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" href="#collapseFilter">
                    <i class="fa fa-filter me-0 me-md-2"></i><span class="d-none d-md-inline">Filter</span>
                  </button>
                </div>
                <div class="collapse mb-3" id="collapseFilter">
                  <div class="p-3 rounded bg-primary-light">
                    <div class="row g-3">
                      <div class="col-md-3">
                        <label class="form-label">Search Client</label>
                        <input class="form-control" type="text" placeholder="Client Name or Code...">
                      </div>
                      <div class="col-md-2 col-6">
                        <label class="form-label">From Date</label>
                        <input class="form-control" type="date" value="<?php echo date('Y-m-01'); ?>">
                      </div>
                      <div class="col-md-2 col-6">
                        <label class="form-label">To Date</label>
                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                      <div class="col-md-3">
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

                <div class="dt-ext table-responsive custom-scrollbar">
                  <table class="display" id="export-button">
                    <thead>
                      <tr>
                        <th>Bill Date</th>
                        <th>AWB Number</th>
                        <th>Client / Account</th>
                        <th>Carrier</th>
                        <th>Bill Amount</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Due Date</th>
                        <th>Aging</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Row 1: Overdue -->
                      <tr>
                        <td>01 Jan 2026</td>
                        <td class="f-w-600">DT4587889674</td>
                        <td>Brooklyn Simmons <small class="d-block text-muted">ACC# 10025</small></td>
                        <td>DTDC</td>
                        <td class="f-w-600">₹ 1,416.00</td>
                        <td class="text-success">₹ 0.00</td>
                        <td class="text-danger f-w-700">₹ 1,416.00</td>
                        <td>08 Jan 2026</td>
                        <td><span class="badge badge-light-danger">9 Days</span></td>
                      </tr>
                      <!-- Row 2: Partially Paid -->
                      <tr>
                        <td>05 Jan 2026</td>
                        <td class="f-w-600">T985632145</td>
                        <td>Global Imports <small class="d-block text-muted">ACC# 10098</small></td>
                        <td>Trackon</td>
                        <td class="f-w-600">₹ 8,500.00</td>
                        <td class="text-success">₹ 5,000.00</td>
                        <td class="text-danger f-w-700">₹ 3,500.00</td>
                        <td>12 Jan 2026</td>
                        <td><span class="badge badge-light-warning">Within Due</span></td>
                      </tr>
                      <!-- Row 3: Fresh Bill -->
                      <tr>
                        <td>09 Jan 2026</td>
                        <td class="f-w-600">PR88547210</td>
                        <td>Swift Logistics <small class="d-block text-muted">ACC# 10044</small></td>
                        <td>Professional</td>
                        <td class="f-w-600">₹ 450.00</td>
                        <td class="text-success">₹ 0.00</td>
                        <td class="text-danger f-w-700">₹ 450.00</td>
                        <td>16 Jan 2026</td>
                        <td><span class="badge badge-light-primary">New</span></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Total Outstanding:</th>
                        <th colspan="3"></th>
                        <th class="f-w-700">₹ 10,366.00</th>
                        <th class="f-w-700">₹ 5,000.00</th>
                        <th class="f-w-700 text-danger">₹ 5,366.00</th>
                        <th colspan="2"></th>
                      </tr>
                    </tfoot>
                  </table>
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