-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2014 at 08:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE IF NOT EXISTS `biaya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `id_sistem_kontrak` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_sistem_kontrak_2` (`id_sistem_kontrak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `nama`, `rating`, `id_sistem_kontrak`) VALUES
(1, '< 5 juta', 9, 3),
(2, '5-10 juta', 7, 3),
(3, '> 10 juta', 5, 3),
(4, '< 3 juta', 9, 2),
(5, '3-6 juta', 7, 2),
(6, '>6 juta', 5, 2),
(7, '< 500 ribu', 9, 1),
(8, '500 ribu - 1 juta', 7, 1),
(9, '> 1 juta', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_tambahan`
--

CREATE TABLE IF NOT EXISTS `fasilitas_tambahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(200) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `rating` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fasilitas_tambahan`
--

INSERT INTO `fasilitas_tambahan` (`id`, `deskripsi`, `nama`, `rating`) VALUES
(1, 'Internet, Cucian, Dapur, Air Panas, Ruang Tamu', 'Lengkap', 9),
(2, 'Jumlah fasilitas ¾ atau kamar mandi yang dimiliki hanya kamar mandi luar', 'Cukup Lengkap', 7),
(3, 'Jumlah fasilitas kurang dari 3', 'Tidak Lengkap', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_utama`
--

CREATE TABLE IF NOT EXISTS `fasilitas_utama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(200) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fasilitas_utama`
--

INSERT INTO `fasilitas_utama` (`id`, `deskripsi`, `rating`, `nama`) VALUES
(1, 'Tempat Tidur,Meja Belajar, Lemari Pakaian, Kamar Mandi Dalam', 9, 'Sangat Lengkap'),
(2, 'Jumlah fasilitas hanya 3', 7, 'Cukup Lengkap'),
(3, 'Jumlah fasilitas kurang dari 3', 4, 'Tidak Lengkap'),
(4, 'Tempat tidur, lemari pakaian, meja belajar, kamar mandi luar', 8, 'Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `jarak_kampus`
--

CREATE TABLE IF NOT EXISTS `jarak_kampus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `rating` double NOT NULL DEFAULT '0',
  `deskripsi` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jarak_kampus`
--

INSERT INTO `jarak_kampus` (`id`, `nama`, `rating`, `deskripsi`) VALUES
(1, '< 500 m', 9, 'Dekat'),
(2, '500 m - 1 km', 8, 'Dekat'),
(3, '1 km - 1.5 km', 7, 'Sedang'),
(4, '1.5 km - 2 km', 6, 'Jauh'),
(5, '> 2 km', 5, 'Jauh');

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE IF NOT EXISTS `kost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kost` varchar(500) NOT NULL DEFAULT '0',
  `id_jarak_kampus` int(11) NOT NULL DEFAULT '0',
  `id_fasilitas_utama` int(11) NOT NULL DEFAULT '0',
  `id_fasilitas_tambahan` int(11) NOT NULL DEFAULT '0',
  `id_biaya` int(11) NOT NULL DEFAULT '0',
  `id_sistem_kontrak` int(2) NOT NULL,
  `nilai_harga` int(20) NOT NULL,
  `deskripsi_fasilitas` varchar(200) DEFAULT NULL,
  `Alamat` varchar(70) DEFAULT NULL,
  `url_photo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_jarak_kampus` (`id_jarak_kampus`),
  KEY `fk_id_fasilitas_utama` (`id_fasilitas_utama`),
  KEY `fk_id_fasilitas_tambahan` (`id_fasilitas_tambahan`),
  KEY `fk_id_biaya` (`id_biaya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `nama_kost`, `id_jarak_kampus`, `id_fasilitas_utama`, `id_fasilitas_tambahan`, `id_biaya`, `id_sistem_kontrak`, `nilai_harga`, `deskripsi_fasilitas`, `Alamat`, `url_photo`) VALUES
(1, 'Rumah Kost Orlando', 2, 1, 2, 2, 3, 11000000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,cucian,air panas', NULL, 'img/Photo/RumahKostOrlando.jpg'),
(2, 'Rumah Kost BJ 21', 2, 1, 1, 9, 1, 1200000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,internet, cucian,air panas', NULL, 'img/Photo/RumahKostBJ21.jpg'),
(3, 'Harmoni Atas', 2, 4, 3, 9, 1, 1000000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi luar,air panas', NULL, 'img/Photo/HarmoniAtas.jpg'),
(4, 'Pondok 88', 1, 1, 1, 3, 3, 15000000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,internet,cucian,dapur,air panas ', NULL, 'img/Photo/Pondok88.jpg'),
(5, 'Bukit Resik Indah', 2, 1, 3, 6, 2, 6500000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,cucian,air panas', NULL, 'img/Photo/BukitResikIndah.jpg'),
(6, 'Kosan teh Kikis', 2, 2, 3, 8, 1, 750000, 'tempat tidur,lemari pakaian,kamar mandi dalam,cucian,dapur', NULL, 'img/Photo/KosantehKikis.jpg'),
(7, 'Kosan Pak Sunar', 2, 2, 3, 8, 1, 600000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi luar,dapur', NULL, 'img/Photo/KosanPakSunar.jpg'),
(8, 'Harmoni Bawah', 2, 1, 1, 9, 1, 1500000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,internet,cucian,dapur,air panas,ruang tamu', NULL, 'img/Photo/HarmoniBawah.jpg'),
(9, 'Bukit Indah Village', 2, 1, 3, 5, 2, 6000000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,cucian,dapur,air panas', NULL, 'img/Photo/BukitIndahVillage.jpg'),
(10, 'Bukit Resik Village', 2, 4, 3, 8, 1, 700000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi luar,dapur,air panas', NULL, 'img/Photo/BukitResikVillage.jpg'),
(11, 'BJ 44', 1, 2, 3, 8, 1, 850000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,ruang tamu,dapur,air panas', NULL, 'img/Photo/BJ44.jpg'),
(12, 'Raben 33', 1, 2, 3, 2, 3, 6000000, 'tempat tidur,lemari pakaian,kamar mandi luar,dapur,air panas', NULL, 'img/Photo/Raben33.jpg'),
(13, 'Raben Village', 1, 1, 3, 9, 1, 1200000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,internet,air panas', NULL, 'img/Photo/RabenVillage.jpg'),
(14, 'Gandog Kost', 3, 1, 3, 8, 1, 900000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,dapur,air panas,ruang tamu', NULL, 'img/Photo/GandogKost.jpg'),
(15, 'Ganesa Kost', 4, 1, 3, 8, 1, 800000, 'tempat tidur,lemari pakaian,meja belajar,kamar mandi dalam,dapur,air panas', NULL, 'img/Photo/GanesaKost.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log_pengguna`
--

CREATE TABLE IF NOT EXISTS `log_pengguna` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `JK` varchar(1) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `sistem_kontrak`
--

CREATE TABLE IF NOT EXISTS `sistem_kontrak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sistem_kontrak`
--

INSERT INTO `sistem_kontrak` (`id`, `nama`, `rating`) VALUES
(1, 'Per Bulan', 9),
(2, 'Per Semester', 7),
(3, 'Per Tahun', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biaya`
--
ALTER TABLE `biaya`
  ADD CONSTRAINT `fk_id_sistem_kontrak_2` FOREIGN KEY (`id_sistem_kontrak`) REFERENCES `sistem_kontrak` (`id`);

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `fk_id_biaya` FOREIGN KEY (`id_biaya`) REFERENCES `biaya` (`id`),
  ADD CONSTRAINT `fk_id_fasilitas_tambahan` FOREIGN KEY (`id_fasilitas_tambahan`) REFERENCES `fasilitas_tambahan` (`id`),
  ADD CONSTRAINT `fk_id_fasilitas_utama` FOREIGN KEY (`id_fasilitas_utama`) REFERENCES `fasilitas_utama` (`id`),
  ADD CONSTRAINT `fk_id_jarak_kampus` FOREIGN KEY (`id_jarak_kampus`) REFERENCES `jarak_kampus` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
