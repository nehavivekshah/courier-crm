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
              <h4>Customer Enquiries</h4>
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
                <li class="breadcrumb-item active">Enquiries</li>
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
                <h5>Enquiry Logs</h5>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                  <i class="fa fa-plus me-2"></i>Log New Inquiry
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
                        <label class="form-label">Search Customer / AWB</label>
                        <input class="form-control" type="text" placeholder="Search by name, phone or AWB...">
                      </div>
                      <div class="col-md-3">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                          <option value="">All Categories</option>
                          <option>Rate Quote Request</option>
                          <option>Parcel Tracking</option>
                          <option>Missing Item</option>
                          <option>Address Correction</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                          <option value="">All Status</option>
                          <option class="text-danger">New</option>
                          <option class="text-warning">In Progress</option>
                          <option class="text-success">Resolved</option>
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
                        <th>Ticket ID</th>
                        <th>Customer Name</th>
                        <th>Subject / Category</th>
                        <th>Date Logged</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="f-w-600">#ENQ-1045</span></td>
                        <td>Ravi Kumar <br><small class="text-muted">9876543210</small></td>
                        <td>Tracking Query <br><small>AWB: DT4587889674</small></td>
                        <td>04 Jan 2026</td>
                        <td><span class="badge badge-light-danger">New</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#inquiryModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="f-w-600">#ENQ-1042</span></td>
                        <td>Global Exports Inc.</td>
                        <td>Rate Quote <br><small>Bulk 50kg to Dubai</small></td>
                        <td>02 Jan 2026</td>
                        <td><span class="badge badge-light-warning">In Progress</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#inquiryModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="f-w-600">#ENQ-1038</span></td>
                        <td>Wings Tech</td>
                        <td>Address Change <br><small>AWB: T985632145</small></td>
                        <td>28 Dec 2025</td>
                        <td><span class="badge badge-light-success">Resolved</span></td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#inquiryModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
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
      <div class="modal fade bd-example-modal-xl" id="inquiryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Enquiry</h4>
              <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal scrollbar-wrapper" style="max-height: 80vh; overflow-y: auto;">
              <form class="needs-validation" novalidate="">
                <div class="modal-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Customer Name</label>
                      <input class="form-control" type="text" placeholder="Enter name" required="">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Contact Number</label>
                      <input class="form-control" type="tel" placeholder="Enter phone" required="">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Category</label>
                      <select class="form-select" required="">
                        <option value="Tracking">Parcel Tracking</option>
                        <option value="Quote">Rate Quotation</option>
                        <option value="Dispute">Billing Dispute</option>
                        <option value="Address">Address Correction</option>
                        <option value="Misc">Other</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Associated AWB (if any)</label>
                      <input class="form-control" type="text" placeholder="e.g. DT123456789">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Inquiry Message</label>
                      <textarea class="form-control" rows="4" placeholder="Describe the customer's request in detail..."
                        required=""></textarea>
                    </div>
                    <div class="col-12">
                      <hr class="mt-2 mb-2 f-light">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label f-w-600">Inquiry Status</label>
                      <select class="form-select border-primary">
                        <option value="New">New / Unread</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Resolved">Resolved</option>
                        <option value="Closed">Closed</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label class="form-label f-w-600">Internal Response / Resolution Note</label>
                      <textarea class="form-control" rows="3"
                        placeholder="Log the response sent or resolution steps taken..."></textarea>
                      <small class="text-muted">This note will be saved for staff reference.</small>
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
                <h4 class="text-center pb-2">Alert! Enquiry Delete.</h4>
                <p class="text-center">You can not retrive deleted enquiry again.</p>
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