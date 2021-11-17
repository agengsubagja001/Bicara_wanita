<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_vidio extends CI_Model
{
	
	// tampil data vidio di halaman utama
	public function show_vidio(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(4)->get('vidio');
	}

    // tampil semua vidio di detail vidio 
    public function show_vidio1(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(12)->get('vidio');
	}

    // menampilkan list vidio terbaru di halaman isi vidio
	public function show_vidio_terbaru(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->limit(6)->get('vidio');
	}

    // menampilkan vidio berdasarkan id_vidio
	public function detail_data1($id_vidio){		
		$query = $this->db->get_where('vidio', array('id_vidio' => $id_vidio))->row();
        return $query;
	}

}
