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
                   <div class="row">
                    <div class="col-8">
                    <div class="row">
                        <?php if ($obat === 'kosong'): ?>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="alert alert-info">Masakan Kosong</div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php foreach ($obat as $key => $value): ?>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body" id="<?php echo $value->kode_obat ?>">
                                            <h3 class="card-title mb-2"><?php echo $value->nama_obat ?></h3>
                                            <h4 class="mb-2"><?php echo $value->jenis_obat ?></h3>
                                            <span class="text-secondary">Rp <?php echo $value->harga_jual ?></span></span>
                                            <div class="input-group mt-3">
                                                <input type="number" class="form-control" placeholder="0" min="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary tambah" disabled>Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Data Pesanan</h5>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item kosong">Kosong</li>
                                </ul>
                                 <div class="form-group mt-3">
                                    <select name="no_meja" class="form-control select2" required>
                                        <?php if ($meja === 'kosong'): ?>
                                            <option value="" class="d-none">Meja Isi Semua</option>
                                        <?php else: ?>
                                            <option value="" class="d-none">Pilih No Meja</option>
                                            <?php foreach ($meja as $key => $value): ?>
                                                <option value="<?php echo $value->no_meja ?>"><?php echo $value->no_meja ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary btn-block bayar" disabled>Bayar</button>
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