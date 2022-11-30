<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body>
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <?php $this->load->view("admin/_partials/header3.php") ?>
            <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                <h2>Need Supply</h2>
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                          <h5 class="col-10">Need Supply Drugs</h5>
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
        <?php $this->load->view("admin/_partials/footer.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
</html>