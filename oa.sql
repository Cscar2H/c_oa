-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-02-05 17:57:05
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oa`
--

-- --------------------------------------------------------

--
-- 表的结构 `rating`
--

CREATE TABLE `rating` (
  `self_id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 NOT NULL,
  `work_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `situation` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `self_rating` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `rating`
--

INSERT INTO `rating` (`self_id`, `username`, `work_name`, `situation`, `self_rating`) VALUES
(14, '22', '蛤蛤蛤蛤', '蛤蛤', 100),
(13, '1', '12', '333', 333);

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE `score` (
  `sco_id` int(11) NOT NULL,
  `self_id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 NOT NULL,
  `work_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `situation` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `self_rating` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `captain` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`sco_id`, `self_id`, `username`, `work_name`, `situation`, `self_rating`, `grade`, `captain`) VALUES
(1, 0, '李四', '蛤蛤', 'ok', 1, 11, '1 '),
(9, 14, '22', '蛤蛤蛤蛤', '蛤蛤', 5555, 100, '5555');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `logintime` varchar(10) CHARACTER SET utf8 NOT NULL,
  `regtime` varchar(10) CHARACTER SET utf8 NOT NULL,
  `role` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `remark` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `logintime`, `regtime`, `role`, `remark`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', '', '1517501473', '3', '233'),
(6, '蛤蛤', '3c06ee3da73ec6862a60799bb4f77d85', '', '1517586839', '2', '臭臭臭'),
(7, '单位按身份', 'e165421110ba03099a1c0393373c5b43', '', '1517586891', '1', '666'),
(8, '发热那符文', 'c4ca4238a0b923820dcc509a6f75849b', '', '1517586913', '1', '123'),
(9, '22', 'b6d767d2f8ed5d21a44b0e5886680cb9', '', '1517586982', '1', '22'),
(10, '333', '310dcbbf4cce62f762a2aaa148d556bd', '', '1517586990', '1', '333'),
(11, '44', 'f7177163c833dff4b38fc8d2872f1ec6', '', '1517586999', '1', '44'),
(12, '0', 'cfcd208495d565ef66e7dff9f98764da', '', '1517587013', '3', 'admin'),
(13, '5555', '6074c6aa3488f3c2dddff2a7ca821aab', '', '1517587038', '2', '5555'),
(14, '11111', 'c4ca4238a0b923820dcc509a6f75849b', '', '1517587065', '2', '1111'),
(15, '阿发', 'f0357a3f154bc2ffe2bff55055457068', '', '1517587121', '1', '阿发发发发付');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`self_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`sco_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `rating`
--
ALTER TABLE `rating`
  MODIFY `self_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `score`
--
ALTER TABLE `score`
  MODIFY `sco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
