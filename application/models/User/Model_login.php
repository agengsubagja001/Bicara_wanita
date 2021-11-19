<?php  

class Model_login extends CI_Model{

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$result	  = $this->db->where('username', $username)
							 ->where('password', $password)
							 ->limit(1)
							 ->get('akun');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	// input data daftar
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}