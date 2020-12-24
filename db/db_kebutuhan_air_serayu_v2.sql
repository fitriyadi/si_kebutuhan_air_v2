-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2020 at 06:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kebutuhan_air_serayu_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `idgolongan` int(11) NOT NULL,
  `namagolongan` varchar(100) DEFAULT NULL,
  `efisiensi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`idgolongan`, `namagolongan`, `efisiensi`) VALUES
(1, 'Golongan 1', 60),
(2, 'Golongan 2', 60),
(3, 'Golongan 3', 60);

-- --------------------------------------------------------

--
-- Table structure for table `tb_grafik`
--

CREATE TABLE `tb_grafik` (
  `idgrafik` int(11) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `total_kebutuhan` decimal(10,2) DEFAULT NULL,
  `total_ketersediaan` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grafik`
--

INSERT INTO `tb_grafik` (`idgrafik`, `bulan`, `total_kebutuhan`, `total_ketersediaan`) VALUES
(1, 1, '12.12', '45.09'),
(2, 2, '44.53', '57.77'),
(3, 3, '42.44', '139.11'),
(4, 4, '27.30', '197.19'),
(5, 5, '24.99', '238.40'),
(6, 6, '3.99', '421.46'),
(7, 7, '14.77', '358.65'),
(8, 8, '12.15', '342.47'),
(9, 9, '23.11', '271.11'),
(10, 10, '28.41', '463.42'),
(11, 11, '38.40', '285.76'),
(12, 12, '31.20', '463.42'),
(13, 13, '20.42', '175.16'),
(14, 14, '30.89', '84.12'),
(15, 15, '34.75', '60.75'),
(16, 16, '28.87', '42.14'),
(17, 17, '20.12', '57.90'),
(18, 18, '8.69', '58.11'),
(19, 19, '4.47', '47.77'),
(20, 20, '6.66', '43.74'),
(21, 21, '10.80', '43.36'),
(22, 22, '12.99', '16.72'),
(23, 23, '14.54', '14.70'),
(24, 24, '14.45', '19.24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_tanam`
--

CREATE TABLE `tb_jadwal_tanam` (
  `idjadwal` int(11) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `koefisien` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL,
  `idgolongan` int(11) DEFAULT NULL,
  `idtanaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_tanam`
--

INSERT INTO `tb_jadwal_tanam` (`idjadwal`, `bulan`, `koefisien`, `status`, `ket`, `idgolongan`, `idtanaman`) VALUES
(49, 1, '0.00', 'Persiapan', 'mt1', 1, 1),
(50, 2, '0.00', 'Persiapan', 'mt1', 1, 1),
(51, 3, '1.10', '-', 'mt1', 1, 1),
(52, 4, '1.10', '-', 'mt1', 1, 1),
(53, 5, '1.05', '-', 'mt1', 1, 1),
(54, 6, '1.05', '-', 'mt1', 1, 1),
(55, 7, '1.05', '-', 'mt1', 1, 1),
(56, 8, '0.95', '-', 'mt1', 1, 1),
(57, 9, '0.00', 'Persiapan', 'mt2', 1, 1),
(58, 10, '0.00', 'Persiapan', 'mt2', 1, 1),
(59, 11, '1.10', '-', 'mt2', 1, 1),
(60, 12, '1.10', '-', 'mt2', 1, 1),
(61, 13, '1.05', '-', 'mt2', 1, 1),
(62, 14, '1.05', '-', 'mt2', 1, 1),
(63, 15, '1.05', '-', 'mt2', 1, 1),
(64, 16, '0.95', '-', 'mt2', 1, 1),
(65, 17, '0.00', 'Persiapan', 'mt3', 1, 1),
(66, 18, '0.00', 'Persiapan', 'mt3', 1, 1),
(67, 19, '1.10', '-', 'mt3', 1, 1),
(68, 20, '1.10', '-', 'mt3', 1, 1),
(69, 21, '1.05', '-', 'mt3', 1, 1),
(70, 22, '1.05', '-', 'mt3', 1, 1),
(71, 23, '1.05', '-', 'mt3', 1, 1),
(72, 24, '0.95', '-', 'mt3', 1, 1),
(73, 1, '0.00', 'Persiapan', 'mt1', 1, 2),
(74, 2, '0.00', 'Persiapan', 'mt1', 1, 2),
(75, 3, '0.50', '-', 'mt1', 1, 2),
(76, 4, '0.59', '-', 'mt1', 1, 2),
(77, 5, '0.96', '-', 'mt1', 1, 2),
(78, 6, '1.05', '-', 'mt1', 1, 2),
(79, 7, '1.02', '-', 'mt1', 1, 2),
(80, 8, '0.95', '-', 'mt1', 1, 2),
(81, 9, '0.00', 'Persiapan', 'mt2', 1, 2),
(82, 10, '0.00', 'Persiapan', 'mt2', 1, 2),
(83, 11, '0.50', '-', 'mt2', 1, 2),
(84, 12, '0.59', '-', 'mt2', 1, 2),
(85, 13, '0.96', '-', 'mt2', 1, 2),
(86, 14, '1.05', '-', 'mt2', 1, 2),
(87, 15, '1.02', '-', 'mt2', 1, 2),
(88, 16, '0.95', '-', 'mt2', 1, 2),
(89, 17, '0.00', 'Persiapan', 'mt3', 1, 2),
(90, 18, '0.00', 'Persiapan', 'mt3', 1, 2),
(91, 19, '0.50', '-', 'mt3', 1, 2),
(92, 20, '0.59', '-', 'mt3', 1, 2),
(93, 21, '0.96', '-', 'mt3', 1, 2),
(94, 22, '1.05', '-', 'mt3', 1, 2),
(95, 23, '1.02', '-', 'mt3', 1, 2),
(96, 24, '0.95', '-', 'mt3', 1, 2),
(97, 2, '0.00', 'Persiapan', 'mt1', 2, 1),
(98, 3, '0.00', 'Persiapan', 'mt1', 2, 1),
(99, 4, '1.10', '-', 'mt1', 2, 1),
(100, 5, '1.10', '-', 'mt1', 2, 1),
(101, 6, '1.05', '-', 'mt1', 2, 1),
(102, 7, '1.05', '-', 'mt1', 2, 1),
(103, 8, '1.05', '-', 'mt1', 2, 1),
(104, 9, '0.95', '-', 'mt1', 2, 1),
(105, 10, '0.00', 'Persiapan', 'mt2', 2, 1),
(106, 11, '0.00', 'Persiapan', 'mt2', 2, 1),
(107, 12, '1.10', '-', 'mt2', 2, 1),
(108, 13, '1.10', '-', 'mt2', 2, 1),
(109, 14, '1.05', '-', 'mt2', 2, 1),
(110, 15, '1.05', '-', 'mt2', 2, 1),
(111, 16, '1.05', '-', 'mt2', 2, 1),
(112, 17, '0.95', '-', 'mt2', 2, 1),
(113, 18, '0.00', 'Persiapan', 'mt3', 2, 1),
(114, 19, '0.00', 'Persiapan', 'mt3', 2, 1),
(115, 20, '1.10', '-', 'mt3', 2, 1),
(116, 21, '1.10', '-', 'mt3', 2, 1),
(117, 22, '1.05', '-', 'mt3', 2, 1),
(118, 23, '1.05', '-', 'mt3', 2, 1),
(119, 24, '1.05', '-', 'mt3', 2, 1),
(120, 1, '0.95', '-', 'mt3', 2, 1),
(121, 2, '0.00', 'Persiapan', 'mt1', 2, 2),
(122, 3, '0.00', 'Persiapan', 'mt1', 2, 2),
(123, 4, '0.50', '-', 'mt1', 2, 2),
(124, 5, '0.59', '-', 'mt1', 2, 2),
(125, 6, '0.96', '-', 'mt1', 2, 2),
(126, 7, '1.05', '-', 'mt1', 2, 2),
(127, 8, '1.02', '-', 'mt1', 2, 2),
(128, 9, '0.95', '-', 'mt1', 2, 2),
(129, 10, '0.00', 'Persiapan', 'mt2', 2, 2),
(130, 11, '0.00', 'Persiapan', 'mt2', 2, 2),
(131, 12, '0.50', '-', 'mt2', 2, 2),
(132, 13, '0.59', '-', 'mt2', 2, 2),
(133, 14, '0.96', '-', 'mt2', 2, 2),
(134, 15, '1.05', '-', 'mt2', 2, 2),
(135, 16, '1.02', '-', 'mt2', 2, 2),
(136, 17, '0.95', '-', 'mt2', 2, 2),
(137, 18, '0.00', 'Persiapan', 'mt3', 2, 2),
(138, 19, '0.00', 'Persiapan', 'mt3', 2, 2),
(139, 20, '0.50', '-', 'mt3', 2, 2),
(140, 21, '0.59', '-', 'mt3', 2, 2),
(141, 22, '0.96', '-', 'mt3', 2, 2),
(142, 23, '1.05', '-', 'mt3', 2, 2),
(143, 24, '1.02', '-', 'mt3', 2, 2),
(144, 1, '0.95', '-', 'mt3', 2, 2),
(145, 3, '0.00', 'Persiapan', 'mt1', 3, 1),
(146, 4, '0.00', 'Persiapan', 'mt1', 3, 1),
(147, 5, '1.10', '-', 'mt1', 3, 1),
(148, 6, '1.10', '-', 'mt1', 3, 1),
(149, 7, '1.05', '-', 'mt1', 3, 1),
(150, 8, '1.05', '-', 'mt1', 3, 1),
(151, 9, '1.05', '-', 'mt1', 3, 1),
(152, 10, '0.95', '-', 'mt1', 3, 1),
(153, 11, '0.00', 'Persiapan', 'mt2', 3, 1),
(154, 12, '0.00', 'Persiapan', 'mt2', 3, 1),
(155, 13, '1.10', '-', 'mt2', 3, 1),
(156, 14, '1.10', '-', 'mt2', 3, 1),
(157, 15, '1.05', '-', 'mt2', 3, 1),
(158, 16, '1.05', '-', 'mt2', 3, 1),
(159, 17, '1.05', '-', 'mt2', 3, 1),
(160, 18, '0.95', '-', 'mt2', 3, 1),
(161, 19, '0.00', 'Persiapan', 'mt3', 3, 1),
(162, 20, '0.00', 'Persiapan', 'mt3', 3, 1),
(163, 21, '1.10', '-', 'mt3', 3, 1),
(164, 22, '1.10', '-', 'mt3', 3, 1),
(165, 23, '1.05', '-', 'mt3', 3, 1),
(166, 24, '1.05', '-', 'mt3', 3, 1),
(167, 1, '1.05', '-', 'mt3', 3, 1),
(168, 2, '0.95', '-', 'mt3', 3, 1),
(169, 3, '0.00', 'Persiapan', 'mt1', 3, 2),
(170, 4, '0.00', 'Persiapan', 'mt1', 3, 2),
(171, 5, '0.50', '-', 'mt1', 3, 2),
(172, 6, '0.59', '-', 'mt1', 3, 2),
(173, 7, '0.96', '-', 'mt1', 3, 2),
(174, 8, '1.05', '-', 'mt1', 3, 2),
(175, 9, '1.02', '-', 'mt1', 3, 2),
(176, 10, '0.95', '-', 'mt1', 3, 2),
(177, 11, '0.00', 'Persiapan', 'mt2', 3, 2),
(178, 12, '0.00', 'Persiapan', 'mt2', 3, 2),
(179, 13, '0.50', '-', 'mt2', 3, 2),
(180, 14, '0.59', '-', 'mt2', 3, 2),
(181, 15, '0.96', '-', 'mt2', 3, 2),
(182, 16, '1.05', '-', 'mt2', 3, 2),
(183, 17, '1.02', '-', 'mt2', 3, 2),
(184, 18, '0.95', '-', 'mt2', 3, 2),
(185, 19, '0.00', 'Persiapan', 'mt3', 3, 2),
(186, 20, '0.00', 'Persiapan', 'mt3', 3, 2),
(187, 21, '0.50', '-', 'mt3', 3, 2),
(188, 22, '0.59', '-', 'mt3', 3, 2),
(189, 23, '0.96', '-', 'mt3', 3, 2),
(190, 24, '1.05', '-', 'mt3', 3, 2),
(191, 1, '1.02', '-', 'mt3', 3, 2),
(192, 2, '0.95', '-', 'mt3', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebutuhan`
--

CREATE TABLE `tb_kebutuhan` (
  `idkebutuhan` int(11) NOT NULL,
  `idtanaman` int(11) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `ket` int(11) DEFAULT NULL,
  `mt` int(11) DEFAULT NULL,
  `eto` decimal(10,3) DEFAULT NULL,
  `kc` decimal(10,3) DEFAULT NULL,
  `r80` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebutuhan`
--

INSERT INTO `tb_kebutuhan` (`idkebutuhan`, `idtanaman`, `bulan`, `ket`, `mt`, `eto`, `kc`, `r80`) VALUES
(97, 1, 1, 1, 1, '4.870', '0.000', '29.500'),
(98, 1, 1, 2, 1, '4.870', '0.000', '190.500'),
(99, 1, 2, 1, 1, '3.390', '1.100', '142.000'),
(100, 1, 2, 2, 1, '3.390', '1.100', '156.000'),
(101, 1, 3, 1, 1, '3.590', '1.050', '142.000'),
(102, 1, 3, 2, 1, '3.590', '1.050', '218.500'),
(103, 1, 4, 1, 1, '3.620', '0.950', '76.000'),
(104, 1, 4, 2, 1, '3.620', '0.000', '280.500'),
(105, 1, 5, 1, 2, '3.810', '0.000', '51.000'),
(106, 1, 5, 2, 2, '3.810', '0.000', '137.500'),
(107, 1, 6, 1, 2, '3.240', '1.100', '239.000'),
(108, 1, 6, 2, 2, '3.240', '1.100', '68.500'),
(109, 1, 7, 1, 2, '3.410', '1.050', '31.000'),
(110, 1, 7, 2, 2, '3.410', '1.050', '32.000'),
(111, 1, 8, 1, 2, '3.400', '0.950', '98.500'),
(112, 1, 8, 2, 2, '3.400', '0.000', '1.000'),
(113, 1, 9, 1, 3, '3.810', '0.000', '0.000'),
(114, 1, 9, 2, 3, '3.810', '0.000', '0.000'),
(115, 1, 10, 1, 3, '3.240', '1.100', '0.000'),
(116, 1, 10, 2, 3, '3.240', '1.100', '0.000'),
(117, 1, 11, 1, 3, '3.410', '1.050', '0.000'),
(118, 1, 11, 2, 3, '3.410', '1.050', '0.000'),
(119, 1, 12, 1, 3, '3.400', '0.950', '0.000'),
(120, 1, 12, 2, 3, '3.400', '0.000', '0.000'),
(121, 2, 1, 1, 1, '4.870', '0.000', '29.500'),
(122, 2, 1, 2, 1, '4.870', '0.000', '190.500'),
(123, 2, 2, 1, 1, '3.390', '0.500', '142.000'),
(124, 2, 2, 2, 1, '3.390', '0.590', '156.000'),
(125, 2, 3, 1, 1, '3.590', '0.960', '142.000'),
(126, 2, 3, 2, 1, '3.590', '1.050', '218.500'),
(127, 2, 4, 1, 1, '3.620', '1.020', '76.000'),
(128, 2, 4, 2, 1, '3.620', '0.950', '280.500'),
(129, 2, 5, 1, 2, '3.810', '0.000', '51.000'),
(130, 2, 5, 2, 2, '3.810', '0.000', '137.500'),
(131, 2, 6, 1, 2, '3.240', '0.500', '239.000'),
(132, 2, 6, 2, 2, '3.240', '0.590', '68.500'),
(133, 2, 7, 1, 2, '3.410', '0.960', '31.000'),
(134, 2, 7, 2, 2, '3.410', '1.050', '32.000'),
(135, 2, 8, 1, 2, '3.400', '1.020', '98.500'),
(136, 2, 8, 2, 2, '3.400', '0.950', '1.000'),
(137, 2, 9, 1, 3, '3.810', '0.000', '0.000'),
(138, 2, 9, 2, 3, '3.810', '0.000', '0.000'),
(139, 2, 10, 1, 3, '3.240', '0.500', '0.000'),
(140, 2, 10, 2, 3, '3.240', '0.590', '0.000'),
(141, 2, 11, 1, 3, '3.410', '0.960', '0.000'),
(142, 2, 11, 2, 3, '3.410', '1.050', '0.000'),
(143, 2, 12, 1, 3, '3.400', '1.020', '0.000'),
(144, 2, 12, 2, 3, '3.400', '0.950', '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketersedian_air`
--

CREATE TABLE `tb_ketersedian_air` (
  `id` int(11) NOT NULL,
  `bulan_nama` varchar(100) DEFAULT NULL,
  `bulan_ket` varchar(2) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `q80` decimal(10,2) DEFAULT NULL,
  `q70` decimal(10,2) DEFAULT NULL,
  `q10` decimal(10,2) DEFAULT NULL,
  `qintake` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ketersedian_air`
--

INSERT INTO `tb_ketersedian_air` (`id`, `bulan_nama`, `bulan_ket`, `bulan`, `q80`, `q70`, `q10`, `qintake`) VALUES
(1, 'November', 'I', 1, '71.57', '50.10', '5.01', '45.09'),
(2, 'November', 'II', 2, '91.70', '64.19', '6.42', '57.77'),
(3, 'Desember', 'I', 3, '220.81', '154.57', '15.46', '139.11'),
(4, 'Desember', 'II', 4, '313.00', '219.10', '21.91', '197.19'),
(5, 'Januari', 'I', 5, '378.42', '264.89', '26.49', '238.40'),
(6, 'Januari', 'II', 6, '668.99', '468.29', '46.83', '421.46'),
(7, 'Februari', 'I', 7, '569.29', '398.50', '39.85', '358.65'),
(8, 'Februari', 'II', 8, '543.60', '380.52', '38.05', '342.47'),
(9, 'Maret', 'I', 9, '430.34', '301.24', '30.12', '271.11'),
(10, 'Maret', 'II', 10, '735.59', '514.91', '51.49', '463.42'),
(11, 'April', 'I', 11, '453.59', '317.51', '31.75', '285.76'),
(12, 'April', 'II', 12, '735.59', '514.91', '51.49', '463.42'),
(13, 'Mei', 'I', 13, '278.03', '194.62', '19.46', '175.16'),
(14, 'Mei', 'II', 14, '133.53', '93.47', '9.35', '84.12'),
(15, 'Juni', 'I', 15, '96.43', '67.50', '6.75', '60.75'),
(16, 'Juni', 'II', 16, '66.89', '46.82', '4.68', '42.14'),
(17, 'Juli', 'I', 17, '91.91', '64.34', '6.43', '57.90'),
(18, 'Juli', 'II', 18, '92.24', '64.57', '6.46', '58.11'),
(19, 'Agustus', 'I', 19, '75.82', '53.07', '5.31', '47.77'),
(20, 'Agustus', 'II', 20, '69.43', '48.60', '4.86', '43.74'),
(21, 'September', 'I', 21, '68.83', '48.18', '4.82', '43.36'),
(22, 'September', 'II', 22, '26.54', '18.58', '1.86', '16.72'),
(23, 'Oktober', 'I', 23, '23.34', '16.34', '1.63', '14.70'),
(24, 'Oktober', 'II', 24, '30.54', '21.38', '2.14', '19.24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koefisien`
--

CREATE TABLE `tb_koefisien` (
  `idkoefisien` int(11) NOT NULL,
  `idtanaman` int(11) DEFAULT NULL,
  `nilai` decimal(10,2) DEFAULT NULL,
  `minggu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_koefisien`
--

INSERT INTO `tb_koefisien` (`idkoefisien`, `idtanaman`, `nilai`, `minggu`) VALUES
(1, 1, '1.10', 1),
(2, 1, '1.10', 2),
(3, 1, '1.05', 3),
(4, 1, '1.05', 4),
(5, 1, '1.05', 5),
(6, 1, '0.95', 6),
(7, 2, '0.50', 1),
(8, 2, '0.59', 2),
(9, 2, '0.96', 3),
(10, 2, '1.05', 4),
(11, 2, '1.02', 5),
(12, 2, '0.95', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap_analisis`
--

CREATE TABLE `tb_rekap_analisis` (
  `idrekap` int(11) NOT NULL,
  `idtanaman` int(11) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `nilai` decimal(10,2) DEFAULT NULL,
  `idgolongan` int(11) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekap_analisis`
--

INSERT INTO `tb_rekap_analisis` (`idrekap`, `idtanaman`, `bulan`, `nilai`, `idgolongan`, `ket`) VALUES
(505, 1, 1, '1.42', 1, 'mt1'),
(506, 1, 2, '2.76', 1, 'mt1'),
(507, 1, 3, '1.20', 1, 'mt1'),
(508, 1, 4, '0.92', 1, 'mt1'),
(509, 1, 5, '1.59', 1, 'mt1'),
(510, 1, 6, '0.00', 1, 'mt1'),
(511, 1, 7, '0.93', 1, 'mt1'),
(512, 1, 8, '0.30', 1, 'mt1'),
(513, 1, 9, '1.84', 1, 'mt2'),
(514, 1, 10, '1.81', 1, 'mt2'),
(515, 1, 11, '0.98', 1, 'mt2'),
(516, 1, 12, '1.09', 1, 'mt2'),
(517, 1, 13, '1.37', 1, 'mt2'),
(518, 1, 14, '1.25', 1, 'mt2'),
(519, 1, 15, '1.89', 1, 'mt2'),
(520, 1, 16, '1.12', 1, 'mt2'),
(521, 1, 17, '2.62', 1, 'mt3'),
(522, 1, 18, '2.62', 1, 'mt3'),
(523, 1, 19, '1.26', 1, 'mt3'),
(524, 1, 20, '1.26', 1, 'mt3'),
(525, 1, 21, '1.95', 1, 'mt3'),
(526, 1, 22, '1.30', 1, 'mt3'),
(527, 1, 23, '1.94', 1, 'mt3'),
(528, 1, 24, '1.21', 1, 'mt3'),
(529, 1, 1, '0.00', 2, 'mt3'),
(530, 1, 2, '2.76', 2, 'mt1'),
(531, 1, 3, '2.50', 2, 'mt1'),
(532, 1, 4, '0.92', 2, 'mt1'),
(533, 1, 5, '0.99', 2, 'mt1'),
(534, 1, 6, '0.56', 2, 'mt1'),
(535, 1, 7, '0.29', 2, 'mt1'),
(536, 1, 8, '1.04', 2, 'mt1'),
(537, 1, 9, '0.37', 2, 'mt1'),
(538, 1, 10, '1.81', 2, 'mt2'),
(539, 1, 11, '2.32', 2, 'mt2'),
(540, 1, 12, '1.09', 2, 'mt2'),
(541, 1, 13, '0.77', 2, 'mt2'),
(542, 1, 14, '1.90', 2, 'mt2'),
(543, 1, 15, '1.25', 2, 'mt2'),
(544, 1, 16, '1.84', 2, 'mt2'),
(545, 1, 17, '1.09', 2, 'mt2'),
(546, 1, 18, '2.62', 2, 'mt3'),
(547, 1, 19, '2.64', 2, 'mt3'),
(548, 1, 20, '1.26', 2, 'mt3'),
(549, 1, 21, '1.35', 2, 'mt3'),
(550, 1, 22, '1.94', 2, 'mt3'),
(551, 1, 23, '1.30', 2, 'mt3'),
(552, 1, 24, '1.94', 2, 'mt3'),
(553, 1, 1, '0.72', 3, 'mt3'),
(554, 1, 2, '1.31', 3, 'mt3'),
(555, 1, 3, '2.50', 3, 'mt1'),
(556, 1, 4, '2.21', 3, 'mt1'),
(557, 1, 5, '0.99', 3, 'mt1'),
(558, 1, 6, '0.00', 3, 'mt1'),
(559, 1, 7, '0.93', 3, 'mt1'),
(560, 1, 8, '0.40', 3, 'mt1'),
(561, 1, 9, '1.10', 3, 'mt1'),
(562, 1, 10, '0.35', 3, 'mt1'),
(563, 1, 11, '2.32', 3, 'mt2'),
(564, 1, 12, '2.44', 3, 'mt2'),
(565, 1, 13, '0.77', 3, 'mt2'),
(566, 1, 14, '1.29', 3, 'mt2'),
(567, 1, 15, '1.89', 3, 'mt2'),
(568, 1, 16, '1.19', 3, 'mt2'),
(569, 1, 17, '1.81', 3, 'mt2'),
(570, 1, 18, '1.09', 3, 'mt2'),
(571, 1, 19, '2.64', 3, 'mt3'),
(572, 1, 20, '2.64', 3, 'mt3'),
(573, 1, 21, '1.35', 3, 'mt3'),
(574, 1, 22, '1.34', 3, 'mt3'),
(575, 1, 23, '1.94', 3, 'mt3'),
(576, 1, 24, '1.30', 3, 'mt3'),
(649, 2, 1, '0.00', 1, 'mt1'),
(650, 2, 2, '0.19', 1, 'mt1'),
(651, 2, 3, '0.49', 1, 'mt1'),
(652, 2, 4, '0.38', 1, 'mt1'),
(653, 2, 5, '0.81', 1, 'mt1'),
(654, 2, 6, '0.17', 1, 'mt1'),
(655, 2, 7, '0.39', 1, 'mt1'),
(656, 2, 8, '0.40', 1, 'mt1'),
(657, 2, 9, '0.00', 1, 'mt2'),
(658, 2, 10, '0.00', 1, 'mt2'),
(659, 2, 11, '0.37', 1, 'mt2'),
(660, 2, 12, '0.53', 1, 'mt2'),
(661, 2, 13, '0.61', 1, 'mt2'),
(662, 2, 14, '1.06', 1, 'mt2'),
(663, 2, 15, '1.03', 1, 'mt2'),
(664, 2, 16, '0.92', 1, 'mt2'),
(665, 2, 17, '0.19', 1, 'mt3'),
(666, 2, 18, '0.19', 1, 'mt3'),
(667, 2, 19, '0.59', 1, 'mt3'),
(668, 2, 20, '0.66', 1, 'mt3'),
(669, 2, 21, '1.03', 1, 'mt3'),
(670, 2, 22, '1.11', 1, 'mt3'),
(671, 2, 23, '1.08', 1, 'mt3'),
(672, 2, 24, '1.02', 1, 'mt3'),
(673, 2, 1, '0.16', 2, 'mt3'),
(674, 2, 2, '0.19', 2, 'mt1'),
(675, 2, 3, '0.00', 2, 'mt1'),
(676, 2, 4, '0.28', 2, 'mt1'),
(677, 2, 5, '0.43', 2, 'mt1'),
(678, 2, 6, '0.08', 2, 'mt1'),
(679, 2, 7, '0.42', 2, 'mt1'),
(680, 2, 8, '0.47', 2, 'mt1'),
(681, 2, 9, '0.43', 2, 'mt1'),
(682, 2, 10, '0.00', 2, 'mt2'),
(683, 2, 11, '0.00', 2, 'mt2'),
(684, 2, 12, '0.45', 2, 'mt2'),
(685, 2, 13, '0.31', 2, 'mt2'),
(686, 2, 14, '0.99', 2, 'mt2'),
(687, 2, 15, '1.06', 2, 'mt2'),
(688, 2, 16, '0.98', 2, 'mt2'),
(689, 2, 17, '0.90', 2, 'mt2'),
(690, 2, 18, '0.19', 2, 'mt3'),
(691, 2, 19, '0.19', 2, 'mt3'),
(692, 2, 20, '0.59', 2, 'mt3'),
(693, 2, 21, '0.71', 2, 'mt3'),
(694, 2, 22, '1.03', 2, 'mt3'),
(695, 2, 23, '1.11', 2, 'mt3'),
(696, 2, 24, '1.08', 2, 'mt3'),
(697, 2, 1, '0.23', 3, 'mt3'),
(698, 2, 2, '1.12', 3, 'mt3'),
(699, 2, 3, '0.00', 3, 'mt1'),
(700, 2, 4, '0.00', 3, 'mt1'),
(701, 2, 5, '0.33', 3, 'mt1'),
(702, 2, 6, '0.00', 3, 'mt1'),
(703, 2, 7, '0.33', 3, 'mt1'),
(704, 2, 8, '0.50', 3, 'mt1'),
(705, 2, 9, '0.49', 3, 'mt1'),
(706, 2, 10, '0.41', 3, 'mt1'),
(707, 2, 11, '0.00', 3, 'mt2'),
(708, 2, 12, '0.02', 3, 'mt2'),
(709, 2, 13, '0.23', 3, 'mt2'),
(710, 2, 14, '0.68', 3, 'mt2'),
(711, 2, 15, '0.98', 3, 'mt2'),
(712, 2, 16, '1.00', 3, 'mt2'),
(713, 2, 17, '0.95', 3, 'mt2'),
(714, 2, 18, '0.89', 3, 'mt2'),
(715, 2, 19, '0.19', 3, 'mt3'),
(716, 2, 20, '0.19', 3, 'mt3'),
(717, 2, 21, '0.63', 3, 'mt3'),
(718, 2, 22, '0.71', 3, 'mt3'),
(719, 2, 23, '1.03', 3, 'mt3'),
(720, 2, 24, '1.11', 3, 'mt3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_saluran`
--

CREATE TABLE `tb_saluran` (
  `idsaluran` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `luas` decimal(10,2) DEFAULT NULL,
  `idgolongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_saluran`
--

INSERT INTO `tb_saluran` (`idsaluran`, `nama`, `luas`, `idgolongan`) VALUES
(1, 'Sayap Kiri 1', '54.80', 1),
(2, 'Sayap Kiri 2', '120.00', 1),
(3, 'Sayap Kanan', '85.00', 1),
(4, 'Saluran Induk Cilacap', '3870.70', 1),
(5, 'Saluran Induk Maos', '3213.70', 1),
(6, 'Saluran Induk Doplang', '1799.90', 2),
(7, 'Saluran Induk Sumpiuh', '5324.10', 2),
(8, 'Saluran Induk Binangun', '6327.50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting_analisa`
--

CREATE TABLE `tb_setting_analisa` (
  `idsetting` int(11) NOT NULL,
  `bulan` int(50) DEFAULT NULL,
  `nilai_hujan` decimal(10,2) DEFAULT NULL,
  `nilai_eto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setting_analisa`
--

INSERT INTO `tb_setting_analisa` (`idsetting`, `bulan`, `nilai_hujan`, `nilai_eto`) VALUES
(1, 1, '148.00', '5.04'),
(2, 2, '0.00', '5.05'),
(3, 3, '32.50', '5.21'),
(4, 4, '64.00', '5.22'),
(5, 5, '58.00', '5.33'),
(6, 6, '170.50', '5.29'),
(7, 7, '125.50', '5.11'),
(8, 8, '113.00', '5.09'),
(9, 9, '98.50', '4.74'),
(10, 10, '102.01', '4.79'),
(11, 11, '40.50', '4.50'),
(12, 12, '27.00', '4.47'),
(13, 13, '58.50', '4.30'),
(14, 14, '0.00', '4.28'),
(15, 15, '0.00', '4.26'),
(16, 16, '0.00', '3.99'),
(17, 17, '0.00', '3.86'),
(18, 18, '0.00', '3.82'),
(19, 19, '0.00', '4.11'),
(20, 20, '0.00', '4.10'),
(21, 21, '0.00', '4.53'),
(22, 22, '0.00', '4.52'),
(23, 23, '0.00', '4.51'),
(24, 24, '0.00', '4.51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanaman`
--

CREATE TABLE `tb_tanaman` (
  `idtanaman` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `perkolasi` int(11) DEFAULT NULL,
  `hujanefektif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanaman`
--

INSERT INTO `tb_tanaman` (`idtanaman`, `nama`, `jenis`, `perkolasi`, `hujanefektif`) VALUES
(1, 'Padi Sri Rejeki', 'Padi', 2, 70),
(2, 'Jagung', 'Palawija', 1, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`idgolongan`);

--
-- Indexes for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD PRIMARY KEY (`idgrafik`);

--
-- Indexes for table `tb_jadwal_tanam`
--
ALTER TABLE `tb_jadwal_tanam`
  ADD PRIMARY KEY (`idjadwal`);

--
-- Indexes for table `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  ADD PRIMARY KEY (`idkebutuhan`);

--
-- Indexes for table `tb_ketersedian_air`
--
ALTER TABLE `tb_ketersedian_air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_koefisien`
--
ALTER TABLE `tb_koefisien`
  ADD PRIMARY KEY (`idkoefisien`);

--
-- Indexes for table `tb_rekap_analisis`
--
ALTER TABLE `tb_rekap_analisis`
  ADD PRIMARY KEY (`idrekap`);

--
-- Indexes for table `tb_saluran`
--
ALTER TABLE `tb_saluran`
  ADD PRIMARY KEY (`idsaluran`);

--
-- Indexes for table `tb_setting_analisa`
--
ALTER TABLE `tb_setting_analisa`
  ADD PRIMARY KEY (`idsetting`);

--
-- Indexes for table `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  ADD PRIMARY KEY (`idtanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `idgolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  MODIFY `idgrafik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_jadwal_tanam`
--
ALTER TABLE `tb_jadwal_tanam`
  MODIFY `idjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  MODIFY `idkebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `tb_ketersedian_air`
--
ALTER TABLE `tb_ketersedian_air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_koefisien`
--
ALTER TABLE `tb_koefisien`
  MODIFY `idkoefisien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_rekap_analisis`
--
ALTER TABLE `tb_rekap_analisis`
  MODIFY `idrekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT for table `tb_saluran`
--
ALTER TABLE `tb_saluran`
  MODIFY `idsaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_setting_analisa`
--
ALTER TABLE `tb_setting_analisa`
  MODIFY `idsetting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  MODIFY `idtanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
