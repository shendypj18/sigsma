-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 04:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tahunan`
--

CREATE TABLE `data_tahunan` (
  `id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `passing_grade` int(11) NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tahunan`
--

INSERT INTO `data_tahunan` (`id`, `sekolah_id`, `nama_sekolah`, `passing_grade`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 2, 'SMAN 1 BANDAR LAMPUNG', 323, 264, '2019-06-20 01:02:28', '2019-06-20 01:02:28'),
(2, 3, 'SMAN 2 BANDAR LAMPUNG', 333, 346, '2019-06-20 01:02:46', '2019-06-20 01:02:46'),
(3, 4, 'SMAN 3 BANDAR LAMPUNG', 315, 374, '2019-06-20 01:03:02', '2019-06-20 01:03:02'),
(4, 5, 'SMAN 4 BANDAR LAMPUNG', 296, 315, '2019-06-20 01:03:19', '2019-06-20 01:03:19'),
(5, 6, 'SMAN 5 BANDAR LAMPUNG', 312, 328, '2019-06-20 01:03:39', '2019-06-20 01:03:39'),
(6, 7, 'SMAN 6 BANDAR LAMPUNG', 217, 324, '2019-06-20 01:04:00', '2019-06-20 01:04:00'),
(7, 8, 'SMAN 7 BANDAR LAMPUNG', 299, 374, '2019-06-20 01:04:19', '2019-06-20 01:04:19'),
(8, 9, 'SMAN 8 BANDAR LAMPUNG', 302, 432, '2019-06-20 01:04:42', '2019-06-20 01:04:42'),
(9, 10, 'SMAN 9 BANDAR LAMPUNG', 327, 360, '2019-06-20 01:05:06', '2019-06-20 01:05:06'),
(10, 11, 'SMAN 10 BANDAR LAMPUNG', 309, 340, '2019-06-20 01:05:29', '2019-06-20 01:05:29'),
(11, 12, 'SMAN 11 BANDAR LAMPUNG', 245, 216, '2019-06-20 01:05:49', '2019-06-20 01:05:49'),
(12, 13, 'SMAN 12 BANDAR LAMPUNG', 280, 360, '2019-06-20 01:06:08', '2019-06-20 01:06:08'),
(13, 14, 'SMAN 13 BANDAR LAMPUNG', 256, 432, '2019-06-20 01:06:32', '2019-06-20 01:06:32'),
(14, 15, 'SMAN 14 BANDAR LAMPUNG', 259, 432, '2019-06-20 01:06:59', '2019-06-20 01:06:59'),
(15, 16, 'SMAN 15 BANDAR LAMPUNG', 290, 324, '2019-06-20 01:07:21', '2019-06-20 01:07:21'),
(16, 17, 'SMAN 16 BANDAR LAMPUNG', 275, 288, '2019-06-20 01:07:40', '2019-06-20 01:07:40'),
(17, 18, 'SMAN 17 BANDAR LAMPUNG', 178, 144, '2019-06-20 01:08:03', '2019-06-20 01:08:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tahunan`
--
ALTER TABLE `data_tahunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`sekolah_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tahunan`
--
ALTER TABLE `data_tahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_tahunan`
--
ALTER TABLE `data_tahunan`
  ADD CONSTRAINT `data_tahunan_ibfk_1` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
