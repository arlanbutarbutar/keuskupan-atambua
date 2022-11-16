-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2022 pada 00.07
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuskupan_atambua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('ivan7', 'f09fc73b725e90ab2c85805988e68859', 'ivan7'),
('katedral', 'e3ea783b3a705a00356b284f0586386b', 'katedral');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_paroki`
--

CREATE TABLE `daftar_paroki` (
  `id_par` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `Paroki` varchar(100) NOT NULL,
  `pelindung` varchar(100) NOT NULL,
  `buku_baptis` varchar(100) NOT NULL,
  `nama_pastor` varchar(100) NOT NULL,
  `jumlah_umat` varchar(100) NOT NULL,
  `dekenat` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_paroki`
--

INSERT INTO `daftar_paroki` (`id_par`, `id_keuskupan`, `Paroki`, `pelindung`, `buku_baptis`, `nama_pastor`, `jumlah_umat`, `dekenat`, `alamat`) VALUES
(1, 1, 'ALAS', 'Salib Suci', 'Sejak tahun 1975 Sebelumnya di Kada.', 'P. Yohanes Napan, SVD', '6,779 Umat', 'Malaka', 'Pastoran Katolik Alas Atambua 85702, Timor-NTT'),
(2, 1, 'ATAMBUA/KATEDRAL', 'St. Maria Imakulata', 'Sejak tahun 1926. Sebelumnya di Halilulik.', 'Rm. Stefanus Boisala, Pr', '23,659 Umat', 'Belu Utara', 'Pastoran Katolik Atambua, Atambua 85702, Timor-NTT'),
(3, 1, 'ATAPUPU', 'St. Maria Stella Maris', 'Sejak tahun 1883. Sebelumnya di Jakarta.', 'Rm. Samuel Yoris Giri, Pr ', '14.158 Umat', 'Belu Utara', '	Pastoran Katolik Atapupu, Atambua 85702, Timor - NTT'),
(4, 1, 'BAKITOLAS', 'St. Yohanes Pemandi', 'Sejak tahun 2003. Sebelumnya di Manamas.', 'Rm. Delvi Abanit Asa, Pr', '3.195 Umat', 'Kefamenanu', 'Pastoran Katolik Baki-tolas, Kefamenanu 85611, TTU-Timor-NTT'),
(5, 1, 'BESIKAMA', 'St. Yohanes Pemandi', 'Sejak tahun 1938. Sebelumnya di Tubaki.', 'Rm. Cyrilus Oktovianus Timo, Pr', '16.877 Umat', 'Malaka', 'Pastoran Katolik Besikama, Atambua 85702, Timor â€“ NTT.'),
(6, 1, 'BETUN', 'St. Maria Fatima', 'Sejak tahun 1924. Sebelumnya di Tubaki.', 'Rm. Antonius Herminus Bere, Pr', '21.534 Umat', 'Malaka', 'Pastoran Katolik Betun, Atambua 85702, Timor â€“ NTT.'),
(7, 1, 'BIJAEPASU', 'St. Nikolaus', 'Sejak tahun 1969. Sebelumnya di Noemuti.', 'Rm. Emanuel Usboko, Pr', '8.054 Umat', 'Kefamenanu', 'Pastoran Katolik Bijaepasu, Kefamenanu 85611, TTU-Timor-NTT'),
(8, 1, 'BIUDUKFOHO', 'St. Mikhael', 'Sejak tahun 1959. Sebelumnya di Besikama.', 'Rm. Jakobus Nabu, Pr', '8.516 Umat', 'Malaka', 'Pastoran Katolik Biudukfoho, Atambua 85702, Timor â€“ NTT'),
(9, 1, 'BOLAN', 'St. Fransiskus Xaverius', 'Sejak tahun 1966. Sebelumnya di Tubaki.', 'Rm. Yosef Meak, Pr', '10.127 Umat', 'Malaka', 'Pastoran Katolik Bolan, Atambua 85702, Timor â€“ NTT'),
(10, 1, 'EBAN', 'St. Maria Diangkat ke Surga', 'Sejak tahun 1949. Sebelumnya di Noemuti.', 'Rm. Ignatius M. Kabosu, Pr ', '12.604 Umat', 'Kefamenanu', 'Pastoran Katolik Eban, Kefamenanu 85611, TTU-Timor - NTT'),
(11, 1, 'FAFINESU', 'St. Antonius Padua', 'Sejak tahun 2000. Sebelumnya di Maubesi.', 'Rm. Agustinus D. Nesi, Pr', '4.304 Umat', 'Mena', 'Pastoran Katolik Fafinesu, Kefamenanu 85611, TTU-Timor-NTT'),
(12, 1, ' FATUBENAO', 'St. Agustinus', 'Sejak tahun 2002. Sebelumnya di Atambua.', 'Rm. Renso Tae Lake, Pr', '8.920 Umat', 'Belu Utara', 'Pastoran Katolik Fatubenao, Atambua 85702, Timor â€“ NTT'),
(13, 1, 'FATUKETI', 'St. Maria Bunda Penebus', 'Sejak tahun 2002. Sebelumnya di Atambua.', 'Rm. Agustinus Klau, Pr', '5.964 Umat', 'Belu Utara', 'Pastoran Katolik Fatuketi, Atambua 85702, Timor â€“ NTT'),
(14, 1, 'FATUONI', 'St. Fransiskus Xaverius', 'Sejak tahun 2003. Sebelumnya di Ponu.', 'Rm. Maxi Amnanu, Pr', '8.240 Umat', 'Kefamenanu', 'Pastoran Katolik Fatuoni, Kefamenanu 85611, TTU-Timor-NTT'),
(15, 1, 'FULUR', 'St. Maria Ratu Damai', 'Sejak tahun 1975. Sebelumnya di Nualain.', 'Rm. Primus Seran, Pr', '6.386 Umat', 'Belu Utara', 'Pastoran Katolik Fulur Atambua 85702, Timor â€“ NTT'),
(16, 1, 'HAEKESAK', 'St. Aloysius Gonzaga', 'Sejak tahun 2006. Sebelumnya di Lahurus.', 'Rm. Niko Nahak Dalu, Pr', '14.935 Umat', 'Belu Utara', 'Pastoran Katolik Haekesak, Atambua 85702 Timor â€“ NTT'),
(17, 1, 'HALILULIK', 'Roh Kudus', 'Sejak tahun 1918. Sebelumnya di Lahurus.', 'Rm. Febronius Fenat, Pr', '19.347 Umat', 'Belu Utara', 'Keuskupan Atambua, Atambua 85702, Timor-NTT'),
(18, 1, 'HALIWEN', 'St. Yohanes Pemandi', 'Sejak tahun 2007. Sebelumnya di Katedral Atambua.', 'Rm. Herman Nurak, Pr', '9.065 Umat', 'Belu Utara', 'Pastoran Katolik Haliwen, Atambua 85702, Timor-NTT'),
(19, 1, 'HAUMENI', 'Kristus Raja', 'Sejak tahun 1984. Sebelumnya di Kefamenanu.', 'Rm. Ignatius Alo Bria Neno, Pr', '8.086 Umat', 'Kefamenanu', 'Pastoran Katolik Haumeni, Kefamenanu 85611, TTU-Timor-NTT'),
(20, 1, 'JAK', 'St. Arnoldus Janssen', 'Sejak tahun 2009. Sebelumnya di Tunbaba.', 'Rm. Flafianus Kuftalan, Pr', '2.493 Umat', 'Kefamenanu', 'Pastoran Katolik Jak, Kefamenanu 85611, TTU-Timor-NTT'),
(21, 1, 'KADA', 'St. Mikhael', 'Sejak tahun 1959. Sebelumnya di Betun.', 'Rm. Yohanes Erwin Asa, Pr ', '7.920 Umat', 'Malaka', 'Pastoran Katolik Kada, Atambua 85702, Timor-NTT'),
(22, 1, 'KAMANASA', 'Kristus Raja', '	Sejak tahun 2005. Sebelumnya di Betun.', 'P. Andreas Hane, SVD', '6.160 Umat', 'Malaka', 'Pastoran Katolik Kamanasa, Atambua 85702 Timor-NTT'),
(23, 1, 'KAPUTU', 'St. Yohanes Pemandi', 'Sejak tahun 2003. Sebelumnya di Kotafoun.', 'Rm. Yonathas Nahak, Pr', '10.124 Umat', 'Malaka', 'Pastoran Katolik Kaputu, Atambua 85702, Timor-NTT'),
(24, 1, 'KEFAMENANU', 'St. Theresia', 'Sejak tahun 1934. Sebelumnya di Noemuti.', 'Rm. Djanuarius Maukura, Pr', '13.322 Umat', 'Kefamenanu', 'Pastoran Katolik Santa Theresia, Kefamenanu 85611 TTU-Timor-NTT.'),
(25, 1, 'KIUPUKAN', 'St. Maria Penyelenggara Segala Rahmat', 'Sejak tahun 1929. Sebelumnya di Noemuti.', 'Rm. Donatus Tefa, Pr', '13.967 Umat', 'Kefamenanu', 'Pastoran Katolik Kiupukan, Kefamenanu 85611, TTU-Timor-NTT.'),
(26, 1, 'KLESELEON', 'St. Antonius Padua', 'Sejak tahun 2002. Sebelumnya di Besikama.', 'Rm. Marcellus Bria, Pr', '9.612 Umat', 'Malaka', 'Pastoran Katolik Kleseleon, Atambua 85702, Timor-NTT'),
(27, 1, 'KOTAFOUN', 'St. Sesilia', 'Sejak tahun 1939. Sebelumnya di Tubaki.', 'Rm. Balthasar Seran, Pr', '12.689 Umat', 'Malaka', 'Pastoran Katolik Kotafoun, Atambua 85702, Timor-NTT'),
(28, 1, 'LAHURUS', 'St. Petrus', 'Sejak tahun 1886. Sebelumnya di Atapupu.', 'P. Fransiskus A. Setu, SVD', '6.778 Umat', 'Belu Utara', 'Pastoran Katolik Lahurus, Atambua 85702, Timor-NTT'),
(29, 1, 'LAKTUTUS', 'Hati Kudus Yesus', 'Sejak tahun 2004. Sebelumnya di Halilulik.', 'P. Kristoforus Tara, OFM', '4.517 Umat', 'Belu Utara', 'Pastoran Katolik Laktutus, Atambua 85702, Timor-NTT'),
(30, 1, 'LURASIK', 'St. Petrus dan Paulus', 'Sejak tahun 1985. Sebelumnya di Manufui.', 'Rm. Inosensius Nahak Berek, Pr', '8.125 Umat', 'Mena', 'Pastoran Katolik Lurasik, Atambua 85702, Timor-NTT'),
(31, 1, 'MAMSENA', 'St. Fransiskus Asisi', 'Sejak tahun 1975. Sebelumnya di Maubesi.', 'P. Kornelis Dosi, SVD', '2.105 Umat', 'Kefamenanu', 'Pastoran Katolik Mamsena, Kefamenanu 85611, TTU-Timor-NTT'),
(32, 1, 'MANAMAS', 'St. Yosef', 'Sejak tahun 1964. Sebelumnya di Maubesi.', ' Rm. Martin Aleroja Nahak, Pr', '4.564 Umat', 'Mena', 'Pastoran Katolik Manamas, Kefamenanu 85611, TTU-Timor-NTT'),
(33, 1, 'MANUFUI', 'St. Petrus Kanisius', 'Sejak tahun 1936. Sebelumnya di Noemuti.', 'Rm. Oktofianus Neno, Pr', '9.067 Umat', 'Mena', 'Pastoran Katolik Manufui, Kefamenanu 85611 TTU-Timor-NTT'),
(34, 1, 'MANUMEAN', 'Hati Kudus Yesus', 'Sejak tahun 1952. Sebelumnya di Manufui.', 'Rm. Emanuel Fkun, Pr', '9.581 Umat', 'Mena', 'Pastoran Katolik Manumean, Atambua 85702 Timor - NTT'),
(35, 1, 'MAUBAM', 'St. Paulus', 'Sejak tahun 2003. Sebelumnya di Noemuti.', 'Rm. Simon Opat, Pr', '3.997 Umat', 'Kefamenanu', 'Pastoran Katolik Maubam, Kefamenanu 85611, TTU-Timor-NTT'),
(36, 1, 'MAUBESI', 'St. Yohanes Maria Vianey', 'Sejak tahun 1937. Sebelumnya di Noemuti.', 'Rm. Gabriel Alos, Pr', '13.376 Umat', 'Kefamenanu', 'Pastoran Katolik Maubesi, Kefamenanu 85611, TTU-Timor-NTT'),
(37, 1, 'NAEKAKE', 'St. Bernardus', 'Sejak tahun 1984. Sebelumnya di Eban.', 'Rm. Patrisius Sixtus Bere, Pr', '3.258 Umat', 'Kefamenanu', 'Pastoran Katolik Naekake, Kefamenanu 85611, TTU-Timor-NTT'),
(38, 1, 'NAESLEU', 'St. Yohanes Pembaptis', 'Sejak tahun 1994. Sebelumnya di Kefamenanu.', 'Rm. Yohanes Seran Nahak, Pr', '11.313 Umat', 'Kefamenanu', 'Pastoran Katolik Naesleu, Kefamenanu 85611, TTU-Timor-NTT.'),
(39, 1, 'NELA', 'St. Antonius Padua', 'Sejak tahun 1971. Sebelumnya di Atambua.', 'P. Irenius Lolan, SVD', '15.937 Umat', 'Belu Utara', 'Pastoran Katolik Nela, Atambua 85702, Timor - NTT'),
(40, 1, 'NOEMUTI', 'Hati Yesus Yang Maha Kudus', 'Sejak tahun 1925. Sebelumnya di Oekusi.', 'Rm. Agustinus Berek, Pr', '14.737 Umat', 'Kefamenanu', 'Pastoran Katolik Noemuti, Kefamenanu 85611 TTU-Timor-NTT'),
(41, 1, 'NUALAIN', 'St. Gerardus', 'Sejak tahun 1939. Sebelumnya di Lahurus.', 'Rm. Oktovianus Taek, Pr', '9.736 Umat', 'Belu Utara', 'Pastoran Katolik Nualain, Atambua 85702, Timor - NTT'),
(42, 1, 'MENA', 'St. Filomena', 'Sejak tahun 1994. Sebelumnya di Ponu.', 'Rm. Yudelvianus Fon Neno, Pr', '12.491Umat', 'Mena', 'Pastoran Katolik Mena, Kefamenanu 85611, TTU-Timor-NTT'),
(43, 1, 'OENOPU', 'St. Antonius Maria Claret', 'Sejak 2015. Sebelumnya di Nurobo', 'P. Konstantinus Lakat, CMF', '5.559 Umat', 'Kefamenanu', 'Keuskupan Atambua, Atambua 85702, Timor-NTT'),
(44, 1, 'OEOLO', 'St. Maria Ratu', 'Sejak tahun 1962. Sebelumnya di Kefamenanu.', 'Rm. Yohanes Faentaono, Pr', '12.921 Umat', 'Kefamenanu', 'Pastoran Katolik Oeolo, Kefamenanu 85611 TTU -Timor - NTT'),
(45, 1, 'PONU', 'St. Maria Bunda Allah', 'Sejak tahun 1975. Sebelumnya di Manumean.', 'Rm. Fransiskus Seran, Pr', '7.930 Umat', 'Mena', 'Pastoran Katolik Ponu, Pos Atambua 85702 Timor - NTT'),
(46, 1, 'RAFAU', 'St. Yohanes Rasul', 'Sejak tahun 2004. Sebelumnya di Seon.', 'Rm. Agustinus Nabu, Pr', '11.706 Umat', 'Malaka', 'Pastoran Katolik Rafau, Atambua 85702, Timor - NTT'),
(47, 1, 'SADI', 'Tritunggal Maha Kudus', 'Sejak tahun 1991. Sebelumnya di Atambua', 'Rm. Gregorius Sainudin Dudy, Pr', '4.267 Umat', 'Belu Utara', 'Pastoran Katolik Sadi, Atambua 85702, Timor - NTT'),
(48, 1, 'SASI', 'St. Antonius Padua', 'Sejak tahun 2003. Sebelumnya di Naesleu.', 'P. Jose Alexander Fatun Nitsae,  OFM. Conv', '8.222 Umat', 'Kefamenanu', 'Pastoran Katolik Sasi, Kefamenanu 85611, TTU-Timor-NTT'),
(49, 1, 'SEON', 'Kristus Raja', 'Sejak tahun 1939. Sebelumnya di Tubaki.', 'Rm. Jefriston Benyamin Ndun, Pr', '12.578 Umat', 'Malaka', 'Pastoran Katolik Seon, Atambua 85702, Timor - NTT'),
(50, 1, 'TUKUNENO', 'St. Petrus', 'Sejak tahun 1988. Sebelumnya di Atambua.', 'Rm. Bernard Bria Seran, Pr', '12.089 Umat', 'Belu Utara', 'Pastoran Katolik Tukuneno, Atambua85702, Timor - NTT.'),
(51, 1, 'TUNBABA', 'St. Andreas (Rasul)', 'Sejak tahun 1975. Sebelumnya di Kefamenanu.', 'Rm. Yohanes P. Naben, Pr', '9.893 Umat', 'Kefamenanu', 'Pastoran Katolik Tunbaba, Kefamenanu 85611, TTU-Timor-NTT'),
(52, 1, 'WEBORA', 'St. Mikhael', 'Sejak tahun 2000. Sebelumnya di Halilulik.', 'Rm. Norbertus Nahak, Pr', '6.113 Umat', 'Belu Utara', 'Pastoran Katolik Webora, Atambua 85702, Timor - NTT'),
(53, 1, 'WEBRIAMATA', 'St. Yohanes Rasul', 'Sejak tahun 1966. Sebelumnya di Besikama.', 'Rm. Yohanes Kristian Kali, Pr', '7.283 Umat', 'Malaka', 'Pastoran Katolik Webriamata, Atambua 85702, Timor - NTT'),
(54, 1, 'WEDOMU', 'St. Paulus', 'Sejak tahun 1994. Sebelumnya di Atambua.', 'Rm. Paulus Nahak II, Pr', '10.357 Umat', 'Belu Utara', 'Pastoran Katolik Wedomu, Atambua 85702, Timor - NTT'),
(55, 1, ' WEKFAU', 'St. Lukas', 'Sejak tahun 2002. Sebelumnya di Kotafoun.', 'Rm. Mikhael Maumabe, Pr', '3.791 Umat', 'Malaka', 'Pastoran Katolik Wekfau, Atambua 85702,Timor - NTT'),
(56, 1, 'WELULI ', 'St. Theodorus', 'Sejak tahun 1980. Sebelumnya di Nualain.', 'Rm. Agustinus Kau Lake, Pr', '5.434 Umat', 'Belu Utara', 'Pastoran Katolik Weluli, Atambua 85702, Timor - NTT'),
(57, 1, 'WEMASA', 'St. Laurensius', 'Sejak tahun 2004. Sebelumnya di Kada.', 'Rm. Dominggus Kabosu, Pr', '9.317 Umat', 'Belu Utara', 'Pastoran Katolik Wemasa, Atambua 85702 Timor - NTT'),
(58, 1, 'WEOE', 'Salib Suci', 'Sejak tahun 1984. Sebelumnya di Besikama.', 'Rm. Pius Nahak, Pr', '7.981 Umat', 'Malaka', 'Pastoran Katolik Weoe, Atambua 85702, Timor - NTT'),
(59, 1, 'WINI', 'St. Fransiskus Xaverius', 'Sejak tahun 2006. Sebelumnya di Manamas.', 'Rm. Theodorus Taus, Pr', '1.787 Umat', 'Mena', 'Pastoran Katolik Wini, Kefamenanu 85611, TTU-Timor-NTT'),
(69, 1, 'gggg1111', 'ggggg', 'ggggg', 'ggggggg', 'gggggg', 'gggg', 'ggggg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_paroki1`
--

CREATE TABLE `daftar_paroki1` (
  `id_par` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `Paroki` varchar(100) NOT NULL,
  `pelindung` varchar(100) NOT NULL,
  `buku_baptis` varchar(100) NOT NULL,
  `nama_pastor` varchar(100) NOT NULL,
  `jumlah_umat` varchar(100) NOT NULL,
  `dekenat` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_paroki1`
--

INSERT INTO `daftar_paroki1` (`id_par`, `id_keuskupan`, `Paroki`, `pelindung`, `buku_baptis`, `nama_pastor`, `jumlah_umat`, `dekenat`, `alamat`) VALUES
(1, 1, 'ALAS', 'Salib Suci', 'Sejak tahun 1975 Sebelumnya di Kada.', 'P. Yohanes Napan, SVD', '6,779 Umat', 'Malaka', 'Pastoran Katolik Alas Atambua 85702, Timor-NTT'),
(2, 1, 'ATAMBUA/KATEDRAL', 'St. Maria Imakulata', 'Sejak tahun 1926. Sebelumnya di Halilulik.', 'Rm. Stefanus Boisala, Pr', '23,659 Umat', 'Belu Utara', 'Pastoran Katolik Atambua, Atambua 85702, Timor-NTT'),
(3, 1, 'ATAPUPU', 'St. Maria Stella Maris', 'Sejak tahun 1883. Sebelumnya di Jakarta.', 'Rm. Samuel Yoris Giri, Pr ', '14.158 Umat', 'Belu Utara', '	Pastoran Katolik Atapupu, Atambua 85702, Timor - NTT'),
(4, 1, 'BAKITOLAS', 'St. Yohanes Pemandi', 'Sejak tahun 2003. Sebelumnya di Manamas.', 'Rm. Delvi Abanit Asa, Pr', '3.195 Umat', 'Kefamenanu', 'Pastoran Katolik Baki-tolas, Kefamenanu 85611, TTU-Timor-NTT'),
(5, 1, 'BESIKAMA', 'St. Yohanes Pemandi', 'Sejak tahun 1938. Sebelumnya di Tubaki.', 'Rm. Cyrilus Oktovianus Timo, Pr', '16.877 Umat', 'Malaka', 'Pastoran Katolik Besikama, Atambua 85702, Timor â€“ NTT.'),
(6, 1, 'BETUN', 'St. Maria Fatima', 'Sejak tahun 1924. Sebelumnya di Tubaki.', 'Rm. Antonius Herminus Bere, Pr', '21.534 Umat', 'Malaka', 'Pastoran Katolik Betun, Atambua 85702, Timor â€“ NTT.'),
(7, 1, 'BIJAEPASU', 'St. Nikolaus', 'Sejak tahun 1969. Sebelumnya di Noemuti.', 'Rm. Emanuel Usboko, Pr', '8.054 Umat', 'Kefamenanu', 'Pastoran Katolik Bijaepasu, Kefamenanu 85611, TTU-Timor-NTT'),
(8, 1, 'BIUDUKFOHO', 'St. Mikhael', 'Sejak tahun 1959. Sebelumnya di Besikama.', 'Rm. Jakobus Nabu, Pr', '8.516 Umat', 'Malaka', 'Pastoran Katolik Biudukfoho, Atambua 85702, Timor â€“ NTT'),
(9, 1, 'BOLAN', 'St. Fransiskus Xaverius', 'Sejak tahun 1966. Sebelumnya di Tubaki.', 'Rm. Yosef Meak, Pr', '10.127 Umat', 'Malaka', 'Pastoran Katolik Bolan, Atambua 85702, Timor â€“ NTT'),
(10, 1, 'EBAN', 'St. Maria Diangkat ke Surga', 'Sejak tahun 1949. Sebelumnya di Noemuti.', 'Rm. Ignatius M. Kabosu, Pr ', '12.604 Umat', 'Kefamenanu', 'Pastoran Katolik Eban, Kefamenanu 85611, TTU-Timor - NTT'),
(11, 1, 'FAFINESU', 'St. Antonius Padua', 'Sejak tahun 2000. Sebelumnya di Maubesi.', 'Rm. Agustinus D. Nesi, Pr', '4.304 Umat', 'Mena', 'Pastoran Katolik Fafinesu, Kefamenanu 85611, TTU-Timor-NTT'),
(12, 1, ' FATUBENAO', 'St. Agustinus', 'Sejak tahun 2002. Sebelumnya di Atambua.', 'Rm. Renso Tae Lake, Pr', '8.920 Umat', 'Belu Utara', 'Pastoran Katolik Fatubenao, Atambua 85702, Timor â€“ NTT'),
(13, 1, 'FATUKETI', 'St. Maria Bunda Penebus', 'Sejak tahun 2002. Sebelumnya di Atambua.', 'Rm. Agustinus Klau, Pr', '5.964 Umat', 'Belu Utara', 'Pastoran Katolik Fatuketi, Atambua 85702, Timor â€“ NTT'),
(14, 1, 'FATUONI', 'St. Fransiskus Xaverius', 'Sejak tahun 2003. Sebelumnya di Ponu.', 'Rm. Maxi Amnanu, Pr', '8.240 Umat', 'Kefamenanu', 'Pastoran Katolik Fatuoni, Kefamenanu 85611, TTU-Timor-NTT'),
(15, 1, 'FULUR', 'St. Maria Ratu Damai', 'Sejak tahun 1975. Sebelumnya di Nualain.', 'Rm. Primus Seran, Pr', '6.386 Umat', 'Belu Utara', 'Pastoran Katolik Fulur Atambua 85702, Timor â€“ NTT'),
(16, 1, 'HAEKESAK', 'St. Aloysius Gonzaga', 'Sejak tahun 2006. Sebelumnya di Lahurus.', 'Rm. Niko Nahak Dalu, Pr', '14.935 Umat', 'Belu Utara', 'Pastoran Katolik Haekesak, Atambua 85702 Timor â€“ NTT'),
(17, 1, 'HALILULIK', 'Roh Kudus', 'Sejak tahun 1918. Sebelumnya di Lahurus.', 'Rm. Febronius Fenat, Pr', '19.347 Umat', 'Belu Utara', 'Keuskupan Atambua, Atambua 85702, Timor-NTT'),
(18, 1, 'HALIWEN', 'St. Yohanes Pemandi', 'Sejak tahun 2007. Sebelumnya di Katedral Atambua.', 'Rm. Herman Nurak, Pr', '9.065 Umat', 'Belu Utara', 'Pastoran Katolik Haliwen, Atambua 85702, Timor-NTT'),
(19, 1, 'HAUMENI', 'Kristus Raja', 'Sejak tahun 1984. Sebelumnya di Kefamenanu.', 'Rm. Ignatius Alo Bria Neno, Pr', '8.086 Umat', 'Kefamenanu', 'Pastoran Katolik Haumeni, Kefamenanu 85611, TTU-Timor-NTT'),
(20, 1, 'JAK', 'St. Arnoldus Janssen', 'Sejak tahun 2009. Sebelumnya di Tunbaba.', 'Rm. Flafianus Kuftalan, Pr', '2.493 Umat', 'Kefamenanu', 'Pastoran Katolik Jak, Kefamenanu 85611, TTU-Timor-NTT'),
(21, 1, 'KADA', 'St. Mikhael', 'Sejak tahun 1959. Sebelumnya di Betun.', 'Rm. Yohanes Erwin Asa, Pr ', '7.920 Umat', 'Malaka', 'Pastoran Katolik Kada, Atambua 85702, Timor-NTT'),
(22, 1, 'KAMANASA', 'Kristus Raja', '	Sejak tahun 2005. Sebelumnya di Betun.', 'P. Andreas Hane, SVD', '6.160 Umat', 'Malaka', 'Pastoran Katolik Kamanasa, Atambua 85702 Timor-NTT'),
(23, 1, 'KAPUTU', 'St. Yohanes Pemandi', 'Sejak tahun 2003. Sebelumnya di Kotafoun.', 'Rm. Yonathas Nahak, Pr', '10.124 Umat', 'Malaka', 'Pastoran Katolik Kaputu, Atambua 85702, Timor-NTT'),
(24, 1, 'KEFAMENANU', 'St. Theresia', 'Sejak tahun 1934. Sebelumnya di Noemuti.', 'Rm. Djanuarius Maukura, Pr', '13.322 Umat', 'Kefamenanu', 'Pastoran Katolik Santa Theresia, Kefamenanu 85611 TTU-Timor-NTT.'),
(25, 1, 'KIUPUKAN', 'St. Maria Penyelenggara Segala Rahmat', 'Sejak tahun 1929. Sebelumnya di Noemuti.', 'Rm. Donatus Tefa, Pr', '13.967 Umat', 'Kefamenanu', 'Pastoran Katolik Kiupukan, Kefamenanu 85611, TTU-Timor-NTT.'),
(26, 1, 'KLESELEON', 'St. Antonius Padua', 'Sejak tahun 2002. Sebelumnya di Besikama.', 'Rm. Marcellus Bria, Pr', '9.612 Umat', 'Malaka', 'Pastoran Katolik Kleseleon, Atambua 85702, Timor-NTT'),
(27, 1, 'KOTAFOUN', 'St. Sesilia', 'Sejak tahun 1939. Sebelumnya di Tubaki.', 'Rm. Balthasar Seran, Pr', '12.689 Umat', 'Malaka', 'Pastoran Katolik Kotafoun, Atambua 85702, Timor-NTT'),
(28, 1, 'LAHURUS', 'St. Petrus', 'Sejak tahun 1886. Sebelumnya di Atapupu.', 'P. Fransiskus A. Setu, SVD', '6.778 Umat', 'Belu Utara', 'Pastoran Katolik Lahurus, Atambua 85702, Timor-NTT'),
(29, 1, 'LAKTUTUS', 'Hati Kudus Yesus', 'Sejak tahun 2004. Sebelumnya di Halilulik.', 'P. Kristoforus Tara, OFM', '4.517 Umat', 'Belu Utara', 'Pastoran Katolik Laktutus, Atambua 85702, Timor-NTT'),
(30, 1, 'LURASIK', 'St. Petrus dan Paulus', 'Sejak tahun 1985. Sebelumnya di Manufui.', 'Rm. Inosensius Nahak Berek, Pr', '8.125 Umat', 'Mena', 'Pastoran Katolik Lurasik, Atambua 85702, Timor-NTT'),
(31, 1, 'MAMSENA', 'St. Fransiskus Asisi', 'Sejak tahun 1975. Sebelumnya di Maubesi.', 'P. Kornelis Dosi, SVD', '2.105 Umat', 'Kefamenanu', 'Pastoran Katolik Mamsena, Kefamenanu 85611, TTU-Timor-NTT'),
(32, 1, 'MANAMAS', 'St. Yosef', 'Sejak tahun 1964. Sebelumnya di Maubesi.', ' Rm. Martin Aleroja Nahak, Pr', '4.564 Umat', 'Mena', 'Pastoran Katolik Manamas, Kefamenanu 85611, TTU-Timor-NTT'),
(33, 1, 'MANUFUI', 'St. Petrus Kanisius', 'Sejak tahun 1936. Sebelumnya di Noemuti.', 'Rm. Oktofianus Neno, Pr', '9.067 Umat', 'Mena', 'Pastoran Katolik Manufui, Kefamenanu 85611 TTU-Timor-NTT'),
(34, 1, 'MANUMEAN', 'Hati Kudus Yesus', 'Sejak tahun 1952. Sebelumnya di Manufui.', 'Rm. Emanuel Fkun, Pr', '9.581 Umat', 'Mena', 'Pastoran Katolik Manumean, Atambua 85702 Timor - NTT'),
(35, 1, 'MAUBAM', 'St. Paulus', 'Sejak tahun 2003. Sebelumnya di Noemuti.', 'Rm. Simon Opat, Pr', '3.997 Umat', 'Kefamenanu', 'Pastoran Katolik Maubam, Kefamenanu 85611, TTU-Timor-NTT'),
(36, 1, 'MAUBESI', 'St. Yohanes Maria Vianey', 'Sejak tahun 1937. Sebelumnya di Noemuti.', 'Rm. Gabriel Alos, Pr', '13.376 Umat', 'Kefamenanu', 'Pastoran Katolik Maubesi, Kefamenanu 85611, TTU-Timor-NTT'),
(37, 1, 'NAEKAKE', 'St. Bernardus', 'Sejak tahun 1984. Sebelumnya di Eban.', 'Rm. Patrisius Sixtus Bere, Pr', '3.258 Umat', 'Kefamenanu', 'Pastoran Katolik Naekake, Kefamenanu 85611, TTU-Timor-NTT'),
(38, 1, 'NAESLEU', 'St. Yohanes Pembaptis', 'Sejak tahun 1994. Sebelumnya di Kefamenanu.', 'Rm. Yohanes Seran Nahak, Pr', '11.313 Umat', 'Kefamenanu', 'Pastoran Katolik Naesleu, Kefamenanu 85611, TTU-Timor-NTT.'),
(39, 1, 'NELA', 'St. Antonius Padua', 'Sejak tahun 1971. Sebelumnya di Atambua.', 'P. Irenius Lolan, SVD', '15.937 Umat', 'Belu Utara', 'Pastoran Katolik Nela, Atambua 85702, Timor - NTT'),
(40, 1, 'NOEMUTI', 'Hati Yesus Yang Maha Kudus', 'Sejak tahun 1925. Sebelumnya di Oekusi.', 'Rm. Agustinus Berek, Pr', '14.737 Umat', 'Kefamenanu', 'Pastoran Katolik Noemuti, Kefamenanu 85611 TTU-Timor-NTT'),
(41, 1, 'NUALAIN', 'St. Gerardus', 'Sejak tahun 1939. Sebelumnya di Lahurus.', 'Rm. Oktovianus Taek, Pr', '9.736 Umat', 'Belu Utara', 'Pastoran Katolik Nualain, Atambua 85702, Timor - NTT'),
(42, 1, 'MENA', 'St. Filomena', 'Sejak tahun 1994. Sebelumnya di Ponu.', 'Rm. Yudelvianus Fon Neno, Pr', '12.491Umat', 'Mena', 'Pastoran Katolik Mena, Kefamenanu 85611, TTU-Timor-NTT'),
(43, 1, 'OENOPU', 'St. Antonius Maria Claret', 'Sejak 2015. Sebelumnya di Nurobo', 'P. Konstantinus Lakat, CMF', '5.559 Umat', 'Kefamenanu', 'Keuskupan Atambua, Atambua 85702, Timor-NTT'),
(44, 1, 'OEOLO', 'St. Maria Ratu', 'Sejak tahun 1962. Sebelumnya di Kefamenanu.', 'Rm. Yohanes Faentaono, Pr', '12.921 Umat', 'Kefamenanu', 'Pastoran Katolik Oeolo, Kefamenanu 85611 TTU -Timor - NTT'),
(45, 1, 'PONU', 'St. Maria Bunda Allah', 'Sejak tahun 1975. Sebelumnya di Manumean.', 'Rm. Fransiskus Seran, Pr', '7.930 Umat', 'Mena', 'Pastoran Katolik Ponu, Pos Atambua 85702 Timor - NTT'),
(46, 1, 'RAFAU', 'St. Yohanes Rasul', 'Sejak tahun 2004. Sebelumnya di Seon.', 'Rm. Agustinus Nabu, Pr', '11.706 Umat', 'Malaka', 'Pastoran Katolik Rafau, Atambua 85702, Timor - NTT'),
(47, 1, 'SADI', 'Tritunggal Maha Kudus', 'Sejak tahun 1991. Sebelumnya di Atambua', 'Rm. Gregorius Sainudin Dudy, Pr', '4.267 Umat', 'Belu Utara', 'Pastoran Katolik Sadi, Atambua 85702, Timor - NTT'),
(48, 1, 'SASI', 'St. Antonius Padua', 'Sejak tahun 2003. Sebelumnya di Naesleu.', 'P. Jose Alexander Fatun Nitsae,  OFM. Conv', '8.222 Umat', 'Kefamenanu', 'Pastoran Katolik Sasi, Kefamenanu 85611, TTU-Timor-NTT'),
(49, 1, 'SEON', 'Kristus Raja', 'Sejak tahun 1939. Sebelumnya di Tubaki.', 'Rm. Jefriston Benyamin Ndun, Pr', '12.578 Umat', 'Malaka', 'Pastoran Katolik Seon, Atambua 85702, Timor - NTT'),
(50, 1, 'TUKUNENO', 'St. Petrus', 'Sejak tahun 1988. Sebelumnya di Atambua.', 'Rm. Bernard Bria Seran, Pr', '12.089 Umat', 'Belu Utara', 'Pastoran Katolik Tukuneno, Atambua85702, Timor - NTT.'),
(51, 1, 'TUNBABA', 'St. Andreas (Rasul)', 'Sejak tahun 1975. Sebelumnya di Kefamenanu.', 'Rm. Yohanes P. Naben, Pr', '9.893 Umat', 'Kefamenanu', 'Pastoran Katolik Tunbaba, Kefamenanu 85611, TTU-Timor-NTT'),
(52, 1, 'WEBORA', 'St. Mikhael', 'Sejak tahun 2000. Sebelumnya di Halilulik.', 'Rm. Norbertus Nahak, Pr', '6.113 Umat', 'Belu Utara', 'Pastoran Katolik Webora, Atambua 85702, Timor - NTT'),
(53, 1, 'WEBRIAMATA', 'St. Yohanes Rasul', 'Sejak tahun 1966. Sebelumnya di Besikama.', 'Rm. Yohanes Kristian Kali, Pr', '7.283 Umat', 'Malaka', 'Pastoran Katolik Webriamata, Atambua 85702, Timor - NTT'),
(54, 1, 'WEDOMU', 'St. Paulus', 'Sejak tahun 1994. Sebelumnya di Atambua.', 'Rm. Paulus Nahak II, Pr', '10.357 Umat', 'Belu Utara', 'Pastoran Katolik Wedomu, Atambua 85702, Timor - NTT'),
(55, 1, ' WEKFAU', 'St. Lukas', 'Sejak tahun 2002. Sebelumnya di Kotafoun.', 'Rm. Mikhael Maumabe, Pr', '3.791 Umat', 'Malaka', 'Pastoran Katolik Wekfau, Atambua 85702,Timor - NTT'),
(56, 1, 'WELULI ', 'St. Theodorus', 'Sejak tahun 1980. Sebelumnya di Nualain.', 'Rm. Agustinus Kau Lake, Pr', '5.434 Umat', 'Belu Utara', 'Pastoran Katolik Weluli, Atambua 85702, Timor - NTT'),
(57, 1, 'WEMASA', 'St. Laurensius', 'Sejak tahun 2004. Sebelumnya di Kada.', 'Rm. Dominggus Kabosu, Pr', '9.317 Umat', 'Belu Utara', 'Pastoran Katolik Wemasa, Atambua 85702 Timor - NTT'),
(58, 1, 'WEOE', 'Salib Suci', 'Sejak tahun 1984. Sebelumnya di Besikama.', 'Rm. Pius Nahak, Pr', '7.981 Umat', 'Malaka', 'Pastoran Katolik Weoe, Atambua 85702, Timor - NTT'),
(59, 1, 'WINI', 'St. Fransiskus Xaverius', 'Sejak tahun 2006. Sebelumnya di Manamas.', 'Rm. Theodorus Taus, Pr', '1.787 Umat', 'Mena', 'Pastoran Katolik Wini, Kefamenanu 85611, TTU-Timor-NTT'),
(64, 1, 'jj1111', 'jjjjj', 'jjjjjjj', 'jjjjjj', 'jjjj', 'jjjj', 'jjjj'),
(65, 1, 'ALASaaaa', 'aaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaa', 'Belu Utara', 'aaaaaa'),
(66, 1, 'ALAS111111', 'bdfbcfbd', 'bbbbbb', 'bbbbbbb', 'bbbb', 'bbbbbb', 'bbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_paroki` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_paroki`, `foto`) VALUES
(28, 103, '481614208.jpg'),
(30, 103, '556180812.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gereja_stasi`
--

CREATE TABLE `gereja_stasi` (
  `id_gereja` int(11) NOT NULL,
  `id_paroki` int(11) NOT NULL,
  `nama_stasi` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `jumlah_umat` int(11) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gereja_stasi`
--

INSERT INTO `gereja_stasi` (`id_gereja`, `id_paroki`, `nama_stasi`, `informasi`, `jumlah_umat`, `longitude`, `latitude`, `foto`) VALUES
(1, 63, 'Gereja Katedral Santa Maria Imakulata Atambua.', '<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 07.30, 09.00, 17.00 WITA</p>\r\n<p>Informasi kegiatan tambahan :</p>\r\n<p>Pelaksanaan kegiatan Jalan salib di hari jumat Pk. 10.00 WITA.</p>', 0, '124.89645694092263', '-9.099559204446365', 'katedral.JPG'),
(2, 63, 'Gereja Sta. Maria Stella Maris Atapupu.', '<p>Pastor paroki : Rm. Samuel Yoris Giri, Pr</p>\r\n<p>Alamat: Pastoran Katolik Atambua, Atambua 85702</p>\r\n<p>Telp: 082 123 585 874</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 09.00, 17.00 WITA .</p>', 0, '124.86855608385316', '-8.994015911877577', 'WhatsApp-Image-2020-06-19-at-13.44.44-370x250.jpeg'),
(3, 63, 'Gereja Sta. Maria Bunda Penebus Fatuketi', '<p>Pastor paroki : Rm. Agustinus Klau, Pr</p>\r\n<p>Alamat: Pastoran Katolik Fatuketi, Atambua 85702, Timor &ndash; NTT</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: 2 kali misa hari sabtu sore dan minggu jam 16.00 dan jam 08.00 sampai selesai</p>', 0, '124.86535367919879', '-9.088664951708992', '2019-06-24.jpg'),
(4, 63, 'Gereja St. Petrus Tukuneno', '<p>Pastor paroki : Rm. Bernard Bria Seran, Pr</p>\r\n<p>Alamat: Pastoran Katolik Tukuneno, Atambua85702, Timor - NTT.</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.30, 09.00, 17.00 WITA</p>', 0, '124.88080719299246', '-9.123915822479557', 'CIMG8575.JPG'),
(23, 63, 'Gereja St. Antonius Padua Nela', '<p>Pastor paroki : P. Irenius Lolan, SVD</p>\r\n<p>Alamat: Pastoran Katolik Nela, Atambua 85702, Timor - NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 08.00, WITA</p>', 0, '124.89406654224253', '-9.178263740114117', 'IMG_7197.JPG'),
(24, 63, 'Gereja Roh Kudus Halilulik', '<p>Pastor paroki :Rm. Febronius Fenat, Pr</p>\r\n<p>Alamat: Keuskupan Atambua, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 08.00, 17.00 WITA</p>', 0, '124.87690357826783', '-9.274588930475645', 'pic-58fdd90b7197737778c988c5.jpg'),
(25, 63, 'Gereja Hati Kudus Yesus Laktutus', '<p>Pastor paroki : P. Kristoforus Tara, OFM</p>\r\n<p>Alamat: Pastoran Katolik Laktutus, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 09.00, 17.00 WITA</p>', 0, '124.97826595852628', '-9.275056214586433', '137340583_4458558974160893_2055974245053598780_n.jpg'),
(26, 63, 'Gereja St. Agustinus Fatubenao', '<p>Pastor paroki : Rm. Renso Tae Lake, Pr</p>\r\n<p>Alamat: Pastoran Katolik Fatubenao, Atambua 85702, Timor &ndash; NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.30 dan jam 08.00 sampai selesai</p>', 0, '124.90502326826527', '-9.104301428889972', 'IMG_7186.JPG'),
(27, 63, 'Gereja St. Paulus Wedomu', '<p>Pastor paroki : Rm. Paulus Nahak II, Pr</p>\r\n<p>Alamat: Pastoran Katolik Wedomu, Atambua 85702, Timor - NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.00, 09.15 WITA</p>', 0, '124.98744191328045', '-9.127411038790132', 'baksoskoramil.jpg'),
(28, 63, 'Gereja St. Petrus Lahurus', '<p>Pastor paroki : P. Fransiskus A. Setu, SVD</p>\r\n<p>Alamat: Pastoran Katolik Lahurus, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 08.00, WITA</p>', 0, '125.04655529215623', '-9.073327737718758', 'lahurus.jpg'),
(29, 63, 'Gereja St. Aloysius Gonzaga Haekesak', '<p>Gereja St. Aloysius Gonzaga Haekesak</p>', 0, '125.1164694699652', '-9.005284175718824', 'Screenshot (11).png'),
(30, 63, 'Gereja St. Gerardus Nualain', 'Gereja St. Gerardus Nualain', 0, '125.13730421524508', '-9.119272841847955', 'nualain.jpg'),
(31, 63, 'Gereja St. Theodorus Weluli', 'Gereja St. Theodorus Weluli', 0, '125.10406030386547', '-9.094003704074032', 'weluli.jpg'),
(32, 63, 'Gereja Sta. Maria Ratu Damai Fulur', '<p>Gereja Sta. Maria Ratu Damai Fulur</p>', 0, '124.9622085413957', '-9.40724455648678', 'sds-2.jpg'),
(34, 63, 'Gereja St. Yohanes Pemandi Haliwen', '<p>Gereja St. Yohanes Pemandi Haliwen</p>', 0, '124.90057484492773', '-9.059514038536324', 'Screenshot (20).png'),
(53, 63, 'Gereja St. Mikhael Webora', '<p>Gereja St. Mikhael Webora</p>', 0, '124.92284339807335', '-9.36039784972407', 'Screenshot (19).png'),
(54, 63, 'Gereja St. Arnoldus Janssen Labur', '<p>&nbsp;Gereja St. Arnoldus Janssen Labur</p>', 0, '124.87027255687231', '-9.320180273827113', 'Screenshot (21).png'),
(76, 63, 'Gereja Tri Tungal Maha Kudus Sadi', 'Gereja Tri Tungal Maha Kudus Sadi', 0, '124.94311380905783', '-9.066532763131724', 'Screenshot (21).png'),
(77, 63, 'Gereja Sta. Maria Fatima Betun', '<p>Pastor paroki : Rm. Antonius Herminus Bere, Pr</p>\r\n<p>Alamat: Desa wehali, Betun</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', 0, '124.96222828245271', '-9.40733263486703', 'fatima betun.jpg'),
(78, 63, 'Gereja St. Fransiskus Xaverius Bolan', 'Gereja St. Fransiskus Xaverius Bolan', 0, '124.95671482994187', '-9.609594087983414', 'bolan.jpg'),
(79, 63, 'Gereja St. Mikhael Kada', '<p>Pastor paroki : Rm. Yohanes Erwin Asa, Pr</p>\r\n<p>Alamat: Jl. Raya Kada</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', 0, '124.95522652789406', '-9.514319029879639', 'kada.jpg'),
(80, 63, 'Gereja Kristus Raja Kamanasa', 'Gereja Kristus Raja Kamanasa', 0, '124.96223399971227', '-9.406958746428227', 'kamanasa.jpg'),
(81, 63, 'Gereja Salib Suci Alas', 'Gereja Salib Suci Alas', 0, '125.04074281991724', '-9.39340416008668', 'gereja alas.jpg'),
(82, 63, 'Gereja St. Laurensius Wemasa', 'Gereja St. Laurensius Wemasa', 0, '125.0158770563093', '-9.497247250479136', 'wemasa.png'),
(83, 63, 'Gereja Kristus Raja Seon', 'Gereja Kristus Raja Seon', 0, '124.90505372772056', '-9.413740636696952', 'seon.jpg'),
(84, 63, 'Gereja St Yohanes Baptista Besikama', '<p>Pastor paroki : Rm. Cyrilus Oktovianus Timo, Pr</p>\r\n<p>Alamat: Jl. Abateu Moruk, Besikama</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 1 kali setiap hari minggu jam 07.00 sampai selesai</p>', 0, '124.92429491181647', '-9.649788291568584', 'besikama.jpg'),
(85, 63, 'Gereja St. Antonius Padua Kleselon', 'Gereja St. Antonius Padua Kleselon', 0, '124.88107179908582', '-9.623758351938971', 'kleseleon.jpg'),
(86, 63, 'Gereja St. Yohanes Rasul Webriamata', '<p>Pastor paroki : Rm. Yohanes Kristian Kali, Pr</p>\r\n<p>Alamat: Jl. Webrimata-Weoe</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', 0, '124.8665659278158', '-9.687885624271352', 'webriamata.jpg'),
(87, 63, 'Gereja St. Mikhael Biudukfoho', 'Gereja St. Mikhael Biudukfoho', 0, '124.75218939894754', '-9.601479186507573', 'biudikfoho.png'),
(88, 63, 'Gereja Yohanes Rasul Rafau', 'Gereja Yohanes Rasul Rafau', 0, '124.96221927022808', '-9.407233971869424', 'rafau.jpg'),
(89, 63, 'Gereja Lukas Wekfau', 'Gereja Lukas Wekfau', 0, '124.8327286123358', '-9.535181957915386', 'rafau.jpg'),
(90, 63, 'Gereja Yohanes Pamadi Kaputu', 'Gereja Yohanes Pamadi Kaputu', 0, '124.85917891234455', '-9.496612741255598', 'kaputu.jpg'),
(91, 63, 'Gereja Sta. Sisilia Kotafoun', 'Gereja Sta. Sisilia Kotafoun', 0, '124.81009009896415', '-9.477943133010042', 'kotafoun.png'),
(92, 63, 'Gereja Salib Suci Weoe', 'Gereja Salib Suci Weoe', 0, '124.8363392872696', '-9.689056869346544', 'weoe.jpg'),
(93, 63, 'Gereja Sta. Maria Fatima Nurobo', 'Gereja Sta. Maria Fatima Nurobo', 0, '124.81606444175816', '-9.358838170484967', 'fatima nurobo.jpg'),
(94, 63, 'Gereja Teresia Culcata Hanemasin', 'Gereja Teresia Culcata Hanemasin', 0, '124.82548837027896', '-9.745845071997637', 'hanemasin.png'),
(95, 63, 'Gereja Fransiskus Asisi Lakulo', '<p>Gereja Fransiskus Asisi Lakulo.</p>', 0, '124.87365422053881', '-9.647881015874127', 'lakulo.jpg'),
(96, 63, 'Gereja St. Dominikus Leon As Wekmindar', 'Gereja St. Dominikus Leon As Wekmindar', 0, '124.8172486561278', '-9.60922849143512', 'wekmindar.jpg'),
(97, 63, 'Paroki Sta. Theresia Kefamenanu', '<p>Pastor paroki : Rm. Djanuarius Maukura, Pr</p>\r\n<p>Alamat: Jl. Yos Sudarso</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Misa 3 kali setiap minggu jam 05.30 sampai</p>\r\n<p>selesai, jam 08.00 sampai selesai dan jam 16.00 sampai selesai</p>', 0, '124.6008399523059', '-9.425622628091343', 'Paroki Sta. Theresia Kefamenanu.jpg'),
(98, 63, 'Gereja St. Andreas Tunbaba', '<p>Pastor paroki : Rm. Yohanes P. Naben, Pr</p>\r\n<p>Alamat: Desa Kuatnana, kefamenanu</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali pada hari minggu jam 06.45 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', 0, '124.4646268436255', '-9.407558955214585', 'Paroki St. Andreas Tunbaba.jpg'),
(99, 63, 'Gereja Kristus Raja Haumeni', '<p>Gereja Kristus Raja Haumeni</p>', 0, '124.4114561864191', '-9.407522736993354', 'Paroki Kristus Raja Haumeni.png'),
(100, 63, 'Gereja St. Arnoldus Yanssen Jak', '<p>Gereja St. Arnoldus Yanssen Jak</p>', 0, '124.52082223904762', '-9.3565436217598', 'Paroki St. Arnoldus Yanssen Jak.png'),
(101, 63, 'Gereja St. Yohanes Pemandi Naesleu', '<p>Pastor paroki : Rm. Yohanes Seran Nahak, Pr</p>\r\n<p>Alamat: Jl. A. Yani, Kefamenanu</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 3 kali setiap minggu jam 07.00 sampai selesai, jam 09.00 sampai selesai dan jam 17 .00 sampai selesai</p>', 0, '124.48337676381942', '-9.459696348232656', 'Paroki St. Yohanes Pemandi Naesleu.jpg'),
(102, 63, 'Gereja St. Maria Penyelenggara Segala Rahmat  Kiupukan', '<p>Pastor paroki : Rm. Donatus Tefa, Pr</p>\r\n<p>Alamat: Desa nunmafo, kiupukan</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: 2 kali misa setiap minggu jam 07.00 dan jam 09.00 sampai selesai</p>', 0, '124.60083846372768', '-9.425619480070445', 'St. Maria Penyelenggara Segala Rahmat.JPG'),
(103, 63, 'Gereja St. Fransiskus Asisi Mamsena', '<p>Gereja St. Fransiskus Asisi Mamsena</p>', 0, '124.59881587734317  ', '-9.485739263017134', 'Paroki St. Fransiskus Asisi Mamsena.png'),
(104, 63, 'Gereja St. Antonius Padua Sasi', '<p>Gereja St. Antonius Padua Sasi</p>', 0, '124.49390453732347 ', '-9.502509910501033', 'Paroki St. Antonius Padua Sasi.jpg'),
(105, 63, 'Gereja St. Nikolas Bijaepasu ', '<p>Gereja St. Nikolas Bijaepasu&nbsp;</p>', 0, '124.42664554896179', '-9.529461288095918', 'Paroki St. Nikolas Bijaepasu.png'),
(106, 63, 'Gereja Sta. Maria Diangkat Ke Surga Eban', '<p>Gereja Sta. Maria Diangkat Ke Surga Eban</p>', 0, '124.31650264492022', '-9.55016521998616', 'Paroki Sta. Maria Diangkat Ke Surga Eban.jpg'),
(107, 63, 'Gereja St. Bernardus Naekake', '<p>Gereja St. Bernardus Naekake</p>', 0, '124.19773570458275', '-9.429389689470332', 'Paroki St. Bernardus Naekake.jpg'),
(108, 63, 'Gereja Sta. Maria Ratu Oeolo', '<p>Gereja Sta. Maria Ratu Oeolo</p>', 0, '124.38583804966329', '-9.473844018573798', 'Paroki Sta. Maria Ratu Oeolo.png'),
(109, 63, 'Gereja Hati Yesus Yang MahaKudus Noemuti', '<p>Pastor paroki : Rm. Agustinus Berek, Pr</p>\r\n<p>Alamat: Jln. Pah Bala, Desa Kote</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk 06.15 dan 09.15 sampai selesai</p>\r\n<p>&nbsp;</p>', 0, '124.48114716753332', '-9.571329575118023', 'Paroki Hati Yesus Yang MahaKudus Noemuti.jpg'),
(110, 63, 'Gereja St. Yohanes Maria Vianey Maubesi', '<p>Gereja St. Yohanes Maria Vianey Maubesi</p>', 0, '124.60084925246038', '-9.425615056410065', 'Paroki St. Yohanes Maria Vianey Maubesi.png'),
(111, 63, 'Gereja St. Antonius Maria Claret Oenopu', '<p>Pastor paroki : P. Konstantinus Lakat, CMF</p>\r\n<p>Alamat:&nbsp;Jln. Timor Raya Gang Claret Desa Teba</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.00 sampai selesai</p>', 0, '124.78185818385337', '-9.384100869984868', 'Paroki St. Antonius Maria Claret Oenopu.png'),
(112, 63, 'Gereja St. Mikhael Oelami', '<p>Gereja St. Mikhael Oelami</p>', 0, '124.4621771794497', '-9.487606055222379', 'Paroki St. Mikhael Oelami.png'),
(113, 63, 'Gereja Tublopo', '<p>Gereja Tublopo</p>', 0, '124.56489846820568', '-9.529710371077533', 'Paroki Tublopo.png'),
(114, 63, 'Gereja Sta. Filomena Mena', '<p>Gereja Sta. Filomena Mena</p>', 0, '124.59354467613443', '-9.19745060879632', 'Paroki Sta. Filomena Mena.png'),
(115, 63, 'Gereja St. Fransiskus Xaverius Wini', '<p>Pastor paroki : Rm. Theodorus Taus, Pr</p>\r\n<p>Alamat:&nbsp;Jl. Miguel Lopis No. 5, Wini</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi:&nbsp;Misa 1 Kali setiap minggu jam 06.30 sampai selesai</p>', 0, '124.4919600322291', '-9.180898116512909', 'Paroki St. Fransiskus Xaverius Wini.png'),
(116, 63, 'Gereja St. Yosef Manamas', '<p>Gereja St. Yosef Manamas</p>', 0, '124.49955848462663', '-9.263844051603817', 'Paroki St. Yosef Manamas.png'),
(117, 63, 'Gereja St. Yohanes Pemandi Bakitolas', '<p>Gereja St. Yohanes Pemandi Bakitolas</p>', 0, '124.60084092768165', '-9.425622798466975', 'Paroki St. Yohanes Pemandi Bakitolas.png'),
(118, 63, 'Gereja St. Petrus Kanisius Manufui', '<p>Gereja St. Petrus Kanisius Manufui</p>', 0, '124.6990884377417', '-9.371685430614983', 'Paroki St. Petrus Kanisius Manufui.png'),
(119, 63, 'Gereja Bunda Allah Ponu', '<p>Pastor paroki : Rm. Fransiskus Seran, Pr</p>\r\n<p>Alamat: Jl. Ponu Raya</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap hari minggu jam 08.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', 0, '124.68400977618353', '-9.140560540689451', 'Paroki Bunda Allah Ponu.png'),
(120, 63, 'Gereja St. Petrus dan Paulus Lurasik', '<p>Pastor paroki : Rm. Inosensius Nahak Berek, Pr</p>\r\n<p>Alamat: Jl. Pelajar, Lurasik</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 1 kali setiap minggu jam 07.00 sampai selesai</p>', 0, '124.82863536073494', '-9.288973445543988', 'Paroki St. Petrus dan Paulus Lurasik.jpg'),
(121, 63, 'Stasi St.Tadeus Dafala', 'Stasi St.Tadeus Dafala', 0, '124.96859924302271', '-9.17444834976729', 'Screenshot (45).png'),
(122, 63, 'Stasi Yohanes Rasul Wetubu', '<p>Stasi Yohanes Rasul Wetubu</p>', 0, '124.85916910734906', '-9.163151683534783', 'Screenshot (47).png'),
(136, 96, 'tes', '<p>tes</p>', 1123, '120.97010493278505', '-8.78906470697759', '556180812.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_inf` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_inf`, `id_keuskupan`, `informasi`) VALUES
(10, 1, '<h1 class=\"mb-4\">SEJARAH SINGKAT</h1>\r\n<p>Keuskupan Atambua merupakan keuskupan sufragan dari Keuskupan Agung Kupang. Wilayahnya meliputi 5200 km persegi dan mencakup Kabupaten Belu, Kabupaten Timor Tengah Utara, dan Kabupaten Malaka, Nusa Tenggara Timur. Keuskupan ini berpusat di Atambua. Jumlah umat Keuskupan Atambua kini lipat dua dibanding data tahun 1970 setelah dipisahkan dengan Keuskupan Kupang, menjadi lebih dari setengah juta orang.</p>\r\n<p>Keuskupan Atambua memiliki 62 paroki yang berada di wilayah Belu, Malaka dan Timor Tengah Utara. Keuskupan Atambua memiliki 4 Dekenat yaitu Dekenat Belu Utara memiliki 17 paroki, Dekenat Malaka memiliki 15 paroki, Dekenat Kefamenanu memiliki 10 paroki dan Dekenat Mena memiliki 10 paroki.</p>\r\n<p>Pada tahun 1883, para misionaris Yesuit mendirikan stasi yang pertama di Atapupu dan pada tahun 1886 di Lahurus. Selanjutnya pada tahun 1913 pelayanan di Timor diserahkan kepada para misionaris Societas Verbi DIvini (SVD) dengan Lahurus sebagai pusat misi pada waktu itu. Pada 16 Juli 1889, di Lahurus berdirilah Sekolah Dasar pertama di Timor.</p>\r\n<p>Tahun 1913 Pulau Timor menjadi bagian dari wilayah Prefektur Apostolik Kepulauan Sunda Kecil dengan Mgr. Petrus Noyen, SVD sebagai Prefektur Apostolik. Guru-guru Agama mulai memegang peranan penting dalam meletakkan dasar Kristiani di kalangan Umat Katolik Timor.</p>\r\n<p>Tahun 1936, Timor menjadi Vikariat sendiri dengan nama &ldquo;Vicariat Apostolik Atambua&rdquo; dan Mgr. Jacobus Pessers, SVD ditunjuk sebagai Vikaris Apostolik pertama pada 16 Juni 1937. Pada waktu itu sudah ada sekitar 42.000 umat Katolik yang dilayani oleh 19 Imam, 3 Bruder dan 12 Suster.</p>\r\n<p>Seminari Menengah Lalian, satu-satunya Seminari dalam Keuskupan Atambua, didirikan pada 8 September 1950. Tahun 1957 didirikan Biara Santo Yosef Nenuk tempat pembinaan bagi Bruder-bruder Timor.</p>\r\n<p>Pada 3 Januari 1961, Vikariat Apostolik Atambua menjadi Keuskupan Atambua dan sebagai Gereja setempat Keuskupan Atambua dipimpin oleh Mgr. Theodorus Sulama, SVD. Tanggal 21 September 2007 merupakan hari bersejarah dimana terjadi pentahbisan Uskup Atambua yang baru dan sekaligus peralihan kepemimpinan dari Mgr. Anton Pain Ratu, SVD (1984-2007) kepada penggantinya Mgr. Dr. Dominikus Saku, seorang imam Projo Keuskupan Atambua.</p>\r\n<p>&nbsp;</p>'),
(11, 1, '<p>&nbsp;</p>\r\n<h1>VISI MISI DAN STRATEGI PASTORAL</h1>\r\n<p>Visi, Misi dan Strategi Pastoral Keuskupan Atambua untuk periode 2019-2023, yakni :</p>\r\n<p><strong>VISI : </strong></p>\r\n<p>Umat Allah Keuskupan Atambua Semakin Unggul, Cerdas dan Sejahtera dalam Terang Iman dan Persahabatan Kristiani.</p>\r\n<p><strong>MISI : </strong></p>\r\n<p>1. Meningkatkan Pastoral Pendidikan yang Integratif.</p>\r\n<p>2. Meningkatkan Pemberdayaan Ekonomi Kreatif</p>\r\n<p>3. Mewujudkan Persaudaraan Kristiani</p>\r\n<p><strong>Strategi Pastoral:</strong></p>\r\n<p>Melakukan Sosialisasi Visi, Misi, Strategi dan Program kerja pastoral Keuskupan Atambua 2019-2023; Menciptakan Guru Profesional; Menciptakan Guru Katolik yang berpenghasilan sesuai dengan ketentuan UMP/UMR; Menyediakan regulasi yayasan dalam pengangkatan guru; Menyusun Master Plan pendidikan dan latihan profesi bagi guru; Membentuk keluarga katolik yang rukun dan memiliki habitus pendidikan Katolik; Membentuk wadah kaderisasi bagi pembentukan karakter Remaja dan OMK; Menyediakan asrama yang menghidupi habitus pendidikan Katolik di Paroki; Membentuk kelompok literasi bagi anak-anak dan remaja di paroki; Menjalin relasi kemitraan antara orang tua, sekolah, yayasan dan pemerintah; Menyediakan dana solidaritas pendidikan antar sekolah Katolik; Membentuk pilot project di paroki-paroki,misalnya kebun percontohan, peternakan, dan kerajinan rumah tangga khas budaya setempat; Membentuk unit-unit produksi di keluarga dan sekolah-sekolah, khususnya sekolah Katolik; Menyediakan Lapangan kerja bagi lulusan sekolah kejuruan; Menyediakan tenaga terlatih yang profesional di bidang peternakan, pertanian dan kerajinan tangan; Mewujudkan keluarga-keluarga yang memahami Financial Literacy; Membangun trainning center bagi calon pekerja dan OMK; Mendampingi keluarga-keluarga Katolik untuk memiliki penghasilan yang mencukupi kebutuhan hidupnya; Membentuk kerjasama kemitraan antara paroki, pemerintah dan LSM untuk pengembangan ekonomi kreatif; dan Melakukan evaluasi secara terus menerus dan berjenjang.</p>'),
(12, 1, '<h1>&nbsp;</h1>\r\n<h1>DAFTAR NAMA USKUP DARI DULU SAMPAI SEKARANG</h1>\r\n<p>&nbsp;<strong>Mgr. Jacques Pessers, SVD</strong></p>\r\n<p>Uskup Atambua pertama adalah Mgr Jacques Pessers SVD. Uskup kelahiran Tilburg, Belanda, 5 Februari 1896 ini ditunjuk sebagai Vikaris Apostolik Timor Olandese (nama pertama Keuskupan Atambua) pada 1 Juni 1937.Pada 11 November 1948 Mgr Jacques Pessers ditunjuk lagi menjadi Vikaris Apostolik Atambua, sebab nama keuskupan berubah dari Vikariat Apostolik Timor Olandese menjadi Vikariat Apostolik Atambua.Mgr Jacques Pessers pensiun dari jabatannya sebagai Uskup Atambua pada 14 November 1957 dan meninggal pada 3 April 1961.</p>\r\n<p><strong>Mgr. Theodorus van den Tillaart, SVD</strong></p>\r\n<p>Uskup Atambua kedua adalah Mgr Theodorus van den Tillaart SVD. Ia ditunjuk menjadi Uskup Atambua pada 14 November 1957, dan ditahbiskan pada 29 Juni 1958.Ketika Vikariat Apostolik Atambua ditingkatkan statusnya menjadi Keuskupan Atambua, Mgr Van den Tillaart masih dipercaya untuk menjadi uskup. Ia meninggal pada 7 Mei 1991 di usia 81 tahun.</p>\r\n<p><strong>Mgr. Anton Pain Ratu, SVD</strong></p>\r\n<p>Uskup Atambua ketiga adalah Mgr Anton Pain Ratu SVD. Uskup kelahiran Tanah Boleng, Flores, 2 Juni 1929 ini adalah uskup pribumi pertama untuk Keuskupan Atambua. Sebelum resmi menjadi Uskup Atambua, Mgr Anton terlebih dahulu menjadi Uskup Auxilier Atambua.Mgr Anton ditunjuk sebagai Uskup Auxilier Atambua pada 2 April 1982. Ia baru resmi menduduki takhta Keuskupan Atambua pada 3 Februari 1984, dan pensiun pada 2 Juni 2007.</p>\r\n<p><strong>Mgr. Dominikus Saku, Pr</strong></p>\r\n<p>Uskup Atambua keempat, yang masih menjabat sampai sekarang adalah Mgr. Dominikus Saku, Pr. Dalam sejarah Keuskupan Atambua, Mgr Domi adalah uskup pertama dari kalangan imam projo Keuskupan Atambua.Mgr Domi lahir di Taikas, Timor, pada 3 April 1960. Setelah menempuh pendidikan calon imam selama kurang lebih 12 tahun, ia ditahbiskan menjadi imam pada 29 September 1992.Mgr Domi ditunjuk menjadi Uskup Atambua pada 2 Juni 2007, bersamaan dengan berhentinya Mgr Anton dari jabatannya sebagai Uskup Atambua. Mgr Domi menerima tahbisan espiskopal pada 21 September 2007.Tahun ini, Mgr Domi genap 10 tahun menjadi Uskup Atambua. Sepuluh tahun tentu bukan waktu yang singkat. Sudah banyak hal yang dilakukan Mgr Domi untuk perkembangan keuskupan yang berbatasan langsung dengan Timor Leste ini.</p>'),
(13, 1, '<p>&nbsp;</p>\r\n<h1>KEPEMIMPINAN KEUSKUPAN ATAMBUA</h1>\r\n<p>&nbsp;<strong>Paus </strong> : Fransiskus</p>\r\n<p>&nbsp;<strong>Uskup </strong> : Mgr. Dominikus Saku</p>\r\n<p>&nbsp;<strong>Vikaris Jendreal </strong> : R.P. Vincentius Wun, S.V.D.</p>\r\n<p>&nbsp;<strong>Vikaris Yudisial </strong> : R.D. Mateus do Rosario da Cruz</p>\r\n<p><strong>&nbsp;Sekretaris </strong> : R.D. Kornelis Salem</p>\r\n<p>&nbsp;<strong>Ekonom </strong> : R.D. Yulius Selsus Nesi</p>\r\n<p>&nbsp;<strong>Uskup Emeretus </strong> : Anton Pain Ratu, S.V.D.</p>'),
(14, 1, '<p>&nbsp;</p>\r\n<h1>PAROKI PADA KEUSKUPAN ATAMBUA</h1>\r\n<p>&nbsp;Keuskupan Atambua memiliki 62 paroki yang berada di wilayah Belu, Malaka dan Timor Tengah Utara. Paroki-paroki yang berada di area yang sama dikelompokkan ke dalam suatu Dekenat, dengan satu imam yang menjabat sebagai Dekan. Keuskupan Atambua memiliki 4 Dekenat yaitu Dekenat Belu Utara memiliki 17 paroki, Dekenat Malaka memiliki 15 paroki, Dekenat Kefamenanu memiliki 10 paroki dan Dekenat Mena memiliki 10 paroki.</p>\r\n<center>\r\n<p>&nbsp;</p>\r\n</center>\r\n<p><strong>&nbsp;Dekenat Belu Utara</strong></p>\r\n<p>&nbsp;Katedral St Maria Immaculata, Bardao, Atambua Barat, Belu (1926)</p>\r\n<p>&nbsp;Paroki St Petrus Tukuneno, Tasifeto Barat, Belu (1988)</p>\r\n<p>&nbsp;Paroki St Agustinus Fatubenao, Kota Atambua, Belu (2002)</p>\r\n<p>&nbsp;Paroki St Maria Bunda Penebus Fatuketi, Kakuluk Mesak, Belu (2002)</p>\r\n<p>&nbsp;Paroki St Yohanes Pemandi Haliwen Kabuna, Kakuluk Mesak, Belu (2007)</p>\r\n<p>&nbsp;Paroki Tritunggal Mahakudus Sadi, Tasifeto Timur, Belu (1991)</p>\r\n<p>&nbsp;Paroki St Maria Stella Maris Atapupu Jenilu, Kakuluk Mesak, Belu (1883)</p>\r\n<p>&nbsp;Paroki St Paulus Wedomu Manleten, Tasifeto Timur, Belu (1994)</p>\r\n<p>&nbsp;Paroki St Petrus Lahurus Fatulotu, Lasiolat, Belu (1886)</p>\r\n<p>&nbsp;Paroki St Theodorus Weluli Dirun, Lamaknen, Belu (1980)</p>\r\n<p>&nbsp;Paroki St Aloysius Gonzaga, Haekesak Tohe, Raihat, Belu (2006)</p>\r\n<p>&nbsp;Paroki St Gerardus Nualain, Lamaknen Selatan, Belu (1939)</p>\r\n<p>&nbsp;Paroki St Maria Regina Pacis Fulur, Lamaknen, Belu (1975)</p>\r\n<p>&nbsp;Paroki St Antonius Padua Nela Naekasa, Tasifeto Barat, Belu (1971)</p>\r\n<p>&nbsp;Paroki Roh Kudus Halilulik Naitimu, Tasifeto Barat, Belu (1918)</p>\r\n<p>&nbsp;Paroki Hati Kudus Yesus Laktutus Naitimu, Tasifeto Barat, Belu (2004)</p>\r\n<p>&nbsp;Paroki St Mikael Webora Raimanus, Raimanuk, Belu (2000)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;Dekenat Malaka</strong></p>\r\n<p>&nbsp;Paroki St Maria Fatima Betun Wehali, Malaka Tengah, Malaka (1914)</p>\r\n<p>&nbsp;Paroki St Fransiskus Xaverius Bolan Fahiluka, Malaka Tengah, Malaka (1966)</p>\r\n<p>&nbsp;Paroki St Antonius Padua Kleseleon, Weliman, Belu (2002)</p>\r\n<p>&nbsp;Paroki St Yohanes Baptista Besikama Umatoos, Malaka Barat, Malaka (1938)</p>\r\n<p>&nbsp;Paroki St Mikael, Biudukfoho, Rinhat, Malaka (1959)</p>\r\n<p>&nbsp;Paroki St Yohanes Rasul Webriamatan, Wewiku, Belu (1966)</p>\r\n<p>&nbsp;Paroki Salib Suci Weoe, Wewiku, Belu (1984)</p>\r\n<p>&nbsp;Paroki St Yohanes Rasul Rafau Bonibais, Laen Manen, Belu (2004)</p>\r\n<p>&nbsp;Paroki Kristus Raja Seon Wemeda, Malaka Timur, Malaka (1939)</p>\r\n<p>&nbsp;Paroki St Yohanes Pemandi Kaputu Manulea, Sasitamean, Malaka (2003)</p>\r\n<p>&nbsp;Paroki St Maria Nurobo Meotroy, Laen Manen, Belu (1976)</p>\r\n<p>&nbsp;Paroki St Lukas Wekfau Fatuaruin, Sasitamean, Malaka (2002)</p>\r\n<p>&nbsp;Paroki St Laurensius Wemasa Litamali, Kobalima, Belu (2004)</p>\r\n<p>&nbsp;Paroki Salib Suci Alas, Kobalima Timur, Malaka (1975)</p>\r\n<p>&nbsp;Paroki Kristus Raja Kamanasa, Malaka Tengah, Belu (2005)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;Dekenat Kefamenanu</strong></p>\r\n<p>&nbsp;Paroki St Yohanes Pembaptis Naesleu Kefamenanu Selatan, TTU</p>\r\n<p>&nbsp;Paroki St Antonius Padua Sasi, Kota Kefamenanu, Timor Tengah Utara (2003)</p>\r\n<p>&nbsp;Paroki St Paulus Maubam Manikin, Noemuti Timur, TTU (2003)</p>\r\n<p>&nbsp;Paroki St Nikolas Bijaepasu, Miomaffo Tengah, TTU (1969)</p>\r\n<p>&nbsp;Paroki St Maria Regina Oeolo, Musi, TTU (1962)</p>\r\n<p>&nbsp;Paroki St Perawan Maria diangkat ke Surga, Eban, Miomaffo Barat, TTU (1949)</p>\r\n<p>&nbsp;Paroki St Bernardus Naekake B, Mutis, TTU (1984)</p>\r\n<p>&nbsp;Paroki St Yohannes Vianney Maubesi, Insana Tengah, TTU (1937)</p>\r\n<p>&nbsp;Paroki St Fransiskus Assisi Mamsena Atmen, Insana Barat, TTU (1975)</p>\r\n<p>&nbsp;Paroki St Maria Penyelenggara Segala Rahmat, Kiupukan Maubesi, Insana Tengah, TTU (1929)</p>\r\n<p>&nbsp;Paroki St Andreas Rasul Tunbaba Amol, Miomaffo Timur, TTU (1975)</p>\r\n<p>&nbsp;Paroki St Arnoldus Jansen Jak, Miomaffo Timur, TTU (2009)</p>\r\n<p>&nbsp;Paroki Kristus Raja, Haumeni, Bikomi Utara, TTU (1984)</p>\r\n<p>&nbsp;Paroki St Antonius Maria Claret Oenopu Teba Timur, Biboki Tanpah, TTU (2015)</p>\r\n<p>&nbsp;Paroki St Theresia, Aplasi, Kefamenanu, TTU (1937)</p>\r\n<p>&nbsp;Paroki St Sesilia Kotafoun, Biboki Anleu, TTU (1939)</p>\r\n<p>&nbsp;Paroki Hati Yesus yang Mahakudus Banfanu, Noemuti, TTU (1925)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;Dekenat Mena</strong></p>\r\n<p>&nbsp;Paroki St Filomena Mena Oesoko, Insana Utara, TTU (1994)</p>\r\n<p>&nbsp;Paroki St Maria Bunda Allah Ponu, TTU (1975)</p>\r\n<p>&nbsp;Paroki St Fransiskus Xaverius Fatuoni, Amanatun Utara, TTS</p>\r\n<p>&nbsp;Paroki Hati Kudus Yesus Manumean, Biboki Feotleu, TTU (1952)</p>\r\n<p>&nbsp;Paroki St Petrus dan Paulus, Lurasik Hauteas, Biboki Utara, TTU (1985)</p>\r\n<p>&nbsp;Paroki St Petrus Kanisius Manufui Upfaon, Biboki Selatan, TTU (1939)</p>\r\n<p>&nbsp;Paroki St Fransiskus Xaverius Wini Humusu C, Insana Utara, TTU (2006)</p>\r\n<p>&nbsp;Paroki St Yosef Manamas, Naibenu, TTU (1964)</p>\r\n<p>&nbsp;Paroki St Yohanes Pemandi Bakitolas, Naibenu, TTU (2004)</p>\r\n<p>&nbsp;Paroki St Antonius Padua Fatinesu, TTU (2000)</p>'),
(15, 1, '<h1>&nbsp;</h1>\r\n<h1>BUKU BAPTIS</h1>\r\n<p>&nbsp;Keberadaan Buku Baptis di dalam sebuah gereja dipandang sebagai salah satu unsur penting dalam kaitannya dengan sejarah berdirinya dan perkembangan umat dari tahun ke tahun.Buku baptis itu sendiri berdasarkan pengakuan beberapa tokoh dari dua gereja tersebut menjadi salah satu petunjuk atau sumber penelusuran sejarah masa lampau tentang berdirinya gereja dan mengenal tokoh-tokoh perintis.</p>\r\n<p>Menurut Sekretaris Paroki St. Petrus Langowan Herman Kaligis bahwa menjaga Buku Baptis di secretariat paroki tidak sama dengan menjaga buku-buku di perpustaan secara umum, karena hal itu mirip dengan tanggung jawab menjaga barang berharga di sebuah brankas.</p>\r\n<p>&ldquo;Buku Baptis dan beberapa dokumen serta arsip penting milik gereja kalah jauh jumlahnya dengan ribuan buku yang ada di perpustaakaan umum. Akan tetapi yang membuat hal ini terasa istimewa adalah tanggung jawab agar jangan sampai ada satu pun catatan pembaptisan hilang,&rdquo;</p>\r\n<p>Dari pengertian tersebut dapat ditarik kesimpulan bahwa adalah sangat penting untuk menerapkan manajemen dokumentasi dokumen dan arsip gereja dalam berbagai bentuk, tak terkecuali foto seluruh komponen umat yang ada dalam suatu komunitas gereja,</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuskupan`
--

CREATE TABLE `keuskupan` (
  `id_keuskupan` int(11) NOT NULL,
  `nama_keuskupan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuskupan`
--

INSERT INTO `keuskupan` (`id_keuskupan`, `nama_keuskupan`) VALUES
(1, 'ATAMBUA'),
(8, 'KUPANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kutipan`
--

CREATE TABLE `kutipan` (
  `id_kutipan` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `ayat` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kutipan`
--

INSERT INTO `kutipan` (`id_kutipan`, `id_keuskupan`, `ayat`, `isi`) VALUES
(9, 1, 'Yohanes 11 : 25 - 25', '<p><strong><em>\" Akulah kebangkitan dan hidup; barangsiapa percaya kepada-Ku, ia akan hidup walaupun ia sudah mati, dan setiap orang yang hidup dan yang percaya kepada-Ku tidak akan mati selama-lamanya. Percayakah engkau akan hal ini \"</em></strong></p>'),
(13, 1, '1 Yohanes 4 : 7 - 8', '<p><em><strong>\" Saudara-saudaraku yang kekasih, marilah kita saling mengasihi, sebab kasih itu berasal dari Allah; dan setiap orang yang mengasihi, lahir dari Allah dan mengenal Allah. Barangsiapa tidak mengasihi, ia tidak mengenal Allah, sebab Allah adalah kasih. \"</strong></em></p>'),
(14, 1, '1 Yohanes 4 : 18', '<p><em><strong>\" Di dalam kasih tidak ada ketakutan: kasih yang sempurna melenyapkan ketakutan; sebab ketakutan mengandung hukuman dan barangsiapa takut, ia tidak sempurna di dalam kasih. \"</strong></em></p>'),
(16, 1, '1 Kor . 16 : 14 ', '<p><em><strong>\" Lakukan segalanya dengan cinta \"</strong></em></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `username_op` varchar(100) NOT NULL,
  `password_op` varchar(100) NOT NULL,
  `nama_op` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`username_op`, `password_op`, `nama_op`) VALUES
('katedral', 'katedral', 'katedral');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paroki`
--

CREATE TABLE `tbl_paroki` (
  `id_parokiii` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_paroki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paroki`
--

INSERT INTO `tbl_paroki` (`id_parokiii`, `id_keuskupan`, `id_wilayah`, `nama_paroki`) VALUES
(63, 1, 1, 'Paroki Katedral Atambua'),
(64, 1, 1, 'Paroki Fatubenao'),
(65, 1, 1, 'Paroki Wedomu'),
(66, 1, 1, 'Paroki Lahurus'),
(67, 1, 1, 'Paroki Weluli'),
(68, 1, 1, 'Paroki Fulur'),
(69, 1, 1, 'Paroki Nualain'),
(70, 1, 1, 'Paroki Fatuketi'),
(71, 1, 1, 'Paroki Sadi'),
(72, 1, 1, 'Paroki Atapupu'),
(73, 1, 1, 'Paroki Tukuneno'),
(74, 1, 1, 'Paroki Nela'),
(75, 1, 1, 'Paroki Halilulik'),
(76, 1, 1, 'Paroki Webora'),
(77, 1, 1, 'Paroki Laktutus'),
(78, 1, 1, 'Paroki Haekesak'),
(79, 1, 1, 'Paroki Haliwen'),
(80, 1, 1, 'Paroki Labur'),
(81, 1, 1, 'Paroki Kefamenanu'),
(82, 1, 1, 'Paroki Naesleu'),
(83, 1, 1, 'Paroki Sasi'),
(84, 1, 1, 'Paroki Maubam'),
(85, 1, 1, 'Paroki Noemuti'),
(86, 1, 1, 'Paroki Bijaepasu'),
(87, 1, 1, 'Paroki Oeolo'),
(88, 1, 1, 'Paroki Eban'),
(89, 1, 1, 'Paroki Naekake'),
(90, 1, 1, 'Paroki Tunbaba'),
(91, 1, 1, 'Paroki Haumeni'),
(92, 1, 1, 'Paroki Maubesi'),
(93, 1, 1, 'Paroki Mamsena'),
(94, 1, 1, 'Paroki Kiupukan'),
(95, 1, 1, 'Paroki Jak '),
(96, 1, 1, 'Paroki Ainan'),
(97, 1, 1, 'Paroki Oenopu'),
(98, 1, 1, 'Paroki Oelami'),
(99, 1, 1, 'Paroki Tublopo'),
(100, 1, 1, 'Paroki Betun '),
(101, 1, 1, 'Paroki Bolan '),
(102, 1, 1, 'Paroki Kada'),
(103, 1, 1, 'Paroki Alas'),
(104, 1, 1, 'Paroki Wemasa'),
(105, 1, 1, 'Paroki Kamanasa '),
(106, 1, 1, 'Paroki Kleseleon'),
(107, 1, 1, 'Paroki Besikama '),
(108, 1, 1, 'Paroki Webriamata'),
(109, 1, 1, 'Paroki Weoe'),
(110, 1, 1, 'Paroki Biudukfoho'),
(111, 1, 1, 'Paroki Wekfau'),
(112, 1, 1, 'Paroki Rafau'),
(113, 1, 1, 'Paroki Kaputu'),
(114, 1, 1, 'Paroki Kotafoun'),
(115, 1, 1, 'Paroki Seon'),
(116, 1, 1, 'Paroki Nurobo'),
(117, 1, 1, 'Paroki Hanemasin'),
(118, 1, 1, 'Paroki Wekmidar'),
(119, 1, 1, 'Paroki Lakulo'),
(120, 1, 1, 'Paroki Bakitolas'),
(121, 1, 1, 'Paroki Manamas'),
(122, 1, 1, 'Paroki Fafinesu'),
(123, 1, 1, 'Paroki Manufui'),
(124, 1, 1, 'Paroki Lurasik'),
(125, 1, 1, 'Paroki Manumean'),
(126, 1, 1, 'Paroki Mena'),
(127, 1, 1, 'Paroki Ponu'),
(128, 1, 1, 'Paroki Fatuoni'),
(129, 1, 1, 'Paroki Wini ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_romo`
--

CREATE TABLE `tbl_romo` (
  `id_pastor` int(11) NOT NULL,
  `id_gereja` int(11) NOT NULL,
  `nama_pastor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_romo`
--

INSERT INTO `tbl_romo` (`id_pastor`, `id_gereja`, `nama_pastor`) VALUES
(62, 136, 'Rm. Stefanus Boisala, Pr'),
(63, 1, 'Rm. Vinsensius A. Paulo Bria, Pr'),
(64, 1, 'Rm. Kristianus Fallo, Pr'),
(65, 1, 'Rm. Gregorius Roby Kiik, Pr'),
(66, 1, 'Rm. Renso Tae Lake, Pr'),
(67, 1, 'Rm. Melkhior Meak, Pr'),
(68, 1, 'Rm. Paulus Nahak II, Pr'),
(69, 1, 'Rm. Laurensius Tnopo, Pr'),
(70, 1, 'P. Fransiskus A. Setu, SVD'),
(71, 1, 'Rm. Agustinus Kau Lake, Pr'),
(72, 1, 'Rm. Agustinus Kau Lake, Pr'),
(73, 1, 'Rm. Primus Seran, Pr'),
(74, 1, 'Rm. Primus Seran, Pr'),
(75, 1, 'Rm. Oktovianus Taek, Pr'),
(76, 1, 'Rm. Kornelis Etan, Pr'),
(77, 1, 'P. Irenius Lolan, SVD'),
(78, 1, 'Rm. Krisantus Lake, Pr'),
(79, 1, 'Rm. Agustinus Klau, Pr'),
(80, 1, 'Rm. Fransiskus Teku, Pr'),
(81, 1, 'Rm. Gregorius Sainudin Dudy, Pr'),
(82, 1, 'Rm. Samuel Yoris Giri, Pr '),
(83, 1, 'Rm. Yosef Tae Bria, Pr'),
(84, 1, 'Rm. Silverius Berry Meak, Pr'),
(85, 1, 'Rm. Servas Naben, Pr'),
(86, 1, 'Rm. Bernard Bria Seran, Pr'),
(87, 1, 'Rm. Febronius Fenat, Pr '),
(88, 1, 'Rm. Yosef Prayogar Fallo, Pr'),
(89, 1, 'Rm. Apolinaris Bouk, Pr'),
(90, 1, 'Rm. Fidelis Okto. Sanbein, Pr'),
(91, 1, 'Rm. Norbertus Nahak, Pr'),
(92, 1, 'P. Kristoforus Tara, OFM '),
(93, 1, 'P. Virjilius, OFM'),
(94, 1, 'Rm. Niko Nahak Dalu, Pr'),
(95, 1, 'Rm. Brunolinga Ndun, Pr'),
(96, 1, 'Rm. Herman Nurak, Pr'),
(97, 1, 'Rm. Maxi Sikone, Pr'),
(98, 1, 'Rm. Edmundus Sako, Pr'),
(99, 1, 'Rm. Antonius Herminus Bere, Pr'),
(100, 1, 'Rm. Marselinus Nai Kei, Pr'),
(101, 1, 'Rm. Ludovikus Sonny Akoit'),
(102, 1, 'Rm. Yosef Meak, Pr'),
(103, 1, 'Rm. Yasintus Nesi, Pr'),
(104, 1, 'Rm. Yohanes Erwin Asa, Pr'),
(105, 1, 'P. Yohanes Napan, SVD'),
(106, 1, 'P. Rony Moensaku, SVD'),
(107, 1, 'Rm. Dominggus Kabosu, Pr'),
(108, 1, 'Rm. Yustus Nipu, Pr'),
(109, 1, 'P. Andreas Hane, SVD'),
(110, 1, 'Rm. Leonardus Nahas, Pr'),
(111, 1, 'Rm. Marcellus Bria, Pr'),
(112, 1, 'Rm. Cyrilus Oktovianus Timo, Pr'),
(113, 1, 'Rm. Fransiskus Naikofi, Pr'),
(114, 1, 'Rm. Frederikus Oeleu, Pr'),
(115, 1, 'Rm. Yohanes Kristian Kali, Pr'),
(116, 1, 'Rm. Pius Nahak, Pr'),
(117, 1, 'Rm. Thadeus Baki Thaal, Pr'),
(118, 1, 'Rm. Jakobus Nabu, Pr'),
(119, 1, 'Rm. Mikhael Maumabe, Pr'),
(120, 1, 'Rm. Agustinus Nabu, Pr'),
(121, 1, 'Rm. Bernardinus Humoen, Pr'),
(122, 1, 'Rm. Yonathas Nahak, Pr'),
(123, 1, 'Rm. Balthasar Seran, Pr'),
(124, 1, 'Rm. V. Frengky De Rosari Rusae,  Pr'),
(125, 1, 'Rm. Aloysius Kosat, Pr'),
(126, 1, 'Rm. Marselus Erlando Afoan, Pr'),
(127, 1, 'Rm. Jefriston Benyamin Ndun, Pr'),
(128, 1, 'P. Arkhidius Sifa, CMF'),
(129, 1, 'P. Yosep Markus Arkian, CMF'),
(130, 1, 'P. Alexius Kedi, CMF'),
(131, 1, 'Rm. Yosef Nahak, Pr'),
(132, 1, ' Rm. Hieronimus Kore, Pr'),
(133, 1, 'Rm. Kornelis Subani, Pr '),
(134, 1, 'Rm. Gerardus Salu, Pr'),
(135, 1, 'Rm. Djanuarius Maukura, Pr'),
(136, 1, 'Rm. Herman Bau Rua, Pr'),
(137, 1, ' Rm. Yohanes F. Mali, Pr'),
(138, 1, 'Rm. Agustinus Seran, Pr'),
(139, 1, 'Rm. Yohanes Seran Nahak, Pr'),
(140, 1, 'Rm. Dickyanto Mau Letto, Pr'),
(142, 1, 'P. Jose Alexander Fatun Nitsae,  OFM. Conv'),
(143, 1, 'Rm. Simon Opat, Pr'),
(144, 1, 'Rm. Elfrid Nahak Seran, Pr'),
(145, 1, 'Rm. Agustinus Berek, Pr'),
(146, 1, 'Rm. Yunus Sirilus Bouk, Pr'),
(147, 1, 'Rm. Yanuarius Meta Uskenat, Pr '),
(148, 1, 'Rm. Emanuel Usboko, Pr'),
(149, 1, 'Rm. Yavet L. Makus, Pr'),
(150, 1, ' Rm. Yohanes Faentaono, Pr'),
(151, 1, 'Rm. Ignatius M. Kabosu, Pr '),
(152, 1, 'Rm. Frengky Atitus, Pr'),
(153, 1, 'Rm. Gabriel Bouk, Pr'),
(154, 1, ' Rm. Patrisius Sixtus Bere, Pr'),
(155, 1, 'Rm. Ignatius Alo Bria Neno, Pr'),
(156, 1, 'Rm. Fridolinus Talan, Pr'),
(157, 1, 'Rm. Yohanes P. Naben, Pr'),
(158, 1, 'Rm. Marius Y. Tallo, Pr'),
(159, 1, 'Rm. Edelbertus Silab, Pr'),
(160, 1, 'Rm. Gabriel Alos, Pr'),
(161, 1, 'Rm. Kristo Oki, Pr'),
(162, 1, 'P. Kornelis Dosi, SVD'),
(163, 1, 'P. Peter Tan, SVD'),
(164, 1, 'Rm. Donatus Tefa, Pr'),
(165, 1, 'Rm. Flafianus Kuftalan, Pr'),
(166, 1, 'P. Felix S., MSF'),
(167, 1, 'P. Pius Geroda Issohone, MSF '),
(168, 1, 'P. Konstantinus Lakat, CMF'),
(169, 1, 'P. Urbanus Sedu, CMF'),
(170, 1, 'Diakon Kalixtus Kapistrano'),
(171, 1, 'Rm. Alfonsius Leki, Pr'),
(172, 1, 'P. Anastasius M.T. Tamal,  OFM,Conv'),
(173, 1, 'P. Mikhael Rusae, SVD '),
(174, 1, 'Rm. Delvi Abanit Asa, Pr'),
(175, 1, 'Rm. Martin Aleroja Nahak, Pr'),
(176, 1, 'Rm. Beatus Salu, Pr'),
(177, 1, 'Rm. Agustinus D. Nesi, Pr'),
(178, 1, 'Rm. Hendrikus Hale, Pr'),
(179, 1, 'Rm. Oktofianus Neno, Pr'),
(180, 1, 'Rm. Desiderius Ludgerus Saba'),
(181, 1, 'Rm. Urbanus Hala, Pr'),
(182, 1, 'Rm. Inosensius Nahak Berek, Pr'),
(183, 1, 'Rm. Dalmasius Saunoah'),
(184, 1, ' Rm. Emanuel Fkun, Pr'),
(185, 1, 'Rm. Fredy K. Laku Mali, Pr'),
(186, 1, 'Rm. Kanisius Oki, Pr'),
(187, 1, ' Rm. Gaudensius Nabu, Pr'),
(188, 1, 'Rm. Zebedeus Nahas, Pr'),
(189, 1, 'Rm. Zebedeus Nahas, Pr'),
(190, 1, 'Rm. Fransiskus Seran, Pr'),
(191, 1, 'Rm. Maxi Amnanu, Pr'),
(192, 98, 'Rm. Makarius Molo, Pr'),
(193, 1, 'Rm. Theodorus Taus, Pr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `warna` int(5) NOT NULL,
  `shape` polygon NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `id_keuskupan`, `nama`, `longitude`, `latitude`, `warna`, `shape`) VALUES
(1, 1, 'Dekenat Belu Utara', '123.78738777662642', '-10.101642168579087', 4, 0xfeffffff0103000000010000007d00000042637eae5ef25e406a12faf8ab3224c0fea4465e63f25e40c15a1dcab23224c0e72e4f9066f25e40f867d30cb73224c08235aab168f25e40240c6575ba3224c0fb5ce92a6df25e405926d1fac23224c08a049acb75f25e40fd4df3c2cf3224c09ee05cd97ef25e40960cf1b0db3224c0bfc9f2da83f25e40ee541482e23224c00cfbc85e87f25e400a00c7a9f83224c0020ce23b85f25e407534b0cc593324c05efd8b2885f25e40a16160476b3324c0d4fddf7a84f25e4016d94fc1883324c07205e46784f25e40e8cf5f29893324c091f52d5a84f25e406804a034893324c083f4916e84f25e4043c54f1b893324c09af4f37584f25e40d758106a893324c083f4916e84f25e408dbd7ff9893324c0bef9376e84f25e405807e0208a3324c0cafe195f84f25e40054510c4893324c05c013c5b84f25e408d43f04d893324c0b7f62b4d84f25e406d6660648a3324c0b5fa715284f25e40663340cf8a3324c076fd575d84f25e40159f6f458a3324c08006805384f25e401cd28fda893324c052f8136584f25e40b2dfdfd48a3324c074019e6284f25e4087c43fe0883324c0bcfd7d7384f25e4015bc5f83893324c0ad0a8a6784f25e4086a74fa2893324c0b7f62b4d84f25e400df2bf048a3324c052f8136584f25e40e738e03f893324c08e071c3f84f25e403231101e8a3324c0dcf7294084f25e4085f3df7a8a3324c06bf42f6784f25e402b1be0c6893324c0c802606484f25e4094d3af508a3324c0fff20b5e84f25e40f6decf998a3324c0d703fc4f84f25e40eeabaf048b3324c0af06446284f25e4005bf9f6f8a3324c0bb0b265384f25e40c9f2cf3f8a3324c0e6f6ef5b84f25e40b319c050893324c07803743284f25e404961f0c6883324c0a80d9a1b84f25e4068219072883324c07ef7a12284f25e409c23c023893324c00df4a74984f25e407d632078893324c0ee035e5784f25e40efc89f428a3324c0750b003d84f25e4033e57f45893324c01601164584f25e402b38d004893324c04200a40284f25e407337d0879c3324c0e0022c9983f25e4087a39fb8b93324c02a00ac2883f25e403fa0ef4bd63324c025f9590283f25e402237d0eeda3324c0470c846280f25e40054890a8d93324c03cf9f99180f25e40a51f30b6e03324c0abfb53ec80f25e4096dd5f03fa3324c09008fa4581f25e40354d80eb0f3424c0fb04a2f880f25e4097aa5fea213424c0240c529381f25e40d5a5df72373424c070fbbf1582f25e4066e99fac4c3424c0abfb7f9182f25e4050e8bfc75c3424c0a8f563bc82f25e40dbb7af4b613424c0d3fd1d0382f25e40f8a6ef91623424c02e0b18af81f25e403dc3cf94613424c0c5013cf67ff25e40255340bc603424c0d5fefb097ff25e406e2ed0c75b3424c000f4911a7ef25e402ce34f2a5b3424c043fcad687df25e40fb2540d6553424c059f281f07bf25e405f02c084543424c088fce56179f25e401f0ec035583424c073fd23d978f25e40214850465d3424c05107283f78f25e407e5ae00a633424c075f4617d78f25e401cb3df687d3424c0a5036eea77f25e405cf3cfb9873424c038f8513477f25e40b4c08f8c8b3424c09e0a2ed176f25e401bba5fa2963424c0b8f3259d76f25e401199ef69993424c0df036cee75f25e4057d26f3f9e3424c0aff9196074f25e4079e98f39a23424c0c1054e7774f25e40b2f65ff5ac3424c0760df2f371f25e4076d36fa0b53424c0f302aa8771f25e407b3530d0b63424c029064e1270f25e40f8240013c23424c028f7d90e6ff25e4014959fa9d63424c032006c326ef25e40eeff2f5cee3424c0fdf855fd6df25e401622a0f5023524c070f38d7a6df25e405c3350d5183524c054fbb77d6df25e40b9979f4f303524c08dfad77a6ef25e409499afeb473524c06406e2e86ef25e40f53c500f573524c08effe9a36ff25e406d3e7085573524c0f50cced973f25e40c21de0b45d3524c05002804376f25e40bd245030633524c03300486c76f25e403d1f60546b3524c083ff339e76f25e4051e2ff3e863524c09c09f87f76f25e40d50440828a3524c095f8437f76f25e40cbe3cf498d3524c01f0b7e9076f25e40afcc6fa2a33524c00bf92da476f25e40f15850f5bb3524c0d0fd53ac75f25e4033e47fc2be3524c0e7f8395d75f25e409ecb4f10ce3524c043fd078075f25e4083339018d13524c0b309c4b475f25e4021d19f15d33524c06bfa554076f25e40ff34c04ce53524c026090e5b76f25e402a506041e73524c0e0ffcd9e72f25e4088f96fefec3524c07ffeb7e56ef25e40280bf078f23524c0780520826af25e409594cffcf73524c02008b66866f25e4071f88f0afd3524c017f6ddf961f25e401a9acf96033624c076f7ad4b5ef25e405e02f0060a3624c06dfd0b3c5bf25e407e65a0d90e3624c084fd15f957f25e40a8635090113624c05b0070ee53f25e40d8c98f2a193624c0ec62b8104ef25e4000eee5351c3624c030cf18d44bf25e407628c788fd3524c019abf8924cf25e403fc5abf6cc3524c0b45f7c2751f25e401f3235663a3524c0221e97c654f25e40e43cbbbab93424c070a144d755f25e4093cb5daa633424c0013f7b1e57f25e407b5a009a0d3424c0df5f5f7659f25e40c160951dff3324c08521b6fe59f25e403e1e7b94c83324c0c83b3f355af25e4015c1f485893324c0b2171ff45af25e40170800e04d3324c059d9757c5bf25e4042562cf9243324c058879eef5df25e406ff819afc43224c042637eae5ef25e406a12faf8ab3224c0),
(2, 1, 'Dekenat Malaka', '123.78524128287667', '-10.106993880490972', 4, 0xfeffffff0103000000010000005b0000008a06867b47f25e407417d027cc3624c0dbf24d7747f25e409c442079d03624c0420aa66a47f25e4072ef4f9dd63624c068f399a347f25e40cad9ffadd93624c07f0620e147f25e407d3fc099e23624c0b700c48748f25e40c2ca4f90f23624c03ef5d70949f25e402fa06f81ff3624c0ab00f4bf49f25e40a54b70c3173724c001f9f36549f25e402851c0c81c3724c0b80abc3449f25e407b1390251d3724c08bf335a045f25e40de1e6003243724c09ff7856242f25e40ac56c062283724c03c0ddae43ef25e40caa29f162b3724c0b5f225ac3af25e407ab1dfb32f3724c030ff477b3af25e400f45a002303724c044f9610839f25e40da258013303724c02ff5b9fb38f25e403de50f842f3724c0c8ffcd9c38f25e402863d04e2c3724c0bf05583237f25e40793750082f3724c0b109762535f25e40bfb07f0d363724c0dafd6bb734f25e406cd1bf72363724c076f665ce32f25e403d3150f1363724c0affa3faa31f25e401604b034393724c02df5ddc130f25e400f0b701b383724c090f73baf30f25e405256f0b8383724c0deff536a30f25e404764d0af433724c05b03b4dd2ff25e40bce69fe1503724c0b6fd89532ff25e4046abff185f3724c00cfb05502ff25e40abf05f076b3724c0aafd8de62ef25e405fd0af9e743724c0a0f94b742ef25e40d0bb9fbd743724c0430326312ef25e407fad3f88733724c02204d2682cf25e40eee4bf7f743724c0c70966202cf25e40c1f8bf25743724c031fc15262bf25e4084f20f7a753724c021ff939a29f25e40ab1fb036733724c05109ba8329f25e40832c40616d3724c0370d34542af25e402dd28f00513724c0d1fa57b72af25e40f61b40934a3724c035f4f3482af25e402ba3dfa73b3724c0730406cf28f25e40eff3ffb53a3724c0f90146da28f25e406e2840c13a3724c01b0bd0d728f25e402cc0cfe53a3724c0c9f71ff128f25e404299dfd43b3724c0a40084d828f25e40efd60f783b3724c0bd0a48ba28f25e409c14401b3b3724c0d0f5afbb28f25e40c207005c3a3724c0580c30d228f25e4061fcdf123a3724c043fadfe528f25e40ada87f183a3724c0140d400d29f25e40b6c9ef50373724c0530a5a0229f25e40b66c50e3353724c04bfdeb0629f25e4080309021303724c0550614fd28f25e404fa11f771d3724c012fe61dc28f25e401eb50f5f093724c041fe25eb28f25e404f9aefa8fd3624c0cb0b7a7829f25e408826b07fee3624c0ccf8eb142af25e4094925f34e43624c0b0fb5b392cf25e40ffdbdff3e03624c0d3098e322ef25e4048d45f3ddb3624c0a3ff67492ef25e40a24fc083da3624c057f39f5b2ff25e405e5bb076ca3624c0e2fcade32ff25e40f9f85f4abf3624c0ca05a40a31f25e4022e54fe6ab3624c00ff7179532f25e400c51002b993624c016f5d30434f25e401d6430437e3624c0150312b734f25e40c81b9068713624c05003680536f25e400aeccfd45b3624c03af55d1e36f25e40a45b306a573624c066022a8e36f25e40a92570bf493624c065fd430a37f25e4090bbff05463624c04c0180523af25e40cf3570a9413624c05007f4713df25e404c1330663d3624c04502009e41f25e40d1ba8fa1383624c0f7f4c3d644f25e40695990d1353624c0880a0a0945f25e4003559098413624c0b705e89345f25e40fda22f7d623624c07e0178e545f25e405a3be02a6e3624c00d03fa6246f25e408040005d763624c097f86fdb48f25e406e4390b4703624c003f5ad6049f25e40a245c065713624c0c40ab8a149f25e400f55103e763624c0ecf9c7af49f25e409b5ee03d793624c0d3fdabad49f25e405454b0977c3624c0a703047449f25e40320ae0ef993624c0b4ff230949f25e409b03102fb23624c093f6990b49f25e40ddf7bf12b53624c002fe431748f25e40bda61fc6bf3624c077fe976947f25e404c415090c53624c08a06867b47f25e40f0baaf68c93624c07502de6e47f25e403018e062cc3624c08a06867b47f25e407417d027cc3624c0),
(3, 1, 'Dekenat Kefamenanu', '123.78506097559837', '-10.105647310266827', 4, 0xfeffffff010300000001000000220000009ec85def37f25e40eaf00601413624c030e6c3fc37f25e40e15a4f2b403624c07568387437f25e406935c994273624c046e9700637f25e4076de18e80c3624c0c051dd5636f25e4045fe03d5053624c042d780e835f25e409e312ea7e33524c0dd44aaa335f25e40e61f2310d03524c0110a775236f25e40bdf7b021cd3524c0c26f442937f25e40ae3fb631c53524c067f9e7ff36f25e405e4b92b0b83524c0d8ac72d636f25e40ef6f3defaa3524c05cbdd46836f25e4072ba3358923524c04c36d08035f25e400a0fb8eb693524c05b5bc66f36f25e406d6ecdb1693524c05b5bc66f36f25e406d6ecdb1693524c0880b4a5e37f25e40f6e5df7e663524c0c123d1133af25e403dc41aaa653524c035448e563df25e40d029339a653524c0fc68896d3ff25e409f6d9e0f633524c0e2041e0742f25e40555ad049603524c04502967042f25e404ac59f19663524c01f06e82e41f25e40fea4efb06f3524c0640a544a41f25e40b0969f39823524c06dffa5a845f25e4079e04fcc7b3524c047f4dbad46f25e401b49a00f7f3524c0ab0518cc46f25e40682440d98d3524c06f036d3746f25e402cfc8d61d33524c012a9a8a146f25e405107bdffdf3524c05704ec9c47f25e4040aa7f15023624c0412d995f48f25e407fb548a51f3624c026bb51fa49f25e4059165738283624c0e203d6eb43f25e40218bc4ee303624c0b0a244093cf25e40aec42c973d3624c09ec85def37f25e40eaf00601413624c0),
(4, 1, 'Dekenat Mena', '123.78598882735066', '-10.107831582257804', 5, 0xfeffffff0103000000010000004600000084f9b53152f25e40b91590e74b3724c0e2f4c1f851f25e40beb7ff464f3724c008f6bfeb51f25e40e25fd0764f3724c0a8f97dd351f25e40d297dfda623724c07a08022351f25e40eed2aff9643724c0fcfa133050f25e40f9f3cfc6683724c024f861f050f25e4056e91fe2753724c06404c44350f25e4044a7ef05823724c0c1f56d3050f25e40cb9a3f438b3724c0eb0b662950f25e40071c808b993724c0ad0ada894ef25e405c92bf0f993724c0c7f3d1554ef25e4020e3df1d983724c00b0bccd44df25e4016416000813724c0f501a8714df25e40e15b70f8783724c0dafbfdef4bf25e40e8ce3fbd7a3724c013006e9e4bf25e409629609e793724c0e7f2dfb648f25e40bdffdf35803724c0be08205a47f25e409bfa1f2d853724c05207fc5047f25e406b03e0f1873724c0fe0ab6a547f25e40755350ee933724c0d4f4bdac47f25e40ce32d0dbad3724c05ef4d38747f25e40769a2fecb53724c0dbf7c9cd47f25e401f65a088c73724c02503f23c47f25e4069afdf87d33724c018feb70144f25e409afdef7cce3724c02704a49e42f25e406cf4ffe4ce3724c004fb572940f25e4003592099cd3724c073fd1bb13ff25e40644750a4ce3724c0f00562a83ef25e404fe8cf60ce3724c037f3cdb53df25e40a663d07dc03724c080f90fa13df25e401da5ef8ebc3724c07d0bfe853df25e40173db016b13724c06df607133df25e401c4120539b3724c048ffd5273cf25e40f0aa3f2d833724c052f543153bf25e408fbc0f22823724c038f9659b38f25e4064a16f2d803724c06ffc092637f25e405564b07e853724c0fc013cd636f25e406dd43f57863724c0def549da33f25e408ac37f9d873724c0b50b8a7d32f25e400d9a7f73843724c055f7a7d831f25e404909b035833724c03301ac3e31f25e402ecedf16813724c04f03b8702ff25e40bca80f7c823724c0fa01f66e2ff25e401ed11f03823724c0aafd8de62ef25e405fd0af9e743724c00cfb05502ff25e40abf05f076b3724c05f000e572ff25e40e59fdfcf5e3724c053f645e22ff25e40e43030dc4d3724c02df5ddc130f25e400f0b701b383724c0fcfd453c30f25e40665ea0423b3724c0a203069931f25e40f02de031393724c076f665ce32f25e403d3150f1363724c0dafd6bb734f25e406cd1bf72363724c0cb3c0a2136f25e40257a2313333724c0bf05583237f25e40793750082f3724c0c8ffcd9c38f25e402863d04e2c3724c044f9610839f25e40da258013303724c030ff477b3af25e400f45a002303724c075d41a973df25e40f75145562b3724c097a14a3640f25e4055071db0293724c03ccbc3ca43f25e40908b4605283724c08b2ff94246f25e40cdee212d233724c0b80abc3449f25e407b1390251d3724c0abfb39e14bf25e404047708a233724c0e2f97bd74ff25e4036091014273724c060f4459450f25e4070ca9f622a3724c0d30b9af450f25e40b8d47f9d2d3724c0c008926650f25e40ff02d04f493724c040f5491652f25e4016dcdf3e4a3724c084f9b53152f25e40b91590e74b3724c0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `daftar_paroki`
--
ALTER TABLE `daftar_paroki`
  ADD PRIMARY KEY (`id_par`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indeks untuk tabel `daftar_paroki1`
--
ALTER TABLE `daftar_paroki1`
  ADD PRIMARY KEY (`id_par`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `id_kelurahan` (`id_paroki`);

--
-- Indeks untuk tabel `gereja_stasi`
--
ALTER TABLE `gereja_stasi`
  ADD PRIMARY KEY (`id_gereja`),
  ADD KEY `id_paroki` (`id_paroki`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_inf`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indeks untuk tabel `keuskupan`
--
ALTER TABLE `keuskupan`
  ADD PRIMARY KEY (`id_keuskupan`);

--
-- Indeks untuk tabel `kutipan`
--
ALTER TABLE `kutipan`
  ADD PRIMARY KEY (`id_kutipan`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`username_op`);

--
-- Indeks untuk tabel `tbl_paroki`
--
ALTER TABLE `tbl_paroki`
  ADD PRIMARY KEY (`id_parokiii`),
  ADD KEY `id_kelurahan` (`id_keuskupan`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indeks untuk tabel `tbl_romo`
--
ALTER TABLE `tbl_romo`
  ADD PRIMARY KEY (`id_pastor`),
  ADD KEY `id_kelurahan` (`id_gereja`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_paroki`
--
ALTER TABLE `daftar_paroki`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `daftar_paroki1`
--
ALTER TABLE `daftar_paroki1`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `gereja_stasi`
--
ALTER TABLE `gereja_stasi`
  MODIFY `id_gereja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_inf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `keuskupan`
--
ALTER TABLE `keuskupan`
  MODIFY `id_keuskupan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kutipan`
--
ALTER TABLE `kutipan`
  MODIFY `id_kutipan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_paroki`
--
ALTER TABLE `tbl_paroki`
  MODIFY `id_parokiii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `tbl_romo`
--
ALTER TABLE `tbl_romo`
  MODIFY `id_pastor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_paroki`
--
ALTER TABLE `daftar_paroki`
  ADD CONSTRAINT `daftar_paroki_ibfk_1` FOREIGN KEY (`id_keuskupan`) REFERENCES `keuskupan` (`id_keuskupan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_paroki`) REFERENCES `tbl_paroki` (`id_parokiii`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gereja_stasi`
--
ALTER TABLE `gereja_stasi`
  ADD CONSTRAINT `gereja_stasi_ibfk_1` FOREIGN KEY (`id_paroki`) REFERENCES `tbl_paroki` (`id_parokiii`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_paroki`
--
ALTER TABLE `tbl_paroki`
  ADD CONSTRAINT `tbl_paroki_ibfk_1` FOREIGN KEY (`id_keuskupan`) REFERENCES `keuskupan` (`id_keuskupan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_paroki_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_romo`
--
ALTER TABLE `tbl_romo`
  ADD CONSTRAINT `tbl_romo_ibfk_1` FOREIGN KEY (`id_gereja`) REFERENCES `gereja_stasi` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
