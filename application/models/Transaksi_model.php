<?php
class Transaksi_model extends CI_Model{

	public function tm_transaction()
	{
		return $this->db->get('user')->result();
	}
	public function cek($kode_obat)
	{
		$cek_stock = $this->db->where('kode_obat', $kode_obat)->get('obat')->row()->stok;
		if($cek_stock == 0 ){
			return 0;
		}else{
			return 1;
		}
	}

	public function check()
	{
		$cek=1;
		for($i=0;$i<count($this->input->post('rowid'));$i++){		
				$stock = $this->db->where('kode_obat', $this->input->post('kode_obat')[$i])
								->get('obat')
								->row()
								->stok;
				$qty = $this->input->post('qty')[$i];
				$sisa= $stock - $qty;
				if($sisa < 0){
					$oke = 0;
				}else{
					$oke = 1;
				}
				$cek = $oke * $cek;
		}
		return $cek;		
	}

	public function save_cart_db()
	{
		for($i=0; $i<count($this->input->post('rowid')); $i++){
				$stock = $this->db->where('kode_obat', $this->input->post('kode_obat')[$i])
								 ->get('obat')
								 ->row()
								 ->stok;
				$qty = $this->input->post('qty')[$i];
				$sisa = $stock - $qty;
				$updatestock = array('stok' => $sisa);
				$this->db->where('kode_obat', $this->input->post('kode_obat')[$i])
						 ->update('obat', $updatestock);
		}

		$object=array(
				'user_code'=>$this->input->post('user_code'),
				'tgl' => date('Y-m-d'),
				'total'=>$this->input->post('total'),
				'obat'=>$this->input->post('obat'),
				'obat_qty'=>$this->input->post('obat_qty'),
			);
		$this->db->insert('penjualan', $object);
		$tm_nota=$this->db->order_by('id_trx','desc')
						  ->where('user_code', $this->input->post('user_code'))
						  ->limit(1)
						  ->get('penjualan')
						  ->row();
		for ($i=0; $i < count($this->input->post('rowid')); $i++) { 
			$hasil[]=array(
					'id_trx'=>$tm_nota->id_trx,
					'kode_obat'=>$this->input->post('kode_obat')[$i],
					'amount'=>$this->input->post('qty')[$i]
				);


		}
			$proses=$this->db->insert_batch('detail_jual',$hasil);
			if ($proses) {
				return $tm_nota->id_trx;

			}else {
				return 0;
			
		}
	}

	public function detail_note($id_nota)
	{
		return $this->db->where('id_trx', $id_nota)
						->join('user','user.id=penjualan.user_code')
						->get('penjualan')
						->row();
	}
	
	public function detail_transaction($id_nota)
	{
		return $this->db->where('id_trx', $id_nota)
						->join('obat', 'obat.kode_obat=detail_jual.kode_obat')
						->get('detail_jual')->result();
	}
		 
}