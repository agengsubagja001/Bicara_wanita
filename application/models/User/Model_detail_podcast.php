<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_podcast extends CI_Model
{
	
	// tampil data semua podcast di halaman detail podcast
	public function show_podcast(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(16)->get('podcast');
	}

    // tampil data podcast terbaru di halaman detail podcast terbaru di bawah banner pembatas
	public function show_podcast_terbaru(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(4)->get('podcast');
	}

    // tampil data podcast terbaru di halaman isi podcast terbaru 
	public function show_podcast_lainnya(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(8)->get('podcast');
	}

    // menampilkan isi podcast berdasrkan id_Podcast
	public function show_isi($id_podcast){		
		$query = $this->db->get_where('podcast', array('id_podcast' => $id_podcast))->row();
        return $query;
	}

}
