-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2020 às 05:53
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(4) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dataEvento` date NOT NULL,
  `hora` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `presencial` varchar(3) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `titulo`, `descricao`, `dataEvento`, `hora`, `email`, `telefone`, `presencial`, `link`, `cep`, `rua`, `bairro`, `cidade`) VALUES
(1, 'Crítica Festival', 'Todas as bandas do mundo', '2020-08-31', '20:00:00', 'tomas@teste.com', '(55) 99999-9999', 'sim', NULL, '99999-000', 'Almeida Sanchez', 'Toner', 'Albertina'),
(2, 'Evento teste', 'descrição teste descrição', '2020-10-22', '22:00:00', 'teste@email.com', '(55) 99999-9999', 'nao', 'linkoaisj.oaijsoij/aoushuh1', '', '', '', ''),
(8, 'teste teste', 'teste tes sijsij', '2021-04-11', '12:00:00', 'teste@testeteste.com', '(33) 33333-3333', 'nao', 'linkoaisj.oaijsoij/aoushuh1', '', '', '', ''),
(9, 'aohua', 'oaij', '2023-10-22', '22:22:00', 'aoija@oiajoaj.com', '(44) 44444-4444', 'nao', 'linkoaisj.oaijsoij/aoushuh1', '', '', '', ''),
(10, 'barata fest', 'todas as baratas comestíveis', '2025-12-11', '21:00:00', 'baratasbaratas@teste.com', '(55) 22222-2222', 'nao', 'linkoaisj.oaijsoij/aoushuh1', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
