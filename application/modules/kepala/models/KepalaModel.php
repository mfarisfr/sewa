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
        $sql = "SELECT k.nama,p.id_pinjam_kar,p.tgl_pinjam,p.waktu_pinjam,p.tgl_kembali,p.waktu_kembali,p.tempat,p.acara from karyawan k inner join pinjam_kar p on k.id_karyawan = p.id_karyawan";
        return $this->db->query($sql)->result_array();
    }
    
    public function getMobil()
    {
        $sql = "SELECT * from mobil";
        return $this->db->query($sql)->result_array();
    }

    public function insertpajak($plat,$tgl_pajak,$harga)
    {
        $sql = "insert into pajak values ('','$plat','$tgl_pajak','$harga')";
        $this->db->query($sql);
    }

    public function insertlistker($plat,$kondisi)
    {
        $sql = "insert into list_kerusakan values ('','$plat','$kondisi')";
        $this->db->query($sql);
    }
    
    public function insermobil($plat, $nama_pemilik,$alamat,$tahun,$merk_type,$jenis_model,$warna_kb,$isi_silinder,$no_rangka,$no_mesin,$no_bpkb,
    $bahan_bakar,$warna_tnkb)
    {
        $sql = "insert into mobil values ('$plat', '$nama_pemilik','$alamat','$merk_type','$jenis_model','$tahun','$warna_kb','$isi_silinder','$no_rangka','$no_mesin','$no_bpkb',
        '$bahan_bakar','$warna_tnkb')";
        $this->db->query($sql);
    }

    public function getPajak()
    {
        $sql = "SELECT * from pajak";
        return $this->db->query($sql)->result_array();
    }

    public function get_by_id_pajak($table,$id_pajak)
    {
        $user = $this->db->get_where($table,array("id_pajak"=>$id_pajak));
        return $user->row_array();
    }

    public function updatePajak($table, $set, $where)
    {
        return $this->db
					->where($where)
					->update($table, $set);

    }

    public function insertHistoriPajak($id_pajak,$plat, $tgl_pajak,$tgl_bayar, $harga)
    {
        $sql = "insert into histori_pajak values ('','$id_pajak','$plat','$tgl_pajak','$tgl_bayar','$harga')";
        $this->db->query($sql);
    }

    public function getHistoriPajak()
    {
        $sql = "SELECT * from histori_pajak";
        return $this->db->query($sql)->result_array();
    }

    public function getListKer()
    {
        $sql = "SELECT * from list_kerusakan";
        return $this->db->query($sql)->result_array();
    }
}
