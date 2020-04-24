-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 24, 2020 alle 17:02
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioraio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `opportunity_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `opportunity_id`, `price`, `quantity`, `created`, `modified`) VALUES
(1, 'Iris', 1, 1.98, 10, '2020-04-24 14:29:43', '2020-04-24 14:29:43'),
(2, 'Margherita', 1, 1, 15, '2020-04-24 14:34:33', '2020-04-24 14:34:33'),
(3, 'Rosa', 2, 3, 50, '2020-04-24 14:35:37', '2020-04-24 14:35:37');

-- --------------------------------------------------------

--
-- Struttura della tabella `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `opportunities`
--

INSERT INTO `opportunities` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Compleanno', 'L\'usanza di celebrare la propria data di nascita ha origine da antiche usanze pagane, che, per l\'occasione, erano soliti fare gli auguri al festeggiato nell\'intento di proteggerlo dalle forze del male e di auspicare per lui salute e sicurezza per l\'ulteriore anno che stava per iniziare.', '2020-04-24 14:29:26', '2020-04-24 14:29:26'),
(2, 'Matrimonio', 'Il matrimonio è un negozio giuridico che indica l\'unione fra due o più persone, a fini civili, religiosi o ad entrambi i fini e che di norma viene celebrato attraverso una cerimonia pubblica detta nozze, comportando diritti e obblighi fra gli sposi e nei confronti dell\'eventuale prole.', '2020-04-24 14:35:10', '2020-04-24 14:35:10');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opportunity_id` (`opportunity_id`);

--
-- Indici per le tabelle `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
