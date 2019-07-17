-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2018 at 02:18 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` char(100) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  `level` enum('Asisten Manajer','Pegawai') NOT NULL,
  `keaktifan` enum('Aktif','Tidak Aktif') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `name`, `username`, `email`, `phone`, `password`, `level`, `keaktifan`) VALUES
(1, 'AdminAdmin', 'admin', 'akuadmin@gmail.com', '081295777369', '0192023a7bbd73250516f069df18b500', 'Asisten Manajer', 'Aktif'),
(2, 'User', 'user', 'sayauser@hotmail.com', '087829045873', 'c5bb9266c0c0638fe2ffa1a69aa9c86b', 'Pegawai', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `datatraffic`
--

CREATE TABLE IF NOT EXISTS `datatraffic` (
  `id_traffic` int(10) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(20) NOT NULL,
  `nodeasal` varchar(20) NOT NULL,
  `nodetujuan` varchar(20) NOT NULL,
  `bandwidth` int(10) NOT NULL,
  `load` float(6,2) NOT NULL,
  `occup` float(6,2) NOT NULL,
  PRIMARY KEY (`id_traffic`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `datatraffic`
--

INSERT INTO `datatraffic` (`id_traffic`, `lokasi`, `nodeasal`, `nodetujuan`, `bandwidth`, `load`, `occup`) VALUES
(1, 'RUAS 1', 'ME-D2-CPA', 'ME-D2-CNO', 20, 54.26, 10.90),
(2, 'RUAS 2', 'ME-D2-CPA', 'ME2-D2-CPA', 20, 8.19, 1.60),
(3, 'RUAS 3', 'ME-D2-CPA', 'ME-D2-SRI', 10, 20.02, 2.00),
(4, 'RUAS 4', 'ME-D2-SRI', 'ME-D2-PDA', 10, 16.41, 1.60),
(5, 'RUAS 5', 'ME-D2-PDA', 'ME-D2-CDG', 10, 55.04, 5.50),
(6, 'RUAS 6', 'ME-D2-CDG', 'ME-D2-BIN', 20, 65.53, 13.10),
(7, 'RUAS 7', 'ME6-D2-CKA', 'ME-D2-GDS', 10, 8.49, 0.80),
(8, 'RUAS 8', 'ME-D2-GDS', 'ME-D2-TAN', 10, 50.16, 5.00),
(9, 'RUAS 9', 'ME-D2-TAN', 'ME-D2-CKK', 10, 26.05, 2.60),
(10, 'RUAS 10', 'ME-D2-CKK', 'ME-D2-CPD', 10, 8.56, 0.90),
(11, 'RUAS 11', 'ME-D2-CPD', 'ME2-D2-CKG', 10, 34.61, 3.50),
(12, 'RUAS 12', 'ME-D2-TAN', 'ME-D2-JIA', 10, 4.00, 0.40),
(13, 'RUAS 13', 'ME-D2-TAN', 'ME-D2-CKG', 60, 41.24, 24.70),
(14, 'RUAS 14', 'ME4-D2-CKA', 'ME-D2-CUG', 20, 4.19, 0.80),
(15, 'RUAS 15', 'ME-D2-CUG', 'ME-D2-LGK', 20, 60.35, 12.10),
(16, 'RUAS 37', 'ME-D2-CUG', 'ME9-D2-CKA', 20, 73.85, 14.80),
(17, 'RUAS 16', 'ME-D2-LGK', 'ME-D2-PPG', 10, 34.78, 3.50),
(18, 'RUAS 17', 'ME-D2-PPG', 'ME2-D2-LKG', 10, 25.58, 2.60),
(19, 'RUAS 18', 'ME2-D2-LKG', 'ME-D2-PKU', 10, 18.82, 1.90),
(20, 'RUAS 19', 'ME-D2-PKU', 'ME2-D2-TAN', 20, 57.62, 11.50),
(21, 'RUAS 20', 'ME2-D2-TAN', 'ME-D2-TAN', 40, 33.49, 13.40),
(22, 'RUAS 21', 'ME7-D2-CKA', 'ME-D2-SRP', 10, 57.97, 5.80),
(23, 'RUAS 22', 'ME-D2-SRP', 'ME2-D2-SIG', 10, 8.44, 0.80),
(24, 'RUAS 38', 'ME2-D2-SIG', 'ME9-D2-CKA', 10, 17.75, 1.80),
(25, 'RUAS 23', 'ME2-D2-SIG', 'ME-D2-SIG', 10, 7.59, 0.80),
(26, 'RUAS 24', 'ME-D2-SIG', 'ME-D2-LKG', 10, 11.58, 1.20),
(27, 'RUAS 25', 'ME-D2-LKG', 'ME3-D2-TAN', 30, 47.80, 14.30),
(28, 'RUAS 26', 'ME3-D2-TAN', 'ME-D2-TAN', 30, 47.80, 14.30),
(29, 'RUAS 27', 'ME-D2-KRS', 'ME-D2-MUK', 10, 11.72, 1.20),
(30, 'RUAS 28', 'ME-D2-MUK', 'ME-D2-SPT', 10, 8.56, 0.90),
(31, 'RUAS 29', 'ME-D2-SPT', 'ME-D2-RJG', 10, 21.86, 2.20),
(32, 'RUAS 30', 'ME-D2-RJG', 'ME-D2-PSK', 10, 30.02, 3.00),
(33, 'RUAS 31', 'ME-D2-PSK', 'ME-D2-TAN', 10, 43.59, 4.40),
(34, 'RUAS 32', 'ME-D2-TGS', 'ME-D2-TAN', 10, 73.38, 7.30),
(35, 'RUAS 33', 'ME-D2-TAN', 'ME-D2-SRG', 30, 18.98, 5.70),
(36, 'RUAS 34', 'ME9-D2-CKA', 'ME2-D2-PKU', 10, 11.00, 1.10),
(37, 'RUAS 35', 'ME2-D2-PKU', 'ME9-D2-SLP', 10, 0.06, 0.00),
(38, 'RUAS 36', 'ME9-D2-CKA', 'ME-D2-TAN', 40, 64.00, 25.60),
(39, 'RUAS 39', 'ME2-D2-PKU', 'ME-D2-TAN', 20, 0.00, 0.00),
(40, 'RUAS 40', 'ME-D2-TSEL-BSD', 'ME9-D2-CKA', 30, 0.00, 0.00),
(41, 'RUAS 41', 'ME-D2-TSEL-BSD', 'ME2-D2-TSEL-BSD', 30, 7.31, 2.20),
(42, 'RUAS 42', 'ME2-D2-TSEL-BSD', 'ME9-D2-SLP', 30, 4.15, 1.20),
(46, 'Ruas 43', 'ME-D1-CNN', 'ME-D2-CBR', 20, 30.89, 6.18);

-- --------------------------------------------------------

--
-- Table structure for table `data_traffic`
--

CREATE TABLE IF NOT EXISTS `data_traffic` (
  `id_traffic` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(10) NOT NULL,
  `node_asal` varchar(30) NOT NULL,
  `node_tujuan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `bandwidth` int(4) DEFAULT NULL,
  `load` int(11) NOT NULL,
  `occup` int(11) NOT NULL,
  PRIMARY KEY (`id_traffic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_traffic`
--

INSERT INTO `data_traffic` (`id_traffic`, `lokasi`, `node_asal`, `node_tujuan`, `tanggal`, `bandwidth`, `load`, `occup`) VALUES
(2, 'Ruas 42', 'ME-D2-CKK', 'ME-D3-SRP', '2017-10-03', 20, 10, 10),
(3, 'Ruas 41', 'ME-D2-CKK', 'ME-D3-SRP', '2017-12-22', 30, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `data_trunk`
--

CREATE TABLE IF NOT EXISTS `data_trunk` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `lokasi` char(10) NOT NULL,
  `node_asal` char(30) NOT NULL,
  `node_tujuan` varchar(30) NOT NULL,
  `bandwidth` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `data_trunk`
--

INSERT INTO `data_trunk` (`id`, `lokasi`, `node_asal`, `node_tujuan`, `bandwidth`) VALUES
(1, 'RUAS 1', 'ME-D2-CPA', 'ME-D2-CNE', 10),
(2, 'RUAS 2\r\n', 'ME-D2-CPA\r\n', 'ME2-D2-CPA\r\n', 20),
(3, 'RUAS 3\r\n', 'ME-D2-CPA\r\n', 'ME-D2-SRI\r\n', 10),
(4, 'RUAS 4', 'ME-D2-SRI\r\n', 'ME-D2-PDA\r\n', 10),
(5, 'RUAS 5', 'ME-D2-PDA\r\n', 'ME-D2-CDG\r\n', 10),
(6, 'RUAS 6', 'ME-D2-CDG\r\n', 'ME-D2-BIN\r\n', 20),
(7, 'RUAS 7', 'ME6-D2-CKA\r\n', 'ME-D2-GDS\r\n', 10),
(8, 'RUAS 8', 'ME-D2-GDS\r\n', 'ME-D2-TAN\r\n', 10),
(9, 'RUAS 9', 'ME-D2-TAN\r\n', 'ME-D2-CKK\r\n', 10),
(10, 'RUAS 10', 'ME-D2-CKK\r\n', 'ME-D2-CPD\r\n', 10),
(11, 'RUAS 11', 'ME-D2-CPD\r\n', 'ME2-D2-CKG\r\n', 10),
(12, 'RUAS 12', 'ME-D2-TAN\r\n', 'ME-D2-JIA\r\n', 10),
(13, 'RUAS 13', 'ME-D2-TAN\r\n', 'ME-D2-CKG\r\n', 60),
(14, 'RUAS 14', 'ME4-D2-CKA\r\n', 'ME-D2-CUG\r\n', 20),
(15, 'RUAS 15', 'ME-D2-CUG\r\n', 'ME-D2-LGK\r\n', 20),
(16, 'RUAS 16', 'ME-D2-LGK\r\n', 'ME-D2-PPG\r\n', 10),
(17, 'RUAS 17', 'ME-D2-PPG\r\n', 'ME2-D2-LKG\r\n', 10),
(18, 'RUAS 18', 'ME2-D2-LKG\r\n', 'ME-D2-PKU\r\n', 10),
(19, 'RUAS 19', 'ME-D2-PKU\r\n', 'ME2-D2-TAN\r\n', 20),
(20, 'RUAS 20', 'ME2-D2-TAN\r\n', 'ME-D2-TAN\r\n', 40),
(21, 'RUAS 21', 'ME7-D2-CKA\r\n', 'ME-D2-SRP\r\n', 10),
(22, 'RUAS 22', 'ME-D2-SRP\r\n', 'ME2-D2-SIG\r\n', 10),
(23, 'RUAS 23', 'ME2-D2-SIG\r\n', 'ME-D2-SIG\r\n', 10),
(24, 'RUAS 24', 'ME-D2-SIG\r\n', 'ME-D2-LKG\r\n', 10),
(25, 'RUAS 25', 'ME-D2-LKG\r\n', 'ME3-D2-TAN\r\n', 30),
(26, 'RUAS 26', 'ME3-D2-TAN\r\n', 'ME-D2-TAN\r\n', 30),
(27, 'RUAS 27', 'ME-D2-KRS\r\n', 'ME-D2-MUK\r\n', 10),
(28, 'RUAS 28', 'ME-D2-MUK\r\n', 'ME-D2-SPT\r\n', 10),
(29, 'RUAS 29', 'ME-D2-SPT\r\n', 'ME-D2-RJG\r\n', 10),
(30, 'RUAS 30', 'ME-D2-RJG\r\n', 'ME-D2-PSK\r\n', 10),
(31, 'RUAS 31', 'ME-D2-PSK\r\n', 'ME-D2-TAN\r\n', 10),
(32, 'RUAS 32', 'ME-D2-TGS\r\n', 'ME-D2-TAN\r\n', 10),
(33, 'RUAS 33', 'ME-D2-TAN\r\n', 'ME-D2-SRG\r\n', 30),
(34, 'RUAS 34', 'ME9-D2-CKA\r\n', 'ME2-D2-PKU\r\n', 10),
(35, 'RUAS 35', 'ME2-D2-PKU\r\n', 'ME9-D2-SLP\r\n', 10),
(36, 'RUAS 36', 'ME9-D2-CKA\r\n', 'ME-D2-TAN\r\n', 40),
(37, 'RUAS 37', 'ME-D2-CUG\r\n', 'ME9-D2-CKA\r\n', 20),
(38, 'Ruas 38', 'ME2-D2-SIG\r\n', 'ME9-D2-CKA\r\n', 10),
(39, 'RUAS 39', 'ME2-D2-PKU\r\n', 'ME-D2-TAN\r\n', 20),
(40, 'RUAS 40', 'ME-D2-TSEL-BSD\r\n', 'ME9-D2-CKA\r\n', 30),
(41, 'Ruas 41', 'ME-D1-BDG', 'ME-D1-DGO', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kabel`
--

CREATE TABLE IF NOT EXISTS `kabel` (
  `kode_kabel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabel` varchar(100) NOT NULL,
  `tipe_kabel` char(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `kegunaan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kabel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kabel`
--

INSERT INTO `kabel` (`kode_kabel`, `nama_kabel`, `tipe_kabel`, `warna`, `kegunaan`, `keterangan`, `foto`) VALUES
(16, 'Kabel LAN', 'Tipe ABCD', 'Biru', 'Koneksi internet', '2 roll dalam keadaan baik', '20170727_09315712.jpg'),
(19, 'Kabel UTP', 'Tipe UTP', 'Oranye', 'Sambung Internet', '10 meter', '20170727_09202514.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE IF NOT EXISTS `piket` (
  `id_piket` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jam_jaga` enum('06.00-09.00 WIB','09.00-12.00 WIB','12.30-15.00 WIB','15.30-18.00 WIB','18.00-21.00 WIB') NOT NULL,
  PRIMARY KEY (`id_piket`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `piket`
--

INSERT INTO `piket` (`id_piket`, `nik`, `nama`, `telp`, `jam_jaga`) VALUES
(1, '1147050167', 'Tri Yuliantooo', '081298465000', '06.00-09.00 WIB'),
(2, '1147050153', 'Ira', '081294958463', '09.00-12.00 WIB'),
(8, '641578', 'Bambang Budi ', '081285777369', '09.00-12.00 WIB'),
(9, '21402', 'Ulfah Putri Bisba', '081390442895', '15.30-18.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `temperatur`
--

CREATE TABLE IF NOT EXISTS `temperatur` (
  `id_metro` int(255) NOT NULL AUTO_INCREMENT,
  `nama_metro` varchar(100) NOT NULL,
  `suhu_masuk` float NOT NULL,
  `suhu_keluar` float NOT NULL,
  `tanggal_input` date NOT NULL,
  `evidence` varchar(100) NOT NULL,
  PRIMARY KEY (`id_metro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `temperatur`
--

INSERT INTO `temperatur` (`id_metro`, `nama_metro`, `suhu_masuk`, `suhu_keluar`, `tanggal_input`, `evidence`) VALUES
(8, 'ME-D1-CNN', 30, 25, '2017-07-22', 'alatskso_162.bmp'),
(10, 'ME-D3-BDG', 30, 25, '2017-12-20', '20170727_0931572.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
