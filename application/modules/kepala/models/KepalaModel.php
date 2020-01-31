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
        $sql = "SELECT k.nama,p.id_pinjam_kar,p.tgl_pinjam,p.waktu_pinjam,p.tgl_kembali,p.waktu_kembali,p.tempat,p.acara from karyawan k inner join pinjam_kar p on k.id_karyawan = p.id_karyawan ORDER BY id_pinjam_kar DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getMobil()
    {
        $sql = "SELECT * from mobil ORDER BY plat DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getJoinMobilPajak()
    {
        $sql = "SELECT M.*,P.* from mobil M inner join pajak P on M.plat=P.plat";
        return $this->db->query($sql)->result_array();
    }

    public function insertpajak($plat, $tgl_pajak, $harga)
    {
        $sql = "insert into pajak values ('','$plat','$tgl_pajak','$harga')";
        $this->db->query($sql);
    }

    public function insertlistker($plat, $kondisi)
    {
        $sql = "insert into list_kerusakan values ('','$plat','$kondisi')";
        $this->db->query($sql);
    }

    public function insermobil(
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
    ) {
        $sql = "insert into mobil values ('$plat', '$nama_pemilik','$alamat','$merk_type','$jenis_model','$tahun','$warna_kb','$isi_silinder','$no_rangka','$no_mesin','$no_bpkb',
        '$bahan_bakar','$warna_tnkb')";
        $this->db->query($sql);
    }

    public function getPajak()
    {
        $sql = "SELECT * from pajak ORDER BY id_pajak DESC";
        return $this->db->query($sql)->result_array();
    }

    public function get_by_id_pajak($table, $id_pajak)
    {
        $user = $this->db->get_where($table, array("id_pajak" => $id_pajak));
        return $user->row_array();
    }

    public function updatePajak($table, $set, $where)
    {
        return $this->db
            ->where($where)
            ->update($table, $set);
    }

    public function insertHistoriPajak($id_pajak, $plat, $tgl_pajak, $tgl_bayar, $harga)
    {
        $sql = "insert into histori_pajak values ('','$id_pajak','$plat','$tgl_pajak','$tgl_bayar','$harga')";
        $this->db->query($sql);
    }

    public function getHistoriPajak()
    {
        $sql = "SELECT * from histori_pajak ORDER BY id_his_pajak DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getListKer()
    {
        $sql = "SELECT * from list_kerusakan ORDER BY id_listker DESC";
        return $this->db->query($sql)->result_array();
    }


    public function get_by_id_listker($table, $id_listker)
    {
        $user = $this->db->get_where($table, array("id_listker" => $id_listker));
        return $user->row_array();
    }

    public function insertHistoriMaintenance($id_listker, $plat, $kondisi, $tgl_perbaikan)
    {
        $sql = "insert into histori_maintenance values ('','$id_listker','$plat','$kondisi','$tgl_perbaikan')";
        $this->db->query($sql);
    }

    public function updateKerusakan($table, $set, $where)
    {
        return $this->db
            ->where($where)
            ->update($table, $set);
    }

    public function getHistoriMaintenance()
    {
        $sql = "SELECT * from histori_maintenance ORDER BY id_his_maintenance DESC";
        return $this->db->query($sql)->result_array();
    }

    public function insertKPinjam($id_pinjam_kar, $plat, $kondisi, $status)
    {
        $sql = "insert into pinjam values ('','$id_pinjam_kar', '$plat','','','$kondisi','', '$status')";
        $this->db->query($sql);
    }

    public function get_kondisi_by_plat($plat)
    {
        $sql = "SELECT kondisi from list_kerusakan where plat='$plat'";
        return $this->db->query($sql)->row_array();
    }

    public function getJoinPinjamC($id_karyawan)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on M.plat=P.plat where  N.id_karyawan='$id_karyawan' ORDER BY id_pinjam DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getJoinPinjam()
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on M.plat=P.plat ORDER BY id_pinjam DESC";
        return $this->db->query($sql)->result_array();
    }

    public function get_by_id_pinjam($table, $id_pinjam)
    {
        $user = $this->db->get_where($table, array("id_pinjam" => $id_pinjam));
        return $user->row_array();
    }

    public function insertHistoriPeminjaman($id_pinjam)
    {
        $sql = "insert into histori_pinjam values ('','$id_pinjam')";
        $this->db->query($sql);
    }

    public function updatePinjam($table, $set, $where)
    {
        return $this->db
            ->where($where)
            ->update($table, $set);
    }

    public function getJoinPinjamKar()
    {
        $sql = "SELECT K.*,P.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar";
        return $this->db->query($sql)->result_array();
    }

    public function getJoinpajakmobil()
    {
        $sql = "SELECT P.*,M.* from pajak P inner join mobil M on P.plat=M.plat";
        return $this->db->query($sql)->result_array();
    }

    public function getjoincetak($id_pinjam)
    {
        $sql = "SELECT K.*,P.*,N.*,M.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join mobil M on P.plat=M.plat  where  P.id_pinjam='$id_pinjam'";
        return $this->db->query($sql)->result_array();
    }

    public function getjointolak($id_pinjam)
    {
        $sql = "SELECT K.*,P.*,N.*,T.* from pinjam_kar K inner join pinjam P on K.id_pinjam_kar=P.id_pinjam_kar 
        inner join karyawan N on K.id_karyawan=N.id_karyawan inner join tolak T on T.id_pinjam=P.id_pinjam";
        return $this->db->query($sql)->result_array();
    }

    public function get_by_id_pinjam_kar($table, $id_pinjam_kar)
    {
        $user = $this->db->get_where($table, array("id_pinjam_kar" => $id_pinjam_kar));
        return $user->row_array();
    }

}
