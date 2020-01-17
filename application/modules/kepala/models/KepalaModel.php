<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KepalaModel extends CI_Model
{

    public function insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara)
    {
        $sql = "insert into pinjam_kar values ('','$id_karyawan','$tgl_pinjam','$waktu_pinjam','$tgl_kembali','$waktu_kembali','$tempat','$acara')";
        $this->db->query($sql);
    }

    public function getpinjam()
    {
        $sql = "SELECT k.nama,p.tgl_pinjam,p.waktu_pinjam,p.tgl_kembali,p.waktu_kembali,p.tempat,p.acara from karyawan k inner join pinjam_kar p on k.id_karyawan = p.id_karyawan";
        return $this->db->query($sql)->result_array();
    }
    
}
