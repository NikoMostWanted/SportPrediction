-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 01:11 AM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

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

CREATE TABLE IF NOT EXISTS `coachs` (
  `id` int(11) NOT NULL,
  `name` char(255) COLLATE utf8_bin NOT NULL,
  `surname` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE IF NOT EXISTS `leagues` (
  `id` int(11) NOT NULL,
  `nameLeague` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `presidents`
--

CREATE TABLE IF NOT EXISTS `presidents` (
  `id` int(11) NOT NULL,
  `name` char(255) COLLATE utf8_bin NOT NULL,
  `surname` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `games` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `missing` int(11) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL,
  `id_nameLeague` int(11) NOT NULL,
  `nameTeam` char(255) COLLATE utf8_bin NOT NULL,
  `icon` blob NOT NULL,
  `foundationYear` int(11) NOT NULL,
  `field` char(255) COLLATE utf8_bin NOT NULL,
  `id_coach` int(11) NOT NULL,
  `id_president` int(11) NOT NULL,
  `id_statistic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameLeagueIndex` (`nameLeague`);

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
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`id_nameLeague`) REFERENCES `leagues` (`id`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id`),
  ADD CONSTRAINT `teams_ibfk_3` FOREIGN KEY (`id_president`) REFERENCES `presidents` (`id`),
  ADD CONSTRAINT `teams_ibfk_4` FOREIGN KEY (`id_statistic`) REFERENCES `statistics` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;