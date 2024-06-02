-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 15.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acbp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biayagugatan`
--

CREATE TABLE `biayagugatan` (
  `id_no` int(11) NOT NULL,
  `id_rad` int(99) NOT NULL,
  `radius` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biayagugatan`
--

INSERT INTO `biayagugatan` (`id_no`, `id_rad`, `radius`) VALUES
(1, 1, 100000),
(2, 2, 150000),
(3, 3, 175000),
(4, 4, 200000),
(5, 5, 250000),
(6, 6, 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biayagugatan2`
--

CREATE TABLE `biayagugatan2` (
  `id_no` int(99) NOT NULL,
  `id` int(11) NOT NULL,
  `pendaftaran` int(11) NOT NULL,
  `biayaproses` int(11) NOT NULL,
  `meterai` int(11) NOT NULL,
  `redaksi` int(11) NOT NULL,
  `pnbp` int(11) NOT NULL,
  `putusan` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biayagugatan2`
--

INSERT INTO `biayagugatan2` (`id_no`, `id`, `pendaftaran`, `biayaproses`, `meterai`, `redaksi`, `pnbp`, `putusan`) VALUES
(1, 1, 30000, 50000, 10000, 10000, 10000, 200000),
(2, 2, 30000, 50000, 10000, 10000, 10000, 250000),
(3, 3, 30000, 50000, 10000, 10000, 10000, 280000),
(4, 4, 30000, 50000, 10000, 10000, 10000, 300000),
(5, 5, 30000, 50000, 10000, 10000, 10000, 350000),
(6, 6, 30000, 50000, 10000, 10000, 10000, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id` int(11) NOT NULL,
  `pntondano` varchar(99) NOT NULL,
  `biayapntondano` varchar(99) NOT NULL,
  `pnluar` varchar(99) NOT NULL,
  `biayaluar` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id`, `pntondano`, `biayapntondano`, `pnluar`, `biayaluar`) VALUES
(1, 'Tondano', '100000', 'Jakarta', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitunglokasi`
--

CREATE TABLE `hitunglokasi` (
  `wilayah` varchar(99) NOT NULL,
  `luar` varchar(50) NOT NULL,
  `pnbp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hitunglokasi`
--

INSERT INTO `hitunglokasi` (`wilayah`, `luar`, `pnbp`) VALUES
('Tondano Barat', '100000', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_no` int(99) NOT NULL,
  `id` int(99) NOT NULL,
  `kabupaten` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `biaya` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_no`, `id`, `kabupaten`, `nama`, `biaya`) VALUES
(1, 1, 'MINAHASA', 'TONDANO BARAT', 100000),
(2, 1, 'MINAHASA', 'TONDANO SELATAN', 100000),
(3, 1, 'MINAHASA', 'TONDANO TIMUR', 100000),
(4, 1, 'MINAHASA', 'TONDANO UTARA', 100000),
(5, 2, 'MINAHASA', 'ERIS', 150000),
(6, 2, 'MINAHASA', 'REMBOKEN', 150000),
(7, 2, 'TOMOHON', 'TOMOHON BARAT', 150000),
(8, 2, 'TOMOHON', 'TOMOHON SELATAN', 150000),
(9, 2, 'TOMOHON', 'TOMOHON TENGAH', 150000),
(10, 2, 'TOMOHON', 'TOMOHON TIMUR', 150000),
(11, 2, 'TOMOHON', 'TOMOHON UTARA', 150000),
(12, 3, 'MINAHASA', 'KAKAS', 175000),
(13, 3, 'MINAHASA', 'KAWANGKOAN', 175000),
(14, 3, 'MINAHASA', 'LANGOWAN BARAT', 175000),
(15, 3, 'MINAHASA', 'LANGOWAN TIMUR', 175000),
(16, 3, 'MINAHASA', 'SONDER', 175000),
(17, 3, 'MINAHASA', 'TOMPASO', 175000),
(18, 4, 'MINAHASA', 'KAWANGKOAN BARAT', 200000),
(19, 4, 'MINAHASA', 'KOMBI', 200000),
(20, 4, 'MINAHASA', 'LEMBEAN', 200000),
(21, 4, 'MITRA', 'PASAN', 200000),
(22, 4, 'MITRA', 'RATAHAN', 200000),
(23, 4, 'MITRA', 'TOMBARIRI (Sarani Matani,Borgo,Tambala,Ranowangko)', 200000),
(24, 4, 'MITRA', 'TOMBARIRI TIMUR', 200000),
(25, 5, 'MITRA', 'BELANG', 250000),
(26, 5, 'MINAHASA', 'KAKAS BARAT', 250000),
(27, 5, 'MINAHASA', 'LANGOWAN SELATAN', 250000),
(28, 5, 'MITRA', 'SILIAN', 250000),
(29, 5, 'MITRA', 'TOMBARIRI (Mokupa,Senduk,Tanawangko)', 250000),
(30, 5, 'MITRA', 'TOMBATU', 250000),
(31, 5, 'MITRA', 'TOULUAAN', 250000),
(32, 6, 'MITRA', 'POSUMAEN', 250000),
(33, 6, 'MITRA', 'RATATOKTOK', 250000),
(34, 6, 'MITRA', 'TOMBARIRI (Kumu,Poopoh,Teling,Pinasungkulan)', 250000),
(35, 6, 'MITRA', 'TOULUAAN SELATAN', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minahasa`
--

CREATE TABLE `minahasa` (
  `id_no` int(99) NOT NULL,
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minahasa`
--

INSERT INTO `minahasa` (`id_no`, `id`, `nama`) VALUES
(8, 1, 'TONDANO BARAT'),
(9, 1, 'TONDANO TIMUR'),
(10, 1, 'TONDANO UTARA'),
(11, 1, 'TONDANO SELATAN'),
(13, 2, 'REMBOKEN'),
(14, 2, 'ERIS'),
(15, 3, 'KAWANGKOAN'),
(16, 3, 'SONDER'),
(17, 3, 'TOMPASO'),
(18, 3, 'KAKAS'),
(19, 3, 'LANGOWAN TIMUR'),
(20, 3, 'LANGOWAN BARAT'),
(21, 4, 'LEMBEAN'),
(22, 4, 'KOMBI'),
(23, 4, 'TOMBARIRI TIMUR'),
(24, 4, 'TOMBARIRI (DESA SARANI MATANI, BORGO, TAMBALA RANOWANGKO)'),
(25, 5, 'TOMBARIRI (DESA MOKUPA, SENDUK, TANAWANGKO)'),
(26, 5, 'KAKAS BARAT'),
(27, 5, 'LANGOWAN SELATAN'),
(28, 6, 'TOMBARIRI (DESA KUMU, POOPOH, TELING, PINASUNGKULAN)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minahasatenggara`
--

CREATE TABLE `minahasatenggara` (
  `id_no` int(99) NOT NULL,
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minahasatenggara`
--

INSERT INTO `minahasatenggara` (`id_no`, `id`, `nama`) VALUES
(1, 4, 'RATAHAN'),
(2, 4, 'PASAN'),
(3, 5, 'TOMBATU'),
(4, 5, 'SILIAN'),
(5, 5, 'TOULUAAN'),
(6, 5, 'BELANG'),
(7, 6, 'TOULUAAN SELATAN'),
(8, 6, 'RATATOTOK'),
(9, 6, 'POSUMAEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan2`
--

CREATE TABLE `permohonan2` (
  `id_no` int(99) NOT NULL,
  `id` int(11) NOT NULL,
  `pendaftaran` int(11) NOT NULL,
  `biayaproses` int(11) NOT NULL,
  `meterai` int(11) NOT NULL,
  `redaksi` int(11) NOT NULL,
  `pnbp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `permohonan2`
--

INSERT INTO `permohonan2` (`id_no`, `id`, `pendaftaran`, `biayaproses`, `meterai`, `redaksi`, `pnbp`) VALUES
(1, 1, 30000, 50000, 10000, 10000, 10000),
(2, 2, 30000, 50000, 10000, 10000, 10000),
(3, 3, 30000, 50000, 10000, 10000, 10000),
(4, 4, 30000, 50000, 10000, 10000, 10000),
(5, 5, 30000, 50000, 10000, 10000, 10000),
(6, 6, 30000, 50000, 10000, 10000, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonanradius`
--

CREATE TABLE `permohonanradius` (
  `id_no` int(99) NOT NULL,
  `id_per` int(99) NOT NULL,
  `radius` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `permohonanradius`
--

INSERT INTO `permohonanradius` (`id_no`, `id_per`, `radius`) VALUES
(1, 1, 100000),
(2, 2, 150000),
(3, 3, 175000),
(4, 4, 200000),
(5, 5, 250000),
(6, 6, 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tomohon`
--

CREATE TABLE `tomohon` (
  `id_no` int(99) NOT NULL,
  `id` int(99) NOT NULL,
  `wilayah` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tomohon`
--

INSERT INTO `tomohon` (`id_no`, `id`, `wilayah`) VALUES
(3, 2, 'TOMOHON BARAT'),
(4, 2, 'TOMOHON SELATAN'),
(5, 2, 'TOMOHON TENGAH'),
(6, 2, 'TOMOHON TIMUR'),
(7, 2, 'TOMOHON UTARA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'steven', 'steven@steven.com', '398f8e80fe32d078dcd42c2aa1a9e093'),
(5, 'admin', 'admin@gmail.com', '398f8e80fe32d078dcd42c2aa1a9e093'),
(8, 'sfsd', 'steven@bom.com', 'zxzxzx09'),
(9, 'debora', 'debora@debora.com', 'debora'),
(10, '17210099', 'mireclesteven09@gmail.com', '398f8e80fe32d078dcd42c2aa1a9e093');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biayagugatan`
--
ALTER TABLE `biayagugatan`
  ADD PRIMARY KEY (`id_no`);

--
-- Indeks untuk tabel `biayagugatan2`
--
ALTER TABLE `biayagugatan2`
  ADD PRIMARY KEY (`id_no`);

--
-- Indeks untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_no`,`id`,`nama`);

--
-- Indeks untuk tabel `minahasa`
--
ALTER TABLE `minahasa`
  ADD PRIMARY KEY (`id_no`,`id`);

--
-- Indeks untuk tabel `minahasatenggara`
--
ALTER TABLE `minahasatenggara`
  ADD PRIMARY KEY (`id_no`,`id`);

--
-- Indeks untuk tabel `permohonan2`
--
ALTER TABLE `permohonan2`
  ADD PRIMARY KEY (`id_no`,`id`);

--
-- Indeks untuk tabel `permohonanradius`
--
ALTER TABLE `permohonanradius`
  ADD PRIMARY KEY (`id_no`,`id_per`);

--
-- Indeks untuk tabel `tomohon`
--
ALTER TABLE `tomohon`
  ADD PRIMARY KEY (`id_no`,`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biayagugatan`
--
ALTER TABLE `biayagugatan`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1634092784;

--
-- AUTO_INCREMENT untuk tabel `biayagugatan2`
--
ALTER TABLE `biayagugatan2`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `minahasa`
--
ALTER TABLE `minahasa`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `minahasatenggara`
--
ALTER TABLE `minahasatenggara`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `permohonan2`
--
ALTER TABLE `permohonan2`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `permohonanradius`
--
ALTER TABLE `permohonanradius`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tomohon`
--
ALTER TABLE `tomohon`
  MODIFY `id_no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
