<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends MY_Controller {

	public function __construct()
    {
        parent:: __construct();
        $this->load->model('LoginModel','login');
        //$this->load->library('session');
	}
	
	public function index()
	{
		$this->blade->render('start');
	}

	public function cek()
    {
        if(isset($_POST['submit']))
        {
            $nik = $this->input->post('nik');
            $password = $this->input->post('password');
            $data = array
            (
                'nik' => $nik,
				'password' => $password
            );
            $cek = $this->login->cekLogin("karyawan",$data);
            
				 
            if($cek) // jika berhasil login
            {
                $user=$this->login->get_by_nik("karyawan",$nik);
                if($user['is_active']==1)
                {
                    $id_kayawan=$user['id_karyawan'];
                    $_SESSION['id_karyawan'] = $id_kayawan;
                    $this->session->set_userdata(array(
                        'id_karyawan' => $id_kayawan
                    ));
                    $this->session->set_flashdata('succes'
                    ,'<div style="color: green"><i><b>Succes Login</b></i></div>');
                    
                    if ($user['nama_jabatan']=="kepala")
                    {
                        redirect('kepala');
                    }
                    elseif ($user['nama_jabatan']=="direktur")
                    {
                        redirect('direktur');
                    }
                    else
                    {
                        redirect('karyawan');
                    }
                }
                else
                {
                    redirect('start?pesan=Gagal Login');
                }
            }
            else
            {
                redirect('start?pesan=Gagal Login');
            }

		}
     }
     
     public function logout()
     {
         $this->session->unset_userdata('id_karyawan');
         //$this->session->sess_destroy();
 
         
         // $this->load->view('v_login');
         redirect('start?pesan=Berhasil Log Out');
     }
 
}