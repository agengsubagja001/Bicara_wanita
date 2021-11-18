<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_welcome extends CI_Model
{
	// tampil data blog
	public function show_blog(){
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, kategori.id_kategori, kategori.kategori FROM blog INNER JOIN kategori ON blog.id_kategori = kategori.id_kategori WHERE blog.id_blog ORDER BY date DESC LIMIT 8");
		return $data;
		
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
