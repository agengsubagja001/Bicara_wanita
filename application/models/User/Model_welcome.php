<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_welcome extends CI_Model
{
	// tampil data blog
	public function show_blog(){
		$data = $this->db->query("SELECT blog.id_blog, blog.judul, blog.gambar, blog.date, kategori.id_kategori, kategori.kategori FROM blog INNER JOIN kategori ON blog.id_kategori = kategori.id_kategori WHERE blog.id_blog ORDER BY date DESC LIMIT 8");
		return $data;
		
	}

	// tampil data banner
	public function show_banner(){
		$data = $this->db->query("SELECT banner.id_banner, banner.judul_banner, banner.gambar_banner, banner.tanggal, program.id_program, program.judul FROM banner INNER JOIN program ON banner.id_program = program.id_program WHERE banner.id_program ORDER BY tanggal DESC LIMIT 6");
		return $data;
		
	}

	// tampil data podcast
	public function show_podcast(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(4)->get('podcast');
	}
	// tampil data story
	public function show_story(){
		// $query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT story.id_story, story.judul_story, story.isi_story, story.status, story.tanggal, akun.id_akun, akun.username, akun.nama_lengkap FROM story INNER JOIN akun ON story.id_akun = akun.id_akun WHERE story.status = 'PUBLISH' ORDER BY tanggal DESC LIMIT 4");
		return $data;
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
	
	// tampil detail program
	public function detail_penulis($id_akun){		
		$query = $this->db->get_where('akun', array('id_akun' => $id_akun))->row();
        return $query;
	}


}
