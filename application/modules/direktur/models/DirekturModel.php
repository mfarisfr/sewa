<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DirekturModel extends CI_Model
{

    public function insertpinjam($id_karyawan, $tgl_pinjam, $waktu_pinjam, $tgl_kembali, $waktu_kembali, $tempat, $acara)
    {
        $sql = "insert into pinjam_kar values ('','$id_karyawan','$tgl_pinjam','$waktu_pinjam','$tgl_kembali','$waktu_kembali','$tempat','$acara')";
        $this->db->query($sql);
    }

    public function getHistoriMaintenance()
    {
        $sql = "SELECT * from histori_maintenance ORDER BY id_his_maintenance DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getHistoriPajak()
    {
        $sql = "SELECT * from histori_pajak ORDER BY id_his_pajak DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getJoinPinjamC($id_karyawan)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on M.plat=P.plat where  N.id_karyawan='$id_karyawan'";
        return $this->db->query($sql)->result_array();
    }

    public function getJoinPinjam()
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on M.plat=P.plat ORDER BY P.id_pinjam DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getPinjam()
    {
        $sql = "SELECT * from pinjam";
        return $this->db->query($sql)->result_array();
    }

    public function updatePinjam($table, $set, $where)
    {
        return $this->db
            ->where($where)
            ->update($table, $set);
    }

    public function getjoinHistoriPinjam()
    {
        $sql = "SELECT K.*,P.*,N.*,H.* from pinjam P inner join histori_pinjam H on H.id_pinjam = P.id_pinjam 
        inner join pinjam_kar N on P.id_pinjam_kar=N.id_pinjam_kar 
        inner join karyawan K on N.id_karyawan=K.id_karyawan ORDER BY P.id_pinjam DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getjoincetak($id_pinjam)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on P.plat=M.plat  where  P.id_pinjam='$id_pinjam'";
        return $this->db->query($sql)->result_array();
    }

    public function inserttolak($id_pinjam_kar, $keterangan)
    {
        $sql = "insert into tolak values ('','$id_pinjam_kar', '$keterangan')";
        $this->db->query($sql);
    }

    public function getjointolak($id_karyawan)
    {
        $sql = "SELECT K.*,N.*,T.* from pinjam_kar K inner join karyawan N on K.id_karyawan=N.id_karyawan inner join tolak T on T.id_pinjam_kar=K.id_pinjam_kar where K.id_karyawan = '$id_karyawan'";
        return $this->db->query($sql)->result_array();
    }

    public function getpinjamd($id_pinjam)
    {
        $sql = "SELECT * from pinjam where id_pinjam = '$id_pinjam'";
        return $this->db->query($sql)->result_row();
    }

    public function get_by_id_pinjam($id_pinjam)
    {
        $sql = "SELECT id_pinjam_kar from pinjam where id_pinjam = '$id_pinjam'";
        return $this->db->query($sql)->row_array();
    }
}
