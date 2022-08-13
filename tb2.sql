-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:23 PM
-- Server version: 8.0.23
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harapan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `portofolio` text COLLATE utf8_unicode_ci NOT NULL,
  `riwayat_pend` text COLLATE utf8_unicode_ci NOT NULL,
  `sertifikasi` text COLLATE utf8_unicode_ci NOT NULL,
  `skill` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `password`, `email`, `name`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `alamat`, `agama`, `kebangsaan`, `harapan`, `portofolio`, `riwayat_pend`, `sertifikasi`, `skill`) VALUES
(10, '41519110089', '$2y$10$CbgJgDrDabcEcrbP19eEE.Hkj2d3yndtFh1Ak3rVcl9rUTNFN6QMO', 'ridwanaden1@gmail.com', 'Ridwan Aden Nanda Gusna', '2000-06-02', 'Laki-Laki', 'Teknik Informatika', 'JL. Mawar IV No.16a RT09/RW011, Tugu Utara, Koja, Jakarta Utara', 'Islam', 'Indonesia', '- Lulus kuliah tepat waktu dan dengan nilai yang memuaskan \r\n- Berguna untuk banyak orang \r\n- Bisa membahagiakan orang tua \r\n- Kedepan nya ingin membuat startup di bidang jasa IT Consultan bersama teman-teman \r\n- Sukses dunia akhirat', 'Juli 2018 - Desember 2018 \r\n\r\nPT Balitowerindo Sentra, Tbk - Preventive Maintenance ODC \r\n\r\n- Maintenance rutin BTS \r\n- Integrasi antar site \r\n\r\n\r\nMaret 2019 - Sekarang \r\n\r\nPT Maxindo Networks - Technical Support \r\n\r\n- Survey Kebutuhan infrastruktur jaringan IT hotel & Corporate Site \r\n- Membuat desain topologi penerapan infrastruktur jaringan client \r\n- Installasi perangkat infratruktur jaringan client \r\n- Setup dan konfigurasi perangkat jaringan internal client \r\n- Troubleshooting kendala jaringan internal client\r\n \r\nBeberapa Project infrastruktur Jaringan yang saya handle : \r\n\r\n- Takes Hotel Jakarta, a PHM Collection \r\n- Hotel Sahid Mutiara Karawaci \r\n- Teraskita Hotel Jakarta\r\n- Hotel Ciputra Cibubur ', '2006 - 2012 : \r\n- SDN Rawabadak Utara 17 PG \r\n\r\n2012 - 2015 : \r\n- SMPN 173 Jakarta \r\n\r\n2015 - 2018 : \r\n- SMKN 36 Jakarta  Teknik Komputer Jaringan \r\n\r\n2019 - Present : \r\n- Mercubuana University  Teknik Informatika', 'Sertifikasi : \r\n\r\n- Certificated Information Technology Network Security from BNSP \r\n- Certified Secure Computer User V2 (CSCU) from EC-Council \r\n- Certified Cyber Security Foundation Professional from Certiprof\r\n- Certified NSE 1 Network Security Associate from Fortinet \r\n- Certified NSE 2 Network Security Associate from Fortinet \r\n- Certificated Technical Support from NETzap Broadband Internet\r\n \r\n\r\nCourse Certification : \r\n\r\n- NDG Introduction to Linux 1 Course from Linux Professional Institute \r\n- NDG Introduction to Linux 2 Course from Linux Professional Institute \r\n- Juara Harapan II LKS Tingkat Jakarta Utara bidang Networking Support \r\n- Database Design from Oracle Academy \r\n- Participant of SINAPTIKA ', 'Hardware & Software : \r\n \r\n- Setup, Konfigurasi & Troubleshoot kerusakan Laptop, PC, Macbook \r\n\r\nNetwork : \r\n\r\n- Setup & Konfigurasi Router Mikrotik, Cisco, Juniper, Wireless Router \r\n- Setup & Konfigurasi Cisco Switch, Juniper Switch, HP Switch, Unifi Switch \r\n- Setup & Konfigurasi Cloud Controller Access Point as Unifi, Ruijie Setup & Konfigurasi any Access Point as TP-Link, Tenda, Cisco Toto-link, Engenius \r\n- Setup & Konfigurasi Radio Mikrotik, Ubiquiti, Ligowave \r\n\r\nServer : \r\n\r\n- Setup & Konfigurasi Linux Server as Web Server, File Server, DNS Server, FTP Server, etc \r\n- Setup & Konfigurasi NAS Server Synology \r\n\r\nInfrastruktur :  WAN, LAN, WLAN \r\n\r\nOperating System :  Windows 7, Windows 8, Windows 10, MacOS, Debian, Ubuntu, Kali Linux \r\n\r\nVirtualization :  Virtualbox, GNS3, VMware Vsphere/ESXI 6.x \r\n\r\nProgramming :  HTML, CSS, C++ (basic) \r\n\r\nDatabase :  Mysql, Oracle (basic)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
