-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 03:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'David Henry', 'davehenzy@gmail.com', '081471962169', 'account suspended', 'my account has been suspended  i can\'t login into my account I will be glad if that can be rectified', '2024-04-04'),
(2, 'Blaine Oneal', 'xasoja@mailinator.com', '08147196216', 'Righteous Nation', 'fffffffffffffffff', '2024-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `enquires`
--

CREATE TABLE `enquires` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT 'pending' COMMENT 'pending, completed,canceled ',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquires`
--

INSERT INTO `enquires` (`id`, `name`, `email`, `phone`, `service`, `message`, `status`, `created_at`) VALUES
(1, 'David Henry', 'davehenzy@gmail.com', '081471962169', 'davehenzy', 'this is a test', 'canceled', '2024-03-25'),
(2, 'David Henry', 'davehenzy1@gmail.com', '08147192169', 'davehenzy', 'this is my message you oh oh', 'completed', '2024-03-25'),
(3, 'Ajibulu David Henry', 'Davehenzyfffff@gmail.com', '08147192169', 'Avram Wyatt', 'ffffffffffffffffffffffffffffffffff', 'completed', '2024-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `receiver_id`, `message`, `sent_at`) VALUES
(1, 1, 1, 'hello ', '2024-04-03 15:50:45'),
(2, 1, 1, 'hello ', '2024-04-03 15:51:03'),
(3, 1, 1, 'how are you \r\n', '2024-04-03 15:53:44'),
(6, 1, 1, 'hello \r\n', '2024-04-04 15:51:30'),
(7, 1, 1, 'how are you \r\n', '2024-04-04 15:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `vat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `amount`, `vat`) VALUES
(1, 'LBG Formation', '£39.00', '£10'),
(2, 'LLP Formation', '£49.99', '£10'),
(3, 'Charity Company', '£89.89', '£10'),
(4, 'CIC Registration', '£145.00', '£10'),
(5, 'Charity Registration', '£450.00', '£10'),
(6, 'Digital', '£12.89', '£10'),
(7, 'Privacy', '£64.89', '£10'),
(8, 'Inclusive Package', '£225.89', '£10');

-- --------------------------------------------------------

--
-- Table structure for table `serivices`
--

CREATE TABLE `serivices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `small_description` varchar(255) DEFAULT NULL,
  `long_description` mediumtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'visible=0, 1=hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serivices`
--

INSERT INTO `serivices` (`id`, `name`, `slug`, `small_description`, `long_description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`) VALUES
(12, 'company formation', 'company-formation', 'The Directors or members of a trading company', '<span style=\"color: rgb(84, 84, 84); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">The Directors or members of a trading company, or an LLP may decide to change the name of their limited company by shares, limited company by guarantee or LLP for a variety of reasons. If the name is too similar to an existing company they may be advised by the registrar to change the name, Also, the nature of their business may c</span>', 'assets/uploads/services/1711209886.jpg', 'Laboris dolore totam', 'Itaque vel explicabo', '', 0),
(13, 'Avram Wyatt', 'avram-wyatt', 'Do veritatis hic qui', 'At et qui est molest', 'assets/uploads/services/1711216282.png', 'Perspiciatis eiusmo', 'Illo omnis laboris m', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `small_description` text DEFAULT NULL,
  `meta_description` varchar(1000) DEFAULT NULL,
  `meta_keyword` varchar(1000) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `phone1` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `slug`, `small_description`, `meta_description`, `meta_keyword`, `email1`, `email2`, `phone1`, `phone2`, `address`) VALUES
(1, 'Prime Formations Ltd', 'http://primeformations.co.uk', 'Prime formations Limited offers a new perspective to the business of incorporating Companies in the UK by offering a distinctive and progressive business service.', 'info@primeformations.co.uk', 'Prime Formations Website - The Best UK Online Company Formation Agent, Company Registration, Company setup, VAT Registration, Confirmation Statements', 'info@primeformations.co.uk', 'Company No: 07066200', '0333 533 0265', 'VAT No: 356106021', 'NewSpring House, 3 Worcester Avenue, Old Swan, Liverpool L13 9AZ');

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=shown, 1=hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_medias`
--

INSERT INTO `social_medias` (`id`, `name`, `url`, `status`) VALUES
(1, 'Facebook', 'https://www.facebook.com/primeformations', 0),
(3, 'Linkedin', 'https://www.linkedin.com/company/prime-formations-limited', 0),
(4, 'Twitter', 'https://twitter.com/PrimeFormation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_number` varchar(50) NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `stripe_checkout_session_id` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `houseNumber` varchar(200) NOT NULL,
  `street` varchar(200) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `county` varchar(200) NOT NULL,
  `postCode` varchar(2000) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_ban` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unban,1=ban',
  `role` varchar(100) NOT NULL COMMENT 'admin,user,staff',
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `organisation`, `title`, `firstname`, `lastname`, `houseNumber`, `street`, `locality`, `town`, `county`, `postCode`, `Country`, `phone`, `email`, `password`, `is_ban`, `role`, `created_at`) VALUES
(1, 'David Henry', '', '', '', '', '', '', '0', '0', '0', '0', '0', '081471962169', 'davehenzy@gmail.com', '$2y$10$VgMX66phUeD0dXPa5tMeTOObc9e9nbopa/iSp/fYgw/jm4RSxXohi', 0, 'admin', '2024-03-05'),
(2, 'Kirestin Bishop', '', '', '', '', '', '', '0', '0', '0', '0', '0', '+1 (465) 845-2537', 'topo@mailinator.com', '333333333333333333', 0, 'admin', '2024-03-05'),
(4, 'Heidi Knight', '', '', '', '', '', '', '0', '0', '0', '0', '0', '+1 (812) 478-9419', 'lewexudel@mailinator.com', '$2y$10$D33oHPzBkWxF5GL79.4u5ejee3IoAP5XwZ4iD2c./NLePYVQHMvQ.', 0, 'staff', '2024-03-06'),
(5, 'Grady Byers', '', '', '', '', '', '', '0', '0', '0', '0', '0', '+1 (134) 848-8198', 'voma@mailinator.com', '$2y$10$DdoLZHkOE0AwcpSuVDU9FO.gxkHcPW6BCvm8aJwGxp4dnR4850wUm', 0, 'admin', '2024-03-27'),
(6, 'Micah Wynn', '', '', '', '', '', '', '0', '0', '0', '0', '0', '+1 (333) 799-2026', 'borywixuh@mailinator.com', 'Pa$$w0rd!', 0, 'staff', '2024-03-27'),
(7, 'Tatyana Kirk', '', '', '', '', '', '', '0', '0', '0', '0', '0', '+181-1625', 'wokifadddpug@mailinator.com', '$2y$10$qR7Dc09N.2efehtRRt36TeGlXSfmziKDl4TtmJdoIrENjUygklKTS', 0, 'staff', '2024-03-27'),
(8, 'akinola faith', '', 'mrs', 'david', 'faith', '1234', '2i4k', '3', '3', '3', '3', '3', '09859857', 'faithdavis@gmail.com', '$2y$10$BJisOpWAN05fVwOsdpcrIeURrJgJ/QBiDGlGR2RogU4DA1QHAMIfC', 0, 'staff', '2024-03-31'),
(9, 'faith', 'davehenzy tech', 'mrs', 'faith', 'ajibulu', '2334', 'lekki', 'imobido', 'eleko', '454', '22837', 'nigeria', '08147192169', 'faithdavis@gmail.com', '1234567890', 0, '', '2024-03-31'),
(10, 'faith', 'davehenzy tech', 'mrs', 'faith', 'ajibulu', '2334', 'lekki', 'imobido', 'eleko', '454', '22837', 'nigeria', '08147192169', 'faithdavis@gmail.com', '1234567890', 0, '', '2024-03-31'),
(11, '', '', 'Mr', 'David', 'Henry', '561', 'Provident enim repe', 'Awka North', 'Kogi', 'kogi', '260101', 'NIGERIA', '08147196216', 'awele@gmail.com', '', 0, '', '2024-03-31'),
(12, '', '', '', 'David', 'Henry', '561', 'Provident enim repe', 'Id aut sunt invento', 'Kogi', 'kogi', '260101', 'NIGERIA', '08147196216', 'davehenzy@gmail.com', '1234567890', 0, 'staff', '2024-03-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquires`
--
ALTER TABLE `enquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serivices`
--
ALTER TABLE `serivices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquires`
--
ALTER TABLE `enquires`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `serivices`
--
ALTER TABLE `serivices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
