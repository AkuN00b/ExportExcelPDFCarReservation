-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- 생성 시간: 22-11-14 03:19
-- 서버 버전: 10.4.11-MariaDB
-- PHP 버전: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `prg5_20221`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `jenis_mobil`
--

CREATE TABLE `jenis_mobil` (
  `id_jenis_mobil` varchar(5) NOT NULL,
  `nama_jenis_mobil` varchar(50) NOT NULL,
  `status_jenis_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`id_jenis_mobil`, `nama_jenis_mobil`, `status_jenis_mobil`) VALUES
('JM001', 'jenisMobil111', 1),
('JM002', 'jenisMobil2', 0),
('JM003', 'jenisMobil3', 0),
('JM004', 'jenisMobil44', 0),
('JM005', 'jenisMobil53', 1),
('JM006', 'sport', 0),
('JM007', 'jenismobill2222', 1),
('JM008', 'f', 1),
('JM009', 'v', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(5) NOT NULL,
  `id_jenis_mobil` varchar(5) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `stok_mobil` int(11) NOT NULL,
  `harga_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_jenis_mobil`, `nama_mobil`, `stok_mobil`, `harga_mobil`) VALUES
('RM001', 'JM001', 'Mobil1Jenis1', 0, 30000),
('RM002', 'JM005', 'mobil2jenis53', 53, 20000),
('RM003', 'JM005', 'mobil3jenis53', 100, 50000),
('RM004', 'JM001', 'audi', 10, 100000);

-- --------------------------------------------------------

--
-- 테이블 구조 `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(5) NOT NULL,
  `id_mobil` varchar(5) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `lama_peminjaman` int(11) NOT NULL,
  `harga_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_mobil`, `tanggal_peminjaman`, `lama_peminjaman`, `harga_peminjaman`) VALUES
('PM001', 'RM001', '2022-11-16', 3, 90000),
('PM002', 'RM004', '2022-11-18', 7, 700000),
('PM003', 'RM001', '2022-11-14', 1, 30000);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  ADD PRIMARY KEY (`id_jenis_mobil`);

--
-- 테이블의 인덱스 `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- 테이블의 인덱스 `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
