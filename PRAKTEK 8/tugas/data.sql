-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 06:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formpesertadidik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `jenpen` varchar(10) NOT NULL,
  `tglmsk` date NOT NULL,
  `nis` int(10) NOT NULL,
  `npu` int(20) NOT NULL,
  `pilihan_paud` varchar(8) NOT NULL,
  `pilihan_tk` varchar(8) NOT NULL,
  `skhun` int(16) NOT NULL,
  `ijazah` int(16) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `cita2` varchar(30) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nik` int(16) NOT NULL,
  `tmpt_lahir` varchar(31) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `bk` varchar(30) NOT NULL,
  `alamat` varchar(31) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `dusun` varchar(31) NOT NULL,
  `desa` varchar(31) NOT NULL,
  `kecamatan` varchar(31) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `tmpt_tinggal` varchar(25) NOT NULL,
  `transportasi` varchar(25) NOT NULL,
  `nohp` int(28) NOT NULL,
  `notelp` int(31) NOT NULL,
  `email` varchar(31) NOT NULL,
  `kps` varchar(8) NOT NULL,
  `nokps` int(16) DEFAULT NULL,
  `kwn` varchar(16) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `khusus_ayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `khusus_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`jenpen`, `tglmsk`, `nis`, `npu`, `pilihan_paud`, `pilihan_tk`, `skhun`, `ijazah`, `hobi`, `cita2`, `nama`, `jenkel`, `nisn`, `nik`, `tmpt_lahir`, `tgl_lahir`, `agama`, `bk`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kodepos`, `tmpt_tinggal`, `transportasi`, `nohp`, `notelp`, `email`, `kps`, `nokps`, `kwn`, `namaayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `khusus_ayah`, `namaibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `khusus_ibu`) VALUES
('Pindahan', '2022-05-03', 2147483647, 2147483647, 'Ya', '', 2147483647, 2147483647, 'Olah raga', 'Dokter', 'Nikita Claudia', 'Perempuan', 15734216, 2147483647, 'Surabaya', '2022-05-18', 'Islam', 'Tidak', 'PERUMAHAN PEMROGRAMAN WEB', 44, 22, 'dusun penari', 'desa penari', 'rungkut', 60300, 'Orang Tua', 'Jalan Kaki', 2147483647, 31888999, 'kepoya@gmail.com', 'Tidak', 0, 'Indonesia', 'Alex', '2022-05-18', 'S1', 'Wiraswasta', '> 20.000.000', 'Tidak', 'Dona', '2022-05-18', 'S1', 'Wiraswasta', '> 20.000.000', 'Tidak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
