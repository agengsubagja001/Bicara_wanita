<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_story extends CI_Controller {
	public function __construct(){
		parent::__construct();

	if($this->session->userdata('role_id') != '3'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Anda Belum Login!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
				redirect('form_login/login');
		}
	}

	public function index()
	{
		$this->load->view('pembaca/buat_story');
	}

	// upload story
	public function upload(){
		$status = "sedang di proses";
        $judul = $this->input->post('judul');
		$id_akun = $this->input->post('id_akun');
		$isi = $this->input->post('isi');


        $data = array(
            'judul_story'   => $judul,
			'id_akun' => $id_akun,
			'isi_story'     => $isi,
			'status'  => $status
        );

        $this->model_storyy->input_data($data,'story');
        $this->session->set_flashdata('success','Action Completed');
        redirect('pembaca/dashboard');
    }

	function upload1()
	{
		if (isset($_POST['btn_submit'])) {
			$status = "sedang di proses";
			$judul = $this->input->post('judul');
			$id_akun = $this->input->post('id_akun');
			$isi = $this->input->post('isi');

			// Foto
			// blog
			$foto_icon_brand = $_FILES['gambar']['name'];
			$icon_tmp = $_FILES['gambar']['tmp_name'];
			
			// Format
			 // cek ekstensi foto
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_icon_brand);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));
			// // GENERAT NAME PHOTO 1\
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;
			// Upload Icon Brand
			move_uploaded_file($icon_tmp,'assets/story/img_story/'.$encrypted);

			$data = array(
				'judul_story'   => $judul,
				'id_akun'       => $id_akun,
				'isi_story'     => $isi,
				'status'        => $status,
				'gambar'        => $encrypted,
				
   
			);
					
			$this->model_storyy->input_data($data,'story');
			$this->session->set_flashdata('success','Action Completed');
			redirect('pembaca/dashboard');

		}else{

		}
	}
} 