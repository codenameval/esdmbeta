-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 04:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_ekspor_mineral`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekspor_mineral`
--

CREATE TABLE `ekspor_mineral` (
  `No` int(5) NOT NULL,
  `Nama_Perusahaan` varchar(50) NOT NULL,
  `Komoditas` varchar(50) NOT NULL,
  `Satuan` varchar(50) NOT NULL,
  `Tahun` varchar(5) NOT NULL,
  `Nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekspor_mineral`
--

INSERT INTO `ekspor_mineral` (`No`, `Nama_Perusahaan`, `Komoditas`, `Satuan`, `Tahun`, `Nilai`) VALUES
(1, 'Lusang Mining', 'Gold', 'kg', '2000', 51232),
(2, 'Lusang Mining', 'Silver', 'kg', '2000', 45198),
(3, 'Aneka Tambang Tbk', 'Gold', 'kg', '2000', 4123),
(4, 'Aneka Tambang Tbk', 'Silver', 'kg', '2000', 30900),
(5, 'Freeport Indonesia', 'Gold', 'kg', '2000', 50726),
(6, 'Freeport Indonesia', 'Silver', 'kg', '2000', 83705),
(7, 'Monterado Mas Mining', 'Gold', 'kg', '2000', 6342),
(8, 'Monterado Mas Mining', 'Silver', 'kg', '2000', 50787),
(9, 'Prima Lirang Mining', 'Gold', 'kg', '2000', 6235),
(10, 'Prima Lirang Mining', 'Silver', 'kg', '2000', 59988),
(11, 'Kelian Equatorial Mining', 'Gold', 'kg', '2000', 9826),
(12, 'Kelian Equatorial Mining', 'Silver', 'kg', '2000', 8670),
(13, 'Indo Muro Kencana', 'Gold', 'kg', '2000', 3003),
(14, 'Indo Muro Kencana', 'Silver', 'kg', '2000', 63828),
(15, 'Newmont Minahasa Raya', 'Gold', 'kg', '2000', 6635),
(16, 'Newmont Minahasa Raya', 'Silver', 'kg', '2000', 535),
(17, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2000', 10197),
(18, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2000', 38246),
(19, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2000', 7428),
(20, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2000', 4349),
(21, 'Newmont Minahasa Raya', 'Gold', 'kg', '2001', 9702),
(22, 'Newmont Minahasa Raya', 'Silver', 'kg', '2001', 550),
(23, 'Kelian Equatorial Mining', 'Gold', 'kg', '2001', 14501),
(24, 'Kelian Equatorial Mining', 'Silver', 'kg', '2001', 14500),
(25, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2001', 16765),
(26, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2001', 59469),
(27, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2001', 8786),
(28, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2001', 9635),
(29, 'Aneka Tambang Tbk', 'Gold', 'kg', '2002', 1780),
(30, 'Aneka Tambang Tbk', 'Silver', 'kg', '2002', 6397),
(31, 'Freeport Indonesia', 'Gold', 'kg', '2002', 60691),
(32, 'Freeport Indonesia', 'Silver', 'kg', '2002', 105352),
(33, 'Kelian Equatorial Mining', 'Gold', 'kg', '2002', 16875),
(34, 'Kelian Equatorial Mining', 'Silver', 'kg', '2002', 15540),
(35, 'Newmont Minahasa Raya', 'Gold', 'kg', '2002', 4870),
(36, 'Newmont Minahasa Raya', 'Silver', 'kg', '2002', 505),
(37, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2002', 15501),
(38, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2002', 57081),
(39, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2002', 3846),
(40, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2002', 7320),
(41, 'Aneka Tambang Tbk', 'Gold', 'kg', '2003', 2080),
(42, 'Aneka Tambang Tbk', 'Silver', 'kg', '2003', 26627),
(43, 'Freeport Indonesia', 'Gold', 'kg', '2003', 74582),
(44, 'Freeport Indonesia', 'Silver', 'kg', '2003', 118473),
(45, 'Kelian Equatorial Mining', 'Gold', 'kg', '2003', 13595),
(46, 'Kelian Equatorial Mining', 'Silver', 'kg', '2003', 9300),
(47, 'Newmont Minahasa Raya', 'Gold', 'kg', '2003', 2892),
(48, 'Newmont Minahasa Raya', 'Silver', 'kg', '2003', 32792),
(49, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2003', 18679),
(50, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2003', 60284),
(51, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2003', 326),
(52, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2003', 845),
(53, 'Aneka Tambang Tbk', 'Gold', 'kg', '2004', 1595),
(54, 'Aneka Tambang Tbk', 'Silver', 'kg', '2004', 5347),
(55, 'Freeport Indonesia', 'Gold', 'kg', '2004', 47407),
(56, 'Freeport Indonesia', 'Silver', 'kg', '2004', 146209),
(57, 'Kelian Equatorial Mining', 'Gold', 'kg', '2004', 8645),
(58, 'Kelian Equatorial Mining', 'Silver', 'kg', '2004', 4600),
(59, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2004', 22257),
(60, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2004', 69949),
(61, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2004', 5846),
(62, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2004', 6883),
(63, 'Aneka Tambang Tbk', 'Gold', 'kg', '2004', 753),
(64, 'Aneka Tambang Tbk', 'Silver', 'kg', '2004', 9257),
(65, 'Freeport Indonesia', 'Gold', 'kg', '2005', 106563),
(66, 'Freeport Indonesia', 'Silver', 'kg', '2005', 221904),
(67, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2005', 22761),
(68, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2005', 67343),
(69, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2005', 5661),
(70, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2005', 5607),
(71, 'Avocet Bolaang Mongondouw', 'Gold', 'kg', '2005', 1415),
(72, 'Avocet Bolaang Mongondouw', 'Silver', 'kg', '2005', 215),
(73, 'Aneka Tambang Tbk', 'Gold', 'kg', '2006', 1458),
(74, 'Aneka Tambang Tbk', 'Silver', 'kg', '2006', 8098),
(75, 'Freeport Indonesia', 'Gold', 'kg', '2006', 611532),
(76, 'Freeport Indonesia', 'Silver', 'kg', '2006', 58287),
(77, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2006', 204649),
(78, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2006', 13849),
(79, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2006', 8665),
(80, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2006', 9863),
(81, 'Aneka Tambang Tbk', 'Gold', 'kg', '2007', 5000),
(82, 'Aneka Tambang Tbk', 'Silver', 'kg', '2007', 26968),
(83, 'Freeport Indonesia', 'Gold', 'kg', '2007', 83857),
(84, 'Freeport Indonesia', 'Silver', 'kg', '2007', 164709),
(85, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2007', 15704),
(86, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2007', 52931),
(87, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2007', 11557),
(88, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2007', 12905),
(89, 'Aneka Tambang Tbk', 'Gold', 'kg', '2008', 9441),
(90, 'Aneka Tambang Tbk', 'Silver', 'kg', '2008', 34342),
(91, 'Freeport Indonesia', 'Gold', 'kg', '2008', 313099),
(92, 'Freeport Indonesia', 'Silver', 'kg', '2008', 22146),
(93, 'Newmont Nusa Tenggara', 'Gold', 'kg', '2008', 9522),
(94, 'Newmont Nusa Tenggara', 'Silver', 'kg', '2008', 31246),
(95, 'Nusa Halmahera Minerals', 'Gold', 'kg', '2008', 13331),
(96, 'Nusa Halmahera Minerals', 'Silver', 'kg', '2008', 14323),
(97, 'Avocet Bolaang Mongondouw', 'Gold', 'kg', '2008', 1445),
(98, 'Avocet Bolaang Mongondouw', 'Silver', 'kg', '2008', 190),
(99, 'Prima Lirang Mining', 'Gold', 'kg', '2008', 6236),
(100, 'Prima Lirang Mining', 'Silver', 'kg', '2008', 59990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekspor_mineral`
--
ALTER TABLE `ekspor_mineral`
  ADD PRIMARY KEY (`No`),
  ADD KEY `No` (`No`),
  ADD KEY `No_2` (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
