<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_welcome extends CI_Model
{
	// tampil data blog
	public function show_blog(){
		// $data = $this->db->query("SELECT akun.nama_lengkap, profil_penulis.deskripsi, profil_penulis.foto_profil, blog.judul, blog.isi, blog.gambar, blog.kategori, blog.date FROM ((detail_blog INNER JOIN akun ON detail_blog.id_akun = akun.id_akun) INNER JOIN profil_penulis ON detail_blog.id_penulis = profil_penulis.id_penulis INNER JOIN blog ON detail_blog.id_blog = blog.id_blog)");
		$this->db->order_by('date', 'desc');
		return $this->db->limit(8)->get('blog');
		
	}

	// tampil data podcast
	public function show_podcast(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(4)->get('podcast');
	}

	// tampil data program
	public function show_program(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(6)->get('program');
	}

	// tampil data infografik
	public function show_infografik(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(3)->get('infografik');
	}
	


}
