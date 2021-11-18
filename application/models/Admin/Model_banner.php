<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_banner extends CI_Model

{
	// tampil data banner
	public function show_banner(){
        $data = $this->db->query("SELECT banner.id_banner, banner.judul_banner, banner.gambar_banner, banner.tanggal, program.judul, program.id_program FROM banner INNER JOIN program ON banner.id_program = program.id_program WHERE banner.id_banner ORDER BY tanggal DESC");
		return $data;
    }

    // tampil data semua program
	public function show_program(){
		return $this->db->get('program');
	}
		

    // input data
	public function input_data($dataa,$table){
		$this->db->insert($table, $dataa);
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
