<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_story extends CI_Controller {

	public function index()
	{
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		// / untuk menampilkan story
		$data['show_story'] = $this->model_storyy->show_all_story()->result();
		$this->load->view('detail_story',$data);
	}
	
	// tampil artikel story
	public function artikel_story($id_story)
	{
		$this->load->model('Model_storyy');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_storyy->detail_data($id_story);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('artikel_story',$data);
	}
} 