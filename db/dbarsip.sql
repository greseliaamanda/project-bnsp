-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 06:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarsip`
--

CREATE TABLE `tbarsip` (
  `id` int(5) NOT NULL,
  `no_surat` varchar(15) CHARACTER SET latin1 NOT NULL,
  `kategori` enum('Undangan','Pengumuman','Nota Dinas','Pemberitahuan') CHARACTER SET latin1 NOT NULL,
  `judul` varchar(25) CHARACTER SET latin1 NOT NULL,
  `file_surat` varchar(25) CHARACTER SET latin1 NOT NULL,
  `tgl_arsip` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbarsip`
--

INSERT INTO `tbarsip` (`id`, `no_surat`, `kategori`, `judul`, `file_surat`, `tgl_arsip`) VALUES
(7, '2020/PD3/TU/001', 'Pengumuman', 'Nota Dinas WFH', 'Nota Dinas WFH.pdf', '2021-10-23 05:26:29'),
(9, '2020/PD3/TU/022', 'Undangan', 'Undangan Reuni', 'Undangan Reuni.pdf', '2021-10-23 05:32:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarsip`
--
ALTER TABLE `tbarsip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbarsip`
--
ALTER TABLE `tbarsip`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
