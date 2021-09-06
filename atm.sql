-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2020 pada 12.38
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
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `nama`, `no_hp`, `email`) VALUES
(26, 'admin', 'admin', 'aziz', '089887866776', 'aziz@gmail.com'),
(27, 'user', 'user', 'kesssarhur', '08116523954', 'kesswanted1998@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atm`
--

CREATE TABLE `atm` (
  `atm_id` int(11) NOT NULL,
  `atm_lat` varchar(50) DEFAULT NULL,
  `atm_long` varchar(50) DEFAULT NULL,
  `nama_atm` varchar(100) DEFAULT NULL,
  `cdm` enum('Yes','No') NOT NULL,
  `desa_id` int(50) DEFAULT NULL,
  `kec_id` int(50) DEFAULT NULL,
  `kab_id` int(50) DEFAULT NULL,
  `prov_id` int(50) DEFAULT NULL,
  `atm_foto` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `atm`
--

INSERT INTO `atm` (`atm_id`, `atm_lat`, `atm_long`, `nama_atm`, `cdm`, `desa_id`, `kec_id`, `kab_id`, `prov_id`, `atm_foto`, `created_at`, `updated_at`) VALUES
(3, '5.563491512554667', '95.32344047606819', 'Bank Aceh, BNI, Mandiri, Bank BRI', 'Yes', 53, 5, 1, 1, '1570370480IMG_20190826_181635.jpg', '2019-10-06 14:01:20', '2019-12-03 13:55:23'),
(5, '5.561555549164114', '95.32299935817719', 'BANK BRI, BNI', 'Yes', 47, 5, 1, 1, '1570371519IMG_20190826_181148.jpg', '2019-10-06 14:18:39', '2019-12-03 13:55:05'),
(6, '5.566859477576564', '95.32932749947497', 'BNI', 'Yes', 52, 5, 1, 1, '1572849920IMG_20190826_182040.jpg', '2019-11-04 06:45:20', '2019-11-04 06:45:20'),
(7, '5.564828448725445', '95.32995164394379', 'Bank Aceh', 'Yes', 52, 5, 1, 1, '1572850115IMG_20190826_182145.jpg', '2019-11-04 06:48:35', '2019-11-04 06:48:35'),
(8, '5.551459509088263', '95.31971949297213', 'BNI', 'Yes', 10, 1, 1, 1, '1572850411IMG_20190826_175208.jpg', '2019-11-04 06:53:31', '2019-11-04 06:53:31'),
(9, '5.555621036406981', '95.31510025262833', 'BNI', 'Yes', 10, 1, 1, 1, '1572851479IMG_20190826_180304.jpg', '2019-11-04 07:11:19', '2019-11-04 07:11:19'),
(10, '5.5542537569099135', '95.31445291623686', 'BANK BRI', 'Yes', 10, 1, 1, 1, '1572851783IMG_20190826_180212.jpg', '2019-11-04 07:16:23', '2019-11-04 07:16:23'),
(11, '5.554071467911337', '95.31437224114552', 'Bank Aceh, Mandiri', 'Yes', 10, 1, 1, 1, '1572851926IMG_20190826_180127.jpg', '2019-11-04 07:18:46', '2019-12-03 13:55:41'),
(12, '5.5521905777824445', '95.3148078918457', 'BNI', 'Yes', 10, 1, 1, 1, '1572852218IMG_20190826_175946.jpg', '2019-11-04 07:23:38', '2019-11-04 07:23:38'),
(13, '5.551603259906889', '95.31344532966614', 'BANK BRI', 'Yes', 10, 1, 1, 1, '1572852369IMG_20190826_175842.jpg', '2019-11-04 07:26:09', '2019-11-04 07:26:09'),
(14, '5.572826420252378', '95.36320567131042', 'BNI', 'Yes', 60, 6, 1, 1, '1572852685IMG_20190814_172918.jpg', '2019-11-04 07:31:25', '2019-11-04 07:31:25'),
(15, '5.572848202731151', '95.36383901599834', 'Bank Aceh', 'Yes', 60, 6, 1, 1, '1572852967IMG_20190814_172825.jpg', '2019-11-04 07:36:07', '2019-11-04 07:36:07'),
(16, '5.572419162464547', '95.36505114898296', 'BANK BRI', 'Yes', 60, 6, 1, 1, '1572853145IMG_20190814_172703.jpg', '2019-11-04 07:39:05', '2019-11-04 07:39:05'),
(17, '5.572356582478566', '95.36528706550598', 'Mandiri syariah', 'Yes', 60, 6, 1, 1, '1572853256IMG_20190814_172612.jpg', '2019-11-04 07:40:56', '2019-12-03 13:54:53'),
(18, '5.573515159036807', '95.36210596561432', 'BNI, Mandiri, Bank BRI', 'Yes', 61, 6, 1, 1, '1572853386IMG_20190814_170833.jpg', '2019-11-04 07:43:06', '2019-12-03 13:54:38'),
(19, '5.570862538530548', '95.36926492564976', 'Mandiri', 'Yes', 60, 6, 1, 1, '1572853542IMG_20190814_172213.jpg', '2019-11-04 07:45:42', '2019-12-03 13:54:18'),
(20, '5.571096561138563', '95.36900997161865', 'BANK BRI', 'Yes', 60, 6, 1, 1, '1572853710IMG_20190814_172353.jpg', '2019-11-04 07:48:30', '2019-11-04 07:48:30'),
(21, '5.570714816851626', '95.36916553974152', 'Bank Aceh', 'Yes', 60, 6, 1, 1, '1572853857IMG_20190814_172242.jpg', '2019-11-04 07:50:57', '2019-11-04 07:50:57'),
(22, '5.568010565255281', '95.37190675735474', 'BNI', 'Yes', 60, 6, 1, 1, '1572854310IMG_20190814_171813.jpg', '2019-11-04 07:58:30', '2019-11-04 07:58:30'),
(23, '5.576877644371741', '95.36806137401823', 'BNI Syariah, Mandiri, BRI Syariah', 'Yes', 60, 6, 1, 1, '1572854636IMG_20190814_171357.jpg', '2019-11-04 08:03:56', '2019-12-03 13:53:51'),
(24, '5.576956171325345', '95.36791563034058', 'Bank Aceh', 'Yes', 60, 6, 1, 1, '1572854794IMG_20190814_171307.jpg', '2019-11-04 08:06:34', '2019-11-04 08:06:34'),
(25, '5.543386496601673', '95.31720250813078', 'Bank Aceh, BNI, Mandiri, Bank BRI', 'Yes', 8, 1, 1, 1, '1572855817IMG_20190826_174424.jpg', '2019-11-04 08:23:37', '2019-12-03 13:53:25'),
(26, '5.5374700797968295', '95.31503319740295', 'Bank Aceh', 'Yes', 5, 1, 1, 1, '1572855942IMG_20190826_173707.jpg', '2019-11-04 08:25:42', '2019-11-04 08:25:42'),
(27, '5.542609243620002', '95.31647581368031', 'BANK BRI, BNI', 'Yes', 8, 1, 1, 1, '1572856178IMG_20190826_174313.jpg', '2019-11-04 08:29:38', '2019-12-03 13:53:01'),
(28, '5.537609130711661', '95.31510372821424', 'Mandiri, Mandiri syariah', 'Yes', 5, 1, 1, 1, '1572856359IMG_20190826_173738.jpg', '2019-11-04 08:32:39', '2019-12-03 13:52:47'),
(29, '5.539066553433926', '95.3156715631485', 'BNI', 'Yes', 5, 1, 1, 1, '1572856537IMG_20190826_173853.jpg', '2019-11-04 08:35:37', '2019-11-04 08:35:37'),
(30, '5.539775130870971', '95.31574045092248', 'BANK BRI', 'Yes', 5, 1, 1, 1, '1572856745IMG_20190826_174025.jpg', '2019-11-04 08:39:05', '2019-11-04 08:39:05'),
(31, '5.565241605115715', '95.29389900471904', 'Bank Aceh', 'Yes', 21, 2, 1, 1, '1572857006IMG_20190826_161507.jpg', '2019-11-04 08:43:26', '2019-11-04 08:43:26'),
(32, '5.5529407420359975', '95.29799580574036', 'Bank Aceh, Mandiri', 'Yes', 24, 2, 1, 1, '1572857234IMG_20190826_160227.jpg', '2019-11-04 08:47:14', '2019-12-03 13:51:51'),
(33, '5.555654406528971', '95.28458341956139', 'BANK BRI', 'Yes', 21, 2, 1, 1, '1572857390IMG_20190826_160820.jpg', '2019-11-04 08:49:50', '2019-11-04 08:49:50'),
(34, '5.554350300755119', '95.28842836618423', 'BNI', 'Yes', 24, 2, 1, 1, '1572857498IMG_20190826_160534.jpg', '2019-11-04 08:51:38', '2019-11-04 08:51:38'),
(35, '5.5606420', '95.3176500', 'BNI', 'Yes', 69, 7, 1, 1, 'edit_atm1572873849IMG_20190826_180501.jpg', '2019-11-04 13:16:42', '2019-11-04 13:24:09'),
(36, '5.525710', '95.319684', 'BANK BRI', 'Yes', 40, 4, 1, 1, '1572875134IMG_20190826_173025.jpg', '2019-11-04 13:45:34', '2019-11-04 13:45:34'),
(37, '5.531174', '95.317708', 'Mandiri', 'Yes', 42, 4, 1, 1, '1572875220IMG_20190826_173403.jpg', '2019-11-04 13:47:00', '2019-12-03 13:51:38'),
(38, '5.5289950', '95.2955880', 'BCA', 'Yes', 78, 8, 1, 1, '1572893032IMG_20190826_163732.jpg', '2019-11-04 18:43:52', '2019-11-04 19:01:28'),
(39, '5.5283360', '95.2937060', 'BNI', 'Yes', 76, 8, 1, 1, '1572893128IMG_20190826_163318.jpg', '2019-11-04 18:45:28', '2019-11-04 18:45:28'),
(40, '5.5328370', '95.2900370', 'BNI', 'Yes', 76, 8, 1, 1, '1572893209IMG_20190826_162654.jpg', '2019-11-04 18:46:49', '2019-11-04 18:59:44'),
(41, '5.5570200', '95.3305200', 'BNI', 'Yes', 50, 5, 1, 1, '1572893789IMG_20190826_184314.jpg', '2019-11-04 18:56:29', '2019-11-04 18:57:58'),
(42, '5.5576660', '95.3301770', 'BANK BRI', 'Yes', 50, 5, 1, 1, '1572894355IMG_20190826_184247.jpg', '2019-11-04 19:05:55', '2019-11-04 19:05:55'),
(43, '5.5583170', '95.3285490', 'BCA', 'Yes', 48, 5, 1, 1, '1572894463IMG_20190826_184109.jpg', '2019-11-04 19:07:43', '2019-11-04 19:07:43'),
(44, '5.5584590', '95.3282840', 'Mandiri', 'Yes', 48, 5, 1, 1, '1572894606IMG_20190826_184037.jpg', '2019-11-04 19:10:06', '2019-12-03 13:51:28'),
(45, '5.5616770', '95.3212770', 'Mandiri', 'Yes', 49, 5, 1, 1, '1572894921IMG_20190826_181003.jpg', '2019-11-04 19:15:21', '2019-12-03 13:50:34'),
(46, '5.5474860', '95.3159000', 'BNI, Mandiri', 'Yes', 7, 1, 1, 1, '1574057528IMG_20191114_150900.jpg', '2019-11-18 06:12:08', '2019-12-03 13:51:11'),
(47, '5.5469530', '95.3301180', 'BNI', 'Yes', 30, 3, 1, 1, '1574057663IMG_20191114_144922.jpg', '2019-11-18 06:14:23', '2019-11-18 06:14:23'),
(48, '5.5521040', '95.3483100', 'BANK BRI, BNI', 'Yes', 86, 9, 1, 1, '1574057802IMG_20191113_165556.jpg', '2019-11-18 06:16:42', '2019-12-03 13:50:12'),
(49, '5.5442170', '95.3351440', 'BANK BRI', 'Yes', 31, 3, 1, 1, '1574057920IMG_20191105_163232.jpg', '2019-11-18 06:18:40', '2019-11-18 06:18:40'),
(50, '5.5441520', '95.3353660', 'BNI Syariah', 'Yes', 31, 3, 1, 1, '1574058027IMG_20191105_163131.jpg', '2019-11-18 06:20:27', '2019-11-18 06:20:27'),
(51, '5.5370800', '95.3329080', 'BNI', 'Yes', 29, 3, 1, 1, '1574058295IMG_20191105_162754.jpg', '2019-11-18 06:24:55', '2019-11-18 06:24:55'),
(52, '5.5370740', '95.3329000', 'BANK BRI', 'Yes', 29, 3, 1, 1, '1574058378IMG_20191105_162750.jpg', '2019-11-18 06:26:18', '2019-11-18 06:26:18'),
(53, '5.5369390', '95.3325360', 'Bank Aceh', 'Yes', 29, 3, 1, 1, '1574058507IMG_20191105_162647.jpg', '2019-11-18 06:28:27', '2019-11-18 06:28:27'),
(54, '5.5349160', '95.3305910', 'BANK BRI, Mandiri', 'Yes', 29, 3, 1, 1, '1574058652IMG_20191105_162428.jpg', '2019-11-18 06:30:52', '2019-12-03 13:49:46'),
(55, '5.5301810', '95.3303530', 'Mandiri', 'Yes', 29, 3, 1, 1, '1574058771IMG_20191105_161136.jpg', '2019-11-18 06:32:51', '2019-12-03 13:50:56'),
(56, '5.5310490', '95.3302890', 'BNI', 'Yes', 29, 3, 1, 1, '1574058916IMG_20191105_161016.jpg', '2019-11-18 06:35:16', '2019-11-18 06:35:16'),
(57, '5.5289590', '95.3305970', 'Bank Aceh,Bank BRI', 'Yes', 27, 3, 1, 1, '1574059000IMG_20191105_160848.jpg', '2019-11-18 06:36:40', '2019-11-18 06:36:40'),
(58, '5.5295440', '95.3302200', 'BNI', 'Yes', 41, 4, 1, 1, '1574059068IMG_20191105_160742.jpg', '2019-11-18 06:37:48', '2019-11-18 06:37:48'),
(59, '5.5513030', '95.3451720', 'Bank Aceh, BNI, Mandiri syariah', 'Yes', 85, 9, 1, 1, '1574059241IMG_20191105_154958.jpg', '2019-11-18 06:40:41', '2019-12-03 13:49:30'),
(60, '5.5590800', '95.3440600', 'BNI', 'Yes', 90, 9, 1, 1, '1574059457IMG_20191105_154533.jpg', '2019-11-18 06:44:17', '2019-11-18 06:44:17'),
(61, '5.5784590', '95.3515870', 'BNI', 'Yes', 59, 6, 1, 1, '1574059518IMG_20191105_154110.jpg', '2019-11-18 06:45:18', '2019-11-18 06:45:18'),
(62, '5.5768390', '95.3552240', 'Bank Aceh, Mandiri, BCA', 'Yes', 59, 6, 1, 1, '1574059650IMG_20191105_153749.jpg', '2019-11-18 06:47:30', '2019-12-03 13:48:55'),
(63, '5.5659570', '95.3502060', 'BANK BRI', 'Yes', 58, 6, 1, 1, '1574059752IMG_20191105_153210.jpg', '2019-11-18 06:49:12', '2019-11-18 06:49:12'),
(64, '5.5559280', '95.3440230', 'BCA, Mandiri', 'Yes', 90, 9, 1, 1, '1574059871IMG_20191105_152542.jpg', '2019-11-18 06:51:11', '2019-12-03 13:48:33'),
(65, '5.5533360', '95.3407950', 'BNI(Y)*9, Mandiri, Bank BRI', 'Yes', 90, 9, 1, 1, '1574059947IMG_20191105_152306.jpg', '2019-11-18 06:52:27', '2020-01-10 13:13:09'),
(66, '5.5534600', '95.3368110', 'BNI', 'Yes', 90, 9, 1, 1, '1574059989IMG_20191105_152057.jpg', '2019-11-18 06:53:09', '2019-11-18 06:53:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `desa_id` int(11) NOT NULL,
  `id_kec` int(11) DEFAULT NULL,
  `id_kab` int(11) DEFAULT NULL,
  `id_prov` int(11) DEFAULT NULL,
  `desa_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`desa_id`, `id_kec`, `id_kab`, `id_prov`, `desa_nama`) VALUES
(1, 1, 1, 1, 'Ateuk Jawo'),
(2, 1, 1, 1, 'Ateuk Deah Tanoh'),
(3, 1, 1, 1, 'Ateuk Pahlawan'),
(4, 1, 1, 1, 'Ateuk Munjeng'),
(5, 1, 1, 1, 'Neusu Aceh'),
(6, 1, 1, 1, 'Seutui'),
(7, 1, 1, 1, 'Sukaramai'),
(8, 1, 1, 1, 'Neusu Jaya'),
(9, 1, 1, 1, 'Peuniti'),
(10, 1, 1, 1, 'Kampung Baru'),
(11, 2, 1, 1, 'Surien'),
(12, 2, 1, 1, 'Aso Nanggroe'),
(13, 2, 1, 1, 'Gampong Blang'),
(14, 2, 1, 1, 'Lamjabat'),
(15, 2, 1, 1, 'Gampong Baro'),
(16, 2, 1, 1, 'Punge Jurong'),
(17, 2, 1, 1, 'Lampaseh Aceh'),
(18, 2, 1, 1, 'Punge Ujong'),
(19, 2, 1, 1, 'Cot Lamkeuweuh'),
(20, 2, 1, 1, 'Gampong Pie'),
(21, 2, 1, 1, 'Ulee Lheue'),
(22, 2, 1, 1, 'Deah Glumpang'),
(23, 2, 1, 1, 'Lambung'),
(24, 2, 1, 1, 'Blang Oi'),
(25, 2, 1, 1, 'Alue Deah Teungoh'),
(26, 2, 1, 1, 'Deah Baro'),
(27, 3, 1, 1, 'Lamdom'),
(28, 3, 1, 1, 'Cot Masjid'),
(29, 3, 1, 1, 'Batoh'),
(30, 3, 1, 1, 'Lueng Bata'),
(31, 3, 1, 1, 'Blang Cut'),
(32, 3, 1, 1, 'Lampaloh'),
(33, 3, 1, 1, 'Suka Damai'),
(34, 3, 1, 1, 'Panteriek'),
(35, 3, 1, 1, 'Lamseupeung'),
(36, 4, 1, 1, 'Lam Ara'),
(37, 4, 1, 1, 'Lampeuot'),
(38, 4, 1, 1, 'Mibo'),
(39, 4, 1, 1, 'Lhong Cut'),
(40, 4, 1, 1, 'Lhong raya'),
(41, 4, 1, 1, 'Peunyerat'),
(42, 4, 1, 1, 'Lamlagang'),
(43, 4, 1, 1, 'Geuceu Komplek'),
(44, 4, 1, 1, 'Geuceu Inem'),
(45, 4, 1, 1, 'Geuceu Kayee Jato'),
(46, 5, 1, 1, 'Peunayong'),
(47, 5, 1, 1, 'Laksana'),
(48, 5, 1, 1, 'Keuramat'),
(49, 5, 1, 1, 'Kuta Alam'),
(50, 5, 1, 1, 'Beurawe'),
(51, 5, 1, 1, 'Kota Baru'),
(52, 5, 1, 1, 'Bandar baru'),
(53, 5, 1, 1, 'Mulia'),
(54, 5, 1, 1, 'Lampulo'),
(55, 5, 1, 1, 'Lamdingin'),
(56, 5, 1, 1, 'Lambaro Skep'),
(57, 6, 1, 1, 'Ie Maseng Kaye Adang'),
(58, 6, 1, 1, 'Gampong Pineung'),
(59, 6, 1, 1, 'Lamgugob'),
(60, 6, 1, 1, 'Kopelma Darussalam'),
(61, 6, 1, 1, 'Rukoh'),
(62, 6, 1, 1, 'Jeulingke'),
(63, 6, 1, 1, 'Tibang'),
(64, 6, 1, 1, 'Deah raya'),
(65, 6, 1, 1, 'Aleu Naga'),
(66, 6, 1, 1, 'Peurada'),
(67, 7, 1, 1, 'Lampaseh Kota'),
(68, 7, 1, 1, 'Merduati'),
(69, 7, 1, 1, 'Keudah'),
(70, 7, 1, 1, 'Peulanggahan'),
(71, 7, 1, 1, 'Gampong Jawa'),
(72, 7, 1, 1, 'Gampong Pande'),
(73, 8, 1, 1, 'Ulee Pata'),
(74, 8, 1, 1, 'Lamjamee'),
(75, 8, 1, 1, 'Lampoh Daya'),
(76, 8, 1, 1, 'Emperom'),
(77, 8, 1, 1, 'Geuceu Meunara'),
(78, 8, 1, 1, 'Lamteumen Barat'),
(79, 8, 1, 1, 'Lamteumen Timur'),
(80, 8, 1, 1, 'Bitai'),
(81, 8, 1, 1, 'Punge Blang Cut'),
(82, 9, 1, 1, 'Pango Raya'),
(83, 9, 1, 1, 'Pango Deah'),
(84, 9, 1, 1, 'Ilie'),
(85, 9, 1, 1, 'Lamteh'),
(86, 9, 1, 1, 'Lamglumpang'),
(87, 9, 1, 1, 'Ceurih'),
(88, 9, 1, 1, 'Ie Masen Ulee Kareng'),
(89, 9, 1, 1, 'Doi'),
(90, 9, 1, 1, 'Lambhuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kab`
--

CREATE TABLE `kab` (
  `kab_id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL DEFAULT '0',
  `kab_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kab`
--

INSERT INTO `kab` (`kab_id`, `prov_id`, `kab_nama`) VALUES
(1, 1, 'Banda Aceh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kec`
--

CREATE TABLE `kec` (
  `kec_id` int(11) NOT NULL,
  `id_prov` int(11) DEFAULT NULL,
  `id_kab` int(11) DEFAULT NULL,
  `kec_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kec`
--

INSERT INTO `kec` (`kec_id`, `id_prov`, `id_kab`, `kec_nama`) VALUES
(1, 1, 1, 'Baiturrahman'),
(2, 1, 1, 'Meuraxa'),
(3, 1, 1, 'Lueng Bata'),
(4, 1, 1, 'Banda Raya'),
(5, 1, 1, 'Kuta Alam'),
(6, 1, 1, 'Syiah Kuala'),
(7, 1, 1, 'Kuta Raja'),
(8, 1, 1, 'Jaya Baru'),
(9, 1, 1, 'Ulee Kareng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prov`
--

CREATE TABLE `prov` (
  `prov_id` int(11) NOT NULL,
  `prov_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prov`
--

INSERT INTO `prov` (`prov_id`, `prov_nama`) VALUES
(1, 'Aceh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`atm_id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`),
  ADD KEY `id_kec` (`id_kec`);

--
-- Indeks untuk tabel `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`kab_id`);

--
-- Indeks untuk tabel `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`kec_id`);

--
-- Indeks untuk tabel `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`prov_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `atm`
--
ALTER TABLE `atm`
  MODIFY `atm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `desa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `kab`
--
ALTER TABLE `kab`
  MODIFY `kab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kec`
--
ALTER TABLE `kec`
  MODIFY `kec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `prov`
--
ALTER TABLE `prov`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`id_kec`) REFERENCES `kec` (`kec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
