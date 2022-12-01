<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("_partials/head.php") ?>
    </head>
    <body>
        <?php $this->load->view("_partials/sidebar.php") ?>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <?php $this->load->view("_partials/header.php") ?>
            <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                  <h2>Dashboard</h2>
                  <p class="lead">
                    Informasi sekilas dari Sistem Informasi Apotek Sugihwaras.
                  </p>
                  <div class="row mt-4">
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-secondary mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-secondary">
                            <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>20.000.000,00</strong></h3>
                          <div class="row mx-2">
                          <h6 class="col-6">Income :</h6>
                          <div class="dropdown-center col-5">
                              <a class="dropdown-toggle text-dark" style="text-decoration:none;" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                                Jan 2022</a>
                              <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Jan 2022</a></li>
                                <li><a class="dropdown-item" href="#">Feb 2022</a></li>
                                <li><a class="dropdown-item" href="#">Mar 2022</a></li>
                                <li><a class="dropdown-item" href="#">Apr 2022</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer bg-secondary text-white border-secondary"><a href="sales" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <?php if($this->session->userdata('access')=='Admin'){ ?>
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-warning mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-warning">
                            <i class="fa fa-money fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>200</strong></h3>
                          <div class="row mx-2">
                          <h6 class="col-6">Selling</h6>
                          <div class="dropdown-center col-5">
                              <a class="dropdown-toggle text-dark" style="text-decoration:none;" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                                Jan 2022</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Jan 2022</a></li>
                                <li><a class="dropdown-item" href="#">Feb 2022</a></li>
                                <li><a class="dropdown-item" href="#">Mar 2022</a></li>
                                <li><a class="dropdown-item" href="#">Apr 2022</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer bg-warning text-white border-warning"><a href="selling" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <?php } if($this->session->userdata('access')=='Superadmin'){ ?>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-warning mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-warning">
                            <i class="fa fa-money fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>15.000.000,00</strong></h3>
                          <div class="row mx-2">
                          <h6 class="col-6">Expense :</h6>
                          <div class="dropdown-center col-5">
                              <a class="dropdown-toggle text-dark" style="text-decoration:none;" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                                Jan 2022</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Jan 2022</a></li>
                                <li><a class="dropdown-item" href="#">Feb 2022</a></li>
                                <li><a class="dropdown-item" href="#">Mar 2022</a></li>
                                <li><a class="dropdown-item" href="#">Apr 2022</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer bg-warning text-white border-warning"><a href="#" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <?php }; ?>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-primary mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-primary">
                            <i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>298</strong></h3>
                          <div class="row mx-2">
                          <h6>Need Supply</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-primary text-white border-primary"><a href="supply" class="text-white" style="text-decoration:none;">Visit Master <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-danger mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-danger">
                            <i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong>20</strong></h3>
                          <div class="row mx-2">
                          <h6>Expired Drugs</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-danger text-white border-danger"><a href="expired" class="text-white" style="text-decoration:none;">Resolve Now <svg class="icon">
                              <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-sm-6">
                    <div class="card">
                      <div class="d-flex card-header bg-transparent">
                        <span class="p-2 flex-grow-1"><h5>Invoice</h5></span><a href="#" class="p-2 text-dark" style="text-decoration:none;">Go to Customers Page <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                      </div>
                      <div class="card-body row">
                        <div class="col-6">
                          <h5 class="card-title">1.000</h5>
                          <p class="card-text">Total no of Invoices</p>
                        </div>
                        <div class="col-6">
                          <h5 class="card-title">Paracetamol</h5>
                          <p class="card-text">Frequently brought item</p>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="card">
                      <div class="d-flex card-header bg-transparent">
                        <span class="p-2 flex-grow-1"><h5>Selling</h5></span><a class="p-2 dropdown-toggle text-dark" style="text-decoration:none;" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                                January 2022</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">January 2022</a></li>
                                <li><a class="dropdown-item" href="#">February 2022</a></li>
                                <li><a class="dropdown-item" href="#">March 2022</a></li>
                                <li><a class="dropdown-item" href="#">April 2022</a></li>
                              </ul>
                      </div>
                      <div class="card-body row">
                        <div class="col-6">
                          <h5 class="card-title">1.500</h5>
                          <p class="card-text">Qty of Medicines Sold</p>
                        </div>
                        <div class="col-6">
                          <h5 class="card-title">1.000</h5>
                          <p class="card-text">Invoices Generated</p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
    </body>
</html>