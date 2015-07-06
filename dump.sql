-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- 主機: dbhome.cs.nctu.edu.tw
-- 產生時間： 2015 年 07 月 07 日 02:14
-- 伺服器版本: 5.6.24-log
-- PHP 版本： 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `ywpu_cs`
--
CREATE DATABASE IF NOT EXISTS `ywpu_cs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ywpu_cs`;

-- --------------------------------------------------------

--
-- 資料表結構 `ada2015_course`
--

CREATE TABLE IF NOT EXISTS `ada2015_course` (
`id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `2AB` varchar(50) NOT NULL,
  `2CD` varchar(50) NOT NULL,
  `3AB` varchar(50) NOT NULL,
  `4CD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `ada2015_student`
--

CREATE TABLE IF NOT EXISTS `ada2015_student` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `club` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `idnum` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `apply` varchar(50) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `idkey` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `ada2015_course`
--
ALTER TABLE `ada2015_course`
 ADD PRIMARY KEY (`id`), ADD KEY `frnky` (`sid`);

--
-- 資料表索引 `ada2015_student`
--
ALTER TABLE `ada2015_student`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `ada2015_course`
--
ALTER TABLE `ada2015_course`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `ada2015_student`
--
ALTER TABLE `ada2015_student`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `ada2015_course`
--
ALTER TABLE `ada2015_course`
ADD CONSTRAINT `frnky` FOREIGN KEY (`sid`) REFERENCES `ada2015_student` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
