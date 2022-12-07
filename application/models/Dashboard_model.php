<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

    public function stok()
	{
		$query = $this->db->select('SUM(stok) as total')
        ->from('obat')
        ->get();
        return $query->row()->total;
	}

    public function expense()
	{
		$query = $this->db->select('SUM(stok*harga_beli) as pengeluaran')
        ->from('obat')
        ->get();
        return $query->row()->pengeluaran;
	}

    public function expired()
	{
		$query = $this->db->select('SUM(stok) as exp')
        ->from('obat')
        ->where('date(expired) < CURDATE()')
        ->get();
        return $query->row()->exp;
	}

    public function supply()
	{
		$query = $this->db->select('count(*) as need')
        ->from('obat')
        ->where('stok < 50')
        ->get();
        return $query->row()->need;
	}
}