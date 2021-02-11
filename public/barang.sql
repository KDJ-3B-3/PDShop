-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('ali12', '1234'),
('dpaidan', 'bajubaru19'),
('admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebrg` int(5) NOT NULL,
  `namabrg` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `namafoto` varchar(80) NOT NULL,
  `berat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebrg`, `namabrg`, `harga`, `stock`, `namafoto`, `berat`) VALUES
(12345, 'Canon EOS 3000D Kit EF-S 18-55mm f/3.5-5.6 III', 4925000, 1, 'Canon_EOS_3000D', 2),
(12346, 'Canon EOS 1500D Kit EF-S 18-55mm f/3.5-5.6 IS II', 6740000, 2, 'Canon_EOS_1500D', 2),
(12347, 'Canon EOS 1300D Kit EF-S 18-55mm IS II ', 5330000, 0, 'Canon_EOS_1300D', 1.2),
(12348, 'Nikon D3400 Kit AF-P 18-55mm VR', 6720000, 4, 'NIKON_D3400', 1.2),
(12349, 'Nikon D5500 Kit AF-S 18-55mm VR II', 10250000, 7, 'Nikon-D5500', 4),
(12350, 'Nikon D5600 kit AF-P DX 18-55mm f/3.5-5.6G VR', 9999000, 8, 'Nikon-D5600', 1.4),
(12351, 'Lensa Meike 35mm F1.4 EFM-Mount For Canon', 1650000, 8, 'Lensa_Meike_35mm', 0.8),
(12352, 'Lensa 7Artisans 50mm F1.8 Canon EOS M Mount', 1020000, 1, 'Lensa-7Artisans-50mm', 0.2),
(12353, 'Lensa Canon EF 24-105mm F/3.5-5.6 IS STM', 6952000, 0, 'Lensa_Canon_EF24-105mm', 0.5),
(12354, 'Tripod Takara Light Weight VIT-283A', 410000, 3, 'Takara-VIT-283', 1.8),
(12355, 'Memory SDHC TOSHIBA 32GB 100MB/s', 165000, 85, 'SDHC-Toshiba-32GB', 0.1),
(12356, 'Baterai Charger Kingma Sony FW50', 430000, 23, 'Kingma-Sony-FW50', 0.3),
(12357, 'Ulanzi UURig C-A6400 For Sony A6400 Camera Cage', 480000, 32, 'Ulanzi-UURig-C-A6400', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `IDpembeli` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NamaPembeli` varchar(20) NOT NULL,
  `NomorHP` varchar(13) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `KodePos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`IDpembeli`, `Username`, `Password`, `NamaPembeli`, `NomorHP`, `Alamat`, `KodePos`) VALUES
(1, 'nadia', 'Bajubaru19', 'Nadia Putri D', '0895320440939', 'Cilegon', 42418),
(2, 'Maya12', 'mayamaya', 'Maya Estianti', '081398477006', 'Banten', 44126),
(3, 'evinaay', 'jimin', 'Evina Yustiningsih', '08123453342', 'Serang', 11220),
(4, 'cacalivia', 'indiaindia', 'Caca Salsabila', '085946323041', 'Tangerang', 45326),
(5, 'rhio123', 'rhio123', 'Rhio', '08123453345', 'Bandung', 42418);

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `IDpenjualan` int(10) NOT NULL,
  `kodebrg` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`IDpenjualan`, `kodebrg`, `harga`, `qty`) VALUES
(63, 12348, 6720000, 3),
(63, 12350, 9999000, 3),
(63, 12349, 10250000, 3),
(63, 12353, 6952000, 1),
(64, 12356, 430000, 1),
(64, 12349, 10250000, 2),
(65, 12347, 5330000, 2),
(66, 12350, 9999000, 1),
(66, 12349, 10250000, 1),
(67, 12348, 6720000, 1),
(68, 12348, 6720000, 1),
(69, 12347, 5330000, 1),
(70, 12350, 9999000, 1),
(71, 12349, 10250000, 1),
(71, 12350, 9999000, 1),
(71, 12351, 1650000, 1),
(72, 12352, 1020000, 1),
(72, 12351, 1650000, 1),
(73, 12352, 1020000, 1),
(73, 12351, 1650000, 1),
(74, 12353, 6952000, 1),
(74, 12357, 480000, 1),
(75, 12353, 6952000, 2),
(75, 12354, 410000, 1),
(75, 12355, 165000, 5),
(76, 12345, 4925000, 2),
(77, 12346, 6740000, 1),
(77, 12357, 480000, 1),
(78, 12347, 5330000, 1),
(78, 12351, 1650000, 1),
(79, 12346, 6740000, 1),
(79, 12356, 430000, 1),
(79, 12357, 480000, 1),
(80, 12347, 5330000, 1),
(80, 12354, 410000, 1),
(80, 12352, 1020000, 1),
(81, 12354, 410000, 1),
(81, 12346, 6740000, 1),
(82, 12345, 4925000, 2),
(82, 12347, 5330000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `kec_asal` varchar(25) NOT NULL,
  `kec_tujuan` varchar(25) NOT NULL,
  `ongkir_per_kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`kec_asal`, `kec_tujuan`, `ongkir_per_kg`) VALUES
('Sukajadi', 'Koja', 11000),
('Sukajadi', 'Cilegon', 14000),
('Sukajadi', 'Tambora', 11000),
('Sukajadi', 'Belalau', 32000),
('Sukajadi', 'Asemrowo', 19000),
('Sukajadi', 'Pesanggrahan', 29000),
('Sukajadi', 'Sumur', 19000),
('Sukajadi', 'Leuwigoong', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `IDpenjualan` int(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `t_ongkir` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kec_tujuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`IDpenjualan`, `tanggal`, `total`, `t_ongkir`, `nama`, `hp`, `alamat`, `kec_tujuan`) VALUES
(63, '2020-12-15 15:12:59', 87859000, 0, '', '', '', ''),
(64, '2020-12-15 15:33:02', 20930000, 0, 'Nadia', '0895320440930', 'Cilegon', ''),
(65, '2020-12-15 15:55:41', 10660000, 0, 'alivia', '09883', 'cilegon', ''),
(66, '2020-12-15 16:08:37', 20249000, 0, 'rasya', '08139992745', 'Bandung', ''),
(67, '2020-12-15 16:11:18', 6720000, 0, 'tes', '12355', 'Alam semesta', ''),
(68, '2020-12-15 16:14:25', 6720000, 0, 'test', '82837', 'cilegon', ''),
(69, '2020-12-15 16:16:05', 5330000, 0, 'abc', '12355', 'Grogol', ''),
(70, '2020-12-15 16:22:28', 9999000, 0, 'nadia', '34222', 'serang', ''),
(71, '2020-12-15 16:25:26', 21899000, 0, 'Kresna', '1235535', 'Bandung', ''),
(72, '2020-12-15 16:33:29', 2670000, 0, 'Caca', '081398477006', 'Serang', ''),
(73, '2020-12-15 16:34:46', 2670000, 0, 'Caca', '081398477006', 'Serang', ''),
(74, '2020-12-15 16:37:38', 7432000, 0, 'Evina', '082746223', 'Cilegon', ''),
(75, '2021-01-05 15:11:39', 15139000, 3, 'nadia', '0895320440930', 'Jl. Kemuning 6', ''),
(76, '2021-01-05 15:15:19', 9850000, 4, 'nadia', '938928323', 'BBS II', ''),
(77, '2021-01-05 15:25:07', 7220000, 21000, 'Evina', '08139872334', 'Bukit Baja Sejahtera', ''),
(78, '2021-01-05 15:58:04', 6980000, 20000, 'Lena', '022234521', 'BBS', 'Pesanggrahan'),
(79, '2021-01-08 19:31:38', 7683000, 33000, 'Nadia', '0895320440939', 'Blok K6 VIII', 'Koja'),
(80, '2021-01-08 19:54:07', 6793000, 33000, 'Nadira', '0983848', 'Jl blablabla', 'Koja'),
(81, '2021-01-08 19:55:10', 7206000, 56000, 'Nadira A', '2988471', 'Jalan jalan', 'Cilegon'),
(82, '2021-02-02 14:33:02', 15250000, 70000, 'nadia', '08927475344', 'cilegon', 'Cilegon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebrg`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IDpembeli`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD KEY `fk_id_penjualan` (`IDpenjualan`),
  ADD KEY `fk_kode_barang` (`kodebrg`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IDpenjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kodebrg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12373;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `IDpembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `IDpenjualan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jual`
--
ALTER TABLE `jual`
  ADD CONSTRAINT `fk_id_penjualan` FOREIGN KEY (`IDpenjualan`) REFERENCES `penjualan` (`IDpenjualan`),
  ADD CONSTRAINT `fk_kode_barang` FOREIGN KEY (`kodebrg`) REFERENCES `barang` (`kodebrg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
