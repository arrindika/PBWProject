-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2018 pada 20.42
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
  `eventDateTime` datetime NOT NULL,
  `eventLocation` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `eventTitle`, `eventBody`, `eventDateTime`, `eventLocation`, `timeStamp`) VALUES
(8, 'Pahamh Cantik', '\r\nTom Holland\r\nTom Holland by Gage Skidmore.jpg\r\nHolland at the 2016 San Diego Comic-Con promoting Spider-Man: Homecoming\r\nBorn	Thomas Stanley Holland[1]\r\n1 June 1996 (age 21)\r\nKingston upon Thames, London, England\r\nEducation	Donhead Prep School\r\nWimbledon College\r\nThe BRIT School for Performing Arts and Technology\r\nOccupation	\r\nActor dancer\r\nYears active	2008–present\r\nParent(s)	Dominic Holland\r\nNicola Frost\r\nThomas Stanley \"Tom\" Holland (born 1 June 1996)[2] is an English actor and dancer. He is best known for playing Spider-Man in the Marvel Cinematic Universe (MCU) films Captain America: Civil War (2016), Spider-Man: Homecoming (2017), and Avengers: Infinity War (2018).\r\n\r\nHolland previously appeared on stage in the title role of Billy Elliot the Musical in London\'s West End. His other major films include The Impossible (2012), In the Heart of the Sea (2015), and The Lost City of Z (2016). Holland received the BAFTA Rising Star Award in 2017.\r\nTom Holland\r\nTom Holland by Gage Skidmore.jpg\r\nHolland at the 2016 San Diego Comic-Con promoting Spider-Man: Homecoming\r\nBorn	Thomas Stanley Holland[1]\r\n1 June 1996 (age 21)\r\nKingston upon Thames, London, England\r\nEducation	Donhead Prep School\r\nWimbledon College\r\nThe BRIT School for Performing Arts and Technology\r\nOccupation	\r\nActor dancer\r\nYears active	2008–present\r\nParent(s)	Dominic Holland\r\nNicola Frost\r\nThomas Stanley \"Tom\" Holland (born 1 June 1996)[2] is an English actor and dancer. He is best known for playing Spider-Man in the Marvel Cinematic Universe (MCU) films Captain America: Civil War (2016), Spider-Man: Homecoming (2017), and Avengers: Infinity War (2018).\r\n\r\nHolland previously appeared on stage in the title role of Billy Elliot the Musical in London\'s West End. His other major films include The Impossible (2012), In the Heart of the Sea (2015), and The Lost City of Z (2016). Holland received the BAFTA Rising Star Award in 2017.', '2018-01-01 02:01:00', 'SMP', '2018-05-07 10:38:36'),
(9, 'Pahhjh', 'Tom Holland\r\nT', '2018-01-01 13:01:00', 'ITS', '2018-05-07 10:46:04'),
(10, 'KSHAJSHJ', '\r\nTom Holland\r\nTom Holland by Gage Skidmore.jpg\r\nHolland at the 2016 San Diego Comic-Con promoting Spider-Man: Homecoming\r\nBorn	Thomas Stanley Holland[1]\r\n1 June 1996 (age 21)\r\nKingston upon Thames, London, England\r\nEducation	Donhead Prep School\r\nWimbledon College\r\nThe BRIT School for Performing Arts and Technology\r\nOccupation	\r\nActor dancer\r\nYears active	2008–present\r\nParent(s)	Dominic Holland\r\nNicola Frost\r\nThomas Stanley \"Tom\" Holland (born 1 June 1996)[2] is an English actor and dancer. He is best known for playing Spider-Man in the Marvel Cinematic Universe (MCU) films Captain America: Civil War (2016), Spider-Man: Homecoming (2017), and Avengers: Infinity War (2018).\r\n\r\nHolland previously appeared on stage in the title role of Billy Elliot the Musical in London\'s West End. His other major films include The Impossible (2012), In the Heart of the Sea (2015), and The Lost City of Z (2016). Holland received the BAFTA Rising Star Award in 2017.', '2018-01-01 01:00:00', 'J', '2018-05-07 10:38:58'),
(11, 'Paha ayam', 'Tom Holland\r\nTom Holland by Gage Skidmore.jpg\r\nHolland at the ', '2018-12-31 12:59:00', 'ITS', '2018-05-07 10:45:16'),
(12, 'Taian', '\r\nTom Holland\r\nTom Holland by Gage Skidmore.jpg\r\nHolland at the 2016 San Diego Comic-Con promoting Spider-Man: Homecoming\r\nBorn	Thomas Stanley Holland[1]\r\n1 June 1996 (age 21)\r\nKingston upon Thames, London, England\r\nEducation	Donhead Prep School\r\nWimbledon College\r\nThe BRIT School for Performing Arts and Technology\r\nOccupation	\r\nActor dancer\r\nYears active	2008–present\r\nParent(s)	Dominic Holland\r\nNicola Frost\r\nThomas Stanley \"Tom\" Holland (born 1 June 1996)[2] is an English actor and dancer. He is best known for playing Spider-Man in the Marvel Cinematic Universe (MCU) films Captain America: Civil War (2016), Spider-Man: Homecoming (2017), and Avengers: Infinity War (2018).\r\n\r\nHolland previously appeared on stage in the title role of Billy Elliot the Musical in London\'s West End. His other major films include The Impossible (2012), In the Heart of the Sea (2015), and The Lost City of Z (2016). Holland received the BAFTA Rising Star Award in 2017.', '2016-12-31 01:00:00', 'SMP', '2018-05-07 10:39:38');

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
(1, 'Halo namaku tian', 'taing iiashahsdashjahsjahsjhajshj', '2018-05-15', 'Tian', '2018-05-11 09:34:44'),
(2, 'HHAHAHHAH', 'If you find that the syntax described in this page does not work on your server it might be that “short tags” are disabled in your PHP ini file. CodeIgniter will optionally rewrite short tags on-the-fly, allowing you to use that syntax even if your server doesn’t support it. This feature can be enabled in your config/config.php file.\r\n\r\nPlease note that if you do use this feature, if PHP errors are encountered in your view files, the error message and line number will not be accurately shown. Instead, all errors will be shown as eval() errors.\r\nAlternative Echos\r\n\r\nNormally to echo, or print out a variable you would do this:\r\n\r\n<?php echo $variable; ?>\r\n\r\nWith the alternative syntax you can instead do it this way:\r\n\r\n<?=$variable?>\r\n\r\n', '2018-05-10', 'qqqqq', '2018-05-11 11:00:01');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
