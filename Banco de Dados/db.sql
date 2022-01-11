-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 11-Jan-2022 às 07:08
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Oname` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `Oemail` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `Ophone` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `Odocument` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `Obirth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_addressouser_id`
--

CREATE TABLE `users_addressouser_id` (
  `Oaddress` text COLLATE utf8_croatian_ci NOT NULL,
  `Onunber` int(50) NOT NULL,
  `Ocomplament` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  `Odistrict` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `Ocity` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  `Ostate` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  `OId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users_addressouser_id`
--
ALTER TABLE `users_addressouser_id`
  ADD PRIMARY KEY (`OId`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users_addressouser_id`
--
ALTER TABLE `users_addressouser_id`
  MODIFY `OId` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
