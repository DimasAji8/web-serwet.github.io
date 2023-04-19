-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2023 pada 06.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(9, 'galeri1680588265.jpg', 'Kunjungan Sekolah Ke Yogyakarta', '2023-04-04 06:04:25', NULL),
(10, 'galeri1680588443.jpg', 'Perpisahan Sekolah Dasar Negeri Serdang Wetan', '2023-04-04 06:07:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lahir` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `creted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `lahir`, `nip`, `pendidikan`, `status`, `foto`, `creted_at`, `updated_at`) VALUES
(4, 'R. Uus Usman S.Pd', 'Cianjur, 8 Maret 1971', '1234567891', 'S1-Pendidikan Bahasa Inggris', 'Guru Bahasa Inggris', 'guru1681613474.jpg', '2023-04-16 02:51:14', NULL),
(5, 'Meidina S.Pd', 'Tangerang, 14 Agustus 1945', '1234567892', 'S1-Pendidikan Sekolah Dasar', 'Guru Kelas 3', 'guru1681613593.jpg', '2023-04-16 02:53:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
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
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(6, 'Libur Sekolah Ramadhan ', '<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p>Assalamualaikum Wr. Wb.</p>\r\n<p>Diberitahukan Kepada Seluruh Siswa Dan Siswi Serta Orang Tua/wali Murid Di SMA/SMK/MA [nama Sekolah], Bahwa Mulai Tanggal [tanggal Awal] Hingga [tanggal Akhir] Sekolah Akan Libur Untuk Menyambut Bulan Suci Ramadan Dan Hari Raya Idul Fitri 1444 Hijriyah.</p>\r\n<p>Selama Masa Libur, Siswa Dan Siswi Diharapkan Untuk Dapat Memanfaatkan Waktu Dengan Baik, Baik Itu Untuk Memperdalam Ilmu Agama, Beribadah, Maupun Meningkatkan Kemampuan Akademik Dan Non-akademik Yang Telah Dipelajari Selama Di Sekolah.</p>\r\n<p>Kepada Siswa Dan Siswi Yang Menjalankan Ibadah Puasa, Diharapkan Untuk Tetap Menjaga Kesehatan Dan Konsentrasi Selama Belajar Di Rumah. Kami Juga Mengimbau Agar Para Siswa Dan Siswi Dapat Menjaga Tali Silaturahmi Dengan Keluarga Dan Tetangga, Serta Tetap Menerapkan Protokol Kesehatan Yang Ketat Dalam Menjaga Diri Dari Pandemi COVID-19.</p>\r\n<p>Terima Kasih Atas Perhatian Dan Kerjasamanya. Selamat Menjalankan Ibadah Puasa Bagi Yang Menjalankannya, Dan Selamat Menikmati Liburan Bagi Siswa Dan Siswi Yang Tidak Menjalankan Ibadah Puasa.</p>\r\n<p>Wassalamualaikum Wr. Wb.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'informasi1680588089.jpg', '2023-04-04 06:01:29', '2023-04-04 13:03:27', 2),
(7, 'Pengumuman Ujian Praktek', '<p>Assalamu\'alaikum Wr. Wb.</p>\r\n<p>Kepada seluruh orang tua/wali murid dan siswa-siswi SD [nama sekolah], kami ingin memberitahukan tentang pelaksanaan ujian praktek pada semester ini.</p>\r\n<p>Ujian praktek akan dilaksanakan pada tanggal [tanggal] di sekolah masing-masing. Ujian praktek ini diadakan sebagai bagian dari evaluasi hasil belajar siswa pada semester ini dan sangat penting untuk menilai kemampuan siswa dalam menerapkan ilmu yang telah dipelajari selama ini.</p>\r\n<p>Adapun mata pelajaran yang akan diujikan pada ujian praktek ini adalah [mata pelajaran yang akan diujikan]. Sebagai persiapan, siswa-siswi diharapkan untuk mempersiapkan diri dengan baik, termasuk mempelajari materi dan praktikum yang telah diberikan oleh guru selama ini.</p>\r\n<p>Kami juga mengingatkan agar para siswa-siswi datang ke sekolah tepat waktu pada hari pelaksanaan ujian praktek dan mempersiapkan alat tulis dan alat praktikum yang dibutuhkan. Selain itu, kami juga mengimbau agar para siswa-siswi menjaga kesehatan dan beristirahat yang cukup, agar dapat menyelesaikan ujian dengan baik.</p>\r\n<p>Demikian pengumuman ini kami sampaikan, terima kasih atas perhatian dan kerjasamanya. Semoga siswa-siswi dapat menghadapi ujian praktek ini dengan baik dan mendapatkan hasil yang memuaskan.</p>\r\n<p>Wassalamu\'alaikum Wr. Wb.</p>', 'informasi1680588189.jpg', '2023-04-04 06:03:09', NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(14, 'Pramuka SDN Serdang Wetan', 'Ekstrakurikuler Pramuka merupakan salah satu kegiatan ekstrakurikuler wajib, yang diikuti oleh seluruh peserta didik kelas V II. Pramuka diyakini dapat membentuk Karakter dan jiwa kepemimpinan dalam diri peserta didik serta mewujudkan rasa nasionalisme yang tinggi.', 'jurusan1680588322.jpeg', '2023-03-29 04:42:48', '2023-04-13 09:03:45'),
(15, 'Palang Merah Remaja SDN Serdang Wetan', 'Ekstrakurikuler Palang Merah Remaja (PMR) merupakan salah satu ekstrakurikuler yang bergerak dibidang kepalangmerahan dimana ekstrakurikuler Palang Merah Remaja (PMR) adalah wadah pembinaan anggota remaja dengan tujuan membangun dan mengembangkan karakter anggota PMR yang berpedoman pada tribakti PMR', 'jurusan1680588410.jpg', '2023-04-04 06:06:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `akreditasi` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `youtube` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `jenjang` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sk_pendirian` varchar(15) NOT NULL,
  `tgl_pendirian` varchar(15) NOT NULL,
  `status_milik` varchar(20) NOT NULL,
  `sk_operasional` varchar(15) NOT NULL,
  `tgl_operasional` varchar(15) NOT NULL,
  `waktu_belajar` varchar(30) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `npsn`, `nss`, `akreditasi`, `email`, `youtube`, `telepon`, `alamat`, `kode_pos`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `jenjang`, `status`, `sk_pendirian`, `tgl_pendirian`, `status_milik`, `sk_operasional`, `tgl_operasional`, `waktu_belajar`, `kota`, `provinsi`, `kecamatan`, `kelurahan`, `luas_tanah`, `luas_bangunan`, `created_at`, `updated_at`) VALUES
(1, 'SDN SERDANG WETAN', '20602780', '101280306015', 'A', 'sdnserdangwetan@gmail.com', 'SDN Serdang Wetan', '02199276820', 'Jl. Pendidikan No. 50 Legok, Kabupaten Tangerang, Banten. ', '15810', 'logo1680225054.png', 'favicon1679849327.png', '<p style=\"text-align: center;\"><strong>VISI</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Terwujudnya Siswa Beriman dan Taqwa, Berprestasi, Berbudaya dan Berwawasan Lingkungan</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>MISI</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\"><span lang=\"EN-US\" style=\"font-size: 12pt; line-height: 150%;\">Menciptakan Profil Pelajar Yang Berakhlak Mulia Dan Rajin Beribadah.</span></span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\"><span lang=\"EN-US\" style=\"font-size: 12pt; line-height: 150%;\">Meningkatkan Mutu Lulusan Yang Sesuai Dengan Tuntutan Masyarakat Dan Perkembangan Ilmu Pengetahuan Dan Teknologi (IPTEK).</span></span></li>\r\n<li style=\"text-align: justify;\">Mewujudkan Proses Pembelajaran Yang Aktif, Kreatif, Inovatif, dan Menyenangkan</li>\r\n<li style=\"text-align: justify;\">Meningkatkan Mutu Pendidikan Dalam Upaya Mencerdaskan Kehidupan Generasi Bermoral, Kreatif Maju Dan Mandiri</li>\r\n<li style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 12pt; line-height: 150%;\">Membina Kemandirian Peserta Didik Dan Pengembangan Diri Yang Terencana Dan Berkesinambungan</span></li>\r\n<li style=\"text-align: justify;\">Menciptakan Lingkungan Sekolah Sebagai Tempat Intelektual, Sosial, Emosional, Keterampilan Dan Perkembangan Budaya Lokal Dalam Kebhinekaan Global</li>\r\n</ol>\r\n<div>\r\n<div style=\"text-align: center;\">\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n</div>\r\n</div>', 'sekolah1680592823.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8447621953096!2d106.55211641434114!3d-6.28412796325919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd6bb0c94e0f%3A0xd82b0246a34ac97a!2sSDN%20Serdang%20Wetan!5e0!3m2!1sid!2sid!4v1680093150489!5m2!1sid!2sid', 'Iwan Somantri S.Pd', 'kepsek1680153421.jpg', '<p>Assalamualaikum,&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Puji syukur serta rahmat dan berkah kita panjatkan&nbsp;kehadirat Allah SWT Tuhan Yang Maha Esa yang telah memberikan&nbsp;rahmat-Nya sehingga website SDN Serdang Wetan &nbsp;dapat diterbitkan. Salah satu tujuan dibuatnya website ini adalah untuk memenuhi segala kebutuhan informasi dengan menggunakan peralatan IT yang ada. Kami menyadari sepenuhnya bahwa di era perkembangan teknologi informasi yang pesat, untuk memajukan pendidikan diperlukan berbagai sarana prasarana yang canggih, berbagai kebutuhan informasi siswa, guru, orang tua dan masyarakat, maka hal tersebut kami upayakan untuk mewujudkannya semaksimal mungkin. mungkin. sebanyak mungkin. Semoga website ini dapat berguna dan bermanfaat khususnya informasi pendidikan, informasi dan informasi seputar SDN Serdang Wetan. Besar harapan kami lembaga ini dapat membawa manfaat bagi seluruh pemerhati pendidikan dan pelatihan, khususnya SDN Serdang Wetan.</p>\r\n<p>&nbsp;</p>\r\n<p>Akhir kata kami mengharapkan masukan dari berbagai pihak terhadap situs ini agar kami dapat terus belajar dan memperbaharui agar tampilan, isi dan kualitas situs terus berkembang dan meningkat kedepannya. Terima kasih atas kerja sama anda. Terus jadikan SDN Serdang Wetan&nbsp;lebih baik lagi.</p>\r\n<p>&nbsp;</p>\r\n<p>Wassalamu alaikum warahmatullahi wabarakatuh.&nbsp;</p>', 'Sekolah Dasar', 'Negeri', '949/81/PK/1977', '1977-11-29', 'Pemerintah Daerah', '949/81/PK/1977', '1977-11-29', 'Pagi dan Siang', 'kabupaten Tangerang', 'Banten', 'Legok', 'Serdang Wetan', '2450 m²', '2129 m²', '2023-03-23 09:26:30', '2023-04-19 11:23:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Dimas Aji', 'sa', 'e807f1fcf82d132f9bb018ca6738a19f', 'Super Admin', '2023-03-15 14:18:47', '2023-03-19 20:50:31'),
(2, 'Bilal', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-03-15 14:18:47', '2023-03-15 15:17:17'),
(5, 'Dimas Danang', 'sa2', 'e10adc3949ba59abbe56e057f20f883e', 'Super Admin', '2023-03-16 01:47:09', NULL),
(7, 'Rayhan', 'admin3', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-03-16 01:50:16', NULL),
(10, 'Ariz Asu', 'admin55', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-03-16 02:09:11', '2023-03-16 13:16:32'),
(11, 'Ma\'ruf Amin', 'admin7', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-03-16 06:52:59', NULL),
(12, 'Damar', 'admin8', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-03-16 07:30:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
