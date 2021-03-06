<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboardd extends CI_Model
{
	// tampil data blog penulis
	public function show_data_blog(){
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.role_id, akun.id_akun, akun.nama_lengkap, akun.username FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE akun.role_id = '2' ORDER BY date DESC");
		return $data;
		
	}

	// tampil data blog admin
	public function show_data_blog_admin(){
		$query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.id_akun FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE blog.id_akun = '$query' ORDER BY date DESC");
		return $data;
	}

	// menampilkan jumlah blog
	public function jml_blog(){
		$query = $this->session->userdata('id_akun');
		$cek = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.id_akun FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE blog.id_akun = '$query' ORDER BY date DESC");
		if($cek->num_rows()>0)
		{
			return $cek->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah blog penulis
	public function jml_blog_penulis(){
		// $query = $this->session->userdata('id_akun');
		$cek = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.id_akun FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE role_id = '2' ORDER BY date DESC");
		if($cek->num_rows()>0)
		{
			return $cek->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah podcast
	public function jml_podcast(){
		$query = $this->db->get('podcast');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah vidio
	public function jml_vidio(){
		$query = $this->db->get('vidio');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah story
	public function jml_story(){
		$query = $this->db->get('story');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah vidio
	public function jml_kategori(){
		$query = $this->db->get('kategori');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah program
	public function jml_program(){
		$query = $this->db->get('program');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	// menampilkan jumlah infografik
	public function jml_infografik(){
		$query = $this->db->get('infografik');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}
}
