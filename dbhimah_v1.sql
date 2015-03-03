-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 04:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhimah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`Id_Admin` int(3) unsigned zerofill NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Nama`, `Username`, `Password`) VALUES
(001, 'Muhammad Jabir Al Haiyan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `id_cabang` char(4) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`) VALUES
('C001', 'Surabaya'),
('C002', 'SIdoarjo'),
('C003', 'Mojokerto'),
('C004', 'Malang'),
('C005', 'Jember'),
('C006', 'Madura'),
('C007', 'Yogyakarta'),
('C008', 'Semarang'),
('C009', 'Solo'),
('C010', 'Jakarta'),
('C011', 'Bogor'),
('C012', 'Bandung'),
('C013', 'Indramayu');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE IF NOT EXISTS `lembaga` (
  `id_lembaga` char(4) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES
('L001', 'MA Unggulan Amanatul Ummah Surabaya'),
('L002', 'MA Akselerasi Amanatul Ummah Surabaya'),
('L003', 'SMA Unggulan Amanatul Ummah Surabaya'),
('L004', 'MBI Amanatul Ummah Surabaya'),
('L005', 'MBI Amanatul Ummah Pacet'),
('L006', 'MA Akselerasi Amanatul Ummah Pacet'),
('L007', 'MA Excellent Amanatul Ummah Pacet'),
('L008', 'SMA Berbasis Pesantren Amanatul Ummah Pacet'),
('L009', 'SMA Bendungan Jati Hikmatul Amanah Pacet');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` char(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `username`, `password`) VALUES
('M001', 'mahasiswa', 'mahasiswa'),
('m002', 'yayan', 'yayan');

-- --------------------------------------------------------

--
-- Table structure for table `profil_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `profil_mahasiswa` (
`no` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_lembaga` char(4) NOT NULL,
  `Tahun_Lulus` int(4) NOT NULL,
  `id_cabang` char(4) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_HP` int(15) NOT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita_cita` varchar(100) DEFAULT NULL,
  `motto` varchar(100) DEFAULT NULL,
  `prestasi_pendidikan` varchar(200) DEFAULT NULL,
  `prestasi_lain` varchar(200) DEFAULT NULL,
  `kuliah` varchar(100) DEFAULT NULL,
  `bekerja` varchar(100) DEFAULT NULL,
  `kesibukan_saat_ini` varchar(200) DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `pendidikan_terakhir Ortu` varchar(20) DEFAULT NULL,
  `pekerjaan_ortu` varchar(50) DEFAULT NULL,
  `kontak_ortu` int(15) DEFAULT NULL,
  `link_foto` varchar(50) DEFAULT NULL,
  `tanggal_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
 ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
 ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `profil_mahasiswa`
--
ALTER TABLE `profil_mahasiswa`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `No HP` (`no_HP`), ADD FULLTEXT KEY `Nama Lengkap` (`nama_lengkap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Id_Admin` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_mahasiswa`
--
ALTER TABLE `profil_mahasiswa`
MODIFY `no` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
