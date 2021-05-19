-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 06:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupr`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasis`
--

CREATE TABLE `aplikasis` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aplikasis`
--

INSERT INTO `aplikasis` (`id`, `nama`, `photo`, `link`, `status`) VALUES
(1, 'E-LHKPN', 'http://localhost:8000/storage/photos/1/Aplikasi/20201015035355icons-elhkpn.svg', 'https://elhkpn.kpk.go.id/portal/user/login', 'aktif'),
(2, 'Sarana Prasarana', 'http://localhost:8000/storage/photos/1/Aplikasi/20201015040445icons-saran.svg', '#', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `kategori` enum('pengumuman','mahasiswa') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `kategori`, `status`) VALUES
(2, 'http://localhost:8000/storage/photos/1/Banner/photo6316850909421873924.jpg', 'pengumuman', 'aktif'),
(3, 'http://localhost:8000/storage/photos/1/Banner/mahasiswa.PNG', 'mahasiswa', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `photo`, `date`, `kategori`, `deskripsi`, `status`, `slug`, `tag`) VALUES
(2, 'Menteri PUPR Basuki Hadimuljono meresmikan Jalan Tol Ujung Padang Seksi 3', 'http://localhost:8000/storage/photos/1/Berita/162236697_276100584038783_8123218414033098957_n.jpg', '04/07/2021', '1', '<p><br><span style=\"color: rgb(0, 0, 0); font-family: roboto; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(247, 244, 244); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\">Menteri PUPR Basuki Hadimuljono meresmikan Jalan Tol Ujung Padang Seksi 3 atau dikenal dengan Jalan Tol Layang Andi Pangeran (AP) Pettarani di Makasar, Sulawesi Selatan, Kamis (18/3) Siang.Peresmian ini sekaligus menandai beroperasinya jalan tol sepanjang 4,3 km yang menghubungkan kota Makassar dengan Pelabuhan petikemas Soekarno Hatta Makassar dan Bandara Sultan Hassanudin tersebut.Tol Layang Jalan A.P. Pettarani</span></p>', 'aktif', '/berita/menteri-pupr-basuki-hadimuljono-meresmikan-jalan-tol-ujung-padang-seksi-3', '2020'),
(3, 'Judul Baru', 'http://localhost:8000/storage/photos/1/Logo_PU_(RGB).png', '05 May 2021', '1', '<p>fesfsd</p>', 'aktif', '/berita/judul-baru', '2020,Indonesia,Ramadhan'),
(4, 'tag', 'http://localhost:8000/storage/photos/1/Logo_PU_(RGB).png', '05 May 2021', '1', '<p>sdasas</p>', 'aktif', '/berita/tag', '2020,Ramadhan');

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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `photo`, `caption`, `status`) VALUES
(1, 'http://localhost:8000/storage/photos/1/Galeri/1 (1).jpg', 'Caption 1', 'aktif'),
(2, 'http://localhost:8000/storage/photos/1/Galeri/1.PNG', 'Cap', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `status`) VALUES
(2, 'Berita Pimpinan', 'aktif'),
(3, 'SDA', 'aktif'),
(4, 'Permukiman', 'aktif'),
(5, 'Artikel', 'aktif');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parents` int(255) NOT NULL,
  `urutan` int(255) NOT NULL,
  `belakang` int(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `deskripsi` longtext NOT NULL,
  `priv` int(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `nama`, `slug`, `parents`, `urutan`, `belakang`, `link`, `deskripsi`, `priv`, `status`) VALUES
(1, 'Struktur Organisasi', 'struktur-organisasi', 0, 0, 0, '/page/struktur-organisasi', '<p><img src=\"http://localhost:8000/storage/photos/1/Berita/162236697_276100584038783_8123218414033098957_n.jpg\" style=\"width: 525px;\" class=\"fr-fic fr-dib\"></p><p><br></p><p><br></p>', 1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `posisi`, `photo`, `nama`, `quote`, `status`) VALUES
(1, 'pimpinan', 'http://localhost:8000/storage/photos/1/Quote/C6PTsLfVMAMPMpG.png', 'Ir. H. Ruhban Ruzziyatno', 'If you have knowledge let others ligth their candles at it', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `status`) VALUES
(1, 'Adminn', 'aktif'),
(2, 'Content Creator', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(255) NOT NULL,
  `institusi` longtext NOT NULL,
  `depan` varchar(255) NOT NULL,
  `belakang` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logonavbar` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `maps` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `institusi`, `depan`, `belakang`, `copyright`, `icon`, `logonavbar`, `logo`, `telepon`, `fax`, `alamat`, `email`, `maps`) VALUES
(1, '<p><strong>PUSAT PENGEMBANGAN KOMPETENSI SUMBER DAYA AIR DAN PERMUKIMAN</strong></p><p><strong>BADAN PENGEMBANGAN SUMBER DAYA MANUSIA</strong></p><p><span style=\"font-size: 12px;\">KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</span></p>', 'BPSDM PUPR', 'Dashboard PUPR', 'Hak Cipta @2021 PUSAT PENGEMBANGAN KOMPETENSI SUMBER DAYA AIR DAN PERMUKIMAN All Right Reserved', 'http://localhost:8000/storage/photos/1/Logo_PU_(RGB).png', 'http://localhost:8000/storage/photos/1/logo.png', 'http://localhost:8000/storage/photos/1/Logo_PU_(RGB).png', '(022) 7206892', '(022) 63722273', 'Jl. Abdul Hamid,Cicaheum, Bandung 40195', 'mailto:pusat2_bpsdm@pu.go.id', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9262199549858!2d107.66072241537519!3d-6.899427469437733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e95d456bf3%3A0xe4f2f048601db82d!2sBPSDM%20Kementerian%20PUPR%20Bandung!5e0!3m2!1sen!2sid!4v1619069484763!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `sosmeds`
--

CREATE TABLE `sosmeds` (
  `id` int(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmeds`
--

INSERT INTO `sosmeds` (`id`, `icon`, `nama`, `link`, `status`) VALUES
(1, 'http://localhost:8000/storage/photos/1/Sosmed/instagram (1).svg', 'Intagramm', 'https://www.instagram.com/bpsdm_pupr/', 'aktif'),
(2, 'http://localhost:8000/storage/photos/1/Sosmed/twitter (1).svg', 'Twitter', '#', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `nama`, `status`) VALUES
(1, '2020', 'aktif'),
(5, 'Indonesia', 'aktif'),
(6, 'Ramadhan', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$CfqI2Uu2vv/IIzbgE9/Bj.go0VwrIUyzAPOzn.KJwK9kCJ2o.wV3y', 'admin', NULL, '2021-04-25 23:10:29', '2021-04-25 23:10:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmeds`
--
ALTER TABLE `sosmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `aplikasis`
--
ALTER TABLE `aplikasis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmeds`
--
ALTER TABLE `sosmeds`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
