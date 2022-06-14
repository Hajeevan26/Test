-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2022 at 05:10 AM
-- Server version: 5.7.36
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsurvey`
--

DROP TABLE IF EXISTS `tblsurvey`;
CREATE TABLE IF NOT EXISTS `tblsurvey` (
  `household_id` varchar(20) NOT NULL,
  `interviewer_id` varchar(50) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `survey_end` datetime DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ds_division` varchar(50) DEFAULT NULL,
  `gn_division` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `control_sample` int(11) DEFAULT NULL,
  `treated_sample` int(11) DEFAULT NULL,
  `organic_farmers` int(11) DEFAULT NULL,
  `conventional_farmers` int(11) DEFAULT NULL,
  `hbl` int(11) DEFAULT NULL,
  `hblnot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`household_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsurvey`
--

INSERT INTO `tblsurvey` (`household_id`, `interviewer_id`, `date_created`, `survey_end`, `district`, `ds_division`, `gn_division`, `village`, `control_sample`, `treated_sample`, `organic_farmers`, `conventional_farmers`, `hbl`, `hblnot`) VALUES
('H001', '1', '2022-06-07 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('H002', '1', '2022-06-07 20:45:10', NULL, 1, 'ccxv', 'zxvzxv', 'cvcxv', 1, 1, 1, 1, 1, ''),
('H003', '1', '2022-06-07 20:49:25', NULL, 1, 'sacasf', 'adfdsf', 'cxvxcv', 1, 2, 1, 1, 2, 'cxvxcv'),
('H004', '1', '2022-06-07 20:53:02', NULL, 1, 'dsfasf', 'sdfsdf', 'dsfsd', 1, 1, 2, 1, 2, 'dsfdsf'),
('H005', '1', '2022-06-07 20:53:46', NULL, 1, 'dsfsdf', 'dsfsd', 'dsfds', 2, 1, 2, 1, 2, 'dsfdsf'),
('H006', '1', '2022-06-08 11:47:50', NULL, 1, 'zczxc', 'sdfsdf', 'xczx', 1, 1, 1, 1, 2, 'yuyu'),
('H007', '1', '2022-06-08 13:11:21', NULL, 1, 'dsfsd', 'sdfsdf', 'dsfsd', 2, 1, 2, 1, 2, 'ghfh'),
('H008', '1', '2022-06-08 13:16:52', NULL, 1, 'dsfsd', 'dfsd', 'dsfsdf', 1, 1, 2, 1, 2, 'h8'),
('H009', '1', '2022-06-08 13:18:45', NULL, 1, 'zczxc', 'dfsd', 'dsfsdf', 1, 2, 2, 1, 2, '9'),
('H010', '1', '2022-06-08 13:26:05', NULL, 1, 'dsfsd', 'dfsd', 'xczx', 1, 1, 1, 1, 2, '\';[pok'),
('H011', '1', '2022-06-09 13:13:52', NULL, 1, 'nn', 'dfsd', 'xczx', 1, 1, 1, 1, 1, ''),
('H012', '1', '2022-06-14 01:22:52', NULL, 1, '12', 'dfsd', 'xczx', 1, 1, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsurvey_question`
--

DROP TABLE IF EXISTS `tblsurvey_question`;
CREATE TABLE IF NOT EXISTS `tblsurvey_question` (
  `household_id` varchar(20) NOT NULL,
  `interviewer_id` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `ds_division` varchar(50) DEFAULT NULL,
  `gn_division` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `control_sample` varchar(50) DEFAULT NULL,
  `treated_sample` varchar(50) DEFAULT NULL,
  `organic_farmers` varchar(50) DEFAULT NULL,
  `conventional_farmers` varchar(50) DEFAULT NULL,
  `hbl` varchar(50) DEFAULT NULL,
  `hblnot` varchar(50) DEFAULT NULL,
  `1_1_2_1` varchar(50) DEFAULT NULL,
  `1_1_3_1` int(11) DEFAULT NULL,
  `1_1_4_1` int(11) DEFAULT NULL,
  `1_1_5_1` int(11) DEFAULT NULL,
  `1_1_6_1` int(11) DEFAULT NULL,
  `1_1_7_1` int(11) DEFAULT NULL,
  `1_1_8_1` int(11) DEFAULT NULL,
  `1_1_9_1` int(11) DEFAULT NULL,
  `1_1_10_1` int(11) DEFAULT NULL,
  `1_1_11_1` int(11) DEFAULT NULL,
  `1_1_12_1` decimal(20,6) DEFAULT NULL,
  `1_1_13_1` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`household_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsurvey_question`
--

INSERT INTO `tblsurvey_question` (`household_id`, `interviewer_id`, `status`, `date_created`, `date_end`, `district`, `ds_division`, `gn_division`, `village`, `control_sample`, `treated_sample`, `organic_farmers`, `conventional_farmers`, `hbl`, `hblnot`, `1_1_2_1`, `1_1_3_1`, `1_1_4_1`, `1_1_5_1`, `1_1_6_1`, `1_1_7_1`, `1_1_8_1`, `1_1_9_1`, `1_1_10_1`, `1_1_11_1`, `1_1_12_1`, `1_1_13_1`) VALUES
('H001', '0', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
('H002', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('H003', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hajee', 4, 1, 22, 3, 3, 3, 10, 3, 5, '66.000000', '45.000000'),
('H009', '1', 1, '2022-06-08 13:18:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hajee', 4, 1, 22, 1, 1, 4, 1, 5, 1, '66.000000', '45.000000'),
('H010', '1', 1, '2022-06-08 13:26:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('H011', '1', 1, '2022-06-09 13:13:52', NULL, '1', 'nn', 'dfsd', 'xczx', '1', '1', ' 1', ' 1', ' 1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('H012', '1', 0, '2022-06-14 01:22:52', NULL, '1', '12', 'dfsd', 'xczx', '1', '1', ' 1', ' 1', ' 1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `role_id` varchar(20) NOT NULL,
  `attempt` int(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `vcode` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `password`, `role_id`, `attempt`, `status`, `vcode`, `user_name`, `email`, `image`) VALUES
('1', 'passint1', 'R01', 0, 'active', 30238, 'INT1', 'int1@gmail.com', 'C001.jpg'),
('2', 'passint2', 'R01', 0, 'active', 9, 'INT2', 'admin@gmail.com', 'c001.jpg'),
('3', 'passint3', 'R01', 0, 'active', 9, 'INT3', 'admin@gmail.com', 'c001.jpg'),
('4', 'passint4', 'R01', 0, 'active', 9, 'INT4', 'admin@gmail.com', 'c001.jpg'),
('5', 'passint5', 'R01', 0, 'active', 9, 'INT5', 'admin@gmail.com', 'c001.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
