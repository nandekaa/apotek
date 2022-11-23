<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("superadmin/_partials/head.php") ?>
    </head>
    <body>
        <?php $this->load->view("superadmin/_partials/sidebar.php") ?>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <?php $this->load->view("superadmin/_partials/header.php") ?>
            <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                <h2>Master Obat</h2>
                  <div class="row justify-content-between mt-3">
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-primary mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-primary">
                            <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>1500 </strong><span class="h6">DRUGS</span></h3>
                          <div class="row mx-2">
                          <h6>All Stok</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-primary text-white border-primary"><a href="#" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-warning mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-warning">
                            <i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>100 </strong><span class="h6">DRUGS</span></h3>
                          <div class="row mx-2">
                          <h6>Need Supply</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-warning text-white border-warning"><a href="#" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-danger mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-danger">
                            <i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>10 </strong><span class="h6">DRUGS</span></h3>
                          <div class="row mx-2">
                          <h6>Expired</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-danger text-white border-danger"><a href="#" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                            <h5 class="col-10">All Drugs Stok</h5>
                            <button type="button" class="btn btn-primary col-2" data-toggle="modal" data-target="#modaltambah">Add Data</button>
                        </div>
                        <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Kode Obat</th>
                                                    <th>Nama Obat</th>
                                                    <th>Stok</th>
                                                    <th>Expired</th>
                                                    <th>Harga Beli</th>
                                                    <th>Harga Jual</th>
                                                    <th>Added at</th>
                                                    <th>Added by</th>
                                                    <th>Updated at</th>
                                                    <th>Updated by</th>
                                                    <th>Operasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                  <td>Row 1 Data 1</td>
                                                  <td>Row 1 Data 2</td>
                                                  <td>Row 1 Data 1</td>
                                                  <td>Row 1 Data 2</td>
                                                  <td>Row 1 Data 1</td>
                                                  <td>Row 1 Data 2</td>
                                                  <td>Row 1 Data 2</td>
                                                  <td>Row 1 Data 1</td>
                                                  <td>Row 1 Data 2</td>
                                                  <td>Row 1 Data 1</td>
                                                  <td>Row 1 Data 2</td>
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
              </div>
        </div>
        <?php $this->load->view("superadmin/_partials/footer.php") ?>
        <?php $this->load->view("superadmin/_partials/js.php") ?>
    </body>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
</html>