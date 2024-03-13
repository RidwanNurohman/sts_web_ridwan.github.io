-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2024 pada 21.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sts_ridwan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(255) NOT NULL,
  `kode_brg` varchar(255) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_brg`, `nama_brg`, `kategori`, `merk`, `jumlah`) VALUES
(5, 'KB001', 'Handphone', 'Elektronik', 'Asus', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_login` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `tgl_kembali`, `no_identitas`, `kode_barang`, `jumlah`, `keperluan`, `status`, `id_login`) VALUES
(27, '2024-03-13', '2024-03-16', '003', 'KB001', 100, 'belajar', 'Dipinjam', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(255) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_login` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES
(1, '001', 'admin', 'admin', 'admin', '1123', 'admin'),
(2, '002', 'guru', 'pengajar', 'guru', '1123', 'admin'),
(3, '003', 'Ridwan', 'pelajar', 'Ridwan', '1123', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
