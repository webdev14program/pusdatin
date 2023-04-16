-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2023 at 01:07 AM
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
-- Database: `pusdatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `nama`, `level`) VALUES
(101, 'adminPUSDATIN', '7b76c9dac771c5ab6d68c9206a17fc7663a4bc13', 'ADMINISTRATOR PUSDATIN SALEMBA', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `leve_pusdatin`
--

CREATE TABLE `leve_pusdatin` (
  `id_level` int(8) NOT NULL,
  `nama_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leve_pusdatin`
--

INSERT INTO `leve_pusdatin` (`id_level`, `nama_level`) VALUES
(1001, 'IT SUPORT'),
(2002, 'EOS/ISP'),
(3003, 'DRC'),
(4004, 'URUSAN UMUM'),
(5005, 'Cleaning Service'),
(6006, 'MAGANG');

-- --------------------------------------------------------

--
-- Table structure for table `personil_pusdatin`
--

CREATE TABLE `personil_pusdatin` (
  `id_personil` int(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tlpn` bigint(32) NOT NULL,
  `alamat` text NOT NULL,
  `level` int(8) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personil_pusdatin`
--

INSERT INTO `personil_pusdatin` (`id_personil`, `nama`, `tlpn`, `alamat`, `level`, `gambar`) VALUES
(406681, 'Hirda Muhar Fiyanto', 82113095311, 'street no. 4. xyz', 1001, 'pak-hida.jpeg'),
(687921, 'Faisal Hidayat', 87782502695, 'street no. 4. xyz', 1001, 'pak-faisal.jpg'),
(691296, 'Supriatna', 81315185692, 'street no. 4. xyz', 3003, 'pa-supratna.png'),
(716489, 'Agus Budi Sumpeno', 81285539623, 'None', 4004, 'pa-agus.png'),
(779137, 'Hendarto', 85797979901, 'sunter jaya', 2002, 'pa-hendra.png'),
(794941, 'Rifqi Fadilla Dwika', 81517176971, 'jl.kapuk kebon jambu', 6006, 'fadil.png'),
(824907, 'Denta Fitri Noviani', 85776845264, 'jl.kp gusti pintu air rt 1 rw 15 no 20 jakarta barat', 6006, 'denden.png'),
(920473, 'Nia Kurniawati', 89677682103, 'street no. 4. xyz', 5005, 'bu-nia.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `leve_pusdatin`
--
ALTER TABLE `leve_pusdatin`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `personil_pusdatin`
--
ALTER TABLE `personil_pusdatin`
  ADD PRIMARY KEY (`id_personil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
