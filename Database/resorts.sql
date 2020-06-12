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
-- מבנה טבלה עבור טבלה `resorts`
--

CREATE TABLE `resorts` (
  `name` char(20) NOT NULL,
  `country` char(20) DEFAULT NULL,
  `height` int(4) DEFAULT NULL,
  `blue_lines` int(2) DEFAULT NULL,
  `red_lines` int(2) DEFAULT NULL,
  `black_lines` int(2) DEFAULT NULL,
  `sessions` char(20) DEFAULT NULL,
  `hotel_price_range` char(20) DEFAULT NULL,
  `resort_pic` varchar(255) NOT NULL,
  `couple` tinyint(1) DEFAULT NULL,
  `alone` tinyint(1) DEFAULT NULL,
  `family` tinyint(1) DEFAULT NULL,
  `friends` tinyint(1) DEFAULT NULL,
  `age` char(20) DEFAULT NULL,
  `food_price_range` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `resorts`
--

INSERT INTO `resorts` (`name`, `country`, `height`, `blue_lines`, `red_lines`, `black_lines`, `sessions`, `hotel_price_range`, `resort_pic`, `couple`, `alone`, `family`, `friends`, `age`, `food_price_range`) VALUES
('Aspen Snowmass', 'Greece', 1089, 338, 255, 23, 'asd', '118', 'https://r-cf.bstatic.com/images/hotel/max1024x768/987/98726725.jpg', 1, 1, NULL, NULL, NULL, '98-294'),
('Cortina D`Ampezzo', 'israel', 1200, 372, 343, 30, 'asd', '152', 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/146000/146921-Cortina-Dampezzo-Ski-Resort.jpg', 1, 1, NULL, NULL, NULL, '132-396'),
('Courchevel Courcheve', 'Belgium', 783, 243, 122, 11, 'asd', '67', 'https://d3giqtqir6ti3x.cloudfront.net/wp-content/uploads/2014/10/01102225/esprit_courchevel_view.jpg', NULL, 1, 1, NULL, NULL, '47-141'),
('Telluride', 'frence', 1242, 385, 387, 34, 'asd', '169', 'https://www.skimag.com/.image/t_share/MTQ4MTkzNzM0OTIyNzQwOTQx/ski1016_rgw8_tellurideschreckengost.jpg', NULL, 1, 1, NULL, NULL, '149-447'),
('Vail Mountain Resort', 'Sweden', 1013, 314, 211, 19, 'asd', '101', 'https://s3-prod.adage.com/s3fs-public/styles/width_1024/public/20191101_scenicSundown_3x2.jpg', NULL, NULL, 1, 1, NULL, '81-243'),
('Val d`Isere', 'austria', 1150, 357, 299, 26, 'asd', '135', 'http://prod-upp-image-read.ft.com/eb01bde0-fbe9-11e7-9b32-d7d59aace167', 1, NULL, NULL, 1, NULL, '115-345'),
('Whistler Blackcomb S', 'italy', 600, 186, 78, 7, 'asd', '50', 'https://img6.onthesnow.com/image/xl/14/whistler_blackcomb_canada_3_140729.jpg', NULL, 1, 1, 1, NULL, '30-90'),
('Zermatt Zermatt', 'switzerland', 914, 283, 166, 15, 'asd', '84', 'https://www.matterhornparadise.ch/365%20Tage%20Schneespass/Pisten/2019-ZT-cr_PG/image-thumb__84316__hero-slide--shadow_auto_c417b894533958dcb4349c16727446b2/cr%20-%20Pascal%20Gertschen%202018%20-%20ZT_2019_Ski_Web_DSCF4685.jpeg', NULL, NULL, NULL, 1, NULL, '64-192');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `resorts`
--
ALTER TABLE `resorts`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
