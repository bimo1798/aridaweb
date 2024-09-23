-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2024 pada 04.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

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
(7, 23, 3),
(8, 24, 1),
(9, 24, 2),
(11, 26, 3),
(13, 25, 2),
(14, 25, 3),
(15, 25, 1),
(16, 26, 1),
(17, 26, 2),
(19, 28, 1),
(20, 28, 2),
(24, 28, 3),
(31, 32, 1),
(32, 32, 2),
(33, 32, 3),
(37, 31, 7),
(38, 31, 8),
(40, 29, 4),
(41, 29, 5),
(42, 29, 6),
(43, 36, 4),
(44, 36, 5),
(45, 36, 6),
(46, 37, 4),
(47, 37, 5),
(48, 37, 6),
(49, 38, 4),
(50, 38, 5),
(51, 38, 6),
(52, 34, 1),
(53, 34, 2),
(54, 34, 3),
(55, 40, 1),
(56, 40, 2),
(57, 40, 3),
(58, 40, 4),
(59, 40, 5),
(60, 40, 6),
(61, 30, 7),
(62, 30, 8),
(63, 27, 9),
(64, 27, 10),
(65, 27, 11),
(66, 27, 7),
(67, 27, 8),
(68, 43, 9),
(69, 43, 10),
(70, 43, 11),
(71, 45, 9),
(72, 45, 10),
(73, 45, 11),
(74, 46, 9),
(75, 46, 10),
(76, 46, 11),
(77, 40, 9),
(78, 40, 10),
(79, 40, 11),
(80, 48, 1),
(81, 48, 2),
(82, 48, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_shift`
--

CREATE TABLE `detail_shift` (
  `id` int(10) NOT NULL,
  `time_start` time DEFAULT NULL,
  `shift` int(11) NOT NULL,
  `activity_shift` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_shift`
--

INSERT INTO `detail_shift` (`id`, `time_start`, `shift`, `activity_shift`) VALUES
(1, '07:00:00', 1, 'Pengecekan Service DB'),
(2, '07:00:00', 1, 'Checklist Monitoring SMSRAM'),
(22, '14:00:00', 2, 'Checklist Environtment'),
(28, '14:00:00', 2, 'Checklist Monitoring SMSRAM'),
(29, '14:30:00', 2, 'Pengecekan Space Disk Server'),
(41, '07:00:00', 1, 'Pengecekan Repikasi Exchange dan Queue Email'),
(45, '07:00:00', 1, 'Monitoring Job SSIS'),
(46, '23:00:00', 3, 'Pengecekan Service DB'),
(47, '23:00:00', 3, 'Pengecekan SMSRAM'),
(48, '23:00:00', 3, 'Pengecekan Service Jboss'),
(49, '23:00:00', 3, 'Pengecekan Aplikasi Satelit'),
(50, '23:00:00', 3, 'Pengecekan Repikasi Exchange dan Queue Email'),
(51, '12:00:00', 3, 'Pengecekan Backup Mysql  Dan Postgre Server Ad1boxdb'),
(52, '12:00:00', 3, 'Monitoring Job SSIS'),
(53, '12:00:00', 3, 'Tes Email Internal dan External'),
(54, '01:00:00', 3, 'Pengecekan Repikasi Exchange dan Queue Email'),
(55, '08:00:00', 1, 'Pengecekan Backup RMAN'),
(56, '08:00:00', 1, 'Checklist Monitoring SMSRAM'),
(57, '08:00:00', 1, 'Pengecekan Sevices SMSRAM'),
(58, '08:00:00', 1, 'Pengecekan Server Core (OAS&amp;RPT)'),
(59, '08:00:00', 1, 'Pengecekan Server Domain'),
(60, '08:00:00', 1, 'Report Batch Job'),
(61, '15:00:00', 2, 'Pengecekan Ad1gate'),
(62, '15:00:00', 2, 'Pengecekan Repikasi Exchange dan Queue Email'),
(63, '15:00:00', 2, 'CheckList Monitoring SMSRAM'),
(64, '15:00:00', 2, 'Pengecekan Service DB'),
(65, '15:00:00', 2, 'Pengecekan Lag OGG'),
(67, '07:00:00', 7, 'Ceklist AC Data center'),
(68, '07:00:00', 7, 'Pengecekkan Link Metro SBY-DCI'),
(69, '08:00:00', 7, 'Pengecekan network cabang'),
(70, '15:00:00', 8, 'Ceklist AC Data center'),
(71, '16:00:00', 8, 'Pengecekan network cabang'),
(72, '09:00:00', 7, 'Pengecekan usage memori CP'),
(73, '10:00:00', 7, 'Pengecekan network cabang'),
(74, '17:00:00', 8, 'Pengecekan network cabang'),
(75, '18:00:00', 8, 'Pengecekan usage memori CP'),
(76, '06:00:00', 4, 'Pengecekan Web Adira &amp; Momobil'),
(77, '06:00:00', 4, 'Pengecekan AC'),
(78, '06:00:00', 4, 'Kirim pendingan Job'),
(79, '07:00:00', 4, 'Pengecekan Network'),
(80, '08:00:00', 4, 'Pengecekan Check Point JKT-SBY'),
(81, '09:00:00', 4, 'Pengecekan FW T1'),
(82, '10:00:00', 4, 'Pengecekan Link Metro'),
(83, '10:00:00', 4, 'Pengecekan Check Point JKT-SBY'),
(84, '11:00:00', 4, 'Pengecekan Network'),
(85, '12:00:00', 4, 'Pengecekan FW T1'),
(86, '12:00:00', 4, 'Pengecekan Check Point JKT-SBY'),
(87, '13:00:00', 4, 'Pengecekan Link Metro'),
(88, '13:00:00', 4, 'Pengecekan Check Point JKT-SBY'),
(89, '13:00:00', 4, 'Kirim pendingan Job'),
(90, '14:00:00', 5, 'Pengecekan IT Room'),
(91, '14:00:00', 5, 'Pengecekan AC'),
(92, '15:00:00', 5, 'Pengecekan FW T1'),
(93, '16:00:00', 5, 'Pengecekan Check Point JKT-SBY'),
(94, '09:00:00', 1, 'Pengecekan Repikasi Exchange'),
(95, '09:00:00', 1, 'Pengecekan Service DB'),
(96, '09:00:00', 1, 'Pengecekan Lag OGG'),
(97, '09:00:00', 1, 'Checklist Monitoring SMSRAM'),
(98, '10:00:00', 1, 'Checklist Monitoring SMSRAM'),
(99, '11:00:00', 1, 'Pengecekan Service DB'),
(100, '11:00:00', 1, 'Pengecekan Repikasi Exchange dan Queue Email'),
(101, '11:00:00', 1, 'Checklist Monitoring SMSRAM'),
(102, '12:00:00', 1, 'Report Error Replikasi Cabang'),
(103, '12:00:00', 1, 'Pengecekan Lag OGG'),
(104, '12:00:00', 1, 'Checklist Monitoring SMSRAM'),
(105, '17:00:00', 5, 'Pengecekan Network'),
(106, '12:00:00', 1, 'Pengecekan Sevices SMSRAM'),
(107, '12:00:00', 1, 'Monitoring ETL Schedule (DTS)'),
(108, '12:00:00', 1, 'Pengecekan Ad1gate'),
(109, '12:00:00', 1, 'Monitoring Aplikasi Satelite'),
(110, '13:00:00', 1, 'Pengecekan Repikasi Exchange dan Queue Email'),
(111, '13:00:00', 1, 'Pengecekan BRMS'),
(112, '13:00:00', 1, 'Pengecekan Service DB'),
(113, '18:00:00', 5, 'Pengecekan FW T1'),
(114, '13:00:00', 1, 'Pengecekan Proses Backup'),
(116, '13:00:00', 1, 'Checklist Monitoring SMSRAM'),
(117, '13:00:00', 1, 'Send Pending Job'),
(118, '18:00:00', 5, 'Pengecekan Check Point JKT-SBY'),
(119, '18:00:00', 5, 'Pengiriman progress gangguan'),
(120, '18:00:00', 5, 'Pengecekan Link Metro'),
(121, '19:00:00', 5, 'Pengecekan Network'),
(123, '20:00:00', 5, 'Pengecekan Check Point JKT-SBY'),
(129, '16:00:00', 2, 'Pengecekan Email Internal Ke External'),
(130, '17:00:00', 2, 'Pengecekan Repikasi Exchange dan Queue Email'),
(131, '17:00:00', 2, 'Pengecekan Service DB'),
(132, '18:00:00', 2, 'Pengecekan DTS ETL Schedule Monitor'),
(133, '18:00:00', 2, 'Pengecekan Aplikasi Ad1mcs dan Ad1ms2'),
(134, '19:00:00', 2, 'Pengecekan Repikasi Exchange dan Queue Email'),
(135, '19:00:00', 2, 'Pengecekan Service DB'),
(136, '20:00:00', 2, 'Pengecekan Call Center IVR'),
(137, '21:00:00', 2, 'Pengecekan Service DB'),
(138, '21:00:00', 2, 'Pengecekan Repikasi Exchange dan Queue Email'),
(139, '22:00:00', 2, 'Pengecekan Email Internal Ke External'),
(140, '22:00:00', 2, 'Pengecekan Pendingan Job'),
(141, '22:00:00', 2, 'Pengecekan Scheduler OAS dan WAS CLAR'),
(142, '01:00:00', 3, 'Pengecekan Service AD1Wmp'),
(143, '01:00:00', 3, 'Pengecekan AF-MS2APP'),
(144, '01:00:00', 3, 'Pengecekan BPM Microservice,Was RPT dan Acction'),
(145, '01:30:00', 3, 'Service IIS'),
(146, '03:00:00', 3, 'Pengecekan AD1remarketing'),
(147, '03:00:00', 3, 'Pengecekan Service AD1Wmp'),
(148, '03:00:00', 3, 'Pengecekan AF-MS2APP'),
(149, '03:00:00', 3, 'Pengecekan Availbility Service Acction'),
(150, '05:00:00', 3, 'Pengecekan Credit Scoring'),
(151, '05:00:00', 3, 'Pengecekan Service Desk'),
(152, '05:30:00', 3, 'Pengecekan Space Harddisk DC-DCI'),
(153, '05:30:00', 3, 'Pengecekan Transfer Data Aging'),
(154, '05:30:00', 3, 'Pengecekan Coll Scoring'),
(155, '06:00:00', 3, 'Pengecekan Tes Email External'),
(156, '06:00:00', 3, 'Pengecekan DTS ETL Schedule Monitoring'),
(157, '06:00:00', 3, 'Pendingan JOB'),
(158, '22:00:00', 6, 'Pengecekan Web Adira &amp; Momobil'),
(159, '22:00:00', 6, 'Pengecekan AC'),
(160, '23:00:00', 6, 'Pengecekan Network'),
(161, '00:00:00', 6, 'Pengecekan FW T1'),
(162, '00:00:00', 6, 'Pengecekan Check Point JKT-SBY'),
(163, '01:00:00', 6, 'Pengecekan Network'),
(164, '02:00:00', 6, 'Pengecekan Link Metro'),
(165, '03:00:00', 6, 'Pengecekan Network'),
(166, '04:00:00', 6, 'Pengecekan Network'),
(167, '05:00:00', 6, 'Pengecekan Link Metro'),
(168, '05:00:00', 6, 'Pengecekan Check Point JKT-SBY'),
(169, '05:00:00', 6, 'Kirim pendingan Job'),
(170, '11:00:00', 7, 'Pengecekkan Link Metro SBY-DCI'),
(171, '12:00:00', 7, 'Pengecekan Firewall tier 1 DCI &amp; SBY'),
(172, '12:00:00', 7, 'Pengecekan usage memori CP'),
(173, '13:00:00', 7, 'Pengecekan network cabang'),
(174, '14:00:00', 7, 'Pengecekan network cabang'),
(175, '15:00:00', 7, 'Pengecekkan Link Metro SBY-DCI'),
(176, '15:00:00', 7, 'Pengecekan usage memori CP'),
(177, '18:00:00', 8, 'Pengecekan Firewall tier 1 DCI &amp; SBY'),
(178, '19:00:00', 8, 'Pengecekkan Link Metro SBY-DCI'),
(179, '20:00:00', 8, 'Pengecekan network cabang'),
(180, '21:00:00', 8, 'Pengecekan usage memori CP'),
(181, '22:30:00', 8, 'Ceklist AC Data center'),
(182, '23:00:00', 8, 'Pengecekkan Link Metro SBY-DCI'),
(183, '07:00:00', 9, 'Monitoring Performance af-welogicsby01 pukul 07:00 WIB'),
(184, '08:00:00', 9, 'Backup RMAN'),
(187, '08:00:00', 9, 'Cek Server DB 08:00 WIB'),
(188, '08:00:00', 9, 'Checklist Replikasi Exchange  08:00 WIB'),
(189, '08:00:00', 9, 'Test Email Internal to External 08.00 WIB'),
(190, '08:00:00', 9, 'Test Email External to Internal 08.00 WIB (GMAIL &amp; YAHOO)'),
(191, '08:00:00', 9, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(192, '08:00:00', 9, 'Monitoring WAS'),
(193, '08:30:00', 9, 'Checklist Space Disk Server Surabaya Shift 1'),
(194, '08:30:00', 9, 'Checklist report hasil backup af-sunhrdb'),
(195, '08:30:00', 9, 'Pengecekan Aplikasi Ad1share pukul 08:30 WIB'),
(196, '08:30:00', 9, 'Cek Service Server BPM Production 08:30 WIB'),
(197, '08:45:00', 9, 'Monitoring Grid'),
(198, '09:00:00', 9, 'Cek Aplikasi dan Web Ad1MCS Internal dan External'),
(199, '09:00:00', 9, 'Cek Aplikasi dan Web Ad1MS2 Internal dan External'),
(200, '09:00:00', 9, 'Cek Ad1gate Jam 09:00 WIB'),
(201, '09:00:00', 9, 'Cek Web Ad1Keday 09:00 WIB'),
(202, '09:00:00', 9, 'Monitoring WAS'),
(203, '10:00:00', 9, 'Report Data Store VCDRC03'),
(204, '10:00:00', 9, 'Performance Server Service Acction 10:00 WIB'),
(205, '10:00:00', 9, 'Cek Server DB 10:00 WIB'),
(206, '10:00:00', 9, 'Checklist Replikasi Exchange  10:00 WIB'),
(207, '10:00:00', 9, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(208, '10:00:00', 9, 'Monitoring WAS'),
(209, '10:00:00', 9, 'Monitoring Sophos DLP 10:00 WIB'),
(210, '10:45:00', 9, 'Monitoring Grid'),
(211, '11:00:00', 9, 'Report Proses Backup'),
(212, '11:00:00', 9, 'Monitoring WAS'),
(213, '12:00:00', 9, 'Test email internal to external  - 12.00 WIB'),
(214, '12:00:00', 9, 'Test Email External to Internal 12.00 WIB (GMAIL &amp; YAHOO)'),
(215, '12:00:00', 9, 'Cek Server DB 12:00 WIB'),
(246, '21:00:00', 5, 'Pengecekan FW T1'),
(247, '22:00:00', 5, 'Pengecekan Check Point JKT-SBY'),
(248, '22:00:00', 5, 'Pengecekan Link Metro'),
(249, '22:00:00', 5, 'Kirim pendingan Job'),
(250, '23:30:00', 11, 'Checklist Environment DRC SBY Shift 3 Jam 23:30 WIB'),
(251, '00:01:00', 11, 'Cek Server DB 24:00 WIB'),
(252, '00:01:00', 11, 'Test email internal to external- 24.00 WIB'),
(253, '00:01:00', 11, 'Test Email External to Internal 24.00 WIB (GMAIL &amp; YAHOO)'),
(254, '00:01:00', 11, 'Checklist Replikasi Exchange  JAM 24:00 WIB'),
(255, '00:01:00', 11, 'Monitoring WAS'),
(276, '00:01:00', 11, 'monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(280, '00:45:00', 11, 'Monitoring grid'),
(281, '01:00:00', 11, 'Checklist Proses ETL Informatica WF_PRE_FULL'),
(282, '01:00:00', 11, 'Checklist Jboss  ON 01.00 WIB'),
(283, '01:00:00', 11, 'Monitoring WAS'),
(284, '01:50:00', 11, 'Monitoring BPM microservices Start Service pukul 01.50 WIB'),
(285, '02:00:00', 11, 'Cek Server DB 02:00 WIB'),
(286, '02:00:00', 11, 'Checklist Replikasi Exchange JAM 02:00 WIB'),
(287, '02:01:00', 11, 'Lag OGG Pukul 02:00 WIB'),
(291, '02:00:00', 11, 'Monitoring WAS'),
(305, '02:00:00', 11, 'monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(306, '02:45:00', 11, 'Monitoring grid'),
(307, '03:00:00', 11, 'Monitoring Service IIS Pukul 03:00 WIB ( START )'),
(308, '03:00:00', 11, 'Cek Service Ad1wmpSBY(OK), WMP JKT (OK)dan WMP Mobil 03.00 WIB (OK)'),
(309, '03:00:00', 11, 'Monitoring WAS'),
(310, '03:00:00', 11, 'Monitoring availabilty service Acction 03:00 WIB'),
(311, '04:00:00', 11, 'Pengecekan Checklist ServiceDesk pada jam 04:00 WIB'),
(312, '04:00:00', 11, 'Cek Server DB 04:00 WIB'),
(313, '04:00:00', 11, 'Test email internal to external  04.00 WIB'),
(314, '04:00:00', 11, 'Test Email External to Internal 04.00 WIB (GMAIL &amp; YAHOO)'),
(315, '04:00:00', 11, 'Checklist Replikasi Exchange JAM 04:00 WIB'),
(316, '04:00:00', 11, 'Monitoring WAS'),
(317, '04:00:00', 11, 'Pengecekan Domain Server cabang Up/Down pada jam 04:00 WIB'),
(318, '04:00:00', 11, 'monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(319, '04:30:00', 11, 'Cek ad1remarketing pukul 4:30 WIB'),
(320, '05:00:00', 11, 'Cek Ad1gate Jam 05:00 WIB'),
(321, '05:00:00', 11, 'Pengecekan CallCenter IVR  05:00 WIB'),
(322, '05:00:00', 11, 'Cek Aplikasi OAS Dan WAS'),
(323, '05:00:00', 11, 'Cek All Acct-Sby dan All Acct-Jkt'),
(324, '05:00:00', 11, 'Lag OGG Pukul 05:00 WIB'),
(325, '05:00:00', 11, 'Cek Aplikasi dan Web Ad1MCS Internal dan External'),
(326, '05:00:00', 11, 'Cek Aplikasi dan Web Ad1MS2 Internal dan External'),
(327, '05:00:00', 11, 'Cek Ad1GateKeday'),
(328, '05:00:00', 11, 'Cek Ad1Clar2'),
(329, '05:30:00', 11, 'Cek All Service RPT'),
(330, '06:00:00', 11, 'Cek Server DB 06:00 WIB'),
(331, '06:00:00', 11, 'Checklist SFTP E-GL TO BDI HRIS (OK), SunFish (OK)'),
(332, '06:00:00', 11, 'Checklist Replikasi Exchange JAM 06:00 WIB'),
(333, '06:00:00', 11, 'monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(334, '06:45:00', 11, 'Monitoring grid'),
(335, '07:00:00', 11, 'Pendingan Job (Operator Server) Shift 3'),
(336, '12:00:00', 9, 'Checklist Replikasi Exchange  12:00 WIB'),
(337, '12:00:00', 9, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(338, '12:00:00', 9, 'Monitoring WAS'),
(339, '12:00:00', 9, 'Monitoring Job SSIS - 12:00 WIB'),
(340, '12:45:00', 9, 'Monitoring Grid'),
(341, '13:00:00', 9, 'Monitoring WAS'),
(342, '14:00:00', 9, 'Hasil Cek Backup RMAN dengan Veritas'),
(343, '14:00:00', 9, 'Cek Server DB  14:00 WIB'),
(344, '14:00:00', 9, 'Checklist Replikasi Exchange  14:00 WIB'),
(345, '14:00:00', 9, 'Monitoring Sophos DLP 14:00 WIB'),
(346, '14:00:00', 9, 'Monitoring WAS'),
(347, '14:00:00', 9, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(348, '14:30:00', 9, 'Performance Server Service Acction 14:30 WIB'),
(349, '14:45:00', 9, 'Monitoring Grid'),
(350, '07:00:00', 11, 'Monitoring WAS'),
(356, '15:00:00', 9, 'Monitoring WAS'),
(357, '15:00:00', 9, 'Pendingan Job (Operator Server) Shift 1'),
(358, '16:00:00', 10, 'Cek Server DB 16:00 WIB'),
(359, '16:00:00', 10, 'Checklist Replikasi Exchange  16:00 WIB'),
(360, '16:00:00', 10, 'Test email internal to external - 16.00 WIB'),
(361, '16:00:00', 10, 'Test Email External to Internal 16.00 WIB (GMAIL &amp; YAHOO)'),
(362, '16:00:00', 10, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(363, '16:00:00', 10, 'Cek Service Server BPM Production 16:00 WIB'),
(364, '16:00:00', 10, 'Monitoring WAS'),
(365, '16:30:00', 10, 'Checklist Space Disk Server Surabaya Shift 2'),
(366, '16:45:00', 10, 'Monitoring Grid'),
(367, '17:00:00', 10, 'Checklist Environment DRC SBY (Shift 2 Jam 17:00 WIB)'),
(368, '18:00:00', 10, 'Cek Server DB  18:00 WIB'),
(369, '18:00:00', 10, 'Checklist Replikasi Exchange  18:00 WIB'),
(370, '18:00:00', 10, 'Monitoring Job SSIS - 18:00 WIB'),
(371, '18:00:00', 10, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(372, '18:00:00', 10, 'Monitoring WAS'),
(373, '18:45:00', 10, 'Monitoring Grid'),
(374, '19:00:00', 10, 'Monitoring WAS'),
(375, '20:00:00', 10, 'Cek Server DB  20:00 WIB'),
(376, '20:00:00', 10, 'Checklist Replikasi Exchange  20:00 WIB'),
(377, '20:00:00', 10, 'Test email internal to external - 20.00 WIB'),
(378, '20:00:00', 10, 'Test Email External to Internal 20.00 WIB (GMAIL &amp; YAHOO)'),
(379, '20:00:00', 10, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(380, '20:00:00', 10, 'Monitoring WAS'),
(381, '20:00:00', 10, 'Cek ad1remarketing pukul 20:00 WIB'),
(382, '20:15:00', 10, 'Cek Aplikasi OAS Dan WAS'),
(383, '20:45:00', 10, 'Monitoring Grid'),
(384, '21:00:00', 10, 'Monitoring WAS'),
(385, '22:00:00', 10, 'Cek Server DB  22:00 WIB'),
(386, '22:00:00', 10, 'Checklist Replikasi Exchange  22:00 WIB'),
(387, '22:00:00', 10, 'Monitoring queue email di server AF-EXEDGALS01 &amp; AF-EXEDGSBY01'),
(388, '22:00:00', 10, 'Monitoring WAS'),
(389, '22:45:00', 10, 'Monitoring Grid'),
(390, '23:00:00', 10, 'Monitoring WAS'),
(391, '23:00:00', 10, 'Pendingan Job (Operator Server) Shift 2'),
(392, '05:00:00', 1, 'Cek ECM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `engineer`
--

CREATE TABLE `engineer` (
  `id` int(11) NOT NULL,
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
(15, '12713', 'Mujiman', '081325996245', '2018-08-09', '2019-08-31', 'v.agus.fariyanto@adira.co.id', 'Agus_Fariyanto.PNG', '1fe27e8e8bb3a6a519a6ef25ee4a7730'),
(35, '98765', 'User Test', '0876532442', '2024-09-19', '2024-11-30', 'example@adira.co.id', NULL, '7802fde3dccf405a3290f7bd30bb5ae2'),
(36, '10992220', 'Faisal', '0928392392', '2024-09-19', '2024-09-30', 'a@gmail.com', 'Pas_Foto_1.jpg', 'a7c3ff393910c6c4ae3adb71d2a79bd0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id`, `job`) VALUES
(2, 'IT Sys Mon &amp; Rel'),
(3, 'TECHNIKAL SUPPORT'),
(4, 'TECHNIKAL SUPPORT HO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location`
--

CREATE TABLE `location` (
  `id` int(4) NOT NULL,
  `location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'JAKARTA'),
(2, 'SURABAYA'),
(3, 'Jawa Barat'),
(4, 'JABOTABEK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift`
--

CREATE TABLE `shift` (
  `id` int(4) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shift`
--

INSERT INTO `shift` (`id`, `shift`, `start_time`, `end_time`) VALUES
(1, 'Shift 1 SRE', '07:00:00', '15:00:00'),
(2, 'Shift 2 SRE', '15:00:00', '23:00:00'),
(3, 'Shift 3 SRE', '23:00:00', '07:00:00'),
(4, 'Daily Activity Technikal Support', '01:00:00', '23:56:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `nik` varchar(12) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `nik`, `name`, `email`, `password`, `photo`) VALUES
(1111, '12345', 'Admin', 'Admin@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'jafar1.png'),
(1113, '14600', 'Garinda', 'garindkacolo@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '4_1d92902596773fef1efc33d99ea1860a1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `user`, `role`) VALUES
(30, '1111', '1'),
(34, '13', '2'),
(35, '12', '2'),
(36, '1113', '1'),
(37, '14', '2'),
(38, '15', '2'),
(39, '16', '2'),
(40, '17', '2'),
(41, '18', '2'),
(42, '24', '2'),
(43, '25', '1'),
(44, '19', '2'),
(45, '20', '2'),
(46, '22', '2'),
(47, '21', '2'),
(48, '23', '2'),
(49, '26', '2'),
(50, '27', '1'),
(51, '28', '2'),
(52, '29', '2'),
(53, '30', '1'),
(54, '31', '1'),
(55, '32', '2'),
(56, '33', '2'),
(57, '34', '2'),
(58, '35', '2'),
(59, '36', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` int(50) NOT NULL,
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
(23, 2, 1, 13),
(24, 1, 2, 14),
(25, 1, 2, 15),
(26, 1, 2, 17),
(27, 2, 2, 24),
(28, 1, 2, 16),
(29, 1, 1, 26),
(30, 2, 1, 28),
(31, 2, 1, 29),
(32, 3, 3, 19),
(33, 2, 2, 31),
(34, 1, 2, 18),
(36, 1, 1, 32),
(37, 1, 1, 33),
(38, 1, 1, 34),
(40, 1, 2, 20),
(41, 1, 1, 25),
(42, 1, 2, 27),
(43, 2, 2, 21),
(44, 2, 1, 30),
(45, 2, 2, 22),
(46, 2, 2, 23),
(47, 1, 3, 35),
(48, 1, 2, 36),
(49, 1, 2, 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_activity`
--

CREATE TABLE `work_activity` (
  `id` int(11) NOT NULL,
  `information` text,
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
(19, '', '03:58:23', '53', '2020-02-04', '13'),
(20, 'Service DB down= eskalasi ke PIC', '11:24:01', '1', '2020-02-10', '14'),
(21, 'a', '13:10:05', '38', '2020-02-10', '14'),
(22, 'Service DB down= eskalasi ke PIC', '08:25:01', '1', '2020-02-19', '15'),
(23, 'Sudah selesai', '08:25:32', '2', '2020-02-19', '15'),
(24, 'Done', '08:34:56', '38', '2020-02-19', '15'),
(25, 'Test', '09:04:02', '41', '2020-02-19', '15'),
(26, 'Sudah selesai', '09:29:23', '22', '2020-02-19', '15'),
(27, 'Done', '19:45:13', '28', '2020-02-23', '17'),
(28, 'Done', '20:13:32', '29', '2020-02-23', '17'),
(29, 'Done', '21:04:28', '63', '2020-02-23', '17'),
(30, 'Done', '21:08:21', '62', '2020-02-23', '17'),
(31, 'Done', '21:23:46', '65', '2020-02-23', '17'),
(32, 'done', '21:24:37', '22', '2020-02-23', '17'),
(33, 'lagi', '21:39:50', '61', '2020-02-23', '17'),
(34, 'DOne', '11:28:20', '38', '2020-02-25', '17'),
(35, 'done', '11:42:54', '52', '2020-02-25', '17'),
(36, 'Done', '13:45:50', '2', '2020-02-27', '17'),
(37, 'Done setelah mengerjakan request tiket', '13:55:20', '45', '2020-02-27', '24'),
(38, 'Sudah selesai', '14:03:31', '41', '2020-02-27', '15'),
(39, 'Done setelah cheklist', '14:37:32', '55', '2020-02-27', '16'),
(40, 'Done', '14:44:52', '22', '2020-02-27', '15'),
(41, 'Done setelah mengerjakan request tiket', '10:03:36', '1', '2020-02-28', '17'),
(42, 'Done ', '15:02:36', '22', '2020-03-10', '17'),
(43, 'Done ', '15:03:09', '29', '2020-03-10', '17'),
(44, 'done', '15:07:59', '22', '2020-06-12', '17'),
(45, 'done( ada amber di Hcoredc04 )', '15:22:22', '22', '2020-06-12', '16'),
(46, 'done', '15:45:49', '22', '2020-06-16', '31'),
(47, 'done', '15:51:34', '29', '2020-06-16', '31'),
(48, 'Pending ( karena ada masalah server )', '16:01:26', '22', '2020-06-16', '17'),
(49, 'done', '16:02:32', '29', '2020-06-16', '17'),
(50, 'done', '16:12:57', '70', '2020-06-16', '29'),
(51, 'sudah send', '16:13:18', '71', '2020-06-16', '29'),
(52, 'Pengecekan cabang Surabaya 1, link down', '16:29:04', '74', '2020-06-16', '29'),
(53, 'Sukses', '20:20:19', '90', '2020-06-17', '26'),
(54, 'Note : no operator tidak dapat mengirimkan sms', '10:01:23', '98', '2020-06-18', '17'),
(55, 'Sukses', '10:03:39', '82', '2020-06-18', '26'),
(56, 'Sukses', '10:03:49', '83', '2020-06-18', '26'),
(57, 'Note :  Monitoring aman', '11:03:44', '84', '2020-06-18', '26'),
(58, 'Sukses', '12:07:58', '85', '2020-06-18', '26'),
(59, 'Sukses', '12:08:05', '86', '2020-06-18', '26'),
(60, 'Sukses', '13:01:06', '87', '2020-06-18', '26'),
(61, 'Sukses', '13:01:12', '88', '2020-06-18', '26'),
(62, 'Sukses', '13:01:17', '89', '2020-06-18', '26'),
(63, 's', '14:06:11', '90', '2020-06-18', '26'),
(64, 'Sukses', '14:06:17', '91', '2020-06-18', '26'),
(65, 'Note : Maintenance Solarwind', '15:01:53', '92', '2020-06-18', '26'),
(66, 'done', '15:36:58', '70', '2020-06-18', '29'),
(67, 'done', '16:01:42', '71', '2020-06-18', '29'),
(68, 'Sukses', '16:04:43', '93', '2020-06-18', '26'),
(69, 'DONE', '16:53:15', '185', '2020-06-18', '21'),
(70, 'DONE', '16:53:24', '216', '2020-06-18', '21'),
(71, 'DONE', '16:53:40', '217', '2020-06-18', '21'),
(72, 'DONE', '16:54:15', '219', '2020-06-18', '21'),
(73, 'DONE', '16:54:31', '186', '2020-06-18', '21'),
(74, 'DONE', '16:54:39', '218', '2020-06-18', '21'),
(75, 'DONE', '16:54:46', '220', '2020-06-18', '21'),
(76, 'DONE', '16:54:58', '221', '2020-06-18', '21'),
(77, 'Note :  Monitoring aman', '17:01:47', '105', '2020-06-18', '26'),
(78, 'DONE', '17:20:23', '74', '2020-06-18', '29'),
(79, 'DONE', '17:55:01', '223', '2020-06-18', '21'),
(80, 'done', '18:00:14', '75', '2020-06-18', '29'),
(81, 'DONE', '18:00:18', '224', '2020-06-18', '21'),
(82, 'DONE', '18:00:27', '225', '2020-06-18', '21'),
(83, 'done', '18:00:28', '177', '2020-06-18', '29'),
(84, 'DONE', '18:00:34', '222', '2020-06-18', '21'),
(85, 'DONE', '18:00:44', '226', '2020-06-18', '21'),
(86, 'DONE', '18:00:56', '227', '2020-06-18', '21'),
(87, 'Sukses', '18:01:22', '113', '2020-06-18', '26'),
(88, 'Sukses', '18:01:28', '118', '2020-06-18', '26'),
(89, 'Sukses', '18:01:40', '119', '2020-06-18', '26'),
(90, 'Sukses', '18:01:52', '120', '2020-06-18', '26'),
(91, 'done', '19:02:15', '178', '2020-06-18', '29'),
(92, 'Note :  Monitoring aman', '19:11:04', '121', '2020-06-18', '26'),
(93, 'done', '20:00:51', '179', '2020-06-18', '29'),
(94, 'Sukses', '20:03:06', '123', '2020-06-18', '26'),
(95, 'DONE', '20:11:38', '228', '2020-06-18', '21'),
(96, 'DONE', '20:11:45', '229', '2020-06-18', '21'),
(97, 'DONE', '20:11:52', '230', '2020-06-18', '21'),
(98, 'DONE', '20:12:00', '231', '2020-06-18', '21'),
(99, 'DONE', '20:12:07', '232', '2020-06-18', '21'),
(100, 'DONE', '20:12:16', '233', '2020-06-18', '21'),
(101, 'DONE', '20:12:23', '234', '2020-06-18', '21'),
(102, 'DONE', '20:12:36', '235', '2020-06-18', '21'),
(103, 'Sukses', '21:00:34', '127', '2020-06-18', '26'),
(104, 'Status OK', '21:03:57', '137', '2020-06-18', '17'),
(105, 'Status OK', '21:04:34', '138', '2020-06-18', '17'),
(106, 'done', '21:06:17', '180', '2020-06-18', '29'),
(107, 'sukses', '22:16:10', '158', '2020-06-18', '20'),
(108, 'sukses', '22:16:16', '159', '2020-06-18', '20'),
(109, 'DONE', '22:29:15', '236', '2020-06-18', '21'),
(110, 'done', '22:30:31', '181', '2020-06-18', '29'),
(111, 'DONE', '22:32:01', '237', '2020-06-18', '21'),
(112, 'done', '23:00:14', '182', '2020-06-18', '29'),
(113, 'sukses', '23:10:30', '160', '2020-06-18', '20'),
(114, 'DONE', '23:23:48', '46', '2020-06-18', '18'),
(115, 'STOP (OK)', '23:24:01', '48', '2020-06-18', '18'),
(116, 'Ad1gate dan ad1ms2 (NOK) sedang dilakukan maintenance', '23:24:53', '49', '2020-06-18', '18'),
(117, 'OK', '23:25:49', '50', '2020-06-18', '18'),
(118, 'OK', '23:26:44', '47', '2020-06-18', '18'),
(119, 'Done', '23:30:48', '250', '2020-06-18', '22'),
(120, 'done', '23:59:51', '251', '2020-06-18', '22'),
(121, 'done', '23:59:58', '252', '2020-06-18', '22'),
(122, 'OK', '23:59:50', '53', '2020-06-18', '18'),
(123, 'Done', '00:03:07', '253', '2020-06-19', '22'),
(124, 'Done', '00:03:13', '253', '2020-06-19', '22'),
(125, 'Done', '00:03:22', '253', '2020-06-19', '22'),
(126, 'Done', '00:03:37', '254', '2020-06-19', '22'),
(127, 'Done', '00:03:43', '255', '2020-06-19', '22'),
(128, 'Done', '00:05:27', '255', '2020-06-19', '22'),
(129, 'sukses', '00:06:54', '161', '2020-06-19', '20'),
(130, 'sukses', '00:06:59', '161', '2020-06-19', '20'),
(131, 'sukses', '00:07:06', '161', '2020-06-19', '20'),
(132, 'sukses', '00:07:13', '162', '2020-06-19', '20'),
(133, 'sukses', '00:08:18', '161', '2020-06-19', '20'),
(134, 'sukses', '00:08:24', '162', '2020-06-19', '20'),
(135, 'sukses', '00:08:33', '161', '2020-06-19', '20'),
(136, 'Done', '00:08:45', '275', '2020-06-19', '22'),
(137, 'Done', '00:14:34', '275', '2020-06-19', '22'),
(138, 'Done', '00:49:10', '280', '2020-06-19', '22'),
(139, 'Done', '01:01:26', '281', '2020-06-19', '22'),
(140, 'Done', '01:01:51', '282', '2020-06-19', '22'),
(141, 'Done', '01:02:09', '283', '2020-06-19', '22'),
(142, 'sukses', '01:10:19', '161', '2020-06-19', '20'),
(143, 'sukses', '01:10:24', '163', '2020-06-19', '20'),
(144, 'sukses', '01:10:31', '163', '2020-06-19', '20'),
(145, 'Done', '01:23:34', '283', '2020-06-19', '22'),
(146, 'OK', '01:30:09', '54', '2020-06-19', '18'),
(147, 'OK', '01:30:18', '54', '2020-06-19', '18'),
(148, 'OK', '01:30:42', '54', '2020-06-19', '18'),
(149, 'OK', '01:31:07', '54', '2020-06-19', '18'),
(150, 'Done', '01:59:47', '284', '2020-06-19', '22'),
(151, 'Done', '02:02:23', '285', '2020-06-19', '22'),
(152, 'Done', '02:02:36', '286', '2020-06-19', '22'),
(153, 'Done', '02:02:47', '287', '2020-06-19', '22'),
(154, 'Done', '02:02:56', '291', '2020-06-19', '22'),
(155, 'Done', '02:03:12', '305', '2020-06-19', '22'),
(156, 'sukses', '02:04:32', '164', '2020-06-19', '20'),
(157, 'Done', '02:57:53', '306', '2020-06-19', '22'),
(158, 'Done', '03:04:46', '307', '2020-06-19', '22'),
(159, 'Done', '03:05:03', '308', '2020-06-19', '22'),
(160, 'Done', '03:05:26', '309', '2020-06-19', '22'),
(161, 'Done', '03:05:40', '310', '2020-06-19', '22'),
(162, 'sukses', '03:26:04', '165', '2020-06-19', '20'),
(163, 'Done', '04:05:40', '311', '2020-06-19', '22'),
(164, 'Done', '04:05:52', '312', '2020-06-19', '22'),
(165, 'Done', '04:06:04', '313', '2020-06-19', '22'),
(166, 'Done', '04:06:22', '313', '2020-06-19', '22'),
(167, 'Done', '04:06:32', '314', '2020-06-19', '22'),
(168, 'Done', '04:06:42', '315', '2020-06-19', '22'),
(169, 'Done', '04:06:54', '316', '2020-06-19', '22'),
(170, 'Done', '04:07:04', '317', '2020-06-19', '22'),
(171, 'Done', '04:07:17', '318', '2020-06-19', '22'),
(172, 'Done', '04:36:29', '319', '2020-06-19', '22'),
(173, 'Done', '05:00:55', '320', '2020-06-19', '22'),
(174, 'Done', '05:01:23', '321', '2020-06-19', '22'),
(175, 'Done', '05:01:31', '322', '2020-06-19', '22'),
(176, 'Done', '05:01:38', '323', '2020-06-19', '22'),
(177, 'Done', '05:01:47', '324', '2020-06-19', '22'),
(178, 'Done', '05:01:59', '325', '2020-06-19', '22'),
(179, 'Done', '05:02:06', '326', '2020-06-19', '22'),
(180, 'Done', '05:02:15', '327', '2020-06-19', '22'),
(181, 'Done', '05:02:21', '328', '2020-06-19', '22'),
(182, 'Done', '05:32:16', '329', '2020-06-19', '22'),
(183, 'Done', '06:12:46', '330', '2020-06-19', '22'),
(184, 'Done', '06:12:52', '331', '2020-06-19', '22'),
(185, 'Done', '06:12:57', '332', '2020-06-19', '22'),
(186, 'Done', '06:13:04', '333', '2020-06-19', '22'),
(187, 'Done', '06:52:00', '334', '2020-06-19', '22'),
(188, 'Done', '07:00:17', '335', '2020-06-19', '22'),
(189, 'Done', '07:02:06', '67', '2020-06-19', '24'),
(190, 'Done', '07:02:19', '68', '2020-06-19', '24'),
(191, 'Status OK', '07:06:59', '1', '2020-06-19', '17'),
(192, 'Status OK', '07:07:08', '41', '2020-06-19', '17'),
(193, 'Note : no operator tidak dapat mengirimkan sms', '07:07:19', '2', '2020-06-19', '17'),
(194, 'Status OK', '07:07:46', '45', '2020-06-19', '17'),
(195, 'DONE', '07:09:00', '183', '2020-06-19', '23'),
(196, 'Status OK', '07:08:57', '76', '2020-06-19', '33'),
(197, '23.8 | 45', '07:09:31', '77', '2020-06-19', '33'),
(198, '1. Adira Satelite Piru', '07:10:51', '78', '2020-06-19', '33'),
(199, 'Monitoring OK', '07:20:57', '79', '2020-06-19', '33'),
(200, 'Dear team berikut usage memori CP SBY 77% (kiri) dan usage memori CP TBS 62% (kanan)', '08:01:05', '80', '2020-06-19', '33'),
(201, 'Done', '08:03:57', '69', '2020-06-19', '24'),
(202, 'DONE', '08:04:57', '184', '2020-06-19', '23'),
(203, 'DONE', '08:05:06', '187', '2020-06-19', '23'),
(204, 'DONE', '08:05:14', '188', '2020-06-19', '23'),
(205, 'DONE', '08:05:28', '189', '2020-06-19', '23'),
(206, 'DONE', '08:05:43', '195', '2020-06-19', '23'),
(207, 'DONE', '08:06:10', '340', '2020-06-19', '23'),
(208, 'DONE', '08:10:55', '356', '2020-06-19', '23'),
(209, 'DONE', '08:31:41', '190', '2020-06-19', '23'),
(210, 'DONE', '08:31:46', '191', '2020-06-19', '23'),
(211, 'DONE', '08:31:56', '192', '2020-06-19', '23'),
(212, 'DONE', '08:32:05', '193', '2020-06-19', '23'),
(213, 'DONE', '08:54:26', '336', '2020-06-19', '23'),
(214, 'Status OK', '09:00:32', '94', '2020-06-19', '17'),
(215, 'Status OK', '09:00:46', '95', '2020-06-19', '17'),
(216, 'Status OK', '09:00:53', '96', '2020-06-19', '17'),
(217, 'Done', '09:01:04', '72', '2020-06-19', '24'),
(218, 'DONE', '09:01:41', '194', '2020-06-19', '23'),
(219, 'DONE', '09:01:46', '196', '2020-06-19', '23'),
(220, 'DONE', '09:01:54', '197', '2020-06-19', '23'),
(221, 'd', '09:02:03', '341', '2020-06-19', '23'),
(222, 'DONE', '09:02:09', '348', '2020-06-19', '23'),
(223, 'DONE', '09:02:17', '349', '2020-06-19', '23'),
(224, 'Used 82% | Avail 18%', '09:02:45', '81', '2020-06-19', '33'),
(225, 'DONE', '09:41:55', '198', '2020-06-19', '23'),
(226, 'DONE', '09:42:04', '199', '2020-06-19', '23'),
(227, 'DONE', '09:42:09', '200', '2020-06-19', '23'),
(228, 'DONE', '09:42:15', '201', '2020-06-19', '23'),
(229, 'DONE', '09:42:21', '202', '2020-06-19', '23'),
(230, 'done website ofline', '10:21:02', '203', '2020-06-19', '23'),
(231, 'done website ofline', '10:21:37', '204', '2020-06-19', '23'),
(232, 'done website ofline', '10:21:47', '205', '2020-06-19', '23'),
(233, 'done website ofline', '10:21:52', '206', '2020-06-19', '23'),
(234, 'done website ofline', '10:21:57', '207', '2020-06-19', '23'),
(235, 'done website ofline', '10:22:02', '208', '2020-06-19', '23'),
(236, 'done website ofline', '10:22:07', '209', '2020-06-19', '23'),
(237, 'Done Send SMS', '10:24:27', '98', '2020-06-19', '17'),
(238, 'Done, Server sempat direstart', '10:25:07', '73', '2020-06-19', '24'),
(239, 'DONE', '10:49:38', '210', '2020-06-19', '23'),
(240, 'DONE', '11:01:10', '211', '2020-06-19', '23'),
(241, 'Done', '11:02:22', '170', '2020-06-19', '24'),
(242, 'Status OK', '11:02:23', '99', '2020-06-19', '17'),
(243, 'Status OK', '11:02:33', '100', '2020-06-19', '17'),
(244, 'ping 10.1.10.58 status OK | ping 10.1.10.90 status OK', '11:02:22', '82', '2020-06-19', '33'),
(245, 'Dear team berikut usage memori CP SBY 78% (kiri) dan usage memori CP TBS 63% (kanan)', '11:03:05', '83', '2020-06-19', '33'),
(246, 'Adira Satelite Wlingi', '11:06:21', '84', '2020-06-19', '33'),
(247, 'done website ofline', '11:21:55', '212', '2020-06-19', '23'),
(248, 'DONE', '12:00:20', '213', '2020-06-19', '23'),
(249, 'DONE', '12:00:27', '214', '2020-06-19', '23'),
(250, 'DONE', '12:00:34', '215', '2020-06-19', '23'),
(251, 'DONE', '12:00:39', '337', '2020-06-19', '23'),
(252, 'DONE', '12:00:45', '338', '2020-06-19', '23'),
(253, 'DONE', '12:00:50', '339', '2020-06-19', '23'),
(254, 'Used 82% | Avail 18%', '12:10:45', '85', '2020-06-19', '33'),
(255, 'Dear team berikut usage memori CP SBY 79% (kiri) dan usage memori CP TBS 62% (kanan)', '12:11:15', '86', '2020-06-19', '33'),
(256, 'Done Send Replikasi Cabang', '12:15:05', '102', '2020-06-19', '17'),
(257, 'Status OK', '12:15:27', '103', '2020-06-19', '17'),
(258, 'Done Send SMS', '12:15:36', '106', '2020-06-19', '17'),
(259, 'Done Send SMS', '12:15:49', '104', '2020-06-19', '17'),
(260, 'Status OK', '12:15:55', '107', '2020-06-19', '17'),
(261, 'Status OK', '12:16:02', '108', '2020-06-19', '17'),
(262, 'Status OK', '12:16:08', '109', '2020-06-19', '17'),
(263, 'Done, sholat jumat', '12:33:29', '171', '2020-06-19', '24'),
(264, 'Done, sholat jumat', '12:33:40', '172', '2020-06-19', '24'),
(265, 'Done', '13:01:06', '173', '2020-06-19', '24'),
(266, 'Status OK', '13:03:27', '110', '2020-06-19', '17'),
(267, 'Status OK', '13:03:37', '112', '2020-06-19', '17'),
(268, 'Status OK', '13:03:45', '114', '2020-06-19', '17'),
(269, 'Done Send SMS', '13:03:52', '116', '2020-06-19', '17'),
(270, 'Done, Shift 1 to Shift 2 Next Mas Yo', '13:03:59', '117', '2020-06-19', '17'),
(271, 'ping 10.1.10.58 status OK | ping 10.1.10.90 status OK', '13:06:26', '87', '2020-06-19', '33'),
(272, 'Dear team berikut usage memori CP SBY 78% (kiri) dan usage memori CP TBS 63% (kanan)', '13:07:52', '88', '2020-06-19', '33'),
(273, '1. Adira Satelite Piru | 2.Adira Sentra CA Sulawesi | 3.Adira Satelite Tomohon | 4.Adira Satelite Tulang Bawang', '13:08:30', '89', '2020-06-19', '33'),
(274, 'Done', '14:01:42', '174', '2020-06-19', '24'),
(275, 'DONE', '14:03:20', '342', '2020-06-19', '23'),
(276, 'DONE', '14:03:26', '343', '2020-06-19', '23'),
(277, 'DONE', '14:03:32', '344', '2020-06-19', '23'),
(278, 'DONE', '14:03:38', '345', '2020-06-19', '23'),
(279, 'DONE', '14:03:47', '346', '2020-06-19', '23'),
(280, 'Sukses', '14:09:43', '90', '2020-06-19', '26'),
(281, 'Sukses', '14:09:55', '91', '2020-06-19', '26'),
(282, 'DONE', '14:16:13', '347', '2020-06-19', '23'),
(283, 'nelfon bu har', '13:51:41', '1', '2024-09-12', '15'),
(284, 'on call mas Agus Hermawan ', '15:01:27', '22', '2024-09-12', '16'),
(285, 'ada probelem ', '15:03:24', '28', '2024-09-12', '16'),
(286, 'Troubleshoot printer CS bu Titik', '15:26:48', '1', '2024-09-19', '16'),
(287, 'done', '15:32:01', '22', '2024-09-19', '16'),
(288, 'on call pak igun', '15:37:15', '28', '2024-09-19', '16'),
(289, 'OK', '17:49:26', '22', '2024-09-19', '15'),
(290, 'OK', '11:09:03', '1', '2024-09-20', '36'),
(291, 'ok', '11:09:14', '2', '2024-09-20', '36'),
(292, 'ok', '11:09:21', '41', '2024-09-20', '36'),
(293, 'OK', '11:09:28', '45', '2024-09-20', '36'),
(294, 'ok', '11:09:34', '55', '2024-09-20', '36'),
(295, 'ok', '11:09:57', '56', '2024-09-20', '36'),
(296, 'ok', '11:10:05', '57', '2024-09-20', '36');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `detail_shift`
--
ALTER TABLE `detail_shift`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

--
-- AUTO_INCREMENT untuk tabel `engineer`
--
ALTER TABLE `engineer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `location`
--
ALTER TABLE `location`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `work_activity`
--
ALTER TABLE `work_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
