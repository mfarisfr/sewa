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


//		$this->load->model("KaryawanModel", "model");
	}

	public function index()
	{
		$data['title']="YAYASAN SINAI INDONESIA";
		$data['subtitle']="YAYASAN SINAI INDONESIA";
		$this->blade->render('Direktur',$data);
	}

}
