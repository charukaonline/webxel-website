-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 01:42 PM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webx_231nsbmgrp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_orders`
--

CREATE TABLE `confirmed_orders` (
  `confirmed_order_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirmed_orders`
--

INSERT INTO `confirmed_orders` (`confirmed_order_id`, `admin_email`, `name`, `email`, `service_type`, `description`, `number`) VALUES
(51, 'aminda@gmail.com', 'don', 'don@gmail.com', 'marketing & advertising', 'eorjg', '12345'),
(52, 'sanojaminda@gmail.com', 'don', 'don@gmail.com', 'video and animation', 'ieiknt', '12345'),
(53, 'sanojaminda@gmail.com', 'don', 'don@gmail.com', 'web design & development', 'sfb', '2345678'),
(54, 'sanojaminda@gmail.com', 'Don', 'don@gmail.com', 'mobile app development', 'eug', '652367'),
(57, 'contact@charukak.com', 'Sasith Bandara', 'sasithbandara12@gmail.com', 'web design & development', 'i want to create a website', ''),
(58, 'contact@charukak.com', 'Nuwantha', 'x@charukak.com', 'graphic Design', 'i want to create a flyer', ''),
(59, 'contact@charukak.com', 'vimukthi', 'vimukthi@gmail.com', 'mobile app development', 'i wanna develop a app', ''),
(60, 'contact@charukak.com', 'test user1', 'test1@webxel.xyz', 'video and animation', 'test order, this is a test', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_and_register`
--

CREATE TABLE `login_and_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `country` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `pp` varchar(255) NOT NULL DEFAULT '16575b7267b85a.png',
  `account_status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_and_register`
--

INSERT INTO `login_and_register` (`id`, `name`, `email`, `password`, `user_type`, `country`, `address`, `contact_number`, `about`, `pp`, `account_status`) VALUES
(4, 'Sanoj Aminda', 'sanojaminda@gmail.com', 'bbdeb4a752f979496b8d7c3a07b090ed', 'admin', 'Sri Lanka', 'No 43, Chilaw', '0760536392', 'I\\\'m a developer', '6576d1b6e4ce04.48796021.jpg', 'Active'),
(5, 'Charuka Karunarathna', 'contact@charukak.com', '2749233474f79d12f996d18bd92cfbd6', 'admin', 'Sri Lanka', 'Negombo Road, Pannala', '0372245505', 'Technology Geek', '65771124127534.77339131.jpeg', 'Active'),
(6, 'Don', 'don@gmail.com', 'e3ac3f0d7c6f3c2707b00309ec80c7d9', '', 'Sri Lanka', '', '', 'I\\\'m a student', '16575b7267b85a.png', 'Active'),
(26, 'Sasith Bandara', 'sasithbandara12@gmail.com', '0be8c10ca339e705bde5da150f8d9d05', '', NULL, NULL, NULL, NULL, '16575b7267b85a.png', 'Active'),
(27, 'nuwantha', 'x@charukak.com', 'ecc645d230c748277f42f4ac0ce440ad', '', NULL, NULL, NULL, NULL, '16575b7267b85a.png', 'Active'),
(30, 'Thanuka Rathnayake', 'manthanuka@gmail.com', '9681a41663ad86c2d1ed768b40e7af1d', '', 'Sri Lanka', 'Kalagedihena, Sri Lanka', '0712345678', 'Cyber Security undergraduate at NSBM', '16575b7267b85a.png', 'Active'),
(31, 'thanuka thathsara', 'thanuka03@gmail.com', '141ca6bd8a7b975ed8a5d1814d561069', '', NULL, NULL, NULL, NULL, '16575b7267b85a.png', 'Active'),
(36, 'test 3', 'test3@webxel.xyz', 'cc03e747a6afbbcbf8be7668acfebee5', '', NULL, NULL, NULL, NULL, '16575b7267b85a.png', 'Hold'),
(37, 'test 4', 'test4@webxel.xyz', 'cc03e747a6afbbcbf8be7668acfebee5', '', NULL, NULL, NULL, NULL, '16575b7267b85a.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `service_type` varchar(255) NOT NULL DEFAULT 'web design & development',
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `email`, `number`, `service_type`, `description`, `created_at`, `order_status`) VALUES
(51, 'don', 'don@gmail.com', '12345', 'marketing & advertising', 'eorjg', '2023-11-22 17:07:58', 'Accepted!'),
(52, 'don', 'don@gmail.com', '12345', 'video and animation', 'ieiknt', '2023-11-22 17:08:18', 'Accepted!'),
(53, 'don', 'don@gmail.com', '2345678', 'web design & development', 'sfb', '2023-11-23 05:39:50', 'Accepted!'),
(54, 'Don', 'don@gmail.com', '652367', 'mobile app development', 'eug', '2023-11-23 05:45:51', 'Accepted!'),
(55, 'don', 'don@gmail.com', '2394', 'web design & development', 'ejkf', '2023-11-23 05:50:06', 'Pending...'),
(56, 'aidf', 'don@gmail.com', '38490', 'marketing & advertising', 'jnsdfg', '2023-11-23 05:52:54', 'Pending...'),
(57, 'Sasith Bandara', 'sasithbandara12@gmail.com', '', 'web design & development', 'i want to create a website', '2023-11-27 08:10:55', 'Accepted!'),
(58, 'Nuwantha', 'x@charukak.com', '', 'graphic Design', 'i want to create a flyer', '2023-11-27 09:37:58', 'Accepted!'),
(59, 'vimukthi', 'vimukthi@gmail.com', '', 'mobile app development', 'i wanna develop a app', '2023-11-27 17:23:47', 'Accepted!'),
(60, 'test user1', 'test1@webxel.xyz', '', 'video and animation', 'test order, this is a test', '2023-12-03 14:51:33', 'Accepted!'),
(61, 'Thanuka', 'manthanuka@gmail.com', '', 'mobile app development', 'i wanna develop a app', '2023-12-04 18:30:59', 'Pending...');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `created_at`) VALUES
(1, 'Web Designing', '2023-11-19 16:59:28'),
(2, 'App Development', '2023-11-19 19:29:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD PRIMARY KEY (`confirmed_order_id`);

--
-- Indexes for table `login_and_register`
--
ALTER TABLE `login_and_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  MODIFY `confirmed_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `login_and_register`
--
ALTER TABLE `login_and_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
