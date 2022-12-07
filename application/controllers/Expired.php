<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expired extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Expired_model', 'obat');
		if($this->session->userdata('logged') !=TRUE){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('expired');
	}

	public function ajax_list()
	{
		$list = $this->obat->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obat) {
			$no++;
			$row = array();
			$row[] = $obat->kode_obat;
			$row[] = $obat->nama_obat;
			$row[] = $obat->jenis_obat;
			$row[] = $obat->stok;
            $row[] = $obat->expired;
			$row[] = $obat->harga_beli;
            $row[] = $obat->harga_jual;
			$data[] = $row;
		}
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->obat->count_all(),
            "recordsFiltered" => $this->obat->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
    }
}