-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 08:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(16) NOT NULL,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `backgroundColor` enum('background-color: #FFFFFF','background-color: #EF93FF','background-color: #FBA39D','background-color: #66CFFF','background-color: #FFE893') NOT NULL DEFAULT 'background-color: #FFFFFF',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `body`, `backgroundColor`, `createdAt`, `updatedAt`) VALUES
(22, 'Tes', 'teesasdnnsdksafasd', 'background-color: #FFFFFF', '2021-12-12 13:51:52', '2021-12-12 13:51:52'),
(23, 'Krisna Satriadi', 'the quick brown fox jump over the lazy dog', 'background-color: #FFE893', '2021-12-12 13:52:37', '2021-12-12 13:52:37'),
(24, 'Sigendut', 'dut dut dut sigendut anak paling nakal, kalau dirumah kerjanya hanya makan, bila sekolah, nakalnya minta ampun', 'background-color: #66CFFF', '2021-12-12 13:53:39', '2021-12-12 13:53:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
