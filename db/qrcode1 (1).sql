-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 09:13 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qrcode1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE IF NOT EXISTS `ambulance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cper` varchar(50) NOT NULL,
  `ambtype` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `con` varchar(12) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `lat` varchar(25) NOT NULL,
  `lng` varchar(25) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `cper`, `ambtype`, `pin`, `con`, `uid`, `pwd`, `pic`, `lat`, `lng`, `st`) VALUES
(1, 'Gopakumar G', 'Mobile ICU Ambulance', 695612, '9446563005', 'amb101', 'amb101', '01.jpg', '10.070693221351622', '76.34358691077739', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_reg`
--

CREATE TABLE IF NOT EXISTS `client_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `mc` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client_reg`
--

INSERT INTO `client_reg` (`id`, `nme`, `mc`, `addr`, `cont`, `em`, `pas`, `ph`, `st`) VALUES
(1, 'Mall of Travancore', 'Aneesh Kumar', 'NH Bypass, near International Airport, Thiruvananthapuram pincode-695024', '7897892139', 'mot@gmail.com', '123', '858111.jpg', 1),
(2, 'Central Mall', 'Ravi Krishna', 'Vanchiyoor Road Pettoor, Vanchiyoor, Thiruvananthapuram pincode-6950345', '7894561239', 'central@gmail.com', '123', '245678.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `c_test`
--

CREATE TABLE IF NOT EXISTS `c_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `hid` varchar(150) NOT NULL,
  `res` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `c_test`
--

INSERT INTO `c_test` (`id`, `uid`, `hid`, `res`, `dt`, `st`) VALUES
(2, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-02-03', 0),
(3, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-04-01', 0),
(4, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-04-03', 0),
(5, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-04-03', 0),
(6, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-04-03', 0),
(7, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-04-03', 0),
(8, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-05-08', 0),
(9, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-05-08', 0),
(10, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-05-08', 0),
(11, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2021-07-01', 0),
(12, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2021-09-03', 0),
(13, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-09-03', 0),
(14, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-09-03', 0),
(15, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2021-09-03', 0),
(16, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2021-09-25', 0),
(17, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2021-09-25', 0),
(18, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-10-18', 0),
(19, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-10-26', 0),
(20, '1234-5678-1234', 'kims@gmail.com', 'Negative', '2021-10-26', 0),
(21, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2021-11-13', 0),
(22, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2021-11-13', 0),
(23, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-01-05', 0),
(24, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-01-05', 0),
(25, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2022-01-05', 0),
(26, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-03', 0),
(27, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-03', 0),
(28, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-07', 0),
(29, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-07', 0),
(30, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-08', 0),
(31, '0965-5678-1346', 'kims@gmail.com', 'Negative', '2022-03-08', 0),
(32, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2022-03-09', 0),
(33, '2134-8798-7895', 'kims@gmail.com', 'Negative', '2022-03-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `c_test1`
--

CREATE TABLE IF NOT EXISTS `c_test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `hid` varchar(150) NOT NULL,
  `res` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `c_test1`
--

INSERT INTO `c_test1` (`id`, `uid`, `hid`, `res`, `dt`, `st`) VALUES
(2, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-02-03', 0),
(3, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-04-01', 0),
(4, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-04-03', 0),
(5, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-04-03', 0),
(6, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-04-03', 0),
(7, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-04-03', 0),
(8, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-05-08', 0),
(9, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-05-08', 0),
(10, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-05-08', 0),
(11, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2021-07-01', 0),
(12, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2021-09-03', 0),
(13, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-09-03', 0),
(14, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-09-03', 0),
(15, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2021-09-03', 0),
(16, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2021-09-25', 0),
(17, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2021-09-25', 0),
(18, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-10-18', 0),
(19, '1234-5678-1234', 'kims@gmail.com', 'Positive', '2021-10-26', 0),
(20, '1234-5678-1234', 'kims@gmail.com', 'pending', '2021-10-26', 0),
(21, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2021-11-13', 0),
(22, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2021-11-13', 0),
(23, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-01-05', 0),
(24, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-01-05', 0),
(25, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2022-01-05', 0),
(26, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-03-03', 0),
(27, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-03-03', 0),
(28, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-03-07', 0),
(29, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-03-07', 0),
(30, '0965-5678-1346', 'kims@gmail.com', 'Positive', '2022-03-08', 0),
(31, '0965-5678-1346', 'kims@gmail.com', 'pending', '2022-03-08', 0),
(32, '2134-8798-7895', 'kims@gmail.com', 'Positive', '2022-03-09', 0),
(33, '2134-8798-7895', 'kims@gmail.com', 'pending', '2022-03-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `en` time NOT NULL,
  `ex` time NOT NULL,
  `dt` date NOT NULL,
  `cid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `uid`, `en`, `ex`, `dt`, `cid`, `st`) VALUES
(2, '2134-8798-7895', '10:52:55', '10:54:20', '2021-02-03', 'mot@gmail.com', 1),
(3, '0965-5678-1346', '10:53:03', '10:54:34', '2021-02-03', 'mot@gmail.com', 1),
(5, '1234-5678-1234', '10:03:54', '11:04:40', '2021-02-03', 'mot@gmail.com', 1),
(6, '1234-5678-1234', '14:48:15', '00:00:00', '2021-04-03', 'mot@gmail.com', 3),
(7, '1234-5678-1234', '14:49:02', '14:49:43', '2021-04-03', 'mot@gmail.com', 1),
(8, '1234-5678-1234', '11:46:24', '11:47:37', '2021-05-08', 'mot@gmail.com', 1),
(9, '0965-5678-1346', '11:46:37', '11:47:12', '2021-05-08', 'mot@gmail.com', 1),
(10, '2134-8798-7895', '11:46:52', '11:47:29', '2021-05-08', 'mot@gmail.com', 1),
(11, '1234-5678-1234', '11:52:17', '00:00:00', '2021-05-08', 'mot@gmail.com', 3),
(12, '2134-8798-7895', '15:29:10', '15:30:36', '2021-07-01', 'mot@gmail.com', 1),
(13, '1234-5678-1234', '15:29:22', '15:30:29', '2021-07-01', 'mot@gmail.com', 1),
(14, '0965-5678-1346', '15:29:31', '15:30:15', '2021-07-01', 'mot@gmail.com', 1),
(15, '1234-5678-1234', '21:06:05', '21:07:09', '2021-09-03', 'mot@gmail.com', 1),
(16, '2134-8798-7895', '21:06:21', '21:06:52', '2021-09-03', 'mot@gmail.com', 1),
(17, '0965-5678-1346', '21:06:29', '21:07:01', '2021-09-03', 'mot@gmail.com', 1),
(18, '1234-5678-1234', '21:13:44', '00:00:00', '2021-09-03', 'mot@gmail.com', 3),
(19, '0965-5678-1346', '12:26:12', '12:27:50', '2021-09-25', 'mot@gmail.com', 1),
(20, '1234-5678-1234', '12:26:25', '12:27:36', '2021-09-25', 'mot@gmail.com', 1),
(21, '2134-8798-7895', '12:26:37', '12:27:11', '2021-09-25', 'mot@gmail.com', 1),
(22, '0965-5678-1346', '12:32:37', '00:00:00', '2021-09-25', 'mot@gmail.com', 3),
(23, '1234-5678-1234', '11:12:36', '11:15:23', '2021-10-26', 'mot@gmail.com', 1),
(24, '2134-8798-7895', '11:12:50', '11:13:24', '2021-10-26', 'mot@gmail.com', 1),
(25, '0965-5678-1346', '11:12:57', '11:15:11', '2021-10-26', 'mot@gmail.com', 1),
(26, '1234-5678-1234', '11:20:43', '00:00:00', '2021-10-26', 'mot@gmail.com', 3),
(27, '2134-8798-7895', '11:41:58', '11:43:19', '2021-11-13', 'mot@gmail.com', 1),
(28, '0965-5678-1346', '11:42:12', '11:42:59', '2021-11-13', 'mot@gmail.com', 1),
(29, '1234-5678-1234', '11:42:22', '11:42:37', '2021-11-13', 'mot@gmail.com', 1),
(30, '2134-8798-7895', '11:49:53', '00:00:00', '2021-11-13', 'mot@gmail.com', 3),
(31, '0965-5678-1346', '11:00:06', '11:01:10', '2022-01-05', 'mot@gmail.com', 1),
(32, '2134-8798-7895', '11:00:15', '11:01:01', '2022-01-05', 'mot@gmail.com', 1),
(33, '1234-5678-1234', '11:00:26', '11:00:50', '2022-01-05', 'mot@gmail.com', 1),
(34, '0965-5678-1346', '11:04:40', '00:00:00', '2022-01-05', 'mot@gmail.com', 3),
(35, '0965-5678-1346', '19:28:49', '19:29:33', '2022-03-03', 'mot@gmail.com', 1),
(36, '1234-5678-1234', '19:28:59', '19:29:26', '2022-03-03', 'mot@gmail.com', 1),
(37, '2134-8798-7895', '19:29:06', '19:29:18', '2022-03-03', 'mot@gmail.com', 1),
(38, '0965-5678-1346', '19:38:24', '00:00:00', '2022-03-03', 'mot@gmail.com', 3),
(39, '0965-5678-1346', '21:02:47', '21:03:42', '2022-03-07', 'mot@gmail.com', 1),
(40, '2134-8798-7895', '21:02:56', '21:03:33', '2022-03-07', 'mot@gmail.com', 1),
(41, '1234-5678-1234', '21:03:03', '21:03:18', '2022-03-07', 'mot@gmail.com', 1),
(42, '0965-5678-1346', '21:05:51', '00:00:00', '2022-03-07', 'mot@gmail.com', 3),
(43, '0965-5678-1346', '11:31:43', '11:32:36', '2022-03-08', 'mot@gmail.com', 1),
(44, '1234-5678-1234', '11:31:54', '11:32:27', '2022-03-08', 'mot@gmail.com', 1),
(45, '2134-8798-7895', '11:32:01', '11:32:17', '2022-03-08', 'mot@gmail.com', 1),
(46, '0965-5678-1346', '11:35:18', '00:00:00', '2022-03-08', 'mot@gmail.com', 3),
(47, '2134-8798-7895', '14:00:01', '14:00:54', '2022-03-09', 'mot@gmail.com', 1),
(48, '1234-5678-1234', '14:00:12', '14:00:44', '2022-03-09', 'mot@gmail.com', 1),
(49, '0965-5678-1346', '14:00:21', '14:00:35', '2022-03-09', 'mot@gmail.com', 1),
(50, '2134-8798-7895', '14:04:09', '00:00:00', '2022-03-09', 'mot@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hdep`
--

CREATE TABLE IF NOT EXISTS `hdep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnme` varchar(50) NOT NULL,
  `con` varchar(15) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hdep`
--

INSERT INTO `hdep` (`id`, `cnme`, `con`, `uid`, `st`) VALUES
(1, 'Radhakrishnan. R', '8281437915', 'hdep', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hos_reg`
--

CREATE TABLE IF NOT EXISTS `hos_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `mc` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hos_reg`
--

INSERT INTO `hos_reg` (`id`, `nme`, `mc`, `addr`, `cont`, `em`, `pas`, `ph`, `st`) VALUES
(2, 'Kims Hospital', 'Ajay Raj', 'Vinod Nagar Rd, Anayara, Thiruvananthapuram', '7894567895', 'kims@gmail.com', '123', '129882.jpg', 1),
(3, 'Sree Gokulam Hospital', 'Nithin Ravi', 'Venjaramoodu, Thiruvananthapuram', '7895464568', 'sree@gmail.com', '123', '515585.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `h_tips`
--

CREATE TABLE IF NOT EXISTS `h_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `mtype` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `h_tips`
--

INSERT INTO `h_tips` (`id`, `title`, `msg`, `mtype`, `dt`) VALUES
(1, 'Keep up fruit and vegetable intake', 'Purchasing, storing and cooking fresh vegetables can be challenging in a lockdown, especially when parents are advised to limit trips outside of the home. But wherever possible, its important to ensure children are still getting plenty of fruit and vegetables in their diet.\r\nWhenever it is possible to get hold of fresh produce, do so. As well as being eaten fresh, fruits and vegetables can be frozen where possible and will retain most of their nutrients and flavor. Using fresh vegetables to cook large batches of soups, stews or other dishes will make them last longer and provide meal options for a few days. These can also be frozen where possible and then quickly reheated.', 'Tips', '2022-03-22'),
(2, 'Build up a stock of healthy snacks', 'Children often need to eat a snack or two during the day to keep them going. Rather than giving kids sweets or salty snacks, opt for healthier options like nuts, cheese, yoghurt (preferably unsweetened), chopped or dried fruits, boiled eggs, or other locally available healthy options. These foods are nutritious, more filling, and help build healthy eating habits that last a lifetime. ', 'Tips', '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `gen` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `addr` text NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `covid` varchar(150) NOT NULL,
  `blood` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `nme`, `gen`, `dob`, `addr`, `la`, `lo`, `cont`, `em`, `uid`, `pass`, `ph`, `covid`, `blood`, `st`) VALUES
(3, 'Manu Krishn', 'Male', '1991-02-16', 'House No C31,Mannanthala, Thiruvananthapuram, Kerala, India pincode-695024', 8.49057, 76.9534, '7985463129', 'ma@gmail.com', '1234-5678-1234', '123', '422311.jpg', 'Negative', 'A+', 0),
(4, 'Jisha Kumar', 'Female', '1991-05-12', 'House No A44,Pulimoodu, Thiruvananthapuram, Kerala, India pincode-695024', 8.49823, 76.9484, '9874568795', 'jisha@gmail.co', '0965-5678-1346', '123', '543353.jpg', 'Negative', 'B-', 0),
(5, 'Arya Ravi', 'Female', '1994-02-09', 'House no C33,Nalanchira Junction, Thiruvananthapuram, Kerala pincode-695024', 8.54641, 76.9444, '7896454568', 'ar@gmail.com', '2134-8798-7895', '123', '485070.jpg', 'Negative', 'AB+', 0),
(8, 'Ravi Raj', 'Male', '1992-07-16', 'Nalanchira TVM pincode-695015', 8.48654, 76.947, '7894651325', 'pk@gmail.com', '789456123546', 'Admin@123', '427172.jpg', 'Negative', 'A+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utyp` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `uid`, `pwd`, `utyp`, `st`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(6, 'kims@gmail.com', '123', 'hos', 1),
(7, 'sree@gmail.com', '123', 'hos', 1),
(8, 'mot@gmail.com', '123', 'client', 1),
(9, 'central@gmail.com', '123', 'client', 1),
(12, '1234-5678-1234', '123', 'usr', 1),
(13, '0965-5678-1346', '123', 'usr', 1),
(14, '2134-8798-7895', '123', 'usr', 1),
(17, '789456123546', 'Admin@123', 'usr', 1),
(18, 'amb101', 'amb101', 'amb', 1),
(19, 'hdep', 'hdep123', 'hdep', 1);

-- --------------------------------------------------------

--
-- Table structure for table `war`
--

CREATE TABLE IF NOT EXISTS `war` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_eid` varchar(150) NOT NULL,
  `u_eid` int(11) NOT NULL,
  `pid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `war`
--

INSERT INTO `war` (`id`, `p_eid`, `u_eid`, `pid`, `uid`, `st`) VALUES
(1, '5', 2, '1234-5678-1234', '2134-8798-7895', 0),
(2, '5', 3, '1234-5678-1234', '0965-5678-1346', 0),
(3, '8', 9, '1234-5678-1234', '0965-5678-1346', 0),
(4, '8', 10, '1234-5678-1234', '2134-8798-7895', 0),
(5, '12', 13, '2134-8798-7895', '1234-5678-1234', 0),
(6, '12', 14, '2134-8798-7895', '0965-5678-1346', 0),
(7, '15', 16, '1234-5678-1234', '2134-8798-7895', 0),
(8, '15', 17, '1234-5678-1234', '0965-5678-1346', 0),
(9, '19', 20, '0965-5678-1346', '1234-5678-1234', 0),
(10, '19', 21, '0965-5678-1346', '2134-8798-7895', 0),
(11, '23', 24, '1234-5678-1234', '2134-8798-7895', 0),
(12, '23', 25, '1234-5678-1234', '0965-5678-1346', 0),
(13, '27', 28, '2134-8798-7895', '0965-5678-1346', 0),
(14, '27', 29, '2134-8798-7895', '1234-5678-1234', 0),
(15, '31', 32, '0965-5678-1346', '2134-8798-7895', 0),
(16, '31', 33, '0965-5678-1346', '1234-5678-1234', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
