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

	public function histori_pajakdir()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pajak Mobil";
		$data['daftarp'] = $this->model->getHistoriPajak();
		$this->blade->render('historipajakdir', $data);
	}

	public function histori_maintenancedir()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Maintenance Mobil";
		$data['daftarm'] = $this->model->getHistoriMaintenance();
		$this->blade->render('histori_maintenancedir', $data);
	}

	public function CekPeminjaman()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pengecekan Status Peminjaman Mobil";
		$data['daftarp'] = $this->model->getJoinPinjam();
		$this->blade->render('cekpinjamdir', $data);
	}

	public function konfirmasiPeminjaman()
	{
		$data['id_pinjam'] = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Form Tanggapan";
		$data['daftarp'] = $this->model->getPinjam();
		$this->blade->render('formkonfirmasidir', $data);
	}

	public function konfirmpinjamdir()
	{
		if (isset($_POST['submit'])) {
			$id_pinjam = $this->input->post('id_pinjam');
			$status = $this->input->post('status');
			if ($status == "3") {
				$pw = array(
					'status' => $status
				);
				$where = array('id_pinjam' => $id_pinjam);
				$this->model->updatePinjam("pinjam", $pw, $where);
				redirect('direktur/CekPeminjaman');
			}
		}
	}

	public function histori_peminjamandir()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Peminjaman Mobil";
		$data['daftarpin'] = $this->model->getjoinHistoriPinjam();
		$this->blade->render('histori_pinjamdir', $data);
	}
}
