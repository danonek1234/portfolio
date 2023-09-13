-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 13, 2023 at 08:16 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin` (
  `id_a` int(11) NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_a`, `haslo`) VALUES
(1, ''),
(2, '696969');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `omnie`
--

CREATE TABLE `omnie` (
  `id` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `zdjecie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `omnie`
--

INSERT INTO `omnie` (`id`, `tekst`, `zdjecie`) VALUES
(1, 'Witam jestem Oliwier, początkujący programista uczęszczający do CKZiU w Jaworznie. Moimi pasjami jest granie w League of Legends, kolekcjonowanie butów i wyrywanie mamy Tomasza Kania. Jestem pracowity i z chęcią podejmuje się nowych wyzwań.', 'IMG_3701.JPG');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projekty`
--

CREATE TABLE `projekty` (
  `id_p` int(11) NOT NULL,
  `tekst_p` text NOT NULL,
  `zdjecie_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projekty`
--

INSERT INTO `projekty` (`id_p`, `tekst_p`, `zdjecie_p`) VALUES
(1, 'Jako iż jestem początkującym programistą nie mam zbyt dużo projektów. Jednak mogę wyróżnić jeden z nich, a mianowicie FEETER. Jest to strona stworzona jako szkolny projekt. Miała ona przypominać portal społecznościowy. Jest ona w pełni sprawna i jest wykonana w językach php/html/css', 'feeter.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_a`);

--
-- Indeksy dla tabeli `omnie`
--
ALTER TABLE `omnie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `projekty`
--
ALTER TABLE `projekty`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `omnie`
--
ALTER TABLE `omnie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projekty`
--
ALTER TABLE `projekty`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
