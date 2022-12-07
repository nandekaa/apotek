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
                <h2>Pegawai</h2>
                  <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header row">
                            <h5 class="col-10">List Pegawai</h5>
                            <button type="button" class="btn btn-primary col-2" onclick="add_user()">Tambah</button>
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
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
    </body>
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
                      "url": "<?php echo site_url('pharmacist/ajax_list')?>",
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

          });



          function add_user()
          {
              save_method = 'add';
              $('#form')[0].reset(); // reset form on modals
              $('.form-group').removeClass('has-error'); // clear error class
              $('.help-block').empty(); // clear error string
              $('#modal_form').modal('show'); // show bootstrap modal
              $('.modal-title').text('Tambah Pharmacist'); // Set Title to Bootstrap modal title
          }

          function edit_user(id)
          {
              save_method = 'update';
              $('#form')[0].reset(); // reset form on modals
              $('.form-group').removeClass('has-error'); // clear error class
              $('.help-block').empty(); // clear error string

              //Ajax Load data from ajax
              $.ajax({
                  url : "<?php echo site_url('pharmacist/ajax_edit/')?>/" + id,
                  type: "GET",
                  dataType: "JSON",
                  success: function(data)
                  {
                      $('[name="name"]').val(data.name);
                      $('[name="username"]').val(data.username);
                      $('[name="no_hp"]').val(data.no_hp);
                      $('[name="akses"]').val('2');
                      $('[name="status"]').val('1');
                      $('[name="password"]').val(data.password);
                      $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                      $('.modal-title').text('Edit Apoteker'); // Set title to Bootstrap modal title

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
                  url = "<?php echo site_url('pharmacist/ajax_add')?>";
              } else {
                  url = "<?php echo site_url('pharmacist/ajax_update')?>";
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

          function delete_user(id)
          {
              if(confirm('Are you sure delete this data?'))
              {
                  // ajax delete data to database
                  $.ajax({
                      url : "<?php echo site_url('pharmacist/ajax_delete')?>/"+id,
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
                <h3 class="modal-title">Pharmacist Form</h3>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal"> 
                    <div class="form-body">
                            <input name="id" class="form-control" type="hidden">
                            <input name="akses" class="form-control" type="hidden" value="2">
                            <input name="status" class="form-control" type="hidden" value="1">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Apoteker</label>
                            <div class="col-md-12">
                                <input name="name" placeholder="Nama Apoteker" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-12">
                                <input name="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No. HP</label>
                            <div class="col-md-12">
                                <input name="no_hp" placeholder="No Hp" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                              <div class="input-group">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                              </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Konfirmasi Password</label>
                              <div class="input-group">
                                  <input name="confirm_pw" placeholder="Konfirmasi Password" class="form-control" type="password">
                                  <span class="help-block"></span>
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
</html>