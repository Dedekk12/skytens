-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2026 às 14:56
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_skytens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conjunto`
--

CREATE TABLE `conjunto` (
  `id_conjunto` int(11) NOT NULL,
  `nome_conjunto` varchar(120) NOT NULL,
  `armadura` varchar(120) NOT NULL,
  `arma` varchar(120) NOT NULL,
  `pocao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `fisico` float NOT NULL,
  `mental` float NOT NULL,
  `genero` varchar(1) NOT NULL,
  `vigor` float NOT NULL,
  `mana` float NOT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_poder` int(11) NOT NULL,
  `id_raca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `poder`
--

CREATE TABLE `poder` (
  `id_poder` int(11) NOT NULL,
  `nome_poder` varchar(70) NOT NULL,
  `custo` int(11) NOT NULL,
  `tempo_espera` int(11) NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `duracao` varchar(5) NOT NULL,
  `id_raca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

CREATE TABLE `raca` (
  `id_raca` int(11) NOT NULL,
  `nome_raca` int(11) NOT NULL,
  `habilidade` varchar(120) NOT NULL,
  `bonus_incial` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conjunto`
--
ALTER TABLE `conjunto`
  ADD PRIMARY KEY (`id_conjunto`);

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`),
  ADD KEY `id_conjunto` (`id_conjunto`),
  ADD KEY `id_poder` (`id_poder`),
  ADD KEY `id_raca_fk` (`id_raca`);

--
-- Índices para tabela `poder`
--
ALTER TABLE `poder`
  ADD PRIMARY KEY (`id_poder`),
  ADD KEY `id_raca` (`id_raca`);

--
-- Índices para tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id_raca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conjunto`
--
ALTER TABLE `conjunto`
  MODIFY `id_conjunto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `poder`
--
ALTER TABLE `poder`
  MODIFY `id_poder` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `personagem`
--
ALTER TABLE `personagem`
  ADD CONSTRAINT `id_conjunto` FOREIGN KEY (`id_conjunto`) REFERENCES `conjunto` (`id_conjunto`),
  ADD CONSTRAINT `id_poder` FOREIGN KEY (`id_poder`) REFERENCES `poder` (`id_poder`),
  ADD CONSTRAINT `id_raca_fk` FOREIGN KEY (`id_raca`) REFERENCES `raca` (`id_raca`);

--
-- Limitadores para a tabela `poder`
--
ALTER TABLE `poder`
  ADD CONSTRAINT `id_raca` FOREIGN KEY (`id_raca`) REFERENCES `raca` (`id_raca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
