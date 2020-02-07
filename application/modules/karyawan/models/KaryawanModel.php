<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryawanModel extends CI_Model
{

    public function insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara)
    {
        $sql = "insert into pinjam_kar values ('','$id_karyawan','$tgl_pinjam','$waktu_pinjam','$tgl_kembali','$waktu_kembali','$tempat','$acara')";
        $this->db->query($sql);
    }

    public function getJoinPinjam($id_karyawan)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on P.plat=M.plat  where  N.id_karyawan='$id_karyawan'";
        return $this->db->query($sql)->result_array();
    }

    public function get_by_id_karyawan($table, $id_karyawan)
    {
        $user = $this->db->get_where($table, array("id_karyawan" => $id_karyawan));
        return $user->row_array();
    }

    public function getjoincetak($id_pinjam)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on P.plat=M.plat  where  P.id_pinjam='$id_pinjam'";
        return $this->db->query($sql)->result_array();
    }

   
    public function getjointolak($id_karyawan)
    {
        $sql = "SELECT K.*,N.*,T.* from pinjam_kar K inner join karyawan N on K.id_karyawan=N.id_karyawan inner join tolak T on T.id_pinjam_kar=K.id_pinjam_kar where K.id_karyawan = '$id_karyawan'";
        return $this->db->query($sql)->result_array();
    }
}
