-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 03:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project213`
--

-- --------------------------------------------------------

--
-- Table structure for table `213_konsumen`
--

CREATE TABLE IF NOT EXISTS `213_konsumen` (
  `id_konsumen` int(4) NOT NULL AUTO_INCREMENT,
  `nama_konsumen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `213_konsumen`
--

INSERT INTO `213_konsumen` (`id_konsumen`, `nama_konsumen`) VALUES
(1, 'Ujang');

-- --------------------------------------------------------

--
-- Table structure for table `213_mekanik`
--

CREATE TABLE IF NOT EXISTS `213_mekanik` (
  `id_mekanik` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mekanik` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mekanik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `213_mekanik`
--

INSERT INTO `213_mekanik` (`id_mekanik`, `nama_mekanik`) VALUES
(1, 'Yuniar Supardi'),
(2, 'Ganesha Noor'),
(3, 'Mujian Noor'),
(4, 'Rosdian Noor');

-- --------------------------------------------------------

--
-- Table structure for table `213_pembelian`
--

CREATE TABLE IF NOT EXISTS `213_pembelian` (
  `id_pembelian` int(5) NOT NULL AUTO_INCREMENT,
  `id_mekanik` int(5) DEFAULT NULL,
  `id_sparepart` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `harga_jasa` varchar(10) DEFAULT NULL,
  `tgl_beli` date DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `213_pembelian`
--

INSERT INTO `213_pembelian` (`id_pembelian`, `id_mekanik`, `id_sparepart`, `qty`, `harga_jasa`, `tgl_beli`) VALUES
(8, 1, 1, 1, '30000', '2016-08-26'),
(9, 1, 14, 1, '20000', '2016-08-26'),
(10, 2, 18, 1, '7000', '2016-08-26'),
(11, 2, 19, 1, '70000', '2016-08-26'),
(13, 3, 27, 1, '5000', '2016-08-26'),
(14, 2, 3, 1, '7000', '2016-08-26'),
(15, 2, 10, 1, '35000', '2016-08-26'),
(25, 3, 2, 1, '3500', '2016-08-26'),
(26, 2, 1, 1, '35000', '2016-08-26'),
(27, 1, 1, 1, '35000', '2016-08-26'),
(28, 3, 6, 1, '35000', '2016-08-26'),
(29, 2, 8, 2, '5000', '2016-08-26'),
(30, 3, 18, 2, '10000', '2016-08-26'),
(31, 4, 11, 1, '35000', '2016-08-26'),
(32, 4, 7, 2, '10000', '2016-08-27');

--
-- Triggers `213_pembelian`
--
DROP TRIGGER IF EXISTS `jual`;
DELIMITER //
CREATE TRIGGER `jual` AFTER INSERT ON `213_pembelian`
 FOR EACH ROW BEGIN
UPDATE 213_sparepart SET stock=stock-NEW.qty
WHERE id_sparepart=NEW.id_sparepart;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `213_pengguna`
--

CREATE TABLE IF NOT EXISTS `213_pengguna` (
  `id_pengguna` int(5) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `213_pengguna`
--

INSERT INTO `213_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`) VALUES
(1, 'Yuniar Supardi', 'kasir', 'c7911af3adbd12a035b289556d96470a');

-- --------------------------------------------------------

--
-- Table structure for table `213_sparepart`
--

CREATE TABLE IF NOT EXISTS `213_sparepart` (
  `id_sparepart` int(5) NOT NULL AUTO_INCREMENT,
  `sparepart` varchar(50) DEFAULT NULL,
  `stock` varchar(5) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_sparepart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `213_sparepart`
--

INSERT INTO `213_sparepart` (`id_sparepart`, `sparepart`, `stock`, `harga`) VALUES
(1, 'Filter Udara', '0', '32000'),
(2, 'Kampas Rem Depan', '0', '37000'),
(3, 'Kampas Rem Belakang', '0', '26000'),
(4, 'Rantai', '12', '65000'),
(5, 'Gir Depan', '0', '35000'),
(6, 'Gir belakang', '0', '63000'),
(7, 'Bohlam Depan', '21', '25000'),
(8, 'Bohlam Belakang', '18', '7500'),
(9, 'Kabel Gas', '20', '20000'),
(10, 'Kampas Kopling', '5', '148000'),
(11, 'Piston', '2', '38000'),
(12, 'Ring Piston', '5', '60000'),
(13, 'V-belt', '4', '43000'),
(14, 'CDI', '5', '340000'),
(15, 'Relay Starter', '6', '40000'),
(16, 'Sokbreker Belakang', '6', '180000'),
(17, 'Kem', '5', '115000'),
(18, 'Oli Yamalube', '3', '35000'),
(19, 'Oli Top One', '5', '40000'),
(20, 'Oli Castroll', '5', '65000'),
(21, 'Oli Mesran', '5', '35000'),
(27, 'Spion', '6', '25000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
