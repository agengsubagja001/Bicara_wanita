<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
        $data['show_kategori'] = $this->model_kategori->Show_kategori()->result();
		$this->load->view('admin/kategori',$data);
	}

    // untuk menambahkan data kategori
    public function upload(){
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori'  => $kategori
        );

        $this->model_kategori->input_data($data,'kategori');
        $this->session->set_flashdata('success','Action Completed');
        redirect('admin/kategori');
    }

    // edit kategori
	public function edit($id_kategori){
		$del = array('id_kategori' => $id_kategori);
		$data['show_edit'] = $this->model_kategori->edit_data($del,'kategori')->result();
		$this->load->view('admin/kategori',$data);
	}

    // Hapus data
    function hapus($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->model_kategori->hapus_data($where,'kategori');
        $this->session->set_flashdata('success1','Action Completed');
		redirect('admin/kategori');
	}
}