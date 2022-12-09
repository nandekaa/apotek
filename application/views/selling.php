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
                <div class="container row">
                <div class="col-md-7">
                <table class="table table-hover table-bordered" id="example" style="background-color: #eef9f0;">
						<thead style="background-color: #464b58; color:white;">
							<tr>
								<th>#</th>
								<th>Obat</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Operasi</th>
							</tr>

						</thead>
						<tbody style="background-color: white;">
							<?php $no=0; foreach ($get_obat as $obat): $no++; ?>
								<tr>
								
									<td><?=$no?></td>
									<td><?=$obat->nama_obat?></td>
									<td class="text-right">Rp.<?=$obat->harga_jual?></td>
									<td class="text-right"><?=$obat->stok?></td>
									<td class="text-center"><a href="<?=base_url('selling/addcart/'.$obat->kode_obat)?>"><button class="btn btn-outline-primary rounded-0 btn-sm"><span class="fa fa-shopping-cart" aria-hidden="true"></span></button></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
                </div>
                <div class="col-md-5">
                    <div class="card rounded-0 shadow">
				<div class="card-header">
					<div class="card-title mb-0">Cart List</div>
				</div>
				<div class="card-body">
					<form action="<?=base_url('selling/save')?>" method="post">
					
						Cashier : <select name="user_code" class="form-control">
							<option class="text-dark" value="<?php echo $this->session->userdata('id'); ?>" selected><?php echo $this->session->userdata('name'); ?></option>
							</select><br>

						<table class="table table-hover" id="example" style="background-color: white;">
						<thead style="background-color:#636363; color:white;">
						<tr>
							<td>#</td>
							<td>Obat</td>
							<td>Qty</td>
							<td>Harga</td>
							<td>Total</td>
							<td>Operasi</td>
						</tr>
						</thead>
						<?php $no=0; foreach ($this->cart->contents() as $items): $no++; ?>
						<input type="hidden" name="kode_obat[]" value="<?=$items['id']?>">
						<input type="hidden" name="rowid[]" value="<?=$items['rowid']?>">

				
						<tr>
							<td><?=$no?></td>
							<td><?=$items['name']?></td>
							<td width="1"><input type="text" name="qty[]" value="<?=$items['qty']?>" class="form-control" style="padding:4px;"></td>
							<td class="text-right">Rp.<?=number_format($items['price'])?></td>
							<td class="text-right">Rp.<?=number_format($items['subtotal'])?></td>
							<td><a href="<?=base_url('selling/delete_cart/'.$items['rowid'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-hidden="true"></span></a></td>
						</tr>
						<input type="hidden" name="obat" value="<?=$items['name']?>">
						<input type="hidden" name="obat_qty" value="<?=$items['qty']?>">
						<?php endforeach  ?>
							<input type="hidden" name="total" value="<?=$this->cart->total()?>">
							
							<th colspan="4">Total Amount</th>
							<th class="text-right">Rp.<?=number_format($this->cart->total())?></th>
							<th></th>
								
							</tr>
						</table>
						<div class="text-center">
						<input type="submit" name="update" value="Update Quantity" class="btn btn-primary rounded-0 btn-sm"> 
						<input type="submit" name="pay" onclick="return confirm('Are you sure?')" class="btn btn-success rounded-0 btn-sm" value="Pay">
						<a class="btn btn-danger rounded-0 btn-sm" href="<?=base_url('selling/clearcart')?>">Clear Cart</a>
						</div>
					</form>
					<?php if ($this->session->flashdata('message')): ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('message');?>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
							</button> 
						</div>
					<?php endif ?>
				</div>
			</div>
        </div>
    </div>
    <script>
	$(document).ready(function(){
			$('#example').DataTable();
		}
	);
</script>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/js.php") ?>
    </body>
</html>