-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15,	'2014_10_12_000000_create_users_table',	1),
(16,	'2014_10_12_100000_create_password_resets_table',	1),
(17,	'2019_08_19_000000_create_failed_jobs_table',	1),
(18,	'2020_11_28_021338_add_roles_field_to_users_table',	1),
(19,	'2020_12_16_013148_create_works_table',	1),
(20,	'2020_12_16_014058_create_work_details_table',	1),
(21,	'2020_12_16_015526_create_work_platforms_table',	1),
(22,	'2020_12_16_015809_create_work_technologies_table',	1),
(23,	'2020_12_16_020250_create_work_roles_table',	1),
(26,	'2020_12_16_020527_create_screenshots_table',	2),
(27,	'2020_12_16_020749_create_videos_table',	2),
(28,	'2020_12_25_142944_add_project_type_field_to_works_table',	3);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dwisodewo@gmail.com',	'$2y$10$5nYSkUyp9zLItUrcbDUGVOvfGpGlXkGlVKqbBPvFeazh4JMBX98Cu',	'2020-12-25 06:25:51');

DROP TABLE IF EXISTS `screenshots`;
CREATE TABLE `screenshots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `screenshots` (`id`, `work_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	2,	'assets/screenshots/7qVW6PjZ7hBYOsY2KPl12JTj4bkRrYqCkhepZbv3.png',	NULL,	'2020-12-25 02:30:53',	'2020-12-25 02:30:53'),
(2,	2,	'assets/screenshots/ZlYZHXdKA2qb9U9SKkQWOgk0Q8Z5xaCsinkqEAwj.png',	NULL,	'2020-12-25 02:31:04',	'2020-12-25 02:31:04'),
(3,	2,	'assets/screenshots/vcURwDh2GjtjdzC5b8BRbWKWSazXwZ5kqpNVuX7q.png',	NULL,	'2020-12-25 02:31:11',	'2020-12-25 02:31:11'),
(4,	2,	'assets/screenshots/8IT9ZLKFNAZNeTzfSKSby2ViFLTIBkoUpXahDbdy.png',	NULL,	'2020-12-25 02:31:21',	'2020-12-25 02:31:21'),
(5,	2,	'assets/screenshots/xuVgsWCKJAnDB2NMeuxfzeYNUh3uS6sMJn1Zpdq8.png',	NULL,	'2020-12-25 02:31:33',	'2020-12-25 02:31:33'),
(6,	2,	'assets/screenshots/vrbSMyThGu8iaUedYfHdhhqMA8s9ALvkxPo7XJ5b.png',	NULL,	'2020-12-25 02:31:42',	'2020-12-25 02:31:42'),
(7,	2,	'assets/screenshots/NnQkyUrVta1znDa5R5d9HApxecudlTR6fITbMCVs.png',	NULL,	'2020-12-25 02:31:53',	'2020-12-25 02:31:53'),
(8,	2,	'assets/screenshots/vPK9EIH1g5UZvkSnpQ6if1bmAEHzrs0hpVFUV7a2.png',	NULL,	'2020-12-25 02:32:01',	'2020-12-25 02:32:01'),
(9,	2,	'assets/screenshots/TuHP0y6Gbym6JSUm5ydRMOcpkdRGu1XF1FxlsDDG.png',	NULL,	'2020-12-25 02:32:12',	'2020-12-25 02:32:12'),
(10,	2,	'assets/screenshots/h6NWx4ZoGVWG4RTbsLzStX6HoDGZJ4FovfVr6y2H.png',	NULL,	'2020-12-25 02:32:21',	'2020-12-25 02:32:21'),
(11,	2,	'assets/screenshots/VAymPABlZLNK3t8Nm1QPqYSjgcb1SafX6fVD5r2T.png',	NULL,	'2020-12-25 02:32:33',	'2020-12-25 02:32:33'),
(12,	1,	'assets/screenshots/nnxo75EGH5FMAnM40QvYojgSShB4YahiRPmwDcgw.jpeg',	NULL,	'2020-12-25 02:33:16',	'2020-12-25 02:33:16'),
(13,	1,	'assets/screenshots/Fu7xASR8STL2gqNNgbgVKtpQb8CJ9JtJz68IU764.jpeg',	NULL,	'2020-12-25 02:33:27',	'2020-12-25 02:33:27'),
(14,	1,	'assets/screenshots/MksE1IhyOW2tFAHBVxnY0w2bnefN1eLk7n9LLB7m.jpeg',	NULL,	'2020-12-25 02:33:45',	'2020-12-25 02:33:45'),
(15,	1,	'assets/screenshots/pPFT9bymcVq3L621UXoZDu4cCln4I8NNbyM84QGo.jpeg',	NULL,	'2020-12-25 02:33:55',	'2020-12-25 02:33:55'),
(16,	1,	'assets/screenshots/aK1H4YIoNjL7KsNlwpFxwsdoEbC2rQJtNiIFppDf.jpeg',	NULL,	'2020-12-25 02:34:05',	'2020-12-25 02:34:05'),
(17,	1,	'assets/screenshots/uAsi2Vpdg9LIkx6OBS5SvcsW0io6cUNRf9oiVMIy.jpeg',	NULL,	'2020-12-25 02:34:39',	'2020-12-25 02:34:39'),
(18,	1,	'assets/screenshots/hgsIcAU3xFk5q0ya2GrPDM4aoqxjS9UpJvhhZMff.jpeg',	NULL,	'2020-12-25 02:34:49',	'2020-12-25 02:34:49'),
(19,	1,	'assets/screenshots/G7rBZUA1kS3quI48A8C3JAmppPVGCTFbaGNFAt2G.jpeg',	NULL,	'2020-12-25 02:35:18',	'2020-12-25 02:35:18'),
(20,	3,	'assets/screenshots/inWy9S0fnBpSZbB9iWgLqtx3FjY2Ne4R4TQ1iw29.jpeg',	NULL,	'2020-12-25 02:37:49',	'2020-12-25 02:37:49'),
(21,	4,	'assets/screenshots/04ZQMXJwPkzMv4jNJ1TVbT7YuUnXogAzkf3ueWCi.jpeg',	NULL,	'2020-12-25 04:55:03',	'2020-12-25 04:55:03'),
(22,	4,	'assets/screenshots/bN5XnG2eBT0yGJozujyyn4ANEix0Lk8gd1hWTLsx.jpeg',	NULL,	'2020-12-25 04:55:19',	'2020-12-25 04:55:19'),
(23,	4,	'assets/screenshots/FCEpXHfleJ9ZUx8dk3WR6ch30gB2OEpHuTufcbH6.jpeg',	NULL,	'2020-12-25 04:55:27',	'2020-12-25 04:55:27'),
(24,	4,	'assets/screenshots/ZB9wZp3ahGmmFljNrMlcDEgV19DHWdZbeKqDth2I.jpeg',	NULL,	'2020-12-25 04:55:37',	'2020-12-25 04:55:37'),
(25,	4,	'assets/screenshots/njif1GCNrGWcDkAOHoskWxxpMF4HmynsJpfnlMnw.jpeg',	NULL,	'2020-12-25 04:55:45',	'2020-12-25 04:55:45'),
(26,	4,	'assets/screenshots/lFXpfrX4xDZQrBb0nl5n8pzneXXi4aObRRVNzVSq.jpeg',	NULL,	'2020-12-25 04:56:02',	'2020-12-25 04:56:02'),
(27,	4,	'assets/screenshots/xLu9F0LHwm0W3wEbVElTgqRGUGnSqdZLRe1CRgVa.jpeg',	NULL,	'2020-12-25 04:56:10',	'2020-12-25 04:56:10'),
(28,	4,	'assets/screenshots/xWC8LN46dGeMmjVcH0CqsNZ7mpEGBcEsvIq2icNB.jpeg',	NULL,	'2020-12-25 04:56:20',	'2020-12-25 04:56:20'),
(29,	4,	'assets/screenshots/P5FhfREEZZjgKX5INW8FUZvsYUZSEd6T9v85vTvA.jpeg',	NULL,	'2020-12-25 04:56:41',	'2020-12-25 04:56:41'),
(30,	4,	'assets/screenshots/GPAN5lmiI4UtjWVIKwLq4hQJ9Y1ea3MZ2QBdUQIa.jpeg',	NULL,	'2020-12-25 04:56:55',	'2020-12-25 04:56:55'),
(31,	4,	'assets/screenshots/BucxnrtiNVqwUDBUCI2S0u1gbPXod4XmrAtkZrnP.jpeg',	NULL,	'2020-12-25 04:57:04',	'2020-12-25 04:57:04'),
(32,	4,	'assets/screenshots/FTjueS56KZznxodEgrjKFa1MZ6pzBMsEwbLw4Bm3.jpeg',	NULL,	'2020-12-25 04:57:12',	'2020-12-25 04:57:12'),
(33,	4,	'assets/screenshots/ekdXcpPKDFJ4PEQnxCwhk5tArBaBknaCmdzMd0sh.jpeg',	NULL,	'2020-12-25 04:57:20',	'2020-12-25 04:57:20'),
(34,	4,	'assets/screenshots/btn2xo1eVwdCf7dJ7vZg0CI1dmCE0qwFWBeAUlQP.jpeg',	NULL,	'2020-12-25 04:57:27',	'2020-12-25 04:57:27'),
(35,	4,	'assets/screenshots/OmSIdHUKcpvtd0JNhb2bG3vgIoTXi7GGinh8k66a.jpeg',	NULL,	'2020-12-25 04:57:35',	'2020-12-25 04:57:35'),
(36,	5,	'assets/screenshots/Nk8i3HvTe7U6Fjby9FquH8TYasEQ1ycNqDuDqVSn.jpeg',	NULL,	'2020-12-25 05:03:16',	'2020-12-25 05:03:16'),
(37,	6,	'assets/screenshots/ibEgRVa7J8Iq6BsdmONr8eVHpsIlI6g60wJb8Ozq.jpeg',	NULL,	'2020-12-25 05:11:51',	'2020-12-25 05:11:51'),
(38,	6,	'assets/screenshots/oAFAjn8Z5sTDQgvbO3RgcnX0XMWBn8LEesSjM6fn.jpeg',	NULL,	'2020-12-25 05:12:01',	'2020-12-25 05:12:01'),
(39,	6,	'assets/screenshots/ItHPR7LBHBnA5VNFujyJ7BFQ0O9bEUS1L2GItcvy.jpeg',	NULL,	'2020-12-25 05:12:12',	'2020-12-25 05:12:12'),
(40,	6,	'assets/screenshots/xh5wGTBYatM0Hz27pXelyeMp7ChkcEfhcp9QUr02.jpeg',	NULL,	'2020-12-25 05:12:26',	'2020-12-25 05:12:26'),
(41,	6,	'assets/screenshots/LkZzkTVZbRJIAGjWgh3E6vKDC8401d3fDxRUB3Kl.jpeg',	NULL,	'2020-12-25 05:12:36',	'2020-12-25 05:12:36'),
(42,	6,	'assets/screenshots/tfyb01PzRqF7d6UBJlG6MadarpZMdlUoQBSCYTjT.jpeg',	NULL,	'2020-12-25 05:12:44',	'2020-12-25 05:12:44'),
(43,	6,	'assets/screenshots/8sK6ekYs7XQdiMZjSssBCzFMjpIa4RO6nOEjn3wy.jpeg',	NULL,	'2020-12-25 05:13:06',	'2020-12-25 05:13:06'),
(44,	6,	'assets/screenshots/xEYlH5KOYtAncL3EjMJUcGNRMGbj3PWyuWm7PV8k.jpeg',	NULL,	'2020-12-25 05:13:17',	'2020-12-25 05:13:17'),
(45,	6,	'assets/screenshots/ssLzHiEetvLSboxIN1xkj6USoIGEqZ24ilKhIP8b.jpeg',	NULL,	'2020-12-25 05:13:24',	'2020-12-25 05:13:24'),
(46,	7,	'assets/screenshots/oWXqthU6TnpQrni3qG0F2nVoQACdZ4zFJKBBvrgM.jpeg',	NULL,	'2020-12-25 05:20:14',	'2020-12-25 05:20:14'),
(47,	7,	'assets/screenshots/QG32wUc6IUESc3QCKdXjy1aqylJjANUgjzlm7v4n.jpeg',	NULL,	'2020-12-25 05:20:22',	'2020-12-25 05:20:22'),
(48,	9,	'assets/screenshots/ADskK8UciDhib8kZrYT3ZJ3Enj2WZQ7nocvFdPl4.jpeg',	NULL,	'2020-12-25 05:41:07',	'2020-12-25 05:41:07'),
(49,	9,	'assets/screenshots/F3xi49yWcATGXx8Q8J5PvdBc4ngrQug8OzqmQkdU.jpeg',	NULL,	'2020-12-25 05:41:15',	'2020-12-25 05:41:15'),
(50,	8,	'assets/screenshots/VkYthj1dzCEKT5Bvji1OgGpLdMXuMV2HK9wTtzVn.jpeg',	NULL,	'2020-12-25 05:48:53',	'2020-12-25 05:48:53'),
(51,	8,	'assets/screenshots/guvDLVvtc39SWtj2HEjmSiBQVRauzet3JegMvkrm.jpeg',	NULL,	'2020-12-25 05:49:16',	'2020-12-25 05:49:16'),
(52,	8,	'assets/screenshots/D8s200J38IN0sx3hRJ6OALedpf3Lmu9eBfwlZ2Ys.jpeg',	NULL,	'2020-12-25 05:49:27',	'2020-12-25 05:49:27'),
(53,	8,	'assets/screenshots/VOSJqhwCXGTRhhSR2NTyo3rFyJC7Sj8cE5I0hfdi.jpeg',	NULL,	'2020-12-25 05:49:39',	'2020-12-25 05:49:39'),
(54,	8,	'assets/screenshots/DCWoajeT0u64JZbCdcOPW09SFc8Ki2FVRLTiJ3Pt.jpeg',	NULL,	'2020-12-25 05:49:50',	'2020-12-25 05:49:50'),
(55,	8,	'assets/screenshots/zNmu9UlUMdPivZn29IdXIBBHeB1gPy3oBcOoARPN.jpeg',	NULL,	'2020-12-25 05:50:03',	'2020-12-25 05:50:03'),
(56,	8,	'assets/screenshots/ZnA2WOizvOO8yk0X1u3MwWt8efeW6w5bz0uecAB9.jpeg',	NULL,	'2020-12-25 05:50:13',	'2020-12-25 05:50:13'),
(57,	8,	'assets/screenshots/8tjgcSAHpAfIsUF1mCQooJvuHJHR11JWJNReflzq.jpeg',	NULL,	'2020-12-25 05:50:21',	'2020-12-25 05:50:21'),
(58,	10,	'assets/screenshots/ZYjlS0CLJdRGApvGYlwBiJNUjJRl7aEljFS33pae.jpeg',	NULL,	'2020-12-25 05:57:42',	'2020-12-25 05:57:42'),
(59,	11,	'assets/screenshots/Cg3g0Fipc1BpG6DNeTShL170pHWb1vQ41WTrBGsD.jpeg',	NULL,	'2020-12-25 06:03:00',	'2020-12-25 06:03:00'),
(60,	12,	'assets/screenshots/SQVm1xzEN1zGP4g9hS9hWeXsa25MMnQt2km5rCe2.jpeg',	NULL,	'2020-12-25 06:10:11',	'2020-12-25 06:10:11'),
(61,	13,	'assets/screenshots/T7qG295V06LmGDT8OxPr5ywGfxv5PmXH19UPQtps.jpeg',	NULL,	'2020-12-25 06:14:48',	'2020-12-25 06:14:48'),
(62,	15,	'assets/screenshots/h8DxjynR7WfMgPe5Nf3Nlhb5JHwoO21iHBROyM5N.jpeg',	NULL,	'2020-12-25 08:40:44',	'2020-12-25 08:40:44'),
(63,	15,	'assets/screenshots/RPxoqMsSSJG4XTCW5I6lkt1aaLTlLdvxldr2k8g6.jpeg',	NULL,	'2020-12-25 08:40:55',	'2020-12-25 08:40:55'),
(64,	15,	'assets/screenshots/nbdxJHZwi0k7WFVFWA7P6UXWT3tnHynW6c3a5liw.jpeg',	NULL,	'2020-12-25 08:41:08',	'2020-12-25 08:41:08'),
(65,	15,	'assets/screenshots/MKKMFzL2DacGsdt8htYnDgcawq3gugL2AIVd8H5v.jpeg',	NULL,	'2020-12-25 08:41:17',	'2020-12-25 08:41:17'),
(66,	15,	'assets/screenshots/Pgh4QcubXtEtqZAUsCsOs9DEuhsWW3w9aYdlEzpz.jpeg',	NULL,	'2020-12-25 08:41:27',	'2020-12-25 08:41:27'),
(67,	15,	'assets/screenshots/ACv5gtVQHVfosGsBuRZy5jKcqACuFJ1aTFbRr44v.jpeg',	NULL,	'2020-12-25 08:41:38',	'2020-12-25 08:41:38'),
(68,	15,	'assets/screenshots/0p3szgJx2Z1kf7IECh5Y2ZIiKrPMPOLF8O8qNbds.jpeg',	NULL,	'2020-12-25 08:41:50',	'2020-12-25 08:41:50'),
(69,	15,	'assets/screenshots/tJ3XhNVPYSznPSI2YYj6LUXSWr1Dat06JF3UmIgs.jpeg',	NULL,	'2020-12-25 08:42:34',	'2020-12-25 08:42:34');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1,	'Dimas Wisodewo',	'dwisodewo@gmail.com',	NULL,	'$2y$10$xZwaoxa0t/4H7alcbHf03OMAF2gfmXNzzZiF3MAvlO5Qe1FPBWjES',	NULL,	NULL,	NULL,	'ADMIN');

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `videos` (`id`, `work_id`, `video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'https://www.youtube.com/embed/VKEGXKusSkU',	NULL,	'2020-12-25 03:18:12',	'2020-12-25 03:33:54'),
(2,	3,	'https://www.youtube.com/embed/-5UhY_ZOqes',	NULL,	'2020-12-25 04:52:51',	'2020-12-25 04:52:51'),
(3,	5,	'https://www.youtube.com/embed/Iqg1kIk3Jhk',	NULL,	'2020-12-25 05:03:45',	'2020-12-25 05:03:45'),
(4,	8,	'https://www.youtube.com/embed/cApIv2bMqEE',	NULL,	'2020-12-25 05:48:10',	'2020-12-25 05:48:10'),
(5,	10,	'https://www.youtube.com/embed/AOIzvgkARJk',	NULL,	'2020-12-25 05:59:09',	'2020-12-25 05:59:09'),
(6,	11,	'https://www.youtube.com/embed/TUUl6R8z2SM',	NULL,	'2020-12-25 06:01:59',	'2020-12-25 06:01:59'),
(7,	12,	'https://www.youtube.com/embed/3IzbfpZl54g',	NULL,	'2020-12-25 06:10:19',	'2020-12-25 06:10:19'),
(8,	13,	'https://www.youtube.com/embed/ARFLVTAk9oE',	NULL,	'2020-12-25 06:13:29',	'2020-12-25 06:13:29');

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_date` date NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `works` (`id`, `title`, `slug`, `project_date`, `short_description`, `deleted_at`, `created_at`, `updated_at`, `project_type`) VALUES
(1,	'Quiz Space VR',	'quiz-space-vr-educational-virtual-reality-quiz-game-about-space-including-the-solar-system-planets-space-objects-satellites-rovers-and-space-missions',	'2019-08-17',	'Educational Virtual Reality quiz game about Space including the solar system, planets, space objects, satellites, rovers, and space missions.',	NULL,	'2020-12-18 23:16:05',	'2020-12-18 23:16:05',	'Unity'),
(2,	'Math App',	'math-app-educational-application-for-high-school-students-in-the-field-of-social-arithmetic-including-buying-and-selling-profit-loss-discount-tax-interest-gross-net-and-tare',	'2020-01-01',	'Educational application for high school students in the field of social arithmetic including buying and selling, profit, loss, discount, tax, interest, gross, net, and tare.',	NULL,	'2020-12-19 19:52:46',	'2020-12-19 19:52:46',	'Unity'),
(3,	'Game Lost in Space',	'game-lost-in-space-a-2d-game-about-an-astronaut-who-lost-in-space-and-trying-to-go-back-to-the-earth',	'2020-10-01',	'A 2D game about an astronaut who lost in space and trying to go back to the earth.',	NULL,	'2020-12-20 04:38:47',	'2020-12-20 04:38:47',	'Unity'),
(4,	'Geo Natural Resource App',	'geo-natural-resource-app-educational-applications-for-high-school-students-in-the-field-of-geography-this-application-was-made-as-a-bachelors-thesis-of-one-of-the-geography-students-at-the-university',	'2020-01-01',	'Educational applications for high school students in the field of geography. This application was made as a bachelor\'s thesis of one of the geography students at the university.',	NULL,	'2020-12-20 04:44:03',	'2020-12-20 07:23:43',	'Unity'),
(5,	'Game Shoot the Virus',	'game-shoot-the-virus-simple-fps-game-shoot-the-viruses-to-win-the-game',	'2020-05-01',	'Simple FPS game, shoot the viruses to win the game.',	NULL,	'2020-12-25 05:00:20',	'2020-12-25 05:00:20',	'Unity'),
(6,	'EcoEduApp',	'ecoeduapp-educational-application-for-high-school-students-in-the-field-of-social-educational-applications-for-high-school-students-in-the-field-of-economy-including-economic-growth-map-of-economic-growth-in-indonesia-theory-in-economics-by-experts-etc',	'2019-12-01',	'Educational application for high school students in the field of social Educational applications for high school students in the field of economy including economic growth, map of economic growth in Indonesia, theory in economics by experts, etc.',	NULL,	'2020-12-25 05:08:02',	'2020-12-25 05:08:02',	'Unity'),
(7,	'AR Multi Target',	'ar-multi-target-augmented-reality-app-that-can-detect-more-than-one-marker',	'2019-05-01',	'Augmented Reality App that can detect more than one marker.',	NULL,	'2020-12-25 05:17:09',	'2020-12-25 05:17:09',	'Unity'),
(8,	'Transform Adjacent Distinct Letter AR',	'transform-adjacent-distinct-letter-ar-transform-a-word-that-only-has-letter-a-b-and-c-to-its-shortest-string-that-is-possible-if-there-are-two-letters-that-are-adjacent-and-distinct-they-can-be-replaced-with-one-other-letter-we-have',	'2020-12-06',	'Transform a word that only has letter a, b, and c to it\'s shortest string that is possible. If there are two letters that are adjacent and distinct, they can be replaced with one other letter we have.',	NULL,	'2020-12-25 05:25:40',	'2020-12-25 05:25:40',	'Unity'),
(9,	'AR Extended Tracking',	'ar-extended-tracking-augmented-reality-app-with-extended-tracking-and-interactions-scale-rotate-using-leantouch',	'2019-05-01',	'Augmented Reality App with extended tracking and interactions (scale, rotate) using LeanTouch.',	NULL,	'2020-12-25 05:38:48',	'2020-12-25 05:38:48',	'Unity'),
(10,	'Game Delivery Man',	'game-delivery-man-simple-game-about-a-boy-who-volunteered-to-send-boxes-to-the-warehouse-by-avoiding-enemies',	'2019-01-01',	'Simple game about a boy who volunteered to send boxes to the warehouse by avoiding enemies.',	NULL,	'2020-12-25 05:55:48',	'2020-12-25 05:55:48',	'Unity'),
(11,	'Game Tetris',	'game-tetris-remake-of-the-classic-tetris-game',	'2019-01-01',	'Remake of the classic tetris game.',	NULL,	'2020-12-25 06:00:22',	'2020-12-25 06:00:22',	'Unity'),
(12,	'Game Ball Drive',	'game-ball-drive-simple-game-about-moving-a-ball-to-the-finish-line-without-falling',	'2019-01-01',	'Simple game about moving a ball to the finish line without falling.',	NULL,	'2020-12-25 06:07:52',	'2020-12-25 06:07:52',	'Unity'),
(13,	'Click Game',	'click-game-simple-game-about-clicking-moving-objects-to-get-points',	'2019-01-01',	'Simple game about clicking moving objects to get points.',	NULL,	'2020-12-25 06:11:46',	'2020-12-25 07:50:28',	'Unity'),
(14,	'Time Series Forecasting with ARIMA and SARIMA',	'time-series-forecasting-with-arima-and-sarima-forecasting-prices-of-basic-commodities-in-indonesia-with-python-and-jupyter-notebook-using-autoregressive-integrated-moving-average-and-seasonal-autoregressive-integrated-moving-average',	'2020-03-01',	'Forecasting prices of basic commodities in Indonesia with Python and Jupyter Notebook using Autoregressive Integrated Moving Average and Seasonal Autoregressive Integrated Moving Average.',	NULL,	'2020-12-25 08:13:05',	'2020-12-25 08:13:05',	'Jupyter Notebook'),
(15,	'dimaswisodewo.site',	'dimaswisodewosite-portfolio-website-using-bootstrap4-for-frontend-laravel7-for-backend-and-mysql-for-database',	'2020-12-12',	'Portfolio website using Bootstrap4 for frontend, Laravel7 for backend, and MySQL for database.',	NULL,	'2020-12-25 08:26:24',	'2020-12-25 08:26:24',	'Website');

DROP TABLE IF EXISTS `work_details`;
CREATE TABLE `work_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lessons_learned` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloadable_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `work_details` (`id`, `work_id`, `description`, `lessons_learned`, `source_code`, `downloadable_file`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'This application was made as a final project during internship at octagon studio. The final task for internship is to create something new as desired which you want to use for new features in one of octagon studio applications using the existing assets. This application provides an educational quiz game about space including the solar system, planets, space objects, satellites, rovers, and space missions that utilizes virtual reality for a more enjoyable learning experience.',	'Lessons learned while creating this application are how to create an interactive virtual reality system that is interactive and easy to use, also learn how to store a lot of information and access it correctly.',	NULL,	'https://drive.google.com/file/d/12GMnz-zCer4MLsfb412gcZ7FK1KP3t6o/view',	NULL,	'2020-12-19 00:41:15',	'2020-12-19 00:41:15'),
(2,	2,	'Educational applications for high school students in the field of social arithmetic including buying and selling, profit, loss, discount, tax, single interest, gross, net and tare. This application provides practice questions, video animations, evaluation questions, and examples of the application of social arithmetic in the real world. This application was made as a bachelor\'s thesis of one of the mathematics students at the university.',	'Lessons learned while creating this application is how to provide examples of social arithmetic in the real world such as buying and selling transactions using the messenger application.',	'https://github.com/dimaswisodewo/AplikasiMatematika',	'https://drive.google.com/file/d/1BuAwEokDFEx-Ir0MRl4OsxYLq0qCpL8j/view?usp=sharing',	NULL,	'2020-12-19 20:02:43',	'2020-12-19 20:02:43'),
(3,	3,	'Once upon a time there was an astronaut who was on his way back to earth. The astronaut had just been working overtime the day before his return day. He was very sleepy. He didn\'t notice an asteroid heading his way. An accident happened. Luckily the astronaut managed to get out of his rocket safely accompanied by his gun. He is lost in space.',	'Lessons learned while creating this game is how to use 2D light using Universal Render Pipeline, how to create a minimap, how to create pixel assets using piskel.',	'https://github.com/dimaswisodewo/Lost-in-Space-URP',	'https://drive.google.com/file/d/192WlPTqUo89UNL6h4rh93iYjsr4qEr2t/view',	NULL,	'2020-12-20 04:45:12',	'2020-12-20 04:45:12'),
(4,	4,	'Educational applications for high school students in the field of geography. This application was made as a bachelor\'s thesis of one of the geography students at the university.',	'Lessons learned while creating this application is how to save and access object within object in JSON file.',	'https://github.com/dimaswisodewo/GeoNaturalResource-App',	'https://drive.google.com/file/d/17xsI69ZjLVkdyoqXSKcjcFD1FZWwGtvZ/view',	NULL,	'2020-12-20 06:58:47',	'2020-12-20 06:58:47'),
(5,	5,	'Simple FPS game, shoot the viruses to win the game.',	'Learn how to use simple state machine for enemy behavior.',	'https://github.com/dimaswisodewo/Shoot-the-Virus',	NULL,	NULL,	'2020-12-25 05:01:28',	'2020-12-25 05:01:28'),
(6,	6,	'Educational applications for high school students in the field of economy including economy development, economic growth, map of economic growth in Indonesia, theory in economics by experts, etc. This application provides quiz and high scores. This application was made as a bachelor\'s thesis of one of the economics students at the university.',	'Lessons learned while creating this application is how to provide quiz with high scores system.',	'https://github.com/dimaswisodewo/EkoEduApp',	NULL,	NULL,	'2020-12-25 05:09:32',	'2020-12-25 05:09:32'),
(7,	7,	'Simple Augmented Reality App that can detect more than one marker.',	'Lessons learned while creating this application is how to create Augmented Reality App that can detect more than one marker.',	'https://github.com/dimaswisodewo/AR_IronMan_MultiTarget',	NULL,	NULL,	'2020-12-25 05:18:59',	'2020-12-25 05:18:59'),
(8,	8,	'Transform a word that only has letter a, b, and c (eg. \"cabcabbaacbca\") to it\'s shortest string that is possible.\r\nThe word has characteristic as follows: if there are two letters that are adjacent and distinct, they can be replaced with one other letter we have (we have only a, b , and c).\r\nAfter that, visualize the algorithm in Augmented Reality.',	'I learned that memory management is important, especially when doing brute-force checking. I learned that using a queue is more efficient and takes up less memory than a list.',	'https://github.com/dimaswisodewo/ReduceAdjacentDistinctLetter',	'https://github.com/dimaswisodewo/ReduceAdjacentDistinctLetter/blob/main/AR_Project/AdjacentDistinctLetterAR_build.apk',	NULL,	'2020-12-25 05:29:59',	'2020-12-25 05:33:34'),
(9,	9,	'Augmented Reality App with extended tracking and interactions (scale, rotate) using LeanTouch.',	'Lessons learned while creating this application is how to create Augmented Reality App with scaling and rotation interaction using LeanTouch.',	'https://github.com/dimaswisodewo/AR_IronMan_ExtendedTracking',	NULL,	NULL,	'2020-12-25 05:39:31',	'2020-12-25 05:39:31'),
(10,	10,	'Simple game about a boy who volunteered to send ballot boxes to the warehouse by avoiding enemies.',	'Learn how to apply animation to characters when moving and use a simple unity ai agent so the enemy can chase the player.',	'https://github.com/dimaswisodewo/Game_KPUMan-',	NULL,	NULL,	'2020-12-25 05:56:17',	'2020-12-25 05:56:17'),
(11,	11,	'Remake of the classic tetris game.',	'Learn how to apply a two-dimensional array to a grid system in a tetris game.',	'https://github.com/dimaswisodewo/Game_Tetris',	NULL,	NULL,	'2020-12-25 06:01:52',	'2020-12-25 06:01:52'),
(12,	12,	'Simple game about moving a ball to the finish line without falling.',	'Learn how to make a simple 3D game.',	'https://github.com/dimaswisodewo/Game_BallDrive',	NULL,	NULL,	'2020-12-25 06:08:21',	'2020-12-25 06:08:21'),
(13,	13,	'Simple game about clicking moving objects to get points.',	'Learn how to make a simple 2D game.',	'https://github.com/dimaswisodewo/Game_ClickGame',	NULL,	NULL,	'2020-12-25 06:12:18',	'2020-12-25 07:45:42'),
(14,	14,	'This research predicts the price of chicken meat and chicken eggs using the ARIMA and SARIMA methods. stationary test using Rolling Mean and Rolling Standard Deviation visualization and Dickey-Fuller Test, parameter optimization using the Grid Search method and diagnostic tests on the model using Ljung-Box test. Price forecasting is done on chicken meat and chicken eggs because the two commodities are interrelated with each other, seen from the results of the Pearson correlation test of 0.92 in the dataset and 0.87 in the forecasting results. The selection of the best model is based on the smallest Mean Squared Error (MSE), Mean Absolute Error (MAE) and Mean Absolute Percentage Error (MAPE). The best chicken meat price forecasting results using the ARIMA configuration method (3, 1, 2) with a MAPE value of 2.31%, while the best chicken egg forecasting results use the SARIMA configuration method ((2, 1, 1), (2, 0 , 2, 0), n] with MAPE values of 3.44%.',	'Learn how to do Time Series Forecasting using ARIMA and SARIMA',	'https://github.com/dimaswisodewo/Time-Series-Forecasting-with-ARIMA-and-SARIMA/blob/master/Prices.ipynb',	NULL,	NULL,	'2020-12-25 08:16:50',	'2020-12-25 08:21:46'),
(15,	15,	'Portfolio website using Bootstrap4 for frontend, Laravel7 for backend, and MySQL for database.',	'Learn how to make a portfolio website, learn to design using Figma and implement in code using Bootstrap4, learn to do CRUD in a website using Laravel7 for backend.',	'https://github.com/dimaswisodewo/dimaswisodewo.site',	NULL,	NULL,	'2020-12-25 08:35:01',	'2020-12-25 08:35:01');

DROP TABLE IF EXISTS `work_platforms`;
CREATE TABLE `work_platforms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `work_platforms` (`id`, `work_id`, `platform`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'Android',	NULL,	'2020-12-19 00:47:27',	'2020-12-20 05:47:16'),
(2,	2,	'Android',	NULL,	'2020-12-19 20:04:39',	'2020-12-19 20:47:27'),
(3,	4,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-20 04:45:50',	'2020-12-20 04:45:50'),
(4,	3,	'Android',	NULL,	'2020-12-20 04:45:59',	'2020-12-20 04:45:59'),
(5,	5,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-25 05:02:04',	'2020-12-25 05:02:04'),
(6,	6,	'Android',	NULL,	'2020-12-25 05:10:19',	'2020-12-25 05:10:19'),
(7,	7,	'Android',	NULL,	'2020-12-25 05:19:10',	'2020-12-25 05:19:10'),
(8,	8,	'Android',	NULL,	'2020-12-25 05:30:10',	'2020-12-25 05:30:10'),
(9,	9,	'Android',	NULL,	'2020-12-25 05:39:46',	'2020-12-25 05:39:46'),
(10,	10,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-25 05:56:25',	'2020-12-25 05:56:25'),
(11,	11,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-25 06:03:16',	'2020-12-25 06:03:16'),
(12,	12,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-25 06:08:29',	'2020-12-25 06:08:29'),
(13,	13,	'PC, Mac & Linux Standalone',	NULL,	'2020-12-25 06:15:01',	'2020-12-25 06:15:01');

DROP TABLE IF EXISTS `work_roles`;
CREATE TABLE `work_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `work_roles` (`id`, `work_id`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'Unity Developer',	NULL,	'2020-12-20 05:23:17',	'2020-12-20 05:48:38'),
(2,	2,	'Unity Developer',	NULL,	'2020-12-20 05:26:37',	'2020-12-20 05:26:37'),
(3,	4,	'Unity Developer',	NULL,	'2020-12-20 05:26:46',	'2020-12-20 05:26:46'),
(4,	3,	'Unity Developer',	NULL,	'2020-12-20 05:26:54',	'2020-12-20 05:26:54'),
(5,	5,	'Unity Developer',	NULL,	'2020-12-25 05:02:53',	'2020-12-25 05:02:53'),
(6,	6,	'Unity Developer',	NULL,	'2020-12-25 05:10:29',	'2020-12-25 05:10:29'),
(7,	7,	'Unity Developer',	NULL,	'2020-12-25 05:19:59',	'2020-12-25 05:19:59'),
(8,	8,	'Unity Developer',	NULL,	'2020-12-25 05:30:40',	'2020-12-25 05:30:40'),
(9,	9,	'Unity Developer',	NULL,	'2020-12-25 05:40:52',	'2020-12-25 05:40:52'),
(10,	10,	'Unity Developer',	NULL,	'2020-12-25 05:57:11',	'2020-12-25 05:57:11'),
(11,	11,	'Unity Developer',	NULL,	'2020-12-25 06:03:37',	'2020-12-25 06:03:37'),
(12,	12,	'Unity Developer',	NULL,	'2020-12-25 06:09:02',	'2020-12-25 06:09:02'),
(13,	13,	'Unity Developer',	NULL,	'2020-12-25 06:15:25',	'2020-12-25 06:15:25'),
(14,	15,	'Full Stack Developer',	NULL,	'2020-12-25 08:36:33',	'2020-12-25 08:36:33');

DROP TABLE IF EXISTS `work_technologies`;
CREATE TABLE `work_technologies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `work_technologies` (`id`, `work_id`, `technology`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'Unity',	NULL,	'2020-12-20 04:54:40',	'2020-12-20 05:50:07'),
(2,	1,	'C#',	NULL,	'2020-12-20 04:58:15',	'2020-12-20 04:58:15'),
(3,	1,	'Vuforia',	NULL,	'2020-12-20 04:58:27',	'2020-12-20 04:58:27'),
(4,	2,	'Unity',	NULL,	'2020-12-20 04:58:38',	'2020-12-20 04:58:38'),
(5,	2,	'C#',	NULL,	'2020-12-20 04:58:50',	'2020-12-20 05:07:45'),
(6,	3,	'Unity',	NULL,	'2020-12-20 05:50:50',	'2020-12-20 05:50:50'),
(7,	3,	'C#',	NULL,	'2020-12-20 05:50:59',	'2020-12-20 05:50:59'),
(8,	4,	'Unity',	NULL,	'2020-12-20 06:59:22',	'2020-12-20 06:59:22'),
(9,	4,	'C#',	NULL,	'2020-12-20 06:59:30',	'2020-12-20 06:59:30'),
(10,	5,	'Unity',	NULL,	'2020-12-25 05:02:22',	'2020-12-25 05:02:22'),
(11,	5,	'C#',	NULL,	'2020-12-25 05:02:36',	'2020-12-25 05:02:36'),
(12,	6,	'Unity',	NULL,	'2020-12-25 05:09:42',	'2020-12-25 05:09:42'),
(13,	6,	'C#',	NULL,	'2020-12-25 05:09:49',	'2020-12-25 05:09:49'),
(14,	7,	'Unity',	NULL,	'2020-12-25 05:19:18',	'2020-12-25 05:19:18'),
(15,	7,	'C#',	NULL,	'2020-12-25 05:19:27',	'2020-12-25 05:19:27'),
(16,	7,	'Vuforia',	NULL,	'2020-12-25 05:19:32',	'2020-12-25 05:19:32'),
(17,	8,	'Unity',	NULL,	'2020-12-25 05:30:20',	'2020-12-25 05:30:20'),
(18,	8,	'C#',	NULL,	'2020-12-25 05:30:25',	'2020-12-25 05:30:25'),
(19,	8,	'Vuforia',	NULL,	'2020-12-25 05:30:31',	'2020-12-25 05:30:31'),
(20,	9,	'Unity',	NULL,	'2020-12-25 05:40:02',	'2020-12-25 05:40:02'),
(21,	9,	'C#',	NULL,	'2020-12-25 05:40:08',	'2020-12-25 05:40:08'),
(22,	9,	'Vuforia',	NULL,	'2020-12-25 05:40:14',	'2020-12-25 05:40:14'),
(23,	10,	'Unity',	NULL,	'2020-12-25 05:56:33',	'2020-12-25 05:56:33'),
(24,	10,	'C#',	NULL,	'2020-12-25 05:56:39',	'2020-12-25 05:56:39'),
(25,	11,	'Unity',	NULL,	'2020-12-25 06:03:24',	'2020-12-25 06:03:24'),
(26,	11,	'C#',	NULL,	'2020-12-25 06:03:29',	'2020-12-25 06:03:29'),
(27,	12,	'Unity',	NULL,	'2020-12-25 06:08:49',	'2020-12-25 06:08:49'),
(28,	12,	'C#',	NULL,	'2020-12-25 06:08:55',	'2020-12-25 06:08:55'),
(29,	13,	'Unity',	NULL,	'2020-12-25 06:15:08',	'2020-12-25 06:15:08'),
(30,	13,	'Vuforia',	NULL,	'2020-12-25 06:15:14',	'2020-12-25 06:15:14'),
(31,	14,	'Jupyter Notebook',	NULL,	'2020-12-25 08:20:53',	'2020-12-25 08:20:53'),
(32,	14,	'Python',	NULL,	'2020-12-25 08:21:16',	'2020-12-25 08:21:16'),
(33,	14,	'Statsmodels',	NULL,	'2020-12-25 08:22:26',	'2020-12-25 08:22:26'),
(34,	15,	'Bootstrap4',	NULL,	'2020-12-25 08:35:45',	'2020-12-25 08:35:45'),
(35,	15,	'Laravel7',	NULL,	'2020-12-25 08:35:55',	'2020-12-25 08:35:55'),
(36,	15,	'MySQL',	NULL,	'2020-12-25 08:36:04',	'2020-12-25 08:36:04');

-- 2020-12-25 15:48:50
