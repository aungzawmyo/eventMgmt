-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 04:02 AM
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
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` bigint(20) UNSIGNED NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `Description`, `Date`, `Time`, `Location`, `created_at`, `updated_at`) VALUES
(1, 'Event Name', 'This is a brief description of the event. It provides an overview of what attendees can expect.This is a brief description of the event. It provides an overview of what attendees can expect.This is a brief description of the event. It provides an overview of what attendees can expect.This is a brief description of the event. It provides an overview of what attendees can expect.This is a brief description of the event. It provides an overview of what attendees can expect.This is a brief description of the event. It provides an overview of what attendees can expect.', '2024-06-12', '03:20:10', '123 Main Street, City, Country', '2024-06-02 13:57:36', '2024-06-10 13:57:38'),
(2, 'Ameliorated stable Graphical User Interface', 'Room floor production article dark. Response clear build. Statement read also glass call. hellow', '2024-02-05', '21:28:35', '220 Stacey Meadow Suite 137, Port Lisachester, CA 41632', '2024-06-10 04:46:21', '2024-06-10 16:11:39'),
(3, 'Public-key zero tolerance monitoring', 'Front election always hospital article new. Speech leg other authority half.', '2024-03-30', '17:56:15', '308 Anthony Shoals Suite 154, Julianport, CO 15015', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(4, 'Face-to-face 24hour workforce', 'Study certain be remain state friend him. Scene beyond others marriage.', '2024-05-29', '13:58:46', '9981 White Overpass Apt. 397, Butlerhaven, ME 25132', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(5, 'Profound homogeneous implementation', 'Month officer moment you. Lead speech someone political beautiful girl production.', '2024-04-11', '18:28:51', '558 Andrews Courts, Sandersfort, RI 35715', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(6, 'Team-oriented directional system engine', 'Institution key special street argue science. Attorney policy protect toward pull.', '2024-03-10', '17:36:50', '56785 Smith Fort, North Nancyview, OR 41768', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(8, 'Progressive user-facing open system', 'Officer figure in. Two body reduce after leave. Role girl test trade significant.', '2024-05-02', '09:40:32', '3742 Stevens Village, West Lauren, DE 96150', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(9, 'Object-based static strategy', 'Whom land lot hear visit since. Next tax operation blue increase.', '2024-01-22', '10:22:15', '59493 Miller Route Apt. 591, North Kellyfort, NV 43242', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(10, 'Organic executive software', 'Along movie. Similar our left tell matter. Life window child so the agreement.', '2024-03-19', '16:12:09', '9407 Amber Divide, Ryanland, MS 52797', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(11, 'Re-engineered impactful local area network', 'The meeting sign type black into. Time edge series approach bed organization.', '2024-01-29', '14:50:18', '6777 Stuart Lights, Jasonside, GA 82143', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(12, 'Advanced 24/7 matrix', 'Land after so strong they opportunity radio.', '2024-02-19', '15:08:41', '127 Lee Gardens Apt. 970, Mcgrathside, SD 68267', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(13, 'Expanded leading edge policy', 'Modern seem type challenge other. Discover cell issue deal.', '2024-03-03', '19:28:12', '162 Christopher Lodge, New Brandonstad, WV 48534', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(14, 'Persistent stable portal', 'Building operation shoulder no. Available sit stage statement produce follow.', '2024-04-27', '17:21:07', '294 Stewart Island, East Sharonport, WY 52443', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(15, 'Re-contextualized modular data-warehouse', 'Weight reason recent sound out. Floor political yourself child.', '2024-02-14', '11:49:19', '158 Michael Heights, North Kevinland, LA 53714', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(16, 'Down-sized regional alliance', 'Economic movie fact. Adult role head year care.', '2024-05-11', '16:35:43', '89888 Amanda Lodge, South Paul, ND 56729', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(17, 'Stand-alone transitional installation', 'Song garden wish think during while. Behind possible production fish serious.', '2024-06-07', '18:02:58', '973 Linda Crossroad Suite 162, North Jacquelineborough, MT 76938', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(18, 'Optional impactful knowledge user', 'Sign develop rich. Rise same occur among but full. Act edge building push they away far.', '2024-03-16', '08:42:57', '877 Garcia Walks, North Kaylahaven, NH 23424', '2024-06-10 04:46:21', '2024-06-10 12:46:21'),
(19, 'Ameliorated stable Graphical User Interface', 'Room floor production article dark. Response clear build. Statement read also glass call.', '2024-02-05', '21:28:35', '220 Stacey Meadow Suite 137, Port Lisachester, CA 41632', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(20, 'Public-key zero tolerance monitoring', 'Front election always hospital article new. Speech leg other authority half.', '2024-03-30', '17:56:15', '308 Anthony Shoals Suite 154, Julianport, CO 15015', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(21, 'Face-to-face 24hour workforce', 'Study certain be remain state friend him. Scene beyond others marriage.', '2024-05-29', '13:58:46', '9981 White Overpass Apt. 397, Butlerhaven, ME 25132', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(22, 'Profound homogeneous implementation', 'Month officer moment you. Lead speech someone political beautiful girl production.', '2024-04-11', '18:28:51', '558 Andrews Courts, Sandersfort, RI 35715', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(23, 'Team-oriented directional system engine', 'Institution key special street argue science. Attorney policy protect toward pull.', '2024-03-10', '17:36:50', '56785 Smith Fort, North Nancyview, OR 41768', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(24, 'Total intermediate focus group', 'Boy state democratic. Perform fight week social.', '2024-06-08', '12:16:20', '2343 Hall Bridge, Lake Tracyfort, NY 19474', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(25, 'Progressive user-facing open system', 'Officer figure in. Two body reduce after leave. Role girl test trade significant.', '2024-05-02', '09:40:32', '3742 Stevens Village, West Lauren, DE 96150', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(26, 'Object-based static strategy', 'Whom land lot hear visit since. Next tax operation blue increase.', '2024-01-22', '10:22:15', '59493 Miller Route Apt. 591, North Kellyfort, NV 43242', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(27, 'Organic executive software', 'Along movie. Similar our left tell matter. Life window child so the agreement.', '2024-03-19', '16:12:09', '9407 Amber Divide, Ryanland, MS 52797', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(28, 'Re-engineered impactful local area network', 'The meeting sign type black into. Time edge series approach bed organization.', '2024-01-29', '14:50:18', '6777 Stuart Lights, Jasonside, GA 82143', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(29, 'Advanced 24/7 matrix', 'Land after so strong they opportunity radio.', '2024-02-19', '15:08:41', '127 Lee Gardens Apt. 970, Mcgrathside, SD 68267', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(30, 'Expanded leading edge policy', 'Modern seem type challenge other. Discover cell issue deal.', '2024-03-03', '19:28:12', '162 Christopher Lodge, New Brandonstad, WV 48534', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(31, 'Persistent stable portal', 'Building operation shoulder no. Available sit stage statement produce follow.', '2024-04-27', '17:21:07', '294 Stewart Island, East Sharonport, WY 52443', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(32, 'Re-contextualized modular data-warehouse', 'Weight reason recent sound out. Floor political yourself child.', '2024-02-14', '11:49:19', '158 Michael Heights, North Kevinland, LA 53714', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(33, 'Down-sized regional alliance', 'Economic movie fact. Adult role head year care.', '2024-05-11', '16:35:43', '89888 Amanda Lodge, South Paul, ND 56729', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(34, 'Stand-alone transitional installation', 'Song garden wish think during while. Behind possible production fish serious.', '2024-06-07', '18:02:58', '973 Linda Crossroad Suite 162, North Jacquelineborough, MT 76938', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(35, 'Optional impactful knowledge user', 'Sign develop rich. Rise same occur among but full. Act edge building push they away far.', '2024-03-16', '08:42:57', '877 Garcia Walks, North Kaylahaven, NH 23424', '2024-05-10 12:47:01', '2024-06-10 12:47:01'),
(36, 'Ameliorated stable Graphical User Interface', 'Room floor production article dark. Response clear build. Statement read also glass call.', '2024-02-05', '21:28:35', '220 Stacey Meadow Suite 137, Port Lisachester, CA 41632', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(37, 'Public-key zero tolerance monitoring', 'Front election always hospital article new. Speech leg other authority half.', '2024-03-30', '17:56:15', '308 Anthony Shoals Suite 154, Julianport, CO 15015', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(38, 'Face-to-face 24hour workforce', 'Study certain be remain state friend him. Scene beyond others marriage.', '2024-05-29', '13:58:46', '9981 White Overpass Apt. 397, Butlerhaven, ME 25132', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(39, 'Profound homogeneous implementation', 'Month officer moment you. Lead speech someone political beautiful girl production.', '2024-04-11', '18:28:51', '558 Andrews Courts, Sandersfort, RI 35715', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(40, 'Team-oriented directional system engine', 'Institution key special street argue science. Attorney policy protect toward pull.', '2024-03-10', '17:36:50', '56785 Smith Fort, North Nancyview, OR 41768', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(41, 'Total intermediate focus group', 'Boy state democratic. Perform fight week social.', '2024-06-08', '12:16:20', '2343 Hall Bridge, Lake Tracyfort, NY 19474', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(42, 'Progressive user-facing open system', 'Officer figure in. Two body reduce after leave. Role girl test trade significant.', '2024-05-02', '09:40:32', '3742 Stevens Village, West Lauren, DE 96150', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(43, 'Object-based static strategy', 'Whom land lot hear visit since. Next tax operation blue increase.', '2024-01-22', '10:22:15', '59493 Miller Route Apt. 591, North Kellyfort, NV 43242', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(44, 'Organic executive software', 'Along movie. Similar our left tell matter. Life window child so the agreement.', '2024-03-19', '16:12:09', '9407 Amber Divide, Ryanland, MS 52797', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(45, 'Re-engineered impactful local area network', 'The meeting sign type black into. Time edge series approach bed organization.', '2024-01-29', '14:50:18', '6777 Stuart Lights, Jasonside, GA 82143', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(46, 'Advanced 24/7 matrix', 'Land after so strong they opportunity radio.', '2024-02-19', '15:08:41', '127 Lee Gardens Apt. 970, Mcgrathside, SD 68267', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(47, 'Expanded leading edge policy', 'Modern seem type challenge other. Discover cell issue deal.', '2024-03-03', '19:28:12', '162 Christopher Lodge, New Brandonstad, WV 48534', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(48, 'Persistent stable portal', 'Building operation shoulder no. Available sit stage statement produce follow.', '2024-04-27', '17:21:07', '294 Stewart Island, East Sharonport, WY 52443', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(49, 'Re-contextualized modular data-warehouse', 'Weight reason recent sound out. Floor political yourself child.', '2024-02-14', '11:49:19', '158 Michael Heights, North Kevinland, LA 53714', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(50, 'Down-sized regional alliance', 'Economic movie fact. Adult role head year care.', '2024-05-11', '16:35:43', '89888 Amanda Lodge, South Paul, ND 56729', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(51, 'Stand-alone transitional installation', 'Song garden wish think during while. Behind possible production fish serious.', '2024-06-07', '18:02:58', '973 Linda Crossroad Suite 162, North Jacquelineborough, MT 76938', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(52, 'Optional impactful knowledge user', 'Sign develop rich. Rise same occur among but full. Act edge building push they away far.', '2024-03-16', '08:42:57', '877 Garcia Walks, North Kaylahaven, NH 23424', '2024-05-10 12:48:17', '2024-06-10 12:48:17'),
(54, 'Test 101', 'This is the test event 101__Update', '2022-12-12', '02:13:00', 'Bangkok', '2024-06-10 06:55:27', '2024-06-10 16:28:25'),
(58, 'Test Event 200', 'This is the test event 200, Awesomes Event', '2025-03-22', '05:55:00', 'Bangkok', '2024-06-10 19:01:24', '2024-06-10 19:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_06_09_170214_create_users_table', 1),
(5, '2024_06_09_170215_create_events_table', 1),
(6, '2024_06_09_170216_create_registrations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `RegistrationID` bigint(20) UNSIGNED NOT NULL,
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `EventID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`RegistrationID`, `UserID`, `EventID`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2024-06-10 07:51:50', '2024-06-10 07:51:50'),
(3, 6, 54, '2024-06-10 07:53:50', '2024-06-10 07:53:50'),
(6, 7, 54, '2024-06-10 16:07:27', '2024-06-10 16:07:27'),
(7, 7, 2, '2024-06-10 16:07:35', '2024-06-10 16:07:35'),
(9, 2, 54, '2024-06-10 18:18:30', '2024-06-10 18:18:30'),
(10, 8, 54, '2024-06-10 18:59:23', '2024-06-10 18:59:23'),
(11, 8, 2, '2024-06-10 18:59:26', '2024-06-10 18:59:26'),
(12, 8, 58, '2024-06-10 19:02:30', '2024-06-10 19:02:30'),
(13, 8, 8, '2024-06-10 19:02:33', '2024-06-10 19:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` enum('Admin','Member') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Role`, `created_at`, `updated_at`) VALUES
(1, 'aungaung', '$2y$10$05C4Lgq3.R9rA4gzGEKSY.PvFTH9XzcRM.5EvdwhLberf65Rd0vSa', 'Admin', '2024-06-09 23:48:58', '2024-06-09 23:48:58'),
(2, 'zawzaw', '$2y$10$RqeVvbm6Sq2/aO4RTAWSzO5fektt78OzXfYUUScSwG0SAyMez6yxC', 'Admin', '2024-06-09 23:55:07', '2024-06-09 23:55:07'),
(3, 'admin@botble.com', '$2y$10$WfKESfOWrcf98u4S.70CU.43mzUJIte2nF3.qpB8nJSgnvZsSLuZy', 'Member', '2024-06-10 03:44:08', '2024-06-10 03:44:08'),
(5, 'ayeaye', '$2y$10$5U1D0S4ynxkwVwCeFgznvedsR.zFWBTR/0vidWrnL332JbZSGE7La', 'Member', '2024-06-10 07:49:21', '2024-06-10 07:49:21'),
(6, 'pyaepyae', '$2y$10$Q1yZpeyYQoGts1zR.vl0f.QPx4QMfnNWKoQ7JOQKBpeDZPZVBqKLW', 'Member', '2024-06-10 07:52:59', '2024-06-10 07:52:59'),
(7, 'JohnSmith', '$2y$10$28215G0pshIzz7a.5uMQ8uGHrpxfde7Z/S0zMYsurjABCM6Qc2vZ2', 'Member', '2024-06-10 16:07:05', '2024-06-10 16:07:05'),
(8, 'phyothu', '$2y$10$GLjOpcYvPLNIKfulk9HQF.Yn0m0R1.Ty0FvqU7r6i4gtmeyWMBP72', 'Member', '2024-06-10 18:59:12', '2024-06-10 18:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`RegistrationID`),
  ADD KEY `registrations_userid_foreign` (`UserID`),
  ADD KEY `registrations_eventid_foreign` (`EventID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `users_username_unique` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `RegistrationID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_eventid_foreign` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrations_userid_foreign` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
