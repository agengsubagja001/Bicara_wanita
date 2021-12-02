<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {

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
        // $data['show_program'] = $this->Model_banner->Show_program()->result();
		$data['show_story'] = $this->model_story->Show_story()->result();
		$this->load->view('admin/story',$data);
	}

	// uplode update data story
    public function update(){
		$query = $this->input->post('id_akun');
        $judul = $this->input->post('judul_story');
		$id_story = $this->input->post('id_story');
		$status = $this->input->post('status');
		$isi_story = $this->input->post('isi_story');

        $data = array(
            'judul_story'  => $judul,
			'status'       => $status,
			'isi_story'    => $isi_story,
			'id_akun'    => $query
        );

		$where = array(
			'id_story' => $id_story
		);

        $this->model_storyy->update_data($where,$data,'story');
        $this->session->set_flashdata('success','Action Completed');
        redirect('admin/story');
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
	public function hapus($id_story){
		$del = array('id_story' => $id_story);
		$this->model_storyy->hapus_data($del,'story');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/story');
	}

	// edit data
	public function edit($id_story){
		$del = array('id_story' => $id_story);
		$data['priview_story'] = $this->model_storyy->edit_data($del,'story')->result();
		$this->load->view('admin/priview',$data);
	}

}
