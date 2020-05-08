-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 09:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_economy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Handphone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `gambar`, `deskripsi`, `kategori`) VALUES
('P01', 'ASUS ZENFONE 5 ZE620KL', 2650000, 'Asus-ZenFone-5-ZE620KL2.jpg', 'PADANG', '1'),
('P03', 'ASUS ZENFONE MAX PRO M2', 3000000, 'Asus-ZenFone-Max-Pro-M2-ZB631KL4.jpg', 'BANTEN', '1'),
('P04', 'MACBOOK AIR', 24500000, 'laptop25.jpg', 'KALIMANTAN', '2'),
('P05', 'ASUS VIVOBOOK A14', 12500000, 'laptop12.jpg', 'BALI', '2'),
('P07', 'HP PAVILION', 9500000, 'laptop5.jpg', 'JAKARTA UTARA', '2');

--
-- Triggers `produk`
--
DELIMITER $$
CREATE TRIGGER `hapus_barang` AFTER DELETE ON `produk` FOR EACH ROW INSERT INTO produk_hapus
(id_produk, nama_produk, harga, gambar, deskripsi, kategori, tgl_hapus, nama_user)
VALUES
(OLD.id_produk, OLD.nama_produk, OLD.harga, OLD.gambar, OLD.deskripsi, OLD.kategori, SYSDATE(), CURRENT_USER)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hapus`
--

CREATE TABLE `produk_hapus` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tgl_hapus` date DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hapus`
--

INSERT INTO `produk_hapus` (`id_produk`, `nama_produk`, `harga`, `gambar`, `deskripsi`, `kategori`, `tgl_hapus`, `nama_user`) VALUES
('P08', 'LENOVO IDEALPAD', 6500000, 'laptop41.jpg', 'BANDUNG\r\n', '2', '2020-05-06', 'root@localhost'),
('P02', 'IPHONE 6S', 4500000, 'hp12.jpg', 'JOGJAKARTA', '1', '2020-05-08', 'root@localhost'),
('P06', 'ASUS VIVOBOOK S430UN', 11999999, 'laptop3_(2)1.jpg', 'SURABAYA', '2', '2020-05-08', 'root@localhost'),
('P08', 'OPPO A5S', 2450000, 'hp31.jpg', 'KALIMANTAN', '1', '2020-05-08', 'root@localhost'),
('P09', 'XIAOMI REDMI 4', 1850000, 'hp4.jpg', 'MADIUN', '1', '2020-05-08', 'root@localhost'),
('P06', 'ASUS VIVOBOOK S430UN', 7600000, '', '', '2', '2020-05-08', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_do` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `produk` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_do`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 0, 0, 1, '5699000'),
(2, 0, 0, 1, '35000000'),
(3, 2, 0, 2, '2650000'),
(4, 3, 0, 2, '2650000'),
(5, 4, 0, 1, '3500000'),
(6, 12, 0, 1, '4500000'),
(7, 13, 0, 1, '2650000'),
(8, 14, 0, 1, '2650000'),
(9, 14, 0, 1, '4500000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `tanggal`, `id_pelanggan`) VALUES
(1, '2020-04-11', '4'),
(2, '2020-04-11', '10'),
(3, '2020-04-17', '11'),
(4, '2020-04-17', '12'),
(5, '2020-04-17', '13'),
(6, '2020-04-17', '14'),
(7, '2020-04-17', '15'),
(8, '2020-04-17', '16'),
(9, '2020-04-17', '17'),
(10, '2020-04-17', '18'),
(11, '2020-04-17', '19'),
(12, '2020-05-03', '20'),
(13, '2020-05-07', '21'),
(14, '2020-05-07', '22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `telp_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`) VALUES
(1, 'vera', 'vera@gmail.com', 'jalan patriot v', '34143'),
(2, 'vera', 'vera@gmail.com', 'jalan patriot v', '34143'),
(3, 'vera', 'vera@gmail.com', 'bima2', '363782398'),
(4, 'vera', 'vera@gmail.com', 'bima2', '66757'),
(5, 'rudi', 'rudi@gmail.com', 'arjuna', '937846483'),
(6, 'rani', 'rani@gmail.com', 'arjuna', '4848484393929'),
(7, 'BCDAJS', 'vera@gmail.com', 'SDHBDSA', 'SBXSH'),
(8, 'DSBSADB', 'bayu@gmail.com', 'njfnjdsfn', '3742748'),
(9, 'jhjfbnj', 'bayu@gmail.com', 'dbcajhk', ' sdcnjsa'),
(10, 'Vera', 'vera@gmail.com', 'Jl. Bima 2', '699647834'),
(11, '', '', '', ''),
(12, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(13, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(14, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(15, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(16, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(17, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(18, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(19, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(20, 'Berliana Febriani', 'berlianaf36@gmail.com', 'Jl. Patriot V', '083527267181910'),
(21, 'Arjuna ', 'arjuna@gmail.com', 'Jl. Sirsak No 3', '08765753686'),
(22, 'risa', 'risa@gmail.com', 'jl.Basudewa', '0976786467');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'berliana', 'berliana@gmail.com', 'berliana', '63dd91cae65d12cba5b40e9cc6c5b9b6'),
(2, 'febriani', 'febriani@gmail.com', 'febriani', 'acef86f72990e72199b3c7de4a37c455'),
(3, 'vera', 'vera@gmail.com', 'vera', '4341dfaa7259082022147afd371b69c3'),
(4, 'ningsih', 'ningsih@gmail.com', 'ningsih', 'a088881046468f224ba868933f0ae36f'),
(5, 'arjuna', 'arjuna@gmail.com', 'arjuna', '2ea41863add9406830e378b9345ffe3b'),
(6, 'nana', 'nana@gmail.com', 'nana', '518d5f3401534f5c6c21977f12f60989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_do`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_do` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
