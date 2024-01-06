-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 15.46
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
-- Database: `funlearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tipe` enum('gratis','berbayar') NOT NULL,
  `kategori` enum('konvensional','apps','bundle') NOT NULL,
  `deskripsi` text NOT NULL,
  `apk` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `apps`
--

INSERT INTO `apps` (`id`, `gambar`, `nama`, `stok`, `harga`, `tipe`, `kategori`, `deskripsi`, `apk`, `created_at`, `updated_at`) VALUES
(1, 'gaada', 'Apps 1', 9, 14000, 'berbayar', 'apps', 'dsfsdfsdfsdf', '', '2023-12-06 12:38:31', '2023-12-21 08:47:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Penantian Karir Justin Hubner Di Indonesia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nesciunt rem ratione vitae, harum eos voluptatum culpa quia architecto fugit cupiditate eum. Sint necessitatibus voluptatibus dolor nisi reprehenderit ratione magni hic maxime numquam labore enim aperiam modi quod consequatur laborum obcaecati exercitationem, nam voluptas molestias repudiandae dolorem sapiente tenetur molestiae dignissimos! Quae maxime quam cumque consequuntur, dolore cum corporis quos doloribus id repellat doloremque voluptatibus commodi laudantium vitae at illo veniam, officia facere dolor minus consequatur, iusto expedita? Expedita porro esse consectetur autem ipsa inventore, doloribus ex sit assumenda temporibus consequatur delectus cupiditate culpa nostrum illo nulla tempore saepe, error exercitationem sunt ab. Beatae, nostrum. Inventore, dolor natus eveniet aspernatur corrupti aut obcaecati, architecto dicta numquam fugiat necessitatibus consequuntur nobis recusandae quisquam, corporis ut reprehenderit?', 'blog/B2OzIa4ZwvHpJJ1tUqxwg258GZIGIIeffk9caVEs.png', '2023-12-06 12:53:52', '2023-12-06 12:53:52'),
(3, 'Hutan Hujan Tropis Yang Menyebabkan Lebat Karena Iklim', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eos quidem totam magnam recusandae facere nihil! Minus pariatur vitae distinctio nesciunt optio nostrum a, reiciendis aperiam, nobis ipsa quidem, fugiat voluptate fuga incidunt repudiandae dicta. Ea, corporis animi velit exercitationem recusandae similique facilis impedit quis autem, saepe quo minima? Odit optio minus quam culpa quia, harum repellendus quidem suscipit nesciunt praesentium quibusdam molestias ab? Vitae, delectus ipsum. Atque vitae alias delectus, magnam ratione commodi reprehenderit nihil vel recusandae ipsa deleniti possimus sint fuga nesciunt placeat dicta nam, cum aliquam expedita pariatur distinctio officia quas voluptatem! Impedit, nesciunt. Error vel omnis distinctio nam numquam id tempora quasi soluta ab, sapiente laudantium nulla earum est unde minus similique inventore dolor asperiores possimus ad. Voluptas ipsa cumque atque doloribus vitae! Vitae est delectus illum minima, modi error iste dolorum dicta beatae, nihil porro aperiam sequi ipsum amet earum dolorem suscipit voluptas neque consequuntur accusantium. In deleniti tempora corporis, explicabo, perspiciatis voluptates aspernatur quo vel asperiores placeat, quaerat doloremque accusantium cum a. Amet ipsam inventore aperiam pariatur blanditiis.', 'blog/7ks5UDZv8SQQVwKtny19gFpQFe1D4aN1RmQNlQUo.png', '2023-12-06 13:00:26', '2023-12-06 13:00:26'),
(4, 'COBCBABCBACBAC', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eos quidem totam magnam recusandae facere nihil! Minus pariatur vitae distinctio nesciunt optio nostrum a, reiciendis aperiam, nobis ipsa quidem, fugiat voluptate fuga incidunt repudiandae dicta. Ea, corporis animi velit exercitationem recusandae similique facilis impedit quis autem, saepe quo minima? Odit optio minus quam culpa quia, harum repellendus quidem suscipit nesciunt praesentium quibusdam molestias ab? Vitae, delectus ipsum. Atque vitae alias delectus, magnam ratione commodi reprehenderit nihil vel recusandae ipsa deleniti possimus sint fuga nesciunt placeat dicta nam, cum aliquam expedita pariatur distinctio officia quas voluptatem! Impedit, nesciunt. Error vel omnis distinctio nam numquam id tempora quasi soluta ab, sapiente laudantium nulla earum est unde minus similique inventore dolor asperiores possimus ad. Voluptas ipsa cumque atque doloribus vitae! Vitae est delectus illum minima, modi error iste dolorum dicta beatae, nihil porro aperiam sequi ipsum amet earum dolorem suscipit voluptas neque consequuntur accusantium. In deleniti tempora corporis, explicabo, perspiciatis voluptates aspernatur quo vel asperiores placeat, quaerat doloremque accusantium cum a. Amet ipsam inventore aperiam pariatur blanditiis.', 'blog/p1aRc5fxUHHf4iAfXU2OCvMft7bm9cpO1EkMeP5p.png', '2023-12-06 13:00:52', '2023-12-06 13:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_keranjangs`
--

CREATE TABLE `detail_keranjangs` (
  `keranjang_id` bigint(20) UNSIGNED NOT NULL,
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`transaksi_id`, `app_id`, `jumlah`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 14000, '2023-12-21 08:47:38', '2023-12-21 08:47:38');

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
-- Struktur dari tabel `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `nama`, `produksi`, `tahun`, `file`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Anatomia', 'Fun Learning Digital', '2019', 'file/anatomi.mp4', 'logo/fld.jpeg', '2023-11-30 12:36:12', '2023-11-30 12:36:12'),
(2, 'Solar System', 'Fun Learning Digital', '2019', 'file/planet.mp4', 'logo/fldcopy.jpeg', '2023-11-30 12:36:37', '2023-11-30 12:36:37'),
(3, 'Animal Cycle Life', 'Fun Learning Digital', '2019', 'file/animal.mp4', 'logo/fldcopy2.jpeg', '2023-11-30 12:37:06', '2023-11-30 12:37:06'),
(4, 'Fun Food', 'Fun Learning Digital', '2019', 'file/pizza.mp4', 'logo/fldcopy3.jpeg', '2023-11-30 12:37:31', '2023-11-30 12:37:31'),
(5, 'Expression', 'Fun Learning Digital', '2019', 'file/expression.mp4', 'logo/fldcopy4.jpeg', '2023-11-30 12:37:51', '2023-11-30 12:37:51'),
(6, 'Flashcard AR', 'Fun Learning Digital', '2019', 'file/flashcard.mp4', 'logo/fldcopy5.jpeg', '2023-11-30 12:38:09', '2023-11-30 12:38:09'),
(7, 'Roti Lapis', 'CV Penulis Cerdas Indonesia', '2019', 'file/edusport.mp4', 'logo/logopci.png', '2023-11-30 12:39:22', '2023-11-30 12:39:22'),
(8, 'Eduscience', 'Muse Akademi', '2019', 'file/eduscience.mp4', 'logo/logo_musi.png', '2023-11-30 12:39:40', '2023-11-30 12:39:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_keranjang` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` double NOT NULL DEFAULT 0,
  `status` enum('Paid','Unpaid') NOT NULL DEFAULT 'Unpaid',
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_06_055303_initial_design', 1),
(6, '2023_09_06_143557_add_field_users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_apps`
--

CREATE TABLE `pembelian_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian_apps`
--

INSERT INTO `pembelian_apps` (`id`, `user_id`, `app_id`, `tanggal_pembelian`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2023-12-21 15:47:38', '2023-12-21 08:47:38', '2023-12-21 08:47:38');

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
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_keranjang` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` double NOT NULL DEFAULT 0,
  `status` enum('Paid','Unpaid') NOT NULL DEFAULT 'Unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `no_keranjang`, `user_id`, `total_harga`, `status`, `created_at`, `updated_at`) VALUES
(1, '1810933223', 2, 14000, 'Paid', '2023-12-21 08:47:38', '2023-12-21 08:47:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-12-06 12:38:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QiEBqGUHpHXuTRrOHE1V0oTIPZSsertwbQHt3wdqbAnO0VKvYXdfsmJe56Db', '2023-12-06 12:38:31', '2023-12-06 12:38:31', 'admin'),
(2, 'Mohammad Ilham Arkan', 'ilhamarkan2004@gmail.com', '2023-12-06 12:38:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0HAeZnzsNzUW9nO9AZqPo26uWQhCV3A7l07cnwNt1QR2SjRMEOKFZL5T77gS', '2023-12-06 12:38:31', '2023-12-06 12:38:31', 'customer'),
(3, 'Akun UB', 'ilhamarkan2004@student.ub.ac.id', '2023-12-06 12:38:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mOAuYOpfcO', '2023-12-06 12:38:31', '2023-12-06 12:38:31', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_keranjangs`
--
ALTER TABLE `detail_keranjangs`
  ADD PRIMARY KEY (`keranjang_id`,`app_id`),
  ADD KEY `detail_keranjangs_app_id_foreign` (`app_id`);

--
-- Indeks untuk tabel `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`transaksi_id`,`app_id`),
  ADD KEY `detail_transaksis_app_id_foreign` (`app_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembelian_apps`
--
ALTER TABLE `pembelian_apps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_apps_user_id_foreign` (`user_id`),
  ADD KEY `pembelian_apps_app_id_foreign` (`app_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksis_no_keranjang_unique` (`no_keranjang`),
  ADD KEY `transaksis_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasans_app_id_foreign` (`app_id`),
  ADD KEY `ulasans_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembelian_apps`
--
ALTER TABLE `pembelian_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_keranjangs`
--
ALTER TABLE `detail_keranjangs`
  ADD CONSTRAINT `detail_keranjangs_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_keranjangs_keranjang_id_foreign` FOREIGN KEY (`keranjang_id`) REFERENCES `keranjangs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD CONSTRAINT `detail_transaksis_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_transaksis_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_apps`
--
ALTER TABLE `pembelian_apps`
  ADD CONSTRAINT `pembelian_apps_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembelian_apps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD CONSTRAINT `ulasans_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
