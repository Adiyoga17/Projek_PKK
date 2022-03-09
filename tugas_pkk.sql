-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 09:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_pkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `kategori`, `ukuran`, `deskripsi`, `gambar`) VALUES
(4, 'Mujair Nyat-Nyat', 12000, 'Makanan', 'Kecil', 'Ikan segar digoreng dan diberi bumbu rempah ( bumbu base rajang ) dan diberi kuah Nyat - Nyat, berisi selada, timun dan tomat ', '622851dd918af.jpg'),
(6, 'Mujair Nyat-Nyat ', 15000, 'Makanan', 'Sedang', 'Ikan segar digoreng dan diberi bumbu rempah ( bumbu base rajang ) dan diberi kuah Nyat - Nyat, berisi selada, timun dan tomat ', '622851b999639.jpg'),
(7, 'Mujair Nyat-Nyat ', 25000, 'Makanan', 'Besar', 'Ikan segar digoreng dan diberi bumbu rempah ( bumbu base rajang ) dan diberi kuah Nyat - Nyat, berisi selada, timun dan tomat ', '6228549acb016.jpg'),
(8, 'Mujair BBQ ', 12000, 'Makanan', 'Kecil', 'Mujair goreng yang diberi bumbu BBQ, dan berisi selada, timun dan tomat ', '6228532a5cc73.jpg'),
(9, 'Mujair BBQ ', 15000, 'Makanan', 'Sedang', 'Mujair goreng yang diberi bumbu BBQ, dan berisi selada, timun dan tomat ', '6228539906610.jpg'),
(10, 'Mujair BBQ ', 25000, 'Makanan', 'Besar', 'Mujair goreng yang diberi bumbu BBQ, dan berisi selada, timun dan tomat ', '622853a9a6daa.jpg'),
(11, 'Mujair Sambal Matah ', 12000, 'Makanan', 'Kecil', 'Ikan segar yang di goreng dan ditaburi sambal matah di atasnya \r\n', '6228546fe2083.jpg'),
(12, 'Mujair Sambal Matah ', 15000, 'Makanan', 'Sedang', 'Ikan segar yang di goreng dan ditaburi sambal matah di atasnya \r\n', '6228548ea9670.jpg'),
(13, 'Mujair Sambal Matah ', 25000, 'Makanan', 'Besar', 'Ikan segar yang di goreng dan ditaburi sambal matah di atasnya ', '622854a7e5575.jpg'),
(14, 'Nasi Ayam BBQ', 20000, 'Makanan', 'Normal', 'Nasi yang berisi daging ayam goreng yang diberi bumbu BBQ dan berisi selada, timun, dan tomat', '622857bf517f3.jpg'),
(15, 'Paket Nasi Campur', 22000, 'Paket', 'Normal', 'Paket Lengkap Nasi Campur yang berisi lauk ayam bumbu, ayam goreng, serundeng, sambal, kacang, sayur urap, selada, timun, tomat, dan telur', '6228589b24acf.jpg'),
(16, 'Es Teh Manis', 5000, 'Minuman', 'Normal', 'Ini adalah minuman teh yang di beri es batu', '621df58468573.jpg'),
(17, 'Teh Anget', 3000, 'Minuman', 'Normal', 'Ini adalah minuman teh hangat', '621df666b3445.jpeg'),
(18, 'Jeruk Hangat', 5000, 'Minuman', 'Normal', 'Ini adalah minuman jeruk hangat, buah jeruk yang di peras dan diberi air hangat ', '621df72dc83f5.jpg'),
(19, 'Es Jeruk', 6000, 'Minuman', 'Normal', 'Ini adalah minuman es jeruk, buah jeruk yang diperas lalu ditambahkan es ', '621df7493ae64.jpg'),
(20, 'Nasi Campur', 15000, 'Makanan', 'Normal', 'Nasi campur yang berisi lauk ayam bumbu Bali, telur, serundeng,kacang, sayur urap, sambal, mie, ayam goreng.', '622857f6a9e52.jpg'),
(21, 'Paket Mujair Lengkap', 45000, 'Paket', 'Normal', 'Paket Mujair yang berisi nasi dan tambahan lauk seperti tempe,telur,kacang, sambal matah dan berisi sayur urap. Ikan mujair bisa request rasa ( bumbu nyat - nyat, bbq, sambal matah)', '6228596e4b082.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
