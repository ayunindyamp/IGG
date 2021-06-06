-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 09:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblogs`
--

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
(1, '2021_02_25_110946_users', 1),
(2, '2021_02_25_112118_posts', 1),
(3, '2021_06_03_095004_create_pengumumans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengumumans`
--

CREATE TABLE `pengumumans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumumans`
--

INSERT INTO `pengumumans` (`id`, `user_id`, `judul`, `lampiran`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'dksmdkdhwduwgdjkan', 'uploads/dksmdkdhwduwgdjkan.pdf', '', '2021-06-03 11:52:05', '2021-06-03 11:52:05'),
(2, 1, 'Cristiano Ronaldo Score Brace VS Spezia', 'uploads/cristiano-ronaldo-score-brace-vs-spezia.pdf', '', '2021-06-03 11:57:56', '2021-06-03 11:57:56'),
(3, 1, 'aulia reta faulina', 'uploads/aulia-reta-faulina.pdf', '', '2021-06-03 13:45:01', '2021-06-03 13:45:01'),
(4, 1, 'Pengumuman Pemenang Tender Terbatas dengan Pascakualifikasi Jasa Muat Mekanis Menggunakan Cane Grabber Paket 7', 'uploads/pengumuman-pemenang-tender-terbatas-dengan-pascakualifikasi-jasa-muat-mekanis-menggunakan-cane-grabber-paket-7.pdf', '', '2021-06-05 06:41:35', '2021-06-05 06:41:35'),
(5, 1, 'Pengumuman Pemenang Tender Terbatas dengan Pascakualifikasi Jasa Muat Mekanis Menggunakan Cane Grabber Paket 8', 'uploads/pengumuman-pemenang-tender-terbatas-dengan-pascakualifikasi-jasa-muat-mekanis-menggunakan-cane-grabber-paket-8.pdf', '', '2021-06-05 06:44:11', '2021-06-05 06:44:11'),
(6, 1, 'Pengumuman Pemenang Tender Terbatas dengan Pascakualifikasi Jasa Muat Mekanis Menggunakan Cane Grabber Paket 9', 'uploads/pengumuman-pemenang-tender-terbatas-dengan-pascakualifikasi-jasa-muat-mekanis-menggunakan-cane-grabber-paket-9.pdf', '', '2021-06-05 06:44:29', '2021-06-05 06:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `subtitle`, `image`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(15, 1, 'Why Must Lava Blog Web Apps', 'Why must use laravel cms blog php artisan with lava web apps', 'uploads/why-must-lava-blog-web-apps.pdf', 'Why Must Lava Blog Web Apps\r\n\r\nYap.. because this a content management system CMS with simple and easy for learn, fast for create an article content, lite and of course powerfull with laravel the php artisan.\r\n\r\nDownload this source code now and get started with lava blog cms web apps', 'why-must-lava-blog-web-apps', 'draft', '2021-02-26 13:40:45', '2021-04-26 01:25:23'),
(16, 1, 'Lava CMS Blog web Apps', 'All in one with laravel backend integration with angular and react front end.', 'uploads/lava-cms-blog-web-apps.jpg', 'Lava CMS Blog web Apps\r\n\r\nAll in one with laravel backend integration with angular and react front end.\r\n\r\nYap.. soon... we develope again for you, with colaboration technology using laravel on backend then integration with angular and react, make your website super techno.. stay tuned with us.', 'lava-cms-blog-web-apps', 'draft', '2021-02-26 13:45:08', '2021-04-24 08:52:40'),
(18, 1, 'Gugus Tugas Covid -19 Banyuwangi Cek Penerapan Protokol Kesehatan PT IGG & PTPN XII Kendenglembu', 'BERITA IGG-GLENMORE', 'uploads/gugus-tugas-covid-19-banyuwangi-cek-penerapan-protokol-kesehatan-pt-igg-ptpn-xii-kendenglembu.jpg', 'BERITA9, BANYUWANGI – Monitoring dan evaluasi bidang industri untuk penerapan protokol kesehatan Covid-19. Tim gugus tugas penanganan Covid-19 Kabupaten Banyuwangi, tinjau salah satu perusahaan milik BUMN yakni PT. Industri Gula Glemore (IGG) dan perkebunan PTPN XII Kendenglembu, di Desa Karangharjo, Kecamatan Glenmore, Kabupaten Banyuwangi, (6/8/2020).\r\n\r\nPeninjauan gugus tugas dipimpin langsung oleh Asisten Adminitrasi Pemerintahan Pemkab Banyuwangi, Choirul Ustadi, bersama Kadinkes Banyuwangi, Dr Widji Lestariono, Kadis DLH, Khusnul, dan bersama tim memastikan protokol kesehatan Covid-19 di terapkan oleh kedua perusahaan tersebut. \r\n \r\n“Kami hanya ingin memastikan seluruh industri perusahaan menerapkan protokol kesehatan yang sudah ditentukan pemerintah,” ujar Ustadi.\r\n\r\n\r\nUstadi mengatakan, tinjaun ini sebagai upaya percepatan penangan Covid-19. Terutama di sektor industri yang rawan dalam penyebaran virus corona. \r\n\r\n“Kami tidak ingin adanya karyawan maupun pekerja industri yang terpapar Covid-19, agar tidak menambah daftar pasien positif di Kabupaten Banyuwangi,” katanya.\r\n\r\nDalam peninjauan di PT. IGG, jelas dia, memang masih ada beberapa protokol kesehatan yang belum diterapkan. Salah satunya, penerapan rapid test kepada sopir truk tebu yang keluar masuk Kabupaten Banyuwangi. \r\n\r\n“Memang masih ada beberapa, tapi dengan berjalannya waktu kami ingin pihak IGG bisa langsung memperbaikinya,” terangnya.\r\nSedangkan untuk perkebunan PTPN XII Kendenglembu belum produksi. Sehingga, hanya memantau protokol kesehatan yang ada di internal perkebunan saja. \r\n\r\n“Belum ada produksi, sehingga tidak terlalu banyak yang dipantau,” ungkapnya.\r\n\r\nUstadi menambahkan, kedua tempat industri tersebut sudah mengantongi izin penerapan protokol kesehatan. Sehingga, keduanya langsung diberi stiker new normal atau kebiasaan anyar. \r\n\r\n“Walaupun sudah kami beri stiker, tetap nantinya akan dilakukan peninjauan kembali. Jika tidak ada perbaikan, maka stiker tersebut akan kami cabut kembali,” tegasnya.\r\n\r\nSementara Direktur PT IGG, Arief Budiyanto mengatakan, pihaknya sudah menerapkan protokol kesehatan sejak awal pandemi Covid-19. Bahkan, sudah dipantau langsung oleh pimpinan pusat di Surabaya. \r\n\r\n“Sejak awal sudah menerapkan, bahkan kami perketat penerapannya kepada seluruhnya,” terangnya.\r\n\r\nArif menjelaskan, untuk penerapan rapid test kepada seluruh sopir truk memang belum. Tetapi, selama ini para sopir truk yang dari Kabupaten sebelum masuk pabrik diwajibkan steril. \r\n\r\n“Kendaraannya di steril, lalu sopir truk juga diwajibkan turun untuk disteril juga  di cek suhu. Selain itu, ruang masuk kendaraan dan keluarnya dibedakan,” pungkasnya. (red)\r\n\r\n\r\nReporter: Ahmad Sahroni.', 'gugus-tugas-covid-19-banyuwangi-cek-penerapan-protokol-kesehatan-pt-igg-ptpn-xii-kendenglembu', 'publish', '2021-04-23 08:38:12', '2021-06-05 06:50:14'),
(19, 1, 'PTPN XII Siapkan Musim Giling untuk PT IGG dengan Target 777.000 Ton Tebu', 'BERITA IGG-GLENMORE', 'uploads/ptpn-xii-siapkan-musim-giling-untuk-pt-igg-dengan-target-777000-ton-tebu.jpg', 'PT Perkebunan Nusantara (PTPN) XII mempersiapkan giling tebu untuk PT Industri Gula Glenmore (IGG) mulai pertengahan Juni 2020.\r\nPT IGG merupakan Pabrik Gula (PG), anak usaha dari PTPN XII yang berada di daerah Banyuwangi.\r\nDirektur Utama (Dirut) PTPN XII, M Cholidi mengatakan, musim giling tahun ini, merupakan tahun kelima dari PT IGG.\r\n\"Rencananya kami targetkan untuk giling tebu sebanyak 777.000 ton,\" kata Cholidi saat ditemui disela kegiatan penyerahan donasi kepada Kelurahan Krembangan Selatan Kecamatan Krembangan Kota Surabaya, Senin (11/5/2020).\r\n\r\nLebih lanjut, Cholidi mengatakan, dari jumlah tebu tersebut, ditargetkan akan menghasilkan gula sebanyak 65.000 ton. Dengan rendeman tebu mencapai 8 persen.\r\n\r\nJumlah itu lebih banyak atau meningkat dibanding tahun-tahun sebelumnya, karena sudah sesuai dengan kapasitas PG IGG.\r\n\r\n\"Kapasitas IGG mencapai 6.000 Ton Cane Day (TCD). Dan tahun ini kami realisasikan, sesuai kapasitas,\" jelas Cholidi.\r\n\r\nSementara itu, pada tahun sebelumnya, kapasitas PG IGG yang terpakai masih 4.000 TCD.\r\n\r\nUntuk mendukung target tebu yang digiling, PTPN XII menggunakan tebu yang sekitar 80 persen dari kebun sendiri.\r\n\r\nHanya sekitar 20 persen yang menggunakan tebu rakyat.\r\n\r\nMenurut Cholidi, PTPN XII memiliki luasan lahan tebu seluas 9.500 an hektar. Namun untuk IGG hanya menggunakan hasil dari lahan tebu sekitar 8.500 an yang ada di wilayah Jember dan Banyuwangi.\r\n\r\n\"Sementara sisanya yang ada di daerah Kediri dan sekitarnya, hasil tebunya untuk PTPN XI,\" jelas Cholidi.\r\n\r\nPT IGG atau PG Glenmore merupakan PG hasil kolaborasi antara PTPN XII (99,5 persen) dan PTPN XI (0,5 persen).\r\n\r\nDibangun di tahun 2015 dan mulai uji coba produksi di tahun 2016-2017.\r\n\r\n\r\n\r\nPenulis: Sri Handi Lestari\r\nEditor: Parmin', 'ptpn-xii-siapkan-musim-giling-untuk-pt-igg-dengan-target-777000-ton-tebu', 'publish', '2021-04-26 01:03:36', '2021-06-05 06:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','author') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'author',
  `status` enum('approved','notapproved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'notapproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$A5iSKvAqhRs0kAv/3YxfDu1B6SPBsZFtZo4UWAiZIQ.QQ.q7JRhaS', 'admin', 'approved', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
