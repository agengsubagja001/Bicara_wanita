<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_login extends CI_Controller {

	public function index()
	{
		$this->load->view('form_login');
	}
} 