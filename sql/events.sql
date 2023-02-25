-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 12:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `first_name` char(255) NOT NULL,
  `last_name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `profile_pic` char(255) DEFAULT NULL,
  `saved_itin` varchar(1000) DEFAULT NULL,
  `prev_purch` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orlando_florida`
--

CREATE TABLE `orlando_florida` (
  `id` int(11) NOT NULL,
  `event_name` char(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `daysOpen` char(255) NOT NULL,
  `ageMin` int(11) NOT NULL,
  `isRainy` char(11) NOT NULL,
  `isFamily` char(11) NOT NULL,
  `isLocal` char(11) NOT NULL,
  `isGoodValue` char(11) NOT NULL,
  `isFoodDrink` char(11) NOT NULL,
  `isOutdoorActive` char(11) NOT NULL,
  `isLiveEvent` char(11) NOT NULL,
  `isArts` char(11) NOT NULL,
  `isThemePark` char(11) NOT NULL,
  `addNotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orlando_florida`
--

INSERT INTO `orlando_florida` (`id`, `event_name`, `images`, `address`, `url`, `meta_description`, `price`, `daysOpen`, `ageMin`, `isRainy`, `isFamily`, `isLocal`, `isGoodValue`, `isFoodDrink`, `isOutdoorActive`, `isLiveEvent`, `isArts`, `isThemePark`, `addNotes`) VALUES
(1, 'Magic Kingdom Park', '', '1180 Seven Seas Drive, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/magic-kingdom/', 'Magic Kingdom park is a theme park at Walt Disney World Resort featuring classic attractions, enchanting fireworks, musical parades and Disney Characters.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(2, 'EPCOT', '', '200 Epcot Center Dr, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/epcot/', 'Enjoy exciting attractions, themed festivals, international cuisine, live entertainment and more at EPCOT, a theme park at Walt Disney World Resort in Florida.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(3, 'Disney\'s Animal Kingdom Theme Park', '', '2901 Osceola Pkwy, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/animal-kingdom/', 'Disney\'s Animal Kingdom park is a Walt Disney World theme park with daily and nightly attractions and experiences, including Pandora – The World of Avatar.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(4, 'Disney\'s Hollywood Studios', '', '351 S Studio Dr, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/hollywood-studios/', 'Let your adventure begin! Live shows, thrill attractions and fun for little ones. The Tower of Terror, Rock \'n\' Roller Coaster, Star Wars: Rise of the Resistance and more.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(5, 'Universal Studios Florida', '', '6000 Universal Blvd, Orlando, FL 32819', 'https://www.universalorlando.com/web/en/us', 'Take your vacation to the next level by exploring Universal Studios Orlando, Universal\'s Islands of Adventures, and Universal\'s Volcano Bay water park.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(6, 'Universal\'s Island of Adventure', '', 'Universal Blvd, Orlando, FL 32819', 'https://www.universalorlando.com/web/en/us', 'Take your vacation to the next level by exploring Universal Studios Orlando, Universal\'s Islands of Adventures, and Universal\'s Volcano Bay water park.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(7, 'SeaWorld Orlando', '', '7007 Sea World Dr, Orlando, FL 32821', 'https://seaworld.com/orlando/?utm_source=google&utm_medium=organic&utm_campaign=gbp_listing', 'Looking for amusement parks in Orlando? SeaWorld Orlando offers exciting rides and roller coasters, up-close animal encounters and more.', '99.99', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(8, 'Legoland Florida', '', 'One LEGOLAND Way Winter Haven, FL 33884', 'https://www.legoland.com/florida/', 'Plan your next LEGOLAND® Florida visit and build memories that last a lifetime, featuring 2 theme parks, a water park, and 3 fully themed Resort hotels.', '84.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(9, 'Gatorland', '', '14501 S Orange Blossom Trl, Orlando, FL 32837', 'https://www.gatorland.com/', 'The self-proclaimed \'Alligator Capital of The World\', Gatorland is home to hundreds of Florida\'s original residents.', '32.99', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'Y', 'Y', 'N', 'Y', 'Y', 'N', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orlando_florida`
--
ALTER TABLE `orlando_florida`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;