<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografik extends CI_Controller {

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
		$data['show_infografik'] = $this->model_infografik->Show_infografik()->result();
		$this->load->view('admin/infografik',$data);
	}

	// upload
	public function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');

			// Foto
			// sampul
			$foto_sampul_infografik = $_FILES['gambar_sampul']['name'];
			$infografik_tmp = $_FILES['gambar_sampul']['tmp_name'];

			// foto
			// konten
			$foto_konten_program = $_FILES['gambar_infografik']['name'];
			$konten_tmp = $_FILES['gambar_infografik']['tmp_name'];

			// Format
				// cek ekstensi foto sampul
				$ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
				$ekstensiGambar = explode('.',$foto_sampul_infografik);
				$ekstensiGambar = strtolower(end($ekstensiGambar));

			// // GENERAT NAME PHOTO 1\
			$encrypted = base64_encode($foto_sampul_infografik);
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;

			// // GENERAT NAME PHOTO 1
			$encrypteddua = base64_encode($foto_konten_program);
			$encrypteddua .= '.';
			$encrypteddua .= $ekstensiGambar;

			// upload foto sampul
			move_uploaded_file($infografik_tmp, 'assets/admin/infografik/img_sampul/'.$encrypted);

			// upload foto konten
			move_uploaded_file($konten_tmp, 'assets/admin/infografik/img_infografik/'.$encrypteddua);

			$dataa = array(
				'judul'            	=> $judul,
				'isi'               => $isi,
				'gambar_sampul'     => $encrypted,
				'gambar_kontent'    => $encrypteddua,
	
			);
					
				$this->model_infografik->input_data($dataa, 'infografik');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/infografik');

		}else{

		}
	}

	//  update data
	public function update(){
		$judul = $this->input->post('judul');
		$id_infografik = $this->input->post('id_infografik');
		$isi   = $this->input->post('isi');
	

        $data = array(
			'judul'            => $judul,
			'isi'              => $isi,
			'id_infografik'    => $id_infografik,
        );

		$where = array(
			'id_infografik' => $id_infografik
		);

       	
		$this->model_infografik->update_data($where,$data, 'infografik');
		$this->session->set_flashdata('success_edit','Action Completed');
		redirect('admin/infografik');

	}

	// hapus	
	public function hapus($id_infografik){
		$del = array('id_infografik' => $id_infografik);
		$this->model_infografik->hapus_data($del,'infografik');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/infografik');
	}

	// edit data
	public function edit($id_infografik){
		$del = array('id_infografik' => $id_infografik);
		$data['infografik'] = $this->model_infografik->edit_data($del,'infografik')->result();
		$this->load->view('admin/edit_infografik',$data);
	}
	
}