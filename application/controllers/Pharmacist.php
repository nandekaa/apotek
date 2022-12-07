<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacist extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model', 'user');
		if($this->session->userdata('logged') !=TRUE || $this->session->userdata('akses') !='1'){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('pharmacist');
	}

	public function ajax_list()
	{
		$list = $this->user->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
			$row[] = $user->id;
			$row[] = $user->name;
			$row[] = $user->username;
			$row[] = $user->no_hp;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user('."'".$user->id."'".')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$user->id."'".')"><i class="fa fa-trash" aria-hidden="true"></i></a>';
		
			$data[] = $row;
		}
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->user->count_all(),
            "recordsFiltered" => $this->user->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
    }
    
    public function ajax_edit($id)
	{
		$data = $this->user->get_by_id($id);
		echo json_encode($data);
	}

    public function ajax_add()
	{
		$data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'no_hp' => $this->input->post('no_hp'),
				'password' => sha1($this->input->post('password')),
				'akses' => $this->input->post('akses'),
				'status' => $this->input->post('status'),
			);
		$insert = $this->user->save($data);
		echo json_encode(array("status" => TRUE));
	}

    public function ajax_update()
	{
		$data = array(
            'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'no_hp' => $this->input->post('no_hp'),
			'password' => sha1($this->input->post('password')),
			'akses' => $this->input->post('akses'),
			'status' => $this->input->post('status'),
        );
		$this->user->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

    public function ajax_delete($id)
	{
		$this->obat->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}