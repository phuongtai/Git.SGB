-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2015 at 03:43 PM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `azcenter_sgb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenxe`
--

CREATE TABLE IF NOT EXISTS `chuyenxe` (
  `MaChuyen` char(12) NOT NULL,
  `MaTuyen` char(12) NOT NULL,
  `MaTaiXe` char(20) NOT NULL,
  `BienSo` char(12) NOT NULL,
  `NgayDi` date NOT NULL,
  `ThoiGianXuatBen` time NOT NULL,
  `GiaChuyen` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuyenxe`
--

INSERT INTO `chuyenxe` (`MaChuyen`, `MaTuyen`, `MaTaiXe`, `BienSo`, `NgayDi`, `ThoiGianXuatBen`, `GiaChuyen`) VALUES
('CH0000001', 'TU001', 'TX001', '52H-9999', '2015-12-08', '00:00:00', '100000'),
('CH0000002', 'TU002', 'TX001', '52H-9999', '2015-12-08', '00:00:00', '120000'),
('CH0000003', 'TU003', 'TX003', '52H-7979', '2015-12-08', '00:00:00', '20000'),
('CH0000004', 'TU003', 'TX004', '52H-9999', '2015-12-08', '00:00:00', '150000'),
('CH0000005', 'TU004', 'TX003', '52H-3333', '2015-12-08', '00:00:00', '160000');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('03af6f4dfb8d774ddde3a316d0464113b32fec05', '42.116.6.44', 1450929488, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932393232313b),
('05bc1278ee8550804b5c544682468e1ab5cf1e5c', '115.79.39.188', 1450878709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303837383730393b),
('10dc3b03e65f4f7a5bcea35be7f1dd97a63193ff', '42.116.6.44', 1450926063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932353939363b),
('1279fceea437d5de35c4060f5e6a65145eff52b7', '42.116.6.44', 1451032717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313033323731373b),
('1c0f6094112b7e14476c54a8d3e4d88811cf2636', '42.116.6.44', 1450684048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638343034383b),
('1d8c4559c4d4ff78404efa87417616837c8e628f', '42.116.6.44', 1450685085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638353038353b),
('1efab5ffea50cf71a478a67f88993d129fa55aa6', '115.79.39.188', 1450794601, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303739343630313b),
('220647b378a8599ff16d814f9ec451564df740a7', '101.99.31.31', 1450693563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303639333536333b),
('2a02cf9f30dc6a62c91b3652f51dfa03a65d7783', '42.116.6.44', 1451015190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313031353139303b),
('2e0a7c3ce459a7b0a7f5c9fea6e074341addd7ad', '42.116.6.44', 1450928498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932383431393b6d6573736167657c733a34383a2242e1baa16e20c491c3a3206e68e1baad70207472c3b96e672e20567569204cc3b26e67206368e1bb8d6e206ce1baa169223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('2f81c773ddad388c5b2aabaf7a49869bea0ae75e', '42.116.6.44', 1450682203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638323230333b),
('31d3b11844d7a25e36407c62999e43a9ad0166d3', '173.252.122.121', 1450684650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638343635303b),
('348a09b1c88e3d1f6a53a7b387425761c4d2d222', '42.116.6.44', 1450683680, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638333533383b),
('3e80aae969e272ea496bfbfd9ec01ecac4d3ed3a', '42.116.6.44', 1450932490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303933323335333b),
('4d5db25fcf88bba3508f6d25c21d498cf1c928c1', '115.79.213.109', 1450955657, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303935353537343b),
('5d41ab353264b0f95d2c504f7ed048aff6ab59a3', '115.79.39.188', 1450879629, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303837393632383b),
('5e91fc91ae4b2a19424e56bdbccf011432d4b306', '173.252.120.119', 1450684622, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638343632323b),
('69ad72915aca38e805c81ae5c86be8f08a7252eb', '42.116.6.44', 1450926727, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932363432373b),
('7cad44b24a2bb4830e02b65e594af552451deaed', '115.78.210.191', 1450939483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303933393434323b),
('8d9b5ac40840f971a61b61094d6f702925f699b5', '115.79.39.188', 1450964726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303936343732363b),
('940690a4da7e20acb33de574cde96f5c036682f8', '42.116.6.44', 1450926915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932363734343b),
('97d615594df6cc8606baa3ebdbf945a3962bff81', '14.161.6.190', 1451024604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313032343531353b),
('a8dd0cf9333ee55a3803f8114a24bb5374925937', '115.79.39.188', 1450705944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303730353934343b),
('bed1ec13f19cdb2e7bd20299c5ad2b2b67b4c57c', '42.116.6.44', 1450927577, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303932373434333b),
('c0560f5c32b410481d99aceaa351f706514cb85e', '42.116.6.44', 1450684654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638343539353b),
('c1de9738c9d64b7ec5fba601dccc749e6b06e25e', '173.252.122.117', 1450684650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638343635303b),
('c87d660f793fca399340f88671bad11994497d84', '42.116.6.44', 1450688369, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638383336393b),
('d467bf10af9134500f5a2e639809a41e3a437290', '42.116.6.44', 1450683403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638333430333b),
('d5827b38008173064eacbcb900e990d26e0779c2', '115.79.39.188', 1450879459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303837393237393b),
('e873abe06ef8dc561ca9a99b2836422817041896', '42.116.6.44', 1450682846, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638323834363b),
('e9f70496116316024e4afee735fcb87887e93ab6', '42.116.6.44', 1451019346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313031393132333b),
('ea6df7d65abc0dc34a92c15f0edb2e6e183f094f', '42.116.6.44', 1450682694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638323536343b),
('eba51943fc2205f93b6e3fd21b87b9e832932613', '42.116.6.44', 1450683214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303638333131303b),
('f77f5342e2e28ed38074af4f445a4d50b7fa0a6b', '115.79.39.188', 1450703479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303730333238393b),
('fb3aa6649a0acf3367d3f39621d395c30f8cc6a0', '115.79.39.188', 1450703371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303730333334353b);

-- --------------------------------------------------------

--
-- Table structure for table `ct_datcho`
--

CREATE TABLE IF NOT EXISTS `ct_datcho` (
  `MaGhe` char(12) NOT NULL,
  `MaDatCho` char(12) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dangkyhoc`
--

CREATE TABLE IF NOT EXISTS `dangkyhoc` (
  `MaDangKy` char(12) NOT NULL,
  `SoCMT` char(12) NOT NULL,
  `MaKhoaHoc` char(12) NOT NULL,
  `NgayDangKy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `datcho`
--

CREATE TABLE IF NOT EXISTS `datcho` (
  `MaDatCho` char(12) NOT NULL,
  `SoCMT` char(12) NOT NULL,
  `HoTen` varchar(40) NOT NULL,
  `DiaChi` varchar(60) NOT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `SDT` char(15) NOT NULL,
  `NgayDatCho` date NOT NULL,
  `SL` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL,
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text,
  `security` varchar(16) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE IF NOT EXISTS `ghe` (
  `MaGhe` char(12) NOT NULL,
  `MaChuyen` char(12) NOT NULL,
  `MaLoaiGhe` char(12) NOT NULL,
  `ViTri` int(11) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`MaGhe`, `MaChuyen`, `MaLoaiGhe`, `ViTri`, `TrangThai`) VALUES
('CH000000101', 'CH0000001', 'LG01', 1, 1),
('CH000000102', 'CH0000001', 'LG01', 2, 1),
('CH000000103', 'CH0000001', 'LG01', 3, 1),
('CH000000104', 'CH0000001', 'LG01', 4, 1),
('CH000000105', 'CH0000001', 'LG01', 5, 1),
('CH000000106', 'CH0000001', 'LG01', 6, 1),
('CH000000107', 'CH0000001', 'LG01', 7, 1),
('CH000000108', 'CH0000001', 'LG01', 8, 1),
('CH000000109', 'CH0000001', 'LG01', 9, 1),
('CH000000110', 'CH0000001', 'LG01', 10, 1),
('CH000000111', 'CH0000001', 'LG02', 11, 1),
('CH000000112', 'CH0000001', 'LG02', 12, 1),
('CH000000113', 'CH0000001', 'LG02', 13, 1),
('CH000000114', 'CH0000001', 'LG02', 14, 1),
('CH000000115', 'CH0000001', 'LG02', 15, 0),
('CH000000116', 'CH0000001', 'LG02', 16, 0),
('CH000000117', 'CH0000001', 'LG02', 17, 0),
('CH000000118', 'CH0000001', 'LG02', 18, 0),
('CH000000119', 'CH0000001', 'LG02', 19, 0),
('CH000000120', 'CH0000001', 'LG02', 20, 0),
('CH000000121', 'CH0000001', 'LG02', 21, 1),
('CH000000122', 'CH0000001', 'LG02', 22, 1),
('CH000000123', 'CH0000001', 'LG02', 23, 1),
('CH000000124', 'CH0000001', 'LG02', 24, 1),
('CH000000125', 'CH0000001', 'LG02', 25, 1),
('CH000000126', 'CH0000001', 'LG02', 26, 0),
('CH000000127', 'CH0000001', 'LG02', 27, 1),
('CH000000128', 'CH0000001', 'LG02', 28, 1),
('CH000000129', 'CH0000001', 'LG02', 29, 1),
('CH000000201', 'CH0000002', 'LG01', 1, 1),
('CH000000202', 'CH0000002', 'LG01', 2, 1),
('CH000000203', 'CH0000002', 'LG01', 3, 1),
('CH000000204', 'CH0000002', 'LG01', 4, 1),
('CH000000205', 'CH0000002', 'LG01', 5, 1),
('CH000000206', 'CH0000002', 'LG01', 6, 1),
('CH000000207', 'CH0000002', 'LG01', 7, 1),
('CH000000208', 'CH0000002', 'LG01', 8, 1),
('CH000000209', 'CH0000002', 'LG01', 9, 1),
('CH000000210', 'CH0000002', 'LG01', 10, 1),
('CH000000211', 'CH0000002', 'LG02', 11, 1),
('CH000000212', 'CH0000002', 'LG02', 12, 1),
('CH000000213', 'CH0000002', 'LG02', 13, 1),
('CH000000214', 'CH0000002', 'LG02', 14, 1),
('CH000000215', 'CH0000002', 'LG02', 15, 1),
('CH000000216', 'CH0000002', 'LG02', 16, 1),
('CH000000217', 'CH0000002', 'LG02', 17, 1),
('CH000000218', 'CH0000002', 'LG02', 18, 1),
('CH000000219', 'CH0000002', 'LG02', 19, 1),
('CH000000220', 'CH0000002', 'LG02', 20, 1),
('CH000000221', 'CH0000002', 'LG02', 21, 1),
('CH000000222', 'CH0000002', 'LG02', 22, 1),
('CH000000223', 'CH0000002', 'LG02', 23, 1),
('CH000000224', 'CH0000002', 'LG02', 24, 1),
('CH000000225', 'CH0000002', 'LG02', 25, 1),
('CH000000226', 'CH0000002', 'LG02', 26, 1),
('CH000000227', 'CH0000002', 'LG02', 27, 1),
('CH000000228', 'CH0000002', 'LG02', 28, 1),
('CH000000229', 'CH0000002', 'LG02', 29, 1),
('CH000000301', 'CH0000003', 'LG01', 1, 1),
('CH000000302', 'CH0000003', 'LG01', 2, 1),
('CH000000303', 'CH0000003', 'LG01', 3, 1),
('CH000000304', 'CH0000003', 'LG01', 4, 1),
('CH000000305', 'CH0000003', 'LG01', 5, 1),
('CH000000306', 'CH0000003', 'LG01', 6, 1),
('CH000000307', 'CH0000003', 'LG01', 7, 1),
('CH000000308', 'CH0000003', 'LG01', 8, 1),
('CH000000309', 'CH0000003', 'LG01', 9, 1),
('CH000000310', 'CH0000003', 'LG01', 10, 1),
('CH000000311', 'CH0000003', 'LG02', 11, 1),
('CH000000312', 'CH0000003', 'LG02', 12, 1),
('CH000000313', 'CH0000003', 'LG02', 13, 1),
('CH000000314', 'CH0000003', 'LG02', 14, 1),
('CH000000315', 'CH0000003', 'LG02', 15, 1),
('CH000000316', 'CH0000003', 'LG02', 16, 1),
('CH000000317', 'CH0000003', 'LG02', 17, 1),
('CH000000318', 'CH0000003', 'LG02', 18, 1),
('CH000000319', 'CH0000003', 'LG02', 19, 1),
('CH000000320', 'CH0000003', 'LG02', 20, 1),
('CH000000321', 'CH0000003', 'LG02', 21, 1),
('CH000000322', 'CH0000003', 'LG02', 22, 1),
('CH000000323', 'CH0000003', 'LG02', 23, 1),
('CH000000324', 'CH0000003', 'LG02', 24, 1),
('CH000000325', 'CH0000003', 'LG02', 25, 1),
('CH000000326', 'CH0000003', 'LG02', 26, 1),
('CH000000327', 'CH0000003', 'LG02', 27, 1),
('CH000000328', 'CH0000003', 'LG02', 28, 1),
('CH000000329', 'CH0000003', 'LG02', 29, 1),
('CH000000330', 'CH0000003', 'LG02', 30, 1),
('CH000000331', 'CH0000003', 'LG02', 31, 1),
('CH000000332', 'CH0000003', 'LG02', 32, 1),
('CH000000333', 'CH0000003', 'LG02', 33, 1),
('CH000000334', 'CH0000003', 'LG02', 34, 1),
('CH000000335', 'CH0000003', 'LG02', 35, 1),
('CH000000336', 'CH0000003', 'LG02', 36, 1),
('CH000000337', 'CH0000003', 'LG02', 37, 1),
('CH000000338', 'CH0000003', 'LG02', 38, 1),
('CH000000339', 'CH0000003', 'LG02', 39, 1),
('CH000000401', 'CH0000004', 'LG01', 1, 0),
('CH000000402', 'CH0000004', 'LG01', 2, 1),
('CH000000403', 'CH0000004', 'LG01', 3, 1),
('CH000000404', 'CH0000004', 'LG01', 4, 1),
('CH000000405', 'CH0000004', 'LG01', 5, 0),
('CH000000406', 'CH0000004', 'LG01', 6, 1),
('CH000000407', 'CH0000004', 'LG01', 7, 1),
('CH000000408', 'CH0000004', 'LG01', 8, 1),
('CH000000409', 'CH0000004', 'LG01', 9, 0),
('CH000000410', 'CH0000004', 'LG01', 10, 1),
('CH000000411', 'CH0000004', 'LG02', 11, 1),
('CH000000412', 'CH0000004', 'LG02', 12, 1),
('CH000000413', 'CH0000004', 'LG02', 13, 1),
('CH000000414', 'CH0000004', 'LG02', 14, 1),
('CH000000415', 'CH0000004', 'LG02', 15, 1),
('CH000000416', 'CH0000004', 'LG02', 16, 0),
('CH000000417', 'CH0000004', 'LG02', 17, 1),
('CH000000418', 'CH0000004', 'LG02', 18, 1),
('CH000000419', 'CH0000004', 'LG02', 19, 1),
('CH000000420', 'CH0000004', 'LG02', 20, 1),
('CH000000421', 'CH0000004', 'LG02', 21, 0),
('CH000000422', 'CH0000004', 'LG02', 22, 1),
('CH000000423', 'CH0000004', 'LG02', 23, 1),
('CH000000424', 'CH0000004', 'LG02', 24, 1),
('CH000000425', 'CH0000004', 'LG02', 25, 1),
('CH000000426', 'CH0000004', 'LG02', 26, 1),
('CH000000427', 'CH0000004', 'LG02', 27, 1),
('CH000000428', 'CH0000004', 'LG02', 28, 1),
('CH000000429', 'CH0000004', 'LG02', 29, 1),
('CH000000501', 'CH0000005', 'LG01', 1, 1),
('CH000000502', 'CH0000005', 'LG01', 2, 1),
('CH000000503', 'CH0000005', 'LG01', 3, 1),
('CH000000504', 'CH0000005', 'LG01', 4, 1),
('CH000000505', 'CH0000005', 'LG01', 5, 1),
('CH000000506', 'CH0000005', 'LG01', 6, 1),
('CH000000507', 'CH0000005', 'LG01', 7, 1),
('CH000000508', 'CH0000005', 'LG01', 8, 1),
('CH000000509', 'CH0000005', 'LG01', 9, 1),
('CH000000510', 'CH0000005', 'LG01', 10, 1),
('CH000000511', 'CH0000005', 'LG02', 11, 1),
('CH000000512', 'CH0000005', 'LG02', 12, 1),
('CH000000513', 'CH0000005', 'LG02', 13, 1),
('CH000000514', 'CH0000005', 'LG02', 14, 1),
('CH000000515', 'CH0000005', 'LG02', 15, 1),
('CH000000516', 'CH0000005', 'LG02', 16, 1),
('CH000000517', 'CH0000005', 'LG02', 17, 1),
('CH000000518', 'CH0000005', 'LG02', 18, 1),
('CH000000519', 'CH0000005', 'LG02', 19, 1),
('CH000000520', 'CH0000005', 'LG02', 20, 1),
('CH000000521', 'CH0000005', 'LG02', 21, 1),
('CH000000522', 'CH0000005', 'LG02', 22, 1),
('CH000000523', 'CH0000005', 'LG02', 23, 1),
('CH000000524', 'CH0000005', 'LG02', 24, 1),
('CH000000525', 'CH0000005', 'LG02', 25, 1),
('CH000000526', 'CH0000005', 'LG02', 26, 1),
('CH000000527', 'CH0000005', 'LG02', 27, 1),
('CH000000528', 'CH0000005', 'LG02', 28, 1),
('CH000000529', 'CH0000005', 'LG02', 29, 1),
('CH000000530', 'CH0000005', 'LG02', 30, 1),
('CH000000531', 'CH0000005', 'LG02', 31, 1),
('CH000000532', 'CH0000005', 'LG02', 32, 1),
('CH000000533', 'CH0000005', 'LG02', 33, 1),
('CH000000534', 'CH0000005', 'LG02', 34, 1),
('CH000000535', 'CH0000005', 'LG02', 35, 1),
('CH000000536', 'CH0000005', 'LG02', 36, 1),
('CH000000537', 'CH0000005', 'LG02', 37, 1),
('CH000000538', 'CH0000005', 'LG02', 38, 1),
('CH000000539', 'CH0000005', 'LG02', 39, 1),
('CH000000540', 'CH0000005', 'LG02', 40, 1),
('CH000000541', 'CH0000005', 'LG02', 41, 1),
('CH000000542', 'CH0000005', 'LG02', 42, 1),
('CH000000543', 'CH0000005', 'LG02', 43, 1),
('CH000000544', 'CH0000005', 'LG02', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE IF NOT EXISTS `hocvien` (
  `SoCMT` char(12) NOT NULL,
  `HoTen` varchar(40) NOT NULL,
  `DiaChi` varchar(60) NOT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `SDT` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE IF NOT EXISTS `khoahoc` (
  `MaKhoaHoc` char(12) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `NgayThi` date DEFAULT NULL,
  `DiaChiKhoaHoc` varchar(60) NOT NULL,
  `HocPhi` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaighe`
--

CREATE TABLE IF NOT EXISTS `loaighe` (
  `MaLoaiGhe` char(12) NOT NULL,
  `TenLoaiGhe` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaighe`
--

INSERT INTO `loaighe` (`MaLoaiGhe`, `TenLoaiGhe`) VALUES
('LG01', 'VIP'),
('LG02', 'Thường');

-- --------------------------------------------------------

--
-- Table structure for table `loaixe`
--

CREATE TABLE IF NOT EXISTS `loaixe` (
  `MaLoaiXe` char(12) NOT NULL,
  `TenLoaiXe` varchar(40) NOT NULL,
  `SoGhe` int(11) NOT NULL,
  `HeSoGia` float NOT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `tivi` tinyint(1) DEFAULT NULL,
  `nuoc_uong` tinyint(1) DEFAULT NULL,
  `khan_lanh` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaixe`
--

INSERT INTO `loaixe` (`MaLoaiXe`, `TenLoaiXe`, `SoGhe`, `HeSoGia`, `wifi`, `tivi`, `nuoc_uong`, `khan_lanh`) VALUES
('LX01', 'Xe buýt Bà Hai', 30, 1.1, 1, 0, 0, 1),
('LX02', 'Xe buýt Trường Giang', 40, 1.15, 1, 1, 1, 1),
('LX03', 'Xe giường nằm', 45, 1.25, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taixe`
--

CREATE TABLE IF NOT EXISTS `taixe` (
  `MaTaiXe` char(20) NOT NULL,
  `TenTaiXe` varchar(60) NOT NULL,
  `Luong` decimal(10,0) DEFAULT NULL,
  `GhiChu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taixe`
--

INSERT INTO `taixe` (`MaTaiXe`, `TenTaiXe`, `Luong`, `GhiChu`) VALUES
('TX001', 'Phương Tài', '1500000', 'Độc thân'),
('TX002', 'Vòng Anh Quyền', '1000000', ''),
('TX003', 'Nguyễn Trọng Nghĩa', '1000000', ''),
('TX004', 'Nguyễn Thành Trí', '1000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tram`
--

CREATE TABLE IF NOT EXISTS `tram` (
  `MaTram` char(12) NOT NULL,
  `TenTram` varchar(40) NOT NULL,
  `GhiChu` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tram`
--

INSERT INTO `tram` (`MaTram`, `TenTram`, `GhiChu`) VALUES
('TR001', 'Thành Phố Hồ Chí Minh', NULL),
('TR002', 'Vũng Tàu', NULL),
('TR003', 'Đà Lạt', NULL),
('TR004', 'Biên Hòa', NULL),
('TR005', 'Long An', NULL),
('TR007', 'Đà Nẵng', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tuyenxe`
--

CREATE TABLE IF NOT EXISTS `tuyenxe` (
  `MaTuyen` char(12) NOT NULL,
  `TenTuyen` varchar(40) NOT NULL,
  `TramBatDau` char(12) NOT NULL,
  `TramKetThuc` char(12) NOT NULL,
  `LoTrinh` varchar(60) DEFAULT NULL,
  `SoKM` int(11) DEFAULT NULL,
  `SoNgayDi` int(11) NOT NULL,
  `SoGioDi` time DEFAULT NULL,
  `GiaTuyen` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuyenxe`
--

INSERT INTO `tuyenxe` (`MaTuyen`, `TenTuyen`, `TramBatDau`, `TramKetThuc`, `LoTrinh`, `SoKM`, `SoNgayDi`, `SoGioDi`, `GiaTuyen`) VALUES
('TU001', 'TP HCM-Vũng Tàu', 'TR001', 'TR002', 'TP HCM-Vũng Tàu', 200, 0, '01:20:00', '40000'),
('TU002', 'TP HCM-Đà Lạt', 'TR001', 'TR003', 'TP HCM-Đà Lạt', 400, 0, '02:20:00', '400000'),
('TU003', 'TP HCM-Biên Hòa', 'TR001', 'TR004', 'TP HCM-Biên Hòa', 150, 0, '01:30:00', '60000'),
('TU004', 'TP HCM-Long An', 'TR001', 'TR005', 'TP HCM-Long An', 219, 0, '02:00:00', NULL),
('TU006', 'Sài Gòn - Bình Thuận', 'TR001', 'TR007', 'TPHCM-Bình Thuận', 300, 0, '07:00:00', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE IF NOT EXISTS `xe` (
  `BienSo` char(12) NOT NULL,
  `MaLoaiXe` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`BienSo`, `MaLoaiXe`) VALUES
('52H-3323', 'LX01'),
('52H-9999', 'LX01'),
('52H-1111', 'LX02'),
('52H-6155', 'LX02'),
('52H-7979', 'LX02'),
('52H-3333', 'LX03'),
('52H-6666', 'LX03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD PRIMARY KEY (`MaChuyen`), ADD KEY `FK_BIENSO` (`BienSo`), ADD KEY `fk_matuyen_chuyenxe` (`MaTuyen`), ADD KEY `fk_mataixe_chuyenxe` (`MaTaiXe`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ct_datcho`
--
ALTER TABLE `ct_datcho`
  ADD PRIMARY KEY (`MaGhe`,`MaDatCho`), ADD KEY `FK_MADATCHO` (`MaDatCho`);

--
-- Indexes for table `dangkyhoc`
--
ALTER TABLE `dangkyhoc`
  ADD PRIMARY KEY (`MaDangKy`), ADD KEY `FK_SOCMT` (`SoCMT`), ADD KEY `FK_MAKHOAHOC` (`MaKhoaHoc`);

--
-- Indexes for table `datcho`
--
ALTER TABLE `datcho`
  ADD PRIMARY KEY (`MaDatCho`);

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`MaGhe`), ADD KEY `FK_MALOAI_GHE` (`MaLoaiGhe`), ADD KEY `FK_GHE_CHUYENXE` (`MaChuyen`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`SoCMT`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MaKhoaHoc`);

--
-- Indexes for table `loaighe`
--
ALTER TABLE `loaighe`
  ADD PRIMARY KEY (`MaLoaiGhe`);

--
-- Indexes for table `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`MaLoaiXe`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taixe`
--
ALTER TABLE `taixe`
  ADD PRIMARY KEY (`MaTaiXe`);

--
-- Indexes for table `tram`
--
ALTER TABLE `tram`
  ADD PRIMARY KEY (`MaTram`);

--
-- Indexes for table `tuyenxe`
--
ALTER TABLE `tuyenxe`
  ADD PRIMARY KEY (`MaTuyen`), ADD KEY `fk_batdau` (`TramBatDau`), ADD KEY `fk_ketthuc` (`TramKetThuc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`BienSo`), ADD KEY `FK_MALOAIXE` (`MaLoaiXe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
ADD CONSTRAINT `FK_BIENSO` FOREIGN KEY (`BienSo`) REFERENCES `xe` (`BienSo`),
ADD CONSTRAINT `FK_MATUYENXE` FOREIGN KEY (`MaTuyen`) REFERENCES `tuyenxe` (`MaTuyen`),
ADD CONSTRAINT `fk_mataixe_chuyenxe` FOREIGN KEY (`MaTaiXe`) REFERENCES `taixe` (`MaTaiXe`),
ADD CONSTRAINT `fk_matuyen_chuyenxe` FOREIGN KEY (`MaTuyen`) REFERENCES `tuyenxe` (`MaTuyen`);

--
-- Constraints for table `ct_datcho`
--
ALTER TABLE `ct_datcho`
ADD CONSTRAINT `FK_MADATCHO` FOREIGN KEY (`MaDatCho`) REFERENCES `datcho` (`MaDatCho`),
ADD CONSTRAINT `FK_MAGHE_CTDC` FOREIGN KEY (`MaGhe`) REFERENCES `ghe` (`MaGhe`);

--
-- Constraints for table `dangkyhoc`
--
ALTER TABLE `dangkyhoc`
ADD CONSTRAINT `FK_MAKHOAHOC` FOREIGN KEY (`MaKhoaHoc`) REFERENCES `khoahoc` (`MaKhoaHoc`),
ADD CONSTRAINT `FK_SOCMT` FOREIGN KEY (`SoCMT`) REFERENCES `hocvien` (`SoCMT`);

--
-- Constraints for table `ghe`
--
ALTER TABLE `ghe`
ADD CONSTRAINT `FK_GHE_CHUYENXE` FOREIGN KEY (`MaChuyen`) REFERENCES `chuyenxe` (`MaChuyen`),
ADD CONSTRAINT `FK_MALOAI_GHE` FOREIGN KEY (`MaLoaiGhe`) REFERENCES `loaighe` (`MaLoaiGhe`);

--
-- Constraints for table `tuyenxe`
--
ALTER TABLE `tuyenxe`
ADD CONSTRAINT `fk_batdau` FOREIGN KEY (`TramBatDau`) REFERENCES `tram` (`MaTram`),
ADD CONSTRAINT `fk_ketthuc` FOREIGN KEY (`TramKetThuc`) REFERENCES `tram` (`MaTram`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
ADD CONSTRAINT `FK_MALOAIXE` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
