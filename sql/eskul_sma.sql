-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 11:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docs_github`
--

-- --------------------------------------------------------

--
-- Table structure for table `eskul_sma`
--

CREATE TABLE `eskul_sma` (
  `id_eskul` int(20) UNSIGNED NOT NULL,
  `nama_eskul` varchar(255) NOT NULL,
  `id_eskul_siswa` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eskul_sma`
--

INSERT INTO `eskul_sma` (`id_eskul`, `nama_eskul`, `id_eskul_siswa`) VALUES
(18, 'Voli', 3),
(19, 'Paduan Suara', 3),
(20, 'Voli', 6),
(21, 'Karate', 6),
(22, 'Paduan Suara', 4),
(23, 'Gerak Jalan', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskul_sma`
--
ALTER TABLE `eskul_sma`
  ADD PRIMARY KEY (`id_eskul`),
  ADD KEY `id_eskul_siswa` (`id_eskul_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eskul_sma`
--
ALTER TABLE `eskul_sma`
  MODIFY `id_eskul` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eskul_sma`
--
ALTER TABLE `eskul_sma`
  ADD CONSTRAINT `eskul_sma_ibfk_1` FOREIGN KEY (`id_eskul_siswa`) REFERENCES `siswa_sma` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
