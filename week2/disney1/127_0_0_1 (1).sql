-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-03 06:50:53
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `disneydb`
--
CREATE DATABASE IF NOT EXISTS `disneydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `disneydb`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(4, 'test', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `disney`
--

CREATE TABLE `disney` (
  `PictureID` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `introduction` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `disney`
--

INSERT INTO `disney` (`PictureID`, `name`, `picture`, `introduction`) VALUES
(1, 'Mickey and his friends', 'pictures/1.jpg', 'Mickey Mouse is Disney\'s representative. His easygoing, optimistic, active and imaginative character is popular with audiences all over the world.'),
(2, 'Disney Princess', 'pictures/2.jpg', 'As of 2019, there are 12 Disney princesses, including snow white, sandy, Arlo, Ariel, Belle, Molly, baojiaconti, Mulan, Tiana, lepe, melida and Moana.'),
(3, 'Cars', 'pictures/3.jpg', 'The film adheres to Pixar Animation Studio\'s quality pursuit of continuous improvement and follows the same high standard as before. It is a visual feast suitable for the whole family to watch together.'),
(4, 'Sofia the First', 'pictures/4.jpg', 'Sofia the first is an animated series produced by Disney. It tells the story of an ordinary girl who slowly learns to become a real princess through a series of strange experiences.'),
(5, 'Frozen', 'pictures/5.jpg', 'On the day of children\'s day on June 1, 2015, Polish Post issued a set of two Disney stamps and a small full sheet with the theme of \"ice and snow\".'),
(6, 'Star wars', 'pictures/6.jpg', 'From the start of Star Wars 7 in 2015, Disney will release a Star Wars movie every December (except for Solo: Star Wars extras), among which the new series star wars will be released every other year.');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `disney`
--
ALTER TABLE `disney`
  ADD PRIMARY KEY (`PictureID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
