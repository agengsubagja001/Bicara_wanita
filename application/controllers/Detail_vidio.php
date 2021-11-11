<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_vidio extends CI_Controller {

	public function index()
	{
		// untuk menampilkan vidio
		// $data['terbaru1'] = $this->Model_detail_infografik->S()->result();
		// untuk menampilkan vidio
		$data['show_vidio1'] = $this->Model_welcome->Show_vidio1()->result();
		$this->load->view('detail_vidio',$data);
	}
} 