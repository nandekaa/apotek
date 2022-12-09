<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Dashboard_model');
    	$this->load->model('Obat_model', 'obat');
		if($this->session->userdata('logged') !=TRUE){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->helper('url');
        $data['total']= $this->Dashboard_model->stok();
        $data['need']= $this->Dashboard_model->supply();
        $data['exp']= $this->Dashboard_model->expired();
		$this->load->view('obat',$data);
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
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_obat('."'".$obat->kode_obat."'".')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_obat('."'".$obat->kode_obat."'".')"><i class="fa fa-trash" aria-hidden="true"></i></a>';
		
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
    
    public function ajax_edit($id)
	{
		$data = $this->obat->get_by_id($id);
		echo json_encode($data);
	}

    public function ajax_add()
	{
		$data = array(
				'nama_obat' => $this->input->post('nama_obat'),
				'jenis_obat' => $this->input->post('jenis_obat'),
				'stok' => $this->input->post('stok'),
                'expired' => $this->input->post('expired'),
				'harga_beli' => $this->input->post('harga_beli'),
                'harga_jual' => $this->input->post('harga_jual'),
			);
		$insert = $this->obat->save($data);
		echo json_encode(array("status" => TRUE));
	}

    public function ajax_update()
	{
		$data = array(
            'nama_obat' => $this->input->post('nama_obat'),
            'jenis_obat' => $this->input->post('jenis_obat'),
            'stok' => $this->input->post('stok'),
            'expired' => $this->input->post('expired'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
        );
		$this->obat->update(array('kode_obat' => $this->input->post('kode_obat')), $data);
		echo json_encode(array("status" => TRUE));
	}

    public function ajax_delete($id)
	{
		$this->obat->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function detail($id)
		{
			$tm_obat=$this->db->where('kode_obat',$id)
			->get('obat')
			->row();
			return $tm_obat;
	}

}