<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kategori extends CI_Controller {

	public function index()
	{
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$this->load->view('Detail_kategori',$data);
	}
} 