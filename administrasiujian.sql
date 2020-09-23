-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 12:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasiujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `role`) VALUES
(1, 'martin', 'martin', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `NamaFakultas` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `NamaFakultas`, `updated_at`) VALUES
(9, 'Teknik Elektro dan Informatika', NULL),
(10, 'Teknik Industri', NULL),
(11, 'Bioteknologi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` int(11) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `pengawas1` varchar(10) NOT NULL,
  `pengawas2` varchar(10) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal`, `sesi`, `kode_mk`, `matakuliah`, `jenis`, `pengawas1`, `pengawas2`, `ruangan`, `created_at`, `updated_at`) VALUES
(6, '2020-10-19', 1, '245ftr', 'Dasar Pemograman', 'teori', 'mz17', 'CR7', 'GSG', '2020-04-30 04:24:53', '2020-04-30'),
(7, '2020-10-19', 1, '245ftr', 'Dasar Pemograman', 'teori', 'mz17', 'CR7', 'GSG', '2020-04-30 04:25:08', '2020-04-30'),
(8, '2020-10-19', 1, '245ftr', 'Dasar Pemograman', 'teori', 'mz17', 'CR7', 'GSG', '2020-04-30 04:25:16', '2020-04-30'),
(9, '2020-10-19', 1, '245ftr', 'Dasar Pemograman', 'teori', 'mz17', 'CR7', 'GSG', '2020-05-03 07:28:14', '2020-05-03'),
(10, '2020-10-19', 1, '245ftr', 'Dasar Pemograman', 'teori', 'mz17', 'CR7', 'GSG', '2020-05-15 08:16:38', '2020-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `NamaKelas` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `prodi_id`, `NamaKelas`, `updated_at`) VALUES
(1, 1, '42 TRPL2', NULL),
(2, 1, '42TRPL1', NULL),
(3, 1, '41TRPL1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `nim_mahasiswa` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `kode_mk`, `nama_matakuliah`, `nim_mahasiswa`, `nama_mahasiswa`, `created_at`, `updated_at`) VALUES
(7, '245ftr', 'Dasar Pemograman', '11418045', 'Martin Simanjuntak', '2020-05-08 02:10:42', '2020-05-08'),
(8, '245ftr', 'Dasar Pemograman', '11418046', 'Hosea Hutahuruk', '2020-05-08 02:10:42', '2020-05-08'),
(9, '245ftr', 'Dasar Pemograman', '11418047', 'Medianto Saragih', '2020-05-08 02:10:42', '2020-05-08'),
(10, '245ftr', 'Dasar Pemograman', '11418048', 'Risa Sitohang', '2020-05-08 02:10:42', '2020-05-08'),
(11, '2456w', 'Dasar Pemograman', '11418049', 'Kevin Aruan', '2020-05-08 02:10:42', '2020-05-08'),
(12, '2456w', 'Dasar Pemograman', '11418050', 'Kiki Sianipar', '2020-05-08 02:10:42', '2020-05-08'),
(13, '2456w', 'Dasar Pemograman', '11418051', 'Gaby Naibaho', '2020-05-08 02:10:42', '2020-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `NamaMatakuliah` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `prodi_id`, `kode_mk`, `NamaMatakuliah`, `updated_at`) VALUES
(1, 1, '1041101', 'Dasar Pemograman', '2020-06-11'),
(4, 1, '1041202', 'Sistem Operasi', NULL),
(5, 1, 'TI41101', 'Inovasi Digital', NULL),
(6, 1, '1041103', 'Arsitektur dan Organisasi Komputer', NULL),
(7, 1, '1141104', 'Pengembangan Situs Web I', NULL),
(8, 1, 'PA 2', '1142290', NULL);

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
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2020_04_14_145105_create_users_table', 1),
(19, '2020_04_15_064036_create_coba_table', 1),
(20, '2020_04_20_033521_create_pengguna_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `name`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(4, 'Martin Simanjuntak', 'Admin', '$2y$10$45Cie.AuX41IMtYG7TWAzeHhHeBRaor1wdHwlKzyVHNOOQD7so8gC', 'Admin', '2020-05-03 07:30:03', '2020-05-03 07:30:03'),
(5, 'Martin Simanjuntak', 'martin17', '$2y$10$LiJmdTRBGmSuZ9/M2pVAQO87ZLRD8MgcuiN9yin8T8PuXhApRBm4W', 'staff', '2020-05-03 21:43:08', '2020-05-03 21:43:08'),
(6, 'Albert Simanjuntak', 'Albert17', '$2y$10$gu8amWMLF6atHttZEG82lefOAspyaaXvY708C.SI/ww0zbMJ/wBKK', 'dosen', '2020-05-05 01:56:31', '2020-05-05 01:56:31'),
(7, 'risa', 'risa', '$2y$10$5GI5lJxO7qIFHySXGYzK.O6CaoBbNMZGP1YqTRdPDZ9xzLvZEL7cW', 'dosen', '2020-06-07 22:35:41', '2020-06-07 22:35:41'),
(9, 'kiki', 'kiki', '$2y$10$8IcOFPqXJOLQGr.Yrev9jup8xJpDo9Ol4Mhjy24JpaoavUMViDmc.', 'staff', '2020-06-07 22:38:32', '2020-06-07 22:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `NamaProdi` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas_id`, `NamaProdi`, `updated_at`) VALUES
(1, 9, 'D4 Teknologi Rekayasa Perangkat', '2020-04-28'),
(3, 9, 'D3 Tekonologi Informasi', '0000-00-00'),
(4, 9, 'S1 Sistem Informasi', NULL),
(5, 9, 'S1 Teknik Informatika', NULL),
(6, 9, 'S1 Teknik Elektro', NULL),
(7, 9, 'D3 Teknologi Komputer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_dosen`
--

CREATE TABLE `request_dosen` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `durasi` int(4) NOT NULL,
  `jenis_ujian` enum('teori','praktikum','','') NOT NULL,
  `ruangan` enum('laboratorium','kelas','','') NOT NULL,
  `ecourse` enum('ya','tidak','','') NOT NULL,
  `catatan` text NOT NULL,
  `jlh_mahasiswa` int(3) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `req_status_staff` int(11) NOT NULL DEFAULT '0',
  `req_status_dosen` int(11) NOT NULL DEFAULT '0',
  `pesan` text,
  `status_pesan` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_dosen`
--

INSERT INTO `request_dosen` (`id`, `kode_mk`, `matakuliah`, `nama_dosen`, `durasi`, `jenis_ujian`, `ruangan`, `ecourse`, `catatan`, `jlh_mahasiswa`, `status`, `req_status_staff`, `req_status_dosen`, `pesan`, `status_pesan`, `created_at`, `updated_at`) VALUES
(43, '245ftr', 'Dasar Pemograman', 'Albert Simanjuntak', 123, 'teori', 'kelas', 'ya', '131', 20, 2, 0, 0, NULL, 2, '2020-05-06 14:28:47', '2020-06-11'),
(44, '2456w', 'PA 2', 'Albert Simanjuntak', 123, 'teori', 'kelas', 'ya', '213', 20, 1, 0, 0, NULL, 0, '2020-05-06 14:29:10', '2020-06-08'),
(45, '1141104', 'Pengembangan Situs Web I', 'risa', 120, 'teori', 'kelas', 'tidak', 'GD 722', 40, 0, 0, 0, NULL, 0, '2020-06-11 08:27:35', NULL),
(46, '1141104', 'Pengembangan Situs Web I', 'risa', 120, 'teori', 'kelas', 'ya', 'GD 714', 40, 0, 0, 0, NULL, 0, '2020-06-11 08:38:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `pengguna_username_unique` (`username`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_dosen`
--
ALTER TABLE `request_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_dosen`
--
ALTER TABLE `request_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
