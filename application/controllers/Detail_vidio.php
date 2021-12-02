<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_vidio extends CI_Controller {

	public function index()
	{
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		// untuk menampilkan vidio semua vidio
		$data['show_vidio1'] = $this->model_detail_vidio->Show_vidio1()->result();
		$this->load->view('detail_vidio',$data);
	}
	
} 