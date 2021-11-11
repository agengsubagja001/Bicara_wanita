<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_program extends CI_Model
{
	// tampil detail program
	public function detail_data($id_program){		
		$query = $this->db->get_where('program', array('id_program' => $id_program))->row();
        return $query;
	}

    // tampil program terbaru
	public function show_terbaru(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(3)->get('program');
	}

}
