-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 06:30 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ssbc_digital_tasks_board_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `user_creator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_assigned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_type` int(11) NOT NULL,
  `brew_number` int(11) DEFAULT NULL,
  `tank_base` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tank_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `delayable` tinyint(1) NOT NULL,
  `completed` enum('incomplete','complete') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `created_at`, `updated_at`, `date`, `user_creator`, `user_assigned`, `task_type`, `brew_number`, `tank_base`, `tank_alt`, `description`, `delayable`, `completed`) VALUES
(1, '2018-10-29 22:05:31', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 1, 1811, 'FV3', '', 'Helles / Helles', 0, 'incomplete'),
(2, '2018-10-29 22:10:52', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 2, 0, 'FV3', '', '(sani)', 0, 'incomplete'),
(3, '2018-10-29 22:10:52', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 3, 1792, 'FV2', 'casks', '', 0, 'incomplete'),
(4, '2018-10-29 22:10:52', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 4, 1792, 'FV2', '', '(2)', 0, 'incomplete'),
(5, '2018-10-29 22:10:52', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 5, 1797, 'FV1', '', '', 0, 'incomplete'),
(6, '2018-10-29 22:10:52', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 6, 1797, 'FVA', '', '', 0, 'incomplete'),
(8, '2018-10-29 22:23:41', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Walton Order', 1, ''),
(9, '2018-10-29 22:23:41', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'SVM Order', 0, 'incomplete'),
(10, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 3, 1792, 'FV2', 'B12', '', 0, 'incomplete'),
(11, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 2, 0, 'FV4', '', '(rinse)', 0, 'incomplete'),
(12, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 7, 1812, '', '', 'prep 1812', 0, 'incomplete'),
(13, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'SVM Pickup', 0, 'incomplete'),
(14, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Walton order', 0, 'incomplete'),
(15, '2018-10-29 22:26:07', '2018-11-19 00:20:20', '2018-10-30', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Inventory', 0, 'incomplete'),
(16, '2018-10-29 22:29:04', '2018-11-19 00:20:20', '2018-10-31', 'coffeepostal', 'shannon.vincent', 1, 1812, 'FV4', '', 'Hazy IPA', 0, 'incomplete'),
(17, '2018-10-29 22:29:04', '2018-11-19 00:20:20', '2018-10-31', 'coffeepostal', 'shannon.vincent', 2, 0, 'FV4', '', '', 0, 'incomplete'),
(18, '2018-10-29 22:29:04', '2018-11-19 00:20:20', '2018-10-31', 'coffeepostal', 'shannon.vincent', 3, 0, 'bbl kegs', 'B7', '', 0, 'incomplete'),
(19, '2018-10-29 22:29:04', '2018-11-19 00:20:20', '2018-10-31', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'End-of-Month Inventory', 0, 'incomplete'),
(20, '2018-10-29 22:29:04', '2018-11-19 00:20:20', '2018-10-31', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Russ\'s Order', 0, 'incomplete'),
(26, '2018-10-29 22:36:55', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 2, 0, 'B7', '', '', 0, 'incomplete'),
(31, '2018-10-29 22:38:41', '2018-11-19 00:20:20', '2018-11-03', 'coffeepostal', 'shannon.vincent', 2, 0, 'B12', '', '', 0, 'incomplete'),
(32, '2018-10-29 22:38:41', '2018-11-19 00:20:20', '2018-11-03', 'coffeepostal', 'shannon.vincent', 6, 0, 'FV1', '', '', 0, 'incomplete'),
(33, '2018-10-29 22:38:41', '2018-11-19 00:20:20', '2018-11-03', 'coffeepostal', 'shannon.vincent', 2, 0, 'Kettle', '', '', 0, 'incomplete'),
(42, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Russ order', 0, 'incomplete'),
(43, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Belgian Brett on (in place of Saison?)', 0, 'incomplete'),
(44, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 3, 0, 'FV2', 'B12', '', 0, 'incomplete'),
(45, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 3, 0, 'FV2', 'casks', '(2)', 0, 'incomplete'),
(46, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 2, 0, 'B9', '', '', 0, 'incomplete'),
(47, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 4, 0, 'FVA', '', '(dump)', 0, 'incomplete'),
(48, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 6, 0, 'FV3', '', 'step down to 50F (if bubbling)', 0, 'incomplete'),
(49, '2018-11-04 02:10:59', '2018-11-19 00:20:20', '2018-11-01', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'kill B9', 0, 'incomplete'),
(50, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Scrub floors in FV room', 0, 'incomplete'),
(51, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 2, 0, '', '', 'Kettle', 1, ''),
(52, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'SVM pickup', 1, ''),
(53, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 3, 0, 'FVB', 'B9', '', 0, 'incomplete'),
(54, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 2, 0, 'FV2', '', '', 1, ''),
(56, '2018-11-04 02:13:16', '2018-11-19 00:20:20', '2018-11-02', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Kill B7', 0, 'incomplete'),
(57, '2018-11-04 02:15:16', '2018-11-19 00:20:20', '2018-11-05', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Retail Availability', 0, 'incomplete'),
(58, '2018-11-04 02:15:16', '2018-11-19 00:20:20', '2018-11-05', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Russ availability', 0, 'incomplete'),
(59, '2018-11-04 02:15:16', '2018-11-19 00:20:20', '2018-11-05', 'coffeepostal', 'shannon.vincent', 2, 0, 'Kegs', '', '', 0, 'incomplete'),
(60, '2018-11-04 02:15:16', '2018-11-19 00:20:20', '2018-11-05', 'coffeepostal', 'shannon.vincent', 2, 0, 'B11', '', '', 0, 'incomplete'),
(61, '2018-11-04 02:15:16', '2018-11-19 00:20:20', '2018-11-05', 'coffeepostal', 'shannon.vincent', 5, 0, 'FV4', '', '(DH + Cap if @ 3P or lower)', 0, 'incomplete'),
(67, '2018-11-04 02:18:01', '2018-11-19 00:20:20', '2018-11-06', 'coffeepostal', 'shannon.vincent', 7, 1813, '', '', 'prep 1813', 0, 'incomplete'),
(68, '2018-11-04 02:18:01', '2018-11-19 00:20:20', '2018-11-06', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Casks to Cold Room', 0, 'incomplete'),
(69, '2018-11-04 02:18:01', '2018-11-19 00:20:20', '2018-11-06', 'coffeepostal', 'shannon.vincent', 2, 0, 'FV2', '', '', 0, 'incomplete'),
(70, '2018-11-04 02:18:01', '2018-11-19 00:20:20', '2018-11-06', 'coffeepostal', 'shannon.vincent', 4, 0, 'FVB', '', '(dump)', 0, 'incomplete'),
(71, '2018-11-04 02:18:01', '2018-11-19 00:20:20', '2018-11-06', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Walton Order', 0, 'incomplete'),
(72, '2018-11-04 02:19:42', '2018-11-19 00:20:20', '2018-11-07', 'coffeepostal', 'shannon.vincent', 1, 1813, 'FV2', '', 'Pale', 0, 'incomplete'),
(73, '2018-11-04 02:19:42', '2018-11-19 00:20:20', '2018-11-07', 'coffeepostal', 'shannon.vincent', 3, 0, 'FVB', 'B15', '', 0, 'incomplete'),
(74, '2018-11-04 02:19:42', '2018-11-19 00:20:20', '2018-11-07', 'coffeepostal', 'shannon.vincent', 5, 0, 'FV3', '', '', 0, 'incomplete'),
(75, '2018-11-04 02:19:42', '2018-11-19 00:20:20', '2018-11-07', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'kill B15', 0, 'incomplete'),
(76, '2018-11-04 02:19:42', '2018-11-19 00:20:20', '2018-11-07', 'coffeepostal', 'shannon.vincent', 2, 0, '', '', 'B15', 0, 'incomplete'),
(77, '2018-11-04 04:34:29', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Retail Availability', 0, 'incomplete'),
(78, '2018-11-04 04:34:29', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'Russ Availability', 0, 'incomplete'),
(79, '2018-11-04 04:34:29', '2018-11-19 00:20:20', '2018-10-29', 'coffeepostal', 'shannon.vincent', 7, 0, '', '', 'prep 1811', 0, 'incomplete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
