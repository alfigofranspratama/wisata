-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 07.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumentasi`
--

CREATE TABLE `tb_dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `nama_pengunjung` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dokumentasi`
--

INSERT INTO `tb_dokumentasi` (`id_dokumentasi`, `thumbnail`, `nama_pengunjung`, `tanggal`, `deskripsi`, `views`) VALUES
(2, 'fd3f0bece81024c447e46472e60f0aee.jpg', 'Riana Madya Eka', '2017-09-19', 'Bagus untuk belajar budaya minang kabau', 0),
(3, '4b78fabfa6fd5321009f5f037c92ecaf.jpg', 'Juwita Putri Utama', '2018-11-09', 'Tempatnya menyenangkan', 0),
(4, '796736315d7781858ee7ad37fdb1c737.jpg', 'Dharmanika Chantika', '2019-02-09', '', 0),
(5, '364da94b2192061ed5d9c6cea404da15.jpg', 'Riska Nindriani', '2020-09-08', '', 0),
(6, 'a568f01a74bfa59cbbf60379fd36eb5c.jpg', 'Yukira Anita Salsabila', '2021-09-01', '', 0),
(7, '81dea529728736eabc8364a0a6fb931c.jpg', 'Miftahul Jannah', '2021-02-09', '', 0),
(8, 'b023d2ed3d7e739cc584c2b9ac98478f.jpg', 'Liana Sri Fahyuni', '2019-02-11', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_quote`
--

CREATE TABLE `tb_quote` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_quote`
--

INSERT INTO `tb_quote` (`id`, `nama`, `pekerjaan`, `profile`, `quote`) VALUES
(1, 'Anggita', 'Founder of Ga tau', '83d56d1dd4544fd2fd9f5ad6931090d4.jpg', 'Rasa bahagia dan tak bahagia bukan berasal dari apa yang kamu miliki, bukan pula berasal dari siapa diri kamu, atau apa yang kamu kerjakan. Bahagia dan tak bahagia berasal dari pikiran kamu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_settings`
--

CREATE TABLE `tb_settings` (
  `id` int(11) NOT NULL,
  `judul_halaman` varchar(255) DEFAULT NULL,
  `text_sambutan` varchar(255) DEFAULT NULL,
  `desc_sambutan` text DEFAULT NULL,
  `sampul_website` varchar(255) DEFAULT NULL,
  `desc_web` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_settings`
--

INSERT INTO `tb_settings` (`id`, `judul_halaman`, `text_sambutan`, `desc_sambutan`, `sampul_website`, `desc_web`, `alamat`, `phone`, `email`, `twitter`, `facebook`, `instagram`) VALUES
(1, 'Pagaruyuang', 'Welcome To Istana Pagaruyuang', 'Tempat wisata budaya Minang Kabau Sumatera Barat', '03b4a3ae700228c3df2260646144e26f.jpg', 'Istano Basa yang lebih terkenal dengan nama Istana Pagaruyung adalah museum berupa replika istana Kerajaan Pagaruyung', 'Nagari Pagaruyung, Kecamatan Tanjung Emas, Kabupaten Tanah Datar, Sumatra Barat', '+62-81292389150', 'alfigofranspratamaa@gmail.com', '#', '#', 'https://instagram.com/alfigofransp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `password`, `role`) VALUES
(1, 'alfigo', 'alfigofranspratamaa@gmail.com', '$2y$10$TnNdbIitGkEP1r50KIBQF.KToYmu5RmL1vtD.1Hrwzf5zSwSzotA.', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indeks untuk tabel `tb_quote`
--
ALTER TABLE `tb_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_quote`
--
ALTER TABLE `tb_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
