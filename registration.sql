-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 06:55 AM
-- Server version: 10.3.15-MariaDB
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `faceendcode`
--

CREATE TABLE `faceendcode` (
  `face_id` int(11) NOT NULL,
  `encode_value` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `encode_status` tinyint(1) NOT NULL,
  `checked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faceendcode`
--

INSERT INTO `faceendcode` (`face_id`, `encode_value`, `person_id`, `encode_status`, `checked`) VALUES
(11, 'blob', 191, 1, 0),
(12, 'blob2', 55, 1, 0),
(15, 'test', 60, 1, 0),
(16, 'test', 16, 1, 0),
(17, 'test', 17, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `person_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phonenumber` int(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `registered` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`person_id`, `username`, `phonenumber`, `address`, `url`, `registered`, `status`) VALUES
(14, 'shantonu.sumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/5170815577765966.webm', 1, 1),
(15, 'shantonu.@nybsys.com.bd', 12131, 'Bowbazar', 'uploads/4558411676806784.webm', 1, 1),
(16, 'shantonu.fffsumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/9985058781244161.webm', 1, 1),
(17, 'shantonddu.sumon@nybsys.com.bd', 2147483647, 'Bowbazarddd', 'uploads/827942919635825.webm', 1, 1),
(18, 'shantonu.sumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/20346443321002573.webm', 0, 1),
(19, 'sshanto13', 2147483647, 'Bowbazarfff', 'uploads/16540236469721825.webm', 0, 1),
(20, 'sshanto13', 2147483647, 'Bowbazarfff', 'uploads/5093692091837976.webm', 0, 1),
(21, 'sshanto14', 2147483647, 'Bowbazarffffff', 'uploads/14938787679009292.webm', 0, 1),
(22, 'shantonu.sumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/8257553053326562.webm', 0, 1),
(23, 'shantonudd.sumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/95531383306333.webm', 0, 1),
(24, 'shantonudd.sumon@nybsys.com.bd', 2147483647, 'Bowbazar', 'uploads/95531383306333.webm', 0, 1),
(25, 'test', 123456, 'dhaka', 'uploads/32380613292319117.webm', 0, 1),
(26, 'sss', 0, 'sss', 'uploads/6438442706575133.webm', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faceendcode`
--
ALTER TABLE `faceendcode`
  ADD PRIMARY KEY (`face_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faceendcode`
--
ALTER TABLE `faceendcode`
  MODIFY `face_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
