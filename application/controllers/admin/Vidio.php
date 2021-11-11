<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {

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
		$data['show_vidio'] = $this->Model_vidio->Show_vidio()->result();
		$this->load->view('admin/vidio',$data);
	}

	// upload
	function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$judul = $this->input->post('judul');
			$vidio = $this->input->post('vidio');

			

			$dataa = array(
				'judul'            => $judul,
				'isi_vidio'        =>  $vidio,
				
   
			);
					
				$this->Model_vidio->input_data($dataa, 'vidio');
				$this->session->set_flashdata('success','Action Completed');
				redirect('admin/vidio');

		}else{

		}
	}

	public function hapus($id_vidio){
		$del = array('id_vidio' => $id_vidio);
		$this->Model_vidio->hapus_data($del,'vidio');
		$this->session->set_flashdata('success1','Action Completed');
		redirect('admin/vidio');
	}
}