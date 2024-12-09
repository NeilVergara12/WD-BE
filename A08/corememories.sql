-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 05:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, '../img/family1.jpg', 'Family photo', '#FFC0CB'),
(2, 1, '../img/family2.jpg', 'My sister\'s 18th Birthday', '#FFC0CB'),
(3, 1, '../img/family3.png', 'Beach with family', '#FFC0CB'),
(4, 2, '../img/friend1.jpg', 'STB19', '#FFD700'),
(5, 2, '../img/friend2.png', 'SM gala with friends', '#FFD700'),
(6, 2, '../img/friend3.png', 'COMSOC Seminar', '#FFD700'),
(7, 3, '../img/love1.jpg', 'Our 2nd Christmas together', '#FF69B4'),
(8, 3, '../img/love2.png', 'Our first photo booth', '#FF69B4'),
(9, 3, '../img/love3.png', 'Wicked Movie Date', '#FF69B4'),
(10, 4, '../img/adventure1.png', 'Magical Day at Enchanted Kingdom', '#1E90FF'),
(11, 4, '../img/adventure2.png', 'Calatagan beach', '#1E90FF'),
(12, 4, '../img/adventure3.png', 'Staycation in Tagaytay', '#1E90FF');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'Core memories with family.', 'A beautiful memories with my family through the years, we celebrate every occasions together.', '#FFC0CB', '../img/familyisland.png', 'active'),
(2, 'Friendship Island', 'Adventures with friends.', 'The memories of the unexpected friendship i had in college that turns out super good because i have a nice friends that we can count on every time, we also share laughter together that\'s why its precious.', '#FFD700', '../img/friendshipisland.png', 'active'),
(3, 'Love Island', 'Moments of love and affection.', 'A journey of love and shared experiences that shaped who I am. This island is special because it is built by the bond and memories of me and my partner together through the years.', '#FF69B4', '../img/loveisland.png', 'active'),
(4, 'Adventure Island', 'Exploring the world.', 'Unforgettable trips and explorations that brought joy and excitement to my life.', '#1E90FF', '../img/adventureisland.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
