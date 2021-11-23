-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 05:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery2021`
--
CREATE DATABASE IF NOT EXISTS `artgallery2021` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `artgallery2021`;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistID` int(11) NOT NULL,
  `fName` char(255) NOT NULL,
  `lName` char(255) NOT NULL,
  `birthplace` char(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistID`, `fName`, `lName`, `birthplace`, `email`) VALUES
(1, 'Cody', 'Filler', 'NYC, USA', 'cfiller@gmail.com'),
(2, 'Armin', 'Forster', 'California, USA', 'aforster@gmail.com'),
(3, 'Karen', 'Warfel', 'Texas, USA', 'kwarfel@gmail.com'),
(4, 'Engin', 'Akyurt', 'Istanbul, Turkey', 'eakyurt@gmail.com'),
(5, 'Ben', 'Kerckx', 'Ohio, USA', 'bkerckx@gmail.com'),
(6, 'Julia', 'Smith', 'Wisconsin, USA', 'jsmith@gmail.com'),
(7, 'Hannah', 'Otis', 'Wisconsin, USA', 'hotis@gmail.com'),
(8, 'Chad', 'Kengisn', 'Neveda, USA', 'ckengisn@gmail.com'),
(10, 'Test', 'Artist', 'Argentina', 'a@gmail.com'),
(11, 'Daniel', 'Yee', 'Shanghai, China', 'dyee@gmail.com'),
(13, 'Duy', 'Phan', 'Ha Noi, Viet Nam', 'dphan@gmail.com'),
(14, 'Anna', 'Tempert', 'Sun Prairie, WI', 'atempert@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `titleID` int(11) NOT NULL,
  `title` char(255) NOT NULL,
  `artistID` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `medium` char(255) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`titleID`, `title`, `artistID`, `url`, `medium`, `price`, `year`) VALUES
(1, 'Architecture at Night', 1, 'images/architecture.jpg', 'photography', '100', 2021),
(2, 'Australian Shepard Napping', 2, 'images/ausShepard.jpg', 'photography', '150', 2021),
(3, 'Puppy Dog on Pier', 3, 'images/babyDog.jpg', 'photography', '150', 2021),
(4, 'Bike Mural in City', 4, 'images/bikeMural.jpg', 'mural', '500', 2018),
(5, 'Portrait of Cat with Green Eyes', 5, 'images/brownCat.jpg', 'photography', '150', 2018),
(6, 'Cat and Dog Cuddling', 6, 'images/catAndDog.jpg', 'photography', '200', 2019),
(7, 'Chicago Snow and Sun', 7, 'images/chiBW.jpg', 'photography', '200', 2014),
(8, 'Hong Kong Evening', 8, 'images/cloudCity.jpg', 'photography', '500', 2020),
(9, 'City at Dawn Unknown', 8, 'images/dawnCity.jpg', 'photography', '500', 2021),
(11, 'Digital Desert', 11, 'images/digArt2.jpg', 'digital art', '250', 2020),
(12, 'Cyber Portrait', 10, 'images/digArt3.jpg', 'digital art', '200', 2019),
(13, 'A Hole in Digital Desert', 11, 'images/digArt4.jpg', 'digital art', '200', 2021),
(14, 'Fairy Tale Digital Story', 11, 'images/digArt5.jpg', 'digital art', '250', 2021),
(15, 'Happy Dog Portrait', 5, 'images/happyDog.jpg', 'photography', '500', 2019),
(16, 'Japanese Streets at Night', 1, 'images/japan.jpg', 'photography', '500', 2018),
(17, 'Kuala Lumpur at Night', 1, 'images/kualaLumpur.jpg', 'photography', '500', 2020),
(18, 'Woman with Butterflys', 13, 'images/maskedWoman.jpg', 'photography', '300', 2019),
(19, 'Milwaukee Wisconsin Art', 7, 'images/MilArt.jpg', 'photography', '150', 2014),
(20, 'Milwaukee Contemporary Art Museum', 7, 'images/MilCA.jpg', 'photography', '100', 2014),
(21, 'Milwaukee Contemporary Art Museum Hall', 7, 'images/MilHall.jpg', 'photography', '150', 2014),
(22, 'Milwaukee City View of Contemporary Art Museum', 7, 'images/MilMu.jpg', 'photography', '100', 2015),
(23, 'Black and White NYC Birdseye View', 14, 'images/NYCbw.jpg', 'photography', '500', 2019),
(24, 'Japanese Streets 2 at Night', 1, 'images/pathJapan.jpg', 'photography', '200', 2019),
(25, 'Seattle Night on Lake', 1, 'images/seattle.jpg', 'photography', '200', 2019),
(26, 'Tianjin at Sunset', 1, 'images/tianjin.jpg', 'photography', '300', 2018),
(27, 'Rocket Launch 2021', 2, 'images/rocketLaunch.jpg', 'photography', '2500', 2021),
(28, 'Blue Starry Night', 8, 'images/blueStars.jpg', 'photograph', '1300', 2020),
(29, 'Solar System Graphic', 1, 'images/solarSystem.jpg', 'digital art', '100', 2002),
(30, 'Orange Colored Nova', 10, 'images/orangeGalaxy.jpg', 'photograph', '5000', 2020),
(31, 'Planetary Glow', 8, 'images/planetary.jpg', 'photograph', '500', 2006),
(32, 'Interplanetary Views', 6, 'images/galaxyPurple.jpg', 'photograph', '1200', 2009),
(33, 'Hong Kong Streets in the City', 4, 'images/hongKongStreet.jpg', 'photograph', '590', 2021),
(34, 'The Quest - Blue', 5, 'images/acrylicPainting.jpg', 'painting', '1200', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `artworksubject`
--

CREATE TABLE `artworksubject` (
  `titleID` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artworksubject`
--

INSERT INTO `artworksubject` (`titleID`, `subject`) VALUES
(1, 'architecture'),
(1, 'city'),
(1, 'color'),
(1, 'night'),
(2, 'color'),
(2, 'dog'),
(2, 'portrait'),
(3, 'color'),
(3, 'dog'),
(3, 'portrait'),
(4, 'city'),
(4, 'color'),
(4, 'mural'),
(5, 'cat'),
(5, 'color'),
(5, 'portrait'),
(6, 'cat'),
(6, 'color'),
(6, 'dog'),
(6, 'nature'),
(7, 'architecture'),
(7, 'black and white'),
(7, 'Chicago'),
(7, 'city'),
(7, 'nature'),
(8, 'city'),
(8, 'color'),
(8, 'night'),
(9, 'city'),
(9, 'color'),
(9, 'night'),
(11, 'color'),
(11, 'digital art'),
(11, 'nature'),
(11, 'night'),
(12, 'color'),
(12, 'digital art'),
(12, 'neon'),
(13, 'color'),
(13, 'digital art'),
(13, 'nature'),
(14, 'black and white'),
(14, 'digital art'),
(14, 'space'),
(15, 'color'),
(15, 'dog'),
(15, 'portrait'),
(16, 'city'),
(16, 'color'),
(16, 'Japan'),
(16, 'night'),
(17, 'city'),
(17, 'color'),
(17, 'night'),
(18, 'color'),
(18, 'portrait'),
(18, 'woman'),
(19, 'city'),
(19, 'color'),
(19, 'Milwaukee'),
(19, 'sculpture'),
(20, 'color'),
(20, 'lake'),
(20, 'Milwaukee'),
(21, 'abstract'),
(21, 'black and white'),
(21, 'Milwaukee'),
(22, 'city'),
(22, 'color'),
(22, 'Milwaukee'),
(22, 'sculpture'),
(23, 'black and white'),
(23, 'city'),
(23, 'New York City'),
(23, 'nyc'),
(24, 'city'),
(24, 'color'),
(24, 'Japan'),
(24, 'night'),
(25, 'city'),
(25, 'color'),
(25, 'night'),
(25, 'Seattle'),
(27, 'night'),
(27, 'space'),
(28, 'night'),
(28, 'space'),
(28, 'stars'),
(29, 'digital'),
(29, 'solar system'),
(29, 'space'),
(30, 'night'),
(30, 'space'),
(30, 'stars'),
(31, 'digital'),
(31, 'night'),
(31, 'space'),
(32, 'space'),
(32, 'stars'),
(33, 'city'),
(33, 'night'),
(34, 'color'),
(34, 'night'),
(34, 'space'),
(34, 'stars');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `fName` char(255) NOT NULL,
  `lName` char(255) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `title` char(255) NOT NULL,
  `customerMessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `name`, `password`) VALUES
(1, 'testuser@gmail.com', 'Test', 'Password123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`titleID`),
  ADD KEY `artistID` (`artistID`);

--
-- Indexes for table `artworksubject`
--
ALTER TABLE `artworksubject`
  ADD PRIMARY KEY (`titleID`,`subject`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artistID` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`);

--
-- Constraints for table `artworksubject`
--
ALTER TABLE `artworksubject`
  ADD CONSTRAINT `titleID` FOREIGN KEY (`titleID`) REFERENCES `artwork` (`titleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
