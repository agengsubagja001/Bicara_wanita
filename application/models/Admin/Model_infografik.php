<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_infografik extends CI_Model
{
	// tampil data
	public function show_infografik()
    {
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('infografik');
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

	// edit data
	function edit_data($del,$table){		
		return $this->db->get_where($table,$del);
	}

	// update data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}
