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
                <h3>
                <?php if($this->session->userdata('access')=='Admin'){ ?>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                      <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="#">Produk</a>
                      </li>
                      <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="obat">Stok</a>
                      </li>
                      <li class="breadcrumb-item active"><span>Kehabisan Stok</span></li>
                    </ol>
                  </nav>
                <?php } if($this->session->userdata('access')=='Superadmin'){ ?>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                      <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="obat">Master Obat</a>
                      </li>
                      <li class="breadcrumb-item active"><span>Kehabisan Stok</span></li>
                    </ol>
                  </nav>
                <?php } ?>
                </h3>
                  <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header row">
                          <h5 class="col-10">Kurang Stok Obat</h5>
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
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
    </body>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
</html>