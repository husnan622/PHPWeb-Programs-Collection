-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 06:54 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jual_buku_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(2, 'Yuniar Supardi', 'cisalak', 'cisalak2019');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `id_ketegori` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `gambar` text NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `halaman` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_ketegori`, `judul`, `gambar`, `penerbit`, `pengarang`, `halaman`, `harga`, `stok`) VALUES
(21, 15, 'Buku Mahir Web Programming', '20170217164334.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '292', '72800', '69'),
(22, 15, 'Semua Bisa Menjadi Programmer CodeIgniter Basic', '20170217164457.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '328', '64900', '54'),
(24, 15, 'Semua Bisa Menjadi Programmer PythonBasic', '20170217164739.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '152', '42800', '23'),
(25, 15, 'Belajar Pemrograman Android Untuk Semua Kebutuhan', '20170217164900.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '264', '70000', '50'),
(26, 15, 'Semua Bisa Menjadi Programmer Ruby Basic', '20170217202459.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '236', '64900', '52'),
(27, 15, 'Semua Bisa Menjadi Programmer Visual Basic 2012 Basic', '20170221040107.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '274', '64900', '40'),
(28, 15, 'Semua Bisa Menjadi Programmer Web Java Case Study', '20170221040253.jpg', 'PT. Elexmedia Komputindo', 'Ir. Yuniar Supardi', '172', '39800', '15');

-- --------------------------------------------------------

--
-- Table structure for table `chekout`
--

CREATE TABLE IF NOT EXISTS `chekout` (
  `id_chekout` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_terima` enum('belum di terima','sudah diterima') NOT NULL,
  PRIMARY KEY (`id_chekout`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pembeli`, `nama`, `username`, `password`) VALUES
(7, 'Yuniar Supardi', 'yuniar', 'yuniar2018'),
(8, 'Ferry Sandria', 'ferry', 'ferry2018'),
(10, 'Arham', 'arham', 'arham2018');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_ketegori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(70) NOT NULL,
  PRIMARY KEY (`id_ketegori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_ketegori`, `kategori`) VALUES
(14, 'Pendidikan'),
(15, 'Tehnologi Informatika'),
(16, 'Kewirausahaan'),
(17, 'COC');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pembeli`, `id_buku`, `qty`, `harga`, `total_harga`, `total_bayar`) VALUES
(52, 7, 21, '1', '72800', '72800', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
