
<html lang="ën">
    <head>
        <?php $this->load->view("_partials/head.php") ?>
    </head>
    <body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card text-white bg-dark col-md-8 p-4 mb-0">
                            <div class="card-body">
                                <h1>Masuk</h1>
                                <br>
                                <?= $this->session->flashdata('message'); ?>
                                <?php echo $this->session->flashdata('msg');?>
                                <form class="user" method="post" action="<?php echo site_url('login/autentikasi');?>">
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-user') ?>"></use>
                                            </svg></span>

                                        <input class="form-control" class="username" type="text" placeholder="Username" id="username" name="username">
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-lock-locked') ?>"></use>
                                            </svg></span>
                                        <input class="form-control" class="password" type="password" placeholder="Password" id="password" name="pass">
                                    </div>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-lg btn-outline-light mt-3 col-5">Masuk</button>
                                    </div>
                                    
                                </form>

                            </div>
                        </div>
                        <div class="card col-md-4 text-white bg-dark py-5">
                            <div class="card-body text-center">
                                <div class="row justify-content-center">
                                    <img class="col-9" width="120" height="200" src="<?php echo base_url('assets/brand/logo.png') ?>">
                                    <div class="row justify-content-center">
                                        <h3 class="col-9">Apotek Sugihwaras</h3>
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
</html>