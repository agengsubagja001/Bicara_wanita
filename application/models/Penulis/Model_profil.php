<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model
{
    // tampil data profil
	public function show_profil(){
		$data = $this->db->query("SELECT * FROM `akun` WHERE id_akun = '1'");
		return $data;
	}

    // edit data profil
	function edit_data($del,$table){		
		return $this->db->get_where($table,$del);
	}

    // update data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}