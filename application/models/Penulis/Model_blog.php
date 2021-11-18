<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model
{
	// tampil data
	public function show_data_blog(){
		$query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.id_akun FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE blog.id_akun = '$query' ORDER BY date DESC");
		return $data;
	}

	// kategori
	// tampil data semua kategori di halaman edit blog penulis
	public function show_kategori(){
		return $this->db->get('kategori');
	}

	// input data
	public function input_data($dataa,$table){
		$this->db->insert($table, $dataa);
	}

	// hapus data
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
