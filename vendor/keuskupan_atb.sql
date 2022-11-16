-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2022 pada 14.35
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuskupan_atb`
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
  `id_keuskupan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `foto1` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_keuskupan`, `nama`, `informasi`, `foto1`, `foto2`, `foto3`) VALUES
(20, 1, 'GEREJA 1', '<p><strong>KEGIATAN MISA HARI MINGGU DILAKUKAN PADA TANGGAL 19 DESEMBER DAN TANGGAL 25 DESEMBER, MISA MALAM TAHUN BARU TANGGAL 31 DESEMBER</strong></p>', 'IMG_76521 (2).png', 'IMG_76521 (2).png', 'IMG_76521 (2).png'),
(21, 1, 'VVVVVVV', '<p>XXXXXXXXXXXX</p>', 'IMG_76521 (2).png', 'IMG_76521 (2).png', 'WhatsApp Image 2022-06-09 at 09.58.04.jpeg'),
(22, 1, 'aaaa', '<p>aaaaaaaaaaaaaaa</p>', 'IMG_76521 (2).png', 'IMG_76521 (2).png', 'IMG_76521 (2).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gereja_stasi`
--

CREATE TABLE `gereja_stasi` (
  `id_gereja` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pastor` text NOT NULL,
  `informasi` text NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gereja_stasi`
--

INSERT INTO `gereja_stasi` (`id_gereja`, `id_keuskupan`, `nama`, `pastor`, `informasi`, `longitude`, `latitude`, `foto`) VALUES
(1, 1, 'Gereja Katedral Santa Maria Imakulata Atambua.', '<p>1. Rm. Stefanus Boisala, Pr</p>\r\n<p>2. Rm. Vinsensius A. Paulo Bria, Pr</p>\r\n<p>3. Rm. Kristianus Fallo, Pr</p>\r\n<p>4.&nbsp;Rm. Gregorius Roby Kiik, Pr</p>', '<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 07.30, 09.00, 17.00 WITA</p>\r\n<p>Informasi kegiatan tambahan :</p>\r\n<p>Pelaksanaan kegiatan Jalan salib di hari jumat Pk. 10.00 WITA.</p>', '124.89645694092263', '-9.099559204446365', 'katedral.JPG'),
(2, 1, 'Gereja Sta. Maria Stella Maris Atapupu.', '', '<p>Pastor paroki : Rm. Samuel Yoris Giri, Pr</p>\r\n<p>Alamat: Pastoran Katolik Atambua, Atambua 85702</p>\r\n<p>Telp: 082 123 585 874</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 09.00, 17.00 WITA .</p>', '124.86855608385316', '-8.994015911877577', 'WhatsApp-Image-2020-06-19-at-13.44.44-370x250.jpeg'),
(3, 1, 'Gereja Sta. Maria Bunda Penebus Fatuketi', '', '<p>Pastor paroki : Rm. Agustinus Klau, Pr</p>\r\n<p>Alamat: Pastoran Katolik Fatuketi, Atambua 85702, Timor &ndash; NTT</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: 2 kali misa hari sabtu sore dan minggu jam 16.00 dan jam 08.00 sampai selesai</p>', '124.86535367919879', '-9.088664951708992', '2019-06-24.jpg'),
(4, 1, 'Gereja St. Petrus Tukuneno', '', '<p>Pastor paroki : Rm. Bernard Bria Seran, Pr</p>\r\n<p>Alamat: Pastoran Katolik Tukuneno, Atambua85702, Timor - NTT.</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.30, 09.00, 17.00 WITA</p>', '124.88080719299246', '-9.123915822479557', 'CIMG8575.JPG'),
(23, 1, 'Gereja St. Antonius Padua Nela', '', '<p>Pastor paroki : P. Irenius Lolan, SVD</p>\r\n<p>Alamat: Pastoran Katolik Nela, Atambua 85702, Timor - NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 08.00, WITA</p>', '124.89406654224253', '-9.178263740114117', 'IMG_7197.JPG'),
(24, 1, 'Gereja Roh Kudus Halilulik', '', '<p>Pastor paroki :Rm. Febronius Fenat, Pr</p>\r\n<p>Alamat: Keuskupan Atambua, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 08.00, 17.00 WITA</p>', '124.87690357826783', '-9.274588930475645', 'pic-58fdd90b7197737778c988c5.jpg'),
(25, 1, 'Gereja Hati Kudus Yesus Laktutus', '', '<p>Pastor paroki : P. Kristoforus Tara, OFM</p>\r\n<p>Alamat: Pastoran Katolik Laktutus, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.00, 09.00, 17.00 WITA</p>', '124.97826595852628', '-9.275056214586433', '137340583_4458558974160893_2055974245053598780_n.jpg'),
(26, 1, 'Gereja St. Agustinus Fatubenao', '', '<p>Pastor paroki : Rm. Renso Tae Lake, Pr</p>\r\n<p>Alamat: Pastoran Katolik Fatubenao, Atambua 85702, Timor &ndash; NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 06.30 dan jam 08.00 sampai selesai</p>', '124.90502326826527', '-9.104301428889972', 'IMG_7186.JPG'),
(27, 1, 'Gereja St. Paulus Wedomu', '', '<p>Pastor paroki : Rm. Paulus Nahak II, Pr</p>\r\n<p>Alamat: Pastoran Katolik Wedomu, Atambua 85702, Timor - NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.00, 09.15 WITA</p>', '124.98744191328045', '-9.127411038790132', 'baksoskoramil.jpg'),
(28, 1, 'Gereja St. Petrus Lahurus', '', '<p>Pastor paroki : P. Fransiskus A. Setu, SVD</p>\r\n<p>Alamat: Pastoran Katolik Lahurus, Atambua 85702, Timor-NTT</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 08.00, WITA</p>', '125.04655529215623', '-9.073327737718758', 'lahurus.jpg'),
(29, 1, 'Gereja St. Aloysius Gonzaga Haekesak', '', '<p>Gereja St. Aloysius Gonzaga Haekesak</p>', '125.1164694699652', '-9.005284175718824', 'Screenshot (11).png'),
(30, 1, 'Gereja St. Gerardus Nualain', '', 'Gereja St. Gerardus Nualain', '125.13730421524508', '-9.119272841847955', 'nualain.jpg'),
(31, 1, 'Gereja St. Theodorus Weluli', '', 'Gereja St. Theodorus Weluli', '125.10406030386547', '-9.094003704074032', 'weluli.jpg'),
(32, 1, 'Gereja Sta. Maria Ratu Damai Fulur', '', '<p>Gereja Sta. Maria Ratu Damai Fulur</p>', '124.9622085413957', '-9.40724455648678', 'sds-2.jpg'),
(34, 1, 'Gereja St. Yohanes Pemandi Haliwen', '', '<p>Gereja St. Yohanes Pemandi Haliwen</p>', '124.90057484492773', '-9.059514038536324', 'Screenshot (20).png'),
(53, 1, 'Gereja St. Mikhael Webora', '', '<p>Gereja St. Mikhael Webora</p>', '124.92284339807335', '-9.36039784972407', 'Screenshot (19).png'),
(54, 1, 'Gereja St. Arnoldus Janssen Labur', '', '<p>&nbsp;Gereja St. Arnoldus Janssen Labur</p>', '124.87027255687231', '-9.320180273827113', 'Screenshot (21).png'),
(76, 1, 'Gereja Tri Tungal Maha Kudus Sadi', '', 'Gereja Tri Tungal Maha Kudus Sadi', '124.94311380905783', '-9.066532763131724', 'Screenshot (21).png'),
(77, 1, 'Gereja Sta. Maria Fatima Betun', '', '<p>Pastor paroki : Rm. Antonius Herminus Bere, Pr</p>\r\n<p>Alamat: Desa wehali, Betun</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', '124.96222828245271', '-9.40733263486703', 'fatima betun.jpg'),
(78, 1, 'Gereja St. Fransiskus Xaverius Bolan', '', 'Gereja St. Fransiskus Xaverius Bolan', '124.95671482994187', '-9.609594087983414', 'bolan.jpg'),
(79, 1, 'Gereja St. Mikhael Kada', '', '<p>Pastor paroki : Rm. Yohanes Erwin Asa, Pr</p>\r\n<p>Alamat: Jl. Raya Kada</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', '124.95522652789406', '-9.514319029879639', 'kada.jpg'),
(80, 1, 'Gereja Kristus Raja Kamanasa', '', 'Gereja Kristus Raja Kamanasa', '124.96223399971227', '-9.406958746428227', 'kamanasa.jpg'),
(81, 1, 'Gereja Salib Suci Alas', '', 'Gereja Salib Suci Alas', '125.04074281991724', '-9.39340416008668', 'gereja alas.jpg'),
(82, 1, 'Gereja St. Laurensius Wemasa', '', 'Gereja St. Laurensius Wemasa', '125.0158770563093', '-9.497247250479136', 'wemasa.png'),
(83, 1, 'Gereja Kristus Raja Seon', '', 'Gereja Kristus Raja Seon', '124.90505372772056', '-9.413740636696952', 'seon.jpg'),
(84, 1, 'Gereja St Yohanes Baptista Besikama', '', '<p>Pastor paroki : Rm. Cyrilus Oktovianus Timo, Pr</p>\r\n<p>Alamat: Jl. Abateu Moruk, Besikama</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 1 kali setiap hari minggu jam 07.00 sampai selesai</p>', '124.92429491181647', '-9.649788291568584', 'besikama.jpg'),
(85, 1, 'Gereja St. Antonius Padua Kleselon', '', 'Gereja St. Antonius Padua Kleselon', '124.88107179908582', '-9.623758351938971', 'kleseleon.jpg'),
(86, 1, 'Gereja St. Yohanes Rasul Webriamata', '', '<p>Pastor paroki : Rm. Yohanes Kristian Kali, Pr</p>\r\n<p>Alamat: Jl. Webrimata-Weoe</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap minggu jam 07.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', '124.8665659278158', '-9.687885624271352', 'webriamata.jpg'),
(87, 1, 'Gereja St. Mikhael Biudukfoho', '', 'Gereja St. Mikhael Biudukfoho', '124.75218939894754', '-9.601479186507573', 'biudikfoho.png'),
(88, 1, 'Gereja Yohanes Rasul Rafau', '', 'Gereja Yohanes Rasul Rafau', '124.96221927022808', '-9.407233971869424', 'rafau.jpg'),
(89, 1, 'Gereja Lukas Wekfau', '', 'Gereja Lukas Wekfau', '124.8327286123358', '-9.535181957915386', 'rafau.jpg'),
(90, 1, 'Gereja Yohanes Pamadi Kaputu', '', 'Gereja Yohanes Pamadi Kaputu', '124.85917891234455', '-9.496612741255598', 'kaputu.jpg'),
(91, 1, 'Gereja Sta. Sisilia Kotafoun', '', 'Gereja Sta. Sisilia Kotafoun', '124.81009009896415', '-9.477943133010042', 'kotafoun.png'),
(92, 1, 'Gereja Salib Suci Weoe', '', 'Gereja Salib Suci Weoe', '124.8363392872696', '-9.689056869346544', 'weoe.jpg'),
(93, 1, 'Gereja Sta. Maria Fatima Nurobo', '', 'Gereja Sta. Maria Fatima Nurobo', '124.81606444175816', '-9.358838170484967', 'fatima nurobo.jpg'),
(94, 1, 'Gereja Teresia Culcata Hanemasin', '', 'Gereja Teresia Culcata Hanemasin', '124.82548837027896', '-9.745845071997637', 'hanemasin.png'),
(95, 1, 'Gereja Fransiskus Asisi Lakulo', '', '<p>Gereja Fransiskus Asisi Lakulo.</p>', '124.87365422053881', '-9.647881015874127', 'lakulo.jpg'),
(96, 1, 'Gereja St. Dominikus Leon As Wekmindar', '', 'Gereja St. Dominikus Leon As Wekmindar', '124.8172486561278', '-9.60922849143512', 'wekmindar.jpg'),
(97, 1, 'Paroki Sta. Theresia Kefamenanu', '', '<p>Pastor paroki : Rm. Djanuarius Maukura, Pr</p>\r\n<p>Alamat: Jl. Yos Sudarso</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Misa 3 kali setiap minggu jam 05.30 sampai</p>\r\n<p>selesai, jam 08.00 sampai selesai dan jam 16.00 sampai selesai</p>', '124.6008399523059', '-9.425622628091343', 'Paroki Sta. Theresia Kefamenanu.jpg'),
(98, 1, 'Gereja St. Andreas Tunbaba', '', '<p>Pastor paroki : Rm. Yohanes P. Naben, Pr</p>\r\n<p>Alamat: Desa Kuatnana, kefamenanu</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali pada hari minggu jam 06.45 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', '124.4646268436255', '-9.407558955214585', 'Paroki St. Andreas Tunbaba.jpg'),
(99, 1, 'Gereja Kristus Raja Haumeni', '', '<p>Gereja Kristus Raja Haumeni</p>', '124.4114561864191', '-9.407522736993354', 'Paroki Kristus Raja Haumeni.png'),
(100, 1, 'Gereja St. Arnoldus Yanssen Jak', '', '<p>Gereja St. Arnoldus Yanssen Jak</p>', '124.52082223904762', '-9.3565436217598', 'Paroki St. Arnoldus Yanssen Jak.png'),
(101, 1, 'Gereja St. Yohanes Pemandi Naesleu', '', '<p>Pastor paroki : Rm. Yohanes Seran Nahak, Pr</p>\r\n<p>Alamat: Jl. A. Yani, Kefamenanu</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 3 kali setiap minggu jam 07.00 sampai selesai, jam 09.00 sampai selesai dan jam 17 .00 sampai selesai</p>', '124.48337676381942', '-9.459696348232656', 'Paroki St. Yohanes Pemandi Naesleu.jpg'),
(102, 1, 'Gereja St. Maria Penyelenggara Segala Rahmat  Kiupukan', '', '<p>Pastor paroki : Rm. Donatus Tefa, Pr</p>\r\n<p>Alamat: Desa nunmafo, kiupukan</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: 2 kali misa setiap minggu jam 07.00 dan jam 09.00 sampai selesai</p>', '124.60083846372768', '-9.425619480070445', 'St. Maria Penyelenggara Segala Rahmat.JPG'),
(103, 1, 'Gereja St. Fransiskus Asisi Mamsena', '', '<p>Gereja St. Fransiskus Asisi Mamsena</p>', '124.59881587734317  ', '-9.485739263017134', 'Paroki St. Fransiskus Asisi Mamsena.png'),
(104, 1, 'Gereja St. Antonius Padua Sasi', '', '<p>Gereja St. Antonius Padua Sasi</p>', '124.49390453732347 ', '-9.502509910501033', 'Paroki St. Antonius Padua Sasi.jpg'),
(105, 1, 'Gereja St. Nikolas Bijaepasu ', '', '<p>Gereja St. Nikolas Bijaepasu&nbsp;</p>', '124.42664554896179', '-9.529461288095918', 'Paroki St. Nikolas Bijaepasu.png'),
(106, 1, 'Gereja Sta. Maria Diangkat Ke Surga Eban', '', '<p>Gereja Sta. Maria Diangkat Ke Surga Eban</p>', '124.31650264492022', '-9.55016521998616', 'Paroki Sta. Maria Diangkat Ke Surga Eban.jpg'),
(107, 1, 'Gereja St. Bernardus Naekake', '', '<p>Gereja St. Bernardus Naekake</p>', '124.19773570458275', '-9.429389689470332', 'Paroki St. Bernardus Naekake.jpg'),
(108, 1, 'Gereja Sta. Maria Ratu Oeolo', '', '<p>Gereja Sta. Maria Ratu Oeolo</p>', '124.38583804966329', '-9.473844018573798', 'Paroki Sta. Maria Ratu Oeolo.png'),
(109, 1, 'Gereja Hati Yesus Yang MahaKudus Noemuti', '', '<p>Pastor paroki : Rm. Agustinus Berek, Pr</p>\r\n<p>Alamat: Jln. Pah Bala, Desa Kote</p>\r\n<p>Telp:&nbsp;-</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk 06.15 dan 09.15 sampai selesai</p>\r\n<p>&nbsp;</p>', '124.48114716753332', '-9.571329575118023', 'Paroki Hati Yesus Yang MahaKudus Noemuti.jpg'),
(110, 1, 'Gereja St. Yohanes Maria Vianey Maubesi', '', '<p>Gereja St. Yohanes Maria Vianey Maubesi</p>', '124.60084925246038', '-9.425615056410065', 'Paroki St. Yohanes Maria Vianey Maubesi.png'),
(111, 1, 'Gereja St. Antonius Maria Claret Oenopu', '', '<p>Pastor paroki : P. Konstantinus Lakat, CMF</p>\r\n<p>Alamat:&nbsp;Jln. Timor Raya Gang Claret Desa Teba</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa Mingguan: Pk. 07.00 sampai selesai</p>', '124.78185818385337', '-9.384100869984868', 'Paroki St. Antonius Maria Claret Oenopu.png'),
(112, 1, 'Gereja St. Mikhael Oelami', '', '<p>Gereja St. Mikhael Oelami</p>', '124.4621771794497', '-9.487606055222379', 'Paroki St. Mikhael Oelami.png'),
(113, 1, 'Gereja Tublopo', '', '<p>Gereja Tublopo</p>', '124.56489846820568', '-9.529710371077533', 'Paroki Tublopo.png'),
(114, 1, 'Gereja Sta. Filomena Mena', '', '<p>Gereja Sta. Filomena Mena</p>', '124.59354467613443', '-9.19745060879632', 'Paroki Sta. Filomena Mena.png'),
(115, 1, 'Gereja St. Fransiskus Xaverius Wini', '', '<p>Pastor paroki : Rm. Theodorus Taus, Pr</p>\r\n<p>Alamat:&nbsp;Jl. Miguel Lopis No. 5, Wini</p>\r\n<p>Telp: -</p>\r\n<p>Jadwal Perayaan Ekaristi:&nbsp;Misa 1 Kali setiap minggu jam 06.30 sampai selesai</p>', '124.4919600322291', '-9.180898116512909', 'Paroki St. Fransiskus Xaverius Wini.png'),
(116, 1, 'Gereja St. Yosef Manamas', '', '<p>Gereja St. Yosef Manamas</p>', '124.49955848462663', '-9.263844051603817', 'Paroki St. Yosef Manamas.png'),
(117, 1, 'Gereja St. Yohanes Pemandi Bakitolas', '', '<p>Gereja St. Yohanes Pemandi Bakitolas</p>', '124.60084092768165', '-9.425622798466975', 'Paroki St. Yohanes Pemandi Bakitolas.png'),
(118, 1, 'Gereja St. Petrus Kanisius Manufui', '', '<p>Gereja St. Petrus Kanisius Manufui</p>', '124.6990884377417', '-9.371685430614983', 'Paroki St. Petrus Kanisius Manufui.png'),
(119, 1, 'Gereja Bunda Allah Ponu', '', '<p>Pastor paroki : Rm. Fransiskus Seran, Pr</p>\r\n<p>Alamat: Jl. Ponu Raya</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 2 kali setiap hari minggu jam 08.00 sampai selesai dan jam</p>\r\n<p>09.00 sampai selesai</p>', '124.68400977618353', '-9.140560540689451', 'Paroki Bunda Allah Ponu.png'),
(120, 1, 'Gereja St. Petrus dan Paulus Lurasik', '', '<p>Pastor paroki : Rm. Inosensius Nahak Berek, Pr</p>\r\n<p>Alamat: Jl. Pelajar, Lurasik</p>\r\n<p>Telp: (0389) 21046</p>\r\n<p>Jadwal Perayaan Ekaristi: Misa 1 kali setiap minggu jam 07.00 sampai selesai</p>', '124.82863536073494', '-9.288973445543988', 'Paroki St. Petrus dan Paulus Lurasik.jpg'),
(121, 1, 'Stasi St.Tadeus Dafala', '', 'Stasi St.Tadeus Dafala', '124.96859924302271', '-9.17444834976729', 'Screenshot (45).png'),
(122, 1, 'Stasi Yohanes Rasul Wetubu', '', '<p>Stasi Yohanes Rasul Wetubu</p>', '124.85916910734906', '-9.163151683534783', 'Screenshot (47).png');

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
(10, 1, '<h1 class="mb-4">SEJARAH SINGKAT</h1>\r\n<p>Keuskupan Atambua merupakan keuskupan sufragan dari Keuskupan Agung Kupang. Wilayahnya meliputi 5200 km persegi dan mencakup Kabupaten Belu, Kabupaten Timor Tengah Utara, dan Kabupaten Malaka, Nusa Tenggara Timur. Keuskupan ini berpusat di Atambua. Jumlah umat Keuskupan Atambua kini lipat dua dibanding data tahun 1970 setelah dipisahkan dengan Keuskupan Kupang, menjadi lebih dari setengah juta orang.</p>\r\n<p>Keuskupan Atambua memiliki 62 paroki yang berada di wilayah Belu, Malaka dan Timor Tengah Utara. Keuskupan Atambua memiliki 4 Dekenat yaitu Dekenat Belu Utara memiliki 17 paroki, Dekenat Malaka memiliki 15 paroki, Dekenat Kefamenanu memiliki 10 paroki dan Dekenat Mena memiliki 10 paroki.</p>\r\n<p>Pada tahun 1883, para misionaris Yesuit mendirikan stasi yang pertama di Atapupu dan pada tahun 1886 di Lahurus. Selanjutnya pada tahun 1913 pelayanan di Timor diserahkan kepada para misionaris Societas Verbi DIvini (SVD) dengan Lahurus sebagai pusat misi pada waktu itu. Pada 16 Juli 1889, di Lahurus berdirilah Sekolah Dasar pertama di Timor.</p>\r\n<p>Tahun 1913 Pulau Timor menjadi bagian dari wilayah Prefektur Apostolik Kepulauan Sunda Kecil dengan Mgr. Petrus Noyen, SVD sebagai Prefektur Apostolik. Guru-guru Agama mulai memegang peranan penting dalam meletakkan dasar Kristiani di kalangan Umat Katolik Timor.</p>\r\n<p>Tahun 1936, Timor menjadi Vikariat sendiri dengan nama &ldquo;Vicariat Apostolik Atambua&rdquo; dan Mgr. Jacobus Pessers, SVD ditunjuk sebagai Vikaris Apostolik pertama pada 16 Juni 1937. Pada waktu itu sudah ada sekitar 42.000 umat Katolik yang dilayani oleh 19 Imam, 3 Bruder dan 12 Suster.</p>\r\n<p>Seminari Menengah Lalian, satu-satunya Seminari dalam Keuskupan Atambua, didirikan pada 8 September 1950. Tahun 1957 didirikan Biara Santo Yosef Nenuk tempat pembinaan bagi Bruder-bruder Timor.</p>\r\n<p>Pada 3 Januari 1961, Vikariat Apostolik Atambua menjadi Keuskupan Atambua dan sebagai Gereja setempat Keuskupan Atambua dipimpin oleh Mgr. Theodorus Sulama, SVD. Tanggal 21 September 2007 merupakan hari bersejarah dimana terjadi pentahbisan Uskup Atambua yang baru dan sekaligus peralihan kepemimpinan dari Mgr. Anton Pain Ratu, SVD (1984-2007) kepada penggantinya Mgr. Dr. Dominikus Saku, seorang imam Projo Keuskupan Atambua.</p>\r\n<p>&nbsp;</p>'),
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
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuskupan`
--

INSERT INTO `keuskupan` (`id_keuskupan`, `nama`) VALUES
(1, 'ATAMBUA');

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
(9, 1, 'Yohanes 11 : 25 - 25', '<p><strong><em>" Akulah kebangkitan dan hidup; barangsiapa percaya kepada-Ku, ia akan hidup walaupun ia sudah mati, dan setiap orang yang hidup dan yang percaya kepada-Ku tidak akan mati selama-lamanya. Percayakah engkau akan hal ini "</em></strong></p>'),
(13, 1, '1 Yohanes 4 : 7 - 8', '<p><em><strong>" Saudara-saudaraku yang kekasih, marilah kita saling mengasihi, sebab kasih itu berasal dari Allah; dan setiap orang yang mengasihi, lahir dari Allah dan mengenal Allah. Barangsiapa tidak mengasihi, ia tidak mengenal Allah, sebab Allah adalah kasih. "</strong></em></p>'),
(14, 1, '1 Yohanes 4 : 18', '<p><em><strong>" Di dalam kasih tidak ada ketakutan: kasih yang sempurna melenyapkan ketakutan; sebab ketakutan mengandung hukuman dan barangsiapa takut, ia tidak sempurna di dalam kasih. "</strong></em></p>'),
(16, 1, '1 Kor . 16 : 14 ', '<p><em><strong>" Lakukan segalanya dengan cinta "</strong></em></p>');

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
  `nama_paroki` varchar(100) NOT NULL,
  `par_dekenat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paroki`
--

INSERT INTO `tbl_paroki` (`id_parokiii`, `id_keuskupan`, `id_wilayah`, `nama_paroki`, `par_dekenat`) VALUES
(63, 1, 0, 'Paroki Katedral Atambua', 'BELU UTARA'),
(64, 1, 0, 'Paroki Fatubenao', 'BELU UTARA'),
(65, 1, 0, 'Paroki Wedomu', 'BELU UTARA'),
(66, 1, 0, 'Paroki Lahurus', 'BELU UTARA'),
(67, 1, 0, 'Paroki Weluli', 'BELU UTARA'),
(68, 1, 0, 'Paroki Fulur', 'BELU UTARA'),
(69, 1, 0, 'Paroki Nualain', 'BELU UTARA'),
(70, 1, 0, 'Paroki Fatuketi', 'BELU UTARA'),
(71, 1, 0, 'Paroki Sadi', 'BELU UTARA'),
(72, 1, 0, 'Paroki Atapupu', 'BELU UTARA'),
(73, 1, 0, 'Paroki Tukuneno', 'BELU UTARA'),
(74, 1, 0, 'Paroki Nela', 'BELU UTARA'),
(75, 1, 0, 'Paroki Halilulik', 'BELU UTARA'),
(76, 1, 0, 'Paroki Webora', 'BELU UTARA'),
(77, 1, 0, 'Paroki Laktutus', 'BELU UTARA'),
(78, 1, 0, 'Paroki Haekesak', 'BELU UTARA'),
(79, 1, 0, 'Paroki Haliwen', 'BELU UTARA'),
(80, 1, 0, 'Paroki Labur', 'BELU UTARA'),
(81, 1, 0, 'Paroki Kefamenanu', 'KEFAMENANU '),
(82, 1, 0, 'Paroki Naesleu', 'KEFAMENANU '),
(83, 1, 0, 'Paroki Sasi', 'KEFAMENANU '),
(84, 1, 0, 'Paroki Maubam', 'KEFAMENANU '),
(85, 1, 0, 'Paroki Noemuti', 'KEFAMENANU '),
(86, 1, 0, 'Paroki Bijaepasu', 'KEFAMENANU '),
(87, 1, 0, 'Paroki Oeolo', 'KEFAMENANU '),
(88, 1, 0, 'Paroki Eban', 'KEFAMENANU '),
(89, 1, 0, 'Paroki Naekake', 'KEFAMENANU '),
(90, 1, 0, 'Paroki Tunbaba', 'KEFAMENANU '),
(91, 1, 0, 'Paroki Haumeni', 'KEFAMENANU '),
(92, 1, 0, 'Paroki Maubesi', 'KEFAMENANU '),
(93, 1, 0, 'Paroki Mamsena', 'KEFAMENANU '),
(94, 1, 0, 'Paroki Kiupukan', 'KEFAMENANU '),
(95, 1, 0, 'Paroki Jak ', 'KEFAMENANU '),
(96, 1, 0, 'Paroki Ainan', 'KEFAMENANU '),
(97, 1, 0, 'Paroki Oenopu', 'KEFAMENANU '),
(98, 1, 0, 'Paroki Oelami', 'KEFAMENANU '),
(99, 1, 0, 'Paroki Tublopo', 'KEFAMENANU '),
(100, 1, 0, 'Paroki Betun ', 'MALAKA'),
(101, 1, 0, 'Paroki Bolan ', 'MALAKA'),
(102, 1, 0, 'Paroki Kada', 'MALAKA'),
(103, 1, 0, 'Paroki Alas', 'MALAKA'),
(104, 1, 0, 'Paroki Wemasa', 'MALAKA'),
(105, 1, 0, 'Paroki Kamanasa ', 'MALAKA'),
(106, 1, 0, 'Paroki Kleseleon', 'MALAKA'),
(107, 1, 0, 'Paroki Besikama ', 'MALAKA'),
(108, 1, 0, 'Paroki Webriamata', 'MALAKA'),
(109, 1, 0, 'Paroki Weoe', 'MALAKA'),
(110, 1, 0, 'Paroki Biudukfoho', 'MALAKA'),
(111, 1, 0, 'Paroki Wekfau', 'MALAKA'),
(112, 1, 0, 'Paroki Rafau', 'MALAKA'),
(113, 1, 0, 'Paroki Kaputu', 'MALAKA'),
(114, 1, 0, 'Paroki Kotafoun', 'MALAKA'),
(115, 1, 0, 'Paroki Seon', 'MALAKA'),
(116, 1, 0, 'Paroki Nurobo', 'MALAKA'),
(117, 1, 0, 'Paroki Hanemasin', 'MALAKA'),
(118, 1, 0, 'Paroki Wekmidar', 'MALAKA'),
(119, 1, 0, 'Paroki Lakulo', 'MALAKA'),
(120, 1, 0, 'Paroki Bakitolas', 'MENA'),
(121, 1, 0, 'Paroki Manamas', 'MENA'),
(122, 1, 0, 'Paroki Fafinesu', 'MENA'),
(123, 1, 0, 'Paroki Manufui', 'MENA'),
(124, 1, 0, 'Paroki Lurasik', 'MENA'),
(125, 1, 0, 'Paroki Manumean', 'MENA'),
(126, 1, 0, 'Paroki Mena', 'MENA'),
(127, 1, 0, 'Paroki Ponu', 'MENA'),
(128, 1, 0, 'Paroki Fatuoni', 'MENA'),
(129, 1, 0, 'Paroki Wini ', 'MENA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_romo`
--

CREATE TABLE `tbl_romo` (
  `id_pastor` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `nama_pastor` varchar(100) NOT NULL,
  `dekenat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_romo`
--

INSERT INTO `tbl_romo` (`id_pastor`, `id_keuskupan`, `nama_pastor`, `dekenat`) VALUES
(62, 1, 'Rm. Stefanus Boisala, Pr', 'BELU UTARA'),
(63, 1, 'Rm. Vinsensius A. Paulo Bria, Pr', 'BELU UTARA'),
(64, 1, 'Rm. Kristianus Fallo, Pr', 'BELU UTARA'),
(65, 1, 'Rm. Gregorius Roby Kiik, Pr', ' BELU UTARA'),
(66, 1, 'Rm. Renso Tae Lake, Pr', ' BELU UTARA'),
(67, 1, 'Rm. Melkhior Meak, Pr', ' BELU UTARA'),
(68, 1, 'Rm. Paulus Nahak II, Pr', 'BELU UTARA'),
(69, 1, 'Rm. Laurensius Tnopo, Pr', ' BELU UTARA'),
(70, 1, 'P. Fransiskus A. Setu, SVD', ' BELU UTARA'),
(71, 1, 'Rm. Agustinus Kau Lake, Pr', ' BELU UTARA'),
(72, 1, 'Rm. Agustinus Kau Lake, Pr', ' BELU UTARA'),
(73, 1, 'Rm. Primus Seran, Pr', ' BELU UTARA'),
(74, 1, 'Rm. Primus Seran, Pr', 'BELU UTARA'),
(75, 1, 'Rm. Oktovianus Taek, Pr', 'BELU UTARA'),
(76, 1, 'Rm. Kornelis Etan, Pr', 'BELU UTARA'),
(77, 1, 'P. Irenius Lolan, SVD', 'BELU UTARA'),
(78, 1, 'Rm. Krisantus Lake, Pr', 'BELU UTARA'),
(79, 1, 'Rm. Agustinus Klau, Pr', 'BELU UTARA'),
(80, 1, 'Rm. Fransiskus Teku, Pr', 'BELU UTARA'),
(81, 1, 'Rm. Gregorius Sainudin Dudy, Pr', 'BELU UTARA'),
(82, 1, 'Rm. Samuel Yoris Giri, Pr ', 'BELU UTARA'),
(83, 1, 'Rm. Yosef Tae Bria, Pr', 'BELU UTARA'),
(84, 1, 'Rm. Silverius Berry Meak, Pr', 'BELU UTARA'),
(85, 1, 'Rm. Servas Naben, Pr', 'BELU UTARA'),
(86, 1, 'Rm. Bernard Bria Seran, Pr', 'BELU UTARA'),
(87, 1, 'Rm. Febronius Fenat, Pr ', 'BELU UTARA'),
(88, 1, 'Rm. Yosef Prayogar Fallo, Pr', 'BELU UTARA'),
(89, 1, 'Rm. Apolinaris Bouk, Pr', 'BELU UTARA'),
(90, 1, 'Rm. Fidelis Okto. Sanbein, Pr', 'BELU UTARA'),
(91, 1, 'Rm. Norbertus Nahak, Pr', 'BELU UTARA'),
(92, 1, 'P. Kristoforus Tara, OFM ', 'BELU UTARA'),
(93, 1, 'P. Virjilius, OFM', 'BELU UTARA'),
(94, 1, 'Rm. Niko Nahak Dalu, Pr', 'BELU UTARA'),
(95, 1, 'Rm. Brunolinga Ndun, Pr', 'BELU UTARA'),
(96, 1, 'Rm. Herman Nurak, Pr', 'BELU UTARA'),
(97, 1, 'Rm. Maxi Sikone, Pr', 'BELU UTARA'),
(98, 1, 'Rm. Edmundus Sako, Pr', 'MALAKA'),
(99, 1, 'Rm. Antonius Herminus Bere, Pr', ' MALAKA'),
(100, 1, 'Rm. Marselinus Nai Kei, Pr', ' MALAKA'),
(101, 1, 'Rm. Ludovikus Sonny Akoit', ' MALAKA'),
(102, 1, 'Rm. Yosef Meak, Pr', ' MALAKA'),
(103, 1, 'Rm. Yasintus Nesi, Pr', 'MALAKA'),
(104, 1, 'Rm. Yohanes Erwin Asa, Pr', 'MALAKA'),
(105, 1, 'P. Yohanes Napan, SVD', 'MALAKA'),
(106, 1, 'P. Rony Moensaku, SVD', 'MALAKA'),
(107, 1, 'Rm. Dominggus Kabosu, Pr', 'MALAKA'),
(108, 1, 'Rm. Yustus Nipu, Pr', 'MALAKA'),
(109, 1, 'P. Andreas Hane, SVD', 'MALAKA'),
(110, 1, 'Rm. Leonardus Nahas, Pr', 'MALAKA'),
(111, 1, 'Rm. Marcellus Bria, Pr', 'MALAKA'),
(112, 1, 'Rm. Cyrilus Oktovianus Timo, Pr', 'MALAKA'),
(113, 1, 'Rm. Fransiskus Naikofi, Pr', 'MALAKA'),
(114, 1, 'Rm. Frederikus Oeleu, Pr', 'MALAKA'),
(115, 1, 'Rm. Yohanes Kristian Kali, Pr', 'MALAKA'),
(116, 1, 'Rm. Pius Nahak, Pr', 'MALAKA'),
(117, 1, 'Rm. Thadeus Baki Thaal, Pr', 'MALAKA'),
(118, 1, 'Rm. Jakobus Nabu, Pr', 'MALAKA'),
(119, 1, 'Rm. Mikhael Maumabe, Pr', 'MALAKA'),
(120, 1, 'Rm. Agustinus Nabu, Pr', 'MALAKA'),
(121, 1, 'Rm. Bernardinus Humoen, Pr', 'MALAKA'),
(122, 1, 'Rm. Yonathas Nahak, Pr', 'MALAKA'),
(123, 1, 'Rm. Balthasar Seran, Pr', 'MALAKA'),
(124, 1, 'Rm. V. Frengky De Rosari Rusae,  Pr', 'MALAKA'),
(125, 1, 'Rm. Aloysius Kosat, Pr', 'MALAKA'),
(126, 1, 'Rm. Marselus Erlando Afoan, Pr', 'MALAKA'),
(127, 1, 'Rm. Jefriston Benyamin Ndun, Pr', 'MALAKA'),
(128, 1, 'P. Arkhidius Sifa, CMF', 'MALAKA'),
(129, 1, 'P. Yosep Markus Arkian, CMF', 'MALAKA'),
(130, 1, 'P. Alexius Kedi, CMF', 'MALAKA'),
(131, 1, 'Rm. Yosef Nahak, Pr', 'MALAKA'),
(132, 1, ' Rm. Hieronimus Kore, Pr', 'MALAKA'),
(133, 1, 'Rm. Kornelis Subani, Pr ', 'MALAKA'),
(134, 1, 'Rm. Gerardus Salu, Pr', ' KEFAMENANU '),
(135, 1, 'Rm. Djanuarius Maukura, Pr', ' KEFAMENANU'),
(136, 1, 'Rm. Herman Bau Rua, Pr', 'KEFAMENANU '),
(137, 1, ' Rm. Yohanes F. Mali, Pr', ' KEFAMENANU'),
(138, 1, 'Rm. Agustinus Seran, Pr', ' KEFAMENANU '),
(139, 1, 'Rm. Yohanes Seran Nahak, Pr', ' KEFAMENANU'),
(140, 1, 'Rm. Dickyanto Mau Letto, Pr', ' KEFAMENANU'),
(142, 1, 'P. Jose Alexander Fatun Nitsae,  OFM. Conv', 'KEFAMENANU '),
(143, 1, 'Rm. Simon Opat, Pr', 'KEFAMENANU '),
(144, 1, 'Rm. Elfrid Nahak Seran, Pr', 'KEFAMENANU '),
(145, 1, 'Rm. Agustinus Berek, Pr', 'KEFAMENANU '),
(146, 1, 'Rm. Yunus Sirilus Bouk, Pr', 'KEFAMENANU '),
(147, 1, 'Rm. Yanuarius Meta Uskenat, Pr ', 'KEFAMENANU '),
(148, 1, 'Rm. Emanuel Usboko, Pr', 'KEFAMENANU '),
(149, 1, 'Rm. Yavet L. Makus, Pr', 'KEFAMENANU '),
(150, 1, ' Rm. Yohanes Faentaono, Pr', 'KEFAMENANU '),
(151, 1, 'Rm. Ignatius M. Kabosu, Pr ', 'KEFAMENANU '),
(152, 1, 'Rm. Frengky Atitus, Pr', 'KEFAMENANU '),
(153, 1, 'Rm. Gabriel Bouk, Pr', 'KEFAMENANU '),
(154, 1, ' Rm. Patrisius Sixtus Bere, Pr', 'KEFAMENANU '),
(155, 1, 'Rm. Ignatius Alo Bria Neno, Pr', 'KEFAMENANU '),
(156, 1, 'Rm. Fridolinus Talan, Pr', 'KEFAMENANU '),
(157, 1, 'Rm. Yohanes P. Naben, Pr', 'KEFAMENANU '),
(158, 1, 'Rm. Marius Y. Tallo, Pr', 'KEFAMENANU '),
(159, 1, 'Rm. Edelbertus Silab, Pr', 'KEFAMENANU '),
(160, 1, 'Rm. Gabriel Alos, Pr', 'KEFAMENANU '),
(161, 1, 'Rm. Kristo Oki, Pr', 'KEFAMENANU '),
(162, 1, 'P. Kornelis Dosi, SVD', 'KEFAMENANU '),
(163, 1, 'P. Peter Tan, SVD', 'KEFAMENANU '),
(164, 1, 'Rm. Donatus Tefa, Pr', 'KEFAMENANU '),
(165, 1, 'Rm. Flafianus Kuftalan, Pr', 'KEFAMENANU '),
(166, 1, 'P. Felix S., MSF', 'KEFAMENANU '),
(167, 1, 'P. Pius Geroda Issohone, MSF ', 'KEFAMENANU '),
(168, 1, 'P. Konstantinus Lakat, CMF', 'KEFAMENANU '),
(169, 1, 'P. Urbanus Sedu, CMF', 'KEFAMENANU '),
(170, 1, 'Diakon Kalixtus Kapistrano', 'KEFAMENANU '),
(171, 1, 'Rm. Alfonsius Leki, Pr', 'KEFAMENANU '),
(172, 1, 'P. Anastasius M.T. Tamal,  OFM,Conv', 'KEFAMENANU '),
(173, 1, 'P. Mikhael Rusae, SVD ', 'MENA'),
(174, 1, 'Rm. Delvi Abanit Asa, Pr', 'MENA'),
(175, 1, 'Rm. Martin Aleroja Nahak, Pr', 'MENA'),
(176, 1, 'Rm. Beatus Salu, Pr', 'MENA'),
(177, 1, 'Rm. Agustinus D. Nesi, Pr', 'MENA'),
(178, 1, 'Rm. Hendrikus Hale, Pr', 'MENA'),
(179, 1, 'Rm. Oktofianus Neno, Pr', 'MENA'),
(180, 1, 'Rm. Desiderius Ludgerus Saba', 'MENA'),
(181, 1, 'Rm. Urbanus Hala, Pr', 'MENA'),
(182, 1, 'Rm. Inosensius Nahak Berek, Pr', 'MENA'),
(183, 1, 'Rm. Dalmasius Saunoah', 'MENA'),
(184, 1, ' Rm. Emanuel Fkun, Pr', 'MENA'),
(185, 1, 'Rm. Fredy K. Laku Mali, Pr', 'MENA'),
(186, 1, 'Rm. Kanisius Oki, Pr', 'MENA'),
(187, 1, ' Rm. Gaudensius Nabu, Pr', 'MENA'),
(188, 1, 'Rm. Zebedeus Nahas, Pr', 'MENA'),
(189, 1, 'Rm. Zebedeus Nahas, Pr', 'MENA'),
(190, 1, 'Rm. Fransiskus Seran, Pr', 'MENA'),
(191, 1, 'Rm. Maxi Amnanu, Pr', 'MENA'),
(192, 1, 'Rm. Makarius Molo, Pr', 'MENA'),
(193, 1, 'Rm. Theodorus Taus, Pr', 'MENA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `id_keuskupan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `informasi` text NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `warna` int(5) NOT NULL,
  `shape` polygon NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `id_keuskupan`, `nama`, `informasi`, `longitude`, `latitude`, `warna`, `shape`) VALUES
(1, 1, 'Dekenat Belu Utara', '<p>Jumlah Paroki&nbsp; : 18 Paroki</p>\r\n<p>Jumlah Pastor&nbsp; &nbsp;:&nbsp;31</p>\r\n<p>Jumlah Umat&nbsp; : 183.111 Umat</p>', '123.78738777662642', '-10.101642168579087', 4, '����\0\0\0\0\0\0}\0\0\0Bc~�^�^@j���2$���F^c�^@�Zʲ2$��.O�f�^@�g��2$��5��h�^@$eu�2$��\\�*m�^@Y&���2$����u�^@�M���2$���\\�~�^@���2$����ڃ�^@�T��2$���^��^@\n\0ǩ�2$��;��^@u4��Y3$�^��(��^@�a`Gk3$����z��^@�O��3$�r�g��^@��_)�3$���-Z��^@h�4�3$����n��^@C�O�3$����u��^@�Xj�3$����n��^@����3$���7n��^@X� �3$���_��^@Eĉ3$�\\<[��^@�C�M�3$���+M��^@mf`d�3$���qR��^@f3@ϊ3$�v�W]��^@�oE�3$���S��^@ҏډ3$�R�e��^@���Ԋ3$�t�b��^@��?��3$���}s��^@�_��3$��\n�g��^@��O��3$���+M��^@\r��3$�R�e��^@�8�?�3$��?��^@21�3$���)@��^@���z�3$�k�/g��^@+�Ɖ3$��`d��^@�ӯP�3$���^��^@��ϙ�3$���O��^@�3$��Db��^@��o�3$��&S��^@���?�3$����[��^@��P�3$�xt2��^@Ia�ƈ3$��\r���^@h!�r�3$�~��"��^@�#�#�3$�\r��I��^@}c x�3$��^W��^@�ȟB�3$�u\0=��^@3�E�3$�E��^@+8��3$�B\0���^@s7Ї�3$��,���^@�����3$�*\0�(��^@?��K�3$�%�Y��^@"7���3$�G�b��^@H���3$�<�����^@�0��3$���S��^@��_�3$���E��^@5M��4$������^@��_�!4$�$R���^@ե�r74$�p����^@f韬L4$������^@P��\\4$���c���^@۷�Ka4$�����^@���b4$�.���^@=�ϔa4$��<��^@%S@�`4$����	�^@n.��[4$�\0��\Z~�^@,�O*[4$�C��h}�^@�%@�U4$�Y��{�^@_��T4$����ay�^@�5X4$�s�#�x�^@!HPF]4$�Q(?x�^@~Z�\nc4$�u�a}x�^@��h}4$��n�w�^@\\�Ϲ�4$�8�Q4w�^@�����4$��\n.�v�^@�_��4$���%�v�^@��i�4$��l�u�^@W�o?�4$���`t�^@y�9�4$��Nwt�^@��_��4$�v\r��q�^@v�o��4$����q�^@{50ж4$�)Np�^@�$\0�4$�(��o�^@����4$�2\0l2n�^@��/\\�4$���U�m�^@"��5$�p�zm�^@\\3P�5$�T��}m�^@���O05$����zn�^@����G5$�d��n�^@�<PW5$����o�^@m>p�W5$����s�^@��]5$�P�Cv�^@�$P0c5$�3\0Hlv�^@=`Tk5$���3�v�^@Q��>�5$��	�v�^@�@��5$���Cv�^@���I�5$�~�v�^@��o��5$��-�v�^@�XP��5$���S�u�^@3�¾5$���9]u�^@��O�5$�C��u�^@�3��5$��	Ĵu�^@!џ�5$�k�U@v�^@�4�L�5$�&	[v�^@*P`A�5$���͞r�^@��o��5$����n�^@(�x�5$�x �j�^@�����5$� �hf�^@q��\n�5$����a�^@\Z�ϖ6$�v��K^�^@^�\n6$�m�<[�^@~e��6$����W�^@�cP�6$�[\0p�S�^@�ɏ*6$��b�N�^@\0��56$�0��K�^@v(ǈ�5$����L�^@?ū��5$��_|''Q�^@25f:5$�"��T�^@�<���4$�p�D�U�^@��]�c4$�?{W�^@{Z\0�\r4$��__vY�^@�`��3$��!��Y�^@>{��3$��;?5Z�^@��3$���Z�^@\0�M3$�Y�u|[�^@BV,�$3$�X���]�^@o���2$�Bc~�^�^@j���2$�'),
(2, 1, 'Dekenat Malaka', '<p>Jumlah Paroki&nbsp; : 20 Paroki</p>\r\n<p>Jumlah Pastor&nbsp; &nbsp;: 27</p>\r\n<p>Jumlah Umat&nbsp; : 192.194 Umat</p>', '123.78524128287667', '-10.106993880490972', 4, '����\0\0\0\0\0\0[\0\0\0��{G�^@t�''�6$���MwG�^@�D y�6$�B\n�jG�^@r�O��6$�h�G�^@�����6$� �G�^@}?���6$��\0ćH�^@��O��6$�>��	I�^@/�o��6$��\0��I�^@�Kp�7$���eI�^@(Q��7$��\n�4I�^@{�%7$���5�E�^@�`$7$����bB�^@�V�b(7$�<\r��>�^@ʢ�+7$���%�:�^@z�߳/7$�0�G{:�^@E�07$�D�a9�^@�%�07$�/���8�^@=��/7$���͜8�^@(c�N,7$��X27�^@y7P/7$��	v%5�^@��\r67$���k�4�^@lѿr67$�v�e�2�^@=1P�67$���?�1�^@�497$�-���0�^@p87$���;�0�^@RV�87$���Sj0�^@GdЯC7$�[��/�^@���P7$����S/�^@F��_7$��P/�^@��_k7$�����.�^@_Я�t7$���Kt.�^@л��t7$�C&1.�^@�?�s7$�"�h,�^@��t7$��	f ,�^@���%t7$�1�&+�^@��zu7$�!���)�^@��6s7$�Q	��)�^@�,@am7$�7\r4T*�^@-ҏ\0Q7$���W�*�^@�@�J7$�5��H*�^@+�ߧ;7$�s�(�^@����:7$��F�(�^@n(@�:7$���(�^@,���:7$����(�^@B���;7$��\0��(�^@��x;7$��\nH�(�^@�@;7$�����(�^@�\0\\:7$�X0�(�^@a��:7$�C���(�^@��:7$�\r@\r)�^@���P77$�S\nZ)�^@�lP�57$�K��)�^@�0�!07$�U�(�^@O�w7$��a�(�^@�_	7$�A�%�(�^@O���6$��zx)�^@�&��6$����*�^@��_4�6$���[9,�^@�����6$��	�2.�^@H�_=�6$���gI.�^@�O���6$�W�[/�^@^[�v�6$�����/�^@��_J�6$���\n1�^@"�O�6$���2�^@Q\0+�6$���4�^@d0C~6$��4�^@��hq6$�Ph6�^@\n���[6$�:�]6�^@�[0jW6$�f*�6�^@�%p�I6$�e�C\n7�^@���F6$�L�R:�^@�5p�A6$�P�q=�^@L0f=6$�E\0�A�^@Ѻ��86$�����D�^@iY��56$��\n\n	E�^@U��A6$���E�^@��/}b6$�~x�E�^@Z;�*n6$�\r�bF�^@�@\0]v6$���o�H�^@nC��p6$���`I�^@�E�eq6$��\n��I�^@U>v6$���ǯI�^@�^�=y6$�����I�^@TT��|6$��tI�^@2\n��6$���#	I�^@�/�6$����I�^@����6$��CH�^@��ƿ6$�w��iG�^@LAP��6$���{G�^@�h�6$�u�nG�^@0�b�6$���{G�^@t�''�6$�'),
(3, 1, 'Dekenat Kefamenanu', '<p>Jumlah Paroki&nbsp; : 19 Paroki</p>\r\n<p>Jumlah Pastor&nbsp; &nbsp;: 23</p>\r\n<p>Jumlah Umat&nbsp; : 152.725 Umat</p>', '123.78506097559837', '-10.105647310266827', 4, '����\0\0\0\0\0\0"\0\0\0��]�7�^@��A6$�0���7�^@�ZO+@6$�uh8t7�^@i5ɔ''6$�F�p7�^@v��6$��Q�V6�^@E��6$�B׀�5�^@�1.��5$��D��5�^@�#�5$�\nwR6�^@���!�5$��oD)7�^@�?�1�5$�g���6�^@^K���5$�جr�6�^@�o=�5$�\\��h6�^@r�3X�5$�L6Ѐ5�^@\n��i5$�[[�o6�^@mnͱi5$�[[�o6�^@mnͱi5$��J^7�^@���~f5$��#�:�^@=�\Z�e5$�5D�V=�^@�)3�e5$��h�m?�^@�m�c5$��B�^@UZ�I`5$�E�pB�^@Jşf5$��.A�^@���o5$�d\nTJA�^@���9�5$�m���E�^@y�O�{5$�G�ۭF�^@I�5$���F�^@h$@ٍ5$�om7F�^@,��a�5$����F�^@Q���5$�W�G�^@@�6$�A-�_H�^@�H�6$�&�Q�I�^@YW8(6$����C�^@!���06$���D	<�^@��,�=6$���]�7�^@��A6$�'),
(4, 1, 'Dekenat Mena', '<p>Jumlah Paroki&nbsp; : 10 Paroki</p>\r\n<p>Jumlah Pastor&nbsp; &nbsp;: 21</p>\r\n<p>Jumlah Umat&nbsp; : 69.284 Umat</p>', '123.78598882735066', '-10.107831582257804', 5, '����\0\0\0\0\0\0F\0\0\0���1R�^@���K7$�����Q�^@���FO7$����Q�^@�_�vO7$���}�Q�^@җ��b7$�z#Q�^@�ү�d7$���0P�^@����h7$�$�a�P�^@V��u7$�d�CP�^@D���7$���m0P�^@˚?C�7$��f)P�^@���7$��\nډN�^@\\���7$����UN�^@ ���7$���M�^@A`\0�7$���qM�^@�[p�x7$�����K�^@��?�z7$�\0n�K�^@�)`�y7$���߶H�^@���5�7$�� ZG�^@��-�7$�R�PG�^@k��7$��\n��G�^@uSP�7$�����G�^@�2�ۭ7$�^�ӇG�^@v�/�7$�����G�^@e���7$�%�<G�^@i�߇�7$���D�^@���|�7$�''��B�^@l����7$��W)@�^@Y ��7$�s��?�^@dGP��7$��b�>�^@O��`�7$�7�͵=�^@�c�}�7$����=�^@�7$�}��=�^@=��7$�m�=�^@A S�7$�H��''<�^@�?-�7$�R�C;�^@��"�7$�8�e�8�^@d�o-�7$�o�	&7�^@Ud�~�7$��<�6�^@m�?W�7$���I�3�^@����7$���}2�^@\r�s�7$�U���1�^@I	�5�7$�3�>1�^@.���7$�O�p/�^@��|�7$���n/�^@��7$�����.�^@_Я�t7$��P/�^@��_k7$�_\0W/�^@���^7$�S�E�/�^@�00�M7$�-���0�^@p87$���E<0�^@f^�B;7$���1�^@�-�197$�v�e�2�^@=1P�67$���k�4�^@lѿr67$��<\n!6�^@%z#37$��X27�^@y7P/7$���͜8�^@(c�N,7$�D�a9�^@�%�07$�0�G{:�^@E�07$�u�\Z�=�^@�QEV+7$���J6@�^@U�)7$�<���C�^@��F(7$��/�BF�^@��!-#7$��\n�4I�^@{�%7$���9�K�^@@Gp�#7$���{�O�^@6	''7$�`�E�P�^@pʟb*7$����P�^@���-7$���fP�^@��OI7$�@�IR�^@��>J7$����1R�^@���K7$�');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `daftar_paroki`
--
ALTER TABLE `daftar_paroki`
  ADD PRIMARY KEY (`id_par`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `daftar_paroki1`
--
ALTER TABLE `daftar_paroki1`
  ADD PRIMARY KEY (`id_par`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `gereja_stasi`
--
ALTER TABLE `gereja_stasi`
  ADD PRIMARY KEY (`id_gereja`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_inf`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `keuskupan`
--
ALTER TABLE `keuskupan`
  ADD PRIMARY KEY (`id_keuskupan`);

--
-- Indexes for table `kutipan`
--
ALTER TABLE `kutipan`
  ADD PRIMARY KEY (`id_kutipan`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`username_op`);

--
-- Indexes for table `tbl_paroki`
--
ALTER TABLE `tbl_paroki`
  ADD PRIMARY KEY (`id_parokiii`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `tbl_romo`
--
ALTER TABLE `tbl_romo`
  ADD PRIMARY KEY (`id_pastor`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelurahan` (`id_keuskupan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_paroki`
--
ALTER TABLE `daftar_paroki`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `daftar_paroki1`
--
ALTER TABLE `daftar_paroki1`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `gereja_stasi`
--
ALTER TABLE `gereja_stasi`
  MODIFY `id_gereja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_inf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `keuskupan`
--
ALTER TABLE `keuskupan`
  MODIFY `id_keuskupan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kutipan`
--
ALTER TABLE `kutipan`
  MODIFY `id_kutipan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_paroki`
--
ALTER TABLE `tbl_paroki`
  MODIFY `id_parokiii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `tbl_romo`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
