<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_penulis extends CI_Controller {
//    public function __construct()
//    {
//        parent::__construct();
//        $this->load->model('model_akun');
//    }

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
		$data['show_penulis'] = $this->Model_akun->Show_data_penulis()->result();
		$this->load->view('admin/akun_penulis',$data);
	}

    // untuk menambahkan data akun

	function upload()
	{
		if (isset($_POST['btn_submit'])) {
			$role_id = "2";
			$nama_lengkap = $this->input->post('nama_lengkap');
			$username     = $this->input->post('username');
			$deskripsi     = $this->input->post('deskripsi');
			$password     = $this->input->post('password');
			$no_telepon   = $this->input->post('no_telepon');
			$facebook   = $this->input->post('facebook');
			$medium   = $this->input->post('medium');
			$twitter   = $this->input->post('twitter');

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
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;
			// Upload Icon Brand
			move_uploaded_file($icon_tmp,'assets/penulis/p_profil/'.$encrypted);

			$dataa = array(
				'role_id'      => $role_id,
				'nama_lengkap' => $nama_lengkap,
				'username'     => $username,
				'deskripsi'    => $deskripsi,
				'password'     => $password,
				'no_telepon'   => $no_telepon,
				'twitter'       =>$twitter,
				'facebook'       =>$facebook,
				'medium'       =>$medium,
				'foto_profil'  =>$encrypted
   
			);
					
			$this->Model_akun->input_data_penulis($dataa,'akun');
			$this->session->set_flashdata('success','Action Completed');
			redirect('admin/akun_penulis');

		}else{

		}
	}


    // edit data
    public function edit($id_akun){
		$del = array('id_akun' => $id_akun);
		$data['show_edit'] = $this->Model_kategori->edit_data($del,'akun')->result();
		$this->load->view('admin/akun_penulis',$data);
	}

    // Hapus data
    function hapus($id_akun){
		$where = array('id_akun' => $id_akun);
		$this->Model_kategori->hapus_data($where,'akun');
        $this->session->set_flashdata('success1','Action Completed');
		redirect('admin/akun_penulis');
	}
}