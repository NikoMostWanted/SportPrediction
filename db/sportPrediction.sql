-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2016 at 11:22 pm
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportPrediction`
--

-- --------------------------------------------------------

--
-- Table structure for table `coachs`
--

CREATE TABLE `coachs` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `surname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `nameCountry` char(255) NOT NULL,
  `icon` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country-player-Helper`
--

CREATE TABLE `country-player-Helper` (
  `id` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  `id_player` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `league-team-Helper`
--

CREATE TABLE `league-team-Helper` (
  `id` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `nameLeague` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `player-team-Helper`
--

CREATE TABLE `player-team-Helper` (
  `id` int(11) NOT NULL,
  `id_player` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `surname` char(255) NOT NULL,
  `birthday` date NOT NULL,
  `id_position` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `position` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `presidents`
--

CREATE TABLE `presidents` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `surname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `games` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `missing` int(11) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nameTeam` char(255) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `icon` char(255) NOT NULL,
  `website` char(255) NOT NULL,
  `foundationYear` int(11) NOT NULL,
  `field` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameCountryIndex` (`nameCountry`);

--
-- Indexes for table `country-player-Helper`
--
ALTER TABLE `country-player-Helper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_countryIndex` (`id_country`),
  ADD KEY `id_playerIndex` (`id_player`);

--
-- Indexes for table `league-team-Helper`
--
ALTER TABLE `league-team-Helper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_leaguesIndex` (`id_league`),
  ADD KEY `id_teamIndex2` (`id_team`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameLeagueIndex` (`nameLeague`);

--
-- Indexes for table `player-team-Helper`
--
ALTER TABLE `player-team-Helper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_playerIndex` (`id_player`),
  ADD KEY `id_teamIndex` (`id_team`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_positionIndex` (`id_position`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `positionIndex` (`position`);

--
-- Indexes for table `presidents`
--
ALTER TABLE `presidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameTeamIndex` (`nameTeam`),
  ADD KEY `id_coachIndex` (`id_coach`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country-player-Helper`
--
ALTER TABLE `country-player-Helper`
  ADD CONSTRAINT `country-player-Helper_ibfk_1` FOREIGN KEY (`id_player`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `country-player-Helper_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`);

--
-- Constraints for table `league-team-Helper`
--
ALTER TABLE `league-team-Helper`
  ADD CONSTRAINT `league-team-Helper_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `league-team-Helper_ibfk_2` FOREIGN KEY (`id_league`) REFERENCES `leagues` (`id`);

--
-- Constraints for table `player-team-Helper`
--
ALTER TABLE `player-team-Helper`
  ADD CONSTRAINT `player-team-Helper_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `player-team-Helper_ibfk_2` FOREIGN KEY (`id_player`) REFERENCES `players` (`id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_2` FOREIGN KEY (`id_position`) REFERENCES `positions` (`id`);

--
-- Constraints for table `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `statistics_ibfk_1` FOREIGN KEY (`id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`id`) REFERENCES `presidents` (`id`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
