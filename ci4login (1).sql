-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 03:16 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_tulis`
--

CREATE TABLE `alat_tulis` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `stokAwal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_tulis`
--

INSERT INTO `alat_tulis` (`id`, `item`, `slug`, `stokAwal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kertas A4 70 gram', 'kertas_a4_70_gram', 10, '2021-06-22 02:56:31', '2021-06-22 02:56:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 18),
(1, 21),
(1, 22),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'derago117@gmail.com', 2, '2021-06-11 08:11:09', 1),
(2, '::1', 'Dera', NULL, '2021-06-11 08:20:59', 0),
(3, '::1', 'Dera', NULL, '2021-06-11 08:21:11', 0),
(4, '::1', 'Dera', NULL, '2021-06-11 08:21:29', 0),
(5, '::1', 'Dera', NULL, '2021-06-11 08:21:36', 0),
(6, '::1', 'derago117@gmail.com', 2, '2021-06-11 08:21:45', 1),
(7, '::1', 'derago117@gmail.com', 2, '2021-06-11 08:42:36', 1),
(8, '::1', 'Alvino', NULL, '2021-06-11 08:42:52', 0),
(9, '::1', 'derago118@gmail.com', 3, '2021-06-11 08:43:04', 1),
(10, '::1', 'derago117@gmail.com', 2, '2021-06-11 08:54:06', 1),
(11, '::1', 'derago118@gmail.com', 3, '2021-06-11 08:54:22', 1),
(12, '::1', 'derago117@gmail.com', 2, '2021-06-11 09:05:09', 1),
(13, '::1', 'derago118@gmail.com', 3, '2021-06-11 09:19:35', 1),
(14, '::1', 'derago117@gmail.com', 2, '2021-06-11 09:19:51', 1),
(15, '::1', 'derago117@gmail.com', 2, '2021-06-12 09:15:50', 1),
(16, '::1', 'derago118@gmail.com', 3, '2021-06-12 09:39:13', 1),
(17, '::1', 'derago117@gmail.com', 2, '2021-06-12 09:39:41', 1),
(18, '::1', 'derago118@gmail.com', 3, '2021-06-12 20:25:40', 1),
(19, '::1', 'derago117@gmail.com', 2, '2021-06-12 20:32:33', 1),
(20, '::1', 'derago118@gmail.com', 3, '2021-06-12 21:31:38', 1),
(21, '::1', 'derago117@gmail.com', 2, '2021-06-12 21:40:10', 1),
(22, '::1', 'derago118@gmail.com', 3, '2021-06-12 21:41:06', 1),
(23, '::1', 'derago117@gmail.com', 2, '2021-06-12 21:42:36', 1),
(24, '::1', 'derago118@gmail.com', 3, '2021-06-12 22:05:46', 1),
(25, '::1', 'Dera', NULL, '2021-06-12 22:12:46', 0),
(26, '::1', 'Dera', NULL, '2021-06-12 22:12:54', 0),
(27, '::1', 'derago117@gmail.com', 2, '2021-06-12 22:13:08', 1),
(28, '::1', 'derago118@gmail.com', 3, '2021-06-12 22:26:14', 1),
(29, '::1', 'dillah2810@gmail.com', NULL, '2021-06-12 23:41:38', 0),
(30, '::1', 'dillah2810@gmail.com', NULL, '2021-06-12 23:41:55', 0),
(31, '::1', 'derago117@gmail.com', 2, '2021-06-12 23:52:04', 1),
(32, '::1', 'Alvino', NULL, '2021-06-12 23:54:11', 0),
(33, '::1', 'Alvino', NULL, '2021-06-12 23:54:23', 0),
(34, '::1', 'Alvino', NULL, '2021-06-12 23:54:37', 0),
(35, '::1', 'Alvino44', NULL, '2021-06-12 23:55:09', 0),
(36, '::1', 'dillah2810@gmail.com', 3, '2021-06-12 23:56:02', 1),
(37, '::1', 'Ade', NULL, '2021-06-12 23:58:04', 0),
(38, '::1', 'Alvino', NULL, '2021-06-12 23:58:17', 0),
(39, '::1', 'alvinooctaputrafadillah@outlook.com', 3, '2021-06-12 23:59:41', 1),
(40, '::1', 'alvinooctaputrafadillah@outlook.com', 3, '2021-06-13 00:01:18', 1),
(41, '::1', 'derago117@gmail.com', 2, '2021-06-13 03:54:41', 1),
(42, '::1', 'Ade', NULL, '2021-06-13 04:02:44', 0),
(43, '::1', 'derago119@gmail.com', 3, '2021-06-13 04:03:43', 1),
(44, '::1', 'derago117@gmail.com', 2, '2021-06-13 04:46:22', 1),
(45, '::1', 'derago119@gmail.com', 3, '2021-06-13 04:46:40', 1),
(46, '::1', 'derago117@gmail.com', 2, '2021-06-13 04:48:53', 1),
(47, '::1', 'derago119@gmail.com', 3, '2021-06-13 04:49:01', 1),
(48, '::1', 'derago117@gmail.com', 2, '2021-06-13 07:55:51', 1),
(49, '::1', 'Dera', NULL, '2021-06-13 08:33:25', 0),
(50, '::1', 'derago119@gmail.com', 3, '2021-06-13 08:33:39', 1),
(51, '::1', 'Dodi', NULL, '2021-06-13 08:39:19', 0),
(52, '::1', 'Dodi', NULL, '2021-06-13 08:39:52', 0),
(53, '::1', 'Alvino', NULL, '2021-06-13 08:40:22', 0),
(54, '::1', 'Alvino', NULL, '2021-06-13 08:40:30', 0),
(55, '::1', 'Alvino', NULL, '2021-06-13 08:40:37', 0),
(56, '::1', 'Alvino', NULL, '2021-06-13 08:40:47', 0),
(57, '::1', 'alvino_scientist@outlook.com', 2, '2021-06-13 08:40:55', 1),
(58, '::1', 'Dodi', NULL, '2021-06-13 08:42:04', 0),
(59, '::1', 'alvinooctaputrafadillah@outlook.com', 9, '2021-06-13 08:58:36', 1),
(60, '::1', 'derago120@gmail.com', 10, '2021-06-13 09:35:00', 1),
(61, '::1', 'Dera', NULL, '2021-06-13 20:10:39', 0),
(62, '::1', 'alvino_scientist@outlook.com', 2, '2021-06-13 20:11:02', 1),
(63, '::1', 'Dodi', NULL, '2021-06-13 20:15:09', 0),
(64, '::1', 'Dodi', NULL, '2021-06-13 20:15:17', 0),
(65, '::1', 'Dodi', NULL, '2021-06-13 20:15:30', 0),
(66, '::1', 'Dodi', NULL, '2021-06-13 20:15:53', 0),
(67, '::1', 'tester', NULL, '2021-06-13 20:16:18', 0),
(68, '::1', 'tester', NULL, '2021-06-13 20:16:26', 0),
(69, '::1', 'tester', NULL, '2021-06-13 20:16:39', 0),
(70, '::1', 'derago119@gmail.com', 11, '2021-06-13 20:19:32', 1),
(71, '::1', 'Ade', NULL, '2021-06-13 20:26:12', 0),
(72, '::1', 'Ade', NULL, '2021-06-13 20:26:36', 0),
(73, '::1', 'Ade', NULL, '2021-06-13 20:27:17', 0),
(74, '::1', 'Ade', NULL, '2021-06-13 20:27:29', 0),
(75, '::1', 'derago119@gmail.com', 11, '2021-06-13 20:27:38', 1),
(76, '::1', 'Ade', NULL, '2021-06-13 20:33:37', 0),
(77, '::1', 'derago119@gmail.com', 12, '2021-06-13 20:35:23', 1),
(78, '::1', 'Alvino', NULL, '2021-06-13 20:48:37', 0),
(79, '::1', 'alvino_scientist@outlook.com', 2, '2021-06-13 20:48:44', 1),
(80, '::1', 'derago118@gmail.com', 13, '2021-06-13 21:02:17', 1),
(81, '::1', 'derago118@gmail.com', 16, '2021-06-13 21:11:35', 1),
(82, '::1', 'derago118@gmail.com', 16, '2021-06-13 21:11:43', 1),
(83, '::1', 'derago118@gmail.com', 16, '2021-06-13 21:13:10', 1),
(84, '::1', 'derago119@gmail.com', 18, '2021-06-13 21:40:46', 1),
(85, '::1', 'derago119@gmail.com', 18, '2021-06-13 21:40:52', 1),
(86, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-13 21:41:03', 1),
(87, '::1', 'derago117@gmail.com', 19, '2021-06-13 23:54:40', 1),
(88, '::1', 'Alvino', NULL, '2021-06-13 23:55:03', 0),
(89, '::1', 'Alvino', NULL, '2021-06-13 23:55:12', 0),
(90, '::1', 'Alvino', NULL, '2021-06-13 23:55:20', 0),
(91, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-14 00:23:31', 1),
(92, '::1', 'Alvino', NULL, '2021-06-14 03:01:52', 0),
(93, '::1', 'Alvino', NULL, '2021-06-14 03:02:01', 0),
(94, '::1', 'Alvino', NULL, '2021-06-14 03:02:08', 0),
(95, '::1', 'Alvino', NULL, '2021-06-14 03:02:18', 0),
(96, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-14 03:02:27', 1),
(97, '::1', 'derago119@gmail.com', 18, '2021-06-14 03:03:14', 1),
(98, '::1', 'Ade', NULL, '2021-06-14 22:07:46', 0),
(99, '::1', 'Ade', NULL, '2021-06-14 22:07:52', 0),
(100, '::1', 'Dera', NULL, '2021-06-14 22:07:57', 0),
(101, '::1', 'derago117@gmail.com', 19, '2021-06-14 22:08:18', 1),
(102, '::1', 'Alvino', NULL, '2021-06-14 22:08:44', 0),
(103, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-14 22:08:55', 1),
(104, '::1', 'Ade', NULL, '2021-06-14 22:09:15', 0),
(105, '::1', 'derago119@gmail.com', 18, '2021-06-14 22:09:26', 1),
(106, '::1', 'Alvino', NULL, '2021-06-14 22:10:28', 0),
(107, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-14 22:10:36', 1),
(108, '::1', 'derago119@gmail.com', 18, '2021-06-14 22:11:01', 1),
(109, '::1', 'Dera', NULL, '2021-06-15 00:53:13', 0),
(110, '::1', 'Ade', NULL, '2021-06-15 00:53:22', 0),
(111, '::1', 'Ade', NULL, '2021-06-15 00:53:30', 0),
(112, '::1', 'Ade', NULL, '2021-06-15 00:53:39', 0),
(113, '::1', 'derago119@gmail.com', 18, '2021-06-15 00:54:34', 1),
(114, '::1', 'derago119@gmail.com', 18, '2021-06-15 08:37:23', 1),
(115, '::1', 'Ade', NULL, '2021-06-15 20:19:22', 0),
(116, '::1', 'derago119@gmail.com', 18, '2021-06-15 20:19:38', 1),
(117, '::1', 'Ade', NULL, '2021-06-16 04:02:25', 0),
(118, '::1', 'Ade', NULL, '2021-06-16 04:02:40', 0),
(119, '::1', 'Ade', NULL, '2021-06-16 04:02:49', 0),
(120, '::1', 'Ade', NULL, '2021-06-16 04:03:10', 0),
(121, '::1', 'Ade', NULL, '2021-06-16 04:03:17', 0),
(122, '::1', 'Ade', NULL, '2021-06-16 04:03:24', 0),
(123, '::1', 'derago119@gmail.com', 18, '2021-06-16 04:03:33', 1),
(124, '::1', 'Ade', NULL, '2021-06-16 08:35:14', 0),
(125, '::1', 'derago119@gmail.com', 18, '2021-06-16 08:35:24', 1),
(126, '::1', 'derago119@gmail.com', 18, '2021-06-16 21:20:12', 1),
(127, '::1', 'derago119@gmail.com', 18, '2021-06-16 23:42:27', 1),
(128, '::1', 'derago119@gmail.com', 18, '2021-06-17 02:10:38', 1),
(129, '::1', 'derago119@gmail.com', 18, '2021-06-17 21:56:51', 1),
(130, '::1', 'derago119@gmail.com', 18, '2021-06-19 21:07:15', 1),
(131, '::1', 'derago119@gmail.com', 18, '2021-06-20 09:23:14', 1),
(132, '::1', 'derago119@gmail.com', 18, '2021-06-20 16:21:10', 1),
(133, '::1', 'derago119@gmail.com', 18, '2021-06-20 20:47:07', 1),
(134, '::1', 'derago119@gmail.com', 18, '2021-06-21 08:10:00', 1),
(135, '::1', 'Ade', NULL, '2021-06-21 11:04:54', 0),
(136, '::1', 'derago119@gmail.com', 18, '2021-06-21 11:05:03', 1),
(137, '::1', 'derago119@gmail.com', 18, '2021-06-21 15:55:26', 1),
(138, '::1', 'derago119@gmail.com', 18, '2021-06-22 09:05:52', 1),
(139, '::1', 'derago119@gmail.com', 18, '2021-06-22 16:39:29', 1),
(140, '::1', 'derago119@gmail.com', 18, '2021-06-22 21:09:33', 1),
(141, '::1', 'derago119@gmail.com', 18, '2021-06-23 07:53:55', 1),
(142, '::1', 'Dera', NULL, '2021-06-23 08:46:32', 0),
(143, '::1', 'Dera', NULL, '2021-06-23 08:46:49', 0),
(144, '::1', 'derago119@gmail.com', 18, '2021-06-23 08:46:55', 1),
(145, '::1', 'derago119@gmail.com', 18, '2021-06-24 10:11:42', 1),
(146, '::1', 'derago119@gmail.com', 18, '2021-06-24 13:36:04', 1),
(147, '::1', 'derago119@gmail.com', 18, '2021-06-25 11:02:55', 1),
(148, '::1', 'derago119@gmail.com', 18, '2021-06-27 10:33:43', 1),
(149, '::1', 'alvino_scientist@outlook.com', 17, '2021-06-28 08:44:28', 1),
(150, '::1', 'derago119@gmail.com', 18, '2021-06-28 08:56:36', 1),
(151, '::1', 'derago119@gmail.com', 18, '2021-06-28 09:27:21', 1),
(152, '::1', 'derago119@gmail.com', 18, '2021-06-29 09:02:26', 1),
(153, '::1', 'derago119@gmail.com', 18, '2021-06-29 10:04:21', 1),
(154, '::1', 'derago119@gmail.com', 18, '2021-06-29 13:53:14', 1),
(155, '::1', 'derago119@gmail.com', 18, '2021-06-30 10:44:33', 1),
(156, '::1', 'derago119@gmail.com', 18, '2021-06-30 13:41:27', 1),
(157, '::1', 'derago119@gmail.com', 18, '2021-06-30 20:11:12', 1),
(158, '::1', 'Ade', NULL, '2021-07-01 08:20:27', 0),
(159, '::1', 'derago119@gmail.com', 18, '2021-07-01 08:20:36', 1),
(160, '::1', 'derago119@gmail.com', 18, '2021-07-01 16:50:45', 1),
(161, '::1', 'derago119@gmail.com', 18, '2021-07-03 20:33:39', 1),
(162, '::1', 'derago119@gmail.com', 18, '2021-07-04 08:19:50', 1),
(163, '::1', 'derago119@gmail.com', 18, '2021-07-05 11:03:37', 1),
(164, '::1', 'Ade', NULL, '2021-07-05 19:48:17', 0),
(165, '::1', 'derago119@gmail.com', 18, '2021-07-05 19:48:24', 1),
(166, '::1', 'derago119@gmail.com', 18, '2021-07-06 08:41:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage all users'),
(2, 'manage-profile', 'Manage user profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_atk`
--

CREATE TABLE `laporan_atk` (
  `id` int(255) NOT NULL,
  `tanggalLaporan` datetime NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id` int(11) NOT NULL,
  `grup_id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `kode_erp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id`, `grup_id`, `nama_barang`, `stok_awal`, `kode_erp`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Kertas A4 70 gram', 10, NULL, '2021-06-22 02:34:41', '2021-06-22 02:34:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_jenis`
--

CREATE TABLE `master_jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_jenis`
--

INSERT INTO `master_jenis` (`id`, `nama_jenis`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kertas', '2021-06-22 02:33:36', '2021-06-22 02:33:36', NULL),
(2, 'Binder', '2021-07-01 09:54:21', '2021-07-01 09:54:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1623291922, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_atk_kurang`
--

CREATE TABLE `tbl_atk_kurang` (
  `id` int(11) NOT NULL,
  `id_det_permintaan` int(11) NOT NULL,
  `id_atk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_det_dist`
--

CREATE TABLE `tbl_det_dist` (
  `id` int(255) NOT NULL,
  `id_dist` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_det_dist`
--

INSERT INTO `tbl_det_dist` (`id`, `id_dist`, `jumlah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 15, '2021-06-25 04:19:36', '2021-06-25 04:19:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_det_pemesanan`
--

CREATE TABLE `tbl_det_pemesanan` (
  `id_det_pemesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_atk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_det_pemesanan`
--

INSERT INTO `tbl_det_pemesanan` (`id_det_pemesanan`, `id_pemesanan`, `id_atk`, `jumlah`, `harga`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 15, 100000, '2021-06-25 04:19:09', '2021-06-25 04:19:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_det_penerimaan`
--

CREATE TABLE `tbl_det_penerimaan` (
  `id` int(255) NOT NULL,
  `id_penerimaan` int(255) NOT NULL,
  `id_det_pemesanan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_det_penerimaan`
--

INSERT INTO `tbl_det_penerimaan` (`id`, `id_penerimaan`, `id_det_pemesanan`, `jumlah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 15, '2021-06-21 02:08:12', '2021-06-21 02:08:12', '2021-06-21 02:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_det_permintaan`
--

CREATE TABLE `tbl_det_permintaan` (
  `id_det_permintaan` int(255) NOT NULL,
  `id_permintaan` int(255) NOT NULL,
  `id_atk` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_det_permintaan`
--

INSERT INTO `tbl_det_permintaan` (`id_det_permintaan`, `id_permintaan`, `id_atk`, `jumlah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 15, '2021-06-23 03:22:29', '2021-06-23 03:22:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distribusi`
--

CREATE TABLE `tbl_distribusi` (
  `id` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `tgl_distribusi` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_distribusi`
--

INSERT INTO `tbl_distribusi` (`id`, `id_permintaan`, `tgl_distribusi`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2021-06-22 14:07:17', 18, '2021-06-22 14:07:30', '2021-06-22 14:07:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grup_atk`
--

CREATE TABLE `tbl_grup_atk` (
  `id_grup` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `no_erp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `id_user`, `tgl_pemesanan`, `no_erp`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 18, '2021-06-22 02:35:14', '1234567', 'Baru', '2021-06-22 02:35:57', '2021-06-24 04:28:15', NULL),
(2, 17, '2021-06-24 11:33:00', '234567', 'Baru', '2021-06-24 04:33:36', '2021-06-24 04:33:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerimaan`
--

CREATE TABLE `tbl_penerimaan` (
  `id` int(255) NOT NULL,
  `id_pesan` int(255) NOT NULL,
  `tgl_terima` datetime NOT NULL,
  `id_user` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penerimaan`
--

INSERT INTO `tbl_penerimaan` (`id`, `id_pesan`, `tgl_terima`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2021-06-22 16:02:14', 18, '2021-06-21 02:02:14', '2021-06-24 04:41:24', '2021-06-21 02:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permintaan`
--

CREATE TABLE `tbl_permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_permintaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permintaan`
--

INSERT INTO `tbl_permintaan` (`id_permintaan`, `id_user`, `tgl_permintaan`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 18, '2021-06-21 21:37:18', 'Lorem Ipsum', '2021-06-22 04:37:33', '2021-06-28 02:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `role` int(4) NOT NULL COMMENT '1 = Admin , 2 = Users',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `role`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(17, 'alvino_scientist@outlook.com', 'Alvino', NULL, 'default.svg', '$2y$10$hvX/zlfYpmDKOiMlzc99gOHdejk3HENV9KnIw32GEXynhYy.hKi9a', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 0, '2021-06-13 21:39:27', '2021-06-13 21:39:27', NULL),
(18, 'derago119@gmail.com', 'Ade', NULL, 'default.svg', '$2y$10$fQJQJsA6y5SaaeerIXXmcePL8F8JijuwKhqmPYneSqOB6HGsUB7Cm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '2021-06-13 21:40:41', '2021-06-13 21:40:41', NULL),
(21, 'derago117@gmail.com', 'Dera', NULL, 'default.svg', '$2y$10$xuOaMVuBssGvbc/RgvJ04.tlG.wzrpdTjZZmN0l0i7yxSqn1f3sxG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 0, '2021-06-29 17:01:44', '2021-06-29 17:01:44', NULL),
(22, 'derago120@gmail.com', 'tes', NULL, 'default.svg', '$2y$10$Sx/d20swfmM4rm51HcA85Of5ahuH2twrefz1mrmGFQXGV.8mdlUsi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2021-06-29 17:04:23', '2021-06-29 17:04:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `laporan_atk`
--
ALTER TABLE `laporan_atk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_master_barang_grup_id_foreign` (`grup_id`);

--
-- Indexes for table `master_jenis`
--
ALTER TABLE `master_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_atk_kurang`
--
ALTER TABLE `tbl_atk_kurang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_atk_kurang_id_det_permintaan_foreign` (`id_det_permintaan`),
  ADD KEY `tbl_atk_kurang_id_atk_foreign` (`id_atk`);

--
-- Indexes for table `tbl_det_dist`
--
ALTER TABLE `tbl_det_dist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_det_dist_id_dist_foreign` (`id_dist`);

--
-- Indexes for table `tbl_det_pemesanan`
--
ALTER TABLE `tbl_det_pemesanan`
  ADD PRIMARY KEY (`id_det_pemesanan`),
  ADD KEY `tbl_det_pemesanan_id_pemesanan_foreign` (`id_pemesanan`),
  ADD KEY `tbl_det_pemesanan_id_atk_foreign` (`id_atk`);

--
-- Indexes for table `tbl_det_penerimaan`
--
ALTER TABLE `tbl_det_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_det_penerimaan_id_penerimaan_foreign` (`id_penerimaan`);

--
-- Indexes for table `tbl_det_permintaan`
--
ALTER TABLE `tbl_det_permintaan`
  ADD PRIMARY KEY (`id_det_permintaan`),
  ADD KEY `tbl_det_permintaan_id_permintaan_foreign` (`id_permintaan`),
  ADD KEY `tbl_det_permintaan_id_atk_foreign` (`id_atk`);

--
-- Indexes for table `tbl_distribusi`
--
ALTER TABLE `tbl_distribusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_distribusi_id_permintaan_foreign` (`id_permintaan`);

--
-- Indexes for table `tbl_grup_atk`
--
ALTER TABLE `tbl_grup_atk`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_penerimaan_id_pesan_foreign` (`id_pesan`);

--
-- Indexes for table `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_atk`
--
ALTER TABLE `laporan_atk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_jenis`
--
ALTER TABLE `master_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_atk_kurang`
--
ALTER TABLE `tbl_atk_kurang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_det_dist`
--
ALTER TABLE `tbl_det_dist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_det_pemesanan`
--
ALTER TABLE `tbl_det_pemesanan`
  MODIFY `id_det_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_det_penerimaan`
--
ALTER TABLE `tbl_det_penerimaan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_det_permintaan`
--
ALTER TABLE `tbl_det_permintaan`
  MODIFY `id_det_permintaan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_distribusi`
--
ALTER TABLE `tbl_distribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_grup_atk`
--
ALTER TABLE `tbl_grup_atk`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD CONSTRAINT `tbl_master_barang_grup_id_foreign` FOREIGN KEY (`grup_id`) REFERENCES `master_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_atk_kurang`
--
ALTER TABLE `tbl_atk_kurang`
  ADD CONSTRAINT `tbl_atk_kurang_id_atk_foreign` FOREIGN KEY (`id_atk`) REFERENCES `alat_tulis` (`id`),
  ADD CONSTRAINT `tbl_atk_kurang_id_det_permintaan_foreign` FOREIGN KEY (`id_det_permintaan`) REFERENCES `tbl_det_permintaan` (`id_det_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_det_dist`
--
ALTER TABLE `tbl_det_dist`
  ADD CONSTRAINT `tbl_det_dist_id_dist_foreign` FOREIGN KEY (`id_dist`) REFERENCES `tbl_distribusi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_det_pemesanan`
--
ALTER TABLE `tbl_det_pemesanan`
  ADD CONSTRAINT `tbl_det_pemesanan_id_atk_foreign` FOREIGN KEY (`id_atk`) REFERENCES `alat_tulis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_det_pemesanan_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `tbl_pemesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_det_penerimaan`
--
ALTER TABLE `tbl_det_penerimaan`
  ADD CONSTRAINT `tbl_det_penerimaan_id_penerimaan_foreign` FOREIGN KEY (`id_penerimaan`) REFERENCES `tbl_penerimaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_det_permintaan`
--
ALTER TABLE `tbl_det_permintaan`
  ADD CONSTRAINT `tbl_det_permintaan_id_atk_foreign` FOREIGN KEY (`id_atk`) REFERENCES `alat_tulis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_det_permintaan_id_permintaan_foreign` FOREIGN KEY (`id_permintaan`) REFERENCES `tbl_permintaan` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_distribusi`
--
ALTER TABLE `tbl_distribusi`
  ADD CONSTRAINT `tbl_distribusi_id_permintaan_foreign` FOREIGN KEY (`id_permintaan`) REFERENCES `tbl_permintaan` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  ADD CONSTRAINT `tbl_penerimaan_id_pesan_foreign` FOREIGN KEY (`id_pesan`) REFERENCES `tbl_pemesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
