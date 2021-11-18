<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
        $data['show_kategori'] = $this->Model_kategori->Show_kategori()->result();
		$this->load->view('admin/kategori',$data);
	}

    // untuk menambahkan data kategori
    public function upload(){
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori'  => $kategori
        );

        $this->Model_kategori->input_data($data,'kategori');
        $this->session->set_flashdata('success','Action Completed');
        redirect('admin/kategori');
    }

    // edit kategori
	public function edit($id_kategori){
		$del = array('id_kategori' => $id_kategori);
		$data['show_edit'] = $this->Model_kategori->edit_data($del,'kategori')->result();
		$this->load->view('admin/kategori',$data);
	}

    // Hapus data
    function hapus($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->Model_kategori->hapus_data($where,'kategori');
        $this->session->set_flashdata('success1','Action Completed');
		redirect('admin/kategori');
	}
}