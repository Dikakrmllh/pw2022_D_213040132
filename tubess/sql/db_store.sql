-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 05:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `asus_data`
--

CREATE TABLE `asus_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `spesifikasi` varchar(900) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asus_data`
--

INSERT INTO `asus_data` (`id`, `nama`, `gambar`, `spesifikasi`, `harga`) VALUES
(5, 'Kaos Polos Hitam', '62a1f83e0a35d9.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI  ', '70.000'),
(6, 'Kaos Polos Hijau', '62a1f264213917.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI', '70.000'),
(10, 'Kaos Polos Putih', '62a1f9b655be35.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI', '70.000'),
(11, 'Kaos Polos Merah', '62a1f9d9d630e6.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI', '70.000'),
(12, 'Kaos Polos Pink', '62a1fa7a678458.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI', '70.000'),
(13, 'Kaos Polos Biru', '62a1fa9dbf4bb4.jpg', 'SATU-SATU NYA KAOS POLOS TERBAIK BANDINGKAN DENGAN TOKO SEBELAH ! BUKAN Cotton Combed Siluman , bukan Carded apalagi PE ASLI COTTON 100% BUKTIKAN SENDIRI ! Kami adalah SUPPLIER KAOS POLOS KUALITAS YOGYA / RAMAYANA / MATAHARI ! Bukan Tanah Abangan . (HARGA TERMURAH DAN BERGARANSI . 100% ASLI COTTON COMBED 30s gak asli uang kembali !) (JIKA INGIN YANG TEBAL BELI DI KATALOG KITA YANG COTTON COMBED 24S ) ORDER SEKARANG TUNGGU APALAGI', '70.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'dika', '$2y$10$dd/Mz5Iao8ytDRHq4ZNB..Nq1.ls3HE7Z8gJaSssrb2hzU6WX3tLi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asus_data`
--
ALTER TABLE `asus_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asus_data`
--
ALTER TABLE `asus_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
