-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 01:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xbaseleets_xbaseleets`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `acctype` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `resseller` varchar(255) DEFAULT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `emp_name` varchar(80) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `acctype`, `country`, `infos`, `price`, `resseller`, `sitename`, `emp_name`, `salary`, `gender`, `city`, `email`) VALUES
(1, 'Uyyy', NULL, NULL, NULL, NULL, NULL, 'Yogesh', '30000', 'male', 'Bhopal', 'yogesh@makitweb.com'),
(2, 'Aa', NULL, NULL, NULL, NULL, NULL, 'Vishal', '28000', 'male', 'Pune', 'vishal@gmail.com'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 'Vijay', '35000', 'male', 'Jaipur', 'vijayec@yahoo.com'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'Rahul', '25000', 'male', 'Kanpur', 'rahul512@gmail.com'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'Sonarika', '50000', 'female', 'Mumbai', 'bsonarika@gmail.com'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'Jitentendre', '48000', 'male', 'Bhopal', 'jiten94@yahoo.com'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'Aditya', '36000', 'male', 'Pune', 'aditya@gmail.com'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, 'Anil', '32000', 'male', 'Indore', 'anilsingh@gmail.com'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunil', '48000', 'male', 'Nagpur', 'sunil1993@gmail.com'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 'Akilesh', '52000', 'male', 'Surat', 'akileshsahu@yahoo.com'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 'Raj', '48000', 'male', 'Ahmedabad', 'rajsingh@gmail.com'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 'Mayank', '54000', 'male', 'Ghaziabad', 'mpatidar@gmail.com'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'Shalu', '43000', 'female', 'Bhopal', 'gshalu521@gmail.com'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, 'Ravi', '32000', 'male', 'Ludhiana', 'ravisharma21@yahoo.com'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, 'Shruti', '45000', 'female', 'Delhi', 'shruti@gmail.com'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, 'Rishi', '38000', 'male', 'Mumbai', 'rishi121@gmail.com'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, 'Rohan', '47000', 'male', 'Jaipur', 'rohansingh@gmail.com'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, 'Priya', '28000', 'female', 'Indore', 'priya1992@gmail.com'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, 'Rakesh', '34000', 'male', 'bhopal', 'rakesh@yahoo.com'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, 'Vinay', '34000', 'male', 'Delhi', 'vinaysingh@gmail.com'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanu', '41000', 'female', 'pune', 'Tanu@gmail.com'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, 'Ajay', '28000', 'male', 'bhopal', 'ajay93@gmail.com'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, 'Nikhil', '46000', 'male', 'pune', 'nikhil@gmail.com'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, 'Arav', '28000', 'male', 'Nagpur', 'aravsingh@yahoo.com'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, 'Madhu', '32000', 'female', 'Rajkot', 'madhu@gmail.com'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, 'Sagar', '44000', 'male', 'Rajkot', 'sagar@gmail.com'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, 'Anju ', '30000', 'female', 'Ranchi', 'anju@gmail.com'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, 'Rajat', '28000', 'male', 'kota', 'rajat@gmail.com'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, 'Anjali', '32000', 'female', 'Gwalior', 'anjali@gmail.com'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, 'Saloni', '32000', 'female', 'Nashik', 'saloni@gmail.com'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, 'Mayur', '28000', 'male', 'Bhopal', 'mayur@gmail.com'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, 'Pankaj', '32000', 'male', 'Indore', 'pankaj@gmail.com'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, 'Hrithik', '33000', 'male', 'Pune', 'hrithik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
