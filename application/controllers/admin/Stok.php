<?php

class Stok extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/index.php
        $this->load->view("admin/stok");
	}
}