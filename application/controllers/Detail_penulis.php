<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_penulis extends CI_Controller {

	public function index()
	{   
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$data['show_profil'] = $this->model_profil->Show_profil()->result();
		$this->load->view('Detail_penulis',$data);
	}
}