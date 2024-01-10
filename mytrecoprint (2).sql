-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 11:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytrecoprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$bd0UhBncD073ObeZ14CymuukF6.MQYneE1iKu9ARqmZWHCpr3zqdK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_dtl_order` int(10) NOT NULL,
  `id_order` int(5) DEFAULT NULL,
  `id_produk` int(5) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_dtl_order`, `id_order`, `id_produk`, `jumlah`, `harga`) VALUES
(2, 17, 49, 1, 307000),
(3, 18, 49, 1, 307000),
(4, 20, 45, 1, 298000),
(5, 21, 48, 1, 587000),
(6, 21, 45, 1, 587000),
(7, 22, 45, 2, 280000),
(8, 23, 49, 2, 290000),
(9, 24, 45, 1, 280000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(5) NOT NULL,
  `id_produk` int(5) DEFAULT NULL,
  `foto_produk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_produk`, `foto_produk`) VALUES
(3, 1, 'Product_2.png'),
(39, 43, 'Product_21.png'),
(40, 44, 'Product_31.png'),
(41, 45, 'Product_41.png'),
(43, 47, 'Product_51.png'),
(44, 48, 'Product_12.png'),
(45, 49, 'Product_52.png'),
(47, 51, 'Product_22.png'),
(48, 52, 'IMG_8576.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Top'),
(2, 'Mukena'),
(3, 'Aksesoris'),
(14, 'Pants');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(128) DEFAULT NULL,
  `tlp_penerima` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(8) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `expedisi` varchar(50) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `gross_amount` varchar(128) DEFAULT NULL,
  `payment_type` varchar(128) DEFAULT NULL,
  `bank` varchar(128) DEFAULT NULL,
  `va_number` varchar(128) DEFAULT NULL,
  `biller_code` varchar(128) DEFAULT NULL,
  `transaction_status` varchar(128) DEFAULT NULL,
  `transaction_time` varchar(128) DEFAULT NULL,
  `pdf_url` varchar(256) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL,
  `status_pemesanan` enum('Sedang Dikemas','Sedang Dikirim','Pesanan Diterima') DEFAULT NULL,
  `resi_pemesanan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `tgl_order`, `nama_penerima`, `tlp_penerima`, `alamat`, `kode_pos`, `provinsi`, `kota`, `paket`, `expedisi`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`, `status_pemesanan`, `resi_pemesanan`) VALUES
(13, 7, '2024-01-06', 'Viaa', '345', 'diponegoro 113', '334455', 'Jawa Timur', '179', 'OKE', 'jne', '2-3 Hari', 14000, NULL, 280000, 294000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 7, '2024-01-06', 'Vee', '345', 'blitar', '334455', 'Jawa Timur', '75', 'ECO', 'pos', '5 Hari', 20000, NULL, 580000, 600000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 6, '2024-01-06', 'Viaaaaaaaa', '123', 'diponegoro 113', '334455', 'Jawa Barat', '54', 'OKE', 'jne', '4-5 Hari', 16000, NULL, 290000, 306000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 6, '2024-01-09', 'Viaa', '123', 'diponegoro 113', '334455', 'Jawa Timur', '75', 'OKE', 'jne', '3-4 Hari', 17000, NULL, 290000, 307000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 6, '2024-01-09', 'Okta', '789', 'Bondowoso', '334455', 'Jawa Timur', '86', 'OKE', 'jne', '7-8 Hari', 17000, NULL, 290000, 307000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 6, '2024-01-09', 'Viaa', '123', 'Bondowoso', '334455', 'Jawa Timur', '86', 'ECO', 'tiki', '5 Hari', 18000, NULL, 280000, 298000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 6, '2024-01-09', 'Okta', '123', 'jogja', '334455', 'DI Yogyakarta', '419', 'ECO', 'tiki', '4 Hari', 7000, NULL, 580000, 587000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 6, '2024-01-09', 'Vi', '563', 'sorong', '334455', 'Papua Barat', '425', 'OKE', 'jne', '5-7 Hari', 145000, NULL, 560000, 705000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 6, '2024-01-09', 'Oktaviana', '081', 'diponegoro 113', '334455', 'Jawa Timur', '75', 'Pos Reguler', 'pos', '2 HARI Hari', 18000, NULL, 580000, 598000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 6, '2024-01-10', 'Vi', '081', 'diponegoro 113', '334455', 'Jawa Timur', '75', 'ECO', 'tiki', '5 Hari', 20000, NULL, 280000, 300000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(5) NOT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `nama_produk` varchar(200) DEFAULT NULL,
  `harga_produk` int(10) DEFAULT NULL,
  `berat_produk` int(5) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `warna_produk` varchar(100) DEFAULT NULL,
  `ukuran_produk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `berat_produk`, `stok`, `deskripsi_produk`, `warna_produk`, `ukuran_produk`) VALUES
(1, NULL, 'Shirt', 120000, 1, 20, 'Y', 'Hijau', 'M'),
(43, NULL, 'T-Shirt', 255000, 10, 1, 'Y', 'Putih', 'L'),
(44, NULL, 'Outer', 300000, 10, 3, '', 'Brown', 'M'),
(45, 1, 'Dress', 280000, 1, 1, 'Best Dress', 'Merah', 'M'),
(47, NULL, 'Cargo', 250000, 10, 20, 'Y', 'Biru', 'M'),
(48, 1, 'Shirt', 300000, 2, 20, 'Y', 'Hijau', 'L'),
(49, 14, 'Cargo', 290000, 2, 21, 'A', 'Brown', 'M'),
(51, 1, 'T-Shirt', 300000, 12, 1, 'Y', 'Green', 'L'),
(52, NULL, 'Kemeja', 280000, 20, 1, 'A', 'Hitam', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `gross_amount` varchar(128) DEFAULT NULL,
  `payment_type` varchar(128) DEFAULT NULL,
  `bank` varchar(128) DEFAULT NULL,
  `va_number` varchar(128) DEFAULT NULL,
  `biller_code` varchar(128) DEFAULT NULL,
  `transaction_status` varchar(128) DEFAULT NULL,
  `transaction_time` varchar(128) DEFAULT NULL,
  `pdf_url` varchar(256) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_user`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`) VALUES
(44, NULL, 1929263558, '280000', 'bank_transfer', 'bca', '67614834198', '', 'pending', '2023-12-21 23:34:01', 'https://app.sandbox.midtrans.com/snap/v1/transactions/593541ba-e3f6-4f2a-bbea-fc37f83ca0d8/pdf', 1703176548, 1703176548),
(45, NULL, 852177794, '300000', 'bank_transfer', 'bca', '67614699737', '', 'pending', '2023-12-23 21:06:15', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ec305421-ecd8-4ca0-b373-1fc73f9fed6e/pdf', 1703340428, 1703340428);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat_user` varchar(200) DEFAULT NULL,
  `kodepos` int(6) DEFAULT NULL,
  `tlp_user` varchar(20) DEFAULT NULL,
  `foto_profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `alamat_user`, `kodepos`, `tlp_user`, `foto_profile`) VALUES
(3, 'nando', '$2y$10$9ecImnRt78I3vpaA8PjnwuspTMcdyxbWjDaRQLRrm7vAC3OS6/eNm', 'Nando', 'Tulungagung', 123456, '081111111111', NULL),
(5, 'dinda', '$2y$10$6voEZk7yIEdrqFgf9ftWmunH0wTVWDxOs4swGqBZkvfanzWvgqVJO', 'Dinda', 'Jogja', 556677, '082222222222', NULL),
(6, 'viaaa', '$2y$10$oaN/N33h5zuPOzvTacms9e2MV8nuLf8MyZKYHBOOGfNA2wp.bQEW2', 'Vee', 'Blitar', 334455, '081234567890', NULL),
(7, 'user', '$2y$10$tEI08ZU7TOccKpdKDsD42uQhLklQHvRuu87GnUP4q7kmbscPGOlDq', 'User', 'Jogja', 887766, '083333333333', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_dtl_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_dtl_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD CONSTRAINT `tbl_foto_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
