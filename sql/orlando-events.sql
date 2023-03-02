-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2023 at 11:57 PM
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
-- Database: `orlando-events`
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
  `prev_purch` varchar(1000) DEFAULT NULL,
  `timeCreated` datetime NOT NULL,
  `userIsActive` char(11) DEFAULT NULL,
  `emailIsVerified` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_pic`, `saved_itin`, `prev_purch`, `timeCreated`, `userIsActive`, `emailIsVerified`) VALUES
(1, 'my', 'name is', 'helloworld@code.dev', '$2y$10$R/qBkMp9XVcJ5WH6lebzr.0INZduqVFu6bBbgzIyZ3/YBW.Aom996', NULL, NULL, NULL, '2023-02-24 20:37:12', NULL, NULL),
(4, 'my name', 'is', 'nothelloworld@code.dev', '$2y$10$BdkfbbwcpRwCRDXvk2u/2u4gpyl60uNRKeK2l1iqrhK1lrZIOCj1m', NULL, NULL, NULL, '2023-02-24 21:26:48', NULL, NULL),
(5, 'Mykeria', 'Cooks', 'myemail@dev.co', '$2y$10$6iYoFDHIfa4WemKXMAfmsOy0ERwOHp3Gt3T.4TVg7GAr/nbkBUqH6', NULL, NULL, NULL, '2023-02-25 01:30:32', NULL, NULL),
(6, 'Nicki', 'Minaj', 'nicki@gmail.com', '$2y$10$ewLb10P/G8Ky/zNbmcojlObbKsqEKwNvhmxpQJOpCfA23TbBeQ2OC', NULL, NULL, NULL, '2023-02-25 01:33:51', NULL, NULL),
(7, 'Mya', 'Davis', 'myadavis@gmail.com', '$2y$10$ufkuTl49cdKJpaJAlmB0fuSo0gL4ZMcNwxyHzu2Cr7NsBsCw4pvRe', NULL, NULL, NULL, '2023-02-25 01:39:48', NULL, NULL),
(8, 'Mykeria', 'Cooks', 'mykeria@gmail.com', '$2y$10$GwVQd5kskMFFTCaiyfr92OHWklNgHXM.jUt5LvyFsd1L164jOBdv6', NULL, NULL, NULL, '2023-02-25 04:19:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orlando_florida`
--

CREATE TABLE `orlando_florida` (
  `id` int(11) NOT NULL,
  `event_name` char(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `alt_text_img1` char(255) NOT NULL,
  `img2` char(255) NOT NULL,
  `alt_text_img2` char(255) NOT NULL,
  `img3` char(255) NOT NULL,
  `alt_text_img3` char(255) NOT NULL,
  `img4` char(255) NOT NULL,
  `alt_text_img4` char(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `map_img` char(255) NOT NULL,
  `map_link` varchar(1000) NOT NULL,
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

INSERT INTO `orlando_florida` (`id`, `event_name`, `img1`, `alt_text_img1`, `img2`, `alt_text_img2`, `img3`, `alt_text_img3`, `img4`, `alt_text_img4`, `address`, `url`, `map_img`, `map_link`, `meta_description`, `price`, `daysOpen`, `ageMin`, `isRainy`, `isFamily`, `isLocal`, `isGoodValue`, `isFoodDrink`, `isOutdoorActive`, `isLiveEvent`, `isArts`, `isThemePark`, `addNotes`) VALUES
(1, 'Magic Kingdom Park', 'magickingdom/magickingdom1.jpg', 'Magic Kingdom Castle', 'magickingdom/magickingdom2.jpg', 'Chip and Dale waving to the crowd', 'magickingdom/magickingdom3.jpg', 'Partner\'s Statue made of copper of Walt Disney holding hands with Mickey Mouse', 'magickingdom/magickingdom4.jpg', 'Mickey Mouse and Minnie Mouse in the parade', '1180 Seven Seas Drive, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/magic-kingdom/', 'magickingdom/magickingdommap.jpg', 'https://www.google.com/maps/place/Magic+Kingdom+Park/@28.417636,-81.5830477,16.7z/data=!4m5!3m4!1s0x88dd7e536aa54b81:0x66b8bcd58da841a!8m2!3d28.418579!4d-81.5812062', '<b class=\"actInfo\">Disney\'s Magic Kingdom</b> is a theme park located at the Walt Disney World Resort in Orlando, Florida. It is one of the four theme parks within the resort, and it is the first park to be built at the complex, opening its doors in 1971. The Magic Kingdom is a fairytale-themed park, and it has become one of the most famous and recognizable theme parks in the world. The Magic Kingdom has seven themed lands, each of which is designed to transport visitors to different fairy tale and fantasy worlds:', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(2, 'EPCOT', 'epcot/epcot1.jpg', 'Sorcerer Mickey Mouse made of shrubbery standing in front of Spaceship Earth.', 'epcot/epcot2.jpg', 'Hues of blue, purple, orange, red, pink and yellow reflect on Spaceship Earth in the nightlight.', 'epcot/epcot3.jpg', 'Front view of Main Cinema Street', 'epcot/epcot4.jpg', 'Princess Belle and The Beat made of shrubbery holding hands', '200 Epcot Center Dr, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/epcot/', 'epcot/epcotmap.jpg', 'https://www.google.com/maps/place/Epcot/@28.3752424,-81.5528624,17z/data=!4m10!1m2!2m1!1sepcot!3m6!1s0x88dd7fafde6c311b:0xea245263cb7597bd!8m2!3d28.3764687!4d-81.5494034!15sCgVlcGNvdFoHIgVlcGNvdJIBCnRoZW1lX3BhcmvgAQA!16zL20vMDliM2Y', 'Enjoy exciting attractions, themed festivals, international cuisine, live entertainment and more at <b class=\"actInfo\">EPCOT</b>, a theme park at Walt Disney World Resort in Florida.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(3, 'Disney\'s Animal Kingdom Theme Park', 'animalkingdom/animalkingdom1.jpg', 'Forest and river view of \'The World of Avatar\' attraction', 'animalkingdom/animalkingdom2.jpg', 'Actor from Magic Kingdom \'The Lion King\' production pointing at the crowd', 'animalkingdom/animalkingdom3.jpg', 'Dinoland Attraction sign', 'animalkingdom/animalkingdom4.jpg', '\'The World of Avatar\' Pandora attraction', '2901 Osceola Pkwy, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/animal-kingdom/', 'animalkingdom/animalkingdommap.jpg', 'https://www.google.com/search?q=animal%20kingdom&oq=animal+kingdom&aqs=chrome.0.0i271j46i131i433i512j46i20i131i175i199i263i433i512j0i131i433i512j0i20i263i433i512j69i60l3.2751j0j9&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:1&tbm=lcl&sxsrf=AJOqlzUG5_DdoyP8Z1hT_FpcxpLM1-M26A:1677460956406&rflfq=1&num=10&rldimm=3762762187935006651&lqi=Cg5hbmltYWwga2luZ2RvbUjy9p8BWhgQABABGAAYASIOYW5pbWFsIGtpbmdkb22SAQp0aGVtZV9wYXJrmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU56ZEUxVFVXZEJSUkFCqgEiEAEaHhABIhp9y2OjLCmLDRhhR9tfLZ_ESR_0UdLmZfA3ouABAA&phdesc=R3Uvbql2zyk&ved=2ahUKEwiQk7mDxbT9AhWNmmoFHR1JBMoQvS56BAgSEAE&sa=X&rlst=f#rlfi=hd:;si:3762762187935006651,l,Cg5hbmltYWwga2luZ2RvbUjy9p8BWhgQABABGAAYASIOYW5pbWFsIGtpbmdkb22SAQp0aGVtZV9wYXJrmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU56ZEUxVFVXZEJSUkFCqgEiEAEaHhABIhp9y2OjLCmLDRhhR9tfLZ_ESR_0UdLmZfA3ouABAA,y,R3Uvbql2zyk;mv:[[28.366080099999998,-81.5871341],[28.3513737,-81.6069442]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:1', '<b class=\"actInfo\">Disney\'s Animal Kingdom</b> park is a Walt Disney World theme park with daily and nightly attractions and experiences, including Pandora – The World of Avatar.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(4, 'Disney\'s Hollywood Studios', 'hollywoodstudios/hollywoodstudios1.jpg', 'Slink Dog Dash Roller Coaster', 'hollywoodstudios/hollywoodstudios2.jpg', 'The Simpson\'s Ride \'Krustyland\'', 'hollywoodstudios/hollywoodstudios3.jpg', 'View of the \'Hollywood Tower Hotel\'', 'hollywoodstudios/hollywoodstudios4.jpg', 'A scene from the \'Waterworld\' show', '351 S Studio Dr, Lake Buena Vista, FL 32830', 'https://disneyworld.disney.go.com/destinations/hollywood-studios/', 'hollywoodstudios/hollywoodstudiosmap.jpg', 'https://www.google.com/maps/place/Disney\'s+Hollywood+Studios/@28.3580628,-81.5612862,17z/data=!3m1!4b1!4m6!3m5!1s0x88dd7c2763821e47:0xbbffcea336e3f10f!8m2!3d28.3580628!4d-81.5590975!16zL20vMDJtdjdn', 'Let your adventure begin at <b class=\"actInfo\">Disney\'s Hollywood Studios!</b> Live shows, thrill attractions and fun for little ones. The Tower of Terror, Rock \'n\' Roller Coaster, Star Wars: Rise of the Resistance and more.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(5, 'Universal Studios Florida', 'universalstudios/universal1.jpg', 'Universal Studios Globe', 'universalstudios/universal2.jpg', 'Mel\'s Drive In Diner', 'universalstudios/universal3.jpg', 'Kang and Kodos Statue from The Simpsons Ride', 'universalstudios/universal4.jpg', 'TRANSFORMERS: The Ride-3D', '6000 Universal Blvd, Orlando, FL 32819', 'https://www.universalorlando.com/web/en/us', 'universalstudios/universalmap.jpg', 'https://www.google.com/maps/place/Universal+Studios+Florida/@28.4754282,-81.4698607,17z/data=!3m1!5s0x88e77ee77a719271:0xf362a4f577d8aa2f!4m6!3m5!1s0x88e77ec39415df75:0xf985d8fc7734a5a1!8m2!3d28.4754235!4d-81.467672!16zL20vMDVxc3lx', 'Take your vacation to the next level by exploring <b class=\"actInfo\">Universal Studios Orlando</b>, Universal\'s Islands of Adventures, and Universal\'s Volcano Bay water park.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(6, 'Universal\'s Island of Adventure', 'islandofadventure/universal1.jpg', 'Universal Studios Globe', 'islandofadventure/island2.jpg', 'Hogwarts Express Train', 'islandofadventure/island3.jpg', 'Jurassic Park Entrance', 'islandofadventure/island4.jpg', 'The Amazing Adventures of Spider-Man', 'Universal Blvd, Orlando, FL 32819', 'https://www.universalorlando.com/web/en/us', 'islandofadventures/islandmap.jpg', 'https://www.google.com/maps/place/Universal\'s+Islands+of+Adventure/@28.4718467,-81.4730768,17z/data=!4m6!3m5!1s0x88e77edfac4210bd:0x1364056e556d89f3!8m2!3d28.471842!4d-81.4708881!16zL20vMDVwcHE4', 'Take your vacation to the next level by exploring Universal Studios Orlando, <b class=\"actInfo\">Universal\'s Islands of Adventures</b>, and Universal\'s Volcano Bay water park.', '109.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(7, 'SeaWorld Orlando', 'seaworld/seaworld1.jpg', 'A whale jumping out of the water', 'seaworld/seaworld2.jpg', 'A turtle in the water', 'seaworld/seaworld3.jpg', 'Family watching sea creatures swim', 'seaworld/seaworld4.jpg', 'Dolphins swimming in the tank', '7007 Sea World Dr, Orlando, FL 32821', 'https://seaworld.com/orlando/?utm_source=google&utm_medium=organic&utm_campaign=gbp_listing', 'seaworld/seaworldmap.jpg', 'https://www.google.com/maps/place/SeaWorld+Orlando/@28.409718,-81.4618994,17z/data=!4m6!3m5!1s0x88e77e288cd6237f:0x997f9e39a3d62bd5!8m2!3d28.409718!4d-81.4597107!16zL20vMGMyZGx5', 'Looking for amusement parks in Orlando? <b class=\"actInfo\">SeaWorld Orlando</b> offers exciting rides and roller coasters, up-close animal encounters and more.', '99.99', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(8, 'Legoland Florida', 'legoland/legoland1.jpg', 'Lego boats floating in the water', 'legoland/legoland2.jpg', 'Lego Yoda', 'legoland/legoland3.jpg', 'Lego Pirates playing instruments', 'legoland/legoland4.jpg', 'Fun Town Entrance Sign', 'One LEGOLAND Way Winter Haven, FL 33884', 'https://www.legoland.com/florida/', 'legoland/legolandmap.jpg', 'https://www.google.com/maps/place/LEGOLAND%C2%AE+Florida+Resort/@27.9897179,-81.6903413,18z/data=!4m6!3m5!1s0x88dd0d887ee5cadf:0xbc6c5dcfe838271a!8m2!3d27.9885659!4d-81.6910418!16s%2Fm%2F0b6d60t', 'Plan your next <b class=\"actInfo\">LEGOLAND® Florida</b> visit and build memories that last a lifetime, featuring 2 theme parks, a water park, and 3 fully themed Resort hotels.', '84.00', 'M,T,W,Th,F,Sa,Su', 0, 'N', 'Y', 'N', 'N', 'N', 'N', 'Y', 'N', 'Y', ''),
(9, 'Gatorland', 'gatorland/gatorland1.jpg', 'Two gators laying in the lake', 'gatorland/gatorland2.jpg', 'A bright red, greed, and blue colored Macaw Bird', 'gatorland/gatorland3.jpg', 'Two flamingos in the water', 'gatorland/gatorland4.jpg', 'Two Macaw Birds sitting on branches', '14501 S Orange Blossom Trl, Orlando, FL 32837', 'https://www.gatorland.com/', 'gatorland/gatorlandmap.jpg', 'https://www.google.com/maps/place/Gatorland/@28.3560699,-81.4067957,18z/data=!4m6!3m5!1s0x88dd871e1bd911f5:0xf334076b2158659d!8m2!3d28.3559542!4d-81.4040247!16zL20vMDhmd3py', 'The self-proclaimed \'Alligator Capital of The World\', <b class=\"actInfo\">Gatorland</b> is home to hundreds of Florida\'s original residents.', '32.99', 'M,T,W,Th,F,Sa,Su', 0, '', 'Y', 'Y', 'Y', 'N', 'Y', 'Y', 'N', 'Y', '');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
