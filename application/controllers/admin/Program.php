<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

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
		$data['show_program'] = $this->Model_program->Show_program()->result();
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
					
				$this->Model_program->input_data($dataa, 'program');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/program');

		}else{

		}
	}

	// hapus	
	public function hapus($id_program){
		$del = array('id_program' => $id_program);
		$this->Model_program->hapus_data($del,'program');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/program');
	}
}