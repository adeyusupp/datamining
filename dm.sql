-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2017 at 05:34 AM
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
-- Table structure for table `dtets`
--

CREATE TABLE `dtets` (
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
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `jurusan` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtraining`
--

INSERT INTO `dtraining` (`id`, `nama`, `sm1`, `sm2`, `sm3`, `sm4`, `sm5`, `sm6`, `bindo`, `bing`, `mat`, `komp`, `jurusan`, `hasil`) VALUES
(1, 'ADE YUSUP PERMANA', 84, 85, 81, 83, 85, 86, 80, 86, 79, 80, '1', '1'),
(2, 'IMAM MULHAKIM', 84, 85, 81, 83, 85, 86, 80, 86, 79, 98, '1', '6'),
(3, 'AAS ASIAH', 90, 80, 76, 78, 90, 85, 78, 90, 67, 90, '2', '2'),
(4, ' GALANG HERDYAN PERMANA', 78, 89, 80, 98, 78, 81, 91, 92, 80, 85, '2', '2'),
(5, 'GALANG SETIAWAN', 80, 80, 75, 90, 83, 96, 80, 81, 75, 93, '2', '1'),
(6, 'GALIH ADITYA DC', 87, 80, 91, 80, 74, 83, 85, 91, 86, 90, '1', '1'),
(7, 'REZAL WAHYU RAMADHAN', 80, 81, 78, 70, 97, 83, 79, 85, 97, 88, '1', '1'),
(8, 'INDRA NUGRAHA', 87, 97, 86, 70, 83, 93, 75, 83, 79, 97, '2', '2'),
(9, 'DENI SETIAWAN', 87, 93, 78, 93, 88, 84, 83, 89, 65, 95, '1', '1'),
(10, 'NUR IRAMADHAN', 78, 85, 90, 71, 88, 73, 81, 84, 74, 83, '2', '6'),
(11, 'EDGARDO HAMDOLA', 87, 77, 93, 94, 90, 78, 98, 78, 67, 90, '1', '1'),
(12, 'DENNIS INDRA MAULANA', 88, 76, 90, 87, 84, 92, 90, 87, 76, 92, '1', '6'),
(13, 'R RAFI SALMAN HARSTA', 87, 93, 88, 78, 90, 94, 76, 88, 85, 79, '2', '2'),
(14, 'ANDIMALA SALOMO', 80, 98, 78, 88, 89, 88, 90, 87, 87, 89, '1', '2');

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
(4, 'Akutansi'),
(18, 'adde');

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
(6, 'Sistem Komputer');

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

-- --------------------------------------------------------

--
-- Table structure for table `tmp2`
--

CREATE TABLE `tmp2` (
  `id` int(11) NOT NULL,
  `distance` float NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updat2`
--

CREATE TABLE `updat2` (
  `order_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updat2`
--

INSERT INTO `updat2` (`order_id`, `nama`, `status`) VALUES
(1, 'baju', 1),
(2, 'celana', 1),
(3, 'sabana', 3),
(4, 'kfc', 2);

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
-- Indexes for table `dtets`
--
ALTER TABLE `dtets`
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
-- Indexes for table `updat2`
--
ALTER TABLE `updat2`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtets`
--
ALTER TABLE `dtets`
  MODIFY `id_dtest` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dtraining`
--
ALTER TABLE `dtraining`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jursmk`
--
ALTER TABLE `jursmk`
  MODIFY `id_jursmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `juruniv`
--
ALTER TABLE `juruniv`
  MODIFY `id_juruniv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tmp1`
--
ALTER TABLE `tmp1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp2`
--
ALTER TABLE `tmp2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `updat2`
--
ALTER TABLE `updat2`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
