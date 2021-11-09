<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_blog extends CI_Model
{
	// tampil detail blog
	public function detail_data($id_blog){		
		$query = $this->db->get_where('blog', array('id_blog' => $id_blog))->row();
        return $query;
	}

    // tampil blog terbaru
	public function show_terbaru(){
		$this->db->order_by('date', 'desc');
		return $this->db->limit(6)->get('blog');
	}

}
