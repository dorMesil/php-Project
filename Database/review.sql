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
-- מבנה טבלה עבור טבלה `review`
--

CREATE TABLE `review` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` int(8) NOT NULL,
  `review` char(254) NOT NULL,
  `name` char(20) NOT NULL,
  `user_name` char(30) DEFAULT NULL,
  `rate` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `review`
--

INSERT INTO `review` (`id`, `user_id`, `review`, `name`, `user_name`, `rate`) VALUES
(103, 12345678, 'Once again I find myself writing regarding some of the reviews made. One from Jan 2015 makes the comment of Alpe dHuezTerrible resort as he wrecked his skis here. But its not the resorts fault we had the poorest falls of snow in recent memory', 'Whistler Blackcomb S', NULL, NULL),
(106, 12345678, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Whistler Blackcomb S', NULL, NULL),
(111, 34567888, 'there is one lift not two. We skied there today. Nicely prepared pistes. If you have skins then from top of new lift follow old lift to enjoy some off-piste with the usual caution.', 'Whistler Blackcomb S', NULL, NULL),
(112, 12345678, 'I was in Haut Asco this summer (2006) and I saw that ski center has not operated for a few years. The lifts are old and pistes are damaged. But I found out a new ski resort in Corsica, name VERGIO. It is 1467 m high. There is also a small hotel. In winte', 'Whistler Blackcomb S', NULL, NULL),
(117, 34567888, 'Once again I find myself writing regarding some of the reviews made. One from Jan 2015 makes the comment of Alpe dHuezTerrible resort as he wrecked his skis here. But its not the resorts fault we had the poorest falls of snow in recent memory', 'Courchevel Courcheve', NULL, NULL),
(119, 23456788, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Courchevel Courcheve', NULL, NULL),
(121, 12345678, 'there is one lift not two. We skied there today. Nicely prepared pistes. If you have skins then from top of new lift follow old lift to enjoy some off-piste with the usual caution.', 'Courchevel Courcheve', NULL, NULL),
(130, 12345678, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Zermatt Zermatt', NULL, NULL),
(134, 23456788, 'there is one lift not two. We skied there today. Nicely prepared pistes. If you have skins then from top of new lift follow old lift to enjoy some off-piste with the usual caution.', 'Zermatt Zermatt', NULL, NULL),
(146, 23456788, 'there is one lift not two. We skied there today. Nicely prepared pistes. If you have skins then from top of new lift follow old lift to enjoy some off-piste with the usual caution.', 'Vail Mountain Resort', NULL, NULL),
(150, 34567888, 'I was in Haut Asco this summer (2006) and I saw that ski center has not operated for a few years. The lifts are old and pistes are damaged. But I found out a new ski resort in Corsica, name VERGIO. It is 1467 m high. There is also a small hotel. In winte', 'Vail Mountain Resort', NULL, NULL),
(153, 34567888, 'Once again I find myself writing regarding some of the reviews made. One from Jan 2015 makes the comment of Alpe dHuezTerrible resort as he wrecked his skis here. But its not the resorts fault we had the poorest falls of snow in recent memory', 'Aspen Snowmass', NULL, NULL),
(154, 12345678, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Aspen Snowmass', NULL, NULL),
(172, 12345678, 'I was in Haut Asco this summer (2006) and I saw that ski center has not operated for a few years. The lifts are old and pistes are damaged. But I found out a new ski resort in Corsica, name VERGIO. It is 1467 m high. There is also a small hotel. In winte', 'Val dIsere', NULL, NULL),
(173, 23456788, 'I was in Haut Asco this summer (2006) and I saw that ski center has not operated for a few years. The lifts are old and pistes are damaged. But I found out a new ski resort in Corsica, name VERGIO. It is 1467 m high. There is also a small hotel. In winte', 'Val dIsere', NULL, NULL),
(180, 34567888, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Cortina D`Ampezzo', NULL, NULL),
(181, 12345678, 'there is one lift not two. We skied there today. Nicely prepared pistes. If you have skins then from top of new lift follow old lift to enjoy some off-piste with the usual caution.', 'Cortina D`Ampezzo', NULL, NULL),
(187, 12345678, 'Once again I find myself writing regarding some of the reviews made. One from Jan 2015 makes the comment of Alpe dHuezTerrible resort as he wrecked his skis here. But its not the resorts fault we had the poorest falls of snow in recent memory', 'Telluride', NULL, NULL),
(190, 12345678, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Telluride', NULL, NULL),
(207, 34567934, 'asdsad', 'Aspen Snowmass', 'dor mesilati', 5),
(208, 34567934, 'asdasd', 'Aspen Snowmass', 'dor mesilati', 5),
(209, 0, 'This super resort is spoilt only by a grossly inadequate bus service, particularly at night. The town is built on a steep hillside so although distances arent great the gradient is. The regular bus services finish around 6.30pm so if anyone would like to', 'Aspen Snowmass', 'unknown', 4),
(210, 22, 'sdasdasdasd', 'Whistler Blackcomb S', 'dor mesilati', 5),
(211, 0, 'sdfsdhjsdg;sdaa;db;d', 'Aspen Snowmass', 'guest', 3);

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
