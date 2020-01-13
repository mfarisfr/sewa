-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 13.42
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
  `id_his_pajak` int(11) NOT NULL,
  `id_listker` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_pinjam`
--

CREATE TABLE `histori_pinjam` (
  `id_his_pinjam` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `plat` varchar(10) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `merk/type` varchar(50) NOT NULL,
  `jenis/model` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `warna_kb` varchar(10) NOT NULL,
  `isi_silinder` varchar(6) NOT NULL,
  `no_rangka` varchar(30) NOT NULL,
  `no_mesin` varchar(25) NOT NULL,
  `no_bpkb` varchar(20) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `warna_tnkb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '1', '2020-01-01', '14:02:00', '0002-02-02', '14:02:00', 'kampus', 'kematian');

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
  ADD PRIMARY KEY (`id_his_pajak`),
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
  MODIFY `id_his_pajak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori_pajak`
--
ALTER TABLE `histori_pajak`
  MODIFY `id_his_pajak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori_pinjam`
--
ALTER TABLE `histori_pinjam`
  MODIFY `id_his_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `list_kerusakan`
--
ALTER TABLE `list_kerusakan`
  MODIFY `id_listker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id_pajak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam_kar`
--
ALTER TABLE `pinjam_kar`
  MODIFY `id_pinjam_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
