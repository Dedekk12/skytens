-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/09/2026 às 09:28
-- Versão do servidor: 8.0.46-0ubuntu0.24.04.4
-- Versão do PHP: 8.3.6

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
-- Estrutura para tabela `conjunto`
--

CREATE TABLE `conjunto` (
  `id_conjunto` int NOT NULL,
  `nome_conjunto` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `armadura` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `arma` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `pocao` varchar(120) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conjunto`
--

INSERT INTO `conjunto` (`id_conjunto`, `nome_conjunto`, `armadura`, `arma`, `pocao`) VALUES
(1, 'Herança de Agathys', 'Armadura de Agathys', 'Foice de Nerull', 'Fragmentos de gelo negro'),
(2, 'Tesouros do Herói ganancioso', 'Armadura dos 7 reinos', 'Alabarda de Runemita', 'Sangue de Weishdrak');

-- --------------------------------------------------------

--
-- Estrutura para tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int NOT NULL,
  `nome` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `fisico` float NOT NULL,
  `mental` float NOT NULL,
  `genero` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `id_conjunto` int NOT NULL,
  `id_poder` int NOT NULL,
  `id_raca` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `personagem`
--

INSERT INTO `personagem` (`id_personagem`, `nome`, `fisico`, `mental`, `genero`, `id_conjunto`, `id_poder`, `id_raca`) VALUES
(1, 'Angelo', 9999, 10, 'M', 1, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `poder`
--

CREATE TABLE `poder` (
  `id_poder` int NOT NULL,
  `nome_poder` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `custo` int NOT NULL,
  `tempo_espera` int NOT NULL,
  `descricao` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `duracao` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `poder`
--

INSERT INTO `poder` (`id_poder`, `nome_poder`, `custo`, `tempo_espera`, `descricao`, `duracao`) VALUES
(1, 'Bola de fogo', 15, 60, 'Ideal para fazer pipoca.', '0'),
(2, 'Playlist', -1, 120, 'toca musicas boas', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `raca`
--

CREATE TABLE `raca` (
  `id_raca` int NOT NULL,
  `nome_raca` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `habilidade` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `bonus_inicial` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `raca`
--

INSERT INTO `raca` (`id_raca`, `nome_raca`, `habilidade`, `bonus_inicial`) VALUES
(1, 'Elfos', 'Conexão espiritual. Permite a comunicação com espíritos e acesso a magias.', '+1 Magia espiritual\r\n+5 afinidade com luz;\r\n+3 afinidade com vento;'),
(2, 'Anã', 'Mestre em geomancia.Previsão e manipulação de rochas.', '+5 de afinidade com  terra;\r\n+3 de afinidade com fogo;\r\n+Maestria com equipamentos de artesão;'),
(3, 'Plasmoises', 'Liquefação. Mobilidade e liquidade grande.', '+5 Afinidade com agua\r\n+3 Afinidade com sombra\r\n+1 Devorar');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conjunto`
--
ALTER TABLE `conjunto`
  ADD PRIMARY KEY (`id_conjunto`);

--
-- Índices de tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`),
  ADD KEY `id_conjunto` (`id_conjunto`),
  ADD KEY `id_poder` (`id_poder`),
  ADD KEY `id_raca_fk` (`id_raca`);

--
-- Índices de tabela `poder`
--
ALTER TABLE `poder`
  ADD PRIMARY KEY (`id_poder`);

--
-- Índices de tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id_raca`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conjunto`
--
ALTER TABLE `conjunto`
  MODIFY `id_conjunto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `poder`
--
ALTER TABLE `poder`
  MODIFY `id_poder` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `personagem`
--
ALTER TABLE `personagem`
  ADD CONSTRAINT `id_conjunto` FOREIGN KEY (`id_conjunto`) REFERENCES `conjunto` (`id_conjunto`),
  ADD CONSTRAINT `id_poder` FOREIGN KEY (`id_poder`) REFERENCES `poder` (`id_poder`),
  ADD CONSTRAINT `id_raca_fk` FOREIGN KEY (`id_raca`) REFERENCES `raca` (`id_raca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
