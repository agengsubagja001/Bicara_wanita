<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_story extends CI_Controller {

	public function index()
	{
		$this->load->view('pembaca/buat_story');
	}
} 