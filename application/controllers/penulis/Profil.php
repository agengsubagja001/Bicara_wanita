<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();

	if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Anda Belum Login!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
				
				redirect('form_login/login');
		}
		// $this->session->userdata('role_id') != '2'

	}

	public function index()
	{
		$data['show_profil'] = $this->model_profil->Show_profil()->result();
		// $this->load->view('penulis/partial/navbar');
		$this->load->view('penulis/profil',$data);
	}

	// edit data profil
	public function edit($id_akun){
		$del = array('id_akun' => $id_akun);
		$data['show_edit'] = $this->model_profil->edit_data($del,'akun')->result();
		$this->load->view('penulis/edit_profil',$data);
	}

	// update data profil
	public function update()
		{
			if (isset($_POST['btn_submit'])) {
				$nama_lengkap = $this->input->post('nama_lengkap');
				$id_akun = $this->input->post('id_akun');
				$no_telepon = $this->input->post('no_telepon');
				$deskripsi   = $this->input->post('deskripsi');
				$facebook   = $this->input->post('facebook');
				$twitter   = $this->input->post('twitter');
				$medium   = $this->input->post('medium');
				$pekerjaan   = $this->input->post('pekerjaan');
	
				// Foto
				// blog
				$foto_icon_brand = $_FILES['foto_profil']['name'];
				$icon_tmp = $_FILES['foto_profil']['tmp_name'];
				
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
				move_uploaded_file($icon_tmp,'./assets/penulis/p_profil/'.$encrypted);
	
				$data = array(
					
					'nama_lengkap'            => $nama_lengkap,
					'deskripsi'               => $deskripsi,
					'no_telepon'         	  => $no_telepon,
					'medium'         	      => $medium,
					'twitter'         	      => $twitter,
					'facebook'         	      => $facebook,
					'foto_profil'             => $encrypted

	   
				);

				$where = array(
					'id_akun' => $id_akun
				);
						
					$this->model_profil->update_data($where,$data, 'akun');
					$this->session->set_flashdata('success_edit','Action Completed');
					redirect('penulis/profil');
					//  redirect('tambah_produk');
					echo "<script>console.log('berhasil! pindah page')</script>";
	
			}else{
				echo "GAGAL";
	
			}
		}

		// opsi dua update blog
		public function update1(){
			$nama_lengkap = $this->input->post('nama_lengkap');
			$id_akun = $this->input->post('id_akun');
			$no_telepon = $this->input->post('no_telepon');
			$deskripsi   = $this->input->post('deskripsi');
			$facebook   = $this->input->post('facebook');
			$twitter   = $this->input->post('twitter');
			$medium   = $this->input->post('medium');
			$pekerjaan   = $this->input->post('pekerjaan');
		

			$data = array(
			
			'nama_lengkap'            => $nama_lengkap,
			'deskripsi'               => $deskripsi,
			'no_telepon'         	  => $no_telepon,
			'medium'         	      => $medium,
			'twitter'         	      => $twitter,
			'facebook'         	      => $facebook,
			);

			$where = array(
				'id_akun' => $id_akun
			);

			
			$this->model_profil->update_data($where,$data, 'akun');
			$this->session->set_flashdata('success_edit','Action Completed');
			redirect('penulis/profil');
			//  redirect('tambah_produk');
			echo "<script>console.log('berhasil! pindah page')</script>";

		}
}