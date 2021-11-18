<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	// tampil data semua kategori di halaman tambah blog penulis
	public function show_kategori(){
		return $this->db->get('kategori');
	}
	
	// tampil semua data kategori di halaman tambah blog admin
	public function show()
	{
        return $this->db->get('kategori');
    }

	// input data kategori relasi
	public function input_data_kategori($data_kategori,$table){
		$this->db->insert($table, $data_kategori);
	}

		// input data
		public function input_detail_blog($data_penulis,$table){
			$this->db->insert($table, $data_penulis);
		}


		// input data kategori relasi
	public function input_data_kategori1($data_kategori,$table){
		$this->db->insert($table, $data_kategori);
	}

		// input data
		public function input_detail_blog1($data_penulis,$table){
			$this->db->insert($table, $data_penulis);
		}
		

    // untuk menambahkan data kategori
	function input_data($data,$table){
		$this->db->insert($table,$data);
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
