-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile_img` varchar(100) DEFAULT 'user.jpg',
  `dept` int(11) DEFAULT 1,
  `username` varchar(150) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `profile_img`, `dept`, `username`, `create_at`) VALUES
(1, 'Nainsi', 'nainsi@gmail.com', '9874563214', 'admin123', 'user.jpg', 1, 'thenainsi', '2024-09-17 07:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dp_id` int(11) NOT NULL,
  `dp_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dp_id`, `dp_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile_img` varchar(100) DEFAULT 'user.jpg',
  `dept` int(11) DEFAULT 2,
  `username` varchar(150) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `profile_img`, `dept`, `username`, `create_at`) VALUES
(2, 'Ansh', 'Anshsingh123@gmail.com', '9532146982', '789456', 'user.jpg', 2, 'AnsAnshs7895', '2024-09-17 06:02:03'),
(3, 'Tannu', 'tannukumari85@gmail.com', '9635412896', '123654', 'user.jpg', 2, 'Tantannu1296', '2024-09-17 06:08:51'),
(8, 'Anshu', 'Anshu@gmail.com', '9651234586', '753654', 'user.jpg', 2, 'AnsAnshu7596', '2024-09-21 06:02:19'),
(9, 'vansh', 'vanshkumar@gmail.com', '9875326452', '741596', 'user.jpg', 2, 'vanvansh7498', '2024-09-24 06:12:04'),
(10, 'Sanju', 'Sanju45@gmail.com', '9258746351', '963852', 'user.jpg', 2, 'SanSanju9692', '2024-09-24 06:14:08'),
(11, 'Rajeev', 'Rajeev78@gmail.com', '9385456327', '852852', 'user.jpg', 2, 'RajRajee8593', '2024-09-24 06:15:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dept` (`dept`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `department` (`dp_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `department` (`dp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
