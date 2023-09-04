-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 03:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pronoyee1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'al-amin khan sagar', 'dotshine04@gmail.com', NULL, '$2y$10$/fE/AeCHSr0Mck1Nz4yf5OurkZACIOInoVnj3J2ofGD/l4CtUKgLq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `almirahs`
--

CREATE TABLE `almirahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AlmirahName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `almirahs`
--

INSERT INTO `almirahs` (`id`, `AlmirahName`, `created_at`, `updated_at`) VALUES
(1, 'Almirah-Ict', '2023-07-29 22:49:00', '2023-07-29 22:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `awardcats`
--

CREATE TABLE `awardcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AwardCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awardcats`
--

INSERT INTO `awardcats` (`id`, `AwardCat`, `created_at`, `updated_at`) VALUES
(1, 'মহান মুক্তিযুদ্ধে অবদান', '2023-03-10 20:18:47', '2023-03-10 20:18:47'),
(2, 'বাংলা মায়ের কৃতিসন্তান', '2023-03-10 20:30:09', '2023-03-10 20:30:09'),
(3, 'বই পড়ে বিজয়ী', '2023-03-10 20:23:33', '2023-03-10 20:23:33'),
(4, 'কর্মসূচিতে অবদান', '2023-03-10 20:32:59', '2023-03-10 20:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AwardName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AwardCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honoreeList` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `AwardName`, `AwardCat`, `honoreeList`, `created_at`, `updated_at`) VALUES
(1, 'মুক্তিযোদ্ধা -কে সম্মাননা', 'মহান মুক্তিযুদ্ধে অবদান', 'C:\\xampp\\tmp\\phpAE27.tmp', '2023-03-10 23:55:54', '2023-03-10 23:55:54'),
(2, 'জিপিএ ৫ প্রাপ্ত দের', 'বাংলা মায়ের কৃতিসন্তান', '1678514839.pdf', '2023-03-11 00:07:19', '2023-03-11 00:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `bookcats`
--

CREATE TABLE `bookcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BookCatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookcats`
--

INSERT INTO `bookcats` (`id`, `BookCatName`, `created_at`, `updated_at`) VALUES
(2, 'কবিতা', '2022-11-14 08:24:14', '2022-11-14 08:24:14'),
(3, 'গল্প', '2022-11-14 08:24:30', '2022-11-14 08:24:30'),
(4, 'উপন্যাস', '2022-11-14 08:24:47', '2022-11-14 08:24:47'),
(5, 'কবিতা / সমগ্র', '2022-11-18 09:04:03', '2022-11-18 09:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `bookpdfs`
--

CREATE TABLE `bookpdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BookName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WriterName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PdfFile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookpdfs`
--

INSERT INTO `bookpdfs` (`id`, `BookName`, `WriterName`, `PdfFile`, `created_at`, `updated_at`) VALUES
(1, 'বাংলা বই দ্বিতীয় শ্রেণী', 'আল-আমিন খান সাগর', '1676664326.png', '2023-02-17 14:05:26', '2023-02-17 14:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `bookrequests`
--

CREATE TABLE `bookrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BookNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bCategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bPublications` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bPublishDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bLanguage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bookViews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `BookNumber`, `bTitle`, `wName`, `bCategory`, `bPublications`, `bPublishDate`, `bLanguage`, `isbn`, `bPrice`, `image`, `pdf`, `created_at`, `updated_at`, `bookViews`) VALUES
(1, '3001-021', 'কলঙ্ক প্রাচীর', 'আল-আমিন খান সাগর', 'উপন্যাস', 'প্রণয়ী পাবিলেকশন', '2023-07-30', 'বাংলা', '২১০ ০২৫৪', '1', '1690696194.png', '1690696194.pdf', '2023-07-29 23:49:54', '2023-09-03 23:05:08', 21),
(2, '5001-02', 'শিকল', 'আল-আমিন খান সাগর', 'উপন্যাস', 'প্রণয়ী পাবিলেকশন', '2023-07-30', 'বাংলা', '52148', '2', '1690711234.png', '1690711234.pdf', '2023-07-30 04:00:34', '2023-08-25 02:09:52', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bookshelves`
--

CREATE TABLE `bookshelves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlmirahName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ShelfNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ShelfLocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookshelves`
--

INSERT INTO `bookshelves` (`id`, `bTitle`, `AlmirahName`, `ShelfNumber`, `ShelfLocation`, `created_at`, `updated_at`) VALUES
(1, 'কলঙ্ক প্রাচীর', 'Almirah-Ict', '1', 'mujib corner', '2023-07-30 03:29:37', '2023-07-30 03:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BorrowedName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BorrowedType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CardNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BookName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BorrowedFromDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BorrowedToDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActualReturnDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IssuedBy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `BorrowedName`, `BorrowedType`, `CardNumber`, `BookName`, `BorrowedFromDate`, `BorrowedToDate`, `ActualReturnDate`, `IssuedBy`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2', '2023-02-18', '2023-02-18', '2023-02-18', '1', '2023-02-18 03:02:47', '2023-02-18 03:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'শেরপুর', 1, '2023-02-12 10:23:37', '2023-02-12 10:23:37'),
(2, 'ধুনট', 1, '2023-02-12 10:23:57', '2023-02-12 10:23:57'),
(3, 'শিবগঞ্জ', 1, '2023-02-12 10:24:59', '2023-02-12 10:24:59'),
(4, 'গাবতলী', 1, '2023-02-12 10:25:12', '2023-02-12 10:25:12'),
(5, 'সোনাতলা', 1, '2023-02-12 10:25:22', '2023-02-12 10:25:22'),
(6, 'নন্দিগ্রাম', 1, '2023-02-12 10:25:35', '2023-02-12 10:25:35'),
(7, 'আদমদিঘি', 1, '2023-02-12 10:25:52', '2023-02-12 10:25:52'),
(8, 'দুপচাচিঁয়া', 1, '2023-02-12 10:26:04', '2023-02-12 10:26:04'),
(9, 'শাজাহানপুর', 1, '2023-02-12 10:26:17', '2023-02-12 10:26:17'),
(10, 'সারিয়াকান্দি', 1, '2023-02-12 10:26:28', '2023-02-12 10:26:28'),
(11, 'কাহালু', 1, '2023-02-12 10:26:51', '2023-02-12 10:26:51'),
(12, 'বগুড়া সদর', 1, '2023-02-12 10:27:04', '2023-02-12 10:27:04'),
(13, 'বেলকুচি', 2, '2023-02-12 10:46:05', '2023-02-12 10:46:05'),
(14, 'চৌহালি', 2, '2023-02-12 10:46:17', '2023-02-12 10:46:17'),
(15, 'কামারখন্দ', 2, '2023-02-12 10:46:29', '2023-02-12 10:46:29'),
(16, 'কাজীপুর', 2, '2023-02-12 10:46:41', '2023-02-12 10:46:41'),
(17, 'রায়গঞ্জ', 2, '2023-02-12 10:46:58', '2023-02-12 10:46:58'),
(18, 'শাহজাদপুর', 2, '2023-02-12 10:47:10', '2023-02-12 10:47:10'),
(19, 'তাড়াশ', 2, '2023-02-12 10:47:21', '2023-02-12 10:47:21'),
(20, 'উল্লাপাড়া', 2, '2023-02-12 10:47:43', '2023-02-12 10:47:43'),
(21, 'সিরাজগঞ্জ সদর', 2, '2023-02-12 10:48:52', '2023-02-12 10:48:52'),
(22, 'সুজানগর', 3, '2023-02-12 10:51:53', '2023-02-12 10:51:53'),
(23, 'ঈশ্বরদী', 3, '2023-02-12 10:52:32', '2023-02-12 10:52:32'),
(24, 'ভাঙ্গুড়া', 3, '2023-02-12 10:52:46', '2023-02-12 10:52:46'),
(25, 'বেড়া', 3, '2023-02-12 10:52:58', '2023-02-12 10:52:58'),
(26, 'আটঘরিয়া', 3, '2023-02-12 10:53:08', '2023-02-12 10:53:08'),
(27, 'চাটমোহর', 3, '2023-02-12 10:53:21', '2023-02-12 10:53:21'),
(28, 'সাঁথিয়া', 3, '2023-02-12 10:53:39', '2023-02-12 10:53:39'),
(29, 'ফরিদপুর', 3, '2023-02-12 10:53:53', '2023-02-12 10:53:53'),
(30, 'পাবনা সদর', 3, '2023-02-12 10:54:06', '2023-02-12 10:54:06'),
(31, 'পবা', 8, '2023-02-12 11:01:46', '2023-02-12 11:01:46'),
(32, 'দুর্গাপুর', 8, '2023-02-12 11:02:02', '2023-02-12 11:02:02'),
(33, 'মোহনপুর', 8, '2023-02-12 11:02:22', '2023-02-12 11:02:22'),
(34, 'চারঘাট', 8, '2023-02-12 11:02:36', '2023-02-12 11:02:36'),
(35, 'পুঠিয়া', 8, '2023-02-12 11:02:49', '2023-02-12 11:02:49'),
(36, 'বাঘা', 8, '2023-02-12 11:03:01', '2023-02-12 11:03:01'),
(37, 'গোদাগাড়ী', 8, '2023-02-12 11:03:22', '2023-02-12 11:03:22'),
(38, 'তানোর', 8, '2023-02-12 11:03:46', '2023-02-12 11:03:46'),
(39, 'বাগমারা', 8, '2023-02-12 11:04:02', '2023-02-12 11:04:02'),
(40, 'সিংড়া', 4, '2023-02-12 11:06:27', '2023-02-12 11:06:27'),
(41, 'বড়াইগ্রাম', 4, '2023-02-12 11:06:39', '2023-02-12 11:06:39'),
(42, 'বাগাতিপাড়া', 4, '2023-02-12 11:06:53', '2023-02-12 11:06:53'),
(43, 'লালপুর', 4, '2023-02-12 11:07:05', '2023-02-12 11:07:05'),
(44, 'গুরুদাসপুর', 4, '2023-02-12 11:07:17', '2023-02-12 11:07:17'),
(45, 'নলডাঙ্গা', 4, '2023-02-12 11:07:30', '2023-02-12 11:07:30'),
(46, 'নাটোর সদর', 4, '2023-02-12 11:07:45', '2023-02-12 11:07:45'),
(47, 'আক্কেলপুর', 5, '2023-02-12 11:09:05', '2023-02-12 11:09:05'),
(48, 'কালাই', 5, '2023-02-12 11:09:17', '2023-02-12 11:09:17'),
(49, 'ক্ষেতলাল', 5, '2023-02-12 11:09:30', '2023-02-12 11:09:30'),
(50, 'পাঁচবিবি', 5, '2023-02-12 11:09:41', '2023-02-12 11:09:41'),
(51, 'জয়পুরহাট সদর', 5, '2023-02-12 11:09:55', '2023-02-12 11:09:55'),
(52, 'গোমস্তাপুর', 7, '2023-02-12 11:12:08', '2023-02-12 11:12:08'),
(53, 'নাচোল', 7, '2023-02-12 11:12:18', '2023-02-12 11:12:18'),
(54, 'ভোলাহাট', 7, '2023-02-12 11:12:30', '2023-02-12 11:12:30'),
(55, 'শিবগঞ্জ', 7, '2023-02-12 11:12:45', '2023-02-12 11:12:45'),
(56, 'চাঁপাইনবাবগঞ্জ সদর', 7, '2023-02-12 11:13:00', '2023-02-12 11:13:00'),
(57, 'মহাদেবপুর', 6, '2023-02-12 11:14:58', '2023-02-12 11:14:58'),
(58, 'বদলগাছী', 6, '2023-02-12 11:15:12', '2023-02-12 11:15:12'),
(59, 'পত্নিতলা', 6, '2023-02-12 11:15:25', '2023-02-12 11:15:25'),
(60, 'ধামইরহাট', 6, '2023-02-12 11:15:36', '2023-02-12 11:15:36'),
(61, 'নিয়ামতপুর', 6, '2023-02-12 11:15:47', '2023-02-12 11:15:47'),
(62, 'মান্দা', 6, '2023-02-12 11:15:58', '2023-02-12 11:15:58'),
(63, 'আত্রাই', 6, '2023-02-12 11:16:09', '2023-02-12 11:16:09'),
(64, 'রাণীনগর', 6, '2023-02-12 11:16:23', '2023-02-12 11:16:23'),
(65, 'পোরশা', 6, '2023-02-12 11:16:35', '2023-02-12 11:16:35'),
(66, 'সাপাহার', 6, '2023-02-12 11:16:48', '2023-02-12 11:16:48'),
(67, 'নওগাঁ সদর', 6, '2023-02-12 11:17:01', '2023-02-12 11:17:01'),
(68, 'North 24 Parganas', 92, '2023-02-19 02:14:46', '2023-02-19 02:14:46'),
(69, 'South 24 Parganas', 92, '2023-02-19 02:15:25', '2023-02-19 02:15:25'),
(70, 'Purba Bardhaman', 92, '2023-02-19 02:15:45', '2023-02-19 02:15:45'),
(71, 'Paschim Bardhaman', 92, '2023-02-19 02:16:06', '2023-02-19 02:16:06'),
(72, 'Murshidabad', 92, '2023-02-19 02:16:17', '2023-02-19 02:16:17'),
(73, 'West Midnapore', 92, '2023-02-19 02:16:32', '2023-02-19 02:16:32'),
(74, 'Hooghly', 92, '2023-02-19 02:16:43', '2023-02-19 02:16:43'),
(75, 'Nadia', 92, '2023-02-19 02:16:56', '2023-02-19 02:16:56'),
(76, 'East Midnapore', 92, '2023-02-19 02:17:08', '2023-02-19 02:17:08'),
(77, 'Howrah', 92, '2023-02-19 02:17:21', '2023-02-19 02:17:21'),
(78, 'Kolkata', 92, '2023-02-19 02:17:37', '2023-02-19 02:17:37'),
(79, 'Maldah', 92, '2023-02-19 02:17:49', '2023-02-19 02:17:49'),
(80, 'Jalpaiguri', 92, '2023-02-19 02:18:00', '2023-02-19 02:18:00'),
(81, 'Alipurduar', 92, '2023-02-19 02:18:43', '2023-02-19 02:18:43'),
(82, 'Bankura', 92, '2023-02-19 02:19:00', '2023-02-19 02:19:00'),
(83, 'Birbhum', 92, '2023-02-19 02:19:24', '2023-02-19 02:19:24'),
(84, 'North Dinajpur', 92, '2023-02-19 02:19:41', '2023-02-19 02:19:41'),
(85, 'Purulia', 92, '2023-02-19 02:19:50', '2023-02-19 02:19:50'),
(86, 'Cooch Behar', 92, '2023-02-19 02:20:01', '2023-02-19 02:20:01'),
(87, 'Darjeeling', 92, '2023-02-19 02:20:10', '2023-02-19 02:20:10'),
(88, 'Dakshin Dinajpur', 92, '2023-02-19 02:20:24', '2023-02-19 02:20:24'),
(89, 'Kalimpong', 92, '2023-02-19 02:20:36', '2023-02-19 02:20:36'),
(90, 'Jhargram', 92, '2023-02-19 02:20:49', '2023-02-19 02:20:49'),
(91, 'Dumka', 74, '2023-02-19 03:26:21', '2023-02-19 03:26:21'),
(92, 'ব্রাহ্মণবাড়িয়া সদর', 27, '2023-02-19 23:13:00', '2023-02-19 23:13:00'),
(93, 'কসবা', 27, '2023-02-19 23:13:31', '2023-02-19 23:13:31'),
(94, 'নাসিরনগর', 27, '2023-02-19 23:16:27', '2023-02-19 23:16:27'),
(95, 'সরাইল', 27, '2023-02-19 23:16:59', '2023-02-19 23:16:59'),
(96, 'আশুগঞ্জ', 27, '2023-02-19 23:20:03', '2023-02-19 23:20:03'),
(97, 'আখাউড়া', 27, '2023-02-19 23:20:25', '2023-02-19 23:20:25'),
(98, 'নবীনগর', 27, '2023-02-19 23:20:39', '2023-02-19 23:20:39'),
(99, 'বাঞ্ছারামপুর', 27, '2023-02-19 23:26:18', '2023-02-19 23:26:18'),
(100, 'বিজয়নগর', 27, '2023-02-19 23:27:04', '2023-02-19 23:27:04'),
(101, 'আটপাড়া', 55, '2023-02-20 01:06:40', '2023-02-20 01:06:40'),
(102, 'কলমাকান্দা', 55, '2023-02-20 01:07:03', '2023-02-20 01:07:03'),
(103, 'কেন্দুয়া', 55, '2023-02-20 01:07:16', '2023-02-20 01:07:16'),
(104, 'খালিয়াজুড়ি', 55, '2023-02-20 01:07:30', '2023-02-20 01:07:30'),
(105, 'দুর্গাপুর', 55, '2023-02-20 01:07:42', '2023-02-20 01:07:42'),
(106, 'পূর্বধলা', 55, '2023-02-20 01:08:01', '2023-02-20 01:08:01'),
(107, 'বারহাট্টা', 55, '2023-02-20 01:08:18', '2023-02-20 01:08:18'),
(108, 'মদন', 55, '2023-02-20 01:08:32', '2023-02-20 01:08:32'),
(109, 'মোহনগঞ্জ', 55, '2023-02-20 01:08:45', '2023-02-20 01:08:45'),
(110, 'নেত্রকোণা সদর', 55, '2023-02-20 01:09:02', '2023-02-20 01:09:02'),
(111, 'ইসলামপুর', 54, '2023-05-18 02:27:53', '2023-05-18 02:27:53'),
(112, 'জামালপুর সদর', 54, '2023-05-18 02:28:19', '2023-05-18 02:28:19'),
(113, 'দেওয়ানগঞ্জ', 54, '2023-05-18 02:28:36', '2023-05-18 02:28:36'),
(114, 'বকশীগঞ্জ', 54, '2023-05-18 02:28:53', '2023-05-18 02:28:53'),
(115, 'মাদারগঞ্জ', 54, '2023-05-18 02:29:13', '2023-05-18 02:29:13'),
(116, 'মেলান্দহ', 54, '2023-05-18 02:29:41', '2023-05-18 02:29:41'),
(117, 'সরিষাবাড়ী', 54, '2023-05-18 02:29:57', '2023-05-18 02:29:57'),
(118, 'ঝিনাইগাতী', 53, '2023-05-18 02:32:09', '2023-05-18 02:32:09'),
(119, 'নকলা', 53, '2023-05-18 02:32:23', '2023-05-18 02:32:23'),
(120, 'নালিতাবাড়ী', 53, '2023-05-18 02:32:42', '2023-05-18 02:32:42'),
(121, 'শেরপুর সদর', 53, '2023-05-18 02:33:00', '2023-05-18 02:33:00'),
(122, 'শ্রীবরদী', 53, '2023-05-18 02:33:13', '2023-05-18 02:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'b b', 'dotshine04@gmail.com', 'gcg', 'gcgc', '2023-08-19 23:25:42', '2023-08-19 23:25:42'),
(2, 'gcg', 'dotshine04@gmail.com', 'gxvx', 'ijojoi', '2023-08-19 23:35:09', '2023-08-19 23:35:09'),
(3, 'alamin khan', 'dotshine04@gmail.com', 'Nothing', 'Just test', '2023-08-19 23:38:35', '2023-08-19 23:38:35'),
(4, 'alamin khan 1', 'dotshine04@gmail.com', 'Nothing', 'rr', '2023-08-19 23:40:44', '2023-08-19 23:40:44'),
(5, 'alamin khan', 'dotshine04@gmail.com', 'Nothing 2', 'vv', '2023-08-19 23:47:34', '2023-08-19 23:47:34'),
(6, 'alamin khan', 'dotshine04@gmail.com', 'Nothing 5', 'jggjguy', '2023-08-20 00:21:13', '2023-08-20 00:21:13'),
(7, 'alamin khan', 'dotshine04@gmail.com', 'Nothing 3', '3333', '2023-08-21 17:59:52', '2023-08-21 17:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশ', NULL, NULL),
(3, 'India', '2023-02-19 01:36:29', '2023-02-19 01:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `donorcats`
--

CREATE TABLE `donorcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DonorCatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donorcats`
--

INSERT INTO `donorcats` (`id`, `DonorCatName`, `created_at`, `updated_at`) VALUES
(1, 'বই দান', '2023-03-11 06:34:20', '2023-03-11 06:34:20'),
(2, 'আজীবন দাতা সদস্য', '2023-03-11 06:34:53', '2023-03-11 06:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DonorName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonorCatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonorList` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `DonorName`, `DonorCatName`, `DonorList`, `created_at`, `updated_at`) VALUES
(1, 'সংস্কৃতি মন্ত্রণালয়', 'বই দান', '1678598400.pdf', '2023-03-11 23:20:00', '2023-03-11 23:20:00'),
(2, 'Test donor', 'বই দান', '1678611150.pdf', '2023-03-12 02:52:30', '2023-03-12 02:52:30'),
(3, 'Test life member', 'আজীবন দাতা সদস্য', '1678611298.pdf', '2023-03-12 02:54:58', '2023-03-12 02:54:58'),
(4, 'আল-আমিন খান সাগর', 'বই দান', '1691484583.pdf', '2023-08-08 02:49:43', '2023-08-08 02:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `LanguageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `LanguageName`, `created_at`, `updated_at`) VALUES
(1, 'বাংলা', '2022-11-14 10:09:35', '2022-11-14 10:09:35'),
(2, 'English', '2022-11-14 10:09:58', '2022-11-14 10:09:58'),
(3, 'আরবি', '2022-11-14 10:12:26', '2022-11-14 10:12:26'),
(4, 'হিন্দি', '2022-11-14 10:12:41', '2022-11-14 10:12:41'),
(5, 'উর্দু', '2022-11-14 10:12:54', '2022-11-14 10:12:54'),
(6, 'Bengali', '2022-11-26 04:54:52', '2022-11-26 04:54:52'),
(7, 'bbb', '2023-02-07 22:29:42', '2023-02-07 22:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MenuName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `MenuName`, `created_at`, `updated_at`) VALUES
(1, 'লেখকের সময়কাল', '2022-11-07 06:24:02', '2022-11-07 06:24:02'),
(2, 'বইয়ের ক্যাটাগরি', '2022-11-07 06:24:18', '2022-11-07 06:24:18'),
(3, 'প্রকাশনীসমূহ', '2022-11-07 06:24:31', '2022-11-07 06:24:31'),
(4, 'জেলাভিত্তিক লেখকবৃন্দ', '2022-11-07 06:24:49', '2022-11-07 06:24:49'),
(5, 'কর্মসূচি', '2022-11-07 06:25:05', '2022-11-07 06:25:05'),
(6, 'সম্মাননা', '2022-11-07 06:25:21', '2022-11-07 06:25:21'),
(7, 'দাতা সংস্থা', '2022-11-07 06:25:36', '2022-11-07 06:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_10_03_032625_create_admins_table', 1),
(22, '2022_10_18_143400_create_menus_table', 1),
(23, '2022_10_19_132710_create_sub_menus_table', 1),
(24, '2022_10_22_073732_create_categories_table', 1),
(29, '2022_10_29_055624_create_subcategories_table', 1),
(30, '2022_11_08_140350_create_writups_table', 2),
(31, '2022_11_14_112615_create_bookcats_table', 3),
(32, '2022_11_14_112645_create_publications_table', 3),
(34, '2022_11_14_153704_create_languages_table', 4),
(44, '2022_11_26_112123_create_timeperiods_table', 8),
(52, '2023_01_07_151145_create_pichouses_table', 15),
(54, '2023_01_07_151210_create_ptubes_table', 16),
(56, '2023_02_07_063341_create_countries_states_cities_tables', 18),
(57, '2022_10_14_064102_create_writers_table', 19),
(58, '2014_10_12_000000_create_users_table', 20),
(59, '2023_02_17_184857_create_bookpdfs_table', 21),
(61, '2023_02_18_044751_create_staff_table', 23),
(64, '2023_02_18_062750_create_borrowers_table', 24),
(66, '2023_02_27_063400_create_programmecats_table', 26),
(67, '2022_11_28_154255_create_programmes_table', 27),
(68, '2023_03_11_015710_create_awardcats_table', 28),
(69, '2023_01_07_080122_create_awards_table', 29),
(70, '2023_03_11_121226_create_donorcats_table', 30),
(71, '2023_01_07_080159_create_donors_table', 31),
(72, '2023_04_04_050925_create_socials_table', 32),
(73, '2023_05_31_124208_create_sliders_table', 33),
(74, '2023_06_19_044007_create_almirahs_table', 33),
(76, '2022_10_25_163942_create_books_table', 35),
(77, '2023_02_17_204304_create_bookshelves_table', 36),
(78, '2023_08_13_140638_and_votes_to_writers', 37),
(79, '2023_08_13_142607_and_votes_to_books', 38),
(80, '2023_01_09_123646_create_communications_table', 39),
(81, '2023_08_21_114926_create_bookrequests_table', 40),
(82, '2023_09_02_102153_and_votes_to_writups', 41);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('k@gmail.com', '$2y$10$Wv11i60HQVmxd/RAwmyDkOyccsjvdi93MpzCnx9AI3u8cwr5HPAv6', '2022-12-26 08:48:36'),
('dotshine04@gmail.com', '$2y$10$N5DQy.SfehQUl8Qhj8iMF..37Y9z0GAqu9MDynkKqBH5aynf9piB2', '2023-08-23 20:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pichouses`
--

CREATE TABLE `pichouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PicTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PicCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pichouses`
--

INSERT INTO `pichouses` (`id`, `PicTitle`, `PicCat`, `image`, `created_at`, `updated_at`) VALUES
(1, 'শিক্ষা সফর-২০২০', 'শিক্ষা সফর', '1673110597.jpg', '2023-01-07 10:56:37', '2023-01-07 10:56:37'),
(2, 'Needhi', 'পুরস্কার', '1673195894.png', '2023-01-08 10:38:14', '2023-01-08 10:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `programmecats`
--

CREATE TABLE `programmecats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProgCatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmecats`
--

INSERT INTO `programmecats` (`id`, `ProgCatName`, `created_at`, `updated_at`) VALUES
(1, 'গ্রামভিত্তিক বইপড়া কর্মসূচি', '2023-03-09 10:49:19', '2023-03-09 10:49:19'),
(2, 'আইসিটি বিষয়ক কর্মসূচি', '2023-03-09 10:49:39', '2023-03-09 10:49:39'),
(3, 'হস্তশিল্প বিষয়ক কর্মসূচি', '2023-03-09 10:50:01', '2023-03-09 10:50:01'),
(4, 'প্রাকৃতিক দুর্যোগ', '2023-03-13 02:14:12', '2023-03-13 02:14:12'),
(5, 'বৃক্ষরোপন কর্মসূচি', '2023-03-13 02:15:55', '2023-03-13 02:15:55'),
(6, 'জাতীয় দিবস উদযাপন', '2023-03-13 02:16:58', '2023-03-13 02:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProgrammeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProgCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participantList` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `ProgrammeName`, `ProgCat`, `participantList`, `created_at`, `updated_at`) VALUES
(1, 'বেলগাড়ী গ্রামে বইপড়া', 'গ্রামভিত্তিক বইপড়া কর্মসূচি', '1678411771.pdf', '2023-03-09 19:29:31', '2023-03-09 19:29:31'),
(2, 'আইসি সহযোগী', 'আইসিটি বিষয়ক কর্মসূচি', '1678411854.pdf', '2023-03-09 19:30:54', '2023-03-09 19:30:54'),
(3, 'সেলাই প্রশিক্ষণ', 'হস্তশিল্প বিষয়ক কর্মসূচি', '1678411871.pdf', '2023-03-09 19:31:11', '2023-03-09 19:31:11'),
(4, 'test', 'আইসিটি বিষয়ক কর্মসূচি', '1678467892.pdf', '2023-03-10 11:04:52', '2023-03-10 11:04:52'),
(5, 'it', 'আইসিটি বিষয়ক কর্মসূচি', '1678469248.pdf', '2023-03-10 11:27:28', '2023-03-10 11:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `ptubes`
--

CREATE TABLE `ptubes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `VidTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VidCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptubes`
--

INSERT INTO `ptubes` (`id`, `VidTitle`, `VidCat`, `Video`, `created_at`, `updated_at`) VALUES
(1, 'বঙ্গে সুফী প্রভাব', 'পুরস্কার', '1673112801.mp4', '2023-01-07 11:33:21', '2023-01-07 11:33:21'),
(2, 'Baazigar O Baazigar', 'শিক্ষা সফর', '1673193414.mp4', '2023-01-08 09:56:54', '2023-01-08 09:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PublicationName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `PublicationName`, `Address`, `created_at`, `updated_at`) VALUES
(1, 'প্রণয়ী পাবিলেকশন', '২/৪ দারুস সালাম, ঢাকা-১২১৬', '2022-11-14 09:20:05', '2022-11-14 09:20:05'),
(2, 'সময় প্রকাশন', 'ঢাকা', '2022-11-14 09:22:30', '2022-11-14 09:22:30'),
(3, 'বাতিঘর', 'কাওরান বাজার', '2022-11-14 09:22:51', '2022-11-14 09:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SldrName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SldrDescb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `SldrName`, `SldrDescb`, `image`, `created_at`, `updated_at`) VALUES
(1, 'প্রথম স্লাইডার এডমিন হতে', 'প্রথম স্লাইডার এডমিন হতে প্রথম স্লাইডার এডমিন হতে প্রথম স্লাইডার এডমিন হতে প্রথম স্লাইডার এডমিন হতে', '1693589972.jpg', '2023-09-02 00:39:32', '2023-09-02 00:39:32'),
(2, 'দ্বিতীয় স্লাইডার এডমিন হতে', 'দ্বিতীয় স্লাইডার এডমিন হতেদ্বিতীয় স্লাইডার এডমিন হতেদ্বিতীয় স্লাইডার এডমিন হতে', '1693590509.png', '2023-09-02 00:48:29', '2023-09-02 00:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `WriterName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FacebookLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TwitterLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YoutubeLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GoogleLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LinkedinLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `StaffName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffDesignation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffDepartment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `StaffName`, `StaffDesignation`, `StaffDepartment`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sagar', '1', '1', '1', '2023-02-18 00:21:46', '2023-02-18 00:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'বগুড়া', 1, '2023-02-12 10:34:04', '2023-02-12 10:34:04'),
(2, 'সিরাজগঞ্জ', 1, '2023-02-12 10:34:16', '2023-02-12 10:34:16'),
(3, 'পাবনা', 1, '2023-02-12 10:34:28', '2023-02-12 10:34:28'),
(4, 'নাটোর', 1, '2023-02-12 10:34:45', '2023-02-12 10:34:45'),
(5, 'জয়পুরহাট', 1, '2023-02-12 10:34:57', '2023-02-12 10:34:57'),
(6, 'নওগাঁ', 1, '2023-02-12 10:35:08', '2023-02-12 10:35:08'),
(7, 'চাঁপাইনবাবগঞ্জ', 1, '2023-02-12 10:35:20', '2023-02-12 10:35:20'),
(8, 'রাজশাহী', 1, '2023-02-12 10:35:37', '2023-02-12 10:35:37'),
(9, 'যশোর', 1, '2023-02-13 07:20:02', '2023-02-13 07:20:02'),
(10, 'সাতক্ষীরা', 1, '2023-02-13 07:20:20', '2023-02-13 07:20:20'),
(11, 'মেহেরপুর', 1, '2023-02-13 07:20:37', '2023-02-13 07:20:37'),
(12, 'নড়াইল', 1, '2023-02-13 07:20:57', '2023-02-13 07:20:57'),
(13, 'চুয়াডাঙ্গা', 1, '2023-02-13 07:21:12', '2023-02-13 07:21:12'),
(14, 'কুষ্টিয়া', 1, '2023-02-13 07:21:27', '2023-02-13 07:21:27'),
(15, 'মাগুরা', 1, '2023-02-13 07:21:43', '2023-02-13 07:21:43'),
(16, 'বাগেরহাট', 1, '2023-02-13 07:22:10', '2023-02-13 07:22:10'),
(17, 'ঝিনাইদহ', 1, '2023-02-13 07:22:26', '2023-02-13 07:22:26'),
(18, 'খুলনা', 1, '2023-02-13 07:22:38', '2023-02-13 07:22:38'),
(19, 'ঝালকাঠি', 1, '2023-02-13 07:25:25', '2023-02-13 07:25:25'),
(20, 'পটুয়াখালী', 1, '2023-02-13 07:25:36', '2023-02-13 07:25:36'),
(21, 'পিরোজপুর', 1, '2023-02-13 07:25:46', '2023-02-13 07:25:46'),
(22, 'ভোলা', 1, '2023-02-13 07:26:07', '2023-02-13 07:26:07'),
(23, 'বরগুনা', 1, '2023-02-13 07:26:21', '2023-02-13 07:26:21'),
(24, 'বরিশাল', 1, '2023-02-13 07:26:35', '2023-02-13 07:26:35'),
(25, 'কুমিল্লা', 1, '2023-02-13 07:29:39', '2023-02-13 07:29:39'),
(26, 'ফেনী', 1, '2023-02-13 07:29:55', '2023-02-13 07:29:55'),
(27, 'ব্রাহ্মণবাড়িয়া', 1, '2023-02-13 07:30:13', '2023-02-13 07:30:13'),
(28, 'রাঙ্গামাটি', 1, '2023-02-13 07:30:25', '2023-02-13 07:30:25'),
(29, 'নোয়াখালী', 1, '2023-02-13 07:30:37', '2023-02-13 07:30:37'),
(30, 'চাঁদপুর', 1, '2023-02-13 07:30:56', '2023-02-13 07:30:56'),
(31, 'লক্ষ্মীপুর', 1, '2023-02-13 07:31:11', '2023-02-13 07:31:11'),
(32, 'কক্সবাজার', 1, '2023-02-13 07:31:29', '2023-02-13 07:31:29'),
(33, 'খাগড়াছড়ি', 1, '2023-02-13 07:31:40', '2023-02-13 07:31:40'),
(34, 'বান্দরবান', 1, '2023-02-13 07:31:56', '2023-02-13 07:31:56'),
(35, 'চট্টগ্রাম', 1, '2023-02-13 07:32:14', '2023-02-13 07:32:14'),
(36, 'সুনামগঞ্জ', 1, '2023-02-13 07:40:44', '2023-02-13 07:40:44'),
(37, 'হবিগঞ্জ', 1, '2023-02-13 07:41:02', '2023-02-13 07:41:02'),
(38, 'মৌলভীবাজার', 1, '2023-02-13 07:41:15', '2023-02-13 07:41:15'),
(39, 'সিলেট', 1, '2023-02-13 07:41:25', '2023-02-13 07:41:25'),
(40, 'নরসিংদী', 1, '2023-02-13 07:43:46', '2023-02-13 07:43:46'),
(41, 'গাজীপুর', 1, '2023-02-13 07:43:56', '2023-02-13 07:43:56'),
(42, 'শরীয়তপুর', 1, '2023-02-13 07:44:09', '2023-02-13 07:44:09'),
(43, 'নারায়ণগঞ্জ', 1, '2023-02-13 07:44:21', '2023-02-13 07:44:21'),
(44, 'টাঙ্গাইল', 1, '2023-02-13 07:44:32', '2023-02-13 07:44:32'),
(45, 'কিশোরগঞ্জ', 1, '2023-02-13 07:44:44', '2023-02-13 07:44:44'),
(46, 'মানিকগঞ্জ', 1, '2023-02-13 07:44:55', '2023-02-13 07:44:55'),
(47, 'মুন্সিগঞ্জ', 1, '2023-02-13 07:45:08', '2023-02-13 07:45:08'),
(48, 'রাজবাড়ী', 1, '2023-02-13 07:45:19', '2023-02-13 07:45:19'),
(49, 'মাদারীপুর', 1, '2023-02-13 07:45:32', '2023-02-13 07:45:32'),
(50, 'গোপালগঞ্জ', 1, '2023-02-13 07:45:44', '2023-02-13 07:45:44'),
(51, 'ফরিদপুর', 1, '2023-02-13 07:45:55', '2023-02-13 07:45:55'),
(52, 'ঢাকা', 1, '2023-02-13 07:46:06', '2023-02-13 07:46:06'),
(53, 'শেরপুর', 1, '2023-02-13 07:47:14', '2023-02-13 07:47:14'),
(54, 'জামালপুর', 1, '2023-02-13 07:47:24', '2023-02-13 07:47:24'),
(55, 'নেত্রকোণা', 1, '2023-02-13 07:47:35', '2023-02-13 07:47:35'),
(56, 'ময়মনসিংহ', 1, '2023-02-13 07:47:46', '2023-02-13 07:47:46'),
(57, 'পঞ্চগড়', 1, '2023-02-13 07:48:43', '2023-02-13 07:48:43'),
(58, 'দিনাজপুর', 1, '2023-02-13 07:48:55', '2023-02-13 07:48:55'),
(59, 'লালমনিরহাট', 1, '2023-02-13 07:49:13', '2023-02-13 07:49:13'),
(60, 'নীলফামারী', 1, '2023-02-13 07:49:27', '2023-02-13 07:49:27'),
(61, 'গাইবান্ধা', 1, '2023-02-13 07:49:38', '2023-02-13 07:49:38'),
(62, 'ঠাকুরগাঁও', 1, '2023-02-13 07:49:48', '2023-02-13 07:49:48'),
(63, 'কুড়িগ্রাম', 1, '2023-02-13 07:50:00', '2023-02-13 07:50:00'),
(64, 'রংপুর', 1, '2023-02-13 07:50:14', '2023-02-13 07:50:14'),
(65, 'Andhra Pradesh', 3, '2023-02-19 01:39:28', '2023-02-19 01:39:28'),
(66, 'Arunachal Pradesh', 3, '2023-02-19 01:39:40', '2023-02-19 01:39:40'),
(67, 'Assam', 3, '2023-02-19 01:39:50', '2023-02-19 01:39:50'),
(68, 'Bihar', 3, '2023-02-19 01:40:00', '2023-02-19 01:40:00'),
(69, 'Chhattisgarh', 3, '2023-02-19 01:40:10', '2023-02-19 01:40:10'),
(70, 'Goa', 3, '2023-02-19 01:40:20', '2023-02-19 01:40:20'),
(71, 'Gujarat', 3, '2023-02-19 01:40:30', '2023-02-19 01:40:30'),
(72, 'Haryana', 3, '2023-02-19 01:40:39', '2023-02-19 01:40:39'),
(73, 'Himachal Pradesh', 3, '2023-02-19 01:41:19', '2023-02-19 01:41:19'),
(74, 'Jharkhand', 3, '2023-02-19 01:41:27', '2023-02-19 01:41:27'),
(75, 'Karnataka', 3, '2023-02-19 01:41:38', '2023-02-19 01:41:38'),
(76, 'Kerala', 3, '2023-02-19 01:41:47', '2023-02-19 01:41:47'),
(77, 'Madhya Pradesh', 3, '2023-02-19 01:41:57', '2023-02-19 01:41:57'),
(78, 'Maharashtra', 3, '2023-02-19 01:42:07', '2023-02-19 01:42:07'),
(79, 'Manipur', 3, '2023-02-19 01:42:18', '2023-02-19 01:42:18'),
(80, 'Meghalaya', 3, '2023-02-19 01:42:27', '2023-02-19 01:42:27'),
(81, 'Mizoram', 3, '2023-02-19 01:42:36', '2023-02-19 01:42:36'),
(82, 'Nagaland', 3, '2023-02-19 01:42:44', '2023-02-19 01:42:44'),
(83, 'Odisha', 3, '2023-02-19 01:42:55', '2023-02-19 01:42:55'),
(84, 'Punjab', 3, '2023-02-19 01:43:05', '2023-02-19 01:43:05'),
(85, 'Rajasthan', 3, '2023-02-19 01:43:14', '2023-02-19 01:43:14'),
(86, 'Sikkim', 3, '2023-02-19 01:43:24', '2023-02-19 01:43:24'),
(87, 'Tamil Nadu', 3, '2023-02-19 01:43:36', '2023-02-19 01:43:36'),
(88, 'Telangana', 3, '2023-02-19 01:43:46', '2023-02-19 01:43:46'),
(89, 'Tripura', 3, '2023-02-19 01:43:55', '2023-02-19 01:43:55'),
(90, 'Uttar Pradesh', 3, '2023-02-19 01:44:05', '2023-02-19 01:44:05'),
(91, 'Uttarakhand', 3, '2023-02-19 01:44:17', '2023-02-19 01:44:17'),
(92, 'West Bengal', 3, '2023-02-19 01:44:28', '2023-02-19 01:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SubCatName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cat_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SubMenuName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `SubMenuName`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 's', '1', '2022-11-26 01:36:05', '2022-11-26 01:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `timeperiods`
--

CREATE TABLE `timeperiods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PeriodName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeperiods`
--

INSERT INTO `timeperiods` (`id`, `PeriodName`, `created_at`, `updated_at`) VALUES
(1, 'আদিযুগ বা প্রাচীন যুগ (আ. ৬৫০ খ্রি. মতান্তরে ৯৫০-১২০০ খ্রি.)', '2022-11-26 05:53:54', '2022-11-26 05:53:54'),
(2, 'মধ্যযুগ (১২০০-১৮০০ খ্রি.)', '2022-11-26 05:54:29', '2022-11-26 05:54:29'),
(3, 'অন্ধকারযুগ (১২০১-১৩৫০ খ্রি.)', '2022-11-26 05:54:44', '2022-11-26 05:54:44'),
(4, 'আধুনিকযুগ (প্রথম পর্ব ১৭৬০-১৭৯৯ খ্রিঃ)', '2022-11-26 05:55:02', '2022-11-26 05:55:02'),
(5, 'আধুনিকযুগ (দ্বিতীয় পর্ব ১৮০০-১৮৫৮খ্রিঃ)', '2022-11-26 05:55:16', '2022-11-26 05:55:16'),
(6, 'আধুনিকযুগ (তৃতীয় পর্ব ১৮৫৯-১৯০০খ্রিঃ)', '2022-11-26 05:55:29', '2022-11-26 05:55:29'),
(7, 'আধুনিকযুগ (চতুর্থ পর্ব ১৯০১-১৯৪৭খ্রিঃ)', '2022-11-26 05:55:41', '2022-11-26 05:55:41'),
(8, 'আধুনিকযুগ (পঞ্চম পর্ব ১৯৪৮-২০০০খ্রিঃ)', '2022-11-26 05:55:54', '2022-11-26 05:55:54'),
(9, 'আধুনিকযুগ (ষষ্ঠ পর্ব ২০০১খ্রিঃ- বর্তমানকাল)', '2022-11-26 05:56:07', '2022-11-26 05:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CountryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StateName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserType`, `UserName`, `email`, `phone`, `CountryName`, `StateName`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ষষ্ঠ শ্রেণী', 'sagar', 'dotshine04@gmail.com', '01689061886', '1', '1', NULL, '$2y$10$ZvFfL1BYUYAgHnoVBpA94uMXAQPd/0yAROH8YQSaI3CVxyqxh3yl6', NULL, '2023-02-15 08:28:06', '2023-02-15 08:28:06'),
(2, 'ষষ্ঠ শ্রেণী', 'alamin', 'pronoyee@gmail.com', '01689061886', '1', '1', NULL, '$2y$10$ko8XYbR4RiO1dkYmvwoQv.os82Znt7SSbXmVF0FD8bNI4hfMfr8X2', NULL, '2023-02-20 02:50:31', '2023-02-20 02:50:31'),
(3, 'দাতা সদস্য', 's', 's@yahoo.com', '1', '1', '17', NULL, '$2y$10$8hF.r4RGlxHjfp1OhVUtje.YycLpf1Rt1XYUUEa2JOAzRZO4nbwda', NULL, '2023-05-24 01:17:56', '2023-05-24 01:17:56'),
(4, 'অষ্টম শ্রেণী', 'neela', 'do@gmail.com', '214', '1', '1', NULL, '$2y$10$fcookaPpoXlCcoi5/ewdJOXDTyHpAoV6GBzfdGDPPt8YVr4Q7VaHm', NULL, '2023-05-24 02:30:21', '2023-05-24 02:30:21'),
(5, 'দাতা সদস্য', 'Shatu', 'shatu@gmail.com', '01689061886', '1', '1', NULL, '$2y$10$zXmOBMk7FM3N4k7fpB2vr./YB3x.HiGcjutiQ3vgBLYjbNVbGTl22', NULL, '2023-07-22 22:29:52', '2023-07-22 22:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wNameBn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wNameEn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CountryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StateName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CityName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BirthPlace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wTperiod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wDbirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wBiography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `writerViews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `wNameBn`, `wNameEn`, `CountryName`, `StateName`, `CityName`, `BirthPlace`, `Language`, `wTperiod`, `wDbirth`, `image`, `wBiography`, `created_at`, `updated_at`, `writerViews`) VALUES
(1, 'আল-আমিন খান সাগর', 'Al-Amin Khan Sagar', '1', '1', '1', 'বেলগাড়ী', 'বাংলা', '8', '1983-12-11', '1676788574.jpg', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">আল</span><span style=\"font-size:18.0pt;\r\nline-height:107%\">-</span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">আমিন</span><span style=\"font-size:18.0pt;line-height:107%\">\r\n</span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">খান</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">সাগর</span><span style=\"font-size:18.0pt;\r\nline-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">বগুড়া</span><span style=\"font-size:18.0pt;line-height:107%\">\r\n</span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">জেলার</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">শেরপুর</span><span style=\"font-size:18.0pt;\r\nline-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">থানাধীন</span><span style=\"font-size:18.0pt;line-height:\r\n107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">বেলগাড়ী\r\nগ্রামে জন্মগ্রহণ</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">করেন। পিতা-মরহুম আকবর\r\nআলী খান মঙ্গু, মাতা- মোছাঃ সুফিয়া বেগম।পাঁচ ভাই-বোনের মধ্যে লেখক কনিষ্ঠ। গ্রামের\r\nজেডপিজি সরকারি প্রাথমিক বিদ্যালয়ের গণ্ডি পেরিয়ে শাহনাজ সিরাজ উচ্চ বিদ্যালয় থেকে\r\nএসএসসি; হাজী মরিয়ম কলেজ থেকে এইচএসসি এবং সরকারি বাংলা কলেজ থেকে রাষ্ট্রবিজ্ঞানে\r\nস্নাতকোত্তর অর্জন করেন। লেখকের প্রথম</span><span style=\"font-size:18.0pt;\r\nline-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">উপন্যাস</span><span style=\"font-size:18.0pt;line-height:\r\n107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">অবশেষে</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">ভালোবাসা</span><span style=\"font-size:\r\n18.0pt;line-height:107%\">, </span><span style=\"font-size:18.0pt;line-height:\r\n107%;font-family:Vrinda\">প্রথম</span><span style=\"font-size:18.0pt;line-height:\r\n107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">ছোটগল্প</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">নিশাচর</span><span style=\"font-size:18.0pt;\r\nline-height:107%\">, </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">প্রথম</span><span style=\"font-size:18.0pt;line-height:107%\">\r\n</span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">বেতার</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">নাটক</span><span style=\"font-size:18.0pt;\r\nline-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">সম্পর্ক। প্রণয়ী পাঠাগার নামে একটি পাঠাগার পরিচালনা করেন। পাশাপাশি</span><span style=\"font-size:18.0pt;line-height:107%\"> \"</span><span style=\"font-size:\r\n18.0pt;line-height:107%;font-family:Vrinda\">প্রণয়ী</span><span style=\"font-size:18.0pt;line-height:107%\">\" </span><span style=\"font-size:\r\n18.0pt;line-height:107%;font-family:Vrinda\">নামে</span><span style=\"font-size:\r\n18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:\r\n107%;font-family:Vrinda\">একটি</span><span style=\"font-size:18.0pt;line-height:\r\n107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">সাহিত্যপত্র</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;\r\nline-height:107%;font-family:Vrinda\">প্রকাশ</span><span style=\"font-size:18.0pt;\r\nline-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;\r\nfont-family:Vrinda\">করে</span><span style=\"font-size:18.0pt;line-height:107%\"> </span><span style=\"font-size:18.0pt;line-height:107%;font-family:Vrinda\">আসছেন।<o:p></o:p></span></p>', '2023-02-19 00:36:14', '2023-09-04 18:04:05', 21),
(2, 'রবীন্দ্রনাথ ঠাকুর', 'Rabindranath Tagore', '3', '92', '78', 'জোড়াসাঁকো', 'বাংলা', '6', '1861-05-07', '1676795161.png', '<span style=\"font-family: Vrinda; font-size: 24px; text-align: justify;\">রবীন্দ্রনাথ ঠাকুর (৭ মে ১৮৬১-৭ আগস্ট ১৯৪১ খ্রি., ২৫ বৈশাখ ১২৬৮-২২ শ্রাবণ ১৩৪৮ বঙ্গাব্দ) ছিলেন অগ্রণী বাঙালি কবি, ঔপন্যাসিক, সংগীতস্রষ্টা, নাট্যকার, চিত্রকর, ছোটগল্পকার, প্রাবন্ধিক, অভিনেতা, কণ্ঠশিল্পী ও দার্শনিক। তাঁকে বাংলা ভাষার সর্বশ্রেষ্ঠ সাহিত্যিক মনে করা হয়। রবীন্দ্রনাথকে গুরুদেব, কবিগুরু ও বিশ্বকবি অভিধায় ভূষিত করা হয়। রবীন্দ্রনাথের ৫২টি কাব্যগ্রন্থ, ৩৮টি নাটক, ১৩টি উপন্যাস ও ৩৬টি প্রবন্ধ ও অন্যান্য গদ্যসংকলন তাঁর জীবদ্দশায় বা মৃত্যুর অব্যবহিত পরে প্রকাশিত হয়। তাঁর সর্বমোট ৯৫টি ছোটগল্প ও ১৯১৫টি গান যথাক্রমে গল্পগুচ্ছ ও গীতবিতান সংকলনের অন্তর্ভুক্ত হয়েছে। রবীন্দ্রনাথের যাবতীয় প্রকাশিত ও গ্রন্থাকারে অপ্রকাশিত রচনা ৩২ খণ্ডে রবীন্দ্র রচনাবলী নামে প্রকাশিত হয়েছে। রবীন্দ্রনাথের যাবতীয় পত্রসাহিত্য উনিশ খণ্ডে চিঠিপত্র ও চারটি পৃথক গ্রন্থে প্রকাশিত। এছাড়া তিনি প্রায় দুই হাজার ছবি এঁকেছিলেন। রবীন্দ্রনাথের রচনা বিশ্বের বিভিন্ন ভাষায় অনূদিত হয়েছে। ১৯১৩ খ্রিস্টাব্দে গীতাঞ্জলি কাব্যগ্রন্থের ইংরেজি অনুবাদের জন্য তিনি সাহিত্যে নোবেল পুরস্কার লাভ করেন।&nbsp;&nbsp;</span>', '2023-02-19 02:26:01', '2023-08-13 21:28:51', 5),
(4, 'মানিক বন্দ্যোপাধ্যায়', 'Manik Bandopadhyay', '3', '74', '91', 'দুমকা', 'বাংলা', '7', '1908-05-19', '1676799477.jpg', '<span style=\"font-family: SolaimanLipi; text-align: justify;\">মানিক বন্দ্যোপাধ্যায় ১৯০৮ খ্রিষ্টাব্দের ১৯ মে (১৩১৫ বঙ্গাব্দের ৬ জ্যৈষ্ঠ) বিহারের সাওতাল পরগনা,বর্তমান ঝাড়খণ্ড রাজ্যের দুমকা শহরে জন্ম গ্রহণ করেন।তাঁর পৈতৃক বাড়ি ঢাকার বিক্রমপুরে ৷ জন্মপত্রিকায় তাঁর নাম রাখা হয়েছিল অধরচন্দ্র। তার পিতার দেওয়া নাম ছিল প্রবোধকুমার আর ডাকনাম মানিক। তাঁর পিতার নাম হরিহর বন্দ্যোপাধ্যায় ও মাতা নীরদাসুন্দরী দেবী। চৌদ্দ সন্তানের মধ্যে তিনি ছিলেন অষ্টম। পিতা হরিহর বন্দ্যোপাধ্যায় ছিলেন তদানীন্তন ঢাকা জেলার সেটেলমেন্ট বিভাগের সাব-রেজিস্টার।পিতার বদলির চাকরির সূত্রে মানিকের শৈশব-কৈশোর ও ছাত্রজীবন অতিবাহিত হয়েছে বাংলা-বিহার-ওড়িষার দুমকা, আরা, সাসারাম, কলকাতা, বারাসাত, বাঁকুড়া, তমলুক, কাঁথি, মহিষাদল, গুইগাদা, শালবনি, নন্দীগ্রাম, ব্রাহ্মণবাড়িয়া, টাঙ্গাইল প্রভৃতি শহরে। তাঁর মা নীরদাসুন্দরীর আদিনিবাস ছিল পূর্ববঙ্গের গাউদিয়া গ্রামে। এই গ্রামটির পটভূমি তিনি রচনা করেন তার প্রসিদ্ধ উপন্যাস পুতুলনাচের ইতিকথা।&nbsp;&nbsp;</span>', '2023-02-19 03:37:57', '2023-08-13 21:30:29', 2),
(6, 'অদ্বৈত মল্লবর্মণ', 'Adwaita Mallabarman', '1', '27', '94', 'গোকর্ণঘাট', 'বাংলা', '7', '1914-01-01', '1676875971.jpg', '<p class=\"MsoNormal\"><span style=\"font-family:SolaimanLipi\">অদ্বৈত মল্লবর্মণ (১লা\r\nজানুয়ারি, ১৯১৪- ১৬ই এপ্রিল, ১৯৫১) বাঙালি ঔপন্যাসিক ও সাংবাদিক। তৎকালীন কুমিল্লা\r\nজেলার অধীনে ব্রাহ্মণবাড়ীয়া মহকুমার (বর্তমান নাসিরনগর উপজেলার) গোকর্ণঘাট গ্রামে\r\nজন্মগ্রহণ করেন। তিতাস একটি নদীর নাম শিরোনামের একটিমাত্র উপন্যাস লিখে তিনি বাংলা\r\nসাহিত্যের চিরস্মরণীয় ও অমর প্রতিভা হিসেবে সবিশেষ স্বীকৃতি লাভ করেন।&nbsp;<o:p></o:p></span></p>', '2023-02-20 00:52:51', '2023-08-13 21:58:10', 1),
(7, 'হুমায়ূন আহমেদ', 'Humayun Ahmed', '1', '55', '109', 'মাতামহের বাড়ি', 'বাংলা', '8', '1948-11-13', '1676877195.jpg', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:SolaimanLipi\">হুমায়ূন\r\nআহমেদ বিংশ শতাব্দীর বাঙালি জনপ্রিয় কথাসাহিত্যিকদের মধ্যে অন্যতম। তাঁকে বাংলাদেশের\r\nস্বাধীনতা পরবর্তী শ্রেষ্ঠ লেখক গণ্য করা হয়।সাবলীল ঘটনার বর্ননা আর সহজ ভাষায় লেখার\r\nকারণে হুমায়ুন আহমেদের বই এর তুলনা নেই। হুমায়ূন আহমেদ একাধারে ঔপন্যাসিক, ছোটগল্পকার,\r\nনাট্যকার এবং গীতিকার। বলা হয় আধুনিক বাংলা কল্পবিজ্ঞান সাহিত্যের তিনি পথিকৃৎ। নাটক\r\nও চলচ্চিত্র পরিচালক হিসাবেও হুমায়ূন আহমেদ সমাদৃত। তাঁর প্রকাশিত গ্রন্থের সংখ্যা\r\nদুই শতাধিক। বাংলা কথাসাহিত্যে তিনি সংলাপপ্রধান নতুন শৈলীর জনক। হুমায়ুন আহমেদের বইসমূহ\r\nপৃথিবীর নানা ভাষায় অনূদিত হয়েছে, বেশ কিছু গ্রন্থ স্কুল-কলেজ বিশ্ববিদ্যালয়ের পাঠ্যসূচীর\r\nঅন্তর্ভুক্ত। সত্তর দশকের শেষভাগে থেকে শুরু করে মৃত্যু অবধি তিনি ছিলেন বাংলা গল্প-উপন্যাসের\r\nঅপ্রতিদ্বন্দ্বী কারিগর। এই কালপর্বে তাঁর গল্প-উপন্যাসের জনপ্রিয়তা ছিল তুলনারহিত।\r\nহুমায়ূন আহমেদ এর সৃষ্ট হিমু ও মিসির আলি চরিত্রগুলি বাংলাদেশের যুবকশ্রেণীকে গভীরভাবে\r\nউদ্বেলিত করেছে।তাঁর নির্মিত চলচ্চিত্রসমূহ পেয়েছে অসামান্য দর্শকপ্রিয়তা। তবে তাঁর\r\nটেলিভিশন নাটকগুলি ছিল সর্বাধিক জনপ্রিয়। সংখ্যায় বেশী না হলেও তাঁর রচিত গানগুলোও\r\nসবিশেষ জনপ্রিয়তা লাভ করে। তাঁর অন্যতম উপন্যাস হলো নন্দিত নরকে, মধ্যাহ্ন, জোছনা\r\nও জননীর গল্প, মাতাল হাওয়া ইত্যাদি। তাঁর নির্মিত কয়েকটি চলচ্চিত্র হলো দুই দুয়ারী,\r\nশ্রাবণ মেঘের দিন, ঘেঁটুপুত্র কমলা ইত্যাদি। নবীজি (২০১২) হুমায়ুন আহমেদের অপ্রকাশিত\r\nও অসমাপ্ত বই।</span></p>', '2023-02-20 01:13:15', '2023-09-03 23:04:50', 1),
(8, 'আবদুল্লাহ আল মামুন', 'Abdullah Al Mamun', '1', '53', '122', 'আমলা পাড়া', 'বাংলা', '7', '1942-07-13', '1684398934.jpg', 'আব্দুল্লাহ আল মামুন ১৯৪২ সালের ১৩ই জুলাই জামালপুরে আমলা পাড়ায় জন্ম গ্রহণ করেন। আব্দুল্লাহ আল মামুনের পৈতৃক নিবাস শেরপুরের শ্রীবরদী উপজেলার কাকিলাকুড়া ইউনিয়নের মলামারি গ্রামে। তার পিতা অধ্যক্ষ আব্দুল কুদ্দুস এবং মাতা ফাতেমা খাতুন। তিনি ১৯৬৪ সালে ঢাকা বিশ্ববিদ্যালয় থেকে ইতিহাস বিষয়ে এম এ পাস করেন। আব্দুল্লাহ আল মামুন তার পেশাগত জীবন শুরু করেন বাংলাদেশ টেলিভিশনে প্রযোজক হিসেবে। পরবর্তীকালে পরিচালক, ফিল্ম ও ভিডিও ইউনিট (১৯৬৬-১৯৯১), মহাপরিচালক, শিল্পকলা একাডেমী (২০০১) হিসেবে দায়িত্ব পালন করেন।[৪]', '2023-05-18 02:35:34', '2023-08-19 18:31:39', 3),
(9, 'test', 'test', '1', '1', '1', 'test', 'বাংলা', 'আদিযুগ বা প্রাচীন যুগ (আ. ৬৫০ খ্রি. মতান্তরে ৯৫০-১২০০ খ্রি.)', '2023-09-01', '1693625848.jpg', 'test', '2023-09-02 10:37:28', '2023-09-02 10:38:36', 1),
(10, 'test1', 'test1', '1', '1', '1', 'test1', 'বাংলা', 'আদিযুগ বা প্রাচীন যুগ (আ. ৬৫০ খ্রি. মতান্তরে ৯৫০-১২০০ খ্রি.)', '2023-09-01', '1693628325.jpg', '1', '2023-09-02 11:18:45', '2023-09-02 11:18:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `writups`
--

CREATE TABLE `writups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `WritupTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WriterName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WritupCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WritupPublished` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WritupContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `writupViews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writups`
--

INSERT INTO `writups` (`id`, `WritupTitle`, `WriterName`, `WritupCat`, `WritupPublished`, `image`, `WritupContent`, `created_at`, `updated_at`, `writupViews`) VALUES
(1, 'জাফরান', 'আল-আমিন খান সাগর', 'গল্প', '2023-09-02', '1693642386.jpg', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ভোর বেলায় জামালের ঘুম ভেঙে যায়। ঘুমের হাই তোলে বার কয়েক।\r\nউঠে বসে বিছানায়। ডানে বামে মোচড় দিতে যেয়ে থেমে যায়। শরীরের কোষে কোষে ব্যথা\r\nঅনুভব করে। কে যেন তার শরীরের প্রতিটি রোমকূপে প্রহার করেছে; এমন বোধ হচ্ছে কিন্তু\r\nএমন কোন ঘটনা জামালের মনে পড়ে না। তাহলে?<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">পূর্ব দরজা রান্নাঘর। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">সে ঘরের ছাউনি, খড় দিয়ে দোচালা। রান্নাঘর ঘেষেই বাঁশঝাড়,\r\nকাঁঠালগাছটি জড়িয়ে রেখেছে রান্নাঘরকে। বাঁশঝাড়ে বাদুরের ডানা ঝাপ্টা, দোয়েলের শিষ,\r\nশালিকের কিচিরমিচির, মোট কথা পাখিদের কূজনে প্রতিদিনের ঘুম ভাঙে জামালের।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল রান্নাঘরের মেঝেতে ঘুমায়। হাই তুলে উঠে দাঁড়ায়। ঠিকমত\r\nসে দাঁড়াতে পারেনা। তবু মেঝেতে বিছানো কাঁথা ভাজ করে দরজার দক্ষিণ পাশে রাখা ভাঙা\r\nবুক সেলফের নিচের তাকে রেখে দেয়।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">এ ঘরে ভোর থেকে গভীর রাত পর্যন্ত রান্না চলে। রাতের রান্না\r\nশেষ হলে খেজুর পাতার একটি ছেড়া পাটি (মাদুর) বিছিয়ে তার ওপর মায়ের দেয়া কাঁথা মুড়ি\r\nদিয়ে জামাল রাতের ঘুম ঘুমায়।&nbsp; <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">দীর্ঘ পাঁচটি বছর এ বাড়িতে পার করে দিয়েছে জামাল। কিছু\r\nমানুষের ব্যবহার তার বুকের ছাতি ভেঙে দিয়েছে, উঁচু মাথা নিচু করে দিয়েছে। আবার\r\nকিছু মানুষের ভালোবাসায় উজ্জীবিত হয়েছে। মাঝে মধ্যে পাঁচ বছরে কত মাস, কত দিন, কত\r\nঘন্টা, কত মিনিট হয়েছে তার হিসাব মিলিয়েছে। একদিন ভোরে ঠিক করলো কত সেকেন্ড সে পীরালয়ে\r\nথেকেছে; তারও হিসাব কষবে!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">কিন্তু না। পীরবাবার দরদ ভরা কণ্ঠে জামাল সব লেনদেন চুকে দিতে\r\nপারে না; চলে যেতে পারে না। দাঁতে-দাঁত চেপে নীরবে সব অন্যায় মুখ বুজে সয়ে নিয়েছে;\r\nকোনদিন প্রতিবাদ করেনি। একটু ভুলের কারণে বকা-ঝকার সাথে কত বেলা না খেয়ে থাকতে\r\nহয়েছে; কান ধরে দাঁড়িয়ে থাকতে হয়েছে তার হিসাব মিলাতে পারেনা।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ভাবতে ভাবতে রান্নাঘর পার হয়ে সে পুকুর পাড়ে চলে আসে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">এ অলৌকিক পুকুর পাড়ে রাত-বিরাতে আসা-যাওয়া পীরবাবার কড়া নিষেধ\r\nছিল। কারণ হিসেবে পীরবাবা বলেছেন- খাজাবাবার দরবারে যে দুটি পিশাচ ছিল, সে দুটি\r\nএখন আমার পুকুর পাড়ে বসবাস করে। ভোর রাতে এবং সাঝের বেলায় হাঁটা চলা করে। কিন্তু\r\nসাবধান! তারা দেখতে ঠিক মানুষের মতো তবে একটু ব্যতিক্রম। কেউ তাদের বিরক্ত করবা\r\nনা, বাজে মন্তব্য করবা না। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">সে কারণে সন্ধ্যা সাঁজে বা ভোর বেলায় কেউ পুকুর পাড়ে\r\nযাওয়া-আসা করে না। জামালও কোনদিন আসেনি। আজ কেন এলো, কি কারণে এলো মনে করতে পারে\r\nনা। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">পুকুর পাড়টা সবসময় ছিমছাম, নিরিবিলি থাকে; এখনো নিরিবিলি।\r\nচারদিকে কুয়াশার চাদর এখনো ঢেকে রেখেছে। ও পশ্চিম পাড়টায় গিয়ে বসে পড়ে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ভোরের আবছা অন্ধকার কাটেনি। রানুখালা গেইট পেরিয়ে পুকুরে নামে,\r\nগোসল সারে; চলে যায়। আছিরন আসে; গোসল সেরে চলে যায়। জবেদা সেও। তিনটি মানুষকে\r\nকোনদিন দিনে গোসল করতে দেখেনি জামাল। ভোরের আবছা অন্ধকারে ওদের গোসল দেখে গাঢাকা\r\nদেয় কিন্তু সে আর কতদূর...। শরীরের ব্যথায় নড়তে পারে না। আম গাছের আড়ালে শরীরটাকে\r\nছেড়ে দেয়।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ঘুম ভাঙ্গার পর শরীর ঝরঝর করে, ফুরেফুরে মনোভাব জেগে ওঠে।\r\nআপনা থেকে ভালোলাগার সব রঙ ফুটে ওঠে। এ ভালোলাগা বিধাতার অশেষ দান কিন্তু জামালের\r\nআজ কি হয়েছে?<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">গত রাতে ভারী কোন কাজ করা হয় নাই। এমনকি অন্য কারো সাথে\r\nঝগড়া-ঝাটি বা মারামারি করা হয় নাই, তাহলে এমন হচ্ছে কেন? শরীরের প্রতিটি অঙ্গ\r\nব্যথায় টনটন করছে। মনে হচ্ছে, কিছু কিছু জায়গা ভুলে উঠেছে। ফুলে ওঠা জায়গায় স্পর্শ\r\nলাগলে ব্যথায় সে ককিয়ে ওঠে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল তিন বছর বয়সে মায়ের আঁচল ধরে এ গ্রামে এসেছে। মা ছিল\r\nখাজাবাবার অনুরাগী-ভক্ত। প্রতি বছর শিমুলের ফুল ফোটা দিনে খাজাবাবার দরবার শরীফে\r\nআসেন ওরস মোবারক পালন করার জন্য কিন্তু সেবার মায়ের আর ফিরে যাওয়া হয়নি। শিশু\r\nসন্তানকে একা করে দিয়ে সৃষ্টিকর্তার কাছে চলে গেলেন। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">মৃত মায়ের পাশে জামালের নীরবহীন কান্নায় আকাশ বাতাস স্তব্ধ\r\nহয়ে যায়। মানুষের কোলাহলে ভীড় জমে ওঠে। দু’এক জন মানুষের ভীড় ঠেলে উঁকি-ঝুকি মেরে;\r\nএক পলক দেখে, আবার চলে যায়। আত্মীয়-স্বজন কেউ আসে না। বে-ওয়ারিশ লাশ হয়ে পড়ে থাকে\r\nআস্তানার আঙিনায়। শেষাব্দি গ্রামের মানুষ একে অপরের সহযোগীতায় চাঁদা তুলে মাজার\r\nপ্রাঙ্গণে গণকবরে দাফন করা হয়।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">দাফনের মধ্য দিয়ে একটা জীবনের পরিসমাপ্তি ঘটে। মানুষ জানে, যে\r\nচলে যায় সে আর কখনও ফিরে আসেনা।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামালের মা পরলোকগমণে বেঁচে গেলেন কিন্তু জামাল? মা’র কবরের\r\nপাশে বসে অপেক্ষা করে, মা তার ফিরে আসবেন। দিন কেটে যায় কিন্তু মা আর ফিরে আসেন\r\nনা। জামালের বিশ্বাস মা একদিন ঠিকই ফিরে আসবেন।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">সমাজে ঝড় ওঠে-‘শিশু জামালের দায়িত্ব কে নেবে?’ একান থেকে\r\nওকান, এ গ্রাম থেকে ও গ্রাম। শেষ পর্যন্ত মধ্যপাড়ার সিদ্দীক সাহেব জামালের দায়িত্ব\r\nনেন। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">সিদ্দিক সাহেব খাজাবাবার ভক্ত হিসেবে নিজেকে জোরালো দাবী\r\nকরেন। খাজা বাবার ওফাতের পর এ জমানার চিশ্তীয়া তরিকার দায়িত্ব পেয়ে ‘পীরবাবা’ নামে\r\nঅত্র এলাকায় পরিচিতি লাভ করেছেন। কিছুদিনের পরিসরে সিদ্দিক সাহেব পীরবাবা নামে\r\nবাঙলা-আসাম জুড়ে ভক্তের বন্যা বয়ে দেন। আভিজাত্যের মোড়ক গায়ে জড়িয়ে গ্রামের\r\nনিরীহ-সরল মানুষের কাছে অল্পদিনে সম্মানী ব্যক্তিতে পরিণত হয়ে গেলেন। সেই পীরবাবার\r\nআদেশে রেনু বু’জানের ঘাড়ে চাপালো জামালের সকল দায়িত্ব।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনু বুজানের কোলে পিঠে জামাল বড় হতে থাকে। দিন যায় জামালের\r\nদায়িত্ব বাড়ে। সকলের হাত ফরমায়েশ পালন করার জন্য জামাল, জামাল আর জামাল! <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">বাড়িতে কাজের লোকের অভাব নেই। রান্না করার জন্য দু’জন মহিলা\r\nসারা দিন ব্যস্ত। চা-পানীয় তৈরীর জন্য রেনু বুজান। পীরবাবার ছেলে-মেয়েদের গোসলের\r\nপানি তোলা থেকে শুরু করে দেখভাল করার জন্য আলেয়া সরিষা বাড়ী থেকে। বাগান পরিষ্কার\r\nরাখার জন্য বেড়াসহ চারদিকে চৌকুস দৃষ্টি দিয়ে সজাগ থাকে আমজাদ। রাতে পীর বাবার\r\nশরীর ম্যাসেজের জন্য দু’জন মহিলা; আছিরন ও জবেদা। দৈনিক বাজারের জন্য ঘরজামাই\r\nখালেক, বিরল থেকে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">পীরবাবার বড় মেয়ে খালেকের বাগদত্তা কিন্তু বাগদত্তা হয়েও\r\nখালেকের কপাল পোড়া। জীবনের সবকিছু বিসর্জন দিয়ে সে পীরকে বাবা-মায়ের আসনে স্থান\r\nদেয়। নিজের ঘর-বাড়ি ভুলে পীরবাবার আশ্রয়ে পড়ে থাকে। অলৌকিক মোহ মায়ায় পীরবাবার\r\nচরণে নিজেকে বিলীন করে দেয়; নিজের আমিত্ব বলে কিছু থাকে না। যা কিছু থাকে-দেখে, যা\r\nকিছু শোনে; যা কিছু বলে সবই পীরবাবার ইচ্ছায় হয়। রঙের এ দুনিয়ায় ছয় রিপুর রঙ খুজেঁ\r\nবেড়ায়; যেখানে আত্মা এবং পরমাত্মার সাথে কায়ারূপে আমির বসবাস! পার্থিব জীবনে মানুষ\r\nপীরবাবাকে যেভাবে মূল্যায়ন করে সেভাবে জন্মদাতা পিতা-মাতাকে দেখলে জীবনের কোনো\r\nঅংশই অপূর্ণতায়, অনাদরে&nbsp; নষ্ট হয় না; পড়ে\r\nথাকে না। পীরবাবার অলৌকিক মোহমায়া এতোটা তীব্র শক্তিশালী যে, পিতা-মাতাকে ছাড়িয়ে\r\nস্বয়ং সৃষ্টিকর্তাকে তর্কযুদ্ধে হারিয়ে দেয়!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">চৌকস অর্থালোভী পীরমাতা গোপন বৈঠকে বড় মেয়ের বিয়ে দিয়ে দেন\r\nপ্রাইমারী পাস, ভিলেজ পলিটিশিয়ানের সাথে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">বড় মেয়ের বিয়ে হয়ে যায়। খালেক বেদনায় ভেঙে পড়ে কিন্তু পীরবাবা\r\nহেরে যাবার পাত্র নন। তিনি সান্ত্বনা দেন-‘ভয় নাই বৎস, বড় মেয়ের বিয়ে হয়েছে তাতে\r\nকি সেঝ মেয়ে আছে না?’ এখন সেঝ মেয়ে খালেকের বাগদত্তা। দ্বিধাহীন হতাশায় খালেক এখনো\r\nজানে না পীরবাবার কোন্ মেয়েটি তার স্ত্রী হিসেবে প্রকাশ পাবে। তবুও অপেক্ষায় থাকে\r\nপীরবাবার ওয়াদা বলে কথা!<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল বসে বসে স্মৃতিচারণ করছে। তার সামনেই তো সব ঘটে গেলো।\r\nবিয়ের রাতে বড়বুজানের সে কী কান্না; খালেককে ছাড়া সে কাউকে বিয়ে করতে পারবে না\r\nপ্রয়োজনে সে বিষ খেয়ে আত্মহত্যা করবে তবু অমন একটা… বিয়ে করা সম্ভব না।&nbsp; <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামালের চোখের &nbsp;সামনে সেসব\r\nভেসে বেড়াল বাঁধা দিতে পারলো না। তার আরও মনে হয় এ বিশাল পুকুর একরাতে সেঁচন করে\r\nমাছ ধরে আবার একই রাতে মাটি দিয়ে ভরাট করার ইতিহাস গ্রামবাসী জানে; এমন অসীম\r\nক্ষমতার অধিকারী পীরবাবা। পীরবাবার প্রতি ভক্তদের টান; উপচে পড়া ভীড়; মানত-খয়রাত,\r\nদান-দক্ষিণাতে পীরবাবা অল্পদিনে আঙুল ফুলে কলা গাছ হয়ে ওঠেন। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">পীরবাবা হাতের কড়া গুণে গুণে কাজের লোকের হিসাব মিলায়। না;\r\nভ্যাকান্সি খালি নাই। তাহলে জামালের জন্য কি কাজ দেওয়া যায়? ভেবে চিন্তে হাত তুলে\r\nডাক দেয়- জামাল?<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘জ্বি বাবা।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘তোমাকে একটা কঠিন দায়িত্ব দিব। পালন করতে পারবা?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘জ্বি বাবা, পারবো।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘সাব্বাস মিয়া। শোন, এই যে গ্লাসটা দেখছো, এটা সুদূর আজমেরী\r\nশরীফ থেকে আনা। এ গ্লাসে আমি জাফরান পান করি। তোমার দায়িত্ব হচ্ছে আমার জাফরান পান\r\nকরার আগে ও পরে গ্লাসটা সুন্দর করে ধুবা।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘জ্বি বাবা।’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘ধর, এখন থেকে এটার দায়িত্ব তোমার।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল গ্লাসটি হাতে নিয়ে সুবোধ বালকের মত সেদিন চলে এসেছিলো। মনে\r\nমনে শপথ নিয়েছিল আর যাই হোক এ একটি কাজ গুরুত্ব সহকারে পালন করতে হবে। দিনের পর সে\r\nতা করেও এসেছে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘বসে বসে কি ভাবা হচ্ছে?’ চমকে ওঠে জামাল। রেনু বুজান\r\nপীরালয়ের দিকে ছুটছে। আহত পাখির দুটি চোখ তুলে জামাল বলে ওঠে- ‘বুজান গত রাতে আমার\r\nকী হইছিল?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘পীর বাবার নৈকট্য পাইছিলা ভাইজান।’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">একগাল শব্দ করে হেসে ওঠে রেনুবুজান। জামাল রহস্য বুঝে উঠতে\r\nপারেনা। বোকা চোখে চেয়ে থাকে। না; রেনু বুজানের হাসি থামে না।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘সত্যি বলছি বুজান। গত রাতে আমার কি হইছিল কোন কথাই আমার মনে পড়ে\r\nনা। তাছাড়া দেখো, হাতে এসব কিসের দাগ? শরীরে প্রচণ্ড ব্যাথা।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনুবুজানের মুখের হাসি তেলেস্মাত নিভে যায়। দ্রুত পাশে বসে\r\nদরদ দিয়ে বলে ওঠে- ‘তুই এ বাড়ি থেইক্যা চইলা যা ভাই।’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘চইলা আর কই যামু? তুমি আর পীরবাবা ছাড়া আমার তো কেউ নাই।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘ওরা তরে মাইরা ফালাবো। ষড়যন্ত্র চলতাছে।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘আমি কোন অন্যায় করি নাই বুজান।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘এ বাড়িতে কারো অন্যায় করতে হয় না। ভেতরের গোপন তথ্য ফাঁস\r\nহবার ভয়ে যেকোন সিদ্ধান্ত তারা নিবার পারে।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘আমি তো কাউকে কিছু বলি নাই বুজান।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘গত রাতে অজ্ঞান হইয়া টিউবওয়েল পাড়ে পইড়াছিলি। ঘোরের মধ্যে\r\nপীরবাবাকে ভণ্ড-বাবা বলে অনেক ব্যাখ্যা দিছিস। পরে জ্বিন ধরার নাম কইরা তরে বেধর মার\r\nমারছে। তুই শার্ট খুইলা দ্যাখ! আরে আমিতো জানি তোর কি হইছিল?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘বুজান তুমি আমার মায়ের মতো। মায়ের পরে তোমার কোলেই বড় হইছি।\r\nআমি তোমারে সত্যি কইতাছি, আমার কি হইছিল কিছুই মনে নাই।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘পীরবাবার জাফরান খাওয়ার গ্লাস ধূইয়া পানি খাইছিলি?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘হ’ বুজান। খাইছিলাম। তারপর কি হইছে মনে নাই।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘ওই গ্লাস ধুইয়া পানি খাওয়ার অপরাধে পীরবাবা অভিশাপ দিল;\r\nতারপর থেইক্যা নুর ইসলাম পাগল হইয়া গেল। এখনো সে নিরুদ্দেশ। পীরবাবায় কয় সে\r\nআধ্যাত্বিক জগতে প্রবেশ করছে। আরে বোকা আধ্যাত্বিক জগতে প্রবেশ করলে কেউ পাগল হয়\r\nনা, আল্লাহর অলি হয়, সৃষ্টিকর্তার সাথে সরাসরি যোগাযোগ হয়’! <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘না বুজান, পীরবাবার অভিশাপে নূর ইসলাম পাগল হয় নাই। আমি জানি\r\nসেকথা।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘কি জানিস ভাই, বল্?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘আমি দেখেছি বুজান, সেদিন রানুখালা টিকটিকির ল্যাজ, ধুতুরার\r\nগোটা আরও কিসের বিঁচি দস্তানায় (পান ছ্যাচার যন্ত্র) পিসিয়ে রস তৈরী করলো পরদিন\r\nঘুম থেকে উঠে দেখি নূর ইসলাম পাগল।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘নূর ইসলামকে পাগল বানানোর কারণ কি? তুই কিছু জানিস ভাই?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘রানুখালার যখন প্রথম বিয়া হইল সেই রাতে পীরবাবারে ধইরা\r\nরানুখালা কান্নাকাটি করছিল। সেকি কান্না! তাদের ভেতর প্রেমের সম্পর্ক ছিল এটা নূর\r\nইসলাম দেখছিল। গ্রামের লোকজন যদি তাদের অবৈধ সম্পর্কের কথা জানে এই কারণে নূর\r\nইসলামকে পাগল বানাইয়া দিল। তুমি দ্যাখো নাই, দুই তিনটা বিয়া হওয়ার পরেও রানুখালা\r\nপীরালয়ে ছুইটা আইছে স্বামীর ঘরে আর যায় নাই।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘এসব কি বলছিস জামাল!’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘পীরবাবায় সংগঠন করছে। এ গ্রামে তার প্রতিপত্তি বিস্তার করার\r\nজন্য প্রতিটি সেক্টরে লোক সেট করা আছে। তারা স্বেচ্ছায় জীবন দিতেও কুন্ঠাবোধ করবো\r\nনা। মাঝে মধ্যে এমপি, মিনিস্টার তাঁর ঘরে গভির রাতে মিটিং করে। ভয়ংকর কথা চলে তখন।\r\nকারো সাধ্য নাই সে কথা শোনার। এই ধর আমি তোমাকে বলছি, এ কথা যদি পীরবাবা শোনে\r\nতাহলে দেখবা এ রাত ভোর হওয়ার আগে আমি পাগল হইয়া গেছি অথবা আমার মৃত্যু হইছে।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘জামাল, আমি তরে হারাইতে পারবো না ভাই। চল্ এ বাড়ি থেইক্যা\r\nআমরা পালাইয়া যাই?’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘কিযে কওনা বুজান। যার নুন খাইছি তার সাথে বেঈমাণ করি কিরে? এখন,\r\nতাকে ভাবতে গেলে আমার দুঃখ হয়। অভাব, অনটনে পইড়া মানুষটা পীর ব্যবসায় নামছে। এ ছাড়া\r\nতার কোন পথ ছিল না; একবারও কি ভেবে দেখেছো আমরা এতোগুলো মানুষ এ বাড়িতে কাজ করছি\r\nআমাদের খাওয়া-দাওয়া আসে কোত্থেকে? পীরবাবার কী এমন ইনকাম সোর্স আছে?’ একদমে\r\nকথাগুলো বলে জামাল দীর্ঘশ্বাস ফেলে। একটু নীরব থেকে আবারও বলে ওঠে- ‘বুজান আমরাই\r\nবা কেনো এ বাড়িতে পইড়া আছি; বেহেস্ত পাওয়ার আশায়?’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেণুবুজান চুপ থাকে। জামাল বলে যায়- আল্লাহর কিতাব কোরআন,\r\nআল্লাহর রাসূলের বাণী; এসবের উপর আমাদের কোন বিশ্বাস নাই। বিশ্বাস ঐ পীরবাবার ওপর,\r\nআমাদের পুলসেরাত পার করবেন, বেহেস্তে পৌছাইয়া দিবেন, তুমি যাও বুজান, আমি একটু একা\r\nথাকি।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনুবুজান কথা বাড়ায় না; চলে যায়। জামাল চেয়ে দেখে রেনু বুজান\r\nচলে যাচ্ছে। তার চলে যাওয়ার পথে ধিরে ধিরে অন্ধকার নামে। অন্ধকারে জ্বল জ্বল করে\r\nজ্বলে ওঠে গ্লাসটি। ওই গ্লাসে বাবা শুধু জাফরান খায়। পানি পান করার গ্লাস আলাদা।\r\nজাফরান পান করার পর পরই বাবা দু\'চোখ বন্ধ করেন; আল্লাহ পাকের নৈকট্য লাভ করেন। সে\r\nমুহুর্তে কারো এখতিয়ার নাই পীরবাবাকে বিরক্ত করার। শুধু রানুখালা তখন বেহেস্তি হুর\r\nহয়ে পীরবাবার পিষ্ঠ ঘেষে বসে দু’হাতে কপাল ম্যাসেজ করেন। কপাল ম্যাসেজের আগে\r\nরানুখালা কাপের ভেতর সরিষা তেল ও পানি ঘুটে পীরবাবার মাথা ম্যাসেজ করেন।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">এ পর্যন্ত জামালের মুখস্ত। তারপর রানুখালার ইশারায় জামাল ঘর\r\nথেকে বের হয়ে আসতে বাধ্য হয়। শুরু হয় ভাবতত্ত্ব; ভক্তিমুলক, কাওয়ালী এসবই নাকি\r\nবেহেস্তী গজল! <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল ভাবতে থাকে-পীরবাবা প্রতিরাতে জাফরান খায়। আরও কয়েকটি\r\nবোতল থেকে রঙিন পানি ঢেলে বাবা জাফরান বানায়। জাফরান যখন তৈরি হয় চারপাশে মিষ্টি\r\nএকটা গন্ধ ভরে ওঠে। সে গন্ধে সাপ-ভোমর দুইই ব্যাকুল হয়। জামাল শুনেছে বিশেষ কিছু\r\nদিনে সাপ-ভোমর পীরবাবার ওয়াজ নসিহত শোনার জন্য ভক্তদের সারিতে ফনা তুলে চুপটি করে\r\nথাকে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ভক্তরা প্রথম প্রথম ভয়ে দৌড়ে পালাতো, কেউ কেউ লাঠি-ফলা তুলে\r\nসাপ মারার জন্য এগিয়ে আসতো। সেসময় পীরবাবার ইশারা পেয়ে ভক্তরা থেমে যেতো এবং দেখতো\r\nসাপ-ভোমর-মানুষ এক কাফেলায় বসে পীরবাবার অমীয় বাণী শ্রবণ করছে; অনেক গুণের অধিকারী\r\nপীরবাবা। এসবই সে লোকমুখে শুনেছে। জামাল দেখেছে, সে গন্ধে আর যাই হোক রানুখালার\r\nঠোঁটের কোণায় নরম একটা হাসি ফুটে ওঠে। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রানুখালা পীরমার ছোট বোন। ছোট বেলা থেকে এ বাড়িতে। সবকিছুতে\r\nতার তদারকি আছে। জামালের কাছে তা বাড়াবাড়ি মনে হয়। একদিন বলেই ফেলেছিল- ‘রানুখালা\r\nতোমার পণ্ডিতি দেখাতে হবে না।’ যার কারণে পীরবাবা হাজারবার কান ধরে উঠ-বোস করার\r\nশাস্তি দিয়েছিল। সেদিন কেউ তার পাশে দাঁড়ায়নি এমন কি রেনুবুজানও! পাঁচ ছ’শ বার\r\nউঠ-বোস করার পরে মাথা ঘুরে পড়ে গিয়েছিল। জ্ঞান ফিরে এলে দেখেছে রেনু বুজানের\r\nবিছানায়। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনু বুজানের স্বামী সংসার নেই। লালমনিরহাটের প্রত্যন্ত অজো\r\nপাড়া গা থেকে এসেছে। কেন এসেছে কি উদ্দেশ্যে এসেছে তা জানা যায়নি। তাকে কোনদিন\r\nনিজের বাড়িতে বেড়াতে যেতে দেখেনি। নিজের কাছে অনেক দিন প্রশ্ন রেখেছে; মিল খুঁজে\r\nপায়নি, উত্তর খুঁজে পায়নি। তাহলে আমরা সবাই কেন পীরালয়ে পড়ে আছি? <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">বুকের খুব গভির থেকে একটা দীর্ঘশ্বাস বেড়িয়ে যায়। কোন কিছু\r\nমেলাতে পারে না। যে জাফরান পান করার গ্লাস ধূয়ে এক ঢোক পানি গিলে জামাল দুদিন\r\nঅজ্ঞান হয়ে পড়েছিল সেই জাফরান গ্লাসের পর গ্লাস পান করে পীরবাবা স্বাভাবিক থাকে কী\r\nকরে?<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামালের অল্প অল্প মনে হয়- মা বেঁচে থাকতে পীরবাবার পায়ে কপাল\r\nঠেঁকিয়ে ছালাম করতো। পদ্মাসনে গুরুর দু’হাটুর মাঝে চুমু (ভক্তি) খেত। মাজারে গিয়ে\r\nসিজদা করতো। নাউযুবিল্লাহ। শুধু মা না; এ গ্রামের প্রায় লোকই পীরবাবার সামনে\r\nনতজানু হয়ে থাকে। তখন পীরবাবা কাণ্ডারির তরী বানিয়ে ভক্তদের নিয়ে আদেশ-উপদেশ,\r\nপরপারে বসবাসের স্থায়ী বন্দোবস্ত করার মেইল বন্ধন তৈরি করেন। গলায় ভর দিয়ে\r\nশিষ্যদের উদ্দেশ্যে বলে উঠেন- ‘মিয়ারা নামাজ রোজা কায়েম করেন।’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">ভূতের মুখে রাম ডাক শুনে কেউ কেউ হেসে ওঠেন। যে মানুষটিকে\r\nকোনদিন মসজিদে নামায পড়তে দেখেনি; রোজা রাখতে দেখেনি সে লোকটি কি করে অবলীলায়\r\nনামায রোজার কথা বলে যায়! গ্রামবাসী জানে পীরবাবা কোনদিন নামায পড়েনি, রোজা\r\nরাখেনি। আসলে এভাবে বললে ভুল হয়। পীরবাবা জাহেরী নামাজ পড়েন না, জাহেরী রোযা পালন\r\nকরেন না। তিনি সবই পালন করেন তবে বাতেনি। সাধারণ মানুষ বাতেনিতে প্রবেশ করতে পারেন\r\nনা। সেতো ঈশ্বরের গোপন আস্তানা, হুরদের লীলাভূমি, মানুষের অবচেতন মনের স্বর্গ। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">পীরবাবা জাফরান পান করার পর ঈশ্বরের দরবারে প্রবেশ করেন। সে\r\nসময় রানুখালা ছাড়া অন্য কারো প্রবেশাধিকার নেই; এমন কি ছোট জামালেরও। তখন জামালের\r\nদায়িত্ব থাকে দরজায় পাহাড়া দেওয়া। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">একটা গভির নীরব যাতনা ঠাণ্ডা অস্ত্রের মতো বুকের গভিরে বিঁধতে\r\nথাকে। জামাল উঠে দাঁড়ায়। আকাশ ভেঙে পড়ে মাথায়। সকাল থেকে কেউ তার সাথে একটি কথাও\r\nবলেনি। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনুবুজান সে তখনই চলে গেছে। ধিরে ধিরে রেনুবুজানের উঠোনে\r\nগিয়ে দাঁড়ায়। বাড়িটি নিরিবিলি, কোন সাড়া শব্দ নেই। বুজান বলে ডাকে কয়েক বার।\r\nরেনুবুজান বের হয়ে আসে।<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘বুজান ভাত দাও’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">রেনুবুজান কথা বাড়ায় না। জামালকে ঘরের ভেতর নিয়ে পান্তাভাত\r\nবাড়িয়ে দেয়। জামাল গ্রোগ্রাসে গিলে যায়। ‘জান বুজান চরম ক্ষুধা লেগেছিল। মনে\r\nহচ্ছিল সমস্ত পৃথিবীটাই খেয়ে ফেলি। তুমি আমায় খেতে না দিলে আমি এবেলায় মরে যেতাম।\r\nএটাই বুঝি আমার শেষ খাওয়া।’ <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">‘এভাবে বলে না ভাই।’<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">জামাল ঘুমিয়ে পড়ে। রেনুবুজান পাশে বসে জামালের চুলে হাত\r\nবুলিয়ে দেয়। শার্টের আস্তিন তুলে ক্ষতস্থানে মলম লাগায়। চোখে জল নেমে আসে। কি\r\nযাতনা তার বুকের ভেতর যে পাইথনের মতো ফুসে ওঠে। রেনুবুজান তা বুঝতে পারে না। <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nfont-family:Nikosh\">#<o:p></o:p></span></p>', '2023-03-21 02:52:51', '2023-09-02 22:00:01', 16),
(4, 'dd updated', 'dd', 'গল্প', '2023-09-02', '1693649461.jpg', 'dd', '2023-09-02 13:47:56', '2023-09-02 17:11:01', 0),
(5, 'ww', 'ww', 'গল্প', '2023-09-02', '1693648834.jpg', 'ww', '2023-09-02 17:00:34', '2023-09-02 17:53:55', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `almirahs`
--
ALTER TABLE `almirahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awardcats`
--
ALTER TABLE `awardcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookcats`
--
ALTER TABLE `bookcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookpdfs`
--
ALTER TABLE `bookpdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookrequests`
--
ALTER TABLE `bookrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookshelves`
--
ALTER TABLE `bookshelves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorcats`
--
ALTER TABLE `donorcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pichouses`
--
ALTER TABLE `pichouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmecats`
--
ALTER TABLE `programmecats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptubes`
--
ALTER TABLE `ptubes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeperiods`
--
ALTER TABLE `timeperiods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writups`
--
ALTER TABLE `writups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `almirahs`
--
ALTER TABLE `almirahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awardcats`
--
ALTER TABLE `awardcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookcats`
--
ALTER TABLE `bookcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookpdfs`
--
ALTER TABLE `bookpdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookrequests`
--
ALTER TABLE `bookrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookshelves`
--
ALTER TABLE `bookshelves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donorcats`
--
ALTER TABLE `donorcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pichouses`
--
ALTER TABLE `pichouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programmecats`
--
ALTER TABLE `programmecats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ptubes`
--
ALTER TABLE `ptubes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timeperiods`
--
ALTER TABLE `timeperiods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `writups`
--
ALTER TABLE `writups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
