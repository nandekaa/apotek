<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Obat_model', 'obat');
		if($this->session->userdata('logged') !=TRUE || $this->session->userdata('akses') !='2'){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$getObat = $this->obat->getObat();
		$data = array(
			'obat' => $getObat->num_rows() > 0 ? $getObat->result() : 'kosong' ,
		);
		$this->load->view('sales', $data);
	}

}