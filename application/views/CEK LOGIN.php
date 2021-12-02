<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_komentar');
        date_default_timezone_set("Asia/Jakarta");
    }

	
	public function index()
	{
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		// / untuk menampilkan story
		$data['show_story'] = $this->model_welcome->Show_story()->result();
		// / untuk menampilkan banner
		$data['show_banner'] = $this->model_welcome->Show_banner()->result();
		// / untuk menampilkan infografik
		$data['show_infografik'] = $this->model_welcome->Show_infografik()->result();
		// untuk menampilkan program
		$data['show_program'] = $this->model_welcome->Show_program()->result();
		// untuk menampilkan vidio
		$data['show_vidio'] = $this->model_detail_vidio->Show_vidio()->result();
		// unutk menampilkan podcast
		$data['show_podcast'] = $this->model_welcome->Show_podcast()->result();
		// untuk menampilkan blog
		$data['show_data'] = $this->model_welcome->Show_blog()->result();
		$this->load->view('halaman_utama',$data);
	}

	// fungsi untuk menampilkan detail kategori
	public function detail_kategori()
	{
		$data['show_sehat'] = $this->model_welcome->data_kategori()->result();
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$this->load->view('detail_kategori', $data);
	}

	// tampil detail blog
	public function detail_blog($id_blog)
	{
		// login komentar

		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$id_komentar = substr(str_shuffle($permitted_chars), 0, 8);

		include_once APPPATH . "../vendor/autoload.php";
		$google_client = new Google_Client();

		$google_client->setClientId('912597414091-onf92rv8dgpnslkep43eu9m2nfn6d5em.apps.googleusercontent.com'); //Define your ClientID

		$google_client->setClientSecret('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'); //Define your Client Secret Key

		$google_client->setRedirectUri('http://localhost/Bicara_wanita/halaman_utama'); //Define your Redirect Uri

		$google_client->addScope('email');

		$google_client->addScope('profile');

		if(isset($_GET["code"]))
		{
		$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

				if(!isset($token["error"]))
				{
					$google_client->setAccessToken($token['access_token']);

					$this->session->set_userdata('access_token', $token['access_token']);

					$google_service = new Google_Service_Oauth2($google_client);

					$data = $google_service->userinfo->get();

					$current_datetime = date('Y-m-d H:i:s');

					if($this->model_komentar->Is_already_register($data['email']))
					{
					//update data
					$user_data = array(
					'id_akun_komentar' => $id_komentar,
					'nama' => $data['given_name'],
					'email' => $data['email'],
					'foto'=> $data['picture'],
					'tanggal'  => $current_datetime
					 // 'last_name'  => $data['family_name'],
					// 'profile_picture'=> $data['picture'],
					// 'waktu_update' => $current_datetime,
					
					);

					$this->model_komentar->Update_user_data($user_data, $data['email']);
					}
					else
					{
					//insert data
					$user_data = array(
					'id_akun_komentar' => $id_komentar,
					'nama' => $data['given_name'],
					'email' => $data['email'],
					'foto'=> $data['picture'],
					'tanggal'  => $current_datetime
					);

					$this->model_komentar->Insert_user_data($user_data);
					}
					$this->session->set_userdata('user_data', $user_data);
				}
		}
			$login_button = '';
			if(!$this->session->userdata('access_token'))
				{
					$login_button = '<a href="'.$google_client->createAuthUrl().'"><div class="col-md-12 text-right">
					<button style="margin: 5px; background: #F7476E; border-radius: 15px; border: 1px solid #F7476E; color: #FFFFFF;" type="submit" name="submit" value="Login">komentar</buuton>
				 </div></a>';
					$data['login_button'] = $login_button;
					
					echo '<script>console.log("keluar"); </script>';
					// $this->load->view('detail_blog', $data);
					// $this->load->view('daftar', $data);
				}
				else
				{
					echo '<script>console.log("masuk"); </script>';
					
					// $this->load->view('https.google.com');
				}

		$this->load->model('Model_detail_blog');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_detail_blog->detail_data($id_blog);
		$data['detail'] = $detail;
		// menampilkan penulis berdasarkan join
		$data_penulis = $this->model_detail_blog->join_penulis($id_blog);
		$data['data_penulis'] = $data_penulis;

		// menampilkan kategori berdasarkan id_blog
		$detail_kategori = $this->model_detail_blog->join_kategori($id_blog);
		$data['detail_kategori']  = $detail_kategori;
		$data['terbaru'] = $this->model_detail_blog->Show_terbaru()->result();
		echo '<script>console.log("masuk"); </script>';
		$this->load->view('detail_blog',$data);
	}

	// tampil detail program
	public function detail_program($id_program)
	{
		$this->load->model('Model_detail_program');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_detail_program->detail_data($id_program);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_program',$data);
	}
	

	// tampil profil penulis
	public function detail_penulis($id_akun)
	{
		$this->load->model('Model_welcome');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_welcome->detail_penulis($id_akun);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_penulis',$data);
	}

	// tampil detail infografik
	public function artikel_infografik($id_infografik)
	{
		$this->load->model('Model_detail_infografik');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_detail_infografik->detail_data($id_infografik);
		$data['detail'] = $detail;
		// untuk menampilkan di halaman utama
		$data['terbaru'] = $this->model_detail_infografik->show_info_halaman_utama()->result();
		$this->load->view('artikel_infografik',$data);
	}

	// menampilkan detail_vidio berdasarkan id_vidio
	public function isi_vidio($id_vidio)
	{
		$this->load->model('Model_detail_vidio');
		// / untuk menampilkan kategori
		$data['show_kategori'] = $this->model_welcome->Show_kategori()->result();
		$detail = $this->model_detail_vidio->detail_data1($id_vidio);
		$data['detail'] = $detail;
		// untuk menampilkan di halaman utama
		$data['terbaru1'] = $this->Model_detail_vidio->show_vidio_terbaru()->result();
		$this->load->view('Isi_vidio',$data);
	}

	// convert timestap ke tanggal indo pada blog
	function tanggal_indo($tanggal, $cetak_hari = false)
	{
		$hari = array ( 1 => 'Senin',
			'Selasa',
			'Rabu',
			'Kamis',
			'Jumat',
			'Sabtu',
			'Minggu'
		);

		$bulan = array (1 => 'January',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'November',
		'Oktober',
		'November',
		'Desember'
		);

		$split = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
		$tanggal = date('Y-m-d', strtotime($row['date']));
		$this->db->order_by('date', 'desc');
		return $this->db->limit(8)->get('blog');
	}
	
	// login komentar
	public function login()
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_user = substr(str_shuffle($permitted_chars), 0, 5);


		include_once APPPATH . "../vendor/autoload.php";
		  $google_client = new Google_Client();
		  $google_client->setClientId('912597414091-onf92rv8dgpnslkep43eu9m2nfn6d5em.apps.googleusercontent.com'); //masukkan ClientID anda 
		  $google_client->setClientSecret('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'); //masukkan Client Secret Key anda
		  $google_client->setRedirectUri('http://localhost/Bicara_wanita/halaman_utama/detail_blog/login'); //Masukkan Redirect Uri anda
		  $google_client->addScope('email');
		  $google_client->addScope('profile');

		  if(isset($_GET["code"]))
		  {
		   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
		   if(!isset($token["error"]))
		   {
		    $google_client->setAccessToken($token['access_token']);
		    $this->session->set_userdata('access_token', $token['access_token']);
		    $google_service = new Google_Service_Oauth2($google_client);
		    $data = $google_service->userinfo->get();
		    $current_datetime = date('Y-m-d H:i:s');
		    $user_data = array(
		      'first_name' => $data['given_name'],
		      'last_name'  => $data['family_name'],
		      'email_address' => $data['email'],
		      'profile_picture'=> $data['picture'],
		      'updated_at' => $current_datetime
		     );
		    $this->session->set_userdata('user_data', $data);
		   }									
		  }
		  $login_button = '';
		  if(!$this->session->userdata('access_token'))
		  {
		  	
		   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="https://1.bp.blogspot.com/-gvncBD5VwqU/YEnYxS5Ht7I/AAAAAAAAAXU/fsSRah1rL9s3MXM1xv8V471cVOsQRJQlQCLcBGAsYHQ/s320/google_logo.png" /></a>';
		   $data['login_button'] = $login_button;
		   $this->load->view('google_login', $data);
		  }
		  else
		  {
		  	// uncomentar kode dibawah untuk melihat data session email
		  	// echo json_encode($this->session->userdata('access_token')); 
		  	// echo json_encode($this->session->userdata('user_data'));
		   echo "Login success";
		  }
	}

	public function login1()
    {
        $type_akun = "OTOMATIS";
        $role = "2";

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_komentar = substr(str_shuffle($permitted_chars), 0, 8);

        include_once APPPATH . "../vendor/autoload.php";
        $google_client = new Google_Client();

        $google_client->setClientId('912597414091-onf92rv8dgpnslkep43eu9m2nfn6d5em.apps.googleusercontent.com'); //Define your ClientID

        $google_client->setClientSecret('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'); //Define your Client Secret Key

        $google_client->setRedirectUri('http://localhost/Bicara_wanita/halaman_utama/detail_blog'); //Define your Redirect Uri

        $google_client->addScope('email');

        $google_client->addScope('profile');

        if(isset($_GET["code"]))
        {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

                if(!isset($token["error"]))
                {
                    $google_client->setAccessToken($token['access_token']);

                    $this->session->set_userdata('access_token', $token['access_token']);

                    $google_service = new Google_Service_Oauth2($google_client);

                    $data = $google_service->userinfo->get();

                    $current_datetime = date('Y-m-d H:i:s');

                    if($this->model_komentar->Is_already_register($data['email']))
                    {
                    //update data
                    $user_data = array(
					'id_akun_komentar' => $id_komentar,
                    'nama' => $data['given_name'],
                    'email' => $data['email'],
					'foto'=> $data['picture'],
                    'tanggal'  => $current_datetime
					 // 'last_name'  => $data['family_name'],
                    // 'profile_picture'=> $data['picture'],
                    // 'waktu_update' => $current_datetime,
					
                    );

                    $this->model_komentar->Update_user_data($user_data, $data['email']);
                    }
                    else
                    {
                    //insert data
                    $user_data = array(
                   	'id_akun_komentar' => $id_komentar,
                    'nama' => $data['given_name'],
                    'email' => $data['email'],
					'foto'=> $data['picture'],
                    'tanggal'  => $current_datetime
                    );

                    $this->model_komentar->Insert_user_data($user_data);
                    }
                    $this->session->set_userdata('user_data', $user_data);
                }
        }
            $login_button = '';
            if(!$this->session->userdata('access_token'))
                {
                    $login_button = '<a href="'.$google_client->createAuthUrl().'"><div class="col-md-12 text-right">
					<button style="margin: 5px; background: #F7476E; border-radius: 15px; border: 1px solid #F7476E; color: #FFFFFF;" type="submit" name="submit" value="Login">login</buuton>
				 </div></a>';
                    $data['login_button'] = $login_button;
                    
                    echo '<script>console.log("keluar"); </script>';
                    $this->load->view('detail_blog', $data);
                    // $this->load->view('daftar', $data);
                }
                else
                {
                    echo '<script>console.log("masuk"); </script>';
                    
                    $this->load->view('google_login');
                }
    }

	

}
