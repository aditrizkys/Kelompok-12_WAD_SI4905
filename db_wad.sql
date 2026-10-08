-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2026 at 09:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `armada_operasional`
--

CREATE TABLE `armada_operasional` (
  `id` varchar(1024) DEFAULT NULL,
  `jenis_kendaraan` varchar(1024) DEFAULT NULL,
  `nomor_dokumen_perawatan` varchar(1024) DEFAULT NULL,
  `nomor_seri` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `armada_operasional`
--

INSERT INTO `armada_operasional` (`id`, `jenis_kendaraan`, `nomor_dokumen_perawatan`, `nomor_seri`) VALUES
('INV-001', 'Forklift Diesel', 'DOC-MNT-2023-011', 'FK-35D-2021-0891'),
('INV-002', 'Pick-up Box', 'DOC-MNT-2023-045', 'PU-L300-2019-4412'),
('INV-003', 'Forklift Elektrik', 'DOC-MNT-2024-002', 'FKE-18E-2022-0034'),
('INV-004', 'Truk Engkel', 'DOC-MNT-2023-108', 'TRK-FE71-2018-9102'),
('INV-005', 'Pick-up Open Cargo', 'DOC-MNT-2023-087', 'PU-GRM-2020-5521'),
('INV-006', 'Mobil Operasional SUV', 'DOC-MNT-2024-019', 'MO-ANF-2021-3310'),
('INV-007', 'Reach Truck', 'DOC-MNT-2023-062', 'RT-BT20-2020-1189'),
('INV-008', 'Truk Blind Van', 'DOC-MNT-2023-094', 'BV-APV-2019-7832'),
('INV-009', 'Truk Tronton Box', 'DOC-MNT-2023-115', 'TT-FL260-2017-0411'),
('INV-010', 'Forklift LPG', 'DOC-MNT-2024-005', 'FK-25G-2021-6604'),
('INV-011', 'Pick-up Double Cabin', 'DOC-MNT-2024-031', 'PU-DMX-2022-8910'),
('INV-012', 'Tow Tractor', 'DOC-MNT-2023-053', 'TT-TG30-2018-2290'),
('INV-013', 'Mobil Operasional MPV', 'DOC-MNT-2023-078', 'MO-AVZ-2020-4109'),
('INV-014', 'Forklift Heavy Duty', 'DOC-MNT-2023-120', 'FK-100D-2016-0102'),
('INV-015', 'Truk Wingbox', 'DOC-MNT-2024-012', 'WB-GXZ-2021-7721'),
('INV-016', 'Hand Stacker Elektrik', 'DOC-MNT-2024-040', 'HS-15E-2023-0051'),
('INV-017', 'Pick-up Box', 'DOC-MNT-2023-099', 'PU-L300-2021-4498'),
('INV-018', 'Mobil Minibus Operasional', 'DOC-MNT-2023-033', 'MO-HIC-2019-3388'),
('INV-019', 'Forklift Diesel', 'DOC-MNT-2024-022', 'FK-50D-2022-9012'),
('INV-020', 'Truk Dump', 'DOC-MNT-2023-142', 'DT-FM260-2018-6120'),
('INV-021', 'Order Picker', 'DOC-MNT-2024-008', 'OP-V10-2021-0983'),
('INV-022', 'Pick-up Open Cargo', 'DOC-MNT-2023-019', 'PU-CST-2017-1234'),
('INV-023', 'Forklift Elektrik', 'DOC-MNT-2024-051', 'FKE-25E-2023-0144'),
('INV-024', 'Truk CDE Box', 'DOC-MNT-2023-071', 'TRK-NK71-2020-8812'),
('INV-025', 'Mobil Operasional Sedan', 'DOC-MNT-2024-015', 'MO-ALT-2022-5001');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(60) DEFAULT NULL,
  `email_vendor` varchar(60) DEFAULT NULL,
  `telp_vendor` int(11) DEFAULT NULL,
  `alamat_vendor` varchar(120) DEFAULT NULL,
  `kota_vendor` varchar(60) DEFAULT NULL,
  `provinsi_vendor` varchar(60) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
