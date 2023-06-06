-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'galeri1652688558.jpg', '<p>Kunjungan Museum Penghulu Muhammad Soleh, Kab. Muba', '2022-05-10 13:40:02', '2022-05-16 17:13:38'),
(5, 'galeri1652688487.jpg', '<p>Kegiatan Prakarya, Menghias Dan Membuat Parsel ', '2022-05-15 16:17:28', '2022-05-16 17:13:16'),
(9, 'galeri1652694050.jpg', 'Kunjungan Ke Perpustakaan Dan Arsip Musi Banyuasin', '2022-05-16 09:37:46', '2022-05-16 17:13:03'),
(10, 'galeri1652694279.jpg', '<p>Belajar Diluar Ruangan (Lapangan Bundaran Sekayu)', '2022-05-16 09:44:39', '2022-05-16 17:12:38'),
(11, 'galeri1652694541.jpg', '<p>Membuat Lukisan Bungan Dengan Menggunakan Benang', '2022-05-16 09:49:01', '2022-05-16 17:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(13, 'Struktur Kepegawaian TK IT TAHFIZH QURAN', '<p>Administrasi kepegawaian adalah segala bentuk kegiatan yang berkaitan dengan manajemen atau penggunaan pegawai untuk mencapai tujuan tertentu. Dalam hal ini, jika administrasi kepegawaian ada dalam suatu perusahaan maka tentunya untuk mencapai tujuan dari perusahaan tersebut.</p>\r\n<p>Tujuan utama dari administrasi kepegawaian adalah untuk menyeimbangkan jumlah pegawai dengan kebutuhan perusahaan juga untuk menyesuaikan beban kerja yang ada dengan jumlah pegawai. Hal ini dilakukan untuk memastikan porsi atau kapasitas pekerjaan setiap pegawai sesuai dengan kemampuan dan beban kerjanya.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Adapun Struktur Kepegawaian TK IT TAHFIZH QURAN adalah seperti yang ada di atas. Guna untuk mencapai tujuan TK IT TAHFIZH QURAN dalam mendidik generasi sholih, cerdas, mandiri, berwawasan, dan berakhlaqul islami.</p>', 'informasi1652789963.jpg', '2022-05-12 05:34:00', '2022-05-17 19:19:23', 2),
(14, 'Penerimaan Siswa Didik Baru 2022/2023', '<p>Saat ini TK IT TAHFIZH QURAN telah membuka pendaftaran peserta didik baru.&nbsp;</p>\r\n<p><strong>AYO DAFTARKAN PUTRA PUTRI ANDA SEKARANG JUGA !!!</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>ANAK SENANG&nbsp;</strong></p>\r\n<p><strong>GURU TENANG</strong></p>\r\n<p><strong>ORANG TUA BAHAGIA&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'informasi1652788713.jpeg', '2022-05-15 11:24:33', '2022-05-17 18:58:33', 2),
(15, 'Fasilitas Yang Ada Di TK IT TAHFIZH QURAN', '<p style=\"text-align: justify;\">TK IT TAHFIZH QURAN meruapakan salah satu taman kanak-kanak yang dapat dikatakan masih baru. TK ini di didirikan oleh ketua yayasan Insan Mulia Bapak Dear Fauzul Azim pada tanggal 21 Desember 2016 yang beralamatkan di Jalan Merdeka Lingkungan 1 Kayuara. TK IT TAHFIZH QURAN diketuai oleh Kepala Sekolah Ibu Fitri Ariyani, M.KM dan diwakili oleh Ibu&nbsp; Heni Rianti, S.Pdi.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Meskipun Sekolah ini dikatakan masih baru , TK IT TAHFIZH QURAN memiliki fasilitas yang dapat dikatakan cukup lengkap. Adapun Fasilitas yang ada di TK IT TAHFIZH QURAN adalah :</p>\r\n<p style=\"text-align: justify;\">1. Terdapat 2 (dua) buah Ruang Belajar.</p>\r\n<p style=\"text-align: justify;\">2. Terdapat 1 (satu) ruangan khusus Bermain&nbsp;<em>(Playground).</em></p>\r\n<p style=\"text-align: justify;\">3. Terdapat 1 (satu) ruangan Doa dan Pengajian anak.&nbsp;</p>\r\n<p style=\"text-align: justify;\">4. Terdapat Lapangan Outdoor tempat bermain anak.</p>\r\n<p style=\"text-align: justify;\">5. Terdapat Peralatan bermain seperti perosotan, ayunan, jungkat-jungkit, dll.</p>\r\n<p style=\"text-align: justify;\">6. Terdapat Pagar Pengaman agar anak tidak keluar dari daerah sekolah.</p>\r\n<p style=\"text-align: justify;\">7. Terdapat 2 (dua) Toilet Khusus anak yang dibedakan berdasarkan<em> Gender.</em></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Itulah Fasilitas yang ada di TK IT TAHFIZH QURAN yang dapat membuat anak ayah bunda merasa nyaman dan aman.</p>', 'informasi1652706220.jpg', '2022-05-15 14:06:07', '2022-05-16 20:03:40', 2),
(16, 'TK IT TAHFIZH QURAN MELAKUKAN KUNJUNGAN KE MUSEUM PENGHULU MUHAMMAD SOLEH', '<p>Museum Penghulu Muhammad Soleh merupakan Museum pertama yang ada di Kabupaten Musi Banyuasin, yang beralamatkan di JL. Bupati Oesman Bakar, Kelurahan Serasan Jaya, Kecematan Sekayu. Museum ini dilakukan oleh Plt Bupati Beni Hernedi, diwakili Sekretaris Daerah Kabupaten Muba Drs H Apriyadi, MSi, yang&nbsp;<em>launching&nbsp;</em>nya bertepatan pada tanggal 29/11/22.&nbsp;</p>\r\n<p>Pada Kesempatan Kali ini <strong>TK IT TAHFIZH QURAN</strong>&nbsp; berkesempatan untuk bisa datang langsung dalam rangka kunjungan study untuk anak-anak yang bertujuan untuk mengenalkan tentang kebudayaan dan kesenian budaya yang ada di MUSI BANYUASIN. Yang dibimbing langsung oleh guru pembimbing lapangan.</p>', 'informasi1652704751.jpg', '2022-05-16 08:25:21', '2022-06-15 21:38:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'TK IT TAHFIZH QURAN', 'tkittahfizd@gmail.com', '081373777904', 'Jalan Merdeka Lingkungan 1 Kayuara Kec. Muba', 'logo1652788733.jpeg', 'favicon1652408374.png', '<h1 style=\"text-align: left;\"><span style=\"text-decoration: underline;\">Tentang Sekolah</span></h1>\r\n<p style=\"text-align: justify;\"><strong>NPSN      :</strong> 69960037</p>\r\n<p style=\"text-align: justify;\"><strong>Status  : </strong>Swasta</p>\r\n<p style=\"text-align: justify;\"><strong>Bentuk Pendidikan : </strong>TK</p>\r\n<p style=\"text-align: justify;\"><strong>Status Kepemilikan : </strong>Yayasan</p>\r\n<p style=\"text-align: justify;\"><strong>SK Pendirian Sekolah : </strong>685 TAHUN 2016</p>\r\n<p style=\"text-align: justify;\"><strong>Tanggal SK Pendirian : </strong> 2016-12-21</p>\r\n<p style=\"text-align: justify;\"><strong>SK Izin Operasional : </strong>685 TAHUN 2016</p>\r\n<p style=\"text-align: justify;\"><strong>Tanggal SK Izin Operasional : </strong>2016-12-21</p>\r\n<h1 style=\"text-align: center;\"><em><span style=\"text-decoration: underline;\"><strong>Visi</strong></span></em></h1>\r\n<p style=\"text-align: center;\"><em>\"Mendidik generasi sholih, cerdas, mandiri, berwawasan dan berakhlaqul islami\"</em></p>\r\n<h1 style=\"text-align: center;\"><em><span style=\"text-decoration: underline;\"><strong>Misi</strong></span></em></h1>\r\n<p style=\"text-align: center;\"><em>1. Menanamkan nilai-nilai tauhid</em></p>\r\n<p style=\"text-align: center;\"><em>2. Mengajarkan aqidah yang sholihah</em></p>\r\n<p style=\"text-align: center;\"><em>3. Membiasakan anak dengan akhlaq yang islami</em></p>\r\n<p style=\"text-align: center;\"><em>4. Mendidik anak agar kreatif dan inovatif</em></p>\r\n<p style=\"text-align: center;\"><em>5. Menanamkan rasa cinta kepada Allah SWT dan Rosul -Nya</em></p>\r\n<p style=\"text-align: center;\"> </p>', 'sekolah1652623703.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.7260447008885!2d103.85603060000001!3d-2.8950977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a8d43aeeec80f%3A0xf70b17b89510ee00!2sKAYUARA%20LINGKUNGAN%201!5e0!3m2!1sid!2sid!4v1652632387437!5m2!1sid!2sid', 'Fitri Ariyani', 'kepsek1652411819.png', '<p>Selamat Datang di TK IT TAHFIZH QURAN.&nbsp;</p>\r\n<p>\"Mendidik generasi yang Sholih, Cerdas, Mandiri, Berwawasan Dan Berakhlaqul Islami\"</p>\r\n<p>&nbsp;</p>', '2022-05-12 13:19:43', '2022-06-14 14:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Bintang', 'super admin', 'd0970714757783e6cf17b26fb8e2298f', 'Super Admin', '2022-04-22 07:25:20', '2022-04-28 18:50:47'),
(2, 'Dwi Aryatami', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2022-04-22 07:25:20', '2022-04-24 15:38:52'),
(5, 'Nurul Arrafi', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2022-04-24 08:13:07', NULL),
(10, 'Nur Mitasari', 'admin3', 'e10adc3949ba59abbe56e057f20f883e', 'Super Admin', '2022-04-24 13:16:38', '2022-04-24 20:42:29'),
(11, 'Ma\'ma', 'admin5', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2022-04-25 03:06:54', NULL),
(14, 'Kukum', 'admin6', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2022-04-25 03:20:54', NULL),
(15, 'Super Admin', 'sa', 'e10adc3949ba59abbe56e057f20f883e', 'Super Admin', '2022-05-14 02:20:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
