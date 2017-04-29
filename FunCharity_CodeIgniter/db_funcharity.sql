-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2017 pada 11.32
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_funcharity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `no_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`no_admin`, `username`, `password`) VALUES
(2, 'admin1', 'admin1'),
(3, 'admin2', 'admin2'),
(4, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `no_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(45) NOT NULL,
  `alamat_agenda` varchar(65) NOT NULL,
  `tgl_setor` date NOT NULL,
  `target_dana` int(11) NOT NULL,
  `deskripsi_agenda` varchar(250) NOT NULL,
  `link_gambar` varchar(60) NOT NULL,
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `no_pengirim` int(11) NOT NULL,
  `nama_donatur` varchar(30) NOT NULL,
  `email_donatur` varchar(25) NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `no_agenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`no_agenda`),
  ADD UNIQUE KEY `fk_admin` (`no_admin`);

--
-- Indexes for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD PRIMARY KEY (`no_pengirim`),
  ADD UNIQUE KEY `fk_agenda` (`no_agenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `no_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  MODIFY `no_pengirim` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
