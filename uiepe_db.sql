-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 04:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiepe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_ruolo`
--

CREATE TABLE `u_ruolo` (
  `id_ruolo` int(11) NOT NULL,
  `profilo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_ruolo`
--

INSERT INTO `u_ruolo` (`id_ruolo`, `profilo`) VALUES
(0, 'segretariato');

-- --------------------------------------------------------

--
-- Table structure for table `u_utente`
--

CREATE TABLE `u_utente` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `id_ruolo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_utente`
--

INSERT INTO `u_utente` (`email`, `password`, `nome`, `cognome`, `id_ruolo`) VALUES
('ciao@gmail.com', '1234', 'mario', 'rossi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_ruolo`
--
ALTER TABLE `u_ruolo`
  ADD PRIMARY KEY (`id_ruolo`);

--
-- Indexes for table `u_utente`
--
ALTER TABLE `u_utente`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
