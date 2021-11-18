<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_blog extends CI_Controller {

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
		$data['show_kat'] = $this->Model_kategori->show()->result();
		$this->load->view('admin/tambah_blog',$data);
	}

	// function tambah data
	function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$id_akun = $this->input->post('id_akun');
			$judul = $this->input->post('judul');
			// $id_blog = $this->input->post('id_blog');
			$isi   = $this->input->post('isi');
			$id_kategori   = $this->input->post('kategori');

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
			move_uploaded_file($icon_tmp,'assets/admin/blog/img_sampul/'.$encrypted);

			$dataa = array(
				// 'id_blog'         => $id_blog,
				'judul'            => $judul,
				'isi'              => $isi,
				'id_kategori'         => $id_kategori,
				'id_akun'         => $id_akun,
				'gambar'           => $encrypted,
   
			);
					
				$this->Model_blog->input_data($dataa, 'blog');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/blog');
				//  redirect('tambah_produk');
				echo "<script>console.log('berhasil! pindah page')</script>";

		}else{

		}
	}

}