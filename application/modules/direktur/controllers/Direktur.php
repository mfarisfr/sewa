<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Direktur extends MY_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('id_karyawan')) {
			redirect('start?pesan=Silahkan Login dahulu');
		}


		$this->load->model("DirekturModel", "model");
	}

	public function index()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "YAYASAN SINAI INDONESIA";
		$this->blade->render('direktur', $data);
	}

	public function peminjaman()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Peminjaman MObil";
		$this->blade->render('formpinjamdir', $data);
		if (isset($_POST['submit'])) {
			$id_karyawan = $this->session->userdata('id_karyawan');
			$tgl_pinjam = $this->input->post('tgl_pinjam');
			$waktu_pinjam = $this->input->post('waktu_pinjam');
			$tgl_kembali = $this->input->post('tgl_kembali');
			$waktu_kembali = $this->input->post('waktu_kembali');
			$tempat = $this->input->post('tempat');
			$acara = $this->input->post('acara');
			$this->model->insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara);
			redirect('direktur');
		}
	}
}
