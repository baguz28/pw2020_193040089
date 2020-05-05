-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 10:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040089`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `cara` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `nama`, `gambar`, `cara`, `asal`, `harga`) VALUES
(1, 'Gitar', 'gitar.jpg', 'Di petik', 'Bangsa romawi', 'Rp. 100.000 atau lebih'),
(2, 'Drum', 'drum.jpg', 'Di pukul', 'Timur Tengah', 'Rp. 500.000 atau lebih'),
(3, 'Piano', 'Piano.jpg', 'Di tekan', 'Italia', 'Rp. 100.000 atau lebih'),
(4, 'Terompet', 'terompet.jpg', 'Di Tiup', 'Yunani', 'Rp. 50.000 atau lebih'),
(5, 'Pianika', 'pianika.jpg', 'Di tiup dan Di tekan', 'Amerika', 'Rp. 50.000 atau lebih'),
(6, 'Angklung', 'angklung.jpg', 'Di goyangkan', 'Jawa barat', 'Rp. 100.000 atau lebih'),
(7, 'Gendang', 'gendang.jpg', 'Di Pukul', 'Jawa Tengah', 'Rp. 100.000 atau lebih'),
(8, 'Gamelan', 'gamelan.jpg', 'Di pukul', 'Jawa Tengah', 'Rp. 100.000 atau lebih'),
(9, 'Sasando', 'sasando.jpg', 'Di petik', 'Nusa Tenggara Timur', 'Rp. 50.000'),
(10, 'Kolintang', 'kolintang.jpg', 'Di pukul', 'Sulawesi Selatan', 'Rp. 100.000 atau lebih');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'tito', '$2y$10$J6l2zNmyyijUvZe2.5SJnOiULFCpGaKstWuJajPG0m67FdqmtT7Bq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
