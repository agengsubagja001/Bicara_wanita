<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_infografik extends CI_Model
{
	// tampil detail infografik
	public function detail_data($id_infografik){		
		$query = $this->db->get_where('infografik', array('id_infografik' => $id_infografik))->row();
        return $query;
	}

	// tampil data infografik
	public function show_infografik(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(12)->get('infografik');
	}

    // tampil infografik terbaru
	public function show_info_halaman_utama(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(6)->get('infografik');
	}

}
