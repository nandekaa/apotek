<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
	}
	
	public function index()
	{
		$data['pengeluaran']= $this->Dashboard_model->expense();
		$data['exp']= $this->Dashboard_model->expired();
		$data['need']= $this->Dashboard_model->supply();
		$this->load->view('dashboard',$data);
	}
}