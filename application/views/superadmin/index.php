<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("superadmin/_partials/head.php") ?>
    </head>
    <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card text-white bg-dark col-md-8 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <br>
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
                </div>
              </div>
              <div class="card col-md-4 text-white bg-dark py-5">
                <div class="card-body text-center">
                  <div class="row justify-content-center">
                  <img class="col-3" width="65" height="55" src="<?php echo base_url('assets/brand/logo.png')?>">
                  <div class="row justify-content-center">
                  <h4 class="col-9">Nama apotek</h4>
                  </div>
                  </div>
                  <div class="row justify-content-center">
                    <button class="btn btn-lg btn-outline-light mt-3 col-5" type="button">Log In</button>
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
</html>