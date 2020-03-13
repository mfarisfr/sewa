<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepala extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		if (!$this->session->userdata('id_karyawan')) {
			redirect('start?pesan=Silahkan Login dahulu');
		}


		$this->load->model("KepalaModel", "model");
	}

	public function index()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "YAYASAN SINAI INDONESIA";
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('kepala', $data);
	}

	public function peminjaman()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Peminjaman MObil";
		$data['deadline'] = $this->deadlinepajak();
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
		$data['daftarp'] = $this->model->getpinjam();
		$data['daftarpk'] = $this->model->getJoinPinjamKar();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('konfirmasipinjamkep', $data);
	}

	public function kirimdirektur()
	{
		$data['id_pinjam_kar'] = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Form Tanggapan";
		$data['daftarm'] = $this->model->getMobil();
		$data['daftarp'] = $this->model->getJoinMobilPajak();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('formkonfirmasipinjam', $data);
	}

	public function pajakawal()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pajak Awal Mobil";
		$data['daftarm'] = $this->model->getMobil();
		$datap = $this->model->getJoinMobilPajak();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('formpajakawal', $data);
		if (isset($_POST['submit'])) {
			$plat = $this->input->post('plat');
			$tgl_pajak = $this->input->post('tgl_pajak');
			$harga = $this->input->post('harga');
			foreach ($datap as $pa) :
				if ($pa['plat'] == $plat) {
					redirect('kepala/pajak');
				}
			endforeach;
			$this->model->insertpajak($plat, $tgl_pajak, $harga);
			redirect('kepala/pajak');
		}
	}

	public function ker_awal()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Kerusakan Awal Mobil";
		$data['daftarm'] = $this->model->getMobil();
		$datar = $this->model->getListker();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('tambah_ker_awal', $data);
		if (isset($_POST['submit'])) {
			$plat = $this->input->post('plat');
			$kondisi = $this->input->post('kondisi');
			foreach ($datar as $r) :
				if ($r['plat'] == $plat) {
					redirect('kepala/maintenance');
				}
			endforeach;
			$this->model->insertlistker($plat, $kondisi);
			redirect('kepala/maintenance');
		}
	}

	public function tampilmobil()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Daftar Mobil";
		$data['daftarm'] = $this->model->getMobil();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('tampilmobil', $data);
	}

	public function tambahdaftarmobil()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Tambah Data Mobil";
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('formtambahmobil', $data);
		if (isset($_POST['submit'])) {
			$platn = $this->input->post('plat');
			$plat = strtoupper($platn);
			$nama_pemilik = $this->input->post('nama_pemilik');
			$alamat = $this->input->post('alamat');
			$tahun = $this->input->post('tahun');
			$merk_typen = $this->input->post('merk_type');
			$merk_type = strtoupper($merk_typen);
			$jenis_modeln = $this->input->post('jenis_model');
			$jenis_model = strtoupper($jenis_modeln);
			$warna_kb = $this->input->post('warna_kb');
			$isi_silinder = $this->input->post('isi_silinder');
			$no_rangka = $this->input->post('no_rangka');
			$no_mesin = $this->input->post('no_mesin');
			$no_bpkb = $this->input->post('no_bpkb');
			$bahan_bakar = $this->input->post('bahan_bakar');
			$warna_tnkb = $this->input->post('warna_tnkb');
			$this->model->insermobil(
				$plat,
				$nama_pemilik,
				$alamat,
				$tahun,
				$merk_type,
				$jenis_model,
				$warna_kb,
				$isi_silinder,
				$no_rangka,
				$no_mesin,
				$no_bpkb,
				$bahan_bakar,
				$warna_tnkb
			);
			redirect('kepala/tampilmobil');
		}
	}

	public function pajak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pajak Mobil";
		$data['daftarp'] = $this->model->getPajak();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('pajak', $data);
	}

	public function pembaruanpajak()
	{
		$id_pajak = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pajak Mobil";
		$data['paj'] = $this->model->get_by_id_pajak("pajak", $id_pajak);
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('formpembaruanpajak', $data);
	}

	public function editpajak()
	{
		if (isset($_POST['perbarui'])) {
			$id_pajak = $this->input->post('id_pajak');
			$plat = $this->input->post('plat');
			$tgl_pajak = $this->input->post('tgl_pajak');
			$tgl_bayar = $this->input->post('tgl_bayar');
			$harga = $this->input->post('harga');
			$this->model->insertHistoriPajak($id_pajak, $plat, $tgl_pajak, $tgl_bayar, $harga);
			$pw = array(
				'plat' => $plat,
				'tgl_pajak' => $tgl_pajak,
				'harga' => $harga
			);
			$where = array('id_pajak' => $id_pajak);
			$this->model->updatePajak("pajak", $pw, $where);
			redirect('kepala/pajak');
		}
	}

	public function histori_pajak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pajak Mobil";
		$data['daftarp'] = $this->model->getHistoriPajak();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('historipajak', $data);
	}

	public function maintenance()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Maintenance Mobil";
		$data['daftarm'] = $this->model->getListKer();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('maintenanceM', $data);
	}

	public function pembaruanmobil()
	{
		$id_listker = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Perbaikan Mobil";
		$data['deadline'] = $this->deadlinepajak();
		$data['per'] = $this->model->get_by_id_listker("list_kerusakan", $id_listker);
		$this->blade->render('formperbaikanmobil', $data);
	}

	public function perbaikanmobil()
	{
		if (isset($_POST['perbarui'])) {
			$id_listker = $this->input->post('id_listker');
			$plat = $this->input->post('plat');
			$kondisi = $this->input->post('kondisi');
			$kondisiper = $this->input->post('kondisiper');
			$tgl_perbaikan = $this->input->post('tgl_perbaikan');
			if ($kondisiper == "") {
				$pw = array(
					'plat' => $plat,
					'kondisi' => $kondisi
				);
				$where = array('id_listker' => $id_listker);
				$this->model->updateKerusakan("list_kerusakan", $pw, $where);
			} else {
				$this->model->insertHistoriMaintenance($id_listker, $plat, $kondisiper, $tgl_perbaikan);
				$pw = array(
					'plat' => $plat,
					'kondisi' => $kondisi
				);
				$where = array('id_listker' => $id_listker);
				$this->model->updateKerusakan("list_kerusakan", $pw, $where);
			}
			redirect('kepala/maintenance');
		}
	}

	public function histori_maintenance()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Histori Maintenance";
		$data['daftarm'] = $this->model->getHistoriMaintenance();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('histori_maintenance', $data);
	}

	public function konfirmpinjam()
	{
		if (isset($_POST['submit'])) {
			$id_pinjam_kar = $this->input->post('id_pinjam_kar');
			$data['kar'] = $this->input->post('id_pinjam_kar');
			$plat = $this->input->post('plat');
			$status = $this->input->post('status');
			if ($status == "konfirmasi kepala") {
				$k = $this->model->get_kondisi_by_plat($plat);
				foreach ($k as $a) :
					$kondisi = $a;
				endforeach;
				$this->model->insertKPinjam($id_pinjam_kar, $plat, $kondisi, $status);
				redirect('kepala/konfirmasipinjam');
			} else if ($status == "ditolak") {
				$data['title'] = "YAYASAN SINAI INDONESIA";
				$data['subtitle'] = "Penolakan Peminjaman";
				$data['deadline'] = $this->deadlinepajak();
				$this->blade->render('tolakkep', $data);
			}
		}
	}

	public function cekstatuspinjam()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pengecekan Status Peminjaman Mobil";
		$data['daftarp'] = $this->model->getJoinPinjam();
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('cekpinjam', $data);
	}

	public function FormUpdatePinjam()
	{
		$id_pinjam = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Pembaruan Peminjaman";
		$data['deadline'] = $this->deadlinepajak();
		$data['pin'] = $this->model->get_by_id_pinjam("pinjam", $id_pinjam);
		$this->blade->render('formpembaruanpinjam', $data);
	}

	public function perbaruipinjam()
	{
		if (isset($_POST['perbarui'])) {
			$id_pinjam = $this->input->post('id_pinjam');
			$plat = $this->input->post('plat');
			$status = $this->input->post('status');
			$km_awal = $this->input->post('km_awal');
			$km_akhir = $this->input->post('km_akhir');
			$kerusakan_akhir = $this->input->post('kondisi_akhir');
			if ($status == "kembali") {
				$this->model->insertHistoriPeminjaman($id_pinjam);
				$ganti = array(
					'kondisi' => $kerusakan_akhir
				);
				$di = array('plat' => $plat);
				$this->model->updateKerusakan("list_kerusakan", $ganti, $di);
			} elseif ($status == "ditolak") {
				$data['title'] = "YAYASAN SINAI INDONESIA";
				$data['subtitle'] = "Penolakan Peminjaman";
				$this->blade->render('tolakkep', $data);
			}

			$pw = array(
				'plat' => $plat,
				'status' => $status,
				'km_awal' => $km_awal,
				'km_akhir' => $km_akhir,
				'kerusakan_akhir' => $kerusakan_akhir
			);
			$where = array('id_pinjam' => $id_pinjam);
			$this->model->updatePinjam("pinjam", $pw, $where);
			redirect('kepala/cekstatuspinjam');
		}
	}

	public function tabelcetak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "";
		$data['deadline'] = $this->deadlinepajak();
		$id_karyawan = $this->session->userdata('id_karyawan');
		$data['daftarp'] = $this->model->getJoinPinjamC($id_karyawan);
		$this->blade->render('tabelcetakkep', $data);
	}

	public function cetakfile()
	{
		$id_pinjam = $_GET['u'];
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "Cetak File";
		$data['deadline'] = $this->deadlinepajak();
		$data['daftarp'] = $this->model->getjoincetak($id_pinjam);

		$this->blade->render('cetakkep', $data);
	}

	public function inserttolak()
	{
		if (isset($_POST['submit'])) {
			$id_pinjam_kar = $this->input->post('id_pinjam_kar');
			$keterangan = $this->input->post('keterangan');
			$this->model->inserttolak($id_pinjam_kar, $keterangan);
			redirect('kepala');
		}
	}

	public function tolak()
	{
		$id_karyawan = $this->session->userdata('id_karyawan');
		$data['daftarp'] = $this->model->getjointolak($id_karyawan);
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "";
		$data['deadline'] = $this->deadlinepajak();
		$this->blade->render('pemberitahuankep', $data);
	}

	public function notifpajak()
	{
		$data['title'] = "YAYASAN SINAI INDONESIA";
		$data['subtitle'] = "notifpajak";
		$plat = $this->session->userdata('plat');
		$data['daftarp'] = $this->model->notifpajak($plat);

		$this->blade->render('notif', $data);
	}

	public function deadlinepajak()
	{
		$data_pajak = $this->model->getPajak();
		$data['deadline'] = 0;
		$today = new DateTime();


		foreach ($data_pajak as $item) {
			$date = new DateTime($item['tgl_pajak']);
			$diff = $today->diff($date);
			if ($diff->days <= 7) {
				$data['deadline']++;
			}
		}

		return $data['deadline'];
	}
}
