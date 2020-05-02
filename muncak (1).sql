-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2020 pada 05.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muncak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gunungs`
--

CREATE TABLE `gunungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wilayah_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pesanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gunungs`
--

INSERT INTO `gunungs` (`id`, `wilayah_id`, `nama`, `keterangan`, `harga`, `image`, `lokasi`, `jml_pesanan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gunung Sindoro', 'gunung terbesar di hatimu', 10000, 'img/Gunung-Sindoro.jpg', 'Temanggung', 1002, NULL, '2020-01-21 21:02:14'),
(2, 1, 'sadsa', 'wawdsa', 213, 'upload/5e12ea82da2fc.jpeg', '123', 0, '2020-01-06 01:06:26', '2020-01-06 01:06:26'),
(3, 2, 'adsad', 'asdadc', 12343, 'upload/5e12eaa857c93.jpeg', 'asda', 0, '2020-01-06 01:07:04', '2020-01-06 01:07:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_02_050216_create_wilayahs_table', 1),
(5, '2020_01_02_060052_create_gunungs_table', 1),
(6, '2020_01_02_060154_create_perlengkapans_table', 1),
(7, '2020_01_02_060444_create_pesanans_table', 1),
(8, '2020_01_02_144637_create_ulasans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(11) NOT NULL,
  `nik` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nik`, `nama`, `alamat`) VALUES
(1, 123, 'yude', 'mangunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapans`
--

CREATE TABLE `perlengkapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wilayah_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perlengkapans`
--

INSERT INTO `perlengkapans` (`id`, `wilayah_id`, `nama`, `lokasi`, `keterangan`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tas Bagus Gunung Sindoro', 'Mangunan', 'adswqwdqs', 'img/tas.png', NULL, NULL),
(2, 2, 'Tenda Bagus', 'Jakarta', 'sadaddfs', 'img/tenda.jpg', NULL, NULL),
(3, 1, 'Tas Baru', 'mangunan', 'asdoijwqdo', 'upload/5e14029bd98d1.jpeg', '2020-01-06 21:01:31', '2020-01-06 21:01:31'),
(4, 1, 'yuasd', 'qwdqda', 'asda', 'upload/5e1403e23ba6c.jpeg', '2020-01-06 21:06:58', '2020-01-06 21:06:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(255) NOT NULL,
  `jml_peserta` int(11) NOT NULL,
  `gunung_id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` double NOT NULL,
  `kontak` int(255) NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `nik`, `jml_peserta`, `gunung_id`, `total_harga`, `kontak`, `pembayaran`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 123, 5, 1, 50000, 2131241334, '8218281932', '2020-01-10', '2020-01-04 05:14:49', '2020-01-04 05:14:49'),
(2, 123, 10, 1, 100000, 10100, '8218281932', '2020-01-23', '2020-01-21 21:02:14', '2020-01-21 21:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `ulasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ulasans`
--

INSERT INTO `ulasans` (`id`, `name`, `image`, `rating`, `ulasan`, `created_at`, `updated_at`) VALUES
(3, '0', 'upload/5e0f537ee912b.jpg', 3, 'Tulis ulasanasd', '2020-01-03 07:45:18', '2020-01-03 07:45:18'),
(12, 'Kurbano', 'upload/5e11ca4802371.jpg', 2, 'asdwqs', '2020-01-05 04:36:40', '2020-01-05 04:36:40'),
(13, 'asd', 'upload/5e11ca6998e22.jpg', 4, 'Tulis ulasan', '2020-01-05 04:37:13', '2020-01-05 04:37:13'),
(14, '123', 'upload/5e12af5333ff4.jpg', 2, 'Tulis ulasan', '2020-01-05 20:53:55', '2020-01-05 20:53:55'),
(15, 'eq', 'upload/5e12af635e434.jpg', 1, 'Tulis ulasan', '2020-01-05 20:54:11', '2020-01-05 20:54:11'),
(16, '12413', 'upload/5e12af75444c9.jpg', 1, 'Tulis ulasan', '2020-01-05 20:54:29', '2020-01-05 20:54:29'),
(17, 'gfjvhhjk', 'upload/5e13ff7a836c7.jpg', 5, 'Tulis ulasandfghjkl', '2020-01-06 20:48:10', '2020-01-06 20:48:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$gnTKscudzKTUBICBJ7md1.lqRHWZe8Fcws.F2HT1OiQ7xCcMwbNvm', NULL, '2020-01-05 21:00:29', '2020-01-05 21:00:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayahs`
--

CREATE TABLE `wilayahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wilayahs`
--

INSERT INTO `wilayahs` (`id`, `nama`, `warna`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Tengah', 'bg_purple', NULL, NULL),
(2, 'Jawa Timur', 'bg_yellow', NULL, NULL),
(3, 'wdadds', 'bg_green', '2020-01-06 21:44:43', '2020-01-06 21:44:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gunungs`
--
ALTER TABLE `gunungs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gunungs_wilayah_id_foreign` (`wilayah_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perlengkapans`
--
ALTER TABLE `perlengkapans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perlengkapans_wilayah_id_foreign` (`wilayah_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanans_gunung_id_foreign` (`gunung_id`);

--
-- Indeks untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wilayahs`
--
ALTER TABLE `wilayahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gunungs`
--
ALTER TABLE `gunungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perlengkapans`
--
ALTER TABLE `perlengkapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wilayahs`
--
ALTER TABLE `wilayahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gunungs`
--
ALTER TABLE `gunungs`
  ADD CONSTRAINT `gunungs_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayahs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perlengkapans`
--
ALTER TABLE `perlengkapans`
  ADD CONSTRAINT `perlengkapans_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayahs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_gunung_id_foreign` FOREIGN KEY (`gunung_id`) REFERENCES `gunungs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
