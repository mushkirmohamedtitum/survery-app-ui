-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2024 at 09:54 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capi_survey_egi`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_a`
--

DROP TABLE IF EXISTS `section_a`;
CREATE TABLE IF NOT EXISTS `section_a` (
`id` int NOT NULL,
`interviewer_id` varchar(10) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
`serial_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`status` int NOT NULL DEFAULT '0',
`language` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT 'Sri Lanka',
`a4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`_9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a9` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a10` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a11` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`a13_a` int NOT NULL,
`a13` int DEFAULT NULL,
`a14` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`a15` int DEFAULT NULL,
`a16` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b` int NOT NULL,
`b_a` int DEFAULT NULL,
`b_a_others` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`date_created` datetime DEFAULT NULL,
`date_ended` datetime DEFAULT NULL,
  UNIQUE KEY `serial_no` (`serial_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


--
-- Table structure for table `section_b`
--

DROP TABLE IF EXISTS `section_b`;
CREATE TABLE IF NOT EXISTS `section_b` (
`id` int NOT NULL,
`interviewer_id` varchar(10) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
`serial_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
-- `status` int NOT NULL DEFAULT '0',
-- `language` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
`b1_1` tinyInt DEFAULT NULL,
`b1_1_a` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_2` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_3` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_4` tinyInt DEFAULT NULL,
`b1_4_a` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_5` tinyInt DEFAULT NULL,
`b1_6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_10` tinyInt DEFAULT NULL,
`b1_11` tinyInt DEFAULT NULL,
`b1_12` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_13` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_14` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_15` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_16` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_17` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b1_18` tinyInt DEFAULT NULL,
`b1_19` tinyInt DEFAULT NULL,
`b1_20` tinyInt DEFAULT NULL,
`b1_21` tinyInt DEFAULT NULL,
`b1_22` tinyInt DEFAULT NULL,
`b1_23` tinyInt DEFAULT NULL,
`b1_24` tinyInt DEFAULT NULL,
`b1_25` tinyInt DEFAULT NULL,

-- Section B2
`b2_1` tinyInt DEFAULT NULL,
`b2_1_a` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_2` tinyInt DEFAULT NULL,
`b2_3` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_4` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_5` tinyInt DEFAULT NULL,
`b2_5_a` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_6` tinyInt DEFAULT NULL,
`b2_7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_10` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_11` tinyInt DEFAULT NULL,
`b2_12` tinyInt DEFAULT NULL,
`b2_13` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_14` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_15` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_16` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_17` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_18` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b2_19` tinyInt DEFAULT NULL,
`b2_20` tinyInt DEFAULT NULL,
`b2_21` tinyInt DEFAULT NULL,
`b2_22` tinyInt DEFAULT NULL,
`b2_23` tinyInt DEFAULT NULL,
`b2_24` tinyInt DEFAULT NULL,
`b2_25` tinyInt DEFAULT NULL,
`b2_26` tinyInt DEFAULT NULL,

-- Section B3
`b3_a` tinyInt DEFAULT NULL,
`b3_a_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_b` tinyInt DEFAULT NULL,
`b3_b_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_c` tinyInt DEFAULT NULL,
`b3_c_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_d` tinyInt DEFAULT NULL,
`b3_d_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_e` tinyInt DEFAULT NULL,
`b3_e_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_f` tinyInt DEFAULT NULL,
`b3_f_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_g` tinyInt DEFAULT NULL,
`b3_g_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_h` tinyInt DEFAULT NULL,
`b3_h_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_i` tinyInt DEFAULT NULL,
`b3_i_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_j` tinyInt DEFAULT NULL,
`b3_j_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_k` tinyInt DEFAULT NULL,
`b3_k_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_l` tinyInt DEFAULT NULL,
`b3_l_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_m` tinyInt DEFAULT NULL,
`b3_m_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
`b3_n` tinyInt DEFAULT NULL,
`b3_n_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,

-- Section B4
`b4_1_a` tinyInt DEFAULT NULL,
`b4_1_b` tinyInt DEFAULT NULL,
`b4_1_c` tinyInt DEFAULT NULL,
`b4_1_d` tinyInt DEFAULT NULL,
`b4_1_e` tinyInt DEFAULT NULL,
`b4_1_f` tinyInt DEFAULT NULL,
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
-- `b4_`
`date_created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
  `role_id` int DEFAULT NULL,
  `attempt` int DEFAULT NULL,
  `status` varchar(10) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
  `vcode` int DEFAULT NULL,
  `user_name` varchar(30) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
  `email` varchar(50) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `role_id`, `attempt`, `status`, `vcode`, `user_name`, `email`) VALUES
(1, 'pass1', 1, 0, 'active', 0, 'user1', 'test@mail.com'),
(2, 'pass2', 1, 0, 'blocked', 0, 'user2', 'user2@mail.com'),
(3, 'pass3', 1, 0, 'blocked', 0, 'user3', 'user3@mail.com'),
(4, 'pass4', 1, 0, 'blocked', 0, 'user4', 'user4@mail.com'),
(5, 'pass5', 1, 0, 'blocked', 0, 'user5', 'user5@mail.com'),
(6, 'pass6', 1, 0, 'blocked', 0, 'user6', 'user6@mail.com'),
(7, 'pass7', 1, 0, 'blocked', 0, 'user7', 'user7@mail.com'),
(8, 'pass8', 1, 0, 'blocked', 0, 'user8', 'user8@mail.com'),
(9, 'pass9', 1, 0, 'blocked', 0, 'user9', 'user9@mail.com'),
(10, 'pass10', 1, 0, 'blocked', 0, 'user10', 'user10@mail.com'),
(11, 'pass11', 1, 0, 'blocked', 0, 'user11', 'user11@mail.com'),
(12, 'pass12', 1, 0, 'blocked', 0, 'user12', 'user12@mail.com'),
(13, 'pass13', 1, 0, 'blocked', 0, 'user13', 'user13@mail.com'),
(14, 'pass14', 1, 0, 'blocked', 0, 'user14', 'user14@mail.com'),
(15, 'pass15', 1, 0, 'blocked', 0, 'user15', 'user15@mail.com'),
(16, 'pass16', 1, 0, 'blocked', 0, 'user16', 'user16@mail.com'),
(17, 'pass17', 1, 0, 'blocked', 0, 'user17', 'user17@mail.com'),
(18, 'pass18', 1, 0, 'blocked', 0, 'user18', 'user18@mail.com'),
(19, 'pass19', 1, 0, 'blocked', 0, 'user19', 'user19@mail.com'),
(20, 'pass20', 1, 0, 'blocked', 0, 'user20', 'user20@mail.com'),
(21, 'pass21', 1, 0, 'blocked', 0, 'user21', 'user21@mail.com'),
(22, 'pass22', 1, 0, 'blocked', 0, 'user22', 'user22@mail.com'),
(23, 'pass23', 1, 0, 'blocked', 0, 'user23', 'user23@mail.com'),
(24, 'pass24', 1, 0, 'blocked', 0, 'user24', 'user24@mail.com'),
(25, 'pass25', 1, 0, 'blocked', 0, 'user25', 'user25@mail.com'),
(26, 'pass26', 1, 0, 'blocked', 0, 'user26', 'user26@mail.com'),
(27, 'pass27', 1, 0, 'blocked', 0, 'user27', 'user27@mail.com'),
(28, 'pass28', 1, 0, 'blocked', 0, 'user28', 'user28@mail.com'),
(29, 'pass29', 1, 0, 'blocked', 0, 'user29', 'user29@mail.com'),
(30, 'pass30', 1, 0, 'blocked', 0, 'user30', 'user30@mail.com'),
(31, 'pass31', 1, 0, 'blocked', 0, 'user31', 'user31@mail.com'),
(32, 'pass32', 1, 0, 'blocked', 0, 'user32', 'user32@mail.com'),
(33, 'pass33', 1, 0, 'blocked', 0, 'user33', 'user33@mail.com'),
(34, 'pass34', 1, 0, 'blocked', 0, 'user34', 'user34@mail.com'),
(35, 'pass35', 1, 0, 'blocked', 0, 'user35', 'user35@mail.com'),
(36, 'admin@123', 1, 0, 'blocked', 0, 'admin', 'admin@mail.com'),
(37, 'titum001', 1, 0, 'blocked', 0, 'titum1', 'titum1@mail.com'),
(38, 'titum002', 1, 0, 'blocked', 0, 'titum2', 'titum2@mail.com'),
(39, 'titum003', 1, 0, 'blocked', 0, 'titum3', 'titum3@mail.com'),
(40, 'titum004', 1, 0, 'blocked', 0, 'titum4', 'titum4@mail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `section_b`
ADD CONSTRAINT `fk_sectionb_serial`
  FOREIGN KEY (`serial_no`)
  REFERENCES `section_a`(`serial_no`);

ALTER TABLE `section_b`
ADD CONSTRAINT `fk_sectionb_interviewer`
  FOREIGN KEY (`interviewer_id`)
  REFERENCES `section_a`(`interviewer_id`);
