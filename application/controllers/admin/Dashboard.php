<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		// untuk menampilkan jumlah program
		$data['total_program'] = $this->Model_dashboardd->jml_program();
		// untuk menampilkan jumlah podcast
		$data['total_podcast'] = $this->Model_dashboardd->jml_podcast();
		// untuk menampilkan jumlah infografik
		$data['total_infografik'] = $this->Model_dashboardd->jml_infografik();
		// untuk menampilkan jumlah blog
		$data['total_blog'] = $this->Model_dashboardd->jml_blog();
		// untuk menampilkan data blog
		$data['show_blog'] = $this->Model_dashboardd->Show_data_blog()->result();
		$this->load->view('admin/dashboard',$data);
	}
}