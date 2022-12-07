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
                <h2>Master Obat</h2>
                  <div class="row justify-content-between mt-3">
                    <div class="col-sm-6 col-lg-3">
                      <div class="card text-center border-primary mb-3">
                        <div class="card-body text-dark">
                          <div class="mb-3 text-primary">
                            <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i>
                          </div>
                          <h3><strong><?php echo $total; ?></strong><span class="h6">DRUGS</span></h3>
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
                          <h3><strong><?php echo $need; ?></strong><span class="h6">DRUGS</span></h3>
                          <div class="row mx-2">
                          <h6>Need Supply</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-warning text-white border-warning"><a href="supply" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
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
                          <h3><strong><?php echo $exp; ?></strong><span class="h6">DRUGS</span></h3>
                          <div class="row mx-2">
                          <h6>Expired</h6>
                          </div>
                        </div>
                        <div class="card-footer bg-danger text-white border-danger"><a href="expired" class="text-white" style="text-decoration:none;">View Detailed Report <svg class="icon">
                                  <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-chevron-double-right')?>"></use>
                                </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                          <h5 class="col-10">All Drugs Stok</h5>
                          <?php if($this->session->userdata('access')=='Admin'){ ?>
                          <button type="button" class="btn btn-dark col-2" data-coreui-target="#print"><i class="fa fa-file" aria-hidden="true"></i> Cetak PDF</button>
                          <?php } if($this->session->userdata('access')=='Superadmin'){ ?>
                          <button type="button" class="btn btn-primary col-2" onclick="add_obat()"><i class="fa fa-plus" aria-hidden="true"></i> Add Data</button>
                          <?php } ?>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example" class="display table table-striped table-hover" >
                              <thead>
                                <tr>
                                  <th>Kode Obat</th>
                                  <th>Nama Obat</th>
                                  <th>Jenis</th>
                                  <th>Stok</th>
                                  <th>Expired</th>
                                  <th>Harga Beli</th>
                                  <th>Harga Jual</th>
                                  <th>Operasi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                
                            </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
        <script type="text/javascript">
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
                      "url": "<?php echo site_url('obat/ajax_list')?>",
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



          function add_obat()
          {
              save_method = 'add';
              $('#form')[0].reset(); // reset form on modals
              $('.form-group').removeClass('has-error'); // clear error class
              $('.help-block').empty(); // clear error string
              $('#modal_form').modal('show'); // show bootstrap modal
              $('.modal-title').text('Tambah Obat'); // Set Title to Bootstrap modal title
          }

          function edit_obat(kode_obat)
          {
              save_method = 'update';
              $('#form')[0].reset(); // reset form on modals
              $('.form-group').removeClass('has-error'); // clear error class
              $('.help-block').empty(); // clear error string

              //Ajax Load data from ajax
              $.ajax({
                  url : "<?php echo site_url('obat/ajax_edit/')?>/" + kode_obat,
                  type: "GET",
                  dataType: "JSON",
                  success: function(data)
                  {
                      $('[name="kode_obat"]').val(data.kode_obat).attr("disabled","disabled");
                      $('[name="nama_obat"]').val(data.nama_obat);
                      $('[name="jenis_obat"]').val(data.jenis_obat);
                      $('[name="stok"]').val(data.stok);
                      $('[name="harga_beli"]').val(data.harga_beli);
                      $('[name="harga_jual"]').val(data.harga_jual);
                      $('[name="expired"]').val(data.expired);
                      $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                      $('.modal-title').text('Edit Obat'); // Set title to Bootstrap modal title

                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error get data from ajax');
                  }
              });
          }

          function reload_table()
          {
              table.ajax.reload(null,false); //reload datatable ajax 
          }

          function save()
          {
              $('#btnSave').text('saving...'); //change button text
              $('#btnSave').attr('disabled',true); //set button disable 
              var url;

              if(save_method == 'add') {
                  url = "<?php echo site_url('obat/ajax_add')?>";
              } else {
                  url = "<?php echo site_url('obat/ajax_update')?>";
              }

              // ajax adding data to database
              $.ajax({
                  url : url,
                  type: "POST",
                  data: $('#form').serialize(),
                  dataType: "JSON",
                  success: function(data)
                  {

                      if(data.status) //if success close modal and reload ajax table
                      {
                          $('#modal_form').modal('hide');
                          reload_table();
                      }

                      $('#btnSave').text('save'); //change button text
                      $('#btnSave').attr('disabled',false); //set button enable 


                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error adding / update data');
                      $('#btnSave').text('save'); //change button text
                      $('#btnSave').attr('disabled',false); //set button enable 

                  }
              });
          }

          function delete_obat(id)
          {
              if(confirm('Are you sure delete this data?'))
              {
                  // ajax delete data to database
                  $.ajax({
                      url : "<?php echo site_url('obat/ajax_delete')?>/"+id,
                      type: "POST",
                      dataType: "JSON",
                      success: function(data)
                      {
                          //if success reload ajax table
                          $('#modal_form').modal('hide');
                          reload_table();
                      },
                      error: function (jqXHR, textStatus, errorThrown)
                      {
                          alert('Error deleting data');
                      }
                  });

              }
          }

        </script>
  <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Obat Form</h3>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal"> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Kode Obat</label>
                            <div class="col-md-12">
                                <input name="kode_obat" placeholder="Kode Obat" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Obat</label>
                            <div class="col-md-12">
                                <input name="nama_obat" placeholder="Nama Obat" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Obat</label>
                            <div class="col-md-12">
                                <select name="jenis_obat" class="form-control">
                                    <option value="">--Pilih Jenis--</option>
                                    <option value="Obat Cair">Obat Cair</option>
                                    <option value="Obat Bubuk">Obat Bubuk</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Kapsul">Kapsul</option>
                                    <option value="Antibiotik">Antibiotik</option>
                                    <option value="Salep">Salep</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Stok</label>
                            <div class="col-md-12">
                                <input name="stok" placeholder="Stok" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kedaluwarsa</label>
                            <div class="col-md-12">
                                <input name="expired" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label>Harga Beli</label>
                              <div class="input-group">
                                <span class="input-group-text col-md-2">Rp.</span>
                                <input name="harga_beli" placeholder="Harga Beli" class="form-control" type="text">
                                <span class="help-block"></span>
                                <span class="input-group-text col-sm-2">.00</span>
                              </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Harga Jual</label>
                              <div class="input-group">
                                  <span class="input-group-text col-md-2">Rp.</span>
                                  <input name="harga_jual" placeholder="Harga Jual" class="form-control" type="text">
                                  <span class="help-block"></span>
                                  <span class="input-group-text col-sm-2">.00</span>
                              </div>  
                        </div>
                      </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
    </body>
</html>