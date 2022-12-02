-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2022 pada 04.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `Kode Obat` int(20) NOT NULL,
  `Nama Obat` varchar(50) NOT NULL,
  `Jenis Obat` varchar(20) NOT NULL,
  `Stok` int(50) NOT NULL,
  `Expired` date NOT NULL,
  `Harga Beli` int(100) NOT NULL,
  `Harga Jual` int(100) NOT NULL,
  `created at` date NOT NULL,
  `created by` varchar(8) NOT NULL,
  `updated at` date NOT NULL,
  `updated by` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`Kode Obat`, `Nama Obat`, `Jenis Obat`, `Stok`, `Expired`, `Harga Beli`, `Harga Jual`, `created at`, `created by`, `updated at`, `updated by`) VALUES
(12365281, 'Amoksisilin kapsul 250 mg', 'Kapsul', 1000, '2024-12-31', 30000, 38000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(16358128, 'Antasida DOEN', 'Obat Cair', 873, '2024-12-30', 2500, 3000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(16528902, 'Asam Folat tablet 5 mg', 'Tablet', 1000, '2024-12-30', 55000, 63000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(23871960, 'Asam Mefenamat kapsul 250 mg', 'Kapsul', 763, '2024-12-31', 12000, 16000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(28361081, 'Vitamin B Kompleks', 'Tablet', 1000, '2022-12-10', 25000, 29000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(32416208, 'Famotidine tablet 20 mg', 'Tablet', 1000, '2024-12-18', 5000, 7000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(56218035, 'Kodein tablet 20 mg', 'Tablet', 389, '2022-12-30', 300000, 320000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(862910261, 'Magnesium Sulfat serbuk 30 gram', 'Obat Bubuk', 30, '2025-12-30', 10000, 13000, '2022-12-04', 'Disty', '2022-12-04', 'Disty');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`Kode Obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
