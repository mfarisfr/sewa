<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->library('pdf');
		if (!$this->session->userdata('id_karyawan')) {
			redirect('start?pesan=Silahkan Login dahulu');
		}


		$this->load->model("KaryawanModel", "model");
	}

	public function index()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "YAYASAN SINAI INDONESIA";
		$this->blade->render('karyawan', $data);
	}

	public function peminjaman()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Peminjaman MObil";
		$this->blade->render('formpinjam', $data);
		if (isset($_POST['submit'])) {
			$id_karyawan = $this->session->userdata('id_karyawan');
			$tgl_pinjam = $this->input->post('tgl_pinjam');
			$waktu_pinjam = $this->input->post('waktu_pinjam');
			$tgl_kembali = $this->input->post('tgl_kembali');
			$waktu_kembali = $this->input->post('waktu_kembali');
			$tempat = $this->input->post('tempat');
			$acara = $this->input->post('acara');
			$this->model->insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara);
			redirect('karyawan');
		}
	}

	public function cekstatuspinjam()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pengecekan Status Peminjaman Mobil";
		$id_karyawan = $this->session->userdata('id_karyawan');
		$data['daftarp'] = $this->model->getJoinPinjam($id_karyawan);

		$this->blade->render('tabelcetak', $data);
	}

	public function cetakfile()
	{
        
        
		$id_pinjam = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Cetak File";
		$data['daftarp'] = $this->model->getjoincetak($id_pinjam);
              
        
        $this->blade->render('cetak', $data);
	}

	public function tolak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pengecekan Status Peminjaman Mobil";
		$id_karyawan = $this->session->userdata('id_karyawan');
		$data['daftarp'] = $this->model->getjointolak($id_karyawan);

		$this->blade->render('pemberitahuan', $data);
	}
}
