<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
				'judul_banner'     => $judul,
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
	public function hapus($id_banner){
		$del = array('id_banner' => $id_banner);
		$this->model_banner->hapus_data1($del,'banner');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/banner');
	}

	// edit data
	public function edit($id_banner){
		$del = array('id_banner' => $id_banner);
		$data['banner'] = $this->model_banner->edit_data($del,'banner')->result();
		$data['show'] = $this->model_banner->show()->result();
		$this->load->view('admin/edit_banner',$data);
	}

	// update data
	public function update(){
		$judul = $this->input->post('judul');
		$id_banner = $this->input->post('id_banner');
		$id_program = $this->input->post('id_program');
		// $isi   = $this->input->post('isi');
	

        $data = array(
			'judul_banner'     => $judul,
			'id_banner'    	   => $id_banner,
			'id_program'       => $id_program,

        );

		$where = array(
			'id_banner' => $id_banner
		);

       	
		$this->model_program->update_data($where,$data, 'banner');
		$this->session->set_flashdata('success_edit','Action Completed');
		redirect('admin/banner');

	}
}
