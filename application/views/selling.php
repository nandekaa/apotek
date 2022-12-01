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
                   <h2>Penjualan</h2>
                   <p class="lead">
                    Tambahkan data penjualan disini.
                  </p>
                   <form class="row mt-5">
                        <div class="col-3">
                            <label>Obat</label>
                            <select class="form-select">
                                <option selected>Pilih Obat</option>
                                <option value="23812">Paracetamol</option>
                                <option value="42381">Bodrex</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Qty</label>
                            <select class="form-select">
                                <option selected>Pilih Pegawai</option>
                                <option value="20190912">Radja</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-secondary mt-4">Add</button>
                        </div>
                    </form>
                </div>
                <hr class="mt-5">
                <div class="container-lg">
                <div class="card mt-5">
                        <div class="row card-body m-2">
                            <div class="col-6">
                                <p><strong>Tanggal Mulai : <span>2019/06/01</span></strong></p>
                                <p><strong>Tanggal Akhir : <span>2019/06/01</span></strong></p>
                            </div>
                            <div class="col-6">
                                <p><strong>ID Pegawai : <span>1029423912</span></strong></p>
                                <p><strong>Nama Pegawai : <span>Sulistyawati</span></strong></p>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover" >
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Kode Obat</th>
                                                <th>Nama Obat</th>
                                                <th>QTY</th>
                                                <th>Harga</th>
                                                <th>Total</th>
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
                                                <td>Row 1 Data 1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-10"></div>
                        <a href="#" class="btn btn-secondary col-2"><i class="fa fa-file" aria-hidden="true"></i> Print Invoice</a>
                    </div>
                </div>
              </div>
        </div>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
    </body>
</html>