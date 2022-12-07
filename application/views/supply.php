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
                      <li class="breadcrumb-item active"><span>Kedaluwarsa</span></li>
                    </ol>
                  </nav>
                <?php } if($this->session->userdata('access')=='Superadmin'){ ?>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                      <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="obat">Master Obat</a>
                      </li>
                      <li class="breadcrumb-item active"><span>Butuh Restock</span></li>
                    </ol>
                  </nav>
                <?php } ?>
                </h3>
                  <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header row">
                          <h5 class="col-10">Obat Kedaluwarsa</h5>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example" class="display table table-warning table-hover" >
                              <thead>
                                <tr>
                                  <th>Kode Obat</th>
                                  <th>Nama Obat</th>
                                  <th>Jenis Obat</th>
                                  <th>Stok</th>
                                  <th>Kedaluwarsa</th>
                                  <th>Harga Beli</th>
                                  <th>Harga Jual</th>
                                  </tr>
                              </thead>
                              <tbody>
                                
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
      var save_method; //for save method string
      var table;

      $(document).ready(function() {

              //datatables
              table = $('#example').DataTable({ 

                  "processing": true, //Feature control the processing indicator.
                  "serverSide": true, //Feature control DataTables' server-side processing mode.
                  "order": [], //Initial no order.

                  // Load data for the table's content from an Ajax source
                  "ajax": {
                      "url": "<?php echo site_url('supply/ajax_list')?>",
                      "type": "POST"
                  },

                  //Set column definition initialisation properties.
                  "columnDefs": [
                  { 
                      "targets": [ -1 ], //last column
                      "orderable": false, //set not orderable
                  },
                  ],

              });

              //datepicker
              $('.datepicker').datepicker({
                  autoclose: true,
                  format: "yyyy-mm-dd",
                  todayHighlight: true,
                  orientation: "top auto",
                  todayBtn: true,
                  todayHighlight: true,  
              });

      });
    </script>
</html>