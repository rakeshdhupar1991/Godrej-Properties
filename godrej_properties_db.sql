-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 02:55 PM
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
-- Database: `godrej_properties_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenity_id` bigint(20) UNSIGNED NOT NULL,
  `amenities_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenity_id`, `amenities_name`, `created_at`, `updated_at`) VALUES
(1, 'test added', '2025-04-14 03:06:51', '2025-04-14 03:06:51'),
(2, 'asdsafsaf', '2025-04-14 03:07:09', '2025-04-14 03:07:09'),
(3, 'fdhnfghn', '2025-04-14 03:07:47', '2025-04-14 03:07:47'),
(4, 'you can navigate to all business tools such as Meta Business Suite, Business Manager', '2025-04-14 03:09:12', '2025-04-14 03:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `config_id` bigint(20) UNSIGNED NOT NULL,
  `configuration_name` varchar(10) NOT NULL,
  `configuration_price` decimal(20,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`config_id`, `configuration_name`, `configuration_price`, `created_at`, `updated_at`) VALUES
(1, 'fsdrfgr', 212, '2025-04-13 06:25:17', '2025-04-13 06:25:17'),
(2, '1BHK', 100000, '2025-04-13 23:16:18', '2025-04-13 23:16:18'),
(3, 'gfddf', 45345345, '2025-04-14 03:18:08', '2025-04-14 03:18:08'),
(4, 'fsdrfgr', 54654, '2025-04-14 03:19:53', '2025-04-14 03:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_id` bigint(20) UNSIGNED NOT NULL,
  `faqs_name` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `gallery_name` varchar(50) NOT NULL,
  `gallery_url` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_url`, `created_at`, `updated_at`) VALUES
(1, 'propert name', 'https://www.gallery/property1/', '2025-04-13 23:30:00', '2025-04-13 23:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `location_advantages`
--

CREATE TABLE `location_advantages` (
  `location_advantages_id` bigint(20) UNSIGNED NOT NULL,
  `location_advantages_name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_advantages`
--

INSERT INTO `location_advantages` (`location_advantages_id`, `location_advantages_name`, `created_at`, `updated_at`) VALUES
(1, 'sgsbdfb befdbfd efdbefbvdd  efewfewfew dbdfbfd dbdbdf', '2025-04-14 03:43:34', '2025-04-14 03:43:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_12_110435_update_properties_table_structure', 2),
(6, '2025_04_12_111516_create_amenities_table', 3),
(7, '2025_04_12_111610_create_configuration_table', 3),
(8, '2025_04_12_111732_create_faqs_table', 3),
(9, '2025_04_12_111816_create_gallery_table', 3),
(10, '2025_04_12_111858_create_location_advantages_table', 3),
(11, '2025_04_12_111936_create_project_highlights_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `project_highlights`
--

CREATE TABLE `project_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_highlights`
--

INSERT INTO `project_highlights` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '', '2025-04-14 03:27:37', '2025-04-14 03:27:37'),
(2, 'gbfbdfbn', '2025-04-14 03:33:00', '2025-04-14 03:33:00'),
(3, 'rthhrthrthrhhhhrh', '2025-04-14 03:35:21', '2025-04-14 03:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `configuration` varchar(200) NOT NULL,
  `property_type_old` varchar(255) DEFAULT NULL,
  `amenities` varchar(1500) NOT NULL,
  `gallery` varchar(500) NOT NULL,
  `project_highlights` varchar(500) NOT NULL,
  `location_advantages` varchar(500) NOT NULL,
  `faqs` varchar(1000) NOT NULL,
  `price` decimal(20,0) DEFAULT NULL,
  `area` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `possession` enum('New Launch','Under Construction','Ready to Move') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `project_name`, `configuration`, `property_type_old`, `amenities`, `gallery`, `project_highlights`, `location_advantages`, `faqs`, `price`, `area`, `address`, `city`, `description`, `possession`) VALUES
(4, 'gerg', 'erge', 'gergdds', 'gdg', 'dsgsg', 'sgdsg', 'sg', 'sgdgs', 2343, 3243, 'dgdfsgd', 'gdfbdsf', 'bdbvdf', 'Under Construction'),
(5, 'ewfwe', '[{\"name\":\"2BHK\",\"price\":null}]', 'Apartment,Villa', 'ffsf,dsfdsg,dsgdsg,,', 'storage/gallery/1744626184_a75hoDsGji.jpeg', 'dsfgsd,dsgdsg,gdsfg', 'gdsgsd,sdgs,', 'gsadgsad,sgsd,', 43543, 43, 'cdvvcx', 'zcxvcv', 'cvxzvz vzd vzdx zvg zv', 'New Launch'),
(6, 'efew', '[{\"name\":\"2BHK\",\"price\":null}]', 'Apartment,Villa', 'gerger,reter,,,', 'storage/gallery/1744626308_jwWAr94ym4.png,storage/gallery/1744626308_PXpBJKLWz1.png,storage/gallery/1744626308_bPuY7IuaP5.png,storage/gallery/1744626308_pQlZyIJ9gb.png,storage/gallery/1744626308_ZrCqecWkha.png,storage/gallery/1744626308_SWbsVEzZK9.png,storage/gallery/1744626308_qBs9sQr9vi.png,storage/gallery/1744626308_kbqZ1Vjbpm.png,storage/gallery/1744626308_drvDT4biu3.png,storage/gallery/1744626308_yuJlHlMJID.png', 'reter,eryery,', 'eryer,eryer,', 'eryery,eryer,', 235, 435, 'egefdg', 'fdgdf', 'gbfdb hg fdhgdsg s', 'New Launch'),
(7, 'ewf', '[{\"name\":\"2BHK\",\"price\":\"23423\"}]', 'Apartment,Villa', 'adgsdsag,dsag,adsgag,dagsas,', 'storage/gallery/1744626620_yj0eM2pLvk.png,storage/gallery/1744626620_H17ZEoSk0G.png,storage/gallery/1744626620_4nyg9qM4Hp.png,storage/gallery/1744626620_apsjxFpUjy.png,storage/gallery/1744626620_vkD4jQ5qKE.png,storage/gallery/1744626620_jqOrXDR6gj.png,storage/gallery/1744626620_CXay3C4NxG.png,storage/gallery/1744626620_F43VFSyAnd.png,storage/gallery/1744626620_JUmW5CP6PX.png,storage/gallery/1744626620_7lbobmTGgX.png', 'few,ewfewg,ewg', 'ewg,ewgewg,ewgew', 'ewgew,ewgew,egwg', 43543, 5345, 'fdsdsgf', 'dsagdsg', 'aedgadsg', 'New Launch'),
(8, 'safsa', '[{\"name\":\"1 BHK\"},{\"name\":\"2 BHK\"},{\"name\":\"3 BHK\"},{\"name\":\"4 BHK\"}]', 'Apartment,Villa', 'dsgds,dsgdsg,dgsagds,dsgdsg,gdsag', 'storage/gallery/1744627017_6rtwDyUQ2G.png', 'dsgds,dsgds,dsags', 'dgdg,dsagas,asdgdas', 'gdadsa,dsagads,dsagasd', 32423, 3423, 'dsfvxzcv', 'fdsfvdsav', 'dsvdsv', 'New Launch'),
(9, 'safasf', '{\"1\":{\"name\":\"2 BHK\"}}', 'Apartment', 'Swimming Pool,Gym,Parking,Garden', '', ',,', ',,', ',,', 23423, 423, 'sadsadfs', 'dsafdf', 'dsafdsaf', 'New Launch'),
(10, 'dsfsd', '{\"1\":{\"name\":\"2 BHK\"},\"3\":{\"name\":\"4 BHK\"}}', 'Apartment,Villa', 'Swimming pool,Parking,Gym,Indoor Games,Outdoor Games,Jogging Track', 'storage/gallery/1744631613_Twrikuv8TW.png,storage/gallery/1744631613_c83hDDJzxA.png,storage/gallery/1744631613_50iNO1z7Ya.png,storage/gallery/1744631613_mny8ivLZJV.png', 'Close to Metro,RERA Approved,Low Density Project,Greenery Views', 'Close to Hospital,Metro Station Nearby', 'efge,ewgew,gewg', 23423, 2352, 'fdsfds', 'dsvdsb', 'sdgbsd', 'Under Construction'),
(11, 'hfdh', '[{\"name\":\"1 BHK\"},{\"name\":\"2 BHK\"}]', 'Villa,Plot', 'Parking,Clubhouse', 'storage/gallery/1744634867_u8ci324GAH.png', 'RERA Approved,Greenery Views', 'Close to Hospital', ',,', 5435, 43543, 'sfdgbdfb', 'dsbfdb', 'bfdbfds', 'Under Construction'),
(12, 'fweg', '[{\"name\":\"1 BHK\"}]', 'Apartment', 'Swimming pool,Parking,Gym', 'storage/gallery/1744634889_NRfOAyuwK6.png', 'RERA Approved,Low Density Project', 'Close to Hospital,Metro Station Nearby', ',,', 235, 235, 'vx', 'vzx', 'vxczvxz', 'New Launch'),
(13, 'sfsf', '{\"3\":{\"name\":\"4 BHK\"}}', 'Villa', '', '', '', '', ',,', 35, 3523, 'dsafgdsag', 'afggd', 'agg', 'Under Construction'),
(14, 'effea', '[{\"name\":\"1 BHK\"},{\"name\":\"2 BHK\"}]', 'Apartment', 'Swimming pool,Gym', '', 'RERA Approved,Low Density Project', 'Close to Hospital,Metro Station Nearby', ',,', 25, 3242, 'dfs', 'XZVv', 'xzvx', 'New Launch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenity_id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `location_advantages`
--
ALTER TABLE `location_advantages`
  ADD PRIMARY KEY (`location_advantages_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project_highlights`
--
ALTER TABLE `project_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amenity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `config_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location_advantages`
--
ALTER TABLE `location_advantages`
  MODIFY `location_advantages_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_highlights`
--
ALTER TABLE `project_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
