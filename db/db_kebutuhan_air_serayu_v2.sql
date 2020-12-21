-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 01:49 PM
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
(7, 7, '14.04', '358.65'),
(8, 8, '9.22', '342.47'),
(9, 9, '19.90', '271.11'),
(10, 10, '26.20', '463.42'),
(11, 11, '38.40', '285.76'),
(12, 12, '31.20', '463.42'),
(13, 13, '20.42', '175.16'),
(14, 14, '30.89', '84.12'),
(15, 15, '34.17', '60.75'),
(16, 16, '22.93', '42.14'),
(17, 17, '14.70', '57.90'),
(18, 18, '4.26', '58.11'),
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
  `jenis` varchar(20) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `koefisien` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL,
  `idgolongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_tanam`
--

INSERT INTO `tb_jadwal_tanam` (`idjadwal`, `jenis`, `bulan`, `koefisien`, `status`, `ket`, `idgolongan`) VALUES
(193, 'Padi', 1, '0.00', 'Persiapan', 'MT1', 1),
(194, 'Palawija', 1, '0.00', 'Persiapan', 'MT1', 1),
(195, 'Padi', 2, '0.00', 'Persiapan', 'MT1', 1),
(196, 'Palawija', 2, '0.00', 'Persiapan', 'MT1', 1),
(197, 'Padi', 3, '1.10', '-', 'MT1', 1),
(198, 'Palawija', 3, '0.50', '-', 'MT1', 1),
(199, 'Padi', 4, '1.10', '-', 'MT1', 1),
(200, 'Palawija', 4, '0.59', '-', 'MT1', 1),
(201, 'Padi', 5, '1.05', '-', 'MT1', 1),
(202, 'Palawija', 5, '0.96', '-', 'MT1', 1),
(203, 'Padi', 6, '1.05', '-', 'MT1', 1),
(204, 'Palawija', 6, '1.05', '-', 'MT1', 1),
(205, 'Padi', 7, '0.95', '-', 'MT1', 1),
(206, 'Palawija', 7, '1.02', '-', 'MT1', 1),
(207, 'Padi', 8, '0.00', '-', 'MT1', 1),
(208, 'Palawija', 8, '0.95', '-', 'MT1', 1),
(209, 'Padi', 9, '0.00', 'Persiapan', 'MT2', 1),
(210, 'Palawija', 9, '0.00', 'Persiapan', 'MT2', 1),
(211, 'Padi', 10, '0.00', 'Persiapan', 'MT2', 1),
(212, 'Palawija', 10, '0.00', 'Persiapan', 'MT2', 1),
(213, 'Padi', 11, '1.10', '-', 'MT2', 1),
(214, 'Palawija', 11, '0.50', '-', 'MT2', 1),
(215, 'Padi', 12, '1.10', '-', 'MT2', 1),
(216, 'Palawija', 12, '0.59', '-', 'MT2', 1),
(217, 'Padi', 13, '1.05', '-', 'MT2', 1),
(218, 'Palawija', 13, '0.96', '-', 'MT2', 1),
(219, 'Padi', 14, '1.05', '-', 'MT2', 1),
(220, 'Palawija', 14, '1.05', '-', 'MT2', 1),
(221, 'Padi', 15, '0.95', '-', 'MT2', 1),
(222, 'Palawija', 15, '1.02', '-', 'MT2', 1),
(223, 'Padi', 16, '0.00', '-', 'MT2', 1),
(224, 'Palawija', 16, '0.95', '-', 'MT2', 1),
(225, 'Padi', 17, '0.00', 'Persiapan', 'MT3', 1),
(226, 'Palawija', 17, '0.00', 'Persiapan', 'MT3', 1),
(227, 'Padi', 18, '0.00', 'Persiapan', 'MT3', 1),
(228, 'Palawija', 18, '0.00', 'Persiapan', 'MT3', 1),
(229, 'Padi', 19, '1.10', '-', 'MT3', 1),
(230, 'Palawija', 19, '0.50', '-', 'MT3', 1),
(231, 'Padi', 20, '1.10', '-', 'MT3', 1),
(232, 'Palawija', 20, '0.59', '-', 'MT3', 1),
(233, 'Padi', 21, '1.05', '-', 'MT3', 1),
(234, 'Palawija', 21, '0.96', '-', 'MT3', 1),
(235, 'Padi', 22, '1.05', '-', 'MT3', 1),
(236, 'Palawija', 22, '1.05', '-', 'MT3', 1),
(237, 'Padi', 23, '0.95', '-', 'MT3', 1),
(238, 'Palawija', 23, '1.02', '-', 'MT3', 1),
(239, 'Padi', 24, '0.00', '-', 'MT3', 1),
(240, 'Palawija', 24, '0.95', '-', 'MT3', 1),
(241, 'Padi', 1, '0.00', '-', 'MT3', 2),
(242, 'Palawija', 1, '0.95', '-', 'MT3', 2),
(243, 'Padi', 2, '0.00', 'Persiapan', 'MT1', 2),
(244, 'Palawija', 2, '0.00', 'Persiapan', 'MT1', 2),
(245, 'Padi', 3, '0.00', 'Persiapan', 'MT1', 2),
(246, 'Palawija', 3, '0.00', 'Persiapan', 'MT1', 2),
(247, 'Padi', 4, '1.10', '-', 'MT1', 2),
(248, 'Palawija', 4, '0.50', '-', 'MT1', 2),
(249, 'Padi', 5, '1.10', '-', 'MT1', 2),
(250, 'Palawija', 5, '0.59', '-', 'MT1', 2),
(251, 'Padi', 6, '1.05', '-', 'MT1', 2),
(252, 'Palawija', 6, '0.96', '-', 'MT1', 2),
(253, 'Padi', 7, '1.05', '-', 'MT1', 2),
(254, 'Palawija', 7, '1.05', '-', 'MT1', 2),
(255, 'Padi', 8, '0.95', '-', 'MT1', 2),
(256, 'Palawija', 8, '1.02', '-', 'MT1', 2),
(257, 'Padi', 9, '0.00', '-', 'MT1', 2),
(258, 'Palawija', 9, '0.95', '-', 'MT1', 2),
(259, 'Padi', 10, '0.00', 'Persiapan', 'MT2', 2),
(260, 'Palawija', 10, '0.00', 'Persiapan', 'MT2', 2),
(261, 'Padi', 11, '0.00', 'Persiapan', 'MT2', 2),
(262, 'Palawija', 11, '0.00', 'Persiapan', 'MT2', 2),
(263, 'Padi', 12, '1.10', '-', 'MT2', 2),
(264, 'Palawija', 12, '0.50', '-', 'MT2', 2),
(265, 'Padi', 13, '1.10', '-', 'MT2', 2),
(266, 'Palawija', 13, '0.59', '-', 'MT2', 2),
(267, 'Padi', 14, '1.05', '-', 'MT2', 2),
(268, 'Palawija', 14, '0.96', '-', 'MT2', 2),
(269, 'Padi', 15, '1.05', '-', 'MT2', 2),
(270, 'Palawija', 15, '1.05', '-', 'MT2', 2),
(271, 'Padi', 16, '0.95', '-', 'MT2', 2),
(272, 'Palawija', 16, '1.02', '-', 'MT2', 2),
(273, 'Padi', 17, '0.00', '-', 'MT2', 2),
(274, 'Palawija', 17, '0.95', '-', 'MT2', 2),
(275, 'Padi', 18, '0.00', 'Persiapan', 'MT3', 2),
(276, 'Palawija', 18, '0.00', 'Persiapan', 'MT3', 2),
(277, 'Padi', 19, '0.00', 'Persiapan', 'MT3', 2),
(278, 'Palawija', 19, '0.00', 'Persiapan', 'MT3', 2),
(279, 'Padi', 20, '1.10', '-', 'MT3', 2),
(280, 'Palawija', 20, '0.50', '-', 'MT3', 2),
(281, 'Padi', 21, '1.10', '-', 'MT3', 2),
(282, 'Palawija', 21, '0.59', '-', 'MT3', 2),
(283, 'Padi', 22, '1.05', '-', 'MT3', 2),
(284, 'Palawija', 22, '0.96', '-', 'MT3', 2),
(285, 'Padi', 23, '1.05', '-', 'MT3', 2),
(286, 'Palawija', 23, '1.05', '-', 'MT3', 2),
(287, 'Padi', 24, '0.95', '-', 'MT3', 2),
(288, 'Palawija', 24, '1.02', '-', 'MT3', 2),
(289, 'Padi', 1, '0.95', '-', 'MT3', 3),
(290, 'Palawija', 1, '1.02', '-', 'MT3', 3),
(291, 'Padi', 2, '0.00', '-', 'MT3', 3),
(292, 'Palawija', 2, '0.95', '-', 'MT3', 3),
(293, 'Padi', 3, '0.00', 'Persiapan', 'MT1', 3),
(294, 'Palawija', 3, '0.00', 'Persiapan', 'MT1', 3),
(295, 'Padi', 4, '0.00', 'Persiapan', 'MT1', 3),
(296, 'Palawija', 4, '0.00', 'Persiapan', 'MT1', 3),
(297, 'Padi', 5, '1.10', '-', 'MT1', 3),
(298, 'Palawija', 5, '0.50', '-', 'MT1', 3),
(299, 'Padi', 6, '1.10', '-', 'MT1', 3),
(300, 'Palawija', 6, '0.59', '-', 'MT1', 3),
(301, 'Padi', 7, '1.05', '-', 'MT1', 3),
(302, 'Palawija', 7, '0.96', '-', 'MT1', 3),
(303, 'Padi', 8, '1.05', '-', 'MT1', 3),
(304, 'Palawija', 8, '1.05', '-', 'MT1', 3),
(305, 'Padi', 9, '0.95', '-', 'MT1', 3),
(306, 'Palawija', 9, '1.02', '-', 'MT1', 3),
(307, 'Padi', 10, '0.00', '-', 'MT1', 3),
(308, 'Palawija', 10, '0.95', '-', 'MT1', 3),
(309, 'Padi', 11, '0.00', 'Persiapan', 'MT2', 3),
(310, 'Palawija', 11, '0.00', 'Persiapan', 'MT2', 3),
(311, 'Padi', 12, '0.00', 'Persiapan', 'MT2', 3),
(312, 'Palawija', 12, '0.00', 'Persiapan', 'MT2', 3),
(313, 'Padi', 13, '1.10', '-', 'MT2', 3),
(314, 'Palawija', 13, '0.50', '-', 'MT2', 3),
(315, 'Padi', 14, '1.10', '-', 'MT2', 3),
(316, 'Palawija', 14, '0.59', '-', 'MT2', 3),
(317, 'Padi', 15, '1.05', '-', 'MT2', 3),
(318, 'Palawija', 15, '0.96', '-', 'MT2', 3),
(319, 'Padi', 16, '1.05', '-', 'MT2', 3),
(320, 'Palawija', 16, '1.05', '-', 'MT2', 3),
(321, 'Padi', 17, '0.95', '-', 'MT2', 3),
(322, 'Palawija', 17, '1.02', '-', 'MT2', 3),
(323, 'Padi', 18, '0.00', '-', 'MT2', 3),
(324, 'Palawija', 18, '0.95', '-', 'MT2', 3),
(325, 'Padi', 19, '0.00', 'Persiapan', 'MT3', 3),
(326, 'Palawija', 19, '0.00', 'Persiapan', 'MT3', 3),
(327, 'Padi', 20, '0.00', 'Persiapan', 'MT3', 3),
(328, 'Palawija', 20, '0.00', 'Persiapan', 'MT3', 3),
(329, 'Padi', 21, '1.10', '-', 'MT3', 3),
(330, 'Palawija', 21, '0.50', '-', 'MT3', 3),
(331, 'Padi', 22, '1.10', '-', 'MT3', 3),
(332, 'Palawija', 22, '0.59', '-', 'MT3', 3),
(333, 'Padi', 23, '1.05', '-', 'MT3', 3),
(334, 'Palawija', 23, '0.96', '-', 'MT3', 3),
(335, 'Padi', 24, '1.05', '-', 'MT3', 3),
(336, 'Palawija', 24, '1.05', '-', 'MT3', 3);

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
(73, 2, 1, '0.00', 1, 'MT1'),
(74, 2, 2, '0.19', 1, 'MT1'),
(75, 2, 3, '0.49', 1, 'MT1'),
(76, 2, 4, '0.38', 1, 'MT1'),
(77, 2, 5, '0.81', 1, 'MT1'),
(78, 2, 6, '0.17', 1, 'MT1'),
(79, 2, 7, '0.39', 1, 'MT1'),
(80, 2, 8, '0.40', 1, 'MT1'),
(81, 2, 9, '0.00', 1, 'MT2'),
(82, 2, 10, '0.00', 1, 'MT2'),
(83, 2, 11, '0.37', 1, 'MT2'),
(84, 2, 12, '0.53', 1, 'MT2'),
(85, 2, 13, '0.61', 1, 'MT2'),
(86, 2, 14, '1.06', 1, 'MT2'),
(87, 2, 15, '1.03', 1, 'MT2'),
(88, 2, 16, '0.92', 1, 'MT2'),
(89, 2, 17, '0.19', 1, 'MT3'),
(90, 2, 18, '0.19', 1, 'MT3'),
(91, 2, 19, '0.59', 1, 'MT3'),
(92, 2, 20, '0.66', 1, 'MT3'),
(93, 2, 21, '1.03', 1, 'MT3'),
(94, 2, 22, '1.11', 1, 'MT3'),
(95, 2, 23, '1.08', 1, 'MT3'),
(96, 2, 24, '1.02', 1, 'MT3'),
(97, 2, 1, '0.16', 2, 'MT3'),
(98, 2, 2, '0.19', 2, 'MT1'),
(99, 2, 3, '0.00', 2, 'MT1'),
(100, 2, 4, '0.28', 2, 'MT1'),
(101, 2, 5, '0.43', 2, 'MT1'),
(102, 2, 6, '0.08', 2, 'MT1'),
(103, 2, 7, '0.42', 2, 'MT1'),
(104, 2, 8, '0.47', 2, 'MT1'),
(105, 2, 9, '0.43', 2, 'MT1'),
(106, 2, 10, '0.00', 2, 'MT2'),
(107, 2, 11, '0.00', 2, 'MT2'),
(108, 2, 12, '0.45', 2, 'MT2'),
(109, 2, 13, '0.31', 2, 'MT2'),
(110, 2, 14, '0.99', 2, 'MT2'),
(111, 2, 15, '1.06', 2, 'MT2'),
(112, 2, 16, '0.98', 2, 'MT2'),
(113, 2, 17, '0.90', 2, 'MT2'),
(114, 2, 18, '0.19', 2, 'MT3'),
(115, 2, 19, '0.19', 2, 'MT3'),
(116, 2, 20, '0.59', 2, 'MT3'),
(117, 2, 21, '0.71', 2, 'MT3'),
(118, 2, 22, '1.03', 2, 'MT3'),
(119, 2, 23, '1.11', 2, 'MT3'),
(120, 2, 24, '1.08', 2, 'MT3'),
(121, 2, 1, '0.23', 3, 'MT3'),
(122, 2, 2, '1.12', 3, 'MT3'),
(123, 2, 3, '0.00', 3, 'MT1'),
(124, 2, 4, '0.00', 3, 'MT1'),
(125, 2, 5, '0.33', 3, 'MT1'),
(126, 2, 6, '0.00', 3, 'MT1'),
(127, 2, 7, '0.33', 3, 'MT1'),
(128, 2, 8, '0.50', 3, 'MT1'),
(129, 2, 9, '0.49', 3, 'MT1'),
(130, 2, 10, '0.41', 3, 'MT1'),
(131, 2, 11, '0.00', 3, 'MT2'),
(132, 2, 12, '0.02', 3, 'MT2'),
(133, 2, 13, '0.23', 3, 'MT2'),
(134, 2, 14, '0.68', 3, 'MT2'),
(135, 2, 15, '0.98', 3, 'MT2'),
(136, 2, 16, '1.00', 3, 'MT2'),
(137, 2, 17, '0.95', 3, 'MT2'),
(138, 2, 18, '0.89', 3, 'MT2'),
(139, 2, 19, '0.19', 3, 'MT3'),
(140, 2, 20, '0.19', 3, 'MT3'),
(141, 2, 21, '0.63', 3, 'MT3'),
(142, 2, 22, '0.71', 3, 'MT3'),
(143, 2, 23, '1.03', 3, 'MT3'),
(144, 2, 24, '1.11', 3, 'MT3'),
(145, 1, 1, '1.42', 1, 'MT1'),
(146, 1, 2, '2.76', 1, 'MT1'),
(147, 1, 3, '1.20', 1, 'MT1'),
(148, 1, 4, '0.92', 1, 'MT1'),
(149, 1, 5, '1.59', 1, 'MT1'),
(150, 1, 6, '0.00', 1, 'MT1'),
(151, 1, 7, '0.83', 1, 'MT1'),
(152, 1, 8, '0.00', 1, 'MT1'),
(153, 1, 9, '1.84', 1, 'MT2'),
(154, 1, 10, '1.81', 1, 'MT2'),
(155, 1, 11, '0.98', 1, 'MT2'),
(156, 1, 12, '1.09', 1, 'MT2'),
(157, 1, 13, '1.37', 1, 'MT2'),
(158, 1, 14, '1.25', 1, 'MT2'),
(159, 1, 15, '1.81', 1, 'MT2'),
(160, 1, 16, '0.39', 1, 'MT2'),
(161, 1, 17, '2.62', 1, 'MT3'),
(162, 1, 18, '2.62', 1, 'MT3'),
(163, 1, 19, '1.26', 1, 'MT3'),
(164, 1, 20, '1.26', 1, 'MT3'),
(165, 1, 21, '1.95', 1, 'MT3'),
(166, 1, 22, '1.30', 1, 'MT3'),
(167, 1, 23, '1.85', 1, 'MT3'),
(168, 1, 24, '0.39', 1, 'MT3'),
(169, 1, 1, '0.00', 2, 'MT3'),
(170, 1, 2, '2.76', 2, 'MT1'),
(171, 1, 3, '2.50', 2, 'MT1'),
(172, 1, 4, '0.92', 2, 'MT1'),
(173, 1, 5, '0.99', 2, 'MT1'),
(174, 1, 6, '0.56', 2, 'MT1'),
(175, 1, 7, '0.29', 2, 'MT1'),
(176, 1, 8, '0.94', 2, 'MT1'),
(177, 1, 9, '0.00', 2, 'MT1'),
(178, 1, 10, '1.81', 2, 'MT2'),
(179, 1, 11, '2.32', 2, 'MT2'),
(180, 1, 12, '1.09', 2, 'MT2'),
(181, 1, 13, '0.77', 2, 'MT2'),
(182, 1, 14, '1.90', 2, 'MT2'),
(183, 1, 15, '1.25', 2, 'MT2'),
(184, 1, 16, '1.76', 2, 'MT2'),
(185, 1, 17, '0.39', 2, 'MT2'),
(186, 1, 18, '2.62', 2, 'MT3'),
(187, 1, 19, '2.64', 2, 'MT3'),
(188, 1, 20, '1.26', 2, 'MT3'),
(189, 1, 21, '1.35', 2, 'MT3'),
(190, 1, 22, '1.94', 2, 'MT3'),
(191, 1, 23, '1.30', 2, 'MT3'),
(192, 1, 24, '1.85', 2, 'MT3'),
(193, 1, 1, '0.62', 3, 'MT3'),
(194, 1, 2, '0.39', 3, 'MT3'),
(195, 1, 3, '2.50', 3, 'MT1'),
(196, 1, 4, '2.21', 3, 'MT1'),
(197, 1, 5, '0.99', 3, 'MT1'),
(198, 1, 6, '0.00', 3, 'MT1'),
(199, 1, 7, '0.93', 3, 'MT1'),
(200, 1, 8, '0.40', 3, 'MT1'),
(201, 1, 9, '1.01', 3, 'MT1'),
(202, 1, 10, '0.00', 3, 'MT1'),
(203, 1, 11, '2.32', 3, 'MT2'),
(204, 1, 12, '2.44', 3, 'MT2'),
(205, 1, 13, '0.77', 3, 'MT2'),
(206, 1, 14, '1.29', 3, 'MT2'),
(207, 1, 15, '1.89', 3, 'MT2'),
(208, 1, 16, '1.19', 3, 'MT2'),
(209, 1, 17, '1.74', 3, 'MT2'),
(210, 1, 18, '0.39', 3, 'MT2'),
(211, 1, 19, '2.64', 3, 'MT3'),
(212, 1, 20, '2.64', 3, 'MT3'),
(213, 1, 21, '1.35', 3, 'MT3'),
(214, 1, 22, '1.34', 3, 'MT3'),
(215, 1, 23, '1.94', 3, 'MT3'),
(216, 1, 24, '1.30', 3, 'MT3');

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
  MODIFY `idjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

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
-- AUTO_INCREMENT for table `tb_rekap_analisis`
--
ALTER TABLE `tb_rekap_analisis`
  MODIFY `idrekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

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
  MODIFY `idtanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
