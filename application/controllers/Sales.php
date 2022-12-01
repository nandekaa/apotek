<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE || $this->session->userdata('akses') !='2'){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->view('sales');
	}
}