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
              <h4>System Configuration</h4>
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
                <li class="breadcrumb-item">System Config</li>
                <li class="breadcrumb-item active">GST</li>
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
                <h4>GST</h4>
                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#UpdateModal">
                  <i class="fa fa-plus me-2"></i>Add New Center
                </button> -->
              </div>
              <div class="card-body">
                <div class="table-responsive custom-scrollbar">
                  <table class="display" id="basic-1">
                    <thead>
                      <tr>
                        <th>CGST</th>
                        <th>SGST</th>
                        <th>IGST</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>9%</td>
                        <td>9%</td>
                        <td>18%</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#" data-bs-toggle="modal" data-bs-target="#UpdateModal" class="bg-warning-light"><i class="icofont icofont-edit text-warning"></i></a></li>
                            <!-- <li class="delete"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="bg-danger-light"><i class="icofont icofont-ui-delete text-danger"></i></a></li> -->
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
      <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">GST Details</h4>
              <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body dark-modal">
              <form class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-md-12">
                    <label class="form-label">CGST</label>
                    <input class="form-control" type="text" placeholder="e.g. 9%" required="">
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">SGST</label>
                    <input class="form-control" type="text" placeholder="e.g. 9%" required="">
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">IGST</label>
                    <input class="form-control" type="text" placeholder="e.g. 18%" required="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
              <button class="btn btn-success"><i class="fa fa-save me-2"></i> UPDATE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'includes/page-footer.php' ?>
  </div>
</div>
<?php require 'includes/main-footer.php' ?>