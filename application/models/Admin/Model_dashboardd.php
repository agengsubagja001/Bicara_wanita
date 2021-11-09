<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboardd extends CI_Model
{
	// tampil data
	public function show_data_blog(){
		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}

	// menampilkan jumlah blog
	public function show_jml(){
		$this->db->select_sum('id_blog');
		return $this->db->get('blog');
	}
}
