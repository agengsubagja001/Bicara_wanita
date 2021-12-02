<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_storyy extends CI_Model
{
	// tampil data story di panel story
	public function show_story_pembaca(){
		$query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT story.id_story, story.gambar, story.judul_story, story.isi_story, story.status, story.tanggal, akun.id_akun, akun.nama_lengkap FROM story INNER JOIN akun ON story.id_akun = akun.id_akun WHERE story.id_akun = '$query' ORDER BY tanggal DESC");
		return $data;
	}

	// tampil semua data story di halaman detail story
	public function show_all_story(){
		// $query = $this->session->userdata('id_akun');
		$data = $this->db->query("SELECT story.id_story, story.judul_story, story.isi_story, story.status, story.tanggal, akun.id_akun, akun.nama_lengkap FROM story INNER JOIN akun ON story.id_akun = akun.id_akun WHERE story.status = 'PUBLISH' ORDER BY tanggal DESC LIMIT 20");
		return $data;
	}

	// tampil artikel story
	public function detail_data($id_story){		
		$query = $this->db->get_where('story', array('id_story' => $id_story))->row();
		return $query;
	}
		
     // update data story
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	 // edit data story
	 function edit_data($del,$table){		
		return $this->db->get_where($table,$del);
	}

	// hapus data story
	public function hapus_data($del,$table){
		$this->db->where($del);
		$this->db->delete($table);
	}

	  // input data story
	  public function input_data($dataa,$table){
		$this->db->insert($table, $dataa);
	}
}
