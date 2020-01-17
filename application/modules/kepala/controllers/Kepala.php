<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepala extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('id_karyawan')) {
			redirect('start?pesan=Silahkan Login dahulu');
		}


		$this->load->model("KepalaModel", "model");
	}

	public function index()
	{
		$data['title']="YAYASAN SINAI INDONESIA";
		$data['subtitle']="YAYASAN SINAI INDONESIA";
		$this->blade->render('kepala',$data);
	}

	public function peminjaman()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Peminjaman MObil";
		$this->blade->render('formpinjamkep', $data);
		if (isset($_POST['submit'])) {
			$id_karyawan = $this->session->userdata('id_karyawan');
			$tgl_pinjam = $this->input->post('tgl_pinjam');
			$waktu_pinjam = $this->input->post('waktu_pinjam');
			$tgl_kembali = $this->input->post('tgl_kembali');
			$waktu_kembali = $this->input->post('waktu_kembali');
			$tempat = $this->input->post('tempat');
			$acara = $this->input->post('acara');
			$this->model->insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara);
			redirect('kepala');
		}
	}

	public function konfirmasipinjam() 
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Konfirmasi Peminjaman Mobil";
		$data['daftarp']=$this->model->getpinjam();
		$this->blade->render('konfirmasipinjamkep', $data);
	}

	public function bayarpajak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pembayaran Pajak Mobil";
		$this->blade->render('formbayarpajak', $data);
	}

	public function ker_awal()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Kerusakan Awal Mobil";
		$this->blade->render('tambah_ker_awal', $data);
		
	}
 }
