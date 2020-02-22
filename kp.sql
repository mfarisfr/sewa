-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2020 pada 08.21
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
(3, 3, 'kt1759nb', 'baret pintu belakang bagian kiri', '2020-01-20'),
(4, 4, 'AB1729BX', 'Kaca Belakang Pecah', '2020-01-20'),
(5, 4, 'AB1729BX', 'Penyokk Belakang', '2020-01-22'),
(6, 5, 'G1248kb', 'Kaca Belakang Pecah', '2020-01-23'),
(7, 5, 'G1248kb', 'kaca depan pecah', '0000-00-00'),
(8, 7, 'kt1759nb', '', '2020-02-14'),
(9, 8, 'kt1759nb', '1. kaca pecah', '2020-02-14');

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
(2, 4, 'kt1759nb', '2021-07-17', '0000-00-00', 809999),
(4, 5, 'AB1729BX', '2021-06-09', '2020-01-19', 275000),
(5, 4, 'kt1759nb', '2021-12-25', '2020-01-20', 540000),
(6, 5, 'AB1729BX', '2021-06-11', '2020-01-20', 576000),
(7, 4, 'kt1759nb', '2020-01-23', '2020-01-22', 1000000);

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
(1, 1),
(2, 9),
(3, 10);

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
  `is_active` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `nik`, `niy`, `nama_disvisi`, `id_divisi`, `nama_jabatan`, `id_jabatan`, `is_active`, `password`) VALUES
('1', 'akyu', '1', '1', 'desain', '1', 'karyawan', '1', 1, '1'),
('2', 'saya', '2', '2', 'mobil', '2', 'kepala', '2', 1, '2'),
('3', 'coba', '3', '3', 'atasan', '3', 'direktur', '3', 1, '3');

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
(3, 'kt1759nb', ''),
(4, 'AB1729BX', ''),
(5, 'G1248kb', ''),
(6, 'kt1759nb', 'kacanya pecah, ban pecah,'),
(7, 'kt1759nb', ''),
(8, 'kt1759nb', '1. ban pecah\r\n'),
(9, 'kt1759nb', 'tes'),
(10, 'G1248kb', 'apa'),
(11, 'ab2020kn', 'bocor');

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
('AB1729BX', 'rahman', 'Maguwoharjo', 'Xenia LX', 'Minibus', '2019', 'Biru', '1700', 'tsg73627ggxtw666', 'gsaasg62627sasaa', 'agsga676', 'Solar', 'Biru'),
('ab2020kn', 'sugiyo', 'jogja atas', 'ayla', 'Minibus', '2017', 'hitam', '1700', '9ujknsjd', 'huysdbnsjasd', 'hdidshidhdm', 'bensin', 'hitam'),
('G1248kb', 'Gina ', 'Jl Babarsari no 3', 'Ferrari ', 'Sport', '2017', 'Merah', '2500', 'hd8389whfjijds8', 'dhusih990', 'djhuhhf898889', 'Solar', 'Merah'),
('kt1759nb', 'Rahman', 'Jl Msaid Samarinda', 'Toyota Avanza G', 'Minibus', '2017', 'Hitam', '1800', '828dhdh992910', 'ssa92839902n', 'dhdkwi993hs', 'Bensin', 'Hitam');

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
(4, 'kt1759nb', '2020-01-23', 1000000),
(5, 'AB1729BX', '2021-06-11', 576000),
(6, 'kt1759nb', '2020-02-22', 250000),
(7, 'kt1759nb', '2020-02-23', 1111),
(8, 'AB1729BX', '2020-02-23', 809999),
(9, 'G1248kb', '2021-02-23', 800000);

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
(1, 1, 'kt1759nb', 1500, 2000, 'penyok samping body', '', '3'),
(9, 3, 'AB1729BX', 0, 0, 'Penyokk Belakang', '', '5'),
(10, 5, 'AB1729BX', 2500, 3000, 'Penyokk Belakang', '', '5'),
(11, 2, 'AB1729BX', 0, 0, 'Penyokk Belakang', '', '0'),
(12, 6, 'G1248kb', 1000, 0, '', '', '4'),
(13, 7, 'G1248kb', 0, 0, 'Kaca Belakang Pecah', '', '3'),
(14, 8, 'G1248kb', 0, 0, '', '', '0'),
(15, 10, 'AB1729BX', 0, 0, '', '', 'konfirmasi direktur'),
(16, 9, 'kt1759nb', 0, 0, '', '', 'konfirmasi direktur'),
(17, 11, 'kt1759nb', 0, 0, '', '', 'konfirmasi kepala'),
(18, 12, 'kt1759nb', 0, 0, '', '', 'konfirmasi kepala');

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
(1, '1', '2020-01-01', '14:02:00', '0002-02-02', '14:02:00', 'kampus', 'kematian'),
(2, '3', '2020-01-01', '14:02:00', '2020-03-03', '15:03:00', 'rumah', 'keluarga'),
(3, '2', '2020-01-09', '01:03:00', '2020-03-12', '15:03:00', 'sekolah', 'liburan'),
(5, '2', '2020-01-01', '13:11:00', '2020-01-02', '13:01:00', 'disini', 'rahasia'),
(6, '2', '2020-01-23', '14:02:00', '2020-01-24', '14:02:00', 'Sekolah', 'Keluarga'),
(7, '1', '2020-01-22', '12:00:00', '2020-01-23', '12:00:00', 'Sekolah', 'sekolah'),
(8, '1', '2020-01-25', '14:02:00', '2020-01-26', '14:02:00', 'Sekolah Teladan', 'Pribadi'),
(9, '1', '2020-01-25', '14:02:00', '2020-01-26', '14:02:00', 'Bandara', 'Disewa Teman'),
(10, '1', '2020-01-27', '15:03:00', '2020-01-28', '15:03:00', 'Sekolah', 'Arisan'),
(11, '2', '2020-01-27', '13:01:00', '2020-01-28', '13:01:00', 'kampus', 'Wisuda'),
(12, '1', '2020-02-09', '14:02:00', '2020-02-10', '14:02:00', 'sekolah', 'piknik'),
(13, '1', '2020-02-11', '14:02:00', '2020-02-11', '14:02:00', 'rumah', 'keluarga'),
(14, '3', '2020-02-08', '12:00:00', '2020-02-09', '12:00:00', 'Sekolah', 'tamasya'),
(15, '2', '2020-02-23', '06:06:00', '2020-02-24', '04:00:00', 'Sekolah', 'Arisan Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tolak`
--

CREATE TABLE `tolak` (
  `id_tolak` int(11) NOT NULL,
  `id_pinjam_kar` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tolak`
--

INSERT INTO `tolak` (`id_tolak`, `id_pinjam_kar`, `keterangan`) VALUES
(1, 13, 'ganti hari sabtu'),
(2, 14, 'saya tidak suka dengan bapak'),
(8, 11, 'saya juga tidak suka dengan bapak');

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
  MODIFY `id_his_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `histori_pajak`
--
ALTER TABLE `histori_pajak`
  MODIFY `id_his_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `histori_pinjam`
--
ALTER TABLE `histori_pinjam`
  MODIFY `id_his_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `list_kerusakan`
--
ALTER TABLE `list_kerusakan`
  MODIFY `id_listker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pinjam_kar`
--
ALTER TABLE `pinjam_kar`
  MODIFY `id_pinjam_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tolak`
--
ALTER TABLE `tolak`
  MODIFY `id_tolak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
