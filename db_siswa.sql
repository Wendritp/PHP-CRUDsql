-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2020 pada 14.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsiswa`
--

CREATE TABLE `tsiswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tsiswa`
--

INSERT INTO `tsiswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `jurusan`, `foto`) VALUES
(5, '3103228138', 'Joan Arc', 'perempuan', 'Rekayasa Perang', '17112020133242unnamed.jpg'),
(6, '3103118139', 'Wendri Tri Pambudi', 'Laki-laki', 'RPL', '17112020133224JPEG_20200511_160923_7370848770903211139.jpg'),
(7, '3103118132', 'Ahha', 'Laki-laki', 'RPL', '171120201346485712.png'),
(8, '31031181311', 'wawan', 'Laki-laki', 'RPL', '17112020134833Capture.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tsiswa`
--
ALTER TABLE `tsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tsiswa`
--
ALTER TABLE `tsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
