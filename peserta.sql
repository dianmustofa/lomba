-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 11:21 AM
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
-- Database: `lomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama_tim` text NOT NULL,
  `judul_karya` text NOT NULL,
  `ketua_tim` text NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_mahasiswa` text NOT NULL,
  `universitas` text NOT NULL,
  `jurusan` text NOT NULL,
  `anggota_pertama` text NOT NULL,
  `anggota_kedua` text NOT NULL,
  `link_web` text NOT NULL,
  `link_data` text NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `keterangan` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama_tim`, `judul_karya`, `ketua_tim`, `no_hp`, `email`, `no_mahasiswa`, `universitas`, `jurusan`, `anggota_pertama`, `anggota_kedua`, `link_web`, `link_data`, `dokumen`, `tanggal`, `keterangan`, `slug`) VALUES
(1, 'Jakartasatu', 'vjadjva', 'dian', 45678, 'admin@ca.com', '12434', 'ugm', 'karto', 'yatno', 'wiranto', 'https://hai.com', 'https://yo.com', 'd2f0b787fb0ac30afabc341fc1559d6a.png', '0000-00-00', 'hai', 'vjadjva.html'),
(2, 'Jakartasatu', 'vjadjva', 'dian', 45678, 'admin@ca.com', '12434', 'ugm', 'karto', 'yatno', 'wiranto', 'https://hai.com', 'https://yo.com', '5d7ac2822e5f30b4f83a385f41eeb242.png', '0000-00-00', 'haaa', 'vjadjva.html'),
(3, 'Jakartasatu', 'vjadjva', 'dian', 234, 'admin@ca.com', '12434', 'ugm', 'karto', 'yatno', 'wiranto', 'https://hai.com', 'https://yo.com', 'bb79e0dc5abd42e86640f0e7f2b04ae2.png', '0000-00-00', 'sdgfhj', 'vjadjva.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
