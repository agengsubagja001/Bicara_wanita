<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografik extends CI_Controller {

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

	// hapus	
	public function hapus($id_infografik){
		$del = array('id_infografik' => $id_infografik);
		$this->model_infografik->hapus_data($del,'infografik');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/infografik');
	}
	
}