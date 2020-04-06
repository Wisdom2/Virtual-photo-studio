-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 01:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbp_photo_studiodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `servicetype` enum('indoor','outdoor') DEFAULT NULL,
  `productname` varchar(70) NOT NULL,
  `dates` varchar(10) NOT NULL,
  `times` time NOT NULL,
  `customers_id` int(11) NOT NULL,
  `bookingstatus` enum('pending','confirmed','checkedout') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `location`, `servicetype`, `productname`, `dates`, `times`, `customers_id`, `bookingstatus`, `created_at`, `updated_at`) VALUES
(2, 'Accra', '', 'deluxe', '2019-21-10', '16:00:00', 6, 'checkedout', '2019-04-13 20:17:32', '2019-04-13 20:17:32'),
(4, 'Accra', '', 'deluxe', '2019-20-10', '16:00:00', 6, 'checkedout', '2019-04-13 20:59:43', '2019-04-13 20:59:43'),
(5, 'Accra', 'indoor', 'deluxe', '2019-20-10', '16:00:00', 6, 'confirmed', '2019-04-13 21:16:52', '2019-04-13 21:16:52'),
(19, 'At Church', 'indoor', 'engagement_photography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 02:49:49', '2019-04-22 02:49:49'),
(20, 'At Church', 'indoor', 'engagement_photography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 02:49:49', '2019-04-22 02:49:49'),
(21, 'At home', 'indoor', 'Wedding_Engagement_videography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 02:55:33', '2019-04-22 02:55:33'),
(22, 'At home', 'indoor', 'Wedding_Engagement_videography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 02:55:33', '2019-04-22 02:55:33'),
(23, 'Test', 'indoor', 'engagement_photography', '2019-04-22', '15:00:00', 28, 'pending', '2019-04-22 02:57:09', '2019-04-22 02:57:09'),
(24, 'Test', 'indoor', 'engagement_photography', '2019-04-22', '15:00:00', 28, 'pending', '2019-04-22 02:57:09', '2019-04-22 02:57:09'),
(25, 'Test 2', 'indoor', 'engagement_photography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 02:58:45', '2019-04-22 02:58:45'),
(26, 'Test 2', 'indoor', 'engagement_photography', '2019-04-22', '14:02:00', 28, 'confirmed', '2019-04-22 02:58:45', '2019-04-22 02:58:45'),
(27, 'Out door ', 'outdoor', 'engagement_videography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 16:23:39', '2019-04-22 16:23:39'),
(28, 'Out door ', 'outdoor', 'engagement_videography', '2019-04-22', '14:02:00', 28, 'pending', '2019-04-22 16:23:39', '2019-04-22 16:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `dob`, `lastname`, `email`, `password`, `phonenumber`, `gender`, `created_at`, `updated_at`) VALUES
(6, 'prince', '2019-01-10', 'Apagya1', 'prince@gmail.com', '25d55ad283aa400af464c76d713c07ad', '05004940498', 'male', '2019-04-12 02:58:40', '2019-04-12 02:58:40'),
(7, 'Jane', '2019-01-22', 'Apagya', 'jacobus@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0500494049', 'female', '2019-04-12 03:04:36', '2019-04-12 03:04:36'),
(27, 'frank', '2019-09-19', 'jones', 'frank@gmail.com', '25d55ad283aa400af464c76d713c07ad', '02920292020', 'male', '2019-04-16 21:17:17', '2019-04-16 21:17:17'),
(28, 'yaw', '2000-10-11', 'jones', 'jones@gmail.com', '25d55ad283aa400af464c76d713c07ad', '02098989233', 'male', '2019-04-20 14:35:39', '2019-04-20 14:35:39'),
(29, 'test', '2000-02-01', 'test', 'test@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0293093939', 'male', '2020-04-05 11:32:35', '2020-04-05 11:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers_files`
--

CREATE TABLE `customers_files` (
  `id` int(11) NOT NULL,
  `bookings_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `file_path` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_files`
--

INSERT INTO `customers_files` (`id`, `bookings_id`, `users_id`, `customers_id`, `file_path`, `created_at`, `updated_at`) VALUES
(9, 2, 2, 6, '../uploaded_images/f8ae4accdd8fee7d02bab35b65955bee.jpg', '2019-04-27 10:59:50', '2019-04-27 10:59:50'),
(10, 2, 2, 6, '../uploaded_images/84d223029998b4c0e2f425b58b3fb317.jpg', '2019-04-27 12:41:01', '2019-04-27 12:41:01'),
(11, 25, 2, 28, '../uploaded_images/57934cebe0ab82b70d0cb2a9341524bd.jpg', '2019-04-27 12:41:37', '2019-04-27 12:41:37'),
(12, 2, 2, 6, '../uploaded_images/45d31f3d9438a6aaf208864ed11d619a.jpg', '2019-04-27 12:42:13', '2019-04-27 12:42:13'),
(13, 2, 2, 6, '../uploaded_images/bc48c9c5048ed589cf25ca7d50481f31.jpg', '2019-07-11 18:56:27', '2019-07-11 18:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiry`
--

CREATE TABLE `customer_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_enquiry`
--

INSERT INTO `customer_enquiry` (`id`, `name`, `email`, `msg`, `Created_at`) VALUES
(2, 'wisdom', 'admin@gmail.com', 'Hayo mathata', '2019-04-12 22:01:34'),
(3, 'wisdom', 'admin@gmail.com', 'Hayo mathata', '2019-04-12 22:03:52'),
(4, 'bright Addo', 'bright@gmail.com', 'Hi There this is a test transmission', '2019-04-15 08:18:22'),
(5, 'kingsley', 'king@yahoomail.com', 'Admin sends a not', '2019-04-15 08:21:49'),
(6, 'kate', 'katty@gmail.com', 'Hi...there', '2019-04-17 03:45:30'),
(7, 'Wisdom', 'mymail@gmail.com', 'Hi There...\r\n', '2019-04-29 16:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `review_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customers_id`, `review_body`, `created_at`) VALUES
(4, 6, 'I like the pictures', '2019-04-27 18:25:22'),
(5, 6, 'Everything was cool', '2019-07-15 13:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-04-26 10:59:41', '2019-04-26 10:59:41'),
(2, 'User', '2019-04-26 10:59:41', '2019-04-26 10:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `bookings_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `payment_type` enum('momo','vodacash','stripepay') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `transaction_code` varchar(100) NOT NULL,
  `approvedby` int(11) DEFAULT NULL,
  `amount` decimal(18,3) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `bookings_id`, `customers_id`, `payment_type`, `email`, `transaction_code`, `approvedby`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 6, 'momo', 'null', '00092988449', 2, '120.000', 'approved', '2019-04-13 22:21:07', '2019-04-13 22:21:07'),
(2, 5, 6, 'momo', NULL, '00092988449', 2, '120.000', 'approved', '2019-04-13 22:22:26', '2019-04-13 22:22:26'),
(4, 19, 28, 'momo', '-', '00299394040', 2, '5000.000', 'approved', '2019-04-22 02:49:49', '2019-04-22 02:49:49'),
(5, 21, 28, 'vodacash', '-', '00299394040', 2, '3000.000', 'approved', '2019-04-22 02:55:33', '2019-04-22 02:55:33'),
(6, 23, 28, 'vodacash', '-', '00299394040', 6, '3000.000', 'pending', '2019-04-22 02:57:09', '2019-04-22 02:57:09'),
(7, 25, 28, 'vodacash', '-', '00299394040', 2, '3000.000', 'approved', '2019-04-22 02:58:45', '2019-04-22 02:58:45'),
(8, 27, 28, 'vodacash', '-', '00299394040', 2, '3000.000', 'approved', '2019-04-22 16:23:39', '2019-04-22 16:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Abigail', 'Abenache', 'mymail@domain.com', 'fcea920f7412b5da7be0cf42b8c93759', '029129202', 'Female', '2019-04-11 01:59:55', '2019-04-11 01:59:55'),
(2, 'gordons', 'comedian', 'gordon@gmail.com', '25f9e794323b453885f5181f1b624d0b', '020292092029', 'male', '2019-04-17 15:57:40', '2019-04-17 15:57:40'),
(3, 'dominics', 'buabeng', 'dominic@outlook.com', '202cb962ac59075b964b07152d234b70', '0242920920291', 'male', '2019-04-17 16:15:45', '2019-04-17 16:15:45'),
(5, 'jeffery', 'Amoah', 'jeffy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0299300303', 'male', '2019-04-26 11:35:23', '2019-04-26 11:35:23'),
(6, 'dbp', 'server', 'info@dbp.com', '12', '000000000000000', 'custom', '2019-04-27 10:16:24', '2019-04-27 10:16:24'),
(7, 'gordons', 'comedian', 'gordon@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '020292092029', 'male', '2019-04-17 15:57:40', '2019-04-17 15:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `roles_id`, `users_id`) VALUES
(1, 2, 5),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id` (`customers_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_files`
--
ALTER TABLE `customers_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_id` (`bookings_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `customers_id` (`customers_id`);

--
-- Indexes for table `customer_enquiry`
--
ALTER TABLE `customer_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id` (`customers_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id` (`customers_id`),
  ADD KEY `bookings_id` (`bookings_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id` (`roles_id`),
  ADD KEY `users_id` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers_files`
--
ALTER TABLE `customers_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_enquiry`
--
ALTER TABLE `customer_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `customers_files`
--
ALTER TABLE `customers_files`
  ADD CONSTRAINT `customers_files_ibfk_1` FOREIGN KEY (`bookings_id`) REFERENCES `bookings` (`id`),
  ADD CONSTRAINT `customers_files_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `customers_files_ibfk_3` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`bookings_id`) REFERENCES `bookings` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`Id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
