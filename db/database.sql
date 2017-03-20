-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mrt 2017 om 11:38
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeswebsite`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schoenen`
--

CREATE TABLE `schoenen` (
  `id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL DEFAULT '0',
  `maat` varchar(50) NOT NULL DEFAULT '0',
  `voorraad` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `schoenen`
--

INSERT INTO `schoenen` (`id`, `merk`, `maat`, `voorraad`) VALUES
(3, 'Nike Sport', '43', '23'),
(9, 'Nike Sport', '45', '13'),
(10, 'Puma Sport', '46', '30'),
(11, 'Puma Daily', '39', '20'),
(12, 'Puma Daily', '40', '20'),
(13, 'Nike Sport', '52', '32'),
(14, 'Bjorn Borg Fit', '42', '12'),
(15, 'Bjorn Borg sport', '39', '21'),
(16, 'Vans New Era', '42', '13'),
(17, 'Vans New Era', '43', '13'),
(24, 'Skechers Dames', '39', '9'),
(19, 'Adidas Sport', '45', '15'),
(20, 'Nike Sport', '42', '16'),
(21, 'Nike Airmax', '43', '13'),
(22, 'Nike Airmax', '42', '10'),
(23, 'Nike Airmax', '41', '30'),
(25, 'Skechers Dames', '38', '14'),
(26, 'Adidas Sport', '44', '15');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `schoenen`
--
ALTER TABLE `schoenen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `schoenen`
--
ALTER TABLE `schoenen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
