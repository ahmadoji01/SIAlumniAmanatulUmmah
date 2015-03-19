-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2015 at 04:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SIAlumniAmanatulUmmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Nama`) VALUES
('A001', 'jabirganteng', 'Jabir Al Hayyan');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NamaLengkap` varchar(100) DEFAULT NULL,
  `NamaPanggilan` varchar(15) DEFAULT NULL,
  `JenisKelamin` char(1) DEFAULT NULL,
  `TempatLahir` varchar(50) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `Lembaga` varchar(50) DEFAULT NULL,
  `TahunLulus` int(11) DEFAULT NULL,
  `Cabang` varchar(50) DEFAULT NULL,
  `AlamatAsal` varchar(200) DEFAULT NULL,
  `AlamatSekarang` varchar(200) DEFAULT NULL,
  `Facebook` varchar(80) DEFAULT NULL,
  `Twitter` varchar(30) DEFAULT NULL,
  `Email` varchar(80) DEFAULT NULL,
  `NoHP` varchar(15) DEFAULT NULL,
  `Hobi` varchar(200) DEFAULT NULL,
  `Cita_Cita` varchar(200) DEFAULT NULL,
  `Motto` varchar(200) DEFAULT NULL,
  `PrestasiPendidikan` varchar(1024) DEFAULT NULL,
  `PrestasiLain` varchar(1024) DEFAULT NULL,
  `TempatKuliah` varchar(200) DEFAULT NULL,
  `TempatKerja` varchar(200) DEFAULT NULL,
  `Kesibukan` varchar(1024) DEFAULT NULL,
  `NamaOrtu` varchar(200) DEFAULT NULL,
  `PendidikanOrtu` varchar(1024) DEFAULT NULL,
  `PekerjaanOrtu` varchar(1024) DEFAULT NULL,
  `KontakOrtu` varchar(15) DEFAULT NULL,
  `LinkFoto` varchar(100) DEFAULT NULL,
  `TanggalUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
