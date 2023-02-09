-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 07:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_b_16`
--

-- --------------------------------------------------------

--
-- Table structure for table `cl_contacts`
--

CREATE TABLE `cl_contacts` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `cont_entry_datetime` datetime NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_phone_no` varchar(18) NOT NULL,
  `cont_email` varchar(100) NOT NULL,
  `cont_address` varchar(100) NOT NULL,
  `cont_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_contacts`
--

INSERT INTO `cl_contacts` (`ID`, `user_ID`, `cont_entry_datetime`, `cont_name`, `cont_phone_no`, `cont_email`, `cont_address`, `cont_status`) VALUES
(1, 1, '2023-02-09 11:01:29', 'Jessore IT Institute', '01884414000', 'tarikjessoreit@gmail.com', 'Level 10, Sheikh hasina STP, Jashore', 'active'),
(2, 3, '2023-02-09 11:05:27', 'Sofik', '017777777777', 'sofik@gmail.com', 'Khulna', 'active'),
(4, 3, '2023-02-09 11:21:44', 'Hablu', '0123456789', 'hablu@gmail.com', 'Jessore, khulna, Bangladesh', 'active'),
(6, 2, '2023-02-09 11:35:39', 'Rakib', '0111111111', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cl_users`
--

CREATE TABLE `cl_users` (
  `ID` int(11) NOT NULL,
  `user_reg_datetime` datetime NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_users`
--

INSERT INTO `cl_users` (`ID`, `user_reg_datetime`, `user_username`, `user_email`, `user_password`, `user_status`) VALUES
(1, '2023-02-07 11:59:16', 'admin', 'alamin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active'),
(2, '2023-02-09 10:23:41', 'tarik', 'tarikjessoreit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active'),
(3, '2023-02-09 10:33:40', 'shakib', 'sakib@abcd.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cl_contacts`
--
ALTER TABLE `cl_contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cl_users`
--
ALTER TABLE `cl_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cl_contacts`
--
ALTER TABLE `cl_contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cl_users`
--
ALTER TABLE `cl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
