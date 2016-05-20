-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 19 mei 2016 om 17:49
-- Serverversie: 5.6.21
-- PHP-versie: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `unittest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
`item_id` int(11) NOT NULL,
  `sortering` int(11) NOT NULL,
  `vdl_nr` varchar(150) NOT NULL,
  `manufacturer_manufacturer_id` int(11) NOT NULL,
  `supplier_nr` int(150) NOT NULL,
  `supplier_supplier_id` int(11) NOT NULL,
  `item_desc` varchar(355) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `detailed_desc` varchar(355) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
`site_id` int(11) NOT NULL,
  `operator` varchar(12) NOT NULL DEFAULT 'Vodafone',
  `build_request_nr` int(11) DEFAULT NULL,
  `location_location_id` int(11) NOT NULL,
  `site_number` varchar(12) NOT NULL,
  `street` varchar(62) NOT NULL,
  `street_number` varchar(5) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `place` varchar(35) NOT NULL,
  `contractors_contractor_id` int(11) NOT NULL,
  `contractor_contactperson` varchar(52) NOT NULL,
  `contractor_phone` int(11) NOT NULL,
  `contractor_email` varchar(72) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `delivery_time` datetime NOT NULL,
  `delivery_street` varchar(62) NOT NULL,
  `delivery_street_number` varchar(7) NOT NULL,
  `delivery_postal_code` varchar(7) NOT NULL,
  `delivery_place` varchar(35) NOT NULL,
  `transport_transport_id` int(11) NOT NULL,
  `rush` tinyint(1) NOT NULL,
  `site_engineer` varchar(52) NOT NULL,
  `site_engineer_phone` int(11) NOT NULL,
  `site_engineer_email` varchar(72) NOT NULL,
  `date_approved_sen` datetime NOT NULL,
  `date_approved_logistics` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `site`
--

INSERT INTO `site` (`site_id`, `operator`, `build_request_nr`, `location_location_id`, `site_number`, `street`, `street_number`, `postal_code`, `place`, `contractors_contractor_id`, `contractor_contactperson`, `contractor_phone`, `contractor_email`, `delivery_date`, `delivery_time`, `delivery_street`, `delivery_street_number`, `delivery_postal_code`, `delivery_place`, `transport_transport_id`, `rush`, `site_engineer`, `site_engineer_phone`, `site_engineer_email`, `date_approved_sen`, `date_approved_logistics`) VALUES
(1, 'Vodafone', 1234, 5, '1234-b', 'Disseroltwerg', '9', '7635 NE', 'Lattrop', 1, 'Jochem Hendriks', 639481922, 'j.hendriks.hendriks', '2016-03-16 00:00:00', '2016-03-10 00:00:00', 'Disseroltweg', '9', '7635 NE', 'Lattrop', 1, 0, 'Floyd malone', 639481922, 'flod@malone.floydmalone', '2016-03-09 00:00:00', '2016-03-13 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `site_item_relation`
--

DROP TABLE IF EXISTS `site_item_relation`;
CREATE TABLE IF NOT EXISTS `site_item_relation` (
`id` int(11) NOT NULL,
  `site_site_id` int(11) NOT NULL,
  `item_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`users_id` int(11) NOT NULL,
  `email` varchar(72) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `permissions` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`users_id`, `email`, `password`, `salt`, `first_name`, `last_name`, `permissions`) VALUES
(1, 'lars@larsrasmussen.nl', '$2y$10$7oxRmKStx5OkRBG7iF8s1.OVF.7saG/zTYauVEbC2nzPIExZ/1OZO', '', 'hallo', 'hallo', '1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexen voor tabel `site`
--
ALTER TABLE `site`
 ADD PRIMARY KEY (`site_id`);

--
-- Indexen voor tabel `site_item_relation`
--
ALTER TABLE `site_item_relation`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `site`
--
ALTER TABLE `site`
MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `site_item_relation`
--
ALTER TABLE `site_item_relation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
