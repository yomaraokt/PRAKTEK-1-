-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2021 pada 06.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `jp` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nis` int(10) NOT NULL,
  `npu` int(20) NOT NULL,
  `pernah_paud` varchar(8) NOT NULL,
  `pernah_tk` varchar(8) NOT NULL,
  `skhun` int(16) NOT NULL,
  `ijazah` int(16) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `cita` varchar(30) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nik` int(16) NOT NULL,
  `tl` varchar(31) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `bk` varchar(30) NOT NULL,
  `jalan` varchar(31) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `dusun` varchar(31) NOT NULL,
  `desa` varchar(31) NOT NULL,
  `kecamatan` varchar(31) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `tinggal` varchar(25) NOT NULL,
  `transportasi` varchar(25) NOT NULL,
  `nohp` int(28) NOT NULL,
  `notelp` int(31) NOT NULL,
  `email` varchar(31) NOT NULL,
  `kps` varchar(8) NOT NULL,
  `nokps` int(16) DEFAULT NULL,
  `kwn` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`jp`, `tgl_masuk`, `nis`, `npu`, `pernah_paud`, `pernah_tk`, `skhun`, `ijazah`, `hobi`, `cita`, `nama`, `jk`, `nisn`, `nik`, `tl`, `tgl_lahir`, `agama`, `bk`, `jalan`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kodepos`, `tinggal`, `transportasi`, `nohp`, `notelp`, `email`, `kps`, `nokps`, `kwn`) VALUES
('Siswa Baru', '2021-04-26', 5111, 124125, 'Ya', 'Tidak', 2147483647, 2147483647, 'Olah raga', 'TNI/POLRI', 'AAS', 'Laki-laki', 12314, 12555, 'SSAAA', '2021-04-25', 'Hindu', 'Tidak', 'ASDASD', 12, 15, 'ASD', '', 'AF', 124, 'Kos', 'Kendaraan Umum', 1241, 15151, 'ASDA', 'Ya', 12414, 'ASDASD'),
('Siswa Baru', '2021-04-26', 1222451124, 1241252245, 'Ya', 'Ya', 2147483647, 2147483647, 'Membaca', 'TNI/POLRI', 'Rico Satria Fandi', 'Laki-laki', 1234567891, 2147483647, 'Sidoarjo', '2001-01-25', 'Islam', 'Tidak', 'ANJAS', 12, 15, 'ASD', '', 'AFaaa', 2124, 'Orang Tua', 'Jalan Kaki', 1241, 15151, 'ASDA', 'Tidak', 0, 'ASDASD'),
('Siswa Baru', '2021-05-04', 1222451124, 1241252245, 'Ya', 'Ya', 2147483647, 2147483647, 'Membaca', 'Dokter', 'Rico Satria Fandi', 'Laki-laki', 1234567891, 2147483647, 'Sidoarjo', '2001-01-25', 'Islam', 'Tidak', 'Jalan. Aja dulu', 5, 7, 'Kebonan', '', 'Gedangi', 51243, 'Orang Tua', 'Kendaraan Pribadi', 2147483647, 2147483647, 'ricocacola@gmail.com', 'Tidak', 0, 'Indonesia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
