-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 12:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_produk`, `nama_produk`, `harga`, `kategori`, `status`) VALUES
(122, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 12500, 'L QUEENLY', 'bisa dijual'),
(123, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(124, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(125, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(126, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(127, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(128, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(129, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(130, 'ARM PENDEK MODEL U', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(131, 'ARM SUPPORT KECIL', 13000, 'L MTH TABUNG (LK)', 'tidak bisa dijual'),
(132, 'ARM SUPPORT KOTAK PUTIH', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(133, 'ARM SUPPORT PENDEK POLOS', 13000, 'L MTH TABUNG (LK)', 'bisa dijual'),
(134, 'ARM SUPPORT S IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(135, 'ARM SUPPORT T (IMPORT)', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(136, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, 'L MTH TABUNG (LK)', 'bisa dijual'),
(137, 'BLACK LASER TONER FP-T3 (100gr)', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(138, 'BODY PRINTER CANON IP2770', 500, 'SP MTH SPAREPART (LK)', 'bisa dijual'),
(139, 'BODY PRINTER T13X', 15000, 'SP MTH SPAREPART (LK)', 'bisa dijual'),
(140, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(141, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(142, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(143, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(144, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(145, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(146, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(147, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(148, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(149, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(150, 'BOTOL KOTAK 100ML LK', 1000, 'L MTH AKSESORIS (LK)', 'bisa dijual'),
(151, 'BOTOL 10ML IM', 1000, 'S MTH STEMPEL (IM)', 'tidak bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
