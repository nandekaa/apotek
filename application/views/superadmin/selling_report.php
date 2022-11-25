<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Income Statement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style type="text/css">
    body {
        margin: 40px;
    }

    .text-end {
        margin-left: 100px;
    }

    .container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 10px;
    }

    .col-4 {
        margin-top: 20px;
    }
    </style>
</head>

<body>
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
        <div class="col mb-3 me-5" id="startdate">
            <label for="start-date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="startdate">
        </div>
        <div class="col mb-3" id="enddate">
            <label for="end-date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="enddate">
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
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-dark mt-2" id="show" style="background-color: #283342;">PRINT
            REPORT</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>