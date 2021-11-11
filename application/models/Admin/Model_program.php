<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_program extends CI_Model
{
	// tampil data
	public function show_program()
    {
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('program');
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
