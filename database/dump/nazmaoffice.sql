-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Agu 2023 pada 01.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nazmaoffice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_page_setting`
--

CREATE TABLE `about_page_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image_1` longtext NOT NULL,
  `slide_image_2` longtext NOT NULL,
  `slide_image_3` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `thumbnail` longtext DEFAULT NULL,
  `main_image` longtext NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_profile_picture` longtext DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `published_date` date NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_addresses`
--

CREATE TABLE `company_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_addresses`
--

INSERT INTO `company_addresses` (`id`, `title`, `address`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Explicabo Enim dolo', 'Consequatur ad eius', 'Aliquip dolorem quia', '2023-08-27 00:25:55', '2023-08-27 00:25:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_landing_setting`
--

CREATE TABLE `company_landing_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image_1` longtext NOT NULL,
  `slide_image_2` longtext NOT NULL,
  `slide_image_3` longtext NOT NULL,
  `about_us` longtext NOT NULL,
  `office_phone` varchar(255) NOT NULL,
  `personal_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_landing_setting`
--

INSERT INTO `company_landing_setting` (`id`, `slide_image_1`, `slide_image_2`, `slide_image_3`, `about_us`, `office_phone`, `personal_phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '64eb84835b592.jpg', '64eb84835b6c6.jpg', '64eb84835b7cb.jpg', 'contoh', '39054830', '03495809348', 'admin@mail.com', '2023-08-27 10:14:43', '2023-08-27 10:14:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_social_media`
--

CREATE TABLE `company_social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` longtext NOT NULL,
  `link` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` longtext NOT NULL,
  `hero_image` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `study_case` varchar(255) NOT NULL,
  `study_case_description` longtext NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `price` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `event_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `thumbnail`, `hero_image`, `phone`, `study_case`, `study_case_description`, `capacity`, `status`, `start_date`, `end_date`, `event_date`, `event_time`, `price`, `location`, `discount`, `is_active`, `event_type`, `created_at`, `updated_at`) VALUES
(1, 'contoh', 'Voluptatibus perfere', '64e985141d38f.jpg', '64e985141ec1e.png', '+1 (894) 336-4269', 'Ab eius pariatur Un', 'Sed eum illo exceptu', 26, NULL, '1987-02-08', '1979-10-27', '2012-04-17', '05:15:00', 31, 'Animi in labore et', 30000, 1, 'sertifikasi', '2023-08-25 20:42:18', '2023-08-25 22:02:02'),
(2, 'Dolorem esse eu quas', 'Omnis quo eaque nisi', '64e9823adf69b.jpg', '64e9823adf888.jpg', '+1 (994) 906-2323', 'Sed saepe facere vol', 'Sed delectus provid', 98, NULL, '2010-03-10', '1980-11-13', '1992-05-22', '08:17:00', 675, 'Placeat ut pariatur', 35, 0, 'lainnya', '2023-08-25 21:40:26', '2023-08-25 22:02:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_page_settings`
--

CREATE TABLE `event_page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `hero_image` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_page_settings`
--

INSERT INTO `event_page_settings` (`id`, `header_title`, `description`, `hero_image`, `created_at`, `updated_at`) VALUES
(1, 'contoh', 'contoh', '64e9806075798.png', '2023-08-25 21:32:32', '2023-08-25 21:32:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_participants`
--

CREATE TABLE `event_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_rundowns`
--

CREATE TABLE `event_rundowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_rundowns`
--

INSERT INTO `event_rundowns` (`id`, `event_id`, `title`, `description`, `start_time`, `end_time`, `speaker`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pengenalan Produk', 'Aliquam labore incid', '19:00:00', '22:32:00', 'Moh Ibnu Abdurrohman Sutio', 1, '2023-08-26 20:12:52', '2023-08-26 20:34:36'),
(3, 1, 'Nisi et beatae volup', 'Possimus quia corpo', '15:21:00', '20:12:00', 'Fugiat enim volupta', 1, '2023-08-26 20:28:30', '2023-08-26 20:28:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_speakers`
--

CREATE TABLE `event_speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_speakers`
--

INSERT INTO `event_speakers` (`id`, `event_id`, `name`, `position`, `image`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `tiktok`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 1, 'Moh Ibnu Abdurrohman Sutio', 'Web Developer', '64eacfa085bdd.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-08-26 21:22:56', '2023-08-26 21:22:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_25_013959_create_company_landing_setting', 1),
(6, '2023_08_25_014234_create_partners_table', 1),
(7, '2023_08_25_014400_create_faqs_table', 1),
(8, '2023_08_25_014452_create_testimonials_table', 1),
(9, '2023_08_25_014723_create_galleries_table', 1),
(10, '2023_08_25_014930_create_about_page_setting_table', 1),
(11, '2023_08_25_015003_create_teams_table', 1),
(12, '2023_08_25_015154_create_company_addresses_table', 1),
(13, '2023_08_25_015324_create_company_social_media_table', 1),
(14, '2023_08_25_015550_create_service_categories_table', 1),
(15, '2023_08_25_015644_create_services_table', 1),
(16, '2023_08_25_020030_create_service_benefits_table', 1),
(17, '2023_08_25_020213_create_service_testimonials_table', 1),
(18, '2023_08_25_020440_create_service_projects_table', 1),
(19, '2023_08_25_020754_create_milestones_table', 1),
(20, '2023_08_25_020857_create_event_page_settings_table', 1),
(21, '2023_08_25_021321_create_events_table', 1),
(22, '2023_08_25_021757_create_event_rundowns_table', 1),
(23, '2023_08_25_022114_create_event_speakers_table', 1),
(24, '2023_08_25_022319_create_event_participants_table', 1),
(25, '2023_08_25_065145_create_blog_categories_table', 1),
(26, '2023_08_25_065244_create_blog_table', 1),
(27, '2023_08_27_161938_update_icon_nullable_service_benefit_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `milestones`
--

CREATE TABLE `milestones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_color` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hero_image` longtext NOT NULL,
  `benefit_image` longtext NOT NULL,
  `teaser_link` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `service_category_id`, `icon`, `icon_color`, `title`, `description`, `phone`, `hero_image`, `benefit_image`, `teaser_link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, 'contoh', 'Fugiat sed omnis ne', 'Contoh', 'contoh', '+1 (173) 417-7251', '64eb78eb05102.jpg', '64eb78eb054e3.png', 'Neque qui architecto', 1, '2023-08-27 08:48:44', '2023-08-27 09:25:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_benefits`
--

CREATE TABLE `service_benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `service_categories`
--

INSERT INTO `service_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Sit maxime aut assum', '2023-08-27 05:51:20', '2023-08-27 05:51:20'),
(3, 'Labore dolor eos qu', '2023-08-27 05:51:25', '2023-08-27 05:51:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_projects`
--

CREATE TABLE `service_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `taken_at` date NOT NULL,
  `due_at` date NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_1` longtext NOT NULL,
  `image_2` longtext NOT NULL,
  `image_3` longtext NOT NULL,
  `tag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_testimonials`
--

CREATE TABLE `service_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext DEFAULT NULL,
  `job` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `rating` int(11) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `job` varchar(255) NOT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `job`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Moh Ibnu Abdurrohman Sutio', '64eb2311a8878.jpg', 'Non cupidatat laudan', 'Et enim et aut corru', 'Fugiat omnis iste ve', 'At iusto dolorem ven', 'Qui pariatur Corpor', '2023-08-27 03:13:52', '2023-08-27 03:18:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `profile_picture` longtext NOT NULL,
  `job` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `testimonial` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `fullname`, `profile_picture`, `job`, `rating`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'Prescott Key', '64eb11fc368ee.jpg', 'Quo blanditiis unde', 5, 'Provident quia ex s', '2023-08-27 02:05:14', '2023-08-27 02:06:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `about_page_setting`
--
ALTER TABLE `about_page_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indeks untuk tabel `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_addresses`
--
ALTER TABLE `company_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_landing_setting`
--
ALTER TABLE `company_landing_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_social_media`
--
ALTER TABLE `company_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_page_settings`
--
ALTER TABLE `event_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_participants_event_id_foreign` (`event_id`);

--
-- Indeks untuk tabel `event_rundowns`
--
ALTER TABLE `event_rundowns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_rundowns_event_id_foreign` (`event_id`);

--
-- Indeks untuk tabel `event_speakers`
--
ALTER TABLE `event_speakers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_speakers_event_id_foreign` (`event_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`);

--
-- Indeks untuk tabel `service_benefits`
--
ALTER TABLE `service_benefits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_benefits_service_id_foreign` (`service_id`);

--
-- Indeks untuk tabel `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service_projects`
--
ALTER TABLE `service_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_projects_service_id_foreign` (`service_id`);

--
-- Indeks untuk tabel `service_testimonials`
--
ALTER TABLE `service_testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_testimonials_service_id_foreign` (`service_id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_page_setting`
--
ALTER TABLE `about_page_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `company_addresses`
--
ALTER TABLE `company_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `company_landing_setting`
--
ALTER TABLE `company_landing_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `company_social_media`
--
ALTER TABLE `company_social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event_page_settings`
--
ALTER TABLE `event_page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `event_rundowns`
--
ALTER TABLE `event_rundowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `event_speakers`
--
ALTER TABLE `event_speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `service_benefits`
--
ALTER TABLE `service_benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `service_projects`
--
ALTER TABLE `service_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `service_testimonials`
--
ALTER TABLE `service_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `event_participants`
--
ALTER TABLE `event_participants`
  ADD CONSTRAINT `event_participants_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event_rundowns`
--
ALTER TABLE `event_rundowns`
  ADD CONSTRAINT `event_rundowns_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event_speakers`
--
ALTER TABLE `event_speakers`
  ADD CONSTRAINT `event_speakers_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service_benefits`
--
ALTER TABLE `service_benefits`
  ADD CONSTRAINT `service_benefits_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service_projects`
--
ALTER TABLE `service_projects`
  ADD CONSTRAINT `service_projects_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service_testimonials`
--
ALTER TABLE `service_testimonials`
  ADD CONSTRAINT `service_testimonials_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
