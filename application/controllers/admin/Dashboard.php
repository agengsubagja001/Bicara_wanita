<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		// untuk menampilkan jumlah story
		$data['total_story'] = $this->model_dashboardd->jml_story();
		// untuk menampilkan jumlah program
		$data['total_program'] = $this->model_dashboardd->jml_program();
		// untuk menampilkan jumlah podcast
		$data['total_podcast'] = $this->model_dashboardd->jml_podcast();
		// untuk menampilkan jumlah infografik
		$data['total_infografik'] = $this->model_dashboardd->jml_infografik();
		// untuk menampilkan jumlah blog
		$data['total_blog'] = $this->model_dashboardd->jml_blog();
		// untuk menampilkan jumlah vidio
		$data['total_vidio'] = $this->model_dashboardd->jml_vidio();
		// untuk menampilkan jumlah kategori
		$data['total_kategori'] = $this->model_dashboardd->jml_kategori();
		// untuk menampilkan jumlah blog penulis
		$data['total_blog_penulis'] = $this->model_dashboardd->jml_blog_penulis();
		// untuk menampilkan data blog penulis
		$data['show_blog'] = $this->model_dashboardd->Show_data_blog()->result();
		// untuk menampilkan data blog admin
		$data['show_blog_admin'] = $this->model_dashboardd->Show_data_blog_admin()->result();
		$this->load->view('admin/dashboard',$data);
	}
}