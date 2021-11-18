<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model
{
	// tampil data
	public function show_data_blog(){
		$query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, akun.id_akun FROM blog INNER JOIN akun ON blog.id_akun = akun.id_akun WHERE blog.id_akun = '$query' ORDER BY date DESC");
		return $data;
	}

	// menampilkan jumlah blog
	public function show_jml(){
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
}
