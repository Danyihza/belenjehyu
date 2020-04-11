-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2020 pada 10.08
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pedagang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Dany Ihza', 'danyihza', 'danyihza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `gambar_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(1, 'Daging', 'daging.png'),
(2, 'Kue', 'kue.png'),
(3, 'Sayur', 'sayur.png'),
(4, 'Buah', 'buah.png'),
(5, 'Sembako', 'sembako.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedagang`
--

CREATE TABLE `pedagang` (
  `id_pedagang` int(11) NOT NULL,
  `nama_pedagang` varchar(100) NOT NULL,
  `kontak_pedagang` varchar(15) NOT NULL,
  `tempat_pasar` varchar(200) NOT NULL,
  `kategori` int(11) NOT NULL,
  `foto_kios` varchar(255) NOT NULL,
  `status_akun` int(11) NOT NULL,
  `detail_pedagang` text NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`id_pedagang`, `nama_pedagang`, `kontak_pedagang`, `tempat_pasar`, `kategori`, `foto_kios`, `status_akun`, `detail_pedagang`, `keterangan`) VALUES
(1, 'Rizal', '082235255028', 'Pasar Pajarakan', 5, '', 0, '', 1),
(3, 'Rinrin', '081335373470', 'Pasar Semampir', 2, '', 0, '', 1),
(5, 'Ferrys', '083134920109', 'Pasar Semampir', 4, '', 0, '', 1),
(6, 'Dany', '082331147549', 'Pasar Pajarakan', 1, '', 0, '', 1),
(7, 'Yanti', '0821672612131', 'Pasar Semampir', 1, '20742670.jpg', 1, 'Daging ayam\r\ndaging sapi\r\nfftftfk\r\njyfg\r\nftyfjt\r\nat44tw34\r\ntyjt6\r\nvytfi\r\nftdr\r\nfi6fgyguhkiiuttftf\r\nfdtryd\r\nyjtftf\r\ngyg\r\ndrd]ugkyg\r\ndtrd', 1),
(8, 'Mama', '77676597', 'Pasar Semampir', 2, 'clip_image00229.jpg', 1, 'berhasil diupdate kok', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id_pedagang`),
  ADD KEY `kategori` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
