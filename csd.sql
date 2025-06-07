-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 يونيو 2025 الساعة 13:30
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csd`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ccdr`
--

CREATE TABLE `ccdr` (
  `id` int(11) NOT NULL,
  `nema_d` varchar(50) NOT NULL,
  `tetcher` varchar(200) NOT NULL,
  `clssroom` varchar(50) NOT NULL,
  `stege` varchar(200) NOT NULL,
  `gdr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `ccdr`
--

INSERT INTO `ccdr` (`id`, `nema_d`, `tetcher`, `clssroom`, `stege`, `gdr`) VALUES
(4, 'قران كرايم', 'احمد صالح مسعد', 'الصف الاول ا', '1', 'اساسيه'),
(6, 'كيميىاء', 'مصطفى ', 'السادس', 'اعدادي', 'اساسيه'),
(7, '', 'احمد صالح مسعد', 'الثالث ثانوي', '1', 'مقرار');

-- --------------------------------------------------------

--
-- بنية الجدول `clssas`
--

CREATE TABLE `clssas` (
  `cla_id` int(11) NOT NULL,
  `nema_cl` varchar(50) NOT NULL,
  `ssar` varchar(20) NOT NULL,
  `clssroom` varchar(50) NOT NULL,
  `stege` varchar(20) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `clssas`
--

INSERT INTO `clssas` (`cla_id`, `nema_cl`, `ssar`, `clssroom`, `stege`, `teacher`, `data`) VALUES
(2, 'الخمس ب', 'اساسيه', 'الصف الاول', 'اعدادي', 'علي يحيى احمد ', '2025-06-17 00:00:00'),
(3, 'اول الثانوي', 'مقرار', 'لصف الاوال ثانوي', '3', 'علي يحيى احمد ', '2025-05-22 00:00:00'),
(4, 'الرابع', 'اساسيه', 'لصف الرابع', '2', 'ليلى صالح احمد المسعود', '2025-05-22 00:00:00'),
(5, 'السادس', 'مقرار', 'الصف السادس', '2', 'ليلى صالح احمد المسعود', '2025-05-22 00:00:00'),
(6, 'الثالث ثانوي', 'مقرار', 'لصف   الثاني الا ثانوي', '3', 'مصطفى ', '2025-05-22 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `studint`
--

CREATE TABLE `studint` (
  `id` int(11) NOT NULL,
  `nema` varchar(50) NOT NULL,
  `st_number` varchar(50) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `gamil` varchar(200) NOT NULL,
  `phon` varchar(50) NOT NULL,
  `paren_name` varchar(40) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `studint`
--

INSERT INTO `studint` (`id`, `nema`, `st_number`, `sex`, `gamil`, `phon`, `paren_name`, `class_name`, `img`) VALUES
(10, 'ليلى عبد الخالق سعيد', '125', 'انثى', 'de44ft@ytyghff', '8565656265', '8422356566', 'اول الثانوي', 'img_68375195cbaf04.24480750.png'),
(14, 'مبرمج', '127', 'ذاكر', 'de44ft@ytyghff', '444551', '8422356566', 'الرابع', 'img_68375200579405.32356043.png'),
(15, 'admen', '1234', 'ذاكر', '20', '5484878555', '545465444', 'السادس', ''),
(16, 'مبرمج', '128', 'ذاكر', 'de44ft@ytyghff', '444551', '8422356566', 'الرابع', 'img_683d449b3f9fb2.54385137.png');

-- --------------------------------------------------------

--
-- بنية الجدول `teatchr`
--

CREATE TABLE `teatchr` (
  `id` int(11) NOT NULL,
  `nema_s` varchar(50) NOT NULL,
  `emil` varchar(40) NOT NULL,
  `phon` int(14) NOT NULL,
  `salary` int(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `spq` varchar(40) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `ega` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `teatchr`
--

INSERT INTO `teatchr` (`id`, `nema_s`, `emil`, `phon`, `salary`, `address`, `spq`, `sex`, `ega`) VALUES
(10, 'رياض الموهبي', 'dredrd2698@jyyhuy', 2147483647, 500, 'المسواح', 'طب بشري', 'ذكر', 30),
(11, 'ليلى صالح احمد المسعود', 'kuhuy@uhyu', 2147483647, 700, 'عمران', 'الغه العربيه', 'انثى', 25),
(12, 'اروى علي  احمد النجار', 'de44ft@ytyghff', 778596626, 1000, 'صنعاء', 'الغه الانجليزيه', 'انثى', 23),
(14, 'احمد صالح مسعد', 'iu8284@hhjhjh', 2147483647, 200, 'صنعاء', 'رياضيات', 'ذكر', 20);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone Number` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `Full Name`, `Name_With_Initials`, `Address`, `Gender`, `Email`, `Phone Number`, `Username`, `Password`) VALUES
(1, 'admen', 'admen', 'sn', 'oop', 'admen@emil.com', 7789222, 'aasrr', 'admen@emil.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccdr`
--
ALTER TABLE `ccdr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clssas`
--
ALTER TABLE `clssas`
  ADD PRIMARY KEY (`cla_id`);

--
-- Indexes for table `studint`
--
ALTER TABLE `studint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teatchr`
--
ALTER TABLE `teatchr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccdr`
--
ALTER TABLE `ccdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clssas`
--
ALTER TABLE `clssas`
  MODIFY `cla_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studint`
--
ALTER TABLE `studint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teatchr`
--
ALTER TABLE `teatchr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
