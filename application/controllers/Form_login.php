<?php 

class Form_login extends CI_Controller {

	public function login()
	
	{
		$fuser = $this->input->post('username');
		$use =$this->form_validation->set_rules('username','Username', 'required',[
			'required'  => 'Username wajib diisi!'
		]);
		$this->form_validation->set_rules('password','Password', 'required',[
			'required'  => 'Password wajib diisi!'
		]);
		if ($this->form_validation->run()== FALSE)
		{
			// $this->load->view('templates/header');
			$this->load->view('form_login'); 
			// $this->load->view('templates/footer');
		}else{

			

			$auth = $this->model_login->cek_login();

			$query = $this->db->query("SELECT * FROM akun WHERE username = '$fuser'");

			foreach($query->result() as $row){
				$v_id_akun = $row->id_akun;
			}

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Username atau Password Anda Salah!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
			redirect('form_login/login');
			}else {
				$this->session->set_userdata('id_akun',$v_id_akun);
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch($auth->role_id) {
					case 1 : $this->session->set_flashdata('success','Action Completed');
								redirect('admin/dashboard');
							 break; 

					case 2 :$this->session->set_flashdata('success','Action Completed');
					 		redirect('penulis/dashboard');
							 break;

					case 3 : redirect('pembaca/dashboard');
								break;
					default: break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('form_login/login');
	}

}