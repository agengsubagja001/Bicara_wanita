<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	
	public function index()
	{
		// / untuk menampilkan program
		$data['show_infografik'] = $this->Model_welcome->Show_infografik()->result();
		// untuk menampilkan program
		$data['show_program'] = $this->Model_welcome->Show_program()->result();
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

	// tampil detail program
	public function detail_program($id_program)
	{
		$this->load->model('Model_detail_program');
		$detail = $this->Model_detail_program->detail_data($id_program);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_program',$data);
	}

	// tampil detail infografik
	public function artikel_infografik($id_infografik)
	{
		$this->load->model('Model_detail_infografik');
		$detail = $this->Model_detail_infografik->detail_data($id_infografik);
		$data['detail'] = $detail;
		// untuk menampilkan di halaman utama
		$data['terbaru'] = $this->Model_detail_infografik->show_info_halaman_utama()->result();
		$this->load->view('artikel_infografik',$data);
	}
}
