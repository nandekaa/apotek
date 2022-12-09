<h2>Nota Transaksi</h2>
Transaction No. : <?=$selling->id_trx?><br>
Cashier : <?=$selling->name?><br>
Date : <?=$selling->tgl?>

<table border="1" style="border-collapse: collapse;">
	<tr>
		<th>No</th>
		<th>Obat</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
	<?php $no=0; foreach ($this->trx->detail_transaction($selling->id_trx) as $obat): $no++; ?>
	<tr>
		<th><?=$no?></th>
		<th><?=$obat->nama_obat?></th>
		<th><?= number_format($obat->harga_jual)?></th>
		<th><?=$obat->amount?></th>
		<th><?= number_format(($obat->harga_jual*$obat->amount))?></th>
	</tr>
	<?php endforeach ?>
	<tr>
		<th colspan="4">Total</th>
		<th><?= number_format($selling->total)?></th>
	</tr>
</table>

<script type="text/javascript">
	window.print();
	setTimeout(() => {
		location.href="<?=base_url('selling/clearcart')?>";
	}, 2500);
</script>
