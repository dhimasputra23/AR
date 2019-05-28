-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 11:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(5, 'dimas', '7d49e40f4b3d8f68c19406a58303f826'),
(6, 'dimas', '7d49e40f4b3d8f68c19406a58303f826');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumah`
--

CREATE TABLE `tb_rumah` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `tipe_rumah` enum('36','40') NOT NULL,
  `luas_tanah` int(20) NOT NULL,
  `luas_bangunan` int(20) NOT NULL,
  `lantai` int(10) NOT NULL,
  `listrik` int(10) NOT NULL,
  `tahun` date NOT NULL,
  `harga` int(20) NOT NULL,
  `pengembang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rumah`
--

INSERT INTO `tb_rumah` (`id`, `deskripsi`, `nama_file`, `tipe_rumah`, `luas_tanah`, `luas_bangunan`, `lantai`, `listrik`, `tahun`, `harga`, `pengembang`) VALUES
(9, 'asdasd', 'tga.png', '', 3, 3, 33, 3, '2019-05-02', 343, 'grag'),
(10, 'asdasd', 'tga.png', '', 3, 3, 33, 3, '2019-05-02', 343, 'grag'),
(11, 'dasd', 'asole.jpg', '', 0, 0, 0, 0, '0000-00-00', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rumah`
--
ALTER TABLE `tb_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
