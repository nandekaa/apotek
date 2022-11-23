<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Silahkan login ke akun anda</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-user')?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Username">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-lock-locked')?>"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <a href="dashboard" class="btn btn-primary px-4" type="button">Login</a>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Lupa password?</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Belum punya akun administrator?</p>
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">Daftar Sekarang</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>