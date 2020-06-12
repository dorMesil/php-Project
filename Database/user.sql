-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: פברואר 23, 2020 בזמן 12:39 PM
-- גרסת שרת: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `name` char(20) NOT NULL,
  `mail` char(254) NOT NULL,
  `BOD` date DEFAULT NULL,
  `family_status` char(10) DEFAULT NULL,
  `city` char(20) DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `last_name` char(20) DEFAULT NULL,
  `password` char(50) NOT NULL,
  `partner` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `BOD`, `family_status`, `city`, `address`, `last_name`, `password`, `partner`) VALUES
(22, 'dor', 'dor@mail.com', '1990-10-10', 'single', 'kfar yona', 'zheelon', 'mesilati', '81dc9bdb52d04dc20036dbd8313ed055', 'friends');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
