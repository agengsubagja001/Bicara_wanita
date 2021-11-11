<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isi_podcast extends CI_Controller {

	public function index()
	{
		$this->load->view('isi_podcast');
	}
} 