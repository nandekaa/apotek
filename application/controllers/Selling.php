<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selling extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Obat_model','obat');
		$this->load->model('Transaksi_model','trx');
		if($this->session->userdata('logged') !=TRUE || $this->session->userdata('akses') !='2'){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$data['transaksi']=$this->trx->tm_transaction();
		$data['get_obat']=$this->obat->get_obat();
		$this->load->view('selling',$data);
	}

	public function addcart($id)
	{
		$cek_stock=$this->trx->cek($id);
		if ( $cek_stock == 0){
			$this->session->set_flashdata('message', 'Out of stock');
			redirect('selling','refresh');
		}
		$detail=$this->obat->detail($id);
		$data=array(
				'id' => $detail->kode_obat,
				'qty' => 1,
				'price' => $detail->harga_jual,
				'name' => $detail->nama_obat,
			);
		$this->cart->insert($data);
		redirect('selling');
	}

	public function save()
	{
		if ($this->input->post('update')) {
			 for ($i=0; $i < count($this->input->post('rowid')); $i++) { 
			 	$data=array(
			 			'rowid' => $this->input->post('rowid')[$i],
			 			'qty' => $this->input->post('qty')[$i]
			 		);
			 	$this->cart->update($data);
			 }
			 redirect('selling');
		} elseif ($this->input->post('pay')) {
			$id=$this->trx->save_cart_db();
			if ($id) {
				$data['selling']=$this->trx->detail_note($id);
				$this->load->view('print_note', $data, FALSE);
			}
		}
	}

	public function delete_cart($id)
	{
		$data=array(
				'rowid'=>$id,
				'qty'=>0
			);
		$this->cart->update($data);
		redirect('selling');
	}

	public function clearcart()
	{
		$this->cart->destroy();
		redirect('selling');
	}
}