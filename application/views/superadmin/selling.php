<!DOCTYPE html>
<html lang="ën">
    <head>
        <?php $this->load->view("superadmin/_partials/head.php") ?>
    </head>
    <body>
        <?php $this->load->view("superadmin/_partials/sidebar.php") ?>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <?php $this->load->view("superadmin/_partials/header.php") ?>
    <div class="container">
    <h4>Selling Report</h4>
    <hr>
    <h5>Annual Finance Report</h5><br>
    <div class="row">
        <div class="col mb-3 me-5" id="startdate">
            <label for="start-date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="startdate">
        </div>
        <div class="col mb-3" id="enddate">
            <label for="end-date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="enddate">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3 me-5" id="category">
            <label class="form-label">Category</label>
            <select id="category" class="form-select">
                <option>Select Category</option>
            </select>
        </div>
        <div class="col mb-3" id="category">
            <label class="form-label">Employee ID</label>
            <select id="category" class="form-select">
                <option>Select Employee ID</option>
            </select>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-center">
        <button type="button" class="btn btn-dark ps-4 pe-4 mt-4" id="show"
            style="background-color: #283342;">SHOW</button>
    </div>
    <hr class="mt-5">
    <div class="row">
        <div class="col ps-4">
            <b class="text-start">Employee ID :</b>
        </div>
        <div class="col">
            <b class="text-end">1234567</b>
        </div>
        <div class="col">
            <b class="text-start">Financial Period Start :</b>
        </div>
        <div class="col pe-4">
            <b class="text-end">2023/12/23</b>
        </div>
    </div>
    <div class="row">
        <div class="col ps-4">
            <b class="text-start">Employee Name :</b>
        </div>
        <div class="col">
            <b class="text-end">1234567</b>
        </div>
        <div class="col">
            <b class="text-start">Financial Period End :</b>
        </div>
        <div class="col pe-4">
            <b class="text-end">2023/12/23</b>
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Category</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">QTY</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Nominal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Sirup</td>
                <td>123456</td>
                <td>Paracetamol</td>
                <td>5</td>
                <td>20.000</td>
                <td>100.000</td>
            </tr>
            <tr>
                <th scope="row" colspan="5"></th>
                <td><b>Total</b></td>
                <td><b>100.000</b></td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end mb-3">
        <button type="button" class="btn btn-dark mt-2" id="show" style="background-color: #283342;">PRINT
            REPORT</button>
    </div>
    </div>
    </div>
        <?php $this->load->view("superadmin/_partials/footer.php") ?>
        <?php $this->load->view("superadmin/_partials/js.php") ?>
    </body>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
</html>