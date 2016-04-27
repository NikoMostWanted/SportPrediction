-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 10:16 pm
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
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `nameLeague` char(255) NOT NULL
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
  `number` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
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
  `id_nameLeague` int(11) NOT NULL,
  `nameTeam` char(255) NOT NULL,
  `icon` char(255) NOT NULL,
  `website` char(255) NOT NULL,
  `foundationYear` int(11) NOT NULL,
  `field` char(255) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `id_president` int(11) NOT NULL,
  `id_statistic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameLeagueIndex` (`nameLeague`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_positionIndex` (`id_position`),
  ADD KEY `id_countryIndex` (`id_country`),
  ADD KEY `id_teamIndex` (`id_team`);

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
  ADD KEY `idNameLeagueIndex` (`id_nameLeague`),
  ADD KEY `idCoachIndex` (`id_coach`),
  ADD KEY `idPresidentIndex` (`id_president`),
  ADD KEY `id_statistic` (`id_statistic`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `players_ibfk_2` FOREIGN KEY (`id_position`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `players_ibfk_3` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`id_nameLeague`) REFERENCES `leagues` (`id`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`id_statistic`) REFERENCES `statistics` (`id`),
  ADD CONSTRAINT `teams_ibfk_3` FOREIGN KEY (`id_president`) REFERENCES `presidents` (`id`),
  ADD CONSTRAINT `teams_ibfk_4` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
