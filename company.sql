-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: St 02.Mar 2016, 14:33
-- Verzia serveru: 5.6.27-log
-- Verzia PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `company`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `b&c_1`
--

CREATE TABLE IF NOT EXISTS `b&c_1` (
  `id` int(11) NOT NULL,
  `value` double(10,2) NOT NULL,
  `tag` varchar(173) COLLATE utf8mb4_slovak_ci NOT NULL,
  `sort` varchar(173) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `b&c_1`
--

INSERT INTO `b&c_1` (`id`, `value`, `tag`, `sort`) VALUES
(1, 500.00, '500€', 'banknote'),
(2, 200.00, '200€', 'banknote'),
(3, 100.00, '100€', 'banknote'),
(4, 50.00, '50€', 'banknote'),
(5, 20.00, '20€', 'banknote'),
(6, 10.00, '10€', 'banknote'),
(7, 5.00, '5€', 'banknote'),
(8, 2.00, '2€', 'coin'),
(9, 1.00, '1€', 'coin'),
(10, 0.50, '50¢', 'coin'),
(11, 0.20, '20¢', 'coin'),
(12, 0.10, '10¢', 'coin'),
(13, 0.05, '5¢', 'coin'),
(14, 0.02, '2¢', 'coin'),
(15, 0.01, '1¢', 'coin');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `id` int(11) NOT NULL,
  `value` double(10,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `finance`
--

INSERT INTO `finance` (`id`, `value`) VALUES
(1, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(173) COLLATE utf8mb4_slovak_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `part` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `b&c_1`
--
ALTER TABLE `b&c_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_tag` (`tag`) USING BTREE,
  ADD UNIQUE KEY `UNIQUE_value` (`value`) USING BTREE;

--
-- Indexy pre tabuľku `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `b&c_1`
--
ALTER TABLE `b&c_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pre tabuľku `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pre tabuľku `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
