<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_penulis extends CI_Controller {

	public function index()
	{   
		$data['show_profil'] = $this->model_profil->Show_profil()->result();
		$this->load->view('Detail_penulis',$data);
	}
}