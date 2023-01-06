-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 06 Sty 2023, 12:10
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `Studenci`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Studenci`
--

CREATE TABLE `Studenci` (
  `id_studenta` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `data_ur` date DEFAULT NULL,
  `plec` enum('Kobieta','Mężczyzna') DEFAULT NULL,
  `liczba_dzieci` tinyint(4) DEFAULT NULL,
  `czy_ma_samochod` tinyint(1) DEFAULT NULL,
  `pesel` varchar(11) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Studenci`
--

INSERT INTO `Studenci` (`id_studenta`, `imie`, `nazwisko`, `data_ur`, `plec`, `liczba_dzieci`, `czy_ma_samochod`, `pesel`, `login`, `haslo`) VALUES
(1, 'Ala', 'Kot', '2002-10-04', 'Kobieta', 0, 1, '00232509001', 'alaKot1', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Tomasz', 'Marzec', '2002-10-12', 'Mężczyzna', 2, 0, '00240506009', 'tomaszMarzecz12', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Agnieszka', 'Wardęga', '2002-10-12', 'Kobieta', 1, 1, '00240506009', 'agnieszkaWardega1', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Iwona', 'Madeja', '2002-10-12', 'Kobieta', 0, 1, '00240506009', 'iwonaMadeja5', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'Rafał', 'Kontowicz', '2002-10-12', 'Mężczyzna', 2, 1, '00240506009', 'rafalKontowicz1', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'Barbara', 'Piegat-Mayer', '2002-10-12', 'Kobieta', 4, 1, '00240506009', 'piegiBabs', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'Teresa', 'Wilk', '2002-10-12', 'Kobieta', 0, 0, '00240506009', 'wilcz', '5f4dcc3b5aa765d61d8327deb882cf99'),
(12, 'Wiola', 'Nowacka', '2000-09-23', 'Kobieta', 0, 1, '00240506009', 'wiolcia1111', '5f4dcc3b5aa765d61d8327deb882cf99'),
(13, 'Alicja', 'Stasiaczek', '2000-06-14', 'Kobieta', 1, 1, '00240506009', 'alkaStas', '5f4dcc3b5aa765d61d8327deb882cf99'),
(14, 'Andrzej', 'Jagoda', '2022-11-07', 'Mężczyzna', 4, 1, '00240506009', 'andrewJagoda', '5f4dcc3b5aa765d61d8327deb882cf99'),
(15, 'Lola', 'Mouth', '2002-10-12', 'Kobieta', 2, 1, '00240506009', 'lolaMouth', '5f4dcc3b5aa765d61d8327deb882cf99'),
(20, 'Mary', 'Kostuchna', '2002-10-12', 'Kobieta', 3, 1, '00240506009', 'maryKostuchna', '5f4dcc3b5aa765d61d8327deb882cf99'),
(21, 'Mark', 'Kostuchna', '2002-10-12', 'Mężczyzna', 3, 1, '00321603418', 'markKostuchna', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Studenci`
--
ALTER TABLE `Studenci`
  ADD PRIMARY KEY (`id_studenta`),
  ADD UNIQUE KEY `uniqueLogin` (`login`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `Studenci`
--
ALTER TABLE `Studenci`
  MODIFY `id_studenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
