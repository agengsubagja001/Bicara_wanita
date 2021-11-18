<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model

{
	// tampil data akun penulis di halaman akun penulis
	public function show_data_penulis(){
        $data = $this->db->query("SELECT * FROM `akun` WHERE role_id = '2' ORDER BY id_akun DESC");
		return $data;
    }
		

    // untuk menambahkan data akun penulis
	public function input_data_penulis($dataa,$table){
		$this->db->insert($table,$dataa);
	}

	 // edit data kategori
	 function edit_data($del,$table){		
		return $this->db->get_where($table,$del);
	}

	// hapus data kategori
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
