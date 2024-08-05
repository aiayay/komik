-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2024 pada 14.54
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(1, 'aini kiwow', 'aini', 'aini', 'slice-ripe-orange-citrus-fruit-isolated-white.png');

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
(1, 1, 11, 3),
(2, 1, 9, 4),
(3, 1, 9, 4),
(4, 3, 12, 3),
(5, 4, 12, 4),
(6, 5, 13, 3),
(7, 5, 12, 3),
(8, 5, 10, 3),
(9, 6, 17, 2),
(10, 6, 16, 2),
(11, 6, 15, 2),
(12, 7, 17, 2),
(13, 7, 16, 2),
(14, 7, 15, 2);

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
(14, 10, 'Sala Misro 1', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture3.jpg'),
(15, 10, 'Sala Misro 2', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg'),
(16, 10, 'Sala Misro 3', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture1.jpg'),
(17, 10, 'Sala Misro 4', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture3.jpg'),
(18, 10, 'Sala Misro 5', 'Sala-misro menceritakan mengenai kisah pertemuan antara Sala dan Misro. Sala merupakan makanan khas Pariaman yang terbuat dari ikan. Sedangkan, Misro merupakan makanan khas Jawa Barat yang terbuat dari singkong dengan isi parutan yang dicampur dengan gula aren. Pertemuan mereka menciptakan kisah yang manis dan berakhir tak terduga.', 'Picture2.jpg');

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
(2, 'Paket 1 Hari', 'Maksimal 3 Komik', '5000', 1, 3),
(3, 'Paket 3 Hari', 'Maksimal 5 Komik', '7500', 3, 5),
(6, 'Paket 1 Bulan', 'Maksimal 12 Komik', '50000', 30, 12),
(7, 'Paket 1 Minggu', 'Maksimal 8 Komik', '15000', 7, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komik` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_habis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 11, '2024-08-04', '2024-08-07', 'PKP_1025.JPG', 'pending'),
(2, 11, '2024-08-04', '1970-01-01', 'PKP_1025.JPG', 'pending'),
(3, 11, '2024-08-04', '2024-08-07', 'PKP_1025.JPG', 'pending'),
(4, 11, '2024-08-04', '2024-08-11', 'PKP_1024.JPG', 'pending'),
(5, 11, '2024-08-05', '2024-08-08', 'logo.jpg', 'diterima'),
(6, 11, '2024-08-05', '2024-08-06', 'Picture3.jpg', 'ditolak'),
(7, 5, '2024-08-05', '2024-08-06', '5.png', 'diterima');

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
(57, 18, '5.png');

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
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `confirm_password`, `nama_lengkap`, `jenis_kelamin`, `no_hp`, `email`, `tgl_lahir`, `level`) VALUES
(3, 'aini', 'aini', 'aini', 'aini', 'perempuan', '085265261998', 'skripsiaini2023@gmail.com', '2024-07-29', 'member'),
(5, 'admin', 'admin', 'admin', 'admin', 'perempuan', '085265261998', 'skripsiaini2023@gmail.com', '2024-07-30', 'member'),
(8, 'admin', 'admin', 'admin', 'admin', 'perempuan', '085265261998', 'skripsiaini2023@gmail.com', '2024-07-31', 'admin'),
(9, 'admin', 'admin', 'admin', 'admin', 'lakilaki', '085265261998', 'skripsiaini2023@gmail.com', '2024-07-31', 'admin'),
(10, 'aini', 'aini', 'aini', 'aini', 'lakilaki', '085200000000', 'aini@gmail.com', '2024-07-31', 'admin'),
(11, 'aaaa', 'aini', 'aini', 'aaa', 'perempuan', '11', 'aini13@gmail.com', '2024-07-31', 'member'),
(18, 'suga19', 'aini', 'aini', 'aaa', 'lakilaki', '11', 'aini13@gmail.com', '2024-07-31', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbgambar`
--
ALTER TABLE `tbgambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
