-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: פברואר 23, 2020 בזמן 12:38 PM
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
-- מבנה טבלה עבור טבלה `booking`
--

CREATE TABLE `booking` (
  `resort_name` varchar(50) NOT NULL,
  `num_adults` int(11) NOT NULL,
  `num_rooms` int(11) NOT NULL,
  `num_child` int(11) DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `booking`
--

INSERT INTO `booking` (`resort_name`, `num_adults`, `num_rooms`, `num_child`, `check_in`, `check_out`) VALUES
('Aspen Snowmass', 0, 1, NULL, '2020-10-10', '2020-10-15'),
('Vail Mountain Resort', 0, 1, NULL, '2020-04-07', '2020-06-18'),
('Val d`Isere', 2, 1, NULL, '2020-02-06', '2020-02-20'),
('Cortina D`Ampezzo', 2, 3, NULL, '2020-10-10', '2020-12-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
