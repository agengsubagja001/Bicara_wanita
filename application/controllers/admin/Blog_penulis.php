<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_penulis extends CI_Controller {

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
		$data['show_blog'] = $this->model_dashboardd->Show_data_blog()->result();
		$this->load->view('admin/blog_penulis',$data);
	}

    // hapus data
	public function hapus($id_blog){
		$del = array('id_blog' => $id_blog);
		$this->model_blog->hapus_data($del,'blog');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/blog_penulis');
	}
}