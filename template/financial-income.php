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
              <h4>Income Management</h4>
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
                <li class="breadcrumb-item active">Income</li>
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
                <h5>Income Entries</h5>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addIncomeModal">
                  <i class="fa fa-plus me-2"></i>Add Income Entry
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
                      <div class="col-md-4">
                        <label class="form-label">Search Source</label>
                        <input class="form-control" type="text" placeholder="e.g. Scrap Sale, Client Name">
                      </div>
                      <div class="col-md-3">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                          <option value="">All Categories</option>
                          <option>Operational Revenue</option>
                          <option>Asset Sale</option>
                          <option>Commission</option>
                          <option>Misc</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label">Payment Mode</label>
                        <select class="form-select">
                          <option value="">All Modes</option>
                          <option>Cash</option>
                          <option>Bank Transfer</option>
                          <option>UPI</option>
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
                        <th>Date</th>
                        <th>Source / Description</th>
                        <th>Category</th>
                        <th>Mode</th>
                        <th>Amount (₹)</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>04 Jan 2026</td>
                        <td class="f-w-600">Walk-in Customer Cash (AWB: D4587)</td>
                        <td>Operational</td>
                        <td><span class="badge badge-light-primary">Cash</span></td>
                        <td class="f-w-700 text-success">177.00</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addIncomeModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>01 Jan 2026</td>
                        <td class="f-w-600">Old Newspaper/Carton Scrap Sale</td>
                        <td>Misc</td>
                        <td><span class="badge badge-light-primary">Cash</span></td>
                        <td class="f-w-700 text-success">500.00</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addIncomeModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>28 Dec 2025</td>
                        <td class="f-w-600">Payment from Global Exports (Inv #813)</td>
                        <td>Operational</td>
                        <td><span class="badge badge-light-info">Bank Transfer</span></td>
                        <td class="f-w-700 text-success">12,450.00</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#addIncomeModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
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
      <div class="modal fade bd-example-modal-xl" id="addIncomeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Income</h4>
              <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
              <form class="needs-validation" novalidate="">
                <div class="modal-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Transaction Date</label>
                      <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" required="">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Amount (₹)</label>
                      <input class="form-control" type="number" step="0.01" placeholder="0.00" required="">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Income Source / Client</label>
                      <input class="form-control" type="text" placeholder="e.g. Scrap Sale or Client Name" required="">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Category</label>
                      <select class="form-select" required="">
                        <option value="Operational">Operational Revenue</option>
                        <option value="Commission">Commission</option>
                        <option value="Misc">Miscellaneous</option>
                        <option value="Asset">Asset Sale</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Payment Mode</label>
                      <select class="form-select" required="">
                        <option value="Cash">Cash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="UPI">UPI / GPay</option>
                        <option value="Cheque">Cheque</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Description / Remarks</label>
                      <textarea class="form-control" rows="2"
                        placeholder="Reference No., Bill No., or other details"></textarea>
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
                <h4 class="text-center pb-2">Alert! Income Delete.</h4>
                <p class="text-center">You can not retrive deleted Income again.</p>
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