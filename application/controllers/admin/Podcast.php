<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcast extends CI_Controller {

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
		$data['show_podcast'] = $this->model_podcast->Show_podcast()->result();
		$this->load->view('admin/podcast',$data);
	}

	// upload
	function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$judul = $this->input->post('judul');

			// Foto
			// podcast
			$foto_img_sampul = $_FILES['gambar']['name'];
			$foto_tmp = $_FILES['gambar']['tmp_name'];

			// audio
			// podcast
			$audio_podcast = $_FILES['audio']['name'];
			$audio_tmp = $_FILES['audio']['tmp_name'];
			
			// Format
			 // cek ekstensi foto
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_img_sampul);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));
			// akhir cek ekstensi foto

			 // cek ekstensi audio
			 $ekstensiAudioValid = ['mp4','mp3','mpeg'];
			 $ekstensiAudio = explode('.',$audio_podcast);
			 $ekstensiAudio = strtolower(end($ekstensiAudio));
			// Akhir cek ekstensi audio

			// GENERAT NAME PHOTO 1\
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;

			// GENERAT NAME AUDIO 1\
			$encrypteddua = base64_encode($audio_podcast);
			$encrypteddua .= '.';
			$encrypteddua .= $ekstensiAudio;


			// Upload foto
			move_uploaded_file($foto_tmp,'assets/img_podcast/'.$encrypted);

			// upload Audio
			move_uploaded_file($audio_tmp,'assets/audio/'.$encrypteddua);

			$dataa = array(
				'judul'            => $judul,
				'isi'               =>  $encrypteddua,
				'gambar'         => $encrypted,
   
			);
					
				$this->model_podcast->input_data($dataa, 'podcast');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/podcast');

		}else{

		}
	}

	// hapus	
	public function hapus($id_podcast){
		$del = array('id_podcast' => $id_podcast);
		$this->model_blog->hapus_data($del,'podcast');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/podcast');
	}

	// edit data
	public function edit($id_podcast){
		$del = array('id_podcast' => $id_podcast);
		$data['podcast'] = $this->model_program->edit_data($del,'podcast')->result();
		$this->load->view('admin/edit_podcast',$data);
	}

	//  update data
	public function update(){
		$judul = $this->input->post('judul');
		$id_podcast = $this->input->post('id_podcast');
		// $isi   = $this->input->post('isi');
	

        $data = array(
			'judul'            => $judul,
			// 'isi'              => $isi,
			'id_podcast'    => $id_podcast
        );

		$where = array(
			'id_podcast' => $id_podcast
		);

       	
		$this->model_program->update_data($where,$data, 'podcast');
		$this->session->set_flashdata('success_edit','Action Completed');
		redirect('admin/podcast');

	}
}