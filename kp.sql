-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2020 pada 05.12
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `histerori_kerusakan`
--

CREATE TABLE `histerori_kerusakan` (
  `id_historiker` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `kondisi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_maintenance`
--

CREATE TABLE `histori_maintenance` (
  `id_his_maintenance` int(11) NOT NULL,
  `id_listker` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `kondisi` text NOT NULL,
  `tgl_perbaikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_maintenance`
--

INSERT INTO `histori_maintenance` (`id_his_maintenance`, `id_listker`, `plat`, `kondisi`, `tgl_perbaikan`) VALUES
(1, 2, 'AB1729BX', '1. Gesekan sedikit dibagian belakang mobil', '2020-03-07'),
(2, 2, 'AB1729BX', '1. Ban belakang kiri bocor', '2020-03-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_pajak`
--

CREATE TABLE `histori_pajak` (
  `id_his_pajak` int(11) NOT NULL,
  `id_pajak` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `tgl_pajak` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_pajak`
--

INSERT INTO `histori_pajak` (`id_his_pajak`, `id_pajak`, `plat`, `tgl_pajak`, `tgl_bayar`, `harga`) VALUES
(1, 2, 'AB1729BX', '2021-03-07', '2020-03-07', 95000),
(2, 3, 'AB3321BC', '2021-03-12', '2020-03-12', 750000),
(3, 3, 'AB3321BC', '2020-03-15', '2020-03-13', 320000),
(4, 2, 'AB1729BX', '2020-03-17', '2020-03-13', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_pinjam`
--

CREATE TABLE `histori_pinjam` (
  `id_his_pinjam` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_pinjam`
--

INSERT INTO `histori_pinjam` (`id_his_pinjam`, `id_pinjam`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(50) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nik` char(16) NOT NULL,
  `niy` char(17) NOT NULL,
  `nama_disvisi` varchar(50) NOT NULL,
  `id_divisi` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `id_jabatan` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `nik`, `niy`, `nama_disvisi`, `id_divisi`, `nama_jabatan`, `id_jabatan`, `is_active`) VALUES
('1', 'Agus Salim', '123', '123', 'Guru', '1', 'karyawan', '1', 1),
('2', 'Yahya', '212', '212', 'Prasarana', '2', 'kepala', '2', 1),
('3', 'Bambang Pamungkas', '3', '3', 'Pengurus', '3', 'direktur', '3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_kerusakan`
--

CREATE TABLE `list_kerusakan` (
  `id_listker` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_kerusakan`
--

INSERT INTO `list_kerusakan` (`id_listker`, `plat`, `kondisi`) VALUES
(2, 'AB1729BX', '1. Lecet deket plat belakang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `plat` varchar(10) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `merk_type` varchar(50) NOT NULL,
  `jenis_model` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `warna_kb` varchar(10) NOT NULL,
  `isi_silinder` varchar(6) NOT NULL,
  `no_rangka` varchar(30) NOT NULL,
  `no_mesin` varchar(25) NOT NULL,
  `no_bpkb` varchar(20) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `warna_tnkb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`plat`, `nama_pemilik`, `alamat`, `merk_type`, `jenis_model`, `tahun`, `warna_kb`, `isi_silinder`, `no_rangka`, `no_mesin`, `no_bpkb`, `bahan_bakar`, `warna_tnkb`) VALUES
('AB1729BX', 'Bagus', 'jl maguwoharjo 125 sambilegi lor', 'XENIA LX', 'MINIBUS', '2019', 'Hitam', '1700', 'tsg73627ggxtw666', 'gsaasg62627sasa', 'agsga676', 'Bensin', 'Hitam'),
('AB3321BC', 'Rahman', 'jl Stadion', 'AVANZA G', 'MINIBUS', '2018', 'Biru', '1800', 'jdhihd99ii331', 'jjks09093jj', 'jijdi990', 'Bensin', 'Hitam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pajak`
--

CREATE TABLE `pajak` (
  `id_pajak` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `tgl_pajak` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pajak`
--

INSERT INTO `pajak` (`id_pajak`, `plat`, `tgl_pajak`, `harga`) VALUES
(2, 'AB1729BX', '2020-03-17', 300000),
(3, 'AB3321BC', '2020-03-15', 320000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_pinjam_kar` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `km_awal` int(11) NOT NULL,
  `km_akhir` int(11) NOT NULL,
  `kerusakana_awal` text NOT NULL,
  `kerusakan_akhir` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_pinjam_kar`, `plat`, `km_awal`, `km_akhir`, `kerusakana_awal`, `kerusakan_akhir`, `status`) VALUES
(2, 2, 'AB1729BX', 4000, 4500, '', '1. lecet sedikit bagian belakang dekat plat', 'kembali'),
(3, 3, 'AB1729BX', 3000, 3250, '', '1. Lecet deket plat belakang', 'kembali'),
(4, 4, 'AB1729BX', 0, 0, '1. Lecet deket plat belakang', '', 'konfirmasi direktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_kar`
--

CREATE TABLE `pinjam_kar` (
  `id_pinjam_kar` int(11) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `waktu_pinjam` time NOT NULL,
  `tgl_kembali` date NOT NULL,
  `waktu_kembali` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `acara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam_kar`
--

INSERT INTO `pinjam_kar` (`id_pinjam_kar`, `id_karyawan`, `tgl_pinjam`, `waktu_pinjam`, `tgl_kembali`, `waktu_kembali`, `tempat`, `acara`) VALUES
(2, '2', '2020-03-08', '06:00:00', '2020-03-08', '22:00:00', 'Sekolah', 'Liburan Keluarga'),
(3, '2', '2020-03-09', '05:30:00', '2020-03-09', '04:00:00', 'Sekolah', 'Keluarga'),
(4, '1', '2020-03-14', '07:00:00', '2020-03-15', '19:00:00', 'Rumah', 'Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tolak`
--

CREATE TABLE `tolak` (
  `id_tolak` int(11) NOT NULL,
  `id_pinjam_kar` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `username`
--

CREATE TABLE `username` (
  `id_karyawan` varchar(50) NOT NULL,
  `akun_username` varchar(20) NOT NULL,
  `akun_password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `username`
--

INSERT INTO `username` (`id_karyawan`, `akun_username`, `akun_password`, `created_at`, `updated_at`) VALUES
('1', '001', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2', '002', '123', '2020-03-02 10:39:00', '0000-00-00 00:00:00'),
('3', '003', '123', '2020-03-02 11:12:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `histerori_kerusakan`
--
ALTER TABLE `histerori_kerusakan`
  ADD PRIMARY KEY (`id_historiker`),
  ADD KEY `fkkid_pinjam` (`id_pinjam`),
  ADD KEY `fkkkkkplat` (`plat`);

--
-- Indeks untuk tabel `histori_maintenance`
--
ALTER TABLE `histori_maintenance`
  ADD PRIMARY KEY (`id_his_maintenance`),
  ADD KEY `fkkid_listker` (`id_listker`),
  ADD KEY `fkpsplat` (`plat`);

--
-- Indeks untuk tabel `histori_pajak`
--
ALTER TABLE `histori_pajak`
  ADD PRIMARY KEY (`id_his_pajak`),
  ADD KEY `fkid_pajak` (`id_pajak`),
  ADD KEY `fkpplat` (`plat`);

--
-- Indeks untuk tabel `histori_pinjam`
--
ALTER TABLE `histori_pinjam`
  ADD PRIMARY KEY (`id_his_pinjam`),
  ADD KEY `fkid_pinjam` (`id_pinjam`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `niy` (`niy`),
  ADD UNIQUE KEY `id_jabatan` (`id_jabatan`),
  ADD UNIQUE KEY `id_divisi` (`id_divisi`);

--
-- Indeks untuk tabel `list_kerusakan`
--
ALTER TABLE `list_kerusakan`
  ADD PRIMARY KEY (`id_listker`),
  ADD KEY `fkkkplat` (`plat`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`plat`),
  ADD UNIQUE KEY `no_rangka` (`no_rangka`),
  ADD UNIQUE KEY `no_mesin` (`no_mesin`),
  ADD UNIQUE KEY `no_bpkb` (`no_bpkb`);

--
-- Indeks untuk tabel `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id_pajak`),
  ADD KEY `forplat` (`plat`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `fkplat` (`plat`),
  ADD KEY `fkid_pinjam_kar` (`id_pinjam_kar`);

--
-- Indeks untuk tabel `pinjam_kar`
--
ALTER TABLE `pinjam_kar`
  ADD PRIMARY KEY (`id_pinjam_kar`),
  ADD KEY `fksid_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `tolak`
--
ALTER TABLE `tolak`
  ADD PRIMARY KEY (`id_tolak`),
  ADD KEY `fkkp_id_pinjam_kar` (`id_pinjam_kar`);

--
-- Indeks untuk tabel `username`
--
ALTER TABLE `username`
  ADD UNIQUE KEY `akun_username` (`akun_username`),
  ADD KEY `fid_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `histerori_kerusakan`
--
ALTER TABLE `histerori_kerusakan`
  MODIFY `id_historiker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori_maintenance`
--
ALTER TABLE `histori_maintenance`
  MODIFY `id_his_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `histori_pajak`
--
ALTER TABLE `histori_pajak`
  MODIFY `id_his_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `histori_pinjam`
--
ALTER TABLE `histori_pinjam`
  MODIFY `id_his_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `list_kerusakan`
--
ALTER TABLE `list_kerusakan`
  MODIFY `id_listker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pinjam_kar`
--
ALTER TABLE `pinjam_kar`
  MODIFY `id_pinjam_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tolak`
--
ALTER TABLE `tolak`
  MODIFY `id_tolak` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `histerori_kerusakan`
--
ALTER TABLE `histerori_kerusakan`
  ADD CONSTRAINT `fkkid_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `pinjam` (`id_pinjam`),
  ADD CONSTRAINT `fkkkkkplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`);

--
-- Ketidakleluasaan untuk tabel `histori_maintenance`
--
ALTER TABLE `histori_maintenance`
  ADD CONSTRAINT `fkkid_listker` FOREIGN KEY (`id_listker`) REFERENCES `list_kerusakan` (`id_listker`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkpsplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `histori_pajak`
--
ALTER TABLE `histori_pajak`
  ADD CONSTRAINT `fkid_pajak` FOREIGN KEY (`id_pajak`) REFERENCES `pajak` (`id_pajak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkpplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `histori_pinjam`
--
ALTER TABLE `histori_pinjam`
  ADD CONSTRAINT `fkid_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `pinjam` (`id_pinjam`);

--
-- Ketidakleluasaan untuk tabel `list_kerusakan`
--
ALTER TABLE `list_kerusakan`
  ADD CONSTRAINT `fkkkplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`);

--
-- Ketidakleluasaan untuk tabel `pajak`
--
ALTER TABLE `pajak`
  ADD CONSTRAINT `forplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `fkid_pinjam_kar` FOREIGN KEY (`id_pinjam_kar`) REFERENCES `pinjam_kar` (`id_pinjam_kar`),
  ADD CONSTRAINT `fkplat` FOREIGN KEY (`plat`) REFERENCES `mobil` (`plat`);

--
-- Ketidakleluasaan untuk tabel `pinjam_kar`
--
ALTER TABLE `pinjam_kar`
  ADD CONSTRAINT `fksid_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Ketidakleluasaan untuk tabel `tolak`
--
ALTER TABLE `tolak`
  ADD CONSTRAINT `fkkp_id_pinjam_kar` FOREIGN KEY (`id_pinjam_kar`) REFERENCES `pinjam_kar` (`id_pinjam_kar`);

--
-- Ketidakleluasaan untuk tabel `username`
--
ALTER TABLE `username`
  ADD CONSTRAINT `fid_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
