<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_blog extends CI_Model
{
	// tampil detail blog
	public function detail_data($id_blog){		
		$query = $this->db->get_where('blog', array('id_blog' => $id_blog))->row();
        return $query;
	}

    // tampil blog terbaru
	public function show_terbaru(){
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, kategori.id_kategori, kategori.kategori FROM blog INNER JOIN kategori ON blog.id_kategori = kategori.id_kategori WHERE blog.id_blog ORDER BY date DESC LIMIT 6");
		return $data;
	}

	// join untuk blog dan penulis
	public function join_penulis($id_blog){
		return $this->db->query("SELECT blog.id_blog, akun.id_akun, akun.foto_profil, akun.nama_lengkap, akun.deskripsi FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE blog.id_blog = '$id_blog'")->row();
	}

	// join untuk kategori dengan penulis
	public function join_kategori($id_blog)
	{
		return $this->db->query("SELECT blog.id_blog, kategori.id_kategori, kategori.kategori FROM blog INNER JOIN kategori ON blog.id_kategori = kategori.id_kategori WHERE blog.id_blog")->row();
	}
}
