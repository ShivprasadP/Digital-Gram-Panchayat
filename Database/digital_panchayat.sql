-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 06:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_panchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationf`
--

CREATE TABLE `applicationf` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `appname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `pancard` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicationf`
--

INSERT INTO `applicationf` (`id`, `fname`, `appname`, `email`, `mobile`, `gender`, `dob`, `address`, `city`, `pincode`, `state`, `password`, `adharcard`, `pancard`, `status`) VALUES
(1, 'c', 'c', 'admin@gmail.com', 9922746393, 'male', '2022-06-02', 'sdf', 'sdf', 32, 'sdf', 'dsf', '0', '0', ''),
(2, 'c', 'xcv', 'admin@gmail.comc', 0, 'male', '2022-06-12', 'cvb', 'vcb', 435, 'vb', 'cvbz', '0', '3', ''),
(3, 'c', 'xcv', 'admin@gmail.comc', 0, 'male', '2022-06-12', 'cvb', 'vcb', 435, 'vb', 'z', 'User_Profile.png', '3.jpg', ''),
(4, 'c', 'c', 'admin@gmail.com', 9922746393, 'male', '2022-06-11', 'vcb', 'cvb', 546, 'fvb', 'cvbz', 'Logo.png', 'contact_us_bg.jpg', ''),
(5, 'c', 'c', 'admin@gmail.com', 9922746393, 'male', '2022-06-11', 'vcb', 'cvb', 546, 'fvb', 'cvbzaa', 'Logo.png', 'contact_us_bg.jpg', 'confirm'),
(6, 'c', 'c', 'admin@gmail.com', 9922746393, 'male', '2022-06-11', 'vcb', 'cvb', 546, 'fvb', 'cvbzz', 'Logo.png', 'contact_us_bg.jpg', 'confirm'),
(7, 'c', 'c', 'admin@gmail.com', 9922746393, 'male', '2022-06-11', 'vcb', 'cvb', 546, 'fvb', 'cvbzq', 'Logo.png', 'contact_us_bg.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Narayan', '$2y$10$6M/aFm8tJhJ6azJY09J8iOB79DfiD/dcru4p6lFMRVPO/Jr1XclPy', '2022-05-31 00:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Shiv', '$2y$10$Zja3aow.BsrrTLiH4Bf.tuizxlUjIgIzm10qaDtwnhFpWE2/LWScm', '2022-05-29 14:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationf`
--
ALTER TABLE `applicationf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicationf`
--
ALTER TABLE `applicationf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
