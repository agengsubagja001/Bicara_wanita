<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['show_profil'] = $this->Model_profil->Show_profil()->result();
		$this->load->view('penulis/profil',$data);
	}

	// edit data
	public function edit($id_akun){
		$del = array('id_akun' => $id_akun);
		$data['user'] = $this->Model_blog->edit_data($del,'akun')->result();
		$this->load->view('penulis/edit_profil',$data);
	}
}