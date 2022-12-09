-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2022 pada 02.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `detail_jual`
--

CREATE TABLE `detail_jual` (
  `id_trx` int(15) NOT NULL,
  `kode_obat` int(20) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_jual`
--

INSERT INTO `detail_jual` (`id_trx`, `kode_obat`, `amount`) VALUES
(0, 12345125, 3),
(0, 12345125, 3),
(3, 12365281, 2),
(4, 16358128, 2),
(5, 12345123, 2),
(6, 12345123, 1),
(6, 16358128, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(20) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(20) NOT NULL,
  `stok` int(50) NOT NULL,
  `expired` date NOT NULL,
  `harga_beli` int(100) NOT NULL,
  `harga_jual` int(100) NOT NULL,
  `created at` date NOT NULL,
  `created by` varchar(8) NOT NULL,
  `updated at` date NOT NULL,
  `updated by` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `stok`, `expired`, `harga_beli`, `harga_jual`, `created at`, `created by`, `updated at`, `updated by`) VALUES
(12345123, 'Betadine', 'Antibiotik', 4119, '2023-05-18', 2000, 3000, '0000-00-00', '', '0000-00-00', ''),
(12345125, 'Entrostop', 'Tablet', 2, '2022-12-04', 2000, 3000, '0000-00-00', '', '0000-00-00', ''),
(12365281, 'Amoksisilin kapsul 250 mg', 'Kapsul', 998, '2024-12-31', 30000, 38000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(16358128, 'Antasida DOEN', 'Obat Cair', 870, '2024-12-30', 2500, 3000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(16528902, 'Asam Folat tablet 5 mg', 'Tablet', 1000, '2024-12-30', 55000, 63000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(18203811, 'Asam Mefamat', 'Tablet', 60, '2022-12-06', 2000, 3000, '0000-00-00', '', '0000-00-00', ''),
(18203812, 'Promag', 'Tablet', 45, '2023-02-10', 1000, 2500, '0000-00-00', '', '0000-00-00', ''),
(23871960, 'Asam Mefenamat kapsul 250 mg', 'Kapsul', 763, '2024-12-31', 12000, 16000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(28361081, 'Vitamin B Kompleks', 'Tablet', 1000, '2022-12-10', 25000, 29000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(32416208, 'Famotidine tablet 20 mg', 'Tablet', 1000, '2024-12-18', 5000, 7000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(56218035, 'Kodein tablet 20 mg', 'Tablet', 381, '2022-12-30', 300000, 320000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(862910261, 'Magnesium Sulfat serbuk 30 gram', 'Obat Bubuk', 30, '2025-12-30', 10000, 13000, '2022-12-04', 'Disty', '2022-12-04', 'Disty'),
(862910262, 'Paramex', 'Tablet', 125, '2022-12-28', 1500, 2000, '0000-00-00', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_trx` int(100) NOT NULL,
  `total` bigint(11) NOT NULL,
  `tgl` date NOT NULL,
  `user_code` int(11) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `obat_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_trx`, `total`, `tgl`, `user_code`, `obat`, `obat_qty`) VALUES
(1, 9000, '2022-12-08', 12, 'Entrostop', 3),
(2, 9000, '2022-12-08', 12, 'Entrostop', 3),
(3, 76000, '2022-12-08', 12, 'Amoksisilin kapsul 250 mg', 2),
(4, 6000, '2022-12-08', 12, 'Antasida DOEN', 2),
(5, 6000, '2022-12-08', 12, 'Betadine', 2),
(6, 6000, '2022-12-09', 12, 'Antasida DOEN', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_hp` bigint(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `akses` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `no_hp`, `username`, `password`, `akses`, `status`) VALUES
(1, 'Radja', 0, 'radja', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 1),
(3, 'Radja Admin', 6289654436791, 'admin1', '010438e6515e45aeaea0ac5303dbf9c2806eb0d0', 2, 1),
(11, 'nanda', 81293847611, 'nanda', '010438e6515e45aeaea0ac5303dbf9c2806eb0d0', 2, 1),
(12, 'admin', 82162183123, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_trx`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_obat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=862910263;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_trx` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
