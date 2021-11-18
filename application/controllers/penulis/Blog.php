<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$data['show_blog'] = $this->Model_blog->Show_data_blog()->result();
		$this->load->view('penulis/blog',$data);
	}

	// function upload image
	public function upload2(){
		$dataa['gambar'] = '';
		$gambar = $_FILES['gambar']['name'];

		$config['upload_path'] = 'gambar_sampul/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('gambar'))
		{
			echo "gagal upload";
		} else {
			$gambar = $this->upload->data('file_name');
			$dataa['gambar'] = $gambar;
		}

		$this->Model_blog->input_data($dataa, 'blog');
		$this->session->set_flashdata('success','Action Completed');
		redirect('penulis/blog');
	}

	// function upload image
	public function upload1()
        {
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				echo "gagal upload";
			}
			else
			{
					$gambar = $this->upload->data();
					$gambar = $gambar['file_name'];
					$judul = $this->input->post('judul',TRUE);
					$isi   = $this->input->post('isi',TRUE);
					$kategori   = $this->input->post('kategori',TRUE);
					
					$dataa = array(
						// 'id_blog'         => $id_blog,
						'judul'            => $judul,
						'isi'              => $isi,
						'kategori'         => $kategori,
						'gambar'       => $gambar,
		   
					);

					$this->db->insert('blog', $dataa);
					// $this->Model_blog->input_data($dataa, 'blog');
					$this->session->set_flashdata('success','Action Completed');
					redirect('penulis/blog');
					//  redirect('tambah_produk');
					echo "<script>console.log('berhasil! pindah page')</script>";

					
			}
        }

	

	// hapus data
	public function hapus($id_blog){
		$del = array('id_blog' => $id_blog);
		$this->Model_blog->hapus_data($del,'blog');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('penulis/blog');
	}

	// edit data
	public function edit($id_blog){
		$del = array('id_blog' => $id_blog);
		$data['user'] = $this->Model_blog->edit_data($del,'blog')->result();
		$data['show_kategori'] = $this->Model_blog->show_kategori()->result();
		$this->load->view('penulis/edit_blog',$data);
	}

	// update data
	public function update(){
		{
			if (isset($_POST['btn_submit'])) {
				$id_akun = $this->input->post('id_akun');
				$judul = $this->input->post('judul');
				$id_blog = $this->input->post('id_blog');
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
				$encrypted = uniqid($foto_icon_brand);
				$encrypted .= '.';
				$encrypted .= $ekstensiGambar;
				// Upload Icon Brand
				move_uploaded_file($icon_tmp,'./assets/img_sampul/'.$encrypted);
	
				$data = array(
					
					'judul'            => $judul,
					'isi'              => $isi,
					'id_kategori'         => $id_kategori,
					'id_akun'         => $id_akun,
					'gambar'       => $encrypted
	   
				);

				$where = array(
					'id_blog' => $id_blog
				);
						
					$this->Model_blog->update_data($where,$data, 'blog');
					$this->session->set_flashdata('success_edit','Action Completed');
					redirect('penulis/blog');
					//  redirect('tambah_produk');
					echo "<script>console.log('berhasil! pindah page')</script>";
	
			}else{
	
			}
		}
	}
}
