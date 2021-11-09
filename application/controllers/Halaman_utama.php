<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	
	public function index()
	{
		// untuk menampilkan vidio
		$data['show_vidio'] = $this->Model_welcome->Show_vidio()->result();
		// unutk menampilkan podcast
		$data['show_podcast'] = $this->Model_welcome->Show_podcast()->result();
		// untuk menampilkan blog
		$data['show_data'] = $this->Model_welcome->Show_blog()->result();
		$this->load->view('halaman_utama',$data);
	}

	// tampil detail blog
	public function detail_blog($id_blog)
	{
		$this->load->model('Model_detail_blog');
		$detail = $this->Model_detail_blog->detail_data($id_blog);
		$data['detail'] = $detail;
		$data['terbaru'] = $this->Model_detail_blog->Show_terbaru()->result();
		$this->load->view('detail_blog',$data);
	}
}
