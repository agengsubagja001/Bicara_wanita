<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	
	public function index()
	{
		// / untuk menampilkan story
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

	// tampil detail blog
	public function detail_blog($id_blog)
	{
		$this->load->model('Model_detail_blog');
		$detail = $this->model_detail_blog->detail_data($id_blog);
		// menampilkan penulis berdasarkan join
		$data_penulis = $this->model_detail_blog->join_penulis($id_blog);
		$data['data_penulis'] = $data_penulis;

		// menampilkan kategori berdasarkan id_blog
		$detail_kategori = $this->model_detail_blog->join_kategori($id_blog);
		$data['detail_kategori']  = $detail_kategori;
		$data['detail'] = $detail;
		$data['terbaru'] = $this->model_detail_blog->Show_terbaru()->result();
		$this->load->view('detail_blog',$data);
	}

	// tampil detail program
	public function detail_program($id_program)
	{
		$this->load->model('Model_detail_program');
		$detail = $this->model_detail_program->detail_data($id_program);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_program',$data);
	}
	

	// tampil profil penulis
	public function detail_penulis($id_akun)
	{
		$this->load->model('Model_welcome');
		$detail = $this->model_welcome->detail_penulis($id_akun);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_penulis',$data);
	}

	// tampil detail kategori
	// public function detail_kategori($id_kategori)
	// {
	// 	$this->load->model('Model_welcome');
	// 	$data['show_langsung'] = $this->Model_welcome->show_langsung($id_kategori);
	// 	// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
	// 	$this->load->view('detail_kategori',$data);
	// }

	// tampil detail infografik
	public function artikel_infografik($id_infografik)
	{
		$this->load->model('Model_detail_infografik');
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

}
