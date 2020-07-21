-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 02:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` datetime NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `waktu`, `judul`, `isi`, `cover`, `kategori_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '2020-04-16 04:58:25', 'Bagaimana menjaga mental saat wabah covid-19 menyerang?', '<p>Covid-19 atau yang dikenal sebagai virus corona telah menyeranghampir seluruh dunia, termasuk Indonesia. Semenjak tgl 21 Januari 2020 sampai hari ini, 16 April 2020,melalui website nasional corona(.)jakarta(.)go(.)id telah tercatat sekitar 5.136 kasus positif untuk wilayah nasional. Penambahan kasus setiap harinya dan beberapa berita mengenai covid mulai mempengaruhi mental seseorang.</p><p>Bagaimana cara agar tetap menjaga mental saat wabah seperti ini?</p><p>1. Hindari berita negatif</p><p>2. Pilihlah media sosial secara bijak</p><p>3. Cek kebenaran berita</p><p>4. Selalu berdoa</p><p>5. Menyibukan diri dengan aktifitas.</p><p>&nbsp;</p><p>Dengan melakukan poin-poin diatas, kita dapat tetap menjaga kesehatan mental kita.</p><p>&nbsp;</p><p><strong>Reference:</strong></p><p><strong><em>-corona.jakarta.go.id</em></strong></p><p><strong><em>-</em></strong><strong><em>Cara Menjaga Kesehatan Mental Tengah Pandemi Corona COVID-19 (liputan6.com)</em></strong></p><p><strong>Image Credit:</strong></p><p><strong><em>newscientics.com</em></strong></p>', 'aeiQB9klQo4qCL9WvdNITXJ1CgZAoFYjWmga7ygz.jpeg', 8, 5, '2020-04-15 21:58:25', '2020-04-15 21:58:25'),
(11, '2020-06-06 00:43:52', 'Dampak rasisme dan diskriminasi', '<p>Sudah satu minggu setelah berbagai macam pemberitaan mengenai kerusuhan yang terjadi di minneapolis yang merupakan protes atas kasus kematian george floyd yang dianggap sebagai salah satu kelanjutan mengenai rasisme dan diskriminasi.</p><p>&nbsp;</p><p>Pada tahun 2019, jumlah penduduk di dunia sudah mencapai sekitar 7,7 miliar dan bahkan mungkin terus bertambah sampai tahun 2020 ini dengan berbagai ribuan etnis, ras dan orientasi seksual yang beragam. Sayangnya, dari jumlah sekian banyak penduduk di dunia masalah rasisme dan diskriminasi selalu ada di setiap negara terutama di negara multikultural.</p><p>&nbsp;</p><p>Rasisme adalah kepercayaan bahwa kepribadian, perilaku dan moral dapat dilacak kembali ke ras, dan keyakinan bahwa satu ras lebih unggul dari yang lain. Terkadang keyakinan ini menjadi asumsi yang tertanam di pikiran mereka, kemudian menimbulkan tindakan secara terang-terangan secara tidak sadar. Tindakan ini bisa disebut diskriminasi ketika mereka mulai melakukan secara sengaja. (<a target=\"_blank\" href=\"https://celesteheadlee.com/racism-vs-discrimination-why-the-distinction-matters/\">Celeste Headlee</a>).</p><p>&nbsp;</p><p>David R. Williams seorang sosiolog kesehatan masyarakat dalam video <em>&quot;How Racism Make Us Sick?&quot; </em>melalui <a target=\"_blank\" href=\"https://www.ted.com/talks/david_r_williams_how_racism_makes_us_sick\">TEDMED 2016</a>, dia menemukan bahwa sebuah studi tentang remaja kulit hitam menemukan bahwa mereka yang melaporkan tingkat diskriminasi yang lebih tinggi ketika remaja memiliki kadar hormon stres yang lebih tinggi. Hal ini menujukan bahwa rasisme memberi dampak yang bahaya terhadap kesehatan mental.</p><p>&nbsp;</p><p><strong>Toleransi Untuk Menerima Semua Perbedaan</strong></p><p>&nbsp;</p><p>Perbedaan bukanlah suatu hal yang buruk yang menjadikan sesuatu sebagai kompetensi. Tiap-tiap jiwa yang hidup di dunia ini sudah ditakdirkan dengan kelebihan dan kekurangan masing-masing dan semuanya bukan tanpa suatu tujuan selain untuk belajar menghargai dan menerima perbedaan. Di negara Indonesia yang multikultural ini kita wajib untuk mulai menanam diri sikap toleransi, agar kita dapat membuat hubungan antara masyarakat semakin harmonis.</p><p>&nbsp;</p><p>Photo by <a target=\"_blank\" href=\"https://unsplash.com/photos/auEe5lKHZCw\">Omar Lopez</a> on Unsplash</p>', 'RTdvloFu5Ym5sWT3dWnP8pP4NgXx8agSK2lU2Yeq.jpeg', 8, 5, '2020-07-20 17:43:52', '2020-07-20 17:43:52'),
(12, '2020-06-07 00:44:22', 'Cara konsultasi melalui e-konseling', '<p>Masa pademi sampai saat ini belum berakhir, ternyata bikin banyak dampak buat kita semua. Selain bikin kerjaan menjadi <em>work from home, </em>kuliah dan sekolah serba online ternyata tidak selalu bikin hal menjadi efisien. Bahkan hal ini berdampak sama perasaan diri kita sendiri, udah stress belum nambah masalah lain-lain. Biasanya yang udah konsultasi tatap muka jadi terhambat karena PSBB, yang nggak pernah konsultasi juga bingung mau mulai nggak bisa dateng ke tempat konsultasi.</p><p>&nbsp;</p><p><em>Eitsss~ UPT-LBK sekarang bisa jadi tempat curhat online loh?</em></p><p><em>&quot;Tapi gimana caranya kak?&quot;</em></p><ol><li>Kamu tekan login di pojok kanan atas. Kalau kamu udah punya akun kamu bisa masuk dengan mengisikan NRM kamu dengan password yang sudah kamu daftarkan lalu kemudian <em>&quot;submit</em>&quot;. Kalau belum punya daftar dulu ya melalui tombol register.</li><li>Setelah masuk dengan NRM dan password kamu. Kamu <em>scroll down </em>tanda panah yang ada di samping nama kamu, kemudian pilih &quot;daftar konseling&quot;.</li><li>Kamu akan diahlikan ke halaman dimana seluruh daftar konseling. Seluruh konseling yang kamu buat dan bersifat <em>public </em>dan <em>private </em>akan tampil disini. Kemudian klik &quot;Buat Konseling Anda&quot;.</li><li>Akan muncul peringatan untuk mengisi kuesioner PHQ dan GAD. Jadi usahakan isi kuesioner dulu ya supaya para konselor bisa tau kamu lagi dalam kondisi apa. <em>&quot;Kalau udah isi?&quot; </em>kamu cukup klik &quot;OK&quot; peringatannya terus klik &quot;Buat Konseling Anda&quot; sekali lagi.</li><li>Setalah browser kamu diahlikan ke halaman form curhat, kamu udah bisa curhat sekarang. Isi Judul, pilih kategori curhat dan mulailah menulis curhat. Terakhir sebelum kamu klik &quot;Buat Konseling&quot;, jangan lupa tentukan apa curhat kamu mau <em>pubic </em>atau <em>private. </em>Kamu bisa atur di pilhan Konseling bersifat.</li><li>Selesa! Kalau kamu buat curhat <em>private, </em>curhat kamu cuma bisa kamu lihat sendiri melalui daftar konseling.</li><li>Tapi kalau curhat kamu bersifat <em>public, </em>maka curhat kamu akan tampil juga di daftar konseling publik pada halaman utama web dan bisa dilihat semua orang bahkan tanpa <em>login.</em></li></ol><p>&nbsp;</p><p>Gimana, gampang nggak temen-temen? gampang pastinya. Buat respon curhatnya relatif ya jadi nggak selalu langsung dijawab. <em>Yuk, keluarkan keluh kesahmu! </em>:)</p>', 'fZAWVCyMGaDoZo35QC83eU0xBWPDcMIQ0wOjoGLc.jpeg', 8, 5, '2020-07-20 17:44:22', '2020-07-20 17:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'Ekonomi', 'Hal-hal permasalahan yang berkaitan dengan ekonomi', '2020-04-15 21:23:11', '2020-04-15 21:23:11'),
(3, 'Keluarga', 'Hal-hal permasalahan yang berkaitan dengan keluarga', '2020-04-15 21:23:24', '2020-04-15 21:23:24'),
(4, 'Pertemanan', 'Hal-hal permasalahan yang berkaitan dengan pertemanan', '2020-04-15 21:23:41', '2020-04-15 21:23:41'),
(5, 'Pendidikan', 'Hal-hal permasalahan yang berkaitan dengan pendidikan', '2020-04-15 21:24:04', '2020-04-15 21:24:04'),
(6, 'Pekerjaan', 'Hal-hal permasalahan yang berkaitan dengan pekerjaan', '2020-04-15 21:24:24', '2020-04-15 21:24:24'),
(7, 'Percintaan', 'Hal-hal permasalahan yang berkaitan dengan cinta', '2020-04-15 21:24:38', '2020-04-15 21:24:38'),
(8, 'Kesehatan Mental', 'Hal-hal permasalahan yang berkaitan dengan ekonomi', '2020-04-15 21:24:50', '2020-04-15 21:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` datetime NOT NULL,
  `isi_komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `artikel_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `waktu`, `isi_komentar`, `mahasiswa_id`, `artikel_id`, `created_at`, `updated_at`) VALUES
(1, '2020-04-16 05:05:10', 'aku udah ikutin tapi tetep aja panik sendiri, gampang banget keknya mikir kemana-mana. :(', 4, 4, '2020-04-15 22:05:10', '2020-04-15 22:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `konseling`
--

CREATE TABLE `konseling` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_konseling` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_counter` int(100) NOT NULL DEFAULT 0,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konseling`
--

INSERT INTO `konseling` (`id`, `judul_konseling`, `isi`, `waktu`, `status`, `read_counter`, `kategori_id`, `mahasiswa_id`, `created_at`, `updated_at`) VALUES
(8, 'Salah Jurusan', 'Jujuraku gatau kemana harus cerita. Selama beberapa bulan ini aku ngerasa stres, bahkan ada pikiran untuk menyakiti diri sendiri. Aku jd ngerasa nggak berdaya, nggak berguna, nggak punya tujuan. Apapun yang aku lakukan usaha untuk kelarin kuliah ini tuh salah terus. Capek...', '2020-04-16 04:35:06', '0', 4, 5, 4, '2020-04-15 21:35:06', '2020-05-05 04:56:37'),
(12, 'Bagaimana mengatur ADHD', 'Halo kak, saya mau bertanya. Bagaimana sih kita menghadapi orang yg memiliki ADHD? Kebetulan adik saya memiliki ADHD, dulu pernah terapi tapi karena masalah ekonomi jd berhenti. Saya pengin tau bagaiman caranya mengatasinya ya? Terutama cara memberi tahu dia tentang hal-hal yg tidak boleh. Karena kebetulan dia masuk sekolah negeri, meskipun inklusi dia tetep ketemu temen-temen biasa lainnya. Ternyata sempat ketemu lingkungan yg nggak baik yg biki dia tau kata-kata yg tidak boleh disebut. Saya udah beberapa kali bilang dia nggak boleh. Meskipun sudah tidak mengucapkannya di luar rumah. Tapi dirumah dia jd sering ngucapin dan bandel. Itu gimana yaa?', '2020-07-21 00:47:30', '1', 0, 8, 3, '2020-07-20 17:47:30', '2020-07-20 17:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_anxiety` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum Tes',
  `jenis_depresi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum Tes',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrm`, `nama`, `fakultas`, `prodi`, `angkatan`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_telp`, `jenis_anxiety`, `jenis_depresi`, `password`, `created_at`, `updated_at`) VALUES
(3, '3145143624', 'Anggraeni Damayanti', 'FMIPA', 'Ilmu Komputer', 2014, 'p', '1996-09-22', 'Jl. Lembah Palem Blok J9 no.22 Rt. 05 Rw. 09, Pondok Kelapa, Duren Sawit, Jakarta Timur 13450', '085280855644', 'Kecemasan Berat', 'Depresi Sangat Berat', '$2y$10$3wk79kmR461pcZWb629zC.CTK3xdYLFY/77SetncJnv7OuljmOEt.', '2020-04-15 21:00:44', '2020-04-29 17:57:16'),
(4, '3145143625', 'Alfred Maliano', 'FIO', 'Ilmu Olahraga', 2015, 'l', '1997-07-04', 'Kebon pala no. 4', '081900000002', 'Kecemasan Sedang', 'Depresi Berat', '$2y$10$O01UFtfYDsFYthHVhhuBQuGLmUCp3UbwfkVxJNigume5hDCJfgOQe', '2020-04-15 21:30:54', '2020-04-15 21:32:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_02_24_130152_create_mahasiswa_table', 1),
(4, '2020_02_24_130418_create_kategori_table', 1),
(5, '2020_02_24_130455_create_konseling_table', 1),
(6, '2020_02_24_130858_create_respon_table', 1),
(7, '2020_02_24_131204_create_artikel_table', 1),
(8, '2020_02_24_131340_create_komentar_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` datetime NOT NULL,
  `isi_respon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_responden` enum('konselor','mahasiswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `konseling_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id`, `waktu`, `isi_respon`, `jenis_responden`, `responden_id`, `konseling_id`, `created_at`, `updated_at`) VALUES
(18, '2020-04-16 04:39:14', 'Hei Alfred :)\r\nTerima kasih telah berusaha dan berjuang sampai saat ini. Tolong jangan menyerah, kaka yakin masih ada orang yang percaya dan menghargai kamu. Kamu berguna, dalam diri kamu pasti ada sesuatu yang kamu bisa. Hanya saja kamu perlu menemukan dan mengasahnya. Ayo, mari mencintai diri sendiri :)', 'konselor', 5, 8, '2020-04-15 21:40:51', '2020-04-15 21:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','konselor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_telp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '$2y$12$TVGe.jdbv4aptCImwP43tOZw9OjuLexPmmG9Ayn3t5mKaagAGCX8m', 'admin', 'l', '2020-02-01', 'Default address', '0210000000', '1', '2020-02-28 17:00:00', '2020-02-28 17:00:00'),
(5, 'Mariana, Ph.D., Psikolog', 'Mariana', '$2y$10$WBou8rtj6zYlBqRclYiymOvyUFCLPVCn3hKQlrifRfvSZ0pKDa6lW', 'konselor', 'p', '1988-05-19', 'Pondok Labu', '081500000000', '1', '2020-04-15 21:15:31', '2020-04-15 21:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_kategori_id_foreign` (`kategori_id`),
  ADD KEY `artikel_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `komentar_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `konseling`
--
ALTER TABLE `konseling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konseling_kategori_id_foreign` (`kategori_id`),
  ADD KEY `konseling_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respon_konseling_id_foreign` (`konseling_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konseling`
--
ALTER TABLE `konseling`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `artikel_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `respon`
--
ALTER TABLE `respon`
  ADD CONSTRAINT `respon_konseling_id_foreign` FOREIGN KEY (`konseling_id`) REFERENCES `konseling` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
