-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2019 at 04:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penggajian1`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_gaji`
--

CREATE TABLE IF NOT EXISTS `db_gaji` (
  `nip` varchar(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `blnthn` char(6) NOT NULL,
  `status` varchar(12) NOT NULL,
  `jabatan` enum('Direktur','Sekretaris','Manager','Keuangan') NOT NULL,
  `gaji_pokok` double NOT NULL,
  `tunjangan` double NOT NULL,
  `gaji_bersih` double NOT NULL,
  PRIMARY KEY (`nip`,`blnthn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_gaji`
--

INSERT INTO `db_gaji` (`nip`, `nama`, `blnthn`, `status`, `jabatan`, `gaji_pokok`, `tunjangan`, `gaji_bersih`) VALUES
('111111', 'Ganesha Noor', 'Belum', '012020', 'Direktur', 4000000, 200000, 4200000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
