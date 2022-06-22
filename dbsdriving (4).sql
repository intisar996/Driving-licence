-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2021 at 06:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsdriving`
--
CREATE DATABASE IF NOT EXISTS `dbsdriving` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbsdriving`;

-- --------------------------------------------------------

--
-- Table structure for table `governorates`
--

DROP TABLE IF EXISTS `governorates`;
CREATE TABLE IF NOT EXISTS `governorates` (
  `gid` int(8) NOT NULL AUTO_INCREMENT,
  `gname` varchar(30) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=33027 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `governorates`
--

INSERT INTO `governorates` (`gid`, `gname`) VALUES
(33021, 'Al Batinah North'),
(33022, 'Muscat'),
(33023, 'Dhofar'),
(33024, 'Musandam'),
(33025, 'South Batinah'),
(33026, 'South Sharqiyah'),
(22027, 'North Sharqiyah');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `ausername` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `address` varchar(20) NOT NULL,
  `seq` varchar(50) NOT NULL,
  `ans` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `repassword` varchar(8) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2329 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`aid`, `aname`, `ausername`, `email`, `phone`, `address`, `seq`, `ans`, `password`, `repassword`) VALUES
(2327, 'admin', 'admin', 'admins@eamil.com', 98745631, 'shinas', 'What was your dream job as a child?', 'actor', '12345678', '12345678'),
(2328, 'bla', 'aas', 'intisar@eamil.com', 94431525, 'ss', 'What was your dream job as a child?', 'qw', '12345678', '12345678'),
(2325, 'xx', 'd', 'admin@eamil.com', 98745632, 'almusnah', 'What was your favorite place to visit as a child?', 'qw', '1111111o', '1111111o');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailstrainng`
--

DROP TABLE IF EXISTS `tbldetailstrainng`;
CREATE TABLE IF NOT EXISTS `tbldetailstrainng` (
  `deid` int(8) NOT NULL AUTO_INCREMENT,
  `Typ_contr` varchar(20) NOT NULL COMMENT 'Type_of_Contract',
  `Dur_contr` varchar(20) NOT NULL COMMENT 'Duration of the contract',
  `tra_days` varchar(200) NOT NULL COMMENT 'training days',
  `tra_time` varchar(200) NOT NULL COMMENT 'training times',
  `price` float(8,2) NOT NULL,
  `num_trainees` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`deid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldetailstrainng`
--

INSERT INTO `tbldetailstrainng` (`deid`, `Typ_contr`, `Dur_contr`, `tra_days`, `tra_time`, `price`, `num_trainees`, `username`) VALUES
(14, 'temporary contract', '3 month', 'Wednesday,Thursday,Friday,Tuesday', 'from 9:00 pm to 12am\r\n\r\nfrom 12:00 am to 5am', 200.00, 29, 'saif@om'),
(7, 'daily contract', '6 month', '6', '5', 33.00, 30, 'llm'),
(13, 'temporary contract', '2 month', 'Saturday,Sunday', '10 to 9', 50.00, 40, 'ahmed98'),
(11, 'daily contract', '6 month', 'Saturday,Sunday,Friday,Tuesday', 'from 10:00 am to 5:00 pm\r\nfrom 5:00 am to 7:00 pm\r\n', 350.00, 8, 'ahmed98'),
(12, 'temporary contract', '3 month', 'Saturday,Monday,Friday', 'from 8 am to 2 pm\r\nfrom 8 am to 3 pm', 500.00, 9, 'ahmed98');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeeback`
--

DROP TABLE IF EXISTS `tblfeeback`;
CREATE TABLE IF NOT EXISTS `tblfeeback` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comm` text NOT NULL,
  `dates` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeeback`
--

INSERT INTO `tblfeeback` (`id`, `Name`, `phone`, `email`, `comm`, `dates`) VALUES
(2, 'dd', 25698745, 'wew@email.com', 'hsis dsidjsdsdjsnds dnsdsd', '2021-11-12 09:41:10'),
(3, 'dd', 25698745, 'wew@email.com', 'vjbdskfbdskjfbd', '2021-11-12 09:41:44'),
(4, 'dd', 25698745, 'wew@email.com', 'jdlsflsdbfdjsbf', '2021-11-12 09:41:54'),
(5, 'dd', 25698745, 'wew@email.com', 'fsd flsd', '2021-11-12 09:42:07'),
(6, 'intisar', 94431525, 'intisar19961@hotmail.com', 'snslflsjf', '2021-11-12 09:55:05'),
(7, 'WS Mazad', 98745632, 'irr@email.com', '.v cl nlxc bc', '2021-11-12 09:56:04'),
(8, 'said', 98745632, 'said@emai.com', 'asas;;,,\'asaslasalsa ansalndsnd.., dsd\r\n1cd,ldkg.', '2021-11-12 09:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblselecttraineer`
--

DROP TABLE IF EXISTS `tblselecttraineer`;
CREATE TABLE IF NOT EXISTS `tblselecttraineer` (
  `sid` int(8) NOT NULL AUTO_INCREMENT,
  `trainee_username` varchar(20) NOT NULL,
  `trainee_fname` varchar(20) NOT NULL,
  `trainee_email` varchar(50) NOT NULL,
  `phone_num` int(8) NOT NULL,
  `deid` varchar(20) NOT NULL COMMENT 'detailstrainng',
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblselecttraineer`
--

INSERT INTO `tblselecttraineer` (`sid`, `trainee_username`, `trainee_fname`, `trainee_email`, `phone_num`, `deid`, `username`) VALUES
(62, 'RRR', 'intisar', 'intisar', 25698745, '13', 'ahmed98'),
(61, 'saoma', 'asma', 'asma', 96969696, '11', 'ahmed98'),
(60, 'fatma_p', 'fatma', 'fatma', 25698745, '11', 'ahmed98'),
(63, 'mary@m', 'Maryam', 'Maryam', 25698745, '14', 'saif@om');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainee`
--

DROP TABLE IF EXISTS `tbltrainee`;
CREATE TABLE IF NOT EXISTS `tbltrainee` (
  `trainee_id` int(8) NOT NULL AUTO_INCREMENT,
  `trainee_fname` varchar(20) NOT NULL,
  `trainee_lname` varchar(20) NOT NULL,
  `trainee_email` varchar(50) NOT NULL,
  `trainee_phone` int(8) NOT NULL,
  `gnamee` varchar(50) NOT NULL,
  `wnamee` varchar(20) NOT NULL,
  `trainee_uname` varchar(20) NOT NULL,
  `trainee_gender` varchar(10) NOT NULL,
  `trainee_brithdate` date NOT NULL,
  `seqe` varchar(200) NOT NULL,
  `anse` varchar(20) NOT NULL,
  `trainee_passw` varchar(8) NOT NULL,
  `trainee_repassw` varchar(8) NOT NULL,
  PRIMARY KEY (`trainee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=466 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltrainee`
--

INSERT INTO `tbltrainee` (`trainee_id`, `trainee_fname`, `trainee_lname`, `trainee_email`, `trainee_phone`, `gnamee`, `wnamee`, `trainee_uname`, `trainee_gender`, `trainee_brithdate`, `seqe`, `anse`, `trainee_passw`, `trainee_repassw`) VALUES
(465, 'Maryam', 'salam', 'maryam@email.com', 25698741, 'Al Batinah North', 'sohar', 'mary@m', 'Female', '2002-01-30', 'What was your favorite place to visit as a child?', 'zoo', '12345678', '12345678'),
(3, 'intisar', 'wer', 'wew@email.com', 25698745, 'Al Batinah North', 'sohar', 'rrr', 'Male', '2002-02-07', 'What was your dream job as a child?', 'a', '12345678', '12345678'),
(1, 'fatma', 'said', 'fatma@email.com', 25698745, 'Al Batinah North', 'sohar', 'fatma_p', 'Female', '2002-02-06', 'What was your dream job as a child?', 'doctor', '1234567p', '1234567p'),
(2, 'asma', 'mohamed', 'asma@email.com', 96969696, 'Muscat', 'Al Amarat', 'saoma', 'Female', '2002-02-07', 'What was your favorite place to visit as a child?', 'zoo', 'aaaa8888', 'aaaa8888');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainer`
--

DROP TABLE IF EXISTS `tbltrainer`;
CREATE TABLE IF NOT EXISTS `tbltrainer` (
  `trid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `address` varchar(30) NOT NULL,
  `brithdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `licensing` blob NOT NULL,
  `IDcard` blob NOT NULL,
  `seq` varchar(100) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `wname` varchar(30) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=MyISAM AUTO_INCREMENT=1013 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltrainer`
--

INSERT INTO `tbltrainer` (`trid`, `fname`, `lname`, `email`, `phone`, `address`, `brithdate`, `gender`, `licensing`, `IDcard`, `seq`, `answer`, `username`, `password`, `status`, `gname`, `wname`) VALUES
(1011, 'asdsa', 'asd', 'intisar19961@hotmail.com', 94431525, 'ss', '1999-02-03', 'Female', 0x312e4a5047, 0x332e4a5047, 'What was your favorite place to visit as a child?', 'mmm', 'llkk', '12345678', 'APPROVE', 'Muscat', 'Al Amarat'),
(1012, 'asdsa', 'asd', 'intisar19961@hotmail.com', 94431525, 'rrr', '1999-02-05', 'Female', 0x342e4a5047, 0x322e4a5047, 'What was your favorite place to visit as a child?', 'mmm', 'ewe', '12345678', 'DIS APPROVE', 'Muscat', 'Al Amarat'),
(5, 'mmn', 'asd', 'intisar19961@hotmail.com', 94431525, 'hh', '1999-02-11', 'Male', 0x322e4a5047, 0x332e4a5047, 'What was your favorite place to visit as a child?', 'mmm', 'oo', '12345678', 'NEW', 'Dhofar', 'Thumrait'),
(1010, 'iioi', 's', 'intisar@eamil.com', 94431525, 'ss', '1999-02-10', 'Male', 0x71712e6a7067, 0x646f776e6c6f61642e706e67, 'What was your dream job as a child?', 'dd', 'ooimm', '12345678', 'NEW', 'Muscat', 'Quriyat'),
(4, 'asdsa', 'asd', 'intisar19961@hotmail.com', 94431525, 'ss', '1999-02-12', 'Female', 0x312e4a5047, 0x332e4a5047, 'What was your favorite place to visit as a child?', 'mmm', 'kjkj', '12345678', 'NEW', 'Al Batinah North', 'sohar'),
(2, 'Ahmed', 'said', 'ahmed@email.com', 98774521, 'sohar', '1999-02-18', 'Male', 0x612e6a7067, 0x696463617264342e6a7067, 'What was your dream job as a child?', 'maryam', 'ahmed98', 'iiiiiiii', 'APPROVE', 'Al Batinah North', 'sohar'),
(3, 'ahood', 'ahmed', 'ahood@email.com', 92231525, 'muscat', '1999-02-11', 'Female', 0x612e6a7067, 0x696463617264342e6a7067, 'What was your dream job as a child?', 'engnering', 'ahoodr', '12345678', 'NEW', 'Al Batinah North', 'sohar'),
(1, 'saif', 'salam', 'saif@email.com', 98745634, 'sohar', '1999-02-03', 'male', 0x612e6a7067, 0x6964636172642e6a7067, 'What was your favorite place to visit as a child?', 'zoo', 'saif@om', '22222222', 'APPROVE', 'Al Batinah North', 'sohar');

-- --------------------------------------------------------

--
-- Table structure for table `wilayat`
--

DROP TABLE IF EXISTS `wilayat`;
CREATE TABLE IF NOT EXISTS `wilayat` (
  `wid` int(8) NOT NULL AUTO_INCREMENT,
  `gid` int(8) NOT NULL,
  `wname` varchar(30) NOT NULL,
  `gname` varchar(50) NOT NULL,
  PRIMARY KEY (`wid`,`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=33038 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayat`
--

INSERT INTO `wilayat` (`wid`, `gid`, `wname`, `gname`) VALUES
(22012, 33021, 'sohar', 'Al Batinah North'),
(22013, 33021, 'shinas', 'Al Batinah North'),
(22014, 33022, 'Al Amarat', 'Muscat'),
(22015, 33022, 'muscat', 'Muscat'),
(22016, 33021, 'liwa', 'Al Batinah North'),
(22017, 33021, 'saham', 'Al Batinah North'),
(22018, 33021, 'Khabourah', 'Al Batinah North'),
(22020, 33021, 'Suwaiq', 'Al Batinah North'),
(22028, 33023, 'Hallaniyat ', 'Dhofar'),
(22023, 33022, 'Quriyat', 'Muscat'),
(22034, 33022, 'Seeb', 'Muscat'),
(22025, 33022, 'Mutrah', 'Muscat'),
(22026, 33022, 'Bausher', 'Muscat'),
(22029, 33023, ' Shaleem', 'Dhofar'),
(22030, 33023, 'Muqshin', 'Dhofar'),
(22031, 33023, 'Mazyounah', 'Dhofar'),
(22032, 33023, 'Dhalkut', 'Dhofar'),
(22033, 33023, 'Thumrait', 'Dhofar'),
(22034, 33023, 'Rakhyut', 'Dhofar'),
(22035, 33023, 'Mirbat', 'Dhofar'),
(22036, 33023, 'Taqah', 'Dhofar'),
(33037, 33023, 'Salalah', 'Dhofar'),
(22040, 33024, 'Bukha', 'Musandam'),
(22041, 33024, 'Madha', 'Musandam'),
(22042, 33024, 'Khasab', 'Musandam'),
(22043, 33024, 'Daba', 'Musandam'),
(3301, 33025, 'Rustaq', 'South Batinah'),
(3302, 33025, 'Awabi', 'South Batinah'),
(3305, 33025, 'Musana’ah', 'South Batinah'),
(3306, 33025, 'Barka', 'South Batinah'),
(3307, 33026, 'Masirah', 'South Sharqiyah'),
(3308, 33026, ' Ja’alan Bani Bu Hassan', 'South Sharqiyah'),
(3309, 33026, 'Sur', 'South Sharqiyah'),
(3340, 33026, 'al Kamil wa’l Wafi', 'South Sharqiyah'),
(4401, 22027, 'Bidiyah', 'North Sharqiyah'),
(4403, 22027, 'Ibra', 'North Sharqiyah'),
(4405, 22027, 'Mudhaibi', 'North Sharqiyah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
