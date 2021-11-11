<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	
	public function index()
	{
		// / untuk menampilkan program
		$data['show_infografik'] = $this->Model_welcome->Show_infografik()->result();
		// untuk menampilkan program
		$data['show_program'] = $this->Model_welcome->Show_program()->result();
		// untuk menampilkan vidio
		$data['show_vidio'] = $this->Model_welcome->Show_vidio()->result();
		// unutk menampilkan podcast
		$data['show_podcast'] = $this->Model_welcome->Show_podcast()->result();
		// untuk menampilkan blog
		$data['show_data'] = $this->Model_welcome->Show_blog()->result();
		$this->load->view('halaman_utama',$data);
	}

	// tampil detail blog
	public function detail_blog($id_blog)
	{
		$this->load->model('Model_detail_blog');
		$detail = $this->Model_detail_blog->detail_data($id_blog);
		$data['detail'] = $detail;
		$data['terbaru'] = $this->Model_detail_blog->Show_terbaru()->result();
		$this->load->view('detail_blog',$data);
	}

	// tampil detail program
	public function detail_program($id_program)
	{
		$this->load->model('Model_detail_program');
		$detail = $this->Model_detail_program->detail_data($id_program);
		$data['detail'] = $detail;
		// $data['terbaru'] = $this->Model_detail_program->Show_terbaru()->result();
		$this->load->view('detail_program',$data);
	}

	// tampil detail infografik
	public function artikel_infografik($id_infografik)
	{
		$this->load->model('Model_detail_infografik');
		$detail = $this->Model_detail_infografik->detail_data($id_infografik);
		$data['detail'] = $detail;
		// untuk menampilkan di halaman utama
		$data['terbaru'] = $this->Model_detail_infografik->show_info_halaman_utama()->result();
		$this->load->view('artikel_infografik',$data);
	}

	public function isi_vidio($id_vidio)
	{
		$this->load->model('Model_detail_infografik');
		$detail = $this->Model_detail_infografik->detail_data1($id_vidio);
		$data['detail'] = $detail;
		// untuk menampilkan di halaman utama
		$data['terbaru1'] = $this->Model_detail_infografik->show_info_halaman_utama1()->result();
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
