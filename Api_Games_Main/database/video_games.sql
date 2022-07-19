-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 03:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `game_id` int(11) NOT NULL,
  `game` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `gendre` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`game_id`, `game`, `year`, `gendre`, `publisher`) VALUES
(1, 'Grand Theft Auto V', '2014', 'Action', 'Rockstar Games'),
(2, 'Call of Duty: Black Ops 3', '2015', 'Shooter', 'Activision'),
(3, 'Red Dead Redemption 2', '2018', 'Action-Adventure', 'Rockstar Games\r\n'),
(4, 'Call of Duty: WWII', '2017', 'Shooter', 'Activision'),
(5, 'FIFA 18', '2017', 'Sports', 'EA Sports'),
(6, 'FIFA 17', '2016', 'Sports', 'Electronic Arts'),
(7, 'Uncharted (PS4)', '2016', 'Action', 'Sony Interactive Entertainment'),
(8, 'Spider-Man (PS4)', '2018', 'Action-Adventure', 'Sony Interactive Entertainment'),
(9, 'Call of Duty: Infinite Warfare', '2016', 'Shooter', 'Activision'),
(10, 'Fallout 4', '2015', 'Role-Playing', 'Bethesda Softworks\r\n'),
(11, 'FIFA 16', '2015', 'Sports', 'EA Sports'),
(12, 'Star Wars Battlefront 2015', '2015', 'Shooter', 'Electronic Arts'),
(13, 'Call of Duty: Advanced Warfare', '2014', 'Shooter', 'Activision'),
(14, 'Battlefield 1', '2016', 'Shooter', 'Electronic Arts'),
(15, 'The Last of Us', '2014', 'Action-Adventure', 'Sony Computer Entertainment'),
(16, 'MineCraft', '2014', 'Misc', 'Sony Computer Entertainment'),
(17, 'FIFA 15', '2014', 'Sports', 'EA Sports'),
(18, 'God of War (PS4)', '2018', 'Action', 'Sony Interactive Entertainment'),
(19, 'Horizon: Zero Dawn', '2017', 'Action', 'Sony Interactive Entertainment'),
(20, 'Destiny', '2014', 'Shooter', 'Activision');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `key_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `key_token`) VALUES
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(6, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'e6b2ea8efd6dbff4d03902b1474fbaaf'),
(7, 'admin', 'admin1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '691bdd6fb36d213e50b7738e25868bed'),
(8, 'admin2', 'admin2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(9, 'fasya', '1234@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '6f35a3aa391fa3e961a7098dfc6e65fe'),
(10, 'fasya', 'fasya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(11, 'fasya', 'fasya1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(12, 'qwert', 'qwert@gmail.com', 'qwert', ''),
(14, 'fasya', 'fasya12@gmail.com', '3df1e77c1eb4816a79d35c3aa0d5715b', '61bbae21c132a7a2f01be0398a37c32c'),
(15, 'qwert', 'qwert1@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a', '4ccbe5d1ee6b1cf0486267578e1f5646'),
(16, 'zxcvb', 'zxcvb@gmail.com', 'eb89f40da6a539dd1b1776e522459763', '7818c65997c3501cd8ea4757ac0c9511'),
(17, 'asdf', 'asdf@gmail.com', '912ec803b2ce49e4a541068d495ab570', ''),
(18, 'vbnm', 'vbnm@gmail.com', '8d6eb42e041cfde5519ccc4a285d5c25', ''),
(19, '67890', '67890@gmail.com', '1e01ba3e07ac48cbdab2d3284d1dd0fa', '1daf0d174b181230fb6fd19f6b877f92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
