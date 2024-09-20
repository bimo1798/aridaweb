-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2020 pada 06.15
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adira`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_location_shift`
--

CREATE TABLE `detail_location_shift` (
  `id` int(11) NOT NULL,
  `work` int(11) NOT NULL,
  `shift` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_location_shift`
--

INSERT INTO `detail_location_shift` (`id`, `work`, `shift`) VALUES
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 22, 1),
(6, 22, 3),
(7, 23, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_shift`
--

CREATE TABLE `detail_shift` (
  `id` int(4) NOT NULL,
  `time_start` time DEFAULT NULL,
  `shift` int(11) NOT NULL,
  `activity_shift` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_shift`
--

INSERT INTO `detail_shift` (`id`, `time_start`, `shift`, `activity_shift`) VALUES
(1, '07:00:00', 1, 'Service DB'),
(2, '07:00:00', 1, 'CheckList Monitoring SMSRAM'),
(22, '01:00:00', 2, 'gggg'),
(28, '01:00:00', 2, 'jj'),
(29, '01:00:00', 2, 'll'),
(38, '07:05:00', 1, 'Senam'),
(40, '08:00:00', 1, 'test'),
(41, '00:20:00', 1, 'ngopi'),
(43, '07:00:00', 42, 'coba'),
(44, '07:00:00', 41, 'test'),
(45, '11:00:00', 1, 'Nobar'),
(46, '23:00:00', 3, 'Nonton'),
(47, '23:03:00', 3, 'Beli Popcorn'),
(48, '23:35:00', 3, 'Maskeran'),
(49, '21:01:00', 3, 'Jalan Balik'),
(50, '21:11:00', 3, 'KRL'),
(51, '21:01:00', 3, 'Sare'),
(52, '01:00:00', 3, 'ngantuk'),
(53, '02:00:00', 3, 'depan toko'),
(54, '02:02:00', 3, 'begadang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `engineer`
--

CREATE TABLE `engineer` (
  `id` int(4) NOT NULL,
  `nik` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number_phone` varchar(14) NOT NULL,
  `start_date_site` date DEFAULT NULL,
  `end_date_site` date DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `engineer`
--

INSERT INTO `engineer` (`id`, `nik`, `name`, `number_phone`, `start_date_site`, `end_date_site`, `email`, `photo`, `password`) VALUES
(1, '12713', 'Agus Fariyanto', '2147483647', '2018-09-08', '2019-08-31', 'v.yohanes.ardinata@adira.co.id', 'mii1.png', '1f32aa4c9a1d2ea010adcf2348166a04'),
(2, '14038', 'Ahmad Kamel Fathony', '2147483647', '2018-08-08', '2019-08-31', 'v.ahmad.fathony@adira.co.id', 'adira.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, '1213', 'nyongen', '00', '2020-01-25', '2020-01-31', 'r@gmail.com', 'mii.png', '202cb962ac59075b964b07152d234b70'),
(13, '1212', 'Mj', '08988116753', '2020-01-27', '2020-01-31', 'mj12@gmail.com', 'jafar2.png', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id` int(4) NOT NULL,
  `job` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id`, `job`) VALUES
(1, 'Spv/Server Administr'),
(2, 'Server Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location`
--

CREATE TABLE `location` (
  `id` int(4) NOT NULL,
  `location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'JAKARTA'),
(2, 'SURABAYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift`
--

CREATE TABLE `shift` (
  `id` int(4) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shift`
--

INSERT INTO `shift` (`id`, `shift`, `start_time`, `end_time`) VALUES
(1, 'Shift 1', '07:00:00', '13:00:00'),
(2, 'Shift 2', '14:00:00', '17:05:00'),
(3, 'Shift 3', '20:00:00', '07:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(4) NOT NULL,
  `nik` varchar(12) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `nik`, `name`, `email`, `password`, `photo`) VALUES
(1110, '12345', 'Agus Fariyanto', 'v.yohanes.ardinata@adira.co.id', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(1111, '1221', 'Jafar', 'jafarshodiq0412@gmail.com', '202cb962ac59075b964b07152d234b70', 'jafar1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(4) NOT NULL,
  `user` varchar(20) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `user`, `role`) VALUES
(30, '1111', '1'),
(34, '13', '2'),
(35, '12', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` int(4) NOT NULL,
  `location` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `engineer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id`, `location`, `job`, `engineer`) VALUES
(1, 1, 1, 1),
(14, 1, 1, 12),
(20, 1, 1, 2),
(21, 2, 1, 1),
(22, 1, 1, 13),
(23, 2, 1, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_activity`
--

CREATE TABLE `work_activity` (
  `id` int(11) NOT NULL,
  `information` text DEFAULT NULL,
  `respon_time` time DEFAULT NULL,
  `detail_shift` varchar(20) NOT NULL,
  `work_date` date DEFAULT NULL,
  `engineer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work_activity`
--

INSERT INTO `work_activity` (`id`, `information`, `respon_time`, `detail_shift`, `work_date`, `engineer`) VALUES
(11, 'Done', '10:31:05', '1', '2020-01-31', '13'),
(15, 'otW', '21:14:02', '49', '2020-02-03', '13'),
(16, 'done', '21:32:51', '50', '2020-02-03', '13'),
(18, 'lagi', '03:58:09', '52', '2020-02-04', '13'),
(19, '', '03:58:23', '53', '2020-02-04', '13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_location_shift`
--
ALTER TABLE `detail_location_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_shift`
--
ALTER TABLE `detail_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work_activity`
--
ALTER TABLE `work_activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_location_shift`
--
ALTER TABLE `detail_location_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `detail_shift`
--
ALTER TABLE `detail_shift`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `engineer`
--
ALTER TABLE `engineer`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `location`
--
ALTER TABLE `location`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `work_activity`
--
ALTER TABLE `work_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
