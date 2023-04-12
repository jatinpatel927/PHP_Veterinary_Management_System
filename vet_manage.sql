-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 11:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `date`) VALUES
(1, 'In general Apractice you could: diagnose and treat sick and injured animals. perform operations. carry out blood analyses, X-rays and scans. provide care for animals in veterinary hospitals. carry out regular health checks and give vaccinations. check farm animals and advise on how to stop diseases spreading', '2022-09-11 12:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`, `date`) VALUES
(1, 'admin', 'admin@123', '2022-09-15 21:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `animal_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `animal_name`, `date`) VALUES
(2, 'cat', '2022-09-12 20:45:46'),
(3, 'dog', '2022-09-12 20:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `animal_category`
--

CREATE TABLE `animal_category` (
  `id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `c_animal_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_category`
--

INSERT INTO `animal_category` (`id`, `a_id`, `c_animal_name`, `date`) VALUES
(2, 3, 'black-dog', '2022-09-15 19:04:00'),
(3, 2, 'mian-cat', '2022-09-15 20:03:25'),
(4, 2, 'mian-cat', '2022-09-15 20:03:25'),
(5, 2, 'one-dog', '2022-09-15 20:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `owanar_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `c_animal_id` int(11) NOT NULL,
  `animalname` varchar(20) NOT NULL,
  `dease` int(11) NOT NULL,
  `symtoms` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `u_id`, `owanar_name`, `address`, `phone`, `email`, `animal_id`, `c_animal_id`, `animalname`, `dease`, `symtoms`, `date`) VALUES
(22, 1, 'd', 'fd', 3, 'h@gmqil.com', 2, 4, 'df', 4, 2, '2022-09-27 08:47:27'),
(23, 1, 'anil', 'bhavangar', 9898888, 'n@gmail.com', 3, 2, 'dog', 4, 2, '2022-09-29 00:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `appointment-success`
--

CREATE TABLE `appointment-success` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `animal_id` varchar(11) NOT NULL,
  `c_animal_id` varchar(11) NOT NULL,
  `anima_name` varchar(20) NOT NULL,
  `dease` varchar(11) NOT NULL,
  `symtoms` varchar(11) NOT NULL,
  `treatment` varchar(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment-success`
--

INSERT INTO `appointment-success` (`id`, `u_id`, `owner_name`, `address`, `phone`, `email`, `animal_id`, `c_animal_id`, `anima_name`, `dease`, `symtoms`, `treatment`, `date`) VALUES
(1, 1, 'kantariya anil', 'gzdgf', '11111111', 'anil@gmail.com', 'cat', 'whitrd', 'miki', 'sd', 'q', 'w', '2022-09-09 22:11:47'),
(2, 1, 'jatin', 'sdfsd', '11111', 'jatin@gmail.com', 'cat', 'white-cat', 'miki', 'main-_dease', 'syt_main', 'main-treatm', '2022-09-09 22:20:10'),
(3, 1, 'anil', 'rewe', '11111111', 'anil@gmail.com', 'cat', 'white-cat', 'ad', 'main-_dease', 'syt_main', 'main-treatm', '2022-09-11 09:46:38'),
(4, 0, 'jatin', 'fthd', '11111', 'ak@gmail.com', 'cat', 'white-cat', 'miki', 'main-_dease', 'syt_main', 'main-treatm', '2022-09-11 09:49:09'),
(5, 0, 'jatin', 'dfa', '11111', 'ak@gmail.com', 'cat', 'white-cat', 'miki', 'main-_dease', 'syt_main', 'Open this s', '2022-09-11 09:51:12'),
(6, 0, 'jatin', 'dfa', '11111', 'ak@gmail.com', 'cat', 'white-cat', 'miki', 'main-_dease', 'syt_main', 'Open this s', '2022-09-11 09:51:12'),
(7, 0, 'jatin', 'dfa', '11111', 'ak@gmail.com', 'cat', 'white-cat', 'miki', 'main-_dease', 'syt_main', 'main-treatm', '2022-09-11 09:53:09'),
(8, 0, 'j', 'n', '78', 'h@gmqil.com', 'cat', 'mian-cat', 'as', 'main', 'low-syt-ver', 'Open this s', '2022-09-29 00:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `dease`
--

CREATE TABLE `dease` (
  `id` int(11) NOT NULL,
  `dease_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dease`
--

INSERT INTO `dease` (`id`, `dease_name`, `date`) VALUES
(3, 'main', '2022-09-15 20:24:18'),
(4, 'main', '2022-09-15 20:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `phone`, `message`, `date`) VALUES
(1, 'anil', 'ak@gmail.com', 11111, 'werwe', '2022-09-21 16:11:45'),
(2, 'anil', 'ak@gmail.com', 11111, 'hhyjjbvv', '2022-09-22 15:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_name`, `date`) VALUES
(2, 'low-medicine-very', '2022-09-15 21:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `oprator`
--

CREATE TABLE `oprator` (
  `id` int(11) NOT NULL,
  `o_name` varchar(20) NOT NULL,
  `o_password` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oprator`
--

INSERT INTO `oprator` (`id`, `o_name`, `o_password`, `date`) VALUES
(1, 'oprator', 'op@123', '2022-09-09 21:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `oprator_info`
--

CREATE TABLE `oprator_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `information` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oprator_info`
--

INSERT INTO `oprator_info` (`id`, `name`, `email`, `phone`, `information`, `date`) VALUES
(1, 'anil', 'ak@gmail.com', 11111, 'hgyvfderdx', '2022-09-22 21:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `op_ve_info`
--

CREATE TABLE `op_ve_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `op_ve_info`
--

INSERT INTO `op_ve_info` (`id`, `name`, `image`, `description`, `date`) VALUES
(4, 'anilKllll', '/v-managament/oparator/img/jaythakardhani.jpg', '[uyrhfddddg', '2022-09-19 22:05:44'),
(10, 'anil', '/v-managament/oparator/img/bhosdu.jpg', 'hhgggcjn jnjjkm', '2022-09-23 20:23:07'),
(11, 'anil', '/v-managament/oparator/img/IMG-20220909-WA0009.jpg', 'sdtrerghdtfgjjh', '2022-09-23 20:23:48'),
(12, 'bhavnagri', '/v-managament/oparator/img/Untitled.jpg', 'bhb', '2022-09-27 05:13:09'),
(13, 'm,', '/v-managament/oparator/img/Untitled.jpg', 'm', '2022-09-27 05:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `syt_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `d_id`, `syt_name`, `date`) VALUES
(2, 4, 'low-syt-very', '2022-09-15 20:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `syt_id` int(11) NOT NULL,
  `treatment_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `d_id`, `syt_id`, `treatment_name`, `date`) VALUES
(1, 3, 2, 'main-treatment', '2022-09-08 20:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `username`, `password`, `address`, `date`) VALUES
(1, 'Kantariya Anil', 'anil@gmail.com', 11111111, 'anil', 'anil@123', 'bele,gariyadhar,bhavnagar-364505', '2022-08-27 21:09:19'),
(4, 'sanethiya', 'anil@gmail.com', 11111111, 'jatin', 'jatin@123', 'dwqegbdsfhg', '2022-08-31 17:03:45'),
(5, 'sanethiya jatin123', 'ak@gmail.com', 11111, 'jatin123', 'jatin@123', 'dqd', '2022-08-31 17:12:56'),
(7, 'Kantariya Anil', 'anil@gmail.com', 11111111, 'anil123', 'anil@123', 'csgag', '2022-08-31 17:16:38'),
(8, 'anil', 'anil@gmail.com', 11111111, 'anil1234', 'anil@123', 'sdad', '2022-08-31 21:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `vet_info`
--

CREATE TABLE `vet_info` (
  `id` int(11) NOT NULL,
  `v_image` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vet_info`
--

INSERT INTO `vet_info` (`id`, `v_image`, `name`, `description`, `date`) VALUES
(8, '/v-managament/img/jaythakardhani.jpg', 'j', 'n', '2022-09-29 01:00:56'),
(9, '/v-managament/img/jaythakardhani.jpg', 'admin', 'Veterinary is closed for 2 days', '2022-09-29 01:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_category`
--
ALTER TABLE `animal_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment-success`
--
ALTER TABLE `appointment-success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dease`
--
ALTER TABLE `dease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oprator`
--
ALTER TABLE `oprator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oprator_info`
--
ALTER TABLE `oprator_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op_ve_info`
--
ALTER TABLE `op_ve_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `treatment_name` (`treatment_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `vet_info`
--
ALTER TABLE `vet_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `animal_category`
--
ALTER TABLE `animal_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `appointment-success`
--
ALTER TABLE `appointment-success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dease`
--
ALTER TABLE `dease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oprator`
--
ALTER TABLE `oprator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oprator_info`
--
ALTER TABLE `oprator_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `op_ve_info`
--
ALTER TABLE `op_ve_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vet_info`
--
ALTER TABLE `vet_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
