<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model
{
    // untuk menampilkan profil dan data blog
    public function show_join_profil(){
		$data= $this->db->query("SELECT akun.nama_lengkap, akun.deskripsi, akun.foto_profil, blog.judul, blog.date
		FROM ((detail_blog
		INNER JOIN akun ON akun.id_akun = detail_blog.id_akun)
		INNER JOIN blog ON blog.id_blog = detail_blog.id_blog) WHERE akun.id_akun = '1';");
        return $data;
	}

    // 
    // tampil data
	public function show_profil(){
		$data = $this->db->query("SELECT * FROM `akun` WHERE id_akun = '1'");
		return $data;
	}

	// tampil data
	public function show_data_blog(){
		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
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
