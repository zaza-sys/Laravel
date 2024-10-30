-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Mar 2024 pada 22.47
-- Versi server: 10.3.39-MariaDB-cll-lve
-- Versi PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apit2515_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_keluars`
--

CREATE TABLE `buku_keluars` (
  `kode_buku` char(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `jumlah_keluar` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku_keluars`
--

INSERT INTO `buku_keluars` (`kode_buku`, `tanggal`, `nama_buku`, `jumlah_keluar`, `satuan`, `created_at`, `updated_at`) VALUES
('B001', '2024-03-18', 'Bintang ', '5', 'Pcs', '2024-03-18 01:45:59', '2024-03-18 01:45:59'),
('B035', '2024-03-18', 'The 48 Law of Power', '8', 'Pcs', '2024-03-18 01:46:30', '2024-03-18 01:46:30'),
('B036', '2024-03-16', 'Negeri 5 Menara', '6', 'Pcs', '2024-03-18 01:46:48', '2024-03-18 01:46:48'),
('B037', '2024-03-16', 'Hujan', '10', 'Pcs', '2024-03-18 01:47:03', '2024-03-18 01:47:03'),
('B038', '2024-03-18', 'Komet', '7', 'Pcs', '2024-03-18 01:47:19', '2024-03-18 01:47:19'),
('B039', '2024-03-18', 'Bulan', '5', 'Pcs', '2024-03-18 01:57:08', '2024-03-18 01:57:08'),
('B040', '2024-03-17', 'Dialektika Langit dan Bumi', '6', 'Pcs', '2024-03-18 01:57:23', '2024-03-18 01:57:23'),
('B041', '2024-03-18', 'Ceros dan Batozar', '6', 'Pcs', '2024-03-18 01:57:36', '2024-03-18 01:57:36'),
('B042', '2024-03-18', 'Matahari', '7', 'Pcs', '2024-03-18 01:57:45', '2024-03-18 01:57:45'),
('B043', '2024-03-18', 'Bumi', '6', 'Pcs', '2024-03-18 01:57:56', '2024-03-18 01:57:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_masuks`
--

CREATE TABLE `buku_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` char(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `harga_grosir` varchar(50) NOT NULL,
  `jumlah_masuk` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku_masuks`
--

INSERT INTO `buku_masuks` (`id`, `kode_buku`, `tanggal`, `nama_buku`, `harga`, `harga_satuan`, `harga_grosir`, `jumlah_masuk`, `satuan`, `created_at`, `updated_at`) VALUES
(34, 'B001', '2024-03-18', 'Bintang', '88.000', '75.000', '68.000', '50', 'Pcs', '2024-03-18 01:39:35', '2024-03-18 01:39:35'),
(35, 'B035', '2024-03-18', 'The 48 Law of Power', '139.500', '116.500', '111.500', '60', 'Pcs', '2024-03-18 01:40:23', '2024-03-18 01:40:23'),
(36, 'B036', '2024-03-04', 'Negeri 5 Menara', '98.000', '83.000', '76.000', '30', 'Pcs', '2024-03-18 01:41:24', '2024-03-18 01:41:24'),
(37, 'B037', '2024-01-18', 'Hujan', '68.000', '57.500', '52.500', '45', 'Pcs', '2024-03-18 01:41:56', '2024-03-18 01:41:56'),
(38, 'B038', '2024-03-05', 'Komet', '95.000', '81.000', '74.000', '68', 'Pcs', '2024-03-18 01:42:41', '2024-03-18 01:42:41'),
(39, 'B039', '2024-03-01', 'Bulan', '88.000', '75.000', '68.000', '25', 'Pcs', '2024-03-18 01:43:11', '2024-03-18 01:43:11'),
(40, 'B040', '2024-03-12', 'Dialektika Langit dan Bumi', '95.000', '81.000', '73.500', '35', 'Pcs', '2024-03-18 01:43:40', '2024-03-18 01:43:40'),
(41, 'B041', '2024-03-08', 'Ceros dan Batozar', '95.000', '81.000', '74.000', '80', 'Pcs', '2024-03-18 01:44:12', '2024-03-18 01:44:12'),
(42, 'B042', '2024-03-10', 'Matahari', '88.000', '75.000', '68.000', '78', 'Pcs', '2024-03-18 01:44:41', '2024-03-18 01:44:41'),
(43, 'B043', '2024-03-12', 'Bumi', '93.000', '79.000', '72.000', '66', 'Pcs', '2024-03-18 01:45:05', '2024-03-18 01:45:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bukus`
--

CREATE TABLE `data_bukus` (
  `kode_buku` char(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `harga_grosir` varchar(50) NOT NULL,
  `jumlah_masuk` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_bukus`
--

INSERT INTO `data_bukus` (`kode_buku`, `tanggal`, `nama_buku`, `harga`, `harga_satuan`, `harga_grosir`, `jumlah_masuk`, `satuan`, `created_at`, `updated_at`) VALUES
('B001', '2024-03-18', 'Bintang', '88.000', '75.000', '68.000', '50', 'Pcs', '2024-03-18 01:39:35', '2024-03-18 01:39:35'),
('B035', '2024-03-18', 'The 48 Law of Power', '139.500', '116.500', '111.500', '60', 'Pcs', '2024-03-18 01:40:23', '2024-03-18 01:40:23'),
('B036', '2024-03-04', 'Negeri 5 Menara', '98.000', '83.000', '76.000', '30', 'Pcs', '2024-03-18 01:41:24', '2024-03-18 01:41:24'),
('B037', '2024-01-18', 'Hujan', '68.000', '57.500', '52.500', '45', 'Pcs', '2024-03-18 01:41:56', '2024-03-18 01:41:56'),
('B038', '2024-03-05', 'Komet', '95.000', '81.000', '74.000', '68', 'Pcs', '2024-03-18 01:42:41', '2024-03-18 01:42:41'),
('B039', '2024-03-01', 'Bulan', '88.000', '75.000', '68.000', '25', 'Pcs', '2024-03-18 01:43:11', '2024-03-18 01:43:11'),
('B040', '2024-03-12', 'Dialektika Langit dan Bumi', '95.000', '81.000', '73.500', '35', 'Pcs', '2024-03-18 01:43:40', '2024-03-18 01:43:40'),
('B041', '2024-03-08', 'Ceros dan Batozar', '95.000', '81.000', '74.000', '80', 'Pcs', '2024-03-18 01:44:12', '2024-03-18 01:44:12'),
('B042', '2024-03-10', 'Matahari', '88.000', '75.000', '68.000', '78', 'Pcs', '2024-03-18 01:44:41', '2024-03-18 01:44:41'),
('B043', '2024-03-12', 'Bumi', '93.000', '79.000', '72.000', '66', 'Pcs', '2024-03-18 01:45:05', '2024-03-18 01:45:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `username`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'Admin', 'admin', 'adminamaliabuku@gmail.com', NULL, '$2y$10$N/7f8Ikn1w5MTVDGPBXUi.g2tkduZoyg4grPZI8wejxz1XuXZhw/u', 'Aktif', 'pLTAb9ihDtqxkYqvUGIXRsdQIqxVLc1iZhVn3yUNbLrpNr38D8mmiH9np72z', '2024-02-02 23:45:18', '2024-02-02 23:45:18'),
(5, 'Staff', 'Staff', 'staff', 'staffamaliabuku@gmail.com', NULL, '$2y$10$.xKlDuH7avyR0/kkitmmZuAmnRnipBlAdpfsj1fKyZOStlj2sqK8K', 'Aktif', NULL, '2024-02-02 23:46:58', '2024-02-02 23:46:58'),
(6, 'Manajer', 'Manajer', 'manajer', 'manajeramaliabuku@gmail.com', NULL, '$2y$10$YKF8SpdJtoqI87ATHvk4I.JKQ6cRoLC4gTJ8JewSA2zq0ZtFmnfC6', 'Aktif', NULL, '2024-02-02 23:47:29', '2024-02-02 23:47:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_keluars`
--
ALTER TABLE `buku_keluars`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `buku_masuks`
--
ALTER TABLE `buku_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_bukus`
--
ALTER TABLE `data_bukus`
  ADD PRIMARY KEY (`kode_buku`);

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
-- AUTO_INCREMENT untuk tabel `buku_masuks`
--
ALTER TABLE `buku_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
