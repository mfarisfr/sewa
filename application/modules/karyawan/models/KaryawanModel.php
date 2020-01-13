<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanModel extends CI_Model {

    public function insertpinjam($id_karyawan,$tgl_pinjam,$waktu_pinjam,$tgl_kembali,$waktu_kembali,$tempat,$acara)
    {
        $sql = "insert into pinjam_kar values ('','$id_karyawan','$tgl_pinjam','$waktu_pinjam','$tgl_kembali','$waktu_kembali','$tempat','$acara')";
        $this->db->query($sql);
    }

}