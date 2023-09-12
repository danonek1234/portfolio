-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Wrz 12, 2023 at 07:04 PM
-- Wersja serwera: 10.6.15-MariaDB-cll-lve
-- Wersja PHP: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patyk_portfolio`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `omnie`
--

CREATE TABLE `omnie` (
  `id` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `zdjecie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `omnie`
--

INSERT INTO `omnie` (`id`, `tekst`, `zdjecie`) VALUES
(1, 'Jestem uczniem 3 klasy technikum na profilu technik programista, mam na imię Oliwier. Moimi pasjami są granie w League of Legends jak i również kolekcjonowanie butów. Staram się również rozwijać jako programista. W tym roku moim celem jest wyrzeźbienie sylwetki i rozwinięcie się jako programista.\r\nbaliniak to pedal', 'IMG_3701.JPG');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projekty`
--

CREATE TABLE `projekty` (
  `id_p` int(11) NOT NULL,
  `tekst_p` text NOT NULL,
  `zdjecie_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `projekty`
--

INSERT INTO `projekty` (`id_p`, `tekst_p`, `zdjecie_p`) VALUES
(1, 'Jako iż jestem początkującym programistą nie mam zbyt dużo projektów. Jednak mogę wyróżnić jestem z nich, a mianowicie FEETER. Jest to strona stworzona jako szkolny projekt. Miała ona przypominać portal społecznościowy. Jest ona w pełni sprawna i jest wykonana w językach php/html/css', 'feeter.png');

--
-- Indeksy dla zrzutów tabel
--

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

