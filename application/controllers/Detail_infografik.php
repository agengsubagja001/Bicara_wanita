<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_infografik extends CI_Controller {

	public function index()
	{
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		// / untuk menampilkan infografik
		$data['show_infografik'] = $this->model_detail_infografik->Show_infografik()->result();
		$this->load->view('detail_infografik',$data);
	}

	// menampilkan detail infografik
	public function artikel_infografik($id_infografik)
	{
		$this->load->model('Model_detail_infografik');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_detail_infografik->detail_data($id_infografik);
		$data['detail'] = $detail;
		$this->load->view('artikel_infografik',$data);
	}
} 