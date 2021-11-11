<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_welcome extends CI_Model
{
	// tampil data blog
	public function show_blog(){
		$this->db->order_by('date', 'desc');
		return $this->db->limit(8)->get('blog');
	}

	// tampil data podcast
	public function show_podcast(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(4)->get('podcast');
	}

	// tampil data podcast
	public function show_vidio(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(9)->get('vidio');
	}

	public function show_vidio1(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(12)->get('vidio');
	}

	// tampil data program
	public function show_program(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(3)->get('program');
	}

	// tampil data infografik
	public function show_infografik(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(6)->get('infografik');
	}
	

}
