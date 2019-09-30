-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 11:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `Nama` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Jenjang` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `TTL` varchar(100) NOT NULL,
  `PerguruanTinggi` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Hobi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`Nama`, `Jurusan`, `Jenjang`, `JenisKelamin`, `TTL`, `PerguruanTinggi`, `Alamat`, `Pekerjaan`, `Hobi`) VALUES
('Dandhie Vega Pradana', 'Teknik Informatika', 'S1', 'Pria', 'Surabaya/17 Februari 1999', 'UPN Veteran \"Jawa Timur\"', 'Jl. Kebonsari 2A/1 Surabaya', 'Mahasiswa', 'Bermain');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
