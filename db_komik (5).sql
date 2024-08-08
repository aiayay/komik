-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2024 pada 11.54
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
-- Database: `db_komik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_komik` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `id_komik`, `id_paket`) VALUES
(1, 1, 29, 8),
(2, 1, 28, 8),
(3, 1, 27, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komik` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komik`
--

CREATE TABLE `komik` (
  `id_komik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komik`
--

INSERT INTO `komik` (`id_komik`, `id_user`, `judul`, `deskripsi`, `cover`) VALUES
(23, 23, 'Sala Misro 5', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture1.jpg'),
(24, 23, 'Sala Misro 6', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg'),
(25, 23, 'Sala Misro 7', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture1.jpg'),
(26, 23, 'Sala Misro 8', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg'),
(27, 23, 'Sala Misro 9', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg'),
(28, 23, 'Sala Misro 10', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg'),
(29, 23, 'Sala Misro 11', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `hari` int(11) NOT NULL,
  `jumlah_komik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi`, `harga`, `hari`, `jumlah_komik`) VALUES
(8, 'Paket 1 Hari', 'Maksimal 3 Komik', '5000', 1, 3),
(9, 'Paket 3 Hari', 'Maksimal 5 Komik', '7500', 3, 5),
(10, 'Paket 1 Minggu', 'Maksimal 8 Komik', '15000', 7, 8),
(11, 'Paket 1 Bulan', 'Maksimal Unlimited', '50000', 30, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `tgl_habis` date NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `tgl_pesanan`, `tgl_habis`, `bukti_bayar`, `status`) VALUES
(1, 43, '2024-08-08', '2024-08-09', 'Picture3.jpg', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgambar`
--

CREATE TABLE `tbgambar` (
  `id_gambar` int(11) NOT NULL,
  `id_komik` int(11) NOT NULL,
  `gambar_komik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbgambar`
--

INSERT INTO `tbgambar` (`id_gambar`, `id_komik`, `gambar_komik`) VALUES
(2, 3, 'evgeny-opanasenko-cZye2sFqu5o-unsplash.jpg'),
(5, 4, 'hand-drawn-natural-fresh-pear-set.png'),
(6, 5, '8552700.png'),
(7, 5, 'hand-drawn-cider-label-template.png'),
(8, 5, 'fruit-texture-concept-composition.png'),
(11, 6, 'hand-drawn-natural-fresh-pear-set.png'),
(12, 6, '8552700.png'),
(13, 6, 'hand-drawn-cider-label-template.png'),
(14, 6, 'fruit-texture-concept-composition.png'),
(15, 9, 'fruit-texture-concept-composition.png'),
(16, 10, 'Desain tanpa judul (10).png'),
(17, 11, 'orange-white-white.png'),
(18, 11, 'hello-summer-banner-with-cherry-fruits-rose-background.png'),
(19, 11, 'hand-drawn-natural-fresh-pear-set.png'),
(20, 11, '8552700.png'),
(21, 11, 'hand-drawn-cider-label-template.png'),
(22, 11, 'fruit-texture-concept-composition.png'),
(23, 12, 'output-onlinepngtools(1).png'),
(24, 12, 'output-onlinepngtools.png'),
(25, 12, 'WhatsApp-Image-2023-04-08-at-21.30.20.jpeg'),
(26, 13, 'PKP_1018.JPG'),
(27, 13, 'PKP_1019.JPG'),
(28, 13, 'PKP_1020.JPG'),
(29, 13, 'PKP_1021.JPG'),
(30, 13, 'PKP_1022.JPG'),
(31, 13, 'Screenshot 2024-07-29 111915.png'),
(32, 13, 'PKP_1129.JPG'),
(33, 14, '1.png'),
(34, 14, '2.png'),
(35, 14, '3.png'),
(36, 14, '4.png'),
(37, 14, '5.png'),
(38, 15, '1.png'),
(39, 15, '2.png'),
(40, 15, '3.png'),
(41, 15, '4.png'),
(42, 15, '5.png'),
(43, 16, '1.png'),
(44, 16, '2.png'),
(45, 16, '3.png'),
(46, 16, '4.png'),
(47, 16, '5.png'),
(48, 17, '1.png'),
(49, 17, '2.png'),
(50, 17, '3.png'),
(51, 17, '4.png'),
(52, 17, '5.png'),
(53, 18, '1.png'),
(54, 18, '2.png'),
(55, 18, '3.png'),
(56, 18, '4.png'),
(57, 18, '5.png'),
(58, 19, '1.png'),
(59, 19, '2.png'),
(60, 19, '3.png'),
(61, 19, '4.png'),
(62, 19, '5.png'),
(63, 20, 'Picture1.jpg'),
(64, 20, '2.png'),
(65, 20, '3.png'),
(66, 20, '4.png'),
(67, 20, '5.png'),
(68, 21, '1.png'),
(69, 21, '2.png'),
(70, 21, '3.png'),
(71, 21, '4.png'),
(72, 21, '5.png'),
(73, 22, '1.png'),
(74, 22, '2.png'),
(75, 22, '3.png'),
(76, 22, '4.png'),
(77, 22, '5.png'),
(78, 23, 'Picture2.jpg'),
(79, 23, 'Picture1.jpg'),
(80, 23, 'Picture2.jpg'),
(81, 23, 'Picture2.jpg'),
(82, 23, 'Picture2.jpg'),
(83, 24, '1.png'),
(84, 24, '2.png'),
(85, 24, '3.png'),
(86, 24, '4.png'),
(87, 24, '5.png'),
(88, 25, '1.png'),
(89, 25, '2.png'),
(90, 25, '3.png'),
(91, 25, '4.png'),
(92, 25, '5.png'),
(93, 26, 'Picture1.jpg'),
(94, 26, 'Picture2.jpg'),
(95, 27, 'Picture1.jpg'),
(96, 27, 'Picture2.jpg'),
(97, 28, 'Picture1.jpg'),
(98, 28, 'Picture2.jpg'),
(99, 29, 'Picture1.jpg'),
(100, 29, 'Picture2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `confirm_password`, `nama_lengkap`, `jenis_kelamin`, `no_hp`, `email`, `tgl_lahir`, `level`, `foto`) VALUES
(23, 'admin1', '$2y$10$Jsav0tju39wwWlmCjRv0dO6HviZrseUsV0HXaBmb5u4h0jMZec3Mm', '$2y$10$FYCBAQq8yBN4/h3MWjG7T.AX6a/chxaYYdOty/w.dV2wq6MNQivfS', 'admin', 'perempuan', '122', 'admin@gmail.com', '2024-08-07', 'admin', 'logo2.jpg'),
(43, 'member', '$2y$10$QGg79sH4Png6ee4.b6g.iOj0Y/9qFcRZNj0nghPqXPgEv3sRtAHlC', '$2y$10$FPwIjujIE/ktrbrrNhyiNe5qNz0xRK/H8zmF5Ud7e9LVJe2tvBj0K', 'member', 'perempuan', '1232', 'member1@gmail.com', '2024-08-08', 'member', 'Picture1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id_komik`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tbgambar`
--
ALTER TABLE `tbgambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbgambar`
--
ALTER TABLE `tbgambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
