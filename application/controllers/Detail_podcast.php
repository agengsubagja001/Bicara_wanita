<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_podcast extends CI_Controller {

	public function index()
	{
		// untuk menampilkan semua podcast
		$data['show_podcast'] = $this->Model_detail_podcast->Show_podcast()->result();
		// untuk menampilkan podcast berdasararkan terbaru
		$data['show_terbaru'] = $this->Model_detail_podcast->show_podcast_terbaru()->result();
		$this->load->view('detail_podcast',$data);
	}

	// untuk menampilkan isi podcast berdasarkan id
	public function isi_podcast($id_podcast){
		$this->load->model('Model_detail_podcast');
		$detail = $this->Model_detail_podcast->show_isi($id_podcast);
		$data['detail'] = $detail;
		// untuk menampilkan podcast berdasararkan terbaru di halaman isi podcast
		$data['show_terbaru'] = $this->Model_detail_podcast->show_podcast_lainnya()->result();
		$this->load->view('isi_podcast',$data);
	}
} 