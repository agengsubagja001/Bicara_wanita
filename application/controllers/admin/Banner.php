<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
        $data['show_program'] = $this->model_banner->Show_program()->result();
		$data['show_banner'] = $this->model_banner->Show_banner()->result();
		$this->load->view('admin/banner',$data);
	}

    // upload data
    function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$id_program = $this->input->post('program');
			$judul = $this->input->post('judul');

			// Foto
			// blog
			$foto_icon_brand = $_FILES['gambar_banner']['name'];
			$icon_tmp = $_FILES['gambar_banner']['tmp_name'];
			
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
			move_uploaded_file($icon_tmp,'assets/banner/'.$encrypted);

			$dataa = array(
				'judul_banner'            => $judul,
				'id_program'       => $id_program,
				'gambar_banner'    => $encrypted,
   
			);
					
				$this->model_banner->input_data($dataa, 'banner');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/banner');
				//  redirect('tambah_produk');
				echo "<script>console.log('berhasil! pindah page')</script>";

		}else{

		}
    }

	// hapus data
	public function hapus($id_blog){
		$del = array('id_blog' => $id_blog);
		$this->model_blog->hapus_data($del,'blog');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/blog');
	}

	// edit data
	public function edit($id_blog){
		$del = array('id_blog' => $id_blog);
		$data['user'] = $this->model_blog->edit_data($del,'blog')->result();
		$this->load->view('admin/edit_blog',$data);
	}

	// update data
	public function update(){
		{
			if (isset($_POST['btn_submit'])) {
				$judul = $this->input->post('judul');
				$id_blog = $this->input->post('id_blog');
				$isi   = $this->input->post('isi');
				$kategori   = $this->input->post('kategori');
	
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
				$encrypted = base64_encode($foto_icon_brand);
				$encrypted .= '.';
				$encrypted .= $ekstensiGambar;
				// Upload Icon Brand
				move_uploaded_file($icon_tmp,'./assets/img_sampul/'.$encrypted);
	
				$data = array(
					
					'judul'            => $judul,
					'isi'              => $isi,
					'kategori'         => $kategori,
					'gambar'       => $encrypted
	   
				);

				$where = array(
					'id_blog' => $id_blog
				);
						
					$this->model_blog->update_data($where,$data, 'blog');
					$this->session->set_flashdata('success_edit','Action Completed');
					redirect('admin/blog');
					//  redirect('tambah_produk');
					echo "<script>console.log('berhasil! pindah page')</script>";
	
			}else{
	
			}
		}
	}
}
