-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtest`
--

CREATE TABLE `dtest` (
  `id_dtest` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sm1` int(11) NOT NULL,
  `sm2` int(11) NOT NULL,
  `sm3` int(11) NOT NULL,
  `sm4` int(11) NOT NULL,
  `sm5` int(11) NOT NULL,
  `sm6` int(11) NOT NULL,
  `bindo` int(11) NOT NULL,
  `bing` int(11) NOT NULL,
  `mat` int(11) NOT NULL,
  `komp` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtest`
--

INSERT INTO `dtest` (`id_dtest`, `nama`, `sm1`, `sm2`, `sm3`, `sm4`, `sm5`, `sm6`, `bindo`, `bing`, `mat`, `komp`, `jurusan`, `hasil`) VALUES
(1, 'fauzan nugraha', 67, 80, 90, 97, 87, 76, 99, 87, 96, 93, 6, 'Sistem Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `dtraining`
--

CREATE TABLE `dtraining` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sm1` int(3) NOT NULL,
  `sm2` int(3) NOT NULL,
  `sm3` int(3) NOT NULL,
  `sm4` int(3) NOT NULL,
  `sm5` int(3) NOT NULL,
  `sm6` int(3) NOT NULL,
  `bindo` int(3) NOT NULL,
  `bing` int(3) NOT NULL,
  `mat` int(3) NOT NULL,
  `komp` int(3) NOT NULL,
  `jurusan` int(3) NOT NULL,
  `hasil` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtraining`
--

INSERT INTO `dtraining` (`id`, `nama`, `sm1`, `sm2`, `sm3`, `sm4`, `sm5`, `sm6`, `bindo`, `bing`, `mat`, `komp`, `jurusan`, `hasil`) VALUES
(1, 'ADE YUSUP PERMANA', 84, 85, 81, 83, 85, 86, 80, 86, 79, 80, 1, 1),
(2, 'IMAM MULHAKIM', 84, 85, 81, 83, 85, 86, 80, 86, 79, 98, 1, 6),
(3, 'AAS ASIAH', 90, 80, 76, 78, 90, 85, 78, 90, 67, 90, 2, 2),
(4, ' GALANG HERDYAN PERMANA', 78, 89, 80, 98, 78, 81, 91, 92, 80, 85, 2, 2),
(5, 'GALANG SETIAWAN', 80, 80, 75, 90, 83, 96, 80, 81, 75, 93, 2, 1),
(6, 'GALIH ADITYA DC', 87, 80, 91, 80, 74, 83, 85, 91, 86, 90, 1, 1),
(7, 'REZAL WAHYU RAMADHAN', 80, 81, 78, 70, 97, 83, 79, 85, 97, 88, 1, 1),
(8, 'INDRA NUGRAHA', 87, 97, 86, 70, 83, 93, 75, 83, 79, 97, 2, 2),
(9, 'DENI SETIAWAN', 87, 93, 78, 93, 88, 84, 83, 89, 65, 95, 1, 1),
(10, 'NUR IRAMADHAN', 78, 85, 90, 71, 88, 73, 81, 84, 74, 83, 2, 6),
(11, 'EDGARDO HAMDOLA', 87, 77, 93, 94, 90, 78, 98, 78, 67, 90, 1, 1),
(12, 'DENNIS INDRA MAULANA', 88, 76, 90, 87, 84, 92, 90, 87, 76, 92, 1, 6),
(13, 'R RAFI SALMAN HARSTA', 87, 93, 88, 78, 90, 94, 76, 88, 85, 79, 2, 2),
(14, 'ANDIMALA SALOMO', 80, 98, 78, 88, 89, 88, 90, 87, 87, 89, 1, 2),
(15, 'RANNY ASTI RAHAYU', 89, 75, 84, 82, 69, 86, 84, 82, 74, 91, 1, 1),
(16, 'BACHTIAR RIVAIE', 68, 79, 63, 62, 79, 64, 63, 85, 85, 97, 2, 6),
(17, 'KRISNA RAHARJO SASMITA', 76, 79, 91, 91, 62, 85, 66, 88, 68, 71, 1, 2),
(18, 'Immanuel Sitompul', 70, 63, 80, 83, 79, 62, 66, 94, 97, 71, 1, 2),
(19, 'SURATMAN', 66, 98, 60, 64, 71, 77, 93, 93, 69, 74, 1, 2),
(20, 'SURYA TRI ISKANDAR', 97, 61, 100, 96, 83, 84, 94, 85, 90, 72, 1, 2),
(21, 'TAMARA NAINGGOLAN', 81, 78, 94, 66, 73, 68, 98, 86, 100, 83, 1, 2),
(22, 'SRININGSIH', 85, 65, 92, 100, 88, 83, 99, 61, 74, 77, 1, 2),
(23, 'CAHAYA UTAMI YUWONO', 61, 79, 61, 96, 64, 62, 98, 96, 92, 65, 1, 2),
(24, 'MELATI EKO MULJANA', 84, 73, 73, 88, 73, 65, 100, 79, 84, 76, 1, 2),
(25, 'DEBORAH BANUAREA', 78, 77, 96, 89, 70, 86, 98, 79, 71, 76, 1, 2),
(26, 'SAUL SINAGA', 72, 67, 86, 88, 94, 99, 72, 94, 74, 98, 1, 1),
(27, 'EKA BULAN SUSMAN', 96, 97, 60, 66, 62, 97, 69, 100, 90, 69, 1, 1),
(28, 'TRI LANNY RACHMAN', 64, 84, 99, 68, 67, 64, 89, 75, 77, 80, 1, 1),
(29, 'SUSANTI', 74, 72, 61, 69, 100, 94, 73, 75, 77, 97, 1, 1),
(30, 'ANGELA PELAWI', 97, 65, 86, 66, 84, 89, 68, 79, 100, 76, 1, 6),
(31, 'DYATMIYATI', 93, 92, 73, 100, 70, 65, 84, 62, 98, 75, 1, 6),
(32, 'JOEL SARAAN', 84, 78, 68, 80, 75, 83, 100, 78, 66, 86, 1, 6),
(33, 'SUDIROPROJO', 91, 75, 60, 91, 62, 83, 90, 65, 81, 63, 1, 6),
(34, 'BUDI', 83, 89, 80, 82, 75, 89, 81, 70, 60, 86, 1, 6),
(35, 'ANNA SOLIA', 89, 72, 64, 81, 69, 84, 74, 86, 98, 88, 1, 6),
(36, 'KUSNADI LIAN', 87, 71, 76, 82, 71, 60, 68, 69, 84, 96, 1, 6),
(37, 'ARI TRI SETIAWAN', 93, 100, 72, 90, 78, 60, 92, 77, 75, 84, 1, 6),
(38, 'DJAJA SLAMET DHARMAWIJAYA', 78, 88, 73, 98, 66, 94, 83, 76, 81, 96, 1, 6),
(39, 'BAMBANG', 93, 96, 69, 70, 72, 90, 88, 72, 99, 61, 2, 1),
(40, 'EDGAR TAHITOE', 83, 69, 89, 92, 77, 89, 87, 77, 68, 97, 2, 2),
(41, 'PURNAMA SUSANTO CHANDRA', 64, 90, 81, 78, 76, 89, 77, 65, 90, 84, 2, 2),
(42, 'SUDIROPROJO', 90, 75, 81, 70, 86, 76, 65, 89, 87, 87, 2, 2),
(43, 'SUTANTO XIANLIANG', 79, 80, 66, 80, 65, 96, 98, 70, 65, 90, 2, 2),
(44, 'JONATHAN GERSANG', 94, 76, 71, 95, 84, 97, 64, 74, 79, 73, 2, 2),
(45, 'GUNTUR', 86, 99, 85, 78, 63, 97, 88, 83, 73, 76, 2, 1),
(46, 'HARTANTO XIAOWEN', 99, 85, 98, 88, 87, 93, 69, 93, 60, 79, 2, 1),
(47, 'RAMZI TRIO', 88, 71, 85, 96, 90, 90, 86, 69, 80, 75, 2, 1),
(48, 'DIANA NASUTION', 88, 65, 84, 76, 82, 63, 65, 64, 75, 84, 2, 1),
(49, 'DEVI SHINTA DARMALI', 72, 76, 86, 67, 63, 62, 86, 89, 94, 82, 2, 1),
(50, 'ADE RIDWAN JOHAN', 83, 80, 92, 73, 88, 76, 83, 100, 73, 94, 2, 1),
(51, 'HANDOYO TINGZHE', 98, 87, 78, 65, 75, 90, 66, 83, 93, 64, 2, 1),
(52, 'ADAM HUTASOIT', 100, 81, 64, 75, 91, 80, 86, 67, 92, 69, 2, 1),
(53, 'ABRAHAM HARAHAP', 67, 95, 95, 75, 83, 72, 62, 73, 63, 83, 2, 1),
(54, 'PURNAMA', 64, 81, 90, 63, 73, 69, 95, 63, 92, 91, 2, 6),
(55, 'WIBAWA BUANA SUSANTO', 66, 73, 94, 96, 62, 93, 94, 76, 82, 99, 2, 6),
(56, 'RATU MELATI GUNARDI', 79, 63, 80, 87, 93, 64, 83, 73, 89, 73, 2, 6),
(57, 'YENNY LEONY PRANATA', 93, 84, 100, 73, 70, 79, 63, 73, 82, 83, 2, 6),
(58, 'SAPPHIRA BANSIN', 90, 88, 98, 62, 76, 80, 96, 69, 76, 63, 2, 6),
(59, 'KIMBERLY TELEHALA', 69, 99, 77, 84, 72, 95, 69, 85, 95, 93, 2, 6),
(60, 'THOMAS SINAMBELA', 76, 92, 94, 90, 89, 74, 100, 79, 85, 79, 2, 6),
(61, 'CHANDRA YONGNIAN', 76, 81, 89, 80, 98, 70, 73, 84, 89, 72, 2, 6),
(62, 'YONGKI', 70, 90, 78, 85, 76, 72, 82, 95, 74, 82, 1, 7),
(63, 'HAMDANI KRISNA', 63, 72, 97, 65, 91, 78, 71, 84, 95, 98, 1, 7),
(64, 'EKO', 92, 78, 79, 86, 71, 92, 97, 81, 71, 95, 1, 7),
(65, 'LYDIA GAJA', 96, 77, 70, 74, 94, 91, 67, 85, 79, 97, 1, 7),
(66, 'DINAH SIPANGGANG', 60, 70, 65, 93, 64, 61, 97, 83, 91, 90, 1, 7),
(67, 'PURWODARMINTO', 73, 88, 90, 97, 61, 98, 65, 67, 82, 70, 1, 7),
(68, 'DAAN ELIA MOGOT', 97, 96, 74, 60, 83, 92, 73, 73, 75, 69, 1, 7),
(69, 'DADANG HIDAYAT', 97, 76, 68, 79, 73, 67, 96, 78, 64, 98, 1, 7),
(70, 'DADIK AKASA', 89, 83, 78, 72, 81, 75, 99, 80, 97, 88, 1, 7),
(71, 'DAHLIA', 83, 81, 85, 81, 92, 95, 80, 79, 98, 100, 1, 8),
(72, 'DALINO PHIHIMYL', 61, 83, 80, 76, 99, 65, 66, 87, 92, 61, 1, 8),
(73, 'KABIL AKHBAR', 69, 63, 72, 73, 73, 68, 64, 62, 98, 71, 1, 8),
(74, 'KADEK ARI SUPAWAN', 95, 84, 72, 79, 76, 83, 89, 74, 75, 68, 1, 8),
(75, 'M A MUCHTAR LESMANA', 97, 70, 82, 92, 75, 98, 94, 61, 62, 66, 1, 8),
(76, 'M ANDRIANSAH P', 62, 76, 63, 63, 78, 72, 64, 65, 83, 86, 1, 8),
(77, 'M ARIVIANTO N A', 67, 84, 61, 88, 85, 77, 91, 64, 94, 62, 1, 8),
(78, 'ACHMAD RIZKI ARI JAMIE', 85, 74, 70, 82, 71, 63, 78, 86, 75, 76, 1, 8),
(79, 'ACHMAD RUSDI', 73, 77, 73, 60, 88, 64, 76, 94, 60, 67, 1, 8),
(80, 'R ARDI PRASADYA', 84, 90, 79, 85, 70, 86, 63, 68, 82, 90, 1, 8),
(81, 'R.M SURYADININGRAT', 74, 86, 80, 75, 88, 86, 99, 87, 80, 95, 1, 8),
(82, 'R.M SURYADININGRAT', 65, 66, 73, 67, 72, 88, 78, 69, 94, 61, 1, 8),
(83, 'HAADI ERNANDA', 72, 61, 63, 96, 80, 62, 84, 61, 77, 86, 1, 6),
(84, 'HAAFIZ BESTIAR', 88, 85, 70, 85, 93, 79, 67, 87, 91, 83, 1, 7),
(85, 'HAARYS SUHARYADI', 68, 68, 68, 81, 66, 69, 95, 83, 81, 95, 1, 9),
(86, '  HAARYS SUHARYADI', 80, 82, 94, 64, 79, 78, 84, 72, 89, 78, 1, 9),
(87, 'HABIB HAMID', 63, 97, 99, 60, 63, 85, 71, 75, 97, 76, 1, 9),
(88, 'HADI KUSUMA', 95, 74, 89, 100, 67, 67, 99, 92, 61, 99, 1, 9),
(89, 'PACSY PANDIATAMA MUDI', 71, 96, 99, 62, 77, 91, 71, 77, 94, 72, 1, 9),
(90, 'PAJAR RIFAI', 88, 70, 91, 65, 73, 97, 93, 72, 86, 97, 1, 9),
(91, 'PAMELA AGATHA', 82, 96, 66, 84, 95, 97, 98, 65, 80, 61, 1, 9),
(92, 'PALUPI TAWANG KIRANA', 89, 80, 95, 86, 65, 92, 69, 95, 89, 60, 1, 9),
(93, 'ZAENAL ABIDIN', 82, 74, 72, 70, 60, 62, 75, 64, 61, 64, 1, 9),
(94, 'ZACKY MUGHNI MUBAROK', 97, 62, 70, 83, 71, 92, 61, 81, 60, 73, 2, 7),
(95, 'A\'AT ATIKAH', 74, 71, 71, 68, 71, 87, 61, 92, 99, 83, 2, 7),
(96, 'FABIAN RIO BAYU PRATAMA', 69, 91, 89, 90, 93, 80, 85, 96, 83, 60, 2, 7),
(97, 'FACHRI ARJUNA', 69, 70, 78, 100, 86, 63, 69, 87, 76, 99, 2, 7),
(98, 'FACHRISKI KURNIAWAN', 95, 94, 89, 61, 92, 92, 78, 94, 87, 75, 2, 7),
(99, 'HADI OBY PUTRA JAYA', 67, 71, 65, 72, 87, 94, 88, 91, 65, 77, 2, 8),
(100, 'HADI SULAIMAN TARIHORAN	HTT', 100, 93, 75, 65, 71, 66, 77, 69, 92, 70, 2, 8),
(101, 'ZAISCO WANGSA DWI KUNCORO', 89, 73, 60, 73, 79, 79, 89, 90, 72, 65, 2, 8),
(102, 'ZAKIAH AINI', 63, 89, 69, 64, 77, 75, 62, 67, 66, 71, 2, 8),
(103, 'M NAZIP', 83, 64, 62, 77, 97, 64, 83, 92, 88, 88, 2, 8),
(104, 'UBAIDI MUKHLIS', 96, 88, 80, 88, 74, 87, 64, 88, 82, 79, 2, 8),
(105, 'UBAY FADILLAH', 97, 86, 97, 86, 65, 94, 91, 79, 93, 77, 2, 8),
(106, 'UGAI PRIBADI BAIHAQI', 64, 72, 70, 92, 72, 96, 72, 100, 83, 71, 2, 8),
(107, 'I GEDE TIAS EKA BUANA', 96, 60, 67, 89, 76, 82, 78, 86, 62, 86, 2, 8),
(108, 'ZAKY MUHAMMAD', 74, 100, 67, 85, 77, 73, 86, 98, 76, 94, 2, 9),
(109, 'ABBIE SYAHRIN', 98, 61, 98, 87, 100, 61, 61, 90, 84, 90, 2, 9),
(110, 'ABBAS ABDUL GHAFFAR', 61, 72, 94, 60, 94, 68, 79, 73, 82, 83, 2, 9),
(111, 'FACHRUL RIYAN PERMANA', 62, 61, 77, 88, 62, 69, 66, 92, 86, 77, 2, 9),
(112, 'M NURUL JIHAD A', 88, 99, 74, 85, 77, 73, 96, 64, 75, 97, 2, 9),
(113, 'UJANG AERONI', 94, 92, 69, 69, 81, 91, 73, 80, 79, 62, 2, 9),
(114, 'I GUSTI AYU AGUNG SINTA DEWI', 80, 72, 94, 92, 73, 73, 77, 74, 71, 74, 2, 9),
(115, 'ZALITA NADYA UTAMI', 61, 94, 72, 100, 72, 85, 90, 82, 69, 90, 2, 9),
(116, 'ABALJERIND', 79, 91, 96, 89, 87, 73, 95, 81, 97, 61, 2, 9),
(117, 'ABBIE KUS DWI YANDA', 60, 93, 62, 64, 78, 85, 79, 68, 68, 90, 2, 9),
(118, 'FACHRONY HUTOMO PUTRA', 78, 78, 72, 86, 73, 87, 94, 66, 61, 75, 5, 1),
(119, 'FACHRUL IRFAN PAHLEVI', 76, 64, 75, 77, 73, 82, 73, 66, 64, 82, 5, 1),
(120, 'HADIAN FADLI', 78, 82, 95, 73, 84, 69, 62, 82, 73, 95, 5, 1),
(121, 'UCOK PASARIBU', 90, 66, 76, 77, 96, 86, 69, 80, 73, 70, 5, 1),
(122, 'I GEDE WIRASENA', 76, 90, 73, 68, 98, 64, 62, 90, 91, 90, 5, 1),
(123, 'ABADI SANTOSO', 81, 90, 96, 98, 82, 76, 80, 61, 78, 83, 5, 2),
(124, 'ABAS LESSY', 73, 93, 72, 69, 89, 92, 94, 82, 67, 97, 5, 2),
(125, 'ABBIE KUS DWI YANDA', 94, 94, 74, 93, 97, 64, 80, 70, 63, 82, 5, 2),
(126, 'ABBIE KUSDWIYANDA', 98, 80, 83, 94, 79, 93, 86, 69, 74, 93, 5, 2),
(127, 'UJANG AERONI', 90, 83, 76, 77, 80, 97, 92, 94, 71, 68, 5, 2),
(128, 'UKE DAHLIA', 61, 77, 92, 90, 60, 79, 77, 82, 82, 79, 5, 1),
(129, 'HADIR ADI GUMILAR', 91, 67, 81, 83, 62, 65, 64, 70, 74, 77, 5, 6),
(130, 'HADITYA', 77, 92, 60, 99, 64, 66, 71, 92, 79, 67, 5, 6),
(131, 'HADIYANTO', 69, 91, 84, 65, 91, 99, 87, 63, 65, 74, 5, 6),
(132, 'ZHARFAN DHAIFULLAH', 81, 91, 82, 89, 79, 89, 77, 60, 93, 91, 5, 6),
(133, 'ZETRY MULYADI', 91, 81, 71, 78, 69, 62, 60, 72, 68, 82, 5, 6),
(134, 'ZIA KHALIDAH', 68, 64, 87, 93, 76, 92, 100, 80, 86, 81, 5, 7),
(135, 'FACHRUL REZA', 86, 70, 71, 61, 60, 67, 65, 70, 93, 86, 5, 7),
(136, 'ABADI SANTOSO', 79, 61, 85, 100, 61, 60, 62, 76, 75, 63, 5, 7),
(137, 'ABANG SELAMAT', 97, 85, 66, 87, 74, 61, 89, 89, 73, 66, 5, 7),
(138, 'ABDAN RASYID', 91, 77, 89, 81, 73, 66, 78, 76, 73, 65, 5, 7),
(139, 'ABDI PRATAMA PUTRA', 64, 71, 80, 73, 92, 64, 94, 73, 82, 68, 5, 8),
(140, 'ABDILAH	', 79, 66, 94, 98, 80, 99, 73, 90, 69, 67, 5, 8),
(141, 'ABDILAH KHOERUL PIKRI', 100, 94, 77, 86, 80, 95, 60, 95, 92, 75, 5, 8),
(142, 'BACHARUDIN YUDHA S', 74, 87, 74, 68, 77, 60, 85, 91, 77, 92, 5, 8),
(143, 'BACHRUN ARIF MUNANDAR', 84, 99, 66, 68, 74, 83, 83, 69, 85, 67, 5, 8),
(144, 'HADZAN IMAMI', 82, 71, 89, 83, 74, 74, 95, 99, 70, 78, 5, 8),
(145, 'HAEKAL', 63, 81, 76, 80, 77, 92, 68, 80, 92, 68, 5, 8),
(146, 'M NUR AFRIYADI', 79, 87, 84, 100, 85, 72, 95, 81, 96, 100, 5, 8),
(147, 'UMAR', 62, 83, 72, 81, 80, 61, 88, 96, 87, 75, 5, 8),
(148, 'UMAR ABDILLAH', 65, 90, 61, 81, 80, 61, 92, 85, 87, 92, 5, 8),
(149, 'UMAIROH', 62, 68, 92, 82, 88, 62, 79, 83, 88, 90, 5, 8),
(150, 'I KADEK ARIYASA', 66, 77, 76, 78, 61, 89, 85, 72, 86, 72, 5, 8),
(151, 'ZIKRI FAJAR PRAWIRA', 74, 85, 83, 78, 90, 93, 80, 99, 94, 86, 5, 8),
(152, 'ZORAYA AIDA FITRI', 67, 81, 80, 71, 99, 69, 87, 86, 76, 60, 5, 9),
(153, 'ZUHDI PRATAMA', 76, 72, 96, 72, 65, 68, 99, 98, 64, 81, 5, 9),
(154, 'ZUL HELMI', 85, 72, 97, 88, 99, 89, 90, 98, 78, 76, 5, 9),
(155, 'ABDU SULAIMAN', 81, 90, 75, 79, 71, 91, 65, 88, 89, 98, 5, 9),
(156, 'ABDUL AZIZ', 76, 97, 76, 69, 86, 99, 88, 93, 72, 91, 5, 9),
(157, 'FACHRIZAL SIDDIQ', 64, 65, 80, 97, 82, 73, 60, 81, 97, 72, 5, 9),
(158, 'FACHRUDIN ADI SUSILO', 84, 88, 81, 76, 61, 89, 79, 80, 71, 67, 5, 9),
(159, 'HAFIDH ADINEGORO', 92, 79, 70, 82, 76, 93, 86, 71, 83, 98, 5, 9),
(160, 'HAFIDZ AL AMMAR', 90, 84, 94, 92, 76, 60, 87, 80, 88, 93, 5, 9),
(161, 'M RANGGA F', 79, 82, 84, 83, 92, 72, 62, 84, 94, 77, 5, 9),
(162, 'M RIO RIZKY SAPUTRA', 63, 79, 93, 81, 100, 72, 74, 84, 93, 80, 6, 1),
(163, 'QADI ABDUSSALAM', 79, 92, 83, 73, 91, 84, 77, 77, 84, 78, 6, 2),
(164, 'AMARUL AKHYAR', 71, 69, 96, 66, 72, 80, 68, 82, 91, 95, 6, 2),
(165, 'I GEDE SWASTIKA', 98, 60, 98, 73, 95, 65, 97, 94, 90, 66, 6, 2),
(166, 'ABDUL FAQIH', 95, 78, 70, 94, 72, 79, 93, 84, 92, 96, 6, 1),
(167, 'ABDUL GANI', 92, 77, 99, 62, 77, 80, 75, 72, 76, 68, 6, 1),
(168, 'ABDUL GOPUR', 93, 70, 84, 79, 97, 85, 84, 78, 73, 76, 6, 1),
(169, 'ABDUL RAFFIQURAHMAN', 63, 94, 76, 90, 87, 94, 83, 82, 63, 93, 6, 1),
(170, 'BABAR PRAMUDYA', 95, 76, 66, 91, 92, 86, 95, 67, 89, 98, 6, 1),
(171, 'HAFIDH NURHIDAYAT', 90, 77, 91, 73, 72, 60, 89, 88, 76, 69, 6, 6),
(172, 'ULYA UMRI', 83, 83, 78, 98, 69, 87, 61, 86, 82, 85, 6, 6),
(173, 'UMAR', 72, 74, 78, 97, 86, 77, 99, 91, 91, 85, 6, 6),
(174, 'UMAR BUCHOR', 91, 77, 97, 94, 76, 88, 92, 85, 97, 85, 6, 6),
(175, 'I MADE OKKY', 63, 79, 88, 67, 98, 87, 100, 84, 75, 75, 6, 7),
(176, 'QIRMANULLOH', 85, 88, 87, 84, 94, 79, 76, 79, 97, 62, 6, 7),
(177, 'QOHAR ADHI SUDIBYO', 62, 80, 80, 92, 60, 93, 93, 88, 84, 76, 6, 7),
(178, 'OBAY SOLEHUDIN', 74, 92, 72, 63, 60, 90, 82, 84, 92, 99, 6, 7),
(179, 'OCA AYU VITARITA', 63, 86, 73, 94, 81, 70, 90, 72, 74, 73, 6, 7),
(180, 'ABDURRAHMAN', 76, 86, 95, 97, 94, 94, 74, 74, 100, 80, 6, 7),
(181, 'ABDURRAHMAN HARIT', 75, 62, 97, 94, 94, 84, 88, 85, 74, 77, 6, 7),
(182, 'ABED NEGO', 97, 94, 82, 87, 82, 63, 92, 72, 92, 72, 6, 7),
(183, 'ABELA SUBANDA', 76, 64, 88, 83, 66, 96, 96, 82, 75, 75, 6, 7),
(184, 'BACHRIAH FATWA DHINI', 65, 93, 93, 64, 98, 93, 71, 84, 81, 82, 6, 7),
(185, 'BACHTIAR ARI WIBOWO', 86, 77, 84, 72, 85, 78, 62, 89, 81, 80, 6, 7),
(186, 'BAGAS BIMANTARA', 78, 72, 60, 78, 93, 95, 99, 93, 82, 99, 6, 7),
(187, 'BAGAS IRAWAN', 62, 65, 82, 87, 77, 92, 66, 100, 75, 72, 6, 7),
(188, 'HAFID ALIFIANSYAH P', 76, 77, 61, 66, 69, 84, 74, 66, 97, 81, 6, 8),
(189, 'HAFIDZ AMRULLOH', 79, 92, 69, 68, 62, 63, 95, 65, 92, 95, 6, 8),
(190, 'UMAR FATAH', 97, 80, 63, 62, 76, 90, 68, 89, 86, 89, 6, 8),
(191, 'UMI KASUM', 86, 86, 87, 99, 63, 84, 66, 97, 71, 98, 6, 8),
(192, 'IBADARROHMAN', 66, 82, 64, 99, 96, 84, 100, 98, 92, 75, 6, 8),
(193, 'IBENU K.A', 74, 89, 100, 73, 91, 77, 97, 63, 98, 96, 6, 8),
(194, 'QOMARIYAH', 86, 94, 80, 97, 69, 69, 91, 94, 60, 87, 6, 8),
(195, 'OCKY FIRGIAWAN', 70, 84, 73, 63, 61, 95, 94, 63, 93, 72, 6, 8),
(196, 'OCTAVIANA', 75, 81, 76, 94, 64, 98, 72, 61, 95, 84, 6, 8),
(197, 'ODHETA', 65, 66, 90, 91, 78, 79, 72, 71, 73, 74, 6, 9),
(198, 'OEY WULAN SARI', 68, 99, 79, 82, 91, 66, 80, 77, 67, 97, 6, 9),
(199, 'OGI ABDULLAH', 95, 63, 99, 89, 95, 78, 97, 99, 66, 76, 6, 9),
(200, 'ABI PRIBADI', 99, 66, 65, 87, 68, 94, 69, 75, 92, 61, 6, 9),
(201, 'ABI PRIBADI', 71, 98, 89, 79, 60, 89, 64, 73, 95, 63, 6, 9),
(202, 'BAGAS KAWARASAN', 60, 84, 86, 87, 96, 90, 82, 73, 100, 95, 6, 9),
(203, 'HAFIDZAH', 100, 63, 77, 95, 64, 67, 97, 68, 69, 84, 6, 9),
(204, 'OKI NUGRAHA', 71, 76, 100, 77, 69, 66, 89, 84, 78, 85, 6, 9),
(205, 'ZULFADRI', 62, 70, 92, 62, 88, 80, 77, 71, 62, 72, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `jursmk`
--

CREATE TABLE `jursmk` (
  `id_jursmk` int(11) NOT NULL,
  `jurusan_smk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jursmk`
--

INSERT INTO `jursmk` (`id_jursmk`, `jurusan_smk`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer Jaringan'),
(5, 'Teknik Sepeda Motor'),
(6, 'Teknik Elektronika Industri');

-- --------------------------------------------------------

--
-- Table structure for table `juruniv`
--

CREATE TABLE `juruniv` (
  `id_juruniv` int(11) NOT NULL,
  `jurusan_univ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juruniv`
--

INSERT INTO `juruniv` (`id_juruniv`, `jurusan_univ`) VALUES
(1, 'Sistem Informasi'),
(2, 'Teknik Informatika'),
(6, 'Sistem Komputer'),
(7, 'Teknik Elektro'),
(8, 'Teknik Mesin'),
(9, 'Teknik Industri');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `k`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tmp1`
--

CREATE TABLE `tmp1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `distance` float NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp1`
--

INSERT INTO `tmp1` (`id`, `nama`, `distance`, `hasil`) VALUES
(1, 'M RIO RIZKY SAPUTRA', 35.7631, '1'),
(2, 'QADI ABDUSSALAM', 44.1135, '2'),
(3, 'AMARUL AKHYAR', 48.8876, '2'),
(4, 'I GEDE SWASTIKA', 54.8088, '2'),
(5, 'ABDUL FAQIH', 38.7427, '1'),
(6, 'ABDUL GANI', 62.3057, '1'),
(7, 'ABDUL GOPUR', 49.4065, '1'),
(8, 'ABDUL RAFFIQURAHMAN', 46.3789, '1'),
(9, 'BABAR PRAMUDYA', 45.0222, '1'),
(10, 'HAFIDH NURHIDAYAT', 51.7011, '6'),
(11, 'ULYA UMRI', 50.5964, '6'),
(12, 'UMAR', 17.6635, '6'),
(13, 'UMAR BUCHOR', 32.0312, '6'),
(14, 'I MADE OKKY', 44.0227, '7'),
(15, 'QIRMANULLOH', 46.6798, '7'),
(16, 'QOHAR ADHI SUDIBYO', 40.4722, '7'),
(17, 'OBAY SOLEHUDIN', 54.2955, '7'),
(18, 'OCA AYU VITARITA', 40.1497, '7'),
(19, 'ABDURRAHMAN', 38.6523, '7'),
(20, 'ABDURRAHMAN HARIT', 37.7359, '7'),
(21, 'ABED NEGO', 46.744, '7'),
(22, 'ABELA SUBANDA', 46.6583, '7'),
(23, 'BACHRIAH FATWA DHINI', 53.1037, '7'),
(24, 'BACHTIAR ARI WIBOWO', 52.9717, '7'),
(25, 'BAGAS BIMANTARA', 45.9456, '7'),
(26, 'BAGAS IRAWAN', 53.9444, '7'),
(27, 'HAFID ALIFIANSYAH P', 59.0847, '8'),
(28, 'HAFIDZ AMRULLOH', 53.7029, '8'),
(29, 'UMAR FATAH', 65.2074, '8'),
(30, 'UMI KASUM', 53.7494, '8'),
(31, 'IBADARROHMAN', 35.9444, '8'),
(32, 'IBENU K.A', 37.6298, '8'),
(33, 'QOMARIYAH', 49.7494, '8'),
(34, 'OCKY FIRGIAWAN', 59.649, '8'),
(35, 'OCTAVIANA', 52.6308, '8'),
(36, 'ODHETA', 46.9148, '9'),
(37, 'OEY WULAN SARI', 46.2817, '9'),
(38, 'OGI ABDULLAH', 51.2152, '9'),
(39, 'ABI PRIBADI', 68.6586, '9'),
(40, 'ABI PRIBADI', 62.3298, '9'),
(41, 'BAGAS KAWARASAN', 31.0322, '9'),
(42, 'HAFIDZAH', 57.7581, '9'),
(43, 'OKI NUGRAHA', 38.1182, '9'),
(44, 'ZULFADRI', 60.8933, '6');

-- --------------------------------------------------------

--
-- Table structure for table `tmp2`
--

CREATE TABLE `tmp2` (
  `id` int(11) NOT NULL,
  `distance` float NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp2`
--

INSERT INTO `tmp2` (`id`, `distance`, `hasil`) VALUES
(1, 17.6635, '6'),
(2, 31.0322, '9'),
(3, 32.0312, '6'),
(4, 35.7631, '1'),
(5, 35.9444, '8');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lvl` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `hash`, `name`, `email`, `lvl`) VALUES
('admin', '$2y$10$05vELrZcSuCE89xpuuXsD.tAoZ7HMuPhdDlA/nLc43Ft1uWB1wCFi', 'admin', 'admin@admin.com', 1),
('andi', '$2y$10$cp1CU4zWBHh2H3OXH.H/tulfW13IEoRJC5NvgXzjiZHSCsUCCwama', 'andimala salomo', 'andi@gmail.com', 1),
('asd', '$2y$10$6qB0pQhkESBbysRIh2kHkO74uKXtjIlm2i.KmZK5M82e1KkbV.rPW', 'asd', 'asd@a.com', 1),
('qwe', '$2y$10$KsfBeCK0UnvzUWVfNKo7y.NMSRIWG0509kcvSM1Em43E/A3rE0Ilm', 'wqe', 'adeyusup_permana@ymail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtest`
--
ALTER TABLE `dtest`
  ADD PRIMARY KEY (`id_dtest`);

--
-- Indexes for table `dtraining`
--
ALTER TABLE `dtraining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jursmk`
--
ALTER TABLE `jursmk`
  ADD PRIMARY KEY (`id_jursmk`);

--
-- Indexes for table `juruniv`
--
ALTER TABLE `juruniv`
  ADD PRIMARY KEY (`id_juruniv`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp1`
--
ALTER TABLE `tmp1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp2`
--
ALTER TABLE `tmp2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtest`
--
ALTER TABLE `dtest`
  MODIFY `id_dtest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dtraining`
--
ALTER TABLE `dtraining`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `jursmk`
--
ALTER TABLE `jursmk`
  MODIFY `id_jursmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `juruniv`
--
ALTER TABLE `juruniv`
  MODIFY `id_juruniv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tmp1`
--
ALTER TABLE `tmp1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tmp2`
--
ALTER TABLE `tmp2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
