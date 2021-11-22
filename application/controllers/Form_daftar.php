<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_daftar extends CI_Controller {

	public function index()
	{
		$this->load->view('form_daftar');
	}

	// untuk upload data daftar
	public function upload(){
		$role_id = "3";
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');

        $data = array(
			'role_id'   => $role_id,
			'username'  => $username,
			'password'  => $password,
			'nama_lengkap'      => $nama
        );

        $this->model_login->input_data($data,'akun');
        $this->session->set_flashdata('success','Action Completed');
        redirect('form_login/login');
    }
} 