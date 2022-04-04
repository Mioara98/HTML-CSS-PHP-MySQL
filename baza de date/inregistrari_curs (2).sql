-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 18, 2021 la 10:33 AM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `curs it`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `inregistrari_curs`
--

CREATE TABLE `inregistrari_curs` (
  `Id` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Prenume` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `unitate_militara` varchar(100) NOT NULL,
  `cnp` varchar(13) NOT NULL,
  `denumire_curs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `inregistrari_curs`
--

INSERT INTO `inregistrari_curs` (`Id`, `Nume`, `Prenume`, `Email`, `telefon`, `unitate_militara`, `cnp`, `denumire_curs`) VALUES
(1, 'Bucur', 'Florin', 'buflorin@yahoo.com', '075896565', '01232', '9856000235667', 'Curs Cyber Essentials'),
(2, 'Sterie', 'Mioara', 'mioara_sterie@yahoo.com', '07589654458', '01236', '1256987456245', 'Retele WAN'),
(3, 'Ion', 'Elena', 'elena@yahoo.com', '0758945874', '01457', '58896647856', 'Introducere Linux');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `inregistrari_curs`
--
ALTER TABLE `inregistrari_curs`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `inregistrari_curs`
--
ALTER TABLE `inregistrari_curs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
