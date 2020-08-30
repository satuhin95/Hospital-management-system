-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_datetime` datetime NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `ip`, `browser`, `activity_datetime`, `session_id`, `activity`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 14:59:01', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Demo', NULL, NULL),
(2, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 15:04:49', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Demo', NULL, NULL),
(3, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 15:07:45', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'User: Update', NULL, NULL),
(4, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:26:38', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Insert', NULL, NULL),
(5, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:29:08', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Insert', NULL, NULL),
(6, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:33:24', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Insert', NULL, NULL),
(7, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:35:05', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Insert', NULL, NULL),
(8, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:48:13', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Update', NULL, NULL),
(9, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:55:42', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Departments: Insert', NULL, NULL),
(10, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 16:58:53', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Department: Delete', NULL, NULL),
(11, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 22:20:39', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Doctor: Insert', NULL, NULL),
(12, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 22:25:10', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Doctor: Insert', NULL, NULL),
(13, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-07 22:28:25', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Doctor: Insert', NULL, NULL),
(14, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 00:44:44', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Doctor: Update', NULL, NULL),
(15, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 00:45:14', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Doctor: Update', NULL, NULL),
(16, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 01:22:24', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Category: Insert', NULL, NULL),
(17, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 01:22:35', 'gn4seJqfsWREsoj3aqHqkeAMEEMMYhp8ZprRR3C9', 'Category: Insert', NULL, NULL),
(18, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 08:00:14', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'User: Login', NULL, NULL),
(19, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 08:20:19', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Update', NULL, NULL),
(20, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 08:23:08', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Insert', NULL, NULL),
(21, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 08:24:51', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Delete', NULL, NULL),
(22, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:35:41', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Insert', NULL, NULL),
(23, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:35:55', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Insert', NULL, NULL),
(24, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:36:09', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Category: Insert', NULL, NULL),
(25, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:37:44', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Insert', NULL, NULL),
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:37:56', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Insert', NULL, NULL),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:38:07', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Insert', NULL, NULL),
(28, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:43:56', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Update', NULL, NULL),
(29, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:45:17', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Insert', NULL, NULL),
(30, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 10:45:24', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Bedtype: Delete', NULL, NULL),
(31, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:50:59', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Insert', NULL, NULL),
(32, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:51:29', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Insert', NULL, NULL),
(33, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:51:41', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Insert', NULL, NULL),
(34, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:51:53', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Insert', NULL, NULL),
(35, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:53:54', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Update', NULL, NULL),
(36, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:54:04', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Insert', NULL, NULL),
(37, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 11:55:11', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'Ward: Delete', NULL, NULL),
(38, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 12:07:28', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'User: Login', NULL, NULL),
(39, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 12:07:40', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'User: Logout', NULL, NULL),
(40, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 12:08:05', 'BK2u36NlUHvRbdDJOO7WU0UUPTYtMJCA1O1X3XY6', 'User: Login', NULL, NULL),
(41, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 14:38:23', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'User: Login', NULL, NULL),
(42, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 14:38:40', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'User: Logout', NULL, NULL),
(43, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 14:38:52', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'User: Login', NULL, NULL),
(44, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 14:39:51', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'User: Logout', NULL, NULL),
(45, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 14:40:08', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'User: Login', NULL, NULL),
(46, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 15:45:31', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Bed: Insert', NULL, NULL),
(47, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 15:54:26', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Bed: Insert', NULL, NULL),
(48, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 16:12:01', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Bed: Update', NULL, NULL),
(49, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:44:21', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Bedtype: Insert', NULL, NULL),
(50, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:44:36', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Bedtype: Delete', NULL, NULL),
(51, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:45:09', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(52, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:45:27', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(53, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:45:53', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(54, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:46:29', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(55, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:46:41', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(56, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:47:05', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Insert', NULL, NULL),
(57, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 17:51:08', 'x1pn2fgvn1ey3e51fEVm3rGapQSuWsrlcvlLXh3J', 'Test: Update', NULL, NULL),
(58, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 21:05:23', '3a6FFHMhhAlzgXB0oev0n9sycWvFJvW3fVZvEcEX', 'User: Login', NULL, NULL),
(59, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 21:06:44', '3a6FFHMhhAlzgXB0oev0n9sycWvFJvW3fVZvEcEX', 'User: Insert', NULL, NULL),
(60, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 21:06:57', '3a6FFHMhhAlzgXB0oev0n9sycWvFJvW3fVZvEcEX', 'User: Logout', NULL, NULL),
(61, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-08 21:07:02', '3a6FFHMhhAlzgXB0oev0n9sycWvFJvW3fVZvEcEX', 'User: Login', NULL, NULL),
(62, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 08:30:20', 'xv71E8TvcpC9V0q605qoDt5TSPxdlzpSByOeWbjS', 'User: Login', NULL, NULL),
(63, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 10:00:36', 'xv71E8TvcpC9V0q605qoDt5TSPxdlzpSByOeWbjS', 'User: Logout', NULL, NULL),
(64, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 10:00:48', 'xv71E8TvcpC9V0q605qoDt5TSPxdlzpSByOeWbjS', 'User: Login', NULL, NULL),
(65, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 10:03:31', 'xv71E8TvcpC9V0q605qoDt5TSPxdlzpSByOeWbjS', 'User: Logout', NULL, NULL),
(66, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 11:17:02', 'xv71E8TvcpC9V0q605qoDt5TSPxdlzpSByOeWbjS', 'User: Login', NULL, NULL),
(67, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 15:13:31', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'User: Login', NULL, NULL),
(68, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:42:33', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Insert', NULL, NULL),
(69, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:52:03', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Update', NULL, NULL),
(70, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:52:07', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Delete', NULL, NULL),
(71, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:53:10', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Insert', NULL, NULL),
(72, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:53:19', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Delete', NULL, NULL),
(73, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 16:54:23', '3KNoIjSwBRaROuqdBcVF6F7eCxRvfnaqkXjFFmi6', 'Patient: Insert', NULL, NULL),
(74, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 19:12:46', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'User: Login', NULL, NULL),
(75, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 19:24:59', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'PatientTeest: Insert', NULL, NULL),
(76, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 19:27:59', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'PatientTeest: Insert', NULL, NULL),
(77, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 20:39:13', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'User: Logout', NULL, NULL),
(78, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 20:39:43', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'User: Login', NULL, NULL),
(79, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 21:34:42', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'Pescription: Insert', NULL, NULL),
(80, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 21:37:16', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'Patient: Insert', NULL, NULL),
(81, 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-09 21:37:53', 'lh8h5pDZRGfaTknn4xlnNCCmKZGJ6rkaYf5kFdZi', 'Pescription: Insert', NULL, NULL),
(82, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 01:57:58', '14nREiiV35EUMuRCwI75sam3QgOFXavGdKFoNoPI', 'User: Login', NULL, NULL),
(83, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 02:13:13', '14nREiiV35EUMuRCwI75sam3QgOFXavGdKFoNoPI', 'Pescription Details: Insert', NULL, NULL),
(84, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 02:13:32', '14nREiiV35EUMuRCwI75sam3QgOFXavGdKFoNoPI', 'Pescription Details: Insert', NULL, NULL),
(85, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 02:13:49', '14nREiiV35EUMuRCwI75sam3QgOFXavGdKFoNoPI', 'Pescription Details: Insert', NULL, NULL),
(86, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 08:52:05', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'User: Login', NULL, NULL),
(87, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 10:32:57', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'Patient Admission: Insert', NULL, NULL),
(88, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 12:23:34', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'User: Logout', NULL, NULL),
(89, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 14:18:35', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'User: Login', NULL, NULL),
(90, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 14:24:50', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'Doctor: Insert', NULL, NULL),
(91, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 14:29:51', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'Pescription: Insert', NULL, NULL),
(92, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-10 14:32:22', 'aTezmfygXdv46GbGSqwJ4RBlLcvPkL7SoVKUtsnN', 'Pescription Details: Insert', NULL, NULL),
(93, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-12 09:55:48', 'a8NaDaXuLw9plNHrmsWjlFOu4ZOWEcOnbRRuezQA', 'User: Login', NULL, NULL),
(94, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-12 10:21:31', 'a8NaDaXuLw9plNHrmsWjlFOu4ZOWEcOnbRRuezQA', 'User: Login', NULL, NULL),
(95, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-12 10:32:26', '8GurquLkdgkRGii5ebSYbKl76hN5Xgp7oHXwow8I', 'User: Login', NULL, NULL),
(96, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-12 12:11:00', 'vU94zPXUAQxtezoxD4sl2KtALrKG9Lz6n9MyfiS2', 'User: Login', NULL, NULL),
(97, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-13 10:18:10', 'L6JFx0DQRGN562bPT7QcYSJfHMaZmRcnY7zGJfo6', 'User: Login', NULL, NULL),
(98, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 09:39:27', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(99, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 10:21:31', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Logout', NULL, NULL),
(100, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:20:08', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(101, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Safari/537.36', '2020-08-15 22:26:52', '6Tntkl0FX9yE6wsI3CawQy9M9AP2oWKJ7cMjlyoG', 'User: Login', NULL, NULL),
(102, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:29:14', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Logout', NULL, NULL),
(103, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:29:16', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(104, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:41:20', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Logout', NULL, NULL),
(105, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:41:23', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(106, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:43:43', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Logout', NULL, NULL),
(107, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:43:45', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(108, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:44:44', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Logout', NULL, NULL),
(109, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-15 22:48:42', 'U250m6jYOj3CmuI3ug6QSP7B4Z2HTCrluu4paVbL', 'User: Login', NULL, NULL),
(110, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 08:53:44', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Login', NULL, NULL),
(111, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 08:55:13', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Logout', NULL, NULL),
(112, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 08:55:14', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Login', NULL, NULL),
(113, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 09:01:41', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Login', NULL, NULL),
(114, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 09:54:17', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Logout', NULL, NULL),
(115, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 10:00:01', 'eGn7UjSXgsbNisfPLvbxleZh5rEL3uQ3FCga9do5', 'User: Login', NULL, NULL),
(116, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 18:09:36', 'ipLvXOd1mh5Oumxg7ZMNx9erVe21I1iYq9oftTP3', 'User: Login', NULL, NULL),
(117, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 19:15:04', 'ipLvXOd1mh5Oumxg7ZMNx9erVe21I1iYq9oftTP3', 'Patient Admission: Insert', NULL, NULL),
(118, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 21:37:33', 'XlUESgKKwLL4ybD2jVFZ8dJjpZlLSEDTRQGUeKR5', 'User: Login', NULL, NULL),
(119, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 22:18:33', 'XlUESgKKwLL4ybD2jVFZ8dJjpZlLSEDTRQGUeKR5', 'User: Logout', NULL, NULL),
(120, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 22:19:01', 'XlUESgKKwLL4ybD2jVFZ8dJjpZlLSEDTRQGUeKR5', 'User: Login', NULL, NULL),
(121, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-16 22:20:58', 'XlUESgKKwLL4ybD2jVFZ8dJjpZlLSEDTRQGUeKR5', 'User: Logout', NULL, NULL),
(122, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 08:47:28', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'User: Login', NULL, NULL),
(123, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 09:26:16', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'User: Logout', NULL, NULL),
(124, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 09:54:43', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'User: Login', NULL, NULL),
(125, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 11:33:05', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Insert', NULL, NULL),
(126, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 11:38:05', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Insert', NULL, NULL),
(127, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 11:58:03', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Update', NULL, NULL),
(128, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 11:58:20', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Update', NULL, NULL),
(129, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 11:58:55', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Update', NULL, NULL),
(130, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 12:01:29', 'zWao20XoohH9mCKWTpbu2R6hyIw4Nwmhgdy51HjB', 'Staff: Insert', NULL, NULL),
(131, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 19:55:46', 'f68w1L9JAhphWwDvN18YESrelPLDEQduxxYGty3d', 'User: Login', NULL, NULL),
(132, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 20:24:37', 'f68w1L9JAhphWwDvN18YESrelPLDEQduxxYGty3d', 'Config: Insert', NULL, NULL),
(133, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 20:25:05', 'f68w1L9JAhphWwDvN18YESrelPLDEQduxxYGty3d', 'Config: Insert', NULL, NULL),
(134, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-17 20:25:16', 'f68w1L9JAhphWwDvN18YESrelPLDEQduxxYGty3d', 'Config: Insert', NULL, NULL),
(135, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 10:34:52', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Login', NULL, NULL),
(136, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 10:50:24', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Logout', NULL, NULL),
(137, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 10:50:29', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Login', NULL, NULL),
(138, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 10:50:45', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Logout', NULL, NULL),
(139, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 10:59:21', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Login', NULL, NULL),
(140, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 11:04:48', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'PatientTeest: Insert', NULL, NULL),
(141, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 11:26:39', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Logout', NULL, NULL),
(142, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 12:48:28', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Login', NULL, NULL),
(143, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 12:49:12', 'Xz2MCKIDwN92uxSotmFIXkNMUpqzen45GzHStS4i', 'User: Logout', NULL, NULL),
(144, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 20:47:56', 'PPgVEGkLtD9PIjFP6OYJzkQC5XIhsug4HI4PlexV', 'User: Login', NULL, NULL),
(145, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 21:17:15', 'PPgVEGkLtD9PIjFP6OYJzkQC5XIhsug4HI4PlexV', 'Config: Update', NULL, NULL),
(146, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-23 21:19:23', 'PPgVEGkLtD9PIjFP6OYJzkQC5XIhsug4HI4PlexV', 'Config: Delete', NULL, NULL),
(147, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-24 08:50:54', '4WWV9jgYXmtJefUMwQI3LQyYJQSgdyUEgbtFgbUo', 'User: Login', NULL, NULL),
(148, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-24 19:10:12', 'WCnDUKYMV7o6mSlyN3Fjwr3g3A7fm5b4JWSa6Uuf', 'User: Login', NULL, NULL),
(149, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 12:10:21', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'User: Login', NULL, NULL),
(150, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 13:05:35', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'User: Logout', NULL, NULL),
(151, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 14:09:54', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'User: Login', NULL, NULL),
(152, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 14:10:43', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'Attendance: Insert', NULL, NULL),
(153, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 14:11:52', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'Attendance: Insert', NULL, NULL),
(154, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-25 14:12:17', 'wem2SNkNGoxRMFbLa62amPLjeavG8Z501zXmGwNH', 'Attendance: Insert', NULL, NULL),
(155, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 09:15:28', 'jYoOgBv3qa3oecrqSE2jSXaWTPD8eVMjNvFAseCt', 'User: Login', NULL, NULL),
(156, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 09:47:45', 'jYoOgBv3qa3oecrqSE2jSXaWTPD8eVMjNvFAseCt', 'Patient: Insert', NULL, NULL),
(157, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 12:10:53', 'GV4S8v7fMbr75vE6FKEmXHCdTs5nsZwtq9yUGWWn', 'User: Login', NULL, NULL),
(158, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 14:25:00', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'User: Login', NULL, NULL),
(159, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 14:25:43', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Delete', NULL, NULL),
(160, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:02:35', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(161, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:02:48', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(162, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:03:13', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(163, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:03:25', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(164, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:03:33', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(165, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 15:03:56', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Delete', NULL, NULL),
(166, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 16:08:22', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test Tcdc: Insert', NULL, NULL),
(167, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 16:09:10', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test: Update', NULL, NULL),
(168, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 16:31:56', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test Tcdc: Insert', NULL, NULL),
(169, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 16:48:54', 'wTku4gvu9aSlDdZ3Qvd1m4OtxlJahNE3TAlkQLN7', 'Test Fr: Insert', NULL, NULL),
(170, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 19:42:23', 'IIkEsKyGhOgFCF63NlvlcbuxIA3P6xZB8devyJQG', 'User: Login', NULL, NULL),
(171, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 19:49:10', 'IIkEsKyGhOgFCF63NlvlcbuxIA3P6xZB8devyJQG', 'Test Esr: Insert', NULL, NULL),
(172, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 19:54:19', 'IIkEsKyGhOgFCF63NlvlcbuxIA3P6xZB8devyJQG', 'Test Fr: Insert', NULL, NULL),
(173, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 20:01:52', 'IIkEsKyGhOgFCF63NlvlcbuxIA3P6xZB8devyJQG', 'User: Logout', NULL, NULL),
(174, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 20:02:03', 'IIkEsKyGhOgFCF63NlvlcbuxIA3P6xZB8devyJQG', 'User: Login', NULL, NULL),
(175, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 22:31:53', 'PMni0VpTLalrOpovfDB7oSCvMcwJGhFlhZEHyor3', 'User: Login', NULL, NULL),
(176, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-27 22:32:24', 'PMni0VpTLalrOpovfDB7oSCvMcwJGhFlhZEHyor3', 'User: Logout', NULL, NULL),
(177, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 11:34:29', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'User: Login', NULL, NULL),
(178, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 11:46:38', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'Bed: Insert', NULL, NULL),
(179, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 11:52:16', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'Patient Admission: Insert', NULL, NULL),
(180, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 11:55:18', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'Patient: Insert', NULL, NULL),
(181, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 11:58:00', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'Pescription Details: Insert', NULL, NULL),
(182, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0', '2020-08-29 12:26:43', 'tEPs7nMZBHcRCwgx667CqyklDDRIDvh3dmThKFUx', 'User: Logout', NULL, NULL),
(183, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0', '2020-08-30 11:51:11', '4MjbdwA0R0IjyRpTOBCylAejCGs963grCvpPTrMo', 'User: Login', NULL, NULL),
(184, 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0', '2020-08-30 11:51:44', '4MjbdwA0R0IjyRpTOBCylAejCGs963grCvpPTrMo', 'User: Logout', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `has_ot` time DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `date`, `in_time`, `out_time`, `has_ot`, `user_type`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-25', '09:00:00', '17:00:00', NULL, 3, NULL, '2020-08-25 06:45:30', NULL),
(2, 2, '2020-08-25', '09:00:00', '18:00:00', NULL, 3, NULL, '2020-08-25 06:45:30', NULL),
(3, 1, '2020-08-25', '09:00:00', '17:00:00', NULL, 3, NULL, '2020-08-25 06:51:38', NULL),
(4, 2, '2020-08-25', '09:00:00', '18:00:00', NULL, 3, NULL, '2020-08-25 06:51:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `cat_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `bed_type_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `type`, `status`, `cat_id`, `price`, `bed_type_id`, `ward_id`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 1, 100.00, 2, 1, 'Often full electric beds have more positions available', NULL, NULL),
(2, NULL, 1, 2, 80.00, 1, 1, 'Often full electric beds have more positions available', NULL, NULL),
(3, NULL, 0, 1, 200.00, 2, 3, 'Lorem ipsum is a placeholder', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bedtypes`
--

CREATE TABLE `bedtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bedtypes`
--

INSERT INTO `bedtypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Manual', NULL, NULL),
(2, 'Semi-electric', NULL, NULL),
(3, 'Full Electric', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'air conditioner', NULL, NULL),
(2, 'non air conditioner', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_attendances`
--

CREATE TABLE `config_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `week_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_attendances`
--

INSERT INTO `config_attendances` (`id`, `user_id`, `user_type`, `in_time`, `out_time`, `week_day`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '09:00:00', '17:00:00', 'Friday', NULL, NULL),
(2, 2, 3, '09:00:00', '17:00:00', 'Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', 'Provides medical care to patients who have problems with their heart or circulation.', NULL, NULL),
(2, 'Neurology:', 'A medical specialty dealing with disorders of the nervous system.', NULL, NULL),
(3, 'Gynecology', 'Investigates and treats problems relating to the female urinary tract and reproductive organs, such as Endometriosis, infertility and incontinence.', NULL, NULL),
(4, 'Gastroenterology', 'This department investigates and treats digestive and upper and lower gastrointestinal diseases.1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(11) NOT NULL,
  `fees` float NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `contact`, `address`, `gender`, `dept_id`, `fees`, `dob`, `designation`, `qualification`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lalit Joshi', 'test@example.com', '1234567890', '23, Sagar Appartment, Near Nationl Bank', '1', 1, 500, '2018-08-08', 'Physician', 'M.B.B.S, M.S.', 'public/picture/doctor/1674393297614970.jpg', NULL, NULL),
(2, 'Dr.Pooja Patel', 'Poojapatel@gmail.com', '01824489294', 'A-103, shyam gokul flats, Mahatma Road\r\nMumbai', '2', 1, 500, '2020-11-08', 'Cardiology', 'MBBS,MD', 'public/picture/doctor/1674393329654046.jpg', NULL, NULL),
(3, 'Dr.Kiran Patel', 'Kiranpatel@gmail.com', '01521231285', '456, Pragri flat, varacha road, Surat\r\nGujarat, India.', '1', 3, 1000, '1970-01-01', 'Gynaecologist', 'MBBS,MD', 'public/picture/doctor/1674384721477822.jpg', NULL, NULL),
(4, 'Dr. Mojahid', 'mojahid@gmail.com', '01824489294', 'Comilla', '1', 1, 700, '1992-03-03', 'Cardiology', 'MBBS,FCPS', 'public/picture/doctor/1674626086924923.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `esrs`
--

CREATE TABLE `esrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_test_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frs`
--

CREATE TABLE `frs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_test_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frs`
--

INSERT INTO `frs` (`id`, `patient_test_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, '7.8 mmol/L (140 mg/dL)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hbs`
--

CREATE TABLE `hbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_test_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2020_08_07_082539_create_activity_log_table', 3),
(5, '2020_08_07_100131_create_departments_table', 4),
(8, '2020_08_07_130131_create_doctors_table', 5),
(9, '2020_08_07_185745_create_categories_table', 6),
(10, '2020_08_08_022646_create_bedtypes_table', 7),
(11, '2020_08_08_044852_create_wards_table', 8),
(13, '2020_08_08_080325_create_beds_table', 9),
(14, '2020_08_08_112228_create_tests_table', 10),
(16, '2020_08_09_090622_create_patients_table', 11),
(17, '2020_08_09_113635_create_patient_tests_table', 12),
(18, '2020_08_09_144622_create_pescriptions_table', 13),
(19, '2020_08_09_162152_create_pescription_details_table', 14),
(20, '2020_08_10_030526_create_patientadmissions_table', 15),
(21, '2020_08_17_033514_create_staff_table', 16),
(22, '2020_08_17_060507_create_attendances_table', 17),
(23, '2020_08_17_060540_create_config_attendances_table', 17),
(24, '2020_08_27_090737_create_tcdcs_table', 18),
(25, '2020_08_27_103320_create_frs_table', 19),
(26, '2020_08_27_111209_create_hbs_table', 20),
(27, '2020_08_27_111235_create_esrs_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `patientadmissions`
--

CREATE TABLE `patientadmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_fee` double(8,2) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `admission_date` date NOT NULL DEFAULT current_timestamp(),
  `release_date` date DEFAULT NULL,
  `reference_doctor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientadmissions`
--

INSERT INTO `patientadmissions` (`id`, `admission_fee`, `bed_id`, `patient_id`, `admission_date`, `release_date`, `reference_doctor`, `created_at`, `updated_at`) VALUES
(1, 500.00, 1, 1, '2020-08-10', '2020-08-16', 'Dr. Roni', NULL, NULL),
(2, 100.00, 2, 2, '2020-08-16', '2020-08-17', 'Dr. Roni', NULL, NULL),
(3, 150.00, 2, 3, '2020-08-29', NULL, 'Dr. Goni', NULL, NULL),
(4, 150.00, 2, 3, '2020-08-29', NULL, 'Dr. Goni', NULL, NULL),
(5, 150.00, 2, 3, '2020-08-29', NULL, 'Dr. Goni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` tinyint(4) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `reg_date` datetime NOT NULL,
  `chief_complain` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `address`, `email`, `contact`, `gender`, `reg_date`, `chief_complain`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Mamun Ahmed', 25, 'Dhaka', 'mamun@gmail.com', '01824489294', 1, '2020-09-08 00:00:00', 'Fever', 1, NULL, NULL),
(2, 'Hasan', 26, 'Cattagram', 'hasan@gmail.com', '01521231285', 1, '2020-09-08 00:00:00', 'Fever', 1, NULL, NULL),
(3, 'Billal Hossain', 25, 'Dhaka', 'billal@gmail.com', '01679324451', 1, '1970-01-01 00:00:00', 'Fiver', 1, NULL, NULL),
(4, 'Roni Ahmend', 28, 'Chauddagram,Comilla', 'roni@gmail.com', '01521231252', 1, '1970-01-01 00:00:00', 'Fiver', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_tests`
--

CREATE TABLE `patient_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_tests`
--

INSERT INTO `patient_tests` (`id`, `patient_id`, `test_id`, `test_date`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-08-09', NULL, NULL),
(2, 1, 1, '2020-08-09', NULL, NULL),
(3, 1, 1, '2020-08-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pescriptions`
--

CREATE TABLE `pescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `advice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pescriptions`
--

INSERT INTO `pescriptions` (`id`, `patient_id`, `doctor_id`, `date`, `weight`, `height`, `bp`, `history`, `advice`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-08-09 21:34:41', '55', '5.5', '110:80', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text', NULL, NULL),
(2, 2, 1, '2020-08-09 21:37:53', '60', '5.6', '110:80', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', NULL, NULL),
(3, 1, 4, '2020-08-10 14:29:51', '55', '5.5', '110:80', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pescription_details`
--

CREATE TABLE `pescription_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pescription_id` int(11) NOT NULL,
  `medicine` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pescription_details`
--

INSERT INTO `pescription_details` (`id`, `pescription_id`, `medicine`, `dose`, `suggestion`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem', 'Lorem', 'Lorem', NULL, NULL),
(2, 1, 'ff', 'ff', 'ghfg', NULL, NULL),
(3, 1, 'rr', 'fg', 'asfr', NULL, NULL),
(4, 3, 'Napa', '3 in Day', 'After eat', NULL, NULL),
(5, 2, 'Nap', '3 times', 'Lorem ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `education` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `address`, `contact`, `dob`, `type`, `gender`, `education`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Babu', 'babu@gmail.com', 'Dhaka', '01679324451', '2020-08-18', 1, 1, 'Ssc', 'public/picture/staff/1675249461997603.jpg', NULL, NULL),
(2, 'Riya', 'riya@gmail.com', 'Rongpur', '01943045686', '2020-08-19', 4, 2, 'Ssc', 'public/picture/staff/1675251050375951.jpg', '2020-08-17 05:38:05', NULL),
(3, 'Taniya', 'taniya@gmail.com', 'Comilla', '01679324451', '2020-08-17', 3, 2, 'Hsc', 'public/picture/staff/1675251248857213.jpg', '2020-08-17 06:01:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tcdcs`
--

CREATE TABLE `tcdcs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_test_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tcdcs`
--

INSERT INTO `tcdcs` (`id`, `patient_test_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, '4000-12000/cu.mm', NULL, NULL),
(2, 3, '4000-13000/cu.mm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'TC', 180.00, NULL, NULL),
(2, 'Blood Sugar (F/R)', 180.00, NULL, NULL),
(3, 'HB%', 200.00, NULL, NULL),
(4, 'ESR', 150.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `joining_date` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `address`, `gender`, `joining_date`, `email_verified_at`, `type`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saif', 'saif@gmail.com', '01824489294', 'Saif', 1, '2020-08-06', NULL, 1, 'public/picture/users/1674339839740752.jpg', 'saif', NULL, NULL, NULL),
(2, 'Hasan', 'hasan@gmail.com', '01824489294', 'Hasan', 1, '2020-08-06', NULL, 1, 'public/picture/users/1674340232932031.png', 'hasan', NULL, NULL, NULL),
(4, 'Admin', 'admin@gmail.com', '01521231285', 'Cantonment,Comilla', 1, '2020-08-08', NULL, 1, 'public/picture/users/1674470178973359.jpg', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pediatrics', NULL, NULL),
(2, 'Maternity', NULL, NULL),
(3, 'Geriatrics', NULL, NULL),
(4, 'Psychiatric', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedtypes`
--
ALTER TABLE `bedtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_attendances`
--
ALTER TABLE `config_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esrs`
--
ALTER TABLE `esrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frs`
--
ALTER TABLE `frs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hbs`
--
ALTER TABLE `hbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientadmissions`
--
ALTER TABLE `patientadmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_tests`
--
ALTER TABLE `patient_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pescriptions`
--
ALTER TABLE `pescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pescription_details`
--
ALTER TABLE `pescription_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tcdcs`
--
ALTER TABLE `tcdcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bedtypes`
--
ALTER TABLE `bedtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `config_attendances`
--
ALTER TABLE `config_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `esrs`
--
ALTER TABLE `esrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frs`
--
ALTER TABLE `frs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hbs`
--
ALTER TABLE `hbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `patientadmissions`
--
ALTER TABLE `patientadmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_tests`
--
ALTER TABLE `patient_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pescriptions`
--
ALTER TABLE `pescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pescription_details`
--
ALTER TABLE `pescription_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tcdcs`
--
ALTER TABLE `tcdcs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
