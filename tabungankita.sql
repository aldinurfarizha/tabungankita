-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 07:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungankita`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(50) NOT NULL,
  `nama` text COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` text COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telepon` text COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `saldo` int(15) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jenis_kelamin`, `alamat`, `telepon`, `kelas`, `saldo`) VALUES
(123009, 'Tukul Arwana', 'Laki-laki', 'Jl. Jakarta no.90 Indonesia', '0892293845', '1B', 5000),
(23455, 'Upin', 'Laki-laki', 'Jl. Malaysia No.54 Malaysia ', '08277361523', '1B', 0),
(1234567, 'Rinaldi', 'Laki-laki', 'Jl. Ciawi No.89 Kuningan Jawabarat', '08180286432', '1B', 0),
(123456, 'Dama Dirgantara', 'Laki-laki', 'Jl. Kadugede No.6 Kuningan Jawabarat', '089770368927', '1B', 0),
(12345, 'Aldi Nurfarizha', 'Laki-laki', 'Jl. Ciaomas 04/05 No.7 Kuningan', '089770378293', '1A', 0),
(982939, 'Ipin', 'Laki-laki', 'Jl. Pegangsaan Timur No.56 Jakarta', '089772934832', '1A', 0),
(545200, 'Tarmidi ', 'Laki-laki', 'Jl. Raya Citangtu No.34 Kuningan', '089763829832', '1A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(50) NOT NULL,
  `id_siswa` text COLLATE latin1_general_ci NOT NULL,
  `setoran` text COLLATE latin1_general_ci NOT NULL,
  `penarikan` text COLLATE latin1_general_ci NOT NULL,
  `saldo` text COLLATE latin1_general_ci NOT NULL,
  `tgl` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `id_siswa`, `setoran`, `penarikan`, `saldo`, `tgl`) VALUES
(100015, '12345', '2000', '', '2000', '2019-12-29'),
(100014, '123456', '1000', '', '8000', '2019-12-29'),
(100013, '123456', '4000', '', '7000', '2019-12-29'),
(100012, '123456', '3000', '', '3000', '2019-12-29'),
(100011, '1234567', '1000', '', '6000', '2019-12-29'),
(100010, '1234567', '5000', '', '5000', '2019-12-29'),
(100016, '12345', '1500', '', '3500', '2019-12-29'),
(100017, '12345', '3000', '', '6500', '2019-12-29'),
(100018, '1234567', '', '1000', '5000', '2019-12-29'),
(100019, '123009', '30000', '', '30000', '2020-01-14'),
(100020, '123009', '2000', '', '32000', '2020-01-14'),
(100021, '123009', '', '2000', '30000', '2020-01-14'),
(100022, '123009', '', '2000', '28000', '2020-01-14'),
(100023, '123009', '', '1000', '27000', '2020-01-15'),
(100024, '123009', '', '20000', '7000', '2020-01-16'),
(100025, '123009', '', '2000', '5000', '2020-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'bendahara', '8cf55b8ae912bbfec560427ce8a2f296bf3ac972', 'bendahara', 1),
(10, 'budi', '83161a62f22277c65a6cdb7ebc314f218c376c63', '1A', 2),
(11, 'rudi', '1f53d03209ef868737b2f546e002198b2b4875ac', '1B', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789522157;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100026;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
