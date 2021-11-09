<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model
{
	// tampil data
	public function show_blog()
    {
		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}

    // input data
	public function input_data($dataa,$table){
		$this->db->insert($table, $dataa);
	}

    // hapus
	public function hapus_data($del,$table){
		$this->db->where($del);
		$this->db->delete($table);
	}

}
