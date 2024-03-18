-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2024 at 06:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `organisation_id` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `organisation_id`, `usertype`, `created_on`) VALUES
(1, 'admin', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'Evan', 'Reblora', 'Reblora, Evan_CV (1).jpg', '2', 'admin', '2018-05-03'),
(2, 'jahnzylke', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'Jazz', 'Ong', 'jazz.jpg', '1', 'admin', '2023-09-21'),
(4, 'pcjeje', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'Pauline Carmel Joy', 'Eje', 'carmel.jpg', '1', 'admin', '2023-10-06'),
(5, 'droneal', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. KYAW SEIN WIN ', 'TUN', 'Dr_oneal.png', '8', 'user', '2023-10-06'),
(6, 'drrahayu', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. RAHAYU SUKMARIA BINTI HJ ', 'SUKRI', 'profile.jpg', '3', 'user', '2023-10-06'),
(7, 'drferns', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. EDWINO S. ', 'FERNANDO', 'Dr_edwino.png', '1', 'user', '2023-10-06'),
(8, 'drsrey', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. SREY ', 'SUNLEANG', 'profile.jpg', '5', 'user', '2023-10-06'),
(9, 'dratik', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. ATIK ', 'RETNOWATI', 'profile.jpg', '4', 'user', '2023-10-06'),
(10, 'drcai', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. CAI ', 'YIXIONG', 'profile.jpg', '9', 'user', '2023-10-06'),
(11, 'drsengdeuane', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. SENGDEUANE ', 'WAYAKONE', 'profile.jpg', '6', 'user', '2023-10-06'),
(12, 'dthamasak', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. THAMASAK ', 'YEEMIN', 'profile.jpg', '10', 'user', '2023-10-06'),
(13, 'drichard', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. RICHARD CHUNG CHENG ', 'KONG', 'profile.jpg', '7', 'user', '2023-10-06'),
(14, 'drhoang', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'DR. HOANG THI THANH ', 'NHAN', 'profile.jpg', '11', 'user', '2023-10-06'),
(15, 'marlorica', '$2y$10$R/PPWaLKYTJ6r/ZTp/193.0.0pQS4vs8LXbX7jvhhmNqyl5uIExZW', 'Renee', 'Lorica', '', '1', 'admin', '2024-02-27'),
(16, 'pqreblora', '$2y$10$21ewTr5PilnvwxbElCOoM.KRpxIXRo9xGr6Nz8zCmbhchflVn6slm', 'Pamela', 'Reblora', '', '2', 'admin', '2024-02-27'),
(17, 'jsalano', '$2y$10$J0t9D3YyOGJsknN2kkt2MeuVuE78SpfoKIxvLkkkRq4xuqfNCO7.K', 'Jerome', 'Alano', '', '2', 'admin', '2024-02-27'),
(18, 'etvillavelez', '$2y$10$78.CQeL6v7QjJyVq5gvP9ucWnbOqh1fJy3YApn4R9gBH5ctZhNvUO', 'Erica', 'Villavelez', '', '2', 'admin', '2024-02-27'),
(19, 'cbelloran', '$2y$10$EfqmSAdVRQ9brE5.Yl9QYOGZ9LaTy.O62XODDfkNSxap/tcL9XxIm', 'Kit', 'Elloran', '', '2', 'admin', '2024-02-27'),
(20, 'cacallangan', '$2y$10$HF4kA0DJ4AX1HLUcSoZvUuwE7TvrjKAs9Jti0nxV8SBoYsVsCeXOa', 'Carlos', 'Callangan', '', '2', 'admin', '2024-02-27'),
(21, 'pmrafols', '$2y$10$NMH2Ndbsqlqk3qkr3Rz8beae/gb590C7Vzjtmsswdcg0pbu6e2QzC', 'Pat', 'Rafols', '', '2', 'admin', '2024-02-27'),
(22, 'rbcaguja', '$2y$10$5tUlWJJdVMcYleA481uAbecyzKn44jNZnYq3rFegEpTmbazK9qSUO', 'Reigna Belle', 'Aguja', '', '2', 'admin', '2024-02-27'),
(23, 'dzdtuazon', '$2y$10$jqccDywZaeEEJlBdlgM58eSrmiAEVANqh3psT0sZ.EdN.9XO9wP72', 'Dion', 'Tuazon', '', '2', 'admin', '2024-02-27'),
(24, 'mmpalis', '$2y$10$x1iH8o/SIMbLD.mGyPHC2eairFAXJ7v7giIXWPT10foqA6oE3GFx.', 'Martin', 'Palis', '', '2', 'admin', '2024-02-27'),
(25, 'fjbcorcuera', '$2y$10$33sXjGHuL0O0FAkBqPCt2.4YUDhRwsKzpZLuO0bbOrWK.waqVfWjC', 'Kix', 'Corcuera', '', '2', 'admin', '2024-02-27'),
(26, 'ambaldovino', '$2y$10$GJrpP5XfnQSY3m8dnOvulu7eyulLoXoxLp6HADej5vR3IGo1eGMWO', 'Arlyn', 'Baldovino', '', '2', 'admin', '2024-02-27'),
(27, 'akpormento', '$2y$10$zEcCUoCkNKtGrZ7FY4ODiuYa8YI5Vv.Tu6vKqjKNlLNIZN.sCQSqe', 'Allan', 'Pormento', '', '2', 'admin', '2024-02-27'),
(28, 'ellimlingan', '$2y$10$D6pFcLHE3A4JgJUW.UVZeOAcAq7h7OiUNTqIAv0i3854/nAHnxsn6', 'Sandy', 'Limlingan', '', '2', 'admin', '2024-02-27'),
(29, 'ooagoncillo', '$2y$10$pAtQ5i7Yjz8XaOrSHiCq1utjpUgkM.4aVHwgHiM9dDywOWsPlIUEO', 'Oliver', 'Agoncillo', '', '2', 'admin', '2024-02-27'),
(30, 'gsrpalis', '$2y$10$YT87PhB0..zQUVwpwWQUpuBCMe77aHZ./yDM37UyG1pEeEs/tp9ye', 'Grace Anne', 'Palis', '', '2', 'admin', '2024-02-27'),
(31, 'gdlcdimaranan', '$2y$10$u3n.IcsvVqtTmlsjnp9B1uVRI6./UfTIbkyvGE/SoQ3Yaizj8lfqi', 'Genique', 'Dimaranan', '', '2', 'admin', '2024-02-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
