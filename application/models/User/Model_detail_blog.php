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

	// join untuk blog
	public function join_blog($id_blog){
		return $this->db->query("SELECT akun.nama_lengkap, akun.deskripsi, akun.foto_profil, blog.judul
		FROM ((detail_blog
		INNER JOIN akun ON akun.id_akun = detail_blog.id_akun)
		INNER JOIN blog ON blog.id_blog = detail_blog.id_blog) WHERE blog.id_blog = '$id_blog'")->row();
	}
}
