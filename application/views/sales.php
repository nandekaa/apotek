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
                   <h2>Employee Sales</h2>
                    <div class="card mt-5">
                        <form class="row card-body m-2">
                            <p>FILTER LAPORAN</p>
                            <div class="col-5">
                                <label>From Date</label>
                                <select class="form-select">
                                    <option selected>Month, Year</option>
                                    <option value="01/01/2023">January 2023</option>
                                    <option value="02/01/2023">February 2023</option>
                                    <option value="03/01/2023">March 2023</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <label>End Date</label>
                                <select class="form-select">
                                    <option selected>Month, Year</option>
                                    <option value="01/01/2023">January 2023</option>
                                    <option value="02/01/2023">February 2023</option>
                                    <option value="03/01/2023">March 2023</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-secondary mt-4">Show</button>
                            </div>
                        </form>
                    </div>
                    <div class="card mt-5">
                        <div class="row card-body m-2">
                            <p>Laporan Penjualan Pegawai</p>
                            <div class="col-6">
                                <p>From Date : <span>2019/06/01</span></p>
                                <p>End Date : <span>2019/06/01</span></p>
                            </div>
                            <div class="col-6">
                                <p>ID Pegawai : <span>1029423912</span></p>
                                <p>Nama Pegawai : <span>Sulistyawati</span></p>
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
                        <a href="#" class="btn btn-secondary col-2"><i class="fa fa-file" aria-hidden="true"></i> Cetak PDF</a>
                    </div>
                </div>               
            </div>
        </div>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>

    </body>
</html>