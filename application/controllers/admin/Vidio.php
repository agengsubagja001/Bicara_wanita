m<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {

	public function __construct(){
		parent::__construct();

	if($this->session->userdata('role_id') != '1'){
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
		$data['show_vidio'] = $this->model_vidio->Show_vidio()->result();
		$this->load->view('admin/vidio',$data);
	}

	// upload data
	function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$judul = $this->input->post('judul');
			$vidio = $this->input->post('vidio');


			// foto tubnail
			$foto_img_sampul = $_FILES['gambar_tubnail']['name'];
			$foto_tmp = $_FILES['gambar_tubnail']['tmp_name'];
			
			// Format
			 // cek ekstensi foto
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_img_sampul);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));
			// akhir cek ekstensi foto

			// GENERAT NAME PHOTO 1\
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;


			// Upload foto
			move_uploaded_file($foto_tmp,'assets/admin/vidio/gambar_tubnail/'.$encrypted);

			

			$dataa = array(
				'judul'            => $judul,
				'isi_vidio'        =>  $vidio,
				'gambar_thubnail'   => $encrypted,
				
   
			);
					
				$this->model_vidio->input_data($dataa, 'vidio');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/vidio');

		}else{

		}
	}

	// hapus data
	public function hapus($id_vidio){
		$del = array('id_vidio' => $id_vidio);
		$this->model_vidio->hapus_data($del,'vidio');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/vidio');
	}

	// edit data
	public function edit($id_vidio){
		$del = array('id_vidio' => $id_vidio);
		$data['vidio'] = $this->model_vidio->edit_data($del,'vidio')->result();
		$this->load->view('admin/edit_vidio',$data);
	}

	//  update data
	public function update(){
		$judul = $this->input->post('judul');
		$id_vidio = $this->input->post('id_vidio');
		$isi   = $this->input->post('vidio');
	

        $data = array(
			'judul'            => $judul,
			'isi_vidio'        => $isi,
			'id_vidio'         => $id_vidio
        );

		$where = array(
			'id_vidio' => $id_vidio
		);

       	
		$this->model_vidio->update_data($where,$data, 'vidio');
		$this->session->set_flashdata('success_edit','Action Completed');
		redirect('admin/vidio');

	}
}