<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
                <h1>Register</h1>
                <p class="text-medium-emphasis">Daftar akun Administrator</p>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-contact')?>"></use>
                    </svg></span>
                  <input class="form-control" type="text" placeholder="Nama">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-user')?>"></use>
                    </svg></span>
                  <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-envelope-open')?>"></use>
                    </svg></span>
                  <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-lock-locked')?>"></use>
                    </svg></span>
                  <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-lock-locked')?>"></use>
                    </svg></span>
                  <input class="form-control" type="password" placeholder="Ketik ulang password">
                </div>
                <button class="btn btn-block btn-success" type="button">Buat Akun</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>