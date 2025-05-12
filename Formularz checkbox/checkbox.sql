-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 12, 2025 at 04:23 PM
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
-- Database: `checkbox`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `checkboxy`
--
CREATE Database checkbox;
USE checkbox;
CREATE TABLE `checkboxy` (
  `IDC` int(11) NOT NULL,
  `Nazwa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkboxy`
--

INSERT INTO `checkboxy` (`IDC`, `Nazwa`) VALUES
(1, 'Trzaskowski'),
(2, 'Nawrocki'),
(3, 'Zandberg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `submit`
--

CREATE TABLE `submit` (
  `IDS` int(11) NOT NULL,
  `Output` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`IDS`, `Output`) VALUES
(1, ''),
(2, 'Nawrocki Zandberg '),
(3, 'Trzaskowski Nawrocki '),
(4, 'Trzaskowski Nawrocki '),
(5, 'Trzaskowski Nawrocki '),
(6, 'Trzaskowski Nawrocki '),
(7, 'Zandberg '),
(8, 'Zandberg ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `checkboxy`
--
ALTER TABLE `checkboxy`
  ADD PRIMARY KEY (`IDC`);

--
-- Indeksy dla tabeli `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`IDS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkboxy`
--
ALTER TABLE `checkboxy`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
