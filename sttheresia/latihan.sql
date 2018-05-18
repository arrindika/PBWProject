-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 01:32 PM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5638365_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', '25e09017e3d733f511dd583072ece55a91b4ef8d');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_materi`
--

CREATE TABLE `daftar_materi` (
  `id_materi` int(3) NOT NULL,
  `id_matpel` int(30) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_materi`
--

INSERT INTO `daftar_materi` (`id_materi`, `id_matpel`, `nama_materi`, `nama_guru`, `nama_file`) VALUES
(1, 1, 'Logaritma', 'budi', 'logaritma.pdf'),
(2, 1, 'Pitagoras', 'maman', 'pitagoras.pdf'),
(3, 1, 'Bangun Ruang', 'edi', 'bangun ruang.pdf'),
(4, 2, 'wasbang', 'rahman', 'wasbang.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_matpel`
--

CREATE TABLE `daftar_matpel` (
  `id_matpel` int(2) NOT NULL,
  `nama_matpel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_matpel`
--

INSERT INTO `daftar_matpel` (`id_matpel`, `nama_matpel`) VALUES
(1, 'Matematika'),
(2, 'PKN'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris'),
(5, 'Agama'),
(6, 'Sejarah'),
(7, 'Ekonomi'),
(8, 'Geografi'),
(9, 'Sosiologi'),
(10, 'Penjaskes'),
(11, 'Biologi'),
(12, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
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
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`id`, `nama`, `nip`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_ijazah`, `pendidikan_tahun`, `pendidikan_tingkat`, `pendidikan_jurusan`, `mulai_kerja`) VALUES
(2, 'arif', '', '2018-05-09', 'P', 'asasa', '0000-00-00', '', 'ASASASA', '2018-05-12'),
(3, 'Arrindika Pradana', '31313213', '1999-05-17', 'L', 'S2', '2018-05-10', 'Magister', 'Sistem Informas', '2018-05-03'),
(4, 'Kristian', '', '1988-01-06', 'L', 'S1', '1995-02-08', 'Sarjana', 'Ekonomi', '2018-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `eventTitle` varchar(100) NOT NULL,
  `eventBody` text NOT NULL,
  `eventDate` date NOT NULL,
  `eventTime` time NOT NULL,
  `eventLocation` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `eventTitle`, `eventBody`, `eventDate`, `eventTime`, `eventLocation`, `timeStamp`) VALUES
(1, 'Test 1', 'Hai There', '2018-05-24', '12:00:00', 'Sekolah', '2018-05-13 18:31:14'),
(2, 'Test 2', 'Hai There', '2018-05-29', '15:35:00', 'Sekolah', '2018-05-13 18:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `namaFoto` varchar(100) NOT NULL,
  `fileFoto` varchar(100) NOT NULL,
  `pathFoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `namaFoto`, `fileFoto`, `pathFoto`) VALUES
(2, 'Lab Komputer', 'labkomputer.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/labkomputer.jpeg'),
(3, 'Lapangan', 'lapangan.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/lapangan.jpeg'),
(4, 'Prestasi #1', 'prestasi1.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/prestasi1.jpeg'),
(5, 'Prestasi #2', 'prestasi2.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/prestasi2.jpeg'),
(6, 'Ruang Guru', 'ruangguru.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/ruangguru.jpeg'),
(7, 'Ruang Kelas', 'ruangkelas.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/ruangkelas.jpeg'),
(8, 'Taman Mini', 'tamanmini.jpeg', 'D:/xampp/htdocs/FP/sttheresia/assets/images/galeri/tamanmini.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `newsTitle` varchar(150) NOT NULL,
  `newsBody` text NOT NULL,
  `newsDate` date NOT NULL,
  `newsAuthor` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `newsTitle`, `newsBody`, `newsDate`, `newsAuthor`, `timeStamp`) VALUES
(1, 'Memukau! Tarian Hegong Siswi SMPK St Theresia Kupang', 'Grand launching aplikasi School Talk dihelat, Senin (7/5/2018) siang.\r\n\r\nAcara pembukaan semakin semarak, ketika tarian Hegong ditampilkan di salah satu ruangan di Hotel Swiss Belin Kristal Kupang.\r\n\r\nTarian yang dipentaskan siswi-siswi dari SMPK St. Theresia Kupang begitu memukau hadirin yang hadir di acara tersebut.\r\n\r\n\r\n\r\nArtikel ini telah tayang di pos-kupang.com dengan judul Memukau! Tarian Hegong Siswi SMPK St Theresia Kupang, http://kupang.tribunnews.com/2018/05/07/memukau-tarian-hegong-siswi-smpk-st-theresia-kupang.\r\nPenulis: Lexy Manafe\r\nEditor: OMDSMY Novemy Leo ', '2018-05-07', 'Penulis: Lexy Manafe Editor: OMDSMY Novemy Leo ', '2018-05-13 16:35:42'),
(2, 'Hadapi UNBK 2018, ini lho yang dilakukan SMPK ST THERESIA Kuppang', 'POS-KUPANG.COM|KUPANG - Menjelang Ujian Nasional Berbasis Komputer (UNBK) yang akan diselenggarakan dalam waktu dekat ini.\r\n\r\nBanyak persiapan yang dilakukan oleh masing-masing sekolah agar semua siswanya bisa siap menghadapi UNBK.  Tak terkecuali SMPK St. Theresia Kupang.\r\n\r\nKepala sekolah SMPK St. Theresia Kupang Sr. Dafrosa Muti,SSpS saat ditemui Selasa (27/2/2018) mengatakan, sekolahnya sedang dalam proses mempersiapkan siswa-siswinya untuk mengikuti UNBK nanti.\r\n\r\nAdapun persiapan yang dilakukan salah satunya adalah mengadakan les tambahan setelah jam  kegiatan belajar mengajar (KBM).\r\n\r\n\"Ada les tambahan juga setelah jam KBM mereka makan siang dulu baru kita lanjut les.\r\n\r\nSelain materi juga lebih banyak mengerjakan soal-soal ujian yang sudah pernah ada dua atau tiga tahun lalu, dan ini sudah sejak Agustus tahun 2017,\" ujar Dafrosa.\r\n\r\nSelain itu anak-anak juga dibekali dengan try out yang sampai saat ini sudah digelar sebanyak dua kali.\r\n\r\nSelain les dan try out siswanya juga diberi pelatihan atau simulasi UNBK.\r\n\r\n\r\n\r\nArtikel ini telah tayang di pos-kupang.com dengan judul Hadapi UNBK 2018, Ini Loh Yang Dilakukan SMPK St. Theresia Kupang, http://kupang.tribunnews.com/2018/02/27/hadapi-unbk-2018-ini-loh-yang-dilakukan-smpk-st-theresia-kupang.\r\n', '2018-02-27', 'Penulis: Maria Enotoda Editor: Fredrikus Royanto Bau ', '2018-05-13 16:39:06'),
(3, 'Test 1', 'Test, apakah berhasil ?', '2018-05-13', 'Tian', '2018-05-13 16:42:44'),
(4, 'Test', 'HAHAHHAHA', '2018-05-10', 'aa', '2018-05-16 22:42:40'),
(5, 'aaa', 'aaa', '2018-05-12', 'aaa', '2018-05-16 22:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `ni_pengguna` int(10) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `pass_pengguna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `ni_pengguna`, `nama_pengguna`, `pass_pengguna`) VALUES
(1, 1234567890, 'Arrindika', '7e240de74fb1ed08fa08d38063f6a6a91462a815'),
(2, 987654321, 'Tian', '7e240de74fb1ed08fa08d38063f6a6a91462a815');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_materi`
--
ALTER TABLE `daftar_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `daftar_matpel`
--
ALTER TABLE `daftar_matpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_materi`
--
ALTER TABLE `daftar_materi`
  MODIFY `id_materi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_matpel`
--
ALTER TABLE `daftar_matpel`
  MODIFY `id_matpel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
