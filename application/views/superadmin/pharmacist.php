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
                  <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header row">
                            <h5 class="col-10">List of Pharmacist</h5>
                            <button type="button" class="btn btn-primary col-2" data-toggle="modal" data-target="#modaltambah">Add Pharmacist</button>
                        </div>
                        <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Nomor HP</th>
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