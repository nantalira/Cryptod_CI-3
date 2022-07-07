-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 05.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptod`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `market`
--

CREATE TABLE `market` (
  `id_market` int(3) NOT NULL,
  `nama_market` varchar(10) NOT NULL,
  `nama_crypto` varchar(40) NOT NULL,
  `harga_crypto` int(10) NOT NULL,
  `persentasi_market` float NOT NULL,
  `pergerakan_market` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `market`
--

INSERT INTO `market` (`id_market`, `nama_market`, `nama_crypto`, `harga_crypto`, `persentasi_market`, `pergerakan_market`) VALUES
(1, 'BTC/IDR', 'Bitcoin', 468000000, 5.28, 'DOWN'),
(2, 'DOGE/IDR', 'Dogecoin', 1580, 3.3, 'DOWN'),
(3, 'ETH/IDR', 'Ethereum', 34850000, 1.08, 'DOWN'),
(4, 'XRP/IDR', 'Ripple', 7572, 1.66, 'DOWN'),
(5, 'SOL/IDR', 'Solana', 970870, 6.58, 'DOWN'),
(6, 'ADA/IDR', 'Cardano', 9210, 6.68, 'DOWN'),
(7, 'BNB/IDR', 'BNB', 4620402, 3.08, 'DOWN'),
(8, 'VRA/IDR', 'Verasity', 144, 6.49, 'DOWN'),
(9, 'LUNA/IDR', 'Terra', 334, 61.61, 'DOWN'),
(10, 'SAND/IDR', 'The Sandbox', 24575, 11.35, 'DOWN'),
(0, 'UDN', 'Udinus', 123333, 1212, '12121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `email_pengguna` varchar(255) NOT NULL,
  `nohp_pengguna` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `api_key` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `nohp_pengguna`, `password`, `api_key`) VALUES
(4, 'Nantalira ', 'nantaganteng@gmail.com', '089542100321', 'bismillah123', 'kZdRHsuOc2'),
(5, 'Yudhistira', 'yudis@gm.co', '0213552222', '123', ''),
(6, 'Syaifur', 'syaifurrahman@gmail.com', '02152432', '123', 'kZdRHsuOc9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wallet`
--

CREATE TABLE `wallet` (
  `id` int(3) NOT NULL,
  `nama_crypto` varchar(40) NOT NULL,
  `jumlah_crypto` double NOT NULL,
  `nilai_rupiah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wallet`
--

INSERT INTO `wallet` (`id`, `nama_crypto`, `jumlah_crypto`, `nilai_rupiah`) VALUES
(34, 'Dogecoin', 3.581585136, 100000),
(35, 'Solana', 5.64521561, 1500000),
(36, 'Cardano', 4.568543631, 10000),
(37, 'Bitcoin', 0.0156486, 900000),
(38, 'Ethereum', 3.581585136, 600000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
