<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("superadmin/_partials/head.php") ?>
    </head>
    <body>
        <?php $this->load->view("superadmin/_partials/sidebar.php") ?>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <?php $this->load->view("superadmin/_partials/header.php") ?>
            <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                   <h2>Income Statement</h2>
                   <form class="row mt-5">
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
                <hr class="mt-5">
                <div class="container-lg">
                    <div class="row">
                        <p class="col-8"><strong>Financial Period Start : 01//01/2023</strong></p>
                        <p class="col-4 align-self-end"><strong>Financial Period End  : 02//01/2023</strong></p>
                    </div>
                    <div class="card">
                        <h4 class="card-header">Income Statement</h4>
                        <div class="card-body">
                            <div class="row">
                                <h6 class="col-10">Income</h6>
                                <h6 class="col-2">200.000.000,00</h6>
                            </div>
                            <div class="row">
                                <h6 class="col-10">Expense</h6>
                                <h6 class="col-2 ">1.000.000,00</h6>
                            </div>
                            <div class="row">
                                <h6 class="col-10 text-warning">Profit</h6>
                                <h6 class="col-2">1.000.000,00</h6>
                            </div>
                            <hr>
                            <div class="row">
                                <h6 class="col-10"><strong>Total Income</strong></h6>
                                <h6 class="col-2"><strong>1.000.000,00</strong></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-10"></div>
                        <a href="#" class="btn btn-secondary col-2">Print Invoice</a>
                    </div>
                </div>
              </div>
        </div>
        <?php $this->load->view("superadmin/_partials/footer.php") ?>
        <?php $this->load->view("superadmin/_partials/js.php") ?>
    </body>
</html>