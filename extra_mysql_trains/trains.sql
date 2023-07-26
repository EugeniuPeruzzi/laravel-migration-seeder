-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Lug 26, 2023 alle 20:06
-- Versione del server: 8.0.33
-- Versione PHP: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trains`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `trains`
--

CREATE TABLE `trains` (
  `id` bigint UNSIGNED NOT NULL,
  `azienda` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stazione_di_partenza` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stazione_di_arrivo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orario_di_partenza` time NOT NULL,
  `orario_di_arrivo` time NOT NULL,
  `codice_treno` smallint NOT NULL,
  `numero_carrozze` tinyint NOT NULL,
  `in_orario` tinyint(1) NOT NULL,
  `cancellato` tinyint(1) NOT NULL,
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_odierna` date NOT NULL DEFAULT '2023-07-26'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `trains`
--

INSERT INTO `trains` (`id`, `azienda`, `stazione_di_partenza`, `stazione_di_arrivo`, `orario_di_partenza`, `orario_di_arrivo`, `codice_treno`, `numero_carrozze`, `in_orario`, `cancellato`, `data`, `created_at`, `updated_at`, `data_odierna`) VALUES
(1, 'Italo', 'Napoli Stazione', 'Mosca Stazione', '13:16:00', '22:19:00', 552, 12, 1, 0, '2023-05-04', NULL, NULL, '2023-07-26'),
(2, 'Treni Italia', 'Milano Porta Nuova', 'Venezia ', '12:27:19', '16:27:19', 8551, 12, 1, 0, '2023-07-10', NULL, NULL, '2023-07-26'),
(3, 'FlixTrains', 'Vienna', 'Linate', '13:52:00', '22:30:00', 789, 30, 1, 0, '2023-05-09', NULL, NULL, '2023-07-26'),
(4, 'TrainVerona', 'Verona', 'Hongkong', '09:45:00', '19:00:00', 963, 5, 0, 1, '2023-03-15', NULL, NULL, '2023-07-26'),
(5, 'Italo Oggi', 'Verona', 'Padova', '15:52:00', '16:12:00', 741, 32, 1, 1, '2023-07-26', NULL, NULL, '2023-07-26'),
(6, 'Italo Oggi', 'Venezia', 'Roma', '18:52:00', '20:12:00', 321, 23, 1, 0, '2023-07-26', NULL, NULL, '2023-07-26'),
(7, 'BoolTrains', 'Brescia ', 'Vicenza', '07:33:00', '16:52:00', 554, 7, 1, 0, '2023-07-27', NULL, NULL, '2023-07-26');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `trains`
--
ALTER TABLE `trains`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
