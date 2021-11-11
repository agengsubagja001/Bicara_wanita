<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboardd extends CI_Model
{
	// tampil data
	public function show_data_blog(){
		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}

	// menampilkan jumlah blog
	public function jml_blog(){
		$query = $this->db->get('blog');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
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
