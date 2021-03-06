-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2019 at 04:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'payun', 'payun2020');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id_daftar` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat_lengkap` varchar(150) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(150) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `email`, `password`, `prodi`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `gender`, `alamat_lengkap`, `agama`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `status`) VALUES
(47, 'tan@gmail.com', '1', 'Teknik Informatika', 'Tania Noor', 'Sumedang', '1998-04-02', 'Perempuan', 'Cisalak', 'Islam', 'djuniar', 'ainy', 'Cisalak', 'Penulis', 'Wiraswasta', 'Diterima'),
(48, 'gan@gmail.com', '1', 'D3 - Manajemen Informatika', 'Ganesha Noor', 'Bandung', '1989-01-09', 'Laki-laki', 'Warungkelapa', 'Islam', 'djuniar', 'ainy', 'Cisalak', 'Penulis', 'Wiraswasta', 'Diterima'),
(49, 'yuniarsupardi@gmail.com', '222222', 'S1 - Teknik Informatika', 'Yuniar Supardi', 'Baikpapan', '0000-00-00', 'Laki-laki', 'Balikpapan', 'Islam', 'Abdul Yamani', 'Alhm. Djumastinah', 'Balikpapan', 'BUMN', 'Wiraswasta', 'Diterima'),
(50, 'tes@sdsdsd', '333333', 'D3 - Manajemen Informatika', 'Adit', 'jkjnk', '0000-00-00', 'Perempuan', 'lklkm', 'Islam', 'hkjk', 'kjkjn', 'lklk', 'kkjnkjn', 'n,m', 'Ditolak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
