-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2022 pada 05.23
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniturelife`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tabel_pelanggan` (
  `ID_pelanggan` int(5) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(62) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pelanggan`
--

INSERT INTO `tabel_pelanggan` (`ID_pelanggan`, `username`, `password`, `role`, `nama`, `alamat`, `no_hp`) VALUES
(3, 'zia', 'gryzia', 'pelanggan', 'gia reyhan', 'jl. boa 3', '08567453245'),
(6, 'rio', 'easy', 'pelanggan', 'gearld rio', 'jl. beji 5', '085189356745'),
(10, 'poly', 'noone', 'pelanggan', 'qia anastasya', 'jl. dokin 3', '085621453627'),
(11, 'sisca', 'gryzia', 'pelanggan', 'berald zia', 'jl. moli 2', '08578456345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pembelian`
--

CREATE TABLE IF NOT EXISTS `tabel_pembelian` (
  `ID_pembelian` int(5) NOT NULL,
  `ID_produk` int(5) NOT NULL,
  `ID_pelanggan` int(5) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `jumlah` int(9) NOT NULL,
  `harga` int(9) NOT NULL,
  `total` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=988 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pembelian`
--

INSERT INTO `tabel_pembelian` (`ID_pembelian`, `ID_produk`, `ID_pelanggan`, `tgl_pembelian`, `jumlah`, `harga`, `total`) VALUES
(32, 29, 11, '2022-06-18', 4, 1798000, 3596000),
(98, 4, 3, '2022-06-16', 1, 2567000, 2600000),
(296, 7, 10, '2022-06-20', 1, 4980000, 4980000),
(542, 15, 6, '2022-06-09', 2, 2541000, 5082000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_produk`
--

CREATE TABLE IF NOT EXISTS `tabel_produk` (
  `ID_produk` int(5) NOT NULL,
  `nama_produk` varchar(42) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL,
  `harga_produk` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_produk`
--

INSERT INTO `tabel_produk` (`ID_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`) VALUES
(2, '45 chair B', 'Product Specification: Dimensions 71 x 76 x 83 cm. Materials: American Walnut Natural Color Solid Wood, Back and seat in Light Grey Fabric Ray1002 Cushion. Other Info: 71x76x83cm seat H42cm.', 2056000),
(4, '6 Drawer Double Lowboy', 'Product Specification: Dimensions 160 x 45 x 72.5 cm. Materials Solid ', 1764000),
(5, 'Adkins Coffee Table', 'Product Specification: Weight 59 kg. Dimensions 160 x 95 x 35 cm.', 2567000),
(7, 'Margaux Large', 'Product Specification: Dimensions 100 x 100 x 41 cm. Materials\r\nartifi', 4980000),
(9, 'Aereo', 'Product Specification: Dimensions 62 x 67 x 76(44) cm. Materials: PU +', 1876000),
(15, 'Vostra Lounge Chair', 'Product Specification: Dimensions 76 x 91 x 76 cm. Materials: Fabric + Stainless Steel in Gold. Other Info: Fabric velu-68A', 2541000),
(17, 'Ricarda', 'Product Specification: Weight33 kg. Dimensions 68 x 95 x 89 cm. Materials Fabric + Bronze Metal frame', 3027000),
(20, 'Wegner Shell Chair', 'Product Specification: Dimensions 87 x 84 x 79 cm. Materials: Fabric and White Oak Veneer', 3675000),
(25, 'Mike', 'Product Specification: Dimensions 60 x 55 x 77.5 cm. Materials: Steel chromed color rose gold', 2879000),
(29, 'Drop Chair (DF0213)', 'Product Specification: Materials: Fabric + Stainless steel. Other Info: Grey Fabric S3', 1798000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pelanggan`
--
ALTER TABLE `tabel_pelanggan`
  ADD PRIMARY KEY (`ID_pelanggan`);

--
-- Indexes for table `tabel_pembelian`
--
ALTER TABLE `tabel_pembelian`
  ADD PRIMARY KEY (`ID_pembelian`),
  ADD KEY `ID_produk` (`ID_produk`),
  ADD KEY `ID_pelanggan` (`ID_pelanggan`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`ID_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pelanggan`
--
ALTER TABLE `tabel_pelanggan`
  MODIFY `ID_pelanggan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tabel_pembelian`
--
ALTER TABLE `tabel_pembelian`
  MODIFY `ID_pembelian` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=988;
--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `ID_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_pelanggan`
--
ALTER TABLE `tabel_pelanggan`
  ADD CONSTRAINT `ID_pelanggan` FOREIGN KEY (`ID_pelanggan`) REFERENCES `tabel_pembelian` (`ID_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_pembelian`
--
ALTER TABLE `tabel_pembelian`
  ADD CONSTRAINT `tabel_pembelian_ibfk_1` FOREIGN KEY (`ID_produk`) REFERENCES `tabel_produk` (`ID_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
