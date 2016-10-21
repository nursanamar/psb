-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2016 at 02:05 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `csba`
--

CREATE TABLE IF NOT EXISTS `csba` (
  `id_csba` text NOT NULL,
  `nama` text NOT NULL,
  `tt_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `klmin` text NOT NULL,
  `agama` text NOT NULL,
  `warganegara` text NOT NULL,
  `alamat` text NOT NULL,
  `sekolah_asal` text NOT NULL,
  `alamat_sklhasl` text NOT NULL,
  `pass` text NOT NULL,
  `tgl_regist` text NOT NULL,
  `status` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csba`
--

INSERT INTO `csba` (`id_csba`, `nama`, `tt_lahir`, `tgl_lahir`, `klmin`, `agama`, `warganegara`, `alamat`, `sekolah_asal`, `alamat_sklhasl`, `pass`, `tgl_regist`, `status`) VALUES
('CSB0001', 'fulan bin fulan', 'arab', '2001-11-18', 'L', 'Islam', 'WNA', 'Jl.gurun', 'MTs.shara', 'gobi', '123456789', '2016-09-27', 'Terverifikasi'),
('CSB0002', 'tohir', 'nda tau', '2000-11-18', 'L', 'Katolik', 'WNA', 'asd', 'junior high', 'nda tau', 'ZI9KQnt3', '2016-10-03', 'Terverifikasi'),
('CSB0003', 'abu', 'itu di sana', '1999-11-18', 'L', 'Islam', 'WNI', 'Alamat nya ', 'sekoalh nya', 'alamat sekolah nya', 'PQPHf1Ud', '2016-10-06', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `csbalulus`
--

CREATE TABLE IF NOT EXISTS `csbalulus` (
  `id_csba` text NOT NULL,
  `jurusan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csbalulus`
--

INSERT INTO `csbalulus` (`id_csba`, `jurusan`) VALUES
('STF0001', '12234');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` text NOT NULL,
  `nama` text NOT NULL,
  `nip` text,
  `tes` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `tes`, `pass`) VALUES
('GRU0001', 'Suharfina Ramadhani', '99898989', 'kesehatan', '123456789'),
('GRU0002', 'Sukma mustajab', '7655676767', 'wawancara', '123456789'),
('GRU0003', 'Ganteng404', '9999900009', 'mengaji', 'daccodev');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE IF NOT EXISTS `notif` (
  `id_notif` text NOT NULL,
  `id_staff` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `untuk` text NOT NULL,
  `tgl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id_notif`, `id_staff`, `judul`, `isi`, `untuk`, `tgl`) VALUES
('NTF0001', 'STF0001', 'pengumunan', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'umun', '2016-10-11'),
('NTF0002', 'STF0001', 'pengumuman', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">tgl : 12/11/16</p>\r\n<p style="text-align: center;">tempat : jl.banfan</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: center;">&nbsp;</p>', 'umun', '2016-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE IF NOT EXISTS `orang_tua` (
  `id_csba` text NOT NULL,
  `ayah` text NOT NULL,
  `ibu` text NOT NULL,
  `tgl_ayah` text NOT NULL,
  `tgl_ibu` text NOT NULL,
  `alamat_ayah` text NOT NULL,
  `alamat_ibu` text NOT NULL,
  `pendidikan_ayah` text NOT NULL,
  `pendidikan_ibu` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_csba`, `ayah`, `ibu`, `tgl_ayah`, `tgl_ibu`, `alamat_ayah`, `alamat_ibu`, `pendidikan_ayah`, `pendidikan_ibu`) VALUES
('CSB0001', 'abdullah', 'siti', '1974-12-30', '1994-04-14', 'gurun', 'disana', 'SLTP', 'SLTA'),
('CSB0002', 'sdaa', 'asd', '2016-10-05', '2016-10-04', 'asd', 'asd', 'SLTA', 'SLTA'),
('CSB0003', 'ayah nya', 'ibu nya', '2016-10-11', '2016-10-04', 'alamat ayah nya', 'alamat ibunya', 'SLTA', 'SLTA');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE IF NOT EXISTS `panitia` (
  `id_panitia` text NOT NULL,
  `nama` text NOT NULL,
  `nisn` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nama`, `nisn`, `pass`) VALUES
('PNT0003', 'Daccodev', '990009999', 'daccodev'),
('PNT0001', 'Diki ', '8878787878', '123456789'),
('PNT0002', 'dimas', '999868666', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_jurusan`
--

CREATE TABLE IF NOT EXISTS `pilihan_jurusan` (
  `id_csba` text NOT NULL,
  `pertama` text NOT NULL,
  `kedua` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_jurusan`
--

INSERT INTO `pilihan_jurusan` (`id_csba`, `pertama`, `kedua`) VALUES
('CSB0002', 'TAV', 'TKR'),
('CSB0001', 'BB', 'TKR'),
('CSB0003', 'NKPI', 'TKR');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` text NOT NULL,
  `nama` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama`, `pass`) VALUES
('STF0001', 'Staff', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE IF NOT EXISTS `tes` (
  `id_csba` varchar(15) NOT NULL,
  `kesehatan` varchar(1000) DEFAULT NULL,
  `wawancara` varchar(15) DEFAULT NULL,
  `mengaji` varchar(15) DEFAULT NULL,
  `tulis` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id_csba`, `kesehatan`, `wawancara`, `mengaji`, `tulis`) VALUES
('CSB0001', 'a:7:{s:5:"berat";s:2:"45";s:6:"tinggi";s:3:"126";s:5:"tensi";s:3:"200";s:5:"rabun";s:5:"tidak";s:4:"buta";s:5:"tidak";s:7:"merokok";s:2:"ya";s:8:"penyakit";s:10:"tifes,paru";}', NULL, NULL, NULL),
('CSB0002', 'a:7:{s:5:"berat";s:3:"232";s:6:"tinggi";s:3:"213";s:5:"tensi";s:3:"123";s:5:"rabun";s:2:"ya";s:4:"buta";s:2:"ya";s:7:"merokok";s:2:"ya";s:8:"penyakit";s:3:"123";}', '73', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE IF NOT EXISTS `wali` (
  `id_csba` text NOT NULL,
  `nama_wali` text NOT NULL,
  `tgl` text NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id_csba`, `nama_wali`, `tgl`, `alamat`, `pendidikan`) VALUES
('CSB0001', 'aminah', '2016-09-08', 'di situ', 'S1'),
('CSB0002', 'asd', '2016-10-05', 'asd', 'S1'),
('CSB0003', 'wali nya', '1994-01-03', 'alamat wali nya', 'SLTP');
