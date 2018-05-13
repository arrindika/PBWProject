-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2018 pada 19.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'c5a9c89e63451dfcd9f6b6d07f4c9fd0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataguru`
--

CREATE TABLE `dataguru` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `pendidikan_ijazah` varchar(15) NOT NULL,
  `pendidikan_tahun` date NOT NULL,
  `pendidikan_tingkat` varchar(15) DEFAULT NULL,
  `pendidikan_jurusan` varchar(15) NOT NULL,
  `mulai_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataguru`
--

INSERT INTO `dataguru` (`id`, `nama`, `nip`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_ijazah`, `pendidikan_tahun`, `pendidikan_tingkat`, `pendidikan_jurusan`, `mulai_kerja`) VALUES
(1, 'asass', '', '2018-05-22', 'L', 'sdasasa', '0000-00-00', '', 'wqwqwqw', '2018-05-17'),
(2, 'qq', '', '2018-05-16', 'P', 'asasa', '2018-05-09', '', 'ASASASA', '2018-05-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `eventTitle` varchar(100) NOT NULL,
  `eventBody` text NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `eventTitle`, `eventBody`, `eventDate`, `eventLocation`, `timeStamp`) VALUES
(13, 'Test 1', 'Apakah Berhasil ?', '2018-05-13', 'Sekolah', '2018-05-13 17:17:08'),
(14, 'Test 2', 'Aakah berhasil lagi ?', '2018-05-21', 'Sekolah', '2018-05-13 17:19:58'),
(15, 'Test 3', 'Apakah Berhasil Lagi ?', '2018-05-22', 'Sekolah', '2018-05-13 17:21:11'),
(16, 'Test 4', 'Apakah Berhasil Lagi ?', '2018-05-29', 'Sekolah', '2018-05-13 17:21:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `newsTitle` varchar(150) NOT NULL,
  `newsBody` text NOT NULL,
  `newsDate` date NOT NULL,
  `newsAuthor` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `newsTitle`, `newsBody`, `newsDate`, `newsAuthor`, `timeStamp`) VALUES
(1, 'Memukau! Tarian Hegong Siswi SMPK St Theresia Kupang', 'Grand launching aplikasi School Talk dihelat, Senin (7/5/2018) siang.\r\n\r\nAcara pembukaan semakin semarak, ketika tarian Hegong ditampilkan di salah satu ruangan di Hotel Swiss Belin Kristal Kupang.\r\n\r\nTarian yang dipentaskan siswi-siswi dari SMPK St. Theresia Kupang begitu memukau hadirin yang hadir di acara tersebut.\r\n\r\n\r\n\r\nArtikel ini telah tayang di pos-kupang.com dengan judul Memukau! Tarian Hegong Siswi SMPK St Theresia Kupang, http://kupang.tribunnews.com/2018/05/07/memukau-tarian-hegong-siswi-smpk-st-theresia-kupang.\r\nPenulis: Lexy Manafe\r\nEditor: OMDSMY Novemy Leo ', '2018-05-07', 'Penulis: Lexy Manafe Editor: OMDSMY Novemy Leo ', '2018-05-13 16:35:42'),
(2, 'Hadapi UNBK 2018, ini lho yang dilakukan SMPK ST THERESIA Kuppang', 'POS-KUPANG.COM|KUPANG - Menjelang Ujian Nasional Berbasis Komputer (UNBK) yang akan diselenggarakan dalam waktu dekat ini.\r\n\r\nBanyak persiapan yang dilakukan oleh masing-masing sekolah agar semua siswanya bisa siap menghadapi UNBK.  Tak terkecuali SMPK St. Theresia Kupang.\r\n\r\nKepala sekolah SMPK St. Theresia Kupang Sr. Dafrosa Muti,SSpS saat ditemui Selasa (27/2/2018) mengatakan, sekolahnya sedang dalam proses mempersiapkan siswa-siswinya untuk mengikuti UNBK nanti.\r\n\r\nAdapun persiapan yang dilakukan salah satunya adalah mengadakan les tambahan setelah jam  kegiatan belajar mengajar (KBM).\r\n\r\n\"Ada les tambahan juga setelah jam KBM mereka makan siang dulu baru kita lanjut les.\r\n\r\nSelain materi juga lebih banyak mengerjakan soal-soal ujian yang sudah pernah ada dua atau tiga tahun lalu, dan ini sudah sejak Agustus tahun 2017,\" ujar Dafrosa.\r\n\r\nSelain itu anak-anak juga dibekali dengan try out yang sampai saat ini sudah digelar sebanyak dua kali.\r\n\r\nSelain les dan try out siswanya juga diberi pelatihan atau simulasi UNBK.\r\n\r\n\r\n\r\nArtikel ini telah tayang di pos-kupang.com dengan judul Hadapi UNBK 2018, Ini Loh Yang Dilakukan SMPK St. Theresia Kupang, http://kupang.tribunnews.com/2018/02/27/hadapi-unbk-2018-ini-loh-yang-dilakukan-smpk-st-theresia-kupang.\r\n', '2018-02-27', 'Penulis: Maria Enotoda Editor: Fredrikus Royanto Bau ', '2018-05-13 16:39:06'),
(3, 'Test 1', 'Test, apakah berhasil ?', '2018-05-13', 'Tian', '2018-05-13 16:42:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
