<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

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
		$data['show_program'] = $this->model_program->Show_program()->result();
		$this->load->view('admin/program',$data);
	}

	// upload
	public function upload()
	{
		if (isset($_POST['btn_submit1'])) {
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');

			// Foto
			// sampul
			$foto_sampul_program = $_FILES['gambar_sampul']['name'];
			$sampul_tmp = $_FILES['gambar_sampul']['tmp_name'];

			// foto
			// konten
			$foto_konten_program = $_FILES['gambar_konten']['name'];
			$konten_tmp = $_FILES['gambar_konten']['tmp_name'];

			// Format
			 // cek ekstensi foto sampul
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_sampul_program);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));

			// // GENERAT NAME PHOTO 1\
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;

			// // GENERAT NAME PHOTO 1
			$encrypteddua = uniqid();
			$encrypteddua .= '.';
			$encrypteddua .= $ekstensiGambar;

			// upload foto sampul
			move_uploaded_file($sampul_tmp, 'assets/admin/program/img_sampul/'.$encrypted);

			// upload foto konten
			move_uploaded_file($konten_tmp, 'assets/admin/program/img_konten/'.$encrypteddua);

			$dataa = array(
				'judul'            	=> $judul,
				'isi'               => $isi,
				'gambar_sampul'     => $encrypted,
				'gambar_kontent'    => $encrypteddua,
   
			);
					
				$this->model_program->input_data($dataa, 'program');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/program');

		}else{

		}
	}

	// hapus	
	public function hapus($id_program){
		$del = array('id_program' => $id_program);
		$this->model_program->hapus_data($del,'program');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/program');
	}

	// edit data
	public function edit($id_program){
		$del = array('id_program' => $id_program);
		$data['program'] = $this->model_program->edit_data($del,'program')->result();
		$this->load->view('admin/edit_program',$data);
	}

	//  update data
	public function update(){
		$judul = $this->input->post('judul');
		$id_program = $this->input->post('id_program');
		$isi   = $this->input->post('isi');
	

        $data = array(
			'judul'            => $judul,
			'isi'              => $isi,
			'id_program'    => $id_program
        );

		$where = array(
			'id_program' => $id_program
		);

       	
		$this->model_program->update_data($where,$data, 'program');
		$this->session->set_flashdata('success_edit','Action Completed');
		redirect('admin/program');

	}
}