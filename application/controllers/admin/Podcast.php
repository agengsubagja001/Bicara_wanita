<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcast extends CI_Controller {

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
		$data['show_podcast'] = $this->Model_podcast->Show_podcast()->result();
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
					
				$this->Model_podcast->input_data($dataa, 'podcast');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/podcast');

		}else{

		}
	}

	// hapus	
	public function hapus($id_podcast){
		$del = array('id_podcast' => $id_podcast);
		$this->Model_blog->hapus_data($del,'podcast');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/podcast');
	}
}