-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2020 às 19:33
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iad_milena`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crentes`
--

CREATE TABLE `crentes` (
  `id` int(11) NOT NULL,
  `nome` text CHARACTER SET utf8 NOT NULL,
  `endereco` text CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `menbro` varchar(11) NOT NULL,
  `batizado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `crentes`
--

INSERT INTO `crentes` (`id`, `nome`, `endereco`, `telefone`, `menbro`, `batizado`) VALUES
(6, 'ADÃO DE SOUSA CARVALHO', 'RUA 27, 674, MILENA', '2147483647', 'SIM', 'SIM'),
(7, 'GILVAN FERREIRA DE OLIVEIRA', 'RUA 2, 478, MILENA', '0', 'SIM', 'SIM'),
(8, 'ALTAMIR FERREIRA', 'RUA 17, 467, MILENA', '(63)3361-702', 'SIM', 'SIM');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crentes`
--
ALTER TABLE `crentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crentes`
--
ALTER TABLE `crentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
