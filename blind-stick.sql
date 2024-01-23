-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 10:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blind-stick`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `nama` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `emails` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id_riwayat`, `nama`, `latitude`, `longitude`, `emails`, `updated_at`, `created_at`) VALUES
(21, 'eyJpdiI6Ik5ZU0lYTU0rdGNHbHVtOFhjYWIwQ0E9PSIsInZhbHVlIjoiTWFLYlJ4UExHTC9TeWxocFVUeGFOaHp5ak91QWRGbTRpZEkxZEo2Q3YveTEzT2JmWGZURVFOdXZMbHJHa01XaisvbGtNWXN3WnNpTW1NOWh1SFBoTUE9PSIsIm1hYyI6Ijk3MjA4MmE4YjE4NTcwYTAxOTMzNjFiZTZiYjA4MDMyOWI2NjczN2M1OWYyNjA5Nzg5ZDEyZjQxN2MyMmExYTMiLCJ0YWciOiIifQ==', 'eyJpdiI6InpONmxSd0NlaUtlSWNwa3B5TjBJMlE9PSIsInZhbHVlIjoiaENrZ0ZGNmErMG00MmRjN1pLdVZuMTlWSDczYkNRdlhhYi82N3FiTEdDST0iLCJtYWMiOiIzODE3NDFmNzU0NzJkYmVjMDY4MTc0ZTY1NTYyYmNkYTdlMTIzMzQwNGVjMDI1YmYzYjczOGQzNTM4NjA3ODA1IiwidGFnIjoiIn0=', 'eyJpdiI6IjdaWnNPdGRqNFhmVHlYZkNDY2thU3c9PSIsInZhbHVlIjoiVEdudFNOWjBjTDJqVEFOc2xOU1dnSGtSaS8vNlV6UHQ4MXVFWUNscC90cz0iLCJtYWMiOiJmODY2ZTBiMjVjY2YwZjA0MDliZDFjN2EyMTViMjcwODU5ODAxM2ExNTAxZTdmNWIzYTkwYTc5Zjc3ZWE1YzQ1IiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:41:01', '2024-01-22 07:41:01'),
(22, 'eyJpdiI6InBIcmova1NhMUg5UndYaW03Zm9BR3c9PSIsInZhbHVlIjoiQjcwLy9iL29KUVRQdm9XMGZneS9zRTNnS1VuWEhrOHlkVE9KL1FXQTB3TzlwY0lIMUhTY0ZnRmpmYjE0aDQvRW9jQUFQS2N3N05Cb1pUU1dHcS9iL3c9PSIsIm1hYyI6ImIyOTRmZTY1MDFjYmU1MTdkNWFmZDc2OTY4MTdkMWRjOTMxNGFjNjUwYmNiYmUwNWZhZTM2MmUyYzJlNzIyMjEiLCJ0YWciOiIifQ==', 'eyJpdiI6InNaK0xPb1dDV0dMT0QyYmhxVCtrRkE9PSIsInZhbHVlIjoieVBOaDh3RnN1dUpRUlYzU1FYVjltd1FsSGdhZDJyVk91ZnRhSnFsaDVHbz0iLCJtYWMiOiJhOTM2Y2Q3OTZkY2MwYjJhMTQ2NDQwNzU1MzY3OGQ1MGNlOTljYzA2MDhlMDMzODhmYTVjMTdlOGFmM2IxYjdlIiwidGFnIjoiIn0=', 'eyJpdiI6IlVzdHZObDhMK3gzQXlQUHRMbEIzVEE9PSIsInZhbHVlIjoiNnIvOGI3VmVRbC9qV3NEd05kbFJkTzFMemhSOG5lb0dGaGhUdlBmYlBrWT0iLCJtYWMiOiJiMzUzNjhlYTAzOTA2NDE2NjkzYjI2YjhjZTdkODgzOGIwNDQyMDUyZGI1ZWJkZmYyNDJlNTE1NGQ0ZThiMGFiIiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:42:09', '2024-01-22 07:42:09'),
(23, 'eyJpdiI6InVmK05GUEh3SW0vd3VHMFV4SVhpRnc9PSIsInZhbHVlIjoiS1RXekpyK2duQzl6YzVmNk03RjBjQVFnelFvbUhWS1pXa2IrRUs3UHpwdC91N2NGRnNtT2F0c0dacldEWEJUR1RlY1pNZUt2VFUreVpMYVY2SzNUb3c9PSIsIm1hYyI6ImIwM2VjYWY0ODkwM2NiY2VhMjdjMWE4NDY1ODg3MjQyZTM2OTU4MzQwNTIxMzE5MGY3MzAxZTQyOGQyZjZmYzIiLCJ0YWciOiIifQ==', 'eyJpdiI6InFiam9vRUI3UVluVGlPRkVxTzg0Q0E9PSIsInZhbHVlIjoiZ2Jxdjk5Q1Q0Z1FXOHJEWVVjSWZibEtwTkdwaEJIVSsyRDhNWTQ1cVJyMD0iLCJtYWMiOiJlYTgxYmJhODRlNTY5ZjU2NTExOWE1MTFiMzYzMzBhOTk0ZjA2YjJmM2I2NDU4ZGFlNmU5ZjBhNDE3NzRkMTBiIiwidGFnIjoiIn0=', 'eyJpdiI6IkI5OU4xbCtJbG9kd1llVFhtWHV5ckE9PSIsInZhbHVlIjoidVhHWWQxT2hlVkhBRkt1bnloNk1hRG84Slg1bnM0UXYrdDkwcEJwOUFsbz0iLCJtYWMiOiI4NTAwMjc5MGFkMGFkYzUzZWNlNGM5Mzg4NDgxMDNkMjJiZjY3MzZmMzAwZjFiNzdlOTJhMjc4NWU4MmE0MTczIiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:43:29', '2024-01-22 07:43:29'),
(24, 'eyJpdiI6IlVVRHRGbDZMV2p4ajIvcnUrb2NaMWc9PSIsInZhbHVlIjoiNTVmNFljMUZ4TkJBZlJsV1FNOW5LZmVaSlVKa2N2QW9PT1NBb2MxMFdoVWNieitXYWdRMkVrODAyTXZDVER3bm56RE1JWWlNeVlBcldmT1hpMEtpclE9PSIsIm1hYyI6IjZmMGVhZDg5N2FkMTE0NGMzMjJlZGYyMDUyZTIxZGJlNmQwNGY4ZTkxNTU1ZDIzODJhOTJkZjIwMzljZTA0NDEiLCJ0YWciOiIifQ==', 'eyJpdiI6InhCTmpLM0N1U2tOQTZ4Z3MzSjJuUFE9PSIsInZhbHVlIjoiK1QrVEMydFRiQWdQU2dYY3h5MGpObjcxREpnTHlKbnpFYlU1Qkswb2tlST0iLCJtYWMiOiIwNGNlMjQxNzQyOGZiNmZhMDRmMWU4OGFlMWQwYzA1MmZlYzNhMzFjMmNjMDJjYTIxYWYwOGUzOGIzYzg5Njg3IiwidGFnIjoiIn0=', 'eyJpdiI6InoxcjhxV3BITG5zaWc5cWY0WlZxdWc9PSIsInZhbHVlIjoiY0swMUJDU0d1OVlwYyt0aFhkeW9Gd0M3QXBjd3dZMjdWREk3MTVvSkZybz0iLCJtYWMiOiI2YWJkY2ZlZGY1ZjRhMjA3MjRjZjgzNDRjMTYxMGM2NTJkZjdhNDQxYTE4OWQzNTA3OTMyMDNkYmMwODhmOTg2IiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:44:13', '2024-01-22 07:44:13'),
(25, 'eyJpdiI6IjdOSE5qU2xudFVKKzRqbzhPQU51eFE9PSIsInZhbHVlIjoib3BaeVhBbDRSWkNscDdwOUo4STJmUTdBdXBLSDRsS0lpNHZHR3V3WXB6SGNVSk9VMnIwWEplVW9MdFJCNDhHV0tGdUhKTkxJbGtlUkE0MzFaMTNaaWc9PSIsIm1hYyI6Ijg5NWE5NzQ2MWQyZTgyMTY2NTI0ZjJlMTllNGMyOWMxOGI1ZDJjYTUzNjRjOGYxOWFjOTk1NDllYzM4MGU1MDEiLCJ0YWciOiIifQ==', 'eyJpdiI6ImZoOFpQdmFlSFRLT0c1WXZjNUU3dFE9PSIsInZhbHVlIjoiNVBNaEtkSm8wRlFUK2ZZOUpVTi9TQkFac1ArYUF5ZE1ySmVCL0NGUFhOMD0iLCJtYWMiOiI1ZTI0MjFiYmRkOTQ0NTUxNGM2YTc4ZGQ5YmRmODU3ZGQzZjVhZTgxZTIwYWJlNGVjMzYwNjhhOGNhYzEwMzc3IiwidGFnIjoiIn0=', 'eyJpdiI6Im5oN3lZT1QzRW5FYXlBTGJWcklVSGc9PSIsInZhbHVlIjoiSnlQOUhwZmZYd3g1WGQzTTJVemxTM25QUy8xMDVOM1FHeUNUOTc0eFlKTT0iLCJtYWMiOiIzMTZiMGEzZmE5ODA2Yjc0NDY4NzIzODZmMjIzNTEwMjBhNmFkNGRiZDFjYjMzZjFlZmRjMTM1YjVjY2EwYWM0IiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:58:08', '2024-01-22 07:58:08'),
(26, 'eyJpdiI6IjJBbEdBL1RkZ1NHeExmbk45Z3dMMVE9PSIsInZhbHVlIjoib1lzQkI2K3ZCV1F0eFkwUXZUOG0yS1hQTHNPSzYzMlRlZUtoSk9Kang0b2Z4QTJFVUxKSXZKekVHSDBWOWJFa2JVKy9saTU5aUVyZkJWVEs0MWtlRXc9PSIsIm1hYyI6ImUyNDhiMDc3MjQwY2NjNDhiYjZhOWVhOTA4ZWZkMzRmMTE4ZjMxODJmMTVmNWE3NTMwZmE4MmQ5MTdlNmI1YWIiLCJ0YWciOiIifQ==', 'eyJpdiI6Ik8wRUFLY1laSVJsSWIzMlpDZlE2V0E9PSIsInZhbHVlIjoiSmQyVWFGMWMwQ050d1dwQ1g1VjBqVXRUOWl6cStacGRBZE9WK3lTUzYwWT0iLCJtYWMiOiJhOWExODBjNWVjYTYzOTQ4ZjQxMTkyNWU3ODZiMzJlZGEyNTBkYjg4OGEyM2U1ZTRkMzBlOGI0NDhmMjBkNTlhIiwidGFnIjoiIn0=', 'eyJpdiI6InpYVzYvSWpzTEQzYXFiVHBNVWhnekE9PSIsInZhbHVlIjoiRzRQNW1zTUxKOWM4Y1YrZ0E3MjhFUnpuNmlqaHdBUVpjRHU0bFlUZUdwUT0iLCJtYWMiOiIwN2E3NTY3Y2JlZjRhNDc3OTBmMmIzZjcyMDkxYzQzMzgzZGIxMTUyYzI0YmM1OTkyMDFmNTY4MGNhYjI1NmU5IiwidGFnIjoiIn0=', 'hello', '2024-01-22 07:58:38', '2024-01-22 07:58:38'),
(27, 'eyJpdiI6IlhWWHplTnM0NmpFWjdraVhyc01RN0E9PSIsInZhbHVlIjoiaXBNUWVWKzVremtqaTNnSEVKYUNJaERSK0FkeURORU1sQW9JRkE0TnE0Rmk0SzU0bU9aMXJ2b01pbWxkbWpqbEljWUhLUnBkbkxHOU01bDNHNmhSZWc9PSIsIm1hYyI6ImY3ZWYyNzE1MTQ4OTJiZDdiYjRiZDUxNjQxYTQ1YjM2MDMxZDJlZTcwMThhZDg0MTAxNjFmOGNjODY5ODA5NzMiLCJ0YWciOiIifQ==', 'eyJpdiI6IkNQZUs5T1ZjakdoT2ExYWxkOVdnTFE9PSIsInZhbHVlIjoicTZCd1pRZlNxSURpTXJ1Wi81NDdwVmxIaGluazlFbTRlR1ZxWTQvN2d1RT0iLCJtYWMiOiIzZmM5ZmZkZmNlZmNkN2YyOTliM2VkYmRmMTUyNjNjOTVlNDY2NGZlYjI1YWEwNTc5MzkzNTU1YWI4NWQ2MzViIiwidGFnIjoiIn0=', 'eyJpdiI6IlJuaXU3VkhPMFBGa1J3VnZsOVErdVE9PSIsInZhbHVlIjoiK3VOTFZMWitTS3hCRXF6ZXNrTzhNeXcyeDMvcE1xSUVrcWkxM3NMK3YyRT0iLCJtYWMiOiJmYTVkMmIwYmRlN2QzMjdkZGY1NjlkMTUzNDdlZWRhMTdjNWEwOTliYjg0Y2Y1MThjYjM5MTg4NmFlNTFmZDZjIiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:03:44', '2024-01-22 08:03:44'),
(28, 'eyJpdiI6ImJpdGNZdW8xN0ttbzZnM2ZpQlZscmc9PSIsInZhbHVlIjoiMmhCcGYyZlJQTHpmekFXU09jOTBYSS83U2VyYWR3bXAvbmFwK0srZ2hmVVp5UjdMY1ZnN0VFa29KV3F5STA4ME1UWTFEUnpmbkh5citXUVhQUjlYNFE9PSIsIm1hYyI6IjBmYTZjYzI1N2U4MWZhMWI0ZTcwNWQ5Zjc4OGQ4MTc0NWM3N2Q3MjRjYjZiZWRlOGQwZDczZjIyMGFhMmM3MTciLCJ0YWciOiIifQ==', 'eyJpdiI6IkpFNWhxNXR5S2drYUp4K1ltRWtUaVE9PSIsInZhbHVlIjoiWTVZR0RaR2VUM3NzaUZIeWRYTFhZRDlCbWFlTk1vYVpHNTAwZVRTelRndz0iLCJtYWMiOiI2M2Q2YTY5ODkxNmQ4YThhYTUzYmRhM2UzZmZkYjg1ODQ5MjFiYTRmZjczM2ViN2I0ZDc5MGE0MGY4ZTk5NjE2IiwidGFnIjoiIn0=', 'eyJpdiI6ImFlWGU0S04ydzVSTDdNb0FxMzRVTWc9PSIsInZhbHVlIjoiRlQ5RGtFRjRPVTB5MFBjaXFiSU5KeEtuTkpBcVU3c2VCd2MyVDc1b2tBMD0iLCJtYWMiOiJlNjVjN2NhOTI0ZDg1N2EwYWY0ZGIyY2U5N2YwM2VmZjVjMWE0MWMxZGEyZWViOTBlOWNiYmY1YTVhYTczYmQzIiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:04:45', '2024-01-22 08:04:45'),
(29, 'eyJpdiI6IkNyYTNwZWxGWStWZ0tIVUoydS9xZkE9PSIsInZhbHVlIjoiRWVsTUJqQ3hMaGdUQmRKa2NXOFZDTDI4d0Z0eXNNdy9zUnMvRUhzMVhQSEZNRnExb2c4QVU0cTcwRU1NZnFCVEc0eDFHdTBKZ0tEMEVHSmZCZGloZ3c9PSIsIm1hYyI6IjhjZmRkMGVlMTE0YWZmM2M5NjFjZGEyMzM2MTEzMGYwODJlNjZmNTM0OGRjMjQ1OWFjZTFlMTRhOGRiZTBjZWIiLCJ0YWciOiIifQ==', 'eyJpdiI6InBEWU0xSDRLamZOTC8vSTRyUE1oZFE9PSIsInZhbHVlIjoiYVVGd2R1SkV1enJ6YXFyVTJwbTNzZmJPdVNUUm5mc2lDS244ei95d0ZaQT0iLCJtYWMiOiI3ZmVjNzY5MzkwZTMyMjAxNzRhYTdkMDgyYzU2YTI0ZmM1YTZjNzBlZGVkN2MyZmFmMzE1ZmE5YjA1M2FjZDdmIiwidGFnIjoiIn0=', 'eyJpdiI6IkF1QkQ5SCtDQUdhVUExRnFhRGpqdWc9PSIsInZhbHVlIjoiTVgyVC9vMTFBQk9Xd0xBckFWSnRlNUgvaE91Y0pkNzJteFhEMGFYRGNIbz0iLCJtYWMiOiIxZTYwN2QwNzFlYTdkYTk1NzNhZGMxMGQ2ZGIwNmQ4ODk3NjM1YjdiM2M0YjBjMTA3MTFmNGZiMDcyMDA4MTY5IiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:06:02', '2024-01-22 08:06:02'),
(30, 'eyJpdiI6Ild2NkdEeGVDUEVQbzBzY1E3OHA2Q0E9PSIsInZhbHVlIjoiS1Z4bnlVQ0dza3pWT2FDdGU0eHdzVEJVTUVzb3JXaTNJZ1lRWXBuQVZWOGhITEpiZ3owMmwrMTVETW5YRDI0Mk1xZUtaMkpiZk96UGROUFVtbzhSeXc9PSIsIm1hYyI6IjU5ZjFiZTljYTliOTgyZmZjMWE1NGU2MGNkMWRiMTg4NTM0NDY4YjNkNDdkYzY4OGY2NjkyMmZlNDJkMDQwMjciLCJ0YWciOiIifQ==', 'eyJpdiI6IlVHYjlncWpJM1JIaWZQUys0SUVUd3c9PSIsInZhbHVlIjoiR2psaUtDcERadmd6RjNuQllnckFieGpqV2NSKzVIM1ZRKzdiSUNwcG9ZND0iLCJtYWMiOiIxMmNhZDQwYWU0ZTFmMzU2MmU3YTcwYTdkYzFkY2MwM2RjM2Q4NDQ3NTY0MmM0NTMyNDE5YmFjZGRlZGY4ZDI3IiwidGFnIjoiIn0=', 'eyJpdiI6ImJ4MmJRNHBTaEY1YlAxZ0tGKy9xVUE9PSIsInZhbHVlIjoiUnBaQldFN0h2b1d0c2JKT0x4bWlPRmNyU241bjRWWU1EU3kwRFBaWktRcz0iLCJtYWMiOiJiMDE5MDg4N2IyN2Y1NzllOWE2ZTM5YzU0YWI5ODdjNDM4ZWZhNmU5YWQzZTU4MDYyNzEyOGYzODRhZDhkMDc3IiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:07:06', '2024-01-22 08:07:06'),
(31, 'eyJpdiI6ImYvaHdHd0xTYWpjTlpNZEFaMlZjYXc9PSIsInZhbHVlIjoidnM0TWRha0tmUW5aNS9pREJtdzI4YW1uMnRvWUlrcXpXdWdEc1dBN0RwRkxTK0xyWEpMWFNMc0ZTUzlkak9OazBkVXM4MlEyelYweWxMYmtwbkRzTmc9PSIsIm1hYyI6Ijg2OTFiY2NmMGRhYzFjNjdkYWY2YWJmZTIzYWJkNDA2MmM0NmUzNDA5ZWUzNGUwZjBiMzZmM2U4Yzk1MDNkZDUiLCJ0YWciOiIifQ==', 'eyJpdiI6IkVzK3VMOHhkcHNmc1JuZ3VHVHNhblE9PSIsInZhbHVlIjoiMGJzUm5mTXRueG5FR1RxbEdzOFV3WEl6UGp2OS9mY282NHlVcTNUdURIND0iLCJtYWMiOiI5MDRkOTRlYWYxMWUzMDlmNjYzMmQ5Y2MzYzkwMWQ1Y2MzZmU1MGZiNGM1ZWY5ODY0OWNhMzg4YmViZjg2MDcwIiwidGFnIjoiIn0=', 'eyJpdiI6ImJnZy81b0VBblNFUlB6STdERmhXREE9PSIsInZhbHVlIjoiaDFMbENWUjVIZitCZ1cyZzFNL0hKampHRWZnM0tGRnN5NUQ2WnNiS0FObz0iLCJtYWMiOiJmNjM0MjgwZjI3N2JiYWQyYjhmY2ViOTlmMzVkYjQzOWZkMDE0MDExOTMxNzMzMTZkMWExOTFlZDBmZWU2YjZkIiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:08:53', '2024-01-22 08:08:53'),
(32, 'eyJpdiI6InhPZXVnc3Y2TTZrSVY0THpNRUNXc0E9PSIsInZhbHVlIjoiZWZLYXZjc2hDMmlmSnZScEhEemthT0JGNE9BNE5pTy8zaXRJNlNKblFsdHNaRjI4QzNEQnJYdGZ6QzRYYlJ1bXpiL2o2K0VNTk9SMCtHWVNUcFZCM0E9PSIsIm1hYyI6IjZmMGRlZWFmNmUzOWMyMjFjZTJmMjc4YWY3NzY3NzdkYmNiNjdhMGRlZjUxN2JkZThkNTdmMDU3ZTVmODA4MDUiLCJ0YWciOiIifQ==', 'eyJpdiI6Im5rNFNBNndoWXlNVEJTVXpHblg1R2c9PSIsInZhbHVlIjoibVg1NllLV3BoZzRnemwrT2wwTjJLMHRFcUlhR0Vkci9QbjVCL3EzeGFJRT0iLCJtYWMiOiIxZGYzYjA3ZTEzNzNkMGZiMWNjYTQ5NWE3ODdhOWRjMmQyMGQ1ZjJhYzY4OGMyMjJkYjE5YTY4ZGMzMDNlZWY0IiwidGFnIjoiIn0=', 'eyJpdiI6ImdkR01Rd2RqYkNZandNZ3U3L0lrVEE9PSIsInZhbHVlIjoiMXUrWGZmQ1pWNHhtTTVzcnR6UC9yR1FkRG4wb1RuTi9ZalM3Zmd0NHFuRT0iLCJtYWMiOiJlZjM4ZjU2MTZiZDE5NTVhNWYyNTRiNGYzNWQyZjZkNDBiYmY4MzNiM2NhNTUyNmYyYmE3NTU1MTA5MzQwYmJlIiwidGFnIjoiIn0=', 'hello', '2024-01-22 08:14:11', '2024-01-22 08:14:11'),
(33, 'eyJpdiI6InhtN1pKYXJQb3MrRmdIc0svcnYyaFE9PSIsInZhbHVlIjoiS2FNcmtaOFZSTGtHNUdva1pCZE9sM0dvaFlJRFkxbXFNT3hQOTl4TlBhMElZYktiY09IOHRjbzhzczEzNU1KOUE4ektsWlFqcGpHdlB6M0NZNERsaUE9PSIsIm1hYyI6ImY4MGU3MWJmNGUzZTc2NzljMzA1ZGJjY2YzNTI3MTZjYmNlNDVlMTUxYTU5MWNlMzc2MDdkMGRiMzY2MjY2NTQiLCJ0YWciOiIifQ==', 'eyJpdiI6IjE3YWhBaU1tT2dTN3hMZm5rQllzNXc9PSIsInZhbHVlIjoiZk1ZN2lHK29SUjNiTFZ6OC9CVFkvT2RDRGh1WEE5UGFEeW9jTGZaeDQvbz0iLCJtYWMiOiJkMGViNmM1MDJiZDM5MDE4ODc4OTllMTFmNmJmZjI2MmZiZjVlZjczMDA1YjUxYmUyN2JlZTY0MjFmZjA1ZDlhIiwidGFnIjoiIn0=', 'eyJpdiI6IjRBckpTM1RXQXN2ZWowVW9pZlhvSGc9PSIsInZhbHVlIjoicE5QSXNwVnJKZ3hvRDZ0Y2NmdHY2UmU3VENNeUxnZDBlOWtXdk5xT2lBaz0iLCJtYWMiOiJiNzA1NmExODZhYTYyZmNlOGM5YjI5MzJkZDBhMTZjMTRlZjVkOGQxMTdiZjU0YTdmMWE0MTE5OGRhYjAyNGIyIiwidGFnIjoiIn0=', 'hello', '2024-01-22 20:51:01', '2024-01-22 20:51:01'),
(34, 'eyJpdiI6IlRUSlFUNEpicTdPS3o1YkxWWUh5WVE9PSIsInZhbHVlIjoiKzA1eUVOWjRMVitpTWw3MCtKeDc2cEZ3Z1pDcUJPenVhOHlvdXZZRUhsNklxVm44OHFMRVRrY1ZCN3VEUlNRY2txMG1EL1ZqaUtXYVpDVXZVdzAzanc9PSIsIm1hYyI6IjNlZGNlYmRmMDRkN2UwMzIwNTQ3YWVjZGM2Zjk2ODJiNTJkZjUzNjM3ODE3MzkxNDFhZjYzYmUxMWY4M2IzNjAiLCJ0YWciOiIifQ==', 'eyJpdiI6IkY0TWd0NlpyUjIwMmRVM3ZyS3Y3akE9PSIsInZhbHVlIjoiMUtUTkFMYUVRQ05HSjlDVm9jUzNlUkx2SmxvSGwrOVBiQUlSVjljZVY5QT0iLCJtYWMiOiJmMTc3OTU4NmJhZjIxZGY4YTIwMWUzYzMwNDg1ZjcxMzY2MjBlODI0NDRlOTFiMWQ4ODNmNmYzN2Y4MWQ5YWRkIiwidGFnIjoiIn0=', 'eyJpdiI6ImtiNmZuWlVGcmE0RE5BSFk0cmlCb2c9PSIsInZhbHVlIjoiMkNnYVFwV1VOY3pna0FkMUxhZEdQOVdTcE9ZVmQxRjE1Wm80MXI3OXdTZz0iLCJtYWMiOiJkZDcwMDg1MTBlOWZhNWVkMTJkM2M3NmEzMDQ4YWMwZTk3ZDk0MDYwYmJmMTIwMWI4ZDBmMTJlYWZhMzBiMTg5IiwidGFnIjoiIn0=', 'hello', '2024-01-22 20:53:43', '2024-01-22 20:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id` int(11) NOT NULL,
  `object` char(4) NOT NULL,
  `jarak` int(11) NOT NULL,
  `sos` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`id`, `object`, `jarak`, `sos`, `updated_at`, `created_at`) VALUES
(1, 'aman', 310, 0, '2024-01-23 01:50:02', '2024-01-14 15:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groups` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `groups`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'filipus123.gmil@gmail.com', 'arif', 'filipus123.gmil@gmail.com', NULL, '$2y$12$a09mVXTP33ga0h/YmfmeQuQM/8nAaBaR6gCd2q8o/5Zqus2CpovUS', 'pengguna', NULL, '2024-01-21 23:23:21', '2024-01-21 23:23:21'),
(19, 'filipus123.gmil@gmail.com', 'siapa', 'pes123.gmil@gmail.com', NULL, '$2y$12$fd2dVXzps/Hgf/EyKyQ4Oe5sBz3wXuXuc1.Y89gZ.z/GHI7vTnV4C', 'penjaga', NULL, '2024-01-21 23:23:22', '2024-01-21 23:23:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
