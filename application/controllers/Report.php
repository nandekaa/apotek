<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE || $this->session->userdata('akses') !='1'){
			$url=base_url('login');
			redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->view('report');
	}
}