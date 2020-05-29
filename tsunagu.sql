-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Feb 2019 pada 17.27
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsunagu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `kategori`, `deskripsi`, `tahun`, `penerbit`, `file`, `gambar`) VALUES
(3, 'Al-Bidayah Wan Nihayah', 'Ibnu Katsir', 'Agama', 'Buku tentang kisah masa khulafaur rasyidin', '2004', 'DARUL HAQ', '06-al-bidayah-wan-nihayah-masa-khulafaur-rasyidin-ibnu-kasir.pdf', 'abwn.jpg'),
(4, 'Partai Komunis Indonesia', 'dr. Iman Rudy', 'Politik', 'Buku tentang sejarah PKI', '', '', 'DOC-pki.pdf', 'pki.JPG'),
(5, 'Pemrograman Bahasa C++', 'Asep Muhidin', 'Teknologi', 'Modul pemrograman bahasa C++ untuk kuliah', '2010', 'Zeyrank Offset', '03PDSEA001 - Ebook Pemrograman Dasar C++.pdf', '1.JPG'),
(6, 'Dunia Sophie', 'Jostein Gaarder', 'Filosofis', 'Sebuah novel filsafat', '2006', 'PT Mizan Pustaka', 'dunia_sophie.pdf', '2.JPG'),
(7, 'Tafsir Ibnu Katsir Juz I', 'Ibnu Katsir', 'Agama', 'Tafsir Ibnu Katsir surat Al-Fatihah s.d Al-Baqarah', '2000', 'Sinar Baru Algensindo', 'tafsir-ibnu-katsir-juz-i.pdf', 'Capture.JPG'),
(8, '37 Masalah Populer', 'H. Abdul Somad, Lc., MA.', 'Agama', 'Buku tentang masalah-masalah tentang Islam di Indonesia saat ini', '', '', '37-masalah-populer1.pdf', '37masalah.JPG'),
(9, 'Tafsir Ibnu Katsir Juz II', 'Ibnu Katsir', 'Agama', 'Tafsir Ibnu Katsir surat Al-Baqarah 142 s.d Al-Baqarah 252', '2000', 'Sinar Baru Algensindo', 'tafsir-ibnu-katsir-juz-ii.pdf', 'tikj2.JPG'),
(10, 'Detective Conan ch. 1', 'Aoyama Gosho', 'Agama', 'Komik tentang detektif SMA yang dapat menangani kasus-kasus yang sulit', '1994', '', '001.rar', '001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `ava` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id`, `judul`, `username`, `komentar`, `tgl`, `ava`) VALUES
(1, 'Al-Bidayah Wan Nihayah', 'fauzan', 'Subhanallah, luar biasa menginspirasi', '09-01-2019', 'Images/pp.png'),
(2, 'Al-Bidayah Wan Nihayah', 'Guest', 'ALLAHU AKBAR!', '09-01-2019', 'Images/pp.png'),
(3, 'Partai Komunis Indonesia', 'Guest', 'Bentar lagi ada yang trigerred nih...', '09-01-2019', 'Images/pp.png'),
(4, 'Partai Komunis Indonesia', 'fauzan', 'Ga lah gan, di sini orangnya chill2', '09-01-2019', 'Images/1509905659510.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `jumlah`) VALUES
(1, 'Agama', 4),
(4, 'Politik', 1),
(5, 'Teknologi', 1),
(6, 'Aksi', 0),
(7, 'Filosofis', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanbantu`
--

CREATE TABLE `pesanbantu` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanbantu`
--

INSERT INTO `pesanbantu` (`id`, `username`, `pesan`) VALUES
(1, 'Non-user', 'Saya tidak mengerti cara menggunakan web anda. Mohon dicantumkan di halaman tentang. Terima kasih.'),
(2, 'lutha', 'Update bukunya mohon lebih sering lagi ya!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id`, `username`, `judul`) VALUES
(1, 'fauzan', 'Detective Conan ch. 1'),
(2, 'fauzan', 'Al-Bidayah Wan Nihayah'),
(3, 'fauzan', 'Dunia Sophie'),
(4, 'lutha', 'Dunia Sophie'),
(7, 'lutha', 'Tafsir Ibnu Katsir Juz I'),
(8, 'fauzan', 'Tafsir Ibnu Katsir Juz II'),
(9, 'fauzan', 'Tafsir Ibnu Katsir Juz I'),
(10, 'lutha', 'Detective Conan ch. 1'),
(16, 'lutha', 'Al-Bidayah Wan Nihayah'),
(17, 'lutha', '37 Masalah Populer'),
(18, 'fauzan', '37 Masalah Populer'),
(19, 'aceng', 'Detective Conan ch. 1'),
(20, 'aceng', 'Partai Komunis Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `namadep` varchar(100) NOT NULL,
  `namabel` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `pp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `namadep`, `namabel`, `username`, `password`, `usia`, `jk`, `ttl`, `email`, `notel`, `stat`, `pp`) VALUES
(1, 'Ahmad Fauzan', 'Maulana', 'fauzan', 'fauzan', '21', 'Laki-laki', 'Jakarta, 18 Juli 1997', 'fauzana18@gmail.com', '085695953288', '1', '1509905659510.jpg'),
(2, 'Luthfia Nur', 'Izzati', 'lutha', 'lutha', '21', 'Perempuan', 'Tanjung Pinang, 12 Oktober 1997', 'luthaizzati@gmail.com', '082216333344', '2', 'pp.png'),
(3, 'aceng', 'cengtri', 'aceng', 'aceng', '34', 'Laki-laki', 'Tangerang, 10 April 1984', 'aceng@aceng.com', '088888888888', '2', 'pp.png'),
(4, 'detia', 'detia', 'detia', '1111', '1', 'w', 'w', 'w', 'w', '2', 'pp.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `judul`, `penulis`, `kategori`, `username`) VALUES
(1, 'Hafalan Sholat Delisa', 'Tere-Liye', 'Agama', 'lutha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web`
--

CREATE TABLE `web` (
  `tentang` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web`
--

INSERT INTO `web` (`tentang`) VALUES
('Tsunagu Library adalah perpustakaan online berbasis web yang menyediakan E-Book gratis. \r\nDukung kami terus dengan cara memberikan masukan dan sumbangan E-Book anda.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanbantu`
--
ALTER TABLE `pesanbantu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanbantu`
--
ALTER TABLE `pesanbantu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
