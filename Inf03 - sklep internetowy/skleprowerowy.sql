-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 09:42 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skleprowerowy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rowery`
--

CREATE TABLE `rowery` (
  `idr` int(11) NOT NULL,
  `nazwa` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `typ` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rowery`
--

INSERT INTO `rowery` (`idr`, `nazwa`, `url`, `typ`) VALUES
(1, 'bike1', 'https://rowerycube.pl/22616-medium_default/rower-cube-602100-analog.jpg', 'gorski'),
(2, 'bajk2', 'https://rowerycube.pl/22457-medium_default/rower-cube-601500-aim-slx.jpg', 'gorski'),
(3, 'bikeTrzy', 'https://rowerycube.pl/22487-medium_default/rower-cube-603100-attention.jpg', 'gorski'),
(4, 'rower1', 'https://rowery-indiana.pl/files/rowery/full/miejskie-1%201.png', 'miejski'),
(5, 'lowel2', 'https://prod-api.mediaexpert.pl/api/images/gallery_500_500/thumbnails/images/33/3302881/INDIANA-Moena-A7B-28-cali-damski-Czarny-skos.jpg', 'miejski'),
(6, 'rowerThree', 'https://prod-api.mediaexpert.pl/api/images/gallery/thumbnails/images/20/2027945/Rower-miejski-INDIANA-Moena-A3B-Mietowy-skos-prawy.jpg', 'miejski'),
(7, 'Skończyły mi', 'https://immotion.pl/10924-large_default/rower-elektryczny-giant-stormguard-e-3-2025.jpg', 'elektryk'),
(8, 'Się pomysły na', 'https://mocnerowery.pl/imgcache/9a232f03a3837fc06d1d81ba56f114d5/GHOST_E_ASX_160_Essential.jpg', 'elektryk'),
(9, 'Nazwy rowerów', 'https://cdn.ecobike.com/s/BasicBlack/Basic_Black_2023/1677840220714-1.jpg', 'elektryk');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rowery`
--
ALTER TABLE `rowery`
  ADD PRIMARY KEY (`idr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rowery`
--
ALTER TABLE `rowery`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
